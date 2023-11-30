@include('components.header')
<div class="p-3 mb-2 bg-light bg-gradient min-vh-100">
    <div class="body-container">
        <div class="m-3">
            <div class="container pb-4">
                <h1 class="display-6">Редактирование альбома</h1>
                <p class="lead">нет цели, только путь</p>
            </div>
            <div class="container">
                @include('components.messages')
                <form class="col-lg-9" action="{{ route('albums.update', $album) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Название альбома</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Название альбома"
                               value="{{ $album->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="genres" class="form-label">Выберете жанры</label>
                        <select id="genres" name="genres[]" class="form-select" multiple="multiple">
                            @foreach($genres as $genre)
                                @if($selectedGenres->contains($genre))
                                    <option selected value="{{ $genre->id }}">{{ $genre->title }}</option>
                                @else
                                    <option value="{{ $genre->id }}">{{ $genre->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="compositions" class="form-label">Введите количестсво композиций</label>
                        <input type="number" class="form-control" id="compositions" name="compositions"
                               placeholder="Введите количестсво композиций" value="{{ $album->compositions }}">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="content" class="form-label">Содержание альбома</label>
                            <textarea id="content" name="content">{{ $album->content }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <a class="btn btn-lg btn-outline-primary" role="button"
                           href="{{ route('albums.export', $album) }}">Экспорт в PDF</a>
                        <button class="btn btn-lg btn-outline-primary" role="button" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('albums.scripts')
@include('components.footer')
