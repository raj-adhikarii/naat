<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['album_id', 'url'];

    public function album(){
        return $this->hasOne('App\Album', 'id', 'album_id');
    }
}
