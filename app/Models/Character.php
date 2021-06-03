<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $primaryKey = 'personaje_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'personaje_id',
        'name',
        'descripcion',
        'imagen',
        'mime'
    ];

    /**
     * The comics that belong to the character.
     */
    public function comics()
    {
        return $this->belongsToMany(Comic::class, 'comics_characters','personaje_id','comic_id');
    }
}
