@extends('backendtemplate')
@section('content')
<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
            <div class="col">
            <h1 class="h3 mb-0 text-gray-800">Donors Edit</h1>            
        </div>
    </div>
</div>

<form action="{{ route('donors.update',$donor->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <input type="hidden" name="oldphoto" id="" value="{{ $donor->photo }}">

      <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Name:</label>
      <div class="col-sm-6">
        <input type="text"  id="" name="name" value="{{ $donor->name }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Age:</label>
      <div class="col-sm-6">
        <input type="text" id="" name="age" value="{{ $donor->age }}">
      </div>
    </div>

    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Gender:</label>
    <div class="col-sm-5" value="{{ $donor->gender }}">
     
      <input type="radio" name="gender" value="male" > Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      
      </div>
    </div>



<div class="form-group row">
    <label  class="col-sm-2 col-form-label">Bloodgroup:</label>
    <div class="col-sm-5">
      <select id="blood-select" value="{{ $donor->bloodgroup}}">
      <optgroup label="RH+">
      <option>A+</option>
      <option>B+</option>
      <option>O+</option>
      <option>AB+</option>
      </optgroup>
      <optgroup label="RH-">
      <option>A-</option>
      <option>B-</option>
      <option>O-</option>
      <option>AB-</option>
     </optgroup>
    </select>
    
      </div>
    </div>

    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Phone</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="" name="phone" value="{{ $donor->phone }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="" name="email" value="{{ $donor->email }}">
      </div>
    </div>


    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-6">
        <textarea name="address">{{$donor->address}}</textarea>
      </div>
    </div>

    

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-6">
          <input type="file" class="form-control-file" id="" name="photo"><br>
          <img src="{{ asset($donor->photo) }}" alt="" width="100" height="100">
        </div>
      </div>

      <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Posting_date</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="" name="postingdate" value="{{ $donor->postingdate }}">
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