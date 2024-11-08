<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'product_id', 'instructor_id', 'description', 'video'];


    public function product(): BelongsTo  //product this will be needed 
    {
        return $this->belongsTo(Product::class);
        // return $this->belongsTo(Product::class, 'product_id');
    }

    public function instructor(): BelongsTo  // this will be needed to show data
    {
        return $this->belongsTo(Instructor::class);
        // return $this->belongsTo(Product::class, 'product_id');
    }
}
