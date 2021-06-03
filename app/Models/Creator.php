<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    protected $primaryKey = 'creator_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'creator_id',
        'nombre',
        'apellidos',
        'imagen',
        'mime',
        'tipo'
    ];

    /**
     * The comics that belong to the writer.
     */
    public function comicsGuionista()
    {
        return $this->hasMany(Comic::class,'guonista_id','creator_id');
    }

    /**
     * The comics that belong to the penciler.
     */
    public function comicsDibujante()
    {
        return $this->hasMany(Comic::class,'dibujante_id','creator_id');
    }

    /**
     * The comics that belong to the cover's artits.
     */
    public function comicsArtistaPortada()
    {
        return $this->hasMany(Comic::class,'artistaPortada_id','creator_id');
    }
}
