<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = [
        'feedback_id',
        'user_id',
        'subject', 
        'message',
        'attachment',
    ];

    public function userFeedback()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
