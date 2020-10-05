<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'GuestController@index') -> name('emp.index');
Route::get('/show/{id}', 'GuestController@show') -> name('emp.show');

Route::get('/destroy/{id}', 'LoggedController@destroy') -> name('emp.destroy');
