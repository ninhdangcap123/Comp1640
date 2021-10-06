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


Route::get('/', 'App\Http\Controllers\IdeaController@store')->name('create');

Route::get('/user', function () {
    return view('user');
});

Route::get('/Idea', function () {
    return view('idea');
});

Route::get('/page', function () {
    return view('page');


});


Auth::routes();




