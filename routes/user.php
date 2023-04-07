<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

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


Route::post('/register', 'App\Http\Controllers\Auth\UserAuthController@register');
Route::post('/login', 'App\Http\Controllers\Auth\UserAuthController@login');

// Route::middleware('auth:user-api')->group(function () {
//     Route::post('/display_student_info', 'App\Http\Controllers\CCController@display_student_info');
//     });

