@extends('layouts.default')

@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status-form">
                    @include('shared._status_form')
                </section>
            </div>
            <div class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
            </div>
        </div>
    @else
        <div class="jumbotron">
            <h1>Hello {{ config('app.name') }}</h1>
            <p class="lead">
                唯有美食与爱不可辜负！
            </p>
            <p>
                一切，将从这里开始。
            </p>
            <p>
                <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
            </p>
        </div>
    @endif
@stop