<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function getAllCategories()
    {
        return Category::all();
    }

    public function searchCategories($search)
    {
        return Category::where('name', 'like', '%' . $search . '%')
            ->orWhere('slug', 'like', '%' . $search . '%')
            ->get();
    }

    public function findCategoryById($id)
    {
        return Category::findOrFail($id);
    }

    public function createCategory($data)
    {
        return Category::create($data);
    }

    public function updateCategory($id, $data)
    {
        $category = $this->findCategoryById($id);
        $category->update($data);
        return $category;
    }

    public function deleteCategory($id)
    {
        $category = $this->findCategoryById($id);
        $category->delete();
    }
}
