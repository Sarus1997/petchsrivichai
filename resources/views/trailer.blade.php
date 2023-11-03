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
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="section-title-s2">
                    <p style="text-align: center; font-size: 30px; color: #026FBA"><b>@lang('messages.services_title')</b></p>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-12" style="background: #fff;">
                <div class="container-fluid details">
                    <br>
                    <ul><b>@lang('messages.services_title_1')</b></ul>
                    <li>@lang('messages.services_title_2')</li>
                    <li>@lang('messages.services_title_3')</li>
                    <li>@lang('messages.services_title_4')</li>
                    <li>@lang('messages.services_title_5')</li>
                </div>
                <hr>

                <br>
                <div class="row" style="text-align: center;">
                    <div class="col-5 col-md-5">
                        <img src="assets/images/portfolio/services-3.jpg" alt="" style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
                    </div>
                    <div class="col-2 col-md-2">
                    </div>
                    <div class="col-5 col-md-5">
                        <img src="assets/images/portfolio/services-4.jpg" alt="" style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</section>
<!-- end team-section -->




@stop
