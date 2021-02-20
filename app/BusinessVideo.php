<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessVideo extends Model
{
    protected $table = 'business_video';

    public function businessVideo()
    {
        return $this->belongsTo(Business::class,'business_id');
    }
}
