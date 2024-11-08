<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CateorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => "covid",
            ]);
        DB::table('categories')->insert([
            'name' => "Medical",
            ]);
        DB::table('categories')->insert([
            'name' => "Surgery",
            ]);
    }
}
