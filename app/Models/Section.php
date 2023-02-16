<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded = [];
    
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
}
