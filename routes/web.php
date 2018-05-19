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

Route::get('/news/{id}', [
    'uses'=>'NewsCategoryController@news',
    'as'=>'news'
]);

Route::get('/news/tags/{tag}', [
    'uses'=>'NewsTagsController@news',
    'as'=>'tags'
]);

Route::get('/news/photos/{id}', [
    'uses'=>'NewsCategoryController@photos',
    'as'=>'photos'
]);

/*Mustaque */
Route::get('/location', 'SearchController@prodfunct')->name('search');
Route::get('/findDistric','SearchController@distric');
Route::get('/findUpozila','SearchController@findUpozila');
Route::get('All/Bangladesh/{name}','SearchController@svgDistrict');
Route::get('/Bangladesh/{name}','SearchController@getdata')->name('getdata');
Route::get('subDistrict/{id}','SearchController@Subdistrict');


Route::get('/search', [
    'uses'=>'NewsCategoryController@searchresult',
    'as'=>'searchresult'
]);



Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



