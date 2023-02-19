<?php

namespace Database\Seeders;

use Domain\Division\Models\Division\Division;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    public function run()
    {
        Division::factory(15)->state(new Sequence(
            [
                'name' => 'Отдел реализации проектов цифровой трансформации, инф-коммуникационных технологий и инф безопасности',
                'supervisor_id' => 1,
            ],
            ['name'=>'Отдел регионального взаимодействия', 'supervisor_id' => 1,],
            ['name'=>'Отдел организации и сопровождения форумной кампании', 'supervisor_id' => 1,],
            ['name'=>'Отдел грантовой поддержки', 'supervisor_id' => 1,],
            ['name'=>'Отдел методического и аналитического обеспечения молодёжной политики', 'supervisor_id' => 2,],
            ['name'=>'Отдел по реализации национальных приоритетов','supervisor_id' => 2,],
            ['name'=>'Отдел координации молодёжных проектов и программ', 'supervisor_id' => 2,],
            ['name'=>'Отдел международной деятельности', 'supervisor_id' => 2,],
            ['name'=>'Отдел государственного заказа', 'supervisor_id' => 3,],
            ['name'=>'Отдел бюджетного учёта и отчётности', 'supervisor_id' => 3,],
            ['name'=>'Планово-экономический отдел', 'supervisor_id' => 3,],
            ['name'=>'Отдел государственной службы, мобилизационной подготовки и кадровой работы', 'supervisor_id' => 4,],
            ['name'=>'Юридический отдел', 'supervisor_id' => 4,],
            ['name'=>'Административный отдел', 'supervisor_id' => 4,],
            ['name'=>'Отдел по работе со средствами массовой информации', 'supervisor_id' => 5,],

        ))->create();
    }
}
