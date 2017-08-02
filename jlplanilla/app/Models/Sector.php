<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class sector extends Sximo  {
	
	protected $table = 'sectores';
	protected $primaryKey = 'sector_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT sectores.* FROM sectores  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE sectores.sector_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
