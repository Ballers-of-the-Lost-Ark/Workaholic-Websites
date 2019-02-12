<div class="negative-margin-top">
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}} <br>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{$error}} <br>           
            @endforeach
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{session('error')}} <br>
        </div>
    @endif
</div>