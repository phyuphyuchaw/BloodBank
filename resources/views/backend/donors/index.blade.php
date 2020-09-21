@extends('backendtemplate')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12 mb-3">
          <h1 class="h3 mb-0 d-inline-block text-danger">Donors Register</h1>
          {{--     		<a href="{{route('donors.create')}}" class="btn btn-info float-right">Add New</a> --}}
      </div>
  </div>

  <div class="row">
     <div class="col-md-12">
      <table class="table table-bordered">
       <thead class="bg-danger text-light">
        <tr>
         <th>No</th>
         <th>User_id</th>
         <th>Age</th>
         <th>Gender</th>
         <th>BloodGroup</th>
         <th>Phone</th>
         <th>Address</th>
         <th>Photo</th>
         <th>Action</th>

     </tr>
 </thead>
 <tbody>
    @php $i=1; @endphp
    @foreach($donors as $donor)
    <tr>
     <td>{{$i++}}</td>
     <td>{{$donor->user->name}}</td>
     <td>{{$donor->age}}</td>
     <td>{{$donor->gender}}</td>
     <td>{{$donor->bloodgroup}}</td>
     <td>{{$donor->phone}}</td>
     <td>{{$donor->address}}</td>
     <td><img src="{{asset($donor->photo)}}" width=100 height=100></td>
     <td>
       @role('Donor')
        @if($donor->status == 1 )
        <button class="btn btn-success btn_unavailable" data-donor_id="{{$donor->id}}">Available</button>

        @elseif($donor->status == 0 )
        <button class="btn btn-danger btn_available" data-donor_id="{{$donor->id}}">Unavailable</button>   
        @endif
        @endrole



    </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

</div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.btn_unavailable').click(function(){
            var donor_id = $(this).data('donor_id');
           // alert(donor_id);
           $.post('/donor_unavailable',{donor_id:donor_id},function(res){
            if(res){
             location.reload();

         }
     })
       })

        $('.btn_available').click(function(){
            var donor_id = $(this).data('donor_id');
           // alert(donor_id);
           $.post('/donor_available',{donor_id:donor_id},function(){
             location.reload();
         })
       })
    })
</script>
@endsection