@extends('layouts.default')

@section('content')
    <div class="jumbotron">

            <h1>Hello {{ config('app.name') }}</h1>
            <p class="lead">
                唯有美食与爱不可辜负！
            </p>
            <p>
                一切，将从这里开始。
            </p>
            <p>
                <a class="btn btn-lg btn-success" href="#" role="button">现在注册</a>
            </p>

    </div>
@stop