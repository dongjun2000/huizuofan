<form action="{{ route('statuses.store') }}" method="POST">
    @include('shared._error')
    {{ csrf_field() }}
    <textarea name="content" id="content" class="form-control" placeholder="聊聊新鲜事儿..." rows="3">{{ old('content') }}</textarea>
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">发布</button>
    </div>
</form>