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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->nullable(); // To store session ID
            $table->string('ip_address')->nullable(); // To store user IP address
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Foreign key to products table
            $table->timestamps(); // Created and updated timestamps
            // Create an index to improve performance for session-based queries
            $table->index('session_id');
            $table->index('ip_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
