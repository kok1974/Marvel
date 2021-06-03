<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $primaryKey = 'serie_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'serie_id',
        'titulo',
        'descripcion',
        'imagen',
        'mime'
    ];

    /**
     * The comics that belong to the serie.
     */
    public function comics()
    {
        return $this->hasMany(Comic::class,'serie_id','serie_id');
    }
}
