<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string',
            'button_link' => 'nullable|string',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('slides', 'public'); // Stores in storage/app/public/slides
        }

        Slide::create([
            'image_path' => $imagePath ?? null, // Save path to database
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
        ]);

        return redirect()->route('admin.slides.index')->with('success', 'Slide created successfully.');
    }


    public function show(Slide $slide)
    {
        return view('admin.slides.show', compact('slide'));
    }

    public function edit(Slide $slide)
    {
        return view('admin.slides.edit', compact('slide'));
    }

    public function update(Request $request, Slide $slide)
{
    // Validation for all the fields
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title' => 'nullable|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'button_text' => 'nullable|string|max:255',
        'button_link' => 'nullable|string', // Ensure button_link is a valid URL if provided
    ]);

    // Handle the image upload
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($slide->image_path && \Storage::disk('public')->exists($slide->image_path)) {
            \Storage::disk('public')->delete($slide->image_path);
        }

        // Store the new image and update the path
        $imagePath = $request->file('image')->store('slides', 'public');
        $slide->image_path = $imagePath;
    }

    // Update the slide with the validated data
    $slide->update($request->only('title', 'subtitle', 'description', 'button_text', 'button_link'));

    // Redirect with success message
    return redirect()->route('admin.slides.index')->with('success', 'Slide updated successfully.');
}



    public function destroy(Slide $slide)
    {
        $slide->delete();
        return redirect()->route('admin.slides.index')->with('success', 'Slide deleted successfully.');
    }
}
