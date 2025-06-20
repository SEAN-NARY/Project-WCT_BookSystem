<?php

namespace App\Http\Controllers;
use App\Models\Book; 

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Load categories with their books
        $categories = Category::with('books')->get();

        // Pass categories to the view
        return view('categories.index', compact('categories'));
    }
}
