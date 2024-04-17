<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function getinputEmail() {
        return view('emails.input-email');
    }

    // Hàm xử lý gửi email
    public function postInputEmail(Request $req){
        $email = $req->txtEmail;
        
        // Validate email ở đây nếu cần

        // Kiểm tra xem có người dùng nào có email như vậy không
        $user = User::where('email', $email)->first();

        if ($user) {
            // Gửi mật khẩu reset tới email
            $sentData = [
                'title' => 'Mật khẩu mới của bạn là:',
                'body' => '123456'
            ];

            Mail::to($email)->send(new SendMail($sentData));

            Session::flash('message', 'Send email successfully!');
            return redirect()->route('login'); // Chuyển hướng lại trang đăng nhập
        } else {
            return redirect()->route('getInputEmail')->with('message', 'Your email is not correct');
        }
    }
    public function sendEmail(Request $request)
    {
            $email = $request->email;
            $message =  $request->message;

        Mail::to('nguyenmaioc0@gmail.com')->send(new SendMail());

        return redirect()->route('contact-page')->with('message', 'Email đã được gửi thành công!');
    }

}
