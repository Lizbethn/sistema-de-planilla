<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class dato extends Sximo  {
	
	protected $table = 'jl_empleados';
	protected $primaryKey = 'id_trabajador';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT jl_empleados.* FROM jl_empleados  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE jl_empleados.id_trabajador IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
