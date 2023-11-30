# NEXTUM

Описание
Музыкант записывает альбомы для выступлений, за несколько лет у него накопилось много альбомов и он решил систематизировать их содержание для того чтоб мог найти нужный альбом и распечатать его содержимое. Для этого ему потребовалась программа в которой он вел бы учёт по названию альбомов, жанрам, количеству композиций.

### Цель

Систематизировать коллекцию музыканта в виде приложения с возможностью создания библиотеки альбомов с возможностью печати содержимого в pdf формате. Для заполнения базы данных использовать произвольный текст и числа.

### Развертывание
Развертывание производиться через стандартные механизмы:

`php artisan migrate`

`php artisan db:seed`

`php artisan serve`

или 

`./vendor/bin/sail tinker` и 
`App\Models\Album::factory()->count(150)->create();`
`./vendor/bin/sail tinker` и
 `App\Models\Genre::factory()->count(50)->create();`

 ![Albums](https://github.com/Alice-Bellium/nextum/blob/main/albums.png)
 ![Genres](https://github.com/Alice-Bellium/nextum/blob/main/genres.png)
 ![Add Genre](https://github.com/Alice-Bellium/nextum/blob/main/add_genre.png)
