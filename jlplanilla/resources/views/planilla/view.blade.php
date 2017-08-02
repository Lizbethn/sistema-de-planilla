@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('planilla?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('planilla/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('planilla/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('planilla/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Planilla Id</td>
						<td>{{ $row->planilla_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id Trabajador</td>
						<td>{{ $row->id_trabajador}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Empresa Id</td>
						<td>{{ $row->empresa_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Contrato Id</td>
						<td>{{ $row->contrato_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dias Periodo</td>
						<td>{{ $row->dias_periodo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Asignacion</td>
						<td>{{ $row->asignacion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Snp Afp Id</td>
						<td>{{ $row->snp_afp_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Afp Id</td>
						<td>{{ $row->afp_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comision Tipo Id</td>
						<td>{{ $row->comision_tipo_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cussp</td>
						<td>{{ $row->cussp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Remuneracion Mensual</td>
						<td>{{ $row->remuneracion_mensual}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Haber Basico</td>
						<td>{{ $row->haber_basico}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Asignacion Familiar</td>
						<td>{{ $row->asignacion_familiar}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Horas Nocturnas</td>
						<td>{{ $row->horas_nocturnas}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Faltas</td>
						<td>{{ $row->faltas}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Remuneracion Vacacional</td>
						<td>{{ $row->remuneracion_vacacional}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Descanso Medico</td>
						<td>{{ $row->descanso_medico}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Paternidad</td>
						<td>{{ $row->paternidad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Enfermedad</td>
						<td>{{ $row->enfermedad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Maternidad</td>
						<td>{{ $row->maternidad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Feriados</td>
						<td>{{ $row->feriados}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ingresos Afectos</td>
						<td>{{ $row->ingresos_afectos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Movilidad Supeditada</td>
						<td>{{ $row->movilidad_supeditada}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Condicion Trabajo</td>
						<td>{{ $row->condicion_trabajo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Bono Productividad</td>
						<td>{{ $row->bono_productividad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gratificacion Extraordinaria</td>
						<td>{{ $row->gratificacion_extraordinaria}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Incentivos</td>
						<td>{{ $row->incentivos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Canasta Navidad</td>
						<td>{{ $row->canasta_navidad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Total Ingresos</td>
						<td>{{ $row->total_ingresos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Onp</td>
						<td>{{ $row->onp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Afp Comision</td>
						<td>{{ $row->afp_comision}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Afp Fondo</td>
						<td>{{ $row->afp_fondo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Afp Seguro</td>
						<td>{{ $row->afp_seguro}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Afp</td>
						<td>{{ $row->afp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Retencion 5ta Categoria</td>
						<td>{{ $row->retencion_5ta_categoria}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pago Vacaciones Bonos Incentivos</td>
						<td>{{ $row->pago_vacaciones_bonos_incentivos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Eps</td>
						<td>{{ $row->eps}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Adelanto Remuneracion</td>
						<td>{{ $row->adelanto_remuneracion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prestamos</td>
						<td>{{ $row->prestamos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Entrega Canasta Navidad</td>
						<td>{{ $row->entrega_canasta_navidad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Total Descuentos</td>
						<td>{{ $row->total_descuentos}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Neto A Pagar</td>
						<td>{{ $row->neto_a_pagar}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Essalud</td>
						<td>{{ $row->essalud}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Centro Costo Id</td>
						<td>{{ $row->centro_costo_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Mes</td>
						<td>{{ $row->mes}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Anio</td>
						<td>{{ $row->anio}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop