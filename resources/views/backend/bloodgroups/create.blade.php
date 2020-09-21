@extends('backendtemplate')
@section('content')
<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
            <div class="col">
            <h1 class="h3 mb-0 text-gray-800">Bloodgroup Create</h1>  
        </div>
    </div>
</div>
    <form action="{{ route('bloodgroups.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Bloodgroup</label>
        <div class="col-sm-6">
          <input type="text" name="bloodgroup">
         </div>
        @error('bloodgroup')
      <label class="text-danger">Please choose !</label>
      @enderror
        </div>

{{--       <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Unit </label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="" name="unit">
        @error('unit')
      <label class="text-danger">Please input  !</label>
      @enderror
      </div>
    </div>
     --}}

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </div>
  </form>
</div>
@endsection