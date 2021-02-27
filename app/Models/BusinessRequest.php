<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessRequest extends Model
{
    protected $table = 'business_request';

    public function businessRequest()
    {
        return $this->belongsTo(Business::class,'business_id');
    }
}
