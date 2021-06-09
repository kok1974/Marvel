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
 * @property Character[] $characters
 * @property Event[] $events
 * @property User[] $users
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function coleccion()
    {
        return $this->hasMany(ComicsUser::class, 'comics_users','comic_id','comic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function characters()
    {
        return $this->belongsToMany(User::class, 'comics_characters','comic_id','character_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function events()
    {
        return $this->belongsToMany(User::class, 'comics_events','comic_id','event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'comics_users','comic_id','user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function writer()
    {
        return $this->belongsTo(Creator::class, 'creator_id', 'guionista_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function coverArtist()
    {
        return $this->belongsTo(Creator::class, 'creator_id', 'artistaPortada_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function penciller()
    {
        return $this->belongsTo(Creator::class, 'creator_id', 'dibujante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function series()
    {
        return $this->hasOne(Series::class, 'serie_id', 'serie_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function variantsCover()
    {
        return $this->hasOne(VariantsCover::class, 'original_id', 'comic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variantsCovers()
    {
        return $this->hasMany(VariantsCover::class, 'variante_id', 'comic_id');
    }

}
