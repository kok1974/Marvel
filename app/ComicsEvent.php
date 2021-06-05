<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
class ComicsEvent extends Model
{
    
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
        return $this->hasOne('App\Comic', 'comic_id', 'comic_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event()
    {
        return $this->hasOne('App\Event', 'event_id', 'event_id');
    }
    

}
