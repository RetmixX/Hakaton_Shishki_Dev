<?php

namespace Database\Seeders;

use Domain\Shared\Models\Avatar\Avatar;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    public function run()
    {
        Avatar::factory(3)->create();
    }
}
