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