<?php

namespace Database\Factories\Division\Division;

use Domain\Division\Models\Division\Division;
use Domain\Shared\Models\Actor\Supervisor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DivisionFactory extends Factory
{
    protected $model = Division::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'supervisor_id' => Supervisor::factory(),
        ];
    }
}
