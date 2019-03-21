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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//===============Jesus work===========

Route::get('/control', 'adminController@adminPage');
Route::get('/index' , 'adminController@adminPage');

//settings
Route::get('/settings' , 'SettingController@index');
Route::post('/settings' , 'SettingController@store');


Route::get('/editAccount/{id}' , 'adminController@editAccount');
Route::post('/updateAccount/{id}' , 'adminController@updateAccount');

//category
Route::get('/addCategory' , 'CategoryController@index');
Route::post('/addCategory' , 'CategoryController@store');
Route::get('/allCategories' , 'CategoryController@show');

Route::get('/delCategory/{id}' , 'CategoryController@destroy');

Route::get('/editCategory/{id}' , 'CategoryController@edit');
Route::post('/updateCategory/{id}' , 'CategoryController@update');



//news
Route::get('/addNews' , 'NewsController@index');
Route::post('/addNews' , 'NewsController@store');
Route::get('/allNews' , 'NewsController@show');

Route::get('/showNew/{id}', 'NewsController@showNew');


//search
Route::any('/search', 'adminController@search');



//dropZone Images
Route::post('/dropZone' , 'ImageController@store');
