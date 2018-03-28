<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{


    public function album()
    {
        return $this->belongsTo(Album::class);
    }




    public function artwork()
    {
        return $this->morphMany(Image::class, 'imageable');
    }


    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
