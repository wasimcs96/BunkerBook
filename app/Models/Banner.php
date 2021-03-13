<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = ['url','image','position','show_start','show_end','deleted_at','business_id'];

    public function business()
    {
        return $this->belongsTo(Business::class,'business_id');
    }

}
