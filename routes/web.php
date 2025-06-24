<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/headline', function () {
    return view('pages.headline');
});

Route::get('/menu', function () {
    return view('pages.menu');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/community', function () {
    return view('pages.community');
});
Route::get('/donation', function () {
    return view('pages.donation');
});
Route::get('/research', function () {
    return view('pages.research');
});