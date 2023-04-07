<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Student;

class Message extends Controller
{

public function error_required():String
{
    $message ="this field is required";
    return $message;

}

}
?>