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
Route::group(['prefix'=>'/boss_panel','middleware'=>'auth.admin.panel'],function (){
    Route::get('/','App\Http\Controllers\Admin\AdminIndexController@index')->name('admin_panel');
    Route::get('/satemap-new','App\Http\Controllers\Sitemap\SitemapController@store')->name('sitemap.update');
    Route::get('/engines','App\Http\Controllers\Admin\EnginesController@index')->name('engines.index');
    Route::get('/auto','App\Http\Controllers\Admin\AutoModelController@index')->name('auto.index');
    Route::get('/comment','App\Http\Controllers\Admin\CommentsController@index')->name('comments.index');
    Route::get('/ad','App\Http\Controllers\Admin\AdController@index')->name('add.index');
});
Route::get('/','App\Http\Controllers\EngineController@index')->name('index');
Route::group(['middleware'=>'guest'],function (){
    Route::get('/login','App\Http\Controllers\UserController@login')->name('login');
    Route::post('/login','App\Http\Controllers\UserController@auth')->name('login.auth');
    Route::get('/register','App\Http\Controllers\UserController@register')->name('register');
    Route::post('/register','App\Http\Controllers\UserController@store')->name('register.store');
});
Route::get('/logout','\App\Http\Controllers\UserController@logout')->name('logout');
Route::get('/satemap.xml','App\Http\Controllers\Sitemap\SitemapController@index')->name('sitemap.index');

Route::get('/{engine}','App\Http\Controllers\EnginesCategoryController@index')->name('engine.index');
Route::get('/car/{model}','App\Http\Controllers\ModelController@index')->name('model.index');





