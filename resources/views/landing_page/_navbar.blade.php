<!-- Topbar Start -->
<div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
    <div class="col-lg-7 px-5 text-start">
        <div class="h-100 d-inline-flex align-items-center me-4">
        <small class="fa fa-phone-alt me-2"></small>
        <small>{{ $navbar->phone }}</small>
        </div>
        <div class="h-100 d-inline-flex align-items-center me-4">
        <small class="far fa-envelope-open me-2"></small>
        <small>{{ $navbar->email }}</small>
        </div>
        <div class="h-100 d-inline-flex align-items-center me-4">
        <small class="far fa-clock me-2"></small>
        <small>Mon - Fri : 09 AM - 09 PM</small>
        </div>
    </div>
    <div class="col-lg-5 px-5 text-end">
        <div class="h-100 d-inline-flex align-items-center">
        <a class="text-white-50 ms-4" href="{{ $navbar->facebook }}"
            ><i class="fab fa-facebook-f"></i
        ></a>
        {{-- <a class="text-white-50 ms-4" href=""
            ><i class="fab fa-twitter"></i
        ></a> --}}
        <a class="text-white-50 ms-4" href="{{ $navbar->linkedin }}"
            ><i class="fab fa-linkedin-in"></i
        ></a>
        <a class="text-white-50 ms-4" href="{{ $navbar->instagram }}"
            ><i class="fab fa-instagram"></i
        ></a>
        </div>
    </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
        <img
            class="img-fluid me-3"
            {{-- src="{{ asset('landing_page/img/icon/icon-02-primary.png') }}" --}}
            src="{{ asset($navbar->image()) }}"
            alt=""
        />{{ $navbar->name }}
        </h1>
    </a>
    <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('info') }}" class="nav-item nav-link {{ Request::routeIs('info') ? 'active' : '' }}">About Us</a>
        <a href="{{ route('service') }}" class="nav-item nav-link {{ Request::routeIs('service') ? 'active' : '' }}">Our Services</a>
        <div class="nav-item dropdown">
            <a
            href="#"
            class="nav-link dropdown-toggle {{ Request::routeIs('features') || Request::routeIs('appointment') || Request::routeIs('team') || Request::routeIs('testimonial') || Request::routeIs('notfound')? 'active' : '' }}"
            data-bs-toggle="dropdown"
            >Pages</a
            >
            <div class="dropdown-menu bg-light border-0 m-0">
            <a href="{{ route('features') }}" class="dropdown-item">Features</a>
            <a href="{{ route('appointment') }}" class="dropdown-item">Appointment</a>
            <a href="{{ route('team') }}" class="dropdown-item">Team Members</a>
            <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
            <a href="{{ route('notfound') }}" class="dropdown-item">404 Page</a>
            </div>
        </div>
        <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Contact Us</a>
        </div>
    </div>
    {{-- <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a> --}}
</nav>
<!-- Navbar End -->
