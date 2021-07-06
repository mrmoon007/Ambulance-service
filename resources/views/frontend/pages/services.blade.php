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
                <h2>Services</h2>
                <ol>
                  <li><a href="{{ route('frontend.index') }}">Home</a></li>
                  <li>Services</li>
                </ol>
              </div>

            </div>
          </section><!-- End Breadcrumbs -->

          <!-- ======= Services Section ======= -->
          <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

              <div class="row">
                @foreach ($f_services as $f_service)
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="box">
                        
                      <div class="btn-wrap">
                        <img src="{{ asset($f_service->image) }}" class="img-fluid" alt="">
                        <h4>{{ $f_service->title }}</h4>
                        <p>{{ $f_service->description }}</p>
                      </div>
                    </div>
                  </div> --}}
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box ">
                            <img src="{{ asset($f_service->image) }}" class="img-fluid" alt="">
                            <h4>{{ $f_service->title }}</h4>
                            <p>{{ $f_service->description }}</p>
                        </div>
                    </div>
                @endforeach
              </div>

            </div>
          </section><!-- End Services Section -->

@endsection

@section('script')

@endsection