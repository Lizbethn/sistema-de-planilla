<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class planilla extends Sximo  {
	
	protected $table = 'planillas';
	protected $primaryKey = 'planilla_id';
	public $timestamps = false;

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT planillas.* FROM planillas  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE planillas.planilla_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
