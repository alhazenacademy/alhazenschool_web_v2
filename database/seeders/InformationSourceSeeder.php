<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('information_sources')->insert([
            ['name' => 'Media Sosial', 'is_active' => true, 'sort_order' => 1],
            ['name' => 'Mesin Pencarian (Google, Yahoo, dll)', 'is_active' => true, 'sort_order' => 2],
            ['name' => 'Website (Blog, Media, dll)', 'is_active' => true, 'sort_order' => 3],
            ['name' => 'Brosur', 'is_active' => true, 'sort_order' => 4],
            ['name' => 'Event Alhazen', 'is_active' => true, 'sort_order' => 5],
            ['name' => 'Rekomendasi dari Teman, Kerabat', 'is_active' => true, 'sort_order' => 6],
            ['name' => 'Rekomendasi dari Sekolah', 'is_active' => true, 'sort_order' => 7],
            ['name' => 'Alhazen Kendari', 'is_active' => true, 'sort_order' => 8],
            ['name' => 'Lainnya', 'is_active' => true, 'sort_order' => 9],
        ]);
    }
}
