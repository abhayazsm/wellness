<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Show the list of tags
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

    // Show the form to create a new tag
    public function create()
    {
        return view('admin.tags.create');
    }

    // Store a newly created tag
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags,name',
            'slug' => 'required|unique:tags,slug',
        ]);

        Tag::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
        ]);

        return redirect()->route('admin.tags.index')->with('success', 'Tag created successfully.');
    }

    // Show the form to edit the tag
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    // Update the tag
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|unique:tags,name,' . $tag->id,
            'slug' => 'required|unique:tags,slug,' . $tag->id,
        ]);

        $tag->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
        ]);

        return redirect()->route('admin.tags.index')->with('success', 'Tag updated successfully.');
    }

    // Delete the tag
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('success', 'Tag deleted successfully.');
    }
}
