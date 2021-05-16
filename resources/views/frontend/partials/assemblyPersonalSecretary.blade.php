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
  		<h2><u>माननीयहरुका स्वकीय सचिवहरुको विवरण </u></h2>
  		<div class="table-responsive">
		<table class="table table-striped table-bordered ">
		  <thead style="background-color:#093d63 ">
		    <tr style="color: white">
		      <th scope="col">क्र.स.</th>
		      <th scope="col">माननीयहरुको नाम,थर</th>
		      <th scope="col">स्वकीय सचिवको नाम, थर</th>
		      <th scope="col">फोन नं.</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">१</th>
		      <td>आशा कोईराला</td>
		      <td>श्री अस्मिता खनाल </td>
		      <td>9804195955</td>
		    </tr>
		    <tr>
		      <th scope="row">२</th>
		      <td>ईन्द्र धारा डादु विष्ट</td>
		      <td>श्री गीता राना </td>
		      <td>9867742393</td>
		    </tr>
		    <tr>
		      <th scope="row">३</th>
		      <td>इन्द्र लाल सापकोटा</td>
		      <td>श्री शिव शर्मा</td>
		      <td>9847660350</td>
		    </tr>

		    		<tr>
		    		<th scope="row">४</th>
					<td>ओम कला गौतम</td>
					<td>श्री भिमा पौडेल </td>
					<td></td>
					</tr>
					<tr>
					<th scope="row">५</th>
					<td>किरण गुरुङ्ग</td>
					<td>श्री रमाकान्त पोखरेल</td>
					<td></td>
					</tr>

					<tr>
					<th scope="row">६</th>
					<td>कुमार खड्का</td>
					<td>श्री सुजता लामिछाने</td>
					<td>9816679933</td>
					</tr>

					<tr>
					<th scope="row">७</th>
					<td>कृष्ण थापा </td>
					<td>भीमसेन वन</td>
					<td></td>
					</tr>

					<tr>
					<th scope="row">८</th>
					<td>कृष्ण बहादुर थापा</td>
					<td>श्री महेन्द्र उपाध्याय</td>
					<td>9846412250</td>
					</tr>

					<tr>
					<th scope="row">९</th>
					<td>कृष्ण चन्द्र नेपाली  पोख्रेल</td>
					<td>श्री राजेन्द्र उपाध्याय</td>
					<td>9855060306</td>
					</tr>

					<tr>
					<th scope="row">१०</th>
					<td>कोपिला बोहोरा</td>
					<td>श्री सहनशिला नेपाली </td>
					
					<td>9847621006</td>
					</tr>

					<tr>
					<th scope="row">११</th>
					<td>खिम विक्रम शाही</td>
					<td>श्री ढालेन्द्र हमाल</td>
					<td>9867947797</td>
					</tr>

					<tr>
					<th scope="row">१२</th>
					<td>गायत्री गुरुङ्ग </td>
					<td>श्री मन्जु गुरुङ्ग</td>
					<td></td>
					</tr>

					<th scope="row">१३</th>
					<td>चन्द्र बहादुर बुढा</td>
					<td>श्री एलिसा बुढामगर</td>
					<td>9864382696</td>
					</tr>

					<tr>
					<th scope="row">१४</th>
					<td>चन्द्र मोहन गौचन</td>
					<td>श्री जीवन गोतामे </td>
					<td>9846489865</td>
					</tr>

					<tr>	
					<th scope="row">१५</th>
					<td>चिन्त बहादुर घले</td>
					<td>श्री पदम जङ्ग गुरुङ्ग</td>
					<td>9849144724</td>
					</tr>

					<tr>
					<th scope="row">१६</th>
					<td>जनकलाल श्रेष्ठ</td>
					<td>श्री बाबुराम पाण्डे </td>
					<td>9857045178</td>
					</tr>

					
<tr>
<th scope="row">१७</th>
<td>जुना देवी नेपाली</td>
<td>श्री मौसमी नेपाली&nbsp;</td>
<td>9867705136</td>
</tr>

<tr>
<th scope="row">१८</th>
<td>दिपक कोइराला</td>
<td>श्री घनश्याम पाण्डे</td>
<td>9856080130</td>

