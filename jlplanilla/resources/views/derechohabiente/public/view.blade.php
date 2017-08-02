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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	