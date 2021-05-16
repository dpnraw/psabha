@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  	<div class="container" style="text-align: center">
  		<ul class="list-group mb-2">
  			@foreach($videos as $video)
  			@if(App::isLocale('nep'))
		  <li class="list-group-item"><span style="float: left">{{$video->nep_sn}}</span><a href="{{$video->link}}">{{$video->nep_title}}</a></li>
		  @elseif(App::isLocale('en'))
		  <li class="list-group-item"><span style="float: left">{{$video->eng_sn}}</span><a href="{{$video->link}}">{{$video->eng_title}}</a></li>
		  @endif
		  @endforeach
		</ul>
  	</div>
  
@endsection
@section('scripts')
@endsection