<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanInfo extends Model
{
    protected $table = 'plan_info';

    protected $fillable = ['plan_id','user_id','start_date','end_date','amount'];

    public function userPlanInfo()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function planManagment()
    {
        return $this->belongsto(PlanManagment::class,'plan_id');
    }


}
