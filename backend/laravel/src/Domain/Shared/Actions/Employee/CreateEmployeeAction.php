<?php

namespace Domain\Shared\Actions\Employee;

use Domain\Shared\DTO\Employee\EmployeeDataCreate;
use Domain\Shared\Repositories\EmployeeRepository;
use Illuminate\Http\Request;

class CreateEmployeeAction
{
    public static function execute(EmployeeDataCreate $data, Request $request)
    {
        EmployeeRepository::createEmployee($data, $request);
    }
}
