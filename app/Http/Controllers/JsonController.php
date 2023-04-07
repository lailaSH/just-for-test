<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\File;

class JsonController extends BaseController{

    public function uplode(Request $request){
        $data = $request->only('name','email','mobile_number');
        $test['data'] = json_encode($data);
        $fileName =  time(). '_datafile.json';
        // File::put(public_path('/upload/json/'.$fileName),$test);
        $path=Storage::disk('public')->put('/upload/json/'.$fileName, $test);
        return $this->sendResponse($path,'falid');
    }
    public function download(Request $request){


        return Storage::download('public/upload/json/1679936117_datafile.json');

    }
}
