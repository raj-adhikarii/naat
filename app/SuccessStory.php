<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    protected $fillable = ['name', 'avatar', 'organization', 'designation', 'batch', 'facebook', 'linkedin', 'twitter', 'email'];
}
