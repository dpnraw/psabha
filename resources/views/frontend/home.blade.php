@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/midsection.css')}}">
<link rel="stylesheet" href="{{asset('owlcarousel/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('owlcarousel/dist/assets/owl.theme.default.min.css')}}">
<style type="text/css">
  .bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
  background-color: #c65353
}
</style>
@endsection
@section('content')
  @include('frontend.partials.newsFlow')


  <div class="row ml-0 mr-0 pr-0 nonsticky">
  
    	<div class="col-md-9 slider mb-2">
        <div class="row" style="border:1px solid">
    	    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%;">
    		  
    		  <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="carousel-item">
              <img class="d-block w-100" style="height: 400px;width: 100%;" src="{{ asset('storage/'.$slider->image) }}">
              <div class="bottom-left">{{$slider->title}}</div>
            </div>
            @endforeach
    		    {{-- <div class="carousel-item">
    		      <img class="d-block w-100" style="height: 400px;width: 100%;" src="{{asset('blog/images/car1.jpg')}}" alt="First slide">
    		    </div>
    		    <div class="carousel-item">
    		      <img class="d-block w-100" style="height: 400px;width: 100%;" src="{{asset('blog/images/car2.jpg')}}" alt="Second slide">
    		    </div>
    		    <div class="carousel-item">
    		      <img class="d-block w-100" style="height: 400px;width: 100%;" src="{{asset('blog/images/car3.jpg')}}" alt="Third slide">
    		    </div> --}}
    		  </div>
    		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		    <span class="sr-only">Previous</span>
    		  </a>
    		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    		    <span class="sr-only">Next</span>
    		  </a>
    		  </div>
        </div>
        <hr style="border-top: 1px solid">

      {{-- carousel ends here --}}
        

        {{-- navtabs start --}}
        <div class="row" style="padding-top: 10px;">
          <div class="container" style="background-color: white; padding: 0 0 0 0px; ">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist" style="background-color: #e60000">
              
              <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="border:1px solid; color: black">@lang('home.press release')</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" style="border:1px solid; color: black">@lang('home.calendar of assembly')</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="border:1px solid; color: black">@lang('home.comment & feedback')</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            {{-- start of first nav tab --}}
            <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="container" style="border: 1px solid #dee2e6; padding: 5px;">

                @include('frontend.flashmessages')

                @if (App::isLocale('en'))
                <form style="border: solid 1px #dee2e6" class="p-1 pb-0" method="POST" action="{{route('feedback')}}">
                  {{ csrf_field() }}

                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-1 col-form-label" style="color:#0066ff">Name*</label>
                    <div class="col-sm-10">
                      <input name="name" type="text" class="form-control" id="staticEmail" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-1 col-form-label" style="color:#0066ff">Email*</label>
                    <div class="col-sm-10">
                      <input name="email" type="text" class="form-control" id="staticEmail" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-1 col-form-label" style="color:#0066ff">Subject*</label>
                    <div class="col-sm-10">
                      <input name="subject" type="text" class="form-control" id="staticEmail" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-1 col-form-label" style="color:#0066ff">Body*</label>
                    <div class="col-sm-10">
                      <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" required ></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-11"></div>
                    <div class="col-sm-1">
                      <button type="submit" class="btn btn-sm btn-primary" style="float: right;">Submit</button>
                    </div>
                    
                  </div>
                </form>
                @elseif (App::isLocale('nep'))
                  <form style="border: solid 1px #dee2e6" class="p-1 pb-0" method="POST" action="{{route('feedback')}}">
                  {{ csrf_field() }}
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-1 col-form-label" style="color:#0066ff">नाम*</label>
                    <div class="col-sm-10">
                      <input name="name" type="text" class="form-control" id="staticEmail" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-1 col-form-label" style="color:#0066ff">इमेल*</label>
                    <div class="col-sm-10">
                      <input name="email" type="text" class="form-control" id="staticEmail" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-1 col-form-label" style="color:#0066ff">विषय*</label>
                    <div class="col-sm-10">
                      <input name="subject" type="text" class="form-control" id="staticEmail" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-1 col-form-label" style="color:#0066ff">सन्देश*</label>
                    <div class="col-sm-10">
                      <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" required ></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                      <button type="submit" class="btn btn-sm btn-primary" style="float: right;">पठाउनुहोस्</button>
                    </div>
                  </div>
                </form>

                @endif
              </div>
            </div>
            {{-- end of first nav tab --}}
            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="container" style="border: 1px solid #dee2e6; padding: 5px;">
                <div class="list-group">

                  @if (App::isLocale('nep'))
                  @foreach($pressreleases as $release)
                  <li class="list-group-item" style="padding: 2px;">
                    <div class="row">
                      <div class="col-md-1">
                        <img src="{{asset('blog/images/nepal_logo.png')}}" style="width: 45px; height: 45px; border: 1px solid #dee2e6;">
                      </div>
                      <div class="col-md-11" style="height: 45px;">
                        <a style="font-size: 14px;" href="{{route('pressdownload',$release->id)}}">{{$release->nep_title}}
                        </a>
                        <br>
                        <p style="display: inline-block;">@lang('home.published date'): {{$release->neppub_date}}</p>
                      </div>  
                    </div>
                  </li>
                  @endforeach
                  @elseif (App::isLocale('en'))
                  @foreach($pressreleases as $release)
                  <li class="list-group-item" style="padding: 2px;">
                    <div class="row">
                      <div class="col-md-1">
                        <img src="{{asset('blog/images/nepal_logo.png')}}" style="width: 45px; height: 45px; border: 1px solid #dee2e6;">
                      </div>
                      <div class="col-md-11" style="height: 45px;">
                        <a style="font-size: 14px;" href="{{route('pressdownload',$release->id)}}">{{$release->en_title}}
                        </a>
                        <br>
                        <p style="display: inline-block;">@lang('home.published date'): {{$release->enpub_date}}</p>
                      </div>  
                    </div>
                  </li>
                  @endforeach
                  @endif
                  <li class="list-group-item">
                    <span class="pull-right">
                      <a href="{{route('pressRelease')}}" class="btn btn-primary btn-sm">@lang('home.view more')</a>
                    </span>
                  </li>
                </div>
              </div>
            </div>
            {{-- end of second tab --}}
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <div class="container" style="border: 1px solid #dee2e6; padding: 5px;">
                <iframe src="https://www.hamropatro.com/widgets/calender-full.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"
                 style="border:none; overflow:hidden; width:800px; height:840px;" allowtransparency="true"></iframe>
              </div>
            </div>
            {{-- end of third tab --}}
  
          </div>
          </div>
          
        </div>
        {{-- nav tabs end --}}

        {{-- main contents slider and dowloads tabs ends here --}}
      </div>


