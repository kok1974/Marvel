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
 * @property ComicsCharacter[] $comicsCharacters
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

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['personaje_id','nombre','descripcion','imagen','mime'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comicsCharacters()
    {
        return $this->hasMany('App\ComicsCharacter', 'personaje_id', 'personaje_id');
    }


}
