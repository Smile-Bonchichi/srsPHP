<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/managerMenu', function () {
    return view('managerMenu');
});

Route::get('/addFood', function () {
    return view('addFood');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
