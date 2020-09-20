    @extends('frontendtemplate')
    @section('content')

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 col-lg-5 d-flex">
            <div class="img d-flex align-self-stretch align-items-center">
              <img src="../image/blood.jpg" width="500" height="500">
            </div>
          </div>
          <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
            <div class="py-md-5">
              <div class="row justify-content-start pb-3">
                <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                  <div class="form-group">
                    <label class="small mb-1" for="blood-select"><h4 class="text-danger">Search for donor with blood group:</h4></label>
                    @foreach($bloodgroups as $bloodgroup)
                    <a href="{{route('donorlistpage',$bloodgroup->id)}}"><h5 class="text-danger">{{$bloodgroup->bloodgroup}}</h5></a>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection