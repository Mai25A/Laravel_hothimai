<div class="row" style="height:300px; max-width: 500px; margin: auto;padding: 10px; background-color: #f0f0f0;">
    <div class="column"> 
        <div class="login-form" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            <form action='{{route('postInputEmail')}}' method='POST'>
                @csrf
                <h1 style="margin-bottom: 20px;">Reset mật khẩu</h1>
                <div class="input-box">
                    <i ></i>
                    <input name="txtEmail" type="text" placeholder="Nhập địa chỉ email của bạn để nhận mật khẩu mới" value="{{ isset($request->txtEmail)?$request->txtEmail:'' }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <span class="error"></span>
                    <textarea name="message" id="" cols="30" rows="10"  style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;></textarea>
                </div>
                <div class="btn-box" style="text-align: center; margin-top: 20px;">
                    <input type='submit' value='Nhận mật khẩu' name="btnGetPassword" style="padding: 10px 20px; background-color: #007bff; color: #ffffff; border: none; border-radius: 5px; cursor: pointer;">
                </div>
            </form>
        </div>
    </div>
</div>
