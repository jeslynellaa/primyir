<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolyear extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function Subjects(){
        return $this->hasMany(Subject::class);
    }

    public function StudentSchoolyears(){
        return $this->hasMany(StudentSchoolyear::class);
    }
}
