<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Comic
 *
 * @property $comic_id
 * @property $serie_id
 * @property $titulo
 * @property $numero
 * @property $descripcion
 * @property $formato
 * @property $imagen
 * @property $mime
 * @property $guionista_id
 * @property $dibujante_id
 * @property $artistaPortada_id
 * @property $variantesPortada
 * @property $created_at
 * @property $updated_at
 *
 * @property ComicsCharacter $comicsCharacter
 * @property ComicsEvent $comicsEvent
 * @property ComicsUser $comicsUser
 * @property Creator $writer
 * @property Creator $coverArtist
 * @property Creator $penciller
 * @property Series $series
 * @property VariantsCover $variantsCover
 * @property VariantsCover[] $variantsCovers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comic extends Model
{
    use HasFactory;

    protected $primaryKey = 'comic_id';

    static $rules = [
		'comic_id' => 'required',
		'serie_id' => 'required',
		'titulo' => 'required',
		'numero' => 'required',
		'guionista_id' => 'required',
		'dibujante_id' => 'required',
		'variantesPortada' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comic_id','serie_id','titulo','numero','descripcion','formato','imagen','mime','guionista_id','dibujante_id','artistaPortada_id','variantesPortada'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comicsCharacter()
    {
        return $this->hasOne('App\ComicsCharacter', 'comic_id', 'comic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comicsEvent()
    {
        return $this->hasOne('App\ComicsEvent', 'comic_id', 'comic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comicsUser()
    {
        return $this->hasOne('App\ComicsUser', 'comic_id', 'comic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function writer()
    {
        return $this->hasOne('App\Creator', 'creator_id', 'guionista_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function coverArtist()
    {
        return $this->hasOne('App\Creator', 'creator_id', 'artistaPortada_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function penciller()
    {
        return $this->hasOne('App\Creator', 'creator_id', 'dibujante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function series()
    {
        return $this->hasOne('App\Series', 'serie_id', 'serie_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function variantsCover()
    {
        return $this->hasOne('App\VariantsCover', 'original_id', 'comic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variantsCovers()
    {
        return $this->hasMany('App\VariantsCover', 'variante_id', 'comic_id');
    }

}
