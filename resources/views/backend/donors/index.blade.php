@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Donors Register</h1>
    		{{-- <a href="{{route('items.create')}}" class="btn btn-info float-right">Add New</a> --}}
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>User_id</th>
    					<th>Age</th>
    					<th>Gender</th>
                        <th>BloodGroup</th>
                        <th>Phone</th>
                        <th>Email</th>
    					<th>Address</th>
                        <th>Profile</th>
                        <th>Posting_date</th>
                        <th>Action</th>

    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($donors as $donor)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$donor->user->id}}</td>
    					<td>{{$donor->age}}</td>
    					<td>{{$donor->gender}}</td>
                        <td>{{$donor->bloodgroup}}</td>
                        <td>{{$donor->phone}}</td>
                        <td>{{$donor->email}}</td>
                        <td>{{$donor->address}}</td>
                        <td>{{$donor->profile}}</td>
                        <td>{{$donor->posting_date}}</td>
    					<td>
    						{{-- <a href="#" class="btn btn-primary">Detail</a>
    						<a href="#" class="btn btn-warning">Edit</a> --}}
                            <form method="post" action="{{route('donors.destroy',$donor->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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