<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'tbl_students';

    protected $fillable = ['name', 'fk_parent_id', 'gender'];

    public function parent()
    {
        return $this->belongsTo(ParentModel::class, 'fk_parent_id');
    }

    public function optedCourses()
    {
        return $this->hasMany(StudentOptedCourse::class, 'student_id');
    }
}
