<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
            @php
                $fcontact = DB::table('contacts')->first();
            @endphp
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>sina ambulance</h3>
            <p>
              {{ $fcontact->address }} <br>
              {{ $fcontact->state }}<br>
              {{ $fcontact->country }} <br><br>
              <strong>Phone:</strong> +88{{ $fcontact->phone_1 }}<br>
              <strong>Email:</strong> {{ $fcontact->email_1 }}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.index') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.about') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.services') }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">AC Ambulance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Non-AC Ambulance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Freezer Van Ambulance</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
         
          Developed by <a href="">MR Moon</a>
        </div>
      </div>
      @php
          $f_socialLink=App\Models\SocialLink::first();
      @endphp
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="{{ $f_socialLink->twitter }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{ $f_socialLink->facebook }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{ $f_socialLink->instagran }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{ $f_socialLink->skype }}" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="{{ $f_socialLink->linkedin }}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
