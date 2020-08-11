<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/',[
    'uses' => 'SigmaDigitalController@index',
    'as'   => 'home'
]); */
Route::get('/', 'SigmaDigitalController@index')->name('home');

/* Route::get('/contact',[
    'uses' => 'SigmaDigitalController@contact',
    'as'   => 'contact'
]); */
Route::get('/contact', 'SigmaDigitalController@contact' )->name('contact');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
