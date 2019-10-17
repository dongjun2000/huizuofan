<div class="list-group-item">
    <img class="mr-3" src="{{ $user->avatar() }}" alt="{{ $user->name }}" width="32">
    <a href="{{ route('users.show', $user) }}">
        {{ $user->name }}
    </a>
    @can('destroy', $user)
        <form action="{{ route('users.destroy', $user) }}" method="POST" class="float-right">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan
</div>