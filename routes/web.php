<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function(){
//     return view('about');
// });

Route::get('/', 'FrondEndController@homePage')-> name('home');
Route::get('about', 'FrondEndController@aboutUs')-> name('about');
Route::get('contact', 'FrondEndController@contactUs')-> name('contact');

Route::view('StudentRegister','student_registration')->name('stud');
Route::post('StudRegister',[App\Http\Controllers\TestController::class,'fnStudentRegister']);
Route::get('Students',[App\Http\Controllers\TestController::class,'fnGetStudents']);

Route::get('DeleteStudent/{Id}',[App\Http\Controllers\TestController::class,'fnDelStudent']);
Route::get('UpdateStudent/{Id}',[App\Http\Controllers\TestController::class,'updateStudentData']);
Route::post('StudentUpdateData/{Id}',[App\Http\Controllers\TestController::class,'fnUpdateStudent']);