  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      <div class="container-fluid">

          <div class="row justify-content-center">
              <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                  <a href="{{ route('front.home') }}" class="logo me-auto me-lg-0"><img src="{{ asset('site_assets/img/logoo.png') }}" alt="" class="img-fluid"></a>

                  <nav id="navbar" class="navbar order-last order-lg-0">
                      <ul>
                          <!-- <li><a class="nav-link scrollto" href="#hero">{{__('site.home')}}</a></li> -->
                          <li><a class="nav-link scrollto" href="#about">{{__('site.about')}}</a></li>
                          <li><a class="nav-link scrollto" href="#services">{{__('site.services')}}</a></li>
                          <li><a class="nav-link scrollto" href="#cta">{{__('site.Work With Us')}}</a></li>
                          <!-- <li><a class="nav-link scrollto" href="#contact">{{__('site.contact')}}</a></li> -->
                          <li><a class="nav-link scrollto" href="#app">{{__('site.Our App')}}</a></li>
                          <!-- <li><a class="nav-link scrollto" href="#">{{__('site.community')}}</a></li> -->

                      </ul>
                      <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav><!-- .navbar -->

                  <div class="">

                      <a class="language px-2" href="{{ url('admin/login') }}">
                          Login
                      </a>

                      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                      <a class="language px-2 <?php if ($localeCode == app()->getLocale()) {
                                                    echo ' d-none';
                                                } ?>" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                          {{ $properties['native'] }}
                      </a>

                      @endforeach

                  </div>
              </div>
          </div>

      </div>
  </header><!-- End Header -->
