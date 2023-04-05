<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentData extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function Student(){
        return $this->belongsTo(Student::class);
    }
}
