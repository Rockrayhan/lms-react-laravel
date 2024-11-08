<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name' , 'description', 'price', 'category_id', 'image', 'instructor_id'  ,'student_id', 'status' ];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }
    
    public function lesson(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }


    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class);
    }


    
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }



    public function procourse(): BelongsTo
    {
        return $this->belongsTo(procourse::class);
    }


    public function quiz(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }


    public function orders()
    {
        return $this->hasMany(Order::class, 'product_id');
    }

    
}
