<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class ComicsEvent
 *
 * @property $comic_id
 * @property $event_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Comic $comic
 * @property Event $event
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ComicsEvent extends Pivot
{
    use HasFactory;

    protected $table = 'comics_events';

    static $rules = [
		'comic_id' => 'required',
		'event_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comic_id','event_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comic()
    {
        return $this->hasOne(Comic::class, 'comic_id', 'comic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event()
    {
        return $this->hasOne(Event::class, 'event_id', 'event_id');
    }


}
