<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SalesNumber;

class SalesNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['sales_name' => 'Admin Alhazen', 'phone_number' => '6281390000332'];

        SalesNumber::updateOrCreate($data);
    }
}
