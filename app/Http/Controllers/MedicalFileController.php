<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicalFileRequest;
use App\Http\Requests\StoreStudentRequest;
use App\Models\MedicalFile;
use App\Models\Student;
use Illuminate\Http\Request;
use Psr\EventDispatcher\StoppableEventInterface;

class MedicalFileController extends Controller
{
    public function store(StoreMedicalFileRequest $request)
    {
        $medicalfile = MedicalFile::query()->create()($request->validated());
        return response()->json($medicalfile);
    }
     public function show(Student $student)
{
    return response()->json($student->medicalFile);
}
}
