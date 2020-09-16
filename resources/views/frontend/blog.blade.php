@extends('frontendtemplate')
@section('content')
<div class="jumbotron jumbotron-fluid subtitle">
  
</div>
      <div class="container mt-5">
        <div class="row">
            @foreach($blogs as $blog)
          <div class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="{{$blog->photo}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-text">Head Line:{{$blog->headline}}</h5>
                <p class="card-text">Post:{{$blog->post}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
     </div>
    </section>
    @endsection