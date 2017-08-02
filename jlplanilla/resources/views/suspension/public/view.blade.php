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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	