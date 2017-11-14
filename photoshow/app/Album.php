<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = array('name', 'description', 'cover_image');

    // realtionship with photos table
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
