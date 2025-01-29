@extends('layouts.app')

@section('title', 'SBA Mortgage Solution. Blogs')
@section('content')
<section class="blogs w_100 h_fc padding_m">
    <h2 class="text_align_c padding_m_bottom">Our Latest Blogs</h2>
    
    <div class="blog-cards flex flex_wrap gap_s">
        @foreach($blogs as $blog)
            <div class="blog-card w_30 border_r_s padding_s">
                <h3>{{ $blog->title }}</h3>
                <p class="padding_s_top">{{ $blog->description }}</p>
                <div class="blog-meta padding_s_top">
                    <small>By {{ $blog->uploaded_by }} | {{ $blog->created_at->format('M d, Y') }}</small>
                </div>
                <a href="{{ route('blog.show', $blog->id) }}" 
                   class="primary_button margin_s_top">Read More</a>
            </div>
        @endforeach
    </div>
</section>
@endsection