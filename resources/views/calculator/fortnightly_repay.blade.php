@extends('layouts.app')

@section('title', 'Calculators. Fortnightly Repay Calculator')
@section('content')
<section class="loan_comparision">
    <iframe 
        src="https://www.visionabacus.net/Tools/B3/SuiteA/G100/Fortnightly_Repayment_Calculator" 
        width="100%" 
        height="fit-content"
        title="Fortnightly Repay Calculator">
    </iframe>
</section>
@endsection