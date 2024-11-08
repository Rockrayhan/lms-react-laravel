<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manufacturers')->insert([
            'name' => "Jonson & Jonson",
            'country' => "USA",
            ]);
        DB::table('manufacturers')->insert([
            'name' => "Healforce",
            'country' => "China",
            ]);
        DB::table('manufacturers')->insert([
            'name' => "Meditron",
            'country' => "Canada",
            ]);
    }
}
