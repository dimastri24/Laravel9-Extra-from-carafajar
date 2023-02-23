<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student', ['students' => $students,]);
    }

    public function show($id)
    {
        // $student = DB::table('students')->findOr($id);
        $student = Student::findOrFail($id);
        return view('student-detail', ['student' => $student,]);
    }
}
