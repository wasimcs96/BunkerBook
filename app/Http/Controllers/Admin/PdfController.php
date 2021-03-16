<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pdfdocs;
class PdfController extends Controller
{
    public function index(){
        return view('pdf.index');
    }

    public function create(){
        return view('pdf.create');
    }

    public function store(Request $request){
$files = $request->file;
        foreach($files as $file){
        // if($request->has('file')){
            $featured = $file;
            $featured_new_name = time() . $featured->getclientOriginalName();

            $featured->move('uploads/documents',$featured_new_name);

            $storeimg = 'uploads/documents/' . $featured_new_name;
            // }
        Pdfdocs::create([

            'file'=>$storeimg,
            'file_name'=>$request->file_name,
            ]);
        }
            return redirect()->back()->with('success','Document Uploaded Successfully');

    }

    
    public function destroy($id){
      
      $del = Pdfdocs::find($id);
      $del->delete();
                    return redirect()->back()->with('success','Document Uploaded Successfully');
        
            }
}
