<?php

namespace App\Http\Controllers;



use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\post;
use App\Image;
use App\province;
use Carbon\Carbon;
use App\Category;
use App\slider;
use App\adv;
use App\Admin;
class HomeController extends Controller
{


	public function client_login(){
        $province = province::all();
        $postnew = post::orderBy('id','desc')->limit(10)->get();
         $postvip = post::where('like',1)->limit(10)->get();
        return view('layout.index',compact('province','postvip','postnew'));
    }

   public function index(){
    // $b = post::find(2)->asd;
    // // dd($b);
    // $a =post::where('id_post','5aa9caa177815')->first()->imagess;
    // dd($a);
    $adv = adv::where('action',1)->where('location','Trang chủ')->paginate(3);
    $slider = slider::all();
    $cate = Category::where('is_menu',1)->get();
    $province = province::all();
    $auth = Auth::guard('admin')->user();
    $postnew = post::where('action',1)->orderBy('id','desc')->limit(10)->get();
    $postvip = post::where('like',1)->where('action',1)->limit(10)->get();
    $posts = post::where('action',1)->paginate(4);
   		return view('layout.index',compact('province','postvip','postnew','posts','auth','cate','slider','adv'));



   }
}
