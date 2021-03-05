<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\BusinessExport;
use App\Imports\BusinessImport;
use Maatwebsite\Excel\Facades\Excel;
class BusinessImportController extends Controller
{
      /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request)
    {
        // dd($request->all());
        $category = $request->category_id;
        // $type = $request->type;
        Excel::import(new BusinessImport($category),request()->file('file'));

        return redirect()->back()->with('success','Course Uploaded Successfully');
    }
}
