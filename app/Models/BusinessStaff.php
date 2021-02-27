<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessStaff extends Model
{
    protected $table = 'business_staff';

    protected $fillable = ['staff_name', 'staff_job_title', 'staff_email', 'staff_mobile', 'staff_skype', 'staff_about', 'profile'];

    public function businessStaff()
    {
        return $this->belongsTo(Business::class,'business_id');
    }
}
