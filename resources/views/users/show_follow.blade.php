@extends('layouts.default')

@section('title', $title)

@section('content')
    <div class="offset-md-2 col-md-8">
        <h2 class="mb-4 text-center">{{ $title }}</h2>

        <div class="list-group list-group-flush">
            @foreach($users as $user)
                <div class="list-group-item">
                    <img src="{{ $user->avatar() }}" alt="{{ $user->name }}" class="mr-3" width="32">
                    <a href="{{ route('users.show', $user) }}">
                        {{ $user->name }}
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-3">
            {{ $users->links() }}
        </div>
    </div>
@stop