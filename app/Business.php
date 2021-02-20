<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'business';

    public function businessImage()
    {
        return $this->hasMany(BusinessImage::class,'business_id');
    }

    public function businessVideo()
    {
        return $this->hasMany(BusinessVideo::class,'business_id');
    }

    public function businessRating()
    {
        return $this->hasMany(BusinessRating::class,'business_id');
    }

    public function businessRequest()
    {
        return $this->hasMany(BusinessRequest::class,'business_id');
    }

    public function businessStaff()
    {
        return $this->hasMany(BusinessStaff::class,'business_id');
    }

    public function userBusiness()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
