<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
    }


    public function signUp()
    {
    //     $carts = Cart::all();
    //     return view('signup',compact('carts')); 
        return view('pages.signup');
    }
    public function postSignup(Request $req){
        $this->validate($req,
        ['email'=>'required|email|unique:users,email',
           'password'=>'required|min:6|max:20',
           'fullname'=>'required',
           'repassword'=>'required|same:password'
        ],
        ['email.required'=>'Vui lòng nhập email',
        'email.email'=>'Không đúng định dạng email',
        'email.unique'=>'Email đã có người sử  dụng',
        'password.required'=>'Vui lòng nhập mật khẩu',
        'repassword.same'=>'Mật khẩu không giống nhau',
        'password.min'=>'Mật khẩu ít nhất 6 ký tự'
       ]);
  
       $user=new User();
       $user->full_name=$req->fullname;
       $user->email=$req->email;
       $user->password=Hash::make($req->password);
       $user->phone=$req->phone;
       $user->address=$req->address;
       $user->level=2;
       $user->save();
       return redirect()->route('home')->with('success','Tạo tài khoản thành công');
     }
     public function login(){
        return view('pages.login');
    }

    public function postLogin(Request $req){
        $this->validate($req,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử  dụng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự',
        ]
        );
        $credentials=['email'=>$req->email,'password'=>$req->password];
        if(Auth::attempt($credentials)){//The attempt method will return true if authentication was successful. Otherwise, false will be returned.
            return redirect()->route('home')->with(['flag'=>'alert','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('pages.index');
    }
}
