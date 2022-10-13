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

Route::get('/','App\Http\Controllers\EngineController@index')->name('index');
Route::group(['prefix'=>'/boss_panel','middleware'=>'admin'],function (){
    Route::get('/','App\Http\Controllers\Admin\AdminIndexController@index')->name('admin_panel');
    Route::resource('/engines','App\Http\Controllers\Admin\EnginesController');
    Route::resource('/auto','App\Http\Controllers\Admin\AutoModelController');

});
Route::resource('/engine','App\Http\Controllers\EngineController');
Route::resource('/model','App\Http\Controllers\ModelController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
