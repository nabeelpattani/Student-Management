<?php

namespace Database\Seeders;

use App\Models\StudentOptedCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentOptedCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       StudentOptedCourse::factory()->count(5)->create();
    }
}
