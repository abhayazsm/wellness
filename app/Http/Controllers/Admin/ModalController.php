<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Modal;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function index()
    {
        $modals = Modal::orderBy('priority', 'asc')->paginate(10);
        return view('admin.modals.index', compact('modals'));
    }

    public function create()
    {
        return view('admin.modals.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'string|max:255',
            'body' => 'string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable',
            'background_color' => 'nullable|string|max:7',
            'priority' => 'integer|min:0',
        ]);

        Modal::create($request->all());

        return redirect()->route('admin.modals.index')->with('success', 'Modal created successfully!');
    }

    public function edit(Modal $modal)
    {
        return view('admin.modals.edit', compact('modal'));
    }

    public function update(Request $request, Modal $modal)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'string|max:255',
            'body' => 'string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable',
            'background_color' => 'nullable|string|max:7',
            'priority' => 'integer|min:0',
        ]);

        $modal->update($request->all());

        return redirect()->route('admin.modals.index')->with('success', 'Modal updated successfully!');
    }

    public function destroy(Modal $modal)
    {
        $modal->delete();
        return redirect()->route('admin.modals.index')->with('success', 'Modal deleted successfully!');
    }

    public function updateStatus($id)
    {
        $modal = Modal::findOrFail($id);

        // Toggle the status between 'active' and 'inactive'
        $modal->status = ($modal->status == 'active') ? 'inactive' : 'active';
        $modal->save();

        return redirect()->route('admin.modals.index')->with('success', 'Modal status updated successfully');
    }
}
