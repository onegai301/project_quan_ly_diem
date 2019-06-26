<?php 

namespace App\Model;

use DB;

class Admin
{
	private $table = 'admin';
	public $ma_admin;
	public $email;
	public $mat_khau;
	public function get_one()
	{
		$array = DB::select("select * from $this->table
			where email = ? and mat_khau = ?
			limit 1",[
				$this->email,
				$this->mat_khau
			]);
		return $array;
	}
}
