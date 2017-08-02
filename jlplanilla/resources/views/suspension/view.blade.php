@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('suspension?return='.$return) }}" class="tips btn btn-xs btn-warning btn-sm btn-circle" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('suspension/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('suspension/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-info btn-sm btn-circle"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('suspension/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-info btn-sm btn-circle"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Suspension Id</td>
						<td>{{ $row->suspension_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id Trabajador</td>
						<td>{{ $row->id_trabajador}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Suspension</td>
						<td>{{ SiteHelpers::formatLookUp($row->tipo_suspension_id,'tipo_suspension_id','1:tipo_suspensiones:tipo_suspension_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha de Inicio</td>
						<td>{{ $row->fecha_inicio}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha de Fin</td>
						<td>{{ $row->fecha_fin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nº de Dias</td>
						<td>{{ $row->nro_dias}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop