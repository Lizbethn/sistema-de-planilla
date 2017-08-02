<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class porcentajeafp extends Sximo  {
	
	protected $table = 'afp_porcentajes';
	protected $primaryKey = 'afp_porcentaje_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT afp_porcentajes.* FROM afp_porcentajes  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE afp_porcentajes.afp_porcentaje_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
