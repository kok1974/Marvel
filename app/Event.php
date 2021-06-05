<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 *
 * @property $event_id
 * @property $titulo
 * @property $descripcion
 * @property $inicio
 * @property $fin
 * @property $created_at
 * @property $updated_at
 *
 * @property ComicsEvent[] $comicsEvents
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Event extends Model
{
    
    static $rules = [
		'event_id' => 'required',
		'titulo' => 'required',
		'inicio' => 'required',
		'fin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['event_id','titulo','descripcion','inicio','fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comicsEvents()
    {
        return $this->hasMany('App\ComicsEvent', 'event_id', 'event_id');
    }
    

}
