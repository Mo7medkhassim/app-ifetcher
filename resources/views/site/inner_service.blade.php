@extends('layouts.site.app')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ route('front.home') }}">{{__('site.home')}}</a></li>
                <li>{{__('site.service details')}}</li>
            </ol>
            <h2>{{ $service->name }}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="inner-page py-3">
        <div class="container">

            <div class="row content">
                <div class="col-md-6" data-aos="fade-right" >
                    <img class="service_img" src="{{ $service->image_path }}" alt="">

                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <p>
                        {!! $service->desc !!}
                    </p>
                    <!-- <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    </ul> -->
                </div>

            </div>

        </div>
    </div>

</main><!-- End #main -->

@endsection()

@push('scripts')

<script>
    function link_dir() {

    }
</script>

@endpush
