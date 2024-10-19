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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name', 100);
            $table->string('cat_image')->nullable();
            $table->longText('cat_description')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();

            // $table->foreign('created_by')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('updated_by')->references('id')->on('admin')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
