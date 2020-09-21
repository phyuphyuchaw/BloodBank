@extends('frontendtemplate')
@section('content')
<section class="ftco-section contact-section" id="contact-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">

      </div>
    </div>
    <div class="container my-5">

      <div class="row justify-content-center">
        <div class="col-5">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
              <label class="small mb-1" for="inputName"> Name</label>
              <input class="form-control  @error('name') is-invalid @enderror" id="inputName" type="text" placeholder="Enter Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label class="small mb-1" for="inputEmailAddress">Email</label>
              <input class="form-control py-4 @error('email') is-invalid @enderror" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" value="{{ old('email') }}" required autocomplete="email" />
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="small mb-1" for="inputPassword">Password</label>
                  <input class="form-control py-4 @error('password') is-invalid @enderror" id="inputPassword" type="password" placeholder="Enter password" name="password" required autocomplete="new-password" />

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                  <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password" />

                </div>
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

  </section>
  @endsection