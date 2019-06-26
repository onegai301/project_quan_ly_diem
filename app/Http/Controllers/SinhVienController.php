<?php

namespace App\Http\Controllers;

use Request;
use App\Model\SinhVien;
use App\Model\Lop;

class SinhVienController extends Controller
{
	private $folder = 'sinh_vien';
	public function view_all()
	{
		$sinh_vien       = new SinhVien();
		$array_sinh_vien = $sinh_vien->get_all();
		
		// return view('view_all',compact('array_sinh_vien'));
		return view("$this->folder.view_all",[
			'array' => $array_sinh_vien
		]);
	}
	public function view_insert()
	{
		$lop       = new Lop();
		$array_lop = $lop->get_all();
		return view("$this->folder.view_insert",[
			'array_lop' => $array_lop
		]);
	}
	public function process_insert()
	{
		$sinh_vien                = new SinhVien();
		$sinh_vien->ten_sinh_vien = Request::get('ten_sinh_vien');
		$sinh_vien->tuoi          = Request::get('tuoi');
		$sinh_vien->ma_lop        = Request::get('ma_lop');
		$sinh_vien->insert();

		//điều hướng
		return redirect()->route('sinh_vien.view_all');
	}
	public function delete($ma_sinh_vien)
	{
		$sinh_vien               = new SinhVien();
		$sinh_vien->ma_sinh_vien = $ma_sinh_vien;
		$sinh_vien->delete();

		//điều hướng
		return redirect()->route('sinh_vien.view_all');
	}
	public function view_update($ma_sinh_vien)
	{
		$sinh_vien               = new SinhVien();
		$sinh_vien->ma_sinh_vien = $ma_sinh_vien;
		$sinh_vien               = $sinh_vien->get_one();

		$lop       = new Lop();
		$array_lop = $lop->get_all();

		return view("$this->folder.view_update",[
			'sinh_vien' => $sinh_vien,
			'array_lop' => $array_lop
		]);
	}
	public function process_update()
	{

		$sinh_vien                = new SinhVien();
		$sinh_vien->ma_sinh_vien  = Request::get('ma_sinh_vien');
		$sinh_vien->ten_sinh_vien = Request::get('ten_sinh_vien');
		$sinh_vien->tuoi          = Request::get('tuoi');
		$sinh_vien->ma_lop        = Request::get('ma_lop');
		$sinh_vien->update();
		
		

		//điều hướng
		return redirect()->route('sinh_vien.view_all');
	}
}
