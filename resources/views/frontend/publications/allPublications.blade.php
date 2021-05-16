@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
<style type="text/css">
 .table-bordered th, .table-bordered td {
    border: 1px solid #10103c;
}

</style>
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  		<div class="container" style="text-align: center">
	  		<h2><u>@lang('home.publications')</u></h2>

	  		<div class="table-responsive">
			<table class="table table-striped table-bordered ">
			  <thead style="background-color:#093d63 ">
			    <tr style="color: white">
			    	<th scope="col-10">@lang('home.date')</th>
			      <th scope="col-10">@lang('home.title')</th>
			      <th scope="col-2">@lang('home.download')</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			  	@if(App::isLocale('nep'))
			  	@foreach($publications as $publication)
			    <tr>
			    	<td>{{$publication->neppub_date}}</td>
			      <td>{{$publication->title_nep}}</td>
			      <td><a href="{{route('publicationdownload',$publication->id)}}"><i class="fa fa-download" style="font-size:38px"></i></a></td>
			    </tr>
			    @endforeach
			    @elseif(App::isLocale('en'))
			    @foreach($publications as $publication)
			    <tr>
			    	<td>{{$publication->enpub_date}}</td>
			      <td>{{$publication->title_en}}</td>
			      <td><a href="{{route('publicationdownload',$publication->id)}}"><i class="fa fa-download" style="font-size:38px"></i></a></td>
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