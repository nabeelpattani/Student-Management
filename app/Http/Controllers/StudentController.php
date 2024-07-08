<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\ParentModel;
use App\Models\StudentOptedCourse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('parent', 'optedCourses.course')->get();
        return view('students.index', compact('students'));
    }

    public function toggleCourseStatus(Request $request, $id)
    {
        $optedCourse = StudentOptedCourse::findOrFail($id);
        $optedCourse->is_active = !$optedCourse->is_active;
        $optedCourse->save();

        return response()->json(['status' => 'success', 'is_active' => $optedCourse->is_active]);
    }
}

