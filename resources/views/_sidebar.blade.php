<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">David Grey. H</span>
            <span class="text-secondary text-small">Project Manager</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('page-setting.index') }}">
          <span class="menu-title">Landing Page</span>
          <i class="mdi mdi-white-balance-iridescent menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user-register.index') }}">
          <span class="menu-title">User Register</span>
          <i class="mdi mdi-account menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Basic UI Elements</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('buttons') }}">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('typography') }}">Typography</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('icons') }}">
          <span class="menu-title">Icons</span>
          <i class="mdi mdi-contacts menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('forms') }}">
          <span class="menu-title">Forms</span>
          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('charts') }}">
          <span class="menu-title">Charts</span>
          <i class="mdi mdi-chart-bar menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('table') }}">
          <span class="menu-title">Tables</span>
          <i class="mdi mdi-table-large menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Sample Pages</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('blank-page') }}"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('error-404') }}"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('error-500') }}"> 500 </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item sidebar-actions">
        <span class="nav-link">
          <div class="border-bottom">
            <h6 class="font-weight-normal mb-3">Projects</h6>
          </div>
          <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
          <div class="mt-4">
            <div class="border-bottom">
              <p class="text-secondary">Categories</p>
            </div>
            <ul class="gradient-bullet-list mt-4">
              <li>Free</li>
              <li>Pro</li>
            </ul>
          </div>
        </span>
      </li>
    </ul>
  </nav>
