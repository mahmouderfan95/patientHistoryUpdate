<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['namespace'=>'API'],function(){
    Route::resource('/users','userController');
    Route::post('/users/register','userController@register')->name('register');
    Route::post('user/login','userController@login')->name('user.login');
    /* analyzes routes */
    Route::get('/analyzes/index','apiController@analyzesIndex')->middleware('jwt.auth');
    Route::post('/analyzes/store','apiController@analyzesStore')->name('analyzes.store')->middleware('jwt.auth');
    Route::get('/analyzes/search','apiController@analyzesSearch')->middleware('jwt.auth');
    /* analyzes routes */

    /* rays routes */
    Route::get('/rays/index','apiController@raysIndex')->middleware('jwt.auth');
    Route::post('/rays/store','apiController@raysStore')->name('rays.store')->middleware('jwt.auth');
    Route::get('/rays/search','apiController@raysSearch')->middleware('jwt.auth');
    /* rays routes */
});
