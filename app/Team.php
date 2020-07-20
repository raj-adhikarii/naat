<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'avatar', 'designation', 'type', 'facebook', 'linkedin', 'twitter', 'email'];
}
