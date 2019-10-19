@if($feed_items->count() > 0)
    <ul class="list-unstyled">
        @foreach($feed_items as $status)
            @include('shared._status', ['user' => $status->user])
        @endforeach
    </ul>
    <div class="mt-5">
        {{ $feed_items->links() }}
    </div>
@else
    <p>没有数据！</p>
@endif