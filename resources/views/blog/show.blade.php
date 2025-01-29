@extends('layouts.app')

@section('title', $blog->title)
@section('content')
<article class="blog-detail">
    <!-- Hero Section -->
    @if($blog->image_path)
    <div class="blog-hero">
        <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}" class="hero-image">
        <div class="hero-overlay"></div>
    </div>
    @endif

    <!-- Content Section -->
    <div class="blog-container w_70 margin_auto">
    
        <!-- Navigation -->
        <h3 class="button_blue"><a href="{{ route('blog.index') }}"><i class="ri-arrow-left-line"></i> Back to blogs</a></h3>

        <!-- Header -->
        <header class="blog-header padding_m">
            <h1 class="blog-title">{{ $blog->title }}</h1>
            <div class="blog-meta">
                <div class="author-info">
                    <i class="ri-user-line"></i>
                    <span>{{ $blog->uploaded_by }}</span>
                </div>
                <div class="date-info">
                    <i class="ri-calendar-line"></i>
                    <span>{{ $blog->created_at->format('M d, Y') }}</span>
                </div>
                <div class="read-time">
                    <i class="ri-time-line"></i>
                    <span>{{ ceil(str_word_count(strip_tags($blog->content)) / 200) }} min read</span>
                </div>
            </div>
        </header>

        <!-- Description -->
        <div class="blog-description padding_m_side">
            <h4 class="lead-text">{{ $blog->description }}</h4>
        </div>

        <!-- Main Content -->
        <div class="blog-content padding_m_side">
            <h4>{!! $blog->content !!}</h4>
        </div>

        <!-- Share Section -->
        <div class="blog-share padding_m">
            <h3>Share this article</h3>
            <div class="share-buttons">
                <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}" class="share-button twitter" target="_blank">
                    <i class="ri-twitter-line"></i>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" class="share-button facebook" target="_blank">
                    <i class="ri-facebook-line"></i>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}" class="share-button linkedin" target="_blank">
                    <i class="ri-linkedin-line"></i>
                </a>
            </div>
        </div>
    </div>
</article>
@endsection