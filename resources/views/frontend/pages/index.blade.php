@extends('frontend.layout.master')

@section('title')
Sina Ambulance Service in Dhaka – 01677808387 | Get Emergency Ambulance Service in Bangladesh | sinaambulance.com
@endsection

@section('content')

    @include('frontend.layout.partails.slider')
<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</strong></h2>
      </div>

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
          <h1>{{ $fabout->shortTitle }}</h1>
          <h3>{{ $fabout->longTitle }}</h3>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
          <p>
            {{ $fabout->description }}
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</strong></h2>
        {{-- <p>Laborum repudiandae omnis voluptatum consequatur mollitia ea est voluptas ut</p> --}}
      </div>

      <div class="row">
          @foreach ($f_services as $f_service)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box iconbox-blue">
                    <img src="{{ asset($f_service->image) }}" class="img-fluid" alt="ambulance">
                    <h4>{{ $f_service->title }}</h4>
                    <p>{{ $f_service->description }}</p>
                </div>
            </div>
          @endforeach
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">AC Ambulance
            </li>
            <li data-filter=".filter-web">Non-AC Ambulance</li>
            <li data-filter=".filter-card">Freezer Van </li>
            <li data-filter=".filter-car">Rent-A-Car </li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">

        @foreach ($Acportfolio as $acitem)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{ asset($acitem->image) }}" class="img-fluid" alt="ambulance">
                <div class="portfolio-info">
                <h1>AC Ambulance</h1>
                <a href="{{ asset($acitem->image) }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>

                </div>
            </div>
        @endforeach


        @foreach ($nonAcportfolio as $nonacitem)
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="{{ asset($nonacitem->image?$nonacitem->image:'') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Non-AC Ambulance</h4>
                <a href="{{ asset($nonacitem->image?$nonacitem->image:'') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>

                </div>
            </div>
        @endforeach

        @foreach ($frezportfolio as $frezitem)
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="{{ asset($frezitem->image) }}" class="img-fluid" alt="ambulance">
                <div class="portfolio-info">
                <h4>Freezer Van Ambulance</h4>
                <a href="{{ asset($frezitem->image) }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>

                </div>
            </div>
        @endforeach

        @foreach ($rentAcars as $rentAcar)
            <div class="col-lg-4 col-md-6 portfolio-item filter-car">
                <img src="{{ asset($rentAcar->image) }}" class="img-fluid" alt="ambulance">
                <div class="portfolio-info">
                <h4>Rent-A-Car</h4>
                <a href="{{ asset($rentAcar->image) }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>

                </div>
            </div>
        @endforeach

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
          </div>

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>{{ $fcontact->address }}<br>{{ $fcontact->state }}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $fcontact->email_1 }}<br>{{ $fcontact->email_2 }}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+88{{ $fcontact->phone_1 }}<br>+88{{ $fcontact->phone_2 }}</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section><!-- End Contact Section -->
@endsection

