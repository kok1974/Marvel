<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ComicsCharacter
 *
 * @property $comic_id
 * @property $personaje_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Character $character
 * @property Comic $comic
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ComicsCharacter extends Model
{
    use HasFactory;

    protected $table = 'comics_characters';

    static $rules = [
		'comic_id' => 'required',
		'personaje_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comic_id','personaje_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character()
    {
        return $this->hasOne('App\Character', 'personaje_id', 'personaje_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comic()
    {
        return $this->hasOne('App\Comic', 'comic_id', 'comic_id');
    }


}
