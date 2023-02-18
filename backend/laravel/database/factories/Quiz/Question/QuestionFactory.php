<?php

namespace Database\Factories\Quiz\Question;

use Domain\Quiz\Models\Question\Question;
use Domain\Quiz\Models\Theme\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition(): array
    {
        return [
            'text' => $this->faker->text(),
            'theme_id' => Theme::factory(),
        ];
    }
}
