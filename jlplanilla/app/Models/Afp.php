<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class afp extends Sximo  {
	
	protected $table = 'afps';
	protected $primaryKey = 'afp_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT afps.* FROM afps  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE afps.afp_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
