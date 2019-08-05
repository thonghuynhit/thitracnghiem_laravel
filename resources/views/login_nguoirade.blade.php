@extends('layouts.masterlogin')

@section('nguoirade')
<div class="wrap-login">
    <h1>Đăng Nhập Người Ra Đề</h1>
    <form action="{{ route('loginrd') }}" method="POST">
        {{ csrf_field() }}
        <div class="data-login">
            <input type="text" name="un_rd" value="">
            <span data-placeholder="Tên Đăng Nhập"></span>
        </div>
        <div class="data-login">
            <input type="password" name="pw_rd">
            <span data-placeholder="Mật Khẩu"></span>
        </div>
        <div class="data-login" style="margin: 0;">
            <input type="submit" value="Đăng Nhập">
        </div>
    </form>
</div>
@endsection
