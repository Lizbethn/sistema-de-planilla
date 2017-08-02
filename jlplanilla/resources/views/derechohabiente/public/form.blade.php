

		 {!! Form::open(array('url'=>'derechohabiente/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Derecho Habientes</legend>
				{!! Form::hidden('derechohabiente_id', $row['derechohabiente_id']) !!}					
									  <div class="form-group  " >
										<label for="Tipo Documento Id" class=" control-label col-md-4 text-left"> Tipo Documento Id </label>
										<div class="col-md-7">
										  <select name='tipo_documento_id' rows='5' id='tipo_documento_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="N Documento" class=" control-label col-md-4 text-left"> N Documento </label>
										<div class="col-md-7">
										  <input  type='text' name='n_documento' id='n_documento' value='{{ $row['n_documento'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Telelfono" class=" control-label col-md-4 text-left"> Telelfono </label>
										<div class="col-md-7">
										  <input  type='text' name='telelfono' id='telelfono' value='{{ $row['telelfono'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Fecha Nacimiento" class=" control-label col-md-4 text-left"> Fecha Nacimiento </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('fecha_nacimiento', $row['fecha_nacimiento'],array('class'=>'form-control date','id'=>'fecha_nacimiento')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Sexo" class=" control-label col-md-4 text-left"> Sexo </label>
										<div class="col-md-7">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='sexo' value ='1'  @if($row['sexo'] == '1') checked="checked" @endif > Femenino </label>
					<label class='radio radio-inline'>
					<input type='radio' name='sexo' value ='2'  @if($row['sexo'] == '2') checked="checked" @endif > Masculino </label> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Vinculo Familiar Id" class=" control-label col-md-4 text-left"> Vinculo Familiar Id </label>
										<div class="col-md-7">
										  <select name='vinculo_familiar_id' rows='5' id='vinculo_familiar_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Ap Paterno" class=" control-label col-md-4 text-left"> Ap Paterno </label>
										<div class="col-md-7">
										  <input  type='text' name='ap_paterno' id='ap_paterno' value='{{ $row['ap_paterno'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Ap Materno" class=" control-label col-md-4 text-left"> Ap Materno </label>
										<div class="col-md-7">
										  <input  type='text' name='ap_materno' id='ap_materno' value='{{ $row['ap_materno'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Nombres" class=" control-label col-md-4 text-left"> Nombres </label>
										<div class="col-md-7">
										  <input  type='text' name='nombres' id='nombres' value='{{ $row['nombres'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Fecha Alta" class=" control-label col-md-4 text-left"> Fecha Alta </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('fecha_alta', $row['fecha_alta'],array('class'=>'form-control date','id'=>'fecha_alta')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Incapacidad" class=" control-label col-md-4 text-left"> Incapacidad </label>
										<div class="col-md-7">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='incapacidad' value ='1'  @if($row['incapacidad'] == '1') checked="checked" @endif > Si </label>
					<label class='radio radio-inline'>
					<input type='radio' name='incapacidad' value ='0'  @if($row['incapacidad'] == '0') checked="checked" @endif > No </label> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Estado Empleado Id" class=" control-label col-md-4 text-left"> Estado Empleado Id </label>
										<div class="col-md-7">
										  <select name='estado_empleado_id' rows='5' id='estado_empleado_id' class='select2 '   ></select> 
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
		
		
		$("#tipo_documento_id").jCombo("{!! url('derechohabiente/comboselect?filter=tipo_documento:tipo_documento_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["tipo_documento_id"] }}' });
		
		$("#vinculo_familiar_id").jCombo("{!! url('derechohabiente/comboselect?filter=vinculo_familiar:vinculo_familiar_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["vinculo_familiar_id"] }}' });
		
		$("#estado_empleado_id").jCombo("{!! url('derechohabiente/comboselect?filter=estado_empleados:estado_empleado_id:nombre') !!}",
		{  selected_value : '{{ $row["estado_empleado_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
