

		 {!! Form::open(array('url'=>'periodo/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Periodos</legend>
				{!! Form::hidden('periodo_id', $row['periodo_id']) !!}					
									  <div class="form-group  " >
										<label for="Mes Id" class=" control-label col-md-4 text-left"> Mes Id </label>
										<div class="col-md-7">
										  <select name='mes_id' rows='5' id='mes_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Anio Id" class=" control-label col-md-4 text-left"> Anio Id </label>
										<div class="col-md-7">
										  <select name='anio_id' rows='5' id='anio_id' class='select2 '   ></select> 
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
		
		
		$("#mes_id").jCombo("{!! url('periodo/comboselect?filter=meses:mes_id:mes') !!}",
		{  selected_value : '{{ $row["mes_id"] }}' });
		
		$("#anio_id").jCombo("{!! url('periodo/comboselect?filter=anios:anio_id:anio') !!}",
		{  selected_value : '{{ $row["anio_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
