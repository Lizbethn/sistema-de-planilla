

		 {!! Form::open(array('url'=>'afectacion/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Afectaciones</legend>
									
									  <div class="form-group  " >
										<label for="Itd Id" class=" control-label col-md-4 text-left"> Itd Id </label>
										<div class="col-md-7">
										  <input  type='text' name='itd_id' id='itd_id' value='{{ $row['itd_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Empresa Id" class=" control-label col-md-4 text-left"> Empresa Id </label>
										<div class="col-md-7">
										  <input  type='text' name='empresa_id' id='empresa_id' value='{{ $row['empresa_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Codigo" class=" control-label col-md-4 text-left"> Codigo </label>
										<div class="col-md-7">
										  <input  type='text' name='codigo' id='codigo' value='{{ $row['codigo'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tipo" class=" control-label col-md-4 text-left"> Tipo </label>
										<div class="col-md-7">
										  <textarea name='tipo' rows='5' id='tipo' class='form-control '  
				           >{{ $row['tipo'] }}</textarea> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Descripcion" class=" control-label col-md-4 text-left"> Descripcion </label>
										<div class="col-md-7">
										  <input  type='text' name='descripcion' id='descripcion' value='{{ $row['descripcion'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Estado" class=" control-label col-md-4 text-left"> Estado </label>
										<div class="col-md-7">
										  <input  type='text' name='estado' id='estado' value='{{ $row['estado'] }}' 
						     class='form-control ' /> 
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
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
