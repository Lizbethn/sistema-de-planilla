

		 {!! Form::open(array('url'=>'porcentajeafp/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Porcentajesafp</legend>
				{!! Form::hidden('afp_porcentaje_id', $row['afp_porcentaje_id']) !!}					
									  <div class="form-group  " >
										<label for="Comision" class=" control-label col-md-4 text-left"> Comision </label>
										<div class="col-md-7">
										  <input  type='text' name='comision' id='comision' value='{{ $row['comision'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Comision Mixta" class=" control-label col-md-4 text-left"> Comision Mixta </label>
										<div class="col-md-7">
										  <input  type='text' name='comision_mixta' id='comision_mixta' value='{{ $row['comision_mixta'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Fondo" class=" control-label col-md-4 text-left"> Fondo </label>
										<div class="col-md-7">
										  <input  type='text' name='fondo' id='fondo' value='{{ $row['fondo'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Seguro" class=" control-label col-md-4 text-left"> Seguro </label>
										<div class="col-md-7">
										  <input  type='text' name='seguro' id='seguro' value='{{ $row['seguro'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tope" class=" control-label col-md-4 text-left"> Tope </label>
										<div class="col-md-7">
										  <input  type='text' name='tope' id='tope' value='{{ $row['tope'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Importe Tope" class=" control-label col-md-4 text-left"> Importe Tope </label>
										<div class="col-md-7">
										  <input  type='text' name='importe_tope' id='importe_tope' value='{{ $row['importe_tope'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Mes" class=" control-label col-md-4 text-left"> Mes </label>
										<div class="col-md-7">
										  <select name='mes_id' rows='5' id='mes_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Año" class=" control-label col-md-4 text-left"> Año </label>
										<div class="col-md-7">
										  <select name='año_id' rows='5' id='año_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#mes_id").jCombo("{!! url('porcentajeafp/comboselect?filter=meses:mes_id:mes') !!}",
		{  selected_value : '{{ $row["mes_id"] }}' });
		
		$("#año_id").jCombo("{!! url('porcentajeafp/comboselect?filter=anios:anio_id:anio') !!}",
		{  selected_value : '{{ $row["año_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
