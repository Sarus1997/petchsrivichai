@extends('layouts.main')

@section('content')

  <!-- start page-title -->
  <section class="page-title slide-bg-image">
    <img src="assets/images/banner/services-banner.png" alt="@lang('messages.Paco_name')" width="100%" style="object-fit: cover;">
    <div class="page-title-container">
      <div class="page-title-wrapper">
        <div class="container">
          <div class="row">
            <div class="col col-xs-12">
              <h2>@lang('messages.services_name')</h2>
              <hr>
              <p style="color: #f7f7f7bc">@lang('messages.services_head')</p>
            </div>
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div>
    </div>
  </section>
  <!-- end page-title -->


<!-- start team-section -->
<section class="team-section section-padding pt-2" style="background-color: #F7F7F7">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="section-title-s2">
                    <p style="text-align: center; font-size: 3rem; color:#026FBA">@lang('messages.services_name')</p>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-12" style="background: #fff;">
                <div class="container-fluid details">
                    <h3 style="color: #3190AF;">@lang('messages.services_title')</h3>
                    <ul>@lang('messages.services_title_1')</ul>
                    <li>@lang('messages.services_title_2')</li>
                    <li>@lang('messages.services_title_3')</li>
                    <li>@lang('messages.services_title_4')</li>
                    <li>@lang('messages.services_title_5')</li>
                    <br>
                    <a href="{{ route('trailer') }}" style="text-align: right; display: block;">
                        <button class="btn-17">
                            <span class="text-container">
                                <span class="text">@lang('messages.services_btn')</span>
                            </span>
                        </button>
                    </a>

                </div>
                <hr>
            </div>
        </div>

        <br>
        <br>

        <div class="row">
            <div class="col col-md-12" style="background: #fff;">
                <div class=" container-fluid details">
                    <h3 style="color: #3190AF;">@lang('messages.services_title_6')</h3>
                    <ul>@lang('messages.services_title_7')</ul>
                    <li>@lang('messages.services_title_8')</li>
                    <li>@lang('messages.services_title_9')</li>
                    <li>@lang('messages.services_title_10')</li>
                    <li>@lang('messages.services_title_11')</li>
                    <li>@lang('messages.services_title_12')</li>
                    <br>
                    <a href="{{ route('full-dump') }}" style="text-align: right; display: block;">
                        <button class="btn-17">
                            <span class="text-container">
                                <span class="text">@lang('messages.services_btn')</span>
                            </span>
                        </button>
                    </a>
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>
<!-- end team-section -->

@stop
