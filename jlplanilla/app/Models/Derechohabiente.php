<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class derechohabiente extends Sximo  {
	
	protected $table = 'derechohabientes';
	protected $primaryKey = 'derechohabiente_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT derechohabientes.* FROM derechohabientes  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE derechohabientes.derechohabiente_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
