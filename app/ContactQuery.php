<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactQuery extends Model
{
    protected $table = 'contactqueries';

    protected $fillable = ['name', 'email', 'subject', 'message'];

    public function follower()
    {
        return $this->hasOne('App\User', 'id', 'followed_by');
    }
}
