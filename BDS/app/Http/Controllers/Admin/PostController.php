<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;
use App\province;
use App\district; 
use App\ward;
use App\Image;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostFormRequest;

class PostController extends Controller
{
    public function index(){

        $posts = post::paginate(15);
        $user = Admin::all();
        $admin = Auth::user();
        return view('admin.post.index',compact('posts','admin','user'));
    }
    public function manager(){
        $user = Admin::all();
        $admin = Auth::user();
    	$posts = post::where('action','0')->paginate(15);
    	return view('admin.post.manager',compact('posts','admin','user')); 
    }

    public function remove($id){
    	$post = post::find($id);
    	if(!$post) return 'not-found';
    	$post->delete();
    	return redirect()->back();
    }
    public function add(){
        // $post = post::all();
        $province = province::all();
        $admin = Auth::user();
        return view('admin.post.add',compact('province','admin'));
    }
    public function edit($id){
        $auth = Auth::user();
        // $model = post::with('images')->find($id)->first();
        $model = post::find($id);
        $img = $model->id_post;
        $image = image::where('id_post',$img)->get();   
        if(!$model) return "not-found";
        $province = province::all();
        $admin = Auth::user();
        return view('admin.post.edit',compact('province','model','admin','auth','image'));
    }



    public function save(PostFormRequest $request){
        if($request->id){
            $model = post::find($request->id);
            if(!$model) return 'not-found';
        }else{
            $model = new post();
        }
        $model->fill($request->all());

        $remove = $request->images_delete;
        if($remove){
            $ex =explode(",",$remove);
            for($i=1;$i<count($ex);$i++){
                $img = image::find($ex[$i]);
                $img->delete();
            }
        }

       $slug = str_slug($request->title.'-'.microtime(),'-');
       $tinh=province::where('provinceid',$request->province1)->first()->name;
       $huyen=district::where('districtid',$request->district)->first()->name;
       $xa=ward::where('wardid',$request->ward1)->first()->name;
       $location=$xa.'-'.$huyen.'-'.$tinh;

            $model->slug = $slug;
            $model->province = $tinh;
            $model->distrist = $huyen;
            $model->ward = $xa;
            $model->area = $location;


            if($request->hasFile('avatar')){
                $file = $request->file('avatar');
                $fileName = uniqid()."-".$file->getClientOriginalName();
                $file->storeAs('uploads',$fileName);
                $model->avatar = 'uploads/'.$fileName;
            }

           
            if($request->id_post==null){
                $model->id_post=uniqid();
                $img_post =   $model->id_post;
            }
            else{
                $img_post = $request->id_post;
            }
            $files = $request->file('files');
            if($files != null){
                foreach($files as $file){
                    $img = new image();
                    $fileName = uniqid()."-".$file->getClientOriginalName();
                    $file->storeAs('uploads',$fileName);
                    $img->url = 'uploads/'.$fileName;
                    $img->id_post = $img_post;
                    // print_r( $img->url);
                    $img->save();
                }                    
            }

            $model->save();
            return redirect(route('post.index'));
    }
    public function browser($id){
       $model = post::find($id);
        if(!$model) return 'not-found';
       $model->action = 1;
       $model->save();
         return redirect(route('post.manager'));
    }
    public function province(){
        $district = district::where('provinceid',$_GET['provinceId'])->get();
        return view('admin.post.district',compact('district'));
    }
    public function district(){
        $ward = ward::where('districtid',$_GET['districtId'])->get();
        return view('admin.post.ward',compact('ward'));
    }
    public function logout(){
        return Auth::logout();
    }
}
