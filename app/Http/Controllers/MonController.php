<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Mon;
use App\Model\KieuThi;

class MonController extends Controller
{
	private $folder = 'mon';
	public function view_all()
	{
		$mon       = new Mon();
		$array_mon = $mon->get_all();
		
		// return view('view_all',compact('array_sinh_vien'));
		return view("$this->folder.view_all",[
			'array' => $array_mon
		]);
	}
	public function view_insert()
	{
		$mon       = new Mon();
		$array_mon = $mon->get_all();

		$kieu_thi = new KieuThi();
		$array_kieu_thi = $kieu_thi->get_all();
		return view("$this->folder.view_insert",[
			'array_mon' => $array_mon,
			'array_kieu_thi' => $array_kieu_thi
		]);
	}
	public function process_insert()
	{
		$mon     		  = new Mon();
		$mon->ten_mon 	  = Request::get('ten_mon');
		$mon->gio_hoc     = Request::get('gio_hoc');
		$mon->ma_kieu_thi = Request::get('ma_kieu_thi');
		$mon->insert();

		//điều hướng
		return redirect()->route('mon.view_all');
	}
	public function delete($ma_mon)
	{
		$mon     	 = new Mon();
		$mon->ma_mon = $ma_mon;
		$mon->delete();

		//điều hướng
		return redirect()->route('mon.view_all');
	}
	public function view_update($ma_mon)
	{
		$mon         = new Mon();
		$mon->ma_mon = $ma_mon;
		$mon         = $mon->get_one();

		$kieu_thi       = new KieuThi();
		$array_kieu_thi = $kieu_thi->get_all();

		return view("$this->folder.view_update",[
			'mon' => $mon,
			'array_kieu_thi' => $array_kieu_thi
		]);
	}
	public function process_update()
	{

		$mon              = new Mon();
		$mon->ma_mon      = Request::get('ma_mon');
		$mon->ten_mon 	  = Request::get('ten_mon');
		$mon->gio_hoc     = Request::get('gio_hoc');
		$mon->ma_kieu_thi = Request::get('ma_kieu_thi');
		$mon->update();
		
		

		//điều hướng
		return redirect()->route('mon.view_all');
	}
}
