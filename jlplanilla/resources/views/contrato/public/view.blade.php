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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	