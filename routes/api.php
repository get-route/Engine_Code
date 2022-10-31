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
    Route::get('/comment','App\Http\Controllers\Admin\CommentsController@show');
    Route::patch('/comment/{comment}','App\Http\Controllers\Admin\CommentsController@update_public');
    Route::delete('/comment/{comment}','App\Http\Controllers\Admin\CommentsController@delete_comment');
    Route::patch('/add','App\Http\Controllers\Admin\AdController@update_add');
    Route::get('/add','App\Http\Controllers\Admin\AdController@get_add');

});
Route::post('/{request_model}','App\Http\Controllers\EngineController@search_model');
Route::post('/engine/{request_search}','App\Http\Controllers\EngineController@search_engine');

Route::post('/car/{model}','App\Http\Controllers\ModelController@store');
Route::post('/{engine}','App\Http\Controllers\EnginesCategoryController@store');


