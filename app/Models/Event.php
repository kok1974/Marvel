<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $primaryKey = 'event_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'titulo',
        'descripcion',
        'inicio',
        'fin'
    ];

    /**
     * The comics that belong to the character.
     */
    public function comics()
    {
        return $this->belongsToMany(Comic::class, 'comics_events','event_id','comic_id');
    }
}
