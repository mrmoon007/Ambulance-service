  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

      @foreach ($f_slideres as $key => $f_slider)
        <!-- Slide 1 -->
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background-image: url({{ asset($f_slider->image) }});">
            <div class="carousel-container">
              <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>Contact <span>Us</span></h2>
                <h4><span>{{ $fcontact->phone_1 }},</span> <span>{{ $fcontact->phone_2 }}</span> </h4>
                {{-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> --}}
              </div>
            </div>
        </div>
      @endforeach

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->
