@section('header')
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: url(Delicious/assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown"><span>My Trip,</span> My Happiness</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              @if(auth()->user())
              <div>
                <a href="/form" class="btn-menu animate__animated animate__fadeInUp scrollto">Write Story</a>
                <a href="/form-event" class="btn-book animate__animated animate__fadeInUp scrollto">Pin Event</a>
                <a href="/perhitungan/buat" class="btn-book animate__animated animate__fadeInUp scrollto">Rekomendasi</a>
              @endif
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" style="background: url(Delicious/assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">Bali is Fun</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div>
                <a href="/form" class="btn-menu animate__animated animate__fadeInUp scrollto">Write Story</a>
                <a href="/form-event" class="btn-book animate__animated animate__fadeInUp scrollto">Pin Event</a>
                <a href="/perhitungan/buat" class="btn-book animate__animated animate__fadeInUp scrollto">Rekomendasi</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item" style="background: url(Delicious/assets/img/slide/slide-3.jpg);">
          <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">Wonderful Bali</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div>
                <a href="/form" class="btn-menu animate__animated animate__fadeInUp scrollto">Write Story</a>
                <a href="/form-event" class="btn-book animate__animated animate__fadeInUp scrollto">Pin Event</a>
                <a href="/perhitungan/buat" class="btn-book animate__animated animate__fadeInUp scrollto">Rekomendasi</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<!-- End Hero -->
@endsection