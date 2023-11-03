@extends('layouts.main')

@section('content')

<section class="hero-slider hero-style-2">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="assets/images/banner/b233c2.webp">
                    <div class="container">
                        <div data-swiper-parallax="200" class="slide-subtitle">
                            {{-- <h4>Perfect Desing for business</h4> --}}
                        </div>
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2>@lang('messages.nav_home')</h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p>@lang('messages.nav_title')</p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="#" class="theme-btn-s2" style="background-color: #2A8FD3;">@lang('messages.nav_services_btn')</a>
                            <a href="#" class="theme-btn-s3">@lang('messages.nav_about_btn')</a>
                        </div>
                    </div>
                </div> <!-- end slide-inner -->
            </div> <!-- end swiper-slide -->

            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="assets/images/banner/fe9680.webp">
                    <div class="container">
                        <div data-swiper-parallax="200" class="slide-subtitle">
                            {{-- <h4>Perfect Desing for business</h4> --}}
                        </div>
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2>@lang('messages.nav_home')</h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p>@lang('messages.nav_title')</p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="#" class="theme-btn-s2" style="background-color: #2A8FD3;">@lang('messages.nav_services_btn')</a>
                            <a href="#" class="theme-btn-s3">@lang('messages.nav_about_btn')</a>
                        </div>
                    </div>
                </div> <!-- end slide-inner -->
            </div> <!-- end swiper-slide -->

            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="assets/images/banner/services-banner.png">
                    <div class="container">
                        <div data-swiper-parallax="200" class="slide-subtitle">
                            {{-- <h4>Perfect Desing for business</h4> --}}
                        </div>
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2>@lang('messages.nav_home')</h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p>@lang('messages.nav_title')</p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="#" class="theme-btn-s2" style="background-color: #2A8FD3;">@lang('messages.nav_services_btn')</a>
                            <a href="#" class="theme-btn-s3">@lang('messages.nav_about_btn')</a>
                        </div>
                    </div>
                </div> <!-- end slide-inner -->
            </div><!-- end swiper-slide -->
        </div>
        <!-- end swiper-wrapper -->

        <!-- swipper controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>


<!-- start project-sigle-section -->
<section class="project-sigle-section section-padding">
    <div class="container">
        <p style="text-align: center; font-size: 3rem; color:#026FBA">@lang('messages.story_title')</p>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/banner/fe9680.webp">
            </div><br>
            <div class="col-md-6" style="text-align: justify;">
                <p>@lang('messages.story_content')</p>
            </div>
            <div class="col" style="text-align: right; ">
                <div class="container">
                    <a href="{{ route('contact') }}">
                        <button class="btn-17">
                            <span class="text-container">
                                <span class="text">@lang('messages.story_btn')</span>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end project-sigle-section -->

<!-- video -->
<section id="video" class="fade-effect py-16">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="w-full md:w-10/12 mx-auto">
                    <div class="media-frame aspect-w-16 aspect-h-9">
                        <iframe
                            src="https://www.youtube.com/embed/iupXf-CipHc?autoplay=1"
                            frameborder="0"
                            width="100%"
                            height="410"
                            allowfullscreen autoplay>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>

<br>
<br>


{{-- autoplay;
allowfullscreen autoplay --}}

