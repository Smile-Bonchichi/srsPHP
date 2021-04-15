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

Route::get('/editFood', function () {
    return view('editFood');
});

Route::get('/deleteFood', function () {
    return view('deleteFood');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
