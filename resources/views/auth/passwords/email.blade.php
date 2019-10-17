@extends('layouts.default')

@section('title', '重置密码')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">重置密码</h5>
            </div>
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email" class="form-control-label">邮箱地址：</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}"
                               required>
                        @if($errors->has('email'))
                        <span class="form-text text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">发送密码重置邮件</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop