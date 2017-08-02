<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class empresa extends Sximo  {
	
	protected $table = 'empresas';
	protected $primaryKey = 'empresa_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT empresas.* FROM empresas  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE empresas.empresa_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
