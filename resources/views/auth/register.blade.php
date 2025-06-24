<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Sign Up - Tivo - SaaS App HTML Landing Page Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.png') }}">

	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    


    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Sign Up</h1>
                   <p>Fill out the form below to sign up for Tivo. Already signed up? Then just <a class="white" href="log-in.html">Log In</a></p> 
                    <!-- Sign Up Form -->
                    <div class="form-container">
                    <form  method="POST" action="{{ route('registerStore') }}">
                        @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control-input @error('name') is-invalid @enderror" id="sname" value="{{ old('name') }}" required>
                    <label class="label-control" for="sname">Name</label>
                    @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control-input @error('email') is-invalid @enderror" id="semail" value="{{ old('email') }}" required>
                    <label class="label-control" for="semail">Email</label>
                    @error('email')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control-input @error('password') is-invalid @enderror" id="spassword" required>
                    <label class="label-control" for="spassword">Password</label>
                    @error('password')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control-input" id="spassword-confirmation" required>
                        <label class="label-control" for="spassword-confirmation">Confirm Password</label>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">SIGN UP</button>
                    </div>

                </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


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