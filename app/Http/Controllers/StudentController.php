<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(StoreStudentRequest $request)
    {
        $student = Student::query()->create($request->validated());
        return response()->json($student);
    }
   public function show($id)
{
    $student = Student::with('medicalFile')->find($id);

    return response()->json($student);
}
}
