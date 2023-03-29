<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    $students = Student::all();
    dd($students);
});

Route::get('/students/detail/{student}', function (Student $student) {
    // $student = Student::findOrFail($request->id)->toArray();
    // dd($student);
    dd($student->toArray());
});

Route::get('/students/edit/{student}', function (Student $student, Request $request) {
    // $student = Student::findOrFail($request->id);
    // $student->name = 'Cindy Maela';
    // $student->save();
    // dd($student);

    $student->name = 'Rahayu Intan';
    $student->save();
    dd($student);
});

Route::get('students/delete/{student}', function (Student $student) {
    $student->delete();
    dd($student);
});

Route::get('students/controller/detail/{student}', [StudentController::class, 'detailWithModelBinding']);
