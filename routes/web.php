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
    return view('index');
});

Route::get('/search', 'search@create');

Route::get('/test', function () {
    return view('test');
});

Route::get('/search/{filter}','search@find');

Route::post('/signup',"UsersController@store");

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
