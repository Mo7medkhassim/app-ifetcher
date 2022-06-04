<!DOCTYPE html>

<html5 dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>{{ config('app.name') }}</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- slick -->
        <link href="{{ asset('site_assets/css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('site_assets/css/slick-theme.css') }}" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <?php if (app()->getLocale() == "ar") : ?>

            <link href="{{asset('site_assets/vendor/bootstrap/css/bootstrap.rtl.min.css')}}" rel="stylesheet">

            <style>
                @font-face {
                    font-family: Tajawal_bold;
                    src: url('/site_assets/vendor/tajawal/Tajawal-Bold.ttf');
                }

                @font-face {
                    font-family: Tajawal;
                    src: url('/site_assets/vendor/tajawal/Tajawal-Regular.ttf');
                }

                @font-face {
                    font-family: cairo;
                    src: url('https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Roboto:wght@100;300;400&display=swap');
                }

                body {
                    font-family: Tajawal !important;

                }


                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                .navbar a,
                .navbar a:focus {
                    font-family: Tajawal_bold !important;
                }

                [dir='rtl'].slick-slide {
                    float: left;
                }

                .contact .info i {
                    float: right !important;
                    margin-left: 5px;
                }

                .bottom-nav .btn-search {
                    left: 0 !important;
                }

                .features .icon-box i {
                    float: right !important;
                }

                .features .icon-box p {
                    margin-right: 60px !important;
                }

                .features .icon-box h4,
                .contact .info h4 {
                    margin: 5px 60px 10px 0 !important;
                }

                .btn-all,
                p {
                    font-family: Tajawal_bold !important;
                }

                #header .language {
                    font-family: Tajawal_bold !important;
                }

                .contact .info p {
                    padding: 0 60px 0 0 !important;
                    font-size: 16px !important;
                }

                [type=email],
                [type=number],
                [type=tel],
                [type=url] {
                    direction: rtl !important;
                }

                .num {
                    display: inline-block !important;
                    direction: ltr !important;
                    /* float: right; */
                }
            </style>

        <?php else : ?>
            <link href="{{asset('site_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

            <style>
                .main_h {
                    color: darkblue;
                }

                .bottom-nav .btn-search {
                    right: 0;
                    /* left: 0 !important; */
                }

                .navbar a,
                .navbar a:focus {
                    letter-spacing: .09rem;
                }

                @media (max-width: 991px) {

                    .navbar a,
                    .navbar a:focus {
                        letter-spacing: .09rem;

                    }
                }
            </style>
        <?php endif; ?>



        <link href="site_assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="{{asset('site_assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('site_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('site_assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('site_assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <!-- <link href="{{asset('site_assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet"> -->


        <!-- aos -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


        <!-- Template Main CSS File -->
        <link href="{{asset('site_assets/css/style.css')}}" rel="stylesheet">


    </head>

    <body>

        <!-- SITE header  -->
        @include('layouts.site._header')

        <!-- site main content -->
        @yield('content')

        <!-- site footer -->

        @include('layouts.site._footer')



        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


        <!-- slick -->
        <!-- <script src="{{asset('site_assets/js/jquery-migrate-1.2.1.min.js')}}"></script> -->
        <script src="{{asset('site_assets/js/jquery-1.11.0.min.js')}}"></script>
        <script src="{{asset('site_assets/js/slick.min.js')}}"></script>

        <!-- Vendor JS Files -->
        <script src="{{asset('site_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('site_assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('site_assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <!-- <script src="{{asset('site_assets/vendor/swiper/swiper-bundle.min.js')}}"></script> -->
        <script src="{{asset('site_assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
        <script src="{{asset('site_assets/vendor/php-email-form/validate.js')}}"></script>


        <!-- aos -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript">
            AOS.init({
                duration: 1200
            })
        </script>
        <script type="text/javascript">
            $('.gCdMUP').addClass('d-none');
        </script>

        <!-- Template Main JS File -->
        <script src="{{ asset('site_assets/js/main.js') }}"></script>

        @stack('scripts')



    </body>

    </html>
