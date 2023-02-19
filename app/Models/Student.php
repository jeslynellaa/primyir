<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Curriculum(){
        return $this->belongsTo(Curriculum::class);
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

    public function StudentSubjClasses(){
        return $this->hasMany(StudentSubjClass::class);
    }
}
