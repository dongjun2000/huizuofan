@extends('layouts.default')

@section('title', '登录')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 style="margin-bottom:0">登录</h5>
            </div>
            <div class="card-body">
                @include('shared._error')

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" class="form-control" name="password" id="password"
                               value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" value="1">
                            <label class="form-check-label" for="remember">记住我</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">登录</button>
                </form>

                <hr>

                <p>还没账号？ <a href="{{ route('signup') }}">现在注册！</a></p>
            </div>
        </div>
    </div>
@stop