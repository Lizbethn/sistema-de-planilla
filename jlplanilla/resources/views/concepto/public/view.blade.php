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
						<td width='30%' class='label-view text-right'>Itd Id</td>
						<td>{{ $row->itd_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Empresa Id</td>
						<td>{{ SiteHelpers::formatLookUp($row->empresa_id,'empresa_id','1:empresas:empresa_id:razon_social') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo</td>
						<td>{{ $row->tipo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Codigo</td>
						<td>{{ $row->codigo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Descripcion</td>
						<td>{{ $row->descripcion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Estado</td>
						<td>{{ $row->estado}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	