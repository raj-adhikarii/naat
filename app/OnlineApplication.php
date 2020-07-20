<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineApplication extends Model
{
    protected $fillable = ['name', 'email', 'mobile', 'telephone', 'location', 'course', 'dob', 'gender', 'height', 'message'];

    public function follower()
    {
        return $this->hasOne('App\User', 'id', 'followed_by');
    }
}