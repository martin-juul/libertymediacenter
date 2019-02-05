<?php

namespace App\Models;

/**
 * App\Models\Library
 *
 * @property string $id
 * @property string $name
 * @property string $type
 * @property string $metadata_lang
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Movie[] $movies
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BaseModel disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Library newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Library newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Library query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Library whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Library whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Library whereMetadataLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Library whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Library wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Library whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Library whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BaseModel withCacheCooldownSeconds($seconds)
 * @mixin \Eloquent
 */
class Library extends BaseModel
{
    public const MOVIE = 'movie';
    public const SHOW = 'show';
    public const SPORTS = 'sports';
    public const OTHER = 'other';

    protected $fillable = [
        'name',
        'type',
        'metadata_lang',
        'path',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
