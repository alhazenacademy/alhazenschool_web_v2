<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'tutor.internal@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('jagoIT2022;'), // ganti
            ]
        );

        $user->assignRole('super_admin');
    }
}
