<?php

namespace Database\Seeders;

use Database\Seeders\Presentation\DocumentSeeder;
use Database\Seeders\Presentation\HR;
use Database\Seeders\Presentation\QuestionSeeder;
use Database\Seeders\Presentation\ThemePresentationSeeder;
use Database\Seeders\Presentation\UserPresentationSeeder;
use Illuminate\Database\Seeder;

class PresentationSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            ThemePresentationSeeder::class,
            AvatarSeeder::class,
            RangSeeder::class,
            DivisionSeeder::class,
            HR::class,
            DocumentSeeder::class,
            UserPresentationSeeder::class,
            QuestionSeeder::class,
        ]);
    }
}
