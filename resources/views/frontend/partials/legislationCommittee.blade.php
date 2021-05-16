@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  	<div class="container">
  		<h3 style="text-align:center">विधायन समिति</h3>
  		<hr>

  		<div class="row justify-content-center">
  			<p class="font-weight-bold pt-5 mr-3"><u>सभापति – मा.  मोहन प्रसाद रेग्मी</u>
        <br>सम्पर्क मोबाईल नं.9856054444</p>
  			<img src="{{asset('storage/members/44 Mohan Prasad Regmi.JPG')}}" alt="..." class="img-thumbnail border border-dark" style="width: 152px">
  		</div>

  		<div class="row p-2 mb-2">
  			<div class="col">
  				<div class="pl-4">
  				<p class="font-weight-bold"><u>सदस्यहरुः</u><font style="float:right">सम्पर्क मोबाईल नं.</font></p>
				मा.आशा कोइराला<font style="float:right">9856060823</font><br>
				मा.कृष्ण चन्द्र नेपाली पोख्रेल<font style="float:right">9843360524</font><br>
				मा.चन्द्र बहादुर बुढा<font style="float:right">9857624816</font><br>
				मा.धनञ्जय दवाडी<font style="float:right">9856028616</font><br>
				मा.धनमाया पोखरेल(लामा)<font style="float:right">9846474555</font><br>
				मा.पियारी  थापा<font style="float:right">9840099137</font><br>
				मा.पुष्पा के‍.सी.(भण्डारी)<font style="float:right">9846034851</font><br>
				मा.मणिभद्र शर्मा<font style="float:right">9857621502</font><br>
				मा.मन बहादुर गुरुङ्ग<font style="float:right">9856021424</font><br>
				मा.ललीतकला गुरुङ्ग<font style="float:right">9851111831</font><br>
				मा.विष्णु प्रसाद लामिछाने<font style="float:right">9857045942</font><br>
				मा.साबित्रा राना<font style="float:right">9857670500</font>
				</div>

  			</div>
  			<div class="col border border-dark pt-2">
  				<p class="font-weight-bold"><u>अन्य समितिहरु:</u></p>
  				<div class="list-group list-group-flush">
				  <a href="{{route('businessAdvisoryCommittee')}}" class="list-group-item list-group-item-action bg-light">
				    कार्य व्यवस्था परामर्श समिति
				  </a>
				  <a href="{{route('legislationCommittee')}}" class="list-group-item list-group-item-action active">विधायन समिति</a>
				  <a href="{{route('publicAccountCommittee')}}" class="list-group-item list-group-item-action bg-light">सार्वजनिक लेखा समिति</a>
				  <a href="{{route('financeCommittee')}}" class="list-group-item list-group-item-action bg-light">अर्थ तथा विकास समिति</a>
				  <a href="{{route('justiceCommittee')}}" class="list-group-item list-group-item-action bg-light">प्रदेश मामिला समिति</a>
				</div>
  			</div>
  		</div>
  		<hr>

  		<div class="row justify-content-center">
  			<p class="font-weight-bold pt-5 mr-3"><u>समिति सचिव- राजेन्द्र न्यौपाने</u>
        <br>सम्पर्क मोबाईल नं.9856011842</p>
  			<img src="{{asset('storage/staffs/Rajendra Neupane Sir.jpg')}}" alt="..." class="img-thumbnail border border-dark" style="width: 152px">
  		</div>

  		<div class="row p-4">
  			<div>
  			<p class="font-weight-bold"><u>काम कर्तव्य र अधिकार </u></p>
  			समितिको काम¸ कर्तव्य र अधिकार सम्बन्धमा गण्डकी प्रदेश,प्रदेश सभा नियमावली, २०७४ को नियम १५१ मा उल्लेख गरिएको छ। उक्त नियमको उपनियम -१_ मा आफ्नो कार्यक्षेत्रको परिधिभित्र रही विधायन समितिको काम, कर्तव्य र अधिकार देहाय बमोजिम हुने व्यवस्था गरिएको   छ ।
        <br>

        <p class="ml-2">क)  सभाले समितिमा पठाएको विधेयकको विधायन समितिले दफावार छलफल गर्ने र सहमति भए अनुसार विधेयकमा संसोधनको सिफारिस गर्ने।<br>
        ख)  सभाद्धारा प्रत्यायोजित अधिकार अन्तर्गत बनाइएको नियमसंविधान, सम्वन्धित ऐन, प्रचलित कानून बमोजिम बनेको छ वा छैन भन्ने विषयमा मूल्यांकन गरी सम्वन्धित निकायलाई आवश्यक निर्देशन दिने ।<br>
        ग)  समितिको सिफारिसमा सभामुखबाट अनुमोदित बजेट र कार्यक्रमको अधीनमा रही आफ्नो कार्यक्रम संचालन गर्ने ।<br>
        घ)  बैठकले सुम्पेको अन्य काम गर्ने ।</p>

        उल्लेखित काम, कर्तव्य र अधिकारको प्रयोग गरी कार्यसम्पादन गर्दा समितिले सम्वन्धित मन्त्रालय तथा निर्देशनालय, आयोग र निकायका प्रतिनिधि र आवश्यक परे तत् तत् विषयका विशेषज्ञसँग समेत छलफल गर्न सक्ने, आफ्नो कार्यक्षेत्र अन्तर्गतको जिम्मेवारी सुव्यवस्थित ढंगले वहन गर्ने सन्दर्भमा आवश्यक कार्यविधि, कार्ययोजना र कार्यतालिका बनाई लागू गर्न सक्ने, समितिको कार्यसम्पादनको सिलसिलामा समितिका सदस्यले सभामुखको पूर्व स्वीकृती लिई आवश्यक स्थानको भ्रमण गर्न सक्ने र बैठकमा प्रस्तुत गर्नुपर्ने वार्षिक प्रतिवेदन वार्षिक अनुमान पेश हुनु अगाबै र अन्य प्रतिवेदन जुनसुकै समयमा प्रस्तुत गर्न सक्ने जस्ता व्यवस्थाहरु रहेका छन् ।

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
            @foreach($legislations as $legislation)
            <li><a href="{{route('legislationdownload',$legislation->id)}}"><i class="fa fa-file">{{$legislation->title_nep}}</i></a></li>
            @endforeach
            @elseif(App::isLocale('en'))
            @foreach($legislations as $legislation)
            <li><a href="{{route('legislationdownload',$legislation->id)}}"><i class="fa fa-file">{{$legislation->title_en}}</i></a></li>
            @endforeach
            @endif
          </ol>

  			</div>
  		</div>
  		
  	</div>
  
@endsection
@section('scripts')
@endsection