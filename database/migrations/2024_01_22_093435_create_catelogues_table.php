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
        Schema::create('catelogues', function (Blueprint $table) {
            $table->id();
            $table->string('title' , 100);
            $table->string('description' , 512);
            // $table->decimal('price' , 10);
            // $table->tinyInteger('category_id');
            // $table->string('image' , 100)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catelogues');
    }
};
