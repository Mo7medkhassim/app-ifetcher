@extends('layouts.site.app')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ route('front.home') }}">{{__('site.home')}}</a></li>
                <li>{{__('site.Services')}}</li>
            </ol>
            <h2>{{__('site.Services')}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

      <!-- ======= Services Section ======= -->
      <div id="services" class="services pb-5 mb-5">
        <div class="container">

            <div class="section-title text-center my-3">
            <p>{{__('site.service_details')}}</p>
            </div>

            <div class="row">
                @if ( ! empty ($services) && $services->count() > 0)
                @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box text-center">
                        <a href="{{ route('front.service', $service->dir) }}">
                            <img src="{{ $service->image_path }}" alt="">
                        </a>
                        <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                        <h4><a href="{{ route('front.service', $service->dir) }}">{{ $service->name }}</a></h4>
                    </div>
                </div>
                @endforeach
                @else
                    <div class="alert alert-info">{{__('site.no_data_found')}}</div>
                @endif

            </div>

        </div>
    </div><!-- End Services Section -->


</main><!-- End #main -->

@endsection()

@push('scripts')

<script>
    function link_dir() {

    }
</script>

@endpush
