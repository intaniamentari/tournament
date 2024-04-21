<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div
            class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
            style="min-height: 400px"
          >
            <img
              class="position-absolute w-100 h-100"
              src="{{ asset($carousel->image()) }}"
              alt=""
              style="object-fit: cover; border-radius=20px;"
            />
            {{-- <div
              class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
              style="width: 200px; height: 200px"
            >
              <div
                class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3"
              >
                <h1 class="text-white mb-0">25</h1>
                <h2 class="text-white">Years</h2>
                <h5 class="text-white mb-0">Experience</h5>
              </div>
            </div> --}}
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100">
            <h1 class="display-6 mb-5">
              {{ $about->title }}
            </h1>
            <p class="fs-5 text-primary mb-4">
              {{ $about->sub_title }}
            </p>
            {{-- <div class="row g-4 mb-4">
              <div class="col-sm-6">
                <div class="d-flex align-items-center">
                  <img
                    class="flex-shrink-0 me-3"
                    src="{{ asset('landing_page/img/icon/icon-04-primary.png') }}"
                    alt=""
                  />
                  <h5 class="mb-0">Flexible Insurance Plans</h5>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center">
                  <img
                    class="flex-shrink-0 me-3"
                    src="{{ asset('landing_page/img/icon/icon-03-primary.png') }}"
                    alt=""
                  />
                  <h5 class="mb-0">Money Back Guarantee</h5>
                </div>
              </div>
            </div> --}}
            <p class="mb-4">
              {{ $about->text }}
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="d-flex align-items-center">
                {{-- <img
                  class="flex-shrink-0 rounded-circle me-3"
                  src="{{ asset('landing_page/img/profile.jpg') }}"
                  alt=""
                /> --}}
                <h5 class="mb-0">{{ $about->footer }}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->
