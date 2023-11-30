@include('components.header')
<div class="p-3 mb-2 bg-light bg-gradient min-vh-100">
    <div class="body-container">
        <div class="m-3">
            <div class="container pb-4">
                <h1 class="display-6">Добавить альбом</h1>
                <p class="lead">ура, релиз!</p>
            </div>
            <div class="container">
                @include('components.messages')
                <form class="col-lg-9" action="{{ route('albums.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Название альбома</label>
                        <input type="text" class="form-control" id="title" name="title"
                               placeholder="Название альбома" required>
                    </div>
                    <div class="mb-3">
                        <label for="genres" class="form-label">Жанры</label>
                        <select id="genres" name="genres[]" class="form-select"  multiple="multiple">
                            @foreach($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="compositions" class="form-label">Количестсво композиций</label>
                        <input type="number" class="form-control" id="compositions" name="compositions"
                               placeholder="Введите количестсво композиций">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="content" class="form-label">Содержание альбома</label>
                            <textarea id="content" name="content"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 mt-3 d-grid">
                        <button class="btn btn-lg btn-outline-primary" type="submit">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('albums.scripts')
@include('components.footer')
