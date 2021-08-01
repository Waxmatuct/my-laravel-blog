<?php

namespace App\Repositories\Categories;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all()
    {
        return Category::all();
    }

    public function findCategory($id)
    {
        return Category::find($id);
    }

    public function getCategories()
    {
        return Category::orderBy('id', 'asc')->get();
    }

    public function getCurrentCategory($slug)
    {
        return Category::where('slug', $slug)->first();
    }
}