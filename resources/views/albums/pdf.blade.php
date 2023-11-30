<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Список альбомов</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style> body, h2 {
            font-family: DejaVu Sans, sans-serif;
        }</style>
</head>
<body>
<h2 class="mb-3">{{ $data['title'] }}</h2>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Название</th>
        <th>Жанры</th>
        <th>Количество композиций</th>
        <th>Содержание</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $data['title'] }}</td>
        <td>
            @foreach ($data['genres'] as $genre)
                {{ $genre['title'] }}<br>
            @endforeach
        </td>
        <td>{{ $data['compositions'] }}</td>
        <td>{{ $data['content'] }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
