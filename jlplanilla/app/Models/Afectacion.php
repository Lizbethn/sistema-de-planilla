<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class afectacion extends Sximo  {
	
	protected $table = 'ingreso_tributos_descuentos';
	protected $primaryKey = 'itd_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT ingreso_tributos_descuentos.* FROM ingreso_tributos_descuentos  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE ingreso_tributos_descuentos.itd_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
