<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function Students(){
        return $this->hasMany(Student::class);
    }

    public function Subjects(){
        return $this->hasMany(Subject::class);
    }
}
