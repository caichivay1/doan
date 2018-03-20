<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
    	$cate = Category::paginate(10);
    	$admin = Auth::user();
    	return view('admin.category.index',compact('cate','admin'));
    }	
    public function add(){
    	$cate = Category::all();
    	$admin = Auth::user();
    	return view('admin.category.add',compact('admin','cate'));
    }
        public function edit($id){
        $cate = Category::find($id);
        if(!$cate) dd('id not exits');
    	$cate1 = Category::all();
    	$admin = Auth::user();
    	return view('admin.category.edit',compact('admin','cate','cate1'));
    }
    public function remove($id){
    	$cate = Category::find($id);
    	if(!$cate) dd('id not exits');
    	$cate->delete();
    	return redirect()->route('category.index');
    }

    public function save(Request $request){
    	if($request->id){
    		$cate = Category::find($request->id);
    		if(!$cate) dd('id exits');
    	}else{
    		$cate = new Category();
    	}
    	$slug = str_slug($request->name);
    	$cate->fill($request->all());
    	$name = Category::where('id',$request->parent)->first();
    	if($name){
    	$cate->parent = $name->name; 		
    	}
    	$cate->slug = $slug;
    	// $cate->slug = str_replace('-', ' ', $slug);
    	$cate->is_menu = $request->is_menu == 1 ? 1 : 0;
    	$cate->save();
    	return redirect()->route('category.index');

    }
}
