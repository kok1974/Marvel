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
 * @property Comics[] $comics
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comics()
    {
        return $this->belongsToMany(Comic::class, 'comics_events','event_id','comic_id');
    }


}
