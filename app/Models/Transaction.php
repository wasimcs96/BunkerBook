<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PlanManagment;
class Transaction extends Model
{
    protected $table = 'transaction';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function planManagement()
    {
        return $this->belongsTo(PlanManagment::class,'plan_id');
    }

}
