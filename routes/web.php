<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('dato', function() {
    return 'test from dato';
});

Route::get('gia', function() {
    return 'test from gia';
});


