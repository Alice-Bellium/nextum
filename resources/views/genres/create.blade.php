@include('components.header')
<div class="p-3 mb-2 bg-light bg-gradient min-vh-100">
    <div class="body-container">
        <div class="m-3">
            <div class="container pb-4">
                <h1 class="display-6">Добавить жанр</h1>
                <p class="lead">новое рядом</p>
            </div>
            <div class="container">
                @include('components.messages')
                <form class="col-lg-9" action="{{ route('genres.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Название жанра</label>
                        <input type="text" class="form-control" id="title" name="title"
                               placeholder="Название жанра" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описание жанра</label>
                        <textarea type="text" class="form-control" id="description" name="description"
                                  placeholder="Описание жанра" rows="3" required></textarea>
                    </div>
                    <div class="mb-3 mt-3 d-grid">
                        <button class="btn btn-lg btn-outline-primary" type="submit">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
