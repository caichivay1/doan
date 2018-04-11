<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home.index');
// });
Route::get('/','HomeController@index')->name('homepage');
//Auth Login
Route::get('cp-login','Auth\LoginController@login')->name('login');
Route::post('cp-login','Auth\LoginController@postLogin'); 
Route::get('logout',function(){
	Auth::logout();
	return redirect(route('login'));
})->name('logout');
//Auth client
Route::get('client-login','Admin\AuthController@login')->name('client');
Route::post('client-login','Admin\AuthController@postLogin');

Route::get('logout-client',function(){
	Auth::guard('admin')->logout();
	return  redirect(route('homepage'));
})->name('logout_client');
//add post client
Route::get('manager-post-client','ClientController@index')->name('manager_client');
Route::get('manager-addpost-client','ClientController@add')->name('add_post');
Route::get('manager-edit-client/{id}','ClientController@edit')->name('edit_post');
Route::get('manager-loading-client','ClientController@loading')->name('loading_post');
Route::post('manager-savepost-client','ClientController@save')->name('save.post.client');
Route::get('post/remove/{id}','ClientController@remove')->name('postclient.remove');
Route::post('search_client','ClientController@search')->name('search_client');
Route::get('b2/{a}','ClientController@b2')->name('b2');
Route::post('broser1','ClientController@broser1')->name('broser12');




//facebook solialite
Route::get('/redirect/facebook', 'Admin\AuthController@redirectToProvider');
Route::get('/callback/facebook', 'Admin\AuthController@handleProviderCallback');



 
// 
// dang ki thanh vien
Route::post('client-add-customer','ClientController@addcustom')->name('register_client');
use Illuminate\Http\Request; 
use App\PasswordReset;
use Carbon\Carbon;
use App\Admin;
Route::post('forgrt-pwd.email',function(Request $request){

	$pwdReset = PasswordReset::where('email',$request->email)->delete();
		$user = App\Admin::where('email',$request->email)->first();
		if(!$user){
			return 'done faile!';
		}
	$token = str_random(20);
	$now = Carbon::now();
	$pwdReset = new PasswordReset();
	$pwdReset->email = $request->email;
	$pwdReset->token = $token;
	$pwdReset->created_at = $now;
	$pwdReset->save();
	$url = url('/reset-pwd/'.$token);
	Mail::send('mail_template.reset-password-mail', compact('url','user'), function ($message) use ($user) {
	    $message->to($user->email, $user->name);
	    // $message->cc('kenjav96@gmail.com', 'Dũng thần dâm');
	    // $message->replyTo('thienth@fpt.edu.vn', 'Mr.Thien');
	    $message->subject('Yêu cầu cấp lại mật khẩu!');	
	});
		return redirect()->back()->with('alert','Gui thanh cong!vui long truy cap email de kiem tra.Xin cam on!');
})->name('forgrt-pwd.email');
    //xac nhan dang ki tai khoan qua email
    Route::get('register-client-mail/{email}','ClientController@register')->name('register-mail');

Route::get('register_success/{id}','ClientController@register_role');
Route::get('reset-pwd/{token}',function($token){
		// check token co hop le hay khong
	$pwdReset = PasswordReset::where('token', $token)->first();
	if(!$pwdReset){
		return "error! invalid token";
	}
	$thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $pwdReset->created_at);
	$now = Carbon::now();
	$dif = $now->diffInHours($thatDay);
	if($dif > 24){
		DB::table('password_resets')->where('token', $token)->delete();
		return "error! invalid token";
	}
	return view('auth.reset-pwd', compact('token'));
});

Route::post('auth-reset-password', function(Request $request) {
    $pwdReset = PasswordReset::where('token', $request->token)->first();
	if(!$pwdReset){
		return "error! invalid token";
	}
	$thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $pwdReset->created_at);
	$now = Carbon::now();
	$dif = $now->diffInHours($thatDay);
	if($dif > 24){
		DB::table('password_resets')->where('token', $token)->delete();
		return "error! invalid token";
	}
	$user = Admin::where('email', $pwdReset->email)->first();
	$user->password = Hash::make($request->password);
	$user->save();
	return redirect()->route('client');
})->name('auth.reset-pwd');

Route::get('list-all','AllController@index')->name('list-all');

use Illuminate\Support\Facades\Mail;
Route::get('send-mail', function() {
    $username = 'thienth';
	Mail::send('mail_template.test-send-mail', compact('username'), function ($message) {
	    $message->to('vanhunter6789@gmail.com', 'AnhVan'); 
	    // $message->cc('kenjav96@gmail.com', 'Dũng thần dâm');
	    // $message->replyTo('thienth@fpt.edu.vn', 'Mr.Thien');
	    $message->subject('Quên mật khẩu?');
	});
	return 'done!';
});

Route::get('provider','Admin\PostController@province');
Route::get('district','Admin\PostController@district');

Route::get('list-all/{k}','ClientController@cate_detail')->name('cate_detail');
Route::get('like-all/{type}','ClientController@like_all')->name('like_all');
Route::get('/{k}','DetailController@index');
Route::post('/validatemail','ClientController@validatemail');
 