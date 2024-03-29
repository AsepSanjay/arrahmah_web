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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::group(['prefix' => 'v1'], function () {
    Route::get('siswa/list', 'Api\SiswaController@list'); 
    Route::get('materi/list', 'Api\MateriController@list'); 
    Route::get('kuis/list', 'Api\KuisController@list');   
    Route::get('tantangan/list', 'Api\TantanganController@list'); 
    Route::post('auth/register/siswa', 'Api\RegisterController@register');
});
 