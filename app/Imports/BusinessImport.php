<?php

namespace App\Imports;

use App\Models\UniversityCourse;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Rule;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Carbon;

class BusinessImport implements ToModel, WithStartRow, WithHeadingRow
{
    use Importable;
  public $category;


  public function  __construct($category)
  {
     $this->category=$category;
    //  $this->type=$type;
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
        dd($row);
        $start_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[9]))->format('Y-m-d');
        $end_date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[10]))->format('Y-m-d');
            return new UniversityCourse([
            'category_id' =>$this->category,
            'title' => $row[0],
            'type' => $this->type,
            'user_id' => auth()->user()->id,
            'description' => $row[1],
            'fees' => $row[2],
            'start_date' => $start_date,
            'end_date' => $end_date,
        ]);

    }

}
