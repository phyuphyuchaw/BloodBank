@extends('frontendtemplate')
@section('content')

<section class="ftco-section contact-section" id="contact-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4 text-danger">Contact Us</h2>
            <p class="text-danger">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-map-signs"></span>
              </div>
              <h3 class="mb-4 text-danger">Address</h3>
              <p class="text-danger">Than Street,Hlaing Township,Yangon</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-phone2"></span>
              </div>
              <h3 class="mb-4 text-danger">Contact Number</h3>
              <p class="text-danger"><a href="tel://1234567920" class="text-danger">+ 959454286335</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-paper-plane"></span>
              </div>
              <h3 class="mb-4 text-danger">Email Address</h3>
              <p class="text-danger"><a href="mailto:info@yoursite.com" class="text-danger">bloodbank@gmail.com</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-globe"></span>
              </div>
              <h3 class="mb-4 text-danger">Website</h3>
              <p class="text-danger"><a href="#" class="text-danger">donatebloodmyanmar.org</a></p>
            </div>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
            <div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>  
@endsection