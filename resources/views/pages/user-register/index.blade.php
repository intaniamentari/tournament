@extends('layout')

@section('content.admin')
  <body>
    <div class="container-scroller">
      @include('_navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        @include('_sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> User Register - Data </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Register</h4>
                    <p class="card-description"> Add class <code>.table-hover</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Category</th>
                              <th>Register</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($users as $user)
                            <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->category }}</td>
                              <td>{{ $user->created_at }}</td>
                              <td><label class="badge badge-danger">Pending</label></td>
                              <td>
                                <button class="btn btn-inverse-primary btn-icon"><i class="mdi mdi-pencil"></i></button>
                                {{-- <a href="{{ route('user-register.delete', ['id' => $user->id]) }}" class="btn btn-inverse-danger btn-icon" style="padding-top: 11px;" data-confirm-delete="true">
                                        <i class="mdi mdi-delete"></i>
                                </a> --}}
                                <form id="deleteForm" action="{{ route('user-register.delete', ['id' => $user->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-inverse-danger btn-icon" id="deleteButton">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </form>
                                {{-- <a href="{{ route('user-register.delete') }}" data-confirm-delete="true">
                                    <button class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete"></i></button>
                                </a> --}}
                            </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
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
       document.getElementById('deleteButton').addEventListener('click', function(event) {
        event.preventDefault(); // Menghentikan aksi default dari tombol submit

        // Menampilkan SweetAlert
        Swal.fire({
            title: 'Yakin ingin menghapus data?',
            text: "Anda tidak akan bisa mengembalikannya!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            // Jika pengguna menekan tombol konfirmasi
            if (result.isConfirmed) {
                // Submit form hapus
                document.getElementById('deleteForm').submit();
            }
        });
    });
//     Swal.fire({
//     title: 'Yakin ingin menghapus data?',
//     text: "You won't be able to revert this !",
//     icon: 'warning',
//     showCancelButton: true,
//     confirmButtonColor: '#3085d6',
//     cancelButtonColor: '#d33',
//     confirmButtonText: 'Yes, delete it!'
// }).then((result) => {
//     if (result.isConfirmed) {
//         $(`[data-penguji=${id_penguji}]`).parents('.raised.card').remove()
//     }
// })
</script>
@endpush
