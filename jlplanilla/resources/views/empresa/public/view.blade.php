<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	