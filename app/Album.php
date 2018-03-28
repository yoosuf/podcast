<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{


    public function artworks()
    {
        return $this->morphMany(Image::class, 'imageable');
    }


    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }



    public function tracks()
    {
        return $this->hasMany(Track::class);
    }

}
