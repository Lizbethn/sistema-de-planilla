@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->

 
 	<div class="page-content-wrapper m-t">


<div class="sbox">
	<div class="sbox-title"> 
		<div class="sbox-tools pull-left" >
			<a href="{{ URL::to('empleado/detail/'.$row->id_trabajador.'?return='.$return)}}" class="tips btn btn-xs btn-warning btn-sm btn-circle"  title="{{ Lang::get('core.btn_back') }}" ><i class="fa  fa-arrow-left"></i></a> 
		</div>
		<div class="sbox-tools " >
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div> 

	</div>
	<div class="sbox-content"> 	

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	

		 {!! Form::open(array('url'=>'dato/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
			<span class="h2 block m-t-xs">{!! SiteHelpers::showUploadedFile($row->avatar,'/uploads/empleados/') !!}<strong>{{ $row->ape_paterno}} {{ $row->ape_materno}} , {{ $row->nombres}} </strong></span>
		<span class="h5 block m-t-xs">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  DNI: {{ $row->num_doc}}</span>
	
						<fieldset><legend> </legend>
				{!! Form::hidden('id_trabajador', $row['id_trabajador']) !!}
							<div class="panel panel-success"> 
								<div class="panel-heading"> 
									<h3 class="panel-title">Datos Generales</h3> 
								</div> 
								<div class="panel-body"> 
									<div class="form-group  " >
										<label for="Fecha de Nacimiento" class=" control-label col-md-2 text-left"> Fecha de Nacimiento </label>
										<div class="col-md-10">
										  
				<div class="input-group m-b" style="width:250px !important;">
					{!! Form::text('fecha_nacimiento', $row['fecha_nacimiento'],array('class'=>'form-control date','id'=>'fecha_nacimiento')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
								
									  </div>  
								</div> 
							</div>
							
							<div class="panel panel-success"> 
								<div class="panel-heading"> 
									<h3 class="panel-title">Datos Laborales</h3> 
								</div> 
								<div class="panel-body"> 
									<div class="form-group  " >
										<label for="Categoria" class=" control-label col-md-1 text-left"> Categoria </label>
										<div class="col-md-3">
										  <select name='categoria' rows='5' id='categoria' class='select2 '   ></select> 
										 </div> 
										
										
										<label for="Tipo Trabajador" class=" control-label col-md-1 text-left"> Tipo Trabajador </label>
										<div class="col-md-3">
										  <select name='tipo_trabajador' rows='5' id='tipo_trabajador' class='select2 '   ></select> 
										 </div> 
										
										<label for="Nacionalidad" class=" control-label col-md-1 text-left"> Nacionalidad </label>
										<div class="col-md-3">
										  <select name='nacionalidad' rows='5' id='nacionalidad' class='select2 '   ></select> 
										 </div> 
										
									</div>
									
									 <div class="form-group  " >
										<label for="Situacion del trabajador o pensionista" class=" control-label col-md-1 text-left"> Situacion del trabajador</label>
										<div class="col-md-3">
										  <select name='situacion_laboral' rows='5' id='situacion_laboral' class='select2 '   ></select> 
										 </div> 
										
										 <label for="Situacion Especial del trabajador" class=" control-label col-md-1 text-left"> Situacion Especial del trabajador </label>
										<div class="col-md-3">
										  <select name='situacion_especial' rows='5' id='situacion_especial' class='select2 '   ></select> 
										 </div> 
										 
										 <label for="Tipo de Pago" class=" control-label col-md-1 text-left"> Tipo de Pago </label>
										<div class="col-md-3">
										  <select name='tipo_pago' rows='5' id='tipo_pago' class='select2 '   ></select> 
										 </div> 
										 
									  </div>
									
									  
									   <div class="form-group  " >
										<label for="Categoria Ocupacional" class=" control-label col-md-1 text-left"> Categoria Ocupacional </label>
										<div class="col-md-3">
										  <select name='categoria_ocupacional' rows='5' id='categoria_ocupacional' class='select2 '   ></select> 
										 </div> 
										<label for="Ocupacion" class=" control-label col-md-1 text-left"> Ocupacion </label>
										<div class="col-md-3">
										  <select name='ocupacion' rows='5' id='ocupacion' class='select2 '   ></select> 
										 </div>
										 <label for="Periocidad de la remuneración o retribución" class=" control-label col-md-1 text-left"> Periocidad de remuneración</label>
										<div class="col-md-3">
										  <select name='periocidad' rows='5' id='periocidad' class='select2 '   ></select> 
										 </div>   
										  
									  </div> 
									
									 <div class="form-group  " >
										<label for="Discapacidad" class=" control-label col-md-1 text-left"> Discapacidad </label>
										<div class="col-md-3">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='discapacidad' value ='1'  @if($row['discapacidad'] == '1') checked="checked" @endif > Si </label>
					<label class='radio radio-inline'>
					<input type='radio' name='discapacidad' value ='0'  @if($row['discapacidad'] == '0') checked="checked" @endif > No </label> 
										 </div> 
										
										<label for="Trabajador sujeto a horario nocturno" class=" control-label col-md-1 text-left"> Horario nocturno </label>
										<div class="col-md-3">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='horario_nocturno' value ='1'  @if($row['horario_nocturno'] == '1') checked="checked" @endif > Si </label>
					<label class='radio radio-inline'>
					<input type='radio' name='horario_nocturno' value ='0'  @if($row['horario_nocturno'] == '0') checked="checked" @endif > No </label> 
										 </div> 
										 
										 <label for="Carga Familiar" class=" control-label col-md-1 text-left"> Carga Familiar </label>
										 <div class="col-md-3">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='carga_familiar' value ='1'  @if($row['carga_familiar'] == '1') checked="checked" @endif > Si </label>
					<label class='radio radio-inline'>
					<input type='radio' name='carga_familiar' value ='0'  @if($row['carga_familiar'] == '0') checked="checked" @endif > No </label> 
										 </div> 
										
						
									  
									  </div>
									
									<div class="form-group  " >
										
										<div class="col-md-12">
										  <?php $sujeto_a = explode(",",$row['sujeto_a']); ?>
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='sujeto_a[]' value ='1'   class='' 
					@if(in_array('1',$sujeto_a))checked @endif 
					 /> Trabajador sujeto a régimen alternativo, acumulativo o atípico de jornada de trabajo y descanso  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label> 
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='sujeto_a[]' value ='2'   class='' 
					@if(in_array('2',$sujeto_a))checked @endif 
					 /> Jornada de Trabajo máxima </label> 
					   
										 </div> 
										 
									  </div> 					
									  <div class="form-group  " >
										
										<div class="col-md-12">
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
									
									  </div>
									
									
									
								</div> 
							</div>
					
					<div class="panel panel-success"> 
								<div class="panel-heading"> 
									<h3 class="panel-title">Datos de la Situación Educativa</h3> 
								</div> 
								<div class="panel-body"> 
									<div class="form-group  " >
										<label for="Nivel Educativo" class=" control-label col-md-1 text-left"> Nivel Educativo </label>
										<div class="col-md-11">
										  <select name='nivel_educativo' rows='5' id='nivel_educativo' class='select2 '   ></select> 
										 </div> 
								
									  </div>  
								</div> 
					</div>
							
						<div class="panel panel-success"> 
								<div class="panel-heading"> 
									<h3 class="panel-title">Datos de Seguridad Social</h3> 
								</div> 
								<div class="panel-body"> 
									<div class="form-group  " >
										<label for="Nº CUSPP" class=" control-label col-md-1 text-left"> Nº CUSPP </label>
										<div class="col-md-3">
										  <input  type='text' name='n_cuspp' id='n_cuspp' value='{{ $row['n_cuspp'] }}' 
						     class='form-control ' /> 
										 </div>
										<label for="Afiliado a EPS / Servicios Propios" class=" control-label col-md-1 text-left"> Afiliado a EPS / Servicios Propios </label>
										<div class="col-md-3">
										  <select name='servicios_propios' rows='5' id='servicios_propios' class='select2 '   ></select> 
										 </div>
										<label for="Fecha de Inscripción del régimen pensinoario" class=" control-label col-md-2 text-left"> Fecha de Inscripción del régimen pensinoario </label>
										<div class="col-md-2">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('fecha_inscripcion', $row['fecha_inscripcion'],array('class'=>'form-control date','id'=>'fecha_inscripcion')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										
										
									  </div>
									</div>
									<div class="form-group  " >
										<label for="Snp Afp Id" class=" control-label col-md-1 text-left"> Regimen Pensionario </label>
										<div class="col-md-3">
										  <select name='snp_afp_id' rows='5' id='snp_afp_id' class='select2 '   ></select> 
										 </div> 
										
										<label for="Afp Id" class=" control-label col-md-1 text-left"> AFP</label>
										<div class="col-md-3">
										  <select name='afp_id' rows='5' id='afp_id' class='select2 '   ></select> 
										 </div> 
										
										<label for="Tipo Comision" class=" control-label col-md-1 text-left"> Tipo Comisión </label>
										<div class="col-md-3">
										  <select name='comision_tipo_id' rows='5' id='comision_tipo_id' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 
								</div> 
							</div>
 					
							
														
									   					
									   </fieldset>
	
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="icon-checkmark-circle2"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="icon-bubble-check"></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('dato?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
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
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("dato/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop