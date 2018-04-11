<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;

class DashboardController extends Controller
{
    public function index(){
    	$admin = Auth::user();
    	return view('admin.dashboard.index',compact('admin'));
    }
}
