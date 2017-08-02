@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
			



	</div>
	<div class="sbox-content" > 	

		
		
		<section class="ribon-sximo"> 
	
	 <div style="text-align: center;" class="sbox-content"> 
    @if (Session::has('message'))
	            <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif 
	  <a href="{{ URL::to('calculo_planilla')}}" class="btn btn-primary">Calcular Planilla</a>
	 </div>
</section>  

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop