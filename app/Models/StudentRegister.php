<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegister extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function Student(){
        return $this->belongsTo(Student::class);
    }

    public function Section(){
        return $this->belongsTo(Section::class);
    }

    public function Schoolyear(){
        return $this->belongsTo(Schoolyear::class);
    }
}
