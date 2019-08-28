<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ asset('') }}">
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lexend+Tera&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>

    <!-- validate jquery -->
    <script src="js/jquery.validate.min.js"></script>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- CKEditor -->
    <script src="ckeditor/ckeditor.js"></script>
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>

        <div class="logo"></div>
        <div class="menu">
            <ul>
                <li><a href="trangchu">Trang Chủ</a></li>
                <li><a href="">Giới Thiệu</a></li>
                <li><a href="thisinh/chondethi">Làm Bài Thi</a></li>
                <li><a href="thisinh/ketquathi">Kết Quả Thi</a></li>
            </ul>
            <div class="user">
                <i class="fas fa-2x fa-user-circle" style="color: #fff;"></i>
                <div>
                    <div><a>
                    @if(Auth::guard('thisinh_ds')->check())
                    {{ App\thisinh::find(Auth::guard('thisinh_ds')->id())->hoten }}
                    @endif
                    </a></div>
                    <div><a href="thisinh/doimatkhau">Đổi Mật Khẩu</a></div>
                    <div><a href="thisinh/logout">Đăng Xuất</a></div>
                </div>
            </div>
            </div>
        </div>
    </header>
    <div class="wrap">
        @yield('chondethi')
        @yield('lambaithi')
        @yield('autosub')
        @yield('ketquavuathi')
        @yield('ketquathi')
        @yield('gioithieu')
        @yield('doimatkhau')
    </div>
    @include('layouts.footer')
    <script src="js/bootstrap.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="js/Chart.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/datatables-demo.js"></script>
</body>
</html>
