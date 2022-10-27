<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix'=>'/boss_panel','middleware'=>'admin'],function (){
    Route::get('/','App\Http\Controllers\Admin\AdminIndexController@index')->name('admin_panel');
    Route::get('/engines','App\Http\Controllers\Admin\EnginesController@index')->name('engines.index');
    Route::get('/auto','App\Http\Controllers\Admin\AutoModelController@index')->name('auto.index');
    Route::get('/comment','App\Http\Controllers\Admin\CommentsController@index')->name('comments.index');
});
Route::get('/','App\Http\Controllers\EngineController@index')->name('index');
Route::get('/{engine}','App\Http\Controllers\EnginesCategoryController@index')->name('engine.index');
Route::get('/car/{model}','App\Http\Controllers\ModelController@index')->name('model.index');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
