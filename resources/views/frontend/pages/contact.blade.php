@extends('frontend.layout.master')

@section('title')
contact
@endsection

@section('css')

@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Contact</h2>
            <ol>
              <li><a href="{{ route('frontend.index') }}">Home</a></li>
              <li>Contact</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->

      <!-- ======= Contact Section ======= -->
      <div class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7303.8030801315335!2d90.40349417360872!3d23.75089025854147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b888ad339cb5%3A0x20c70986185ad2ba!2sMogbazar%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1626182043519!5m2!1sen!2sbd" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
      </div>

      <section id="contact" class="contact">
        <div class="container">

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

          <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
@endsection

@section('script')

@endsection
