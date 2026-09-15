<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function () {
    return view('home');
});

Route::get('/characters', function(){
    return View('characters');
});