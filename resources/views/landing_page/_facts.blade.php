<!-- Facts Start -->
<div class="container-fluid overflow-hidden my-5 px-lg-0">
    <div class="container facts px-lg-0">
      <div class="row g-0 mx-lg-0">
        <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
          <div class="h-100 px-4 ps-lg-0">
            <h1 class="text-white mb-4">{{ $fact->title }}</h1>
            <p class="text-light mb-5">
              {{ $fact->text }}
            </p>
            <a href="" class="align-self-start btn btn-secondary py-3 px-5"
              >Regist Now</a
            >
          </div>
        </div>
        <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
          <div class="h-100 px-4 pe-lg-0">
            <div class="row g-5">
                @if ($fact_detail->count() > 0)
                @foreach ($fact_detail as $list)
                    <div class="col-sm-6">
                    <h1 class="display-5" data-toggle="counter-up">{{ $list->title }}</h1>
                    <p class="fs-5 text-primary">{{ $list->detail }}</p>
                    </div>
                @endforeach
                @else
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Facts End -->
