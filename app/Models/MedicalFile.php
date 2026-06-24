<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['student_id', 'blod type', 'emergency phone number'])]
class MedicalFile extends Model
{
    public function Student()
    {
        return $this->belongsTo(Student::class);
    }
}
