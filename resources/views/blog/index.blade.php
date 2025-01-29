@extends('layouts.app')

@section('title', 'SBA Mortgage Solution. Blogs')
@section('content')
<section class="blogs w_100 h_fc padding_m">
    <div class="title_holder_blog flex flex_justify_sb">
        <h2>Our Latest Blog</h2>

        <a href="{{ route('blog.create') }}" class="button_blue flex_center"><h3>Create New Blog</h3></a>
    </div>
    <div class="blogs_holder padding_m_top">
    @foreach($blogs as $blog)
        <div class="blog_item">
            @if($blog->image_path)
                <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}">
            @endif
            <div class="blog_content">
                <h3 class="text_color_bl">{{ $blog->title }}</h3>
                <div class="blog-meta">
                    <h5 class="text_color_bl">By {{ $blog->uploaded_by }} | {{ $blog->created_at->format('M d, Y') }} </h5>
                </div>
                <h4 class="blog_button flex_center"><a href="{{ route('blog.show', $blog->id) }}" >Read More</a></h4>
            </div>
        </div>
    @endforeach
</div>
</section>
@endsection