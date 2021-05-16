@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  <div class="container" style="text-align: center">
  	@foreach($links as $link)
  	@if(App::isLocale('en'))
  	<h2><u>Live Stream</u></h2>

  	<h1><a href="{{$link->link}}">CLick Here For Live Stream</a></h1>

  	@elseif(App::isLocale('nep'))
  	<h2><u>प्रत्यक्ष प्रशारण</u></h2>

  	<h1><a href="{{$link->link}}">यहाँ क्लिक गरि प्रत्यक्ष प्रशारण हेर्नुहोस</a></h1>
  	@endif
  	@endforeach
  </div>

  
@endsection
@section('scripts')
@endsection