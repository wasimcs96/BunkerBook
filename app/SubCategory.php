<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategory';

    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }

}
