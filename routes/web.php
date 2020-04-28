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

Route::get('members','MembersController@list');

Route::post('members','MembersController@store');
