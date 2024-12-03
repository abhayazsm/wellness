<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        // Validate the name field only, since slug will be generated automatically
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        // Generate a slug dynamically from the category name
        $slug = Str::slug($validatedData['name']);

        // Ensure the slug is unique by checking the database
        $slugCount = Category::where('slug', 'like', "$slug%")->count();
        if ($slugCount > 0) {
            $slug = "{$slug}-" . ($slugCount + 1);
        }

        // Create the category with the generated slug
        Category::create([
            'name' => $validatedData['name'],
            'slug' => $slug,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.categories.index')
                        ->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        // Generate a new slug based on the name
        $slug = Str::slug($request->name);

        // Check for slug uniqueness (if changing the name)
        if ($category->slug !== $slug) {
            $slugCount = Category::where('slug', 'like', "$slug%")->count();
            if ($slugCount > 0) {
                $slug = "{$slug}-" . ($slugCount + 1);
            }
        } else {
            $slug = $category->slug; // Keep the same slug if the name hasn't changed
        }

        // Update the category
        $category->update([
            'name' => $request->name,
            'slug' => $slug,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
