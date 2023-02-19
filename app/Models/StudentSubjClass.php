<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubjClass extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public function Student(){
        return $this->belongsTo(Student::class);
    }

    public function SubjectClass(){
        return $this->belongsTo(SubjectClass::class);
    }

    public function StudentSchoolyear(){
        return $this->belongsTo(StudentSchoolyear::class);
    }

    public function StudentSubjGrade(){
        return $this->hasOne(StudentSubjGrade::class);
    }
}
