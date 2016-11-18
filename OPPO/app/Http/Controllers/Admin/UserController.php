<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	//显示用户列表操作
    public function index(){
		return view('Admin.User.index');
	}
}
