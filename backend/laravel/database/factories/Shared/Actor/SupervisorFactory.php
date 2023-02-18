<?php

namespace Database\Factories\Shared\Actor;

use Domain\Shared\Models\Actor\Supervisor;
use Domain\Shared\Models\Rang\Rang;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupervisorFactory extends Factory
{
    protected $model = Supervisor::class;

    public function definition(): array
    {
        return [
            'rang_id' => Rang::factory(),
        ];
    }
}
