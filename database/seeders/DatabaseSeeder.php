<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(ProgramSeeder::class);
        $this->call(TrialTimeSeeder::class);
        $this->call(InformationSourceSeeder::class);
        $this->call(SalesNumberSeeder::class);
        $this->call(TutorSeeder::class);
        $this->call(SiteSettingSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(SuperAdminSeeder::class);
    }
}
