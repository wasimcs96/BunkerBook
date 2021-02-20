<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanInfo extends Model
{
    protected $table = 'plan_info';

    public function userPlanInfo()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function planManagment()
    {
        return $this->belongsto(PlanManagment::class,'plan_id');
    }


}
