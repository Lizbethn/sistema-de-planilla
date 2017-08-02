<?php 

namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use Illuminate\Users\Repository as UserRepository;
use Request;
use DB;
use Session;

class GuiaServicioComposer  {
    
  public function compose(View $view){
    
  $guias = \App\Models\Guia::select('guia_id', 'nro_guia')->where('servicio_id', '=', 0)->where('estado', '<>', 'Anulada')
           ->orderBy('nro_guia', 'ASC')->lists('nro_guia', 'guia_id'); 
  
  $view->with(compact('guias'));
            
  }
    
}
