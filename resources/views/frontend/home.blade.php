    @extends('frontendtemplate')
    @section('content')

    {{-- <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg');" data-section="home" data-stellar-background-ratio="0.5"> --}}
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
            <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="blood-select">Search for donor with blood group</label>

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

      <div class="form-group row">
      <div class="col-sm-10">
        <button class="btn btn-primary" name="searchBtn">Search</button>
      </div>
    </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
{{--     </section>  
 --}}@endsection