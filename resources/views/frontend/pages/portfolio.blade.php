@extends('frontend.layout.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Portfolio</h2>
            <ol>
              <li><a href="{{ route('frontend.index') }}">Home</a></li>
              <li>Portfolio</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">

          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">AC Ambulance
                </li>
                <li data-filter=".filter-web">Non-AC Ambulance</li>
                <li data-filter=".filter-card">Freezer Van Ambulance</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up">

            @foreach ($Acportfolio as $acitem)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{ asset($acitem->image) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>AC Ambulance</h4>
                    <a href="{{ asset($acitem->image) }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>

                    </div>
                </div>
            @endforeach


            @foreach ($nonAcportfolio as $nonacitem)
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset($nonacitem->image) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Non-AC Ambulance</h4>
                    <a href="{{ asset($nonacitem->image) }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>

                    </div>
                </div>
            @endforeach

            @foreach ($frezportfolio as $frezitem)
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{ asset($frezitem->image) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>Freezer Van Ambulance</h4>
                    <a href="{{ asset($frezitem->image) }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>

                    </div>
                </div>
            @endforeach

          </div>

        </div>
      </section><!-- End Portfolio Section -->
@endsection

@section('script')

@endsection
