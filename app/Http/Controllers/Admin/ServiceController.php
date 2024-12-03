<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(10); // Paginated results
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services',
            'short_desc' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'side_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'footer_first_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'footer_second_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store main service image
        $imagePath = $request->hasFile('image') 
            ? $request->file('image')->store('services', 'public') 
            : null;

        // Store side image
        $sideImagePath = $request->hasFile('side_image') 
            ? $request->file('side_image')->store('services', 'public') 
            : null;

        // Store footer first image
        $footerFirstImagePath = $request->hasFile('footer_first_image') 
            ? $request->file('footer_first_image')->store('services', 'public') 
            : null;

        // Store footer second image
        $footerSecondImagePath = $request->hasFile('footer_second_image') 
            ? $request->file('footer_second_image')->store('services', 'public') 
            : null;

        // Create the service with all image paths
        Service::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'short_desc' => $request->short_desc,
            'content' => $request->content,
            'image' => $imagePath,
            'side_image' => $sideImagePath,
            'footer_first_image' => $footerFirstImagePath,
            'footer_second_image' => $footerSecondImagePath,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,' . $service->id,
            'short_desc' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'side_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'footer_first_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'footer_second_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the main image
        $imagePath = $service->image;
        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $imagePath = $request->file('image')->store('services', 'public');
        }

        // Handle the side image
        $sideImagePath = $service->side_image;
        if ($request->hasFile('side_image')) {
            if ($service->side_image) {
                Storage::disk('public')->delete($service->side_image);
            }
            $sideImagePath = $request->file('side_image')->store('services', 'public');
        }

        // Handle the footer first image
        $footerFirstImagePath = $service->footer_first_image;
        if ($request->hasFile('footer_first_image')) {
            if ($service->footer_first_image) {
                Storage::disk('public')->delete($service->footer_first_image);
            }
            $footerFirstImagePath = $request->file('footer_first_image')->store('services', 'public');
        }

        // Handle the footer second image
        $footerSecondImagePath = $service->footer_second_image;
        if ($request->hasFile('footer_second_image')) {
            if ($service->footer_second_image) {
                Storage::disk('public')->delete($service->footer_second_image);
            }
            $footerSecondImagePath = $request->file('footer_second_image')->store('services', 'public');
        }

        // Update the service record
        $service->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'short_desc' => $request->short_desc,
            'content' => $request->content,
            'image' => $imagePath,
            'side_image' => $sideImagePath,
            'footer_first_image' => $footerFirstImagePath,
            'footer_second_image' => $footerSecondImagePath,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }


        /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
