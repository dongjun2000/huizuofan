<div class="list-group-item">
    <img class="mr-3" src="{{ $user->avatar() }}" alt="{{ $user->name }}" class="avatar">
    <a href="{{ route('users.show', $user) }}">
        {{ $user->name }}
    </a>
</div>