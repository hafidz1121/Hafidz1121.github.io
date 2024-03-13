<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Verification Email</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets_landing')}}/images/favicon.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('assets_landing')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets_landing')}}/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="{{asset('assets_landing')}}/css/animate.css" />
    <link rel="stylesheet" href="{{asset('assets_landing')}}/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{asset('assets_landing')}}/css/glightbox.min.css" />
    <link rel="stylesheet" href="{{asset('assets_landing')}}/css/main.css" />

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Error Page Area -->
    <section class="error-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Error Image -->
                    <div class="error-image">
                        <img src="{{asset('assets_landing')}}/images/mail-success.svg" alt="#">
                    </div>
                    <!--/ End Error Image -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Error Text -->
                    <div class="error-text">
                        <h2><span>{{ $status }}!</span>{{ $message }}</h2>
                        {{-- <p>Now You Can Login With Your Account!</p> --}}
                        <div class="button">
                            <a href="{{ route('login') }}" class="btn">Back To Login</a>
                        </div>
                    </div>
                    <!--/ End Error Text -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Error Page Area-->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{asset('assets_landing')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets_landing')}}/js/count-up.min.js"></script>
    <script src="{{asset('assets_landing')}}/js/wow.min.js"></script>
    <script src="{{asset('assets_landing')}}/js/tiny-slider.js"></script>
    <script src="{{asset('assets_landing')}}/js/glightbox.min.js"></script>
    <script src="{{asset('assets_landing')}}/js/imagesloaded.min.js"></script>
    <script src="{{asset('assets_landing')}}/js/isotope.min.js"></script>
    <script src="{{asset('assets_landing')}}/js/main.js"></script>
</body>

</html>