<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    public function user()
    {
        return $this->hasMany(User::class,'countries_id');
    }
}

