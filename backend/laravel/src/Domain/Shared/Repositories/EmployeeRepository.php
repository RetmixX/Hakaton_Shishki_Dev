<?php

namespace Domain\Shared\Repositories;

use Domain\Shared\DTO\Employee\EmployeeDataCreate;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeRepository
{
    public static function createEmployee(EmployeeDataCreate $data, Request $request):void{
        User::create([
            'firstName' => $data->firstName,
            'middleName' => $data->middleName,
            'lastName' => $data->lastName,
            'startWork' => $data->startWork,
            'email' => $data->email,
            'password' => Hash::make('password'),
            'userable_type' => Employee::class,
            'userable_id' => Employee::create([
                'rang_id' => $data->rangId,
                'division_id' => $data->divisionId,
                'hr_id' => $request->user()->userable->id,
                'mentor_id' => $data->mentorId,
                'avatar_id' => 1
            ])->id
        ]);
    }
}
