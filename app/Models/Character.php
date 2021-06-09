<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Character
 *
 * @property $personaje_id
 * @property $nombre
 * @property $descripcion
 * @property $imagen
 * @property $mime
 * @property $created_at
 * @property $updated_at
 *
 * @property Comics[] $comics
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Character extends Model
{
    use HasFactory;

    protected $primaryKey = 'personaje_id';

    static $rules = [
		'personaje_id' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 10;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['personaje_id','nombre','descripcion','imagen','mime'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comics()
    {
        return $this->belongsToMany(User::class, 'comics_characters','character_id','comic_id');
    }


}
