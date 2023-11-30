@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <div class="alert alert-dark col-lg-9" role="alert">
                {{ $error }}
            </div>
        @endforeach
    </ul>
@endif

@if(session('success'))
    <div class="alert alert-dark" role="alert">
        {{ session('success') }}
    </div>
@endif
