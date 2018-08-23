<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/16
 * Time: 13:36
 */
Route::get('/shixi', '\Smartbro\Controllers\CustomPageController@shixi');
Route::get('/zhitong', '\Smartbro\Controllers\CustomPageController@zhitong');
Route::get('/about', '\Smartbro\Controllers\CustomPageController@about');
Route::get('/kuaiji', '\Smartbro\Controllers\CustomPageController@kuaiji')->name('kuaiji');
Route::get('/jinrong', '\Smartbro\Controllers\CustomPageController@jinrong')->name('jinrong');

Route::get('/cfa/{uri}', '\Smartbro\Controllers\CustomPageController@cfa');
Route::get('/teachers', '\Smartbro\Controllers\CustomPageController@teachers');

Route::get('/listen', '\Smartbro\Controllers\OnlineClassController@listen');
Route::post('/listen/login', '\Smartbro\Controllers\OnlineClassController@login_check');


Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('/home','\Smartbro\Controllers\backend\AdminController@index');
    Route::get('/customers', '\Smartbro\Controllers\backend\AdminController@customer');
    Route::get('/customers/create', '\Smartbro\Controllers\backend\AdminController@customerCreateView');
    Route::get('/customers/delete/{id}', '\Smartbro\Controllers\backend\AdminController@customerDelete');
    Route::get('/customers/edit/{id}', '\Smartbro\Controllers\backend\AdminController@customerUpdate');
    Route::post('/customers/edit/{id}', '\Smartbro\Controllers\backend\AdminController@customerEdit');
    Route::post('/customers/create', '\Smartbro\Controllers\backend\AdminController@save');
});