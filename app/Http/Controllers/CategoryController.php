<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $category = new Category();

        return view('categories.edit', compact('category'));
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->all());

        $categories = Category::all();

        return compact('categories');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Category $category, CategoryRequest $request)
    {
        $category->update($request->all());

        $categories = Category::all();

        return compact('categories');
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();
        } catch (\Exception $e) {
            Log::debug($e);

            return;
        }

        $categories = Category::all();

        return response()->json(compact('categories'));
    }

    public function ajaxGetCategories()
    {
        $categories = Category::all();

        return $categories;
    }
}
