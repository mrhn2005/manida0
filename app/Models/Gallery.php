<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Gallery extends Model
{
     use Translatable;

    public $translatedAttributes = ['title', 'slug', 'description','date'];

    
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
