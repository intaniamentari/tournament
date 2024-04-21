@extends('layout')

@push('csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content.admin')
    <div class="container-scroller">
      @include('_navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('_sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            {{-- Navbar Section --}}
            <div class="page-header">
              <h3 class="page-title"> Navigation Bar </h3>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="forms-sample" enctype="multipart/form-data" action="{{ route('page-setting.homeupdate') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="section" value="navbar">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" value="{{ $navbar->name }}" class="form-control @if($errors->has('name')) is-invalid @endif" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Phone</label>
                        <input type="text" name="phone" value="{{ $navbar->phone }}" class="form-control @if($errors->has('phone')) is-invalid @endif" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                            <input type="text" name="email" value="{{ $navbar->email }}" class="form-control @if($errors->has('email')) is-invalid @endif" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Facebook</label>
                        <input type="text" name="facebook" value="{{ $navbar->facebook }}" class="form-control @if($errors->has('facebook')) is-invalid @endif" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">LinkedIn</label>
                        <input type="text" name="linkedin" value="{{ $navbar->linkedin }}" class="form-control @if($errors->has('linkedin')) is-invalid @endif" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Instagram</label>
                        <input type="text" name="instagram" value="{{ $navbar->instagram }}" class="form-control @if($errors->has('linkedin')) is-invalid @endif" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label>Icon upload</label><br />
                        <img src="{{ asset($navbar->image()) }}" style="" class="img-thumbnail col-lg-3 col-sm-12 col-md-3" alt="...">
                        <p></p>
                        <input type="file" name="navbarIcon" id="navbarIcon" class="col-lg-3 col-sm-12 col-md-3" form="none">
                      </div>
                      <button type="submit" class="btn btn-lg btn-gradient-primary me-2 col-12">Submit</button>
                      {{-- <button class="btn btn-light">Cancel</button> --}}
                    </form>
                  </div>
                </div>
              </div>
            </div>


            {{-- Carousel Section --}}
            <div class="page-header">
              <h3 class="page-title"> Carousel </h3>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Carousel Section</h4>
                    <p class="card-description"> The main image on your landing page </p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="forms-sample" enctype="multipart/form-data" action="{{ route('page-setting.homeupdate') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="section" value="carousel">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $carousel->title }}" class="form-control @if($errors->has('title')) is-invalid @endif" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="text">Text</label>
                        <textarea class="form-control @if($errors->has('text')) is-invalid @endif" id="text" placeholder="Text" rows="6">{{ $carousel->text }}</textarea>
                      </div>
                      {{-- <div class="form-group">
                        <label for="text">Text</label>
                        <input type="text" name="text" value="{{ $carousel->text }}" class="form-control" id="text" placeholder="Text">
                      </div> --}}
                      <div class="form-group">
                        <label>Icon upload</label><br />
                        <img src="{{ asset($carousel->image()) }}" style="" class="img-thumbnail col-lg-3 col-sm-12 col-md-3" alt="...">
                        <p></p>
                        <input type="file" name="carouselImage" id="carouselImage" class="col-lg-3 col-sm-12 col-md-3" form="none">
                      </div>
                      <button type="submit" class="btn btn-lg col-12 btn-gradient-primary me-2">Submit</button>
                      {{-- <button class="btn btn-light">Cancel</button> --}}
                    </form>
                  </div>
                </div>
              </div>
            </div>


            {{-- About Section --}}
            <div class="page-header">
              <h3 class="page-title"> About </h3>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">About Section</h4>
                    <p class="card-description"> Tell about your amazing event! </p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="forms-sample"enctype="multipart/form-data" action="{{ route('page-setting.homeupdate') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="section" value="about">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $about->title }}" class="form-control @if($errors->has('title')) is-invalid @endif" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="text">Sub Title</label>
                        <input type="text" name="sub_title" value="{{ $about->sub_title }}" class="form-control @if($errors->has('sub_title')) is-invalid @endif" id="text" placeholder="Sub Title">
                      </div>
                      <div class="form-group">
                        <label for="text">Text</label>
                        <input type="text" name="text" value="{{ $about->text }}" class="form-control @if($errors->has('text')) is-invalid @endif" id="text" placeholder="Text">
                      </div>
                      <div class="form-group">
                        <label for="text">Footer</label>
                        <input type="text" name="footer" value="{{ $about->footer }}" class="form-control @if($errors->has('footer')) is-invalid @endif" id="text" placeholder="Footer">
                      </div>
                      <div class="form-group">
                        <label>Icon upload</label><br />
                        <img src="{{ asset($about->image()) }}" style="" class="img-thumbnail col-lg-3 col-sm-12 col-md-3" alt="...">
                        <p></p>
                        <input type="file" name="aboutImage" id="aboutImage" class="col-lg-3 col-sm-12 col-md-3" form="none">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2 btn-lg col-12">Submit</button>
                      {{-- <button class="btn btn-light">Cancel</button> --}}
                    </form>
                  </div>
                </div>
              </div>
            </div>


            {{-- Facts Section --}}
            <div class="page-header">
              <h3 class="page-title"> Facts </h3>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Facts Section</h4>
                    <p class="card-description"> List about your data facts</p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="forms-sample"enctype="multipart/form-data" action="{{ route('page-setting.homeupdate') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="section" value="fact">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $about->title }}" class="form-control @if($errors->has('title')) is-invalid @endif" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="text">Text</label>
                        <input type="text" name="text" value="{{ $about->text }}" class="form-control @if($errors->has('text')) is-invalid @endif" id="text" placeholder="Text">
                      </div>
                    <p class="card-description"> List bout your data facts</p>
                    <button type="button" class="btn btn-sm btn-outline-success me-5" onclick="addFact()">+ Add facts</button>
                    <div id="facts">
                        <div class="form-group">
                            <label for="text"></label>
                        </div>
                        @php
                            $num = 1;
                        @endphp
                        @if($fact_detail->count() > 0)
                        @foreach ($fact_detail as $list)
                            <div id="fact{{ $num }}">
                                <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" style="margin-right:6px;" onclick="removeFact({{ $num }})"><i class="mdi mdi-minus"></i></button> Fact
                                <div class="form-group" style="margin-top:15px;">
                                    <label for="text">Title Nominal</label>
                                    <input type="text" name="fact-detail-title-{{ $num }}" value="{{ $list->title }}" class="form-control" placeholder="Text">
                                </div>
                                <div class="form-group">
                                    <label for="text">Nominal</label>
                                    <input type="text" name="fact-detail-{{ $num }}" value="{{ $list->detail }}" class="form-control" placeholder="Text">
                                </div>
                            </div>
                        @php
                            $num++;
                        @endphp
                        @endforeach
                        @endif
                    </div>
                    <input type="hidden" id="num" value="{{ $num }}" form="none">
                      <button type="submit" class="btn btn-lg col-12 btn-gradient-primary me-2">Submit</button>
                      {{-- <button class="btn btn-light">Cancel</button> --}}
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

@endsection

@push('scripts')
    <script>
        let num = document.getElementById('num').value;
        console.log(num);
        function addFact() {
            // Buat elemen div baru
            var newDiv = document.createElement("div");
            newDiv.innerHTML = `
                <div id="fact${num}">
                    <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" style="margin-right:6px;" onclick="removeFact(${num})"><i class="mdi mdi-minus"></i></button> Fact
                    <div class="form-group" style="margin-top:15px;">
                        <label for="text">Title Nominal</label>
                        <input type="text" name="fact-detail-title-${num}" value="" class="form-control" placeholder="Text">
                    </div>
                    <div class="form-group">
                        <label for="text">Nominal</label>
                        <input type="number" name="fact-detail-${num}" value="" class="form-control" placeholder="Text">
                    </div>
                </div>
            `;

            num++;
            document.getElementById('num').value = num;

            // Tambahkan elemen baru ke dalam elemen dengan ID "facts"
            document.getElementById("facts").appendChild(newDiv);
        }

        function removeFact(id) {
        // Hapus elemen dengan ID yang sesuai
        var elementToRemove = document.getElementById("fact" + id);
        elementToRemove.remove();
        }
    </script>
    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);

        $("#navbarIcon").filepond({
            allowImagePreview: true,
            allowImageFilter: true,
            imagePreviewHeight: 300,
            allowMultiple: true,
            allowFileTypeValidation: true,
            allowRevert: true,
            acceptedFileTypes: ["image/png", "image/jpeg", "image/jpg"],
            maxFiles: 1,
            credits: false,
            server: {
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                url: "/temp/upload",
                process: {
                    metadata: {
                        data: 'ondemand' // Add additional metadata
                    },
                },
                // revert: true,
                restore: "temp/upload/delete",
                fetch: false,
            },
        });

        $("#carouselImage").filepond({
            allowImagePreview: true,
            allowImageFilter: true,
            imagePreviewHeight: 300,
            allowMultiple: true,
            allowFileTypeValidation: true,
            allowRevert: true,
            acceptedFileTypes: ["image/png", "image/jpeg", "image/jpg"],
            maxFiles: 1,
            credits: false,
            server: {
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                url: "/temp/upload",
                process: {
                    metadata: {
                        data: 'ondemand' // Add additional metadata
                    },
                },
                // revert: true,
                restore: "temp/upload/delete",
                fetch: false,
            },
        });

        $("#aboutImage").filepond({
            allowImagePreview: true,
            allowImageFilter: true,
            imagePreviewHeight: 300,
            allowMultiple: true,
            allowFileTypeValidation: true,
            allowRevert: true,
            acceptedFileTypes: ["image/png", "image/jpeg", "image/jpg"],
            maxFiles: 1,
            credits: false,
            server: {
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                url: "/temp/upload",
                process: {
                    metadata: {
                        data: 'ondemand' // Add additional metadata
                    },
                },
                // revert: true,
                restore: "temp/upload/delete",
                fetch: false,
            },
        });
    </script>
@endpush

