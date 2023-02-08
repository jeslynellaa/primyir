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
                'created_at' => '2023-01-23 15:25:28',
                'updated_at' => '2023-01-23 15:25:28',
            ),
            1 => 
            array (
                'id' => 3,
                'givenName' => 'Fatima',
                'middleName' => 'Torres',
                'lastName' => 'Geronimo',
                'birthdate' => '1998-09-17',
                'contactNum' => '09109375830',
                'sex' => 'F',
                'email' => 'fgeronimo@email.com',
                'username' => 'fgeronimo',
                'email_verified_at' => NULL,
                'password' => '$2y$10$juT6r1I.aeEtR88mTD0USOEGIisI1LJ3Af5UFZjecGpjFyXpymjg.',
                'accountStatus' => 'Active',
                'owner_type' => 'T',
                'remember_token' => NULL,
                'created_at' => '2023-01-23 15:29:03',
                'updated_at' => '2023-01-23 15:29:03',
            ),
            2 => 
            array (
                'id' => 4,
                'givenName' => 'Philipp',
                'middleName' => 'Jopp',
                'lastName' => 'Ondevill',
                'birthdate' => '1997-10-01',
                'contactNum' => '09458920476',
                'sex' => 'M',
                'email' => 'pondevill@email.com',
                'username' => 'pondevill',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qnMnwX6S/.etAiHSZ1FZKOO8mhGPZ9zQUo/19.SC675GKiTx0ULZu',
                'accountStatus' => 'Active',
                'owner_type' => 'T',
                'remember_token' => NULL,
                'created_at' => '2023-01-23 15:30:34',
                'updated_at' => '2023-01-23 15:30:34',
            ),
            3 => 
            array (
                'id' => 5,
                'givenName' => 'Kessie',
                'middleName' => 'Ponti',
                'lastName' => 'Lazo',
                'birthdate' => '1995-01-24',
                'contactNum' => '09019284831',
                'sex' => 'F',
                'email' => 'klazo@email.com',
                'username' => 'klazo',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zLwLQO.f0nggyX8/MiIhreeIoav2XoYRRqmUxfDqoFRAnP0fqQ1sO',
                'accountStatus' => 'Active',
                'owner_type' => 'T',
                'remember_token' => NULL,
                'created_at' => '2023-01-23 15:31:57',
                'updated_at' => '2023-01-23 15:31:57',
            ),
            4 => 
            array (
                'id' => 6,
                'givenName' => 'Terry',
                'middleName' => 'Clint',
                'lastName' => 'West',
                'birthdate' => '1999-05-16',
                'contactNum' => '09654987111',
                'sex' => 'M',
                'email' => 'twest@email.com',
                'username' => 'twest',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TU06UBG.Pqe.EiydLWloEOYxBLPso4KqfHL0OmK2KvMrMwto1WoIe',
                'accountStatus' => 'Active',
                'owner_type' => 'T',
                'remember_token' => NULL,
                'created_at' => '2023-01-23 15:32:44',
                'updated_at' => '2023-01-23 15:32:44',
            ),
            5 => 
            array (
                'id' => 7,
                'givenName' => 'Mark',
                'middleName' => 'Hort',
                'lastName' => 'De La Cruz',
                'birthdate' => '1996-09-30',
                'contactNum' => '09365222784',
                'sex' => 'M',
                'email' => 'mdelacruz@email.com',
                'username' => 'mdelacruz',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iZAIpGnqUs/b2nTmNltfJeCrzq.cGR7S9Asi8Sjmn8rtJP4CEamKy',
                'accountStatus' => 'Active',
                'owner_type' => 'T',
                'remember_token' => NULL,
                'created_at' => '2023-01-23 15:33:53',
                'updated_at' => '2023-01-23 15:33:53',
            ),
            6 => 
            array (
                'id' => 8,
                'givenName' => 'Maria Clarrise',
                'middleName' => 'Lapiz',
                'lastName' => 'Soria',
                'birthdate' => '1997-02-03',
                'contactNum' => '09845632175',
                'sex' => 'F',
                'email' => 'msoria@email.com',
                'username' => 'msoria',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wscelG1KFb/ROOPMVZOf.OFE9md0HlWZn3Ghfc33jGI9voGW8sbbi',
                'accountStatus' => 'Active',
                'owner_type' => 'T',
                'remember_token' => NULL,
                'created_at' => '2023-01-23 15:35:23',
                'updated_at' => '2023-01-23 15:35:23',
            ),
            7 => 
            array (
                'id' => 9,
                'givenName' => 'Clarence John',
                'middleName' => 'Pili',
                'lastName' => 'Peres',
                'birthdate' => '1998-12-25',
                'contactNum' => '09369521475',
                'sex' => 'M',
                'email' => 'cjperes@email.com',
                'username' => 'cjperes',
                'email_verified_at' => NULL,
                'password' => '$2y$10$78e3ArqzIMf1B3K5FXxkl.TB2.Kt8MF/SI3UqHkCr0.vNGnVwL3ZC',
                'accountStatus' => 'Active',
                'owner_type' => 'T',
                'remember_token' => NULL,
                'created_at' => '2023-01-23 15:36:46',
                'updated_at' => '2023-01-23 15:36:46',
            ),
            8 => 
            array (
                'id' => 10,
                'givenName' => 'Jonna Mae',
                'middleName' => 'Lauria',
                'lastName' => 'Astero',
                'birthdate' => '1996-06-19',
                'contactNum' => '09316548297',
                'sex' => 'F',
                'email' => 'jmaster@email.com',
                'username' => 'jmastero',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jPkjmniDfQPzyH/c8kxNfemJ3DjcnAYW8Csg5eblZEa91IvaaIxgO',
                'accountStatus' => 'Active',
                'owner_type' => 'T',
                'remember_token' => NULL,
                'created_at' => '2023-01-23 15:37:59',
                'updated_at' => '2023-01-23 15:37:59',
            ),
            9 => 
            array (
                'id' => 17,
                'givenName' => 'Harry Eduard',
                'middleName' => 'Maris',
                'lastName' => 'Sevilla',
                'birthdate' => '2008-11-16',
                'contactNum' => '09548156489',
                'sex' => 'M',
                'email' => 'hesevilla@email.com',
                'username' => 'hesevilla',
                'email_verified_at' => NULL,
                'password' => '$2y$10$edRC9FXP0m/6hAXZM9zsaefg5k2LVGgVG5J/hG6Yadp2gnEApQwL2',
                'accountStatus' => 'Active',
                'owner_type' => 'S',
                'remember_token' => NULL,
                'created_at' => '2023-02-07 15:55:36',
                'updated_at' => '2023-02-07 15:55:36',
            ),
            10 => 
            array (
                'id' => 18,
                'givenName' => 'John Mark',
                'middleName' => 'Kanto',
                'lastName' => 'Navarro',
                'birthdate' => '2006-10-12',
                'contactNum' => '09456156849',
                'sex' => 'M',
                'email' => 'jmnavarro@email.com',
                'username' => 'jmnavarro',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BCtitgT.8e1v3QwskD4QBupoQub6fwRUNGZY.T11yLSZjdJwUCXJ2',
                'accountStatus' => 'Active',
                'owner_type' => 'S',
                'remember_token' => NULL,
                'created_at' => '2023-02-07 16:59:34',
                'updated_at' => '2023-02-07 16:59:34',
            ),
            11 => 
            array (
                'id' => 19,
                'givenName' => 'Jenna',
                'middleName' => 'Gomez',
                'lastName' => 'Addams',
                'birthdate' => '2007-06-29',
                'contactNum' => '09156248632',
                'sex' => 'F',
                'email' => 'jaddams@email.com',
                'username' => 'jaddams',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NK/o9lU/jzLjOxxjzvt/TuJ9pz9/gby9v2d5KYX08PxFz8FQLFi2y',
                'accountStatus' => 'Active',
                'owner_type' => 'S',
                'remember_token' => NULL,
                'created_at' => '2023-02-07 17:02:28',
                'updated_at' => '2023-02-07 17:02:28',
            ),
        ));
        
        
    }
}