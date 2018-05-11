<?php

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

Route::get('/', [
    'uses'=>'HomeController@index',
    'as'=>'home'
]);

Route::get('/category/{id}', [
    'uses'=>'NewsCategoryController@category',
    'as'=>'category'
]);

Route::get('/category/news/{id}', [
    'uses'=>'NewsCategoryController@news',
    'as'=>'news'
]);

Route::get('/search', [
    'uses'=>'NewsCategoryController@searchresult',
    'as'=>'searchresult'
]);

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
