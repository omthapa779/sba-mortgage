<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
      public function blogs(){
        return view('blogs');
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
    public function stamp_duty(){
        return view('calculator.stamp_duty');
    }
    public function saving_goals(){
        return view('calculator.saving_goals');
    }
    public function extra_repayment(){
        return view('calculator.extra_repayment');
    }
    public function offset_calc(){
        return view('calculator.offset_calc');
    }
    public function how_long_calc(){
        return view('calculator.how_long_calc');
    }
    public function loan_compare(){
        return view('calculator.loan_compare');
    }
    public function property_buying(){
        return view('calculator.property_buying');
    }
    public function rentVsBuying(){
        return view('calculator.rentVsBuying');
    }
    public function fortnightly_repay(){
        return view('calculator.fortnightly_repay');
    }
    public function borrowing_power(){
        return view('calculator.borrowing_power');
    }
}
