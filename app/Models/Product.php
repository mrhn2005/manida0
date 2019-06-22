<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Product extends Model
{
    use Translatable;

    public $translatedAttributes = ['name', 'slug', 'description','desc_short','weight_unit','weight'];

    protected $fillable = ['name'];
    
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
