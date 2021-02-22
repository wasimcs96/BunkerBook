<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable=['name','icon','description'];
    public function subCategory()
    {
        return $this->hasMany(SubCategory::class,'cat_id');
    }


}
