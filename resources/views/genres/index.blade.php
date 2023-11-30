@include('components.header')
<div class="p-3 mb-2 bg-light bg-gradient min-vh-100">
    <div class="body-container">
        <div class="m-3">
            <div class="container pb-4">
                <h1 class="display-6">Жанры</h1>
                <p class="lead">Здесь вы можете увидеть все жанры</p>
            </div>
            <div class="container">
                @include('components.messages')
                <div class="album container overflow-hidden">
                    <div class="row gy-5">
                        @if($genres->isEmpty())
                            <p class="label-show">Здесь всё впереди</p>
                        @else
                            @foreach($genres as $genre)
                                <div class="col-lg-4">
                                    <a class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-underline-opacity-0-hover"
                                       role="button" href="{{ route('genres.show', $genre) }}">
                                        <div class="p-5 border bg-light">
                                            <p class="lead">{{ $genre->title }}</p>
                                            <p class="lead">{{ $genre->description }}</p>
                                        </div>
                                    </a>
                                    <div class="container text-center">
                                        <div class="row align-items-start">
                                            <div class="col">
                                                <div class="row p-1">
                                                    <a class="btn btn-secondary mt-2" role="button"
                                                       href="{{ route('genres.edit', $genre) }}">Редактировать</a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <form action="{{ route('genres.destroy', $genre) }}" method="post"
                                                      class="row p-1">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-dark mt-2" role="button" type="submit">
                                                        Удалить
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="d-flex justify-content-center m-3">{!! $genres->links() !!}</div>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
