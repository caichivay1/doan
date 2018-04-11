<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\post;
use App\province;
use App\district;
use App\ward;
use App\Image; 
use App\Admin; 
use App\Category;
use Alert;
use Carbon\Carbon;
use App\Http\Requests\PostFormRequest;

class ClientController extends Controller
{
    public function addcustom(Request $request){ 
        $model = Admin::where('email',$request->email)->first();
        if($model) dd('email exits');
        $model = new Admin();
        $model->fill($request->all());
         $tinh=province::where('provinceid',$request->province1)->first()->name;
        $huyen=district::where('districtid',$request->district)->first()->name;
        $xa=ward::where('wardid',$request->ward1)->first()->name;
        $location=$xa.'-'.$huyen.'-'.$tinh;
            $model->province = $tinh;
            $model->district = $huyen;
            $model->ward = $xa;
            $model->address = $location;
        $cate = Category::where('is_menu',1)->get();
        $model->password =Hash::make($request->password);
        $email = $request->email;
        $user = $request->name;
        $model->save();
        return redirect()->route('register-mail',['mail'=>$email]);
    }
    public function register($email){     
        $users = Admin::where('email',$email)->first();
        $user = $users->name;
        $id = $users->id;
        $url = url('/register_success/'.$id);
        Mail::send('mail_template.register', compact('url','user'), function ($message) use ($user,$email) {
            $message->to($email, $user);
            // $message->cc('kenjav96@gmail.com', 'Dũng thần dâm');
            // $message->replyTo('thienth@fpt.edu.vn', 'Mr.Thien');
            $message->subject('Xác nhận đăng kí tài khoản'); 
        });
            return redirect()->back()->with('alert','Gui thanh cong!vui long truy cap email de kiem tra.Xin cam on!');   
    }
    public function index(){
    	if(Auth::guard('admin')->check()){
            $cate = Category::where('is_menu',1)->get();
	    	$auth = Auth::guard('admin')->user();
            $posts = post::where('user_id',$auth->id)->where('action',1)->paginate(10); 
	    	$posts1 = post::where('user_id',$auth->id)->where('action',0)->get();	
	    	return view('client.index',compact('auth','posts','cate','posts1'));	
    		}
    	else{
    			return "not-found";
    		}
    }
    public function add(){
                $cate = Category::where('is_menu',1)->get();
                $province = province::all();
            if(Auth::guard('admin')->check()){
            $auth = Auth::guard('admin')->user();
            $posts = post::where('user_id',$auth->id)->where('action',1)->paginate(10); 
            $posts1 = post::where('user_id',$auth->id)->where('action',0)->get(); 
            return view('client.add',compact('auth','posts','province','cate','posts1'));    
            }
        else{
                return "not-found";
            } 
    }
    public function b2($id_post){
        $cate = Category::where('is_menu',1)->get();
        $auth = Auth::guard('admin')->user();
        $post = post::where('id_post',$id_post)->first();
        $posts = post::where('user_id',$auth->id)->where('action',1)->paginate(10); 
        $posts1 = post::where('user_id',$auth->id)->where('action',0)->get(); 
        return view('client.b2',compact('auth','cate','post','posts1','posts'));   
    }
       public function edit($id){
            $posts = post::find($id);
            $img = $posts->id_post;
            $image = image::where('id_post',$img)->get();   
            $cate = Category::where('is_menu',1)->get();
    	    $province = province::all();
    		if(Auth::guard('admin')->check()){
	    	$auth = Auth::guard('admin')->user();
            $posts1 = post::where('user_id',$auth->id)->where('action',1)->paginate(10); 
            $posts2 = post::where('user_id',$auth->id)->where('action',0)->get(); 
	    	return view('client.edit',compact('auth','posts','province','cate','image','posts1','posts2'));	
    		}
    	else{
    			return "not-found";
    		} 
    }

