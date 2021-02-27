<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessVideo extends Model
{
    protected $table = 'business_video';

    protected $fillable = ['business_id','video'];

    public function businessVideo()
    {
        return $this->belongsTo(Business::class,'business_id');
    }
}
