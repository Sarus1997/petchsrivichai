@extends('layouts.main')

@section('content')

  <!-- start page-title -->
  <section class="page-title slide-bg-image">
    <img src="assets/images/banner/contact-banner.png" alt="@lang('messages.Paco_name')" width="100%" style="object-fit: cover;">
    <div class="page-title-container">
      <div class="page-title-wrapper">
        <div class="container">
          <div class="row">
            <div class="col col-xs-12">
              <h2>@lang('messages.Contact_Name')</h2>
            </div>
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div>
    </div>
  </section>
  <!-- end page-title -->


  <section class="contact-pg-section section-padding" style="background-color: #fbf9f9;">
    <div class="container">
        <div class="row">
                <div style="text-align: center;">
                    <img src="assets/images/logo/pc-logo-2.svg" width="120rem" height="120rem" style="box-shadow: 5px 3px 10px rgb(202, 202, 202); border-radius: 50%;">
                    <div class="section-title" style="margin-left: 10px;">
                        <br/>
                        <h2 class="gradient-text1">@lang('messages.Contact_Name')</h2>
                        <p>@lang('messages.topbar_name')</p>
                    </div>
                </div>
        </div>
    </div>
    <br/>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="widget">
                    <div class="contact-info">
                        <div>
                            <div class="icon" style="color: #293D96;">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="details">
                                <h5>@lang('messages.Contact_Head_address')</h5>
                                <p>@lang('messages.Contact_Head_address_01')</p>
                            </div>
                        </div>
                        <div>
                            <div class="icon" style="color: #293D96;">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="details">
                                <h5>@lang('messages.Contact_Head_tel_name')</h5>
                                <p><a href="tel:077284917-9" style="color: #797979;">@lang('messages.Contact_Head_tel')</a></p>
                            </div>
                        </div>
                        <div>
                            <div class="icon" style="color: #293D96;">
                                <i class="ti-email"></i>
                            </div>
                            <div class="details">
                                <h5>@lang('messages.Contact_Head_email_name')</h5>
                                <p><a href="mailto:info@pce.com" style="color: #797979;">@lang('messages.Contact_Head_email')</a></p>
                            </div>
                        </div>
                        <div>
                            <div class="icon" style="color: #293D96;">
                                <i class="ti-printer"></i>
                            </div>
                            <div class="details">
                                <h5>@lang('messages.contact_Head_fax')</h5>
                                <p><a href="tel:077600247" style="color: #797979;">@lang('messages.contact_Head_fax_1')</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="widget newsletter-widget">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31512.7647227426!2d99.378376!3d9.1458391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305408aff1d0af43%3A0xe1df03abec6e1a2e!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4nuC4iuC4o-C4qOC4o-C4teC4p-C4tOC4iuC4seC4oiDguYDguK3guYfguJnguYDguJXguK3guKPguYzguYTguJ7guKPguKrguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1695352952806!5m2!1sth!2sth"
                        width="100%" height="450" style="box-shadow: 10px 10px 5px rgb(245,245,245);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- start contact-pg-section -->
<section class="contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="section-title-s4">
                {{-- <span>Let’s Work Together</span> --}}
                <h2 style="text-align: center;" class="gradient-text1">@lang('messages.Contact_From')</h2>
                <br />
                {{-- <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frameshowed a lady
                    fitted out with a fur hat and fur</p> --}}
            </div>
        </div>

        <div class="row">
            <div class="col col-lg-12 col-md-12">
                <form method="post" class="contact-validation-active" id="contact-form-main">
                    <div>
                        <label style="color: #4998CD;">@lang('messages.Contact_Name_first')</label>
                        <input type="text" class="form-control" name="fname" id="fname"
                            placeholder="@lang('messages.Contact_Name_first')">
                    </div>
                    <div>
                        <label style="color: #4998CD;">@lang('messages.Contact_Name_last')</label>
                        <input type="text" class="form-control" name="lname" id="lname"
                            placeholder="@lang('messages.Contact_Name_last')">
                    </div>
                    <div>
                        <label style="color: #4998CD;">@lang('messages.Contact_Email_')</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="@lang('messages.Contact_Email_')">
                    </div>
                    <div>
                        <label style="color: #4998CD;">@lang('messages.Contact_Tel_')</label>
                        <input type="text" class="form-control" name="phone" id="phone"
                            placeholder="@lang('messages.Contact_Tel_')">
                    </div>
                    <div class="fullwidth">
                        <label style="color: #4998CD;">@lang('messages.Contact_Subject')</label>
                        <input type="text" class="form-control" name="subject" id="subject"
                            placeholder="@lang('messages.Contact_Subject')">
                    </div>
                    <div class="fullwidth">
                        <label style="color: #4998CD;">@lang('messages.Contact_Message')</label>
                        <textarea class="form-control" name="note" id="note"
                            placeholder="@lang('messages.Contact_Message')"></textarea>
                    </div>
                    <div class="submit-area">
                            <button type="submit" class="btn-17 ">
                                <span class="text-container">
                                    <span class="text" >@lang('messages.Contact_Send')</span>
                                </span>
                            </button>
                    </div>
                    <div class="clearfix error-handling-messages">
                        <div id="success">Thank you</div>
                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end contact-pg-section -->

@stop
