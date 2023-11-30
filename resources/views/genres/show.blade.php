@include('components.header')
<div class="p-3 mb-2 bg-light bg-gradient min-vh-100">
    <div class="body-container">
        <div class="m-3">
            <div class="container pb-4">
                <p class="lead">Жанр</p>
                <h1 class="display-6">{{ $genre->title }}</h1>
            </div>
            <div class="container">
                <form class="col-lg-9">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label for="title" class="form-label">Название жанра</label>
                            <input type="text" class="form-control" id="title" placeholder="Название жанра"
                                   value="{{ $genre->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Описание жанра</label>
                            <textarea type="text" class="form-control" id="description" placeholder="Описание жанра"
                                      rows="3">{{ $genre->description }}</textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
