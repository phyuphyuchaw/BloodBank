    @extends('frontendtemplate')
    @section('content')

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 col-lg-5 d-flex">
            <div class="img d-flex align-self-stretch align-items-center">
              <img src="../image/blood3.jpg" width="500" height="700">
            </div>
          </div>
          <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
            <div class="py-md-5">
              <div class="row justify-content-start pb-3">
                <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                  <h3 class="mb-1 text-danger" >Donor Info</h3>

                  <form action="{{route('donors.store')}}" method="POST" enctype="multipart/form-data">
                   @csrf
                   <div class="form-group text-danger">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="mb-1 text-danger" for="age"> Age</label>
                        <input class="form-control py-4" id="age" type="text" placeholder="Enter Age " name="age" />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="mb-1 text-danger" for="gender"> Gender:</label>
                        <br>
                        <input type="radio" name="gender" value="male"> Male<br>
                        <input type="radio" name="gender" value="female"> Female
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="mb-1 text-danger" for="blood-select">Blood Type:</label>
                        <select name="blood_type">
                          @foreach($bloodgroups as $bloodgroup)
                          <option value="{{$bloodgroup->id}}">{{$bloodgroup->bloodgroup}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="mb-1 text-danger" for="phone">Phone Number</label>
                        <input class="form-control py-4  @error('phone') is-invalid @enderror" id="phone" type="text" placeholder="Enter Phone Number" name="phone" value="{{old('phone')}}" required autocomplete="phone" autofocus />
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{$message}}</strong>
                       </span>
                       @enderror
                     </div>
                   </div>

                   <div class="col-md-6">
                    <div class="form-group">
                      <label class="mb-1 text-danger" for="address"> Address </label>
                      <textarea class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="name" autofocus>{{old('address')}}</textarea>
                      @error('address')
                      <span class="invalid-feedback" role="alert">
                       <strong>{{$message}}</strong>
                     </span>
                     @enderror
                   </div>
                 </div>

                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="mb-1 text-danger" for="inputEmailAddress">Photo</label>
                    <input  type="file" class="form-control-file py-4 @error('photo') is-invalid @enderror" id="inputEmailAddress"  name="photo" value="{{old('photo')}}" >
                    @error('photo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{$message}}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group">
                  <input type="submit" value="Register" class="btn btn-secondary py-3 px-5">
                </div>


                <div class=" mt-3 text-center ">
                  <a href="{{route('login')}}" class="loginLink text-danger">Have an account? Go to login</a>
                </div> 
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection