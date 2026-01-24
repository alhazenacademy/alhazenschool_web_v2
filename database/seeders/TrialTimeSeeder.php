<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TrialTime;

class TrialTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $items = [
            ['time' => '09:00', 'sort_order' => 1],
            ['time' => '10:00', 'sort_order' => 2],
            ['time' => '11:00', 'sort_order' => 3],
            ['time' => '13:00', 'sort_order' => 4],
            ['time' => '14:00', 'sort_order' => 5],
            ['time' => '15:00', 'sort_order' => 6],
            ['time' => '16:00', 'sort_order' => 7],
            ['time' => '17:00', 'sort_order' => 8],
        ];

        // idempotent
        foreach ($items as $i) {
            TrialTime::query()->updateOrCreate(
                ['time' => $i['time']],
                ['sort_order' => $i['sort_order'], 'is_active' => true]
            );
        }
    }
}
