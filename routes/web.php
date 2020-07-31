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

Route::group(['middleware' => ['auth', 'adminAuth']], function () {
    Route::get('/dashboard', 'HomeController@index')->name('home');

    Route::get('/dashboard/feedback', 'HomeController@feedback')->name('feedback');
    Route::get('/dashboard/feedback/export', 'FeedbackController@export')->name('feedback-download');

    Route::get('/dashboard/messages', 'HomeController@messages')->name('messages');
    Route::get('/dashboard/messages/export', 'ContactMessageController@export')->name('messages-download');
    Route::get('/dashboard/users', 'HomeController@users')->name('users');
    Route::get('/dashboard/users/create', 'UserController@create')->name('create-users');
    Route::get('/dashboard/users/remove-third-party', 'UserController@removeThirdParty');
    Route::post('/dashboard/users/add', 'UserController@store');
    Route::get('/dashboard/users/{user}/edit', 'UserController@edit');
    Route::post('/dashboard/users/{user}/update', 'UserController@update');
    Route::post('/dashboard/users/{user}/delete', 'UserController@destroy');
    Route::get('/dashboard/users/export', 'UserController@export')->name('users-download');
});

Route::resources(['api/careers' => 'CareerController']);
Route::resources(['/api/feedback' => 'FeedbackController']);
Route::resources(['/api/messages' => 'ContactMessageController']);
Route::resources(['/api/newsletter' => 'NewsletterController']);
Route::resources(['/api/user' => 'UserController']);

Route::get('/redirect', [
    'as' => 'redirect',
    'uses' => 'HomeController@redirect',
]);
Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'HomeController@logout',
]);

Route::group(['middleware' => 'auth:api', 'prefix' => 'v1', 'namespace' => 'API'], function () {
    Route::get('authuser', 'UserController@details');
    Route::get('sunfire', 'UserController@sunfire');
});

Route::post('/password-reset', 'UserController@resetPassword');
Route::get('/password-forget-form/{token}', 'UserController@passwordForgetForm')->name('passwordForgetForm');
Route::post('/reset-credentials', 'UserController@resetPassword');
