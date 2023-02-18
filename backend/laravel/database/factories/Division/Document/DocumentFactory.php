<?php

namespace Database\Factories\Division\Document;

use Domain\Division\Models\Division\Division;
use Domain\Division\Models\Document\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    protected $model = Document::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'data' => $this->faker->word(),
            'division_id' => Division::factory(),
        ];
    }
}
