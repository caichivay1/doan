<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\User;
use App\province;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class AllController extends Controller
{
	public function index(){
		$auth = Auth::guard('admin')->user();

	   $posts = post::paginate(9);
	       $province = province::all();
	   return view('home.index',compact('posts','province','auth'));
	}
}
 