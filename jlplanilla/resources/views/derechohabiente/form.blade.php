@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->

 
 	<div class="page-content-wrapper m-t">


<div class="sbox">
	<div class="sbox-title"> 
		<div class="sbox-tools pull-left" >
			<a href="{{ URL::to('empleado/detail/'.$row->id_trabajador.'?return='.$return)}}" class=" tips btn btn-xs btn-warning btn-sm btn-circle"  title="{{ Lang::get('core.btn_back') }}" ><i class="fa  fa-arrow-left"></i></a> 
		</div>
		<div class="sbox-tools " >
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class=" tips btn btn-xs btn-info btn-sm btn-circle" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div> 

	</div>
	<div class="sbox-content"> 	

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	

		
		
		
		 {!! Form::open(array('url'=>'derechohabiente/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
	<span class="h2 block m-t-xs">{!! SiteHelpers::showUploadedFile(Session::get('trabajador')->avatar,'/uploads/empleados/') !!}<strong>  {{ Session::get('trabajador')->ape_paterno}} {{ Session::get('trabajador')->ape_materno}} , {{ Session::get('trabajador')->nombres}} </strong></span>
		<span class="h5 block m-t-xs">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DNI: {{ Session::get('trabajador')->num_doc}}</span>
						<fieldset><legend> </legend>
				{!! Form::hidden('derechohabiente_id', $row['derechohabiente_id']) !!}
							<div class="panel panel-success"> 
								<div class="panel-heading"> 
									<h3 class="panel-title">Derecho Habientes</h3> 
								</div> 
								<div class="panel-body"> 
									 <div class="form-group  " >
										<label for="Ap Paterno" class=" control-label col-md-2 text-left"> Apellido Paterno </label>
										<div class="col-md-9">
										  <input  type='text' name='ap_paterno' id='ap_paterno' value='{{ $row['ap_paterno'] }}' 
						     class='form-control ' /> 
										 </div> 
										
									  </div> 					
									  <div class="form-group  " >
										<label for="Ap Materno" class=" control-label col-md-2 text-left"> Apellido Materno </label>
										<div class="col-md-9">
										  <input  type='text' name='ap_materno' id='ap_materno' value='{{ $row['ap_materno'] }}' 
						     class='form-control ' /> 
										 </div> 
										
									  </div> 					
									  <div class="form-group  " >
										<label for="Nombres" class=" control-label col-md-2 text-left"> Nombres </label>
										<div class="col-md-9">
										  <input  type='text' name='nombres' id='nombres' value='{{ $row['nombres'] }}' 
						     class='form-control ' /> 
										 </div> 
										
									  </div>
									  <div class="form-group  " >
										<label for="Tipo Documento Id" class=" control-label col-md-2 text-left"> Tipo Documento</label>
										<div class="col-md-4">
										  <select name='tipo_documento_id' rows='5' id='tipo_documento_id' class='select2 '   ></select> 
										 </div> 
										 
										<label for="N Documento" class=" control-label col-md-2 text-left"> Nº de Documento </label>
										<div class="col-md-3">
										  <input  type='text' name='n_documento' id='n_documento' value='{{ $row['n_documento'] }}' 
						     class='form-control ' /> 
										 </div> 
										
									  </div> 					
									  <div class="form-group  " >
										<label for="Telelfono" class=" control-label col-md-2 text-left"> Teléfono </label>
										<div class="col-md-2">
										  <input  type='text' name='telelfono' id='telelfono' value='{{ $row['telelfono'] }}' 
						     class='form-control ' /> 
										 </div> 
										 
										<label for="Fecha Nacimiento" class=" control-label col-md-2 text-left"> Fecha de Nacimiento </label>
										<div class="col-md-2">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('fecha_nacimiento', $row['fecha_nacimiento'],array('class'=>'form-control date','id'=>'fecha_nacimiento')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										
										<label for="Sexo" class=" control-label col-md-1 text-left"> Sexo </label>
										<div class="col-md-3">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='sexo' value ='1'  @if($row['sexo'] == '1') checked="checked" @endif > Femenino </label>
					<label class='radio radio-inline'>
					<input type='radio' name='sexo' value ='2'  @if($row['sexo'] == '2') checked="checked" @endif > Masculino </label> 
										 </div> 
										
									  </div> 					
									  <div class="form-group  " >
										<label for="Vinculo Familiar Id" class=" control-label col-md-2 text-left"> Vinculo Familiar</label>
										<div class="col-md-2">
										  <select name='vinculo_familiar_id' rows='5' id='vinculo_familiar_id' class='select2 '   ></select> 
										 </div> 
									
										<label for="Fecha Alta" class=" control-label col-md-2 text-left"> Fecha de Alta </label>
										<div class="col-md-2">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('fecha_alta', $row['fecha_alta'],array('class'=>'form-control date','id'=>'fecha_alta')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 
										<label for="Incapacidad" class=" control-label col-md-1 text-left"> Incapacidad </label>
										<div class="col-md-2">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='incapacidad' value ='1'  @if($row['incapacidad'] == '1') checked="checked" @endif > Si &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
					<label class='radio radio-inline'>
					<input type='radio' name='incapacidad' value ='0'  @if($row['incapacidad'] == '0') checked="checked" @endif > No </label> 
										 </div> 
										
									  </div> 					
									  <div class="form-group  " >
										<label for="Estado Empleado Id" class=" control-label col-md-2 text-left"> Estado</label>
										<div class="col-md-2">
										  <select name='estado_empleado_id' rows='5' id='estado_empleado_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-6">
										 	
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
					<button type="button" onclick="location.href='{{ URL::to('derechohabiente?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#tipo_documento_id").jCombo("{!! url('derechohabiente/comboselect?filter=tipo_documento:tipo_documento_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["tipo_documento_id"] }}' });
		
		$("#vinculo_familiar_id").jCombo("{!! url('derechohabiente/comboselect?filter=vinculo_familiar:vinculo_familiar_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["vinculo_familiar_id"] }}' });
		
		$("#estado_empleado_id").jCombo("{!! url('derechohabiente/comboselect?filter=estado_empleados:estado_empleado_id:nombre') !!}",
		{  selected_value : '{{ $row["estado_empleado_id"] }}' });
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("derechohabiente/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop