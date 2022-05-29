<!-- ======= Footer ======= -->
<footer id="footer" class="py-5">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4">
                    <div class="footer-info">

                    <a href="{{ route('front.home') }}" class="logo me-auto me-lg-0"><img  src="{{ asset('site_assets/img/logoo.png') }}" width="120" height="55" alt="" class="img-fluid"></a>
                        <p>
                            <span>{{__('site.iFetcher Projects')}}</span></br>
                            {{__('site.Nauf Tower Al Maktoum Bridge')}} <br>
                            {{__('site.Dubai')}} , {{__('site.United Arab Emirates')}} <a class="num" href="tel:60 054 5544"><span> 60 054 5544 </span></a> <br><br>

                            <span>{{__('site.Fetcher LTD')}}</span>
                             <br>
                            {{__('site.& 71-75 Shelton Street,')}} {{__('site.Covent Garden')}}</br>
                         {{__('site.London UK - iFetcher LTD')}} <a class="num" href="tel:600 545544"> <span> +971 60 054 5544 </span></a>  <br><br>

                            <strong>{{__('site.Email')}}:</strong> <a style="color: white;" href="#"><span>info@ifetcher.com</span></a><br>
                        </p>
                        <!-- <strong>{{__('site.Phone')}}:</strong><a style="color: white;" class="phone" href="#"> +971 60 054 5544 </a><br> -->

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 footer-links">
                    <h4>{{__('site.Useful Links')}}</h4>
                    <ul>
                        <li> <a href="#">{{__('site.home')}}</a></li>
                        <li> <a href="#">{{__('site.services')}}</a></li>
                        <!-- <li class="num"> <a href="">05 55454 4544</a></li> -->
                        <li> <a href="#">{{__('site.Our App')}}</a></li>
                        <li> <a href="#">{{__('site.Privacy policy')}}</a></li>
                    </ul>
                </div>



                <div class="col-lg-4 col-md-4 footer-newsletter">
                    <h4>{{__('site.Our App')}}</h4>
                    <div  class="app-content-img">
                        <img src="{{ asset('site_assets/img/app/app-store.png') }}" alt="">
                        <!-- <img src="{{ asset('site_assets/img/app/huawei.png') }} " alt=""> -->
                        <img src="{{ asset('site_assets/img/app/google-play.png') }}" alt="">
                    </div>

                    <div class="social-links mt-5">
                        <a href="https://www.facebook.com/ifetcher" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://wa.link/d59f4i" class="facebook"><i class="bx bxl-whatsapp"></i></a>
                        <a href="https://twitter.com/ifetcher" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="https://www.instagram.com/ifetcher/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC-DGZT4xZ9Npec2YzOhqgmg?view_as=subscriber" class="google-plus"><i class="bx bxl-youtube"></i></a>
                            <a href="https://www.linkedin.com/company/ifetcher/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>



                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; {{__('site.Copyright')}} <strong><span>{{__('site.iFetcher')}}</span></strong>. {{__('site.All Rights Reserved')}}
        </div>
        <div class="credits">
        </div>
    </div>
</footer><!-- End Footer -->
