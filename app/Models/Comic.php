<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $primaryKey = 'comic_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comic_id',
        'serie_id',
        'titulo',
        'numero',
        'descripcion',
        'formato',
        'imagen',
        'mime',
        'guionista_id',
        'dibujante_id',
        'artistaPortada_id',
        'variantesPortada'
    ];
}
