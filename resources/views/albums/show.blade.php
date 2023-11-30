@include('components.header')
<div class="p-3 mb-2 bg-light bg-gradient min-vh-100">
    <div class="body-container">
        <div class="m-3">
            <div class="container pb-4">
                <p class="lead">Альбом</p>
                <h1 class="display-6">{{ $album->title }}</h1>
            </div>
            <div class="container">
                <form class="col-lg-9">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label for="title" class="form-label">Название альбома</label>
                            <input type="text" class="form-control" id="title" placeholder="Название альбома"
                                   value="{{ $album->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="genres" class="form-label">Жанры</label>
                            <select id="genres" name="genres[]" class="form-select" multiple="multiple" disabled>
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
                            <label for="compositions" class="form-label">Количестсво композиций</label>
                            <input type="number" class="form-control" id="compositions"
                                   placeholder="Введите количестсво композиций" value="{{ $album->compositions }}">
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="content" class="form-label">Содержание альбома</label>
                                <textarea disabled id="content" name="content" >{{ $album->content }}</textarea>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@include('albums.scripts')
@include('components.footer')
