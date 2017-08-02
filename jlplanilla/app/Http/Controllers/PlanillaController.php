<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Planilla;
use App\Models\Concepto;
use App\Models\Periodo;
use App\Models\Empleado;
use App\Models\Contrato;
use App\Models\Suspension;
use App\Models\Porcentajeafp;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ;
use DB;
use Session;
use Maatwebsite\Excel\Facades\Excel;


class PlanillaController extends Controller {

	protected $layout = "layouts.main";
	protected $data = array();	
	public $module = 'planilla';
	static $per_page	= '10';

	public function __construct()
	{
		
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->model = new Planilla();
		
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = $this->model->validAccess($this->info['id']);
	
		$this->data = array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'=> 'planilla',
			'return'	=> self::returnUrl()
			
		);
		
		\App::setLocale(CNF_LANG);
		if (defined('CNF_MULTILANG') && CNF_MULTILANG == '1') {

		$lang = (\Session::get('lang') != "" ? \Session::get('lang') : CNF_LANG);
		\App::setLocale($lang);
		}  


		
	}

	public function getIndex( Request $request )
	{

		if($this->access['is_view'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');

		$sort = (!is_null($request->input('sort')) ? $request->input('sort') : 'planilla_id'); 
		$order = (!is_null($request->input('order')) ? $request->input('order') : 'asc');
		// End Filter sort and order for query 
		// Filter Search for query		
		$filter = '';	
		if(!is_null($request->input('search')))
		{
			$search = 	$this->buildSearch('maps');
			$filter = $search['param'];
			$this->data['search_map'] = $search['maps'];
		} 

		
		$page = $request->input('page', 1);
		$params = array(
			'page'		=> $page ,
			'limit'		=> (!is_null($request->input('rows')) ? filter_var($request->input('rows'),FILTER_VALIDATE_INT) : static::$per_page ) ,
			'sort'		=> $sort ,
			'order'		=> $order,
			'params'	=> $filter,
			'global'	=> (isset($this->access['is_global']) ? $this->access['is_global'] : 0 )
		);
		// Get Query 
		$results = $this->model->getRows( $params );		
		
		// Build pagination setting
		$page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;	
		$pagination = new Paginator($results['rows'], $results['total'], $params['limit']);	
		$pagination->setPath('planilla');
		
		$this->data['rowData']		= $results['rows'];
		// Build Pagination 
		$this->data['pagination']	= $pagination;
		// Build pager number and append current param GET
		$this->data['pager'] 		= $this->injectPaginate();	
		// Row grid Number 
		$this->data['i']			= ($page * $params['limit'])- $params['limit']; 
		// Grid Configuration 
		$this->data['tableGrid'] 	= $this->info['config']['grid'];
		$this->data['tableForm'] 	= $this->info['config']['forms'];	
		// Group users permission
		$this->data['access']		= $this->access;
		// Detail from master if any
		
		// Master detail link if any 
		$this->data['subgrid']	= (isset($this->info['config']['subgrid']) ? $this->info['config']['subgrid'] : array()); 
		// Render into template
		return view('planilla.detail',$this->data);
	}	



	function getUpdate(Request $request, $id = null)
	{
	
		if($id =='')
		{
			if($this->access['is_add'] ==0 )
			return Redirect::to('dashboard')->with('messagetext',\Lang::get('core.note_restric'))->with('msgstatus','error');
		}	
		
		if($id !='')
		{
			if($this->access['is_edit'] ==0 )
			return Redirect::to('dashboard')->with('messagetext',\Lang::get('core.note_restric'))->with('msgstatus','error');
		}				
				
		$row = $this->model->find($id);
		if($row)
		{
			$this->data['row'] =  $row;
		} else {
			$this->data['row'] = $this->model->getColumnTable('planillas'); 
		}
		$this->data['fields'] 		=  \SiteHelpers::fieldLang($this->info['config']['forms']);
		
		$this->data['id'] = $id;
		return view('planilla.form',$this->data);
	}	

	public function getShow( Request $request, $id = null)
	{

		if($this->access['is_detail'] ==0) 
		return Redirect::to('dashboard')
			->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');
					
		$row = $this->model->getRow($id);
		if($row)
		{
			$this->data['row'] =  $row;
			$this->data['fields'] 		=  \SiteHelpers::fieldLang($this->info['config']['grid']);
			$this->data['id'] = $id;
			$this->data['access']		= $this->access;
			$this->data['subgrid']	= (isset($this->info['config']['subgrid']) ? $this->info['config']['subgrid'] : array()); 
			$this->data['prevnext'] = $this->model->prevNext($id);
			return view('planilla.view',$this->data);
		} else {
			return Redirect::to('planilla')->with('messagetext','Record Not Found !')->with('msgstatus','error');					
		}
	}	

	function postSave( Request $request)
	{
		
		$rules = $this->validateForm();
		$validator = Validator::make($request->all(), $rules);	
		if ($validator->passes()) {
			$data = $this->validatePost('tb_planilla');
			
			$id = $this->model->insertRow($data , $request->input('planilla_id'));
			
			if(!is_null($request->input('apply')))
			{
				$return = 'planilla/update/'.$id.'?return='.self::returnUrl();
			} else {
				$return = 'planilla?return='.self::returnUrl();
			}

			// Insert logs into database
			if($request->input('planilla_id') =='')
			{
				\SiteHelpers::auditTrail( $request , 'New Data with ID '.$id.' Has been Inserted !');
			} else {
				\SiteHelpers::auditTrail($request ,'Data with ID '.$id.' Has been Updated !');
			}

			return Redirect::to($return)->with('messagetext',\Lang::get('core.note_success'))->with('msgstatus','success');
			
		} else {

			return Redirect::to('planilla/update/'.$request->input('planilla_id'))->with('messagetext',\Lang::get('core.note_error'))->with('msgstatus','error')
			->withErrors($validator)->withInput();
		}	
	
	}	

	public function postDelete( Request $request)
	{
		
		if($this->access['is_remove'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');
		// delete multipe rows 
		if(count($request->input('ids')) >=1)
		{
			$this->model->destroy($request->input('ids'));
			
			\SiteHelpers::auditTrail( $request , "ID : ".implode(",",$request->input('ids'))."  , Has Been Removed Successfull");
			// redirect
			return Redirect::to('planilla?return='.self::returnUrl())
        		->with('messagetext', \Lang::get('core.note_success_delete'))->with('msgstatus','success'); 
	
		} else {
			return Redirect::to('planilla?return='.self::returnUrl())
        		->with('messagetext','No Item Deleted')->with('msgstatus','error');				
		}

	}	

	public static function display( )
	{
		$mode  = isset($_GET['view']) ? 'view' : 'default' ;
		$model  = new Planilla();
		$info = $model::makeInfo('planilla');

		$data = array(
			'pageTitle'	=> 	$info['title'],
			'pageNote'	=>  $info['note']
			
		);

		if($mode == 'view')
		{
			$id = $_GET['view'];
			$row = $model::getRow($id);
			if($row)
			{
				$data['row'] =  $row;
				$data['fields'] 		=  \SiteHelpers::fieldLang($info['config']['grid']);
				$data['id'] = $id;
				return view('planilla.public.view',$data);
			} 

		} else {

			$page = isset($_GET['page']) ? $_GET['page'] : 1;
			$params = array(
				'page'		=> $page ,
				'limit'		=>  (isset($_GET['rows']) ? filter_var($_GET['rows'],FILTER_VALIDATE_INT) : 10 ) ,
				'sort'		=> 'planilla_id' ,
				'order'		=> 'asc',
				'params'	=> '',
				'global'	=> 1 
			);

			$result = $model::getRows( $params );
			$data['tableGrid'] 	= $info['config']['grid'];
			$data['rowData'] 	= $result['rows'];	

			$page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;	
			$pagination = new Paginator($result['rows'], $result['total'], $params['limit']);	
			$pagination->setPath('');
			$data['i']			= ($page * $params['limit'])- $params['limit']; 
			$data['pagination'] = $pagination;
			return view('planilla.public.detail',$data);			
		}


	}

	function postSavepublic( Request $request)
	{
		
		$rules = $this->validateForm();
		$validator = Validator::make($request->all(), $rules);	
		if ($validator->passes()) {
			$data = $this->validatePost('planillas');		
			 $this->model->insertRow($data , $request->input('planilla_id'));
			return  Redirect::back()->with('messagetext','<p class="alert alert-success">'.\Lang::get('core.note_success').'</p>')->with('msgstatus','success');
		} else {

			return  Redirect::back()->with('messagetext','<p class="alert alert-danger">'.\Lang::get('core.note_error').'</p>')->with('msgstatus','error')
			->withErrors($validator)->withInput();

		}	
	
	}
	
    function ingresar (){
		return view('planilla.generacion');
	}

   function calculoPlanilla (){
	   
	   if(Session::get('sector_id')==1){
		   
	  	   $planillas = Planilla::where('periodo_id', '=', Session::get('periodo_id'))->get();
		   foreach ($planillas as $planilla) {
		   $suspensiones = Suspension::where('id_trabajador', '=', $planilla->id_trabajador)->get();
           $dias_suspendidos = 0;
		   foreach ($suspensiones as $suspension) 
           {
			
            $dias_suspendidos = $suspension->nro_dias + $dias_suspendidos;
			
			}
		   $contrato = Contrato::where('id_trabajador','=',$planilla->id_trabajador)->orderBy('contrato_id','asc')->first();	
		   $periodo = Periodo::find(Session::get('periodo_id'));
		   switch ($periodo->mes_id) {
           case 1: $mes = '01'; break;
           case 2: $mes = '02'; break;
	       case 3: $mes = '03'; break;
		   case 4: $mes = '04'; break;
		   case 5: $mes = '05'; break;
		   case 6: $mes = '06'; break;
		   case 7: $mes = '07'; break;
		   case 8: $mes = '08'; break;
	       case 9: $mes = '09'; break;
		   case 10: $mes = '10'; break;
		   case 11: $mes = '11'; break;
		   case 12: $mes = '12'; break;
           }			   
		   $anio =  DB::table('anios')->where('anio_id','=',$periodo->anio_id)->first();
		   if($contrato->fecha_ingreso >= "'".$anio->anio."-".$mes."-01'"){
		   $planilla->dias_computables = 30;
		   }else{
		   $nro_dia_iniciado = date("j", $contrato->fecha_ingreso);
		   $planilla->dias_computables = 32-$nro_dia_iniciado;
		   }
			   
		   //return dd($planilla->dias_computables);
		   $planilla->{'0121'} = $contrato->sueldo / 30 * ( $planilla->dias_computables - $dias_suspendidos);	   
		   $empleado = Empleado::find($planilla->id_trabajador);
		   if( $empleado->carga_familiar == 1 ) { 
		   $planilla->{'0201'} = 85; 
		   }
		   $nro_remuneracion_vacacional = 0;
		   $nro_descanso_medico = 0;
		   $nro_maternidad = 0;
		   foreach ($suspensiones as $suspension) 
           {
            if( $suspension->tipo_suspension_id == 2 ){
            $nro_remuneracion_vacacional = $suspension->nro_dias + $nro_remuneracion_vacacional;
            } 
			if( $suspension->tipo_suspension_id == 3 ){
            $nro_descanso_medico = $suspension->nro_dias + $nro_descanso_medico;
            }
			if( $suspension->tipo_suspension_id == 9 ){
            $nro_maternidad = $suspension->nro_dias + $nro_maternidad;
            }
           }
		   $planilla->{'0118'} = $contrato->sueldo / 30 * $nro_remuneracion_vacacional;
		   $planilla->{'0916'} = $contrato->sueldo / 30 * $nro_descanso_medico;
		   $planilla->{'0915'} = $contrato->sueldo / 30 * $nro_maternidad;
		   if($planilla->feriado == NULL){
		   $planilla->{'0107'} = 0;
		   }else{
		   $planilla->{'0107'} = (($contrato->sueldo + $planilla->{'0201'}) / 30 + ($contrato->sueldo + $planilla->{'0201'}) / 30);
		   }
		   $base_imponible_hn = $contrato->sueldo + $planilla->{'0201'};
		   $hora_base = ($base_imponible_hn / 30 / 8);
		   $recarga = $hora_base * 0.35;
		   $planilla->importe_hn = $recarga * $planilla->hn;
		   $planilla->base_imponible = $planilla->{'0121'} + $planilla->{'0201'} + $planilla->{'0118'} + $planilla->{'0916'} + $planilla->{'0915'} + $planilla->enfermedad + $planilla->{'0107'} + $planilla->importe_hn + $planilla->{'0402'};
		   $planilla->total_ingresos = $planilla->base_imponible + $planilla->{'0909'} + $planilla->{'0917'} + $planilla->{'0902'} + $planilla->{'0403'} + $planilla->incentivos + $planilla->{'0903'};
		   if( $empleado->snp_afp_id == 1 ) {
			   if($planilla->{'0915'} != NULL OR $planilla->enfermedad != NULL ){
			   $planilla->{'0607'} = ($planilla->base_imponible - ($planilla->{'0915'} + $planilla->enfermedad )) * 0.13;
			   }else{
			   $planilla->{'0607'} = $planilla->base_imponible * 0.13;
			   }
		   }
           if( $empleado->snp_afp_id == 2 ) 
           { 
		    $afp_porcentaje = Porcentajeafp::where('afp_id', '=', $empleado->afp_id)->where('mes_id', '=', Session::get('mes'))->where('año_id', '=', Session::get('anio'))->first();
			if( $empleado->comision_tipo_id == 2 ){ 
			$planilla->{'0601'} = $planilla->base_imponible * $afp_porcentaje->comision_mixta / 100; 
			}
            else { 
			$planilla->{'0601'} = $planilla->base_imponible * $afp_porcentaje->comision / 100; 
				
			}
		    $planilla->{'0608'} = $planilla->base_imponible * $afp_porcentaje->fondo / 100;
			if ($planilla->base_imponible <= $afp_porcentaje->tope){
		    $planilla->{'0606'} = $planilla->base_imponible * $afp_porcentaje->seguro / 100;
			}else{
			$planilla->{'0606'} = $afp_porcentaje->importe_tope; 
			}
		    $planilla->afp = $planilla->{'0601'} + $planilla->{'0608'} + $planilla->{'0606'};
		   }
			   
		   $planilla->{'0706'} = $planilla->incentivos + $planilla->bono + $planilla->vacaciones;
		   $planilla->total_descuentos = $planilla->afp + $planilla->{'0605'} + $planilla->{'0706'} + $planilla->{'0607'} + $planilla->eps + $planilla->{'0701'} + $planilla->prestamos + $planilla->{'0903'};
		   $planilla->neto_pagar = $planilla->total_ingresos - $planilla->total_descuentos;
		   
		   if($planilla->{'0915'} != NULL OR $planilla->enfermedad != NULL ){
			$planilla->essalud = ($planilla->base_imponible - ($planilla->{'0915'} + $planilla->enfermedad )) * 0.09; 
		   }else{
		   $planilla->essalud = $planilla->base_imponible * 0.09;
		   }
		   $planilla->save();
		   } 
	   
   }
      
   if(Session::get('sector_id')==2){
		   
	  	   $planillas = Planilla::where('periodo_id', '=', Session::get('periodo_id'))->get();
		   foreach ($planillas as $planilla) {
		   $suspensiones = Suspension::where('id_trabajador', '=', $planilla->id_trabajador)->get();
           $dias_suspendidos = 0;
		  /* foreach ($suspensiones as $suspension) 
           {
			
            $dias_suspendidos = $suspension->nro_dias + $dias_suspendidos;
			
			}
		   */
		   $contrato = Contrato::where('id_trabajador','=',$planilla->id_trabajador)->orderBy('contrato_id','asc')->first();	
		   $periodo = Periodo::find(Session::get('periodo_id'));
		   switch ($periodo->mes_id) {
           case 1: $mes = '01'; break;
           case 2: $mes = '02'; break;
	       case 3: $mes = '03'; break;
		   case 4: $mes = '04'; break;
		   case 5: $mes = '05'; break;
		   case 6: $mes = '06'; break;
		   case 7: $mes = '07'; break;
		   case 8: $mes = '08'; break;
	       case 9: $mes = '09'; break;
		   case 10: $mes = '10'; break;
		   case 11: $mes = '11'; break;
		   case 12: $mes = '12'; break;
           }			   
		   $anio =  DB::table('anios')->where('anio_id','=',$periodo->anio_id)->first();
		   if($contrato->fecha_ingreso >= "'".$anio->anio."-".$mes."-01'"){
		   $planilla->dias_computables = 30;
		   }else{
		   $nro_dia_iniciado = date("j", $contrato->fecha_ingreso);
		   $planilla->dias_computables = 32-$nro_dia_iniciado;
		   }
			   
		   //return dd($planilla->dias_computables);
		   $planilla->jornal = 0;
		   $planilla->destajo = 0;
		   //$planilla->{'0121'} = $contrato->sueldo / 30 * ( $planilla->dias_computables - $dias_suspendidos);
		   $planilla->{'0121'} = $planilla->jornal + $planilla->destajo;
		   $planilla->{'0904'} = round(($planilla->{'0121'} * 0.0833) *  100) / 100;
		   $empleado = Empleado::find($planilla->id_trabajador);
		   if( $empleado->carga_familiar == 1 ) { 
		   $planilla->{'0201'} = 85; 
		   }
		
		   //$nro_remuneracion_vacacional = 0;
		  // $nro_descanso_medico = 0;
		  // $nro_maternidad = 0;
		   /*foreach ($suspensiones as $suspension) 
           {
            if( $suspension->tipo_suspension_id == 2 ){
            $nro_remuneracion_vacacional = $suspension->nro_dias + $nro_remuneracion_vacacional;
            } 
			if( $suspension->tipo_suspension_id == 3 ){
            $nro_descanso_medico = $suspension->nro_dias + $nro_descanso_medico;
            }
			if( $suspension->tipo_suspension_id == 9 ){
            $nro_maternidad = $suspension->nro_dias + $nro_maternidad;
            }
           }
		   */
		   $planilla->{'0118'} = round(($planilla->{'0121'} * 0.0833) *  100) / 100;
		   $planilla->{'0406'} = round(($planilla->{'0121'} * 0.1666) *  100) / 100;
		   $planilla->{'0312'} = $planilla->{'0406'} * 0.09;
		   $planilla->{'0903'} = 0;
		   $planilla->{'0909'} = 0;
		   $planilla->refrigerio = 0;
		   $planilla->total_ingresos_afectos = $planilla->{'0121'} + $planilla->{'0201'} + $planilla->{'0118'};
		   $planilla->total_remuneracion = $planilla->{'0121'} + $planilla->{'0904'} + $planilla->{'0201'} + $planilla->{'0118'} + $planilla->{'0406'} + $planilla->{'0312'} + $planilla->{'0903'} + $planilla->{'0909'} + $planilla->refrigerio;
		   $planilla->{'0604'} = 0;
		   $planilla->{'0607'} = $planilla->total_ingresos_afectos * 0.13;
		   $planilla->{'0608'} = $contrato->sueldo / 30 * $nro_descanso_medico;
		   $planilla->{'0606'} = $contrato->sueldo / 30 * $nro_descanso_medico;
			   
		   if( $empleado->snp_afp_id == 1 ) {
			   if($planilla->{'0915'} != NULL OR $planilla->enfermedad != NULL ){
			   $planilla->{'0607'} = ($planilla->base_imponible - ($planilla->{'0915'} + $planilla->enfermedad )) * 0.13;
			   }else{
			   $planilla->{'0607'} = $planilla->base_imponible * 0.13;
			   }
		   }
           if( $empleado->snp_afp_id == 2 ) 
           { 
		    $afp_porcentaje = Porcentajeafp::where('afp_id', '=', $empleado->afp_id)->where('mes_id', '=', Session::get('mes'))->where('año_id', '=', Session::get('anio'))->first();
			if( $empleado->comision_tipo_id == 2 ){ 
			$planilla->{'0601'} = $planilla->base_imponible * $afp_porcentaje->comision_mixta / 100; 
			}
            else { 
			$planilla->{'0601'} = $planilla->base_imponible * $afp_porcentaje->comision / 100; 
				
			}
		    $planilla->{'0608'} = $planilla->base_imponible * $afp_porcentaje->fondo / 100;
			if ($planilla->base_imponible <= $afp_porcentaje->tope){
		    $planilla->{'0606'} = $planilla->base_imponible * $afp_porcentaje->seguro / 100;
			}else{
			$planilla->{'0606'} = $afp_porcentaje->importe_tope; 
			}
		    $planilla->afp = $planilla->{'0601'} + $planilla->{'0608'} + $planilla->{'0606'};
		   }
			   
		   /*$planilla->{'0604'} = $contrato->sueldo / 30 * $nro_descanso_medico;
		   $planilla->{'0607'} = $contrato->sueldo / 30 * $nro_descanso_medico;
		   $planilla->{'0608'} = $contrato->sueldo / 30 * $nro_descanso_medico;
		   $planilla->{'0606'} = $contrato->sueldo / 30 * $nro_descanso_medico; */
		   //$planilla->{'0916'} = $contrato->sueldo / 30 * $nro_descanso_medico;
		   //$planilla->{'0915'} = $contrato->sueldo / 30 * $nro_maternidad;
		   if($planilla->feriado == NULL){
		   $planilla->{'0107'} = 0;
		   }else{
		   $planilla->{'0107'} = (($contrato->sueldo + $planilla->{'0201'}) / 30 + ($contrato->sueldo + $planilla->{'0201'}) / 30);
		   }
		   $base_imponible_hn = $contrato->sueldo + $planilla->{'0201'};
		   $hora_base = ($base_imponible_hn / 30 / 8);
		   $recarga = $hora_base * 0.35;
		   $planilla->importe_hn = $recarga * $planilla->hn;
		   $planilla->base_imponible = $planilla->{'0121'} + $planilla->{'0201'} + $planilla->{'0118'} + $planilla->{'0916'} + $planilla->{'0915'} + $planilla->enfermedad + $planilla->{'0107'} + $planilla->importe_hn + $planilla->{'0402'};
		   $planilla->total_ingresos = $planilla->base_imponible + $planilla->{'0909'} + $planilla->{'0917'} + $planilla->{'0902'} + $planilla->{'0403'} + $planilla->incentivos + $planilla->{'0903'};
		   if( $empleado->snp_afp_id == 1 ) {
			   if($planilla->{'0915'} != NULL OR $planilla->enfermedad != NULL ){
			   $planilla->{'0607'} = ($planilla->base_imponible - ($planilla->{'0915'} + $planilla->enfermedad )) * 0.13;
			   }else{
			   $planilla->{'0607'} = $planilla->base_imponible * 0.13;
			   }
		   }
           if( $empleado->snp_afp_id == 2 ) 
           { 
		    $afp_porcentaje = Porcentajeafp::where('afp_id', '=', $empleado->afp_id)->where('mes_id', '=', Session::get('mes'))->where('año_id', '=', Session::get('anio'))->first();
			if( $empleado->comision_tipo_id == 2 ){ 
			$planilla->{'0601'} = $planilla->base_imponible * $afp_porcentaje->comision_mixta / 100; 
			}
            else { 
			$planilla->{'0601'} = $planilla->base_imponible * $afp_porcentaje->comision / 100; 
				
			}
		    $planilla->{'0608'} = $planilla->base_imponible * $afp_porcentaje->fondo / 100;
			if ($planilla->base_imponible <= $afp_porcentaje->tope){
		    $planilla->{'0606'} = $planilla->base_imponible * $afp_porcentaje->seguro / 100;
			}else{
			$planilla->{'0606'} = $afp_porcentaje->importe_tope; 
			}
		    $planilla->afp = $planilla->{'0601'} + $planilla->{'0608'} + $planilla->{'0606'};
		   }
			   
		   $planilla->{'0706'} = $planilla->incentivos + $planilla->bono + $planilla->vacaciones;
		   $planilla->total_descuentos = $planilla->afp + $planilla->{'0605'} + $planilla->{'0706'} + $planilla->{'0607'} + $planilla->eps + $planilla->{'0701'} + $planilla->prestamos + $planilla->{'0903'};
		   $planilla->neto_pagar = $planilla->total_ingresos - $planilla->total_descuentos;
		   
		   if($planilla->{'0915'} != NULL OR $planilla->enfermedad != NULL ){
			$planilla->essalud = ($planilla->base_imponible - ($planilla->{'0915'} + $planilla->enfermedad )) * 0.09; 
		   }else{
		   $planilla->essalud = $planilla->base_imponible * 0.09;
		   }
		   $planilla->save();
		   } 
	   
   }   
	   

	       
	   
	   return Redirect::to('planilla')->with('message', 'El cálculo se realizó con éxito.');
	   
   
   }
	
 function exportar (){
	   
	   Excel::create('PLANILLA', function($excel){
                 
		         
				 $excel->sheet('Planilla', function($sheet)
					{
				    
			     $campos = DB::getSchemaBuilder()->getColumnListing('planillas');
				 $prueba='';
				 for ($i = 3; $i <= count($campos)-15; $i++) {  
                 $nombrecampos = Concepto::where('codigo','=',$campos[$i])->first();				 
				 $prueba[] = $nombrecampos->descripcion;
                 }

					$planillas = Planilla::where('periodo_id','=',Session::get('periodo_id'))
					             ->leftJoin('jl_empleados', 'jl_empleados.id_trabajador','=','planillas.id_trabajador')
								 ->leftJoin('afps', 'afps.afp_id','=','jl_empleados.afp_id')
								 //->leftJoin('snp_afps', 'snp_afps.snp_afp_id','=','jl_empleados.snp_afp_id')
								 ->leftJoin('contratos', 'contratos.id_trabajador','=','jl_empleados.id_trabajador')
								 ->select('jl_empleados.num_doc','jl_empleados.ape_paterno','jl_empleados.ape_materno',
								 'jl_empleados.nombres','jl_empleados.centro_costo','afps.nombre','jl_empleados.n_cuspp',
								 'jl_empleados.fecha_nacimiento','planillas.dias_computables', 'contratos.sueldo',  'planillas.0121', 'planillas.0201', 
								 'planillas.0118', 'planillas.0916', 'planillas.0915', '$planilla->enfermedad', 'planillas.0402', 'planillas.0107',
							    'planillas.importe_hn', 'planillas.base_imponible', 'planillas.0909', 'planillas.0917', 'planillas.0902', 'planillas.0403', 
								 'planillas.incentivos', 'planillas.0903', 'planillas.total_ingresos', 'planillas.0601', 'planillas.0608', 
								 'planillas.0606', 'planillas.afp', 'planillas.0605', 'planillas.0706', 'planillas.0607', 'planillas.eps', 
								 'planillas.0701', 'planillas.prestamos', 'planillas.total_descuentos', 
								 'planillas.neto_pagar', 'planillas.essalud')
								 ->get();
                    //return dd($planillas);
					$sheet->fromArray($planillas);
                    $sheet->row(1,['Documento','Ape.Paterno', 'Ap.Materno', 'Nombres', 'C.Costo', 'AFP', 'CUSSP', 'Fecha Nacim',
					'Dias.Compu', 'sueldo','Haber Basico', 'Asig.Famil', 'Rem.Vac', 'Impor.Desc.Medico', 'Impor.Mater', 'Import.Enferm', 'Grati.Ordinaria','Feriado', 'Horas Noctu', 
					'Base Imponible', 'Movilidad.Suped', 'Condic.Trabajo', 'Bono.Produc', 'Grati.Extraor', 'Incentivos', 'Canasta Navidad',
					'Total Ingresos', 'AFP_Comp', 'AFP_Fon', 'AFP_Seg', 'AFP', '5ta Categoria', 'Pago Extras', 'ONP', 'EPS', 'Adelanto',
					'Prestamos', 'Total Desc', 'Neto Pagar', 'ESSALUD']);					
					$sheet->cell('A1:AL1', function($cell) {
						$cell->setFont(array('size' => '12', 'bold' => true));
				        $cell->setBackground('#58ACFA');
						$cell->setFontColor('#ffffff');
						$cell->setAlignment('center');
						$cell->setValignment('center');
						$cell->setBorder(array('top'   => array('style' => 'solid')));
						});
					$sheet->setBorder('A1:AL16', 'thin');	
					$sheet->setHeight(1, 50);
					$sheet->setAutoFilter('A1:AL16');
                    $sheet->setColumnFormat(array('J2:AL16' => '0.00'));
                    $sheet->setColumnFormat(array('H2:H22' => 'dd/mm/yy'));
                    				
					});

					 
					 })->export('xls');
   
   }


}