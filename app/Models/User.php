<?php

namespace App\Models;
use App\Models\Method\RoleMethod;
use App\Models\Method\UserMethod;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens;
    use Notifiable, HasRoles,UserMethod;

    const NOT_ACTIVE = 'not_active';
    const ACTIVE = 'active';

    protected $table = 'users';

    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'email',
        'status',
        'address',
        'birth_year',
        'image',
        'original_image_path',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function transaction()
    {
        return $this->hasMany(Transaction::class,'user_id');
    }


    public function feedback()
    {
        return $this->hasMany(Feedback::class,'user_id');
    }

    public function planInfo()
    {
        return $this->hasOne(PlanInfo::class,'user_id');
    }

    public function userPlanInfo()
    {
        return $this->hasOne(User::class,'user_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class,'countries_id');
    }

    public function business()
    {
        return $this->hasOne(Business::class,'user_id');
    }

    public function bookmark()
    {
        return $this->hasMany(Bookmark::class,'user_id');
    }
}
