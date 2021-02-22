<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $table = 'bookmarks';

    public function userBookmark()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
