@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('dato?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('dato/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('dato/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('dato/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Id Trabajador</td>
						<td>{{ $row->id_trabajador}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Codigo Trabajador</td>
						<td>{{ $row->codigo_trabajador}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Empresa Id</td>
						<td>{{ $row->empresa_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Avatar</td>
						<td>{{ $row->avatar}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ape Paterno</td>
						<td>{{ $row->ape_paterno}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ape Materno</td>
						<td>{{ $row->ape_materno}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nombres</td>
						<td>{{ $row->nombres}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Doc</td>
						<td>{{ $row->tipo_doc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Num Doc</td>
						<td>{{ $row->num_doc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dpto Nacimiento</td>
						<td>{{ $row->dpto_nacimiento}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prov Nacimiento</td>
						<td>{{ $row->prov_nacimiento}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dist Nacimiento</td>
						<td>{{ $row->dist_nacimiento}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha de Nacimiento</td>
						<td>{{ $row->fecha_nacimiento}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nacionalidad</td>
						<td>{{ SiteHelpers::formatLookUp($row->nacionalidad,'nacionalidad','1:nacionalidad:nacionalidad_id:numero|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sexo</td>
						<td>{{ $row->sexo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Estado Civil</td>
						<td>{{ $row->estado_civil}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Carga Familiar</td>
						<td>{{ $row->carga_familiar}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Categoria</td>
						<td>{{ SiteHelpers::formatLookUp($row->categoria,'categoria','1:categorias:categoria_id:tipo_categoria|nom_categoria') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Telefono</td>
						<td>{{ $row->telefono}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Celular</td>
						<td>{{ $row->celular}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Email</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Via</td>
						<td>{{ $row->tipo_via}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Via</td>
						<td>{{ $row->via}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Numero Direccion</td>
						<td>{{ $row->numero_direccion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dpto</td>
						<td>{{ $row->dpto}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Interior</td>
						<td>{{ $row->interior}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Block</td>
						<td>{{ $row->block}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Mz</td>
						<td>{{ $row->mz}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Lote</td>
						<td>{{ $row->lote}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Km</td>
						<td>{{ $row->km}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Etapa</td>
						<td>{{ $row->etapa}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Referencia</td>
						<td>{{ $row->referencia}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Zona</td>
						<td>{{ $row->tipo_zona}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Zona</td>
						<td>{{ $row->zona}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dpto Ubigeo</td>
						<td>{{ $row->dpto_ubigeo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prov Ubigeo</td>
						<td>{{ $row->prov_ubigeo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dist Ubigeo</td>
						<td>{{ $row->dist_ubigeo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Recibir Cts</td>
						<td>{{ $row->recibir_cts}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Flag Validar</td>
						<td>{{ $row->flag_validar}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Trabajador</td>
						<td>{{ SiteHelpers::formatLookUp($row->tipo_trabajador,'tipo_trabajador','1:tipo_trabajador:tipo_trabajador_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Categoria Ocupacional</td>
						<td>{{ SiteHelpers::formatLookUp($row->categoria_ocupacional,'categoria_ocupacional','1:categoria_ocupacional:cat_ocupacional_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nivel Educativo</td>
						<td>{{ SiteHelpers::formatLookUp($row->nivel_educativo,'nivel_educativo','1:nivel_educativo:nivel_educativo_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ocupacion</td>
						<td>{{ SiteHelpers::formatLookUp($row->ocupacion,'ocupacion','1:ocupacion:ocupacion_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cargo Empresa</td>
						<td>{{ $row->cargo_empresa}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Unidad</td>
						<td>{{ $row->unidad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Estado Empleado Id</td>
						<td>{{ $row->estado_empleado_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Centro Costo</td>
						<td>{{ $row->centro_costo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Trabajador sujeto a horario nocturno</td>
						<td>{{ $row->horario_nocturno}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Discapacidad</td>
						<td>{{ $row->discapacidad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha de Inscripción del régimen pensinoario</td>
						<td>{{ $row->fecha_inscripcion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>N Essalud</td>
						<td>{{ $row->n_essalud}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nº CUSPP</td>
						<td>{{ $row->n_cuspp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Centro Riesgo</td>
						<td>{{ $row->centro_riesgo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Afp</td>
						<td>{{ SiteHelpers::formatLookUp($row->afp_id,'afp_id','1:afps:afp_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tasa</td>
						<td>{{ $row->tasa}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comision Tipo Id</td>
						<td>{{ SiteHelpers::formatLookUp($row->comision_tipo_id,'comision_tipo_id','1:comision_tipos:comision_tipo_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Regimen Pensionario</td>
						<td>{{ SiteHelpers::formatLookUp($row->snp_afp_id,'snp_afp_id','1:snp_afps:snp_afp_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Riesgo</td>
						<td>{{ $row->tipo_riesgo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Contrato</td>
						<td>{{ $row->tipo_contrato}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Inicio Contrato</td>
						<td>{{ $row->fecha_inicio_contrato}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Fin Contrato</td>
						<td>{{ $row->fecha_fin_contrato}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Reg Alternativo</td>
						<td>{{ $row->reg_alternativo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Afiliado a EPS / Servicios Propios</td>
						<td>{{ SiteHelpers::formatLookUp($row->servicios_propios,'servicios_propios','1:servicios_propios:servicios_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Situacion del trabajador o pensionista</td>
						<td>{{ SiteHelpers::formatLookUp($row->situacion_laboral,'situacion_laboral','1:situacion_laboral:laboral_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Periocidad de la remuneración o retribución</td>
						<td>{{ SiteHelpers::formatLookUp($row->periocidad,'periocidad','1:periocidad:periodo_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Situacion Especial del trabajador</td>
						<td>{{ SiteHelpers::formatLookUp($row->situacion_especial,'situacion_especial','1:situacion_especial:situacion_especial_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo de Pago</td>
						<td>{{ SiteHelpers::formatLookUp($row->tipo_pago,'tipo_pago','1:tipo_pago:tipo_pago_id:codigo|descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Motivo Fin Periodo</td>
						<td>{{ $row->motivo_fin_periodo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Banco</td>
						<td>{{ $row->banco}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Cuenta</td>
						<td>{{ $row->tipo_cuenta}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Num Cuenta</td>
						<td>{{ $row->num_cuenta}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Moneda</td>
						<td>{{ $row->moneda}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Banco Cts</td>
						<td>{{ $row->banco_cts}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Num Cuenta Cts</td>
						<td>{{ $row->num_cuenta_cts}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Moneda Cts</td>
						<td>{{ $row->moneda_cts}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Boletas</td>
						<td>{{ $row->tipo_boletas}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Complementario</td>
						<td>{{ $row->complementario}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Regimen Complementario</td>
						<td>{{ $row->regimen_complementario}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sctr Salud</td>
						<td>{{ $row->sctr_salud}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sctr Pension</td>
						<td>{{ $row->sctr_pension}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Superior Inmediato</td>
						<td>{{ $row->superior_inmediato}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Eps Ruc</td>
						<td>{{ $row->eps_ruc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sujeto A</td>
						<td>{{ $row->sujeto_a}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Quinta Categoria</td>
						<td>{{ $row->quinta_categoria}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop