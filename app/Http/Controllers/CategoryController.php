<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(15);
        
        return view('categories.index', ['categories' => $categories]);
    }
    public function create(Request $request)
    {
        Category::create([
            'title' => $request['title'],
        ]);
        return view('');
    }

    public function delete(Category $category)
    {
        $category->delete();
        return view('');
    }
}
