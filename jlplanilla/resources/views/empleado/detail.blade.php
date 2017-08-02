@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('empleado?return='.$return) }}" class="tips btn btn-xs btn-warning btn-sm btn-circle" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('empleado/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-info btn-sm btn-circle"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('empleado/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-info btn-sm btn-circle"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

			<span class="h2 block m-t-xs">{!! SiteHelpers::showUploadedFile($row->avatar,'/uploads/empleados/') !!}<strong>{{ $row->ape_paterno}} {{ $row->ape_materno}} , {{ $row->nombres}} </strong></span>
		<span class="h5 block m-t-xs">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  DNI: {{ $row->num_doc}}</span>
		<br><br>
		
		<section class="ribon-sximo"> 
	<div class="row m-l-none m-r-none m-t  white-bg shortcut ribon "  >
		<div class="col-sm-6 col-md-4  p-sm ribon-users">
			<span class="pull-left m-r-sm "><i class="icon-users"></i></span> 
			<a href="{{ URL::to('empleado/update/'.$row->id_trabajador.'?return='.$return) }}" class="clear">
				<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.general') }}  </strong>
				</span> <small>  {{ Lang::get('core.general_info') }}</small>
			</a>
		</div>
		<div class="col-sm-6 col-md-4   p-sm ribon-white">
			<span class="pull-left m-r-sm ">	<i class="icon-folder-open"></i></span>
			<a href="{{ URL::to('dato/update/'.$row->id_trabajador.'?return='.$return) }}" class="clear">
				<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.datos') }}</strong>
				</span> <small >   {{ Lang::get('core.datos_info') }} </small> 
			</a>
		</div>
		<div class="col-sm-6 col-md-4   p-sm ribon-users">
			<span class="pull-left m-r-sm ">	<i class="fa fa-file-text"></i></span>
			<a href="{{ URL::to('contrato') }}" class="clear">
			<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.contratos') }} </strong></span>
			<small>  {{ Lang::get('core.contratos_info') }}  </small> </a>
		</div>
	</div>
			
	<div class="row m-l-none m-r-none m-t  white-bg shortcut ribon "  >
		<div class="col-sm-6 col-md-4  p-sm ribon-users">
			<span class="pull-left m-r-sm "><i class="icon-phone"></i></span> 
			<a href="{{ URL::to('sximo/module') }}" class="clear">
				<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.telefono') }}  </strong>
				</span> <small>  {{ Lang::get('core.telefono_info') }}</small>
			</a>
		</div>
		<div class="col-sm-6 col-md-4   p-sm ribon-white">
			<span class="pull-left m-r-sm ">	<i class="icon-steam2"></i></span>
			<a href="{{ URL::to('derechohabiente') }}" class="clear">
				<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.derechohabiente') }}</strong>
				</span> <small >   {{ Lang::get('core.derechohabiente_info') }} </small> 
			</a>
		</div>
		<div class="col-sm-6 col-md-4  p-sm ribon-users">
			<span class="pull-left m-r-sm ">	<i class="icon-stats-down"></i></span>
			<a href="{{ URL::to('suspension') }}" class="clear">
			<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.suspensiones') }}</strong>
			</span> <small >  {{ Lang::get('core.suspensiones_info') }} </small> </a>
		</div>
	</div> 
</section>  

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop