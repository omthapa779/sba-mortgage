<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }
    public function contact(){
        return view('contact');
    }
    public function calculator_index(){
        return view('calculator_dashboard');
    }
    public function loan_repayment(){
        return view('calculator.loan_repayment');
    }
}
