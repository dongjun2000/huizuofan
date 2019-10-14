<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', '会做饭') - 唯有美食与爱不可辜负！</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item"><a href="/help" class="nav-link">帮助</a></li>
            <li class="nav-item"><a href="#" class="nav-link">登录</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>