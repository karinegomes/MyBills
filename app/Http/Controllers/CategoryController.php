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
        try {
            Category::create($request->all());
        } catch (Exception $e) {
            Log::debug($e);

            // TODO
        }

        return redirect(route('categories.index'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Category $category, CategoryRequest $request)
    {
        try {
            $category->update($request->all());
        } catch (Exception $e) {
            Log::debug($e);

            // TODO
        }

        return redirect(route('categories.index'));
    }
}
