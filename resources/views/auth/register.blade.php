
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register Form</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('sky/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('sky/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('sky/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('sky/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('sky/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('sky/images/logo.svg')}}" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="username">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" :value="old('email')" required autocomplete="username" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password"
                  required autocomplete="new-password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" type="password"
                  name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                 <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.html" class="text-primary">Login</a>
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
  <script src="{{asset('sky/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('sky/js/off-canvas.js')}}"></script>
  <script src="{{asset('sky/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('sky/js/template.js')}}"></script>
  <script src="{{asset('sky/js/settings.js')}}"></script>
  <script src="{{asset('sky/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>

