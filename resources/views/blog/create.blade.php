@extends('layouts.app')

@section('title', 'Create New Blog')
@section('content')
<section class="blog-form w_100 h_fc padding_m bg_color_bl">
    <div class="w_70 margin_auto">
        <div class="form-header text_align_c padding_m_bottom">
            <h2 class="text_color_w">Create New Blog Post</h2>
            <h4 class="text_color_w">Share your knowledge with our community</h4>
        </div>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data" class="fancy-form bg_color_bl">
            @csrf
            
            <!-- Basic Information -->
            <div class="form-section bg_color_bl2">
                <h3 class="section-title text_color_w"><i class="ri-information-line"></i> Basic Information</h3>
                <div class="form-group">
                    <h4 class="text_color_w">Blog Title</h4>
                    <input type="text" name="title" class="fancy-input" required>
                </div>

                <div class="form-group padding_s_top">
                    <h4 class="text_color_w">Short Description</h4>
                    <textarea name="description" class="fancy-input" rows="3" required></textarea>
                </div>
            </div>

            <!-- Main Content -->
            <div class="form-section bg_color_bl2">
                <h3 class="section-title text_color_w"><i class="ri-file-text-line"></i> Main Content</h3>
                <div class="form-group">
                    <h4 class="text_color_w">Blog Content</h4>
                    <textarea name="content" class="fancy-input" rows="10" required></textarea>
                </div>
            </div>

            <!-- Media & Author -->
            <div class="form-section bg_color_bl2">
                <h3 class="section-title text_color_w"><i class="ri-image-line"></i> Media & Author</h3>
                <div class="form-group">
                    <h4 class="text_color_w">Featured Image</h4>
                    <div class="image-upload-area">
                        <input type="file" name="image" id="image-upload" class="hidden file_input" accept="image/*" required>
                        <h4 class="text_color_w">Drop your image here or click to upload</h4>
                        <div id="image-preview"></div>
                    </div>
                </div>

                <div class="form-group padding_s_top">
                    <h4 class="text_color_w">Author Name</h4>
                    <input type="text" name="uploaded_by" class="fancy-input" required>
                </div>
            </div>

            <!-- Security -->
            <div class="form-section bg_color_bl2">
                <h3 class="section-title text_color_w"><i class="ri-shield-line"></i> Security</h3>
                <div class="form-group">
                    <h4 class="text_color_w">Admin Key</h4>
                    <input type="password" name="secret_key" class="fancy-input" required>
                </div>
            </div>

            <div class="form-actions text_align_c">
                <button type="submit" class="primary_button form_button padding_s flex_center">
                    <h4 class="white_cl"><i class="ri-send-plane-line"></i> Publish Blog</h4 class="white_cl">
                </button>
            </div>
        </form>
    </div>
</section>
@endsection