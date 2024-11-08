<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Instructor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $guard = 'instructor' ; 

    protected $fillable = ['name','email','password','category_id', 'product_id'];


        public function lesson(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }



    public function category(): BelongsTo //use this to get data
    {
        return $this->belongsTo(Category::class);
    }



    // public function product(): HasMany
    // {
    //     return $this->hasMany(Product::class);
    // }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }


    public function message(): HasMany
    {
        return $this->hasMany(Message::class);
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