</tr>
<tr>
<th scope="row">१९</th>
<td>दिपक थापा</td>
<td>श्री सागर थापा&nbsp;</td>
<td>9856015147</td>

</tr>
<tr>
<th scope="row">२०</th>
<td>दिलमाया रोका मगर गौतम</td>
<td>श्री कर्ण बहादुर गौतम</td>
<td>&nbsp;</td>

</tr>
<tr>
<th scope="row">२१</th>
<td>डोवाटे विश्वकर्मा&nbsp;</td>
<td>श्री होम बहादुर रसाईली&nbsp;</td>
<td>9856060101</td>

</tr>
<tr>
<th scope="row">२२</th>
<td>धनञ्जय दवाडी</td>
<td>श्री सर्वदा पौडेल दवाडी</td>
<td>&nbsp;</td>

</tr>
<tr>
<th scope="row">२३</th>
<td>धनमाया पोखरेल (लामा)</td>
<td>श्री गरिमा तामाङ</td>
<td>&nbsp;</td>

</tr>
<tr>
<th scope="row">२४</th>
<td>नरदेवी पुन मगर</td>
<td>श्री चन्द्रमणि सापकोटा</td>
<td>&nbsp;</td>

</tr>
<tr>
<th scope="row">२५</th>
<td>नेत्रनाथ अधिकारी</td>
<td>श्री लोकराज आचार्य</td>
<td>9856032135</td>

</tr>
<tr>
<th scope="row">२६</th>
<td>पियारी थापा</td>
<td>श्री कमल राना&nbsp;</td>
<td>9844736317</td>
</tr>
<tr>
<th scope="row">२७</th>
<td>पुष्पा के.सी. (भण्डारी)</td>
<td>श्री भगवती खत्री&nbsp;</td>
<td>9803628716</td>
</tr>

<tr>
<th scope="row">२८</th>
<td>पृथ्वी सुव्वा गुरुङ्ग</td>
<td>श्री सूर्य प्रसाद गुरुड</td>
<td>&nbsp;</td>
</tr>

<tr>
<th scope="row">२९</th>
<td>प्रकाश चन्द्र दवाडी</td>
<td>श्री सागीर बानियां&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<th scope="row">३०</th>
<td>प्रभा कोइराला</td>
<td>श्री संजय पौडेल</td>
<td>&nbsp;</td>
</tr>

<tr>
<th scope="row">३१</th>
<td>विन्दु कुमार थापा</td>
<td>श्री सूर्य राज पौडेल</td>
<td>9856031369</td>
</tr>

<tr>
<th scope="row">३२</th>
<td>भगवत प्रकाश मल्ल</td>
<td>श्री सुनिता अधिकारी पौडेल&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<th scope="row">३३</th>
<td>मणि भद्र शर्मा&nbsp;</td>
<td>श्री भुवानी प्रसाद कडेल&nbsp;</td>
<td>9857620347</td>
</tr>

<tr>
<th scope="row">३४</th>
<td>मधुमाया अधिकारी गुरुङ्ग</td>
<td>श्री मोनिका न्यौपाने</td>
<td>&nbsp;</td>
</tr>

<tr>
<th scope="row">३५</th>
<td>मन कुमारी गुरुङ्ग</td>
<td>श्री स्मृति गुरुङ्ग</td>
<td>&nbsp;</td>
</tr>

<tr>
<th scope="row">३६</th>
<td>मन बहादुर गुरुङ्ग</td>
<td>श्री लोक बहादुर गुरुङ्ग</td>
<td>9806500282</td>
</tr>

<tr>
<th scope="row">३७</th>
<td>महेन्द्र बहादुर थकाली</td>
<td>श्री शिशिर थकाली&nbsp;</td>
<td></td>

</tr>
<tr>
<th scope="row">३८</th>
<td>मायानाथ अधिकारी</td>
<td>श्री हरी प्रसाद घिमिरे&nbsp;</td>
<td>9846632922</td>
</tr>

<tr>
<th scope="row">३९</th>
<td>मित्र कुमारी गुरुङ्ग सुबेदी</td>
<td>श्री भावना सुवेदी&nbsp;</td>
<td>9843329396</td>
</tr>

