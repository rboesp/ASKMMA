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

Route::view('/', 'landing');
Route::view('/about', 'Pages.about');
Route::view('/services', 'Pages.services');
Route::view('/contact', 'Pages.contact');
Route::view('/communityoutreach', 'Pages.communityoutreach');
Route::view('/feedback', 'Pages.feedback');
Route::view('/resource', 'Pages.resources');
Route::view('/planfinder', 'Pages.planfinder');
Route::view('/products', 'Pages.products');
Route::view('/careers', 'Pages.careers');
