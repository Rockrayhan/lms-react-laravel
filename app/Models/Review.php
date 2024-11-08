<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'occupation', 'description', 'rating', 'student_id', 'status'];


    // public function user(): BelongsTo  // this will be needed to show data
    // {
    //     return $this->belongsTo(User::class);
    // }


    public function student(): BelongsTo  // this will be needed to show data
    {
        return $this->belongsTo(Student::class);
    }
}
