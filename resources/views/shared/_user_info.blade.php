<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->avatar('140') }}" alt="{{ $user->name }}" title="{{ $user->name }}" class="avatar">
</a>
<h1>{{ $user->name }}</h1>