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
  		<h2><u>प्रदेश-सभा सचिवालयको दरवन्दी तेरिज
	    <br>गण्डकी प्रदेश</u></h2>
	    <h6 class="pull-right">अनसुची ९.२</h6>

  		<div class="table-responsive">
		<table class="table table-striped table-bordered ">
		  <thead style="background-color:#093d63 ">
		    <tr style="color: white">
		      <th scope="col">क्र.स.</th>
		      <th scope="col">पद</th>
		      <th scope="col">श्रेणी, तह</th>
		      <th scope="col">सेवा</th>
		      <th scope="col">समुह</th>
		      <th scope="col">जम्मा दरवन्दी</th>
		      <th scope="col">कैफियत</th>
		    </tr>
		  </thead>
		  <tbody>
		    	<tr>
				<td>१</td>
				<td>सचिवालय सचिव</td>
				<td>रा. प. प्रथम</td>
				<td>संसद</td>
				<td>&nbsp;</td>
				<td>१</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>२</td>
				<td>उप सचिव</td>
				<td>रा. प. द्वितिय</td>
				<td>प्रशासन</td>
				<td>सामान्य प्रशासन</td>
				<td>२</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>३</td>
				<td>उपसचिव</td>
				<td>रा. प. द्वितिय</td>
				<td>कानुन</td>
				<td>&nbsp;</td>
				<td>१</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>४</td>
				<td>शाखा अधिकृत</td>
				<td>रा. प. तृतीय</td>
				<td>प्रशासन</td>
				<td>सामान्य प्रशासन</td>
				<td>४</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>५</td>
				<td>लेखा अधिकृत</td>
				<td >रा. प. तृतीय</td>
				<td>प्रशासन</td>
				<td>लेखा</td>
				<td>१</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>६</td>
				<td>कानुन अधिकृत</td>
				<td >रा. प. तृतीय</td>
				<td>न्याय</td>
				<td>कानुन</td>
				<td>१</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>७</td>
				<td>कम्प्युटर अधिकृत</td>
				<td>रा. प. तृतीय</td>
				<td>विविध</td>
				<td>&nbsp;</td>
				<td>१</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>८</td>
				<td>नायव सुब्बा</td>
				<td>रा.प.अनं. प्रथम</td>
				<td>प्रशासन</td>
				<td>सामान्य प्रशासन</td>
				<td>७</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>९</td>
				<td>कम्प्युटर अपरेटर</td>
				<td>रा.प.अनं. प्रथम</td>
				<td>विविध</td>
				<td>&nbsp;</td>
				<td>१</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>१०</td>
				<td>माइक संचालक</td>
				<td>रा.प.अनं. प्रथम</td>
				<td>विविध</td>
				<td>&nbsp;</td>
				<td>२</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>११</td>
				<td>इलेक्ट्रिसियन</td>
				<td >रा.प.अनं. प्रथम</td>
				<td>इन्जि.</td>
				<td>इले.</td>
				<td>१</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>१२</td>
				<td>सहलेखापाल</td>
				<td>रा.प.अनं. द्वितिय</td>
				<td>प्रशासन</td>
				<td>लेखा</td>
				<td>१</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>१३</td>
				<td>मर्यादापालक प्र.नि.</td>
				<td>&nbsp;</td>
				<td>प्रहरी</td>
				<td>&nbsp;</td>
				<td>१</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>१४</td>
				<td>मर्यादापालक</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>६</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>१५</td>
				<td>हलुका सवारी चालक</td>
				<td>श्रेणीविहीन</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>३</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td>१६</td>
				<td>कार्यालय सहयोगी</td>
				<td>श्रेणीविहीन</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>३</td>
				<td>&nbsp;</td>
				</tr>

				<tr style="border:none">
				<td style="border:none"></td>
				<td style="border:none"></td>
				<td style="border:none">जम्मा</td>
				<td style="border:none"></td>
				<td style="border:none"></td>
				<td style="border:none">३६</td>
				<td style="border:none">&nbsp;</td>
				</tr>

		  </tbody>
		</table>
	</div>
  		
  	</div>



@endsection
@section('scripts')
@endsection