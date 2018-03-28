<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Artist extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




    public function avatars()
    {
        return $this->morphMany(Image::class, 'imageable');
    }


    public function albums()
    {
        return $this->hasMany(Album::class);
    }


    public function tracks()
    {
        return $this->hasMany(Track::class);
    }


}
