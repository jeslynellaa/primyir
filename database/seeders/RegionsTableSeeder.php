<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'code' => 1,
                'name' => 'REGION I (ILOCOS REGION)',
            ),
            1 => 
            array (
                'code' => 2,
                'name' => 'REGION II (CAGAYAN VALLEY)',
            ),
            2 => 
            array (
                'code' => 3,
                'name' => 'REGION III (CENTRAL LUZON)',
            ),
            3 => 
            array (
                'code' => 4,
                'name' => 'REGION IV-A (CALABARZON)',
            ),
            4 => 
            array (
                'code' => 5,
                'name' => 'REGION V (BICOL REGION)',
            ),
            5 => 
            array (
                'code' => 6,
                'name' => 'REGION VI (WESTERN VISAYAS)',
            ),
            6 => 
            array (
                'code' => 7,
                'name' => 'REGION VII (CENTRAL VISAYAS)',
            ),
            7 => 
            array (
                'code' => 8,
                'name' => 'REGION VIII (EASTERN VISAYAS)',
            ),
            8 => 
            array (
                'code' => 9,
                'name' => 'REGION IX (ZAMBOANGA PENINSULA)',
            ),
            9 => 
            array (
                'code' => 10,
                'name' => 'REGION X (NORTHERN MINDANAO)',
            ),
            10 => 
            array (
                'code' => 11,
                'name' => 'REGION XI (DAVAO REGION)',
            ),
            11 => 
            array (
                'code' => 12,
                'name' => 'REGION XII (SOCCSKSARGEN)',
            ),
            12 => 
            array (
                'code' => 13,
                'name' => 'NATIONAL CAPITAL REGION (NCR)',
            ),
            13 => 
            array (
                'code' => 14,
                'name' => 'CORDILLERA ADMINISTRATIVE REGION (CAR)',
            ),
            14 => 
            array (
                'code' => 15,
                'name' => 'AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)',
            ),
            15 => 
            array (
                'code' => 16,
                'name' => 'REGION XIII (Caraga)',
            ),
            16 => 
            array (
                'code' => 17,
                'name' => 'REGION IV-B (MIMAROPA)',
            ),
        ));
        
        
    }
}