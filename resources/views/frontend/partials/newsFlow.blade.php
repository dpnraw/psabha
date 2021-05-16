<div class="row latestupdate nonsticky mt-0" style="border-color: black">
    <div class="container">
      <div id="updates" class="mb-2">
              <div id="trending-now">@lang('home.updates'):</div>
              <div style="background-color: white;" id="marquee">
                  <marquee style="width:100%; line-height: 20px;" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="3">
                    @foreach($news as $new)
                    @if (App::isLocale('en'))
                      <a href="{{route('newsdownload',$new->id)}}" style="color:black;">
                        {{$new->title_en}}</a>  |
                        @elseif(App::isLocale('nep'))
                        <a href="{{route('newsdownload',$new->id)}}" style="color:black;">
                        {{$new->title_nep}}</a>  |
                        @endif
                    @endforeach
                  </marquee>
              </div>
      </div>
    </div>
  </div>