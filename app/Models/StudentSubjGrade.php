<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubjGrade extends Model
{
    protected $guarded = [];

    public function StudentSubjClass(){
        return $this->belongsTo(StudentSubjClass::class);
    }
}
