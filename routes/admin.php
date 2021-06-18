<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

    Route::resource('login','LoginController');
    Route::post('login','LoginController@login')->name('login');
    Route::post('logout','LoginController@logout')->name('logout');

    Route::get('/','DashboardController@index')->name('dashboards.index');
  


