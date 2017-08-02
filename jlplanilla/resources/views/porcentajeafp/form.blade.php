@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->

 
 	<div class="page-content-wrapper m-t">


<div class="sbox">
	<div class="sbox-title"> 
		<div class="sbox-tools pull-left" >
			<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-xs btn-default"  title="{{ Lang::get('core.btn_back') }}" ><i class="fa  fa-arrow-left"></i></a> 
		</div>
		<div class="sbox-tools " >
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div> 

	</div>
	<div class="sbox-content"> 	

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	

		 {!! Form::open(array('url'=>'porcentajeafp/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Porcentajesafp</legend>
				{!! Form::hidden('afp_porcentaje_id', $row['afp_porcentaje_id']) !!}					
					<div class="panel panel-success"> 
								<div class="panel-heading"> 
									<h3 class="panel-title">Administradora AFP</h3> 
								</div> 
								
								<div class="panel-body"> 
								<div class="form-group  " >
										<label for="Fondo" class=" control-label col-md-1 text-left"> Fondo </label>
										<div class="col-md-1">
										  <input  type='text' name='fondo' id='fondo' value='{{ $row['fondo'] }}' 
						     class='form-control ' /> 
										 </div> 
									
								
										<label for="Comision" class=" control-label col-md-1 text-left"> Comision/Flujo </label>
										<div class="col-md-1">
										  <input  type='text' name='comision' id='comision' value='{{ $row['comision'] }}' 
						     class='form-control ' /> 
										 </div> 
									
									
										<label for="Seguro" class=" control-label col-md-1 text-left"> Seguro </label>
										<div class="col-md-1">
										  <input  type='text' name='seguro' id='seguro' value='{{ $row['seguro'] }}' 
						     class='form-control ' /> 
										 </div> 
									
									<label for="Comision Mixta" class=" control-label col-md-2 text-left"> Comision Mixta </label>
										<div class="col-md-1">
										  <input  type='text' name='comision_mixta' id='comision_mixta' value='{{ $row['comision_mixta'] }}' 
						     class='form-control ' /> 
										 </div> 
									</div>
									<div class="form-group  " >
									<label for="Tope" class=" control-label col-md-1 text-left"> Tope </label>
										<div class="col-md-1">
										  <input  type='text' name='tope' id='tope' value='{{ $row['tope'] }}' 
						     class='form-control ' /> 
										 </div> 
									
									<label for="Importe Tope" class=" control-label col-md-1 text-left"> Importe Tope </label>
										<div class="col-md-1">
										  <input  type='text' name='importe_tope' id='importe_tope' value='{{ $row['importe_tope'] }}' 
						     class='form-control ' /> 
										 </div> 
									
									<label for="Mes Id" class=" control-label col-md-1 text-left"> Mes</label>
										<div class="col-md-3">
										  <select name='mes_id' rows='5' id='mes_id' class='select2 '   ></select> 
										 </div> 
										 
										<label for="Año Id" class=" control-label col-md-1 text-left"> Año</label>
										<div class="col-md-3">
										  <select name='año_id' rows='5' id='año_id' class='select2 '   ></select> 
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
					<button type="button" onclick="location.href='{{ URL::to('porcentajeafp?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#mes_id").jCombo("{!! url('porcentajeafp/comboselect?filter=meses:mes_id:mes') !!}",
		{  selected_value : '{{ $row["mes_id"] }}' });
		
		$("#año_id").jCombo("{!! url('porcentajeafp/comboselect?filter=anios:anio_id:anio') !!}",
		{  selected_value : '{{ $row["año_id"] }}' });
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("porcentajeafp/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop