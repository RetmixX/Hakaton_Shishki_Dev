<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $employeeRole = Role::create(['name'=>'Employee']);
        //TODO: Добавить прав для сотрудника

        $hrRole = Role::create(['name'=>'HR']);
        //TODO: Добавить прав для HR

        $supervisorRole = Role::create(['name'=>'Supervisor']);
        //TODO: Добавить прав для Supervisor

    }
}
