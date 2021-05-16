<div class="sticky">
<div class="navbar navbar-expand-lg navbar-light rounded py-1 mb-2 main_navbar">
    <nav class="nav d-flex justify-content-between">
      <a class="p-1 text-muted" href="{{url('/')}}"><li style="color: white"><span class="fa fa-home"></span>  @lang('home.home')</li></a>

      <div class="p-1 text-muted">
        <div class="dropdown">
          <li style="color: white" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('home.menu1')<i class="fa fa-angle-down" aria-hidden="true"></i>
          </li>
          <div class="dropdown-menu p-0" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" href="{{route('assemblyIntroduction')}}">@lang('home.introduction')</a>
            <a class="dropdown-item" href="{{route('majorFunctions')}}">@lang('home.province assembly main program')</a>
            <a class="dropdown-item" href="{{route('officials')}}">@lang('home.officials')</a>
            <a class="dropdown-item" href="{{route('politicalParties')}}">@lang('home.political parties')</a>
            <a class="dropdown-item" href="{{route('assemblyMembers')}}">@lang('home.assembly staffs')</a>
            <a class="dropdown-item" href="{{route('personalSecretary')}}">@lang('home.personal secretary')</a>
          </div>
        </div>
      </div>

      <div class="p-1 text-muted">
        <div class="dropdown">
          <li style="color: white" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('home.menu2')<i class="fa fa-angle-down" aria-hidden="true"></i>
          </li>
          <div class="dropdown-menu p-0" aria-labelledby="dropdownMenu2">
            {{-- <a class="dropdown-item" href="#">@lang('home.introduction')</a>
            <a class="dropdown-item" href="#">@lang('home.duties responsibilities rights')</a> --}}
            <a class="dropdown-item" href="{{route('orgStructure')}}">@lang('home.organizational structure')</a>
            <a class="dropdown-item" href="{{route('detailsOfPosts')}}">@lang('home.darwandi details')</a>
            <a class="dropdown-item" href="{{route('secretariatStaffs')}}">@lang('home.secretariat staffs')</a>
          </div>
        </div>
      </div>

      <div class="p-1 text-muted">
        <div class="dropdown">
          <li style="color: white" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('home.menu3')<i class="fa fa-angle-down" aria-hidden="true"></i>
          </li>
          <div class="dropdown-menu p-0" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" href="{{route('businessAdvisoryCommittee')}}">@lang('home.work mgmt consultation committee')</a>
            <a class="dropdown-item" href="{{route('legislationCommittee')}}">@lang('home.legislation committee')</a>
            <a class="dropdown-item" href="{{route('publicAccountCommittee')}}">@lang('home.public accounts committee')</a>
            <a class="dropdown-item" href="{{route('financeCommittee')}}">@lang('home.economic and development committee')</a>
            <a class="dropdown-item" href="{{route('justiceCommittee')}}">@lang('home.provincial case committee')</a>
            
          </div>
        </div>
      </div>

      <div class="p-1 text-muted">
        <div class="dropdown">
          <li style="color: white" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('home.menu4')<i class="fa fa-angle-down" aria-hidden="true"></i>
          </li>
          <div class="dropdown-menu p-0" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" href="{{route('registeredBills')}}">@lang('home.registered bills')</a>
            <a class="dropdown-item" href="{{route('remainedBills')}}">@lang('home.bills remained in committee')</a>
            <a class="dropdown-item" href="{{route('passedBills')}}">@lang('home.bills passed')</a>
            <a class="dropdown-item" href="{{route('certifiedBills')}}">@lang('home.certified bills')</a>
          </div>
        </div>
      </div>

      <div class="p-1 text-muted">
        <div class="dropdown">
          <li style="color: white" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('home.menu5') <i class="fa fa-angle-down" aria-hidden="true"></i>
          </li>
          <div class="dropdown-menu p-0" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" href="{{route('information')}}">@lang('home.information')</a>
            <a class="dropdown-item" href="{{route('dailyInformation')}}">@lang('home.daily information')</a>
            <a class="dropdown-item" href="{{route('meetingsBriefDetails')}}">@lang('home.meetings brief details')</a>
            <a class="dropdown-item" href="{{route('allPublications')}}">@lang('home.publications')</a>
            <a class="dropdown-item" href="#">@lang('home.assembly calendar')</a>
            
          </div>
        </div>
      </div>

      <div class="p-1 text-muted">
        <div class="dropdown">
          <li style="color: white" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('home.menu6')<i class="fa fa-angle-down" aria-hidden="true"></i>
          </li>
          <div class="dropdown-menu p-0" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" href="{{route('allPhoto')}}">@lang('home.photo gallery')</a>
            <a class="dropdown-item" href="{{route('allVideo')}}">@lang('home.video gallery')</a>
            <a class="dropdown-item" href="#">@lang('home.audio gallery')</a>
            
          </div>
        </div>
      </div>

       <div class="p-1 text-muted">
        <div class="dropdown">
          <li style="color: white" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('home.live stream') <i class="fa fa-angle-down" aria-hidden="true"></i>
          </li>
          <div class="dropdown-menu p-0" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" href="{{route('liveStream')}}">@lang('home.live stream')</a>
            
          </div>
        </div>
      </div>
      
      <a class="p-1 text-muted" href="#footer"><li style="color: white">@lang('home.contact')</li></a>
      <a class="p-1 text-muted ml-2" href="http://stateassembly.p4.gov.np"><li style="color: white">@lang('home.old website')</li></a>
    </nav>
  </div>

  {{-- end of sticky div --}}
</div>
