@extends('layouts.main')

@section('content')


<!-- start blog-pg-section -->
<section class="blog-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <div class="blog-content">
                    <div class="post format-standard-image">
                        <h2 style="color: #1A5279;">@lang('messages.News_Head_01')</h2>
                        <ul class="entry-meta">
                            <li><i class="ti-timer"></i>@lang('messages.News_Date_01')</li>
                        </ul> <hr style="height: 3px;">
                        <div class="entry-media">
                            <img src="assets/images/news/pce-new-01.webp" width="100%" height="100%" style="object-fit: cover;">
                        </div><hr>
                        <p>@lang('messages.News_Detail_01')</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end blog-pg-section -->



@stop
