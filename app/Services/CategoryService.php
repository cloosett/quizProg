<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getCategories($search = null)
    {
        if ($search) {
            return $this->categoryRepository->searchCategories($search);
        }
        return $this->categoryRepository->getAllCategories();
    }

    public function storeCategory($data)
    {
        $data['is_active'] = isset($data['status']) ? 1 : 0;
        return $this->categoryRepository->createCategory($data);
    }

    public function updateCategory($id, $data)
    {
        $data['is_active'] = isset($data['status']) ? 1 : 0;
        return $this->categoryRepository->updateCategory($id, $data);
    }

    public function deleteCategory($id)
    {
        return $this->categoryRepository->deleteCategory($id);
    }
}
