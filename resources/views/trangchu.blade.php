<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Chủ</title>
    <base href="{{ asset('') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">

</head>
<body>
    <div class="menu">
        <div class="logo"></div>
        <div class="menu-sticker">
            <ul>
                <li><a href="trangchu">Trang Chủ</a></li>
                <li><a href="gioithieu">Giới Thiệu</a></li>
                <li><a href="thisinh/chondethi">Làm Bài Thi</a></li>
                <li><a href="nguoirade/login">Quản Lý Thi</a></li>
            </ul>
        </div>
    </div>
    <div class="wrap">
        <div class="title">
            <h1>Thi Trắc Nghiệm Online</h1>
        </div>
        <div class="thi">
            <a href="thisinh/chondethi">Thi Ngay </a>
        </div>
    </div>
    <div class="aside">

    </div>
@include('layouts.footer')
</body>
</html>
