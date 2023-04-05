<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function Schoolyear(){
        return $this->belongsTo(Schoolyear::class);
    }

    public function Teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function StudentSchoolyears(){
        return $this->hasMany(StudentSchoolyear::class);
    }

    public function StudentRegisters(){
        return $this->hasMany(StudentRegister::class);
    }

    public function Attendances(){
        return $this->hasMany(Attendance::class);
    }

    public function PromotionCandidates(){
        return $this->hasMany(PromotionCandidate::class);
    }

    public function StudentHealths(){
        return $this->hasMany(StudentHealth::class);
    }

    public function StudentProgReports(){
        return $this->hasMany(StudentProgReport::class);
    }

    public function SubjectClasses(){
        return $this->hasMany(SubjectClass::class);
    }
}
