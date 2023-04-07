<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
CCController,
ImageController,
AltController
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/student_info_page',function() {
     $students=null;
    return view('display',['students'=>$students]);
 });

// Route::get('/student_info_page', 'App\Http\Controllers\CCController@student_info_page')->name('SI');

Route::get('/file_uplode_page', [CCController::class,'reference_info_page'])->name('FU');

Route::get('/file_select_page', 'App\Http\Controllers\CCController@files_page');

Route::get('/download/{id}', 'App\Http\Controllers\CCController@download_file')->name('download_file');

Route::post('/display_student_info', 'App\Http\Controllers\CCController@display_student_info')->name('student_info');

Route::post('/display_student_info_name', 'App\Http\Controllers\CCController@display_student_info_name')->name('student_info_name');

Route::post('/uplode', 'App\Http\Controllers\CCController@store_file')->name('uplode_file');

Route::post('/files_result_is_here', 'App\Http\Controllers\CCController@files_result')->name('files_results');

Route::get('/all_students', 'App\Http\Controllers\CCController@display_all_students');

Route::get('/file_info/{file:slug}', [CCController::class,'bind_file']);

// Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
//     Route::view('/test', 'test1');

// });

Route::view('/test3', 'test3');

Route::post('/store_img', 'App\Http\Controllers\ImageController@store_image')->name('store_img');
//////////////////slug
Route::post('/store_alt', [AltController::class,'store_alt'])->name('store_alt');
Route::get('/alt_info/{alt:slug}', [AltController::class,'bind_alt']);
