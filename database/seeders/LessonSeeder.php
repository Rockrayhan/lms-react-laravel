<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lessons')->insert(
            [
            'name' => "Data Spamming",
            "product_id" => "2",
            "instructor_id" => "2"
            ],
        );
        DB::table('lessons')->insert(
            [
            'name' => "Basic Data Entry",
            "product_id" => "1",
            "instructor_id" => "1"
            ],
        );
    }
}
