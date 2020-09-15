@extends('frontendtemplate')
@section('content')
  <!-- Subcategory Title -->
  {{-- <div class="jumbotron jumbotron-fluid subtitle"> --}}
      <div class="container-fluid">
        <h1 class="text-center text-dark"> JOIN AS BLOOD DONOR </h1>
      </div>
 {{--  </div> --}}
  
  <!-- Content -->
  
      
  <div class="container my-5">

    <div class="row justify-content-center">
      <div class="col-8">
        <form action="{{route('registerpage')}}" method="POST">
        	@csrf
              <div class="form-group">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputName"> Username</label>
                              <input class="form-control py-4 @error('name') is-invalid @enderror" id="inputName" type="text" placeholder="Enter Name" name="name" value="{{ old('name')}}" required autocomplete="name" autofocus />
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                              	<strong>{{$message}}</strong>
                              </span>
                              @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="age"> Age</label>
                              <input class="form-control py-4" id="age" type="text" placeholder="Enter Age " name="age" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="gender"> Gender:</label>
                              <br>
                              {{-- <form action=""> --}}
                                <input type="radio" name="gender" value="male"> Male
                                <input type="radio" name="gender" value="female"> Female
                        {{--     </form>
 --}}                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="blood-select">Blood Type:</label>
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
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="phone">Phone Number</label>
                              <input class="form-control py-4 @error('phone') is-invalid @enderror" id="phone" type="text" placeholder="Enter Phone Number" name="phone" value="{{old('phone')}}" required autocomplete="phone" autofocus />
                              @error('phone')
                              <span class="invalid-feedback" role="alert">
                              	<strong>{{$message}}</strong>
                              </span>
                              @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                              <input class="form-control py-4 @error('email') is-invalid @enderror" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" value="{{old('email')}}" required autocomplete="email" />
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                              	<strong>{{$message}}</strong>
                              </span>
                              @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="address"> Address </label>
                              <textarea class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="name" autofocus>{{old('address')}}</textarea>
                              @error('address')
                              <span class="invalid-feedback" role="alert">
                              	<strong>{{$message}}</strong>
                              </span>
                              @enderror
                            </div>
                        </div>
                        
					  <div class="form-group">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputPassword">Password</label>
                              <input class="form-control py-4 @error('password') is-invalid @enderror" id="inputPassword" type="password" placeholder="Enter password" name="password" required autocomplete="new-password" />
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                              	<strong>{{$message}}</strong>
                              </span>
                              @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                              <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password" />                        </div>
                        </div>
                    </div>

                    
              
              <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                
                <button type="submit" class="btn btn-secondary mainfullbtncolor btn-block"> Create Account </button>
              </div>
          </form>

          <div class=" mt-3 text-center ">
            <a href="#" class="loginLink text-decoration-none">Have an account? Go to login</a>
          </div>
      </div>
    </div>

  </div>
@endsection