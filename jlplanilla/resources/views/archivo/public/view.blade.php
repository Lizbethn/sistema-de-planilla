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
						<td width='30%' class='label-view text-right'>Archivos Id</td>
						<td>{{ $row->archivos_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Archivo Binario</td>
						<td>{{ $row->archivo_binario}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Archivo Nombre</td>
						<td>{!! SiteHelpers::formatRows($row->archivo_nombre,$fields['archivo_nombre'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Archivo Peso</td>
						<td>{!! SiteHelpers::formatRows($row->archivo_peso,$fields['archivo_peso'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Archivo Tipo</td>
						<td>{{ $row->archivo_tipo}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	