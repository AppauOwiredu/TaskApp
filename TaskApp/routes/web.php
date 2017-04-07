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

Route::get('/', function () {
    return view('welcome');
});


//Route for add new task

//Route::get('/add_task',function(){
//    return view('add');
//});
//Route::post('/add_task',function(){
//
//   return "about to add";
//});
Route::resource('/add_task','TaskController');

Auth::routes();