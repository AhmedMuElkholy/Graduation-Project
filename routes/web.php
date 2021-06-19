<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['namespace' => 'Normaluser' , 'prefix' => 'user' , 'as' => 'user.' ] ,function(){
        Route::get('/','UserHomeController@index')->name('home');
});


Route::group(['namespace' => 'Researcher' , 'prefix' => 'researcher' , 'as' => 'researcher.' ] ,function(){
    Route::get('/','ResearcherHomeController@index')->name('home');
});
