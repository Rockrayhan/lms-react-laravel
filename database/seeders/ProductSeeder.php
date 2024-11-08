<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => "Data Analysis",
            'description' => 'This is product description',
            'image' =>  'images/no_photo.jpg',
            'price' => '120',
            'category_id' => '1',
            'manufacturer_id' => '1',
            'instructor_id'=>'1',
            'student_id'=> '2',
        ]);
        DB::table('products')->insert([
            'name' => "Linux Basic To Advance",
            'description' => 'This is product description',
            'image' =>  'images/no_photo.jpg',
            'price' => '130',
            'category_id' => '1',
            'manufacturer_id' => '1',
            'instructor_id' => '1',
            'student_id' => '2',
        ]);
        DB::table('products')->insert([
            'name' => "MS expert",
            'description' => 'This is product description',
            'image' =>  'images/no_photo.jpg',
            'price' => '140',
            'category_id' => '2',
            'manufacturer_id' => '2',
            'instructor_id' => '1',
            'student_id' => '2',
        ]);
        DB::table('products')->insert([
            'name' => "Prompt Engineering",
            'description' => 'This is product description',
            'image' =>  'images/no_photo.jpg',
            'price' => '150',
            'category_id' => '2',
            'manufacturer_id' => '2',
            'instructor_id' => '1',
            'student_id' => '2',
        ]);
        DB::table('products')->insert([
            'name' => "AI learning",
            'description' => 'This is product description',
            'image' =>  'images/no_photo.jpg',
            'price' => '140',
            'category_id' => '3',
            'manufacturer_id' => '3',
            'instructor_id' => '2',
            'student_id' => '2',
        ]);
        DB::table('products')->insert([
            'name' => "Graphics Design",
            'description' => 'This is product description',
            'image' =>  'images/no_photo.jpg',
            'price' => '150',
            'category_id' => '3',
            'manufacturer_id' => '3',
            'instructor_id' => '2',
            'student_id' => '2',
        ]);
        DB::table('products')->insert([
            'name' => "Facebook Marketing",
            'description' => 'This is product description',
            'image' =>  'images/no_photo.jpg',
            'price' => '140',
            'category_id' => '3',
            'manufacturer_id' => '3',
            'instructor_id' => '2',
            'student_id' => '2',
        ]);
        DB::table('products')->insert([
            'name' => "Digital Marketing",
            'description' => 'This is product description',
            'image' =>  'images/no_photo.jpg',
            'price' => '150',
            'category_id' => '3',
            'manufacturer_id' => '3',
            'instructor_id' => '2',
            'student_id' => '2',
        ]);
    }
}
