<?php

namespace Database\Factories\Quiz\Response;

use Domain\Quiz\Models\Question\Question;
use Domain\Quiz\Models\Response\Response;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponseFactory extends Factory
{
    protected $model = Response::class;

    public function definition(): array
    {
        return [
            'response' => $this->faker->word(),
            'status_response' => $this->faker->boolean(),
            'question_id' => Question::factory(),
        ];
    }
}
