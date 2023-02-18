<?php

namespace Database\Factories\Shared\Actor;

use Domain\Division\Models\Division\Division;
use Domain\Quiz\Models\Theme\Theme;
use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\HR;
use Domain\Shared\Models\Actor\Mentor;
use Domain\Shared\Models\Avatar\Avatar;
use Domain\Shared\Models\Rang\Rang;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition(): array
    {
        return [
            'rang_id' => Rang::factory(),
            'division_id' => Division::factory(),
            'hr_id' => HR::factory(),
            'mentor_id' => Mentor::factory(),
            'avatar_id' => Avatar::factory(),
            'last_theme_id' => Theme::factory(),
        ];
    }
}
