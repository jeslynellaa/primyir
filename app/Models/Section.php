<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot(){
        parent::boot();

        static::created (function ($user) {
            $user->address()->create([
                'region' => 5
            ]);

            // if($user->owner_type == 'T' ){
            //     $user->teacher()->create([
            //         'department' => '0'
            //     ]);
            // }

            // if($user->owner_type == S ){
            //     $user->student()->create([
            //         'department' => '0'
            //     ]);
            // }
        });
    }

    public function Teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
