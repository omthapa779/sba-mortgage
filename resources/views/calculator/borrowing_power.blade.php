@extends('layouts.app')

@section('title', 'Calculators. Borrowing Power Calculator')
@section('content')
<section class="loan_comparision">
    <iframe 
        src="https://www.visionabacus.net/Tools/B3/SuiteA/A300/Loan_Comparison_Calculator" 
        width="100%" 
        height="fit-content"
        title="Borrowing Power Calculator">
    </iframe>
</section>
@endsection