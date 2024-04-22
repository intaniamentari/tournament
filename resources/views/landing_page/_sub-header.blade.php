<!-- Page Header Start -->
<div
class="container-fluid page-header py-5 mb-5 wow fadeIn"
data-wow-delay="0.1s"
>
@php
    $route = '';
    if(Request::routeIs('registration')){
        $route = 'Registration';
    } else if(Request::routeIs('home')){
        $route = 'Home';
    } else if(Request::routeIs('info')){
        $route = 'Info';
    } else if(Request::routeIs('service')){
        $route = 'Service';
    } else if(Request::routeIs('features')){
        $route = 'Features';
    } else if(Request::routeIs('appointment')){
        $route = 'Appointment';
    } else if(Request::routeIs('team')){
        $route = 'Team';
    } else if(Request::routeIs('testimonial')){
        $route = 'Testimonial';
    } else if(Request::routeIs('notfound')){
        $route = 'Notfound';
    }
@endphp
@if (Request::routeIs('registration'))
    $route = 'Registration';
@endif
<div class="container py-5">
  <h1 class="display-4 animated slideInDown mb-4">{{ $route }}</h1>
  <nav aria-label="breadcrumb animated slideInDown">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Pages</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $route }}</li> <!--Service-->
    </ol>
  </nav>
</div>
</div>
<!-- Page Header End -->
