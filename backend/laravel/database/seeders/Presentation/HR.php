<?php

namespace Database\Seeders\Presentation;

use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\Mentor;
use Domain\Shared\Models\Actor\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class HR extends Seeder
{
    public function run()
    {
        User::factory()->state(new Sequence(
            [
                'firstName' => 'Полина',
                'middleName' => 'Карнаухова',
                'email' => 'karnauhova@mail.ru',
                'startWork' => '2023-01-18',
                'userable_type' => \Domain\Shared\Models\Actor\HR::class,
                'userable_id' => \Domain\Shared\Models\Actor\HR::factory()
            ]
        ))->create()->each(fn(User $user)=>$user->assignRole('HR'));

        User::factory(2)->state(new Sequence(
            [
                'firstName' => 'Андрей',
                'middleName' => 'Неупокоев',
                'email' => 'neupokoev@mail.ru',
                'startWork' => '2023-01-13',
                'userable_type' => Mentor::class,
                'userable_id' => Mentor::factory()
            ],

            [
                'firstName' => 'Кирилл',
                'middleName' => 'Черногривов',
                'email' => 'chernogrivov@mail.ru',
                'startWork' => '2022-12-11',
                'userable_type' => Mentor::class,
                'userable_id' => Mentor::factory()
            ]
        ))->create()->each(fn(User $user)=>$user->assignRole('Mentor'));

        User::factory(4)->state(new Sequence(
            [
                'firstName' => 'Артём',
                'middleName' => 'Захаров',
                'email' => 'zakharov@mail.ru',
                'startWork' => '2023-02-14',
                'userable_type' => Employee::class,
                'userable_id' => Employee::factory()->create([
                    'rang_id' => 6,
                    'hr_id' => 1,
                    'mentor_id' => 1,
                    'exp' => 10,
                    'lvl' => 2,
                    'last_theme_id' => 2,
                    'division_id' => 3,
                    'avatar_id' => 2
                ])
            ],

            [
                'firstName' => 'Алёна',
                'middleName' => 'Плотникова',
                'email' => 'plotnikova@mail.ru',
                'startWork' => '2023-02-15',
                'userable_type' => Employee::class,
                'userable_id' => Employee::factory()->create([
                    'rang_id' => 6,
                    'hr_id' => 1,
                    'mentor_id' => 1,
                    'exp' => 0,
                    'lvl' => 1,
                    'last_theme_id' => 1,
                    'division_id' => 1,
                    'avatar_id' => 1
                ])
            ],

            [
                'firstName' => 'Артем',
                'middleName' => 'Репин',
                'email' => 'repin@mail.ru',
                'startWork' => '2023-02-15',
                'userable_type' => Employee::class,
                'userable_id' => Employee::factory()->create([
                    'rang_id' => 6,
                    'hr_id' => 1,
                    'mentor_id' => 1,
                    'exp' => 0,
                    'lvl' => 3,
                    'last_theme_id' => 1,
                    'division_id' => 1,
                    'avatar_id' => 1
                ])
            ],

            [
                'firstName' => 'Дмитрий',
                'middleName' => 'Антипов',
                'email' => 'antipov@mail.ru',
                'startWork' => '2023-02-15',
                'userable_type' => Employee::class,
                'userable_id' => Employee::factory()->create([
                    'rang_id' => 6,
                    'hr_id' => 1,
                    'mentor_id' => 1,
                    'exp' => 0,
                    'lvl' => 4,
                    'last_theme_id' => 2,
                    'division_id' => 1,
                    'avatar_id' => 1
                ])
            ]
        ))->create()->each(fn(User $user)=>$user->assignRole('Employee'));
    }
}
