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

                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
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

        <!-- contact media -->

        <!-- <div class="floating-btns">
            <a class="whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=+97142541110&amp;text=Hi!%20Is%20this%20the%20right%20time%20to%20talk%20to%20you?">
                <svg class="svg-inline--fa fa-whatsapp fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
                </svg>
                <i class="fab fa-whatsapp"></i>
            </a>
            <a class="email" target="_blank" href="mailto:info@perfectlinesports.com">
                <svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path>
                </svg>
                <i class="far fa-envelope"></i>
            </a>
        </div> -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <script type="text/javascript">
            // whatsap number icon
            (function() {
                var options = {
                    whatsapp: "+971555507157", // WhatsApp number
                    call_to_action: "Message us", // Call to action
                    position: "left", // Position may be 'right' or 'left'

                };
                var proto = document.location.protocol,
                    host = "whatshelp.io",
                    url = proto + "//static." + host;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url + '/widget-send-button/js/init.js';
                s.onload = function() {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);


            })();
        </script>

        <!-- slick -->
        <script src="{{asset('site_assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
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
