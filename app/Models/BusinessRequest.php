<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessRequest extends Model
{
    protected $table = 'business_request';
    protected $fillable = [
        'user_id',
        'title',
        'message',
        'business_id',
        'type'
    ];
    public function business()
    {
        return $this->belongsTo(Business::class,'business_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
