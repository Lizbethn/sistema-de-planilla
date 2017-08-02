<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class centrocosto extends Sximo  {
	
	protected $table = 'centro_costos';
	protected $primaryKey = 'centro_costo_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT centro_costos.* FROM centro_costos  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE centro_costos.centro_costo_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
