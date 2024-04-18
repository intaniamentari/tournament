@extends('landing_page.layouts')

@section('content')
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    @include('landing_page._navbar')

    @include('landing_page._carousel')

    @include('landing_page._about')

    @include('landing_page._facts')

    @include('landing_page._features')

    @include('landing_page._service')

    @include('landing_page._appointment')

    @include('landing_page._team')

    @include('landing_page._testimonial')

    @include('landing_page._footer')

@endsection
