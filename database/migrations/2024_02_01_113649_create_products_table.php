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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 100);
            $table->string('description' , 100);
            $table->decimal('price' , 10);
            $table->tinyInteger('category_id');
            $table->tinyInteger('manufacturer_id');
            $table->string('image' , 100)->nullable();
            $table->tinyInteger('instructor_id')->nullable();
            $table->tinyInteger('student_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
