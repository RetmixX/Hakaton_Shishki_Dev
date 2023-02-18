<?php

namespace Database\Factories\Shared\Avatar;

use Domain\Shared\Models\Avatar\Avatar;
use Illuminate\Database\Eloquent\Factories\Factory;

class AvatarFactory extends Factory
{
    protected $model = Avatar::class;

    public function definition(): array
    {
        return [
            'requireLevel' => $this->faker->numberBetween(0,10) ,
            'file' => $this->faker->filePath(),
        ];
    }
}
