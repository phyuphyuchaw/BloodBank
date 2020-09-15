@extends('backendtemplate')
@section('content')
<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
            <div class="col">
            <h1 class="h3 mb-0 text-gray-800">Blog Edit</h1>
            

        </div>
    </div>
</div>

<form action="{{ route('blogs.update',$blog->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <input type="hidden" name="oldphoto" id="" value="{{ $blog->photo }}">

    

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-6">
          <input type="file" class="form-control-file" id="" name="photo"><br>
          <img src="{{ asset($blog->photo) }}" alt="" width="100" height="100">
        </div>
      </div>

      <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Head Line</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="" name="headline" value="{{ $blog->headline }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Posts</label>
      <div class="col-sm-6">
      <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message">{{$blog->post}}</textarea>
    </div>
    </div>

      
    
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </form>
</div>
@endsection