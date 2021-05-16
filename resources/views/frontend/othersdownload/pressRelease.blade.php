@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  	<div class="container" style="text-align: center">
  	<h4><u>@lang('home.press release')</u></h4>
  	<hr>
  	<div class="table-responsive">
		<table class="table table-striped table-bordered ">
		  <thead style="background-color:#093d63 ">
		    <tr style="color: white">
		      <th scope="col">@lang('home.title')</th>
		      <th scope="col">@lang('home.published date')</th>
		      <th scope="col">@lang('home.download')</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@if(App::isLocale('nep'))
		  	@foreach($pressreleases as $release)
		    <tr>
		     <td>{{$release->nep_title}}</td>
		      <td>{{$release->neppub_date}}</td>
		      <td><a href="{{route('pressdownload',$release->id)}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-download" style="size: 30px"></i></a></td>
		  	</tr>
		  	@endforeach
		  	@elseif(App::isLocal('en'))
		  	@foreach($pressreleases as $release)
		    <tr>
		     <td>{{$release->nep_title}}</td>
		      <td>{{$release->neppub_date}}</td>
		      <td><a href="{{route('pressdownload',$release->id)}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-download" style="size: 30px"></i></a></td>
		  	</tr>
		  	@endforeach
		  	@endif
		  </tbody>
		</table>
	</div>
  </div>

  
@endsection
@section('scripts')
@endsection