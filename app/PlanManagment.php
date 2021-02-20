<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanManagment extends Model
{
    protected $table = 'plan_managment';

    public function PlanInfo()
    {
        return $this->hasOne(PlanInfo::class,'plan_id');
    }

}
