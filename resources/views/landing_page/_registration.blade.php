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
          <form>
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
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Nama Lengkap"
                  />
                  <label for="name"><span style="color: red">*</span>Nama Lengkap</label>
                </div>
              </div>

              {{-- Address --}}
              <div class="col-12">
                <div class="form-floating">
                  <textarea
                    class="form-control"
                    placeholder="Alamat"
                    id="address"
                    style="height: 100px"
                  ></textarea>
                  <label for="address"><span style="color: red">*</span>Alamat</label>
                </div>
              </div>

              {{-- Phone --}}
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="phone"
                    name="phone"
                    placeholder="phone"
                  />
                  <label for="phone"><span style="color: red">*</span>No. Tlp</label>
                </div>
              </div>

              {{-- Age --}}
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="number"
                    class="form-control"
                    id="umur"
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
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="username"
                  />
                  <label for="username"><span style="color: red">*</span>Username</label>
                </div>
              </div>

              {{-- Password --}}
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="password"
                  />
                  <label for="password"><span style="color: red">*</span>Password</label>
                </div>
              </div>

              {{-- confirm password --}}
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
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
