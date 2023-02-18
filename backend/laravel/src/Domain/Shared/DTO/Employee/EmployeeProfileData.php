<?php

namespace Domain\Shared\DTO\Employee;

use Carbon\Carbon;
use Domain\Shared\Models\Actor\Employee;
use http\Encoding\Stream\Inflate;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

class EmployeeProfileData extends Data
{
    public function __construct(
        public readonly int $id,
        public readonly string $middleName,
        public readonly string $name,
        public readonly string $workStart,
        public readonly string $division,
        public readonly string $rang,
        public readonly int $lvl,
        public readonly int $exp
    )
    {
    }

    public static function fromModel(Employee $employee):self{
        $user = $employee->userable;
        return self::from([
            'id' => $employee->id,
            'middleName'=>$user->middleName,
            'name' => $user->firstName,
            'workStart' => Carbon::create($user->startWork)->translatedFormat('d F Y'),
            'division' => $employee->division->name,
            'rang' => $employee->rang->name,
            'lvl' => $employee->lvl,
            'exp' => $employee->exp
        ]);
    }

}
