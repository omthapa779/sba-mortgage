@extends('layouts.app')

@section('title', 'Calculators. Savings Goal Calculator')
@section('content')
<section class="calculator_main ">
    <iframe 
        src="https://www.visionabacus.net/Tools/B3/SuiteA/G200/How_Long_to_Save_Calculator" 
        width="100%" 
        height="fit-content"
        title="Savings Goal Calculator - How Long To Save">
    </iframe>
</section>
@endsection