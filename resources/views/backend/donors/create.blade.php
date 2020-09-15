@extends('backendtemplate')
@section('content')
<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
            <div class="col">
            <h1 class="h3 mb-0 text-gray-800">Donor Create</h1>
        </div>
    </div>
</div>
    <form action="{{route('donors.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-5">
      <input type="text" name="name" id="">
      @error('name')
      <label class="text-danger">Please input Name !</label>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Age</label>
    <div class="col-sm-5">
      <input type="text" name="age" id="">
      @error('age')
      <label class="text-danger">Please input Age !</label>
      @enderror
    </div>
  </div>

<div class="form-group row">
    <label  class="col-sm-2 col-form-label">Gender:</label>
    <div class="col-sm-5">
     
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      @error('gender')
      <label class="text-danger">Please input Name !</label>
      @enderror
    
    </div>
  </div>


<div class="form-group row">
    <label  class="col-sm-2 col-form-label">Bloodgroup:</label>
    <div class="col-sm-5">
      <select id="blood-select">
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
    @error('gender')
      <label class="text-danger">Please input !</label>
      @enderror
    </div>
</div>


     <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-6">
          <input type="text" id="" name="phone">
        @error('phone')
      <label class="text-danger">Please input Phone Number !</label>
      @enderror
        </div>
      </div>

          <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-6">
          <input type="text" id="" name="email">
        @error('email')
      <label class="text-danger">Please input Email !</label>
      @enderror
        </div>
      </div>


     <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-6">
          <textarea  name="address"></textarea>
        @error('photo')
      <label class="text-danger">Please input Address !</label>
      @enderror
        </div>
      </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-6">
        <input type="file" class="form-control-file" id="" name="photo">
        @error('photo')
      <label class="text-danger">Please input choose Photo !</label>
      @enderror
        </div>
      </div>
    

    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Posting_date</label>
      <div class="col-sm-6">
        <input type="text"  id="" name="postingdate">
        @error('postingdate')
      <label class="text-danger">Please input !</label>
      @enderror
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </div>
  </form>
</div>
@endsection