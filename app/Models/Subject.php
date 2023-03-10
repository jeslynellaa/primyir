<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function Curriculum(){
        return $this->belongsTo(Curriculum::class);
    }

    public function Schoolyear(){
        return $this->belongsTo(Schoolyear::class);
    }

    public function SubjectClasses(){
        return $this->hasMany(SubjectClass::class);
    }
}
