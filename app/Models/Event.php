<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Event
 *
 * @property $event_id
 * @property $titulo
 * @property $descripcion
 * @property $imagen
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
    use HasFactory;
    protected $primaryKey = 'event_id';

    static $rules = [
		'event_id' => 'required',
		'titulo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['event_id','titulo','descripcion','imagen','inicio','fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comicsEvents()
    {
        return $this->hasMany('App\ComicsEvent', 'event_id', 'event_id');
    }


}
