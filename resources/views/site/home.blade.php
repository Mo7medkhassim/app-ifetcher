@extends('layouts.site.app')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container-fluid">

        @if (Session::has('Successfully'))
        <div id="alert" class="alert alert-success over-alert-success">
            <p class="warp-text">{!! Session::get('Successfully') !!}</p>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-sm-6 hero-img text-center">
                <img src="{{asset('site_assets/img/hero-img.png') }}" alt="">
            </div>
            <div class="col-sm-6 hero-text d-flex justify-content-center  align-items-center">

                <div class="text-center">

                    <h1 class="animate__animated animate__fadeIndown">{{__('site.We Create the story Behind your Success')}}</h1>

                    <h2 class="animate__animated animate__fadeIndown">{{__('site.App Experiences')}}</h2>
                    <a href="#contact" data-aos="zoom-in" class="btn btn-all btn-neutral  my-2">{{__('site.contact')}}</a>
                </div>

            </div>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title text-center" data-aos="zoom-in">
                <h2>{{__('site.Why us?')}}</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>
            <div class="about-content scribble-embed-wrapper mt-5" data-aos="zoom-in">
                <!-- <h2>Welcome to Rabdan Mall</h2> -->
                <p class="px-3">{{__('site.about text')}}
                </p>
                <div class="about-vedio">

                    <video width="320" height="240" controls>
                        <source src="{{ asset('site_assets/vedio/pexels-c-technical-5981916.mp4') }}" type="video/mp4">
                        <source src="{{ asset('site_assets/vedio/pexels-c-technical-5981916.mp4') }}" type="video/ogg">
                        <source src="{{ asset('site_assets/vedio/pexels-c-technical-5981916.mp4') }}" type="video/webm">
                        <object data="movie.mp4" width="320" height="240">
                            <embed src="{{ asset('site_assets/vedio/pexels-c-technical-5981916.mp4') }}" width="320" height="240">
                        </object>
                    </video>
                </div>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/-XamO1VnVbo?rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope" allowfullscreen=""></iframe> -->
            </div>

        </div>
    </section> <!-- ======= About Section ======= -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title text-center" data-aos="zoom-in">
                <h2>{{__('site.What Can We Do For You?')}}</h2>
            </div>

            <div class="services-items">

                @if ( ! empty ($services) && $services->count() > 0)
                @foreach ($services as $service)
                <div class="services-item pb-5 " data-aos="fade-up">
                    <div class="icon-box text-center">
                        <a href="#">
                            <img src="{{ $service->image_path }}" alt="">
                        </a>
                        <h3>{{ $service->name }}</h3>
                        <p>{!! $service->desc !!}</p>
                    </div>
                </div>
                @endforeach
                @else
                <div class="alert alert-info">Please Add Services!</div>
                @endif

            </div>


        </div>
    </section> <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row ">
                <div class="col-md-6 section-img">
                    <img data-aos="fade-left" src="{{asset('site_assets/img/criteria-img.png') }}" alt="">
                </div>
                <div class="col-md-6 d-flex pt-4 justify-content-center  align-items-center " data-aos="fade-right">
                    <div class="text-center">
                        <h3 data-aos="fade-left">{{__('site.Every Industry') }}</h3>
                        <!-- <p data-aos="fade-left"> {{__('site.Every Industry')}}</p> -->
                        <!-- <a class="cta-btn align-middle" href="#">{{__('site.About')}}</a> -->
                    </div>
                </div>
                <div class="col-12 text-center pt-4">
                    <h5 data-aos="fade-left">{{__('site.Stop delaying')}}</h5>
                </div>
            </div>

        </div>
    </section> <!-- End Cta Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="row">
                <div class="col-md-5 section-img">
                    <img data-aos="fade-left" src="{{asset('site_assets/img/app/partner-img.png') }}" alt="">
                </div>
                <div class="col-md-7 d-flex justify-content-center align-items-center">
                    <div class="text-center " data-aos="fade-left">
                        <h3 data-aos="fade-left">{{__('site.There is An App')}}</h3>

                        <div class="partner-hit mt-4">
                            <p data-aos="fade-left">{{__('site.We Are dedicating for')}}</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> <!-- End Features Section -->

    <!-- ======= Partner Section ======= -->
    <section id="Partner" class="Partner">
        <div class="container">

            <div class="row brands no-gutters Partner-wrap clearfix wow fadeInUp">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('site_assets/img/portfolio/php.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('site_assets/img/portfolio/js.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('site_assets/img/portfolio/python.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('site_assets/img/portfolio/c-sharp.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('site_assets/img/portfolio/html-5.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('site_assets/img/portfolio/css-3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('site_assets/img/portfolio/react.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('site_assets/img/portfolio/nodejs.png') }}" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section> <!-- ======= Partner Section ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact py-5">
        <div class="container">

            <div class="section-title text-center">

                <h2>{{__('site.let')}}</h2>

                <!-- <p>{{__('site.Leave us a message')}}</p> -->
            </div>
        </div>
        <div class="container">

            <div class="row mt-1">
                <div class="col-md-6 mx-auto px-3 mt-3 mt-lg-0" data-aos="zoom-in">

                    <form action="{{ route('front.store') }}" method="post" role="form">

                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{__('site.Your Name')}}" required>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback text-danger mt-2" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control num" name="phone" id="phone" placeholder="05 000 0000">
                                @if ($errors->has('phone'))
                                <span class="invalid-feedback text-danger mt-2" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{__('site.Your Email')}}" required>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback text-danger mt-2" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="{{__('site.Message')}}"></textarea>
                        </div>

                        <div class="text-center"><button class="btn btn-all btn-neutral  mt-3 px-3 " type="submit">{{__('site.Send Message')}}</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section> <!-- ======= Contact Section ======= -->

    <!-- ======= Our App Section ======= -->
    <section id="app" class="app">
        <div class="container fluid">
            <div class="row">

                <div class="col-md-4 section-img">
                    <img data-aos="fade-right" src="{{ asset('site_assets/img/app/app-img.png') }}" alt="">
                </div>

                <div class="col-md-8 app-content">
                    <div data-aos="fade-left" class="app-top">
                        <h4>
                            {{__('site.Special Offers For')}} <br>
                            {{__('site.Association Members')}}
                        </h4>
                        <img src="{{asset('site_assets/img/app/inventor.png') }}" alt="">
                    </div>
                    <div data-aos="fade-right" class="app-content-text">
                        <p>{{__('site.In line with the Dubai') }}</p>
                        <p class="app-coming">{{__('site.comming soon') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- ======= Our App Section ======= -->

</main><!-- End #main -->
@endsection()

@push('scripts')

<?php if (app()->getLocale() == "ar") : ?>
    <script type="text/javascript">
        $('.brands').slick({
            dots: false,
            infinite: true,
            arrows: false,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 5,
            slidesToScroll: 1,
            centerPadding: '40px',
            rtl: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        centerPadding: '40px',
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        centerPadding: '40px',
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        centerPadding: '40px',
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }

            ]
        });

        $('.services-items').slick({
            dots: true,
            rtl: true,
            infinite: true,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
<?php else : ?>
    <script type="text/javascript">
        $('.services-items').slick({
            dots: true,
            infinite: true,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('.brands').slick({
            dots: false,
            infinite: true,
            arrows: false,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 5,
            slidesToScroll: 1,
            centerPadding: '40px',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        centerPadding: '40px',
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        centerPadding: '40px',
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        centerPadding: '40px',
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    </script>

<?php endif; ?>

<script>
    $(document).ready(function() {
        $("#alert").delay(15000).fadeOut(500);
    });
</script>


@endpush
