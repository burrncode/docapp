@extends('layouts.app')

@section('content')
    <section id="headerSection">
        <header class="masthead">
          <div class="container">
            <div class="intro-text">
              <div class="intro-lead-in">Find your way to health!</div>
              <hr/>
                <!-- Search form -->
                <div class="md-form">
                    <div class="col-md-3">
                        <select class="form-control" name="speciality">
                            @foreach ($specialities as $speciality)
                                <option value="{{$speciality->id}}">{{$speciality->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="text" placeholder="Enter your location" aria-label="Search">
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="insurer">
                            @foreach ($insurers as $insurer)
                                <option value="{{$insurer->id}}">{{$insurer->name}}</option>
                            @endforeach
                        </select>
                    </div>                    
                    <div class="col-md-3">
                        <input value="Search" class="btn btn-primary" type="button">
                    </div>
                </div>
           
            </div>
          </div>
        </header>
    </section>
    <section class="featured">
        <div class="container">
            <div class="row">
                <h2 class="section-heading text-center">Featured As:</h2>
            </div>
            <br/>

            <div class="logos text-center">
                <div class="col-md-3">
                    <img src="{{ asset('assets/img/featured/daily_mail.png') }}" class="pic" alt="featured">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/img/featured/evening_standard.png') }}" class="pic" alt="featured">
                </div>            
                <div class="col-md-3">
                    <img src="{{ asset('assets/img/featured/cnbc.png') }}" class="pic" alt="featured">
                </div>            
                <div class="col-md-3">
                    <img src="{{ asset('assets/img/featured/ibt.png') }}" class="pic" alt="featured">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <div class="col-lg-12 text-center">
                <hr class="my-4">
            </div>
          <div class="row">
            <div class="col-md-6">
              <div class="testimonial">
                <div class="quote">
                  I am just quoting some stuff but I am seriously happy about this product. Has a lot of powerful
                  features and is so easy to set up, I could stay customizing it day and night, it's just so much fun!
                  <div class="arrow-down">
                    <div class="arrow"></div>
                    <div class="arrow-border"></div>
                  </div>
                </div>
                <div class="author">
                  <img src="{{ asset('assets/img/testimonial.jpg') }}" class="pic" alt="testimonial3">
                  <div class="name">John McClane</div>
                  <div class="company">Microsoft</div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="testimonial">
                <div class="quote">
                  This thing is one of those tools that everybody should be using. I really like it and with this ease to use, you can kickstart your projects and apps and just focus on your business!
                  <div class="arrow-down">
                    <div class="arrow"></div>
                    <div class="arrow-border"></div>
                  </div>
                </div>
                <div class="author">
                  <img src="{{ asset('assets/img/testimonial.jpg') }}" class="pic" alt="testimonial2">
                  <div class="name">Carl Jones</div>
                  <div class="company">Pixar Co.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="section-br"/>
    </div>
    
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">How it works</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons icon-style" data-sr-id="2"></i>
              <h3 class="mb-3">Search</h3>
              <p class="text-muted mb-0">Search for a doctor or health specialist or enter a particular condition or procedure. Doctify covers 47 medical specialities.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 ssr-icons icon-style" data-sr-id="3"></i>
              <h3 class="mb-3">Compare</h3>
              <p class="text-muted mb-0">Compare doctors using verified patient reviews and filter for distance, availability and insurer to find the right doctor for you.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 ssr-icons icon-style" data-sr-id="4"></i>
              <h3 class="mb-3">Book</h3>
              <p class="text-muted mb-0">It takes less than 60 seconds to book or request an appointment with your doctor or health specialist. Fast, safe and secure.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="section-br"/>
    <section id="specialities">
        <div class="container">
            <div class="row col-lg-12 text-center">
                <h2 class="section-heading">Popular Specialist Searches</h2>
                <hr class="my-4">
            </div>
            <div class="row specialities-list">
                <ul class="list-group">
                    @foreach ($specialities as $speciality)
                        <li class="col-md-3">
                            <a href="/specialities/{{$speciality->name}}">{{$speciality->name}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>

    </section>
@endsection
