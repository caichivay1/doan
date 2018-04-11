<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\province;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/abc';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login(){
        $province = province::all();
        return view('auth.client-login',compact('province'));
    }
    public function postLogin(LoginRequest $request){

        if(Auth::guard('admin')->attempt(['email' => $request->email ,'password' =>$request->password])){
        	// dd(Auth::guard('admin')->check());
                 return redirect()->route('homepage');
        }
        else{
            return back()->with('msg','Sai tên tài khoản hoặc mật khẩu!');
        }
    }
    public function redirectToProvider(){   
        return Socialite::driver('facebook')->redirect();
    }
    public function handleProviderCallback()
    {
        $user  = Socialite::driver('facebook')->user();
        $admin = new Admin;
        $admin->name = $user->name;
        $admin->email = $user->email;
        $admin->password = Hash::make('123456');
        $admin->role = 1;
        $admin->phone = "0987654321";
        $admin->save();
        Auth::guard('admin')->login($admin);
        return redirect()->route('homepage');


    }
}



