@extends('layouts.site.app')

@section('content')

<main id="main">


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ route('front.home') }}">{{__('site.home')}}</a></li>
                <li>{{__('site.Contact')}}</li>
            </ol>
            <h2>{{__('site.Contact')}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact py-5">
        <div class="container">
            <div class="container">

                <div class="section-title text-center">

                    <h2>{{__('site.Help & Support')}}</h2>

                    <p>{{__('site.Feel Free To Contact us')}}</p>
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address" data-aos="fade-up">
                            <i class="bi bi-geo-alt"></i>
                            <h4>{{__('site.Location')}}:</h4>
                            <p>{{__('site.Corniche')}}, {{__('site.Building')}} c17 <br>
                                {{__('site.Abu Dhabi')}}, {{__('site.UAE')}}
                            </p>
                        </div>

                        <div class="email" data-aos="fade-up">
                            <i class="bi bi-envelope"></i>
                            <h4>{{__('site.Email')}}:</h4>
                            <p>info@goldenwebimprint.com</p>
                        </div>

                        <div class="phone" data-aos="fade-up">
                            <i class="bi bi-phone"></i>
                            <h4>{{__('site.Phone')}}:</h4>
                            <p>+971 54 77 51416</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

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
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="{{__('site.Phone')}}" >
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
                            <textarea class="form-control" name="message" rows="5" placeholder="{{__('site.Message')}}" ></textarea>
                        </div>

                        <div class="text-center" data-aos="zoom-in"><button class="btn btn-dark mt-3 px-3 " type="submit">{{__('site.Send Message')}}</button></div>
                    </form>

                </div>

            </div>

            <div class="mt-5" data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

        </div>
    </div><!-- End Contact Section -->


</main>
@endsection()

@push('scripts')

<script>
    function link_dir() {

    }
</script>

@endpush
