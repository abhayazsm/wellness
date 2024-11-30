<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use FFMpeg;

class MediaController extends Controller
{
    public function index()
    {
        $mediaItems = Media::paginate(9);;
        return view('admin.media.index', compact('mediaItems'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required|in:image,video',
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,mp4,avi',
        ]);

        $media = new Media();
        $media->title = $request->title;
        $media->type = $request->type;
        
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('media', 'public');
            $media->file_path = $path;
            
            if ($request->type == 'video') {
                // Optional: Generate thumbnail for video
                $media->thumbnail = 'path_to_video_thumbnail';
            }
        }

        $media->save();

        return redirect()->route('admin.media.index')->with('success', 'Media created successfully.');;
    }
    

    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('admin.media.edit', compact('media'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required|in:image,video',
        ]);
    
        $media = Media::findOrFail($id);
        $oldFilePath = $media->file_path;  // Store the old file path to delete it later if updated.
        
        $media->title = $request->title;
        $media->type = $request->type;
    
        // If a new file is uploaded
        if ($request->hasFile('file')) {
            // Delete the previous file if it exists in storage
            if ($oldFilePath && \Storage::disk('public')->exists($oldFilePath)) {
                \Storage::disk('public')->delete($oldFilePath);
            }
    
            // Store the new file
            $path = $request->file('file')->store('media', 'public');
            $media->file_path = $path;
        }
    
        // Save the media record with the updated information
        $media->save();
    
        // Redirect to the media index page or show a success message
        return redirect()->route('admin.media.index')
        ->with('success', 'Media updated successfully.');;
    }

    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        
        // Get the file path from the media record
        $filePath = $media->file_path;

        // If the file exists in the public storage, delete it
        if ($filePath && \Storage::disk('public')->exists($filePath)) {
            \Storage::disk('public')->delete($filePath);
        }

        // Now delete the media record from the database
        $media->delete();

        // Redirect with success message
        return redirect()->route('admin.media.index')
            ->with('success', 'Media deleted successfully.');
    }
}
