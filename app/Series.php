<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Series
 *
 * @property $serie_id
 * @property $titulo
 * @property $descripcion
 * @property $imagen
 * @property $mime
 * @property $created_at
 * @property $updated_at
 *
 * @property Comic[] $comics
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Series extends Model
{
    
    static $rules = [
		'serie_id' => 'required',
		'titulo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['serie_id','titulo','descripcion','imagen','mime'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comics()
    {
        return $this->hasMany('App\Comic', 'serie_id', 'serie_id');
    }
    

}
