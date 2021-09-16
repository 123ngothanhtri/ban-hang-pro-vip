<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Đăng nhập vào Admin</title>
</head>

<body>
    <div style="height:100vh ;background-image:url('{{ $settingAdmin->background_login_admin }}');background-size:cover" class="d-flex justify-content-center align-items-center">
        <div class="bg-light rounded shadow p-4" style="width:400px">
            <div class="text-center mb-2">
                <img height="50px" src="{{ $settingHome->logo }}" alt="">
            </div>
            @if (session('er'))
                <div class="alert alert-danger">{{ session('er') }}</div>
            @endif
            @if (session('msg'))
                <div class="alert alert-info">{{ session('msg') }}</div>
            @endif
            <form action="{{ url('/admin-login') }}" method="POST">@csrf
                <input class="form-control mb-3" type="text" placeholder="Tài khoản" name="email" required>
                <input class="form-control mb-3" type="password" placeholder="Mật khẩu" name="password" required>
                <button type="submit" class="btn btn-danger w-100 mb-3">Đăng nhập</button>
            </form>
            <a href="{{ url('/') }}" class="text-decoration-none">Trở về trang chủ</a>
        </div>
    </div>

</body>




</html>
