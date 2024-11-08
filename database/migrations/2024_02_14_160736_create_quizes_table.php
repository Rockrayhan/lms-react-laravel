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
        Schema::create('quizes', function (Blueprint $table) {
            $table->id();
            $table->string('question' , 100);
            $table->string('option1' , 50);
            $table->string('option2' , 50);
            $table->string('option3' , 50);
            $table->string('option4' , 50);
            $table->tinyInteger('marks');
            $table->tinyInteger('product_id');
            $table->string('correct_answer', 50); // Added correct_answer field
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizes');
    }
};
