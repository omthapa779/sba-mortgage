@extends('layouts.app')

@section('title', $blog->title)
@section('content')
<section class="blog-detail w_100 h_fc padding_m">
    <div class="blog-content w_70 margin_auto">
        <a href="{{ url('/blogs') }}" class="primary_button margin_s_bottom">
            <i class="ri-arrow-left-line"></i> Back to Blogs
        </a>

        <h1 class="padding_m_bottom">{{ $blog->title }}</h1>
        
        <div class="blog-meta padding_s_bottom">
            <p>By {{ $blog->uploaded_by }} | {{ $blog->created_at->format('M d, Y') }}</p>
        </div>

        <div class="blog-body">
            {!! $blog->content !!}
        </div>
    </div>
</section>
@endsection