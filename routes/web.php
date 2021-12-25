<?php


Route::namespace('Front')->name('front.')->group(function () {
    Route::get('/', 'MainController@index')->name('index');
});

Auth::routes();

Route::prefix('admin')->middleware('admin')->namespace('Admin')->name('admin.')->group(function () {
    Route::get('/', 'MainController@index')->name('index');
});

