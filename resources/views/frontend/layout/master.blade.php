<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="AC | ICU | NICU | Air Ambulance | Freezer Van | Call : +88 01677808387" name="descriptison">
  <meta content="" name="keywords">
  <!-- FAVICON -->
  <link href="{{ asset('public/frontend/assets/img/logo.jpeg') }}" rel="shortcut icon" />

  @include('frontend.layout.partails.css')

  @yield('css')
</head>

<body>

    @include('frontend.layout.partails.header')


  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  @include('frontend.layout.partails.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('frontend.layout.partails.script')

  @yield('script')

</body>

</html>
