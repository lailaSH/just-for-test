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
Route::post('/login', 'App\Http\Controllers\Auth\UserAuthController@login')->name('login');
Route::post('/login/admin', 'App\Http\Controllers\Auth\UserAuthController@loginAdmin')->name('loginAdmin');;



Route::group( ['middleware' => ['auth:user-api','scopes:user'] ],function(){
        // authenticated staff routes here 
       
        Route::post('/display_info', 'App\Http\Controllers\CCController@display_student_info');
        Route::post('/logout', 'App\Http\Controllers\Auth\UserAuthController@logout');

    });


    /////////////////////////////////////////////


    Route::group( ['middleware' => ['auth:admin-api','scopes:admin'] ],function(){
        // authenticated staff routes here 
        Route::post('/logoutAdmin', 'App\Http\Controllers\Auth\UserAuthController@logoutAdmin');

    });


    Route::post('/uplode', 'App\Http\Controllers\JsonController@uplode');
    Route::get('/download', 'App\Http\Controllers\JsonController@download');

    Route::get('/sendMail', 'App\Http\Controllers\MailController@sendMail');
