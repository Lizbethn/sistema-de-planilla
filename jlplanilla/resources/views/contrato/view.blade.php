@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('contrato?return='.$return) }}" class="tips btn btn-xs btn-warning btn-sm btn-circle" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('contrato/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('contrato/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-info btn-sm btn-circle"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('contrato/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-info btn-sm btn-circle"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Contrato</td>
						<td>{{ SiteHelpers::formatLookUp($row->tipo_contrato_id,'tipo_contrato_id','1:tipo_contrato:tipo_contrato_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Inicio Contrato</td>
						<td>{{ $row->inicio_contrato}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fin Contrato</td>
						<td>{{ $row->fin_contrato}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Ingreso</td>
						<td>{{ $row->fecha_ingreso}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sueldo</td>
						<td>{{ $row->sueldo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Renta Quinta</td>
						<td>{{ $row->renta_quinta}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comentario</td>
						<td>{{ $row->comentario}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Horario Entrada</td>
						<td>{{ $row->horario_entrada}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Horario Salida</td>
						<td>{{ $row->horario_salida}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Horario Almuerzo I</td>
						<td>{{ $row->horario_almuerzo_i}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Horario Almuerzo F</td>
						<td>{{ $row->horario_almuerzo_f}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Archivo</td>
						<td>{!! SiteHelpers::formatRows($row->archivo,$fields['archivo'],$row ) !!} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop