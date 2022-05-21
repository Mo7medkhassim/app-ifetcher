@extends('layouts.site.app')

@section('content')

<div class="about" id="about">
<div class="container">
        <div class="about-text">

        </div>
    </div>
</div>

<main id="main">






    <!-- ======= About Section ======= -->
    <div  class="about mt-3 mb-5">
        <div class="container">

            <div class="row content">

                <div class="col-md-6 pt-4 ">
                    <!-- <h2>Welcome to Rabdan Mall</h2> -->
                    <h2 data-aos="zoom-in">{{__('site.Why Golden Imprint')}}</h2>
                    <p  data-aos="zoom-in">
                        {{__('site.We do not claim that we')}} .
                    </p>
                    <p  data-aos="zoom-in">
                        {{__('site.We take you to what you aspire to')}}
                    </p>
                    <p  data-aos="zoom-in">
                        {{__('site.We always put our golden mark')}}
                    </p>

                </div>
                <div class="col-md-6"  data-aos="zoom-in">
                    <img src="{{ asset('site_assets/img/about.png') }}" alt="">

                    <!-- <ul  data-aos="zoom-in">
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                    </ul>
                    <p class="fst-italic"  data-aos="zoom-in">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p> -->
                </div>
            </div>

        </div>
    </div><!-- End About Section -->

</main>
@endsection()

@push('scripts')

<script>
    function link_dir() {

    }
</script>

@endpush
