@extends('layouts.app')

@section('title', 'Calculators. Stamp Duty Calculator')
@section('content')
<section class="calculator_main">
    <iframe 
        src="https://www.visionabacus.net/Tools/B3/SuiteA/A200/Stamp_Duty_Calculator" 
        width="100%" 
        height="fit-content"
        title="Stamp Duty Calculator 2024 - 2025">
    </iframe>
</section>
<style>
    .VisiAbaBtPosition{
    display: none !important;
    }
</style>
@endsection
