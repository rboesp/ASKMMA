<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});


Route::get('/about', function () {
    return view('Pages.about');
});

Route::get('/services', function () {
    return view('Pages.services');
});

Route::get('/contact', function () {
    return view('Pages.contact');
});

Route::get('/communityoutreach', function () {
    return view('Pages.communityoutreach');
});


Route::get('/feedback', function () {
    return view('Pages.feedback');
});

Route::get('/resources', function () {
    return view('Pages.resources');
});


Route::get('/planfinder', function () {
    return view('Pages.planfinder');
});
