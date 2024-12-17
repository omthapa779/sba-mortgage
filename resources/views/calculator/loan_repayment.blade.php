@extends('layouts.app')

@section('title', 'Calculators. Loan Repayment Calculator')
@section('content')
<section class="calculator_main flexible_container padding_m">
    <h2>Loan Repayment Calculator</h2>
    <div class="calc_holder flexible_container">
            <form id="loanCalculatorForm" class="flexible_container flex gap_s flex_wrap flex_justify_sb margin_m_top">
              <div class="input-group">
                <label for="loanAmount"><h4>Loan Amount ($):</h4></label>
                <h3><input type="number" id="loanAmount" name="loanAmount" class="input_calc" required min="0"></h3>
              </div>
              <div class="input-group">
                <label for="interestRate"><h4>Interest Rate (%):</h4></label>
                <input type="number" id="interestRate" name="interestRate"  step="0.01" class="input_calc" required min="0">
              </div>
              <div class="input-group">
                <label for="loanTerm"><h4>Loan Term (years):</h4></label>
                <input type="number" id="loanTerm" name="loanTerm" class="input_calc" required min="0">
              </div>
              <div class="input-group">
                <label for="repaymemntFrequency"><h4>Repayment Frequency</h4></label>
                <select id="repaymentFrequency" class="input_calc" name="repaymentFrequency">
                   <option value="monthly">Monthly</option>
                   <option value="yearly">Yearly</option>
                   <option value="fortnightly">Fortnightly</option>
                </select>
              </div>
              <div class="input-group">
                <label for="loanFee"><h4>Loan Fee ($):</h4></label>
                <input type="number" id="loanFee" name="loanFee" class="input_calc" required min="0">
              </div>
              <div class="input-group">
                <label for="feeFrequency"><h4>Fee Frequency:</h4></label>
                <select id="feeFrequency" class="input_calc" name="feeFrequency">
                <option value="monthly">Monthly</option>
                <option value="annually">Annually</option>
                <option value="fortnightly">Fortnightly</option>
                <option value="weekly">Weekly</option>
            </select>
              </div>

              <button class="calc_button padding_s full_wh" onclick="calculateRepayment()"><h3 class="underline-on-hover">Calculate</h3></button>
            </form>
            <div class="calc_result margin_s_top"></div>
            <h3>Your Loan Repayment Details</h3>
            <h4><strong>Monthly Repayment:</strong> $<span class="text_weight_400" id="monthlyRepayment"></span></h4>
            <h4><strong>Total Interest/Fee Payable:</strong> $<span id="totalInterestFee"></span></h4>
            <h4><strong>Total Payments:</strong> $<span id="totalPayments"></span></h4>
    </div>
</section>
<script src="../logics/calculators.js"></script>
@endsection