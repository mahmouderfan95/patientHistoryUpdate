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
Route::post('/verficationCode/hosptail/{id}','firebaseController@verifcationCodeHosptail')->name('hosptail_verifcationCode');
/* hosptail verify route */

/* clinic verify route */
Route::get('/clinic/verify/{id}','firebaseController@clinic_verify')->name('clinic_verify');
Route::post('/verficationCode/clinic/{id}','firebaseController@verifcationCodeClinic')->name('clinic_verifcationCode');
/* clinic verify route */

/* xray verify route */
Route::get('/xray/verify/{id}','firebaseController@xray_verify')->name('xray_verify');
Route::post('/verficationCode/xray/{id}','firebaseController@verifcationCodeXray')->name('xray_verifcationCode');
/* xray verify route */

/* labs verify route */
Route::get('/labs/verify/{id}','firebaseController@labs_verify')->name('labs_verify');
Route::post('/verficationCode/labs/{id}','firebaseController@verifcationCodeLabs')->name('labs_verifcationCode');
/* labs verify route */

/* pharmacy verify route */
Route::get('/pharmacy/verify/{id}','firebaseController@pharmacy_verify')->name('pharmacy_verify');
Route::post('/verficationCode/pharmacy/{id}','firebaseController@verifcationCodepharmacy')->name('pharmacy_verifcationCode');
/* pharmacy verify route */

