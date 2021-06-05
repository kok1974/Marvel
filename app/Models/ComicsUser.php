<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ComicsUser
 *
 * @property $comic_id
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Comic $comic
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ComicsUser extends Model
{
    use HasFactory;

    protected $table = 'comics_users';

    static $rules = [
		'comic_id' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comic_id','user_id'];


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
    public function user()
    {
        return $this->hasOne('App\User', 'user_id', 'user_id');
    }


}
