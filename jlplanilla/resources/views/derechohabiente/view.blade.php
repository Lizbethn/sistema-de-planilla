@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('derechohabiente?return='.$return) }}" class=" tips btn btn-xs btn-warning btn-sm btn-circle" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('derechohabiente/update/'.$id.'?return='.$return) }}" class=" tips btn btn-xs btn-info btn-sm btn-circle" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('derechohabiente/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class=" tips btn btn-xs btn-info btn-sm btn-circle"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('derechohabiente/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class=" tips btn btn-xs btn-info btn-sm btn-circle"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class=" tips btn btn-xs btn-info btn-sm btn-circle" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Derechohabiente </td>
						<td>{{ $row->derechohabiente_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id Trabajador</td>
						<td>{{ $row->id_trabajador}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Documento</td>
						<td>{{ SiteHelpers::formatLookUp($row->tipo_documento_id,'tipo_documento_id','1:tipo_documento:tipo_documento_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nº Doc</td>
						<td>{{ $row->n_documento}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Teléfono</td>
						<td>{{ $row->telelfono}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Nacimiento</td>
						<td>{{ $row->fecha_nacimiento}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sexo</td>
						<td>{{ $row->sexo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Vinculo Familiar</td>
						<td>{{ SiteHelpers::formatLookUp($row->vinculo_familiar_id,'vinculo_familiar_id','1:vinculo_familiar:vinculo_familiar_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ap Paterno</td>
						<td>{{ $row->ap_paterno}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ap Materno</td>
						<td>{{ $row->ap_materno}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nombres</td>
						<td>{{ $row->nombres}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Alta</td>
						<td>{{ $row->fecha_alta}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Estado</td>
						<td>{{ SiteHelpers::formatLookUp($row->estado_empleado_id,'estado_empleado_id','1:estado_empleados:estado_empleado_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Incapacidad</td>
						<td>{{ $row->incapacidad}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop