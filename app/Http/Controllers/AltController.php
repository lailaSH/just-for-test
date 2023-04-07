<?php

namespace App\Http\Controllers;

use App\Models\Alt;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AltController extends Controller
{
    public function store_alt(Request $request)
    {
     

    $alt=new Alt();
    $alt->name= $request->name;
    // $alt->slug=\Str::slug($request->name);
    $alt->save();
    }

    public function bind_alt(Alt $alt)
{
   
    return view('test4', compact('alt'));

}

}
