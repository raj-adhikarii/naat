<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name', 'info'];

    public function images(){
        return $this->hasMany('App\Gallery', 'album_id', 'id');
    }
}
