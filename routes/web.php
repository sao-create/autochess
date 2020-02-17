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
    return view('top');
});


Route::group(['prefix' => 'member'], function() {
    Route::get('bosyu/create', 'Member\BosyuController@add');
    Route::post('bosyu/create', 'Member\BosyuController@create');
    Route::get('bosyu/edit', 'Member\BosyuController@edit');
    Route::post('bosyu/edit', 'Member\BosyuController@update');
    Route::get('bosyu', 'Member\BosyuController@index');
    Route::get('bosyu/delete', 'Member\BosyuController@delete');
});

Route::group(['prefix' => 'member'], function() {
    Route::get('capture/create', 'Member\CaptureController@add');
    Route::post('capture/create', 'Member\CaptureController@create');
    Route::get('capture/edit','Member\CaptureController@edit');
    Route::post('capture/edit', 'Member\CaptureController@update');
    Route::get('capture', 'Member\CaptureController@index');
    Route::get('capture/delete', 'Member\CaptureController@delete');
});

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
