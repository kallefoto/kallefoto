<?php

Auth::routes();

Route::get('/', function () {
    return view('index');
});


Route::get('/balestrand', function () {
    return view('balestrand');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
