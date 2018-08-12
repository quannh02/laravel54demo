<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day la khoa hoc lap trinh khoa pham @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('public/template/mystyle.css') }}">
</head>
<body>
@include('views.marquee', ['content' => 'Khoa hoc lap trinh laravel'])
<div class="wrapper">
    @section('sidebar')
        Day la trang master sidebar
    @show
    <h2>
        @yield('noidung')
    </h2>
</div>

</body>
</html>