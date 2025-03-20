<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homePage', function () {
    return view('homePage');
});

Route::get('/aboutUsPage', function () {
    return view('aboutUsPage');
});

Route::get('/viewCarPage', function () {
    return view('viewCarPage');
});

Route::get('/contactUsPage', function () {
    return view('contactUsPage');
});

Route::get('/afterSalesPage', function () {
    return view('afterSalesPage');
});

