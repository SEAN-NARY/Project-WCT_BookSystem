<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'content',
        'file_path',
    ];

    // A book detail belongs to a book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
