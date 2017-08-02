

		 {!! Form::open(array('url'=>'editable/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Editables</legend>
									
									  <div class="form-group  " >
										<label for="Planilla Id" class=" control-label col-md-4 text-left"> Planilla Id </label>
										<div class="col-md-7">
										  <input  type='text' name='planilla_id' id='planilla_id' value='{{ $row['planilla_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Id Trabajador" class=" control-label col-md-4 text-left"> Id Trabajador </label>
										<div class="col-md-7">
										  <input  type='text' name='id_trabajador' id='id_trabajador' value='{{ $row['id_trabajador'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Periodo Id" class=" control-label col-md-4 text-left"> Periodo Id </label>
										<div class="col-md-7">
										  <input  type='text' name='periodo_id' id='periodo_id' value='{{ $row['periodo_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0101" class=" control-label col-md-4 text-left"> 0101 </label>
										<div class="col-md-7">
										  <input  type='text' name='0101' id='0101' value='{{ $row['0101'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0102" class=" control-label col-md-4 text-left"> 0102 </label>
										<div class="col-md-7">
										  <input  type='text' name='0102' id='0102' value='{{ $row['0102'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0103" class=" control-label col-md-4 text-left"> 0103 </label>
										<div class="col-md-7">
										  <input  type='text' name='0103' id='0103' value='{{ $row['0103'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0104" class=" control-label col-md-4 text-left"> 0104 </label>
										<div class="col-md-7">
										  <input  type='text' name='0104' id='0104' value='{{ $row['0104'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0105" class=" control-label col-md-4 text-left"> 0105 </label>
										<div class="col-md-7">
										  <input  type='text' name='0105' id='0105' value='{{ $row['0105'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0106" class=" control-label col-md-4 text-left"> 0106 </label>
										<div class="col-md-7">
										  <input  type='text' name='0106' id='0106' value='{{ $row['0106'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0107" class=" control-label col-md-4 text-left"> 0107 </label>
										<div class="col-md-7">
										  <input  type='text' name='0107' id='0107' value='{{ $row['0107'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0108" class=" control-label col-md-4 text-left"> 0108 </label>
										<div class="col-md-7">
										  <input  type='text' name='0108' id='0108' value='{{ $row['0108'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0109" class=" control-label col-md-4 text-left"> 0109 </label>
										<div class="col-md-7">
										  <input  type='text' name='0109' id='0109' value='{{ $row['0109'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0110" class=" control-label col-md-4 text-left"> 0110 </label>
										<div class="col-md-7">
										  <input  type='text' name='0110' id='0110' value='{{ $row['0110'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0111" class=" control-label col-md-4 text-left"> 0111 </label>
										<div class="col-md-7">
										  <input  type='text' name='0111' id='0111' value='{{ $row['0111'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0112" class=" control-label col-md-4 text-left"> 0112 </label>
										<div class="col-md-7">
										  <input  type='text' name='0112' id='0112' value='{{ $row['0112'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0113" class=" control-label col-md-4 text-left"> 0113 </label>
										<div class="col-md-7">
										  <input  type='text' name='0113' id='0113' value='{{ $row['0113'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0114" class=" control-label col-md-4 text-left"> 0114 </label>
										<div class="col-md-7">
										  <input  type='text' name='0114' id='0114' value='{{ $row['0114'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0115" class=" control-label col-md-4 text-left"> 0115 </label>
										<div class="col-md-7">
										  <input  type='text' name='0115' id='0115' value='{{ $row['0115'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0116" class=" control-label col-md-4 text-left"> 0116 </label>
										<div class="col-md-7">
										  <input  type='text' name='0116' id='0116' value='{{ $row['0116'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0117" class=" control-label col-md-4 text-left"> 0117 </label>
										<div class="col-md-7">
										  <input  type='text' name='0117' id='0117' value='{{ $row['0117'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0118" class=" control-label col-md-4 text-left"> 0118 </label>
										<div class="col-md-7">
										  <input  type='text' name='0118' id='0118' value='{{ $row['0118'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0119" class=" control-label col-md-4 text-left"> 0119 </label>
										<div class="col-md-7">
										  <input  type='text' name='0119' id='0119' value='{{ $row['0119'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0120" class=" control-label col-md-4 text-left"> 0120 </label>
										<div class="col-md-7">
										  <input  type='text' name='0120' id='0120' value='{{ $row['0120'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0121" class=" control-label col-md-4 text-left"> 0121 </label>
										<div class="col-md-7">
										  <input  type='text' name='0121' id='0121' value='{{ $row['0121'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0122" class=" control-label col-md-4 text-left"> 0122 </label>
										<div class="col-md-7">
										  <input  type='text' name='0122' id='0122' value='{{ $row['0122'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0123" class=" control-label col-md-4 text-left"> 0123 </label>
										<div class="col-md-7">
										  <input  type='text' name='0123' id='0123' value='{{ $row['0123'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0124" class=" control-label col-md-4 text-left"> 0124 </label>
										<div class="col-md-7">
										  <input  type='text' name='0124' id='0124' value='{{ $row['0124'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0125" class=" control-label col-md-4 text-left"> 0125 </label>
										<div class="col-md-7">
										  <input  type='text' name='0125' id='0125' value='{{ $row['0125'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0126" class=" control-label col-md-4 text-left"> 0126 </label>
										<div class="col-md-7">
										  <input  type='text' name='0126' id='0126' value='{{ $row['0126'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0127" class=" control-label col-md-4 text-left"> 0127 </label>
										<div class="col-md-7">
										  <input  type='text' name='0127' id='0127' value='{{ $row['0127'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0201" class=" control-label col-md-4 text-left"> 0201 </label>
										<div class="col-md-7">
										  <input  type='text' name='0201' id='0201' value='{{ $row['0201'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0202" class=" control-label col-md-4 text-left"> 0202 </label>
										<div class="col-md-7">
										  <input  type='text' name='0202' id='0202' value='{{ $row['0202'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0203" class=" control-label col-md-4 text-left"> 0203 </label>
										<div class="col-md-7">
										  <input  type='text' name='0203' id='0203' value='{{ $row['0203'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0204" class=" control-label col-md-4 text-left"> 0204 </label>
										<div class="col-md-7">
										  <input  type='text' name='0204' id='0204' value='{{ $row['0204'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0205" class=" control-label col-md-4 text-left"> 0205 </label>
										<div class="col-md-7">
										  <input  type='text' name='0205' id='0205' value='{{ $row['0205'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0206" class=" control-label col-md-4 text-left"> 0206 </label>
										<div class="col-md-7">
										  <input  type='text' name='0206' id='0206' value='{{ $row['0206'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0207" class=" control-label col-md-4 text-left"> 0207 </label>
										<div class="col-md-7">
										  <input  type='text' name='0207' id='0207' value='{{ $row['0207'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0208" class=" control-label col-md-4 text-left"> 0208 </label>
										<div class="col-md-7">
										  <input  type='text' name='0208' id='0208' value='{{ $row['0208'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0209" class=" control-label col-md-4 text-left"> 0209 </label>
										<div class="col-md-7">
										  <input  type='text' name='0209' id='0209' value='{{ $row['0209'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0210" class=" control-label col-md-4 text-left"> 0210 </label>
										<div class="col-md-7">
										  <input  type='text' name='0210' id='0210' value='{{ $row['0210'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0211" class=" control-label col-md-4 text-left"> 0211 </label>
										<div class="col-md-7">
										  <input  type='text' name='0211' id='0211' value='{{ $row['0211'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0212" class=" control-label col-md-4 text-left"> 0212 </label>
										<div class="col-md-7">
										  <input  type='text' name='0212' id='0212' value='{{ $row['0212'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0213" class=" control-label col-md-4 text-left"> 0213 </label>
										<div class="col-md-7">
										  <input  type='text' name='0213' id='0213' value='{{ $row['0213'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0214" class=" control-label col-md-4 text-left"> 0214 </label>
										<div class="col-md-7">
										  <input  type='text' name='0214' id='0214' value='{{ $row['0214'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0301" class=" control-label col-md-4 text-left"> 0301 </label>
										<div class="col-md-7">
										  <input  type='text' name='0301' id='0301' value='{{ $row['0301'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0302" class=" control-label col-md-4 text-left"> 0302 </label>
										<div class="col-md-7">
										  <input  type='text' name='0302' id='0302' value='{{ $row['0302'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0303" class=" control-label col-md-4 text-left"> 0303 </label>
										<div class="col-md-7">
										  <input  type='text' name='0303' id='0303' value='{{ $row['0303'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0304" class=" control-label col-md-4 text-left"> 0304 </label>
										<div class="col-md-7">
										  <input  type='text' name='0304' id='0304' value='{{ $row['0304'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0305" class=" control-label col-md-4 text-left"> 0305 </label>
										<div class="col-md-7">
										  <input  type='text' name='0305' id='0305' value='{{ $row['0305'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0306" class=" control-label col-md-4 text-left"> 0306 </label>
										<div class="col-md-7">
										  <input  type='text' name='0306' id='0306' value='{{ $row['0306'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0307" class=" control-label col-md-4 text-left"> 0307 </label>
										<div class="col-md-7">
										  <input  type='text' name='0307' id='0307' value='{{ $row['0307'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0308" class=" control-label col-md-4 text-left"> 0308 </label>
										<div class="col-md-7">
										  <input  type='text' name='0308' id='0308' value='{{ $row['0308'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0309" class=" control-label col-md-4 text-left"> 0309 </label>
										<div class="col-md-7">
										  <input  type='text' name='0309' id='0309' value='{{ $row['0309'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0310" class=" control-label col-md-4 text-left"> 0310 </label>
										<div class="col-md-7">
										  <input  type='text' name='0310' id='0310' value='{{ $row['0310'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0311" class=" control-label col-md-4 text-left"> 0311 </label>
										<div class="col-md-7">
										  <input  type='text' name='0311' id='0311' value='{{ $row['0311'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0312" class=" control-label col-md-4 text-left"> 0312 </label>
										<div class="col-md-7">
										  <input  type='text' name='0312' id='0312' value='{{ $row['0312'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0313" class=" control-label col-md-4 text-left"> 0313 </label>
										<div class="col-md-7">
										  <input  type='text' name='0313' id='0313' value='{{ $row['0313'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0401" class=" control-label col-md-4 text-left"> 0401 </label>
										<div class="col-md-7">
										  <input  type='text' name='0401' id='0401' value='{{ $row['0401'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0402" class=" control-label col-md-4 text-left"> 0402 </label>
										<div class="col-md-7">
										  <input  type='text' name='0402' id='0402' value='{{ $row['0402'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0403" class=" control-label col-md-4 text-left"> 0403 </label>
										<div class="col-md-7">
										  <input  type='text' name='0403' id='0403' value='{{ $row['0403'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0404" class=" control-label col-md-4 text-left"> 0404 </label>
										<div class="col-md-7">
										  <input  type='text' name='0404' id='0404' value='{{ $row['0404'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0405" class=" control-label col-md-4 text-left"> 0405 </label>
										<div class="col-md-7">
										  <input  type='text' name='0405' id='0405' value='{{ $row['0405'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0406" class=" control-label col-md-4 text-left"> 0406 </label>
										<div class="col-md-7">
										  <input  type='text' name='0406' id='0406' value='{{ $row['0406'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0407" class=" control-label col-md-4 text-left"> 0407 </label>
										<div class="col-md-7">
										  <input  type='text' name='0407' id='0407' value='{{ $row['0407'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0501" class=" control-label col-md-4 text-left"> 0501 </label>
										<div class="col-md-7">
										  <input  type='text' name='0501' id='0501' value='{{ $row['0501'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0502" class=" control-label col-md-4 text-left"> 0502 </label>
										<div class="col-md-7">
										  <input  type='text' name='0502' id='0502' value='{{ $row['0502'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0503" class=" control-label col-md-4 text-left"> 0503 </label>
										<div class="col-md-7">
										  <input  type='text' name='0503' id='0503' value='{{ $row['0503'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0504" class=" control-label col-md-4 text-left"> 0504 </label>
										<div class="col-md-7">
										  <input  type='text' name='0504' id='0504' value='{{ $row['0504'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0505" class=" control-label col-md-4 text-left"> 0505 </label>
										<div class="col-md-7">
										  <input  type='text' name='0505' id='0505' value='{{ $row['0505'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0506" class=" control-label col-md-4 text-left"> 0506 </label>
										<div class="col-md-7">
										  <input  type='text' name='0506' id='0506' value='{{ $row['0506'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0507" class=" control-label col-md-4 text-left"> 0507 </label>
										<div class="col-md-7">
										  <input  type='text' name='0507' id='0507' value='{{ $row['0507'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0901" class=" control-label col-md-4 text-left"> 0901 </label>
										<div class="col-md-7">
										  <input  type='text' name='0901' id='0901' value='{{ $row['0901'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0902" class=" control-label col-md-4 text-left"> 0902 </label>
										<div class="col-md-7">
										  <input  type='text' name='0902' id='0902' value='{{ $row['0902'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0903" class=" control-label col-md-4 text-left"> 0903 </label>
										<div class="col-md-7">
										  <input  type='text' name='0903' id='0903' value='{{ $row['0903'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0904" class=" control-label col-md-4 text-left"> 0904 </label>
										<div class="col-md-7">
										  <input  type='text' name='0904' id='0904' value='{{ $row['0904'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0905" class=" control-label col-md-4 text-left"> 0905 </label>
										<div class="col-md-7">
										  <input  type='text' name='0905' id='0905' value='{{ $row['0905'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0906" class=" control-label col-md-4 text-left"> 0906 </label>
										<div class="col-md-7">
										  <input  type='text' name='0906' id='0906' value='{{ $row['0906'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0907" class=" control-label col-md-4 text-left"> 0907 </label>
										<div class="col-md-7">
										  <input  type='text' name='0907' id='0907' value='{{ $row['0907'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0908" class=" control-label col-md-4 text-left"> 0908 </label>
										<div class="col-md-7">
										  <input  type='text' name='0908' id='0908' value='{{ $row['0908'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0909" class=" control-label col-md-4 text-left"> 0909 </label>
										<div class="col-md-7">
										  <input  type='text' name='0909' id='0909' value='{{ $row['0909'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0910" class=" control-label col-md-4 text-left"> 0910 </label>
										<div class="col-md-7">
										  <input  type='text' name='0910' id='0910' value='{{ $row['0910'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0911" class=" control-label col-md-4 text-left"> 0911 </label>
										<div class="col-md-7">
										  <input  type='text' name='0911' id='0911' value='{{ $row['0911'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0912" class=" control-label col-md-4 text-left"> 0912 </label>
										<div class="col-md-7">
										  <input  type='text' name='0912' id='0912' value='{{ $row['0912'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0913" class=" control-label col-md-4 text-left"> 0913 </label>
										<div class="col-md-7">
										  <input  type='text' name='0913' id='0913' value='{{ $row['0913'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0914" class=" control-label col-md-4 text-left"> 0914 </label>
										<div class="col-md-7">
										  <input  type='text' name='0914' id='0914' value='{{ $row['0914'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0915" class=" control-label col-md-4 text-left"> 0915 </label>
										<div class="col-md-7">
										  <input  type='text' name='0915' id='0915' value='{{ $row['0915'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0916" class=" control-label col-md-4 text-left"> 0916 </label>
										<div class="col-md-7">
										  <input  type='text' name='0916' id='0916' value='{{ $row['0916'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0917" class=" control-label col-md-4 text-left"> 0917 </label>
										<div class="col-md-7">
										  <input  type='text' name='0917' id='0917' value='{{ $row['0917'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0918" class=" control-label col-md-4 text-left"> 0918 </label>
										<div class="col-md-7">
										  <input  type='text' name='0918' id='0918' value='{{ $row['0918'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0919" class=" control-label col-md-4 text-left"> 0919 </label>
										<div class="col-md-7">
										  <input  type='text' name='0919' id='0919' value='{{ $row['0919'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0920" class=" control-label col-md-4 text-left"> 0920 </label>
										<div class="col-md-7">
										  <input  type='text' name='0920' id='0920' value='{{ $row['0920'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0921" class=" control-label col-md-4 text-left"> 0921 </label>
										<div class="col-md-7">
										  <input  type='text' name='0921' id='0921' value='{{ $row['0921'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0922" class=" control-label col-md-4 text-left"> 0922 </label>
										<div class="col-md-7">
										  <input  type='text' name='0922' id='0922' value='{{ $row['0922'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0923" class=" control-label col-md-4 text-left"> 0923 </label>
										<div class="col-md-7">
										  <input  type='text' name='0923' id='0923' value='{{ $row['0923'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0924" class=" control-label col-md-4 text-left"> 0924 </label>
										<div class="col-md-7">
										  <input  type='text' name='0924' id='0924' value='{{ $row['0924'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0925" class=" control-label col-md-4 text-left"> 0925 </label>
										<div class="col-md-7">
										  <input  type='text' name='0925' id='0925' value='{{ $row['0925'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1001" class=" control-label col-md-4 text-left"> 1001 </label>
										<div class="col-md-7">
										  <input  type='text' name='1001' id='1001' value='{{ $row['1001'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1002" class=" control-label col-md-4 text-left"> 1002 </label>
										<div class="col-md-7">
										  <input  type='text' name='1002' id='1002' value='{{ $row['1002'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1003" class=" control-label col-md-4 text-left"> 1003 </label>
										<div class="col-md-7">
										  <input  type='text' name='1003' id='1003' value='{{ $row['1003'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1004" class=" control-label col-md-4 text-left"> 1004 </label>
										<div class="col-md-7">
										  <input  type='text' name='1004' id='1004' value='{{ $row['1004'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1005" class=" control-label col-md-4 text-left"> 1005 </label>
										<div class="col-md-7">
										  <input  type='text' name='1005' id='1005' value='{{ $row['1005'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1006" class=" control-label col-md-4 text-left"> 1006 </label>
										<div class="col-md-7">
										  <input  type='text' name='1006' id='1006' value='{{ $row['1006'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1007" class=" control-label col-md-4 text-left"> 1007 </label>
										<div class="col-md-7">
										  <input  type='text' name='1007' id='1007' value='{{ $row['1007'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1008" class=" control-label col-md-4 text-left"> 1008 </label>
										<div class="col-md-7">
										  <input  type='text' name='1008' id='1008' value='{{ $row['1008'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1009" class=" control-label col-md-4 text-left"> 1009 </label>
										<div class="col-md-7">
										  <input  type='text' name='1009' id='1009' value='{{ $row['1009'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1010" class=" control-label col-md-4 text-left"> 1010 </label>
										<div class="col-md-7">
										  <input  type='text' name='1010' id='1010' value='{{ $row['1010'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1011" class=" control-label col-md-4 text-left"> 1011 </label>
										<div class="col-md-7">
										  <input  type='text' name='1011' id='1011' value='{{ $row['1011'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1012" class=" control-label col-md-4 text-left"> 1012 </label>
										<div class="col-md-7">
										  <input  type='text' name='1012' id='1012' value='{{ $row['1012'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1013" class=" control-label col-md-4 text-left"> 1013 </label>
										<div class="col-md-7">
										  <input  type='text' name='1013' id='1013' value='{{ $row['1013'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1014" class=" control-label col-md-4 text-left"> 1014 </label>
										<div class="col-md-7">
										  <input  type='text' name='1014' id='1014' value='{{ $row['1014'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1015" class=" control-label col-md-4 text-left"> 1015 </label>
										<div class="col-md-7">
										  <input  type='text' name='1015' id='1015' value='{{ $row['1015'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1016" class=" control-label col-md-4 text-left"> 1016 </label>
										<div class="col-md-7">
										  <input  type='text' name='1016' id='1016' value='{{ $row['1016'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1017" class=" control-label col-md-4 text-left"> 1017 </label>
										<div class="col-md-7">
										  <input  type='text' name='1017' id='1017' value='{{ $row['1017'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1018" class=" control-label col-md-4 text-left"> 1018 </label>
										<div class="col-md-7">
										  <input  type='text' name='1018' id='1018' value='{{ $row['1018'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1019" class=" control-label col-md-4 text-left"> 1019 </label>
										<div class="col-md-7">
										  <input  type='text' name='1019' id='1019' value='{{ $row['1019'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="1020" class=" control-label col-md-4 text-left"> 1020 </label>
										<div class="col-md-7">
										  <input  type='text' name='1020' id='1020' value='{{ $row['1020'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2001" class=" control-label col-md-4 text-left"> 2001 </label>
										<div class="col-md-7">
										  <input  type='text' name='2001' id='2001' value='{{ $row['2001'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2002" class=" control-label col-md-4 text-left"> 2002 </label>
										<div class="col-md-7">
										  <input  type='text' name='2002' id='2002' value='{{ $row['2002'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2003" class=" control-label col-md-4 text-left"> 2003 </label>
										<div class="col-md-7">
										  <input  type='text' name='2003' id='2003' value='{{ $row['2003'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2004" class=" control-label col-md-4 text-left"> 2004 </label>
										<div class="col-md-7">
										  <input  type='text' name='2004' id='2004' value='{{ $row['2004'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2005" class=" control-label col-md-4 text-left"> 2005 </label>
										<div class="col-md-7">
										  <input  type='text' name='2005' id='2005' value='{{ $row['2005'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2006" class=" control-label col-md-4 text-left"> 2006 </label>
										<div class="col-md-7">
										  <input  type='text' name='2006' id='2006' value='{{ $row['2006'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2007" class=" control-label col-md-4 text-left"> 2007 </label>
										<div class="col-md-7">
										  <input  type='text' name='2007' id='2007' value='{{ $row['2007'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2008" class=" control-label col-md-4 text-left"> 2008 </label>
										<div class="col-md-7">
										  <input  type='text' name='2008' id='2008' value='{{ $row['2008'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2009" class=" control-label col-md-4 text-left"> 2009 </label>
										<div class="col-md-7">
										  <input  type='text' name='2009' id='2009' value='{{ $row['2009'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2010" class=" control-label col-md-4 text-left"> 2010 </label>
										<div class="col-md-7">
										  <input  type='text' name='2010' id='2010' value='{{ $row['2010'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2011" class=" control-label col-md-4 text-left"> 2011 </label>
										<div class="col-md-7">
										  <input  type='text' name='2011' id='2011' value='{{ $row['2011'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2012" class=" control-label col-md-4 text-left"> 2012 </label>
										<div class="col-md-7">
										  <input  type='text' name='2012' id='2012' value='{{ $row['2012'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2013" class=" control-label col-md-4 text-left"> 2013 </label>
										<div class="col-md-7">
										  <input  type='text' name='2013' id='2013' value='{{ $row['2013'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2014" class=" control-label col-md-4 text-left"> 2014 </label>
										<div class="col-md-7">
										  <input  type='text' name='2014' id='2014' value='{{ $row['2014'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2015" class=" control-label col-md-4 text-left"> 2015 </label>
										<div class="col-md-7">
										  <input  type='text' name='2015' id='2015' value='{{ $row['2015'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2016" class=" control-label col-md-4 text-left"> 2016 </label>
										<div class="col-md-7">
										  <input  type='text' name='2016' id='2016' value='{{ $row['2016'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2017" class=" control-label col-md-4 text-left"> 2017 </label>
										<div class="col-md-7">
										  <input  type='text' name='2017' id='2017' value='{{ $row['2017'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2018" class=" control-label col-md-4 text-left"> 2018 </label>
										<div class="col-md-7">
										  <input  type='text' name='2018' id='2018' value='{{ $row['2018'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2019" class=" control-label col-md-4 text-left"> 2019 </label>
										<div class="col-md-7">
										  <input  type='text' name='2019' id='2019' value='{{ $row['2019'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2020" class=" control-label col-md-4 text-left"> 2020 </label>
										<div class="col-md-7">
										  <input  type='text' name='2020' id='2020' value='{{ $row['2020'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2021" class=" control-label col-md-4 text-left"> 2021 </label>
										<div class="col-md-7">
										  <input  type='text' name='2021' id='2021' value='{{ $row['2021'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2022" class=" control-label col-md-4 text-left"> 2022 </label>
										<div class="col-md-7">
										  <input  type='text' name='2022' id='2022' value='{{ $row['2022'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2023" class=" control-label col-md-4 text-left"> 2023 </label>
										<div class="col-md-7">
										  <input  type='text' name='2023' id='2023' value='{{ $row['2023'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2024" class=" control-label col-md-4 text-left"> 2024 </label>
										<div class="col-md-7">
										  <input  type='text' name='2024' id='2024' value='{{ $row['2024'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2025" class=" control-label col-md-4 text-left"> 2025 </label>
										<div class="col-md-7">
										  <input  type='text' name='2025' id='2025' value='{{ $row['2025'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2026" class=" control-label col-md-4 text-left"> 2026 </label>
										<div class="col-md-7">
										  <input  type='text' name='2026' id='2026' value='{{ $row['2026'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2027" class=" control-label col-md-4 text-left"> 2027 </label>
										<div class="col-md-7">
										  <input  type='text' name='2027' id='2027' value='{{ $row['2027'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2028" class=" control-label col-md-4 text-left"> 2028 </label>
										<div class="col-md-7">
										  <input  type='text' name='2028' id='2028' value='{{ $row['2028'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2029" class=" control-label col-md-4 text-left"> 2029 </label>
										<div class="col-md-7">
										  <input  type='text' name='2029' id='2029' value='{{ $row['2029'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2030" class=" control-label col-md-4 text-left"> 2030 </label>
										<div class="col-md-7">
										  <input  type='text' name='2030' id='2030' value='{{ $row['2030'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2031" class=" control-label col-md-4 text-left"> 2031 </label>
										<div class="col-md-7">
										  <input  type='text' name='2031' id='2031' value='{{ $row['2031'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2032" class=" control-label col-md-4 text-left"> 2032 </label>
										<div class="col-md-7">
										  <input  type='text' name='2032' id='2032' value='{{ $row['2032'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2033" class=" control-label col-md-4 text-left"> 2033 </label>
										<div class="col-md-7">
										  <input  type='text' name='2033' id='2033' value='{{ $row['2033'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2034" class=" control-label col-md-4 text-left"> 2034 </label>
										<div class="col-md-7">
										  <input  type='text' name='2034' id='2034' value='{{ $row['2034'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2035" class=" control-label col-md-4 text-left"> 2035 </label>
										<div class="col-md-7">
										  <input  type='text' name='2035' id='2035' value='{{ $row['2035'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2036" class=" control-label col-md-4 text-left"> 2036 </label>
										<div class="col-md-7">
										  <input  type='text' name='2036' id='2036' value='{{ $row['2036'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2037" class=" control-label col-md-4 text-left"> 2037 </label>
										<div class="col-md-7">
										  <input  type='text' name='2037' id='2037' value='{{ $row['2037'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2038" class=" control-label col-md-4 text-left"> 2038 </label>
										<div class="col-md-7">
										  <input  type='text' name='2038' id='2038' value='{{ $row['2038'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2039" class=" control-label col-md-4 text-left"> 2039 </label>
										<div class="col-md-7">
										  <input  type='text' name='2039' id='2039' value='{{ $row['2039'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2040" class=" control-label col-md-4 text-left"> 2040 </label>
										<div class="col-md-7">
										  <input  type='text' name='2040' id='2040' value='{{ $row['2040'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="2041" class=" control-label col-md-4 text-left"> 2041 </label>
										<div class="col-md-7">
										  <input  type='text' name='2041' id='2041' value='{{ $row['2041'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0601" class=" control-label col-md-4 text-left"> 0601 </label>
										<div class="col-md-7">
										  <input  type='text' name='0601' id='0601' value='{{ $row['0601'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0602" class=" control-label col-md-4 text-left"> 0602 </label>
										<div class="col-md-7">
										  <input  type='text' name='0602' id='0602' value='{{ $row['0602'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0603" class=" control-label col-md-4 text-left"> 0603 </label>
										<div class="col-md-7">
										  <input  type='text' name='0603' id='0603' value='{{ $row['0603'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0604" class=" control-label col-md-4 text-left"> 0604 </label>
										<div class="col-md-7">
										  <input  type='text' name='0604' id='0604' value='{{ $row['0604'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0605" class=" control-label col-md-4 text-left"> 0605 </label>
										<div class="col-md-7">
										  <input  type='text' name='0605' id='0605' value='{{ $row['0605'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0606" class=" control-label col-md-4 text-left"> 0606 </label>
										<div class="col-md-7">
										  <input  type='text' name='0606' id='0606' value='{{ $row['0606'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0607" class=" control-label col-md-4 text-left"> 0607 </label>
										<div class="col-md-7">
										  <input  type='text' name='0607' id='0607' value='{{ $row['0607'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0608" class=" control-label col-md-4 text-left"> 0608 </label>
										<div class="col-md-7">
										  <input  type='text' name='0608' id='0608' value='{{ $row['0608'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0609" class=" control-label col-md-4 text-left"> 0609 </label>
										<div class="col-md-7">
										  <input  type='text' name='0609' id='0609' value='{{ $row['0609'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0610" class=" control-label col-md-4 text-left"> 0610 </label>
										<div class="col-md-7">
										  <input  type='text' name='0610' id='0610' value='{{ $row['0610'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0611" class=" control-label col-md-4 text-left"> 0611 </label>
										<div class="col-md-7">
										  <input  type='text' name='0611' id='0611' value='{{ $row['0611'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0612" class=" control-label col-md-4 text-left"> 0612 </label>
										<div class="col-md-7">
										  <input  type='text' name='0612' id='0612' value='{{ $row['0612'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0613" class=" control-label col-md-4 text-left"> 0613 </label>
										<div class="col-md-7">
										  <input  type='text' name='0613' id='0613' value='{{ $row['0613'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0701" class=" control-label col-md-4 text-left"> 0701 </label>
										<div class="col-md-7">
										  <input  type='text' name='0701' id='0701' value='{{ $row['0701'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0702" class=" control-label col-md-4 text-left"> 0702 </label>
										<div class="col-md-7">
										  <input  type='text' name='0702' id='0702' value='{{ $row['0702'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0703" class=" control-label col-md-4 text-left"> 0703 </label>
										<div class="col-md-7">
										  <input  type='text' name='0703' id='0703' value='{{ $row['0703'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0704" class=" control-label col-md-4 text-left"> 0704 </label>
										<div class="col-md-7">
										  <input  type='text' name='0704' id='0704' value='{{ $row['0704'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0705" class=" control-label col-md-4 text-left"> 0705 </label>
										<div class="col-md-7">
										  <input  type='text' name='0705' id='0705' value='{{ $row['0705'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0706" class=" control-label col-md-4 text-left"> 0706 </label>
										<div class="col-md-7">
										  <input  type='text' name='0706' id='0706' value='{{ $row['0706'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0707" class=" control-label col-md-4 text-left"> 0707 </label>
										<div class="col-md-7">
										  <input  type='text' name='0707' id='0707' value='{{ $row['0707'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0801" class=" control-label col-md-4 text-left"> 0801 </label>
										<div class="col-md-7">
										  <input  type='text' name='0801' id='0801' value='{{ $row['0801'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0802" class=" control-label col-md-4 text-left"> 0802 </label>
										<div class="col-md-7">
										  <input  type='text' name='0802' id='0802' value='{{ $row['0802'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0803" class=" control-label col-md-4 text-left"> 0803 </label>
										<div class="col-md-7">
										  <input  type='text' name='0803' id='0803' value='{{ $row['0803'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0804" class=" control-label col-md-4 text-left"> 0804 </label>
										<div class="col-md-7">
										  <input  type='text' name='0804' id='0804' value='{{ $row['0804'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0805" class=" control-label col-md-4 text-left"> 0805 </label>
										<div class="col-md-7">
										  <input  type='text' name='0805' id='0805' value='{{ $row['0805'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0806" class=" control-label col-md-4 text-left"> 0806 </label>
										<div class="col-md-7">
										  <input  type='text' name='0806' id='0806' value='{{ $row['0806'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0807" class=" control-label col-md-4 text-left"> 0807 </label>
										<div class="col-md-7">
										  <input  type='text' name='0807' id='0807' value='{{ $row['0807'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0808" class=" control-label col-md-4 text-left"> 0808 </label>
										<div class="col-md-7">
										  <input  type='text' name='0808' id='0808' value='{{ $row['0808'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0809" class=" control-label col-md-4 text-left"> 0809 </label>
										<div class="col-md-7">
										  <input  type='text' name='0809' id='0809' value='{{ $row['0809'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0810" class=" control-label col-md-4 text-left"> 0810 </label>
										<div class="col-md-7">
										  <input  type='text' name='0810' id='0810' value='{{ $row['0810'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="0811" class=" control-label col-md-4 text-left"> 0811 </label>
										<div class="col-md-7">
										  <input  type='text' name='0811' id='0811' value='{{ $row['0811'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
