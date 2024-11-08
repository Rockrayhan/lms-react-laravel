<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuizAnswer extends Model
{
    use HasFactory;
    protected $table = 'quizanswers';
    protected $fillable = ['student_id', 'question_number','selected_option', 'is_correct', 'correct_answer' ];


    public function quiz(): BelongsTo
    {
       return $this->belongsTo(Quiz::class, 'quiz_id');
    }
}