    public function search(Request $request){
            $cate = Category::where('is_menu',1)->get();
                $auth = Auth::guard('admin')->user();
           $province = province::all();
            if($request->acr ==0)
               $a = [0,100];
            elseif($request->acr ==100)
                $a = [100,200];
            elseif($request->acr ==200)
                $a = [200,300];
            else
                $a =[300,999999900];
        // format price
            if($request->price == 01){
                $p = [0,1];
                $lp = "Triệu VND";
            }
            elseif($request->price ==12)
              {
                $p = [1,2];
                $lp = "Tỉ VND";
              }
            elseif($request->price ==23){
                $p = [2,3];
                $lp = "Tỉ VND";
            }
            else{
                $p = [3,400000000000];
                $lp = "Tỉ VND";
            }
            $type = $request->type;
            $land_type = $request->land_type;
            $provin = $request->province;
            $price = $request->price;
            $acr = $request->acr;
            $null = "Không có bài viết nào";
            $post = post::where('type',$type)->where('land_type',$land_type)->where('province',$provin)->whereBetween('acr',$a)->where('action',1)->whereBetween('price',$p)->where('type_price',$lp)->get();
            // $post= post::whereBetween('acr', $acr)->where('type_price',$lp)->whereBetween('price',$price)->where('type',$type)->where('land_type',$land_type)->where('province',$provin)->where('action',1)->get();
            return view('client.resuft_search',compact('post','auth','province','cate','null','type','land_type','provin','price','acr'));

    }

    public function loading(){
        if(Auth::guard('admin')->check()){
            $cate = Category::where('is_menu',1)->get();
            $auth = Auth::guard('admin')->user();
            $posts = post::where('user_id',$auth->id)->where('action',0)->paginate(10); 
            $posts1 = post::where('user_id',$auth->id)->where('action',1)->get(); 
            return view('client.loading',compact('auth','posts','cate','posts1'));    
            }
        else{
                return "not-found";
            }
    }
        public function remove($id){
        $post = post::find($id);
        if(!$post) return 'not-found';
        $post->delete();
        return redirect()->back();
    }
    public function save(PostFormRequest $request){  
        if($request->id){
            $model = post::find($request->id);
            if(!$model) return 'not-found';
        }else{
            $model = new post();
        }
        $model->fill($request->all());
        dd($model);

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
            return redirect()->route('b2',['id_post'=>$model->id_post]);
    }
    public function cate_detail($k){
        $cate = Category::where('is_menu',1)->get();
        $auth = Auth::guard('admin')->user();
        $province = province::all();
        $a = str_replace('-', ' ', $k); 
        $posts = post::where('type',$a)->where('action',1)->paginate(9);
        $null = "Không có bài viết nào";
        return view('home.index',compact('posts','cate','province','null','auth'));
    }
    public function like_all($type){
        $cate = Category::where('is_menu',1)->get();
        $auth = Auth::guard('admin')->user();
        $province = province::all();
        if($type == 'like')
            $posts = post::where('like',1)->where('action',1)->paginate(9);
        elseif($type == 'new')
            $posts = post::where('action',1)->orderBy('id','desc')->paginate(9);
        else
            $posts = post::where('action',1)->paginate(9);

        return view('home.index',compact('posts','cate','province','auth')); 
    }
    public function broser1(Request $request){
       $model = post::find($request->id);
        if(!$model) return view('Admin/404');
       $model->action =$request->radio ;
       $model->save();
         return redirect(route('manager_client'));
    }
    public function register_role($id){
        $user = Admin::find($id);
        if(!$user) return view('admin.404');
        $thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at);
        $now = Carbon::now();
        $dif = $now->diffInHours($thatDay);       
        if($dif >24){
            DB::table('admins')->where('id',$id)->delete();
            return "error! invalid token";
        }
        $user->role = 1;
        $user->save();
        return redirect()->route('client')->with('alert','Đăng kí thành công!');
    }
    public function validatemail(Request $request){
        $email = $request->email;
        $admin = Admin::where('email',$email)->first();
        if($admin){
           return response()->json(array("exists" => false));
        }
        else{
           return response()->json(array("exists" => true),200);
        }
    }

}
