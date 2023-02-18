<?php

namespace Database\Factories\Quiz\Theme;

use Domain\Quiz\Models\Theme\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThemeFactory extends Factory
{
    protected $model = Theme::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'numberOrder' => $this->faker->randomNumber(1,20),
        ];
    }
}
