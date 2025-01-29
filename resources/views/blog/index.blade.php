@extends('layouts.app')

@section('title', 'SBA Mortgage Solution. Blogs')
@section('content')
<section class="blogs w_100 h_fc padding_m">
    <div class="flex_row justify_content_sb align_items_c padding_m_bottom">
        <h2>Our Latest Blogs</h2>
        <a href="{{ route('blog.create') }}" class="primary_button">Create New Blog</a>
    </div>
    
    <div class="blog-cards flex flex_wrap gap_s">
        @foreach($blogs as $blog)
            <div class="blog-card w_30 border_r_s padding_s">
                @if($blog->image_path)
                  <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}" class="w_100 h_200 object_fit_cover">
                @endif
                <h3>{{ $blog->title }}</h3>
                <p class="padding_s_top">{{ Str::limit($blog->description, 150) }}</p>
                <div class="blog-meta padding_s_top">
                    <small>By {{ $blog->uploaded_by }} | {{ $blog->created_at->format('M d, Y') }}</small>
                </div>
                <a href="{{ route('blog.show', $blog->id) }}" class="primary_button margin_s_top">Read More</a>
            </div>
        @endforeach
    </div>
</section>
@endsection