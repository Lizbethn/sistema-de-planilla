@extends('layouts.app')


@section('content')

<script type="text/javascript" src="{{ asset('sximo/js/plugins/chartjs/Chart.min.js') }}"></script>
<div class="page-content row">

	<div class="page-content-wrapper m-t">  
	
<section class="ribon-sximo">
	<br><br><br><br>
		</section>


<div class="row">
				<div class="col-lg-1 col-md-6">
                    
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
							<br>
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-building-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <span class="h4 block m-t-xs"><strong>1 </strong> Paso</span>
									<div><span class="h2 block">Ingresar Empresa</span></div>
                                </div>
                            </div>
							<br>
                        </div>
                        <a href="{{ URL::to('empresa') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ingresar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
							<br>
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-hand-o-up fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <span class="h4 block m-t-xs"><strong>2 </strong> Paso</span>
									<div><span class="h2 block">Ingresar Concepto</span></div>
                                </div>
                            </div>
							<br>
                        </div>
                        <a href="{{ URL::to('concepto') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ingresar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
	            <div class="col-lg-1 col-md-6">
                   
                </div>
		</div>
		<div class="row">
			
			<div class="col-lg-1 col-md-6">
                    
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
							<br>
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <span class="h4 block m-t-xs">3 Paso</span>
                                    <div><span class="h2 block">Calcular Planilla </span></div>
                                </div>
                            </div>
							<br>
                        </div>
                        <a href="{{ URL::to('planilla') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ingresar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
							<br>
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-clipboard fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <span class="h4 block m-t-xs">4 Paso</span>
                                    <div> <span class="h2 block">Calcular Boleta de Pago</span></div>
                                </div>
                            </div>
							<br>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ingresar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
			<div class="col-lg-1 col-md-6">
                    
                </div>
            </div>

	
</div>	
	
</div>



@stop