<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


//get
Route::get('/', function () {return view('welcome');});
Route::get('/about', [App\Http\Controllers\pagescontroller::class, 'about']);
Route::get('/services', [App\Http\Controllers\pagescontroller::class, 'services']);
Route::get('/contact', [App\Http\Controllers\pagescontroller::class, 'contact']);
Route::get('/calculator', [App\Http\Controllers\pagescontroller::class, 'calculator_index']);

//post
Route::post('/contact/submit', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');


//calculators
Route::get('/calculator/loan_repayment', [App\Http\Controllers\pagescontroller::class, 'loan_repayment']);