<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\province;
use App\district;
use App\ward;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{ 
    public function index(){
        $admin = Auth::user();
    	$admin_list = Admin::paginate(15);
    	return view('admin.user.index',compact('admin_list','admin'));
    }
    public function remove($id){
    	$admin = Admin::find($id);
    	if(!$admin) return 'not-found';
    	$admin->delete();
    	return redirect()->back();
    }
    public function manager(){
         $admin = Auth::user();
        $user = Admin::where('role',0)->get();
        return view('admin.user.manager',compact('user','admin'));
    }
    public function browser($id){
        $user = Admin::find($id);
        if(!$user) dd('not-found');
        $user->role = 1;
        $user->save();
        return redirect()->route('user.manager'); 

    }
    public function add(){
        $province = province::all();
        $admin = Auth::user();
        return view('admin.user.add',compact('admin','province'));
    }
    public function save(Request $request){
        if($request->id){
            $model = Admin::find($request->id);
            if(!$model) return 'not-found';
        }else{
                    $model = new Admin();
        }

        $model ->fill($request->all());
        $model->password =Hash::make($request->password);
        $tinh=province::where('provinceid',$request->province1)->first()->name;
       $huyen=district::where('districtid',$request->district)->first()->name;
       $xa=ward::where('wardid',$request->ward1)->first()->name;
       $location=$xa.'-'.$huyen.'-'.$tinh;

            $model->province = $tinh;
            $model->district = $huyen;
            $model->ward = $xa;
        $model->save();
        return redirect()->route('user.index');
    }
    public function edit($id){
                $province = province::all();
        $admin = Auth::user();
        $user = Admin::find($id);
        if(!$user) dd('user not  exits');
        return view('admin.user.edit',compact('user','admin','province'));
    }
}
