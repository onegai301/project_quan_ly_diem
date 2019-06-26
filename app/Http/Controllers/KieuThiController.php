<?php

namespace App\Http\Controllers;

use Request;
use App\Model\KieuThi;

class KieuThiController extends Controller
{
	private $folder = 'kieu_thi';
	public function view_all()
	{
		$kieu_thi       = new KieuThi();
		$array_kieu_thi = $kieu_thi->get_all();
		
		// return view('view_all',compact('array_sinh_vien'));
		return view("$this->folder.view_all",[
			'array' => $array_kieu_thi
		]);
	}
	
}
