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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Siswa', 'SiswaController@index');
Route::get('/Siswa/{siswa}', 'SiswaController@show');
Route::post('/Siswa', 'SiswaController@store');
Route::delete('/Siswa/{siswa}', 'SiswaController@destroy');
Route::post('/Siswa/{siswa}', 'SiswaController@update');

Route::get('/Guru', 'GuruController@index');
Route::get('/Guru/{guru}', 'GuruController@show');
Route::post('/Guru', 'GuruController@store');
Route::delete('/Guru/{guru}', 'GuruController@destroy');
Route::post('/Guru/{guru}', 'GuruController@update');


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});