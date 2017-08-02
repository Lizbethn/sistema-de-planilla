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

		 {!! Form::open(array('url'=>'planilla/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Planillas</legend>
									
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
										<label for="Empresa Id" class=" control-label col-md-4 text-left"> Empresa Id </label>
										<div class="col-md-7">
										  <input  type='text' name='empresa_id' id='empresa_id' value='{{ $row['empresa_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Contrato Id" class=" control-label col-md-4 text-left"> Contrato Id </label>
										<div class="col-md-7">
										  <input  type='text' name='contrato_id' id='contrato_id' value='{{ $row['contrato_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Dias Periodo" class=" control-label col-md-4 text-left"> Dias Periodo </label>
										<div class="col-md-7">
										  <input  type='text' name='dias_periodo' id='dias_periodo' value='{{ $row['dias_periodo'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Asignacion" class=" control-label col-md-4 text-left"> Asignacion </label>
										<div class="col-md-7">
										  <input  type='text' name='asignacion' id='asignacion' value='{{ $row['asignacion'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Snp Afp Id" class=" control-label col-md-4 text-left"> Snp Afp Id </label>
										<div class="col-md-7">
										  <input  type='text' name='snp_afp_id' id='snp_afp_id' value='{{ $row['snp_afp_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Afp Id" class=" control-label col-md-4 text-left"> Afp Id </label>
										<div class="col-md-7">
										  <input  type='text' name='afp_id' id='afp_id' value='{{ $row['afp_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Comision Tipo Id" class=" control-label col-md-4 text-left"> Comision Tipo Id </label>
										<div class="col-md-7">
										  <input  type='text' name='comision_tipo_id' id='comision_tipo_id' value='{{ $row['comision_tipo_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Cussp" class=" control-label col-md-4 text-left"> Cussp </label>
										<div class="col-md-7">
										  <input  type='text' name='cussp' id='cussp' value='{{ $row['cussp'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Remuneracion Mensual" class=" control-label col-md-4 text-left"> Remuneracion Mensual </label>
										<div class="col-md-7">
										  <input  type='text' name='remuneracion_mensual' id='remuneracion_mensual' value='{{ $row['remuneracion_mensual'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Haber Basico" class=" control-label col-md-4 text-left"> Haber Basico </label>
										<div class="col-md-7">
										  <input  type='text' name='haber_basico' id='haber_basico' value='{{ $row['haber_basico'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Asignacion Familiar" class=" control-label col-md-4 text-left"> Asignacion Familiar </label>
										<div class="col-md-7">
										  <input  type='text' name='asignacion_familiar' id='asignacion_familiar' value='{{ $row['asignacion_familiar'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Horas Nocturnas" class=" control-label col-md-4 text-left"> Horas Nocturnas </label>
										<div class="col-md-7">
										  <input  type='text' name='horas_nocturnas' id='horas_nocturnas' value='{{ $row['horas_nocturnas'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Faltas" class=" control-label col-md-4 text-left"> Faltas </label>
										<div class="col-md-7">
										  <input  type='text' name='faltas' id='faltas' value='{{ $row['faltas'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Remuneracion Vacacional" class=" control-label col-md-4 text-left"> Remuneracion Vacacional </label>
										<div class="col-md-7">
										  <input  type='text' name='remuneracion_vacacional' id='remuneracion_vacacional' value='{{ $row['remuneracion_vacacional'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Descanso Medico" class=" control-label col-md-4 text-left"> Descanso Medico </label>
										<div class="col-md-7">
										  <input  type='text' name='descanso_medico' id='descanso_medico' value='{{ $row['descanso_medico'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Paternidad" class=" control-label col-md-4 text-left"> Paternidad </label>
										<div class="col-md-7">
										  <input  type='text' name='paternidad' id='paternidad' value='{{ $row['paternidad'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Enfermedad" class=" control-label col-md-4 text-left"> Enfermedad </label>
										<div class="col-md-7">
										  <input  type='text' name='enfermedad' id='enfermedad' value='{{ $row['enfermedad'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Maternidad" class=" control-label col-md-4 text-left"> Maternidad </label>
										<div class="col-md-7">
										  <input  type='text' name='maternidad' id='maternidad' value='{{ $row['maternidad'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Feriados" class=" control-label col-md-4 text-left"> Feriados </label>
										<div class="col-md-7">
										  <input  type='text' name='feriados' id='feriados' value='{{ $row['feriados'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Ingresos Afectos" class=" control-label col-md-4 text-left"> Ingresos Afectos </label>
										<div class="col-md-7">
										  <input  type='text' name='ingresos_afectos' id='ingresos_afectos' value='{{ $row['ingresos_afectos'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Movilidad Supeditada" class=" control-label col-md-4 text-left"> Movilidad Supeditada </label>
										<div class="col-md-7">
										  <input  type='text' name='movilidad_supeditada' id='movilidad_supeditada' value='{{ $row['movilidad_supeditada'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Condicion Trabajo" class=" control-label col-md-4 text-left"> Condicion Trabajo </label>
										<div class="col-md-7">
										  <input  type='text' name='condicion_trabajo' id='condicion_trabajo' value='{{ $row['condicion_trabajo'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Bono Productividad" class=" control-label col-md-4 text-left"> Bono Productividad </label>
										<div class="col-md-7">
										  <input  type='text' name='bono_productividad' id='bono_productividad' value='{{ $row['bono_productividad'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Gratificacion Extraordinaria" class=" control-label col-md-4 text-left"> Gratificacion Extraordinaria </label>
										<div class="col-md-7">
										  <input  type='text' name='gratificacion_extraordinaria' id='gratificacion_extraordinaria' value='{{ $row['gratificacion_extraordinaria'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Incentivos" class=" control-label col-md-4 text-left"> Incentivos </label>
										<div class="col-md-7">
										  <input  type='text' name='incentivos' id='incentivos' value='{{ $row['incentivos'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Canasta Navidad" class=" control-label col-md-4 text-left"> Canasta Navidad </label>
										<div class="col-md-7">
										  <input  type='text' name='canasta_navidad' id='canasta_navidad' value='{{ $row['canasta_navidad'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Total Ingresos" class=" control-label col-md-4 text-left"> Total Ingresos </label>
										<div class="col-md-7">
										  <input  type='text' name='total_ingresos' id='total_ingresos' value='{{ $row['total_ingresos'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Onp" class=" control-label col-md-4 text-left"> Onp </label>
										<div class="col-md-7">
										  <input  type='text' name='onp' id='onp' value='{{ $row['onp'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Afp Comision" class=" control-label col-md-4 text-left"> Afp Comision </label>
										<div class="col-md-7">
										  <input  type='text' name='afp_comision' id='afp_comision' value='{{ $row['afp_comision'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Afp Fondo" class=" control-label col-md-4 text-left"> Afp Fondo </label>
										<div class="col-md-7">
										  <input  type='text' name='afp_fondo' id='afp_fondo' value='{{ $row['afp_fondo'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Afp Seguro" class=" control-label col-md-4 text-left"> Afp Seguro </label>
										<div class="col-md-7">
										  <input  type='text' name='afp_seguro' id='afp_seguro' value='{{ $row['afp_seguro'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Afp" class=" control-label col-md-4 text-left"> Afp </label>
										<div class="col-md-7">
										  <input  type='text' name='afp' id='afp' value='{{ $row['afp'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Retencion 5ta Categoria" class=" control-label col-md-4 text-left"> Retencion 5ta Categoria </label>
										<div class="col-md-7">
										  <input  type='text' name='retencion_5ta_categoria' id='retencion_5ta_categoria' value='{{ $row['retencion_5ta_categoria'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Pago Vacaciones Bonos Incentivos" class=" control-label col-md-4 text-left"> Pago Vacaciones Bonos Incentivos </label>
										<div class="col-md-7">
										  <input  type='text' name='pago_vacaciones_bonos_incentivos' id='pago_vacaciones_bonos_incentivos' value='{{ $row['pago_vacaciones_bonos_incentivos'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Eps" class=" control-label col-md-4 text-left"> Eps </label>
										<div class="col-md-7">
										  <input  type='text' name='eps' id='eps' value='{{ $row['eps'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Adelanto Remuneracion" class=" control-label col-md-4 text-left"> Adelanto Remuneracion </label>
										<div class="col-md-7">
										  <input  type='text' name='adelanto_remuneracion' id='adelanto_remuneracion' value='{{ $row['adelanto_remuneracion'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Prestamos" class=" control-label col-md-4 text-left"> Prestamos </label>
										<div class="col-md-7">
										  <input  type='text' name='prestamos' id='prestamos' value='{{ $row['prestamos'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Entrega Canasta Navidad" class=" control-label col-md-4 text-left"> Entrega Canasta Navidad </label>
										<div class="col-md-7">
										  <input  type='text' name='entrega_canasta_navidad' id='entrega_canasta_navidad' value='{{ $row['entrega_canasta_navidad'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Total Descuentos" class=" control-label col-md-4 text-left"> Total Descuentos </label>
										<div class="col-md-7">
										  <input  type='text' name='total_descuentos' id='total_descuentos' value='{{ $row['total_descuentos'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Neto A Pagar" class=" control-label col-md-4 text-left"> Neto A Pagar </label>
										<div class="col-md-7">
										  <input  type='text' name='neto_a_pagar' id='neto_a_pagar' value='{{ $row['neto_a_pagar'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Essalud" class=" control-label col-md-4 text-left"> Essalud </label>
										<div class="col-md-7">
										  <input  type='text' name='essalud' id='essalud' value='{{ $row['essalud'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Centro Costo Id" class=" control-label col-md-4 text-left"> Centro Costo Id </label>
										<div class="col-md-7">
										  <input  type='text' name='centro_costo_id' id='centro_costo_id' value='{{ $row['centro_costo_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Mes" class=" control-label col-md-4 text-left"> Mes </label>
										<div class="col-md-7">
										  <input  type='text' name='mes' id='mes' value='{{ $row['mes'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Anio" class=" control-label col-md-4 text-left"> Anio </label>
										<div class="col-md-7">
										  <input  type='text' name='anio' id='anio' value='{{ $row['anio'] }}' 
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
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="icon-checkmark-circle2"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="icon-bubble-check"></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('planilla?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("planilla/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop