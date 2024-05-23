<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Form</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('sky/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('sky/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('sky/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('sky/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('sky/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('sky/images/logo.svg') }}" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              {{-- form --}}
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <input type="email" placeholder="email" class="form-control form-control-lg" name="email" :value="old('email')" required autofocus autocomplete="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" required autocomplete="current-password" placeholder="password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>  
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('sky/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('sky/js/off-canvas.js') }}"></script>
  <script src="{{ asset('sky/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('sky/js/template.js') }}"></script>
  <script src="{{ asset('sky/js/settings.js') }}"></script>
  <script src="{{ asset('sky/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>

</html>
