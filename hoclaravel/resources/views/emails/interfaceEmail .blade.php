<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        .row {
            height: 300px;
            max-width: 500px;
            margin: auto;
            padding: 10px;
            background-color: #f0f0f0;
        }

        .column {
            /* Thêm quy tắc CSS cho cột nếu cần */
        }

        .login-form {
            /* Thêm quy tắc CSS cho biểu mẫu đăng nhập nếu cần */
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .input-box {
            /* Thêm quy tắc CSS cho hộp nhập nếu cần */
        }

        .btn-box {
            /* Thêm quy tắc CSS cho hộp nút nếu cần */
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="column"> 
            <div class="login-form">
                <form action='{{ route('postInputEmail') }}' method='POST'>
                    @csrf
                    <h1>Reset mật khẩu</h1>
                    <div class="input-box">
                        <i ></i>
                        <input name="txtEmail" type="text" placeholder="Nhập địa chỉ email của bạn để nhận mật khẩu mới" value="{{ isset($request->txtEmail) ? $request->txtEmail : '' }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        <span class="error"></span>
                    </div>
                    <div class="btn-box">
                        <input type='submit' value='Nhận mật khẩu' name="btnGetPassword" style="padding: 10px 20px; background-color: #007bff; color: #ffffff; border: none; border-radius: 5px; cursor: pointer;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
