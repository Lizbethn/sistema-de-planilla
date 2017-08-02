<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$active_multilang = defined('CNF_MULTILANG') ? CNF_LANG : 'en'; 
 \App::setLocale($active_multilang);
 if (defined('CNF_MULTILANG') && CNF_MULTILANG == '1') {

    $lang = (\Session::get('lang') != "" ? \Session::get('lang') : CNF_LANG);
    \App::setLocale($lang);
}   

Route::get('/', 'HomeController@index');
Route::controller('home', 'HomeController');

Route::controller('/user', 'UserController');
include('pageroutes.php');
include('moduleroutes.php');

Route::get('/restric',function(){

	return view('errors.blocked');

});

Route::resource('sximoapi', 'SximoapiController'); 
Route::group(['middleware' => 'auth'], function()
{

	Route::get('core/elfinder', 'Core\ElfinderController@getIndex');
	Route::post('core/elfinder', 'Core\ElfinderController@getIndex'); 
	Route::controller('/dashboard', 'DashboardController');
	Route::controllers([
		'core/users'		=> 'Core\UsersController',
		'notification'		=> 'NotificationController',
		'post'				=> 'PostController',
		'core/logs'			=> 'Core\LogsController',
		'core/pages' 		=> 'Core\PagesController',
		'core/groups' 		=> 'Core\GroupsController',
		'core/template' 	=> 'Core\TemplateController',
		'core/posts'		=> 'Core\PostsController',
		'core/forms'		=> 'Core\FormsController'
	]);

});	

Route::group(['middleware' => 'auth' , 'middleware'=>'sximoauth'], function()
{

	Route::controllers([
		'sximo/menu'		=> 'Sximo\MenuController',
		'sximo/config' 		=> 'Sximo\ConfigController',
		'sximo/module' 		=> 'Sximo\ModuleController',
		'sximo/tables'		=> 'Sximo\TablesController',
		'sximo/code'		=> 'Sximo\CodeController'
	]);			



});

Route::get('detail', 'EmpleadoController@getDetail');
Route::get('empresa_ingresar/{id}', ['as' => 'empresa.ingresar', 'uses' =>  'EmpresaController@ingresar']);
Route::get('periodo_ingresar/{id}', ['as' => 'periodo.ingresar', 'uses' =>  'PeriodoController@ingresar']);
Route::post('save_habilitado', 'ConceptoController@actualizarHabilitado');
Route::patch('habilitado_cita', [
    'as' => 'itd.habilitado',
    'uses' => 'ConceptoController@actHabilitado',
                ]); 
Route::post('save_habilitado2', 'AfectacionController@actualizarHabilitado');
Route::patch('estado_cita2', [
    'as' => 'itd.estado',
    'uses' => 'AfectacionController@actEstado',
                ]); 

Route::post('captura_centro_costo', ['as' => 'captura.centro', 'uses' => 'EmpresaController@ingresar']);
Route::post('captura_centro_costo2', ['as' => 'captura.centro2', 'uses' => 'EmpresaController@ingresar']);
Route::post('captura_habilitado', ['as' => 'captura.habilitado', 'uses' => 'EditableController@mostrar']); 
Route::get('captura_afp/{id}', 'PorcentajeafpController@capturar');
Route::get('calculo_planilla', 'PlanillaController@calculoPlanilla');
Route::get('generacion', 'PlanillaController@ingresar');
Route::post('mostrar_planilla', ['as' => 'mostrar.planilla', 'uses' => 'PlanillageneracionController@mostrar']); 
Route::get('descargar', 'PlanillaController@exportar');