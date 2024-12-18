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
Route::get('/calculator/stamp_duty', [App\Http\Controllers\pagescontroller::class, 'stamp_duty']);
Route::get('/calculator/saving_goals', [App\Http\Controllers\pagescontroller::class, 'saving_goals']);
Route::get('/calculator/extra_repayment', [App\Http\Controllers\pagescontroller::class, 'extra_repayment']);
Route::get('/calculator/offset_calc', [App\Http\Controllers\pagescontroller::class, 'offset_calc']);
Route::get('/calculator/how_long_calc', [App\Http\Controllers\pagescontroller::class, 'how_long_calc']);
Route::get('/calculator/loan_compare', [App\Http\Controllers\pagescontroller::class, 'loan_compare']);
Route::get('/calculator/property_buying', [App\Http\Controllers\pagescontroller::class, 'property_buying']);
Route::get('/calculator/rentVsBuying', [App\Http\Controllers\pagescontroller::class, 'rentVsBuying']);
Route::get('/calculator/fortnightly_repay', [App\Http\Controllers\pagescontroller::class, 'fortnightly_repay']);
Route::get('/calculator/borrowing_power', [App\Http\Controllers\pagescontroller::class, 'borrowing_power']);