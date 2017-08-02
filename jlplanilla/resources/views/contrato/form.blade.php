@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->

 
 	<div class="page-content-wrapper m-t">


<div class="sbox">
	<div class="sbox-title"> 
		<div class="sbox-tools pull-left" >
			<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-xs btn-warning btn-sm btn-circle"  title="{{ Lang::get('core.btn_back') }}" ><i class="fa  fa-arrow-left"></i></a> 
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

		 {!! Form::open(array('url'=>'contrato/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">

	<span class="h2 block m-t-xs">{!! SiteHelpers::showUploadedFile(Session::get('trabajador')->avatar,'/uploads/empleados/') !!}<strong>  {{ Session::get('trabajador')->ape_paterno}} {{ Session::get('trabajador')->ape_materno}} , {{ Session::get('trabajador')->nombres}} </strong></span>
		<span class="h5 block m-t-xs">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DNI: {{ Session::get('trabajador')->num_doc}}</span>
	
						<fieldset><legend> </legend>
				{!! Form::hidden('contrato_id', $row['contrato_id']) !!}
							<div class="panel panel-success"> 
								<div class="panel-heading"> 
									<h3 class="panel-title">Contratos</h3> 
								</div> 
								<div class="panel-body"> 
									  <div class="form-group  " >
										<label for="Tipo Contrato" class=" control-label col-md-4 text-left"> Tipo Contrato </label>
										<div class="col-md-7">
										  <select name='tipo_contrato_id' rows='5' id='tipo_contrato_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Inicio de Contrato" class=" control-label col-md-4 text-left"> Inicio de Contrato </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('inicio_contrato', $row['inicio_contrato'],array('class'=>'form-control date','id'=>'inicio_contrato')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Fin de Contrato " class=" control-label col-md-4 text-left"> Fin de Contrato  </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('fin_contrato', $row['fin_contrato'],array('class'=>'form-control date','id'=>'fin_contrato')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Fecha Ingreso" class=" control-label col-md-4 text-left"> Fecha Ingreso </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('fecha_ingreso', $row['fecha_ingreso'],array('class'=>'form-control date','id'=>'fecha_ingreso')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Sueldo" class=" control-label col-md-4 text-left"> Sueldo </label>
										<div class="col-md-7">
										  <input  type='text' name='sueldo' id='sueldo' value='{{ $row['sueldo'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Renta Quinta" class=" control-label col-md-4 text-left"> Renta Quinta </label>
										<div class="col-md-7">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='renta_quinta' value ='1'  @if($row['renta_quinta'] == '1') checked="checked" @endif > Si </label>
					<label class='radio radio-inline'>
					<input type='radio' name='renta_quinta' value ='0'  @if($row['renta_quinta'] == '0') checked="checked" @endif > No </label> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									   					
									  <div class="form-group  " >
										<label for="Horario Entrada" class=" control-label col-md-4 text-left"> Horario Entrada </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('horario_entrada', $row['horario_entrada'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Horario Salida" class=" control-label col-md-4 text-left"> Horario Salida </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('horario_salida', $row['horario_salida'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Inicio Almuerzo" class=" control-label col-md-4 text-left"> Inicio Almuerzo </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('horario_almuerzo_i', $row['horario_almuerzo_i'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Fin Almuerzo" class=" control-label col-md-4 text-left"> Fin Almuerzo </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('horario_almuerzo_f', $row['horario_almuerzo_f'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div>
									<div class="form-group  " >
										<label for="Comentario" class=" control-label col-md-4 text-left"> Comentario </label>
										<div class="col-md-7">
										  <textarea name='comentario' rows='5' id='comentario' class='form-control '  
				           >{{ $row['comentario'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Archivo" class=" control-label col-md-4 text-left"> Archivo </label>
										<div class="col-md-7">
										  <input  type='file' name='archivo' id='archivo' @if($row['archivo'] =='') class='required' @endif style='width:150px !important;'  />
					 	<div >
						{!! SiteHelpers::showUploadedFile($row['archivo'],'/uploads/contratos/') !!}
		
						
						</div>					
					 
										 </div> 
										 <div class="col-md-1">
										 	
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
					<button type="button" onclick="location.href='{{ URL::to('contrato?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>

   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#tipo_contrato_id").jCombo("{!! url('contrato/comboselect?filter=tipo_contrato:tipo_contrato_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["tipo_contrato_id"] }}' });
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("contrato/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop