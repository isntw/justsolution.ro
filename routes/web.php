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
Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'WebController@index')->name('web.index');
    Route::get('/work', 'WebController@work')->name('web.work');
    Route::get('/services', 'WebController@services')->name('web.services');
    Route::get('/pricing', 'WebController@pricing')->name('web.pricing');
    Route::get('/about', 'WebController@about')->name('web.about');
    Route::get('/contact', 'WebController@contact')->name('web.contact');
});
