<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Creator
 *
 * @property $creator_id
 * @property $nombre
 * @property $apellidos
 * @property $imagen
 * @property $mime
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Comic[] $comics
 * @property Comic[] $comics
 * @property Comic[] $comics
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Creator extends Model
{
    
    static $rules = [
		'creator_id' => 'required',
		'nombre' => 'required',
		'apellidos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['creator_id','nombre','apellidos','imagen','mime','tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comics()
    {
        return $this->hasMany('App\Comic', 'guionista_id', 'creator_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comics()
    {
        return $this->hasMany('App\Comic', 'artistaPortada_id', 'creator_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comics()
    {
        return $this->hasMany('App\Comic', 'dibujante_id', 'creator_id');
    }
    

}
