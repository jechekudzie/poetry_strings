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
        Schema::create('book_store_stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('book_type_id')->nullable();
            $table->unsignedBigInteger('book_store_id');
            $table->unsignedInteger('quantity');

            $table->unique(['book_id', 'book_type_id', 'book_store_id']);

            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('book_type_id')->references('id')->on('book_types')->onDelete('cascade');
            $table->foreign('book_store_id')->references('id')->on('book_stores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_store_stocks');
    }
};
