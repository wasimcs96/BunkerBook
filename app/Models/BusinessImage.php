<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessImage extends Model
{
    protected $table = 'business_image';

    protected $fillable = ['business_id','image'];

    public function businessImage()
    {
        return $this->belongsTo(Business::class,'business_id');
    }
}
