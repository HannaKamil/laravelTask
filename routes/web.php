<?php


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//===============Jesus work===========
Route::group(['middleware' => 'checkRegister'], function () {


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
Route::get('/delNew/{id}', 'NewsController@destroy');


//search
Route::any('/search', 'adminController@search');



//dropZone Images
Route::post('/dropZone/{id}' , 'NewsController@storeDropZoneImages');

}); // end middleWare group check if Register


//check admin
//Route::group(['middleware' => 'checkAdmin:adminGuard'], function () {
//    Route::get('/control', 'adminController@adminPage');
//
//});// end middleWare group check if admin


//Route::get('/admin/login' , 'adminController@adminLogin');
//Route::post('/admin/login' , 'adminController@adminLogin_post');


Route::get('/logOutAdmin', function () {
    auth()->logout();
    return redirect('/login');
});


