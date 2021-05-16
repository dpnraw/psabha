@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
<style type="text/css">
	p.ex1 {
  margin-left: 30px;
}
</style>
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  		<div class="container">
  			<h2>प्रदेश सभाका मुख्य कार्यहरु</h2>
  			<hr>
  				<P class="ex1">
  					१.	प्रदेश सरकारको निर्माण गर्ने <br>
					२.	प्रादेशिक कानुन वनाउने <br>
					३.	प्रदेश सरकारको काम कारवाहीको निगरानी गर्नु <br> 
					४.	वजेट पारित गर्ने <br>
					५.	प्रदेशको जनसरोकार विषयमा प्रदेश सभामा छलफल गर्नु    ।

  				</P>
  		</div>
  
@endsection
@section('scripts')
@endsection