<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/to_be_created', function () {
    return view('tobe_created');
});