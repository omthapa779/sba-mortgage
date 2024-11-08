<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {return view('welcome');});
Route::get('/about', [App\Http\Controllers\pagescontroller::class, 'about']);
Route::get('/services', [App\Http\Controllers\pagescontroller::class, 'services']);
Route::get('/contact', [App\Http\Controllers\pagescontroller::class, 'contact']);
Route::post('/contact/submit', [App\Http\Controllers\pagescontroller::class, 'submit'])->name('contact.submit');
Route::get('/send-test-email', function () {
    Mail::raw('This is a test email from Laravel.', function ($message) {
        $message->to('your_email@example.com')
                ->subject('Test Email');
    });
    return 'Test email sent!';
});