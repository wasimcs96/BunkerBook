<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    public function userFeedback()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
