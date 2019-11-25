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

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::group(['prefix' => 'user'], function(){
        Route::get('/user', function (Request $request) {
            return $request->user();
        });
        Route::post('details', 'API\UserController@details');
    });

    Route::group(['prefix' => 'pelanggan'], function(){
        Route::get('/', 'API\PelangganController@index');
    });

    Route::group(['prefix' => 'fitur'], function(){
        Route::get('/', 'API\FiturController@index');
    });

    Route::group(['prefix' => 'fitur_kategori'], function(){
        Route::get('/', 'API\Fitur_KategoriController@index');
    });

    Route::group(['prefix' => 'driver'], function(){
        Route::get('/', 'API\DriverController@index');
    });

    Route::group(['prefix' => 'kendaraan'], function(){
        Route::get('/', 'API\KendaraanController@index');
    });
});


