<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['student_id' , 'instructor_id', 'msg' ];

    public function student(): BelongsTo  
    {
        return $this->belongsTo(Student::class);
    }

    public function instructor(): BelongsTo  
    {
        return $this->belongsTo(Instructor::class);
    }
}
