@extends('layouts.main')

@section('content')


<!-- start blog-pg-section -->
<section class="blog-pg-section section-padding">
    <div class="container">
        <hr style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe); height: 3px;">
        <div class="row">
            <div class="col col-md-12">
                <div class="blog-content">
                    <div class="post format-standard-image">
                        <h2 style="color: #1A5279;">@lang('messages.News_Head_03')</h2>
                        <ul class="entry-meta">
                            <li><i class="ti-timer"></i>@lang('messages.News_Date_03')</li>
                        </ul>
                        <div class="entry-media">
                            <img src="assets/images/news/pce-new-03.webp" width="100%" height="100%" style="object-fit: cover;">
                        </div><hr style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe); height: 1.5px;">
                        <p>@lang('messages.News_Detail_03')</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end blog-pg-section -->



@stop
