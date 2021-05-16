@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  	<div class="container">
  		<h3 style="text-align:center">सार्वजनिक लेखा समिति</h3>
  		<hr>

  		<div class="row justify-content-center">
  			<p class="font-weight-bold pt-5 mr-3"><u>सभापति – मा.  कुमार खड्का</u>
        <br>सम्पर्क मोबाईल नं.9856021043</p>
  			<img src="{{asset('storage/members/5 Kumar Khadka.JPG')}}" alt="..." class="img-thumbnail border border-dark" style="width: 152px; height: 143px">
  		</div>

  		<div class="row p-2 mb-2">
  			<div class="col">
  				<div class="pl-4">
  				<p class="font-weight-bold"><u>सदस्यहरुः</u><font style="float:right">सम्पर्क मोबाईल नं.</font></p>
      				मा. ओम  कला  गौतम<font style="float:right">9857041595</font><br>
              मा. गायत्री  गुरुङ<font style="float:right">9846198725</font><br>
              मा. जुना  देवी  नेपाली<font style="float:right">9857626344</font><br>
              मा. दिलमाया  रोका  मगर  गौतम<font style="float:right">9847705172</font><br>
              मा. प्रकाश  चन्द्र  दवाडी<font style="float:right">9851048397</font><br>
              मा. प्रभा  कोइराला<font style="float:right">9856085111</font><br>
              मा. बिन्दु  कुमार  थापा<font style="float:right">9856024848</font><br>
              मा. महेन्द्र  बहादुर  थकाली<font style="float:right">9857650001</font><br>
              मा. मायानाथ  अधिकारी<font style="float:right">9856045966</font><br>
              मा. मेखलाल  श्रेष्ठ<font style="float:right">9851151207</font><br>
              मा. राम  बहादुर  गुरुङ<font style="float:right">9851070031</font><br>
              मा. रामजी  प्रसाद  बराल  जीवन<font style="float:right">9856020668</font><br>

      				</div>

  			</div>
  			<div class="col border border-dark pt-2">
  				<p class="font-weight-bold"><u>अन्य समितिहरु:</u></p>
  				<div class="list-group list-group-flush">
				  <a href="{{route('businessAdvisoryCommittee')}}" class="list-group-item list-group-item-action bg-light">
				    कार्य व्यवस्था परामर्श समिति
				  </a>
				  <a href="{{route('legislationCommittee')}}" class="list-group-item list-group-item-action bg-light">विधायन समिति</a>
				  <a href="{{route('publicAccountCommittee')}}" class="list-group-item list-group-item-action active">सार्वजनिक लेखा समिति</a>
				  <a href="{{route('financeCommittee')}}" class="list-group-item list-group-item-action bg-light">अर्थ तथा विकास समिति</a>
				  <a href="{{route('justiceCommittee')}}" class="list-group-item list-group-item-action bg-light">प्रदेश मामिला समिति</a>
				</div>
  			</div>
  		</div>
  		<hr>

  		<div class="row justify-content-center">
  			<p class="font-weight-bold pt-5 mr-3"><u>समिति सचिव- जितेन्द्रजंग के. सी.</u>
        <br>सम्पर्क मोबाईल नं.9846043571</p>
  			<img src="{{asset('storage/staffs/Jitendra Jang KC.jpg')}}" alt="..." class="img-thumbnail border border-dark" style="width: 152px; height: 143.54px;">
  		</div>

  		<div class="row p-4">
  			<div>
  			<p class="font-weight-bold"><u>काम कर्तव्य र अधिकार </u></p>
  			&nbsp&nbsp&nbsp&nbspगण्डकी प्रदेश, प्रदेश सभा नियमावली, २०७४ (तेस्रो संशोधन) अनुसार विषयगत समितिहरु मध्ये सार्वजनिक लेखा समितिले गर्नु पर्ने कार्यहरु:
        <p>
            क) मन्त्रालय, निर्देशनालय र अन्तर्गतका निकायहरुको नीति तथा कार्यक्रम, श्रोतपरिचालन, व्यवस्थापन र अन्य यस्तै क्रियाकलापको मूल्यांकन गरी सम्वन्धित निकायलाई आवश्यक निर्देशन दिने र समुचित टिप्पणी, सिफारिस र निर्देशन सहितको वार्षिक प्रतिवेदन बैठकमा पेश गर्ने ।<br>
            ख) विषयसँग सम्वन्धित सरकारी निकायको सार्वजनिक सम्पत्तिको हिनामिना भए नभएको अध्ययन, अनुगमन र मूल्यांकन गरी आवश्यक निर्देशन दिने र बैठकमा प्रतिवेदन पेश गर्ने।<br>
            ग) प्रदेश सरकारद्धारा समय-समयमा गठन हुने छानविन आयोग÷समितिद्धारा प्रस्तुत प्रतिवेदन कार्यान्वयनको अनुगमन गरी सम्वन्धित निकायलाई आवश्यक राय, सल्लाह र निर्देशन दिने।<br>
            घ) मन्त्रालय, निर्देशनालय र अन्य निकायबाट सम्पादन भएका कामको अनुगमन तथा मूल्यांकन गरी सो सम्वन्धमा आबश्यक निर्देशन दिने ।<br>
            ड.) बैठकले सुम्पेको अन्य काम गर्ने ।<br>
            झ) समितिको सिफारिसमा सभामुखबाट अनुमोदित बजेट र कार्यक्रमको अधीनमा रही आफ्नो कार्यक्रम संचालन गर्ने ।</p>

                <p>&nbsp&nbsp&nbsp&nbsp(२) उपनियम (१) बमोजिम विषयगत समितिले कार्य सम्पादन गर्दा सम्बन्धित मन्त्रालय तथा निर्देशनालय, आयोग र निकायका प्रतिनिधि र आवश्यक परे तत् तत् विषयका विशेषज्ञसँग समेत छलफल गर्न सक्नेछ ।</p>

            <p>ञ) विषयगत समितिले आफ्नो कार्यक्षेत्र अन्तर्गतको जिम्मेवारी सु-व्यवस्थित ढङ्गले बहन गर्ने सन्दर्भमा आवश्यक कार्यविधि कार्ययोजना र कार्यतालिका बनाई लागू गर्न सक्नेछन् ।<br>
            ट) सार्वजनिक लेखा समितिले सभामा पेश गरिएको महालेखा परीक्षकको वार्षिक प्रतिवेदनमा उल्लिखित बेरुजुको जाँच गरी महालेखा परीक्षकद्वारा भएगरेका काम कारबाही र सो सम्बन्धमा सम्बन्धित  निकायबाट  हुनु  पर्ने  काम कारबाही  कानून सङ्गत र औचित्यपूर्ण 
               तवरबाट भए नभएको सम्बन्धमा समेत अध्ययन गरी आवश्यक निर्देशन दिन सक्नेछ ।<br>
            ठ) समितिको कार्य सम्पादनको सिलसिलामा समितिका सदस्यले सभामुखको पूर्व स्वीकृती लिई आवश्यक स्थानको भ्रमण गर्न सक्नेछन् ।<br>
            ठ)  उपनियम (५) बमोजिम स्वीकृति माग गर्दा त्यसरी भ्रमण गर्नुपर्ने कारण स्पष्ट खुलाईएको हुनुपर्नेछ ।<br>
            ड) यस नियम बमोजिम समितिले बैठकमा प्रस्तुत गर्नु पर्ने वार्षिक प्रतिवेदन वार्षिक अनुमान पेश हुनु अगावै र अरू प्रतिवेदन जुनसुकै समयमा प्रस्तुत गर्न सक्नेछन् ।”</p>

                   <p>उल्लेखित् काम, कर्तव्य र अधिकारको प्रयोग गरी कार्यसम्पादन गर्दा समितिले सम्वन्धित मन्त्रालय तथा निर्देशनालय, आयोग र निकायका प्रतिनिधि र आवश्यक परे तत् तत् विषयका विशेषज्ञसँग समेत छलफल गर्न सक्ने, आफ्नो कार्यक्षेत्र अन्तर्गतको जिम्मेवारी सुव्यवस्थित ढंगले वहन गर्ने सन्दर्भमा आवश्यक कार्यविधि, कार्ययोजना र कार्यतालिका बनाई लागू गर्न सक्ने, कुनै विशेष अवस्थामा उपसमिति गठन गरी त्यस उपसमितिले सुम्पिएको कार्य पूर्ण गरी समिति समक्ष प्रतिवेदन पेश गर्ने, विशेष अवस्थामा विशेष बैठक बस्ने, समितिको कार्यसम्पादनको सिलसिलामा समितिका सदस्यले सभामुखको पूर्व स्वीकृती लिई आवश्यक स्थानको भ्रमण गर्न सक्ने र बैठकमा प्रस्तुत गर्नुपर्ने वार्षिक प्रतिवेदन वार्षिक अनुमान पेश हुनु अगाबै र अन्य प्रतिवेदन जुनसुकै समयमा प्रस्तुत गर्न सक्ने जस्ता व्यवस्थाहरु रहेका छन् ।</p>

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
            @foreach($publicaccounts as $account)
            <li><a href="{{route('publicaccountdownload',$account->id)}}"><i class="fa fa-file">{{$account->title_nep}}</i></a></li>
            @endforeach
            @elseif(App::isLocale('en'))
            @foreach($publicaccounts as $account)
            <li><a href="{{route('publicaccountdownload',$account->id)}}"><i class="fa fa-file">{{$account->title_en}}</i></a></li>
            @endforeach
            @endif
          </ol>
  			</div>
  		</div>
  		
  	</div>
  
@endsection
@section('scripts')
@endsection