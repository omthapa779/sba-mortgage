@extends('layouts.app')

@section('title', 'Calculators. Loan Repayment Calculator')
@section('content')
<section class="calculator_main flexible_container padding_m">
    <h2>Loan Repayment Calculator</h2>
    <div class="calc_holder flexible_container flex flex_wrap flex_justify_sb">
        <div class="calc_side half_wh">
            <form id="loanCalculatorForm" class="flexible_container flex_column margin_m_top">
              <div class="input-group">
                <label for="loanAmount"><h4>Loan Amount ($):</h4></label>
                <input type="number" id="loanAmount" name="loanAmount" class="input_calc" required min="0">
              </div>
            </form>
        </div>
        <div class="calc_side half_wh"></div>
    </div>
</section>
<script src="../logics/calculators.js"></script>
@endsection