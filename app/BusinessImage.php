<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessImage extends Model
{
    protected $table = 'business_image';

    public function businessImage()
    {
        return $this->belongsTo(Business::class,'business_id');
    }
}
