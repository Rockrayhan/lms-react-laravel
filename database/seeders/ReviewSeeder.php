<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'name' => "Best in the world",
            'occupation' => 'Web Developer',
            'description' =>  'This is the review Description',
            'user_id' => '1',
            'status' => '1',
            'rating'=>'3'
        ]);
        DB::table('reviews')->insert([
            'name' => "Most Electrifying Course Ever",
            'occupation' => 'UI/UX Designer',
            'description' =>  'This is the review Description',
            'user_id' => '1',
            'status' => '1',
            'rating'=>'4'
        ]);
        DB::table('reviews')->insert([
            'name' => "This is Phenominul",
            'occupation' => 'Student',
            'description' =>  'This is the review Description',
            'user_id' => '1',
            'status' => '0',
            'rating'=>'5'
        ]);
    }
}
