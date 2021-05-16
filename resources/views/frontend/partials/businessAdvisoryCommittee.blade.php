@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  	<div class="container">
  		<h3 style="text-align:center">कार्य व्यवस्था परामर्श समिति</h3>
  		<hr>

  		<div class="row justify-content-center">
  			<p class="font-weight-bold pt-5 mr-3"><u>सभापति – मा.  सभामुख नेत्रनाथ अधिकारी</u>
        <br>सम्पर्क मोबाईल नं.9857645444</p>
  			<img src="{{asset('storage/members/1 Netra Nath Adhikari.jpg')}}" alt="..." class="img-thumbnail border border-dark" style="width: 152px">
  		</div>

  		<div class="row p-2 mb-2">
  			<div class="col">
  				<div class="mb-2 pl-4">
  				<p class="font-weight-bold"><u>पदेन सदस्यहरुः</u><font style="float:right">सम्पर्क मोबाईल नं.</font></p>
				माननीय उपसभामुख श्री श्रृजना शर्मा<font style="float:right">9846029453</font><br>
				माननीय आन्तरिक मामिला तथा कानून मन्त्री श्री हरि बहादुर  चुमान<font style="float:right">9856027621</font>
				</div>

				<div class="pl-4">
					<p class="font-weight-bold"><u>अन्य सदस्यहरुः</u><font style="float:right">सम्पर्क मोबाईल नं.</font></p>
					मा. कुमार खड्का<font style="float:right">9856021043</font><br>
					मा. कृष्ण थापा<font style="float:right">9847624548</font><br>
					मा. कृष्ण बहादुर  थापा<font style="float:right">9856021202</font><br>
					मा. गायत्री  गुरुङ<font style="float:right">9846198725</font><br>
					मा. मणि भद्र  शर्मा<font style="float:right">9857621502</font><br>
					मा. मायानाथ  अधिकारी<font style="float:right">9856045966</font><br>
					मा. रामजी प्रसाद  बराल जीवन<font style="float:right">9856020668</font><br>
					मा. हरि शरण  आचार्य<font style="float:right">9851006104</font>

				</div>

  			</div>
  			<div class="col border border-dark pt-2">
  				<p class="font-weight-bold"><u>अन्य समितिहरु:</u></p>
  				<div class="list-group list-group-flush">
				  <a href="{{route('businessAdvisoryCommittee')}}" class="list-group-item list-group-item-action active">
				    कार्य व्यवस्था परामर्श समिति
				  </a>
				  <a href="{{route('legislationCommittee')}}" class="list-group-item list-group-item-action bg-light">विधायन समिति</a>
				  <a href="{{route('publicAccountCommittee')}}" class="list-group-item list-group-item-action bg-light">सार्वजनिक लेखा समिति</a>
				  <a href="{{route('financeCommittee')}}" class="list-group-item list-group-item-action bg-light">अर्थ तथा विकास समिति</a>
				  <a href="{{route('justiceCommittee')}}" class="list-group-item list-group-item-action bg-light">प्रदेश मामिला समिति</a>
				</div>
  			</div>
  		</div>
  		<hr>

  		<div class="row justify-content-center">
  			<p class="font-weight-bold pt-5 mr-3"><u>समिति सचिव- हरि राज पोख्रेल </u>
        <br>सम्पर्क मोबाईल नं.9856011842</p>
  			<img src="{{asset('storage/staffs/Secretary.jpg')}}" alt="..." class="img-thumbnail border border-dark" style="width: 152px">
  		</div>

  		<div class="row p-4">
  			<div>
  			<p class="font-weight-bold"><u>काम कर्तव्य र अधिकार </u></p>
  			

  			</div>
  		</div>

  		<div class="row p-3">
  			<div class="col">
  				<p class="font-weight-bold"><u>गतिविधिहरु:</u></p>
  				<ol style="list-style: none">
            @foreach($activities as $activity)
            @if(App::isLocale('nep'))
            
            <li><a href="{{route('activityDownload',$activity->id)}}"><i class="fa fa-file">{{$activity->title_nep}}</i></a></li>
            @elseif(App::isLocale('en'))
           
            <li><a href="{{route('activityDownload',$activity->id)}}"><i class="fa fa-file">{{$activity->title_en}}</i></a></li>
            
            @endif
            @endforeach
          </ol>
  			</div>
  			<div class="col">
  				<p class="font-weight-bold"><u>प्रकाशनहरु / डाउनलोडस् :</u></p>
  				<ol style="list-style: none">
            @if(App::isLocale('nep'))
            @foreach($advisories as $advisory)
  					<li><a href="{{route('businessadvisorydownload',$advisory->id)}}"><i class="fa fa-file">{{$advisory->title_nep}}</i></a></li>
            @endforeach
            @elseif(App::isLocale('en'))
            @foreach($advisories as $advisory)
            <li><a href="{{route('businessadvisorydownload',$advisory->id)}}"><i class="fa fa-file">{{$advisory->title_en}}</i></a></li>
            @endforeach
            @endif
  				</ol>
  			</div>
  		</div>
  		
  	</div>
@endsection
@section('scripts')
@endsection