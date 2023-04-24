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
        Schema::create('book_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->string('name');
            $table->decimal('price', 8, 2);

            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_types');
    }
};
