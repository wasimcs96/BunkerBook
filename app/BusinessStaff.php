<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessStaff extends Model
{
    protected $table = 'business_staff';

    public function businessStaff()
    {
        return $this->belongsTo(Business::class,'business_id');
    }
}
