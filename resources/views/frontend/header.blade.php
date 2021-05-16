
<header class="blog-header ">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-1 pt-1">
        <a class="navbar-brand" href="#">
          <img src="{{asset('blog/images/nepal_logo.png')}}" height="60" width="65" >
        </a>
      </div>
      <div class="col-10 text-center">
        <a class="blog-header-logo" href="#" style="color: #cc0000">
          <h5 style="font-size: 16px;">@lang('home.heading')<br></h5>
          <h3 class="hidden-xs" style="font-weight: bold; font-size: 20px;">
            @lang('home.ofcname')</h3>
          <h5 style="padding-bottom:2px; margin-top: -5px; font-size: 16px;">
            @lang('home.ofclocation')
          </h5>
        </a>
      </div>
      <div class="col-1 d-flex justify-content-end align-items-center">
        <div class="dropdown">
          <li type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (App::isLocale('en'))
            <img class="flag-lang" src="http://dlfd.gandaki.gov.np/assets/img/us.png" width="16" height="11" alt="">@lang('home.english')<i class="fa fa-angle-down" aria-hidden="true"></i>
            @elseif (App::isLocale('nep'))
            <img class="flag-lang" src="http://dlfd.gandaki.gov.np/assets/img/um.png" width="16" height="11" alt="">@lang('home.nepali')<i class="fa fa-angle-down" aria-hidden="true"></i>
            @endif

          </li>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li class="dropdown-item" type="button"><img class="flag-lang" src="http://dlfd.gandaki.gov.np/assets/img/us.png" width="16" height="11" alt="lang">
              <a href="/localization/en">@lang('home.english')</a></li>
            <li class="dropdown-item" type="button"><img class="flag-lang" src="http://dlfd.gandaki.gov.np/assets/img/um.png" width="16" height="11" alt="lang"><a href="/localization/nep">@lang('home.nepali')</a></li>
            
          </div>
        </div>
        <img src="{{asset('blog/images/nepalflag.gif')}}" height="60" width="65">
      </div>
    </div>
  </header>