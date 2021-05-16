@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
<style type="text/css">
 .table-bordered th, .table-bordered td {
    border: 1px solid #10103c;
}
.table-image{
 width:200px;
 height: 161px;
 padding: 0.25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
}


</style>
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  		<div class="container" style="text-align: center">
  			<h4>प्रदेश सभा, गण्डकी प्रदेशका माननीय सदस्यहरुको पद,नाम थर, सम्पर्क नम्वरहरु र सम्बन्धित राजनैतिक दलहरु </h4>
  			<hr>
  			<div class="table-responsive">
				<table class="table table-striped table-bordered ">
				  <thead style="background-color:#093d63 ">
				    <tr style="color: white">
				      <th scope="col">क्रम <br>संख्या </th>
				      <th scope="col">फोटो</th>
				      <th scope="col">पद</th>
				      <th scope="col">नाम, थर</th>
				      <th scope="col">जिल्ला</th>
				      <th scope="col">राजनैतिक दल</th>
				      <th scope="col">सम्पर्क मोबाईल नं.</th>
				    </tr>
				  </thead>
				  <tbody>

				    <tr>
					<th scope="row">१</th>
					<td><img src="{{asset('storage/members/1 Netra Nath Adhikari.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय सभामुख</td>
					<td>नेत्रनाथ अधिकारी</td>
					<td>पर्वत</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857645444</td>
					</tr>

					<tr>
					<th scope="row">२</th>
					<td><img src="{{asset('storage/members/2 Shrijana Sharma.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय उपसभामुख</td>
					<td>श्रृजना शर्मा</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9846029453</td>
					</tr>

					<th scope="row">३</th>
					<td><img src="{{asset('storage/members/3 Aasha Koirala.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>आशा कोइराला</td>
					<td>तनहुँ</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856060823</td>
					</tr>

					<th scope="row">४</th>
					<td><img src="{{asset('storage/members/4 Indra Dhara Dadu Bista.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>इन्द्र धारा डादु विष्ट</td>
					<td>मुस्ताङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856027226</td>
					</tr>

					<tr>
					<th scope="row">५</th>
					<td><img src="{{asset('storage/members/माननीय इन्द्रलाल सापकोटा.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>इन्द्र लाल सापकोटा</td>
					<td>बाग्लुङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857621522</td>
					</tr>

					<tr>
					<th scope="row">६</th>
					<td><img src="{{asset('storage/members/6 Om Kala Gautam.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>ओम कला गौतम</td>
					<td>नवलपरासी</td>
					<td>नेपाली काँग्रेस</td>
					<td>9857041595</td>
					</tr>

					<tr>
					<th scope="row">७</th>
					<td><img src="{{asset('storage/members/7 Kiran Gurung.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय मन्त्री</td>
					<td>किरण गुरुङ्ग</td>
					<td>तनहुँ</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9851121782</td>
					</tr>

					<tr>
					<th scope="row">८</th>
					<td><img src="{{asset('storage/members/5 Kumar Khadka.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय सभापति</td>
					<td>कुमार खड्का</td>
					<td>कास्की</td>
					<td>नेपाली काँग्रेस</td>
					<td>9856021043</td>
					</tr>

					<tr>
					<th scope="row">९</th>
					<td><img src="{{asset('storage/members/9 Krishna Thapa.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय सभापति</td>
					<td>कृष्ण थापा&nbsp;</td>
					<td>बाग्लुङ्ग</td>
					<td>राष्ट्रिय जनमोर्चा</td>
					<td>9847624548</td>
					</tr>

					<tr>
					<th scope="row">१०</th>
					<td><img src="{{asset('storage/members/10 Krishan Bdr Thapa.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>कृष्ण बहादुर थापा</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856021202</td>
					</tr>

					<tr>
					<th scope="row">११</th>
					<td><img src="{{asset('storage/members/11 Krishna Chadra Nepali Pokheral.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय(नेता प्र.प्रतिपक्ष)</td>
					<td>कृष्ण चन्द्र नेपाली पोख्रेल</td>
					<td>नवलपरासी</td>
					<td>नेपाली काँग्रेस</td>
					<td>9843360524</td>
					</tr>

					<tr>
					<th scope="row">१२</th>
					<td><img src="{{asset('storage/members/10 Kopila Bohora.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>कोपिला बोहोरा</td>
					<td>बाग्लुङ्ग</td>
					<td>नेपाली काँग्रेस</td>
					<td>9857621854</td>
					</tr>

					<th scope="row">१३</th>
					<td><img src="{{asset('storage/members/माननीय खिम विक्रम शाही.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>खिम विक्रम शाही</td>
					<td>बाग्लुङ्ग</td>
					<td>राष्ट्रिय जनमोर्चा</td>
					<td>9857623660</td>
					</tr>

					<tr>
					<th scope="row">१४</th>
					<td><img src="{{asset('storage/members/14 Gayatri Gurung.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>गायत्री गुरुङ्ग</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9846198725</td>
					</tr>

					<tr>	
					<th scope="row">१५</th>
					<td><img src="{{asset('storage/members/माननीय चन्द्र बहादुर बुढा.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>चन्द्र बहादुर बुढा</td>
					<td>बाग्लुङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857624816</td>
					</tr>

					<tr>
					<th scope="row">१६</th>
					<td><img src="{{asset('storage/members/माननीय चन्द्रमोहन गौचन.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>चन्द्र मोहन गौचन</td>
					<td>मुस्ताङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857650060</td>
					</tr>

					<tr>
					<th scope="row">१७</th>
					<td><img src="{{asset('storage/members/17 Chinta Bahadur Ghale.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>चिन्त बहादुर घले</td>
					<td>मनाङ्ग</td>
					<td>नेपाली काँग्रेस</td>
					<td>9841683284</td>
					</tr>

					<tr>
					<th scope="row">१८</th>
					<td><img src="{{asset('storage/members/माननीय जनकलाल श्रेष्ठ.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>जनकलाल श्रेष्ठ</td>
					<td>नवलपरासी</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857041229</td>
					</tr>

					<tr>
					<th scope="row">१९</th>
					<td><img src="{{asset('storage/members/19 Juna Devi Nepali.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>जुना देवी नेपाली</td>
					<td>पर्वत</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857626344</td>
					</tr>

					<tr>
					<th scope="row">२०</th>
					<td><img src="{{asset('storage/members/माननीय दिपक कोइराला.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय सभापति</td>
					<td>दिपक कोइराला</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856023161</td>
					</tr>

					<tr>
					<th scope="row">२१</th>
					<td><img src="{{asset('storage/members/21 Dipak Thapa.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>दिपक थापा</td>
					<td>स्याङ्गजा</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856050022</td>
					</tr>

					<tr>
					<th scope="row">२२</th>
					<td><img src="{{asset('storage/members/दिलमाया रोक्का मगर गौतम.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>दिलमाया रोका मगर गौतम</td>
					<td>बाग्लुङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9847705172</td>
					</tr>

					<tr>
					<th scope="row">२३</th>
					<td><img src="{{asset('storage/members/23 Dobate Bishokarma.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>डोवाटे विश्वकर्मा&nbsp;</td>
					<td>तनहुँ</td>
					<td>नेपाली काँग्रेस</td>
					<td>9846062517</td>
					</tr>

					<tr>
					<th scope="row">२४</th>
					<td><img src="{{asset('storage/members/24 Dhananjaya Dawadi.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>धनञ्जय दवाडी</td>
					<td>लमजुङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856028616</td>
					</tr>

					<tr>
					<th scope="row">२५</th>
					<td><img src="{{asset('storage/members/25 Dhan Maya Pokhrel Lama.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>धनमाया पोखरेल (लामा)</td>
					<td>गोरखा</td>
					<td>नयाँ शक्ति पार्टी नेपाल</td>
					<td>9846474555</td>
					</tr>

					<tr>
					<th scope="row">२६</th>
					<td><img src="{{asset('storage/members/माननीय नरदेवी पुन मगर.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय मन्त्री</td>
					<td>नरदेवी पुन मगर</td>
					<td>म्याग्दी</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857640118</td>
					</tr>

					<tr>
					<th scope="row">२७</th>
					<td><img src="{{asset('storage/members/माननीय पियारी थापा.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>पियारी थापा</td>
					<td>बाग्लुङ्ग</td>
					<td>राष्ट्रिय जनमोर्चा</td>
					<td>9840099137</td>
					</tr>

					<tr>
					<th scope="row">२८</th>
					<td><img src="{{asset('storage/members/28 Puspa K.C. Bhandari.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>पुष्पा के.सी. (भण्डारी)</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9846034851</td>
					</tr>

					<tr>
					<th scope="row">२९</th>
					<td><img src="{{asset('storage/members/29 Prithvi Subba Gurung.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय मुख्यमन्त्री</td>
					<td>पृथ्वी सुव्वा गुरुङ्ग</td>
					<td>लमजुङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9851104756</td>
					</tr>

					<tr>
					<th scope="row">३०</th>
					<td><img src="{{asset('storage/members/30 Prakash Chandra Dawadi.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>प्रकाश चन्द्र दवाडी</td>
					<td>गोरखा</td>
					<td>नेपाली काँग्रेस</td>
					<td class="xl74" style="border-top: none; border-left: none;">9851048397</td>
					</tr>

					<tr>
					<th scope="row">३१</th>
					<td><img src="{{asset('storage/members/31 Prabha Koirala.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>प्रभा कोइराला</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856085111</td>
					</tr>

					<tr>
					<th scope="row">३२</th>
					<td><img src="{{asset('storage/members/32 Bindu Kumar Thapa.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>विन्दु कुमार थापा</td>
					<td class="xl75" style="border-top: none; border-left: none;" align="left">कास्की</td>
					<td>नेपाली काँग्रेस</td>
					<td class="xl76" style="border-top: none; border-left: none;" align="right">9856024848</td>
					</tr>

					<tr>
					<th scope="row">३३</th>
					<td><img src="{{asset('storage/members/33 Bhagawat Prasad Malla.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>भगवत प्रकाश मल्ल</td>
					<td>स्याङ्गजा</td>
					<td>नेपाली काँग्रेस</td>
					<td>9856028110</td>
					</tr>

					<tr>
					<th scope="row">३४</th>
					<td><img src="{{asset('storage/members/34 Manibhadra Sharma.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>मणि भद्र शर्मा&nbsp;</td>
					<td>बाग्लुङ्ग</td>
					<td>नेपाली काँग्रेस</td>
					<td>9857621502</td>
					</tr>

					<tr>
					<th scope="row">३५</th>
					<td><img src="{{asset('storage/members/35 Madhu Maya Adhikari Gurung.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>मधुमाया अधिकारी गुरुङ्ग</td>
					<td>लमजुङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9846191763</td>
					</tr>

					<tr>
					<th scope="row">३६</th>
					<td><img src="{{asset('storage/members/36 Man Kumari Gurung.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>मन कुमारी गुरुङ्ग</td>
					<td>गोरखा</td>
					<td>नेपाली काँग्रेस</td>
					<td>9851069344</td>
					</tr>

					<tr>
					<th scope="row">३७</th>
					<td><img src="{{asset('storage/members/37 Man Bahadur Gurung.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>मन बहादुर गुरुङ्ग</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856021424</td>
					</tr>

					<tr>
					<th scope="row">३८</th>
					<td><img src="{{asset('storage/members/38 Mahendra Bahadur Thakali.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>महेन्द्र बहादुर थकाली</td>
					<td>मुस्ताङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857650001</td>
					</tr>

					<tr>
					<th scope="row">३९</th>
					<td><img src="{{asset('storage/members/39 Maya Nath Adhikari.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>मायानाथ अधिकारी</td>
					<td>लमजुङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856045966</td>
					</tr>

					<tr>
					<th scope="row">४०</th>
					<td><img src="{{asset('storage/members/40 Mitra Kumari Gurung Subedi.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>मित्र कुमारी गुरुङ्ग सुबेदी</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856018822</td>
					</tr>

					<tr>
					<th scope="row">४१</th>
					<td><img src="{{asset('storage/members/41 Min Prasad Gurung.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>मिन प्रसाद गुरुङ्ग</td>
					<td>स्याङ्गजा</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856027636</td>
					</tr>

					<tr>
					<th scope="row">४२</th>
					<td><img src="{{asset('storage/members/माननीय मीना गुरुङ (1).jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>मिना गुरुङ्ग</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9846034867</td>
					</tr>

					<tr>
					<th scope="row">४३</th>
					<td><img src="{{asset('storage/members/43 Mekhlal Shrestha.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>मेख लाल श्रेष्ठ</td>
					<td>स्याङ्गजा</td>
					<td>नेपाली काँग्रेस</td>
					<td>9851151207</td>
					</tr>

					<tr>
					<th scope="row">४४</th>
					<td><img src="{{asset('storage/members/44 Mohan Prasad Regmi.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय सभापति</td>
					<td>मोहन प्रसाद रेग्मी</td>
					<td>स्याङ्गजा</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856054444</td>
					</tr>

					<tr>
					<th scope="row">४५</th>
					<td><img src="{{asset('storage/members/माननीय राजिव पहारी.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>राजिव पहारी</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856023022</td>
					</tr>

					<tr>
					<th scope="row">४६</th>
					<td><img src="{{asset('storage/members/46 Ram Bdr Gurung.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>राम बहादुर गुरुङ्ग</td>
					<td>तनहुँ</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9851070031</td>
					</tr>

					<tr>
					<th scope="row">४७</th>
					<td><img src="{{asset('storage/members/माननीय रामशरण वस्नेत.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय मन्त्री</td>
					<td>रामशरण बस्नेत</td>
					<td>गोरखा</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856042701</td>
					</tr>

					<tr>
					<th scope="row">४८</th>
					<td><img src="{{asset('storage/members/48 Ramji Prasad Baral Jiwan.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>रामजी प्रसाद बराल जीवन</td>
					<td>कास्की</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856020668</td>
					</tr>

					<tr>
					<th scope="row">४९</th>
					<td><img src="{{asset('storage/members/49 Roshan Bdr Gaha Magar.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>रोसन बहादुर गाहा थापा</td>
					<td>नवलपरासी</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857040785</td>
					</tr>

					<tr>
					<th scope="row">५०</th>
					<td><img src="{{asset('storage/members/50 Laxmi Sunar.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>लक्ष्मी सुनार</td>
					<td>नवलपरासी</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9847413917</td>
					</tr>

					<tr>
					<th scope="row">५१</th>
					<td><img src="{{asset('storage/members/51 Lalitkala Gurung.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>ललीत कला गुरुङ्ग</td>
					<td>पर्वत</td>
					<td>नेपाली काँग्रेस</td>
					<td>9851111831</td>
					</tr>

					<tr>
					<th scope="row">५२</th>
					<td><img src="{{asset('storage/members/52 Lekh Bahadur Thapa Magar.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय मन्त्री</td>
					<td>लेख बहादुर थापा मगर</td>
					<td>गोरखा</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856070334</td>
					</tr>

					<tr>
					<th scope="row">५३</th>
					<td><img src="{{asset('storage/members/53 Bikash Lamsal.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय मन्त्री</td>
					<td>विकास लम्साल</td>
					<td>पर्वत</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857630061</td>
					</tr>

					<tr>
					<th scope="row">५४</th>
					<td><img src="{{asset('storage/members/54 Binod K.C.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>विनोद के.सी.</td>
					<td>म्याग्दी</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857624142</td>
					</tr>

					<tr>
					<th scope="row">५५</th>
					<td><img src="{{asset('storage/members/55 Bishnu Prasad Lamichhane.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>विष्णु प्रसाद लामिछाने</td>
					<td>नवलपरासी</td>
					<td>नेपाली काँग्रेस</td>
					<td>9857045942</td>
					</tr>

					<tr>
					<th scope="row">५६</th>
					<td><img src="{{asset('storage/members/56 Sarita Gurung.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>सरिता गुरुङ्ग</td>
					<td>तनहुँ</td>
					<td>नेपाली काँग्रेस</td>
					<td>9856028124</td>
					</tr>

					<tr>
					<th scope="row">५७</th>
					<td><img src="{{asset('storage/members/57 Sabitra Rana.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>साबित्रा राना</td>
					<td>बाग्लुङ्ग</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9857670500</td>
					</tr>

					<tr>
					<th scope="row">५८</th>
					<td><img src="{{asset('storage/members/माननीय हरि बहादूर चुमान.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय मन्त्री</td>
					<td>हरि बहादुर चुमान</td>
					<td>तनहुँ</td>
					<td>नेपाल कम्युनिष्ट पार्टी</td>
					<td>9856027621</td>
					</tr>

					<tr>
					<th scope="row">५९</th>
					<td><img src="{{asset('storage/members/59 Hari Sharan Acharya.jpg')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>हरि शरण आचार्य</td>
					<td>गोरखा</td>
					<td>नयाँ शक्ति पार्टी नेपाल</td>
					<td>9851006104</td>
					</tr>

					<tr>
					<th scope="row">६०</th>
					<td><img src="{{asset('storage/members/60 Rajib Gurung.JPG')}}" class="table-image" alt="Sheep"></td>
					<td>माननीय</td>
					<td>राजिव गुरुङ</td>
					<td>मनाङ</td>
					<td>स्वतन्त्र</td>
					<td>9856019729</td>
					</tr>

				  </tbody>
				</table>
			</div>
  			
  		</div>




  
@endsection
@section('scripts')
@endsection