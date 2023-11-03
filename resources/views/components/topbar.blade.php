
<header id="header" class="site-header header-style-3">

  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col col-sm-9">
          <div class="contact-info">
            <div class="contact-info">
              <ul>
                <li><i class="ti-email"></i> info@pce.com</li>
                <li><i class="ti-mobile"></i> 077284917-9</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col col-sm-3">
          <div class="social">
            <div class="social-links" style="height: 50px">

              <select class="form-control changeLang">
                <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : '' }}>Thai</option>
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
              </select>


            </div>
          </div>
        </div>
      </div>
    </div> <!-- end container -->
  </div>


  <nav class="navigation navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="open-btn">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="navbar-brand gap-2">
          <a class=" d-flex" href="{{ route('home') }}">
            <img src="assets/images/logo/pc-logo-2.svg" width="55px">
          </a>
          <span class="">@lang('messages.topbar_name')</span>

        </div>

      </div>
      <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
        <button class="close-navbar"><i class="ti-close"></i></button>
        <ul class="nav navbar-nav">
          <li><a href="{{ route('home') }}">@lang('messages.topbar_home')</a></li>
          <li><a href="{{ route('story') }}">@lang('messages.topbar_story')</a></li>
          <li><a href="{{ route('services') }}">@lang('messages.topbar_services')</a></li>
          <li><a href="{{ route('contact') }}">@lang('messages.topbar_contact')</a></li>

        </ul>

      </div><!-- end of nav-collapse -->
      {{-- <div class="cart-contact">
        <div class="contact-btn">
          <a href="#" class="theme-btn">Free consultation</a>
        </div>
      </div> --}}


    </div><!-- end of container -->
  </nav>

</header>
<!-- end of header -->
