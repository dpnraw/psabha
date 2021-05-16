@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  	<div class="container">
  			<h4>दर्ता भएका विधेयक</h4>
  			<hr>
  			<div class="table-responsive">
				<table class="table table-striped table-bordered ">
				  <thead style="background-color:#093d63 ">
				    <tr style="color: white">
				      <th scope="col">क्र.सं. </th>
				      <th scope="col">दर्ता नं.</th>
				      <th scope="col">दर्ता मिति</th>
				      <th scope="col">शीर्षक</th>
				      <th scope="col">मन्त्रालय</th>
				      
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($bills as $bill)
				    <tr>
					<td>{{$bill->s_no}}</td>
					<td>{{$bill->reg_no}}</td>
					<td>{{$bill->reg_date}}</td>
					<td><a href="{{route('registeredDownload',$bill->id)}}">{{$bill->title}}</a></td>
					<td>{{$bill->ministry}}</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>

  
@endsection
@section('scripts')
@endsection