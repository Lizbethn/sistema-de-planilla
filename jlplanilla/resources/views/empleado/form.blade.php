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

		 {!! Form::open(array('url'=>'empleado/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
	
	<span class="h2 block m-t-xs">{!! SiteHelpers::showUploadedFile($row['avatar'],'/uploads/empleados/') !!}<strong>{{ $row->ape_paterno}} {{ $row->ape_materno}} , {{ $row->nombres}} </strong></span>
		<span class="h5 block m-t-xs">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  DNI: {{ $row->num_doc}}</span>
						
	<fieldset><legend></legend>
		{!! Form::hidden('id_trabajador', $row['id_trabajador']) !!}

		<div class="panel panel-success">
								<div class="panel-heading"> 
									<h3 class="panel-title">Datos Personales</h3> 
								</div> 
								<div class="panel-body"> 
									  <div class="form-group  " >
										<label for="Avatar" class=" control-label col-md-4 text-left"> Foto </label>
										<div class="col-md-7">
										  <input  type='file' name='avatar' id='avatar'/>
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
										<label for="Centro Costo" class=" control-label col-md-4 text-left"> Centro Costo 1</label>
										<div class="col-md-7">
										   {!! Form::model($row, ['route' => ['captura.centro']] ) !!}
                                    {!!  Form::select('centro_costo', $centrosCosto,null,['data-agenda-id'=>$row->agenda_id,'data-estado-cita'=>$row->estado_cita,'class'=>'form-control color_estado_cita_'.$row->estado_cita,'id' => 'estado_cita_'.$row->estado_cita])  !!}
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 
									
									<div class="form-group  " >
										<label for="Centro Costo 2" class=" control-label col-md-4 text-left"> Centro Costo 2 </label>
										<div class="col-md-7">
											 {!! Form::model($row, ['route' => ['captura.centro2']] ) !!}
                                    {!!  Form::select('centro_costo2', $centrosCosto2,null,['data-agenda-id'=>$row->agenda_id,'data-estado-cita'=>$row->estado_cita,'class'=>'form-control color_estado_cita_'.$row->estado_cita,'id' => 'estado_cita_'.$row->estado_cita])  !!}
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
					<button type="button" onclick="location.href='{{ URL::to('empleado?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
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
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("empleado/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop