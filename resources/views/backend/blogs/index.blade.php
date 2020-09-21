@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
         
            <div class="col">
            <h1 class="h3 mb-0 text-danger">Blog</h1>
            <div class="float-right align-items-right justify-content-between mb-4">
            <a href="{{route('blogs.create')}}" class="btn btn-danger">Add New</a>

            
        </div>
    </div>
</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="bg-danger">
    				<tr>
    					<th>No</th>
    					<th>Photo</th>
    					<th>Head Line</th>
                        <th>Post</th>
                        <th>Action</th>

    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($blogs as $blog)
    				<tr>
    					<td>{{$i++}}</td>
    					<td><img src="{{asset($blog->photo)}}" width=100 height=100></td>
                        <td>{{$blog->headline}}</td>
                        <td>{{$blog->post}}</td>
                        <td>
    						<a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-warning">Edit</a>
                            
                            <form method="post" action="{{route('blogs.destroy',$blog->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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