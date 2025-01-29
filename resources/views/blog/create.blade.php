@extends('layouts.app')

@section('title', 'Create New Blog')
@section('content')
<section class="blog-form w_100 h_fc padding_m">
    <div class="w_70 margin_auto">
        <h2 class="padding_m_bottom">Create New Blog</h2>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data" class="flex_column gap_s">
            @csrf
            <div class="form-group">
                <label>Blog Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Short Description</label>
                <textarea name="description" class="form-control" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label>Blog Content</label>
                <textarea name="content" class="form-control" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <label>Author Name</label>
                <input type="text" name="uploaded_by" class="form-control" required>
            </div>
          
            <div class="form-group">
                <label>Blog Image</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>
            
            <div class="form-group">
                <label>Admin Key</label>
                <input type="password" name="secret_key" class="form-control" required>
            </div>

            <button type="submit" class="primary_button">Publish Blog</button>
        </form>
    </div>
</section>
@endsection