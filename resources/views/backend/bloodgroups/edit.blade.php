 @extends('backendtemplate')
@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="row">
      <div class="col">
        <h1 class="h3 mb-0 text-gray-800">Bloodgroup Edit</h1>


      </div>
    </div>
  </div>

  <form action="{{ route('bloodgroups.update',$bloodgroup->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Bloodgroup</label>
      <div class="col-sm-6">
       <input type="text" name="bloodgroup" value="{{$bloodgroup->bloodgroup}}">
        </div>
      </div>


{{--       <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Unit</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="" name="unit" value="{{ $bloodgroup->unit }}">
        </div>
      </div>
 --}}

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>
  @endsection