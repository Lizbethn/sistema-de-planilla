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

		 {!! Form::open(array('url'=>'empresa/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> </legend>
				{!! Form::hidden('empresa_id', $row['empresa_id']) !!}					
			
								<div class="panel panel-success"> 
								<div class="panel-heading"> 
									<h3 class="panel-title">Empresa</h3> 
								</div> 
								<div class="panel-body"> 
									  <div class="form-group  " >
										<label for="Razon Social" class=" control-label col-md-1 text-left"> Razon Social </label>
										<div class="col-md-4">
										  <input  type='text' name='razon_social' id='razon_social' value='{{ $row['razon_social'] }}' 
						     class='form-control ' /> 
										 </div> 
										
								
										<label for="Ruc" class=" control-label col-md-1 text-left"> Ruc </label>
										<div class="col-md-2">
										  <input  type='text' name='ruc' id='ruc' value='{{ $row['ruc'] }}' 
						     class='form-control ' /> 
										 </div> 
										 
										  <label for="Sector" class=" control-label col-md-1 text-left"> Sector </label>
										<div class="col-md-2">
										  <select name='sector_id' rows='5' id='sector_id' class='select2 '   ></select> 
										 </div> 
									  </div> 					
									  <div class="form-group  " >
										<label for="Dirección" class=" control-label col-md-1 text-left"> Dirección </label>
										<div class="col-md-5">
										  <input  type='text' name='direccion' id='direccion' value='{{ $row['direccion'] }}' 
						     class='form-control ' /> 
										 </div> 
										
										<label for="Nº" class=" control-label col-md-1 text-left"> Nº </label>
										<div class="col-md-1">
										  <input  type='text' name='num_direccion' id='num_direccion' value='{{ $row['num_direccion'] }}' 
						     class='form-control ' /> 
										 </div> 
										 
									
										<label for="Urbanización" class=" control-label col-md-1 text-left"> Urbanización </label>
										<div class="col-md-3">
										  <input  type='text' name='urbanizacion' id='urbanizacion' value='{{ $row['urbanizacion'] }}' 
						     class='form-control ' /> 
										 </div> 
									
									  </div> 					
									  
									<div class="form-group  " >
										<label for="Departamento" class=" control-label col-md-1 text-left"> Departamento </label>
										<div class="col-md-3">
										  <select name='departamento_id' rows='5' id='departamento_id' class='select2 '   ></select> 
										 </div> 
										
										<label for="Provincia" class=" control-label col-md-1 text-left"> Provincia </label>
										<div class="col-md-3">
										  <select name='provincia_id' rows='5' id='provincia_id' class='select2 '   ></select> 
										 </div> 
										
										<label for="Distrito" class=" control-label col-md-1 text-left"> Distrito </label>
										<div class="col-md-3">
										  <select name='distrito_id' rows='5' id='distrito_id' class='select2 '   ></select> 
										 </div> 
										
									  </div>
									   					
									  <div class="form-group  " >
										<label for="Teléfono" class=" control-label col-md-1 text-left"> Teléfono </label>
										<div class="col-md-3">
										  <input  type='text' name='telefono' id='telefono' value='{{ $row['telefono'] }}' 
						     class='form-control ' /> 
										 </div> 
										
										<label for="Email" class=" control-label col-md-1 text-left"> Email </label>
										<div class="col-md-3">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}' 
						     class='form-control ' /> 
										 </div> 
										
										<label for="Página Web" class=" control-label col-md-1 text-left"> Página Web </label>
										<div class="col-md-3">
										  <input  type='text' name='pagina_web' id='pagina_web' value='{{ $row['pagina_web'] }}' 
						     class='form-control ' /> 
										 </div> 
										 
									  </div>
									<div class="form-group  " >
										<label for="Representante Legal" class=" control-label col-md-1 text-left"> Representante Legal </label>
										<div class="col-md-5">
										  <input  type='text' name='representante' id='representante' value='{{ $row['representante'] }}' 
						     class='form-control ' /> 
										 </div> 
										 
										<label for="Cargo" class=" control-label col-md-1 text-left"> Cargo </label>
										<div class="col-md-5">
										  <input  type='text' name='cargo' id='cargo' value='{{ $row['cargo'] }}' 
						     class='form-control ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group  " >
										<label for="Tipo de Documento" class=" control-label col-md-1 text-left"> Tipo de Documento </label>
										<div class="col-md-5">
										  <select name='tipo_documento_id' rows='5' id='tipo_documento_id' class='select2 '   ></select> 
										 </div> 
										 
										<label for="Nº de Documento" class=" control-label col-md-1 text-left"> Nº de Documento </label>
										<div class="col-md-5">
										  <input  type='text' name='num_documento' id='num_documento' value='{{ $row['num_documento'] }}' 
						     class='form-control ' /> 
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
					<button type="button" onclick="location.href='{{ URL::to('empresa?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#sector_id").jCombo("{!! url('empresa/comboselect?filter=sectores:sector_id:nombre') !!}",
		{  selected_value : '{{ $row["sector_id"] }}' });
		
		$("#distrito_id").jCombo("{!! url('empresa/comboselect?filter=distritos:distrito_id:codigo_distrito|nombre') !!}&parent=provincia_id:",
		{  parent: '#provincia_id', selected_value : '{{ $row["distrito_id"] }}' });
		
		$("#provincia_id").jCombo("{!! url('empresa/comboselect?filter=provincias:provincia_id:codigo_provincia|nombre') !!}&parent=departamento_id:",
		{  parent: '#departamento_id', selected_value : '{{ $row["provincia_id"] }}' });
		
		$("#departamento_id").jCombo("{!! url('empresa/comboselect?filter=departamentos:departamento_id:nombre|codigo') !!}",
		{  selected_value : '{{ $row["departamento_id"] }}' });
		
		$("#tipo_documento_id").jCombo("{!! url('empresa/comboselect?filter=tipo_documento:tipo_documento_id:codigo|descripcion') !!}",
		{  selected_value : '{{ $row["tipo_documento_id"] }}' });
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("empresa/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop