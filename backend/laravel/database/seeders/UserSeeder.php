<?php

namespace Database\Seeders;

use Domain\Shared\Models\Actor\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->mentor()->create()->each(fn(User $user)=>
        $user->assignRole('Mentor'));

        User::factory(10)->supervisor()->create()->each(fn(User $user)=>
        $user->assignRole('Supervisor'));

        User::factory(10)->hr()->create()->each(fn(User $user)=>
        $user->assignRole('HR'));

        User::factory(10)->employee()->create()->each(fn(User $user)=>
        $user->assignRole('Employee'));
    }
}
