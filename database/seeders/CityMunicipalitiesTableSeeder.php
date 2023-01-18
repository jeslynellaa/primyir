<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CityMunicipalitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('city_municipalities')->delete();
        
        \DB::table('city_municipalities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'psgcCode' => '012801000',
                'name' => 'ADAMS',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12801,
            ),
            1 => 
            array (
                'id' => 2,
                'psgcCode' => '012802000',
                'name' => 'BACARRA',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12802,
            ),
            2 => 
            array (
                'id' => 3,
                'psgcCode' => '012803000',
                'name' => 'BADOC',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12803,
            ),
            3 => 
            array (
                'id' => 4,
                'psgcCode' => '012804000',
                'name' => 'BANGUI',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12804,
            ),
            4 => 
            array (
                'id' => 5,
                'psgcCode' => '012805000',
                'name' => 'CITY OF BATAC',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12805,
            ),
            5 => 
            array (
                'id' => 6,
                'psgcCode' => '012806000',
                'name' => 'BURGOS',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12806,
            ),
            6 => 
            array (
                'id' => 7,
                'psgcCode' => '012807000',
                'name' => 'CARASI',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12807,
            ),
            7 => 
            array (
                'id' => 8,
                'psgcCode' => '012808000',
                'name' => 'CURRIMAO',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12808,
            ),
            8 => 
            array (
                'id' => 9,
                'psgcCode' => '012809000',
                'name' => 'DINGRAS',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12809,
            ),
            9 => 
            array (
                'id' => 10,
                'psgcCode' => '012810000',
                'name' => 'DUMALNEG',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12810,
            ),
            10 => 
            array (
                'id' => 11,
                'psgcCode' => '012811000',
            'name' => 'BANNA (ESPIRITU)',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12811,
            ),
            11 => 
            array (
                'id' => 12,
                'psgcCode' => '012812000',
            'name' => 'LAOAG CITY (Capital)',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12812,
            ),
            12 => 
            array (
                'id' => 13,
                'psgcCode' => '012813000',
                'name' => 'MARCOS',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12813,
            ),
            13 => 
            array (
                'id' => 14,
                'psgcCode' => '012814000',
                'name' => 'NUEVA ERA',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12814,
            ),
            14 => 
            array (
                'id' => 15,
                'psgcCode' => '012815000',
                'name' => 'PAGUDPUD',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12815,
            ),
            15 => 
            array (
                'id' => 16,
                'psgcCode' => '012816000',
                'name' => 'PAOAY',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12816,
            ),
            16 => 
            array (
                'id' => 17,
                'psgcCode' => '012817000',
                'name' => 'PASUQUIN',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12817,
            ),
            17 => 
            array (
                'id' => 18,
                'psgcCode' => '012818000',
                'name' => 'PIDDIG',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12818,
            ),
            18 => 
            array (
                'id' => 19,
                'psgcCode' => '012819000',
                'name' => 'PINILI',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12819,
            ),
            19 => 
            array (
                'id' => 20,
                'psgcCode' => '012820000',
                'name' => 'SAN NICOLAS',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12820,
            ),
            20 => 
            array (
                'id' => 21,
                'psgcCode' => '012821000',
                'name' => 'SARRAT',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12821,
            ),
            21 => 
            array (
                'id' => 22,
                'psgcCode' => '012822000',
                'name' => 'SOLSONA',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12822,
            ),
            22 => 
            array (
                'id' => 23,
                'psgcCode' => '012823000',
                'name' => 'VINTAR',
                'region_code' => 1,
                'province_code' => 128,
                'code' => 12823,
            ),
            23 => 
            array (
                'id' => 24,
                'psgcCode' => '012901000',
                'name' => 'ALILEM',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12901,
            ),
            24 => 
            array (
                'id' => 25,
                'psgcCode' => '012902000',
                'name' => 'BANAYOYO',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12902,
            ),
            25 => 
            array (
                'id' => 26,
                'psgcCode' => '012903000',
                'name' => 'BANTAY',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12903,
            ),
            26 => 
            array (
                'id' => 27,
                'psgcCode' => '012904000',
                'name' => 'BURGOS',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12904,
            ),
            27 => 
            array (
                'id' => 28,
                'psgcCode' => '012905000',
                'name' => 'CABUGAO',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12905,
            ),
            28 => 
            array (
                'id' => 29,
                'psgcCode' => '012906000',
                'name' => 'CITY OF CANDON',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12906,
            ),
            29 => 
            array (
                'id' => 30,
                'psgcCode' => '012907000',
                'name' => 'CAOAYAN',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12907,
            ),
            30 => 
            array (
                'id' => 31,
                'psgcCode' => '012908000',
                'name' => 'CERVANTES',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12908,
            ),
            31 => 
            array (
                'id' => 32,
                'psgcCode' => '012909000',
                'name' => 'GALIMUYOD',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12909,
            ),
            32 => 
            array (
                'id' => 33,
                'psgcCode' => '012910000',
            'name' => 'GREGORIO DEL PILAR (CONCEPCION)',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12910,
            ),
            33 => 
            array (
                'id' => 34,
                'psgcCode' => '012911000',
                'name' => 'LIDLIDDA',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12911,
            ),
            34 => 
            array (
                'id' => 35,
                'psgcCode' => '012912000',
                'name' => 'MAGSINGAL',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12912,
            ),
            35 => 
            array (
                'id' => 36,
                'psgcCode' => '012913000',
                'name' => 'NAGBUKEL',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12913,
            ),
            36 => 
            array (
                'id' => 37,
                'psgcCode' => '012914000',
                'name' => 'NARVACAN',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12914,
            ),
            37 => 
            array (
                'id' => 38,
                'psgcCode' => '012915000',
            'name' => 'QUIRINO (ANGKAKI)',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12915,
            ),
            38 => 
            array (
                'id' => 39,
                'psgcCode' => '012916000',
            'name' => 'SALCEDO (BAUGEN)',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12916,
            ),
            39 => 
            array (
                'id' => 40,
                'psgcCode' => '012917000',
                'name' => 'SAN EMILIO',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12917,
            ),
            40 => 
            array (
                'id' => 41,
                'psgcCode' => '012918000',
                'name' => 'SAN ESTEBAN',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12918,
            ),
            41 => 
            array (
                'id' => 42,
                'psgcCode' => '012919000',
                'name' => 'SAN ILDEFONSO',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12919,
            ),
            42 => 
            array (
                'id' => 43,
                'psgcCode' => '012920000',
            'name' => 'SAN JUAN (LAPOG)',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12920,
            ),
            43 => 
            array (
                'id' => 44,
                'psgcCode' => '012921000',
                'name' => 'SAN VICENTE',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12921,
            ),
            44 => 
            array (
                'id' => 45,
                'psgcCode' => '012922000',
                'name' => 'SANTA',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12922,
            ),
            45 => 
            array (
                'id' => 46,
                'psgcCode' => '012923000',
                'name' => 'SANTA CATALINA',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12923,
            ),
            46 => 
            array (
                'id' => 47,
                'psgcCode' => '012924000',
                'name' => 'SANTA CRUZ',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12924,
            ),
            47 => 
            array (
                'id' => 48,
                'psgcCode' => '012925000',
                'name' => 'SANTA LUCIA',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12925,
            ),
            48 => 
            array (
                'id' => 49,
                'psgcCode' => '012926000',
                'name' => 'SANTA MARIA',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12926,
            ),
            49 => 
            array (
                'id' => 50,
                'psgcCode' => '012927000',
                'name' => 'SANTIAGO',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12927,
            ),
            50 => 
            array (
                'id' => 51,
                'psgcCode' => '012928000',
                'name' => 'SANTO DOMINGO',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12928,
            ),
            51 => 
            array (
                'id' => 52,
                'psgcCode' => '012929000',
                'name' => 'SIGAY',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12929,
            ),
            52 => 
            array (
                'id' => 53,
                'psgcCode' => '012930000',
                'name' => 'SINAIT',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12930,
            ),
            53 => 
            array (
                'id' => 54,
                'psgcCode' => '012931000',
                'name' => 'SUGPON',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12931,
            ),
            54 => 
            array (
                'id' => 55,
                'psgcCode' => '012932000',
                'name' => 'SUYO',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12932,
            ),
            55 => 
            array (
                'id' => 56,
                'psgcCode' => '012933000',
                'name' => 'TAGUDIN',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12933,
            ),
            56 => 
            array (
                'id' => 57,
                'psgcCode' => '012934000',
            'name' => 'CITY OF VIGAN (Capital)',
                'region_code' => 1,
                'province_code' => 129,
                'code' => 12934,
            ),
            57 => 
            array (
                'id' => 58,
                'psgcCode' => '013301000',
                'name' => 'AGOO',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13301,
            ),
            58 => 
            array (
                'id' => 59,
                'psgcCode' => '013302000',
                'name' => 'ARINGAY',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13302,
            ),
            59 => 
            array (
                'id' => 60,
                'psgcCode' => '013303000',
                'name' => 'BACNOTAN',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13303,
            ),
            60 => 
            array (
                'id' => 61,
                'psgcCode' => '013304000',
                'name' => 'BAGULIN',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13304,
            ),
            61 => 
            array (
                'id' => 62,
                'psgcCode' => '013305000',
                'name' => 'BALAOAN',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13305,
            ),
            62 => 
            array (
                'id' => 63,
                'psgcCode' => '013306000',
                'name' => 'BANGAR',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13306,
            ),
            63 => 
            array (
                'id' => 64,
                'psgcCode' => '013307000',
                'name' => 'BAUANG',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13307,
            ),
            64 => 
            array (
                'id' => 65,
                'psgcCode' => '013308000',
                'name' => 'BURGOS',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13308,
            ),
            65 => 
            array (
                'id' => 66,
                'psgcCode' => '013309000',
                'name' => 'CABA',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13309,
            ),
            66 => 
            array (
                'id' => 67,
                'psgcCode' => '013310000',
                'name' => 'LUNA',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13310,
            ),
            67 => 
            array (
                'id' => 68,
                'psgcCode' => '013311000',
                'name' => 'NAGUILIAN',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13311,
            ),
            68 => 
            array (
                'id' => 69,
                'psgcCode' => '013312000',
                'name' => 'PUGO',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13312,
            ),
            69 => 
            array (
                'id' => 70,
                'psgcCode' => '013313000',
                'name' => 'ROSARIO',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13313,
            ),
            70 => 
            array (
                'id' => 71,
                'psgcCode' => '013314000',
            'name' => 'CITY OF SAN FERNANDO (Capital)',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13314,
            ),
            71 => 
            array (
                'id' => 72,
                'psgcCode' => '013315000',
                'name' => 'SAN GABRIEL',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13315,
            ),
            72 => 
            array (
                'id' => 73,
                'psgcCode' => '013316000',
                'name' => 'SAN JUAN',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13316,
            ),
            73 => 
            array (
                'id' => 74,
                'psgcCode' => '013317000',
                'name' => 'SANTO TOMAS',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13317,
            ),
            74 => 
            array (
                'id' => 75,
                'psgcCode' => '013318000',
                'name' => 'SANTOL',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13318,
            ),
            75 => 
            array (
                'id' => 76,
                'psgcCode' => '013319000',
                'name' => 'SUDIPEN',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13319,
            ),
            76 => 
            array (
                'id' => 77,
                'psgcCode' => '013320000',
                'name' => 'TUBAO',
                'region_code' => 1,
                'province_code' => 133,
                'code' => 13320,
            ),
            77 => 
            array (
                'id' => 78,
                'psgcCode' => '015501000',
                'name' => 'AGNO',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15501,
            ),
            78 => 
            array (
                'id' => 79,
                'psgcCode' => '015502000',
                'name' => 'AGUILAR',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15502,
            ),
            79 => 
            array (
                'id' => 80,
                'psgcCode' => '015503000',
                'name' => 'CITY OF ALAMINOS',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15503,
            ),
            80 => 
            array (
                'id' => 81,
                'psgcCode' => '015504000',
                'name' => 'ALCALA',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15504,
            ),
            81 => 
            array (
                'id' => 82,
                'psgcCode' => '015505000',
                'name' => 'ANDA',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15505,
            ),
            82 => 
            array (
                'id' => 83,
                'psgcCode' => '015506000',
                'name' => 'ASINGAN',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15506,
            ),
            83 => 
            array (
                'id' => 84,
                'psgcCode' => '015507000',
                'name' => 'BALUNGAO',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15507,
            ),
            84 => 
            array (
                'id' => 85,
                'psgcCode' => '015508000',
                'name' => 'BANI',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15508,
            ),
            85 => 
            array (
                'id' => 86,
                'psgcCode' => '015509000',
                'name' => 'BASISTA',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15509,
            ),
            86 => 
            array (
                'id' => 87,
                'psgcCode' => '015510000',
                'name' => 'BAUTISTA',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15510,
            ),
            87 => 
            array (
                'id' => 88,
                'psgcCode' => '015511000',
                'name' => 'BAYAMBANG',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15511,
            ),
            88 => 
            array (
                'id' => 89,
                'psgcCode' => '015512000',
                'name' => 'BINALONAN',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15512,
            ),
            89 => 
            array (
                'id' => 90,
                'psgcCode' => '015513000',
                'name' => 'BINMALEY',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15513,
            ),
            90 => 
            array (
                'id' => 91,
                'psgcCode' => '015514000',
                'name' => 'BOLINAO',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15514,
            ),
            91 => 
            array (
                'id' => 92,
                'psgcCode' => '015515000',
                'name' => 'BUGALLON',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15515,
            ),
            92 => 
            array (
                'id' => 93,
                'psgcCode' => '015516000',
                'name' => 'BURGOS',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15516,
            ),
            93 => 
            array (
                'id' => 94,
                'psgcCode' => '015517000',
                'name' => 'CALASIAO',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15517,
            ),
            94 => 
            array (
                'id' => 95,
                'psgcCode' => '015518000',
                'name' => 'DAGUPAN CITY',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15518,
            ),
            95 => 
            array (
                'id' => 96,
                'psgcCode' => '015519000',
                'name' => 'DASOL',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15519,
            ),
            96 => 
            array (
                'id' => 97,
                'psgcCode' => '015520000',
                'name' => 'INFANTA',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15520,
            ),
            97 => 
            array (
                'id' => 98,
                'psgcCode' => '015521000',
                'name' => 'LABRADOR',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15521,
            ),
            98 => 
            array (
                'id' => 99,
                'psgcCode' => '015522000',
            'name' => 'LINGAYEN (Capital)',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15522,
            ),
            99 => 
            array (
                'id' => 100,
                'psgcCode' => '015523000',
                'name' => 'MABINI',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15523,
            ),
            100 => 
            array (
                'id' => 101,
                'psgcCode' => '015524000',
                'name' => 'MALASIQUI',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15524,
            ),
            101 => 
            array (
                'id' => 102,
                'psgcCode' => '015525000',
                'name' => 'MANAOAG',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15525,
            ),
            102 => 
            array (
                'id' => 103,
                'psgcCode' => '015526000',
                'name' => 'MANGALDAN',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15526,
            ),
            103 => 
            array (
                'id' => 104,
                'psgcCode' => '015527000',
                'name' => 'MANGATAREM',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15527,
            ),
            104 => 
            array (
                'id' => 105,
                'psgcCode' => '015528000',
                'name' => 'MAPANDAN',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15528,
            ),
            105 => 
            array (
                'id' => 106,
                'psgcCode' => '015529000',
                'name' => 'NATIVIDAD',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15529,
            ),
            106 => 
            array (
                'id' => 107,
                'psgcCode' => '015530000',
                'name' => 'POZORRUBIO',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15530,
            ),
            107 => 
            array (
                'id' => 108,
                'psgcCode' => '015531000',
                'name' => 'ROSALES',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15531,
            ),
            108 => 
            array (
                'id' => 109,
                'psgcCode' => '015532000',
                'name' => 'SAN CARLOS CITY',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15532,
            ),
            109 => 
            array (
                'id' => 110,
                'psgcCode' => '015533000',
                'name' => 'SAN FABIAN',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15533,
            ),
            110 => 
            array (
                'id' => 111,
                'psgcCode' => '015534000',
                'name' => 'SAN JACINTO',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15534,
            ),
            111 => 
            array (
                'id' => 112,
                'psgcCode' => '015535000',
                'name' => 'SAN MANUEL',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15535,
            ),
            112 => 
            array (
                'id' => 113,
                'psgcCode' => '015536000',
                'name' => 'SAN NICOLAS',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15536,
            ),
            113 => 
            array (
                'id' => 114,
                'psgcCode' => '015537000',
                'name' => 'SAN QUINTIN',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15537,
            ),
            114 => 
            array (
                'id' => 115,
                'psgcCode' => '015538000',
                'name' => 'SANTA BARBARA',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15538,
            ),
            115 => 
            array (
                'id' => 116,
                'psgcCode' => '015539000',
                'name' => 'SANTA MARIA',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15539,
            ),
            116 => 
            array (
                'id' => 117,
                'psgcCode' => '015540000',
                'name' => 'SANTO TOMAS',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15540,
            ),
            117 => 
            array (
                'id' => 118,
                'psgcCode' => '015541000',
                'name' => 'SISON',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15541,
            ),
            118 => 
            array (
                'id' => 119,
                'psgcCode' => '015542000',
                'name' => 'SUAL',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15542,
            ),
            119 => 
            array (
                'id' => 120,
                'psgcCode' => '015543000',
                'name' => 'TAYUG',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15543,
            ),
            120 => 
            array (
                'id' => 121,
                'psgcCode' => '015544000',
                'name' => 'UMINGAN',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15544,
            ),
            121 => 
            array (
                'id' => 122,
                'psgcCode' => '015545000',
                'name' => 'URBIZTONDO',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15545,
            ),
            122 => 
            array (
                'id' => 123,
                'psgcCode' => '015546000',
                'name' => 'CITY OF URDANETA',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15546,
            ),
            123 => 
            array (
                'id' => 124,
                'psgcCode' => '015547000',
                'name' => 'VILLASIS',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15547,
            ),
            124 => 
            array (
                'id' => 125,
                'psgcCode' => '015548000',
                'name' => 'LAOAC',
                'region_code' => 1,
                'province_code' => 155,
                'code' => 15548,
            ),
            125 => 
            array (
                'id' => 126,
                'psgcCode' => '020901000',
            'name' => 'BASCO (Capital)',
                'region_code' => 2,
                'province_code' => 209,
                'code' => 20901,
            ),
            126 => 
            array (
                'id' => 127,
                'psgcCode' => '020902000',
                'name' => 'ITBAYAT',
                'region_code' => 2,
                'province_code' => 209,
                'code' => 20902,
            ),
            127 => 
            array (
                'id' => 128,
                'psgcCode' => '020903000',
                'name' => 'IVANA',
                'region_code' => 2,
                'province_code' => 209,
                'code' => 20903,
            ),
            128 => 
            array (
                'id' => 129,
                'psgcCode' => '020904000',
                'name' => 'MAHATAO',
                'region_code' => 2,
                'province_code' => 209,
                'code' => 20904,
            ),
            129 => 
            array (
                'id' => 130,
                'psgcCode' => '020905000',
                'name' => 'SABTANG',
                'region_code' => 2,
                'province_code' => 209,
                'code' => 20905,
            ),
            130 => 
            array (
                'id' => 131,
                'psgcCode' => '020906000',
                'name' => 'UYUGAN',
                'region_code' => 2,
                'province_code' => 209,
                'code' => 20906,
            ),
            131 => 
            array (
                'id' => 132,
                'psgcCode' => '021501000',
                'name' => 'ABULUG',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21501,
            ),
            132 => 
            array (
                'id' => 133,
                'psgcCode' => '021502000',
                'name' => 'ALCALA',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21502,
            ),
            133 => 
            array (
                'id' => 134,
                'psgcCode' => '021503000',
                'name' => 'ALLACAPAN',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21503,
            ),
            134 => 
            array (
                'id' => 135,
                'psgcCode' => '021504000',
                'name' => 'AMULUNG',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21504,
            ),
            135 => 
            array (
                'id' => 136,
                'psgcCode' => '021505000',
                'name' => 'APARRI',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21505,
            ),
            136 => 
            array (
                'id' => 137,
                'psgcCode' => '021506000',
                'name' => 'BAGGAO',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21506,
            ),
            137 => 
            array (
                'id' => 138,
                'psgcCode' => '021507000',
                'name' => 'BALLESTEROS',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21507,
            ),
            138 => 
            array (
                'id' => 139,
                'psgcCode' => '021508000',
                'name' => 'BUGUEY',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21508,
            ),
            139 => 
            array (
                'id' => 140,
                'psgcCode' => '021509000',
                'name' => 'CALAYAN',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21509,
            ),
            140 => 
            array (
                'id' => 141,
                'psgcCode' => '021510000',
                'name' => 'CAMALANIUGAN',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21510,
            ),
            141 => 
            array (
                'id' => 142,
                'psgcCode' => '021511000',
                'name' => 'CLAVERIA',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21511,
            ),
            142 => 
            array (
                'id' => 143,
                'psgcCode' => '021512000',
                'name' => 'ENRILE',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21512,
            ),
            143 => 
            array (
                'id' => 144,
                'psgcCode' => '021513000',
                'name' => 'GATTARAN',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21513,
            ),
            144 => 
            array (
                'id' => 145,
                'psgcCode' => '021514000',
                'name' => 'GONZAGA',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21514,
            ),
            145 => 
            array (
                'id' => 146,
                'psgcCode' => '021515000',
                'name' => 'IGUIG',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21515,
            ),
            146 => 
            array (
                'id' => 147,
                'psgcCode' => '021516000',
                'name' => 'LAL-LO',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21516,
            ),
            147 => 
            array (
                'id' => 148,
                'psgcCode' => '021517000',
                'name' => 'LASAM',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21517,
            ),
            148 => 
            array (
                'id' => 149,
                'psgcCode' => '021518000',
                'name' => 'PAMPLONA',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21518,
            ),
            149 => 
            array (
                'id' => 150,
                'psgcCode' => '021519000',
                'name' => 'PEÑABLANCA',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21519,
            ),
            150 => 
            array (
                'id' => 151,
                'psgcCode' => '021520000',
                'name' => 'PIAT',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21520,
            ),
            151 => 
            array (
                'id' => 152,
                'psgcCode' => '021521000',
                'name' => 'RIZAL',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21521,
            ),
            152 => 
            array (
                'id' => 153,
                'psgcCode' => '021522000',
                'name' => 'SANCHEZ-MIRA',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21522,
            ),
            153 => 
            array (
                'id' => 154,
                'psgcCode' => '021523000',
                'name' => 'SANTA ANA',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21523,
            ),
            154 => 
            array (
                'id' => 155,
                'psgcCode' => '021524000',
                'name' => 'SANTA PRAXEDES',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21524,
            ),
            155 => 
            array (
                'id' => 156,
                'psgcCode' => '021525000',
                'name' => 'SANTA TERESITA',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21525,
            ),
            156 => 
            array (
                'id' => 157,
                'psgcCode' => '021526000',
            'name' => 'SANTO NIÑO (FAIRE)',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21526,
            ),
            157 => 
            array (
                'id' => 158,
                'psgcCode' => '021527000',
                'name' => 'SOLANA',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21527,
            ),
            158 => 
            array (
                'id' => 159,
                'psgcCode' => '021528000',
                'name' => 'TUAO',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21528,
            ),
            159 => 
            array (
                'id' => 160,
                'psgcCode' => '021529000',
            'name' => 'TUGUEGARAO CITY (Capital)',
                'region_code' => 2,
                'province_code' => 215,
                'code' => 21529,
            ),
            160 => 
            array (
                'id' => 161,
                'psgcCode' => '023101000',
                'name' => 'ALICIA',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23101,
            ),
            161 => 
            array (
                'id' => 162,
                'psgcCode' => '023102000',
                'name' => 'ANGADANAN',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23102,
            ),
            162 => 
            array (
                'id' => 163,
                'psgcCode' => '023103000',
                'name' => 'AURORA',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23103,
            ),
            163 => 
            array (
                'id' => 164,
                'psgcCode' => '023104000',
                'name' => 'BENITO SOLIVEN',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23104,
            ),
            164 => 
            array (
                'id' => 165,
                'psgcCode' => '023105000',
                'name' => 'BURGOS',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23105,
            ),
            165 => 
            array (
                'id' => 166,
                'psgcCode' => '023106000',
                'name' => 'CABAGAN',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23106,
            ),
            166 => 
            array (
                'id' => 167,
                'psgcCode' => '023107000',
                'name' => 'CABATUAN',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23107,
            ),
            167 => 
            array (
                'id' => 168,
                'psgcCode' => '023108000',
                'name' => 'CITY OF CAUAYAN',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23108,
            ),
            168 => 
            array (
                'id' => 169,
                'psgcCode' => '023109000',
                'name' => 'CORDON',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23109,
            ),
            169 => 
            array (
                'id' => 170,
                'psgcCode' => '023110000',
                'name' => 'DINAPIGUE',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23110,
            ),
            170 => 
            array (
                'id' => 171,
                'psgcCode' => '023111000',
                'name' => 'DIVILACAN',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23111,
            ),
            171 => 
            array (
                'id' => 172,
                'psgcCode' => '023112000',
                'name' => 'ECHAGUE',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23112,
            ),
            172 => 
            array (
                'id' => 173,
                'psgcCode' => '023113000',
                'name' => 'GAMU',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23113,
            ),
            173 => 
            array (
                'id' => 174,
                'psgcCode' => '023114000',
            'name' => 'ILAGAN CITY (Capital)',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23114,
            ),
            174 => 
            array (
                'id' => 175,
                'psgcCode' => '023115000',
                'name' => 'JONES',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23115,
            ),
            175 => 
            array (
                'id' => 176,
                'psgcCode' => '023116000',
                'name' => 'LUNA',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23116,
            ),
            176 => 
            array (
                'id' => 177,
                'psgcCode' => '023117000',
                'name' => 'MACONACON',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23117,
            ),
            177 => 
            array (
                'id' => 178,
                'psgcCode' => '023118000',
            'name' => 'DELFIN ALBANO (MAGSAYSAY)',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23118,
            ),
            178 => 
            array (
                'id' => 179,
                'psgcCode' => '023119000',
                'name' => 'MALLIG',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23119,
            ),
            179 => 
            array (
                'id' => 180,
                'psgcCode' => '023120000',
                'name' => 'NAGUILIAN',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23120,
            ),
            180 => 
            array (
                'id' => 181,
                'psgcCode' => '023121000',
                'name' => 'PALANAN',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23121,
            ),
            181 => 
            array (
                'id' => 182,
                'psgcCode' => '023122000',
                'name' => 'QUEZON',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23122,
            ),
            182 => 
            array (
                'id' => 183,
                'psgcCode' => '023123000',
                'name' => 'QUIRINO',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23123,
            ),
            183 => 
            array (
                'id' => 184,
                'psgcCode' => '023124000',
                'name' => 'RAMON',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23124,
            ),
            184 => 
            array (
                'id' => 185,
                'psgcCode' => '023125000',
                'name' => 'REINA MERCEDES',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23125,
            ),
            185 => 
            array (
                'id' => 186,
                'psgcCode' => '023126000',
                'name' => 'ROXAS',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23126,
            ),
            186 => 
            array (
                'id' => 187,
                'psgcCode' => '023127000',
                'name' => 'SAN AGUSTIN',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23127,
            ),
            187 => 
            array (
                'id' => 188,
                'psgcCode' => '023128000',
                'name' => 'SAN GUILLERMO',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23128,
            ),
            188 => 
            array (
                'id' => 189,
                'psgcCode' => '023129000',
                'name' => 'SAN ISIDRO',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23129,
            ),
            189 => 
            array (
                'id' => 190,
                'psgcCode' => '023130000',
                'name' => 'SAN MANUEL',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23130,
            ),
            190 => 
            array (
                'id' => 191,
                'psgcCode' => '023131000',
                'name' => 'SAN MARIANO',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23131,
            ),
            191 => 
            array (
                'id' => 192,
                'psgcCode' => '023132000',
                'name' => 'SAN MATEO',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23132,
            ),
            192 => 
            array (
                'id' => 193,
                'psgcCode' => '023133000',
                'name' => 'SAN PABLO',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23133,
            ),
            193 => 
            array (
                'id' => 194,
                'psgcCode' => '023134000',
                'name' => 'SANTA MARIA',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23134,
            ),
            194 => 
            array (
                'id' => 195,
                'psgcCode' => '023135000',
                'name' => 'CITY OF SANTIAGO',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23135,
            ),
            195 => 
            array (
                'id' => 196,
                'psgcCode' => '023136000',
                'name' => 'SANTO TOMAS',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23136,
            ),
            196 => 
            array (
                'id' => 197,
                'psgcCode' => '023137000',
                'name' => 'TUMAUINI',
                'region_code' => 2,
                'province_code' => 231,
                'code' => 23137,
            ),
            197 => 
            array (
                'id' => 198,
                'psgcCode' => '025001000',
                'name' => 'AMBAGUIO',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25001,
            ),
            198 => 
            array (
                'id' => 199,
                'psgcCode' => '025002000',
                'name' => 'ARITAO',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25002,
            ),
            199 => 
            array (
                'id' => 200,
                'psgcCode' => '025003000',
                'name' => 'BAGABAG',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25003,
            ),
            200 => 
            array (
                'id' => 201,
                'psgcCode' => '025004000',
                'name' => 'BAMBANG',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25004,
            ),
            201 => 
            array (
                'id' => 202,
                'psgcCode' => '025005000',
            'name' => 'BAYOMBONG (Capital)',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25005,
            ),
            202 => 
            array (
                'id' => 203,
                'psgcCode' => '025006000',
                'name' => 'DIADI',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25006,
            ),
            203 => 
            array (
                'id' => 204,
                'psgcCode' => '025007000',
                'name' => 'DUPAX DEL NORTE',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25007,
            ),
            204 => 
            array (
                'id' => 205,
                'psgcCode' => '025008000',
                'name' => 'DUPAX DEL SUR',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25008,
            ),
            205 => 
            array (
                'id' => 206,
                'psgcCode' => '025009000',
                'name' => 'KASIBU',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25009,
            ),
            206 => 
            array (
                'id' => 207,
                'psgcCode' => '025010000',
                'name' => 'KAYAPA',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25010,
            ),
            207 => 
            array (
                'id' => 208,
                'psgcCode' => '025011000',
                'name' => 'QUEZON',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25011,
            ),
            208 => 
            array (
                'id' => 209,
                'psgcCode' => '025012000',
                'name' => 'SANTA FE',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25012,
            ),
            209 => 
            array (
                'id' => 210,
                'psgcCode' => '025013000',
                'name' => 'SOLANO',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25013,
            ),
            210 => 
            array (
                'id' => 211,
                'psgcCode' => '025014000',
                'name' => 'VILLAVERDE',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25014,
            ),
            211 => 
            array (
                'id' => 212,
                'psgcCode' => '025015000',
                'name' => 'ALFONSO CASTANEDA',
                'region_code' => 2,
                'province_code' => 250,
                'code' => 25015,
            ),
            212 => 
            array (
                'id' => 213,
                'psgcCode' => '025701000',
                'name' => 'AGLIPAY',
                'region_code' => 2,
                'province_code' => 257,
                'code' => 25701,
            ),
            213 => 
            array (
                'id' => 214,
                'psgcCode' => '025702000',
            'name' => 'CABARROGUIS (Capital)',
                'region_code' => 2,
                'province_code' => 257,
                'code' => 25702,
            ),
            214 => 
            array (
                'id' => 215,
                'psgcCode' => '025703000',
                'name' => 'DIFFUN',
                'region_code' => 2,
                'province_code' => 257,
                'code' => 25703,
            ),
            215 => 
            array (
                'id' => 216,
                'psgcCode' => '025704000',
                'name' => 'MADDELA',
                'region_code' => 2,
                'province_code' => 257,
                'code' => 25704,
            ),
            216 => 
            array (
                'id' => 217,
                'psgcCode' => '025705000',
                'name' => 'SAGUDAY',
                'region_code' => 2,
                'province_code' => 257,
                'code' => 25705,
            ),
            217 => 
            array (
                'id' => 218,
                'psgcCode' => '025706000',
                'name' => 'NAGTIPUNAN',
                'region_code' => 2,
                'province_code' => 257,
                'code' => 25706,
            ),
            218 => 
            array (
                'id' => 219,
                'psgcCode' => '030801000',
                'name' => 'ABUCAY',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30801,
            ),
            219 => 
            array (
                'id' => 220,
                'psgcCode' => '030802000',
                'name' => 'BAGAC',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30802,
            ),
            220 => 
            array (
                'id' => 221,
                'psgcCode' => '030803000',
            'name' => 'CITY OF BALANGA (Capital)',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30803,
            ),
            221 => 
            array (
                'id' => 222,
                'psgcCode' => '030804000',
                'name' => 'DINALUPIHAN',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30804,
            ),
            222 => 
            array (
                'id' => 223,
                'psgcCode' => '030805000',
                'name' => 'HERMOSA',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30805,
            ),
            223 => 
            array (
                'id' => 224,
                'psgcCode' => '030806000',
                'name' => 'LIMAY',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30806,
            ),
            224 => 
            array (
                'id' => 225,
                'psgcCode' => '030807000',
                'name' => 'MARIVELES',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30807,
            ),
            225 => 
            array (
                'id' => 226,
                'psgcCode' => '030808000',
                'name' => 'MORONG',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30808,
            ),
            226 => 
            array (
                'id' => 227,
                'psgcCode' => '030809000',
                'name' => 'ORANI',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30809,
            ),
            227 => 
            array (
                'id' => 228,
                'psgcCode' => '030810000',
                'name' => 'ORION',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30810,
            ),
            228 => 
            array (
                'id' => 229,
                'psgcCode' => '030811000',
                'name' => 'PILAR',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30811,
            ),
            229 => 
            array (
                'id' => 230,
                'psgcCode' => '030812000',
                'name' => 'SAMAL',
                'region_code' => 3,
                'province_code' => 308,
                'code' => 30812,
            ),
            230 => 
            array (
                'id' => 231,
                'psgcCode' => '031401000',
                'name' => 'ANGAT',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31401,
            ),
            231 => 
            array (
                'id' => 232,
                'psgcCode' => '031402000',
            'name' => 'BALAGTAS (BIGAA)',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31402,
            ),
            232 => 
            array (
                'id' => 233,
                'psgcCode' => '031403000',
                'name' => 'BALIUAG',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31403,
            ),
            233 => 
            array (
                'id' => 234,
                'psgcCode' => '031404000',
                'name' => 'BOCAUE',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31404,
            ),
            234 => 
            array (
                'id' => 235,
                'psgcCode' => '031405000',
                'name' => 'BULACAN',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31405,
            ),
            235 => 
            array (
                'id' => 236,
                'psgcCode' => '031406000',
                'name' => 'BUSTOS',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31406,
            ),
            236 => 
            array (
                'id' => 237,
                'psgcCode' => '031407000',
                'name' => 'CALUMPIT',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31407,
            ),
            237 => 
            array (
                'id' => 238,
                'psgcCode' => '031408000',
                'name' => 'GUIGUINTO',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31408,
            ),
            238 => 
            array (
                'id' => 239,
                'psgcCode' => '031409000',
                'name' => 'HAGONOY',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31409,
            ),
            239 => 
            array (
                'id' => 240,
                'psgcCode' => '031410000',
            'name' => 'CITY OF MALOLOS (Capital)',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31410,
            ),
            240 => 
            array (
                'id' => 241,
                'psgcCode' => '031411000',
                'name' => 'MARILAO',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31411,
            ),
            241 => 
            array (
                'id' => 242,
                'psgcCode' => '031412000',
                'name' => 'CITY OF MEYCAUAYAN',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31412,
            ),
            242 => 
            array (
                'id' => 243,
                'psgcCode' => '031413000',
                'name' => 'NORZAGARAY',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31413,
            ),
            243 => 
            array (
                'id' => 244,
                'psgcCode' => '031414000',
                'name' => 'OBANDO',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31414,
            ),
            244 => 
            array (
                'id' => 245,
                'psgcCode' => '031415000',
                'name' => 'PANDI',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31415,
            ),
            245 => 
            array (
                'id' => 246,
                'psgcCode' => '031416000',
                'name' => 'PAOMBONG',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31416,
            ),
            246 => 
            array (
                'id' => 247,
                'psgcCode' => '031417000',
                'name' => 'PLARIDEL',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31417,
            ),
            247 => 
            array (
                'id' => 248,
                'psgcCode' => '031418000',
                'name' => 'PULILAN',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31418,
            ),
            248 => 
            array (
                'id' => 249,
                'psgcCode' => '031419000',
                'name' => 'SAN ILDEFONSO',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31419,
            ),
            249 => 
            array (
                'id' => 250,
                'psgcCode' => '031420000',
                'name' => 'CITY OF SAN JOSE DEL MONTE',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31420,
            ),
            250 => 
            array (
                'id' => 251,
                'psgcCode' => '031421000',
                'name' => 'SAN MIGUEL',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31421,
            ),
            251 => 
            array (
                'id' => 252,
                'psgcCode' => '031422000',
                'name' => 'SAN RAFAEL',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31422,
            ),
            252 => 
            array (
                'id' => 253,
                'psgcCode' => '031423000',
                'name' => 'SANTA MARIA',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31423,
            ),
            253 => 
            array (
                'id' => 254,
                'psgcCode' => '031424000',
                'name' => 'DOÑA REMEDIOS TRINIDAD',
                'region_code' => 3,
                'province_code' => 314,
                'code' => 31424,
            ),
            254 => 
            array (
                'id' => 255,
                'psgcCode' => '034901000',
                'name' => 'ALIAGA',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34901,
            ),
            255 => 
            array (
                'id' => 256,
                'psgcCode' => '034902000',
                'name' => 'BONGABON',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34902,
            ),
            256 => 
            array (
                'id' => 257,
                'psgcCode' => '034903000',
                'name' => 'CABANATUAN CITY',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34903,
            ),
            257 => 
            array (
                'id' => 258,
                'psgcCode' => '034904000',
                'name' => 'CABIAO',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34904,
            ),
            258 => 
            array (
                'id' => 259,
                'psgcCode' => '034905000',
                'name' => 'CARRANGLAN',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34905,
            ),
            259 => 
            array (
                'id' => 260,
                'psgcCode' => '034906000',
                'name' => 'CUYAPO',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34906,
            ),
            260 => 
            array (
                'id' => 261,
                'psgcCode' => '034907000',
            'name' => 'GABALDON (BITULOK & SABANI)',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34907,
            ),
            261 => 
            array (
                'id' => 262,
                'psgcCode' => '034908000',
                'name' => 'CITY OF GAPAN',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34908,
            ),
            262 => 
            array (
                'id' => 263,
                'psgcCode' => '034909000',
                'name' => 'GENERAL MAMERTO NATIVIDAD',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34909,
            ),
            263 => 
            array (
                'id' => 264,
                'psgcCode' => '034910000',
            'name' => 'GENERAL TINIO (PAPAYA)',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34910,
            ),
            264 => 
            array (
                'id' => 265,
                'psgcCode' => '034911000',
                'name' => 'GUIMBA',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34911,
            ),
            265 => 
            array (
                'id' => 266,
                'psgcCode' => '034912000',
                'name' => 'JAEN',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34912,
            ),
            266 => 
            array (
                'id' => 267,
                'psgcCode' => '034913000',
                'name' => 'LAUR',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34913,
            ),
            267 => 
            array (
                'id' => 268,
                'psgcCode' => '034914000',
                'name' => 'LICAB',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34914,
            ),
            268 => 
            array (
                'id' => 269,
                'psgcCode' => '034915000',
                'name' => 'LLANERA',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34915,
            ),
            269 => 
            array (
                'id' => 270,
                'psgcCode' => '034916000',
                'name' => 'LUPAO',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34916,
            ),
            270 => 
            array (
                'id' => 271,
                'psgcCode' => '034917000',
                'name' => 'SCIENCE CITY OF MUÑOZ',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34917,
            ),
            271 => 
            array (
                'id' => 272,
                'psgcCode' => '034918000',
                'name' => 'NAMPICUAN',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34918,
            ),
            272 => 
            array (
                'id' => 273,
                'psgcCode' => '034919000',
            'name' => 'PALAYAN CITY (Capital)',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34919,
            ),
            273 => 
            array (
                'id' => 274,
                'psgcCode' => '034920000',
                'name' => 'PANTABANGAN',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34920,
            ),
            274 => 
            array (
                'id' => 275,
                'psgcCode' => '034921000',
                'name' => 'PEÑARANDA',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34921,
            ),
            275 => 
            array (
                'id' => 276,
                'psgcCode' => '034922000',
                'name' => 'QUEZON',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34922,
            ),
            276 => 
            array (
                'id' => 277,
                'psgcCode' => '034923000',
                'name' => 'RIZAL',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34923,
            ),
            277 => 
            array (
                'id' => 278,
                'psgcCode' => '034924000',
                'name' => 'SAN ANTONIO',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34924,
            ),
            278 => 
            array (
                'id' => 279,
                'psgcCode' => '034925000',
                'name' => 'SAN ISIDRO',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34925,
            ),
            279 => 
            array (
                'id' => 280,
                'psgcCode' => '034926000',
                'name' => 'SAN JOSE CITY',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34926,
            ),
            280 => 
            array (
                'id' => 281,
                'psgcCode' => '034927000',
                'name' => 'SAN LEONARDO',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34927,
            ),
            281 => 
            array (
                'id' => 282,
                'psgcCode' => '034928000',
                'name' => 'SANTA ROSA',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34928,
            ),
            282 => 
            array (
                'id' => 283,
                'psgcCode' => '034929000',
                'name' => 'SANTO DOMINGO',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34929,
            ),
            283 => 
            array (
                'id' => 284,
                'psgcCode' => '034930000',
                'name' => 'TALAVERA',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34930,
            ),
            284 => 
            array (
                'id' => 285,
                'psgcCode' => '034931000',
                'name' => 'TALUGTUG',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34931,
            ),
            285 => 
            array (
                'id' => 286,
                'psgcCode' => '034932000',
                'name' => 'ZARAGOZA',
                'region_code' => 3,
                'province_code' => 349,
                'code' => 34932,
            ),
            286 => 
            array (
                'id' => 287,
                'psgcCode' => '035401000',
                'name' => 'ANGELES CITY',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35401,
            ),
            287 => 
            array (
                'id' => 288,
                'psgcCode' => '035402000',
                'name' => 'APALIT',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35402,
            ),
            288 => 
            array (
                'id' => 289,
                'psgcCode' => '035403000',
                'name' => 'ARAYAT',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35403,
            ),
            289 => 
            array (
                'id' => 290,
                'psgcCode' => '035404000',
                'name' => 'BACOLOR',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35404,
            ),
            290 => 
            array (
                'id' => 291,
                'psgcCode' => '035405000',
                'name' => 'CANDABA',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35405,
            ),
            291 => 
            array (
                'id' => 292,
                'psgcCode' => '035406000',
                'name' => 'FLORIDABLANCA',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35406,
            ),
            292 => 
            array (
                'id' => 293,
                'psgcCode' => '035407000',
                'name' => 'GUAGUA',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35407,
            ),
            293 => 
            array (
                'id' => 294,
                'psgcCode' => '035408000',
                'name' => 'LUBAO',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35408,
            ),
            294 => 
            array (
                'id' => 295,
                'psgcCode' => '035409000',
                'name' => 'MABALACAT CITY',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35409,
            ),
            295 => 
            array (
                'id' => 296,
                'psgcCode' => '035410000',
                'name' => 'MACABEBE',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35410,
            ),
            296 => 
            array (
                'id' => 297,
                'psgcCode' => '035411000',
                'name' => 'MAGALANG',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35411,
            ),
            297 => 
            array (
                'id' => 298,
                'psgcCode' => '035412000',
                'name' => 'MASANTOL',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35412,
            ),
            298 => 
            array (
                'id' => 299,
                'psgcCode' => '035413000',
                'name' => 'MEXICO',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35413,
            ),
            299 => 
            array (
                'id' => 300,
                'psgcCode' => '035414000',
                'name' => 'MINALIN',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35414,
            ),
            300 => 
            array (
                'id' => 301,
                'psgcCode' => '035415000',
                'name' => 'PORAC',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35415,
            ),
            301 => 
            array (
                'id' => 302,
                'psgcCode' => '035416000',
            'name' => 'CITY OF SAN FERNANDO (Capital)',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35416,
            ),
            302 => 
            array (
                'id' => 303,
                'psgcCode' => '035417000',
                'name' => 'SAN LUIS',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35417,
            ),
            303 => 
            array (
                'id' => 304,
                'psgcCode' => '035418000',
                'name' => 'SAN SIMON',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35418,
            ),
            304 => 
            array (
                'id' => 305,
                'psgcCode' => '035419000',
                'name' => 'SANTA ANA',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35419,
            ),
            305 => 
            array (
                'id' => 306,
                'psgcCode' => '035420000',
                'name' => 'SANTA RITA',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35420,
            ),
            306 => 
            array (
                'id' => 307,
                'psgcCode' => '035421000',
                'name' => 'SANTO TOMAS',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35421,
            ),
            307 => 
            array (
                'id' => 308,
                'psgcCode' => '035422000',
            'name' => 'SASMUAN (Sexmoan)',
                'region_code' => 3,
                'province_code' => 354,
                'code' => 35422,
            ),
            308 => 
            array (
                'id' => 309,
                'psgcCode' => '036901000',
                'name' => 'ANAO',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36901,
            ),
            309 => 
            array (
                'id' => 310,
                'psgcCode' => '036902000',
                'name' => 'BAMBAN',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36902,
            ),
            310 => 
            array (
                'id' => 311,
                'psgcCode' => '036903000',
                'name' => 'CAMILING',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36903,
            ),
            311 => 
            array (
                'id' => 312,
                'psgcCode' => '036904000',
                'name' => 'CAPAS',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36904,
            ),
            312 => 
            array (
                'id' => 313,
                'psgcCode' => '036905000',
                'name' => 'CONCEPCION',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36905,
            ),
            313 => 
            array (
                'id' => 314,
                'psgcCode' => '036906000',
                'name' => 'GERONA',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36906,
            ),
            314 => 
            array (
                'id' => 315,
                'psgcCode' => '036907000',
                'name' => 'LA PAZ',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36907,
            ),
            315 => 
            array (
                'id' => 316,
                'psgcCode' => '036908000',
                'name' => 'MAYANTOC',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36908,
            ),
            316 => 
            array (
                'id' => 317,
                'psgcCode' => '036909000',
                'name' => 'MONCADA',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36909,
            ),
            317 => 
            array (
                'id' => 318,
                'psgcCode' => '036910000',
                'name' => 'PANIQUI',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36910,
            ),
            318 => 
            array (
                'id' => 319,
                'psgcCode' => '036911000',
                'name' => 'PURA',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36911,
            ),
            319 => 
            array (
                'id' => 320,
                'psgcCode' => '036912000',
                'name' => 'RAMOS',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36912,
            ),
            320 => 
            array (
                'id' => 321,
                'psgcCode' => '036913000',
                'name' => 'SAN CLEMENTE',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36913,
            ),
            321 => 
            array (
                'id' => 322,
                'psgcCode' => '036914000',
                'name' => 'SAN MANUEL',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36914,
            ),
            322 => 
            array (
                'id' => 323,
                'psgcCode' => '036915000',
                'name' => 'SANTA IGNACIA',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36915,
            ),
            323 => 
            array (
                'id' => 324,
                'psgcCode' => '036916000',
            'name' => 'CITY OF TARLAC (Capital)',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36916,
            ),
            324 => 
            array (
                'id' => 325,
                'psgcCode' => '036917000',
                'name' => 'VICTORIA',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36917,
            ),
            325 => 
            array (
                'id' => 326,
                'psgcCode' => '036918000',
                'name' => 'SAN JOSE',
                'region_code' => 3,
                'province_code' => 369,
                'code' => 36918,
            ),
            326 => 
            array (
                'id' => 327,
                'psgcCode' => '037101000',
                'name' => 'BOTOLAN',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37101,
            ),
            327 => 
            array (
                'id' => 328,
                'psgcCode' => '037102000',
                'name' => 'CABANGAN',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37102,
            ),
            328 => 
            array (
                'id' => 329,
                'psgcCode' => '037103000',
                'name' => 'CANDELARIA',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37103,
            ),
            329 => 
            array (
                'id' => 330,
                'psgcCode' => '037104000',
                'name' => 'CASTILLEJOS',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37104,
            ),
            330 => 
            array (
                'id' => 331,
                'psgcCode' => '037105000',
            'name' => 'IBA (Capital)',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37105,
            ),
            331 => 
            array (
                'id' => 332,
                'psgcCode' => '037106000',
                'name' => 'MASINLOC',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37106,
            ),
            332 => 
            array (
                'id' => 333,
                'psgcCode' => '037107000',
                'name' => 'OLONGAPO CITY',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37107,
            ),
            333 => 
            array (
                'id' => 334,
                'psgcCode' => '037108000',
                'name' => 'PALAUIG',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37108,
            ),
            334 => 
            array (
                'id' => 335,
                'psgcCode' => '037109000',
                'name' => 'SAN ANTONIO',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37109,
            ),
            335 => 
            array (
                'id' => 336,
                'psgcCode' => '037110000',
                'name' => 'SAN FELIPE',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37110,
            ),
            336 => 
            array (
                'id' => 337,
                'psgcCode' => '037111000',
                'name' => 'SAN MARCELINO',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37111,
            ),
            337 => 
            array (
                'id' => 338,
                'psgcCode' => '037112000',
                'name' => 'SAN NARCISO',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37112,
            ),
            338 => 
            array (
                'id' => 339,
                'psgcCode' => '037113000',
                'name' => 'SANTA CRUZ',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37113,
            ),
            339 => 
            array (
                'id' => 340,
                'psgcCode' => '037114000',
                'name' => 'SUBIC',
                'region_code' => 3,
                'province_code' => 371,
                'code' => 37114,
            ),
            340 => 
            array (
                'id' => 341,
                'psgcCode' => '037701000',
            'name' => 'BALER (Capital)',
                'region_code' => 3,
                'province_code' => 377,
                'code' => 37701,
            ),
            341 => 
            array (
                'id' => 342,
                'psgcCode' => '037702000',
                'name' => 'CASIGURAN',
                'region_code' => 3,
                'province_code' => 377,
                'code' => 37702,
            ),
            342 => 
            array (
                'id' => 343,
                'psgcCode' => '037703000',
                'name' => 'DILASAG',
                'region_code' => 3,
                'province_code' => 377,
                'code' => 37703,
            ),
            343 => 
            array (
                'id' => 344,
                'psgcCode' => '037704000',
                'name' => 'DINALUNGAN',
                'region_code' => 3,
                'province_code' => 377,
                'code' => 37704,
            ),
            344 => 
            array (
                'id' => 345,
                'psgcCode' => '037705000',
                'name' => 'DINGALAN',
                'region_code' => 3,
                'province_code' => 377,
                'code' => 37705,
            ),
            345 => 
            array (
                'id' => 346,
                'psgcCode' => '037706000',
                'name' => 'DIPACULAO',
                'region_code' => 3,
                'province_code' => 377,
                'code' => 37706,
            ),
            346 => 
            array (
                'id' => 347,
                'psgcCode' => '037707000',
                'name' => 'MARIA AURORA',
                'region_code' => 3,
                'province_code' => 377,
                'code' => 37707,
            ),
            347 => 
            array (
                'id' => 348,
                'psgcCode' => '037708000',
                'name' => 'SAN LUIS',
                'region_code' => 3,
                'province_code' => 377,
                'code' => 37708,
            ),
            348 => 
            array (
                'id' => 349,
                'psgcCode' => '041001000',
                'name' => 'AGONCILLO',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41001,
            ),
            349 => 
            array (
                'id' => 350,
                'psgcCode' => '041002000',
                'name' => 'ALITAGTAG',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41002,
            ),
            350 => 
            array (
                'id' => 351,
                'psgcCode' => '041003000',
                'name' => 'BALAYAN',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41003,
            ),
            351 => 
            array (
                'id' => 352,
                'psgcCode' => '041004000',
                'name' => 'BALETE',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41004,
            ),
            352 => 
            array (
                'id' => 353,
                'psgcCode' => '041005000',
            'name' => 'BATANGAS CITY (Capital)',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41005,
            ),
            353 => 
            array (
                'id' => 354,
                'psgcCode' => '041006000',
                'name' => 'BAUAN',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41006,
            ),
            354 => 
            array (
                'id' => 355,
                'psgcCode' => '041007000',
                'name' => 'CALACA',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41007,
            ),
            355 => 
            array (
                'id' => 356,
                'psgcCode' => '041008000',
                'name' => 'CALATAGAN',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41008,
            ),
            356 => 
            array (
                'id' => 357,
                'psgcCode' => '041009000',
                'name' => 'CUENCA',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41009,
            ),
            357 => 
            array (
                'id' => 358,
                'psgcCode' => '041010000',
                'name' => 'IBAAN',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41010,
            ),
            358 => 
            array (
                'id' => 359,
                'psgcCode' => '041011000',
                'name' => 'LAUREL',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41011,
            ),
            359 => 
            array (
                'id' => 360,
                'psgcCode' => '041012000',
                'name' => 'LEMERY',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41012,
            ),
            360 => 
            array (
                'id' => 361,
                'psgcCode' => '041013000',
                'name' => 'LIAN',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41013,
            ),
            361 => 
            array (
                'id' => 362,
                'psgcCode' => '041014000',
                'name' => 'LIPA CITY',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41014,
            ),
            362 => 
            array (
                'id' => 363,
                'psgcCode' => '041015000',
                'name' => 'LOBO',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41015,
            ),
            363 => 
            array (
                'id' => 364,
                'psgcCode' => '041016000',
                'name' => 'MABINI',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41016,
            ),
            364 => 
            array (
                'id' => 365,
                'psgcCode' => '041017000',
                'name' => 'MALVAR',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41017,
            ),
            365 => 
            array (
                'id' => 366,
                'psgcCode' => '041018000',
                'name' => 'MATAASNAKAHOY',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41018,
            ),
            366 => 
            array (
                'id' => 367,
                'psgcCode' => '041019000',
                'name' => 'NASUGBU',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41019,
            ),
            367 => 
            array (
                'id' => 368,
                'psgcCode' => '041020000',
                'name' => 'PADRE GARCIA',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41020,
            ),
            368 => 
            array (
                'id' => 369,
                'psgcCode' => '041021000',
                'name' => 'ROSARIO',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41021,
            ),
            369 => 
            array (
                'id' => 370,
                'psgcCode' => '041022000',
                'name' => 'SAN JOSE',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41022,
            ),
            370 => 
            array (
                'id' => 371,
                'psgcCode' => '041023000',
                'name' => 'SAN JUAN',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41023,
            ),
            371 => 
            array (
                'id' => 372,
                'psgcCode' => '041024000',
                'name' => 'SAN LUIS',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41024,
            ),
            372 => 
            array (
                'id' => 373,
                'psgcCode' => '041025000',
                'name' => 'SAN NICOLAS',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41025,
            ),
            373 => 
            array (
                'id' => 374,
                'psgcCode' => '041026000',
                'name' => 'SAN PASCUAL',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41026,
            ),
            374 => 
            array (
                'id' => 375,
                'psgcCode' => '041027000',
                'name' => 'SANTA TERESITA',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41027,
            ),
            375 => 
            array (
                'id' => 376,
                'psgcCode' => '041028000',
                'name' => 'SANTO TOMAS',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41028,
            ),
            376 => 
            array (
                'id' => 377,
                'psgcCode' => '041029000',
                'name' => 'TAAL',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41029,
            ),
            377 => 
            array (
                'id' => 378,
                'psgcCode' => '041030000',
                'name' => 'TALISAY',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41030,
            ),
            378 => 
            array (
                'id' => 379,
                'psgcCode' => '041031000',
                'name' => 'CITY OF TANAUAN',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41031,
            ),
            379 => 
            array (
                'id' => 380,
                'psgcCode' => '041032000',
                'name' => 'TAYSAN',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41032,
            ),
            380 => 
            array (
                'id' => 381,
                'psgcCode' => '041033000',
                'name' => 'TINGLOY',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41033,
            ),
            381 => 
            array (
                'id' => 382,
                'psgcCode' => '041034000',
                'name' => 'TUY',
                'region_code' => 4,
                'province_code' => 410,
                'code' => 41034,
            ),
            382 => 
            array (
                'id' => 383,
                'psgcCode' => '042101000',
                'name' => 'ALFONSO',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42101,
            ),
            383 => 
            array (
                'id' => 384,
                'psgcCode' => '042102000',
                'name' => 'AMADEO',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42102,
            ),
            384 => 
            array (
                'id' => 385,
                'psgcCode' => '042103000',
                'name' => 'BACOOR CITY',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42103,
            ),
            385 => 
            array (
                'id' => 386,
                'psgcCode' => '042104000',
                'name' => 'CARMONA',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42104,
            ),
            386 => 
            array (
                'id' => 387,
                'psgcCode' => '042105000',
                'name' => 'CAVITE CITY',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42105,
            ),
            387 => 
            array (
                'id' => 388,
                'psgcCode' => '042106000',
                'name' => 'CITY OF DASMARIÑAS',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42106,
            ),
            388 => 
            array (
                'id' => 389,
                'psgcCode' => '042107000',
                'name' => 'GENERAL EMILIO AGUINALDO',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42107,
            ),
            389 => 
            array (
                'id' => 390,
                'psgcCode' => '042108000',
                'name' => 'GENERAL TRIAS',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42108,
            ),
            390 => 
            array (
                'id' => 391,
                'psgcCode' => '042109000',
                'name' => 'IMUS CITY',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42109,
            ),
            391 => 
            array (
                'id' => 392,
                'psgcCode' => '042110000',
                'name' => 'INDANG',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42110,
            ),
            392 => 
            array (
                'id' => 393,
                'psgcCode' => '042111000',
                'name' => 'KAWIT',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42111,
            ),
            393 => 
            array (
                'id' => 394,
                'psgcCode' => '042112000',
                'name' => 'MAGALLANES',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42112,
            ),
            394 => 
            array (
                'id' => 395,
                'psgcCode' => '042113000',
                'name' => 'MARAGONDON',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42113,
            ),
            395 => 
            array (
                'id' => 396,
                'psgcCode' => '042114000',
            'name' => 'MENDEZ (MENDEZ-NUÑEZ)',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42114,
            ),
            396 => 
            array (
                'id' => 397,
                'psgcCode' => '042115000',
                'name' => 'NAIC',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42115,
            ),
            397 => 
            array (
                'id' => 398,
                'psgcCode' => '042116000',
                'name' => 'NOVELETA',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42116,
            ),
            398 => 
            array (
                'id' => 399,
                'psgcCode' => '042117000',
                'name' => 'ROSARIO',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42117,
            ),
            399 => 
            array (
                'id' => 400,
                'psgcCode' => '042118000',
                'name' => 'SILANG',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42118,
            ),
            400 => 
            array (
                'id' => 401,
                'psgcCode' => '042119000',
                'name' => 'TAGAYTAY CITY',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42119,
            ),
            401 => 
            array (
                'id' => 402,
                'psgcCode' => '042120000',
                'name' => 'TANZA',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42120,
            ),
            402 => 
            array (
                'id' => 403,
                'psgcCode' => '042121000',
                'name' => 'TERNATE',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42121,
            ),
            403 => 
            array (
                'id' => 404,
                'psgcCode' => '042122000',
            'name' => 'TRECE MARTIRES CITY (Capital)',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42122,
            ),
            404 => 
            array (
                'id' => 405,
                'psgcCode' => '042123000',
                'name' => 'GEN. MARIANO ALVAREZ',
                'region_code' => 4,
                'province_code' => 421,
                'code' => 42123,
            ),
            405 => 
            array (
                'id' => 406,
                'psgcCode' => '043401000',
                'name' => 'ALAMINOS',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43401,
            ),
            406 => 
            array (
                'id' => 407,
                'psgcCode' => '043402000',
                'name' => 'BAY',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43402,
            ),
            407 => 
            array (
                'id' => 408,
                'psgcCode' => '043403000',
                'name' => 'CITY OF BIÑAN',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43403,
            ),
            408 => 
            array (
                'id' => 409,
                'psgcCode' => '043404000',
                'name' => 'CABUYAO CITY',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43404,
            ),
            409 => 
            array (
                'id' => 410,
                'psgcCode' => '043405000',
                'name' => 'CITY OF CALAMBA',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43405,
            ),
            410 => 
            array (
                'id' => 411,
                'psgcCode' => '043406000',
                'name' => 'CALAUAN',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43406,
            ),
            411 => 
            array (
                'id' => 412,
                'psgcCode' => '043407000',
                'name' => 'CAVINTI',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43407,
            ),
            412 => 
            array (
                'id' => 413,
                'psgcCode' => '043408000',
                'name' => 'FAMY',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43408,
            ),
            413 => 
            array (
                'id' => 414,
                'psgcCode' => '043409000',
                'name' => 'KALAYAAN',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43409,
            ),
            414 => 
            array (
                'id' => 415,
                'psgcCode' => '043410000',
                'name' => 'LILIW',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43410,
            ),
            415 => 
            array (
                'id' => 416,
                'psgcCode' => '043411000',
                'name' => 'LOS BAÑOS',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43411,
            ),
            416 => 
            array (
                'id' => 417,
                'psgcCode' => '043412000',
                'name' => 'LUISIANA',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43412,
            ),
            417 => 
            array (
                'id' => 418,
                'psgcCode' => '043413000',
                'name' => 'LUMBAN',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43413,
            ),
            418 => 
            array (
                'id' => 419,
                'psgcCode' => '043414000',
                'name' => 'MABITAC',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43414,
            ),
            419 => 
            array (
                'id' => 420,
                'psgcCode' => '043415000',
                'name' => 'MAGDALENA',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43415,
            ),
            420 => 
            array (
                'id' => 421,
                'psgcCode' => '043416000',
                'name' => 'MAJAYJAY',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43416,
            ),
            421 => 
            array (
                'id' => 422,
                'psgcCode' => '043417000',
                'name' => 'NAGCARLAN',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43417,
            ),
            422 => 
            array (
                'id' => 423,
                'psgcCode' => '043418000',
                'name' => 'PAETE',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43418,
            ),
            423 => 
            array (
                'id' => 424,
                'psgcCode' => '043419000',
                'name' => 'PAGSANJAN',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43419,
            ),
            424 => 
            array (
                'id' => 425,
                'psgcCode' => '043420000',
                'name' => 'PAKIL',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43420,
            ),
            425 => 
            array (
                'id' => 426,
                'psgcCode' => '043421000',
                'name' => 'PANGIL',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43421,
            ),
            426 => 
            array (
                'id' => 427,
                'psgcCode' => '043422000',
                'name' => 'PILA',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43422,
            ),
            427 => 
            array (
                'id' => 428,
                'psgcCode' => '043423000',
                'name' => 'RIZAL',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43423,
            ),
            428 => 
            array (
                'id' => 429,
                'psgcCode' => '043424000',
                'name' => 'SAN PABLO CITY',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43424,
            ),
            429 => 
            array (
                'id' => 430,
                'psgcCode' => '043425000',
                'name' => 'CITY OF SAN PEDRO',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43425,
            ),
            430 => 
            array (
                'id' => 431,
                'psgcCode' => '043426000',
            'name' => 'SANTA CRUZ (Capital)',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43426,
            ),
            431 => 
            array (
                'id' => 432,
                'psgcCode' => '043427000',
                'name' => 'SANTA MARIA',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43427,
            ),
            432 => 
            array (
                'id' => 433,
                'psgcCode' => '043428000',
                'name' => 'CITY OF SANTA ROSA',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43428,
            ),
            433 => 
            array (
                'id' => 434,
                'psgcCode' => '043429000',
                'name' => 'SINILOAN',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43429,
            ),
            434 => 
            array (
                'id' => 435,
                'psgcCode' => '043430000',
                'name' => 'VICTORIA',
                'region_code' => 4,
                'province_code' => 434,
                'code' => 43430,
            ),
            435 => 
            array (
                'id' => 436,
                'psgcCode' => '045601000',
                'name' => 'AGDANGAN',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45601,
            ),
            436 => 
            array (
                'id' => 437,
                'psgcCode' => '045602000',
                'name' => 'ALABAT',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45602,
            ),
            437 => 
            array (
                'id' => 438,
                'psgcCode' => '045603000',
                'name' => 'ATIMONAN',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45603,
            ),
            438 => 
            array (
                'id' => 439,
                'psgcCode' => '045605000',
                'name' => 'BUENAVISTA',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45605,
            ),
            439 => 
            array (
                'id' => 440,
                'psgcCode' => '045606000',
                'name' => 'BURDEOS',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45606,
            ),
            440 => 
            array (
                'id' => 441,
                'psgcCode' => '045607000',
                'name' => 'CALAUAG',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45607,
            ),
            441 => 
            array (
                'id' => 442,
                'psgcCode' => '045608000',
                'name' => 'CANDELARIA',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45608,
            ),
            442 => 
            array (
                'id' => 443,
                'psgcCode' => '045610000',
                'name' => 'CATANAUAN',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45610,
            ),
            443 => 
            array (
                'id' => 444,
                'psgcCode' => '045615000',
                'name' => 'DOLORES',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45615,
            ),
            444 => 
            array (
                'id' => 445,
                'psgcCode' => '045616000',
                'name' => 'GENERAL LUNA',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45616,
            ),
            445 => 
            array (
                'id' => 446,
                'psgcCode' => '045617000',
                'name' => 'GENERAL NAKAR',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45617,
            ),
            446 => 
            array (
                'id' => 447,
                'psgcCode' => '045618000',
                'name' => 'GUINAYANGAN',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45618,
            ),
            447 => 
            array (
                'id' => 448,
                'psgcCode' => '045619000',
                'name' => 'GUMACA',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45619,
            ),
            448 => 
            array (
                'id' => 449,
                'psgcCode' => '045620000',
                'name' => 'INFANTA',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45620,
            ),
            449 => 
            array (
                'id' => 450,
                'psgcCode' => '045621000',
                'name' => 'JOMALIG',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45621,
            ),
            450 => 
            array (
                'id' => 451,
                'psgcCode' => '045622000',
                'name' => 'LOPEZ',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45622,
            ),
            451 => 
            array (
                'id' => 452,
                'psgcCode' => '045623000',
                'name' => 'LUCBAN',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45623,
            ),
            452 => 
            array (
                'id' => 453,
                'psgcCode' => '045624000',
            'name' => 'LUCENA CITY (Capital)',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45624,
            ),
            453 => 
            array (
                'id' => 454,
                'psgcCode' => '045625000',
                'name' => 'MACALELON',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45625,
            ),
            454 => 
            array (
                'id' => 455,
                'psgcCode' => '045627000',
                'name' => 'MAUBAN',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45627,
            ),
            455 => 
            array (
                'id' => 456,
                'psgcCode' => '045628000',
                'name' => 'MULANAY',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45628,
            ),
            456 => 
            array (
                'id' => 457,
                'psgcCode' => '045629000',
                'name' => 'PADRE BURGOS',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45629,
            ),
            457 => 
            array (
                'id' => 458,
                'psgcCode' => '045630000',
                'name' => 'PAGBILAO',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45630,
            ),
            458 => 
            array (
                'id' => 459,
                'psgcCode' => '045631000',
                'name' => 'PANUKULAN',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45631,
            ),
            459 => 
            array (
                'id' => 460,
                'psgcCode' => '045632000',
                'name' => 'PATNANUNGAN',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45632,
            ),
            460 => 
            array (
                'id' => 461,
                'psgcCode' => '045633000',
                'name' => 'PEREZ',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45633,
            ),
            461 => 
            array (
                'id' => 462,
                'psgcCode' => '045634000',
                'name' => 'PITOGO',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45634,
            ),
            462 => 
            array (
                'id' => 463,
                'psgcCode' => '045635000',
                'name' => 'PLARIDEL',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45635,
            ),
            463 => 
            array (
                'id' => 464,
                'psgcCode' => '045636000',
                'name' => 'POLILLO',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45636,
            ),
            464 => 
            array (
                'id' => 465,
                'psgcCode' => '045637000',
                'name' => 'QUEZON',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45637,
            ),
            465 => 
            array (
                'id' => 466,
                'psgcCode' => '045638000',
                'name' => 'REAL',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45638,
            ),
            466 => 
            array (
                'id' => 467,
                'psgcCode' => '045639000',
                'name' => 'SAMPALOC',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45639,
            ),
            467 => 
            array (
                'id' => 468,
                'psgcCode' => '045640000',
                'name' => 'SAN ANDRES',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45640,
            ),
            468 => 
            array (
                'id' => 469,
                'psgcCode' => '045641000',
                'name' => 'SAN ANTONIO',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45641,
            ),
            469 => 
            array (
                'id' => 470,
                'psgcCode' => '045642000',
            'name' => 'SAN FRANCISCO (AURORA)',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45642,
            ),
            470 => 
            array (
                'id' => 471,
                'psgcCode' => '045644000',
                'name' => 'SAN NARCISO',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45644,
            ),
            471 => 
            array (
                'id' => 472,
                'psgcCode' => '045645000',
                'name' => 'SARIAYA',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45645,
            ),
            472 => 
            array (
                'id' => 473,
                'psgcCode' => '045646000',
                'name' => 'TAGKAWAYAN',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45646,
            ),
            473 => 
            array (
                'id' => 474,
                'psgcCode' => '045647000',
                'name' => 'CITY OF TAYABAS',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45647,
            ),
            474 => 
            array (
                'id' => 475,
                'psgcCode' => '045648000',
                'name' => 'TIAONG',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45648,
            ),
            475 => 
            array (
                'id' => 476,
                'psgcCode' => '045649000',
                'name' => 'UNISAN',
                'region_code' => 4,
                'province_code' => 456,
                'code' => 45649,
            ),
            476 => 
            array (
                'id' => 477,
                'psgcCode' => '045801000',
                'name' => 'ANGONO',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45801,
            ),
            477 => 
            array (
                'id' => 478,
                'psgcCode' => '045802000',
                'name' => 'CITY OF ANTIPOLO',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45802,
            ),
            478 => 
            array (
                'id' => 479,
                'psgcCode' => '045803000',
                'name' => 'BARAS',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45803,
            ),
            479 => 
            array (
                'id' => 480,
                'psgcCode' => '045804000',
                'name' => 'BINANGONAN',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45804,
            ),
            480 => 
            array (
                'id' => 481,
                'psgcCode' => '045805000',
                'name' => 'CAINTA',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45805,
            ),
            481 => 
            array (
                'id' => 482,
                'psgcCode' => '045806000',
                'name' => 'CARDONA',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45806,
            ),
            482 => 
            array (
                'id' => 483,
                'psgcCode' => '045807000',
                'name' => 'JALA-JALA',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45807,
            ),
            483 => 
            array (
                'id' => 484,
                'psgcCode' => '045808000',
            'name' => 'RODRIGUEZ (MONTALBAN)',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45808,
            ),
            484 => 
            array (
                'id' => 485,
                'psgcCode' => '045809000',
                'name' => 'MORONG',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45809,
            ),
            485 => 
            array (
                'id' => 486,
                'psgcCode' => '045810000',
                'name' => 'PILILLA',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45810,
            ),
            486 => 
            array (
                'id' => 487,
                'psgcCode' => '045811000',
                'name' => 'SAN MATEO',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45811,
            ),
            487 => 
            array (
                'id' => 488,
                'psgcCode' => '045812000',
                'name' => 'TANAY',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45812,
            ),
            488 => 
            array (
                'id' => 489,
                'psgcCode' => '045813000',
                'name' => 'TAYTAY',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45813,
            ),
            489 => 
            array (
                'id' => 490,
                'psgcCode' => '045814000',
                'name' => 'TERESA',
                'region_code' => 4,
                'province_code' => 458,
                'code' => 45814,
            ),
            490 => 
            array (
                'id' => 564,
                'psgcCode' => '050501000',
                'name' => 'BACACAY',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50501,
            ),
            491 => 
            array (
                'id' => 565,
                'psgcCode' => '050502000',
                'name' => 'CAMALIG',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50502,
            ),
            492 => 
            array (
                'id' => 566,
                'psgcCode' => '050503000',
            'name' => 'DARAGA (LOCSIN)',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50503,
            ),
            493 => 
            array (
                'id' => 567,
                'psgcCode' => '050504000',
                'name' => 'GUINOBATAN',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50504,
            ),
            494 => 
            array (
                'id' => 568,
                'psgcCode' => '050505000',
                'name' => 'JOVELLAR',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50505,
            ),
            495 => 
            array (
                'id' => 569,
                'psgcCode' => '050506000',
            'name' => 'LEGAZPI CITY (Capital)',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50506,
            ),
            496 => 
            array (
                'id' => 570,
                'psgcCode' => '050507000',
                'name' => 'LIBON',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50507,
            ),
            497 => 
            array (
                'id' => 571,
                'psgcCode' => '050508000',
                'name' => 'CITY OF LIGAO',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50508,
            ),
            498 => 
            array (
                'id' => 572,
                'psgcCode' => '050509000',
                'name' => 'MALILIPOT',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50509,
            ),
            499 => 
            array (
                'id' => 573,
                'psgcCode' => '050510000',
                'name' => 'MALINAO',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50510,
            ),
        ));
        \DB::table('city_municipalities')->insert(array (
            0 => 
            array (
                'id' => 574,
                'psgcCode' => '050511000',
                'name' => 'MANITO',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50511,
            ),
            1 => 
            array (
                'id' => 575,
                'psgcCode' => '050512000',
                'name' => 'OAS',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50512,
            ),
            2 => 
            array (
                'id' => 576,
                'psgcCode' => '050513000',
                'name' => 'PIO DURAN',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50513,
            ),
            3 => 
            array (
                'id' => 577,
                'psgcCode' => '050514000',
                'name' => 'POLANGUI',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50514,
            ),
            4 => 
            array (
                'id' => 578,
                'psgcCode' => '050515000',
                'name' => 'RAPU-RAPU',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50515,
            ),
            5 => 
            array (
                'id' => 579,
                'psgcCode' => '050516000',
            'name' => 'SANTO DOMINGO (LIBOG)',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50516,
            ),
            6 => 
            array (
                'id' => 580,
                'psgcCode' => '050517000',
                'name' => 'CITY OF TABACO',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50517,
            ),
            7 => 
            array (
                'id' => 581,
                'psgcCode' => '050518000',
                'name' => 'TIWI',
                'region_code' => 5,
                'province_code' => 505,
                'code' => 50518,
            ),
            8 => 
            array (
                'id' => 582,
                'psgcCode' => '051601000',
                'name' => 'BASUD',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51601,
            ),
            9 => 
            array (
                'id' => 583,
                'psgcCode' => '051602000',
                'name' => 'CAPALONGA',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51602,
            ),
            10 => 
            array (
                'id' => 584,
                'psgcCode' => '051603000',
            'name' => 'DAET (Capital)',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51603,
            ),
            11 => 
            array (
                'id' => 585,
                'psgcCode' => '051604000',
            'name' => 'SAN LORENZO RUIZ (IMELDA)',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51604,
            ),
            12 => 
            array (
                'id' => 586,
                'psgcCode' => '051605000',
                'name' => 'JOSE PANGANIBAN',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51605,
            ),
            13 => 
            array (
                'id' => 587,
                'psgcCode' => '051606000',
                'name' => 'LABO',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51606,
            ),
            14 => 
            array (
                'id' => 588,
                'psgcCode' => '051607000',
                'name' => 'MERCEDES',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51607,
            ),
            15 => 
            array (
                'id' => 589,
                'psgcCode' => '051608000',
                'name' => 'PARACALE',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51608,
            ),
            16 => 
            array (
                'id' => 590,
                'psgcCode' => '051609000',
                'name' => 'SAN VICENTE',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51609,
            ),
            17 => 
            array (
                'id' => 591,
                'psgcCode' => '051610000',
                'name' => 'SANTA ELENA',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51610,
            ),
            18 => 
            array (
                'id' => 592,
                'psgcCode' => '051611000',
                'name' => 'TALISAY',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51611,
            ),
            19 => 
            array (
                'id' => 593,
                'psgcCode' => '051612000',
                'name' => 'VINZONS',
                'region_code' => 5,
                'province_code' => 516,
                'code' => 51612,
            ),
            20 => 
            array (
                'id' => 594,
                'psgcCode' => '051701000',
                'name' => 'BAAO',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51701,
            ),
            21 => 
            array (
                'id' => 595,
                'psgcCode' => '051702000',
                'name' => 'BALATAN',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51702,
            ),
            22 => 
            array (
                'id' => 596,
                'psgcCode' => '051703000',
                'name' => 'BATO',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51703,
            ),
            23 => 
            array (
                'id' => 597,
                'psgcCode' => '051704000',
                'name' => 'BOMBON',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51704,
            ),
            24 => 
            array (
                'id' => 598,
                'psgcCode' => '051705000',
                'name' => 'BUHI',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51705,
            ),
            25 => 
            array (
                'id' => 599,
                'psgcCode' => '051706000',
                'name' => 'BULA',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51706,
            ),
            26 => 
            array (
                'id' => 600,
                'psgcCode' => '051707000',
                'name' => 'CABUSAO',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51707,
            ),
            27 => 
            array (
                'id' => 601,
                'psgcCode' => '051708000',
                'name' => 'CALABANGA',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51708,
            ),
            28 => 
            array (
                'id' => 602,
                'psgcCode' => '051709000',
                'name' => 'CAMALIGAN',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51709,
            ),
            29 => 
            array (
                'id' => 603,
                'psgcCode' => '051710000',
                'name' => 'CANAMAN',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51710,
            ),
            30 => 
            array (
                'id' => 604,
                'psgcCode' => '051711000',
                'name' => 'CARAMOAN',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51711,
            ),
            31 => 
            array (
                'id' => 605,
                'psgcCode' => '051712000',
                'name' => 'DEL GALLEGO',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51712,
            ),
            32 => 
            array (
                'id' => 606,
                'psgcCode' => '051713000',
                'name' => 'GAINZA',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51713,
            ),
            33 => 
            array (
                'id' => 607,
                'psgcCode' => '051714000',
                'name' => 'GARCHITORENA',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51714,
            ),
            34 => 
            array (
                'id' => 608,
                'psgcCode' => '051715000',
                'name' => 'GOA',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51715,
            ),
            35 => 
            array (
                'id' => 609,
                'psgcCode' => '051716000',
                'name' => 'IRIGA CITY',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51716,
            ),
            36 => 
            array (
                'id' => 610,
                'psgcCode' => '051717000',
                'name' => 'LAGONOY',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51717,
            ),
            37 => 
            array (
                'id' => 611,
                'psgcCode' => '051718000',
                'name' => 'LIBMANAN',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51718,
            ),
            38 => 
            array (
                'id' => 612,
                'psgcCode' => '051719000',
                'name' => 'LUPI',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51719,
            ),
            39 => 
            array (
                'id' => 613,
                'psgcCode' => '051720000',
                'name' => 'MAGARAO',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51720,
            ),
            40 => 
            array (
                'id' => 614,
                'psgcCode' => '051721000',
                'name' => 'MILAOR',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51721,
            ),
            41 => 
            array (
                'id' => 615,
                'psgcCode' => '051722000',
                'name' => 'MINALABAC',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51722,
            ),
            42 => 
            array (
                'id' => 616,
                'psgcCode' => '051723000',
                'name' => 'NABUA',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51723,
            ),
            43 => 
            array (
                'id' => 617,
                'psgcCode' => '051724000',
                'name' => 'NAGA CITY',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51724,
            ),
            44 => 
            array (
                'id' => 618,
                'psgcCode' => '051725000',
                'name' => 'OCAMPO',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51725,
            ),
            45 => 
            array (
                'id' => 619,
                'psgcCode' => '051726000',
                'name' => 'PAMPLONA',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51726,
            ),
            46 => 
            array (
                'id' => 620,
                'psgcCode' => '051727000',
                'name' => 'PASACAO',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51727,
            ),
            47 => 
            array (
                'id' => 621,
                'psgcCode' => '051728000',
            'name' => 'PILI (Capital)',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51728,
            ),
            48 => 
            array (
                'id' => 622,
                'psgcCode' => '051729000',
            'name' => 'PRESENTACION (PARUBCAN)',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51729,
            ),
            49 => 
            array (
                'id' => 623,
                'psgcCode' => '051730000',
                'name' => 'RAGAY',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51730,
            ),
            50 => 
            array (
                'id' => 624,
                'psgcCode' => '051731000',
                'name' => 'SAGÑAY',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51731,
            ),
            51 => 
            array (
                'id' => 625,
                'psgcCode' => '051732000',
                'name' => 'SAN FERNANDO',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51732,
            ),
            52 => 
            array (
                'id' => 626,
                'psgcCode' => '051733000',
                'name' => 'SAN JOSE',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51733,
            ),
            53 => 
            array (
                'id' => 627,
                'psgcCode' => '051734000',
                'name' => 'SIPOCOT',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51734,
            ),
            54 => 
            array (
                'id' => 628,
                'psgcCode' => '051735000',
                'name' => 'SIRUMA',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51735,
            ),
            55 => 
            array (
                'id' => 629,
                'psgcCode' => '051736000',
                'name' => 'TIGAON',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51736,
            ),
            56 => 
            array (
                'id' => 630,
                'psgcCode' => '051737000',
                'name' => 'TINAMBAC',
                'region_code' => 5,
                'province_code' => 517,
                'code' => 51737,
            ),
            57 => 
            array (
                'id' => 631,
                'psgcCode' => '052001000',
                'name' => 'BAGAMANOC',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52001,
            ),
            58 => 
            array (
                'id' => 632,
                'psgcCode' => '052002000',
                'name' => 'BARAS',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52002,
            ),
            59 => 
            array (
                'id' => 633,
                'psgcCode' => '052003000',
                'name' => 'BATO',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52003,
            ),
            60 => 
            array (
                'id' => 634,
                'psgcCode' => '052004000',
                'name' => 'CARAMORAN',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52004,
            ),
            61 => 
            array (
                'id' => 635,
                'psgcCode' => '052005000',
                'name' => 'GIGMOTO',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52005,
            ),
            62 => 
            array (
                'id' => 636,
                'psgcCode' => '052006000',
                'name' => 'PANDAN',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52006,
            ),
            63 => 
            array (
                'id' => 637,
                'psgcCode' => '052007000',
            'name' => 'PANGANIBAN (PAYO)',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52007,
            ),
            64 => 
            array (
                'id' => 638,
                'psgcCode' => '052008000',
            'name' => 'SAN ANDRES (CALOLBON)',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52008,
            ),
            65 => 
            array (
                'id' => 639,
                'psgcCode' => '052009000',
                'name' => 'SAN MIGUEL',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52009,
            ),
            66 => 
            array (
                'id' => 640,
                'psgcCode' => '052010000',
                'name' => 'VIGA',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52010,
            ),
            67 => 
            array (
                'id' => 641,
                'psgcCode' => '052011000',
            'name' => 'VIRAC (Capital)',
                'region_code' => 5,
                'province_code' => 520,
                'code' => 52011,
            ),
            68 => 
            array (
                'id' => 642,
                'psgcCode' => '054101000',
                'name' => 'AROROY',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54101,
            ),
            69 => 
            array (
                'id' => 643,
                'psgcCode' => '054102000',
                'name' => 'BALENO',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54102,
            ),
            70 => 
            array (
                'id' => 644,
                'psgcCode' => '054103000',
                'name' => 'BALUD',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54103,
            ),
            71 => 
            array (
                'id' => 645,
                'psgcCode' => '054104000',
                'name' => 'BATUAN',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54104,
            ),
            72 => 
            array (
                'id' => 646,
                'psgcCode' => '054105000',
                'name' => 'CATAINGAN',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54105,
            ),
            73 => 
            array (
                'id' => 647,
                'psgcCode' => '054106000',
                'name' => 'CAWAYAN',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54106,
            ),
            74 => 
            array (
                'id' => 648,
                'psgcCode' => '054107000',
                'name' => 'CLAVERIA',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54107,
            ),
            75 => 
            array (
                'id' => 649,
                'psgcCode' => '054108000',
                'name' => 'DIMASALANG',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54108,
            ),
            76 => 
            array (
                'id' => 650,
                'psgcCode' => '054109000',
                'name' => 'ESPERANZA',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54109,
            ),
            77 => 
            array (
                'id' => 651,
                'psgcCode' => '054110000',
                'name' => 'MANDAON',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54110,
            ),
            78 => 
            array (
                'id' => 652,
                'psgcCode' => '054111000',
            'name' => 'CITY OF MASBATE (Capital)',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54111,
            ),
            79 => 
            array (
                'id' => 653,
                'psgcCode' => '054112000',
                'name' => 'MILAGROS',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54112,
            ),
            80 => 
            array (
                'id' => 654,
                'psgcCode' => '054113000',
                'name' => 'MOBO',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54113,
            ),
            81 => 
            array (
                'id' => 655,
                'psgcCode' => '054114000',
                'name' => 'MONREAL',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54114,
            ),
            82 => 
            array (
                'id' => 656,
                'psgcCode' => '054115000',
                'name' => 'PALANAS',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54115,
            ),
            83 => 
            array (
                'id' => 657,
                'psgcCode' => '054116000',
            'name' => 'PIO V. CORPUZ (LIMBUHAN)',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54116,
            ),
            84 => 
            array (
                'id' => 658,
                'psgcCode' => '054117000',
                'name' => 'PLACER',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54117,
            ),
            85 => 
            array (
                'id' => 659,
                'psgcCode' => '054118000',
                'name' => 'SAN FERNANDO',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54118,
            ),
            86 => 
            array (
                'id' => 660,
                'psgcCode' => '054119000',
                'name' => 'SAN JACINTO',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54119,
            ),
            87 => 
            array (
                'id' => 661,
                'psgcCode' => '054120000',
                'name' => 'SAN PASCUAL',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54120,
            ),
            88 => 
            array (
                'id' => 662,
                'psgcCode' => '054121000',
                'name' => 'USON',
                'region_code' => 5,
                'province_code' => 541,
                'code' => 54121,
            ),
            89 => 
            array (
                'id' => 663,
                'psgcCode' => '056202000',
                'name' => 'BARCELONA',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56202,
            ),
            90 => 
            array (
                'id' => 664,
                'psgcCode' => '056203000',
                'name' => 'BULAN',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56203,
            ),
            91 => 
            array (
                'id' => 665,
                'psgcCode' => '056204000',
                'name' => 'BULUSAN',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56204,
            ),
            92 => 
            array (
                'id' => 666,
                'psgcCode' => '056205000',
                'name' => 'CASIGURAN',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56205,
            ),
            93 => 
            array (
                'id' => 667,
                'psgcCode' => '056206000',
                'name' => 'CASTILLA',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56206,
            ),
            94 => 
            array (
                'id' => 668,
                'psgcCode' => '056207000',
                'name' => 'DONSOL',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56207,
            ),
            95 => 
            array (
                'id' => 669,
                'psgcCode' => '056208000',
                'name' => 'GUBAT',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56208,
            ),
            96 => 
            array (
                'id' => 670,
                'psgcCode' => '056209000',
                'name' => 'IROSIN',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56209,
            ),
            97 => 
            array (
                'id' => 671,
                'psgcCode' => '056210000',
                'name' => 'JUBAN',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56210,
            ),
            98 => 
            array (
                'id' => 672,
                'psgcCode' => '056211000',
                'name' => 'MAGALLANES',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56211,
            ),
            99 => 
            array (
                'id' => 673,
                'psgcCode' => '056212000',
                'name' => 'MATNOG',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56212,
            ),
            100 => 
            array (
                'id' => 674,
                'psgcCode' => '056213000',
                'name' => 'PILAR',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56213,
            ),
            101 => 
            array (
                'id' => 675,
                'psgcCode' => '056214000',
                'name' => 'PRIETO DIAZ',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56214,
            ),
            102 => 
            array (
                'id' => 676,
                'psgcCode' => '056215000',
                'name' => 'SANTA MAGDALENA',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56215,
            ),
            103 => 
            array (
                'id' => 677,
                'psgcCode' => '056216000',
            'name' => 'CITY OF SORSOGON (Capital)',
                'region_code' => 5,
                'province_code' => 562,
                'code' => 56216,
            ),
            104 => 
            array (
                'id' => 678,
                'psgcCode' => '060401000',
                'name' => 'ALTAVAS',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60401,
            ),
            105 => 
            array (
                'id' => 679,
                'psgcCode' => '060402000',
                'name' => 'BALETE',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60402,
            ),
            106 => 
            array (
                'id' => 680,
                'psgcCode' => '060403000',
                'name' => 'BANGA',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60403,
            ),
            107 => 
            array (
                'id' => 681,
                'psgcCode' => '060404000',
                'name' => 'BATAN',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60404,
            ),
            108 => 
            array (
                'id' => 682,
                'psgcCode' => '060405000',
                'name' => 'BURUANGA',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60405,
            ),
            109 => 
            array (
                'id' => 683,
                'psgcCode' => '060406000',
                'name' => 'IBAJAY',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60406,
            ),
            110 => 
            array (
                'id' => 684,
                'psgcCode' => '060407000',
            'name' => 'KALIBO (Capital)',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60407,
            ),
            111 => 
            array (
                'id' => 685,
                'psgcCode' => '060408000',
                'name' => 'LEZO',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60408,
            ),
            112 => 
            array (
                'id' => 686,
                'psgcCode' => '060409000',
                'name' => 'LIBACAO',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60409,
            ),
            113 => 
            array (
                'id' => 687,
                'psgcCode' => '060410000',
                'name' => 'MADALAG',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60410,
            ),
            114 => 
            array (
                'id' => 688,
                'psgcCode' => '060411000',
                'name' => 'MAKATO',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60411,
            ),
            115 => 
            array (
                'id' => 689,
                'psgcCode' => '060412000',
                'name' => 'MALAY',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60412,
            ),
            116 => 
            array (
                'id' => 690,
                'psgcCode' => '060413000',
                'name' => 'MALINAO',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60413,
            ),
            117 => 
            array (
                'id' => 691,
                'psgcCode' => '060414000',
                'name' => 'NABAS',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60414,
            ),
            118 => 
            array (
                'id' => 692,
                'psgcCode' => '060415000',
                'name' => 'NEW WASHINGTON',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60415,
            ),
            119 => 
            array (
                'id' => 693,
                'psgcCode' => '060416000',
                'name' => 'NUMANCIA',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60416,
            ),
            120 => 
            array (
                'id' => 694,
                'psgcCode' => '060417000',
                'name' => 'TANGALAN',
                'region_code' => 6,
                'province_code' => 604,
                'code' => 60417,
            ),
            121 => 
            array (
                'id' => 695,
                'psgcCode' => '060601000',
                'name' => 'ANINI-Y',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60601,
            ),
            122 => 
            array (
                'id' => 696,
                'psgcCode' => '060602000',
                'name' => 'BARBAZA',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60602,
            ),
            123 => 
            array (
                'id' => 697,
                'psgcCode' => '060603000',
                'name' => 'BELISON',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60603,
            ),
            124 => 
            array (
                'id' => 698,
                'psgcCode' => '060604000',
                'name' => 'BUGASONG',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60604,
            ),
            125 => 
            array (
                'id' => 699,
                'psgcCode' => '060605000',
                'name' => 'CALUYA',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60605,
            ),
            126 => 
            array (
                'id' => 700,
                'psgcCode' => '060606000',
                'name' => 'CULASI',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60606,
            ),
            127 => 
            array (
                'id' => 701,
                'psgcCode' => '060607000',
            'name' => 'TOBIAS FORNIER (DAO)',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60607,
            ),
            128 => 
            array (
                'id' => 702,
                'psgcCode' => '060608000',
                'name' => 'HAMTIC',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60608,
            ),
            129 => 
            array (
                'id' => 703,
                'psgcCode' => '060609000',
                'name' => 'LAUA-AN',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60609,
            ),
            130 => 
            array (
                'id' => 704,
                'psgcCode' => '060610000',
                'name' => 'LIBERTAD',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60610,
            ),
            131 => 
            array (
                'id' => 705,
                'psgcCode' => '060611000',
                'name' => 'PANDAN',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60611,
            ),
            132 => 
            array (
                'id' => 706,
                'psgcCode' => '060612000',
                'name' => 'PATNONGON',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60612,
            ),
            133 => 
            array (
                'id' => 707,
                'psgcCode' => '060613000',
            'name' => 'SAN JOSE (Capital)',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60613,
            ),
            134 => 
            array (
                'id' => 708,
                'psgcCode' => '060614000',
                'name' => 'SAN REMIGIO',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60614,
            ),
            135 => 
            array (
                'id' => 709,
                'psgcCode' => '060615000',
                'name' => 'SEBASTE',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60615,
            ),
            136 => 
            array (
                'id' => 710,
                'psgcCode' => '060616000',
                'name' => 'SIBALOM',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60616,
            ),
            137 => 
            array (
                'id' => 711,
                'psgcCode' => '060617000',
                'name' => 'TIBIAO',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60617,
            ),
            138 => 
            array (
                'id' => 712,
                'psgcCode' => '060618000',
                'name' => 'VALDERRAMA',
                'region_code' => 6,
                'province_code' => 606,
                'code' => 60618,
            ),
            139 => 
            array (
                'id' => 713,
                'psgcCode' => '061901000',
                'name' => 'CUARTERO',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61901,
            ),
            140 => 
            array (
                'id' => 714,
                'psgcCode' => '061902000',
                'name' => 'DAO',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61902,
            ),
            141 => 
            array (
                'id' => 715,
                'psgcCode' => '061903000',
                'name' => 'DUMALAG',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61903,
            ),
            142 => 
            array (
                'id' => 716,
                'psgcCode' => '061904000',
                'name' => 'DUMARAO',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61904,
            ),
            143 => 
            array (
                'id' => 717,
                'psgcCode' => '061905000',
                'name' => 'IVISAN',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61905,
            ),
            144 => 
            array (
                'id' => 718,
                'psgcCode' => '061906000',
                'name' => 'JAMINDAN',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61906,
            ),
            145 => 
            array (
                'id' => 719,
                'psgcCode' => '061907000',
                'name' => 'MA-AYON',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61907,
            ),
            146 => 
            array (
                'id' => 720,
                'psgcCode' => '061908000',
                'name' => 'MAMBUSAO',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61908,
            ),
            147 => 
            array (
                'id' => 721,
                'psgcCode' => '061909000',
                'name' => 'PANAY',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61909,
            ),
            148 => 
            array (
                'id' => 722,
                'psgcCode' => '061910000',
                'name' => 'PANITAN',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61910,
            ),
            149 => 
            array (
                'id' => 723,
                'psgcCode' => '061911000',
                'name' => 'PILAR',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61911,
            ),
            150 => 
            array (
                'id' => 724,
                'psgcCode' => '061912000',
                'name' => 'PONTEVEDRA',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61912,
            ),
            151 => 
            array (
                'id' => 725,
                'psgcCode' => '061913000',
                'name' => 'PRESIDENT ROXAS',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61913,
            ),
            152 => 
            array (
                'id' => 726,
                'psgcCode' => '061914000',
            'name' => 'ROXAS CITY (Capital)',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61914,
            ),
            153 => 
            array (
                'id' => 727,
                'psgcCode' => '061915000',
                'name' => 'SAPI-AN',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61915,
            ),
            154 => 
            array (
                'id' => 728,
                'psgcCode' => '061916000',
                'name' => 'SIGMA',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61916,
            ),
            155 => 
            array (
                'id' => 729,
                'psgcCode' => '061917000',
                'name' => 'TAPAZ',
                'region_code' => 6,
                'province_code' => 619,
                'code' => 61917,
            ),
            156 => 
            array (
                'id' => 730,
                'psgcCode' => '063001000',
                'name' => 'AJUY',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63001,
            ),
            157 => 
            array (
                'id' => 731,
                'psgcCode' => '063002000',
                'name' => 'ALIMODIAN',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63002,
            ),
            158 => 
            array (
                'id' => 732,
                'psgcCode' => '063003000',
                'name' => 'ANILAO',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63003,
            ),
            159 => 
            array (
                'id' => 733,
                'psgcCode' => '063004000',
                'name' => 'BADIANGAN',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63004,
            ),
            160 => 
            array (
                'id' => 734,
                'psgcCode' => '063005000',
                'name' => 'BALASAN',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63005,
            ),
            161 => 
            array (
                'id' => 735,
                'psgcCode' => '063006000',
                'name' => 'BANATE',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63006,
            ),
            162 => 
            array (
                'id' => 736,
                'psgcCode' => '063007000',
                'name' => 'BAROTAC NUEVO',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63007,
            ),
            163 => 
            array (
                'id' => 737,
                'psgcCode' => '063008000',
                'name' => 'BAROTAC VIEJO',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63008,
            ),
            164 => 
            array (
                'id' => 738,
                'psgcCode' => '063009000',
                'name' => 'BATAD',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63009,
            ),
            165 => 
            array (
                'id' => 739,
                'psgcCode' => '063010000',
                'name' => 'BINGAWAN',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63010,
            ),
            166 => 
            array (
                'id' => 740,
                'psgcCode' => '063012000',
                'name' => 'CABATUAN',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63012,
            ),
            167 => 
            array (
                'id' => 741,
                'psgcCode' => '063013000',
                'name' => 'CALINOG',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63013,
            ),
            168 => 
            array (
                'id' => 742,
                'psgcCode' => '063014000',
                'name' => 'CARLES',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63014,
            ),
            169 => 
            array (
                'id' => 743,
                'psgcCode' => '063015000',
                'name' => 'CONCEPCION',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63015,
            ),
            170 => 
            array (
                'id' => 744,
                'psgcCode' => '063016000',
                'name' => 'DINGLE',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63016,
            ),
            171 => 
            array (
                'id' => 745,
                'psgcCode' => '063017000',
                'name' => 'DUEÑAS',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63017,
            ),
            172 => 
            array (
                'id' => 746,
                'psgcCode' => '063018000',
                'name' => 'DUMANGAS',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63018,
            ),
            173 => 
            array (
                'id' => 747,
                'psgcCode' => '063019000',
                'name' => 'ESTANCIA',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63019,
            ),
            174 => 
            array (
                'id' => 748,
                'psgcCode' => '063020000',
                'name' => 'GUIMBAL',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63020,
            ),
            175 => 
            array (
                'id' => 749,
                'psgcCode' => '063021000',
                'name' => 'IGBARAS',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63021,
            ),
            176 => 
            array (
                'id' => 750,
                'psgcCode' => '063022000',
            'name' => 'ILOILO CITY (Capital)',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63022,
            ),
            177 => 
            array (
                'id' => 751,
                'psgcCode' => '063023000',
                'name' => 'JANIUAY',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63023,
            ),
            178 => 
            array (
                'id' => 752,
                'psgcCode' => '063025000',
                'name' => 'LAMBUNAO',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63025,
            ),
            179 => 
            array (
                'id' => 753,
                'psgcCode' => '063026000',
                'name' => 'LEGANES',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63026,
            ),
            180 => 
            array (
                'id' => 754,
                'psgcCode' => '063027000',
                'name' => 'LEMERY',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63027,
            ),
            181 => 
            array (
                'id' => 755,
                'psgcCode' => '063028000',
                'name' => 'LEON',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63028,
            ),
            182 => 
            array (
                'id' => 756,
                'psgcCode' => '063029000',
                'name' => 'MAASIN',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63029,
            ),
            183 => 
            array (
                'id' => 757,
                'psgcCode' => '063030000',
                'name' => 'MIAGAO',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63030,
            ),
            184 => 
            array (
                'id' => 758,
                'psgcCode' => '063031000',
                'name' => 'MINA',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63031,
            ),
            185 => 
            array (
                'id' => 759,
                'psgcCode' => '063032000',
                'name' => 'NEW LUCENA',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63032,
            ),
            186 => 
            array (
                'id' => 760,
                'psgcCode' => '063034000',
                'name' => 'OTON',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63034,
            ),
            187 => 
            array (
                'id' => 761,
                'psgcCode' => '063035000',
                'name' => 'CITY OF PASSI',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63035,
            ),
            188 => 
            array (
                'id' => 762,
                'psgcCode' => '063036000',
                'name' => 'PAVIA',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63036,
            ),
            189 => 
            array (
                'id' => 763,
                'psgcCode' => '063037000',
                'name' => 'POTOTAN',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63037,
            ),
            190 => 
            array (
                'id' => 764,
                'psgcCode' => '063038000',
                'name' => 'SAN DIONISIO',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63038,
            ),
            191 => 
            array (
                'id' => 765,
                'psgcCode' => '063039000',
                'name' => 'SAN ENRIQUE',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63039,
            ),
            192 => 
            array (
                'id' => 766,
                'psgcCode' => '063040000',
                'name' => 'SAN JOAQUIN',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63040,
            ),
            193 => 
            array (
                'id' => 767,
                'psgcCode' => '063041000',
                'name' => 'SAN MIGUEL',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63041,
            ),
            194 => 
            array (
                'id' => 768,
                'psgcCode' => '063042000',
                'name' => 'SAN RAFAEL',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63042,
            ),
            195 => 
            array (
                'id' => 769,
                'psgcCode' => '063043000',
                'name' => 'SANTA BARBARA',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63043,
            ),
            196 => 
            array (
                'id' => 770,
                'psgcCode' => '063044000',
                'name' => 'SARA',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63044,
            ),
            197 => 
            array (
                'id' => 771,
                'psgcCode' => '063045000',
                'name' => 'TIGBAUAN',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63045,
            ),
            198 => 
            array (
                'id' => 772,
                'psgcCode' => '063046000',
                'name' => 'TUBUNGAN',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63046,
            ),
            199 => 
            array (
                'id' => 773,
                'psgcCode' => '063047000',
                'name' => 'ZARRAGA',
                'region_code' => 6,
                'province_code' => 630,
                'code' => 63047,
            ),
            200 => 
            array (
                'id' => 774,
                'psgcCode' => '064501000',
            'name' => 'BACOLOD CITY (Capital)',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64501,
            ),
            201 => 
            array (
                'id' => 775,
                'psgcCode' => '064502000',
                'name' => 'BAGO CITY',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64502,
            ),
            202 => 
            array (
                'id' => 776,
                'psgcCode' => '064503000',
                'name' => 'BINALBAGAN',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64503,
            ),
            203 => 
            array (
                'id' => 777,
                'psgcCode' => '064504000',
                'name' => 'CADIZ CITY',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64504,
            ),
            204 => 
            array (
                'id' => 778,
                'psgcCode' => '064505000',
                'name' => 'CALATRAVA',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64505,
            ),
            205 => 
            array (
                'id' => 779,
                'psgcCode' => '064506000',
                'name' => 'CANDONI',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64506,
            ),
            206 => 
            array (
                'id' => 780,
                'psgcCode' => '064507000',
                'name' => 'CAUAYAN',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64507,
            ),
            207 => 
            array (
                'id' => 781,
                'psgcCode' => '064508000',
            'name' => 'ENRIQUE B. MAGALONA (SARAVIA)',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64508,
            ),
            208 => 
            array (
                'id' => 782,
                'psgcCode' => '064509000',
                'name' => 'CITY OF ESCALANTE',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64509,
            ),
            209 => 
            array (
                'id' => 783,
                'psgcCode' => '064510000',
                'name' => 'CITY OF HIMAMAYLAN',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64510,
            ),
            210 => 
            array (
                'id' => 784,
                'psgcCode' => '064511000',
                'name' => 'HINIGARAN',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64511,
            ),
            211 => 
            array (
                'id' => 785,
                'psgcCode' => '064512000',
            'name' => 'HINOBA-AN (ASIA)',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64512,
            ),
            212 => 
            array (
                'id' => 786,
                'psgcCode' => '064513000',
                'name' => 'ILOG',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64513,
            ),
            213 => 
            array (
                'id' => 787,
                'psgcCode' => '064514000',
                'name' => 'ISABELA',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64514,
            ),
            214 => 
            array (
                'id' => 788,
                'psgcCode' => '064515000',
                'name' => 'CITY OF KABANKALAN',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64515,
            ),
            215 => 
            array (
                'id' => 789,
                'psgcCode' => '064516000',
                'name' => 'LA CARLOTA CITY',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64516,
            ),
            216 => 
            array (
                'id' => 790,
                'psgcCode' => '064517000',
                'name' => 'LA CASTELLANA',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64517,
            ),
            217 => 
            array (
                'id' => 791,
                'psgcCode' => '064518000',
                'name' => 'MANAPLA',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64518,
            ),
            218 => 
            array (
                'id' => 792,
                'psgcCode' => '064519000',
            'name' => 'MOISES PADILLA (MAGALLON)',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64519,
            ),
            219 => 
            array (
                'id' => 793,
                'psgcCode' => '064520000',
                'name' => 'MURCIA',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64520,
            ),
            220 => 
            array (
                'id' => 794,
                'psgcCode' => '064521000',
                'name' => 'PONTEVEDRA',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64521,
            ),
            221 => 
            array (
                'id' => 795,
                'psgcCode' => '064522000',
                'name' => 'PULUPANDAN',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64522,
            ),
            222 => 
            array (
                'id' => 796,
                'psgcCode' => '064523000',
                'name' => 'SAGAY CITY',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64523,
            ),
            223 => 
            array (
                'id' => 797,
                'psgcCode' => '064524000',
                'name' => 'SAN CARLOS CITY',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64524,
            ),
            224 => 
            array (
                'id' => 798,
                'psgcCode' => '064525000',
                'name' => 'SAN ENRIQUE',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64525,
            ),
            225 => 
            array (
                'id' => 799,
                'psgcCode' => '064526000',
                'name' => 'SILAY CITY',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64526,
            ),
            226 => 
            array (
                'id' => 800,
                'psgcCode' => '064527000',
                'name' => 'CITY OF SIPALAY',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64527,
            ),
            227 => 
            array (
                'id' => 801,
                'psgcCode' => '064528000',
                'name' => 'CITY OF TALISAY',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64528,
            ),
            228 => 
            array (
                'id' => 802,
                'psgcCode' => '064529000',
                'name' => 'TOBOSO',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64529,
            ),
            229 => 
            array (
                'id' => 803,
                'psgcCode' => '064530000',
                'name' => 'VALLADOLID',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64530,
            ),
            230 => 
            array (
                'id' => 804,
                'psgcCode' => '064531000',
                'name' => 'CITY OF VICTORIAS',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64531,
            ),
            231 => 
            array (
                'id' => 805,
                'psgcCode' => '064532000',
                'name' => 'SALVADOR BENEDICTO',
                'region_code' => 6,
                'province_code' => 645,
                'code' => 64532,
            ),
            232 => 
            array (
                'id' => 806,
                'psgcCode' => '067901000',
                'name' => 'BUENAVISTA',
                'region_code' => 6,
                'province_code' => 679,
                'code' => 67901,
            ),
            233 => 
            array (
                'id' => 807,
                'psgcCode' => '067902000',
            'name' => 'JORDAN (Capital)',
                'region_code' => 6,
                'province_code' => 679,
                'code' => 67902,
            ),
            234 => 
            array (
                'id' => 808,
                'psgcCode' => '067903000',
                'name' => 'NUEVA VALENCIA',
                'region_code' => 6,
                'province_code' => 679,
                'code' => 67903,
            ),
            235 => 
            array (
                'id' => 809,
                'psgcCode' => '067904000',
                'name' => 'SAN LORENZO',
                'region_code' => 6,
                'province_code' => 679,
                'code' => 67904,
            ),
            236 => 
            array (
                'id' => 810,
                'psgcCode' => '067905000',
                'name' => 'SIBUNAG',
                'region_code' => 6,
                'province_code' => 679,
                'code' => 67905,
            ),
            237 => 
            array (
                'id' => 811,
                'psgcCode' => '071201000',
                'name' => 'ALBURQUERQUE',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71201,
            ),
            238 => 
            array (
                'id' => 812,
                'psgcCode' => '071202000',
                'name' => 'ALICIA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71202,
            ),
            239 => 
            array (
                'id' => 813,
                'psgcCode' => '071203000',
                'name' => 'ANDA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71203,
            ),
            240 => 
            array (
                'id' => 814,
                'psgcCode' => '071204000',
                'name' => 'ANTEQUERA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71204,
            ),
            241 => 
            array (
                'id' => 815,
                'psgcCode' => '071205000',
                'name' => 'BACLAYON',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71205,
            ),
            242 => 
            array (
                'id' => 816,
                'psgcCode' => '071206000',
                'name' => 'BALILIHAN',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71206,
            ),
            243 => 
            array (
                'id' => 817,
                'psgcCode' => '071207000',
                'name' => 'BATUAN',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71207,
            ),
            244 => 
            array (
                'id' => 818,
                'psgcCode' => '071208000',
                'name' => 'BILAR',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71208,
            ),
            245 => 
            array (
                'id' => 819,
                'psgcCode' => '071209000',
                'name' => 'BUENAVISTA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71209,
            ),
            246 => 
            array (
                'id' => 820,
                'psgcCode' => '071210000',
                'name' => 'CALAPE',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71210,
            ),
            247 => 
            array (
                'id' => 821,
                'psgcCode' => '071211000',
                'name' => 'CANDIJAY',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71211,
            ),
            248 => 
            array (
                'id' => 822,
                'psgcCode' => '071212000',
                'name' => 'CARMEN',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71212,
            ),
            249 => 
            array (
                'id' => 823,
                'psgcCode' => '071213000',
                'name' => 'CATIGBIAN',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71213,
            ),
            250 => 
            array (
                'id' => 824,
                'psgcCode' => '071214000',
                'name' => 'CLARIN',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71214,
            ),
            251 => 
            array (
                'id' => 825,
                'psgcCode' => '071215000',
                'name' => 'CORELLA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71215,
            ),
            252 => 
            array (
                'id' => 826,
                'psgcCode' => '071216000',
                'name' => 'CORTES',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71216,
            ),
            253 => 
            array (
                'id' => 827,
                'psgcCode' => '071217000',
                'name' => 'DAGOHOY',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71217,
            ),
            254 => 
            array (
                'id' => 828,
                'psgcCode' => '071218000',
                'name' => 'DANAO',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71218,
            ),
            255 => 
            array (
                'id' => 829,
                'psgcCode' => '071219000',
                'name' => 'DAUIS',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71219,
            ),
            256 => 
            array (
                'id' => 830,
                'psgcCode' => '071220000',
                'name' => 'DIMIAO',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71220,
            ),
            257 => 
            array (
                'id' => 831,
                'psgcCode' => '071221000',
                'name' => 'DUERO',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71221,
            ),
            258 => 
            array (
                'id' => 832,
                'psgcCode' => '071222000',
                'name' => 'GARCIA HERNANDEZ',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71222,
            ),
            259 => 
            array (
                'id' => 833,
                'psgcCode' => '071223000',
                'name' => 'GUINDULMAN',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71223,
            ),
            260 => 
            array (
                'id' => 834,
                'psgcCode' => '071224000',
                'name' => 'INABANGA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71224,
            ),
            261 => 
            array (
                'id' => 835,
                'psgcCode' => '071225000',
                'name' => 'JAGNA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71225,
            ),
            262 => 
            array (
                'id' => 836,
                'psgcCode' => '071226000',
                'name' => 'JETAFE',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71226,
            ),
            263 => 
            array (
                'id' => 837,
                'psgcCode' => '071227000',
                'name' => 'LILA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71227,
            ),
            264 => 
            array (
                'id' => 838,
                'psgcCode' => '071228000',
                'name' => 'LOAY',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71228,
            ),
            265 => 
            array (
                'id' => 839,
                'psgcCode' => '071229000',
                'name' => 'LOBOC',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71229,
            ),
            266 => 
            array (
                'id' => 840,
                'psgcCode' => '071230000',
                'name' => 'LOON',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71230,
            ),
            267 => 
            array (
                'id' => 841,
                'psgcCode' => '071231000',
                'name' => 'MABINI',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71231,
            ),
            268 => 
            array (
                'id' => 842,
                'psgcCode' => '071232000',
                'name' => 'MARIBOJOC',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71232,
            ),
            269 => 
            array (
                'id' => 843,
                'psgcCode' => '071233000',
                'name' => 'PANGLAO',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71233,
            ),
            270 => 
            array (
                'id' => 844,
                'psgcCode' => '071234000',
                'name' => 'PILAR',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71234,
            ),
            271 => 
            array (
                'id' => 845,
                'psgcCode' => '071235000',
            'name' => 'PRES. CARLOS P. GARCIA (PITOGO)',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71235,
            ),
            272 => 
            array (
                'id' => 846,
                'psgcCode' => '071236000',
            'name' => 'SAGBAYAN (BORJA)',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71236,
            ),
            273 => 
            array (
                'id' => 847,
                'psgcCode' => '071237000',
                'name' => 'SAN ISIDRO',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71237,
            ),
            274 => 
            array (
                'id' => 848,
                'psgcCode' => '071238000',
                'name' => 'SAN MIGUEL',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71238,
            ),
            275 => 
            array (
                'id' => 849,
                'psgcCode' => '071239000',
                'name' => 'SEVILLA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71239,
            ),
            276 => 
            array (
                'id' => 850,
                'psgcCode' => '071240000',
                'name' => 'SIERRA BULLONES',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71240,
            ),
            277 => 
            array (
                'id' => 851,
                'psgcCode' => '071241000',
                'name' => 'SIKATUNA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71241,
            ),
            278 => 
            array (
                'id' => 852,
                'psgcCode' => '071242000',
            'name' => 'TAGBILARAN CITY (Capital)',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71242,
            ),
            279 => 
            array (
                'id' => 853,
                'psgcCode' => '071243000',
                'name' => 'TALIBON',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71243,
            ),
            280 => 
            array (
                'id' => 854,
                'psgcCode' => '071244000',
                'name' => 'TRINIDAD',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71244,
            ),
            281 => 
            array (
                'id' => 855,
                'psgcCode' => '071245000',
                'name' => 'TUBIGON',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71245,
            ),
            282 => 
            array (
                'id' => 856,
                'psgcCode' => '071246000',
                'name' => 'UBAY',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71246,
            ),
            283 => 
            array (
                'id' => 857,
                'psgcCode' => '071247000',
                'name' => 'VALENCIA',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71247,
            ),
            284 => 
            array (
                'id' => 858,
                'psgcCode' => '071248000',
                'name' => 'BIEN UNIDO',
                'region_code' => 7,
                'province_code' => 712,
                'code' => 71248,
            ),
            285 => 
            array (
                'id' => 859,
                'psgcCode' => '072201000',
                'name' => 'ALCANTARA',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72201,
            ),
            286 => 
            array (
                'id' => 860,
                'psgcCode' => '072202000',
                'name' => 'ALCOY',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72202,
            ),
            287 => 
            array (
                'id' => 861,
                'psgcCode' => '072203000',
                'name' => 'ALEGRIA',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72203,
            ),
            288 => 
            array (
                'id' => 862,
                'psgcCode' => '072204000',
                'name' => 'ALOGUINSAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72204,
            ),
            289 => 
            array (
                'id' => 863,
                'psgcCode' => '072205000',
                'name' => 'ARGAO',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72205,
            ),
            290 => 
            array (
                'id' => 864,
                'psgcCode' => '072206000',
                'name' => 'ASTURIAS',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72206,
            ),
            291 => 
            array (
                'id' => 865,
                'psgcCode' => '072207000',
                'name' => 'BADIAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72207,
            ),
            292 => 
            array (
                'id' => 866,
                'psgcCode' => '072208000',
                'name' => 'BALAMBAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72208,
            ),
            293 => 
            array (
                'id' => 867,
                'psgcCode' => '072209000',
                'name' => 'BANTAYAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72209,
            ),
            294 => 
            array (
                'id' => 868,
                'psgcCode' => '072210000',
                'name' => 'BARILI',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72210,
            ),
            295 => 
            array (
                'id' => 869,
                'psgcCode' => '072211000',
                'name' => 'CITY OF BOGO',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72211,
            ),
            296 => 
            array (
                'id' => 870,
                'psgcCode' => '072212000',
                'name' => 'BOLJOON',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72212,
            ),
            297 => 
            array (
                'id' => 871,
                'psgcCode' => '072213000',
                'name' => 'BORBON',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72213,
            ),
            298 => 
            array (
                'id' => 872,
                'psgcCode' => '072214000',
                'name' => 'CITY OF CARCAR',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72214,
            ),
            299 => 
            array (
                'id' => 873,
                'psgcCode' => '072215000',
                'name' => 'CARMEN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72215,
            ),
            300 => 
            array (
                'id' => 874,
                'psgcCode' => '072216000',
                'name' => 'CATMON',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72216,
            ),
            301 => 
            array (
                'id' => 875,
                'psgcCode' => '072217000',
            'name' => 'CEBU CITY (Capital)',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72217,
            ),
            302 => 
            array (
                'id' => 876,
                'psgcCode' => '072218000',
                'name' => 'COMPOSTELA',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72218,
            ),
            303 => 
            array (
                'id' => 877,
                'psgcCode' => '072219000',
                'name' => 'CONSOLACION',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72219,
            ),
            304 => 
            array (
                'id' => 878,
                'psgcCode' => '072220000',
                'name' => 'CORDOVA',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72220,
            ),
            305 => 
            array (
                'id' => 879,
                'psgcCode' => '072221000',
                'name' => 'DAANBANTAYAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72221,
            ),
            306 => 
            array (
                'id' => 880,
                'psgcCode' => '072222000',
                'name' => 'DALAGUETE',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72222,
            ),
            307 => 
            array (
                'id' => 881,
                'psgcCode' => '072223000',
                'name' => 'DANAO CITY',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72223,
            ),
            308 => 
            array (
                'id' => 882,
                'psgcCode' => '072224000',
                'name' => 'DUMANJUG',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72224,
            ),
            309 => 
            array (
                'id' => 883,
                'psgcCode' => '072225000',
                'name' => 'GINATILAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72225,
            ),
            310 => 
            array (
                'id' => 884,
                'psgcCode' => '072226000',
            'name' => 'LAPU-LAPU CITY (OPON)',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72226,
            ),
            311 => 
            array (
                'id' => 885,
                'psgcCode' => '072227000',
                'name' => 'LILOAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72227,
            ),
            312 => 
            array (
                'id' => 886,
                'psgcCode' => '072228000',
                'name' => 'MADRIDEJOS',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72228,
            ),
            313 => 
            array (
                'id' => 887,
                'psgcCode' => '072229000',
                'name' => 'MALABUYOC',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72229,
            ),
            314 => 
            array (
                'id' => 888,
                'psgcCode' => '072230000',
                'name' => 'MANDAUE CITY',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72230,
            ),
            315 => 
            array (
                'id' => 889,
                'psgcCode' => '072231000',
                'name' => 'MEDELLIN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72231,
            ),
            316 => 
            array (
                'id' => 890,
                'psgcCode' => '072232000',
                'name' => 'MINGLANILLA',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72232,
            ),
            317 => 
            array (
                'id' => 891,
                'psgcCode' => '072233000',
                'name' => 'MOALBOAL',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72233,
            ),
            318 => 
            array (
                'id' => 892,
                'psgcCode' => '072234000',
                'name' => 'CITY OF NAGA',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72234,
            ),
            319 => 
            array (
                'id' => 893,
                'psgcCode' => '072235000',
                'name' => 'OSLOB',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72235,
            ),
            320 => 
            array (
                'id' => 894,
                'psgcCode' => '072236000',
                'name' => 'PILAR',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72236,
            ),
            321 => 
            array (
                'id' => 895,
                'psgcCode' => '072237000',
                'name' => 'PINAMUNGAHAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72237,
            ),
            322 => 
            array (
                'id' => 896,
                'psgcCode' => '072238000',
                'name' => 'PORO',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72238,
            ),
            323 => 
            array (
                'id' => 897,
                'psgcCode' => '072239000',
                'name' => 'RONDA',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72239,
            ),
            324 => 
            array (
                'id' => 898,
                'psgcCode' => '072240000',
                'name' => 'SAMBOAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72240,
            ),
            325 => 
            array (
                'id' => 899,
                'psgcCode' => '072241000',
                'name' => 'SAN FERNANDO',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72241,
            ),
            326 => 
            array (
                'id' => 900,
                'psgcCode' => '072242000',
                'name' => 'SAN FRANCISCO',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72242,
            ),
            327 => 
            array (
                'id' => 901,
                'psgcCode' => '072243000',
                'name' => 'SAN REMIGIO',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72243,
            ),
            328 => 
            array (
                'id' => 902,
                'psgcCode' => '072244000',
                'name' => 'SANTA FE',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72244,
            ),
            329 => 
            array (
                'id' => 903,
                'psgcCode' => '072245000',
                'name' => 'SANTANDER',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72245,
            ),
            330 => 
            array (
                'id' => 904,
                'psgcCode' => '072246000',
                'name' => 'SIBONGA',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72246,
            ),
            331 => 
            array (
                'id' => 905,
                'psgcCode' => '072247000',
                'name' => 'SOGOD',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72247,
            ),
            332 => 
            array (
                'id' => 906,
                'psgcCode' => '072248000',
                'name' => 'TABOGON',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72248,
            ),
            333 => 
            array (
                'id' => 907,
                'psgcCode' => '072249000',
                'name' => 'TABUELAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72249,
            ),
            334 => 
            array (
                'id' => 908,
                'psgcCode' => '072250000',
                'name' => 'CITY OF TALISAY',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72250,
            ),
            335 => 
            array (
                'id' => 909,
                'psgcCode' => '072251000',
                'name' => 'TOLEDO CITY',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72251,
            ),
            336 => 
            array (
                'id' => 910,
                'psgcCode' => '072252000',
                'name' => 'TUBURAN',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72252,
            ),
            337 => 
            array (
                'id' => 911,
                'psgcCode' => '072253000',
                'name' => 'TUDELA',
                'region_code' => 7,
                'province_code' => 722,
                'code' => 72253,
            ),
            338 => 
            array (
                'id' => 912,
                'psgcCode' => '074601000',
            'name' => 'AMLAN (AYUQUITAN)',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74601,
            ),
            339 => 
            array (
                'id' => 913,
                'psgcCode' => '074602000',
                'name' => 'AYUNGON',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74602,
            ),
            340 => 
            array (
                'id' => 914,
                'psgcCode' => '074603000',
                'name' => 'BACONG',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74603,
            ),
            341 => 
            array (
                'id' => 915,
                'psgcCode' => '074604000',
                'name' => 'BAIS CITY',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74604,
            ),
            342 => 
            array (
                'id' => 916,
                'psgcCode' => '074605000',
                'name' => 'BASAY',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74605,
            ),
            343 => 
            array (
                'id' => 917,
                'psgcCode' => '074606000',
            'name' => 'CITY OF BAYAWAN (TULONG)',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74606,
            ),
            344 => 
            array (
                'id' => 918,
                'psgcCode' => '074607000',
            'name' => 'BINDOY (PAYABON)',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74607,
            ),
            345 => 
            array (
                'id' => 919,
                'psgcCode' => '074608000',
                'name' => 'CANLAON CITY',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74608,
            ),
            346 => 
            array (
                'id' => 920,
                'psgcCode' => '074609000',
                'name' => 'DAUIN',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74609,
            ),
            347 => 
            array (
                'id' => 921,
                'psgcCode' => '074610000',
            'name' => 'DUMAGUETE CITY (Capital)',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74610,
            ),
            348 => 
            array (
                'id' => 922,
                'psgcCode' => '074611000',
                'name' => 'CITY OF GUIHULNGAN',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74611,
            ),
            349 => 
            array (
                'id' => 923,
                'psgcCode' => '074612000',
                'name' => 'JIMALALUD',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74612,
            ),
            350 => 
            array (
                'id' => 924,
                'psgcCode' => '074613000',
                'name' => 'LA LIBERTAD',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74613,
            ),
            351 => 
            array (
                'id' => 925,
                'psgcCode' => '074614000',
                'name' => 'MABINAY',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74614,
            ),
            352 => 
            array (
                'id' => 926,
                'psgcCode' => '074615000',
                'name' => 'MANJUYOD',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74615,
            ),
            353 => 
            array (
                'id' => 927,
                'psgcCode' => '074616000',
                'name' => 'PAMPLONA',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74616,
            ),
            354 => 
            array (
                'id' => 928,
                'psgcCode' => '074617000',
                'name' => 'SAN JOSE',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74617,
            ),
            355 => 
            array (
                'id' => 929,
                'psgcCode' => '074618000',
                'name' => 'SANTA CATALINA',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74618,
            ),
            356 => 
            array (
                'id' => 930,
                'psgcCode' => '074619000',
                'name' => 'SIATON',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74619,
            ),
            357 => 
            array (
                'id' => 931,
                'psgcCode' => '074620000',
                'name' => 'SIBULAN',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74620,
            ),
            358 => 
            array (
                'id' => 932,
                'psgcCode' => '074621000',
                'name' => 'CITY OF TANJAY',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74621,
            ),
            359 => 
            array (
                'id' => 933,
                'psgcCode' => '074622000',
                'name' => 'TAYASAN',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74622,
            ),
            360 => 
            array (
                'id' => 934,
                'psgcCode' => '074623000',
            'name' => 'VALENCIA (LUZURRIAGA)',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74623,
            ),
            361 => 
            array (
                'id' => 935,
                'psgcCode' => '074624000',
                'name' => 'VALLEHERMOSO',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74624,
            ),
            362 => 
            array (
                'id' => 936,
                'psgcCode' => '074625000',
                'name' => 'ZAMBOANGUITA',
                'region_code' => 7,
                'province_code' => 746,
                'code' => 74625,
            ),
            363 => 
            array (
                'id' => 937,
                'psgcCode' => '076101000',
                'name' => 'ENRIQUE VILLANUEVA',
                'region_code' => 7,
                'province_code' => 761,
                'code' => 76101,
            ),
            364 => 
            array (
                'id' => 938,
                'psgcCode' => '076102000',
                'name' => 'LARENA',
                'region_code' => 7,
                'province_code' => 761,
                'code' => 76102,
            ),
            365 => 
            array (
                'id' => 939,
                'psgcCode' => '076103000',
                'name' => 'LAZI',
                'region_code' => 7,
                'province_code' => 761,
                'code' => 76103,
            ),
            366 => 
            array (
                'id' => 940,
                'psgcCode' => '076104000',
                'name' => 'MARIA',
                'region_code' => 7,
                'province_code' => 761,
                'code' => 76104,
            ),
            367 => 
            array (
                'id' => 941,
                'psgcCode' => '076105000',
                'name' => 'SAN JUAN',
                'region_code' => 7,
                'province_code' => 761,
                'code' => 76105,
            ),
            368 => 
            array (
                'id' => 942,
                'psgcCode' => '076106000',
            'name' => 'SIQUIJOR (Capital)',
                'region_code' => 7,
                'province_code' => 761,
                'code' => 76106,
            ),
            369 => 
            array (
                'id' => 943,
                'psgcCode' => '082601000',
                'name' => 'ARTECHE',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82601,
            ),
            370 => 
            array (
                'id' => 944,
                'psgcCode' => '082602000',
                'name' => 'BALANGIGA',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82602,
            ),
            371 => 
            array (
                'id' => 945,
                'psgcCode' => '082603000',
                'name' => 'BALANGKAYAN',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82603,
            ),
            372 => 
            array (
                'id' => 946,
                'psgcCode' => '082604000',
            'name' => 'CITY OF BORONGAN (Capital)',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82604,
            ),
            373 => 
            array (
                'id' => 947,
                'psgcCode' => '082605000',
                'name' => 'CAN-AVID',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82605,
            ),
            374 => 
            array (
                'id' => 948,
                'psgcCode' => '082606000',
                'name' => 'DOLORES',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82606,
            ),
            375 => 
            array (
                'id' => 949,
                'psgcCode' => '082607000',
                'name' => 'GENERAL MACARTHUR',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82607,
            ),
            376 => 
            array (
                'id' => 950,
                'psgcCode' => '082608000',
                'name' => 'GIPORLOS',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82608,
            ),
            377 => 
            array (
                'id' => 951,
                'psgcCode' => '082609000',
                'name' => 'GUIUAN',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82609,
            ),
            378 => 
            array (
                'id' => 952,
                'psgcCode' => '082610000',
                'name' => 'HERNANI',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82610,
            ),
            379 => 
            array (
                'id' => 953,
                'psgcCode' => '082611000',
                'name' => 'JIPAPAD',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82611,
            ),
            380 => 
            array (
                'id' => 954,
                'psgcCode' => '082612000',
                'name' => 'LAWAAN',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82612,
            ),
            381 => 
            array (
                'id' => 955,
                'psgcCode' => '082613000',
                'name' => 'LLORENTE',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82613,
            ),
            382 => 
            array (
                'id' => 956,
                'psgcCode' => '082614000',
                'name' => 'MASLOG',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82614,
            ),
            383 => 
            array (
                'id' => 957,
                'psgcCode' => '082615000',
                'name' => 'MAYDOLONG',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82615,
            ),
            384 => 
            array (
                'id' => 958,
                'psgcCode' => '082616000',
                'name' => 'MERCEDES',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82616,
            ),
            385 => 
            array (
                'id' => 959,
                'psgcCode' => '082617000',
                'name' => 'ORAS',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82617,
            ),
            386 => 
            array (
                'id' => 960,
                'psgcCode' => '082618000',
                'name' => 'QUINAPONDAN',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82618,
            ),
            387 => 
            array (
                'id' => 961,
                'psgcCode' => '082619000',
                'name' => 'SALCEDO',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82619,
            ),
            388 => 
            array (
                'id' => 962,
                'psgcCode' => '082620000',
                'name' => 'SAN JULIAN',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82620,
            ),
            389 => 
            array (
                'id' => 963,
                'psgcCode' => '082621000',
                'name' => 'SAN POLICARPO',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82621,
            ),
            390 => 
            array (
                'id' => 964,
                'psgcCode' => '082622000',
                'name' => 'SULAT',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82622,
            ),
            391 => 
            array (
                'id' => 965,
                'psgcCode' => '082623000',
                'name' => 'TAFT',
                'region_code' => 8,
                'province_code' => 826,
                'code' => 82623,
            ),
            392 => 
            array (
                'id' => 966,
                'psgcCode' => '083701000',
                'name' => 'ABUYOG',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83701,
            ),
            393 => 
            array (
                'id' => 967,
                'psgcCode' => '083702000',
                'name' => 'ALANGALANG',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83702,
            ),
            394 => 
            array (
                'id' => 968,
                'psgcCode' => '083703000',
                'name' => 'ALBUERA',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83703,
            ),
            395 => 
            array (
                'id' => 969,
                'psgcCode' => '083705000',
                'name' => 'BABATNGON',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83705,
            ),
            396 => 
            array (
                'id' => 970,
                'psgcCode' => '083706000',
                'name' => 'BARUGO',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83706,
            ),
            397 => 
            array (
                'id' => 971,
                'psgcCode' => '083707000',
                'name' => 'BATO',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83707,
            ),
            398 => 
            array (
                'id' => 972,
                'psgcCode' => '083708000',
                'name' => 'CITY OF BAYBAY',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83708,
            ),
            399 => 
            array (
                'id' => 973,
                'psgcCode' => '083710000',
                'name' => 'BURAUEN',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83710,
            ),
            400 => 
            array (
                'id' => 974,
                'psgcCode' => '083713000',
                'name' => 'CALUBIAN',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83713,
            ),
            401 => 
            array (
                'id' => 975,
                'psgcCode' => '083714000',
                'name' => 'CAPOOCAN',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83714,
            ),
            402 => 
            array (
                'id' => 976,
                'psgcCode' => '083715000',
                'name' => 'CARIGARA',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83715,
            ),
            403 => 
            array (
                'id' => 977,
                'psgcCode' => '083717000',
                'name' => 'DAGAMI',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83717,
            ),
            404 => 
            array (
                'id' => 978,
                'psgcCode' => '083718000',
                'name' => 'DULAG',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83718,
            ),
            405 => 
            array (
                'id' => 979,
                'psgcCode' => '083719000',
                'name' => 'HILONGOS',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83719,
            ),
            406 => 
            array (
                'id' => 980,
                'psgcCode' => '083720000',
                'name' => 'HINDANG',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83720,
            ),
            407 => 
            array (
                'id' => 981,
                'psgcCode' => '083721000',
                'name' => 'INOPACAN',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83721,
            ),
            408 => 
            array (
                'id' => 982,
                'psgcCode' => '083722000',
                'name' => 'ISABEL',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83722,
            ),
            409 => 
            array (
                'id' => 983,
                'psgcCode' => '083723000',
                'name' => 'JARO',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83723,
            ),
            410 => 
            array (
                'id' => 984,
                'psgcCode' => '083724000',
            'name' => 'JAVIER (BUGHO)',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83724,
            ),
            411 => 
            array (
                'id' => 985,
                'psgcCode' => '083725000',
                'name' => 'JULITA',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83725,
            ),
            412 => 
            array (
                'id' => 986,
                'psgcCode' => '083726000',
                'name' => 'KANANGA',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83726,
            ),
            413 => 
            array (
                'id' => 987,
                'psgcCode' => '083728000',
                'name' => 'LA PAZ',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83728,
            ),
            414 => 
            array (
                'id' => 988,
                'psgcCode' => '083729000',
                'name' => 'LEYTE',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83729,
            ),
            415 => 
            array (
                'id' => 989,
                'psgcCode' => '083730000',
                'name' => 'MACARTHUR',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83730,
            ),
            416 => 
            array (
                'id' => 990,
                'psgcCode' => '083731000',
                'name' => 'MAHAPLAG',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83731,
            ),
            417 => 
            array (
                'id' => 991,
                'psgcCode' => '083733000',
                'name' => 'MATAG-OB',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83733,
            ),
            418 => 
            array (
                'id' => 992,
                'psgcCode' => '083734000',
                'name' => 'MATALOM',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83734,
            ),
            419 => 
            array (
                'id' => 993,
                'psgcCode' => '083735000',
                'name' => 'MAYORGA',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83735,
            ),
            420 => 
            array (
                'id' => 994,
                'psgcCode' => '083736000',
                'name' => 'MERIDA',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83736,
            ),
            421 => 
            array (
                'id' => 995,
                'psgcCode' => '083738000',
                'name' => 'ORMOC CITY',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83738,
            ),
            422 => 
            array (
                'id' => 996,
                'psgcCode' => '083739000',
                'name' => 'PALO',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83739,
            ),
            423 => 
            array (
                'id' => 997,
                'psgcCode' => '083740000',
                'name' => 'PALOMPON',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83740,
            ),
            424 => 
            array (
                'id' => 998,
                'psgcCode' => '083741000',
                'name' => 'PASTRANA',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83741,
            ),
            425 => 
            array (
                'id' => 999,
                'psgcCode' => '083742000',
                'name' => 'SAN ISIDRO',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83742,
            ),
            426 => 
            array (
                'id' => 1000,
                'psgcCode' => '083743000',
                'name' => 'SAN MIGUEL',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83743,
            ),
            427 => 
            array (
                'id' => 1001,
                'psgcCode' => '083744000',
                'name' => 'SANTA FE',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83744,
            ),
            428 => 
            array (
                'id' => 1002,
                'psgcCode' => '083745000',
                'name' => 'TABANGO',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83745,
            ),
            429 => 
            array (
                'id' => 1003,
                'psgcCode' => '083746000',
                'name' => 'TABONTABON',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83746,
            ),
            430 => 
            array (
                'id' => 1004,
                'psgcCode' => '083747000',
            'name' => 'TACLOBAN CITY (Capital)',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83747,
            ),
            431 => 
            array (
                'id' => 1005,
                'psgcCode' => '083748000',
                'name' => 'TANAUAN',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83748,
            ),
            432 => 
            array (
                'id' => 1006,
                'psgcCode' => '083749000',
                'name' => 'TOLOSA',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83749,
            ),
            433 => 
            array (
                'id' => 1007,
                'psgcCode' => '083750000',
                'name' => 'TUNGA',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83750,
            ),
            434 => 
            array (
                'id' => 1008,
                'psgcCode' => '083751000',
                'name' => 'VILLABA',
                'region_code' => 8,
                'province_code' => 837,
                'code' => 83751,
            ),
            435 => 
            array (
                'id' => 1009,
                'psgcCode' => '084801000',
                'name' => 'ALLEN',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84801,
            ),
            436 => 
            array (
                'id' => 1010,
                'psgcCode' => '084802000',
                'name' => 'BIRI',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84802,
            ),
            437 => 
            array (
                'id' => 1011,
                'psgcCode' => '084803000',
                'name' => 'BOBON',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84803,
            ),
            438 => 
            array (
                'id' => 1012,
                'psgcCode' => '084804000',
                'name' => 'CAPUL',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84804,
            ),
            439 => 
            array (
                'id' => 1013,
                'psgcCode' => '084805000',
            'name' => 'CATARMAN (Capital)',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84805,
            ),
            440 => 
            array (
                'id' => 1014,
                'psgcCode' => '084806000',
                'name' => 'CATUBIG',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84806,
            ),
            441 => 
            array (
                'id' => 1015,
                'psgcCode' => '084807000',
                'name' => 'GAMAY',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84807,
            ),
            442 => 
            array (
                'id' => 1016,
                'psgcCode' => '084808000',
                'name' => 'LAOANG',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84808,
            ),
            443 => 
            array (
                'id' => 1017,
                'psgcCode' => '084809000',
                'name' => 'LAPINIG',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84809,
            ),
            444 => 
            array (
                'id' => 1018,
                'psgcCode' => '084810000',
                'name' => 'LAS NAVAS',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84810,
            ),
            445 => 
            array (
                'id' => 1019,
                'psgcCode' => '084811000',
                'name' => 'LAVEZARES',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84811,
            ),
            446 => 
            array (
                'id' => 1020,
                'psgcCode' => '084812000',
                'name' => 'MAPANAS',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84812,
            ),
            447 => 
            array (
                'id' => 1021,
                'psgcCode' => '084813000',
                'name' => 'MONDRAGON',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84813,
            ),
            448 => 
            array (
                'id' => 1022,
                'psgcCode' => '084814000',
                'name' => 'PALAPAG',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84814,
            ),
            449 => 
            array (
                'id' => 1023,
                'psgcCode' => '084815000',
                'name' => 'PAMBUJAN',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84815,
            ),
            450 => 
            array (
                'id' => 1024,
                'psgcCode' => '084816000',
                'name' => 'ROSARIO',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84816,
            ),
            451 => 
            array (
                'id' => 1025,
                'psgcCode' => '084817000',
                'name' => 'SAN ANTONIO',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84817,
            ),
            452 => 
            array (
                'id' => 1026,
                'psgcCode' => '084818000',
                'name' => 'SAN ISIDRO',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84818,
            ),
            453 => 
            array (
                'id' => 1027,
                'psgcCode' => '084819000',
                'name' => 'SAN JOSE',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84819,
            ),
            454 => 
            array (
                'id' => 1028,
                'psgcCode' => '084820000',
                'name' => 'SAN ROQUE',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84820,
            ),
            455 => 
            array (
                'id' => 1029,
                'psgcCode' => '084821000',
                'name' => 'SAN VICENTE',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84821,
            ),
            456 => 
            array (
                'id' => 1030,
                'psgcCode' => '084822000',
                'name' => 'SILVINO LOBOS',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84822,
            ),
            457 => 
            array (
                'id' => 1031,
                'psgcCode' => '084823000',
                'name' => 'VICTORIA',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84823,
            ),
            458 => 
            array (
                'id' => 1032,
                'psgcCode' => '084824000',
                'name' => 'LOPE DE VEGA',
                'region_code' => 8,
                'province_code' => 848,
                'code' => 84824,
            ),
            459 => 
            array (
                'id' => 1033,
                'psgcCode' => '086001000',
                'name' => 'ALMAGRO',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86001,
            ),
            460 => 
            array (
                'id' => 1034,
                'psgcCode' => '086002000',
                'name' => 'BASEY',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86002,
            ),
            461 => 
            array (
                'id' => 1035,
                'psgcCode' => '086003000',
                'name' => 'CALBAYOG CITY',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86003,
            ),
            462 => 
            array (
                'id' => 1036,
                'psgcCode' => '086004000',
                'name' => 'CALBIGA',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86004,
            ),
            463 => 
            array (
                'id' => 1037,
                'psgcCode' => '086005000',
            'name' => 'CITY OF CATBALOGAN (Capital)',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86005,
            ),
            464 => 
            array (
                'id' => 1038,
                'psgcCode' => '086006000',
                'name' => 'DARAM',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86006,
            ),
            465 => 
            array (
                'id' => 1039,
                'psgcCode' => '086007000',
                'name' => 'GANDARA',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86007,
            ),
            466 => 
            array (
                'id' => 1040,
                'psgcCode' => '086008000',
                'name' => 'HINABANGAN',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86008,
            ),
            467 => 
            array (
                'id' => 1041,
                'psgcCode' => '086009000',
                'name' => 'JIABONG',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86009,
            ),
            468 => 
            array (
                'id' => 1042,
                'psgcCode' => '086010000',
                'name' => 'MARABUT',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86010,
            ),
            469 => 
            array (
                'id' => 1043,
                'psgcCode' => '086011000',
                'name' => 'MATUGUINAO',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86011,
            ),
            470 => 
            array (
                'id' => 1044,
                'psgcCode' => '086012000',
                'name' => 'MOTIONG',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86012,
            ),
            471 => 
            array (
                'id' => 1045,
                'psgcCode' => '086013000',
                'name' => 'PINABACDAO',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86013,
            ),
            472 => 
            array (
                'id' => 1046,
                'psgcCode' => '086014000',
                'name' => 'SAN JOSE DE BUAN',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86014,
            ),
            473 => 
            array (
                'id' => 1047,
                'psgcCode' => '086015000',
                'name' => 'SAN SEBASTIAN',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86015,
            ),
            474 => 
            array (
                'id' => 1048,
                'psgcCode' => '086016000',
                'name' => 'SANTA MARGARITA',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86016,
            ),
            475 => 
            array (
                'id' => 1049,
                'psgcCode' => '086017000',
                'name' => 'SANTA RITA',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86017,
            ),
            476 => 
            array (
                'id' => 1050,
                'psgcCode' => '086018000',
                'name' => 'SANTO NIÑO',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86018,
            ),
            477 => 
            array (
                'id' => 1051,
                'psgcCode' => '086019000',
                'name' => 'TALALORA',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86019,
            ),
            478 => 
            array (
                'id' => 1052,
                'psgcCode' => '086020000',
                'name' => 'TARANGNAN',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86020,
            ),
            479 => 
            array (
                'id' => 1053,
                'psgcCode' => '086021000',
                'name' => 'VILLAREAL',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86021,
            ),
            480 => 
            array (
                'id' => 1054,
                'psgcCode' => '086022000',
            'name' => 'PARANAS (WRIGHT)',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86022,
            ),
            481 => 
            array (
                'id' => 1055,
                'psgcCode' => '086023000',
                'name' => 'ZUMARRAGA',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86023,
            ),
            482 => 
            array (
                'id' => 1056,
                'psgcCode' => '086024000',
                'name' => 'TAGAPUL-AN',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86024,
            ),
            483 => 
            array (
                'id' => 1057,
                'psgcCode' => '086025000',
                'name' => 'SAN JORGE',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86025,
            ),
            484 => 
            array (
                'id' => 1058,
                'psgcCode' => '086026000',
                'name' => 'PAGSANGHAN',
                'region_code' => 8,
                'province_code' => 860,
                'code' => 86026,
            ),
            485 => 
            array (
                'id' => 1059,
                'psgcCode' => '086401000',
                'name' => 'ANAHAWAN',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86401,
            ),
            486 => 
            array (
                'id' => 1060,
                'psgcCode' => '086402000',
                'name' => 'BONTOC',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86402,
            ),
            487 => 
            array (
                'id' => 1061,
                'psgcCode' => '086403000',
                'name' => 'HINUNANGAN',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86403,
            ),
            488 => 
            array (
                'id' => 1062,
                'psgcCode' => '086404000',
                'name' => 'HINUNDAYAN',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86404,
            ),
            489 => 
            array (
                'id' => 1063,
                'psgcCode' => '086405000',
                'name' => 'LIBAGON',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86405,
            ),
            490 => 
            array (
                'id' => 1064,
                'psgcCode' => '086406000',
                'name' => 'LILOAN',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86406,
            ),
            491 => 
            array (
                'id' => 1065,
                'psgcCode' => '086407000',
            'name' => 'CITY OF MAASIN (Capital)',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86407,
            ),
            492 => 
            array (
                'id' => 1066,
                'psgcCode' => '086408000',
                'name' => 'MACROHON',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86408,
            ),
            493 => 
            array (
                'id' => 1067,
                'psgcCode' => '086409000',
                'name' => 'MALITBOG',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86409,
            ),
            494 => 
            array (
                'id' => 1068,
                'psgcCode' => '086410000',
                'name' => 'PADRE BURGOS',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86410,
            ),
            495 => 
            array (
                'id' => 1069,
                'psgcCode' => '086411000',
                'name' => 'PINTUYAN',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86411,
            ),
            496 => 
            array (
                'id' => 1070,
                'psgcCode' => '086412000',
                'name' => 'SAINT BERNARD',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86412,
            ),
            497 => 
            array (
                'id' => 1071,
                'psgcCode' => '086413000',
                'name' => 'SAN FRANCISCO',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86413,
            ),
            498 => 
            array (
                'id' => 1072,
                'psgcCode' => '086414000',
            'name' => 'SAN JUAN (CABALIAN)',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86414,
            ),
            499 => 
            array (
                'id' => 1073,
                'psgcCode' => '086415000',
                'name' => 'SAN RICARDO',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86415,
            ),
        ));
        \DB::table('city_municipalities')->insert(array (
            0 => 
            array (
                'id' => 1074,
                'psgcCode' => '086416000',
                'name' => 'SILAGO',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86416,
            ),
            1 => 
            array (
                'id' => 1075,
                'psgcCode' => '086417000',
                'name' => 'SOGOD',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86417,
            ),
            2 => 
            array (
                'id' => 1076,
                'psgcCode' => '086418000',
                'name' => 'TOMAS OPPUS',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86418,
            ),
            3 => 
            array (
                'id' => 1077,
                'psgcCode' => '086419000',
                'name' => 'LIMASAWA',
                'region_code' => 8,
                'province_code' => 864,
                'code' => 86419,
            ),
            4 => 
            array (
                'id' => 1078,
                'psgcCode' => '087801000',
                'name' => 'ALMERIA',
                'region_code' => 8,
                'province_code' => 878,
                'code' => 87801,
            ),
            5 => 
            array (
                'id' => 1079,
                'psgcCode' => '087802000',
                'name' => 'BILIRAN',
                'region_code' => 8,
                'province_code' => 878,
                'code' => 87802,
            ),
            6 => 
            array (
                'id' => 1080,
                'psgcCode' => '087803000',
                'name' => 'CABUCGAYAN',
                'region_code' => 8,
                'province_code' => 878,
                'code' => 87803,
            ),
            7 => 
            array (
                'id' => 1081,
                'psgcCode' => '087804000',
                'name' => 'CAIBIRAN',
                'region_code' => 8,
                'province_code' => 878,
                'code' => 87804,
            ),
            8 => 
            array (
                'id' => 1082,
                'psgcCode' => '087805000',
                'name' => 'CULABA',
                'region_code' => 8,
                'province_code' => 878,
                'code' => 87805,
            ),
            9 => 
            array (
                'id' => 1083,
                'psgcCode' => '087806000',
                'name' => 'KAWAYAN',
                'region_code' => 8,
                'province_code' => 878,
                'code' => 87806,
            ),
            10 => 
            array (
                'id' => 1084,
                'psgcCode' => '087807000',
                'name' => 'MARIPIPI',
                'region_code' => 8,
                'province_code' => 878,
                'code' => 87807,
            ),
            11 => 
            array (
                'id' => 1085,
                'psgcCode' => '087808000',
            'name' => 'NAVAL (Capital)',
                'region_code' => 8,
                'province_code' => 878,
                'code' => 87808,
            ),
            12 => 
            array (
                'id' => 1086,
                'psgcCode' => '097201000',
                'name' => 'DAPITAN CITY',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97201,
            ),
            13 => 
            array (
                'id' => 1087,
                'psgcCode' => '097202000',
            'name' => 'DIPOLOG CITY (Capital)',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97202,
            ),
            14 => 
            array (
                'id' => 1088,
                'psgcCode' => '097203000',
                'name' => 'KATIPUNAN',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97203,
            ),
            15 => 
            array (
                'id' => 1089,
                'psgcCode' => '097204000',
                'name' => 'LA LIBERTAD',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97204,
            ),
            16 => 
            array (
                'id' => 1090,
                'psgcCode' => '097205000',
                'name' => 'LABASON',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97205,
            ),
            17 => 
            array (
                'id' => 1091,
                'psgcCode' => '097206000',
                'name' => 'LILOY',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97206,
            ),
            18 => 
            array (
                'id' => 1092,
                'psgcCode' => '097207000',
                'name' => 'MANUKAN',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97207,
            ),
            19 => 
            array (
                'id' => 1093,
                'psgcCode' => '097208000',
                'name' => 'MUTIA',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97208,
            ),
            20 => 
            array (
                'id' => 1094,
                'psgcCode' => '097209000',
            'name' => 'PIÑAN (NEW PIÑAN)',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97209,
            ),
            21 => 
            array (
                'id' => 1095,
                'psgcCode' => '097210000',
                'name' => 'POLANCO',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97210,
            ),
            22 => 
            array (
                'id' => 1096,
                'psgcCode' => '097211000',
                'name' => 'PRES. MANUEL A. ROXAS',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97211,
            ),
            23 => 
            array (
                'id' => 1097,
                'psgcCode' => '097212000',
                'name' => 'RIZAL',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97212,
            ),
            24 => 
            array (
                'id' => 1098,
                'psgcCode' => '097213000',
                'name' => 'SALUG',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97213,
            ),
            25 => 
            array (
                'id' => 1099,
                'psgcCode' => '097214000',
                'name' => 'SERGIO OSMEÑA SR.',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97214,
            ),
            26 => 
            array (
                'id' => 1100,
                'psgcCode' => '097215000',
                'name' => 'SIAYAN',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97215,
            ),
            27 => 
            array (
                'id' => 1101,
                'psgcCode' => '097216000',
                'name' => 'SIBUCO',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97216,
            ),
            28 => 
            array (
                'id' => 1102,
                'psgcCode' => '097217000',
                'name' => 'SIBUTAD',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97217,
            ),
            29 => 
            array (
                'id' => 1103,
                'psgcCode' => '097218000',
                'name' => 'SINDANGAN',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97218,
            ),
            30 => 
            array (
                'id' => 1104,
                'psgcCode' => '097219000',
                'name' => 'SIOCON',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97219,
            ),
            31 => 
            array (
                'id' => 1105,
                'psgcCode' => '097220000',
                'name' => 'SIRAWAI',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97220,
            ),
            32 => 
            array (
                'id' => 1106,
                'psgcCode' => '097221000',
                'name' => 'TAMPILISAN',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97221,
            ),
            33 => 
            array (
                'id' => 1107,
                'psgcCode' => '097222000',
            'name' => 'JOSE DALMAN (PONOT)',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97222,
            ),
            34 => 
            array (
                'id' => 1108,
                'psgcCode' => '097223000',
                'name' => 'GUTALAC',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97223,
            ),
            35 => 
            array (
                'id' => 1109,
                'psgcCode' => '097224000',
                'name' => 'BALIGUIAN',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97224,
            ),
            36 => 
            array (
                'id' => 1110,
                'psgcCode' => '097225000',
                'name' => 'GODOD',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97225,
            ),
            37 => 
            array (
                'id' => 1111,
                'psgcCode' => '097226000',
            'name' => 'BACUNGAN (Leon T. Postigo)',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97226,
            ),
            38 => 
            array (
                'id' => 1112,
                'psgcCode' => '097227000',
                'name' => 'KALAWIT',
                'region_code' => 9,
                'province_code' => 972,
                'code' => 97227,
            ),
            39 => 
            array (
                'id' => 1113,
                'psgcCode' => '097302000',
                'name' => 'AURORA',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97302,
            ),
            40 => 
            array (
                'id' => 1114,
                'psgcCode' => '097303000',
                'name' => 'BAYOG',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97303,
            ),
            41 => 
            array (
                'id' => 1115,
                'psgcCode' => '097305000',
                'name' => 'DIMATALING',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97305,
            ),
            42 => 
            array (
                'id' => 1116,
                'psgcCode' => '097306000',
                'name' => 'DINAS',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97306,
            ),
            43 => 
            array (
                'id' => 1117,
                'psgcCode' => '097307000',
                'name' => 'DUMALINAO',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97307,
            ),
            44 => 
            array (
                'id' => 1118,
                'psgcCode' => '097308000',
                'name' => 'DUMINGAG',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97308,
            ),
            45 => 
            array (
                'id' => 1119,
                'psgcCode' => '097311000',
                'name' => 'KUMALARANG',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97311,
            ),
            46 => 
            array (
                'id' => 1120,
                'psgcCode' => '097312000',
                'name' => 'LABANGAN',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97312,
            ),
            47 => 
            array (
                'id' => 1121,
                'psgcCode' => '097313000',
                'name' => 'LAPUYAN',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97313,
            ),
            48 => 
            array (
                'id' => 1122,
                'psgcCode' => '097315000',
                'name' => 'MAHAYAG',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97315,
            ),
            49 => 
            array (
                'id' => 1123,
                'psgcCode' => '097317000',
                'name' => 'MARGOSATUBIG',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97317,
            ),
            50 => 
            array (
                'id' => 1124,
                'psgcCode' => '097318000',
                'name' => 'MIDSALIP',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97318,
            ),
            51 => 
            array (
                'id' => 1125,
                'psgcCode' => '097319000',
                'name' => 'MOLAVE',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97319,
            ),
            52 => 
            array (
                'id' => 1126,
                'psgcCode' => '097322000',
            'name' => 'PAGADIAN CITY (Capital)',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97322,
            ),
            53 => 
            array (
                'id' => 1127,
                'psgcCode' => '097323000',
            'name' => 'RAMON MAGSAYSAY (LIARGO)',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97323,
            ),
            54 => 
            array (
                'id' => 1128,
                'psgcCode' => '097324000',
                'name' => 'SAN MIGUEL',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97324,
            ),
            55 => 
            array (
                'id' => 1129,
                'psgcCode' => '097325000',
                'name' => 'SAN PABLO',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97325,
            ),
            56 => 
            array (
                'id' => 1130,
                'psgcCode' => '097327000',
                'name' => 'TABINA',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97327,
            ),
            57 => 
            array (
                'id' => 1131,
                'psgcCode' => '097328000',
                'name' => 'TAMBULIG',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97328,
            ),
            58 => 
            array (
                'id' => 1132,
                'psgcCode' => '097330000',
                'name' => 'TUKURAN',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97330,
            ),
            59 => 
            array (
                'id' => 1133,
                'psgcCode' => '097332000',
                'name' => 'ZAMBOANGA CITY',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97332,
            ),
            60 => 
            array (
                'id' => 1134,
                'psgcCode' => '097333000',
                'name' => 'LAKEWOOD',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97333,
            ),
            61 => 
            array (
                'id' => 1135,
                'psgcCode' => '097337000',
                'name' => 'JOSEFINA',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97337,
            ),
            62 => 
            array (
                'id' => 1136,
                'psgcCode' => '097338000',
                'name' => 'PITOGO',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97338,
            ),
            63 => 
            array (
                'id' => 1137,
                'psgcCode' => '097340000',
            'name' => 'SOMINOT (DON MARIANO MARCOS)',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97340,
            ),
            64 => 
            array (
                'id' => 1138,
                'psgcCode' => '097341000',
                'name' => 'VINCENZO A. SAGUN',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97341,
            ),
            65 => 
            array (
                'id' => 1139,
                'psgcCode' => '097343000',
                'name' => 'GUIPOS',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97343,
            ),
            66 => 
            array (
                'id' => 1140,
                'psgcCode' => '097344000',
                'name' => 'TIGBAO',
                'region_code' => 9,
                'province_code' => 973,
                'code' => 97344,
            ),
            67 => 
            array (
                'id' => 1141,
                'psgcCode' => '098301000',
                'name' => 'ALICIA',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98301,
            ),
            68 => 
            array (
                'id' => 1142,
                'psgcCode' => '098302000',
                'name' => 'BUUG',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98302,
            ),
            69 => 
            array (
                'id' => 1143,
                'psgcCode' => '098303000',
                'name' => 'DIPLAHAN',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98303,
            ),
            70 => 
            array (
                'id' => 1144,
                'psgcCode' => '098304000',
                'name' => 'IMELDA',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98304,
            ),
            71 => 
            array (
                'id' => 1145,
                'psgcCode' => '098305000',
            'name' => 'IPIL (Capital)',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98305,
            ),
            72 => 
            array (
                'id' => 1146,
                'psgcCode' => '098306000',
                'name' => 'KABASALAN',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98306,
            ),
            73 => 
            array (
                'id' => 1147,
                'psgcCode' => '098307000',
                'name' => 'MABUHAY',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98307,
            ),
            74 => 
            array (
                'id' => 1148,
                'psgcCode' => '098308000',
                'name' => 'MALANGAS',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98308,
            ),
            75 => 
            array (
                'id' => 1149,
                'psgcCode' => '098309000',
                'name' => 'NAGA',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98309,
            ),
            76 => 
            array (
                'id' => 1150,
                'psgcCode' => '098310000',
                'name' => 'OLUTANGA',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98310,
            ),
            77 => 
            array (
                'id' => 1151,
                'psgcCode' => '098311000',
                'name' => 'PAYAO',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98311,
            ),
            78 => 
            array (
                'id' => 1152,
                'psgcCode' => '098312000',
                'name' => 'ROSELLER LIM',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98312,
            ),
            79 => 
            array (
                'id' => 1153,
                'psgcCode' => '098313000',
                'name' => 'SIAY',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98313,
            ),
            80 => 
            array (
                'id' => 1154,
                'psgcCode' => '098314000',
                'name' => 'TALUSAN',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98314,
            ),
            81 => 
            array (
                'id' => 1155,
                'psgcCode' => '098315000',
                'name' => 'TITAY',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98315,
            ),
            82 => 
            array (
                'id' => 1156,
                'psgcCode' => '098316000',
                'name' => 'TUNGAWAN',
                'region_code' => 9,
                'province_code' => 983,
                'code' => 98316,
            ),
            83 => 
            array (
                'id' => 1157,
                'psgcCode' => '099701000',
                'name' => 'CITY OF ISABELA',
                'region_code' => 9,
                'province_code' => 997,
                'code' => 99701,
            ),
            84 => 
            array (
                'id' => 1158,
                'psgcCode' => '101301000',
                'name' => 'BAUNGON',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101301,
            ),
            85 => 
            array (
                'id' => 1159,
                'psgcCode' => '101302000',
                'name' => 'DAMULOG',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101302,
            ),
            86 => 
            array (
                'id' => 1160,
                'psgcCode' => '101303000',
                'name' => 'DANGCAGAN',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101303,
            ),
            87 => 
            array (
                'id' => 1161,
                'psgcCode' => '101304000',
                'name' => 'DON CARLOS',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101304,
            ),
            88 => 
            array (
                'id' => 1162,
                'psgcCode' => '101305000',
                'name' => 'IMPASUG-ONG',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101305,
            ),
            89 => 
            array (
                'id' => 1163,
                'psgcCode' => '101306000',
                'name' => 'KADINGILAN',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101306,
            ),
            90 => 
            array (
                'id' => 1164,
                'psgcCode' => '101307000',
                'name' => 'KALILANGAN',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101307,
            ),
            91 => 
            array (
                'id' => 1165,
                'psgcCode' => '101308000',
                'name' => 'KIBAWE',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101308,
            ),
            92 => 
            array (
                'id' => 1166,
                'psgcCode' => '101309000',
                'name' => 'KITAOTAO',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101309,
            ),
            93 => 
            array (
                'id' => 1167,
                'psgcCode' => '101310000',
                'name' => 'LANTAPAN',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101310,
            ),
            94 => 
            array (
                'id' => 1168,
                'psgcCode' => '101311000',
                'name' => 'LIBONA',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101311,
            ),
            95 => 
            array (
                'id' => 1169,
                'psgcCode' => '101312000',
            'name' => 'CITY OF MALAYBALAY (Capital)',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101312,
            ),
            96 => 
            array (
                'id' => 1170,
                'psgcCode' => '101313000',
                'name' => 'MALITBOG',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101313,
            ),
            97 => 
            array (
                'id' => 1171,
                'psgcCode' => '101314000',
                'name' => 'MANOLO FORTICH',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101314,
            ),
            98 => 
            array (
                'id' => 1172,
                'psgcCode' => '101315000',
                'name' => 'MARAMAG',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101315,
            ),
            99 => 
            array (
                'id' => 1173,
                'psgcCode' => '101316000',
                'name' => 'PANGANTUCAN',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101316,
            ),
            100 => 
            array (
                'id' => 1174,
                'psgcCode' => '101317000',
                'name' => 'QUEZON',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101317,
            ),
            101 => 
            array (
                'id' => 1175,
                'psgcCode' => '101318000',
                'name' => 'SAN FERNANDO',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101318,
            ),
            102 => 
            array (
                'id' => 1176,
                'psgcCode' => '101319000',
                'name' => 'SUMILAO',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101319,
            ),
            103 => 
            array (
                'id' => 1177,
                'psgcCode' => '101320000',
                'name' => 'TALAKAG',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101320,
            ),
            104 => 
            array (
                'id' => 1178,
                'psgcCode' => '101321000',
                'name' => 'CITY OF VALENCIA',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101321,
            ),
            105 => 
            array (
                'id' => 1179,
                'psgcCode' => '101322000',
                'name' => 'CABANGLASAN',
                'region_code' => 10,
                'province_code' => 1013,
                'code' => 101322,
            ),
            106 => 
            array (
                'id' => 1180,
                'psgcCode' => '101801000',
                'name' => 'CATARMAN',
                'region_code' => 10,
                'province_code' => 1018,
                'code' => 101801,
            ),
            107 => 
            array (
                'id' => 1181,
                'psgcCode' => '101802000',
                'name' => 'GUINSILIBAN',
                'region_code' => 10,
                'province_code' => 1018,
                'code' => 101802,
            ),
            108 => 
            array (
                'id' => 1182,
                'psgcCode' => '101803000',
                'name' => 'MAHINOG',
                'region_code' => 10,
                'province_code' => 1018,
                'code' => 101803,
            ),
            109 => 
            array (
                'id' => 1183,
                'psgcCode' => '101804000',
            'name' => 'MAMBAJAO (Capital)',
                'region_code' => 10,
                'province_code' => 1018,
                'code' => 101804,
            ),
            110 => 
            array (
                'id' => 1184,
                'psgcCode' => '101805000',
                'name' => 'SAGAY',
                'region_code' => 10,
                'province_code' => 1018,
                'code' => 101805,
            ),
            111 => 
            array (
                'id' => 1185,
                'psgcCode' => '103501000',
                'name' => 'BACOLOD',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103501,
            ),
            112 => 
            array (
                'id' => 1186,
                'psgcCode' => '103502000',
                'name' => 'BALOI',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103502,
            ),
            113 => 
            array (
                'id' => 1187,
                'psgcCode' => '103503000',
                'name' => 'BAROY',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103503,
            ),
            114 => 
            array (
                'id' => 1188,
                'psgcCode' => '103504000',
                'name' => 'ILIGAN CITY',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103504,
            ),
            115 => 
            array (
                'id' => 1189,
                'psgcCode' => '103505000',
                'name' => 'KAPATAGAN',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103505,
            ),
            116 => 
            array (
                'id' => 1190,
                'psgcCode' => '103506000',
            'name' => 'SULTAN NAGA DIMAPORO (KAROMATAN)',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103506,
            ),
            117 => 
            array (
                'id' => 1191,
                'psgcCode' => '103507000',
                'name' => 'KAUSWAGAN',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103507,
            ),
            118 => 
            array (
                'id' => 1192,
                'psgcCode' => '103508000',
                'name' => 'KOLAMBUGAN',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103508,
            ),
            119 => 
            array (
                'id' => 1193,
                'psgcCode' => '103509000',
                'name' => 'LALA',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103509,
            ),
            120 => 
            array (
                'id' => 1194,
                'psgcCode' => '103510000',
                'name' => 'LINAMON',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103510,
            ),
            121 => 
            array (
                'id' => 1195,
                'psgcCode' => '103511000',
                'name' => 'MAGSAYSAY',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103511,
            ),
            122 => 
            array (
                'id' => 1196,
                'psgcCode' => '103512000',
                'name' => 'MAIGO',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103512,
            ),
            123 => 
            array (
                'id' => 1197,
                'psgcCode' => '103513000',
                'name' => 'MATUNGAO',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103513,
            ),
            124 => 
            array (
                'id' => 1198,
                'psgcCode' => '103514000',
                'name' => 'MUNAI',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103514,
            ),
            125 => 
            array (
                'id' => 1199,
                'psgcCode' => '103515000',
                'name' => 'NUNUNGAN',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103515,
            ),
            126 => 
            array (
                'id' => 1200,
                'psgcCode' => '103516000',
                'name' => 'PANTAO RAGAT',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103516,
            ),
            127 => 
            array (
                'id' => 1201,
                'psgcCode' => '103517000',
                'name' => 'POONA PIAGAPO',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103517,
            ),
            128 => 
            array (
                'id' => 1202,
                'psgcCode' => '103518000',
                'name' => 'SALVADOR',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103518,
            ),
            129 => 
            array (
                'id' => 1203,
                'psgcCode' => '103519000',
                'name' => 'SAPAD',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103519,
            ),
            130 => 
            array (
                'id' => 1204,
                'psgcCode' => '103520000',
                'name' => 'TAGOLOAN',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103520,
            ),
            131 => 
            array (
                'id' => 1205,
                'psgcCode' => '103521000',
                'name' => 'TANGCAL',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103521,
            ),
            132 => 
            array (
                'id' => 1206,
                'psgcCode' => '103522000',
            'name' => 'TUBOD (Capital)',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103522,
            ),
            133 => 
            array (
                'id' => 1207,
                'psgcCode' => '103523000',
                'name' => 'PANTAR',
                'region_code' => 10,
                'province_code' => 1035,
                'code' => 103523,
            ),
            134 => 
            array (
                'id' => 1208,
                'psgcCode' => '104201000',
                'name' => 'ALORAN',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104201,
            ),
            135 => 
            array (
                'id' => 1209,
                'psgcCode' => '104202000',
                'name' => 'BALIANGAO',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104202,
            ),
            136 => 
            array (
                'id' => 1210,
                'psgcCode' => '104203000',
                'name' => 'BONIFACIO',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104203,
            ),
            137 => 
            array (
                'id' => 1211,
                'psgcCode' => '104204000',
                'name' => 'CALAMBA',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104204,
            ),
            138 => 
            array (
                'id' => 1212,
                'psgcCode' => '104205000',
                'name' => 'CLARIN',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104205,
            ),
            139 => 
            array (
                'id' => 1213,
                'psgcCode' => '104206000',
                'name' => 'CONCEPCION',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104206,
            ),
            140 => 
            array (
                'id' => 1214,
                'psgcCode' => '104207000',
                'name' => 'JIMENEZ',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104207,
            ),
            141 => 
            array (
                'id' => 1215,
                'psgcCode' => '104208000',
                'name' => 'LOPEZ JAENA',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104208,
            ),
            142 => 
            array (
                'id' => 1216,
                'psgcCode' => '104209000',
            'name' => 'OROQUIETA CITY (Capital)',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104209,
            ),
            143 => 
            array (
                'id' => 1217,
                'psgcCode' => '104210000',
                'name' => 'OZAMIS CITY',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104210,
            ),
            144 => 
            array (
                'id' => 1218,
                'psgcCode' => '104211000',
                'name' => 'PANAON',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104211,
            ),
            145 => 
            array (
                'id' => 1219,
                'psgcCode' => '104212000',
                'name' => 'PLARIDEL',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104212,
            ),
            146 => 
            array (
                'id' => 1220,
                'psgcCode' => '104213000',
                'name' => 'SAPANG DALAGA',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104213,
            ),
            147 => 
            array (
                'id' => 1221,
                'psgcCode' => '104214000',
                'name' => 'SINACABAN',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104214,
            ),
            148 => 
            array (
                'id' => 1222,
                'psgcCode' => '104215000',
                'name' => 'TANGUB CITY',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104215,
            ),
            149 => 
            array (
                'id' => 1223,
                'psgcCode' => '104216000',
                'name' => 'TUDELA',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104216,
            ),
            150 => 
            array (
                'id' => 1224,
                'psgcCode' => '104217000',
            'name' => 'DON VICTORIANO CHIONGBIAN  (DON MARIANO MARCOS)',
                'region_code' => 10,
                'province_code' => 1042,
                'code' => 104217,
            ),
            151 => 
            array (
                'id' => 1225,
                'psgcCode' => '104301000',
                'name' => 'ALUBIJID',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104301,
            ),
            152 => 
            array (
                'id' => 1226,
                'psgcCode' => '104302000',
                'name' => 'BALINGASAG',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104302,
            ),
            153 => 
            array (
                'id' => 1227,
                'psgcCode' => '104303000',
                'name' => 'BALINGOAN',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104303,
            ),
            154 => 
            array (
                'id' => 1228,
                'psgcCode' => '104304000',
                'name' => 'BINUANGAN',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104304,
            ),
            155 => 
            array (
                'id' => 1229,
                'psgcCode' => '104305000',
            'name' => 'CAGAYAN DE ORO CITY (Capital)',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104305,
            ),
            156 => 
            array (
                'id' => 1230,
                'psgcCode' => '104306000',
                'name' => 'CLAVERIA',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104306,
            ),
            157 => 
            array (
                'id' => 1231,
                'psgcCode' => '104307000',
                'name' => 'CITY OF EL SALVADOR',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104307,
            ),
            158 => 
            array (
                'id' => 1232,
                'psgcCode' => '104308000',
                'name' => 'GINGOOG CITY',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104308,
            ),
            159 => 
            array (
                'id' => 1233,
                'psgcCode' => '104309000',
                'name' => 'GITAGUM',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104309,
            ),
            160 => 
            array (
                'id' => 1234,
                'psgcCode' => '104310000',
                'name' => 'INITAO',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104310,
            ),
            161 => 
            array (
                'id' => 1235,
                'psgcCode' => '104311000',
                'name' => 'JASAAN',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104311,
            ),
            162 => 
            array (
                'id' => 1236,
                'psgcCode' => '104312000',
                'name' => 'KINOGUITAN',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104312,
            ),
            163 => 
            array (
                'id' => 1237,
                'psgcCode' => '104313000',
                'name' => 'LAGONGLONG',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104313,
            ),
            164 => 
            array (
                'id' => 1238,
                'psgcCode' => '104314000',
                'name' => 'LAGUINDINGAN',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104314,
            ),
            165 => 
            array (
                'id' => 1239,
                'psgcCode' => '104315000',
                'name' => 'LIBERTAD',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104315,
            ),
            166 => 
            array (
                'id' => 1240,
                'psgcCode' => '104316000',
                'name' => 'LUGAIT',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104316,
            ),
            167 => 
            array (
                'id' => 1241,
                'psgcCode' => '104317000',
            'name' => 'MAGSAYSAY (LINUGOS)',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104317,
            ),
            168 => 
            array (
                'id' => 1242,
                'psgcCode' => '104318000',
                'name' => 'MANTICAO',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104318,
            ),
            169 => 
            array (
                'id' => 1243,
                'psgcCode' => '104319000',
                'name' => 'MEDINA',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104319,
            ),
            170 => 
            array (
                'id' => 1244,
                'psgcCode' => '104320000',
                'name' => 'NAAWAN',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104320,
            ),
            171 => 
            array (
                'id' => 1245,
                'psgcCode' => '104321000',
                'name' => 'OPOL',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104321,
            ),
            172 => 
            array (
                'id' => 1246,
                'psgcCode' => '104322000',
                'name' => 'SALAY',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104322,
            ),
            173 => 
            array (
                'id' => 1247,
                'psgcCode' => '104323000',
                'name' => 'SUGBONGCOGON',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104323,
            ),
            174 => 
            array (
                'id' => 1248,
                'psgcCode' => '104324000',
                'name' => 'TAGOLOAN',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104324,
            ),
            175 => 
            array (
                'id' => 1249,
                'psgcCode' => '104325000',
                'name' => 'TALISAYAN',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104325,
            ),
            176 => 
            array (
                'id' => 1250,
                'psgcCode' => '104326000',
                'name' => 'VILLANUEVA',
                'region_code' => 10,
                'province_code' => 1043,
                'code' => 104326,
            ),
            177 => 
            array (
                'id' => 1251,
                'psgcCode' => '112301000',
            'name' => 'ASUNCION (SAUG)',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112301,
            ),
            178 => 
            array (
                'id' => 1252,
                'psgcCode' => '112303000',
                'name' => 'CARMEN',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112303,
            ),
            179 => 
            array (
                'id' => 1253,
                'psgcCode' => '112305000',
                'name' => 'KAPALONG',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112305,
            ),
            180 => 
            array (
                'id' => 1254,
                'psgcCode' => '112314000',
                'name' => 'NEW CORELLA',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112314,
            ),
            181 => 
            array (
                'id' => 1255,
                'psgcCode' => '112315000',
                'name' => 'CITY OF PANABO',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112315,
            ),
            182 => 
            array (
                'id' => 1256,
                'psgcCode' => '112317000',
                'name' => 'ISLAND GARDEN CITY OF SAMAL',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112317,
            ),
            183 => 
            array (
                'id' => 1257,
                'psgcCode' => '112318000',
                'name' => 'SANTO TOMAS',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112318,
            ),
            184 => 
            array (
                'id' => 1258,
                'psgcCode' => '112319000',
            'name' => 'CITY OF TAGUM (Capital)',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112319,
            ),
            185 => 
            array (
                'id' => 1259,
                'psgcCode' => '112322000',
                'name' => 'TALAINGOD',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112322,
            ),
            186 => 
            array (
                'id' => 1260,
                'psgcCode' => '112323000',
                'name' => 'BRAULIO E. DUJALI',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112323,
            ),
            187 => 
            array (
                'id' => 1261,
                'psgcCode' => '112324000',
                'name' => 'SAN ISIDRO',
                'region_code' => 11,
                'province_code' => 1123,
                'code' => 112324,
            ),
            188 => 
            array (
                'id' => 1262,
                'psgcCode' => '112401000',
                'name' => 'BANSALAN',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112401,
            ),
            189 => 
            array (
                'id' => 1263,
                'psgcCode' => '112402000',
                'name' => 'DAVAO CITY',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112402,
            ),
            190 => 
            array (
                'id' => 1264,
                'psgcCode' => '112403000',
            'name' => 'CITY OF DIGOS (Capital)',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112403,
            ),
            191 => 
            array (
                'id' => 1265,
                'psgcCode' => '112404000',
                'name' => 'HAGONOY',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112404,
            ),
            192 => 
            array (
                'id' => 1266,
                'psgcCode' => '112406000',
                'name' => 'KIBLAWAN',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112406,
            ),
            193 => 
            array (
                'id' => 1267,
                'psgcCode' => '112407000',
                'name' => 'MAGSAYSAY',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112407,
            ),
            194 => 
            array (
                'id' => 1268,
                'psgcCode' => '112408000',
                'name' => 'MALALAG',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112408,
            ),
            195 => 
            array (
                'id' => 1269,
                'psgcCode' => '112410000',
                'name' => 'MATANAO',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112410,
            ),
            196 => 
            array (
                'id' => 1270,
                'psgcCode' => '112411000',
                'name' => 'PADADA',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112411,
            ),
            197 => 
            array (
                'id' => 1271,
                'psgcCode' => '112412000',
                'name' => 'SANTA CRUZ',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112412,
            ),
            198 => 
            array (
                'id' => 1272,
                'psgcCode' => '112414000',
                'name' => 'SULOP',
                'region_code' => 11,
                'province_code' => 1124,
                'code' => 112414,
            ),
            199 => 
            array (
                'id' => 1273,
                'psgcCode' => '112501000',
                'name' => 'BAGANGA',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112501,
            ),
            200 => 
            array (
                'id' => 1274,
                'psgcCode' => '112502000',
                'name' => 'BANAYBANAY',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112502,
            ),
            201 => 
            array (
                'id' => 1275,
                'psgcCode' => '112503000',
                'name' => 'BOSTON',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112503,
            ),
            202 => 
            array (
                'id' => 1276,
                'psgcCode' => '112504000',
                'name' => 'CARAGA',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112504,
            ),
            203 => 
            array (
                'id' => 1277,
                'psgcCode' => '112505000',
                'name' => 'CATEEL',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112505,
            ),
            204 => 
            array (
                'id' => 1278,
                'psgcCode' => '112506000',
                'name' => 'GOVERNOR GENEROSO',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112506,
            ),
            205 => 
            array (
                'id' => 1279,
                'psgcCode' => '112507000',
                'name' => 'LUPON',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112507,
            ),
            206 => 
            array (
                'id' => 1280,
                'psgcCode' => '112508000',
                'name' => 'MANAY',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112508,
            ),
            207 => 
            array (
                'id' => 1281,
                'psgcCode' => '112509000',
            'name' => 'CITY OF MATI (Capital)',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112509,
            ),
            208 => 
            array (
                'id' => 1282,
                'psgcCode' => '112510000',
                'name' => 'SAN ISIDRO',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112510,
            ),
            209 => 
            array (
                'id' => 1283,
                'psgcCode' => '112511000',
                'name' => 'TARRAGONA',
                'region_code' => 11,
                'province_code' => 1125,
                'code' => 112511,
            ),
            210 => 
            array (
                'id' => 1284,
                'psgcCode' => '118201000',
                'name' => 'COMPOSTELA',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118201,
            ),
            211 => 
            array (
                'id' => 1285,
                'psgcCode' => '118202000',
            'name' => 'LAAK (SAN VICENTE)',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118202,
            ),
            212 => 
            array (
                'id' => 1286,
                'psgcCode' => '118203000',
            'name' => 'MABINI (DOÑA ALICIA)',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118203,
            ),
            213 => 
            array (
                'id' => 1287,
                'psgcCode' => '118204000',
                'name' => 'MACO',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118204,
            ),
            214 => 
            array (
                'id' => 1288,
                'psgcCode' => '118205000',
            'name' => 'MARAGUSAN (SAN MARIANO)',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118205,
            ),
            215 => 
            array (
                'id' => 1289,
                'psgcCode' => '118206000',
                'name' => 'MAWAB',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118206,
            ),
            216 => 
            array (
                'id' => 1290,
                'psgcCode' => '118207000',
                'name' => 'MONKAYO',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118207,
            ),
            217 => 
            array (
                'id' => 1291,
                'psgcCode' => '118208000',
                'name' => 'MONTEVISTA',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118208,
            ),
            218 => 
            array (
                'id' => 1292,
                'psgcCode' => '118209000',
            'name' => 'NABUNTURAN (Capital)',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118209,
            ),
            219 => 
            array (
                'id' => 1293,
                'psgcCode' => '118210000',
                'name' => 'NEW BATAAN',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118210,
            ),
            220 => 
            array (
                'id' => 1294,
                'psgcCode' => '118211000',
                'name' => 'PANTUKAN',
                'region_code' => 11,
                'province_code' => 1182,
                'code' => 118211,
            ),
            221 => 
            array (
                'id' => 1295,
                'psgcCode' => '118601000',
                'name' => 'DON MARCELINO',
                'region_code' => 11,
                'province_code' => 1186,
                'code' => 118601,
            ),
            222 => 
            array (
                'id' => 1296,
                'psgcCode' => '118602000',
            'name' => 'JOSE ABAD SANTOS (TRINIDAD)',
                'region_code' => 11,
                'province_code' => 1186,
                'code' => 118602,
            ),
            223 => 
            array (
                'id' => 1297,
                'psgcCode' => '118603000',
                'name' => 'MALITA',
                'region_code' => 11,
                'province_code' => 1186,
                'code' => 118603,
            ),
            224 => 
            array (
                'id' => 1298,
                'psgcCode' => '118604000',
                'name' => 'SANTA MARIA',
                'region_code' => 11,
                'province_code' => 1186,
                'code' => 118604,
            ),
            225 => 
            array (
                'id' => 1299,
                'psgcCode' => '118605000',
                'name' => 'SARANGANI',
                'region_code' => 11,
                'province_code' => 1186,
                'code' => 118605,
            ),
            226 => 
            array (
                'id' => 1300,
                'psgcCode' => '124701000',
                'name' => 'ALAMADA',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124701,
            ),
            227 => 
            array (
                'id' => 1301,
                'psgcCode' => '124702000',
                'name' => 'CARMEN',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124702,
            ),
            228 => 
            array (
                'id' => 1302,
                'psgcCode' => '124703000',
                'name' => 'KABACAN',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124703,
            ),
            229 => 
            array (
                'id' => 1303,
                'psgcCode' => '124704000',
            'name' => 'CITY OF KIDAPAWAN (Capital)',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124704,
            ),
            230 => 
            array (
                'id' => 1304,
                'psgcCode' => '124705000',
                'name' => 'LIBUNGAN',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124705,
            ),
            231 => 
            array (
                'id' => 1305,
                'psgcCode' => '124706000',
                'name' => 'MAGPET',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124706,
            ),
            232 => 
            array (
                'id' => 1306,
                'psgcCode' => '124707000',
                'name' => 'MAKILALA',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124707,
            ),
            233 => 
            array (
                'id' => 1307,
                'psgcCode' => '124708000',
                'name' => 'MATALAM',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124708,
            ),
            234 => 
            array (
                'id' => 1308,
                'psgcCode' => '124709000',
                'name' => 'MIDSAYAP',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124709,
            ),
            235 => 
            array (
                'id' => 1309,
                'psgcCode' => '124710000',
                'name' => 'M\'LANG',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124710,
            ),
            236 => 
            array (
                'id' => 1310,
                'psgcCode' => '124711000',
                'name' => 'PIGKAWAYAN',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124711,
            ),
            237 => 
            array (
                'id' => 1311,
                'psgcCode' => '124712000',
                'name' => 'PIKIT',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124712,
            ),
            238 => 
            array (
                'id' => 1312,
                'psgcCode' => '124713000',
                'name' => 'PRESIDENT ROXAS',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124713,
            ),
            239 => 
            array (
                'id' => 1313,
                'psgcCode' => '124714000',
                'name' => 'TULUNAN',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124714,
            ),
            240 => 
            array (
                'id' => 1314,
                'psgcCode' => '124715000',
                'name' => 'ANTIPAS',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124715,
            ),
            241 => 
            array (
                'id' => 1315,
                'psgcCode' => '124716000',
                'name' => 'BANISILAN',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124716,
            ),
            242 => 
            array (
                'id' => 1316,
                'psgcCode' => '124717000',
                'name' => 'ALEOSAN',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124717,
            ),
            243 => 
            array (
                'id' => 1317,
                'psgcCode' => '124718000',
                'name' => 'ARAKAN',
                'region_code' => 12,
                'province_code' => 1247,
                'code' => 124718,
            ),
            244 => 
            array (
                'id' => 1318,
                'psgcCode' => '126302000',
                'name' => 'BANGA',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126302,
            ),
            245 => 
            array (
                'id' => 1319,
                'psgcCode' => '126303000',
            'name' => 'GENERAL SANTOS CITY (DADIANGAS)',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126303,
            ),
            246 => 
            array (
                'id' => 1320,
                'psgcCode' => '126306000',
            'name' => 'CITY OF KORONADAL (Capital)',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126306,
            ),
            247 => 
            array (
                'id' => 1321,
                'psgcCode' => '126311000',
                'name' => 'NORALA',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126311,
            ),
            248 => 
            array (
                'id' => 1322,
                'psgcCode' => '126312000',
                'name' => 'POLOMOLOK',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126312,
            ),
            249 => 
            array (
                'id' => 1323,
                'psgcCode' => '126313000',
                'name' => 'SURALLAH',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126313,
            ),
            250 => 
            array (
                'id' => 1324,
                'psgcCode' => '126314000',
                'name' => 'TAMPAKAN',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126314,
            ),
            251 => 
            array (
                'id' => 1325,
                'psgcCode' => '126315000',
                'name' => 'TANTANGAN',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126315,
            ),
            252 => 
            array (
                'id' => 1326,
                'psgcCode' => '126316000',
                'name' => 'T\'BOLI',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126316,
            ),
            253 => 
            array (
                'id' => 1327,
                'psgcCode' => '126317000',
                'name' => 'TUPI',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126317,
            ),
            254 => 
            array (
                'id' => 1328,
                'psgcCode' => '126318000',
                'name' => 'SANTO NIÑO',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126318,
            ),
            255 => 
            array (
                'id' => 1329,
                'psgcCode' => '126319000',
                'name' => 'LAKE SEBU',
                'region_code' => 12,
                'province_code' => 1263,
                'code' => 126319,
            ),
            256 => 
            array (
                'id' => 1330,
                'psgcCode' => '126501000',
                'name' => 'BAGUMBAYAN',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126501,
            ),
            257 => 
            array (
                'id' => 1331,
                'psgcCode' => '126502000',
                'name' => 'COLUMBIO',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126502,
            ),
            258 => 
            array (
                'id' => 1332,
                'psgcCode' => '126503000',
                'name' => 'ESPERANZA',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126503,
            ),
            259 => 
            array (
                'id' => 1333,
                'psgcCode' => '126504000',
            'name' => 'ISULAN (Capital)',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126504,
            ),
            260 => 
            array (
                'id' => 1334,
                'psgcCode' => '126505000',
                'name' => 'KALAMANSIG',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126505,
            ),
            261 => 
            array (
                'id' => 1335,
                'psgcCode' => '126506000',
                'name' => 'LEBAK',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126506,
            ),
            262 => 
            array (
                'id' => 1336,
                'psgcCode' => '126507000',
                'name' => 'LUTAYAN',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126507,
            ),
            263 => 
            array (
                'id' => 1337,
                'psgcCode' => '126508000',
            'name' => 'LAMBAYONG (MARIANO MARCOS)',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126508,
            ),
            264 => 
            array (
                'id' => 1338,
                'psgcCode' => '126509000',
                'name' => 'PALIMBANG',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126509,
            ),
            265 => 
            array (
                'id' => 1339,
                'psgcCode' => '126510000',
                'name' => 'PRESIDENT QUIRINO',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126510,
            ),
            266 => 
            array (
                'id' => 1340,
                'psgcCode' => '126511000',
                'name' => 'CITY OF TACURONG',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126511,
            ),
            267 => 
            array (
                'id' => 1341,
                'psgcCode' => '126512000',
                'name' => 'SEN. NINOY AQUINO',
                'region_code' => 12,
                'province_code' => 1265,
                'code' => 126512,
            ),
            268 => 
            array (
                'id' => 1342,
                'psgcCode' => '128001000',
            'name' => 'ALABEL (Capital)',
                'region_code' => 12,
                'province_code' => 1280,
                'code' => 128001,
            ),
            269 => 
            array (
                'id' => 1343,
                'psgcCode' => '128002000',
                'name' => 'GLAN',
                'region_code' => 12,
                'province_code' => 1280,
                'code' => 128002,
            ),
            270 => 
            array (
                'id' => 1344,
                'psgcCode' => '128003000',
                'name' => 'KIAMBA',
                'region_code' => 12,
                'province_code' => 1280,
                'code' => 128003,
            ),
            271 => 
            array (
                'id' => 1345,
                'psgcCode' => '128004000',
                'name' => 'MAASIM',
                'region_code' => 12,
                'province_code' => 1280,
                'code' => 128004,
            ),
            272 => 
            array (
                'id' => 1346,
                'psgcCode' => '128005000',
                'name' => 'MAITUM',
                'region_code' => 12,
                'province_code' => 1280,
                'code' => 128005,
            ),
            273 => 
            array (
                'id' => 1347,
                'psgcCode' => '128006000',
                'name' => 'MALAPATAN',
                'region_code' => 12,
                'province_code' => 1280,
                'code' => 128006,
            ),
            274 => 
            array (
                'id' => 1348,
                'psgcCode' => '128007000',
                'name' => 'MALUNGON',
                'region_code' => 12,
                'province_code' => 1280,
                'code' => 128007,
            ),
            275 => 
            array (
                'id' => 1349,
                'psgcCode' => '129804000',
                'name' => 'COTABATO CITY',
                'region_code' => 12,
                'province_code' => 1298,
                'code' => 129804,
            ),
            276 => 
            array (
                'id' => 1350,
                'psgcCode' => '133901000',
                'name' => 'TONDO I / II',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133901,
            ),
            277 => 
            array (
                'id' => 1351,
                'psgcCode' => '133902000',
                'name' => 'BINONDO',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133902,
            ),
            278 => 
            array (
                'id' => 1352,
                'psgcCode' => '133903000',
                'name' => 'QUIAPO',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133903,
            ),
            279 => 
            array (
                'id' => 1353,
                'psgcCode' => '133904000',
                'name' => 'SAN NICOLAS',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133904,
            ),
            280 => 
            array (
                'id' => 1354,
                'psgcCode' => '133905000',
                'name' => 'SANTA CRUZ',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133905,
            ),
            281 => 
            array (
                'id' => 1355,
                'psgcCode' => '133906000',
                'name' => 'SAMPALOC',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133906,
            ),
            282 => 
            array (
                'id' => 1356,
                'psgcCode' => '133907000',
                'name' => 'SAN MIGUEL',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133907,
            ),
            283 => 
            array (
                'id' => 1357,
                'psgcCode' => '133908000',
                'name' => 'ERMITA',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133908,
            ),
            284 => 
            array (
                'id' => 1358,
                'psgcCode' => '133909000',
                'name' => 'INTRAMUROS',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133909,
            ),
            285 => 
            array (
                'id' => 1359,
                'psgcCode' => '133910000',
                'name' => 'MALATE',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133910,
            ),
            286 => 
            array (
                'id' => 1360,
                'psgcCode' => '133911000',
                'name' => 'PACO',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133911,
            ),
            287 => 
            array (
                'id' => 1361,
                'psgcCode' => '133912000',
                'name' => 'PANDACAN',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133912,
            ),
            288 => 
            array (
                'id' => 1362,
                'psgcCode' => '133913000',
                'name' => 'PORT AREA',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133913,
            ),
            289 => 
            array (
                'id' => 1363,
                'psgcCode' => '133914000',
                'name' => 'SANTA ANA',
                'region_code' => 13,
                'province_code' => 1339,
                'code' => 133914,
            ),
            290 => 
            array (
                'id' => 1364,
                'psgcCode' => '137401000',
                'name' => 'CITY OF MANDALUYONG',
                'region_code' => 13,
                'province_code' => 1374,
                'code' => 137401,
            ),
            291 => 
            array (
                'id' => 1365,
                'psgcCode' => '137402000',
                'name' => 'CITY OF MARIKINA',
                'region_code' => 13,
                'province_code' => 1374,
                'code' => 137402,
            ),
            292 => 
            array (
                'id' => 1366,
                'psgcCode' => '137403000',
                'name' => 'CITY OF PASIG',
                'region_code' => 13,
                'province_code' => 1374,
                'code' => 137403,
            ),
            293 => 
            array (
                'id' => 1367,
                'psgcCode' => '137404000',
                'name' => 'QUEZON CITY',
                'region_code' => 13,
                'province_code' => 1374,
                'code' => 137404,
            ),
            294 => 
            array (
                'id' => 1368,
                'psgcCode' => '137405000',
                'name' => 'CITY OF SAN JUAN',
                'region_code' => 13,
                'province_code' => 1374,
                'code' => 137405,
            ),
            295 => 
            array (
                'id' => 1369,
                'psgcCode' => '137501000',
                'name' => 'CALOOCAN CITY',
                'region_code' => 13,
                'province_code' => 1375,
                'code' => 137501,
            ),
            296 => 
            array (
                'id' => 1370,
                'psgcCode' => '137502000',
                'name' => 'CITY OF MALABON',
                'region_code' => 13,
                'province_code' => 1375,
                'code' => 137502,
            ),
            297 => 
            array (
                'id' => 1371,
                'psgcCode' => '137503000',
                'name' => 'CITY OF NAVOTAS',
                'region_code' => 13,
                'province_code' => 1375,
                'code' => 137503,
            ),
            298 => 
            array (
                'id' => 1372,
                'psgcCode' => '137504000',
                'name' => 'CITY OF VALENZUELA',
                'region_code' => 13,
                'province_code' => 1375,
                'code' => 137504,
            ),
            299 => 
            array (
                'id' => 1373,
                'psgcCode' => '137601000',
                'name' => 'CITY OF LAS PIÑAS',
                'region_code' => 13,
                'province_code' => 1376,
                'code' => 137601,
            ),
            300 => 
            array (
                'id' => 1374,
                'psgcCode' => '137602000',
                'name' => 'CITY OF MAKATI',
                'region_code' => 13,
                'province_code' => 1376,
                'code' => 137602,
            ),
            301 => 
            array (
                'id' => 1375,
                'psgcCode' => '137603000',
                'name' => 'CITY OF MUNTINLUPA',
                'region_code' => 13,
                'province_code' => 1376,
                'code' => 137603,
            ),
            302 => 
            array (
                'id' => 1376,
                'psgcCode' => '137604000',
                'name' => 'CITY OF PARAÑAQUE',
                'region_code' => 13,
                'province_code' => 1376,
                'code' => 137604,
            ),
            303 => 
            array (
                'id' => 1377,
                'psgcCode' => '137605000',
                'name' => 'PASAY CITY',
                'region_code' => 13,
                'province_code' => 1376,
                'code' => 137605,
            ),
            304 => 
            array (
                'id' => 1378,
                'psgcCode' => '137606000',
                'name' => 'PATEROS',
                'region_code' => 13,
                'province_code' => 1376,
                'code' => 137606,
            ),
            305 => 
            array (
                'id' => 1379,
                'psgcCode' => '137607000',
                'name' => 'TAGUIG CITY',
                'region_code' => 13,
                'province_code' => 1376,
                'code' => 137607,
            ),
            306 => 
            array (
                'id' => 1380,
                'psgcCode' => '140101000',
            'name' => 'BANGUED (Capital)',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140101,
            ),
            307 => 
            array (
                'id' => 1381,
                'psgcCode' => '140102000',
                'name' => 'BOLINEY',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140102,
            ),
            308 => 
            array (
                'id' => 1382,
                'psgcCode' => '140103000',
                'name' => 'BUCAY',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140103,
            ),
            309 => 
            array (
                'id' => 1383,
                'psgcCode' => '140104000',
                'name' => 'BUCLOC',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140104,
            ),
            310 => 
            array (
                'id' => 1384,
                'psgcCode' => '140105000',
                'name' => 'DAGUIOMAN',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140105,
            ),
            311 => 
            array (
                'id' => 1385,
                'psgcCode' => '140106000',
                'name' => 'DANGLAS',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140106,
            ),
            312 => 
            array (
                'id' => 1386,
                'psgcCode' => '140107000',
                'name' => 'DOLORES',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140107,
            ),
            313 => 
            array (
                'id' => 1387,
                'psgcCode' => '140108000',
                'name' => 'LA PAZ',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140108,
            ),
            314 => 
            array (
                'id' => 1388,
                'psgcCode' => '140109000',
                'name' => 'LACUB',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140109,
            ),
            315 => 
            array (
                'id' => 1389,
                'psgcCode' => '140110000',
                'name' => 'LAGANGILANG',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140110,
            ),
            316 => 
            array (
                'id' => 1390,
                'psgcCode' => '140111000',
                'name' => 'LAGAYAN',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140111,
            ),
            317 => 
            array (
                'id' => 1391,
                'psgcCode' => '140112000',
                'name' => 'LANGIDEN',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140112,
            ),
            318 => 
            array (
                'id' => 1392,
                'psgcCode' => '140113000',
            'name' => 'LICUAN-BAAY (LICUAN)',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140113,
            ),
            319 => 
            array (
                'id' => 1393,
                'psgcCode' => '140114000',
                'name' => 'LUBA',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140114,
            ),
            320 => 
            array (
                'id' => 1394,
                'psgcCode' => '140115000',
                'name' => 'MALIBCONG',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140115,
            ),
            321 => 
            array (
                'id' => 1395,
                'psgcCode' => '140116000',
                'name' => 'MANABO',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140116,
            ),
            322 => 
            array (
                'id' => 1396,
                'psgcCode' => '140117000',
                'name' => 'PEÑARRUBIA',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140117,
            ),
            323 => 
            array (
                'id' => 1397,
                'psgcCode' => '140118000',
                'name' => 'PIDIGAN',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140118,
            ),
            324 => 
            array (
                'id' => 1398,
                'psgcCode' => '140119000',
                'name' => 'PILAR',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140119,
            ),
            325 => 
            array (
                'id' => 1399,
                'psgcCode' => '140120000',
                'name' => 'SALLAPADAN',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140120,
            ),
            326 => 
            array (
                'id' => 1400,
                'psgcCode' => '140121000',
                'name' => 'SAN ISIDRO',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140121,
            ),
            327 => 
            array (
                'id' => 1401,
                'psgcCode' => '140122000',
                'name' => 'SAN JUAN',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140122,
            ),
            328 => 
            array (
                'id' => 1402,
                'psgcCode' => '140123000',
                'name' => 'SAN QUINTIN',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140123,
            ),
            329 => 
            array (
                'id' => 1403,
                'psgcCode' => '140124000',
                'name' => 'TAYUM',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140124,
            ),
            330 => 
            array (
                'id' => 1404,
                'psgcCode' => '140125000',
                'name' => 'TINEG',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140125,
            ),
            331 => 
            array (
                'id' => 1405,
                'psgcCode' => '140126000',
                'name' => 'TUBO',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140126,
            ),
            332 => 
            array (
                'id' => 1406,
                'psgcCode' => '140127000',
                'name' => 'VILLAVICIOSA',
                'region_code' => 14,
                'province_code' => 1401,
                'code' => 140127,
            ),
            333 => 
            array (
                'id' => 1407,
                'psgcCode' => '141101000',
                'name' => 'ATOK',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141101,
            ),
            334 => 
            array (
                'id' => 1408,
                'psgcCode' => '141102000',
                'name' => 'BAGUIO CITY',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141102,
            ),
            335 => 
            array (
                'id' => 1409,
                'psgcCode' => '141103000',
                'name' => 'BAKUN',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141103,
            ),
            336 => 
            array (
                'id' => 1410,
                'psgcCode' => '141104000',
                'name' => 'BOKOD',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141104,
            ),
            337 => 
            array (
                'id' => 1411,
                'psgcCode' => '141105000',
                'name' => 'BUGUIAS',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141105,
            ),
            338 => 
            array (
                'id' => 1412,
                'psgcCode' => '141106000',
                'name' => 'ITOGON',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141106,
            ),
            339 => 
            array (
                'id' => 1413,
                'psgcCode' => '141107000',
                'name' => 'KABAYAN',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141107,
            ),
            340 => 
            array (
                'id' => 1414,
                'psgcCode' => '141108000',
                'name' => 'KAPANGAN',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141108,
            ),
            341 => 
            array (
                'id' => 1415,
                'psgcCode' => '141109000',
                'name' => 'KIBUNGAN',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141109,
            ),
            342 => 
            array (
                'id' => 1416,
                'psgcCode' => '141110000',
            'name' => 'LA TRINIDAD (Capital)',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141110,
            ),
            343 => 
            array (
                'id' => 1417,
                'psgcCode' => '141111000',
                'name' => 'MANKAYAN',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141111,
            ),
            344 => 
            array (
                'id' => 1418,
                'psgcCode' => '141112000',
                'name' => 'SABLAN',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141112,
            ),
            345 => 
            array (
                'id' => 1419,
                'psgcCode' => '141113000',
                'name' => 'TUBA',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141113,
            ),
            346 => 
            array (
                'id' => 1420,
                'psgcCode' => '141114000',
                'name' => 'TUBLAY',
                'region_code' => 14,
                'province_code' => 1411,
                'code' => 141114,
            ),
            347 => 
            array (
                'id' => 1421,
                'psgcCode' => '142701000',
                'name' => 'BANAUE',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142701,
            ),
            348 => 
            array (
                'id' => 1422,
                'psgcCode' => '142702000',
                'name' => 'HUNGDUAN',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142702,
            ),
            349 => 
            array (
                'id' => 1423,
                'psgcCode' => '142703000',
                'name' => 'KIANGAN',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142703,
            ),
            350 => 
            array (
                'id' => 1424,
                'psgcCode' => '142704000',
            'name' => 'LAGAWE (Capital)',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142704,
            ),
            351 => 
            array (
                'id' => 1425,
                'psgcCode' => '142705000',
                'name' => 'LAMUT',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142705,
            ),
            352 => 
            array (
                'id' => 1426,
                'psgcCode' => '142706000',
                'name' => 'MAYOYAO',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142706,
            ),
            353 => 
            array (
                'id' => 1427,
                'psgcCode' => '142707000',
            'name' => 'ALFONSO LISTA (POTIA)',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142707,
            ),
            354 => 
            array (
                'id' => 1428,
                'psgcCode' => '142708000',
                'name' => 'AGUINALDO',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142708,
            ),
            355 => 
            array (
                'id' => 1429,
                'psgcCode' => '142709000',
                'name' => 'HINGYON',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142709,
            ),
            356 => 
            array (
                'id' => 1430,
                'psgcCode' => '142710000',
                'name' => 'TINOC',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142710,
            ),
            357 => 
            array (
                'id' => 1431,
                'psgcCode' => '142711000',
                'name' => 'ASIPULO',
                'region_code' => 14,
                'province_code' => 1427,
                'code' => 142711,
            ),
            358 => 
            array (
                'id' => 1432,
                'psgcCode' => '143201000',
                'name' => 'BALBALAN',
                'region_code' => 14,
                'province_code' => 1432,
                'code' => 143201,
            ),
            359 => 
            array (
                'id' => 1433,
                'psgcCode' => '143206000',
                'name' => 'LUBUAGAN',
                'region_code' => 14,
                'province_code' => 1432,
                'code' => 143206,
            ),
            360 => 
            array (
                'id' => 1434,
                'psgcCode' => '143208000',
                'name' => 'PASIL',
                'region_code' => 14,
                'province_code' => 1432,
                'code' => 143208,
            ),
            361 => 
            array (
                'id' => 1435,
                'psgcCode' => '143209000',
                'name' => 'PINUKPUK',
                'region_code' => 14,
                'province_code' => 1432,
                'code' => 143209,
            ),
            362 => 
            array (
                'id' => 1436,
                'psgcCode' => '143211000',
            'name' => 'RIZAL (LIWAN)',
                'region_code' => 14,
                'province_code' => 1432,
                'code' => 143211,
            ),
            363 => 
            array (
                'id' => 1437,
                'psgcCode' => '143213000',
            'name' => 'CITY OF TABUK (Capital)',
                'region_code' => 14,
                'province_code' => 1432,
                'code' => 143213,
            ),
            364 => 
            array (
                'id' => 1438,
                'psgcCode' => '143214000',
                'name' => 'TANUDAN',
                'region_code' => 14,
                'province_code' => 1432,
                'code' => 143214,
            ),
            365 => 
            array (
                'id' => 1439,
                'psgcCode' => '143215000',
                'name' => 'TINGLAYAN',
                'region_code' => 14,
                'province_code' => 1432,
                'code' => 143215,
            ),
            366 => 
            array (
                'id' => 1440,
                'psgcCode' => '144401000',
                'name' => 'BARLIG',
                'region_code' => 14,
                'province_code' => 1444,
                'code' => 144401,
            ),
            367 => 
            array (
                'id' => 1441,
                'psgcCode' => '144402000',
                'name' => 'BAUKO',
                'region_code' => 14,
                'province_code' => 1444,
                'code' => 144402,
            ),
            368 => 
            array (
                'id' => 1442,
                'psgcCode' => '144403000',
                'name' => 'BESAO',
                'region_code' => 14,
                'province_code' => 1444,
                'code' => 144403,
            ),
            369 => 
            array (
                'id' => 1443,
                'psgcCode' => '144404000',
            'name' => 'BONTOC (Capital)',
                'region_code' => 14,
                'province_code' => 1444,
                'code' => 144404,
            ),
            370 => 
            array (
                'id' => 1444,
                'psgcCode' => '144405000',
                'name' => 'NATONIN',
                'region_code' => 14,
                'province_code' => 1444,
                'code' => 144405,
            ),
            371 => 
            array (
                'id' => 1445,
                'psgcCode' => '144406000',
                'name' => 'PARACELIS',
                'region_code' => 14,
                'province_code' => 1444,
                'code' => 144406,
            ),
            372 => 
            array (
                'id' => 1446,
                'psgcCode' => '144407000',
                'name' => 'SABANGAN',
                'region_code' => 14,
                'province_code' => 1444,
                'code' => 144407,
            ),
            373 => 
            array (
                'id' => 1447,
                'psgcCode' => '144408000',
                'name' => 'SADANGA',
                'region_code' => 14,
                'province_code' => 1444,
                'code' => 144408,
            ),
            374 => 
            array (
                'id' => 1448,
                'psgcCode' => '144409000',
                'name' => 'SAGADA',
                'region_code' => 14,
                'province_code' => 1444,
                'code' => 144409,
            ),
            375 => 
            array (
                'id' => 1449,
                'psgcCode' => '144410000',
                'name' => 'TADIAN',
                'region_code' => 14,
                'province_code' => 1444,
                'code' => 144410,
            ),
            376 => 
            array (
                'id' => 1450,
                'psgcCode' => '148101000',
            'name' => 'CALANASAN (BAYAG)',
                'region_code' => 14,
                'province_code' => 1481,
                'code' => 148101,
            ),
            377 => 
            array (
                'id' => 1451,
                'psgcCode' => '148102000',
                'name' => 'CONNER',
                'region_code' => 14,
                'province_code' => 1481,
                'code' => 148102,
            ),
            378 => 
            array (
                'id' => 1452,
                'psgcCode' => '148103000',
                'name' => 'FLORA',
                'region_code' => 14,
                'province_code' => 1481,
                'code' => 148103,
            ),
            379 => 
            array (
                'id' => 1453,
                'psgcCode' => '148104000',
            'name' => 'KABUGAO (Capital)',
                'region_code' => 14,
                'province_code' => 1481,
                'code' => 148104,
            ),
            380 => 
            array (
                'id' => 1454,
                'psgcCode' => '148105000',
                'name' => 'LUNA',
                'region_code' => 14,
                'province_code' => 1481,
                'code' => 148105,
            ),
            381 => 
            array (
                'id' => 1455,
                'psgcCode' => '148106000',
                'name' => 'PUDTOL',
                'region_code' => 14,
                'province_code' => 1481,
                'code' => 148106,
            ),
            382 => 
            array (
                'id' => 1456,
                'psgcCode' => '148107000',
                'name' => 'SANTA MARCELA',
                'region_code' => 14,
                'province_code' => 1481,
                'code' => 148107,
            ),
            383 => 
            array (
                'id' => 1457,
                'psgcCode' => '150702000',
                'name' => 'CITY OF LAMITAN',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150702,
            ),
            384 => 
            array (
                'id' => 1458,
                'psgcCode' => '150703000',
                'name' => 'LANTAWAN',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150703,
            ),
            385 => 
            array (
                'id' => 1459,
                'psgcCode' => '150704000',
                'name' => 'MALUSO',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150704,
            ),
            386 => 
            array (
                'id' => 1460,
                'psgcCode' => '150705000',
                'name' => 'SUMISIP',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150705,
            ),
            387 => 
            array (
                'id' => 1461,
                'psgcCode' => '150706000',
                'name' => 'TIPO-TIPO',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150706,
            ),
            388 => 
            array (
                'id' => 1462,
                'psgcCode' => '150707000',
                'name' => 'TUBURAN',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150707,
            ),
            389 => 
            array (
                'id' => 1463,
                'psgcCode' => '150708000',
                'name' => 'AKBAR',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150708,
            ),
            390 => 
            array (
                'id' => 1464,
                'psgcCode' => '150709000',
                'name' => 'AL-BARKA',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150709,
            ),
            391 => 
            array (
                'id' => 1465,
                'psgcCode' => '150710000',
                'name' => 'HADJI MOHAMMAD AJUL',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150710,
            ),
            392 => 
            array (
                'id' => 1466,
                'psgcCode' => '150711000',
                'name' => 'UNGKAYA PUKAN',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150711,
            ),
            393 => 
            array (
                'id' => 1467,
                'psgcCode' => '150712000',
                'name' => 'HADJI MUHTAMAD',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150712,
            ),
            394 => 
            array (
                'id' => 1468,
                'psgcCode' => '150713000',
                'name' => 'TABUAN-LASA',
                'region_code' => 15,
                'province_code' => 1507,
                'code' => 150713,
            ),
            395 => 
            array (
                'id' => 1469,
                'psgcCode' => '153601000',
            'name' => 'BACOLOD-KALAWI (BACOLOD GRANDE)',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153601,
            ),
            396 => 
            array (
                'id' => 1470,
                'psgcCode' => '153602000',
                'name' => 'BALABAGAN',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153602,
            ),
            397 => 
            array (
                'id' => 1471,
                'psgcCode' => '153603000',
            'name' => 'BALINDONG (WATU)',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153603,
            ),
            398 => 
            array (
                'id' => 1472,
                'psgcCode' => '153604000',
                'name' => 'BAYANG',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153604,
            ),
            399 => 
            array (
                'id' => 1473,
                'psgcCode' => '153605000',
                'name' => 'BINIDAYAN',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153605,
            ),
            400 => 
            array (
                'id' => 1474,
                'psgcCode' => '153606000',
                'name' => 'BUBONG',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153606,
            ),
            401 => 
            array (
                'id' => 1475,
                'psgcCode' => '153607000',
                'name' => 'BUTIG',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153607,
            ),
            402 => 
            array (
                'id' => 1476,
                'psgcCode' => '153609000',
                'name' => 'GANASSI',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153609,
            ),
            403 => 
            array (
                'id' => 1477,
                'psgcCode' => '153610000',
                'name' => 'KAPAI',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153610,
            ),
            404 => 
            array (
                'id' => 1478,
                'psgcCode' => '153611000',
            'name' => 'LUMBA-BAYABAO (MAGUING)',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153611,
            ),
            405 => 
            array (
                'id' => 1479,
                'psgcCode' => '153612000',
                'name' => 'LUMBATAN',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153612,
            ),
            406 => 
            array (
                'id' => 1480,
                'psgcCode' => '153613000',
                'name' => 'MADALUM',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153613,
            ),
            407 => 
            array (
                'id' => 1481,
                'psgcCode' => '153614000',
                'name' => 'MADAMBA',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153614,
            ),
            408 => 
            array (
                'id' => 1482,
                'psgcCode' => '153615000',
                'name' => 'MALABANG',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153615,
            ),
            409 => 
            array (
                'id' => 1483,
                'psgcCode' => '153616000',
                'name' => 'MARANTAO',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153616,
            ),
            410 => 
            array (
                'id' => 1484,
                'psgcCode' => '153617000',
            'name' => 'MARAWI CITY (Capital)',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153617,
            ),
            411 => 
            array (
                'id' => 1485,
                'psgcCode' => '153618000',
                'name' => 'MASIU',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153618,
            ),
            412 => 
            array (
                'id' => 1486,
                'psgcCode' => '153619000',
                'name' => 'MULONDO',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153619,
            ),
            413 => 
            array (
                'id' => 1487,
                'psgcCode' => '153620000',
            'name' => 'PAGAYAWAN (TATARIKAN)',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153620,
            ),
            414 => 
            array (
                'id' => 1488,
                'psgcCode' => '153621000',
                'name' => 'PIAGAPO',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153621,
            ),
            415 => 
            array (
                'id' => 1489,
                'psgcCode' => '153622000',
            'name' => 'POONA BAYABAO (GATA)',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153622,
            ),
            416 => 
            array (
                'id' => 1490,
                'psgcCode' => '153623000',
                'name' => 'PUALAS',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153623,
            ),
            417 => 
            array (
                'id' => 1491,
                'psgcCode' => '153624000',
                'name' => 'DITSAAN-RAMAIN',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153624,
            ),
            418 => 
            array (
                'id' => 1492,
                'psgcCode' => '153625000',
                'name' => 'SAGUIARAN',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153625,
            ),
            419 => 
            array (
                'id' => 1493,
                'psgcCode' => '153626000',
                'name' => 'TAMPARAN',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153626,
            ),
            420 => 
            array (
                'id' => 1494,
                'psgcCode' => '153627000',
                'name' => 'TARAKA',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153627,
            ),
            421 => 
            array (
                'id' => 1495,
                'psgcCode' => '153628000',
                'name' => 'TUBARAN',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153628,
            ),
            422 => 
            array (
                'id' => 1496,
                'psgcCode' => '153629000',
                'name' => 'TUGAYA',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153629,
            ),
            423 => 
            array (
                'id' => 1497,
                'psgcCode' => '153630000',
                'name' => 'WAO',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153630,
            ),
            424 => 
            array (
                'id' => 1498,
                'psgcCode' => '153631000',
                'name' => 'MAROGONG',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153631,
            ),
            425 => 
            array (
                'id' => 1499,
                'psgcCode' => '153632000',
                'name' => 'CALANOGAS',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153632,
            ),
            426 => 
            array (
                'id' => 1500,
                'psgcCode' => '153633000',
                'name' => 'BUADIPOSO-BUNTONG',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153633,
            ),
            427 => 
            array (
                'id' => 1501,
                'psgcCode' => '153634000',
                'name' => 'MAGUING',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153634,
            ),
            428 => 
            array (
                'id' => 1502,
                'psgcCode' => '153635000',
            'name' => 'PICONG (SULTAN GUMANDER)',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153635,
            ),
            429 => 
            array (
                'id' => 1503,
                'psgcCode' => '153636000',
                'name' => 'LUMBAYANAGUE',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153636,
            ),
            430 => 
            array (
                'id' => 1504,
                'psgcCode' => '153637000',
                'name' => 'BUMBARAN',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153637,
            ),
            431 => 
            array (
                'id' => 1505,
                'psgcCode' => '153638000',
                'name' => 'TAGOLOAN II',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153638,
            ),
            432 => 
            array (
                'id' => 1506,
                'psgcCode' => '153639000',
                'name' => 'KAPATAGAN',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153639,
            ),
            433 => 
            array (
                'id' => 1507,
                'psgcCode' => '153640000',
                'name' => 'SULTAN DUMALONDONG',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153640,
            ),
            434 => 
            array (
                'id' => 1508,
                'psgcCode' => '153641000',
                'name' => 'LUMBACA-UNAYAN',
                'region_code' => 15,
                'province_code' => 1536,
                'code' => 153641,
            ),
            435 => 
            array (
                'id' => 1509,
                'psgcCode' => '153801000',
                'name' => 'AMPATUAN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153801,
            ),
            436 => 
            array (
                'id' => 1510,
                'psgcCode' => '153802000',
                'name' => 'BULDON',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153802,
            ),
            437 => 
            array (
                'id' => 1511,
                'psgcCode' => '153803000',
                'name' => 'BULUAN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153803,
            ),
            438 => 
            array (
                'id' => 1512,
                'psgcCode' => '153805000',
                'name' => 'DATU PAGLAS',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153805,
            ),
            439 => 
            array (
                'id' => 1513,
                'psgcCode' => '153806000',
                'name' => 'DATU PIANG',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153806,
            ),
            440 => 
            array (
                'id' => 1514,
                'psgcCode' => '153807000',
            'name' => 'DATU ODIN SINSUAT (DINAIG)',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153807,
            ),
            441 => 
            array (
                'id' => 1515,
                'psgcCode' => '153808000',
            'name' => 'SHARIFF AGUAK (MAGANOY) (Capital)',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153808,
            ),
            442 => 
            array (
                'id' => 1516,
                'psgcCode' => '153809000',
                'name' => 'MATANOG',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153809,
            ),
            443 => 
            array (
                'id' => 1517,
                'psgcCode' => '153810000',
                'name' => 'PAGALUNGAN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153810,
            ),
            444 => 
            array (
                'id' => 1518,
                'psgcCode' => '153811000',
                'name' => 'PARANG',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153811,
            ),
            445 => 
            array (
                'id' => 1519,
                'psgcCode' => '153812000',
            'name' => 'SULTAN KUDARAT (NULING)',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153812,
            ),
            446 => 
            array (
                'id' => 1520,
                'psgcCode' => '153813000',
            'name' => 'SULTAN SA BARONGIS (LAMBAYONG)',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153813,
            ),
            447 => 
            array (
                'id' => 1521,
                'psgcCode' => '153814000',
            'name' => 'KABUNTALAN (TUMBAO)',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153814,
            ),
            448 => 
            array (
                'id' => 1522,
                'psgcCode' => '153815000',
                'name' => 'UPI',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153815,
            ),
            449 => 
            array (
                'id' => 1523,
                'psgcCode' => '153816000',
                'name' => 'TALAYAN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153816,
            ),
            450 => 
            array (
                'id' => 1524,
                'psgcCode' => '153817000',
                'name' => 'SOUTH UPI',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153817,
            ),
            451 => 
            array (
                'id' => 1525,
                'psgcCode' => '153818000',
                'name' => 'BARIRA',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153818,
            ),
            452 => 
            array (
                'id' => 1526,
                'psgcCode' => '153819000',
                'name' => 'GEN. S. K. PENDATUN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153819,
            ),
            453 => 
            array (
                'id' => 1527,
                'psgcCode' => '153820000',
                'name' => 'MAMASAPANO',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153820,
            ),
            454 => 
            array (
                'id' => 1528,
                'psgcCode' => '153821000',
                'name' => 'TALITAY',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153821,
            ),
            455 => 
            array (
                'id' => 1529,
                'psgcCode' => '153822000',
                'name' => 'PAGAGAWAN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153822,
            ),
            456 => 
            array (
                'id' => 1530,
                'psgcCode' => '153823000',
                'name' => 'PAGLAT',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153823,
            ),
            457 => 
            array (
                'id' => 1531,
                'psgcCode' => '153824000',
                'name' => 'SULTAN MASTURA',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153824,
            ),
            458 => 
            array (
                'id' => 1532,
                'psgcCode' => '153825000',
                'name' => 'GUINDULUNGAN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153825,
            ),
            459 => 
            array (
                'id' => 1533,
                'psgcCode' => '153826000',
                'name' => 'DATU SAUDI-AMPATUAN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153826,
            ),
            460 => 
            array (
                'id' => 1534,
                'psgcCode' => '153827000',
                'name' => 'DATU UNSAY',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153827,
            ),
            461 => 
            array (
                'id' => 1535,
                'psgcCode' => '153828000',
                'name' => 'DATU ABDULLAH SANGKI',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153828,
            ),
            462 => 
            array (
                'id' => 1536,
                'psgcCode' => '153829000',
                'name' => 'RAJAH BUAYAN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153829,
            ),
            463 => 
            array (
                'id' => 1537,
                'psgcCode' => '153830000',
                'name' => 'DATU BLAH T. SINSUAT',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153830,
            ),
            464 => 
            array (
                'id' => 1538,
                'psgcCode' => '153831000',
                'name' => 'DATU ANGGAL MIDTIMBANG',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153831,
            ),
            465 => 
            array (
                'id' => 1539,
                'psgcCode' => '153832000',
                'name' => 'MANGUDADATU',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153832,
            ),
            466 => 
            array (
                'id' => 1540,
                'psgcCode' => '153833000',
                'name' => 'PANDAG',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153833,
            ),
            467 => 
            array (
                'id' => 1541,
                'psgcCode' => '153834000',
                'name' => 'NORTHERN KABUNTALAN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153834,
            ),
            468 => 
            array (
                'id' => 1542,
                'psgcCode' => '153835000',
                'name' => 'DATU HOFFER AMPATUAN',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153835,
            ),
            469 => 
            array (
                'id' => 1543,
                'psgcCode' => '153836000',
                'name' => 'DATU SALIBO',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153836,
            ),
            470 => 
            array (
                'id' => 1544,
                'psgcCode' => '153837000',
                'name' => 'SHARIFF SAYDONA MUSTAPHA',
                'region_code' => 15,
                'province_code' => 1538,
                'code' => 153837,
            ),
            471 => 
            array (
                'id' => 1545,
                'psgcCode' => '156601000',
                'name' => 'INDANAN',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156601,
            ),
            472 => 
            array (
                'id' => 1546,
                'psgcCode' => '156602000',
            'name' => 'JOLO (Capital)',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156602,
            ),
            473 => 
            array (
                'id' => 1547,
                'psgcCode' => '156603000',
                'name' => 'KALINGALAN CALUANG',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156603,
            ),
            474 => 
            array (
                'id' => 1548,
                'psgcCode' => '156604000',
                'name' => 'LUUK',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156604,
            ),
            475 => 
            array (
                'id' => 1549,
                'psgcCode' => '156605000',
                'name' => 'MAIMBUNG',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156605,
            ),
            476 => 
            array (
                'id' => 1550,
                'psgcCode' => '156606000',
            'name' => 'HADJI PANGLIMA TAHIL (MARUNGGAS)',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156606,
            ),
            477 => 
            array (
                'id' => 1551,
                'psgcCode' => '156607000',
                'name' => 'OLD PANAMAO',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156607,
            ),
            478 => 
            array (
                'id' => 1552,
                'psgcCode' => '156608000',
                'name' => 'PANGUTARAN',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156608,
            ),
            479 => 
            array (
                'id' => 1553,
                'psgcCode' => '156609000',
                'name' => 'PARANG',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156609,
            ),
            480 => 
            array (
                'id' => 1554,
                'psgcCode' => '156610000',
                'name' => 'PATA',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156610,
            ),
            481 => 
            array (
                'id' => 1555,
                'psgcCode' => '156611000',
                'name' => 'PATIKUL',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156611,
            ),
            482 => 
            array (
                'id' => 1556,
                'psgcCode' => '156612000',
                'name' => 'SIASI',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156612,
            ),
            483 => 
            array (
                'id' => 1557,
                'psgcCode' => '156613000',
                'name' => 'TALIPAO',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156613,
            ),
            484 => 
            array (
                'id' => 1558,
                'psgcCode' => '156614000',
                'name' => 'TAPUL',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156614,
            ),
            485 => 
            array (
                'id' => 1559,
                'psgcCode' => '156615000',
                'name' => 'TONGKIL',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156615,
            ),
            486 => 
            array (
                'id' => 1560,
                'psgcCode' => '156616000',
            'name' => 'PANGLIMA ESTINO (NEW PANAMAO)',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156616,
            ),
            487 => 
            array (
                'id' => 1561,
                'psgcCode' => '156617000',
                'name' => 'LUGUS',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156617,
            ),
            488 => 
            array (
                'id' => 1562,
                'psgcCode' => '156618000',
                'name' => 'PANDAMI',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156618,
            ),
            489 => 
            array (
                'id' => 1563,
                'psgcCode' => '156619000',
                'name' => 'OMAR',
                'region_code' => 15,
                'province_code' => 1566,
                'code' => 156619,
            ),
            490 => 
            array (
                'id' => 1564,
                'psgcCode' => '157001000',
            'name' => 'PANGLIMA SUGALA (BALIMBING)',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157001,
            ),
            491 => 
            array (
                'id' => 1565,
                'psgcCode' => '157002000',
            'name' => 'BONGAO (Capital)',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157002,
            ),
            492 => 
            array (
                'id' => 1566,
                'psgcCode' => '157003000',
            'name' => 'MAPUN (CAGAYAN DE TAWI-TAWI)',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157003,
            ),
            493 => 
            array (
                'id' => 1567,
                'psgcCode' => '157004000',
                'name' => 'SIMUNUL',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157004,
            ),
            494 => 
            array (
                'id' => 1568,
                'psgcCode' => '157005000',
                'name' => 'SITANGKAI',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157005,
            ),
            495 => 
            array (
                'id' => 1569,
                'psgcCode' => '157006000',
                'name' => 'SOUTH UBIAN',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157006,
            ),
            496 => 
            array (
                'id' => 1570,
                'psgcCode' => '157007000',
                'name' => 'TANDUBAS',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157007,
            ),
            497 => 
            array (
                'id' => 1571,
                'psgcCode' => '157008000',
                'name' => 'TURTLE ISLANDS',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157008,
            ),
            498 => 
            array (
                'id' => 1572,
                'psgcCode' => '157009000',
                'name' => 'LANGUYAN',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157009,
            ),
            499 => 
            array (
                'id' => 1573,
                'psgcCode' => '157010000',
                'name' => 'SAPA-SAPA',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157010,
            ),
        ));
        \DB::table('city_municipalities')->insert(array (
            0 => 
            array (
                'id' => 1574,
                'psgcCode' => '157011000',
                'name' => 'SIBUTU',
                'region_code' => 15,
                'province_code' => 1570,
                'code' => 157011,
            ),
            1 => 
            array (
                'id' => 1575,
                'psgcCode' => '160201000',
                'name' => 'BUENAVISTA',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160201,
            ),
            2 => 
            array (
                'id' => 1576,
                'psgcCode' => '160202000',
            'name' => 'BUTUAN CITY (Capital)',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160202,
            ),
            3 => 
            array (
                'id' => 1577,
                'psgcCode' => '160203000',
                'name' => 'CITY OF CABADBARAN',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160203,
            ),
            4 => 
            array (
                'id' => 1578,
                'psgcCode' => '160204000',
                'name' => 'CARMEN',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160204,
            ),
            5 => 
            array (
                'id' => 1579,
                'psgcCode' => '160205000',
                'name' => 'JABONGA',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160205,
            ),
            6 => 
            array (
                'id' => 1580,
                'psgcCode' => '160206000',
                'name' => 'KITCHARAO',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160206,
            ),
            7 => 
            array (
                'id' => 1581,
                'psgcCode' => '160207000',
                'name' => 'LAS NIEVES',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160207,
            ),
            8 => 
            array (
                'id' => 1582,
                'psgcCode' => '160208000',
                'name' => 'MAGALLANES',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160208,
            ),
            9 => 
            array (
                'id' => 1583,
                'psgcCode' => '160209000',
                'name' => 'NASIPIT',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160209,
            ),
            10 => 
            array (
                'id' => 1584,
                'psgcCode' => '160210000',
                'name' => 'SANTIAGO',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160210,
            ),
            11 => 
            array (
                'id' => 1585,
                'psgcCode' => '160211000',
                'name' => 'TUBAY',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160211,
            ),
            12 => 
            array (
                'id' => 1586,
                'psgcCode' => '160212000',
                'name' => 'REMEDIOS T. ROMUALDEZ',
                'region_code' => 16,
                'province_code' => 1602,
                'code' => 160212,
            ),
            13 => 
            array (
                'id' => 1587,
                'psgcCode' => '160301000',
                'name' => 'CITY OF BAYUGAN',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160301,
            ),
            14 => 
            array (
                'id' => 1588,
                'psgcCode' => '160302000',
                'name' => 'BUNAWAN',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160302,
            ),
            15 => 
            array (
                'id' => 1589,
                'psgcCode' => '160303000',
                'name' => 'ESPERANZA',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160303,
            ),
            16 => 
            array (
                'id' => 1590,
                'psgcCode' => '160304000',
                'name' => 'LA PAZ',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160304,
            ),
            17 => 
            array (
                'id' => 1591,
                'psgcCode' => '160305000',
                'name' => 'LORETO',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160305,
            ),
            18 => 
            array (
                'id' => 1592,
                'psgcCode' => '160306000',
            'name' => 'PROSPERIDAD (Capital)',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160306,
            ),
            19 => 
            array (
                'id' => 1593,
                'psgcCode' => '160307000',
                'name' => 'ROSARIO',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160307,
            ),
            20 => 
            array (
                'id' => 1594,
                'psgcCode' => '160308000',
                'name' => 'SAN FRANCISCO',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160308,
            ),
            21 => 
            array (
                'id' => 1595,
                'psgcCode' => '160309000',
                'name' => 'SAN LUIS',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160309,
            ),
            22 => 
            array (
                'id' => 1596,
                'psgcCode' => '160310000',
                'name' => 'SANTA JOSEFA',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160310,
            ),
            23 => 
            array (
                'id' => 1597,
                'psgcCode' => '160311000',
                'name' => 'TALACOGON',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160311,
            ),
            24 => 
            array (
                'id' => 1598,
                'psgcCode' => '160312000',
                'name' => 'TRENTO',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160312,
            ),
            25 => 
            array (
                'id' => 1599,
                'psgcCode' => '160313000',
                'name' => 'VERUELA',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160313,
            ),
            26 => 
            array (
                'id' => 1600,
                'psgcCode' => '160314000',
                'name' => 'SIBAGAT',
                'region_code' => 16,
                'province_code' => 1603,
                'code' => 160314,
            ),
            27 => 
            array (
                'id' => 1601,
                'psgcCode' => '166701000',
                'name' => 'ALEGRIA',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166701,
            ),
            28 => 
            array (
                'id' => 1602,
                'psgcCode' => '166702000',
                'name' => 'BACUAG',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166702,
            ),
            29 => 
            array (
                'id' => 1603,
                'psgcCode' => '166704000',
                'name' => 'BURGOS',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166704,
            ),
            30 => 
            array (
                'id' => 1604,
                'psgcCode' => '166706000',
                'name' => 'CLAVER',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166706,
            ),
            31 => 
            array (
                'id' => 1605,
                'psgcCode' => '166707000',
                'name' => 'DAPA',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166707,
            ),
            32 => 
            array (
                'id' => 1606,
                'psgcCode' => '166708000',
                'name' => 'DEL CARMEN',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166708,
            ),
            33 => 
            array (
                'id' => 1607,
                'psgcCode' => '166710000',
                'name' => 'GENERAL LUNA',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166710,
            ),
            34 => 
            array (
                'id' => 1608,
                'psgcCode' => '166711000',
                'name' => 'GIGAQUIT',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166711,
            ),
            35 => 
            array (
                'id' => 1609,
                'psgcCode' => '166714000',
                'name' => 'MAINIT',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166714,
            ),
            36 => 
            array (
                'id' => 1610,
                'psgcCode' => '166715000',
                'name' => 'MALIMONO',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166715,
            ),
            37 => 
            array (
                'id' => 1611,
                'psgcCode' => '166716000',
                'name' => 'PILAR',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166716,
            ),
            38 => 
            array (
                'id' => 1612,
                'psgcCode' => '166717000',
                'name' => 'PLACER',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166717,
            ),
            39 => 
            array (
                'id' => 1613,
                'psgcCode' => '166718000',
                'name' => 'SAN BENITO',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166718,
            ),
            40 => 
            array (
                'id' => 1614,
                'psgcCode' => '166719000',
            'name' => 'SAN FRANCISCO (ANAO-AON)',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166719,
            ),
            41 => 
            array (
                'id' => 1615,
                'psgcCode' => '166720000',
                'name' => 'SAN ISIDRO',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166720,
            ),
            42 => 
            array (
                'id' => 1616,
                'psgcCode' => '166721000',
            'name' => 'SANTA MONICA (SAPAO)',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166721,
            ),
            43 => 
            array (
                'id' => 1617,
                'psgcCode' => '166722000',
                'name' => 'SISON',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166722,
            ),
            44 => 
            array (
                'id' => 1618,
                'psgcCode' => '166723000',
                'name' => 'SOCORRO',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166723,
            ),
            45 => 
            array (
                'id' => 1619,
                'psgcCode' => '166724000',
            'name' => 'SURIGAO CITY (Capital)',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166724,
            ),
            46 => 
            array (
                'id' => 1620,
                'psgcCode' => '166725000',
                'name' => 'TAGANA-AN',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166725,
            ),
            47 => 
            array (
                'id' => 1621,
                'psgcCode' => '166727000',
                'name' => 'TUBOD',
                'region_code' => 16,
                'province_code' => 1667,
                'code' => 166727,
            ),
            48 => 
            array (
                'id' => 1622,
                'psgcCode' => '166801000',
                'name' => 'BAROBO',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166801,
            ),
            49 => 
            array (
                'id' => 1623,
                'psgcCode' => '166802000',
                'name' => 'BAYABAS',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166802,
            ),
            50 => 
            array (
                'id' => 1624,
                'psgcCode' => '166803000',
                'name' => 'CITY OF BISLIG',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166803,
            ),
            51 => 
            array (
                'id' => 1625,
                'psgcCode' => '166804000',
                'name' => 'CAGWAIT',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166804,
            ),
            52 => 
            array (
                'id' => 1626,
                'psgcCode' => '166805000',
                'name' => 'CANTILAN',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166805,
            ),
            53 => 
            array (
                'id' => 1627,
                'psgcCode' => '166806000',
                'name' => 'CARMEN',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166806,
            ),
            54 => 
            array (
                'id' => 1628,
                'psgcCode' => '166807000',
                'name' => 'CARRASCAL',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166807,
            ),
            55 => 
            array (
                'id' => 1629,
                'psgcCode' => '166808000',
                'name' => 'CORTES',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166808,
            ),
            56 => 
            array (
                'id' => 1630,
                'psgcCode' => '166809000',
                'name' => 'HINATUAN',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166809,
            ),
            57 => 
            array (
                'id' => 1631,
                'psgcCode' => '166810000',
                'name' => 'LANUZA',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166810,
            ),
            58 => 
            array (
                'id' => 1632,
                'psgcCode' => '166811000',
                'name' => 'LIANGA',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166811,
            ),
            59 => 
            array (
                'id' => 1633,
                'psgcCode' => '166812000',
                'name' => 'LINGIG',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166812,
            ),
            60 => 
            array (
                'id' => 1634,
                'psgcCode' => '166813000',
                'name' => 'MADRID',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166813,
            ),
            61 => 
            array (
                'id' => 1635,
                'psgcCode' => '166814000',
                'name' => 'MARIHATAG',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166814,
            ),
            62 => 
            array (
                'id' => 1636,
                'psgcCode' => '166815000',
                'name' => 'SAN AGUSTIN',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166815,
            ),
            63 => 
            array (
                'id' => 1637,
                'psgcCode' => '166816000',
                'name' => 'SAN MIGUEL',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166816,
            ),
            64 => 
            array (
                'id' => 1638,
                'psgcCode' => '166817000',
                'name' => 'TAGBINA',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166817,
            ),
            65 => 
            array (
                'id' => 1639,
                'psgcCode' => '166818000',
                'name' => 'TAGO',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166818,
            ),
            66 => 
            array (
                'id' => 1640,
                'psgcCode' => '166819000',
            'name' => 'CITY OF TANDAG (Capital)',
                'region_code' => 16,
                'province_code' => 1668,
                'code' => 166819,
            ),
            67 => 
            array (
                'id' => 1641,
                'psgcCode' => '168501000',
            'name' => 'BASILISA (RIZAL)',
                'region_code' => 16,
                'province_code' => 1685,
                'code' => 168501,
            ),
            68 => 
            array (
                'id' => 1642,
                'psgcCode' => '168502000',
                'name' => 'CAGDIANAO',
                'region_code' => 16,
                'province_code' => 1685,
                'code' => 168502,
            ),
            69 => 
            array (
                'id' => 1643,
                'psgcCode' => '168503000',
                'name' => 'DINAGAT',
                'region_code' => 16,
                'province_code' => 1685,
                'code' => 168503,
            ),
            70 => 
            array (
                'id' => 1644,
                'psgcCode' => '168504000',
            'name' => 'LIBJO (ALBOR)',
                'region_code' => 16,
                'province_code' => 1685,
                'code' => 168504,
            ),
            71 => 
            array (
                'id' => 1645,
                'psgcCode' => '168505000',
                'name' => 'LORETO',
                'region_code' => 16,
                'province_code' => 1685,
                'code' => 168505,
            ),
            72 => 
            array (
                'id' => 1646,
                'psgcCode' => '168506000',
            'name' => 'SAN JOSE (Capital)',
                'region_code' => 16,
                'province_code' => 1685,
                'code' => 168506,
            ),
            73 => 
            array (
                'id' => 1647,
                'psgcCode' => '168507000',
                'name' => 'TUBAJON',
                'region_code' => 16,
                'province_code' => 1685,
                'code' => 168507,
            ),
            74 => 
            array (
                'id' => 491,
                'psgcCode' => '174001000',
            'name' => 'BOAC (Capital)',
                'region_code' => 17,
                'province_code' => 1740,
                'code' => 174001,
            ),
            75 => 
            array (
                'id' => 492,
                'psgcCode' => '174002000',
                'name' => 'BUENAVISTA',
                'region_code' => 17,
                'province_code' => 1740,
                'code' => 174002,
            ),
            76 => 
            array (
                'id' => 493,
                'psgcCode' => '174003000',
                'name' => 'GASAN',
                'region_code' => 17,
                'province_code' => 1740,
                'code' => 174003,
            ),
            77 => 
            array (
                'id' => 494,
                'psgcCode' => '174004000',
                'name' => 'MOGPOG',
                'region_code' => 17,
                'province_code' => 1740,
                'code' => 174004,
            ),
            78 => 
            array (
                'id' => 495,
                'psgcCode' => '174005000',
                'name' => 'SANTA CRUZ',
                'region_code' => 17,
                'province_code' => 1740,
                'code' => 174005,
            ),
            79 => 
            array (
                'id' => 496,
                'psgcCode' => '174006000',
                'name' => 'TORRIJOS',
                'region_code' => 17,
                'province_code' => 1740,
                'code' => 174006,
            ),
            80 => 
            array (
                'id' => 497,
                'psgcCode' => '175101000',
                'name' => 'ABRA DE ILOG',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175101,
            ),
            81 => 
            array (
                'id' => 498,
                'psgcCode' => '175102000',
                'name' => 'CALINTAAN',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175102,
            ),
            82 => 
            array (
                'id' => 499,
                'psgcCode' => '175103000',
                'name' => 'LOOC',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175103,
            ),
            83 => 
            array (
                'id' => 500,
                'psgcCode' => '175104000',
                'name' => 'LUBANG',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175104,
            ),
            84 => 
            array (
                'id' => 501,
                'psgcCode' => '175105000',
                'name' => 'MAGSAYSAY',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175105,
            ),
            85 => 
            array (
                'id' => 502,
                'psgcCode' => '175106000',
            'name' => 'MAMBURAO (Capital)',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175106,
            ),
            86 => 
            array (
                'id' => 503,
                'psgcCode' => '175107000',
                'name' => 'PALUAN',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175107,
            ),
            87 => 
            array (
                'id' => 504,
                'psgcCode' => '175108000',
                'name' => 'RIZAL',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175108,
            ),
            88 => 
            array (
                'id' => 505,
                'psgcCode' => '175109000',
                'name' => 'SABLAYAN',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175109,
            ),
            89 => 
            array (
                'id' => 506,
                'psgcCode' => '175110000',
                'name' => 'SAN JOSE',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175110,
            ),
            90 => 
            array (
                'id' => 507,
                'psgcCode' => '175111000',
                'name' => 'SANTA CRUZ',
                'region_code' => 17,
                'province_code' => 1751,
                'code' => 175111,
            ),
            91 => 
            array (
                'id' => 508,
                'psgcCode' => '175201000',
                'name' => 'BACO',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175201,
            ),
            92 => 
            array (
                'id' => 509,
                'psgcCode' => '175202000',
                'name' => 'BANSUD',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175202,
            ),
            93 => 
            array (
                'id' => 510,
                'psgcCode' => '175203000',
                'name' => 'BONGABONG',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175203,
            ),
            94 => 
            array (
                'id' => 511,
                'psgcCode' => '175204000',
            'name' => 'BULALACAO (SAN PEDRO)',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175204,
            ),
            95 => 
            array (
                'id' => 512,
                'psgcCode' => '175205000',
            'name' => 'CITY OF CALAPAN (Capital)',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175205,
            ),
            96 => 
            array (
                'id' => 513,
                'psgcCode' => '175206000',
                'name' => 'GLORIA',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175206,
            ),
            97 => 
            array (
                'id' => 514,
                'psgcCode' => '175207000',
                'name' => 'MANSALAY',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175207,
            ),
            98 => 
            array (
                'id' => 515,
                'psgcCode' => '175208000',
                'name' => 'NAUJAN',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175208,
            ),
            99 => 
            array (
                'id' => 516,
                'psgcCode' => '175209000',
                'name' => 'PINAMALAYAN',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175209,
            ),
            100 => 
            array (
                'id' => 517,
                'psgcCode' => '175210000',
                'name' => 'POLA',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175210,
            ),
            101 => 
            array (
                'id' => 518,
                'psgcCode' => '175211000',
                'name' => 'PUERTO GALERA',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175211,
            ),
            102 => 
            array (
                'id' => 519,
                'psgcCode' => '175212000',
                'name' => 'ROXAS',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175212,
            ),
            103 => 
            array (
                'id' => 520,
                'psgcCode' => '175213000',
                'name' => 'SAN TEODORO',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175213,
            ),
            104 => 
            array (
                'id' => 521,
                'psgcCode' => '175214000',
                'name' => 'SOCORRO',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175214,
            ),
            105 => 
            array (
                'id' => 522,
                'psgcCode' => '175215000',
                'name' => 'VICTORIA',
                'region_code' => 17,
                'province_code' => 1752,
                'code' => 175215,
            ),
            106 => 
            array (
                'id' => 523,
                'psgcCode' => '175301000',
                'name' => 'ABORLAN',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175301,
            ),
            107 => 
            array (
                'id' => 524,
                'psgcCode' => '175302000',
                'name' => 'AGUTAYA',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175302,
            ),
            108 => 
            array (
                'id' => 525,
                'psgcCode' => '175303000',
                'name' => 'ARACELI',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175303,
            ),
            109 => 
            array (
                'id' => 526,
                'psgcCode' => '175304000',
                'name' => 'BALABAC',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175304,
            ),
            110 => 
            array (
                'id' => 527,
                'psgcCode' => '175305000',
                'name' => 'BATARAZA',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175305,
            ),
            111 => 
            array (
                'id' => 528,
                'psgcCode' => '175306000',
                'name' => 'BROOKE\'S POINT',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175306,
            ),
            112 => 
            array (
                'id' => 529,
                'psgcCode' => '175307000',
                'name' => 'BUSUANGA',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175307,
            ),
            113 => 
            array (
                'id' => 530,
                'psgcCode' => '175308000',
                'name' => 'CAGAYANCILLO',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175308,
            ),
            114 => 
            array (
                'id' => 531,
                'psgcCode' => '175309000',
                'name' => 'CORON',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175309,
            ),
            115 => 
            array (
                'id' => 532,
                'psgcCode' => '175310000',
                'name' => 'CUYO',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175310,
            ),
            116 => 
            array (
                'id' => 533,
                'psgcCode' => '175311000',
                'name' => 'DUMARAN',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175311,
            ),
            117 => 
            array (
                'id' => 534,
                'psgcCode' => '175312000',
            'name' => 'EL NIDO (BACUIT)',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175312,
            ),
            118 => 
            array (
                'id' => 535,
                'psgcCode' => '175313000',
                'name' => 'LINAPACAN',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175313,
            ),
            119 => 
            array (
                'id' => 536,
                'psgcCode' => '175314000',
                'name' => 'MAGSAYSAY',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175314,
            ),
            120 => 
            array (
                'id' => 537,
                'psgcCode' => '175315000',
                'name' => 'NARRA',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175315,
            ),
            121 => 
            array (
                'id' => 538,
                'psgcCode' => '175316000',
            'name' => 'PUERTO PRINCESA CITY (Capital)',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175316,
            ),
            122 => 
            array (
                'id' => 539,
                'psgcCode' => '175317000',
                'name' => 'QUEZON',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175317,
            ),
            123 => 
            array (
                'id' => 540,
                'psgcCode' => '175318000',
                'name' => 'ROXAS',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175318,
            ),
            124 => 
            array (
                'id' => 541,
                'psgcCode' => '175319000',
                'name' => 'SAN VICENTE',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175319,
            ),
            125 => 
            array (
                'id' => 542,
                'psgcCode' => '175320000',
                'name' => 'TAYTAY',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175320,
            ),
            126 => 
            array (
                'id' => 543,
                'psgcCode' => '175321000',
                'name' => 'KALAYAAN',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175321,
            ),
            127 => 
            array (
                'id' => 544,
                'psgcCode' => '175322000',
                'name' => 'CULION',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175322,
            ),
            128 => 
            array (
                'id' => 545,
                'psgcCode' => '175323000',
            'name' => 'RIZAL (MARCOS)',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175323,
            ),
            129 => 
            array (
                'id' => 546,
                'psgcCode' => '175324000',
                'name' => 'SOFRONIO ESPAÑOLA',
                'region_code' => 17,
                'province_code' => 1753,
                'code' => 175324,
            ),
            130 => 
            array (
                'id' => 547,
                'psgcCode' => '175901000',
                'name' => 'ALCANTARA',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175901,
            ),
            131 => 
            array (
                'id' => 548,
                'psgcCode' => '175902000',
                'name' => 'BANTON',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175902,
            ),
            132 => 
            array (
                'id' => 549,
                'psgcCode' => '175903000',
                'name' => 'CAJIDIOCAN',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175903,
            ),
            133 => 
            array (
                'id' => 550,
                'psgcCode' => '175904000',
                'name' => 'CALATRAVA',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175904,
            ),
            134 => 
            array (
                'id' => 551,
                'psgcCode' => '175905000',
                'name' => 'CONCEPCION',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175905,
            ),
            135 => 
            array (
                'id' => 552,
                'psgcCode' => '175906000',
                'name' => 'CORCUERA',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175906,
            ),
            136 => 
            array (
                'id' => 553,
                'psgcCode' => '175907000',
                'name' => 'LOOC',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175907,
            ),
            137 => 
            array (
                'id' => 554,
                'psgcCode' => '175908000',
                'name' => 'MAGDIWANG',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175908,
            ),
            138 => 
            array (
                'id' => 555,
                'psgcCode' => '175909000',
                'name' => 'ODIONGAN',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175909,
            ),
            139 => 
            array (
                'id' => 556,
                'psgcCode' => '175910000',
            'name' => 'ROMBLON (Capital)',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175910,
            ),
            140 => 
            array (
                'id' => 557,
                'psgcCode' => '175911000',
                'name' => 'SAN AGUSTIN',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175911,
            ),
            141 => 
            array (
                'id' => 558,
                'psgcCode' => '175912000',
                'name' => 'SAN ANDRES',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175912,
            ),
            142 => 
            array (
                'id' => 559,
                'psgcCode' => '175913000',
                'name' => 'SAN FERNANDO',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175913,
            ),
            143 => 
            array (
                'id' => 560,
                'psgcCode' => '175914000',
                'name' => 'SAN JOSE',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175914,
            ),
            144 => 
            array (
                'id' => 561,
                'psgcCode' => '175915000',
                'name' => 'SANTA FE',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175915,
            ),
            145 => 
            array (
                'id' => 562,
                'psgcCode' => '175916000',
                'name' => 'FERROL',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175916,
            ),
            146 => 
            array (
                'id' => 563,
                'psgcCode' => '175917000',
            'name' => 'SANTA MARIA (IMELDA)',
                'region_code' => 17,
                'province_code' => 1759,
                'code' => 175917,
            ),
        ));
        
        
    }
}