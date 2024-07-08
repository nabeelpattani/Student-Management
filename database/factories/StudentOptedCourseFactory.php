<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Course;
class StudentOptedCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id' => Student::inRandomOrder()->first()->id,
            'course_id' => Course::inRandomOrder()->first()->id,
            'is_active' => $this->faker->boolean(),
        ];
    }
}
