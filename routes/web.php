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
    return view('welcome');
});

// Shorted Syntax for web route
// Route::view('data','data');

// Route::get('/test', function () {
//     return view('test');
// });



Route::get('talents','TalentsController@list');
Route::post('talents','TalentsController@store');

// This can be used to replace all routes below with a single line
Route::resource('members','MembersController');
// Route::get('members','MembersController@index');
// Route::get('members/create','MembersController@create');
// Route::post('members','MembersController@store');
// Route::get('members/{member}','MembersController@show');
// Route::get('members/{member}/edit','MembersController@edit');
// Route::patch('members/{member}','MembersController@update');
// Route::delete('members/{member}','MembersController@destroy');

Route::get('contact','ContactFormController@create');
Route::post('contact','ContactFormController@store'); 