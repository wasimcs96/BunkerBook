<?php

namespace App\Imports;

use App\Models\Business;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Rule;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Carbon;
use App\Models\Category;

class BusinessImport implements ToModel, WithStartRow,  WithHeadingRow
{
    use Importable;
  public $category;


  public function  __construct($category, $country, $time)
  {
     $this->category=$category;
     $this->country=$country;
     $this->business_time=$time;
  }

  public function startRow(): int
    {
        return 2;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */



    public function model(array $row)
    {
    //    dd($row);
            $catim = null;
            // if($request->has('category')){
            $category = $this->category;
            $cat = explode(',',$category);
            $catfinds = Category::where('id',$category)->pluck('name');
            
            $catim =collect($catfinds)->implode(',');  
            // }
            $start_date= null ;
            $end_date= null ;
            $Sunday_start_date= null ;
            $Sunday_end_date= null ;
            $Monday_start_date= null ;
            $Monday_end_date= null ;
            $Tuesday_start_date= null ;
            $Tuesday_end_date= null ;
            $Wednesday_start_date= null ;
            $Wednesday_end_date= null ;
            $Thrusday_start_date= null ;
            $Thrusday_end_date= null ;
            $Friday_start_date= null ;
            $Friday_end_date= null ;
            $Saturday_start_date= null ;
            $Saturday_end_date= null ;
            if($this->business_time != 1){
        $start_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['business_start_time']))->format('H:i:s');
        $end_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['business_end_time']))->format('H:i:s');
        $Sunday_start_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['sunday_start_time']))->format('H:i:s');
        $Sunday_end_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['sunday_end_time']))->format('H:i:s');

        $Monday_start_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['monday_start_time']))->format('H:i:s');
        $Monday_end_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['monday_end_time']))->format('H:i:s');

        $Tuesday_start_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tuesday_start_time']))->format('H:i:s');
        $Tuesday_end_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tuesday_end_time']))->format('H:i:s');

        $Wednesday_start_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['wednesday_start_time']))->format('H:i:s');
        $Wednesday_end_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['wednesday_end_time']))->format('H:i:s');

        $Thrusday_start_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['thrusday_start_time']))->format('H:i:s');
        $Thrusday_end_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['thrusday_end_time']))->format('H:i:s');

        $Friday_start_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['friday_start_time']))->format('H:i:s');
        $Friday_end_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['friday_end_time']))->format('H:i:s');

        $Saturday_start_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['saturday_start_time']))->format('H:i:s');
        $Saturday_end_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['saturday_end_time']))->format('H:i:s');
}
        // $start_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['business_start_time']))->format('H:i:s');
        // $end_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['business_end_time']))->format('H:i:s');

        // $catim='saohia avesh';
            return new Business([
            'name' => $row['business_name'],
            'email' =>$row['business_email'],
            'plan_type'=>$row['plan_type'],
            'category' =>$this->category,
            'category_name'=> $catim,
            'country' => $this->country,
            'business_time' => $this->business_time,
            'status' => 1,
            'user_id' => auth()->user()->id,
            'website' =>$row['business_website'],
            'landline' => $row['business_landline'],
            'state' => $row['business_state'],
            'address' =>  $row['business_address'],
            'city'=>$row['city'],
            'start_time' =>$start_date,
            'end_time' =>  $end_date,
            'about' => $row['business_about'],
        'ports_of_operation' => $row['ports_of_operation'],

        'sunday' => $row['sunday'],
        'sunday_start_time' => $Sunday_start_date,
        'sunday_end_time' => $Sunday_end_date,
        
        'monday' => $row['monday'],
        'monday_start_time' => $Monday_start_date,
        'monday_end_time' => $Monday_end_date,
        
        'tuesday' => $row['tuesday'],
        'tuesday_start_time' => $Tuesday_start_date,
        'tuesday_end_time' => $Tuesday_end_date,
        
        'wednesday' =>$row['wednesday'],
        'wednesday_start_time' => $Wednesday_start_date,
        'wednesday_end_time' => $Wednesday_end_date,
        
        'thursday' => $row['thrusday'],
        'thursday_start_time' => $Thrusday_start_date,
        'thursday_end_time' => $Thrusday_end_date,
        
        'friday' => $row['friday'],
        'friday_start_time' => $Friday_start_date,
        'friday_end_time' => $Friday_end_date,
        
        'saturday'  => $row['saturday'],
        'saturday_start_time' => $Saturday_start_date,
        'saturday_end_time' => $Saturday_end_date,
        'mobile'=>$row['mobile'],
        ]);

    }

}
