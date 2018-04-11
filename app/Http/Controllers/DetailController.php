<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Image;
use App\province;
use App\Category;
use App\adv;
use App\Admin;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class DetailController extends Controller
{
   public function index($a)
   {  
      $adv = adv::where('action',1)->where('location','Trang chi tiết')->first();
      $province = province::all();
   		$postvip = post::where('like',1)->limit(10)->get();
   		$post = post::where('slug' , $a)->first();
   		if(!$post){
   			return view('admin.404');
   		}
        $cate = Category::where('is_menu',1)->get();
            $uc =Admin::where('id',$post->user_id)->first();
           if($uc == null){
              $uc = User::all()->first();
           }
                  $auth = Auth::guard('admin')->user();
                  $img = image::where('id_post',$post->id_post)->get();
   		return view('layout.detail-bds',compact('post','postvip','img','province','auth','cate','adv','uc'));

   }
}
 