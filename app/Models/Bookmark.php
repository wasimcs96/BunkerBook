<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $table = 'bookmark';

    protected $fillable = ['bookmark_id','business_id','user_id'];

    public function userBookmark()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function business()
    {
        return $this->belongsTo(Business::class,'business_id');
    }
    
}
