<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Business extends Model
{
    protected $table = 'business';

    protected $fillable = ['type', 'name', 'email', 'category','category_name', 'website', 'landline', 'address', 'country', 'start_time',
                           'end_time', 'business_profile', 'featured_banner_image', 'about', 'ports_of_operation', 'sunday',
                           'sunday_start_time', 'sunday_end_time', 'monday', 'monday_start_time', 'monday_end_time', 'tuesday',
                           'tuesday_start_time', 'tuesday_end_time', 'wednesday', 'wednesday_start_time', 'wednesday_end_time', 'thursday',
                           'thursday_start_time', 'thursday_end_time', 'friday', 'friday_start_time', 'friday_end_time', 'saturday',
                           'saturday_start_time', 'saturday_end_time', 'photos', 'videos'  ];

    public function businessImage()
    {
        return $this->hasMany(BusinessImage::class,'business_id');
    }

    public function businessVideo()
    {
        return $this->hasMany(BusinessVideo::class,'business_id');
    }

    public function businessRating()
    {
        return $this->hasMany(BusinessRating::class,'business_id');
    }

    public function businessRequest()
    {
        return $this->hasMany(BusinessRequest::class,'business_id');
    }

    public function businessStaff()
    {
        return $this->hasMany(BusinessStaff::class,'business_id');
    }

    public function userBusiness()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(category::class,'category');
    }

    public function bookmark()
    {
        return $this->hasMany(Bookmark::class,'business_id');
    }

    
    public function country()
    {
        return $this->belongsTo(Business::class,'country');
    }

}
