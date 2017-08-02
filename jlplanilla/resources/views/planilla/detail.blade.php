@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
			

		<div class="sbox-tools " >
			
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		
		
		<section class="ribon-sximo"> 
	<div class="row m-l-none m-r-none m-t  white-bg shortcut ribon "  >
		<div class="col-sm-6 col-md-4  p-sm ribon-module">
			<span class="pull-left m-r-sm "><i class="fa fa-info-circle"></i></span> 
			<a href="{{ URL::to('planillageneracion') }}" class="clear">
				<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.general_planilla') }}  </strong>
				</span> <small>  {{ Lang::get('core.general_planilla_info') }}</small>
			</a>
		</div>
		<div class="col-sm-6 col-md-4   p-sm ribon-white">
			<span class="pull-left m-r-sm ">	<i class="fa fa-pencil-square-o"></i></span>
			<a href="{{ URL::to('editable') }}" class="clear">
				<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.conceptos_editables') }}</strong>
				</span> <small >   {{ Lang::get('core.conceptos_editables_info') }} </small> 
			</a>
		</div>
		<div class="col-sm-6 col-md-4   p-sm ribon-module">
			<span class="pull-left m-r-sm ">	<i class="icon-plus-circle2"></i></span>
			<a href="{{ URL::to('concepto') }}" class="clear">
			<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.conceptos') }}</strong>
				</span> <small >   {{ Lang::get('core.conceptos_info') }} </small> 
			</a>
		</div>
	</div>
			
	<div class="row m-l-none m-r-none m-t  white-bg shortcut ribon "  >
		<div class="col-sm-6 col-md-4  p-sm ribon-module">
			<span class="pull-left m-r-sm ">	<i class="fa fa-minus-circle"></i></span>
			<a href="{{ URL::to('afectacion') }}" class="clear">
				<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.afectaciones') }} </strong></span>
			<small>  {{ Lang::get('core.afectaciones_info') }}  </small> </a>
			</a>
		</div>
		<div class="col-sm-6 col-md-4   p-sm ribon-white">
			<span class="pull-left m-r-sm ">	<i class="fa fa-calendar"></i></span>
			<a href="{{ URL::to('periodo') }}" class="clear">
				<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.periodos') }}</strong>
				</span> <small >   {{ Lang::get('core.periodos_info') }} </small> 
			</a>
		</div>
		<div class="col-sm-6 col-md-4  p-sm ribon-module">
			<span class="pull-left m-r-sm "><i class="icon-users"></i></span> 
			<a href="{{ URL::to('sximo/module') }}" class="clear">
				<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.personas_asignadas') }}  </strong>
				</span> <small>  {{ Lang::get('core.personas_asignadas_info') }}</small>
			</a>
		</div>
	</div> 
</section>  

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop