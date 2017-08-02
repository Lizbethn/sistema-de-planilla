<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class suspension extends Sximo  {
	
	protected $table = 'suspensiones';
	protected $primaryKey = 'suspension_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT suspensiones.* FROM suspensiones  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE suspensiones.suspension_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
