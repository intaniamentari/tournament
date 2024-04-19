@extends('layout')

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
            <div class="page-header">
              <h3 class="page-title"> Navigation Bar </h3>
            </div>
            {{-- Navbar Section --}}
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" enctype="multipart/form-data" action="{{ route('page-setting.home.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="section" value="navbar">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" value="{{ $navbar->name }}" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Phone</label>
                        <input type="text" name="phone" value="{{ $navbar->phone }}" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" name="email" value="{{ $navbar->email }}" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Facebook</label>
                        <input type="text" name="facebook" value="{{ $navbar->facebook }}" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">LinkedIn</label>
                        <input type="text" name="linkedin" value="{{ $navbar->linkedin }}" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Instagram</label>
                        <input type="text" name="instagram" value="{{ $navbar->instagram }}" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label>Icon upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" name="icon" class="form-control file-upload-info" disabled placeholder="Upload icon">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="page-header">
              <h3 class="page-title"> Carousel </h3>
            </div>
            {{-- Carousel Section --}}
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Carousel Section</h4>
                    <p class="card-description"> The main image on your landing page </p>
                    <form class="forms-sample" enctype="multipart/form-data" action="{{ route('page-setting.home.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="section" value="carousel">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $carousel->title }}" class="form-control" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="text">Text</label>
                        <input type="text" name="text" value="{{ $carousel->text }}" class="form-control" id="text" placeholder="Text">
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="page-header">
              <h3 class="page-title"> About </h3>
            </div>
            {{-- About Section --}}
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">About Section</h4>
                    <p class="card-description"> Tell about your amazing event! </p>
                    <form class="forms-sample"enctype="multipart/form-data" action="{{ route('page-setting.home.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="section" value="about">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $about->title }}" class="form-control" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="text">Sub Title</label>
                        <input type="text" name="subtitle" value="{{ $about->sub_title }}" class="form-control" id="text" placeholder="Sub Title">
                      </div>
                      <div class="form-group">
                        <label for="text">Text</label>
                        <input type="text" name="text" value="{{ $about->text }}" class="form-control" id="text" placeholder="Text">
                      </div>
                      <div class="form-group">
                        <label for="text">Footer</label>
                        <input type="text" name="footer" value="{{ $about->footer }}" class="form-control" id="text" placeholder="Footer">
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="page-header">
              <h3 class="page-title"> Facts </h3>
            </div>
            {{-- Facts Section --}}
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Facts Section</h4>
                    <p class="card-description"> List abaout your data facts</p>
                    <form class="forms-sample"enctype="multipart/form-data" action="{{ route('page-setting.home.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="section" value="facts">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $about->title }}" class="form-control" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="text">Text</label>
                        <input type="text" name="text" value="{{ $about->text }}" class="form-control" id="text" placeholder="Text">
                      </div>
                    <p class="card-description"> List abaout your data facts</p>
                    <button type="button" class="btn btn-sm btn-outline-success me-5" onclick="addFact()">+ Add facts</button>
                    <div id="facts">
                        <div class="form-group">
                            <label for="text"></label>
                        </div>
                        <h6>Fact 1</h6>
                        <div class="form-group">
                            <label for="text">Title Nominal</label>
                            <input type="text" name="fact-detail-title-1" value="{{ $about->text }}" class="form-control" id="text" placeholder="Text">
                        </div>
                        <div class="form-group">
                            <label for="text">Nominal</label>
                            <input type="number" name="fact-detail-title-1" value="{{ $about->text }}" class="form-control" id="text" placeholder="Text">
                        </div>
                    </div>

                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
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
    let num = 2;
    function addFact() {
      // Buat elemen div baru
      var newDiv = document.createElement("div");
      newDiv.innerHTML = `
        <div id="fact${num}">
          <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" style="margin-right:6px;" onclick="removeFact(${num})"><i class="mdi mdi-minus"></i></button> Fact ${num}
          <div class="form-group" style="margin-top:15px;">
              <label for="text">Title Nominal</label>
              <input type="text" name="fact-detail-title-${num}" value="{{ $about->text }}" class="form-control" placeholder="Text">
          </div>
          <div class="form-group">
              <label for="text">Nominal</label>
              <input type="number" name="fact-detail-${num}" value="{{ $about->text }}" class="form-control" placeholder="Text">
          </div>
        </div>
      `;

      num++;

      // Tambahkan elemen baru ke dalam elemen dengan ID "facts"
      document.getElementById("facts").appendChild(newDiv);
    }

    function removeFact(id) {
      // Hapus elemen dengan ID yang sesuai
      var elementToRemove = document.getElementById("fact" + id);
      elementToRemove.remove();
    }
  </script>
@endpush