<tr>
<th scope="row">४०</th>
<td>मिन प्रसाद गुरुङ्ग</td>
<td>श्री डिल कुमार भुजेल</td>
<td>9856037734</td>
</tr>

<tr>
<th scope="row">४१</th>
<td>मिना गुरुङ्ग</td>
<td>श्री दिपा शर्मा</td>
<td>&nbsp;</td>
</tr>

<tr>
<th scope="row">४२</th>
<td>मेख लाल श्रेष्ठ</td>
<td>श्री सन्तोष लामिछाने मगर&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<th scope="row">४३</th>
<td>मोहन प्रसाद रेग्मी</td>
<td>श्री सञ्जीव रेग्मी</td>
<td>9867508509</td>
</tr>

<tr>
<th scope="row">४४</th>

<td>राजिव पहारी</td>
<td>श्री साजन सुवेदी</td>
<td>9856016315</td>
</tr>

<tr>
<th scope="row">४५</th>
<td>राम बहादुर गुरुङ्ग</td>
<td>श्री उत्तर गुरुड.</td>
<td>&nbsp;</td>
</tr>

<tr>
<th scope="row">४६</th>
<td>रामशरण बस्नेत</td>
<td>श्री निर्मल गुरुड.</td>
<td></td>
</tr>

<tr>
<th scope="row">४७</th>
<td>रामजी प्रसाद बराल जीवन</td>
<td>श्री कृष्ण प्रसाद दवाडी</td>
<td>9856032100</td>
</tr>
<<th scope="row">४८</th>
<td>रोसन बहादुर गाहा थापा</td>
<td>श्री सजिना थापा</td>
<td>&nbsp;</td>
</tr>
<tr>
<th scope="row">४९</th>
<td>लक्ष्मी सुनार</td>
<td>श्री सुक्रिव सुनार</td>
<td>9865404889</td>
</tr>
<tr>
<th scope="row">५०</th>
<td>ललीत कला गुरुङ्ग</td>
<td>श्री डेनिस गुरुङ्ग</td>
<td>9805176798</td>
</tr>
<tr>
<th scope="row">५१</th>
<td>लेख बहादुर थापा मगर</td>
<td>श्री भरत खनाल</td>
<td>&nbsp;</td>

</tr>
<tr>
<th scope="row">५२</th>
<td>विकास लम्साल</td>
<td>श्री किशोर सापकोटा</td>
<td>9857623726</td>

</tr>
<tr>
<th scope="row">५३</th>
<td>विनोद के.सी.</td>
<td>श्री हेमराज शर्मा</td>
<td>&nbsp;</td>

</tr>
<tr>
<th scope="row">५४</th>
<td>विष्णु प्रसाद लामिछाने</td>
<td>श्री गोविन्दराज लामिछाने&nbsp;</td>
<td>9847289940</td>

</tr>
<tr>
<th scope="row">५५</th>
<td>श्रृजना शर्मा</td>
<td>श्री प्रकाश शर्मा</td>
<td>9856013351</td>

</tr>
<tr>
<th scope="row">५६</th>
<td>सरिता गुरुङ्ग</td>
<td>श्री सरलादेवी श्रेष्ठ&nbsp;</td>
<td>9846055090</td>

</tr>
<tr>
<th scope="row">५७</th>
<td>साबित्रा राना</td>
<td>श्री कुमारी राना&nbsp;</td>
<td></td>

</tr>
<tr>
<th scope="row">५८</th>
<td>हरि बहादुर चुमान</td>
<td>श्री राजु वि.क.</td>
<td></td>

</tr>
<tr>
<th scope="row">५९</th>
<td>हरि शरण आचार्य</td>
<td>श्री रविन आचार्य</td>
<td></td>

</tr>
<tr>
<th scope="row">६०</th>
<td>राजिव गुरुङ</td>
<td>श्री जगदिशनाथ योगी</td>
<td></td>
</tr>



		  </tbody>
		</table>
	</div>
  		
  	</div>
  
@endsection
@section('scripts')
@endsection