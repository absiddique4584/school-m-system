<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Website\WebsiteController@website_index')->name('website.index');

Auth::routes();


//website route
Route::group(['middleware' => 'auth'], function () {
    //admission route
    Route::get('admission/manage', 'Website\AdmissionController@index')->name('admission.manage');
    Route::post('admission/student', 'Website\AdmissionController@studentAdmission')->name('admission.student.part');
    Route::get('admission/parents/section', 'Website\AdmissionController@parentsSection');
    Route::post('admission/parents/section', 'Website\AdmissionController@parents_p_Section')->name('admission.parents.box');
    Route::get('admission/admission-message', 'Website\AdmissionController@admissionMessage');
    //student list route
    Route::get('studentlist/manage', 'Website\StudentlistController@index')->name('studentlist.manage');
});


#--------------------------------------------------#

//Admin route
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




    Route::prefix('institution')->name('institution.')->group(function () {
        Route::get('/manage', 'Admin\InstitutionController@index')->name('manage');
        Route::post('/store', 'Admin\InstitutionController@store')->name('store');
        Route::get('/edit/{id}', 'Admin\InstitutionController@edit')->name('edit');
        Route::post('/update/{id}', 'Admin\InstitutionController@update')->name('update');
        Route::get('/delete/{id}', 'Admin\InstitutionController@delete')->name('delete');
    });


    Route::prefix('admit')->name('admit.')->group(function () {
        Route::get('/manage', 'Admin\AdmissionAdminController@index')->name('manage');
        Route::post('/store', 'Admin\AdmissionAdminController@store')->name('store');
        Route::get('/edit/{id}', 'Admin\AdmissionAdminController@edit')->name('edit');
        Route::post('/update/{id}', 'Admin\AdmissionAdminController@update')->name('update');
        Route::get('/delete/{id}', 'Admin\AdmissionAdminController@delete')->name('delete');
    });


    Route::prefix('admission')->name('admission.')->group(function () {
        Route::get('/one', 'Admin\AdmissionAdminController@one')->name('one');
        Route::get('/two', 'Admin\AdmissionAdminController@two')->name('two');
        Route::get('/three', 'Admin\AdmissionAdminController@three')->name('three');
        Route::get('/four', 'Admin\AdmissionAdminController@four')->name('four');
        Route::get('/five', 'Admin\AdmissionAdminController@five')->name('five');
        Route::get('/six', 'Admin\AdmissionAdminController@six')->name('six');
        Route::get('/seven', 'Admin\AdmissionAdminController@seven')->name('seven');
        Route::get('/eight', 'Admin\AdmissionAdminController@eight')->name('eight');
        Route::get('/nine', 'Admin\AdmissionAdminController@nine')->name('nine');
        Route::get('/ten', 'Admin\AdmissionAdminController@ten')->name('ten');
        Route::get('/eleven', 'Admin\AdmissionAdminController@eleven')->name('eleven');
        Route::get('/twelve', 'Admin\AdmissionAdminController@twelve')->name('twelve');
    });


    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/manage', 'Admin\SettingsController@index')->name('manage');
        Route::get('/add', 'Admin\SettingsController@add')->name('add');
        Route::post('/store', 'Admin\SettingsController@store')->name('store');
        Route::get('/edit/{id}', 'Admin\SettingsController@edit')->name('edit');
        Route::post('/update/{id}', 'Admin\SettingsController@update')->name('update');
        Route::get('/delete/{id}', 'Admin\SettingsController@delete')->name('delete');
    });

});
