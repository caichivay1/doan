<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\slider;

class SliderController extends Controller
{
    public function index(){
    	$admin = Auth::user();
    	$slider = slider::paginate(10);
    	return view('admin.slider.index',compact('admin','slider'));
    }
    public function add(){
    	$admin = Auth::user();
    	return view('admin.slider.add',compact('admin'));
    }
    public function save(Request $request){
    	$admin = Auth::user();
    	$model = new slider();
    	if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $fileName = uniqid()."-".$file->getClientOriginalName();
            $file->storeAs('uploads',$fileName);
            $model->url = 'uploads/'.$fileName;
        }
    	$model->save();
    	return redirect()->route('slider.index');
    }
    public function remove($id){
    	$slider = slider::find($id);
    	if(!$slider) return 'not-found';
    	$slider->delete();
    	return redirect()->back();
    }
}
