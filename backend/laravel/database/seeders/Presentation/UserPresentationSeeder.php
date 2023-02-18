<?php

namespace Database\Seeders\Presentation;

use Domain\Shared\Models\Actor\Supervisor;
use Domain\Shared\Models\Actor\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserPresentationSeeder extends Seeder
{
    public function run()
    {
        User::factory(5)->state(
            new Sequence(
                [
                    'firstName' => 'Екатерина',
                    'middleName' => 'Богомаз',
                    'email' => 'bogomaz@mail.ru',
                    'userable_type' => Supervisor::class,
                    'userable_id' => Supervisor::factory()->create([
                        'rang_id' => 1
                    ])
                ],

                [
                    'firstName' => 'Ольга',
                    'middleName' => 'Мамонова',
                    'email' => 'mamonova@mail.ru',
                    'userable_type' => Supervisor::class,
                    'userable_id' => Supervisor::factory()->create([
                        'rang_id' => 2
                    ])
                ],

                [
                    'firstName' => 'Анатолий',
                    'middleName' => 'Демьянов',
                    'email' => 'demjanov@mail.ru',
                    'userable_type' => Supervisor::class,
                    'userable_id' => Supervisor::factory()->create([
                        'rang_id' => 3
                    ])
                ],

                [
                    'firstName' => 'Максим',
                    'middleName' => 'Самошест',
                    'email' => 'samoshest@mail.ru',
                    'userable_type' => Supervisor::class,
                    'userable_id' => Supervisor::factory()->create([
                        'rang_id' => 4
                    ])
                ],

                [
                    'firstName' => 'Антон',
                    'middleName' => 'Пашков',
                    'email' => 'pashkov@mail.ru',
                    'userable_type' => Supervisor::class,
                    'userable_id' => Supervisor::factory()->create([
                        'rang_id' => 5
                    ])
                ]


            )
        )->create()->each(fn(User $user) => $user->assignRole('Supervisor'));
    }
}
