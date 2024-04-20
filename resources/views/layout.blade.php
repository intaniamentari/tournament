<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    @stack('csrf')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    {{-- filepond --}}
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
  </head>
  <body>

    @yield('content.admin')

    @include('sweetalert::alert')
     <!-- plugins:js -->
     <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
     <!-- endinject -->
     <!-- Plugin js for this page -->
     <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
     <!-- End plugin js for this page -->
     <!-- inject:js -->
     <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
     <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
     <script src="{{ asset('assets/js/misc.js') }}"></script>
     <!-- endinject -->
     <!-- Custom js for this page -->
     <script src="{{ asset('assets/js/dashboard.js') }}"></script>
     <script src="{{ asset('assets/js/todolist.js') }}"></script>
     <!-- End custom js for this page -->

     <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <!-- End custom js for this page -->

    {{-- filepond --}}
    {{-- Jquery Library --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- File Pond Js Cdn --}}
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    {{-- File Pond Jquerys Cdn --}}
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
    {{-- File Pond Image Preview Cdn --}}
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    @stack('scripts')

   </body>
 </html>
