<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function() {
    return 'test from vaska';
});

Route::get('dato', function() {
    return 'test from dato';
});

