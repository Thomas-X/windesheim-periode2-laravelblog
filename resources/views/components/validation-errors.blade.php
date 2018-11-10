@if ($errors->any())
    <div class="message is-danger">
        <div class="message-header">
            <p>Oops!</p>
        </div>
        <div class="message-body">
            @foreach ($errors->all() as $error)
                <p class="content">
                    {{$error}}
                </p>
            @endforeach
        </div>
    </div>
@endif