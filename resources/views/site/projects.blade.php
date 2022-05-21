@extends('layouts.site.app')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ route('front.home') }}">{{__('site.home')}}</a></li>
                <li>{{__('site.Our Projects')}}</li>
            </ol>
            <h2>{{__('site.Our Projects')}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
        <div class="container text-center">

            <div class="section-title text-center" data-aos="flip-left">
                <h2>{{__('site.Our Projects')}}</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="row ">

<div class="col-lg-4 col-md-6" data-aos="flip-down">

    <a class="portfolio-item" target="_blank" href="https://future23uae.com/">
        <img src="{{asset('site_assets/img/portfolio/future23uae.jpeg')}}" alt="">
        <i class="bx bx-link"></i>
    </a>

</div>
<div class="col-lg-4 col-md-6" data-aos="flip-down">

    <a class="portfolio-item" target="_blank" href="https://mmsge.com/">
        <img src="{{asset('site_assets/img/portfolio/mmsge.jpeg')}}" alt="">
        <i class="bx bx-link"></i>
    </a>

</div>
<div class="col-lg-4 col-md-6" data-aos="flip-down">

    <a class="portfolio-item" target="_blank" href="https://www.ejadae.com/">
        <img src="{{asset('site_assets/img/portfolio/ejadae.jpeg')}}" alt="">
        <i class="bx bx-link"></i>
    </a>

</div>
<div class="col-lg-4 col-md-6" data-aos="flip-down">

    <a class="portfolio-item" target="_blank" href="https://www.bananaballoonsuae.com/">
        <img src="{{asset('site_assets/img/portfolio/bananaballoonsuae.jpeg')}}" alt="">
        <i class="bx bx-link"></i>
    </a>

</div>
<div class="col-lg-4 col-md-6" data-aos="flip-down">

    <a class="portfolio-item" target="_blank" href="https://albuteencoast.ae/">
        <img src="{{asset('site_assets/img/portfolio/albuteencoast.jpeg')}}" alt="">
        <i class="bx bx-link"></i>
    </a>

</div>
<div class="col-lg-4 col-md-6" data-aos="flip-down">

    <a class="portfolio-item" target="_blank" href="https://rabdanmall.com/">
        <img src="{{asset('site_assets/img/portfolio/rabdan.png')}}" alt="">
        <i class="bx bx-link"></i>
    </a>

</div>



</div>
            <!-- <a href="{{route('front.contact')}}" data-aos="zoom-in" class="btn-all btn">{{__('site.All Projects')}}</a> -->

        </div>
    </section>
    <!-- End Portfolio Section -->

      <!-- ======= Our Projects Section ======= -->
      <!-- <div id="Our Projects" class="Our Projects pb-5 mb-5">
        <div class="container">

            <div class="section-title text-center my-3">
            <p>{{__('site.Our')}}</p>
            </div>

            <div class="row">


            </div>

        </div>
    </div> -->
    <!-- End Our Projects Section -->


</main><!-- End #main -->

@endsection()

@push('scripts')

<script>
    function link_dir() {

    }
</script>

@endpush
