<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $departments = ['English', 'Maths', 'Science', 'Economics'];
        return [
            'Course_Name' => $this->faker->name(),
            'dept' => $this->faker->randomElement($departments),
        ];
    }
}
