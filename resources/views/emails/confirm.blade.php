<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>注册邮件确认</title>
</head>
<body>
<h1>感谢您在 {{ config('app.name') }} 网站进行注册！</h1>

<p>
    请点击下面的链接完成注册：

    <a href="{{ route('confirm_email', $user->activation_token) }}">
        {{ route('confirm_email', $user->activation_token) }}
    </a>
</p>

<p>
    如果这不是你本人的操作，请忽略本邮件。
</p>

</body>
</html>