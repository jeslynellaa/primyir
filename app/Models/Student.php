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
        return $this->hasMany(StudentSchoolyears::class);
    }
}
