<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	
	//后台管理页面首页
    public function index(){
		if(false){
			return view('Admin.login');
		}else{
			return view('Admin.index');
		}
		
	}
	
}
