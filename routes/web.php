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
Route::view('/about', 'pages.about');
Route::view('/services', 'pages.services');
Route::view('/contact', 'pages.contact');
Route::view('/community-outreach', 'pages.community-outreach');
Route::view('/feedback', 'pages.feedback');
Route::view('/resource', 'pages.resources');
Route::view('/plan-finder', 'pages.plan-finder');
Route::view('/products', 'pages.products');
Route::view('/careers', 'pages.careers');
Route::view('/terms-and-conditions', 'pages.terms-and-conditions');
Route::view('/privacy-policy', 'pages.privacy-policy');
Route::view('/nondiscrimination-notice', 'pages.nondiscrimination-notice');

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('home');

    Route::get('/dashboard/feedback', 'HomeController@feedback')->name('feedback');
    Route::get('/dashboard/feedback/export', 'FeedbackController@export')->name('feedback-download');

    Route::get('/dashboard/messages', 'HomeController@messages')->name('messages');
    Route::get('/dashboard/messages/export', 'ContactMessageController@export')->name('messages-download');
//    Route::resources(['api/feedback' => 'FeedbackController@index']);
});

Route::resources(['api/careers' => 'CareerController']);

Route::resources(['/api/feedback' => 'FeedbackController']);
Route::resources(['/api/messages' => 'ContactMessageController']);
Route::resources(['/api/newsletter' => 'NewsletterController']);
