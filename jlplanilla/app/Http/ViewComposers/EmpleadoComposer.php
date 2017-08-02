<?php 

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use Illuminate\Users\Repository as UserRepository;
use Request;
use DB;
use Session;

class EmpleadoComposer  {
    
  public function compose(View $view){
    
   $centrosCosto = \App\Models\Centrocosto::select('centro_costo_id', DB::raw('centro_costo'))->where('empresa_id', '=', Session::get('empresa_id'))->orderBy('centro_costo', 'ASC')->lists('centro_costo', 'centro_costo');

   $centrosCosto2 = \App\Models\Centrocosto::select('centro_costo_id', DB::raw('centro_costo'))->where('empresa_id', '=', Session::get('empresa_id'))->orderBy('centro_costo', 'ASC')->lists('centro_costo', 'centro_costo');
  
  $centrosCosto = ['' => ''] + $centrosCosto->toArray();
  $centrosCosto2 = ['' => ''] + $centrosCosto2->toArray();
      
  $view->with(compact('centrosCosto','centrosCosto2'));
            
  }
    
}
