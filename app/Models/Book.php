<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'cover_image',
        'category_id',
    ];

    // A book belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // A book has one detail
    public function detail()
    {
        return $this->hasOne(BookDetail::class);
    }
}

