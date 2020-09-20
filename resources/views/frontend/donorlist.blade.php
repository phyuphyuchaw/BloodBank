@extends('frontendtemplate')
@section('content')
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true"  style="height: 100px">
{{--           <div class="col-md-6 pt-5 ftco-animate"> --}}
 <div class="col-md-6 t-5">
     <h5 class="h3 mb-0 text-danger text-uppercase">Total Blood Unit Available:</h5>

 <form action="{{route('home') }}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="row">
    	<div class="col-md-6">
    		<table class="table table-condensed">
    			<thead class="table-light text-uppercase text-danger">
    				<tr>
    					<th>No</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
{{--                         <th>BloodGroup</th>
 --}}                        <th>Phone</th>
                        <th>Address</th>
                        <th>Photo</th>

                    </tr>
                </thead>
                <tbody class="text-danger">
                    @php $i=1; @endphp
                    @foreach($donors as $donor)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$donor->user->name}}</td>
                        <td>{{$donor->age}}</td>
                        <td>{{$donor->gender}}</td>
{{--                         <td>{{$donor->bloodgroup}}</td>
 --}}                        <td>
                            <a href="#" class="text-danger">{{$donor->phone}}</a></td>
                            <td>{{$donor->address}}</td>
                            <td><img src="{{asset($donor->photo)}}" width=100 height=100></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

</form>
</div>
</div>
</div>
@endsection