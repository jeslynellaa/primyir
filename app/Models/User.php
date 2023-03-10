<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'givenName',
    //     'middleName',
    //     'lastName',
    //     'birthdate',
    //     'contactNum',
    //     'sex',
    //     'email',
    //     'username',
    //     'password',
    //     'accountStatus',
    //     'owner_type'
    // ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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

    public function address(){
        return $this->hasOne(address::class);
    }

    public function Teacher(){
        return $this->hasOne(Teacher::class);
    }

    public function Student(){
        return $this->hasOne(Student::class);
    }

    public function Articles(){
        return $this->hasMany(Article::class, 'admin_id');
    }

}
