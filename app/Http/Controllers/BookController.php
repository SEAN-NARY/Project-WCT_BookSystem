<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\BookDetail;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $books = Book::with('category')
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%");
            })
            ->get()
            ->groupBy('category.name');

        $categories = Category::all();

        return view('book', ['books' => $books, 'search' => $search, 'categories' => $categories]);
    }

    public function show($id)
    {
        $book = Book::with(['category', 'detail'])->findOrFail($id);
        
        return view('book-detail', compact('book'));
    }
}


