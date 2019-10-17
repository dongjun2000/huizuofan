@extends('layouts.default')

@section('title', '所有用户')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 text-center">所有用户</h5>
            </div>
            <div class="list-group list-group-flush">
                @foreach($users as $user)
                    @include('shared._user')
                @endforeach

                <div class="mt-3 d-flex justify-content-center">
                    {{ $users->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
@stop