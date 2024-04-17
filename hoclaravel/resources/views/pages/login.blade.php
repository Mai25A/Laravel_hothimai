@extends('layout.master');
@section('banner')

@endsection
@section('content')
<div class="container text-center">
    @if (session('message'))
        <h2 style="color:red">{{ session('message') }}</h2>
    @endif
</div>
<div class="container">
    <div id="content">

            'password.min'=>'Mật khẩu ít nhất 6 ký tự'
        <form action="{{ route('postLogin') }}" method="post" enctype="multipart/form-data" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>Đăng nhập</h4>
                    <div class="space20">&nbsp;</div>


                    <div class="form-block">
                        <label for="email">Email address*</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Password*</label>
                        <input type="text" name="password" id="phone" required>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
        <div class="go-to-login" style="display: flex; float:right">
            <p>Nếu bạn chưa có tài khoản</p>
            <a href="{{ route('sign-up') }}">Đăng ký</a>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
