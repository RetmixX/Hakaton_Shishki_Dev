<?php

namespace Database\Factories\Shared\Rang;

use Domain\Shared\Models\Rang\Rang;
use Illuminate\Database\Eloquent\Factories\Factory;

class RangFactory extends Factory
{
    protected $model = Rang::class;

    public function definition(): array
    {
        return [
            'name' => "Rang_{$this->faker->colorName}",
        ];
    }
}
