@include('components.header')
<div class="p-3 mb-2 bg-light bg-gradient min-vh-100">
    <div class="body-container">
        <div class="m-3">
            <div class="container pb-4">
                <h1 class="display-6">Редактирование жанра</h1>
                <p class="lead">изменение основ</p>
            </div>
            <div class="container">
                @include('components.messages')
                <form class="col-lg-9" action="{{ route('genres.update', $genre) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Название жанра</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Название жанра"
                               value="{{ $genre->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описание жанра</label>
                        <textarea type="text" class="form-control" id="description" name="description"
                                  placeholder="Описание жанра" rows="3">{{ $genre->description }}</textarea>
                    </div>
                    <div class="mb-3 mt-3">
                        <button class="btn btn-lg btn-outline-primary" role="button" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
