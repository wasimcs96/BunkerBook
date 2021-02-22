<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsFeed extends Model
{
    protected $table = 'news_feed';
 
    protected $fillable=['title','description','image','youtube_link'];
}
