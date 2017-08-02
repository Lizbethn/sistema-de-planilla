

		 {!! Form::open(array('url'=>'empleado/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Datos Personales</legend>
				{!! Form::hidden('id_trabajador', $row['id_trabajador']) !!}					
									  <div class="form-group  " >
										<label for="Avatar" class=" control-label col-md-4 text-left"> Avatar </label>
										<div class="col-md-7">
										  <input  type='file' name='avatar' id='avatar' @if($row['avatar'] =='') class='required' @endif style='width:150px !important;'  />
					 	<div >
						{!! SiteHelpers::showUploadedFile($row['avatar'],'/uploads/empleados/') !!}
						
						</div>					
					 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Codigo del Trabajador" class=" control-label col-md-4 text-left"> Codigo del Trabajador </label>
										<div class="col-md-7">
										  <input  type='text' name='codigo_trabajador' id='codigo_trabajador' value='{{ $row['codigo_trabajador'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Apellido Paterno" class=" control-label col-md-4 text-left"> Apellido Paterno </label>
										<div class="col-md-7">
										  <input  type='text' name='ape_paterno' id='ape_paterno' value='{{ $row['ape_paterno'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Apellido Materno" class=" control-label col-md-4 text-left"> Apellido Materno </label>
										<div class="col-md-7">
										  <input  type='text' name='ape_materno' id='ape_materno' value='{{ $row['ape_materno'] }}' 
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
										<label for="Tipo de documento" class=" control-label col-md-4 text-left"> Tipo de documento </label>
										<div class="col-md-7">
										  <select name='tipo_doc' rows='5' id='tipo_doc' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Número de documento" class=" control-label col-md-4 text-left"> Número de documento </label>
										<div class="col-md-7">
										  <input  type='text' name='num_doc' id='num_doc' value='{{ $row['num_doc'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Sexo" class=" control-label col-md-4 text-left"> Sexo </label>
										<div class="col-md-7">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='sexo' value ='Femenino'  @if($row['sexo'] == 'Femenino') checked="checked" @endif > Femenino </label>
					<label class='radio radio-inline'>
					<input type='radio' name='sexo' value ='Masculino'  @if($row['sexo'] == 'Masculino') checked="checked" @endif > Masculino </label> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Estado Civil" class=" control-label col-md-4 text-left"> Estado Civil </label>
										<div class="col-md-7">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='estado_civil' value ='Soltero'  @if($row['estado_civil'] == 'Soltero') checked="checked" @endif > Soltero </label>
					<label class='radio radio-inline'>
					<input type='radio' name='estado_civil' value ='Casado'  @if($row['estado_civil'] == 'Casado') checked="checked" @endif > Casado </label> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Celular" class=" control-label col-md-4 text-left"> Celular </label>
										<div class="col-md-7">
										  <input  type='text' name='celular' id='celular' value='{{ $row['celular'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="E-mail" class=" control-label col-md-4 text-left"> E-mail </label>
										<div class="col-md-7">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Estado" class=" control-label col-md-4 text-left"> Estado </label>
										<div class="col-md-7">
										  <select name='estado_empleado_id' rows='5' id='estado_empleado_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Centro Costo 1" class=" control-label col-md-4 text-left"> Centro Costo 1 </label>
										<div class="col-md-7">
										  <select name='centro_costo' rows='5' id='centro_costo' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Centro Costo 2" class=" control-label col-md-4 text-left"> Centro Costo 2 </label>
										<div class="col-md-7">
										  <select name='centro_costo2' rows='5' id='centro_costo2' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Afp Id" class=" control-label col-md-4 text-left"> Afp Id </label>
										<div class="col-md-7">
										  <textarea name='afp_id' rows='5' id='afp_id' class='form-control '  
				           >{{ $row['afp_id'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Snp Afp Id" class=" control-label col-md-4 text-left"> Snp Afp Id </label>
										<div class="col-md-7">
										  <textarea name='snp_afp_id' rows='5' id='snp_afp_id' class='form-control '  
				           >{{ $row['snp_afp_id'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Comision Tipo Id" class=" control-label col-md-4 text-left"> Comision Tipo Id </label>
										<div class="col-md-7">
										  <textarea name='comision_tipo_id' rows='5' id='comision_tipo_id' class='form-control '  
				           >{{ $row['comision_tipo_id'] }}</textarea> 
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
		
		
		$("#tipo_doc").jCombo("{!! url('empleado/comboselect?filter=tipo_documento:tipo_documento_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["tipo_doc"] }}' });
		
		$("#estado_empleado_id").jCombo("{!! url('empleado/comboselect?filter=estado_empleados:estado_empleado_id:nombre') !!}",
		{  selected_value : '{{ $row["estado_empleado_id"] }}' });
		
		$("#centro_costo").jCombo("{!! url('empleado/comboselect?filter=centro_costos:centro_costo_id:centro_costo') !!}",
		{  selected_value : '{{ $row["centro_costo"] }}' });
		
		$("#centro_costo2").jCombo("{!! url('empleado/comboselect?filter=centro_costos:centro_costo_id:centro_costo') !!}",
		{  selected_value : '{{ $row["centro_costo2"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
