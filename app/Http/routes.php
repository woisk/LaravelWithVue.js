<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/step2',function (){
   return view('step2');
});
Route::get('/step3',function(){
    return view('step3');
});
Route::get('/step4',function(){
	return view('step4');
});
Route::get('/step5',function(){
    return view('step5');
});
Route::get('/step6',function(){
    return view('step6');
});
Route::get('/step7',function (){
   return view('step7');
});
Route::get('/step8',function (){
    return view('step8');
});