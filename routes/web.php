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

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/management', 'HomeController@index')->name('home');

    Route::get('/management/feedback', 'HomeController@feedback')->name('feedback');
    Route::get('/management/feedback/export', 'FeedbackController@export')->name('feedback-download');

    Route::get('/management/messages', 'HomeController@messages')->name('messages');
    Route::get('/management/messages/export', 'ContactMessageController@export')->name('messages-download');

    Route::resources(['api/careers' => 'CareerController']);
//    Route::resources(['api/feedback' => 'FeedbackController@index']);
});

Route::resources(['/api/feedback' => 'FeedbackController']);
Route::resources(['/api/messages' => 'ContactMessageController']);

Route::get('mailable-general-test', function () {
    return new App\Mail\GenericEmailMarkdown('Subject', 'Markdown');
});

Route::get('mailable-contact-test', function () {
    $data = [
        'first_name' => 'Chris',
        'last_name' => 'Breuer',
        'email' => 'chris.breuer@mma.com',
        'zip_code' => '12457',
        'interest' => 'Interest',
    ];

    return new App\Mail\ContactMail($data);
});

Route::get('mailable-feedback-test', function () {
    $data = [
        'feedback_type' => 'General Feedback',
        'email' => 'chris.breuer@mma.com',
        'message' => 'Lorem Impsum',
    ];

    return new App\Mail\FeedbackMail($data);
});