{{-- start of members --}}
  <div class="col-md-3 pr-0 memberbar">
     <div class="container membercard">
      <div class="card">
        <img src="{{asset('blog/images/p1.jpg')}}" alt="Netra Nath" class="avatar mb-2 mt-2">
        <h1>@lang('home.Netra Nath Adhikari')</h1>
        <p style="margin:0; padding:0; font-size : 13px">@lang('home.chairman')</p>
        <p><button class="btn btn-sm btn-primary"><a style="font-size: 13px; font-family: arial">@lang('home.view profile')</a></button></p>
      </div>
      <hr>
      <div class="card">
        <img src="{{asset('blog/images/p2.jpg')}}" alt="Sirjana Sharma" class="avatar mb-2 mt-2">
        <h1>@lang('home.Sirjana Sharma')</h1>
        <p style="margin:0; padding:0; font-size : 13px">@lang('home.vice chairman')</p>
        <p><button class="btn btn-sm btn-primary"><a style="font-size: 13px; font-family: arial">@lang('home.view profile')</a></button></p>
      </div>
      <hr>
      <div class="card">
        <img src="{{asset('blog/images/p3.jpg')}}" alt="Rajindra Paudel" class="avatar mb-2 mt-2">
        <h1>@lang('home.Rajindra paudel')</h1>
        <p style="margin:0; padding:0; font-size : 13px">@lang('home.secretary')</p>
        <p><button class="btn btn-sm btn-primary"><a style="font-size: 13px; font-family: arial">@lang('home.view profile')</a></button></p>
      </div>
      </div>
  </div> 
  {{-- end of member --}}


  @include('frontend.partials.midsection')
  </div> {{-- end of nonsticy row --}}

  {{-- unrecognizeable div or end of first part or see in header--}}
    
{{--  --}}
@endsection
@section('scripts')
  <script src="{{asset('owlcarousel/dist/owl.carousel.min.js')}}"></script>
  <script src="{{asset('blog/js/owlsliderjs.js')}}"></script>
  <script type="text/javascript">
    $(".carousel-inner .carousel-item").first().addClass("active");
  </script>


  @endsection