<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Website\WebsiteController@website_index')->name('website.index');

Auth::routes();





Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
    Route::get('/dashboard', 'HomeController@index')->name('admin.home');


    /**
     * BRANDS Route
     */
    Route::prefix('slider')->name('slider.')->group(function () {
        Route::get('/manage', 'Admin\SliderController@index')->name('manage');
        Route::get('/add', 'Admin\SliderController@add')->name('add');
        Route::post('/store', 'Admin\SliderController@store')->name('store');
        Route::get('/edit/{id}', 'Admin\SliderController@edit')->name('edit');
        Route::post('/update/{id}', 'Admin\SliderController@update')->name('update');
        Route::get('/delete/{id}', 'Admin\SliderController@delete')->name('delete');
    });
   // Route::get('/slider/update-status/{id}/{status}', 'Admin\SliderController@updateStatus')->name('updateStatus');


    Route::prefix('permission')->name('permission.')->group(function () {
        Route::get('/manage', 'Admin\PermissionController@index')->name('manage');
        Route::get('/edit/{id}', 'Admin\PermissionController@edit')->name('edit');
        Route::post('/update/{id}', 'Admin\PermissionController@update')->name('update');
        Route::get('/delete/{id}', 'Admin\PermissionController@delete')->name('delete');
    });

});
