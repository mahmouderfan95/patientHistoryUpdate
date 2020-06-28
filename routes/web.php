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
    return redirect()->route('indexRoute');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/firebase-phone-authentication', 'HomeController@invcaptcha')->name('invcaptcha');
/* patient verify route */
Route::get('/test/verify/{id}','firebaseController@index')->name('patient_verify');
Route::get('/verficationCode/{id}','firebaseController@verifcationCode')->name('patient_verifcationCode');
/* patient verify route */

/* hosptail verify route */
Route::get('/hosptail/verify/{id}','firebaseController@hosptail_verify')->name('hosptail_verify');
Route::get('/verficationCode/hosptail/{id}','firebaseController@verifcationCodeHosptail')->name('hosptail_verifcationCode');
/* hosptail verify route */

/* clinic verify route */
Route::get('/clinic/verify/{id}','firebaseController@clinic_verify')->name('clinic_verify');
Route::get('/verficationCode/clinic/{id}','firebaseController@verifcationCodeClinic')->name('clinic_verifcationCode');
/* clinic verify route */

/* xray verify route */
Route::get('/xray/verify/{id}','firebaseController@xray_verify')->name('xray_verify');
Route::get('/verficationCode/xray/{id}','firebaseController@verifcationCodeXray')->name('xray_verifcationCode');
/* xray verify route */

/* labs verify route */
Route::get('/labs/verify/{id}','firebaseController@labs_verify')->name('labs_verify');
Route::get('/verficationCode/labs/{id}','firebaseController@verifcationCodeLabs')->name('labs_verifcationCode');
/* labs verify route */

/* pharmacy verify route */
Route::get('/pharmacy/verify/{id}','firebaseController@pharmacy_verify')->name('pharmacy_verify');
Route::get('/verficationCode/pharmacy/{id}','firebaseController@verifcationCodepharmacy')->name('pharmacy_verifcationCode');
/* pharmacy verify route */


/* social media routes */
Route::get('login/{provider}','socialController@redirectToProvider')->middleware('web');
Route::get('login/{provider}/callback','socialController@handleProviderCallback')->middleware('web');
/* social media routes */


/* forgot password routes */
/* patient forgot password routes */
Route::get('/patient/forgot/password/{id}','firebaseController@patient_password')->name('patient_password');
Route::post('/patient/forgot/password/{id}','firebaseController@post_patient_password')->name('post_patient_password');
Route::get('/patient/confirm/password/{id}','firebaseController@confirm_password')->name('get_confirm_password');
Route::post('/patient/post/confirm/password/{id}','firebaseController@patient_confirm_password')->name('patient_confirm_password');

/* patient forgot password routes */

/* hosptail forgot password routes */
Route::get('/hosptail/forgot/password/{id}','firebaseController@hosptail_password')->name('hosptail_password');
Route::post('/hosptail/forgot/password/{id}','firebaseController@post_hosptail_password')->name('post_hosptail_password');
Route::get('/hosptail/confirm/password/{id}','firebaseController@hosptail_confirm_password')->name('get_hosptail_confirm_password');
Route::post('/hosptail/confirm/password/{id}','firebaseController@post_hosptail_confirm_password')->name('post_hosptail_confirm_password');
/* hosptail forgot password routes */

/* clinic forgot password routes */
Route::get('/clinic/forgot/password/{id}','firebaseController@clinic_password')->name('clinic_password');
Route::post('/clinic/forgot/password/{id}','firebaseController@post_clinic_password')->name('post_clinic_password');
Route::get('/clinic/confirm/password/{id}','firebaseController@clinic_confirm_password')->name('get_clinic_confirm_password');
Route::post('/clinic/confirm/password/{id}','firebaseController@post_clinic_confirm_password')->name('post_clinic_confirm_password');
/* clinic forgot password routes */

/* xray forgot password routes */
Route::get('/xray/forgot/password/{id}','firebaseController@xray_password')->name('xray_password');
Route::post('/xray/forgot/password/{id}','firebaseController@post_xray_password')->name('post_xray_password');
Route::get('/xray/confirm/password/{id}','firebaseController@')->name('get_xray_confirm_password');
Route::post('/xray/confirm/password/{id}','firebaseController@post_xray_confirm_password')->name('post_xray_confirm_password');
/* xray forgot password routes */

/* patient forgot password routes */
Route::get('/labs/forgot/password/{id}','firebaseController@labs_password')->name('labs_password');
Route::post('/labs/forgot/password/{id}','firebaseController@post_labs_password')->name('post_labs_password');
Route::get('/labs/confirm/password/{id}','firebaseController@labs_confirm_password')->name('get_labs_confirm_password');
Route::post('/labs/confirm/password/{id}','firebaseController@post_labs_confirm_password')->name('post_labs_confirm_password');
/* patient forgot password routes */

/* patient forgot password routes */
Route::get('/pharmacy/forgot/password/{id}','firebaseController@pharmacy_password')->name('pharmacy_password');
Route::post('/pharmacy/forgot/password/{id}','firebaseController@post_pharmacy_password')->name('post_pharmacy_password');
Route::get('/pharmacy/confirm/password/{id}','firebaseController@pharmacy_confirm_password')->name('get_pharmacy_confirm_password');
Route::post('/pharmacy/confirm/password/{id}','firebaseController@post_pharmacy_confirm_password')->name('post_pharmacy_confirm_password');
/* patient forgot password routes */
/* forgot password routes */
