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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	