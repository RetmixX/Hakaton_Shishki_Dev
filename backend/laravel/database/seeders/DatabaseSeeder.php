<?php

namespace Database\Seeders;

use Domain\Shared\Models\Actor\User;
use Domain\Shared\Models\Rang\Rang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RangSeeder::class,
            DivisionSeeder::class,
            UserSeeder::class,
        ]);

    }
}
