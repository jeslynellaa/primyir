<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'code' => 128,
                'name' => 'ILOCOS NORTE',
                'region_code' => 1,
            ),
            1 => 
            array (
                'code' => 129,
                'name' => 'ILOCOS SUR',
                'region_code' => 1,
            ),
            2 => 
            array (
                'code' => 133,
                'name' => 'LA UNION',
                'region_code' => 1,
            ),
            3 => 
            array (
                'code' => 155,
                'name' => 'PANGASINAN',
                'region_code' => 1,
            ),
            4 => 
            array (
                'code' => 209,
                'name' => 'BATANES',
                'region_code' => 2,
            ),
            5 => 
            array (
                'code' => 215,
                'name' => 'CAGAYAN',
                'region_code' => 2,
            ),
            6 => 
            array (
                'code' => 231,
                'name' => 'ISABELA',
                'region_code' => 2,
            ),
            7 => 
            array (
                'code' => 250,
                'name' => 'NUEVA VIZCAYA',
                'region_code' => 2,
            ),
            8 => 
            array (
                'code' => 257,
                'name' => 'QUIRINO',
                'region_code' => 2,
            ),
            9 => 
            array (
                'code' => 308,
                'name' => 'BATAAN',
                'region_code' => 3,
            ),
            10 => 
            array (
                'code' => 314,
                'name' => 'BULACAN',
                'region_code' => 3,
            ),
            11 => 
            array (
                'code' => 349,
                'name' => 'NUEVA ECIJA',
                'region_code' => 3,
            ),
            12 => 
            array (
                'code' => 354,
                'name' => 'PAMPANGA',
                'region_code' => 3,
            ),
            13 => 
            array (
                'code' => 369,
                'name' => 'TARLAC',
                'region_code' => 3,
            ),
            14 => 
            array (
                'code' => 371,
                'name' => 'ZAMBALES',
                'region_code' => 3,
            ),
            15 => 
            array (
                'code' => 377,
                'name' => 'AURORA',
                'region_code' => 3,
            ),
            16 => 
            array (
                'code' => 410,
                'name' => 'BATANGAS',
                'region_code' => 4,
            ),
            17 => 
            array (
                'code' => 421,
                'name' => 'CAVITE',
                'region_code' => 4,
            ),
            18 => 
            array (
                'code' => 434,
                'name' => 'LAGUNA',
                'region_code' => 4,
            ),
            19 => 
            array (
                'code' => 456,
                'name' => 'QUEZON',
                'region_code' => 4,
            ),
            20 => 
            array (
                'code' => 458,
                'name' => 'RIZAL',
                'region_code' => 4,
            ),
            21 => 
            array (
                'code' => 505,
                'name' => 'ALBAY',
                'region_code' => 5,
            ),
            22 => 
            array (
                'code' => 516,
                'name' => 'CAMARINES NORTE',
                'region_code' => 5,
            ),
            23 => 
            array (
                'code' => 517,
                'name' => 'CAMARINES SUR',
                'region_code' => 5,
            ),
            24 => 
            array (
                'code' => 520,
                'name' => 'CATANDUANES',
                'region_code' => 5,
            ),
            25 => 
            array (
                'code' => 541,
                'name' => 'MASBATE',
                'region_code' => 5,
            ),
            26 => 
            array (
                'code' => 562,
                'name' => 'SORSOGON',
                'region_code' => 5,
            ),
            27 => 
            array (
                'code' => 604,
                'name' => 'AKLAN',
                'region_code' => 6,
            ),
            28 => 
            array (
                'code' => 606,
                'name' => 'ANTIQUE',
                'region_code' => 6,
            ),
            29 => 
            array (
                'code' => 619,
                'name' => 'CAPIZ',
                'region_code' => 6,
            ),
            30 => 
            array (
                'code' => 630,
                'name' => 'ILOILO',
                'region_code' => 6,
            ),
            31 => 
            array (
                'code' => 645,
                'name' => 'NEGROS OCCIDENTAL',
                'region_code' => 6,
            ),
            32 => 
            array (
                'code' => 679,
                'name' => 'GUIMARAS',
                'region_code' => 6,
            ),
            33 => 
            array (
                'code' => 712,
                'name' => 'BOHOL',
                'region_code' => 7,
            ),
            34 => 
            array (
                'code' => 722,
                'name' => 'CEBU',
                'region_code' => 7,
            ),
            35 => 
            array (
                'code' => 746,
                'name' => 'NEGROS ORIENTAL',
                'region_code' => 7,
            ),
            36 => 
            array (
                'code' => 761,
                'name' => 'SIQUIJOR',
                'region_code' => 7,
            ),
            37 => 
            array (
                'code' => 826,
                'name' => 'EASTERN SAMAR',
                'region_code' => 8,
            ),
            38 => 
            array (
                'code' => 837,
                'name' => 'LEYTE',
                'region_code' => 8,
            ),
            39 => 
            array (
                'code' => 848,
                'name' => 'NORTHERN SAMAR',
                'region_code' => 8,
            ),
            40 => 
            array (
                'code' => 860,
            'name' => 'SAMAR (WESTERN SAMAR)',
                'region_code' => 8,
            ),
            41 => 
            array (
                'code' => 864,
                'name' => 'SOUTHERN LEYTE',
                'region_code' => 8,
            ),
            42 => 
            array (
                'code' => 878,
                'name' => 'BILIRAN',
                'region_code' => 8,
            ),
            43 => 
            array (
                'code' => 972,
                'name' => 'ZAMBOANGA DEL NORTE',
                'region_code' => 9,
            ),
            44 => 
            array (
                'code' => 973,
                'name' => 'ZAMBOANGA DEL SUR',
                'region_code' => 9,
            ),
            45 => 
            array (
                'code' => 983,
                'name' => 'ZAMBOANGA SIBUGAY',
                'region_code' => 9,
            ),
            46 => 
            array (
                'code' => 997,
                'name' => 'CITY OF ISABELA',
                'region_code' => 9,
            ),
            47 => 
            array (
                'code' => 1013,
                'name' => 'BUKIDNON',
                'region_code' => 10,
            ),
            48 => 
            array (
                'code' => 1018,
                'name' => 'CAMIGUIN',
                'region_code' => 10,
            ),
            49 => 
            array (
                'code' => 1035,
                'name' => 'LANAO DEL NORTE',
                'region_code' => 10,
            ),
            50 => 
            array (
                'code' => 1042,
                'name' => 'MISAMIS OCCIDENTAL',
                'region_code' => 10,
            ),
            51 => 
            array (
                'code' => 1043,
                'name' => 'MISAMIS ORIENTAL',
                'region_code' => 10,
            ),
            52 => 
            array (
                'code' => 1123,
                'name' => 'DAVAO DEL NORTE',
                'region_code' => 11,
            ),
            53 => 
            array (
                'code' => 1124,
                'name' => 'DAVAO DEL SUR',
                'region_code' => 11,
            ),
            54 => 
            array (
                'code' => 1125,
                'name' => 'DAVAO ORIENTAL',
                'region_code' => 11,
            ),
            55 => 
            array (
                'code' => 1182,
                'name' => 'COMPOSTELA VALLEY',
                'region_code' => 11,
            ),
            56 => 
            array (
                'code' => 1186,
                'name' => 'DAVAO OCCIDENTAL',
                'region_code' => 11,
            ),
            57 => 
            array (
                'code' => 1247,
            'name' => 'COTABATO (NORTH COTABATO)',
                'region_code' => 12,
            ),
            58 => 
            array (
                'code' => 1263,
                'name' => 'SOUTH COTABATO',
                'region_code' => 12,
            ),
            59 => 
            array (
                'code' => 1265,
                'name' => 'SULTAN KUDARAT',
                'region_code' => 12,
            ),
            60 => 
            array (
                'code' => 1280,
                'name' => 'SARANGANI',
                'region_code' => 12,
            ),
            61 => 
            array (
                'code' => 1298,
                'name' => 'COTABATO CITY',
                'region_code' => 12,
            ),
            62 => 
            array (
                'code' => 1339,
                'name' => 'NCR, CITY OF MANILA, FIRST DISTRICT',
                'region_code' => 13,
            ),
            63 => 
            array (
                'code' => 1374,
                'name' => 'NCR, SECOND DISTRICT',
                'region_code' => 13,
            ),
            64 => 
            array (
                'code' => 1375,
                'name' => 'NCR, THIRD DISTRICT',
                'region_code' => 13,
            ),
            65 => 
            array (
                'code' => 1376,
                'name' => 'NCR, FOURTH DISTRICT',
                'region_code' => 13,
            ),
            66 => 
            array (
                'code' => 1401,
                'name' => 'ABRA',
                'region_code' => 14,
            ),
            67 => 
            array (
                'code' => 1411,
                'name' => 'BENGUET',
                'region_code' => 14,
            ),
            68 => 
            array (
                'code' => 1427,
                'name' => 'IFUGAO',
                'region_code' => 14,
            ),
            69 => 
            array (
                'code' => 1432,
                'name' => 'KALINGA',
                'region_code' => 14,
            ),
            70 => 
            array (
                'code' => 1444,
                'name' => 'MOUNTAIN PROVINCE',
                'region_code' => 14,
            ),
            71 => 
            array (
                'code' => 1481,
                'name' => 'APAYAO',
                'region_code' => 14,
            ),
            72 => 
            array (
                'code' => 1507,
                'name' => 'BASILAN',
                'region_code' => 15,
            ),
            73 => 
            array (
                'code' => 1536,
                'name' => 'LANAO DEL SUR',
                'region_code' => 15,
            ),
            74 => 
            array (
                'code' => 1538,
                'name' => 'MAGUINDANAO',
                'region_code' => 15,
            ),
            75 => 
            array (
                'code' => 1566,
                'name' => 'SULU',
                'region_code' => 15,
            ),
            76 => 
            array (
                'code' => 1570,
                'name' => 'TAWI-TAWI',
                'region_code' => 15,
            ),
            77 => 
            array (
                'code' => 1602,
                'name' => 'AGUSAN DEL NORTE',
                'region_code' => 16,
            ),
            78 => 
            array (
                'code' => 1603,
                'name' => 'AGUSAN DEL SUR',
                'region_code' => 16,
            ),
            79 => 
            array (
                'code' => 1667,
                'name' => 'SURIGAO DEL NORTE',
                'region_code' => 16,
            ),
            80 => 
            array (
                'code' => 1668,
                'name' => 'SURIGAO DEL SUR',
                'region_code' => 16,
            ),
            81 => 
            array (
                'code' => 1685,
                'name' => 'DINAGAT ISLANDS',
                'region_code' => 16,
            ),
            82 => 
            array (
                'code' => 1740,
                'name' => 'MARINDUQUE',
                'region_code' => 17,
            ),
            83 => 
            array (
                'code' => 1751,
                'name' => 'OCCIDENTAL MINDORO',
                'region_code' => 17,
            ),
            84 => 
            array (
                'code' => 1752,
                'name' => 'ORIENTAL MINDORO',
                'region_code' => 17,
            ),
            85 => 
            array (
                'code' => 1753,
                'name' => 'PALAWAN',
                'region_code' => 17,
            ),
            86 => 
            array (
                'code' => 1759,
                'name' => 'ROMBLON',
                'region_code' => 17,
            ),
        ));
        
        
    }
}