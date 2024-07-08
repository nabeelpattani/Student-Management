<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'tbl_courses';
    protected $fillable = ['Course_Name', 'Dept'];

    public function optedCourses()
    {
        return $this->hasMany(StudentOptedCourse::class, 'course_id');
    }
}
