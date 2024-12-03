<?php

// app/Http/Controllers/Admin/BlogController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(10);  // Fetch all blogs
        // dd($blogs[0]->category->name); 
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all(); // Get all tags
        return view('admin.blogs.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:blogs,title',
            'slug' => 'required|unique:blogs,slug',
            'content' => 'required|string', // Ensure content is a string to support HTML
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable|array', // Validate that tags is an array
            'tags.*' => 'exists:tags,id', // Ensure each tag is valid
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        } else {
            $imagePath = null;
        }

        // Create the blog
        $blog = Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'), // Directly use the content input
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'author' => $request->author ?? 'Unknown',
        ]);

        // Sync tags with the blog (attach tags if any)
        if ($request->has('tags')) {
            $blog->tags()->sync($request->tags); // Attach tags selected
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }



    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all(); // Get all tags
        return view('admin.blogs.edit', compact('blog', 'categories', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:blogs,title,' . $id,
            'slug' => 'required|unique:blogs,slug,' . $id,
            'content' => 'required|string', // Ensure content supports HTML
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable|array', // Validate tags as an array
            'tags.*' => 'exists:tags,id', // Ensure each tag exists
        ]);
    
        // Find the blog
        $blog = Blog::findOrFail($id);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
    
            // Delete the old image if a new one is uploaded
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
        } else {
            $imagePath = $blog->image;
        }
    
        // Update the blog
        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'), // Safely handle content with HTML
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'author' => $request->author ?? 'Unknown',
        ]);
    
        // Sync the tags
        if ($request->has('tags')) {
            $blog->tags()->sync($request->tags); // Attach the selected tags
        } else {
            $blog->tags()->sync([]); // Clear tags if none are provided
        }
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }
    

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
