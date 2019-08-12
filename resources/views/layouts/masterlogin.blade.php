<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logints</title>
    <base href="{{ asset('') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.js"></script>
</head>
<body style="background-image: linear-gradient(to right top, #215db8, #007ac7, #0091be, #00a4a5, #0ab386); display: flex; justify-content: center; align-items: center;">
@yield('admin')
@yield('nguoirade')
@yield('thisinh')
</body>
</html>
