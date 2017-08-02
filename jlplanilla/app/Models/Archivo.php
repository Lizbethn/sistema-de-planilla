<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class archivo extends Sximo  {
	
	protected $table = 'archivos';
	protected $primaryKey = 'archivos_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT archivos.* FROM archivos  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE archivos.archivos_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
