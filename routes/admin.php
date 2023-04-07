<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\AdminController;

use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



// Route::post('/test', 'App\Http\Controllers\Auth\AdminController@test');


    Route::group( ['middleware' => ['auth:admin-api'] ],function(){
        // authenticated staff routes here 
        Route::post('/display_student_info', 'App\Http\Controllers\CCController@display_student_info');
    });