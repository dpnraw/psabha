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
  	<h1>प्रदेश सभा सचिवालय, गण्डकी प्रदेशमा कार्यरत कर्मचारीहरुको विवरण </h1>
  	<hr>
  	<h3>आ.ब..२०७७।७८</h3>
  	<hr>

  	 <h6 style="text-align: left">स्थायी कर्मचारीहरु</h6>
  	 <div class="table-responsive">
		<table class="table table-striped table-bordered ">
		  <thead style="background-color:#093d63 ">
		    <tr style="color: white">
		      <th scope="col">सि.नं.</th>
		      <th scope="col">फोटो</th>
		      <th scope="col">पद</th>
		      <th scope="col">कर्मचारीको नाम, थर</th>
		      <th scope="col">मोवाइल</th>
		      <th scope="col">इमेल ठेगाना</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		     <td>१</td>
		      <td>
			      <img src="{{asset('storage/staffs/Secretary.jpg')}}" class="table-image" alt="Sheep">
		      </td>
		      <td>सचिव</td>
		      <td>हरिराज पोखरेल </td>
		      <td>9856011841</td>
		      <td></td>
		    </tr>

		    <tr>
		     <td>२</td>
		      <td>
			      <img src="{{asset('storage/staffs/Rajendra Neupane Sir.jpg')}}" class="table-image" alt="Sheep">
		      </td>
		      <td>उपसचिव (कानुन) </td>
		      <td>राजेन्द्र न्यौपाने</td>
		      <td>9856011842</td>
		      <td>rajendra4587@yahoo.com</td>
		    </tr>

		    <!-- <tr>
				<td>२</td>
				<td><img src="{{asset('storage/staffs/Jitendra Jang KC.jpg')}}" class="table-image"></td>
				<td>अधिकृत आठौं</td>
				<td>श्री जितेन्द्र जंग के.सी.</td>
				<td>9846043571</td>
				<td>jungkcj@gmail.com&nbsp;</td>
				</tr>

		     <tr> -->
				<td>३</td>
				<td><img src="{{asset('storage/staffs/Jitendra Jang KC.jpg')}}" class="table-image"></td>
				<td>अधिकृत आठौं</td>
				<td>श्री जितेन्द्र जंग के.सी.</td>
				<td>9846043571</td>
				<td>jungkcj@gmail.com&nbsp;</td>
				</tr>

				<tr>
				<td>४</td>
				<td><img src="{{asset('storage/staffs/Rabindra Ghimire NEW.jpg')}}" class="table-image"></td>
				<td>कम्प्युटर अधिकृत(आठौं)</td>
				<td>श्री रबिन्द्र घिमिरे&nbsp;</td>
				<td>9846147674</td>
				<td>rabin0011@gmail.com</td>
				</tr>
				<tr>
				<td>५</td>
				<td><img src="{{asset('storage/staffs/श्रवण कुमारी श्रेष्ठ.jpg')}}" class="table-image"></td>
				<td>अधिकृत आठौं</td>
				<td>श्री श्रवण कुमारी श्रेष्ठ</td>
				<td>9856026030</td>
				<td>shrawanshrestha@gmail.com</td>
				</tr>

				<tr>
				<td>६</td>
				<td><img src="{{asset('storage/staffs/Mahendra Kumar Rai.jpg')}}" class="table-image"></td>
				<td>लेखा अधिकृत</td>
				<td>श्री महेन्द्र कुमार राई</td>
				<td>9849375851</td>
				<td>raimahendra1990@gmail.com</td>
				</tr>

				<tr>
				<td>७</td>
				<td><img src="{{asset('storage/staffs/Srijana Acharya.jpg')}}" class="table-image"></td>
				<td>कानुन अधिकृत</td>
				<td>श्री सिर्जना आचार्य</td>
				<td>9847651370</td>
				<td>sirjanaacharya1414@yahoo.com</td>
				</tr>

				<tr>
				<td>८</td>
				<td><img src="{{asset('storage/staffs/PramananadaSirID.jpg')}}" class="table-image"></td>
				<td>अधिकृत छैठौं&nbsp;</td>
				<td>श्री प्रमानन्द लम्साल</td>
				<td>9846027824</td>
				<td>pramananda211@gmail.com</td>
				</tr>

				<tr>
				<td>९</td>
				<td><img src="{{asset('storage/staffs/Kamala Paudel.jpg')}}" class="table-image"></td>
				<td>अधिकृत छैठौं&nbsp;</td>
				<td>श्री कमला पौडेल</td>
				<td>9846102258</td>
				<td>kamala7poudel@gmail.com</td>
				</tr>

				<tr>
				<td>१०</td>
				<td><img src="{{asset('storage/staffs/Tanka Prasad Sharma Wagle.jpg')}}" class="table-image"></td>
				<td>अधिकृत छैठौं&nbsp;</td>
				<td>श्री टंक प्रसाद शर्मा वाग्ले</td>
				<td>9846087255</td>
				<td>tankawagle28@gmail.com</td>
				</tr>

				<tr>
				<td>११</td>
				<td><img src="{{asset('storage/staffs/Toyanath Timilsina.jpg')}}" class="table-image"></td>
				<td>अधिकृत छैठौं&nbsp;</td>
				<td>श्री तोयानाथ तिमिल्सिना</td>
				<td>9846153054</td>
				<td>anantasharma66@gmail.com</td>
				</tr>

				<tr>
				<td>१२</td>
				<td><img src="{{asset('storage/staffs/Tikaram Acharya1.jpg')}}" class="table-image"></td>
				<td>अधिकृत छैठौं&nbsp;</td>
				<td>श्री टिकाराम आचार्य</td>
				<td>9856035753</td>
				<td>tsacharya2035@gmail.com</td>
				</tr>

				<tr>
				<td>१३</td>
				<td><img src="{{asset('storage/staffs/Chandrakala Basnet.jpg')}}" class="table-image"></td>
				<td>कम्प्यूटर अधिकृत(छैठौं)&nbsp;</td>
				<td>श्री चन्द्रकला बस्नेत</td>
				<td>9846436214</td>
				<td>chandrakalabasnet@gmail.com</td>
				</tr>

				<tr>
				<td>१४</td>
				<td><img src="{{asset('storage/staffs/Jhanakraj Adhikari.jpg')}}" class="table-image"></td>
				<td>अधिकृत छैठौं&nbsp;</td>
				<td>श्री झनकराज अधिकारी</td>
				<td>9846530151</td>
				<td>jhanakrajadhikari@gmail.com</td>
				</tr>

				

				<tr>
				<td>१५</td>
				<td><img src="{{asset('storage/staffs/Surya Bdr Baniya.jpg')}}" class="table-image"></td>
				<td>ना.सु.</td>
				<td>श्री सूर्य बहादुर बानियाँ</td>
				<td>9856015452</td>
				<td>suryabahadurbaniya@gmail.com</td>
				</tr>

				<tr>
				<td>१६</td>
				<td><img src="{{asset('storage/staffs/TulaiRam Acharya.jpg')}}" class="table-image"></td>
				<td>सह-लेखापाल</td>
				<td>श्री तुलसीराम आचार्य</td>
				<td>9857676967</td>
				<td>ldptacharya777@gmail.com</td>
				</tr>

				
				
		   

		  </tbody>
		</table>
	</div>

	<hr>

	 <h6 style="text-align: left">करारका कर्मचारीहरु</h6>
  	 <div class="table-responsive">
		<table class="table table-striped table-bordered ">
		  <thead style="background-color:#093d63 ">
		    <tr style="color: white">
		      <th scope="col">सि.नं.</th>
		      <th scope="col">फोटो</th>
		      <th scope="col">पद</th>
		      <th scope="col">कर्मचारीको नाम, थर</th>
		      <th scope="col">मोवाइल</th>
		      <th scope="col">इमेल ठेगाना</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>१</td>
		      <td>
			      <img src="{{asset('storage/staffs/Gita Dawadi.jpg')}}" class="table-image" alt="Sheep">
		      </td>
		      <td>माइक संचालक </td>
		      <td>श्री गीता दवाडी</td>
		      <td>9846042840</td>
		      <td>gitadawadi6@gmail.com  </td>
		    </tr>

			<tr>
				<td>२</td>
				<td><img src="{{asset('storage/staffs/शुक्र बहादुर थिङ तामाङ.jpg')}}" class="table-image"></td>
				<td>ह.स.चा. (करार)</td>
				<td>श्री सुक बहादुर थिङ तामाङ</td>
				<td>9825172275</td>
				<td></td>
				</tr>
				<tr>
				<td>३</td>
				<td><img src="{{asset('storage/staffs/Gunda Shrestha (Min).jpg')}}" class="table-image"></td>
				<td>ह.स.चा</td>
				<td>गुण्डा श्रेष्ठ (मीन)</td>
				<td>9856022730</td>
				<td>mingunda007@gmail.com</td>
				</tr>

				<tr>
				<td>४</td>
				<td><img src="{{asset('storage/staffs/Surya Bahadur KC.jpg')}}" class="table-image"></td>
				<td>का.स. (करार)</td>
				<td>श्री सूर्य बहादुर के. सी.</td>
				<td>9846463090</td>
				<td></td>
				</tr>

				<tr>
				<td>५</td>
				<td><img src="{{asset('storage/staffs/Sunita Muktan Rai.jpg')}}" class="table-image
					"></td>
				<td>का.स. (करार)</td>
				<td>श्री सुनिता मुक्तान राई</td>
				<td>9813718029</td>
				<td></td>
				</tr>

				<tr>
				<td>६</td>
				<td><img src="{{asset('storage/staffs/Ranjana Wagle.jpg')}}" class="table-image"></td>
				<td>का.स. (करार)</td>
				<td>श्री रञ्जना वाग्ले&nbsp;</td>
				<td>9846088530</td>
				<td></td>
				</tr>

				<tr>
				<td>७</td>
				<td><img src="{{asset('storage/staffs/BisKumar Rokka.jpg')}}" class="table-image"></td>
				<td>ईलेक्ट्रिसियन</td>
				<td>श्री विस कुमार रोका मगर</td>
				<td>9869840820</td>
				<td></td>
				</tr>

		  </tbody>
		</table>
	</div>

