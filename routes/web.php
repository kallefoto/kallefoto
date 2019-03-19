<?php

Route::get('/', function () {
    return view('index');
});


Route::get('/balestrand', function () {
    return view('balestrand');
});
