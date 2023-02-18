<?php

namespace Database\Seeders;

use Domain\Quiz\Models\Theme\Theme;
use Illuminate\Database\Seeder;

class ThemSeeder extends Seeder
{
    public function run()
    {
        Theme::factory(20)->create();
    }
}
