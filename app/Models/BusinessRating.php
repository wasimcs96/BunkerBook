<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessRating extends Model
{
    protected $table = 'business_ratings';

    protected $fillable = [
        'user_id',
        'comment',
        'rating_number',
        'business_id'
    ];

    public function businessRating()
    {
        return $this->belongsTo(Business::class,'business_id');
    }
}
