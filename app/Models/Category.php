<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'content','slug'];
}
