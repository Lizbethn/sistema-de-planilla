@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('empresa?return='.$return) }}" class="tips btn btn-xs btn-warning btn-sm btn-circle" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('empresa/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('empresa/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-info btn-sm btn-circle"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('empresa/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-info btn-sm btn-circle"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Empresa Id</td>
						<td>{{ $row->empresa_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Razon Social</td>
						<td>{{ $row->razon_social}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ruc</td>
						<td>{{ $row->ruc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Direccion</td>
						<td>{{ $row->direccion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Num Direccion</td>
						<td>{{ $row->num_direccion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sector Id</td>
						<td>{{ SiteHelpers::formatLookUp($row->sector_id,'sector_id','1:sectores:sector_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Urbanizacion</td>
						<td>{{ $row->urbanizacion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Distrito Id</td>
						<td>{{ SiteHelpers::formatLookUp($row->distrito_id,'distrito_id','1:distritos:distrito_id:codigo_distrito|nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Provincia Id</td>
						<td>{{ SiteHelpers::formatLookUp($row->provincia_id,'provincia_id','1:provincias:provincia_id:codigo_provincia|nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Departamento Id</td>
						<td>{{ SiteHelpers::formatLookUp($row->departamento_id,'departamento_id','1:departamentos:departamento_id:codigo|nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Telefono</td>
						<td>{{ $row->telefono}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Email</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pagina Web</td>
						<td>{{ $row->pagina_web}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cargo</td>
						<td>{{ $row->cargo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Documento Id</td>
						<td>{{ SiteHelpers::formatLookUp($row->tipo_documento_id,'tipo_documento_id','1:tipo_documento:tipo_documento_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Num Documento</td>
						<td>{{ $row->num_documento}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Representante</td>
						<td>{{ $row->representante}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop