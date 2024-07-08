<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentOptedCourse extends Model
{
    use HasFactory;

    protected $table = 'tbl_student_opted_courses';
    protected $fillable = ['student_id', 'course_id', 'is_active'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
