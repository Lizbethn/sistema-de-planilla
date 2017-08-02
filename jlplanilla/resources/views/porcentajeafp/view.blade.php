@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('porcentajeafp?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('porcentajeafp/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('porcentajeafp/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('porcentajeafp/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Comision</td>
						<td>{{ $row->comision}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comision Mixta</td>
						<td>{{ $row->comision_mixta}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fondo</td>
						<td>{{ $row->fondo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seguro</td>
						<td>{{ $row->seguro}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tope</td>
						<td>{{ $row->tope}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Importe Tope</td>
						<td>{{ $row->importe_tope}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Mes</td>
						<td>{{ SiteHelpers::formatLookUp($row->mes_id,'mes_id','1:meses:mes_id:mes') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Año</td>
						<td>{{ SiteHelpers::formatLookUp($row->año_id,'año_id','1:anios:anio_id:anio') }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop