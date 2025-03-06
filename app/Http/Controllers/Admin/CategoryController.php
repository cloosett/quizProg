<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $categories = $this->categoryService->getCategories($search);

        return view('admin.categories', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $this->categoryService->storeCategory($data);

        return redirect()->route('admin.categories');
    }

    public function update(Request $request, $id)
    {
//        $data = $request->validated();
        $this->categoryService->updateCategory($id, $request->all());

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);

        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully');
    }
}
