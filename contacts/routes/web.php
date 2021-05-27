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

Route::get('/', function () {
   return view('login_signup');
});



Route::get('/create', function () {
   return view('add');
});

Route::get('/logout', function () {
   return view('login_signup');
});



Route::get('/login','ActivityController@login');
Route::get('/signup','ActivityController@signup');
// Route::get('/logout', 'ActivityController@logout');



Route::get('/home','ActivityController@home');




Route::get('/insert','ActivityController@insert');
Route::get('/additional','ActivityController@additional');




Route::get('/save_update','ActivityController@update');

Route::get('/del_this','ActivityController@del_this_fun');

Route::get('/me','ActivityController@me_display');

Route::get('/update_me','ActivityController@update_me');



