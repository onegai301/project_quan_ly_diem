<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Model\Admin;
use Request;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function layer()
    {
    	return view('layer.master');
    }
    public function view_login()
    {
    	return view('view_login');
    }
    public function process_login()
    {
		$admin           = new Admin();
		$admin->email    = Request::get('email');
		$admin->mat_khau = Request::get('mat_khau');
		$admin           = $admin->get_one();

		if(count($admin)==1){
			Session::put('ma_admin',$admin[0]->ma_admin);
			Session::put('email',$admin[0]->ma_admin);

			return redirect()->route('welcome');
		}
		return redirect()->route('view_login')->with('error','Đăng nhập thất bại');
    }
    public function welcome()
    {
    	return view('welcome');
    }
    public function logout()
    {
    	// Session::forget('ma_admin');

    	Session::flush();

    	return redirect()->route('view_login')->with('success','Đăng xuất thành công');
    }
}
