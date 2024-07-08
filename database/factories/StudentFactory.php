<?php

namespace Database\Factories;

use App\Models\ParentModel;
use Illuminate\Database\Eloquent\Factories\Factory;


class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->name(),
            'fk_parent_id' => ParentModel::inRandomOrder()->first()->id,
            'gender' => $this->faker->randomElement(['M', 'F']),
        ];
    }
}
