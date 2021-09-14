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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth');

//問3
Route::get('XXX', 'AAAController@bbb');

//問4
Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
Route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
});

?>
