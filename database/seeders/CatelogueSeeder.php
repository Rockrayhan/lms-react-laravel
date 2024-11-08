<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatelogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catelogues')->insert([
            'title' => " Product Title 1 ",
            'description' => 'This is product description',
            ]);
        DB::table('catelogues')->insert([
            'title' => " Product Title 2",
            'description' => 'This is product description',
            ]);
        DB::table('catelogues')->insert([
            'title' => " Product Title 3",
            'description' => 'This is product description',
            ]);
        DB::table('catelogues')->insert([
            'title' => " Product Title 4",
            'description' => 'This is product description',
            ]);
    }
}
