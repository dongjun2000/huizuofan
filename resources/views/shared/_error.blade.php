@if(count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif