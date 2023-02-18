<?php

namespace Database\Factories\Shared\Actor;

use Domain\Shared\Models\Actor\Employee;
use Domain\Shared\Models\Actor\HR;
use Domain\Shared\Models\Actor\Mentor;
use Domain\Shared\Models\Actor\Supervisor;
use Domain\Shared\Models\Actor\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'firstName'=>fake()->firstName,
            'middleName'=>fake()->firstNameFemale(),
            'lastName'=>fake()->lastName,
            'startWork'=>fake()->date,
            'email'=>$this->faker->email,
            'password'=>Hash::make('password'),
            'photo'=>$this->faker->filePath(),
        ];
    }

    public function employee():Factory{
        return $this->state(function (array $attributes) {
            return [
                'userable_type' => Employee::class,
                'userable_id' => Employee::factory(),
            ];
        });
    }

    public function mentor():Factory{
        return $this->state(function (array $attributes) {
            return [
                'userable_type' => Mentor::class,
                'userable_id' => Mentor::factory(),
            ];
        });
    }

    public function hr():Factory{
        return $this->state(function (array $attributes) {
            return [
                'userable_type' => HR::class,
                'userable_id' => HR::factory(),
            ];
        });
    }

    public function supervisor():Factory{
        return $this->state(function (array $attributes) {
            return [
                'userable_type' => Supervisor::class,
                'userable_id' => Supervisor::factory(),
            ];
        });
    }
}
