<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact-us', function () {
    return view('contactus');
});

Route::get('about-us', function () {
    return view('aboutus');
});

Route::get('causes', function () {
    return view('causes');
});

Route::get('events', function () {
    return view('events');
});

Route::get('galery', function () {
    return view('galery');
});



