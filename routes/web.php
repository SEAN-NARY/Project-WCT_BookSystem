<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

Route::get(
    '/',
    function () {
        return view('index');
    }
);

Route::get(
    '/dashboard',
    function () {
        return view('index');
    }
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(
    function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    }
);

Route::get('/index', function () {
    return view('index');
});

Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

require __DIR__.'/auth.php';


