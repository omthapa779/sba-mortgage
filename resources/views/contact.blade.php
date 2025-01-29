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
            <input type="text" id="name" name="name" class="input_box text_weight_400" placeholder="Your Full Name" required>
            <input type="email" id="email" name="email" class="input_box text_weight_400 margin_s_top" placeholder="Your Email Address" required>
            <input type="tel" id="phone" name="phone" class="input_box text_weight_400 margin_s_top" placeholder="Your Contact Number" required>
            <textarea id="message" name="message" row="4" class="input_box text_weight_400 margin_m_top" placeholder="Leave a Message"></textarea>

            <input type="submit" class="input_box form_button underline-on-hover" value="Enquire Now!">
        </form>
    </div>
</section>
<section class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13037.75859408783!2d149.1410503!3d-35.2204242!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b17ab4acbec0001%3A0xe168363b8260d746!2sSBA%20Mortgage%20solution!5e0!3m2!1sen!2snp!4v1731085198388!5m2!1sen!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection