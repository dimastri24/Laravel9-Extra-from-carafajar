<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function detailWithModelBinding(Student $student, Request $request)
    {
        // $student = Student::findOrFail($request->student);
        dd($student);
    }
}
