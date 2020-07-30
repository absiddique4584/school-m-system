<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Website\WebsiteController@website_index')->name('website.index');

Auth::routes();



    //admission route
    Route::get('admission/manage', 'Website\AdmissionController@index')->name('admission.manage');
    Route::post('admission/student', 'Website\AdmissionController@studentAdmission')->name('admission.student.part');
    Route::get('admission/parents/section', 'Website\AdmissionController@parentsSection');
    Route::post('admission/parents/section', 'Website\AdmissionController@parents_p_Section')->name('admission.parents.box');
    Route::get('admission/admission-message', 'Website\AdmissionController@admissionMessage');


    //student list route
    Route::get('studentlist/manage', 'Website\StudentlistController@index')->name('studentlist.manage');
    Route::get('studentlist/manage/one', 'Website\StudentlistController@one')->name('studentlist.manage.one');
    Route::get('studentlist/manage/two', 'Website\StudentlistController@two')->name('studentlist.manage.two');
    Route::get('studentlist/manage/three', 'Website\StudentlistController@three')->name('studentlist.manage.three');
    Route::get('studentlist/manage/four', 'Website\StudentlistController@four')->name('studentlist.manage.four');
    Route::get('studentlist/manage/five', 'Website\StudentlistController@five')->name('studentlist.manage.five');
    Route::get('studentlist/manage/six', 'Website\StudentlistController@six')->name('studentlist.manage.six');
    Route::get('studentlist/manage/seven', 'Website\StudentlistController@seven')->name('studentlist.manage.seven');
    Route::get('studentlist/manage/eight', 'Website\StudentlistController@eight')->name('studentlist.manage.eight');
    Route::get('studentlist/manage/nine', 'Website\StudentlistController@nine')->name('studentlist.manage.nine');
    Route::get('studentlist/manage/ten', 'Website\StudentlistController@ten')->name('studentlist.manage.ten');
    Route::get('studentlist/manage/eleven', 'Website\StudentlistController@eleven')->name('studentlist.manage.eleven');
    Route::get('studentlist/manage/twelve', 'Website\StudentlistController@twelve')->name('studentlist.manage.twelve');
    //Route::get('studentlist/manage/others', 'Website\StudentlistController@others')->name('studentlist.manage.others');



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

    Route::prefix('admission')->name('admission.')->group(function () {
        Route::get('/one/delete/{id}', 'Admin\AdmissionDeleteController@oneDelete')->name('one.delete');
        Route::get('/two/delete/{id}', 'Admin\AdmissionDeleteController@twoDelete')->name('two.delete');
        Route::get('/three/delete/{id}', 'Admin\AdmissionDeleteController@threeDelete')->name('three.delete');
        Route::get('/four/delete/{id}', 'Admin\AdmissionDeleteController@fourDelete')->name('four.delete');
        Route::get('/five/delete/{id}', 'Admin\AdmissionDeleteController@fiveDelete')->name('five.delete');
        Route::get('/six/delete/{id}', 'Admin\AdmissionDeleteController@sixDelete')->name('six.delete');
        Route::get('/seven/delete/{id}', 'Admin\AdmissionDeleteController@sevenDelete')->name('seven.delete');
        Route::get('/eight/delete/{id}', 'Admin\AdmissionDeleteController@eightDelete')->name('eight.delete');
        Route::get('/nine/delete/{id}', 'Admin\AdmissionDeleteController@nineDelete')->name('nine.delete');
        Route::get('/ten/delete/{id}', 'Admin\AdmissionDeleteController@tenDelete')->name('ten.delete');
        Route::get('/eleven/delete/{id}', 'Admin\AdmissionDeleteController@elevenDelete')->name('eleven.delete');
        Route::get('/twelve/delete/{id}', 'Admin\AdmissionDeleteController@twelveDelete')->name('twelve.delete');
    });

//subjects route
    Route::prefix('subjects')->name('subjects.')->group(function () {
        Route::get('/manage', 'Admin\SubjectsController@index')->name('manage');


        Route::get('/manage/one', 'Admin\SubjectsController@one')->name('manage.one');
        Route::get('/manage/one/delete/{id}', 'Admin\SubjectsController@delete')->name('manage.one.delete');
        Route::get('/manage/one/edit/{id}', 'Admin\SubjectsController@edit')->name('manage.one.edit');
        Route::post('/manage/one/update/{id}', 'Admin\SubjectsController@update')->name('manage.one.update');
        Route::post('/manage/one/store', 'Admin\SubjectsController@store')->name('manage.one.store');
        Route::get('/manage/one/add', 'Admin\SubjectsController@add')->name('manage.one.add');


        Route::get('/manage/two', 'Admin\SubjectsController@two')->name('manage.two');
        Route::get('/manage/three', 'Admin\SubjectsController@three')->name('manage.three');
        Route::get('/manage/four', 'Admin\SubjectsController@four')->name('manage.four');
        Route::get('/manage/five', 'Admin\SubjectsController@five')->name('manage.five');
        Route::get('/manage/six', 'Admin\SubjectsController@six')->name('manage.six');
        Route::get('/manage/seven', 'Admin\SubjectsController@seven')->name('manage.seven');
        Route::get('/manage/eight', 'Admin\SubjectsController@eight')->name('manage.eight');
        Route::get('/manage/nine', 'Admin\SubjectsController@nine')->name('manage.nine');
        Route::get('/manage/ten', 'Admin\SubjectsController@ten')->name('manage.ten');
        Route::get('/manage/eleven', 'Admin\SubjectsController@eleven')->name('manage.eleven');
        Route::get('/manage/twelve', 'Admin\SubjectsController@twelve')->name('manage.twelve');
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
