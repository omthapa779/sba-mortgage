@extends('layouts.app')

@section('title', 'SBA Mortgage Solution. About')
@section('content')
<section class="contacts flexible_container padding_m flex flex_justify_sb">
    <div class="left_contact w_25 padding_m_top flex_column flex_justify_sb gap_m">
        <h4>If you want to contact us, feel free to leave a message.</h4>

        <div class="contacts_holder_page">
            <h4>Address:</h4>
            <h4 class="text_weight_400">20 Wallabalooa St, Ngunnawal Canberra, ACT 2913</h4>

            <h4 class="margin_s_top">Email:</h4>
            <h4 class="text_weight_400">bibek@sbamortgagesolution.com.au</h4>

            <h4 class="margin_s_top">Contact No.:</h4>
            <h4 class="text_weight_400">0401 878 450</h4>
        </div>
    </div>
    <div class="right_contact w_75 padding_m padding_l_left flex_column flex_justify_sb gap_m">
        <h2 class="text_weight_400">Let's Create a Future Together!</h2>

        <form action="{{ route('contact.submit') }}" method="POST" class="forms full_wh">
            @csrf
            <input type="text" id="name" name="name" placeholder="Your Full Name">
        </form>
    </div>
</section>
@endsection