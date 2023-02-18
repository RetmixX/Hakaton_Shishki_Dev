<?php

namespace Domain\Shared\ViewModels;

use Domain\Shared\DTO\Employee\EmployeeProfileData;
use Domain\Shared\DTO\HR\HRProfileData;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\HR;
use Illuminate\Support\Collection;

class HRProfileViewModel extends ViewModel
{

    public function __construct(public readonly HR $hr)
    {
    }

    public function hrProfile():HRProfileData{
        return HRProfileData::from($this->hr);
    }

    public function employees():Collection{
        $employees = collect();

        Employee::all()->each(fn(Employee $employee)=>
        $employees->push(EmployeeProfileData::from($employee)->include('progress')));

        return $employees;
    }
}
