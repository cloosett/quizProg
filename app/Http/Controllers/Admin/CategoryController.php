<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $categories = \App\Models\Category::where('name', 'like', '%' . $search . '%')
                ->orWhere('slug', 'like', '%' . $search . '%')
                ->get();
        } else {
            $categories = \App\Models\Category::all();
        }

        return view('admin.categories', compact('categories'));
    }

    public function store(Request $request){
        // dodati validaciju

        $category = Category::create([
            'name' => $request->title,
            'slug' => $request->slug,
            'is_active' => $request->status ? 1 : 0
        ]);

        return redirect()->route('admin.categories');
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->title,
            'slug' => $request->slug,
            'is_active' => $request->status ? 1 : 0,
        ]);

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully');
    }
}