<hr>
	 <h6 style="text-align: left">मर्यादापालकहरु</h6>
  	 <div class="table-responsive">
		<table class="table table-striped table-bordered ">
		  <thead style="background-color:#093d63 ">
		    <tr style="color: white">
		      <th scope="col">सि.नं.</th>
		      <th scope="col">फोटो</th>
		      <th scope="col">दर्जा</th>
		      <th scope="col">नाम, थर</th>
		      <th scope="col">मोवाइल</th>
		      <th scope="col">दरबन्दी </th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
			<td>१</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी निरीक्षक&nbsp;</td>
			<td>विनोद सुबेदी</td>
			<td>९८५७६५०५७५</td>
			<td>जिल्ला प्रहरी कार्यालय मुस्ताङ&nbsp;</td>
			</tr>

			<tr>
			<td>२</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी नायव निरीक्षक&nbsp;</td>
			<td>महेन्द्र बहादुर खत्री</td>
			<td>९८६७०००२५२</td>
			<td>जि.प्र.का. लमजुङ&nbsp;</td>
			</tr>

			<tr>
			<td>३</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी सहायक निरीक्षक&nbsp;</td>
			<td>श्याम बहादुर रोका&nbsp;</td>
			<td>९८४१०२८४३८</td>
			<td>गण्डकी प्रदेश शसस्त्र प्रहरी गण मुख्यालय कास्की&nbsp;</td>
			</tr>

			<tr>
			<td>४</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी सहायक निरीक्षक&nbsp;</td>
			<td>धन सिंह गुरुङ</td>
			<td>९८४६४६९९५२</td>
			<td>प्र.चौ.केबरे स्याङजा&nbsp;</td>
			</tr>

			<tr>
			<td>५</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी हवन्दार&nbsp;</td>
			<td>डोर बहादुर खाती</td>
			<td>९८४८२१२२४६</td>
			<td>जि.प्र.का.कास्की&nbsp;</td>
			</tr>

			<tr>
			<td>६</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी हवन्दार&nbsp;</td>
			<td>भोजराज रास्कोटी</td>
			<td>९८४८४८२८३०</td>
			<td>प्र.चौ.सुन्दरीडाँडा कास्की&nbsp;</td>
			</tr>

			<tr>
			<td>७</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी हवन्दार&nbsp;</td>
			<td>राजु जि.सी.</td>
			<td>९८६६३४८१००</td>
			<td>व.प्र.का.बगर कास्की&nbsp;</td>
			</tr>

			<tr>
			<td>८</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी हवन्दार&nbsp;</td>
			<td>जगत बहादुर पोख्रेल</td>
			<td>९८४६२१३५०४</td>
			<td>ईलाका प्रहरी कार्यालय बेलचौतारा तनहुँ</td>
			</tr>
			<tr>
			<td>९</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी हवन्दार&nbsp;</td>
			<td>चन्द्रमाया बस्नेत</td>
			<td>९८४६१०५११२</td>
			<td>प्र.जि.अ.नि.गार्ड तनहुँ</td>
			</tr>

			<tr>
			<td>१०</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>बिर सिंह बि.क.</td>
			<td>९८६७१६२६०१</td>
			<td>गण्डकी प्रदेश शसस्त्र प्रहरी गण मुख्यालय कास्की&nbsp;</td>
			</tr>

			<tr>
			<td>११</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>विमला पुन मगर</td>
			<td>९८४७०७१३४२</td>
			<td>व.प्र.का.बगर कास्की</td>
			</tr>

			<tr>
			<td>१२</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>साबित्रा बस्ताकोटी</td>
			<td>९८०६१५८७०९</td>
			<td>ई.प्र.का.हंशापुर कास्की</td>
			</tr>

			<tr>
			<td>१३</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>बिजय बि.क.</td>
			<td>९८४६७४९९९४</td>
			<td>गण्डकी प्रदेश शसस्त्र प्रहरी गण मुख्यालय कास्की&nbsp;</td>
			</tr>

			<tr>
			<td>१४</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>सरन कुमारी तामाङ</td>
			<td>९८४९१०५२३०</td>
			<td>ई.प्र.का.गगनगौडा कास्की</td>
			</tr>

			<tr>
			<td>१५</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>अर्जुन रेग्मी</td>
			<td>९८४६१८६०१६</td>
			<td>अ.स.प्र.गुल्म गण्डकी</td>
			</tr>

			<tr>
			<td>१६</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>युवराज आले मगर</td>
			<td>९८४५६३७३९२</td>
			<td>प्र.चौ.सराङकोट कास्की</td>
			</tr>

			<tr>
			<td>१७</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>तुल्सा पौडेल</td>
			<td>९८४६७०८९७६</td>
			<td>गण्डकी प्रदेश प्रहरी कार्यालय पोखरा कास्की&nbsp;</td>
			</tr>

			<tr>
			<td>१८</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>मिलन कुँवर&nbsp;</td>
			<td>९८६०२०४२६१</td>
			<td>गण्डकी प्रदेश शसस्त्र प्रहरी गण मुख्यालय कास्की&nbsp;</td>
			</tr>

			<tr>
			<td>१९</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>विजय लामिछाने</td>
			<td>९८४०३०१४३९</td>
			<td>गण्डकी प्रदेश शसस्त्र प्रहरी गण मुख्यालय कास्की&nbsp;</td>
			</tr>

			<tr>
			<td>२०</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>युवराज गुरुङ्</td>
			<td>९८४५८८२२९९</td>
			<td>ई.प्र.का.भोटेवडार लमजुङ&nbsp;</td>
			</tr>

			<tr>
			<td>२१</td>
			<td><img src="{{asset('storage/staffs/profile.jpg')}}" class="table-image"></td>
			<td>प्रहरी जवान&nbsp;</td>
			<td>बसुन्धरी शर्मा&nbsp;</td>
			<td>९८४८२५५१५६</td>
			<td>गण्डकी प्रदेश शसस्त्र प्रहरी गण मुख्यालय कास्की&nbsp;</td>
			</tr>
		    

		  </tbody>
		</table>
	</div>



		

		
  </div>



  	
  
@endsection
@section('scripts')
@endsection