<?php

namespace Database\Seeders;

use Domain\Shared\Models\Rang\Rang;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class RangSeeder extends Seeder
{
    public function run()
    {
        Rang::factory(6)->state(new Sequence(
            ['name'=>'Управление регионального взаимодействия'],
            ['name'=>'Управление молодежных проектов и программ'],
            ['name'=>'Финансово-экономическое управление'],
            ['name'=>'Управление делами, государственной службы и правового обеспечения'],
            ['name'=>'Отдел по работе со средствами'],
            ['name'=>'Помощник'],
        ))->create();
    }
}
