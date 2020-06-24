<?php
/* admin routes */
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::group(['prefix'=>'dashbord','middleware' => 'web'],function(){
            /* reset password patient */
            Route::group(['namespace'=>'patient'],function(){
            Route::post('password/email','ForgotPasswordController@sendResetLinkEmail')->name('patient.password.email');
            Route::get('password/reset','ForgotPasswordController@showLinkRequestForm')->name('patient.password.request');
            Route::post('password/reset','ResetPasswordController@reset');
            Route::get('password/reset/{token?}','ResetPasswordController@showResetForm')->name('patient.password.reset');
            });
            /* reset password patient */
            /* 3 pages */
            Route::get('/club','backEndController@club')->name('club.page');
            Route::get('/Insurance','backEndController@Insurance')->name('Insurance.page');
            Route::get('/online','backEndController@online')->name('online.page');
            /* 3 pages */

            Route::get('/index','backEndController@index')->name('indexRoute');
            Route::get('/indexRegister','backEndController@indexRegister')->name('indexRegister');
            /* patient routes */
            Route::get('/patien/register','patienController@register')->name('patienRegister');
            Route::post('/patien/register','patienController@postRegister')->name('patien_post_Register');
            Route::get('/patien/profile/{id}','patienController@profile')->name('patien-profile')->middleware('is_patient');
            Route::get('/patien/edit/profile/{id}','patienController@editProfile')->name('edit.profile')->middleware('is_patient');
            Route::post('patien/update/profile/{id}','patienController@updateProfile')->name('update.profile');
            Route::get('/patien/logout','patienController@logout')->name('patien.logout');
            Route::get('/patien/edit/data/{id}','patienController@editData')->name('edit.data.profile');
            Route::put('/patien/update/data/{id}','patienController@updateData')->name('update.data.profile');
            Route::get('/patien/sendEmail/{id}','patienController@sendEmail')->name('patient_send_email');
            Route::get('/patien/verify/{id}','patienController@verifyPatient')->name('verifyPatient');
            Route::get('/verifyCode','backEndController@verify');
            Route::post('/verifyCode','backEndController@postVerify')->name('postVerify');
            Route::get('/ver','patienController@verfi');
            /* old pescription route */
            Route::get('/patien/old_pescription/{id}','patienController@getOldpescription')->name('get_old_pescription');
            /* patient routes */
            /* clinic routes */
            Route::get('/clinic/register','clinicController@register')->name('clinicRegister');
            Route::post('/clinic/register','clinicController@postRegister')->name('clinic_post_Register');
            Route::get('/clinic/edit/profile/{id}','clinicController@editProfile')->name('clinic.edit.profile')->middleware('is_clinic');
            Route::get('/clinic/profile/{id}','clinicController@profile')->name('clinic.profile')->middleware('is_clinic');
            Route::get('/clinic/logout','clinicController@logout')->name('clinic.logout');
            Route::get('/clinic/{id}/patient/search','clinicController@search')->name('clinic.patient.search')->middleware('is_clinic');
            Route::put('/clinic/profile/{id}','clinicController@updateProfile')->name('clinic.update.profile');
            Route::post('/clinic/{id}/raoucata','clinicController@storeRaoucata')->name('store_clinic_Raoucata');
            Route::post('/clinic/add/analazes/{id}','clinicController@patient_clinic_add_analzes')->name('patient_clinic_add_analzes');
            Route::post('/clinic/add/rays/{id}','clinicController@patient_clinic_add_rays')->name('patient_clinic_add_rays');
            Route::get('/clinic/verify/{id}','clinicController@verifyClinic')->name('verifyClinic');
            Route::get('/clinic/sendEmail/{id}','clinicController@sendEmail')->name('clinic_send_email');
            /* clinic routes */
            /* hosptail routes */
            Route::get('/hosptail/register','hosptailController@register')->name('hosptailRegister');
            Route::post('/hosptail/register','hosptailController@postRegister')->name('hosptail_post_Register');
            Route::get('/hosptail/edit/profile/{id}','hosptailController@editProfile')->name('hosptail.edit.profile')->middleware('is_hosptail');
            Route::put('/hosptail/profile/{id}','hosptailController@updateProfile')->name('hosptail.update.profile');
            Route::get('/hosptail/profile/{id}','hosptailController@profile')->name('hosptail.profile')->middleware('is_hosptail');
            Route::get('/hosptail/logout','hosptailController@logout')->name('hosptail.logout');
            Route::get('/hosptail/{id}/patient/search','hosptailController@search')->name('hosptail.patient.search')->middleware('is_hosptail');
            Route::post('/hosptail/{id}/raoucata','hosptailController@storeRaoucata')->name('store_hosptail_Raoucata');
            Route::post('/hosptail/add/analazes/{id}','hosptailController@patient_hosptail_add_analzes')->name('patient_add_analzes');
            Route::post('/hosptail/add/rays/{id}','hosptailController@patient_hosptail_add_rays')->name('patient_add_rays');
            Route::get('/hosptail/verify/{id}','hosptailController@verifyhosptail')->name('verifyhosptail');
            Route::get('/hosptail/sendEmail/{id}','hosptailController@sendEmail')->name('hosptail_send_email');
            /* hosptail routes */
            /* xray routes */
            Route::get('/xray/register','xrayController@register')->name('xrayRegister');
            Route::post('/xray/register','xrayController@postRegister')->name('xray_post_Register');
            Route::get('/xray/profile/{id}','xrayController@profile')->name('xray.profile')->middleware('is_xray');
            Route::get('xray/edit/profile/{id}','xrayController@editProfile')->name('xray.edit.profile')->middleware('is_xray');
            Route::put('/xray/update/profile/{id}','xrayController@updateProfile')->name('xray.update.profile');
            Route::get('/xray/logout','xrayController@logout')->name('xray.logout');
            Route::get('/xray/{id}/patient/search','xrayController@search')->name('xray.patient.search')->middleware('is_xray');
            Route::get('/xray/verify/{id}','xrayController@verifyXray')->name('verifyXray');
            Route::get('/xray/sendEmail/{id}','xrayController@sendEmail')->name('xray_send_email');
            Route::post('/xray/add/analzes/{id}','xrayController@addStorgeAnalzes')->name('patient_storge_analzes');
            /* xray routes */
            /* labs routes */
            Route::get('/labs/register','labsController@register')->name('labsRegister');
            Route::post('/labs/register','labsController@postRegister')->name('labs_post_Register');
            Route::get('/labs/edit/profile/{id}','labsController@editProfile')->name('labs.edit.profile')->middleware('is_lab');
            Route::put('/labs/update/profile/{id}','labsController@updateProfile')->name('labs.update.profile');
            Route::get('/labs/profile/{id}','labsController@profile')->name('labs.profile')->middleware('is_lab');
            Route::get('/labs/logout','labsController@logout')->name('labs.logout');
            Route::get('/labs/{id}/patient/search','labsController@search')->name('labs.patient.search')->middleware('is_lab');
            Route::get('/labs/verify/{id}','labsController@verifyLabs')->name('verifyLabs');
            Route::get('/labs/sendEmail/{id}','labsController@sendEmail')->name('labs_send_email');
            Route::post('/labs/add/rays/{id}','labsController@addStorgeRays')->name('patient_storge_rays');
            /* labs routes */
            /* pharmacy routes */
            Route::get('/pharmacy/register','pharmacyController@register')->name('pharmacyRegister');
            Route::post('/pharmacy/register','pharmacyController@postRegister')->name('pharmacy_post_Register');
            Route::get('/pharmacy/profile/{id}','pharmacyController@profile')->name('pharmacy.profile')->middleware('is_pharmacy');
            Route::get('/pharmacy/edit/profile/{id}','pharmacyController@editProfile')->name('pharmacy.edit.profile')->middleware('is_pharmacy');
            Route::put('/pharmacy/update/profile/{id}','pharmacyController@updateProfile')->name('pharmacy.update.profile');
            Route::get('/pharmacy/logout','pharmacyController@logout')->name('pharmacy.logout');
            Route::get('/pharmacy/{id}/patient/search','pharmacyController@search')->name('pharmacy.patient.search')->middleware('is_pharmacy');
            Route::get('/pharmacy/verify/{id}','pharmacyController@verifyPharmacy')->name('verifyPharmacy');
            Route::get('/pharmacy/sendEmail/{id}','pharmacyController@sendEmail')->name('pharmacy_send_email');
            // Route::get('/pharmacy/{id}/patient/getroacata','pharmacyController@getLastRoacata')->name('get.last.roacata');
            /* pharmacy routes */
            /* login route */
            Route::post('/login','backEndController@login')->name('loginRoute');
            /* login route */
            /* check your email page */
            Route::get('/check/email','backEndController@checkEmail')->name('checkEmail');
            /* reset password */
            Route::get('/forgot/password','backEndController@forgotPassword')->name('forgot_password');
            Route::post('/forgot/password','backEndController@post_forgot_password')->name('post_forgot_password');
            Route::get('/update/password/{role}','backEndController@update_new_password')->name('update_new_password_page');
            Route::post('/update/password','backEndController@post_update_new_password')->name('post_update_new_password_page');
            /* reset password */


        });
    });


/* admin routes */



?>
