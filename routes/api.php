<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Route::get('/boss_panel','App\Http\Controllers\Admin\AdminIndexController@vue');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix'=>'boss_panel'],function (){
    Route::get('/auto','App\Http\Controllers\Admin\AutoModelController@data_auto');
    Route::patch('/auto/{auto}','App\Http\Controllers\Admin\AutoModelController@update_auto');
    Route::get('/engines','App\Http\Controllers\Admin\EnginesController@data_table');
    Route::patch('/engines/{engines}','App\Http\Controllers\Admin\EnginesController@update_engine');

});


