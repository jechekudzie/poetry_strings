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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('book_type_id')->nullable();
            $table->unsignedBigInteger('book_store_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('quantity');
            $table->string('currency');
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('payment_method_id');
            $table->string('proof_of_payment')->nullable();
            $table->string('purchase_order_number')->unique();

            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('book_type_id')->references('id')->on('book_types')->onDelete('cascade');
            $table->foreign('book_store_id')->references('id')->on('book_stores')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
