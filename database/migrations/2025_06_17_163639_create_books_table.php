<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('books', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('author')->nullable();
    $table->text('description');
    $table->string('cover_image')->nullable();
    $table->foreignId('category_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }


    public function category()
{
    return $this->belongsTo(Category::class);
}

public function detail()
{
    return $this->hasOne(BookDetail::class);
}

};
