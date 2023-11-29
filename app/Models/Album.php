<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id Идентификатор записи
 * @property string $title Название
 * @property int $compositions Количество композиций
 * @property string $content Содержание
 * @property-read Carbon $created_at Дата создания
 * @property-read Carbon $updated_at Дата обновления
 */
class Album extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'compositions',
        'content',
    ];

    /**
     * The genres that belong to the album.
     */
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }
}
