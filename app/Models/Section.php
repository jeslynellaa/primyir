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

    public function Students(){
        return $this->hasMany(Student::class);
    }
}
