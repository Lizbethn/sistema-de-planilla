

		 {!! Form::open(array('url'=>'dato/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Datos</legend>
				{!! Form::hidden('id_trabajador', $row['id_trabajador']) !!}					
									  <div class="form-group  " >
										<label for="Empresa Id" class=" control-label col-md-4 text-left"> Empresa Id </label>
										<div class="col-md-7">
										  <textarea name='empresa_id' rows='5' id='empresa_id' class='form-control '  
				           >{{ $row['empresa_id'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Avatar" class=" control-label col-md-4 text-left"> Avatar </label>
										<div class="col-md-7">
										  <textarea name='avatar' rows='5' id='avatar' class='form-control '  
				           >{{ $row['avatar'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Fecha de Nacimiento" class=" control-label col-md-4 text-left"> Fecha de Nacimiento </label>
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
										<label for="Nacionalidad" class=" control-label col-md-4 text-left"> Nacionalidad </label>
										<div class="col-md-7">
										  <select name='nacionalidad' rows='5' id='nacionalidad' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Carga Familiar" class=" control-label col-md-4 text-left"> Carga Familiar </label>
										<div class="col-md-7">
										  <input  type='text' name='carga_familiar' id='carga_familiar' value='{{ $row['carga_familiar'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Categoria" class=" control-label col-md-4 text-left"> Categoria </label>
										<div class="col-md-7">
										  <select name='categoria' rows='5' id='categoria' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tipo Trabajador" class=" control-label col-md-4 text-left"> Tipo Trabajador </label>
										<div class="col-md-7">
										  <select name='tipo_trabajador' rows='5' id='tipo_trabajador' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Categoria Ocupacional" class=" control-label col-md-4 text-left"> Categoria Ocupacional </label>
										<div class="col-md-7">
										  <select name='categoria_ocupacional' rows='5' id='categoria_ocupacional' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Nivel Educativo" class=" control-label col-md-4 text-left"> Nivel Educativo </label>
										<div class="col-md-7">
										  <select name='nivel_educativo' rows='5' id='nivel_educativo' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Ocupacion" class=" control-label col-md-4 text-left"> Ocupacion </label>
										<div class="col-md-7">
										  <select name='ocupacion' rows='5' id='ocupacion' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Estado Empleado Id" class=" control-label col-md-4 text-left"> Estado Empleado Id </label>
										<div class="col-md-7">
										  <textarea name='estado_empleado_id' rows='5' id='estado_empleado_id' class='form-control '  
				           >{{ $row['estado_empleado_id'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Trabajador sujeto a horario nocturno" class=" control-label col-md-4 text-left"> Trabajador sujeto a horario nocturno </label>
										<div class="col-md-7">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='horario_nocturno' value ='1'  @if($row['horario_nocturno'] == '1') checked="checked" @endif > Si </label>
					<label class='radio radio-inline'>
					<input type='radio' name='horario_nocturno' value ='0'  @if($row['horario_nocturno'] == '0') checked="checked" @endif > No </label> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Discapacidad" class=" control-label col-md-4 text-left"> Discapacidad </label>
										<div class="col-md-7">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='discapacidad' value ='1'  @if($row['discapacidad'] == '1') checked="checked" @endif > Si </label>
					<label class='radio radio-inline'>
					<input type='radio' name='discapacidad' value ='0'  @if($row['discapacidad'] == '0') checked="checked" @endif > No </label> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Fecha de Inscripción del régimen pensinoario" class=" control-label col-md-4 text-left"> Fecha de Inscripción del régimen pensinoario </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('fecha_inscripcion', $row['fecha_inscripcion'],array('class'=>'form-control date','id'=>'fecha_inscripcion')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Nº CUSPP" class=" control-label col-md-4 text-left"> Nº CUSPP </label>
										<div class="col-md-7">
										  <input  type='text' name='n_cuspp' id='n_cuspp' value='{{ $row['n_cuspp'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Afp Id" class=" control-label col-md-4 text-left"> Afp Id </label>
										<div class="col-md-7">
										  <select name='afp_id' rows='5' id='afp_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tipo Comision" class=" control-label col-md-4 text-left"> Tipo Comision </label>
										<div class="col-md-7">
										  <select name='comision_tipo_id' rows='5' id='comision_tipo_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Snp Afp Id" class=" control-label col-md-4 text-left"> Snp Afp Id </label>
										<div class="col-md-7">
										  <select name='snp_afp_id' rows='5' id='snp_afp_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Afiliado a EPS / Servicios Propios" class=" control-label col-md-4 text-left"> Afiliado a EPS / Servicios Propios </label>
										<div class="col-md-7">
										  <select name='servicios_propios' rows='5' id='servicios_propios' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Situacion del trabajador o pensionista" class=" control-label col-md-4 text-left"> Situacion del trabajador o pensionista </label>
										<div class="col-md-7">
										  <select name='situacion_laboral' rows='5' id='situacion_laboral' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Periocidad de la remuneración o retribución" class=" control-label col-md-4 text-left"> Periocidad de la remuneración o retribución </label>
										<div class="col-md-7">
										  <select name='periocidad' rows='5' id='periocidad' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Situacion Especial del trabajador" class=" control-label col-md-4 text-left"> Situacion Especial del trabajador </label>
										<div class="col-md-7">
										  <select name='situacion_especial' rows='5' id='situacion_especial' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tipo de Pago" class=" control-label col-md-4 text-left"> Tipo de Pago </label>
										<div class="col-md-7">
										  <select name='tipo_pago' rows='5' id='tipo_pago' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Sujeto A" class=" control-label col-md-4 text-left"> Sujeto A </label>
										<div class="col-md-7">
										  <?php $sujeto_a = explode(",",$row['sujeto_a']); ?>
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='sujeto_a[]' value ='1'   class='' 
					@if(in_array('1',$sujeto_a))checked @endif 
					 /> Trabajador sujeto a régimen alternativo, acumulativo o atípico de jornada de trabajo y descanso </label> 
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='sujeto_a[]' value ='2'   class='' 
					@if(in_array('2',$sujeto_a))checked @endif 
					 /> Jornada de Trabajo máxima </label> 
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='sujeto_a[]' value ='3'   class='' 
					@if(in_array('3',$sujeto_a))checked @endif 
					 /> Trabajador sujeto a horario nocturno </label>  
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Quinta Categoria" class=" control-label col-md-4 text-left"> Quinta Categoria </label>
										<div class="col-md-7">
										  <?php $quinta_categoria = explode(",",$row['quinta_categoria']); ?>
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='quinta_categoria[]' value ='1'   class='' 
					@if(in_array('1',$quinta_categoria))checked @endif 
					 /> Informó otros ingresos de 5ta categoria </label> 
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='quinta_categoria[]' value ='2'   class='' 
					@if(in_array('2',$quinta_categoria))checked @endif 
					 /> Tiene rentas de 5ta categoria exoneradas o inafectas </label> 
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='quinta_categoria[]' value ='3'   class='' 
					@if(in_array('3',$quinta_categoria))checked @endif 
					 /> Sindicalizado </label> 
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='quinta_categoria[]' value ='4'   class='' 
					@if(in_array('4',$quinta_categoria))checked @endif 
					 /> No Calcular </label>  
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
		
		
		$("#nacionalidad").jCombo("{!! url('dato/comboselect?filter=nacionalidad:nacionalidad_id:descripcion') !!}",
		{  selected_value : '{{ $row["nacionalidad"] }}' });
		
		$("#categoria").jCombo("{!! url('dato/comboselect?filter=categorias:categoria_id:tipo_categoria|nom_categoria') !!}",
		{  selected_value : '{{ $row["categoria"] }}' });
		
		$("#tipo_trabajador").jCombo("{!! url('dato/comboselect?filter=tipo_trabajador:tipo_trabajador_id:nombre') !!}",
		{  selected_value : '{{ $row["tipo_trabajador"] }}' });
		
		$("#categoria_ocupacional").jCombo("{!! url('dato/comboselect?filter=categoria_ocupacional:cat_ocupacional_id:nombre') !!}",
		{  selected_value : '{{ $row["categoria_ocupacional"] }}' });
		
		$("#nivel_educativo").jCombo("{!! url('dato/comboselect?filter=nivel_educativo:nivel_educativo_id:nombre') !!}",
		{  selected_value : '{{ $row["nivel_educativo"] }}' });
		
		$("#ocupacion").jCombo("{!! url('dato/comboselect?filter=ocupacion:ocupacion_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["ocupacion"] }}' });
		
		$("#afp_id").jCombo("{!! url('dato/comboselect?filter=afps:afp_id:nombre') !!}",
		{  selected_value : '{{ $row["afp_id"] }}' });
		
		$("#snp_afp_id").jCombo("{!! url('dato/comboselect?filter=snp_afps:snp_afp_id:nombre') !!}",
		{  selected_value : '{{ $row["snp_afp_id"] }}' });
		
		$("#comision_tipo_id").jCombo("{!! url('dato/comboselect?filter=comision_tipos:comision_tipo_id:nombre') !!}",
		{  selected_value : '{{ $row["comision_tipo_id"] }}' });
		
		$("#servicios_propios").jCombo("{!! url('dato/comboselect?filter=servicios_propios:servicios_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["servicios_propios"] }}' });
		
		$("#situacion_laboral").jCombo("{!! url('dato/comboselect?filter=situacion_laboral:laboral_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["situacion_laboral"] }}' });
		
		$("#periocidad").jCombo("{!! url('dato/comboselect?filter=periocidad:periodo_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["periocidad"] }}' });
		
		$("#situacion_especial").jCombo("{!! url('dato/comboselect?filter=situacion_especial:situacion_especial_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["situacion_especial"] }}' });
		
		$("#tipo_pago").jCombo("{!! url('dato/comboselect?filter=tipo_pago:tipo_pago_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["tipo_pago"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
