<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectClass extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public function Subject(){
        return $this->belongsTo(Subject::class);
    }

    public function Section(){
        return $this->belongsTo(Section::class);
    }

    public function Teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function StudentSubjClasses(){
        return $this->hasMany(StudentSubjClass::class);
    }
}
