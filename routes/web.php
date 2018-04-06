<?php

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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['middleware'=>['web']],function(){
    Route::get('/',['uses'=>'StudentController@index']);
    Route::get('student/index',['uses'=>'StudentController@index']);
    Route::any('student/create',['uses'=>'StudentController@create']);
    Route::any('student/save',['uses'=>'StudentController@save']);
    Route::any('student/update/{id}',['uses'=>'StudentController@update']);
    Route::any('student/detail/{id}',['uses'=>'StudentController@detail']);
    Route::any('student/delete/{id}',['uses'=>'StudentController@delete']);
});
