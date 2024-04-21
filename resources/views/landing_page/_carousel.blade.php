<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          {{-- <img class="w-100" src="{{ asset('landing_page/img/sport-small.jpg') }}" alt="Image" /> --}}
          <img class="w-100" src="{{ asset($carousel->image()) }}" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <h1 class="display-3 text-dark mb-4 animated slideInDown">
                    {{ $carousel->title }}
                  </h1>
                  <p class="fs-5 text-body mb-5">
                    {{ $carousel->text }}
                  </p>
                  <a href="" class="btn btn-primary py-3 px-5"
                    >Registration</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="prev"
      >
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="next"
      >
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->
