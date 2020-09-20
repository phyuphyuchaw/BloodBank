@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
         
            <div class="col">
            <h1 class="h3 mb-0 text-danger">BloodGroup</h1>
            <div class="float-right align-items-right justify-content-between mb-4">
            <a href="{{route('bloodgroups.create')}}" class="btn btn-danger">Add New</a>

            
        </div>
    </div>
</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="bg-danger text-light">
    				<tr>
    					<th>No</th>
    					<th>Bloodgroup</th>
                        <th>Action</th>

    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($bloodgroups as $bloodgroup)
    				<tr>
    					<td>{{$i++}}</td>
                        <td>{{$bloodgroup->bloodgroup}}</td>

                        <td>
                            
    						<a href="{{route('bloodgroups.edit',$bloodgroup->id)}}" class="btn btn-success">Edit</a>
                            
                            <form method="post" action="{{route('bloodgroups.destroy',$bloodgroup->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
    					</td>
    				</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>

 	</div>
@endsection