<!-- start team-section -->
<section class="team-section section-padding pt-2" style="background-color: #F7F7F7">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="section-title-s2">
                    <p style="text-align: center; font-size: 3rem; color:#026FBA">@lang('messages.story_title')</p>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-4 text-center">
                <img src="assets/images/our-story/our-services-1.jpg" alt="" style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
            </div>
            <div class="col col-md-8" style="background: #fff;">
                <div class="details">
                    <h3 style="color: #3190AF;">@lang('messages.services_title')</h3>
                    <ul>@lang('messages.services_title_1')</ul>
                    <li>@lang('messages.services_title_2')</li>
                    <li>@lang('messages.services_title_3')</li>
                    <li>@lang('messages.services_title_4')</li>
                    <li>@lang('messages.services_title_5')</li>
                    <br>
                    <a href="{{ route('services') }}" style="text-align: right; display: block;">
                        <button class="btn-17">
                            <span class="text-container">
                                <span class="text">@lang('messages.services_btn')</span>
                            </span>
                        </button>
                    </a>

                </div>
                <hr style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe); height: 1.5px;">
            </div>
        </div>

        <br>
        <br>

        <div class="row">
            <div class="col col-md-4 text-center">
                <img src="assets/images/our-story/our-services-2.jpg" alt="" style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
            </div>
            <div class="col col-md-8" style="background: #fff;">
                <div class="details">
                    <h3 style="color: #3190AF;">@lang('messages.services_title_6')</h3>
                    <ul>@lang('messages.services_title_7')</ul>
                    <li>@lang('messages.services_title_8')</li>
                    <li>@lang('messages.services_title_9')</li>
                    <li>@lang('messages.services_title_10')</li>
                    <li>@lang('messages.services_title_11')</li>
                    <li>@lang('messages.services_title_12')</li>
                    <br>
                    <a href="{{ route('services') }}" style="text-align: right; display: block;">
                        <button class="btn-17">
                            <span class="text-container">
                                <span class="text">@lang('messages.services_btn')</span>
                            </span>
                        </button>
                    </a>

                </div>
                <hr style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe); height: 1.5px;">
            </div>
        </div>
    </div>
</section>
<!-- end team-section -->

<!-- Contact Us -->
<section class="contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-8">
                <div class="logo widget-title" style="display: flex; align-items: center;">
                    <img src="assets/images/logo/pc-logo-2.svg" width="120rem" height="120rem" style="box-shadow: 5px 5px 3px rgb(245,245,245); border-radius: 50%;">
                    <div class="section-title" style="margin-left: 10px;">
                        <br/>
                        {{-- <span>Contact Us</span> --}}
                        <h2 class="gradient-text1">@lang('messages.contact_name')</h2>
                        <p style="color: #3197B3;">@lang('messages.contact_title')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>

    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-md-6 col-sm-8">
                <div class="widget ">
                    <div class="contact-info">
                        <div>
                            <div class="icon"  style="color: #504389;">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="details">
                                <h5 style="color: #504389;">@lang('messages.contact_address')</h5>
                                <p>@lang('messages.contact_address_1')</p>
                            </div>
                        </div>
                        <div>
                            <div class="icon"  style="color: #6A8DB3;">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="details">
                                <h5 style="color: #6A8DB3;">@lang('messages.contact_tel')</h5>
                                <p><a href="tel:077284917-9" style="color: #797979;">@lang('messages.contact_tel_1')</a></p>
                            </div>
                        </div>
                        <div>
                            <div class="icon"  style="color: #319CB5;">
                                <i class="ti-email"></i>
                            </div>
                            <div class="details">
                                <h5 style="color: #319CB5;">@lang('messages.contact_email')</h5>
                                <p><a href="mailto:info@pce.com" style="color: #797979;">@lang('messages.contact_email_1')</a></p>
                            </div>
                        </div>
                        <div>
                            <div class="icon"  style="color: #319CB5;">
                                <i class="ti-printer"></i>
                            </div>
                            <div class="details">
                                <h5 style="color: #319CB5;">@lang('messages.contact_fax')</h5>
                                <p><a href="tel:077600247" style="color: #797979;">@lang('messages.contact_fax_1')</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-lg-6 col-md-6 col-sm-8">
                <div class="widget newsletter-widget">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31512.7647227426!2d99.378376!3d9.1458391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305408aff1d0af43%3A0xe1df03abec6e1a2e!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4nuC4iuC4o-C4qOC4o-C4teC4p-C4tOC4iuC4seC4oiDguYDguK3guYfguJnguYDguJXguK3guKPguYzguYTguJ7guKPguKrguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1695352952806!5m2!1sth!2sth"
                        width="100%" height="450" style="box-shadow: 10px 10px 5px rgb(245,245,245);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div> <!-- end container -->
    </div>
</section>
<!-- End Contact Us -->

@stop
