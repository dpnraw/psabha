@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
<style type="text/css">
	.officials{
		  border: 1px solid #ddd;
		  border-radius: 4px;
		  width: 200px;
		  height: 180px;
		}
</style>
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  		<div class="container" style="text-align: center">
  			<h3><u>@lang('home.officials')</u></h3>
  			<div class="row mb-4 mt-2">
  				<div class="col-md-4">
  					<img src="{{asset('blog/images/p1.jpg')}}" class="officials" width="200px">
  				</div>
  				<div class="col-md-4 pt-4">
  					<h5>@lang('home.Netra Nath Adhikari')</h5>
  					<h6>@lang('home.chairman')</h6>
  					<h6><u><a href="#">@lang('home.more info')</a></u></h6>
  				</div>
  			</div>
  			<hr>
  			<div class="row mb-4 mt-2">
  				<div class="col-md-4">
  					<img src="{{asset('blog/images/p2.jpg')}}" class="officials" width="200px">
  				</div>
  				<div class="col-md-4 pt-4">
  					<h5>@lang('home.Sirjana Sharma')</h5>
  					<h6>@lang('home.vice chairman')</h6>
  					<h6><u><a href="#">@lang('home.more info')</a></u></h6>
  				</div>
  			</div>
  			<hr>
  			<div class="row mb-2 mt-2">
  				<div class="col-md-4">
  					<img src="{{asset('blog/images/p3.jpg')}}" class="officials" width="200px">
  				</div>
  				<div class="col-md-4 pt-4">
  					<h5>@lang('home.Rajindra paudel')</h5>
  					<h6>@lang('home.secretary')</h6>
  					<h6><u><a href="#">@lang('home.more info')</a></u></h6>
  				</div>
  			</div>
  			
  		</div>





@endsection
@section('scripts')
@endsection