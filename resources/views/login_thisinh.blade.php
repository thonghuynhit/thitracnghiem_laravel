@extends('layouts.masterlogin')


@section('thisinh')

<div class="wrap-login">
    <h1>Đăng Nhập Thí Sinh</h1>
    <form action="{{ route('logints') }}" method="POST">
        {{ csrf_field() }}
        <div class="data-login">
            <input type="text" name="un_ts" value="">
            <span data-placeholder="Tên Đăng Nhập"></span>
        </div>
        <div class="data-login">
            <input type="password" name="pw_ts">
            <span data-placeholder="Mật Khẩu"></span>
        </div>
        <div class="data-login" style="margin: 0;">
            <input type="submit" value="Đăng Nhập">
        </div>
    </form>
</div>
@endsection
