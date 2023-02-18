<?php

namespace Domain\Shared\DTO\Employee;

use Carbon\Carbon;
use Domain\Quiz\Models\Theme\Theme;
use Domain\Shared\Models\Actor\Employee;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Lazy;

class EmployeeProfileData extends Data
{
    public function __construct(
        public readonly int $id,
        public readonly string $middleName,
        public readonly string $name,
        public readonly string $workStart,
        public readonly string $division,
        public readonly string $rang,
        public readonly null|Lazy|int $lvl,
        public readonly null|Lazy|int $exp,
        public readonly null|Lazy|int $progress
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
            'lvl' => Lazy::create(fn()=>$employee->lvl),
            'exp' => Lazy::create(fn()=>$employee->exp),
            'progress' => Lazy::create(fn()=>intval(($employee->last_theme_id/Theme::all()->count())*100))
        ]);
    }

}
