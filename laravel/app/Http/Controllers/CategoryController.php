<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $category->load('images');

        return view('app.categories.show', compact('category'));
    }
}
