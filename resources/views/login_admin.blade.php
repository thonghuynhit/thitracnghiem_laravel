@extends('layouts.masterlogin')

@section('admin')
<div class="wrap-login">
    <h1>Đăng Nhập Admin</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $err)
                    {{ $err }}<br>
            @endforeach
        </div>
    @endif
    <form action="{{ route('loginad') }}" method="POST">
        {{ csrf_field() }}
        <div class="data-login">
            <input type="text" name="un_ad" value="">
            <span data-placeholder="Tên Đăng Nhập"></span>
        </div>
        <div class="data-login">
            <input type="password" name="pw_ad">
            <span data-placeholder="Mật Khẩu"></span>
        </div>
        <div class="data-login" style="margin: 0;">
            <input type="submit" value="Đăng Nhập">
        </div>
    </form>
</div>
@endsection
