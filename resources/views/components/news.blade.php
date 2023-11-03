
<!-- start portfolio-section -->
<section class="portfolio-section section-padding">
    <div class="container">
        <hr style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe); height: 1.5px;">
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="section-title-s2">
                    {{-- <span>News</span> --}}
                    <h2 class="gradient-text1">@lang('messages.News_Name')</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12" >
                <div class="portfolio-grids portfolio-slider" >

                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/news/pce-new-01.webp" width="100%" height="250" style="object-fit: cover;">
                        </div>
                        <div class="details">
                            <h3><a href="{{ route('news-1') }}">@lang('messages.News_Head_01')</a></h3>
                            <p class="cat">@lang('messages.News_Date_01')</p>
                        </div>
                    </div>

                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/news/pce-new-02.webp" width="100%" height="250" style="object-fit: cover;">
                        </div>
                        <div class="details">
                            <h3><a href="{{ route('news-2') }}">@lang('messages.News_Head_02')</a></h3>
                            <p class="cat">@lang('messages.News_Date_02')</p>
                        </div>
                    </div>

                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/news/pce-new-03.webp" width="100%" height="250" style="object-fit: cover;">
                        </div>
                        <div class="details">
                            <h3><a href="{{ route('news-3') }}">@lang('messages.News_Head_03')</a></h3>
                            <p class="cat">@lang('messages.News_Date_03')</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end portfolio-section -->
