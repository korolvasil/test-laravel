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

/**
 *  Authenticates routes
 */
Auth::routes();

Route::get('/auth', function (){
    if(Auth::check()){ return redirect('/home'); }
    return view('auth.auth');
})->name('auth');



Route::get('/', function () {
    return view('index');
});


Route::get('/home', 'HomeController@index')->name('home');
