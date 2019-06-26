<?php

namespace App\Model;

use DB;

class KieuThi
{
	public $table = 'kieu_thi';
    public function get_all()
    {
    	$array = DB::select("select * from $this->table");
    	return $array;
    }
}
