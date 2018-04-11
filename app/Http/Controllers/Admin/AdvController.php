<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\adv;
class AdvController extends Controller
{
    public function index(){
        $admin = Auth::user();
        $adv = adv::paginate(15);
    	return view('admin.quangcao.index',compact('adv','admin'));
    }
    public function add(){
    	$admin = Auth::user();
    	return view('admin.quangcao.add',compact('admin'));
    }
    public function edit($id){
        $admin = Auth::user();
        $model = adv::find($id);
        if(!$model)dd('not-found');
        return view('admin.quangcao.edit',compact('admin','model'));   	
    }
    public function remove($id){
        $adv = adv::find($id);
        if(!$adv)dd('not-found');
        $adv->delete();
        return redirect()->back();
    }
    public function save(Request $request){
    	if($request->id){
    		$model = adv::find($request->id);
    		if(!$model) dd('not-found');
    	}
    	else{
    		$model = new adv();
    	}
    	$model->source = $request->source;
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $fileName = uniqid()."-".$file->getClientOriginalName();
            $file->storeAs('uploads',$fileName);
            $model->url = 'uploads/'.$fileName;
        }
        $model->location = $request->location;
        $model->action = $request->action;  
        $model->save(); 	
    	return redirect()->route('adv.index');
    }
}
