<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact-us', function () {
    return view('contactus');
})->name('contact-us');

Route::get('about-us', function () {
    return view('aboutus');
})->name('about-us');

Route::get('causes', function () {
    return view('causes');
})->name('causes');

Route::get('events', function () {
    return view('events');
})->name('events');

Route::get('galery', function () {
    return view('galery');
})->name('galery');


Route::get('home', function () {
    return view('welcome');
})->name('home');



