  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ route('frontend.index') }}">sina<span class="text-danger"> Ambulance</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('public/frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a> --}}

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('frontend.index') }}">Home</a></li>

          <li ><a href="{{ route('frontend.about') }}">About</a></li>
          <li><a href="{{ route('frontend.services') }}">Services</a></li>
          <li><a href="{{ route('frontend.portfolio') }}">Portfolio</a></li>
          <li><a href="">Pricing</a></li>
          <li><a href="{{ route('frontend.contact') }}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      @php
          $f_socialLink=App\Models\SocialLink::first();
      @endphp
      <div class="header-social-links">
        <a href="{{ $f_socialLink->twitter }}" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="{{ $f_socialLink->facebook }}" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="{{ $f_socialLink->instagram }}" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="{{ $f_socialLink->linkedin }}" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
