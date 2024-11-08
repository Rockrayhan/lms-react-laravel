<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quizes';
    protected $fillable = ['question', 'option1','option2','option3','option4','marks','product_id', 'correct_answer' ];


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function quizAnswer(): BelongsTo
    {
        return $this->belongsTo(QuizAnswer::class);
    }

}
