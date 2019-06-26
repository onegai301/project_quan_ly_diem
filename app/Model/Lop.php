<?php

namespace App\Model;

use DB;

class Lop
{
	public $table = 'lop';
    public function get_all()
    {
    	$array = DB::select("select * from $this->table");
    	return $array;
    }
}
