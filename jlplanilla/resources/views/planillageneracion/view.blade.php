@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('planillageneracion?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('planillageneracion/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('planillageneracion/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('planillageneracion/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Planilla Id</td>
						<td>{{ $row->planilla_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id Trabajador</td>
						<td>{{ $row->id_trabajador}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Periodo Id</td>
						<td>{{ $row->periodo_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0101</td>
						<td>{{ $row->0101}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0102</td>
						<td>{{ $row->0102}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0103</td>
						<td>{{ $row->0103}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0104</td>
						<td>{{ $row->0104}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0105</td>
						<td>{{ $row->0105}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0106</td>
						<td>{{ $row->0106}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0107</td>
						<td>{{ $row->0107}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0108</td>
						<td>{{ $row->0108}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0109</td>
						<td>{{ $row->0109}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0110</td>
						<td>{{ $row->0110}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0111</td>
						<td>{{ $row->0111}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0112</td>
						<td>{{ $row->0112}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0113</td>
						<td>{{ $row->0113}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0114</td>
						<td>{{ $row->0114}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0115</td>
						<td>{{ $row->0115}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0116</td>
						<td>{{ $row->0116}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0117</td>
						<td>{{ $row->0117}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0118</td>
						<td>{{ $row->0118}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0119</td>
						<td>{{ $row->0119}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0120</td>
						<td>{{ $row->0120}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0121</td>
						<td>{{ $row->0121}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0122</td>
						<td>{{ $row->0122}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0123</td>
						<td>{{ $row->0123}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0124</td>
						<td>{{ $row->0124}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0125</td>
						<td>{{ $row->0125}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0126</td>
						<td>{{ $row->0126}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0127</td>
						<td>{{ $row->0127}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0201</td>
						<td>{{ $row->0201}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0202</td>
						<td>{{ $row->0202}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0203</td>
						<td>{{ $row->0203}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0204</td>
						<td>{{ $row->0204}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0205</td>
						<td>{{ $row->0205}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0206</td>
						<td>{{ $row->0206}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0207</td>
						<td>{{ $row->0207}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0208</td>
						<td>{{ $row->0208}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0209</td>
						<td>{{ $row->0209}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0210</td>
						<td>{{ $row->0210}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0211</td>
						<td>{{ $row->0211}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0212</td>
						<td>{{ $row->0212}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0213</td>
						<td>{{ $row->0213}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0214</td>
						<td>{{ $row->0214}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0301</td>
						<td>{{ $row->0301}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0302</td>
						<td>{{ $row->0302}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0303</td>
						<td>{{ $row->0303}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0304</td>
						<td>{{ $row->0304}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0305</td>
						<td>{{ $row->0305}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0306</td>
						<td>{{ $row->0306}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0307</td>
						<td>{{ $row->0307}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0308</td>
						<td>{{ $row->0308}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0309</td>
						<td>{{ $row->0309}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0310</td>
						<td>{{ $row->0310}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0311</td>
						<td>{{ $row->0311}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0312</td>
						<td>{{ $row->0312}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0313</td>
						<td>{{ $row->0313}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0401</td>
						<td>{{ $row->0401}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0402</td>
						<td>{{ $row->0402}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0403</td>
						<td>{{ $row->0403}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0404</td>
						<td>{{ $row->0404}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0405</td>
						<td>{{ $row->0405}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0406</td>
						<td>{{ $row->0406}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0407</td>
						<td>{{ $row->0407}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0501</td>
						<td>{{ $row->0501}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0502</td>
						<td>{{ $row->0502}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0503</td>
						<td>{{ $row->0503}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0504</td>
						<td>{{ $row->0504}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0505</td>
						<td>{{ $row->0505}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0506</td>
						<td>{{ $row->0506}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0507</td>
						<td>{{ $row->0507}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0901</td>
						<td>{{ $row->0901}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0902</td>
						<td>{{ $row->0902}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0903</td>
						<td>{{ $row->0903}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0904</td>
						<td>{{ $row->0904}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0905</td>
						<td>{{ $row->0905}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0906</td>
						<td>{{ $row->0906}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0907</td>
						<td>{{ $row->0907}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0908</td>
						<td>{{ $row->0908}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0909</td>
						<td>{{ $row->0909}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0910</td>
						<td>{{ $row->0910}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0911</td>
						<td>{{ $row->0911}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0912</td>
						<td>{{ $row->0912}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0913</td>
						<td>{{ $row->0913}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0914</td>
						<td>{{ $row->0914}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0915</td>
						<td>{{ $row->0915}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0916</td>
						<td>{{ $row->0916}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0917</td>
						<td>{{ $row->0917}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0918</td>
						<td>{{ $row->0918}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0919</td>
						<td>{{ $row->0919}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0920</td>
						<td>{{ $row->0920}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0921</td>
						<td>{{ $row->0921}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0922</td>
						<td>{{ $row->0922}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0923</td>
						<td>{{ $row->0923}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0924</td>
						<td>{{ $row->0924}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0925</td>
						<td>{{ $row->0925}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1001</td>
						<td>{{ $row->1001}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1002</td>
						<td>{{ $row->1002}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1003</td>
						<td>{{ $row->1003}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1004</td>
						<td>{{ $row->1004}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1005</td>
						<td>{{ $row->1005}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1006</td>
						<td>{{ $row->1006}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1007</td>
						<td>{{ $row->1007}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1008</td>
						<td>{{ $row->1008}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1009</td>
						<td>{{ $row->1009}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1010</td>
						<td>{{ $row->1010}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1011</td>
						<td>{{ $row->1011}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1012</td>
						<td>{{ $row->1012}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1013</td>
						<td>{{ $row->1013}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1014</td>
						<td>{{ $row->1014}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1015</td>
						<td>{{ $row->1015}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1016</td>
						<td>{{ $row->1016}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1017</td>
						<td>{{ $row->1017}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1018</td>
						<td>{{ $row->1018}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1019</td>
						<td>{{ $row->1019}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>1020</td>
						<td>{{ $row->1020}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2001</td>
						<td>{{ $row->2001}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2002</td>
						<td>{{ $row->2002}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2003</td>
						<td>{{ $row->2003}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2004</td>
						<td>{{ $row->2004}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2005</td>
						<td>{{ $row->2005}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2006</td>
						<td>{{ $row->2006}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2007</td>
						<td>{{ $row->2007}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2008</td>
						<td>{{ $row->2008}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2009</td>
						<td>{{ $row->2009}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2010</td>
						<td>{{ $row->2010}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2011</td>
						<td>{{ $row->2011}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2012</td>
						<td>{{ $row->2012}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2013</td>
						<td>{{ $row->2013}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2014</td>
						<td>{{ $row->2014}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2015</td>
						<td>{{ $row->2015}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2016</td>
						<td>{{ $row->2016}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2017</td>
						<td>{{ $row->2017}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2018</td>
						<td>{{ $row->2018}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2019</td>
						<td>{{ $row->2019}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2020</td>
						<td>{{ $row->2020}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2021</td>
						<td>{{ $row->2021}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2022</td>
						<td>{{ $row->2022}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2023</td>
						<td>{{ $row->2023}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2024</td>
						<td>{{ $row->2024}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2025</td>
						<td>{{ $row->2025}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2026</td>
						<td>{{ $row->2026}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2027</td>
						<td>{{ $row->2027}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2028</td>
						<td>{{ $row->2028}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2029</td>
						<td>{{ $row->2029}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2030</td>
						<td>{{ $row->2030}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2031</td>
						<td>{{ $row->2031}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2032</td>
						<td>{{ $row->2032}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2033</td>
						<td>{{ $row->2033}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2034</td>
						<td>{{ $row->2034}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2035</td>
						<td>{{ $row->2035}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2036</td>
						<td>{{ $row->2036}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2037</td>
						<td>{{ $row->2037}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2038</td>
						<td>{{ $row->2038}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2039</td>
						<td>{{ $row->2039}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2040</td>
						<td>{{ $row->2040}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>2041</td>
						<td>{{ $row->2041}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0601</td>
						<td>{{ $row->0601}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0602</td>
						<td>{{ $row->0602}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0603</td>
						<td>{{ $row->0603}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0604</td>
						<td>{{ $row->0604}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0605</td>
						<td>{{ $row->0605}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0606</td>
						<td>{{ $row->0606}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0607</td>
						<td>{{ $row->0607}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0608</td>
						<td>{{ $row->0608}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0609</td>
						<td>{{ $row->0609}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0610</td>
						<td>{{ $row->0610}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0611</td>
						<td>{{ $row->0611}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0612</td>
						<td>{{ $row->0612}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0613</td>
						<td>{{ $row->0613}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0701</td>
						<td>{{ $row->0701}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0702</td>
						<td>{{ $row->0702}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0703</td>
						<td>{{ $row->0703}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0704</td>
						<td>{{ $row->0704}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0705</td>
						<td>{{ $row->0705}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0706</td>
						<td>{{ $row->0706}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0707</td>
						<td>{{ $row->0707}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0801</td>
						<td>{{ $row->0801}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0802</td>
						<td>{{ $row->0802}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0803</td>
						<td>{{ $row->0803}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0804</td>
						<td>{{ $row->0804}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0805</td>
						<td>{{ $row->0805}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0806</td>
						<td>{{ $row->0806}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0807</td>
						<td>{{ $row->0807}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0808</td>
						<td>{{ $row->0808}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0809</td>
						<td>{{ $row->0809}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0810</td>
						<td>{{ $row->0810}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>0811</td>
						<td>{{ $row->0811}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dias Computables</td>
						<td>{{ $row->dias_computables}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Hn</td>
						<td>{{ $row->hn}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Importe Hn</td>
						<td>{{ $row->importe_hn}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Base Imponible</td>
						<td>{{ $row->base_imponible}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Incentivos</td>
						<td>{{ $row->incentivos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Total Ingresos</td>
						<td>{{ $row->total_ingresos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Afp</td>
						<td>{{ $row->afp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Bono</td>
						<td>{{ $row->bono}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Vacaciones</td>
						<td>{{ $row->vacaciones}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prestamos</td>
						<td>{{ $row->prestamos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Eps</td>
						<td>{{ $row->eps}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Total Descuentos</td>
						<td>{{ $row->total_descuentos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Neto Pagar</td>
						<td>{{ $row->neto_pagar}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Essalud</td>
						<td>{{ $row->essalud}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop