<?php

namespace Database\Seeders;

use Domain\Shared\Models\Actor\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class
        ]);
        $this->call([
            User::factory()->employee()->create(),
            User::factory()->mentor()->create(),
            User::factory()->hr()->create(),
            User::factory()->supervisor()->create()
        ]);
    }
}
