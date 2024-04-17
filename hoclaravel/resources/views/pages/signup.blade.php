	@extends('layout.master');
	@section('banner')

	@endsection

	@section('banner')

	<div class="inner-header">
	    <div class="container">
	        <div class="pull-left">
	            <h6 class="inner-title">Đăng kí</h6>
	        </div>
	        <div class="pull-right">
	            <div class="beta-breadcrumb">
	                <a href="index.html">Home</a> / <span>Đăng kí</span>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	    </div>
	</div>
	@endsection
	@section('content')
	<div class="container">
	    <div id="content">
		@if (count($errors)>0)
			<div class="alert alert danger">
				@foreach($errors->all() as $err)
					{{ $err }}
				@endforeach
			</div>
		@endif
		@if(Session::has('success'))
			<div class="alert alert success">{{ Session::get('success') }} </div>
		@endif
	    	<form action="{{ route('postsignup') }}" method="post" enctype="multipart/form-data" class="beta-form-checkout">
				@csrf
	            <div class="row">
	                <div class="col-sm-3"></div>
	                <div class="col-sm-6">
	                    <h4>Đăng kí</h4>
	                    <div class="space20">&nbsp;</div>


	                    <div class="form-block">
	                        <label for="email">Email address*</label>
	                        <input type="email" name="email" id="email" required>
	                    </div>

	                    <div class="form-block">
	                        <label for="your_last_name">Fullname*</label>
	                        <input type="text" name="fullname" id="your_last_name" required>
	                    </div>

	                    <div class="form-block">
	                        <label for="adress">Address*</label>
	                        <input type="text" name="address" id="adress" value="Street Address" required>
	                    </div>


	                    <div class="form-block">
	                        <label for="phone">Phone*</label>
	                        <input type="text" name="phone" id="phone" required>
	                    </div>
	                    <div class="form-block">
	                        <label for="phone">Password*</label>
	                        <input type="text" name="password" id="password" required>
	                    </div>
	                    <div class="form-block">
	                        <label for="phone">Re password*</label>
	                        <input type="text" name="repassword" id="repassword" required>
	                    </div>
	                    <div class="form-block">
	                        <button type="submit" class="btn btn-primary">Register</button>
	                    </div>
	                </div>
	                <div class="col-sm-3"></div>
	            </div>
	        </form>
			<div class="go-to-login" style="display: flex; float:right">
				<p>Nếu bạn đã có tài khoản</p>
				<a href="{{ route('login') }}">Đăng nhập</a>
			</div>
	    </div> <!-- #content -->
	</div> <!-- .container -->
	@endsection