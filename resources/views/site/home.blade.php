@extends('layouts.site.app')

@section('content')
<!-- <style>
    #header {
        background: #a70b0b;
    }
</style> -->


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 hero-img text-center">
                <img src="{{asset('site_assets/img/hero-img.png') }}" alt="">
            </div>
            <div class="col-sm-6 hero-text d-flex justify-content-center  align-items-center">

                <div class="text-center">

                    <h1 class="animate__animated animate__fadeIndown">{{__('site.We Create the story Behind your Success')}}</h1>

                    <h2 class="animate__animated animate__fadeIndown">{{__('site.App Experiences')}}</h2>
                    <a href="#cta" data-aos="zoom-in" class="btn btn-all  my-2">{{__('site.Get Free Quote')}}</a>
                </div>

            </div>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="about" class="about mt-2">
        <div class="container" >




        <div class="section-title text-center" data-aos="zoom-in">
                <h2>{{__('site.Why us?')}}</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>
            <div class="about-content scribble-embed-wrapper" data-aos="zoom-in">
                <!-- <h2>Welcome to Rabdan Mall</h2> -->
                <p class="px-2">{{__('site.about text')}}
                </p>
                <div class="about-vedio">
                    <video width="320" height="260" controls>
                        <source src="{{ asset('site_assets/vedio/pexels-c-technical-5981916.mp4') }}" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/-XamO1VnVbo?rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope" allowfullscreen=""></iframe> -->
            </div>

        </div>
    </section>
    <!-- ======= Services Section ======= -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title text-center" data-aos="zoom-in">
                <h2>{{__('site.What Can We Do For You?')}}</h2>

            </div>


            <div class="row">
                @if ( ! empty ($services) && $services->count() > 0)
                @foreach ($services as $service)
                <div class="col-lg-4 pb-5 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box text-center">
                        <a href="{{ route('front.service', $service->dir) }}">
                            <img src="{{ $service->image_path }}" alt="">
                        </a>
                        <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                        <h3><a href="{{ route('front.service', $service->dir) }}">{{ $service->name }}</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis facere voluptates hic, illum.</p>
                    </div>

                </div>
                @endforeach
                @else
                <div class="alert alert-info">Please Add Services !</div>
                @endif

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row ">
                <div class="col-md-6 hero-img">
                    <img data-aos="fade-left" src="{{asset('site_assets/img/criteria-img.png') }}" alt="">
                </div>
                <div class="col-md-6 d-flex pt-4 justify-content-center  align-items-center " data-aos="fade-right">
                    <div class="text-center">
                        <h3 data-aos="fade-left">{{__('site.Get Free Quote')}}</h3>
                        <p data-aos="fade-left"> {{__('site.Every Industry')}}</p>
                        <!-- <a class="cta-btn align-middle" href="#">{{__('site.About')}}</a> -->
                    </div>
                </div>
                <div class="col-12 text-center pt-4">
                    <h3 data-aos="fade-left">{{__('site.Stop delaying')}}</h3>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="row">
                <div class="col-md-5 hero-img">
                    <img data-aos="fade-left" src="{{asset('site_assets/img/criteria-img.png') }}" alt="">
                </div>
                <div class="col-md-7 d-flex justify-content-center align-items-center">
                    <div class="text-center " data-aos="fade-left">
                        <h3 data-aos="fade-left">{{__('site.There is An App')}}</h3>

                        <div class="partner-hit">
                            <p data-aos="fade-left">{{__('site.We Are dedicating for')}}</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->
    <!-- ======= Cleint Section ======= -->
    <section id="clients" class="clients">
        <div class="container">

            <div class="row brands no-gutters clients-wrap clearfix wow fadeInUp">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                </div>

                <!-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="client-logo">
                        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968350.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="client-logo">
                        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="client-logo">
                        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968350.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="client-logo">
                        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="client-logo">
                        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968350.png" class="img-fluid" alt="">
                    </div>
                </div> -->
                <!-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="client-logo">
                        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="client-logo">
                        <img src="https://cdn-icons-png.flaticon.com/128/5968/5968350.png" class="img-fluid" alt="">
                    </div>
                </div> -->

                <!-- <div class="col-4">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-4">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-4">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-4">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                    </div>
                </div> -->

            </div>

        </div>
    </section>
    <!-- ======= Client Section ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact py-5">
        <div class="container">

            <div class="section-title text-center">

                <h2>{{__('site.Help & Support')}}</h2>

                <p>{{__('site.Feel Free To Contact us')}}</p>
            </div>
        </div>



        <div class="container">

            <div class="row mt-1">



                <div class="col-md-6 mx-auto mt-3 mt-lg-0">

                    <form action="{{ route('front.store') }}" method="post" role="form">
                        @if (Session::has('Successfully'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{{ Session::get('Successfully') }}</li>
                            </ul>
                        </div>
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group" data-aos="fade-right">
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{__('site.Your Name')}}" required>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback text-danger mt-2" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mt-3 mt-md-0" data-aos="zoom-in">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="{{__('site.Phone')}}">
                                @if ($errors->has('phone'))
                                <span class="invalid-feedback text-danger mt-2" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mt-3" data-aos="fade-right">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{__('site.Your Email')}}" required>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback text-danger mt-2" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group mt-3" data-aos="zoom-in">
                            <textarea class="form-control" name="message" rows="5" placeholder="{{__('site.Message')}}"></textarea>
                        </div>

                        <div class="text-center" data-aos="zoom-in"><button class="btn btn-dark mt-3 px-3 " type="submit">{{__('site.Send Message')}}</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- ======= Contact Section ======= -->


</main><!-- End #main -->
@endsection()

@push('scripts')




<?php if (app()->getLocale() == "ar") : ?>

    <script type="text/javascript">
        $('.dine-brand').slick({
            centerMode: true,
            arrows: false,
            dots: false,
            infinite: true,
            autoplay: true,
            centerPadding: '60px',
            autoplaySpeed: 3000,
            slidesToShow: 3,
            variableWidth: false,
            rtl: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        centerPadding: '40px',
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        // centerMode: true,
                        // arrows: false,
                        slidesToScroll: 1,
                        // centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>

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
            rtl: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    </script>

<?php else : ?>

    <script type="text/javascript">
        $('.dine-brand').slick({
            centerMode: true,
            dots: false,
            infinite: true,
            arrows: false,
            autoplay: true,
            centerPadding: '60px',
            autoplaySpeed: 3000,
            slidesToShow: 3,
            variableWidth: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        // dots: true
                        centerPadding: '40px',
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>

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
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    </script>

<?php endif; ?>



@endpush
