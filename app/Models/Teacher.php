<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Section(){
        return $this->hasOne(Section::class, 'adviser');
    }

    public function SubjectClasses(){
        return $this->hasMany(SubjectClass::class);
    }

}
