<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - Company Profile</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap" rel="stylesheet">
  <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/css/fontawesome-all.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/css/styles.css') }}" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/frontend/images/favicon.png') }}">
</head>
<body data-spy="scroll" data-target=".fixed-top">

  <!-- Header -->
  <header id="header" class="ex-2-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Log In</h1>
          <p>Belum punya akun? <a class="white" href="{{ route('register') }}">Sign Up</a></p>

          <!-- Login Form -->
          <div class="form-container">
            <form method="POST" action="{{ route('login') }}">
              @csrf

              {{-- Alert untuk login gagal --}}
              @if ($errors->has('login'))
                <div class="alert alert-danger">
                  {{ $errors->first('login') }}
                </div>
              @endif

              <div class="form-group">
                <input type="email" class="form-control-input" id="email" name="email" value="{{ old('email') }}" required>
                <label class="label-control" for="email">Email</label>
                @error('email')
                  <div class="text-danger small">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <input type="password" class="form-control-input" id="password" name="password" required>
                <label class="label-control" for="password">Password</label>
                @error('password')
                  <div class="text-danger small">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group d-flex align-items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="mb-0">Ingat Saya</label>
              </div>

              <div class="form-group">
                <button type="submit" class="form-control-submit-button">LOG IN</button>
              </div>
            </form>
          </div>
          <!-- end of form-container -->
        </div>
      </div>
    </div>
  </header>

  <!-- Scripts -->
  <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/swiper.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/validator.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
</body>
</html>
