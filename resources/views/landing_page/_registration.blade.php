<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
          <h1 class="display-6 mb-5">
            If You Have Any Query, Please Contact Us
          </h1>
          <p class="mb-4">
            The contact form is currently inactive. Get a functional and
            working contact form with Ajax & PHP in a few minutes. Just copy
            and paste the files, add a little code and you're done.
            <a href="https://htmlcodex.com/contact-form">Download Now</a>.
          </p>
          <form enctype="multipart/form-data" action="{{ route('registration') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row g-3">
                {{-- Gender --}}
              <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="pria" value="pria" checked>
                    <label class="form-check-label" for="pria">
                      Pria
                    </label>
                  </div>
              </div>
              <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="wanita" value="wanita">
                    <label class="form-check-label" for="wanita">
                      Wanita
                    </label>
                  </div>
              </div>
                {{-- Name --}}
              <div class="col-12">
                @if ($errors->has('name'))
                    <small style="color: red">{{ $errors->first('name') }}</small>
                @endif
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control @if($errors->has('name')) is-invalid @endif"
                    value="{{ old('name') }}"
                    id="name"
                    name="name"
                    placeholder="Nama Lengkap"
                  />
                  <label for="name"><span style="color: red">*</span>Nama Lengkap</label>
                </div>
            </div>

              {{-- Address --}}
              <div class="col-12">
                @if ($errors->has('address'))
                    <small style="color: red">{{ $errors->first('address') }}</small>
                @endif
                <div class="form-floating">
                  <textarea
                    class="form-control @if($errors->has('address')) is-invalid @endif"
                    placeholder="Alamat"
                    name="address"
                    id="address"
                    style="height: 100px"
                    value="{{ old('address') }}"
                  ></textarea>
                  <label for="address"><span style="color: red">*</span>Alamat</label>
                </div>
                @if ($errors->has('address'))
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
              </div>

              {{-- Phone --}}
              <div class="col-12">
                @if ($errors->has('phone'))
                    <small style="color: red">{{ $errors->first('phone') }}</small>
                @endif
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control @if($errors->has('phone')) is-invalid @endif"
                    id="phone"
                    name="phone"
                    value="{{ old('phone') ?? '+62' }}"
                    placeholder="+62"
                  />
                  <label for="phone"><span style="color: red">*</span>No. Tlp</label>
                </div>
                @if ($errors->has('phone'))
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
              </div>

              {{-- Age --}}
              <div class="col-12">
                @if ($errors->has('age'))
                    <small style="color: red">{{ $errors->first('age') }}</small>
                @endif
                <div class="form-floating">
                  <input
                    type="number"
                    class="form-control @if($errors->has('age')) is-invalid @endif"
                    id="umur"
                    value="{{ old('age') }}"
                    name="age"
                    placeholder="Umur"
                  />
                  <label for="umur"><span style="color: red">*</span>Umur</label>
                </div>
              </div>

              {{-- Category --}}
              <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" id="individu" value="individu" checked>
                    <label class="form-check-label" for="individu">
                      Individu
                    </label>
                  </div>
              </div>
              <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" id="grup" value="grup">
                    <label class="form-check-label" for="grup">
                      Grup
                    </label>
                  </div>
              </div>

               {{-- Invoice --}}
               {{-- <div class="col-12">
                    <h6>Bukti pembayaran</h6>
                    <p>(OPTIONAL) Anda bisa mengisinya sebelum atau setelah registrasi</p>
                    <input type="file" name="invoice" id="invoice" class="col-lg-3 col-sm-12 col-md-3" form="none">
              </div> --}}

              {{-- Class --}}
              {{-- <div class="col-12">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Works with selects</label>
                  </div>
              </div> --}}

              <p class="mb-2 mt-4">
                <span style="color: red">*</span>Tambahkan username dan password untuk mengakses website dan melihat informasi mengenai lomba.
              </p>

              {{-- Username --}}
              <div class="col-12">
                @if ($errors->has('username'))
                    <small style="color: red">{{ $errors->first('username') }}</small>
                @endif
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control @if($errors->has('username')) is-invalid @endif"
                    id="username"
                    name="username"
                    value="{{ old('username') }}"
                    placeholder="username"
                  />
                  <label for="username"><span style="color: red">*</span>Username</label>
                </div>
              </div>

              {{-- Password --}}
              <div class="col-12">
                @if ($errors->has('password'))
                    <small style="color: red">{{ $errors->first('password') }}</small>
                @endif
                <div class="form-floating">
                  <input
                    type="password"
                    class="form-control @if($errors->has('password')) is-invalid @endif"
                    id="password"
                    name="password"
                    placeholder="password"
                  />
                  <label for="password"><span style="color: red">*</span>Password</label>
                </div>
              </div>

              {{-- confirm password --}}
              <div class="col-12">
                @if ($errors->has('confirm_password'))
                    <small style="color: red">{{ $errors->first('confirm_password') }}</small>
                @endif
                <div class="form-floating">
                  <input
                    type="password"
                    class="form-control @if($errors->has('confirm_password')) is-invalid @endif"
                    id="confirm_password"
                    name="confirm_password"
                    placeholder="confirm_password"
                  />
                  <label for="confirm_password"><span style="color: red">*</span>Confirm Password</label>
                </div>
              </div>

              <div class="col-12">
                <button class="btn btn-primary py-3 px-5" type="submit">
                  Reagistration Now
                </button>
              </div>
            </div>
          </form>
        </div>
        {{-- <div
          class="col-lg-6 wow fadeIn"
          data-wow-delay="0.5s"
          style="min-height: 450px"
        >
          <div class="position-relative rounded overflow-hidden h-100">
            <iframe
              class="position-relative w-100 h-100"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
              frameborder="0"
              style="min-height: 450px; border: 0"
              allowfullscreen=""
              aria-hidden="false"
              tabindex="0"
            ></iframe>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  <!-- Contact End -->

  @push('js')
    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);

        $("#invoice").filepond({
            allowImagePreview: true,
            allowImageFilter: true,
            imagePreviewHeight: 300,
            allowMultiple: true,
            allowFileTypeValidation: true,
            allowRevert: true,
            acceptedFileTypes: ["image/png", "image/jpeg", "image/jpg", "application/pdf"],
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
    <script>
        document.getElementById('phone').addEventListener('input', function (event) {
            // Ambil nilai dari input
            let inputValue = event.target.value;

            // Pastikan karakter pertama adalah '+62'
            if (!inputValue.startsWith('+62')) {
                // Jika tidak, tambahkan kembali '+62'
                event.target.value = '+62';
            }
        });
    </script>
  @endpush
