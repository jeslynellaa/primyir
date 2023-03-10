<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'givenName' => 'test',
                'middleName' => NULL,
                'lastName' => 'one',
                'birthdate' => '2000-02-02',
                'contactNum' => '09123456789',
                'sex' => 'F',
                'email' => 'test@email.com',
                'username' => 'test',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.UgBzsar.TU8eXd5QaQykug1tD/k8G/5rT14FFI4ScmWkfklIjoqm',
                'accountStatus' => 'Active',
                'owner_type' => 'A',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            )
        ));

        \DB::table('addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'street' => NULL,
                'barangay' => NULL,
                'city' => NULL,
                'province' => NULL,
                'region' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            )
        ));
    }
}