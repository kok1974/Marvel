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

    /**
     * The users that belong to the comic.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'comics_users','comic_id','user_id');
    }

    /**
     * The character that belong to the comics.
     */
    public function character()
    {
        return $this->belongsToMany(Character::class, 'comics_characters','comic_id','personaje_id');
    }

    /**
     * The event that belong to the comics.
     */
    public function event()
    {
        return $this->belongsToMany(Character::class, 'comics_events','comic_id','event_id');
    }

    /**
     * The serie that belong to the comics.
     */
    public function serie()
    {
        return $this->belongsTo(Serie::class,'serie_id' ,'serie_id');
    }

    /**
     * The comics that belong to the writer.
     */
    public function comicsGuionista()
    {
        return $this->belongsTo(Creator::class,'guonista_id','creator_id');
    }

    /**
     * The comics that belong to the penciler.
     */
    public function comicsDibujante()
    {
        return $this->belongsTo(Creator::class,'dibujante_id','creator_id');
    }

    /**
     * The comics that belong to the cover's artits.
     */
    public function comicsArtistaPortada()
    {
        return $this->belongsTo(Creator::class,'artistaPortada_id','creator_id');
    }
}
