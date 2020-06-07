<?php
/* admin routes */
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::group(['prefix'=>'dashbord','middleware' => 'web'],function(){
            /* 3 pages */
            Route::get('/club','backEndController@club')->name('club.page');
            Route::get('/Insurance','backEndController@Insurance')->name('Insurance.page');
            Route::get('/online','backEndController@online')->name('online.page');
            /* 3 pages */
            Route::get('/index','backEndController@index')->name('indexRoute');
            Route::get('/indexRegister','backEndController@indexRegister')->name('indexRegister');
            /* patient routes */
            Route::get('/patien/register','patienController@register')->name('patienRegister');
            Route::post('/patien/register','patienController@postRegister')->name('patien_post_Register')->middleware('verified');;
            Route::get('/patien/profile/{id}','patienController@profile')->name('patien-profile')->middleware('is_patient');
            Route::get('/patien/edit/profile/{id}','patienController@editProfile')->name('edit.profile')->middleware('is_patient');
            Route::post('patien/update/profile/{id}','patienController@updateProfile')->name('update.profile');
            Route::get('/patien/logout','patienController@logout')->name('patien.logout');
            Route::get('/patien/edit/data/{id}','patienController@editData')->name('edit.data.profile');
            Route::put('/patien/update/data/{id}','patienController@updateData')->name('update.data.profile');

            /* patient routes */
            /* clinic routes */
            Route::get('/clinic/register','clinicController@register')->name('clinicRegister');
            Route::post('/clinic/register','clinicController@postRegister')->name('clinic_post_Register');
            Route::get('/clinic/edit/profile/{id}','clinicController@editProfile')->name('clinic.edit.profile')->middleware('is_clinic');
            Route::get('/clinic/profile/{id}','clinicController@profile')->name('clinic.profile')->middleware('is_clinic');
            Route::get('/clinic/logout','clinicController@logout')->name('clinic.logout');
            Route::get('/clinic/{id}/patient/search','clinicController@search')->name('clinic.patient.search')->middleware('is_clinic');
            Route::put('/clinic/profile/{id}','clinicController@updateProfile')->name('clinic.update.profile');
            Route::post('/clinic/{id}/raoucata','clinicController@storeRaoucata')->name('storeRaoucata');
            Route::post('/clinic/{id}/analazes','clinicController@patient_add_analzes')->name('patient_clinic_add_analzes');
            Route::post('/clinic/{id}/rays','clinicController@patient_add_rays')->name('patient_clinic_add_rays');
            /* clinic routes */
            /* hosptail routes */
            Route::get('/hosptail/register','hosptailController@register')->name('hosptailRegister');
            Route::post('/hosptail/register','hosptailController@postRegister')->name('hosptail_post_Register');
            Route::get('/hosptail/edit/profile/{id}','hosptailController@editProfile')->name('hosptail.edit.profile')->middleware('is_hosptail');
            Route::put('/hosptail/profile/{id}','hosptailController@updateProfile')->name('hosptail.update.profile');
            Route::get('/hosptail/profile/{id}','hosptailController@profile')->name('hosptail.profile')->middleware('is_hosptail');
            Route::get('/hosptail/logout','hosptailController@logout')->name('hosptail.logout');
            Route::get('/hosptail/{id}/patient/search','hosptailController@search')->name('hosptail.patient.search')->middleware('is_hosptail');
            Route::post('/hosptail/{id}/raoucata','hosptailController@storeRaoucata')->name('storeRaoucata');
            Route::post('/hosptail/{id}/analazes','hosptailController@patient_add_analzes')->name('patient_add_analzes');
            Route::post('/hosptail/{id}/rays','hosptailController@patient_add_rays')->name('patient_add_rays');
            /* hosptail routes */
            /* xray routes */
            Route::get('/xray/register','xrayController@register')->name('xrayRegister');
            Route::post('/xray/register','xrayController@postRegister')->name('xray_post_Register');
            Route::get('/xray/profile/{id}','xrayController@profile')->name('xray.profile')->middleware('is_xray');
            Route::get('xray/edit/profile/{id}','xrayController@editProfile')->name('xray.edit.profile')->middleware('is_xray');
            Route::put('/xray/update/profile/{id}','xrayController@updateProfile')->name('xray.update.profile');
            Route::get('/xray/logout','xrayController@logout')->name('xray.logout');
            Route::get('/xray/{id}/patient/search','xrayController@search')->name('xray.patient.search')->middleware('is_xray');
            /* xray routes */
            /* labs routes */
            Route::get('/labs/register','labsController@register')->name('labsRegister');
            Route::post('/labs/register','labsController@postRegister')->name('labs_post_Register');
            Route::get('/labs/edit/profile/{id}','labsController@editProfile')->name('labs.edit.profile')->middleware('is_lab');
            Route::put('/labs/update/profile/{id}','labsController@updateProfile')->name('labs.update.profile');
            Route::get('/labs/profile/{id}','labsController@profile')->name('labs.profile')->middleware('is_lab');
            Route::get('/labs/logout','labsController@logout')->name('labs.logout');
            Route::get('/labs/{id}/patient/search','labsController@search')->name('labs.patient.search')->middleware('is_lab');
            /* labs routes */
            /* pharmacy routes */
            Route::get('/pharmacy/register','pharmacyController@register')->name('pharmacyRegister');
            Route::post('/pharmacy/register','pharmacyController@postRegister')->name('pharmacy_post_Register');
            Route::get('/pharmacy/profile/{id}','pharmacyController@profile')->name('pharmacy.profile')->middleware('is_pharmacy');
            Route::get('/pharmacy/edit/profile/{id}','pharmacyController@editProfile')->name('pharmacy.edit.profile')->middleware('is_pharmacy');
            Route::put('/pharmacy/update/profile/{id}','pharmacyController@updateProfile')->name('pharmacy.update.profile');
            Route::get('/pharmacy/logout','pharmacyController@logout')->name('pharmacy.logout');
            Route::get('/pharmacy/{id}/patient/search','pharmacyController@search')->name('pharmacy.patient.search')->middleware('is_pharmacy');
            /* pharmacy routes */
            /* login route */
            Route::post('/login','backEndController@login')->name('loginRoute');

        });
    });


/* admin routes */



?>