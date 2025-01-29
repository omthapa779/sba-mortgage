<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        try {
            // Validate request
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'content' => 'required',
                'uploaded_by' => 'required',
                'secret_key' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            // Check admin key
            if ($request->secret_key !== 'SbaMortgage2024') {
                return back()->with('error', 'Invalid admin key');
            }

            // Handle image upload
            $imagePath = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->extension();
                
                // Create directory if it doesn't exist
                if (!file_exists(public_path('blog-images'))) {
                    mkdir(public_path('blog-images'), 0777, true);
                }
                
                $image->move(public_path('blog-images'), $imageName);
                $imagePath = 'blog-images/' . $imageName;
            }

            // Create blog post
            Blog::create([
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request->content,
                'uploaded_by' => $request->uploaded_by,
                'image_path' => $imagePath
            ]);

            return redirect('/blogs')->with('success', 'Blog created successfully');
            
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }
}