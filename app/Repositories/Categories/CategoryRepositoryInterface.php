<?php

namespace App\Repositories\Categories;

interface CategoryRepositoryInterface
{
    public function all();

    public function findCategory($id);

    public function getCategories();

    public function getCurrentCategory($slug);
}