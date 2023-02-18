<?php

namespace Database\Seeders;

use Database\Seeders\Presentation\DocumentSeeder;
use Database\Seeders\Presentation\HR;
use Database\Seeders\Presentation\UserPresentationSeeder;
use Illuminate\Database\Seeder;

class PresentationSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            ThemSeeder::class,
            AvatarSeeder::class,
            RangSeeder::class,
            DivisionSeeder::class,
            HR::class,
            DocumentSeeder::class,
            UserPresentationSeeder::class
        ]);
    }
}
