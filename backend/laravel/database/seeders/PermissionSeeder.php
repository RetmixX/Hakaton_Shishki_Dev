<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        $hrRole = Role::create(['name'=>'HR']);

        $supervisorRole = Role::create(['name'=>'Supervisor']);

        $mentor = Role::create(['name' => 'Mentor']);
    }
}
