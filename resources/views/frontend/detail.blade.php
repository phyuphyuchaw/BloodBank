@extends('frontendtemplate')
@section('content')
<section class="ftco-section contact-section" id="contact-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        @foreach($blogs as $blog)
        <div class="col-3">
          <div style="width: 15rem;">
            <img src="{{$blog->photo}}" class="card-img-top" alt="..." width="100px" height="100px">
            <div>
              <h5 >{{$blog->headline}}</h5>
             <p class=" text-dark">{{$blog->post}}</p>

            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection