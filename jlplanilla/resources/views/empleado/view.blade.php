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
	   		<a href="{{ url('empleado/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
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

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Empresa Id</td>
						<td>{{ SiteHelpers::formatLookUp($row->empresa_id,'empresa_id','1:empresas:empresa_id:razon_social') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id Trabajador</td>
						<td>{{ $row->id_trabajador}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Codigo Trabajador</td>
						<td>{{ $row->codigo_trabajador}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Avatar</td>
						<td>{!! SiteHelpers::formatRows($row->avatar,$fields['avatar'],$row ) !!} </td>
						
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
						<td>{{ SiteHelpers::formatLookUp($row->tipo_doc,'tipo_doc','1:tipo_documento:tipo_documento_id:descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Num Doc</td>
						<td>{{ $row->num_doc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dpto Nacimiento</td>
						<td>{{ SiteHelpers::formatLookUp($row->dpto_nacimiento,'dpto_nacimiento','1:departamentos:departamento_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prov Nacimiento</td>
						<td>{{ SiteHelpers::formatLookUp($row->prov_nacimiento,'prov_nacimiento','1:provincias:provincia_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dist Nacimiento</td>
						<td>{{ SiteHelpers::formatLookUp($row->dist_nacimiento,'dist_nacimiento','1:distritos:distrito_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Nacimiento</td>
						<td>{{ date('d-m-Y',strtotime($row->fecha_nacimiento)) }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nacionalidad</td>
						<td>{{ SiteHelpers::formatLookUp($row->nacionalidad,'nacionalidad','1:nacionalidad:nacionalidad_id:descripcion') }} </td>
						
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
						<td>{{ SiteHelpers::formatLookUp($row->categoria,'categoria','1:categorias:categoria_id:nom_categoria') }} </td>
						
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
						<td>{{ SiteHelpers::formatLookUp($row->tipo_via,'tipo_via','1:tipo_via:tipo_via_id:nombre') }} </td>
						
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
						<td>{{ SiteHelpers::formatLookUp($row->tipo_zona,'tipo_zona','1:tipo_zona:tipo_zona_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Zona</td>
						<td>{{ $row->zona}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dpto Ubigeo</td>
						<td>{{ SiteHelpers::formatLookUp($row->dpto_ubigeo,'dpto_ubigeo','1:departamentos:departamento_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prov Ubigeo</td>
						<td>{{ SiteHelpers::formatLookUp($row->prov_ubigeo,'prov_ubigeo','1:provincias:provincia_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dist Ubigeo</td>
						<td>{{ SiteHelpers::formatLookUp($row->dist_ubigeo,'dist_ubigeo','1:distritos:distrito_id:nombre') }} </td>
						
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
						<td>{{ SiteHelpers::formatLookUp($row->ocupacion,'ocupacion','1:ocupacion:ocupacion_id:descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cargo Empresa</td>
						<td>{{ $row->cargo_empresa}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Estado</td>
						<td>{{ SiteHelpers::formatLookUp($row->estado_empleado_id,'estado_empleado_id','1:estado_empleados:estado_empleado_id:nombre') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Unidad</td>
						<td>{{ $row->unidad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Centro Costo2</td>
						<td>{{ SiteHelpers::formatLookUp($row->centro_costo2,'centro_costo2','1:centro_costos:centro_costo_id:centro_costo') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Centro Costo</td>
						<td>{{ SiteHelpers::formatLookUp($row->centro_costo,'centro_costo','1:centro_costos:centro_costo_id:centro_costo') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Horario Nocturno</td>
						<td>{{ $row->horario_nocturno}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Discapacidad</td>
						<td>{{ $row->discapacidad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Inscripcion</td>
						<td>{{ date('d-m-Y',strtotime($row->fecha_inscripcion)) }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Afp Id</td>
						<td>{{ $row->afp_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>N Essalud</td>
						<td>{{ $row->n_essalud}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Snp Afp Id</td>
						<td>{{ $row->snp_afp_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>N Cuspp</td>
						<td>{{ $row->n_cuspp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comision Tipo Id</td>
						<td>{{ $row->comision_tipo_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Centro Riesgo</td>
						<td>{{ $row->centro_riesgo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tasa</td>
						<td>{{ $row->tasa}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Riesgo</td>
						<td>{{ $row->tipo_riesgo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Contrato</td>
						<td>{{ SiteHelpers::formatLookUp($row->tipo_contrato,'tipo_contrato','1:tipo_contrato:tipo_contrato_id:descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Inicio Contrato</td>
						<td>{{ date('d-m-Y',strtotime($row->fecha_inicio_contrato)) }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Fin Contrato</td>
						<td>{{ date('d-m-Y',strtotime($row->fecha_fin_contrato)) }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Reg Alternativo</td>
						<td>{{ $row->reg_alternativo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Servicios Propios</td>
						<td>{{ $row->servicios_propios}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Situacion Laboral</td>
						<td>{{ $row->situacion_laboral}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Periocidad</td>
						<td>{{ $row->periocidad}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Situacion Especial</td>
						<td>{{ SiteHelpers::formatLookUp($row->situacion_especial,'situacion_especial','1:situacion_especial:situacion_especial_id:descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Pago</td>
						<td>{{ SiteHelpers::formatLookUp($row->tipo_pago,'tipo_pago','1:tipo_pago:tipo_pago_id:descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Motivo Fin Periodo</td>
						<td>{{ SiteHelpers::formatLookUp($row->motivo_fin_periodo,'motivo_fin_periodo','1:motivo_fin_periodo:fin_id:descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Banco</td>
						<td>{{ SiteHelpers::formatLookUp($row->banco,'banco','1:bancos:banco_id:descripcion') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tipo Cuenta</td>
						<td>{{ SiteHelpers::formatLookUp($row->tipo_cuenta,'tipo_cuenta','1:tipo_cuenta:tipo_cuenta_id:descripcion') }} </td>
						
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
						<td>{{ SiteHelpers::formatLookUp($row->banco_cts,'banco_cts','1:bancos:banco_id:descripcion') }} </td>
						
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
						<td>{{ SiteHelpers::formatLookUp($row->tipo_boletas,'tipo_boletas','1:tipo_boleta:tipo_boleta_id:descripcion') }} </td>
						
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