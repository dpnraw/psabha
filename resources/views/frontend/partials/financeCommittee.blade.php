@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
{{-- <style>
#more {display: none;}
</style> --}}
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  <div class="container">
  		<h3 style="text-align:center">अर्थ तथा विकास समिति</h3>
  		<hr>

  		<div class="row justify-content-center">
  			<p class="font-weight-bold pt-5 mr-3"><u>सभापति – मा.  दिपक  कोइराला</u><br>सम्पर्क मोबाईल नं.9856023161</p>
  			<img src="{{asset('storage/members/माननीय दिपक कोइराला.jpg')}}" alt="..." class="img-thumbnail border border-dark" style="width: 152px; height: 143px">
  		</div>

  		<div class="row p-2 mb-2">
  			<div class="col">
  				<div class="pl-4">
  				<p class="font-weight-bold"><u>सदस्यहरुः</u><font style="float:right">सम्पर्क मोबाईल नं.</font></p>
      				मा.  किरण गुरुङ्ग<font style="float:right">9851121782</font><br>
					मा.  विकास लम्साल<font style="float:right">9857630061</font><br>
					मा.  लेख बहादुर थापा<font style="float:right">9856070334</font><br>
					मा.  इन्द्र   लाल  सापकोटा<font style="float:right">9857621522</font><br>
					मा.  चन्द्र मोहन   गौचन<font style="float:right">9857650060</font><br>
					मा. जनकलाल   श्रेष्ठ<font style="float:right">9857041229</font><br>
					मा.  डोबाटे   विश्वकर्मा<font style="float:right">9846062517</font><br>
					मा.  भगवत   प्रकाश   मल्ल<font style="float:right">9856028110</font><br>
					मा.  मिन   प्रसाद  गुरुङ<font style="float:right">9856027636</font><br>
					मा.  राजिव  गुरुङ<font style="float:right">9856019729</font><br>
					मा.  विनोद  के.सी.<font style="float:right">9857624142</font><br>
					मा.  सरिता  गुरुङ<font style="float:right">9856028124</font><br>
					मा.  हरिशरण  आचार्य<font style="float:right">9851006104</font><br>


      				</div>

  			</div>
  			<div class="col border border-dark pt-2">
  				<p class="font-weight-bold"><u>अन्य समितिहरु:</u></p>
  				<div class="list-group list-group-flush">
				  <a href="{{route('businessAdvisoryCommittee')}}" class="list-group-item list-group-item-action bg-light">
				    कार्य व्यवस्था परामर्श समिति
				  </a>
				  <a href="{{route('legislationCommittee')}}" class="list-group-item list-group-item-action bg-light">विधायन समिति</a>
				  <a href="{{route('publicAccountCommittee')}}" class="list-group-item list-group-item-action bg-light">सार्वजनिक लेखा समिति</a>
				  <a href="{{route('financeCommittee')}}" class="list-group-item list-group-item-action active">अर्थ तथा विकास समिति</a>
				  <a href="{{route('justiceCommittee')}}" class="list-group-item list-group-item-action bg-light">प्रदेश मामिला समिति</a>
				</div>
  			</div>
  		</div>
  		<hr>

  		<div class="row justify-content-center">
  			<p class="font-weight-bold pt-5 mr-3"><u>समिति सचिव- रबिन्द्र घिमिरे </u>
        <br>सम्पर्क मोबाईल नं.९८४६१४७६७४</p>
  			<img src="{{asset('storage/staffs/Rabindra Ghimire NEW.jpg')}}" alt="..." class="img-thumbnail border border-dark" style="width: 152px; height: 143.54px;">
  		</div>

  		<div class="row p-4">
  			<div>
  			<p class="font-weight-bold"><u>काम कर्तव्य र अधिकार </u></p>
        <p>
  			&nbsp&nbsp समितिको काम कर्तव्य र अधिकार सम्बन्धमा गण्डकी प्रदेश, प्रदेश सभा नियमावली, २०७४ को नियम १५१ मा उल्लेख गरिएको छ । उक्त नियमको उपनियम १ मा आफ्नो कार्यक्षेत्रको परिधिभित्र रही अर्थ तथा विकास समितिको काम, कर्तव्य र अधिकार देहाय बमोजिम हुने व्यवस्था गरिएको छ
          <br>
            क) मन्त्रालय, निर्देशनालय र अन्तर्गतका निकायहरुको नीति तथा कार्यक्रम, श्रोत परिचालन, व्यवस्थापन र अन्य यस्तै क्रियाकलापको मूल्यांकन गरी सम्वन्धित निकायलाई आवश्यक निर्देशन दिने र समुचित टिप्पणी, सिफारिस र निर्देशन सहितको वार्षिक प्रतिवेदन बैठकमा पेश गर्ने ।<br>
            ख) मन्त्रालय, निर्देशनालय र अन्तर्गतका निकायको राजश्व र व्यय सम्वन्धि अनुमानको जाँच गरी वार्षिक अनुमान तयार गर्ने तरीका, वार्षिक अनुमानमा निहित नीतिको सट्टा अपनाउन सकिने वैकल्पिक नीति र वार्षिक अनुमानमा रहेको रकममा के कति किफायत गर्न सकिन्छ भन्ने सम्वन्धमा सम्वन्धित निकायलाई आवश्यक निर्देशन दिने र आफ्नो राय सहितको वार्षिक प्रतिवेदन बैठकमा पेश गर्ने ।<br>
            ग) मन्त्रीले सरकारको तर्फबाट बैठकमा समय–समयमा दिएका आश्वासनलाई पूरा गर्न प्रदेश सरकारद्धारा के–कस्ता कदम उठाएका छन् सो सम्वन्धमा अध्ययन गरी सम्वन्धित निकायलाई आवश्यक निर्देशन दिने र बैठकमा प्रतिवेदन पेश गर्ने ।<br>
            घ) विषयसँग सम्वन्धित सरकारी निकायको सार्वजनिक सम्पत्तिको हिनामिना भए नभएको अध्ययन, अनुगमन र मूल्यांकन गरी आवश्यक निर्देशन दिने र बैठकमा प्रतिवेदन पेश गर्ने।<br>
            ङ) सभाद्धारा प्रत्यायोजित अधिकार अन्तर्गत बनाइएको नियम, संविधान, सम्वन्धित ऐन, प्रचलित कानून बमोजिम बनेको छ वा छैन र सरकारद्धारा प्रचलित ऐन, नियम अनुरुप काम भए गरेको छ वा छैन भन्ने विषयमा मूल्यांकन गरी सम्वन्धित निकायलाई आवश्यक निर्देशन दिने ।<br>
            च) प्रदेश सरकारद्धारा समय–समयमा गठन हुने छानविन आयोग÷समितिद्धारा प्रस्तुत प्रतिवेदन कार्यान्वयनको अनुगमन गरी सम्वन्धित निकायलाई आवश्यक राय, सल्लाह र निर्देशन दिने।<br>
            छ) मन्त्रालय, निर्देशनालय र अन्य निकायबाट सम्पादन भएका कामको अनुगमन तथा मूल्यांकन गरी सो सम्वन्धमा आबश्यक निर्देशन दिने ।
            ज) बैठकले सुम्पेको अन्य काम गर्ने ।<br>
            झ) समितिको सिफारिसमा सभामुखबाट अनुमोदित बजेट र कार्यक्रमको अधीनमा रही आफ्नो कार्यक्रम संचालन गर्ने ।
            <br>
               उल्लेखित् काम, कर्तव्य र अधिकारको प्रयोग गरी कार्यसम्पादन गर्दा समितिले सम्वन्धित मन्त्रालय तथा निर्देशनालय, आयोग र निकायका प्रतिनिधि र आवश्यक परे तत् तत् विषयका विशेषज्ञहरुसँग समेत छलफल गर्न सक्ने, आफ्नो कार्यक्षेत्र अन्तर्गतको जिम्मेवारी सुव्यवस्थित ढंगले वहन गर्ने सन्दर्भमा आवश्यक कार्यविधि, कार्ययोजना र कार्यतालिका बनाई लागू गर्न सक्ने, समितिको कार्यसम्पादनको सिलसिलामा समितिका सदस्यले सभामुखको पूर्व स्वीकृती लिई आवश्यक स्थानको भ्रमण गर्न सक्ने र बैठकमा प्रस्तुत गर्नुपर्ने वार्षिक प्रतिवेदन वार्षिक अनुमान पेश हुनु अगाबै र अन्य प्रतिवेदन जुनसुकै समयमा प्रस्तुत गर्न सक्ने जस्ता व्यवस्थाहरु रहेका छन् ।</p>
               
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
            @foreach($finances as $finance)
            <li><a href="{{route('financedownload',$finance->id)}}"><i class="fa fa-file">{{$finance->title_nep}}</i></a></li>
            @endforeach
            @elseif(App::isLocale('en'))
            @foreach($finances as $finance)
            <li><a href="{{route('financedownload',$finance->id)}}"><i class="fa fa-file">{{$finance->title_en}}</i></a></li>
            @endforeach
            @endif
          </ol>
  			</div>
  		</div>
  		
  	</div>

  
@endsection
@section('scripts')
{{-- <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "@lang('home.view more')"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "@lang('home.view less')"; 
    moreText.style.display = "inline";
  }
}
</script> --}}
@endsection