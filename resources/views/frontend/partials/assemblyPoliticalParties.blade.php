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
  		<h2><u>प्रदेश सभा, गण्डकी प्रदेशमा प्रतिनिधित्व गर्ने राजनीतिक दलहरु</u></h2>

  		<div class="table-responsive">
		<table class="table table-striped table-bordered ">
		  <thead style="background-color:#093d63 ">
		    <tr style="color: white">
		      <th scope="col">क्र.स.</th>
		      <th scope="col">दलको नाम</th>
		      <th scope="col">सदस्य संख्या</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">१</th>
		      <td>नेपाल कम्युनिष्ट पार्टी (नेकपा) </td>
		      <td>४०</td>
		    </tr>
		    <tr>
		      <th scope="row">२</th>
		      <td>नेपाली काँग्रेस</td>
		      <td>१५</td>
		    </tr>
		    <tr>
		      <th scope="row">३</th>
		      <td>राष्ट्रीय जनमोर्चा पार्टी</td>
		      <td>३</td>
		    </tr>
		    <tr>
		      <th scope="row">४</th>
		      <td>नया शक्ति पार्टी</td>
		      <td>२</td>
		    </tr>
		    <tr>
		      <th scope="row"></th>
		      <td>कुल जम्मा</td>
		      <td>६० जना</td>
		    </tr>

		  </tbody>
		</table>
	</div>
  		
  	</div>
  
@endsection
@section('scripts')
@endsection