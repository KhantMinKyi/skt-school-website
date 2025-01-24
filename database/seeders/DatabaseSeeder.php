<?php

namespace Database\Seeders;

use App\Models\Branch;
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

        Branch::create([
            'branch_name' => 'SKT International School - Riverside Campus',
            'branch_short_name' => 'SKT-RC',
            'branch_location' => 'Thar Kay Ta',
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'user_name' => 'kmk',
            'email' => 'test@example.com',
            'password' => bcrypt('12345'),
            'is_admin' => 1,
            'user_type' => 'admin',
            'branch_id' => 1,
            'phone' => '1123123413432',
            'gender' => 'male',
            'birth_date' => '199-06-28',

        ]);
    }
}
