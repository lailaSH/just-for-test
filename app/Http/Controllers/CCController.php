<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomException;
use App\Models\File;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Student;

class CCController extends BaseController
{

   
    public function student_info_page( )
    {
        $students=null;
        return view('display',['students'=>$students]);
    }


    public function reference_info_page( )
    {
        $files=null;
    return view('file_uplode',['files'=>$files]);
    }

    public function files_page( )
    {
        $files=null;

    return view('select_type',['files'=>$files,'flag'=>0]);
    }

    public function display_student_info(Request $request)
    {
        $students = Student::number($request->student_number)->first();
        $students = DB::table('students')->where('id', $request->student_number)->get();
        return view('display',['students'=>$students]);
        // return $this->sendResponse($students, 'success');

    }

    public function display_student_info_name(Request $request)
    {
        $students = DB::table('students')->where('first_name', $request->student_name)->get();
        return view('display',['students'=>$students]);
    }

public function store_file(Request $request){

    $m=new Message();
    $request->validate([
        'class'=>'required'
    ],
    [
'class.required'=>$m->error_required()
    ]
);


$file = new File();
$file->class=$request->class;
$file->teacher_name=$request->teacher_name;
$file->type=$request->type;
$file->unit_number=$request->unit_number;

$name = $request->file('file')->getClientOriginalName();
// $path = $request->file('file')->storePubliclyAs('public/files',$request->file('file')->getClientOriginalName());
$file->path=Storage::disk('custom_folder_1')->put($name, $request->file('file'));
// $path = $request->file('file')->storeAs('custom_folder_1',$request->file('file')->getClientOriginalName());

$file->name=$name;
$file->save();

return redirect()->route('FU');



}

public function files_result(Request $request)
{
    $files = DB::table('reference')->where('class', $request->class)
    ->where('type', $request->type)
    ->get();
    return view('select_type',['files'=>$files,'p_class'=>$request->class,'flag'=>0]);
}

public function download_file($id)
{
    $file = DB::table('reference')->where('id', $id)->first();

    return Storage::download($file->path);
}
    

public function display_all_students(Request $request)
{
    $students = Student::paginate(
        $perPage = 8, $columns = ['*'], $pageName = 'students'
    );

    return view('test2', compact('students'));

}

public function bind_file(File $file)
{
   
    return view('test3', compact('file'));

}

public function custom()
{
   $a=false;
   if($a==false){
    throw new CustomException('hi');
   }

}






}
?>
