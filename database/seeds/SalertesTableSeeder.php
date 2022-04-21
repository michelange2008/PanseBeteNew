<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalertesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('salertes')->delete();
        
        \DB::table('salertes')->insert(array (
            0 => 
            array (
                'id' => 83,
                'alerte_id' => 11,
                'saisie_id' => 104,
                'valeur' => '0',
                'danger' => 1,
            ),
            1 => 
            array (
                'id' => 84,
                'alerte_id' => 13,
                'saisie_id' => 104,
                'valeur' => '45',
                'danger' => 1,
            ),
            2 => 
            array (
                'id' => 85,
                'alerte_id' => 1,
                'saisie_id' => 105,
                'valeur' => '1',
                'danger' => 1,
            ),
            3 => 
            array (
                'id' => 86,
                'alerte_id' => 2,
                'saisie_id' => 105,
                'valeur' => '2',
                'danger' => 1,
            ),
            4 => 
            array (
                'id' => 87,
                'alerte_id' => 3,
                'saisie_id' => 105,
                'valeur' => '30',
                'danger' => 1,
            ),
            5 => 
            array (
                'id' => 88,
                'alerte_id' => 24,
                'saisie_id' => 105,
                'valeur' => '30',
                'danger' => 1,
            ),
            6 => 
            array (
                'id' => 95,
                'alerte_id' => 1,
                'saisie_id' => 107,
                'valeur' => '1',
                'danger' => 1,
            ),
            7 => 
            array (
                'id' => 96,
                'alerte_id' => 2,
                'saisie_id' => 107,
                'valeur' => '3',
                'danger' => 1,
            ),
            8 => 
            array (
                'id' => 97,
                'alerte_id' => 5,
                'saisie_id' => 108,
                'valeur' => '20',
                'danger' => 1,
            ),
            9 => 
            array (
                'id' => 98,
                'alerte_id' => 6,
                'saisie_id' => 108,
                'valeur' => '30',
                'danger' => 1,
            ),
            10 => 
            array (
                'id' => 99,
                'alerte_id' => 6,
                'saisie_id' => 109,
                'valeur' => '50',
                'danger' => 1,
            ),
            11 => 
            array (
                'id' => 100,
                'alerte_id' => 3,
                'saisie_id' => 110,
                'valeur' => '50',
                'danger' => 1,
            ),
            12 => 
            array (
                'id' => 102,
                'alerte_id' => 4000,
                'saisie_id' => 112,
                'valeur' => '1',
                'danger' => 1,
            ),
            13 => 
            array (
                'id' => 103,
                'alerte_id' => 4001,
                'saisie_id' => 112,
                'valeur' => '1',
                'danger' => 1,
            ),
            14 => 
            array (
                'id' => 104,
                'alerte_id' => 3000,
                'saisie_id' => 113,
                'valeur' => '2',
                'danger' => 1,
            ),
            15 => 
            array (
                'id' => 108,
                'alerte_id' => 1043,
                'saisie_id' => 114,
                'valeur' => '50',
                'danger' => 1,
            ),
            16 => 
            array (
                'id' => 113,
                'alerte_id' => 1046,
                'saisie_id' => 114,
                'valeur' => '30',
                'danger' => 1,
            ),
            17 => 
            array (
                'id' => 114,
                'alerte_id' => 1024,
                'saisie_id' => 114,
                'valeur' => '15',
                'danger' => 1,
            ),
            18 => 
            array (
                'id' => 115,
                'alerte_id' => 1021,
                'saisie_id' => 114,
                'valeur' => '3',
                'danger' => 1,
            ),
            19 => 
            array (
                'id' => 162,
                'alerte_id' => 3001,
                'saisie_id' => 117,
                'valeur' => '2',
                'danger' => 1,
            ),
            20 => 
            array (
                'id' => 163,
                'alerte_id' => 3002,
                'saisie_id' => 117,
                'valeur' => '50',
                'danger' => 1,
            ),
            21 => 
            array (
                'id' => 164,
                'alerte_id' => 3008,
                'saisie_id' => 117,
                'valeur' => '50',
                'danger' => 1,
            ),
            22 => 
            array (
                'id' => 171,
                'alerte_id' => 3010,
                'saisie_id' => 117,
                'valeur' => '80',
                'danger' => 1,
            ),
            23 => 
            array (
                'id' => 172,
                'alerte_id' => 3011,
                'saisie_id' => 117,
                'valeur' => '5',
                'danger' => 1,
            ),
            24 => 
            array (
                'id' => 173,
                'alerte_id' => 1001,
                'saisie_id' => 114,
                'valeur' => '1',
                'danger' => 1,
            ),
            25 => 
            array (
                'id' => 174,
                'alerte_id' => 1005,
                'saisie_id' => 114,
                'valeur' => '10',
                'danger' => 1,
            ),
            26 => 
            array (
                'id' => 175,
                'alerte_id' => 1011,
                'saisie_id' => 120,
                'valeur' => '10',
                'danger' => 1,
            ),
            27 => 
            array (
                'id' => 176,
                'alerte_id' => 1013,
                'saisie_id' => 120,
                'valeur' => '0',
                'danger' => 1,
            ),
            28 => 
            array (
                'id' => 177,
                'alerte_id' => 1019,
                'saisie_id' => 120,
                'valeur' => '23',
                'danger' => 1,
            ),
            29 => 
            array (
                'id' => 178,
                'alerte_id' => 1021,
                'saisie_id' => 120,
                'valeur' => '1',
                'danger' => 1,
            ),
            30 => 
            array (
                'id' => 179,
                'alerte_id' => 1023,
                'saisie_id' => 120,
                'valeur' => '4',
                'danger' => 1,
            ),
            31 => 
            array (
                'id' => 180,
                'alerte_id' => 2000,
                'saisie_id' => 122,
                'valeur' => '1',
                'danger' => 1,
            ),
            32 => 
            array (
                'id' => 181,
                'alerte_id' => 2004,
                'saisie_id' => 122,
                'valeur' => '1',
                'danger' => 1,
            ),
            33 => 
            array (
                'id' => 182,
                'alerte_id' => 2049,
                'saisie_id' => 122,
                'valeur' => '0',
                'danger' => 1,
            ),
            34 => 
            array (
                'id' => 184,
                'alerte_id' => 2030,
                'saisie_id' => 123,
                'valeur' => '1000000',
                'danger' => 1,
            ),
            35 => 
            array (
                'id' => 185,
                'alerte_id' => 2033,
                'saisie_id' => 123,
                'valeur' => '50',
                'danger' => 1,
            ),
            36 => 
            array (
                'id' => 186,
                'alerte_id' => 2035,
                'saisie_id' => 123,
                'valeur' => '10',
                'danger' => 1,
            ),
            37 => 
            array (
                'id' => 187,
                'alerte_id' => 2049,
                'saisie_id' => 123,
                'valeur' => '0',
                'danger' => 1,
            ),
            38 => 
            array (
                'id' => 188,
                'alerte_id' => 2054,
                'saisie_id' => 123,
                'valeur' => '1',
                'danger' => 1,
            ),
            39 => 
            array (
                'id' => 189,
                'alerte_id' => 2055,
                'saisie_id' => 123,
                'valeur' => '10',
                'danger' => 1,
            ),
            40 => 
            array (
                'id' => 190,
                'alerte_id' => 2061,
                'saisie_id' => 123,
                'valeur' => '5',
                'danger' => 1,
            ),
            41 => 
            array (
                'id' => 191,
                'alerte_id' => 1011,
                'saisie_id' => 126,
                'valeur' => '0',
                'danger' => 1,
            ),
            42 => 
            array (
                'id' => 192,
                'alerte_id' => 1013,
                'saisie_id' => 126,
                'valeur' => '0',
                'danger' => 1,
            ),
            43 => 
            array (
                'id' => 212,
                'alerte_id' => 1002,
                'saisie_id' => 127,
                'valeur' => '2',
                'danger' => 1,
            ),
            44 => 
            array (
                'id' => 213,
                'alerte_id' => 1003,
                'saisie_id' => 127,
                'valeur' => '1',
                'danger' => 1,
            ),
            45 => 
            array (
                'id' => 214,
                'alerte_id' => 1010,
                'saisie_id' => 127,
                'valeur' => '500',
                'danger' => 1,
            ),
            46 => 
            array (
                'id' => 215,
                'alerte_id' => 1025,
                'saisie_id' => 127,
                'valeur' => '10',
                'danger' => 1,
            ),
            47 => 
            array (
                'id' => 216,
                'alerte_id' => 1029,
                'saisie_id' => 127,
                'valeur' => '20',
                'danger' => 1,
            ),
            48 => 
            array (
                'id' => 221,
                'alerte_id' => 3019,
                'saisie_id' => 134,
                'valeur' => '4000000',
                'danger' => 1,
            ),
            49 => 
            array (
                'id' => 296,
                'alerte_id' => 1029,
                'saisie_id' => 135,
                'valeur' => '30',
                'danger' => 1,
            ),
            50 => 
            array (
                'id' => 297,
                'alerte_id' => 1030,
                'saisie_id' => 135,
                'valeur' => '18',
                'danger' => 1,
            ),
            51 => 
            array (
                'id' => 298,
                'alerte_id' => 4000,
                'saisie_id' => 138,
                'valeur' => '1',
                'danger' => 1,
            ),
            52 => 
            array (
                'id' => 299,
                'alerte_id' => 4001,
                'saisie_id' => 138,
                'valeur' => '1',
                'danger' => 1,
            ),
            53 => 
            array (
                'id' => 300,
                'alerte_id' => 4003,
                'saisie_id' => 138,
                'valeur' => '7',
                'danger' => 1,
            ),
            54 => 
            array (
                'id' => 301,
                'alerte_id' => 4005,
                'saisie_id' => 138,
                'valeur' => '30',
                'danger' => 1,
            ),
            55 => 
            array (
                'id' => 302,
                'alerte_id' => 4006,
                'saisie_id' => 138,
                'valeur' => '1',
                'danger' => 1,
            ),
            56 => 
            array (
                'id' => 303,
                'alerte_id' => 4014,
                'saisie_id' => 138,
                'valeur' => '1',
                'danger' => 1,
            ),
            57 => 
            array (
                'id' => 304,
                'alerte_id' => 4015,
                'saisie_id' => 138,
                'valeur' => '5',
                'danger' => 1,
            ),
            58 => 
            array (
                'id' => 305,
                'alerte_id' => 4019,
                'saisie_id' => 138,
                'valeur' => '40',
                'danger' => 1,
            ),
            59 => 
            array (
                'id' => 306,
                'alerte_id' => 4023,
                'saisie_id' => 138,
                'valeur' => '3',
                'danger' => 1,
            ),
            60 => 
            array (
                'id' => 307,
                'alerte_id' => 4024,
                'saisie_id' => 138,
                'valeur' => '7',
                'danger' => 1,
            ),
            61 => 
            array (
                'id' => 308,
                'alerte_id' => 4025,
                'saisie_id' => 138,
                'valeur' => '7',
                'danger' => 1,
            ),
            62 => 
            array (
                'id' => 309,
                'alerte_id' => 4028,
                'saisie_id' => 138,
                'valeur' => '5',
                'danger' => 1,
            ),
            63 => 
            array (
                'id' => 310,
                'alerte_id' => 4033,
                'saisie_id' => 138,
                'valeur' => '5',
                'danger' => 1,
            ),
            64 => 
            array (
                'id' => 311,
                'alerte_id' => 4037,
                'saisie_id' => 138,
                'valeur' => '19',
                'danger' => 1,
            ),
            65 => 
            array (
                'id' => 312,
                'alerte_id' => 4040,
                'saisie_id' => 138,
                'valeur' => '5',
                'danger' => 1,
            ),
            66 => 
            array (
                'id' => 313,
                'alerte_id' => 4043,
                'saisie_id' => 138,
                'valeur' => '5',
                'danger' => 1,
            ),
            67 => 
            array (
                'id' => 314,
                'alerte_id' => 4045,
                'saisie_id' => 138,
                'valeur' => '20',
                'danger' => 1,
            ),
            68 => 
            array (
                'id' => 315,
                'alerte_id' => 4049,
                'saisie_id' => 138,
                'valeur' => '1',
                'danger' => 1,
            ),
            69 => 
            array (
                'id' => 316,
                'alerte_id' => 4054,
                'saisie_id' => 138,
                'valeur' => '20',
                'danger' => 1,
            ),
            70 => 
            array (
                'id' => 317,
                'alerte_id' => 4057,
                'saisie_id' => 138,
                'valeur' => '3',
                'danger' => 1,
            ),
            71 => 
            array (
                'id' => 329,
                'alerte_id' => 2021,
                'saisie_id' => 137,
                'valeur' => '2',
                'danger' => 1,
            ),
            72 => 
            array (
                'id' => 330,
                'alerte_id' => 2023,
                'saisie_id' => 137,
                'valeur' => '1',
                'danger' => 1,
            ),
            73 => 
            array (
                'id' => 331,
                'alerte_id' => 2025,
                'saisie_id' => 137,
                'valeur' => '2',
                'danger' => 1,
            ),
            74 => 
            array (
                'id' => 381,
                'alerte_id' => 2013,
                'saisie_id' => 137,
                'valeur' => '90',
                'danger' => 1,
            ),
            75 => 
            array (
                'id' => 382,
                'alerte_id' => 2014,
                'saisie_id' => 137,
                'valeur' => '33',
                'danger' => 1,
            ),
            76 => 
            array (
                'id' => 383,
                'alerte_id' => 2015,
                'saisie_id' => 137,
                'valeur' => '45',
                'danger' => 1,
            ),
            77 => 
            array (
                'id' => 384,
                'alerte_id' => 2017,
                'saisie_id' => 137,
                'valeur' => '12',
                'danger' => 1,
            ),
            78 => 
            array (
                'id' => 385,
                'alerte_id' => 2019,
                'saisie_id' => 137,
                'valeur' => '11',
                'danger' => 1,
            ),
            79 => 
            array (
                'id' => 386,
                'alerte_id' => 2020,
                'saisie_id' => 137,
                'valeur' => '4',
                'danger' => 1,
            ),
            80 => 
            array (
                'id' => 387,
                'alerte_id' => 2030,
                'saisie_id' => 137,
                'valeur' => '300000',
                'danger' => 1,
            ),
            81 => 
            array (
                'id' => 388,
                'alerte_id' => 2032,
                'saisie_id' => 137,
                'valeur' => '12',
                'danger' => 1,
            ),
            82 => 
            array (
                'id' => 389,
                'alerte_id' => 2033,
                'saisie_id' => 137,
                'valeur' => '30',
                'danger' => 1,
            ),
            83 => 
            array (
                'id' => 390,
                'alerte_id' => 2034,
                'saisie_id' => 137,
                'valeur' => '2',
                'danger' => 1,
            ),
            84 => 
            array (
                'id' => 391,
                'alerte_id' => 2059,
                'saisie_id' => 137,
                'valeur' => '3',
                'danger' => 1,
            ),
            85 => 
            array (
                'id' => 392,
                'alerte_id' => 2060,
                'saisie_id' => 137,
                'valeur' => '1',
                'danger' => 1,
            ),
            86 => 
            array (
                'id' => 393,
                'alerte_id' => 2061,
                'saisie_id' => 137,
                'valeur' => '7',
                'danger' => 1,
            ),
            87 => 
            array (
                'id' => 394,
                'alerte_id' => 4007,
                'saisie_id' => 139,
                'valeur' => '2',
                'danger' => 1,
            ),
            88 => 
            array (
                'id' => 404,
                'alerte_id' => 2041,
                'saisie_id' => 137,
                'valeur' => '1',
                'danger' => 1,
            ),
            89 => 
            array (
                'id' => 405,
                'alerte_id' => 2044,
                'saisie_id' => 137,
                'valeur' => '12',
                'danger' => 1,
            ),
            90 => 
            array (
                'id' => 406,
                'alerte_id' => 2046,
                'saisie_id' => 137,
                'valeur' => '1',
                'danger' => 1,
            ),
            91 => 
            array (
                'id' => 407,
                'alerte_id' => 2048,
                'saisie_id' => 137,
                'valeur' => '1',
                'danger' => 1,
            ),
            92 => 
            array (
                'id' => 408,
                'alerte_id' => 2049,
                'saisie_id' => 137,
                'valeur' => '1',
                'danger' => 1,
            ),
            93 => 
            array (
                'id' => 409,
                'alerte_id' => 2051,
                'saisie_id' => 137,
                'valeur' => '5',
                'danger' => 1,
            ),
            94 => 
            array (
                'id' => 410,
                'alerte_id' => 2052,
                'saisie_id' => 137,
                'valeur' => '3',
                'danger' => 1,
            ),
            95 => 
            array (
                'id' => 411,
                'alerte_id' => 2053,
                'saisie_id' => 137,
                'valeur' => '4',
                'danger' => 1,
            ),
            96 => 
            array (
                'id' => 412,
                'alerte_id' => 2054,
                'saisie_id' => 137,
                'valeur' => '1',
                'danger' => 1,
            ),
            97 => 
            array (
                'id' => 418,
                'alerte_id' => 2035,
                'saisie_id' => 137,
                'valeur' => '11',
                'danger' => 1,
            ),
            98 => 
            array (
                'id' => 419,
                'alerte_id' => 2037,
                'saisie_id' => 137,
                'valeur' => '9',
                'danger' => 1,
            ),
            99 => 
            array (
                'id' => 420,
                'alerte_id' => 2038,
                'saisie_id' => 137,
                'valeur' => '9',
                'danger' => 1,
            ),
            100 => 
            array (
                'id' => 421,
                'alerte_id' => 2039,
                'saisie_id' => 137,
                'valeur' => '18',
                'danger' => 1,
            ),
            101 => 
            array (
                'id' => 422,
                'alerte_id' => 2040,
                'saisie_id' => 137,
                'valeur' => '15',
                'danger' => 1,
            ),
            102 => 
            array (
                'id' => 441,
                'alerte_id' => 2001,
                'saisie_id' => 137,
                'valeur' => '2',
                'danger' => 1,
            ),
            103 => 
            array (
                'id' => 442,
                'alerte_id' => 2002,
                'saisie_id' => 137,
                'valeur' => '3',
                'danger' => 1,
            ),
            104 => 
            array (
                'id' => 443,
                'alerte_id' => 2005,
                'saisie_id' => 137,
                'valeur' => '1',
                'danger' => 1,
            ),
            105 => 
            array (
                'id' => 444,
                'alerte_id' => 2008,
                'saisie_id' => 137,
                'valeur' => '3',
                'danger' => 1,
            ),
            106 => 
            array (
                'id' => 445,
                'alerte_id' => 2009,
                'saisie_id' => 137,
                'valeur' => '15',
                'danger' => 1,
            ),
            107 => 
            array (
                'id' => 446,
                'alerte_id' => 2010,
                'saisie_id' => 137,
                'valeur' => '350',
                'danger' => 1,
            ),
            108 => 
            array (
                'id' => 447,
                'alerte_id' => 3003,
                'saisie_id' => 140,
                'valeur' => '25',
                'danger' => 1,
            ),
            109 => 
            array (
                'id' => 448,
                'alerte_id' => 3004,
                'saisie_id' => 140,
                'valeur' => '15',
                'danger' => 1,
            ),
            110 => 
            array (
                'id' => 449,
                'alerte_id' => 3005,
                'saisie_id' => 140,
                'valeur' => '23',
                'danger' => 1,
            ),
            111 => 
            array (
                'id' => 450,
                'alerte_id' => 3007,
                'saisie_id' => 140,
                'valeur' => '3',
                'danger' => 1,
            ),
            112 => 
            array (
                'id' => 451,
                'alerte_id' => 3008,
                'saisie_id' => 140,
                'valeur' => '3',
                'danger' => 1,
            ),
            113 => 
            array (
                'id' => 452,
                'alerte_id' => 3014,
                'saisie_id' => 140,
                'valeur' => '9',
                'danger' => 1,
            ),
            114 => 
            array (
                'id' => 453,
                'alerte_id' => 3015,
                'saisie_id' => 140,
                'valeur' => '2',
                'danger' => 1,
            ),
            115 => 
            array (
                'id' => 454,
                'alerte_id' => 3016,
                'saisie_id' => 140,
                'valeur' => '9',
                'danger' => 1,
            ),
            116 => 
            array (
                'id' => 455,
                'alerte_id' => 3017,
                'saisie_id' => 140,
                'valeur' => '12',
                'danger' => 1,
            ),
            117 => 
            array (
                'id' => 456,
                'alerte_id' => 3018,
                'saisie_id' => 140,
                'valeur' => '8',
                'danger' => 1,
            ),
            118 => 
            array (
                'id' => 457,
                'alerte_id' => 3027,
                'saisie_id' => 140,
                'valeur' => '12',
                'danger' => 1,
            ),
            119 => 
            array (
                'id' => 458,
                'alerte_id' => 3028,
                'saisie_id' => 140,
                'valeur' => '2',
                'danger' => 1,
            ),
            120 => 
            array (
                'id' => 459,
                'alerte_id' => 3035,
                'saisie_id' => 140,
                'valeur' => '1',
                'danger' => 1,
            ),
            121 => 
            array (
                'id' => 460,
                'alerte_id' => 3036,
                'saisie_id' => 140,
                'valeur' => '1',
                'danger' => 1,
            ),
            122 => 
            array (
                'id' => 461,
                'alerte_id' => 3037,
                'saisie_id' => 140,
                'valeur' => '1',
                'danger' => 1,
            ),
            123 => 
            array (
                'id' => 462,
                'alerte_id' => 3011,
                'saisie_id' => 140,
                'valeur' => '10',
                'danger' => 1,
            ),
            124 => 
            array (
                'id' => 463,
                'alerte_id' => 3012,
                'saisie_id' => 140,
                'valeur' => '15',
                'danger' => 1,
            ),
            125 => 
            array (
                'id' => 470,
                'alerte_id' => 4024,
                'saisie_id' => 139,
                'valeur' => '6',
                'danger' => 1,
            ),
            126 => 
            array (
                'id' => 471,
                'alerte_id' => 4028,
                'saisie_id' => 139,
                'valeur' => '5',
                'danger' => 1,
            ),
            127 => 
            array (
                'id' => 472,
                'alerte_id' => 4029,
                'saisie_id' => 139,
                'valeur' => '9',
                'danger' => 1,
            ),
            128 => 
            array (
                'id' => 473,
                'alerte_id' => 4033,
                'saisie_id' => 139,
                'valeur' => '9',
                'danger' => 1,
            ),
            129 => 
            array (
                'id' => 474,
                'alerte_id' => 4039,
                'saisie_id' => 139,
                'valeur' => '2',
                'danger' => 1,
            ),
            130 => 
            array (
                'id' => 475,
                'alerte_id' => 4043,
                'saisie_id' => 139,
                'valeur' => '6',
                'danger' => 1,
            ),
            131 => 
            array (
                'id' => 476,
                'alerte_id' => 1011,
                'saisie_id' => 142,
                'valeur' => '1',
                'danger' => 1,
            ),
            132 => 
            array (
                'id' => 477,
                'alerte_id' => 1013,
                'saisie_id' => 142,
                'valeur' => '1',
                'danger' => 1,
            ),
            133 => 
            array (
                'id' => 478,
                'alerte_id' => 1014,
                'saisie_id' => 142,
                'valeur' => '8',
                'danger' => 1,
            ),
            134 => 
            array (
                'id' => 479,
                'alerte_id' => 1015,
                'saisie_id' => 142,
                'valeur' => '450',
                'danger' => 1,
            ),
            135 => 
            array (
                'id' => 480,
                'alerte_id' => 1016,
                'saisie_id' => 142,
                'valeur' => '25',
                'danger' => 1,
            ),
            136 => 
            array (
                'id' => 481,
                'alerte_id' => 1017,
                'saisie_id' => 142,
                'valeur' => '70',
                'danger' => 1,
            ),
            137 => 
            array (
                'id' => 482,
                'alerte_id' => 1010,
                'saisie_id' => 142,
                'valeur' => '350',
                'danger' => 1,
            ),
            138 => 
            array (
                'id' => 483,
                'alerte_id' => 3000,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            139 => 
            array (
                'id' => 484,
                'alerte_id' => 3002,
                'saisie_id' => 145,
                'valeur' => '42',
                'danger' => 1,
            ),
            140 => 
            array (
                'id' => 485,
                'alerte_id' => 3003,
                'saisie_id' => 145,
                'valeur' => '11',
                'danger' => 1,
            ),
            141 => 
            array (
                'id' => 486,
                'alerte_id' => 3004,
                'saisie_id' => 145,
                'valeur' => '30',
                'danger' => 1,
            ),
            142 => 
            array (
                'id' => 487,
                'alerte_id' => 3005,
                'saisie_id' => 145,
                'valeur' => '30',
                'danger' => 1,
            ),
            143 => 
            array (
                'id' => 488,
                'alerte_id' => 3006,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            144 => 
            array (
                'id' => 489,
                'alerte_id' => 3011,
                'saisie_id' => 145,
                'valeur' => '3',
                'danger' => 1,
            ),
            145 => 
            array (
                'id' => 490,
                'alerte_id' => 3012,
                'saisie_id' => 145,
                'valeur' => '3',
                'danger' => 1,
            ),
            146 => 
            array (
                'id' => 491,
                'alerte_id' => 3014,
                'saisie_id' => 145,
                'valeur' => '15',
                'danger' => 1,
            ),
            147 => 
            array (
                'id' => 492,
                'alerte_id' => 3015,
                'saisie_id' => 145,
                'valeur' => '10',
                'danger' => 1,
            ),
            148 => 
            array (
                'id' => 493,
                'alerte_id' => 3016,
                'saisie_id' => 145,
                'valeur' => '15',
                'danger' => 1,
            ),
            149 => 
            array (
                'id' => 494,
                'alerte_id' => 3018,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            150 => 
            array (
                'id' => 495,
                'alerte_id' => 3019,
                'saisie_id' => 145,
                'valeur' => '4300000',
                'danger' => 1,
            ),
            151 => 
            array (
                'id' => 496,
                'alerte_id' => 3023,
                'saisie_id' => 145,
                'valeur' => '55',
                'danger' => 1,
            ),
            152 => 
            array (
                'id' => 497,
                'alerte_id' => 3024,
                'saisie_id' => 145,
                'valeur' => '35',
                'danger' => 1,
            ),
            153 => 
            array (
                'id' => 498,
                'alerte_id' => 3026,
                'saisie_id' => 145,
                'valeur' => '30',
                'danger' => 1,
            ),
            154 => 
            array (
                'id' => 499,
                'alerte_id' => 3028,
                'saisie_id' => 145,
                'valeur' => '150',
                'danger' => 1,
            ),
            155 => 
            array (
                'id' => 500,
                'alerte_id' => 3029,
                'saisie_id' => 145,
                'valeur' => '36',
                'danger' => 1,
            ),
            156 => 
            array (
                'id' => 501,
                'alerte_id' => 3030,
                'saisie_id' => 145,
                'valeur' => '40',
                'danger' => 1,
            ),
            157 => 
            array (
                'id' => 502,
                'alerte_id' => 3032,
                'saisie_id' => 145,
                'valeur' => '2',
                'danger' => 1,
            ),
            158 => 
            array (
                'id' => 503,
                'alerte_id' => 3033,
                'saisie_id' => 145,
                'valeur' => '40',
                'danger' => 1,
            ),
            159 => 
            array (
                'id' => 504,
                'alerte_id' => 3034,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            160 => 
            array (
                'id' => 505,
                'alerte_id' => 3035,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            161 => 
            array (
                'id' => 506,
                'alerte_id' => 3036,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            162 => 
            array (
                'id' => 507,
                'alerte_id' => 3037,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            163 => 
            array (
                'id' => 508,
                'alerte_id' => 3046,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            164 => 
            array (
                'id' => 509,
                'alerte_id' => 3047,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            165 => 
            array (
                'id' => 510,
                'alerte_id' => 3048,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            166 => 
            array (
                'id' => 511,
                'alerte_id' => 3050,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            167 => 
            array (
                'id' => 512,
                'alerte_id' => 3051,
                'saisie_id' => 145,
                'valeur' => '1',
                'danger' => 1,
            ),
            168 => 
            array (
                'id' => 513,
                'alerte_id' => 2055,
                'saisie_id' => 154,
                'valeur' => '10',
                'danger' => 1,
            ),
            169 => 
            array (
                'id' => 514,
                'alerte_id' => 2056,
                'saisie_id' => 154,
                'valeur' => '5',
                'danger' => 1,
            ),
            170 => 
            array (
                'id' => 515,
                'alerte_id' => 2057,
                'saisie_id' => 154,
                'valeur' => '30',
                'danger' => 1,
            ),
            171 => 
            array (
                'id' => 516,
                'alerte_id' => 2016,
                'saisie_id' => 155,
                'valeur' => '420',
                'danger' => 1,
            ),
            172 => 
            array (
                'id' => 517,
                'alerte_id' => 2017,
                'saisie_id' => 155,
                'valeur' => '30',
                'danger' => 1,
            ),
            173 => 
            array (
                'id' => 518,
                'alerte_id' => 2019,
                'saisie_id' => 155,
                'valeur' => '15',
                'danger' => 1,
            ),
            174 => 
            array (
                'id' => 520,
                'alerte_id' => 2000,
                'saisie_id' => 147,
                'valeur' => '1',
                'danger' => 1,
            ),
            175 => 
            array (
                'id' => 521,
                'alerte_id' => 2001,
                'saisie_id' => 147,
                'valeur' => '10',
                'danger' => 1,
            ),
            176 => 
            array (
                'id' => 522,
                'alerte_id' => 2002,
                'saisie_id' => 147,
                'valeur' => '5',
                'danger' => 1,
            ),
            177 => 
            array (
                'id' => 523,
                'alerte_id' => 4014,
                'saisie_id' => 148,
                'valeur' => '1',
                'danger' => 1,
            ),
            178 => 
            array (
                'id' => 524,
                'alerte_id' => 2005,
                'saisie_id' => 146,
                'valeur' => '1',
                'danger' => 1,
            ),
            179 => 
            array (
                'id' => 527,
                'alerte_id' => 2021,
                'saisie_id' => 146,
                'valeur' => '1',
                'danger' => 1,
            ),
            180 => 
            array (
                'id' => 528,
                'alerte_id' => 2031,
                'saisie_id' => 146,
                'valeur' => '25',
                'danger' => 1,
            ),
            181 => 
            array (
                'id' => 533,
                'alerte_id' => 2049,
                'saisie_id' => 146,
                'valeur' => '1',
                'danger' => 1,
            ),
            182 => 
            array (
                'id' => 534,
                'alerte_id' => 2046,
                'saisie_id' => 147,
                'valeur' => '1',
                'danger' => 1,
            ),
            183 => 
            array (
                'id' => 535,
                'alerte_id' => 2049,
                'saisie_id' => 147,
                'valeur' => '1',
                'danger' => 1,
            ),
            184 => 
            array (
                'id' => 536,
                'alerte_id' => 2051,
                'saisie_id' => 147,
                'valeur' => '1',
                'danger' => 1,
            ),
            185 => 
            array (
                'id' => 543,
                'alerte_id' => 2035,
                'saisie_id' => 146,
                'valeur' => '6',
                'danger' => 1,
            ),
            186 => 
            array (
                'id' => 544,
                'alerte_id' => 2036,
                'saisie_id' => 146,
                'valeur' => '6',
                'danger' => 1,
            ),
            187 => 
            array (
                'id' => 545,
                'alerte_id' => 2037,
                'saisie_id' => 146,
                'valeur' => '10',
                'danger' => 1,
            ),
            188 => 
            array (
                'id' => 546,
                'alerte_id' => 2039,
                'saisie_id' => 146,
                'valeur' => '12',
                'danger' => 1,
            ),
            189 => 
            array (
                'id' => 547,
                'alerte_id' => 2017,
                'saisie_id' => 146,
                'valeur' => '20',
                'danger' => 1,
            ),
            190 => 
            array (
                'id' => 548,
                'alerte_id' => 2019,
                'saisie_id' => 146,
                'valeur' => '14',
                'danger' => 1,
            ),
            191 => 
            array (
                'id' => 549,
                'alerte_id' => 4000,
                'saisie_id' => 163,
                'valeur' => '1',
                'danger' => 1,
            ),
            192 => 
            array (
                'id' => 550,
                'alerte_id' => 4003,
                'saisie_id' => 163,
                'valeur' => '10',
                'danger' => 1,
            ),
            193 => 
            array (
                'id' => 551,
                'alerte_id' => 4016,
                'saisie_id' => 163,
                'valeur' => '8',
                'danger' => 1,
            ),
            194 => 
            array (
                'id' => 552,
                'alerte_id' => 2055,
                'saisie_id' => 166,
                'valeur' => '10',
                'danger' => 1,
            ),
            195 => 
            array (
                'id' => 553,
                'alerte_id' => 2056,
                'saisie_id' => 166,
                'valeur' => '6',
                'danger' => 1,
            ),
            196 => 
            array (
                'id' => 554,
                'alerte_id' => 2057,
                'saisie_id' => 166,
                'valeur' => '25',
                'danger' => 1,
            ),
            197 => 
            array (
                'id' => 559,
                'alerte_id' => 2026,
                'saisie_id' => 168,
                'valeur' => '50',
                'danger' => 1,
            ),
            198 => 
            array (
                'id' => 560,
                'alerte_id' => 2027,
                'saisie_id' => 168,
                'valeur' => '50',
                'danger' => 1,
            ),
            199 => 
            array (
                'id' => 581,
                'alerte_id' => 3006,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            200 => 
            array (
                'id' => 585,
                'alerte_id' => 3014,
                'saisie_id' => 172,
                'valeur' => '0.03',
                'danger' => 1,
            ),
            201 => 
            array (
                'id' => 586,
                'alerte_id' => 3015,
                'saisie_id' => 172,
                'valeur' => '0.04',
                'danger' => 1,
            ),
            202 => 
            array (
                'id' => 587,
                'alerte_id' => 3016,
                'saisie_id' => 172,
                'valeur' => '0.04',
                'danger' => 1,
            ),
            203 => 
            array (
                'id' => 588,
                'alerte_id' => 3017,
                'saisie_id' => 172,
                'valeur' => '0.05',
                'danger' => 1,
            ),
            204 => 
            array (
                'id' => 589,
                'alerte_id' => 3018,
                'saisie_id' => 172,
                'valeur' => '0.01',
                'danger' => 1,
            ),
            205 => 
            array (
                'id' => 590,
                'alerte_id' => 3035,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            206 => 
            array (
                'id' => 591,
                'alerte_id' => 3036,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            207 => 
            array (
                'id' => 592,
                'alerte_id' => 3037,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            208 => 
            array (
                'id' => 593,
                'alerte_id' => 3039,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            209 => 
            array (
                'id' => 594,
                'alerte_id' => 3040,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            210 => 
            array (
                'id' => 595,
                'alerte_id' => 3041,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            211 => 
            array (
                'id' => 596,
                'alerte_id' => 3042,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            212 => 
            array (
                'id' => 597,
                'alerte_id' => 3044,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            213 => 
            array (
                'id' => 598,
                'alerte_id' => 3045,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            214 => 
            array (
                'id' => 599,
                'alerte_id' => 3010,
                'saisie_id' => 172,
                'valeur' => '1',
                'danger' => 1,
            ),
            215 => 
            array (
                'id' => 600,
                'alerte_id' => 3011,
                'saisie_id' => 172,
                'valeur' => '0.03',
                'danger' => 1,
            ),
            216 => 
            array (
                'id' => 601,
                'alerte_id' => 3012,
                'saisie_id' => 172,
                'valeur' => '0.03',
                'danger' => 1,
            ),
            217 => 
            array (
                'id' => 602,
                'alerte_id' => 2036,
                'saisie_id' => 173,
                'valeur' => '8',
                'danger' => 1,
            ),
            218 => 
            array (
                'id' => 603,
                'alerte_id' => 2037,
                'saisie_id' => 173,
                'valeur' => '30',
                'danger' => 1,
            ),
            219 => 
            array (
                'id' => 604,
                'alerte_id' => 2039,
                'saisie_id' => 173,
                'valeur' => '25',
                'danger' => 1,
            ),
            220 => 
            array (
                'id' => 605,
                'alerte_id' => 2040,
                'saisie_id' => 173,
                'valeur' => '30',
                'danger' => 1,
            ),
            221 => 
            array (
                'id' => 606,
                'alerte_id' => 1035,
                'saisie_id' => 175,
                'valeur' => '1',
                'danger' => 1,
            ),
            222 => 
            array (
                'id' => 607,
                'alerte_id' => 1037,
                'saisie_id' => 175,
                'valeur' => '1',
                'danger' => 1,
            ),
            223 => 
            array (
                'id' => 608,
                'alerte_id' => 1038,
                'saisie_id' => 175,
                'valeur' => '1',
                'danger' => 1,
            ),
            224 => 
            array (
                'id' => 609,
                'alerte_id' => 1040,
                'saisie_id' => 175,
                'valeur' => '13',
                'danger' => 1,
            ),
            225 => 
            array (
                'id' => 610,
                'alerte_id' => 1041,
                'saisie_id' => 175,
                'valeur' => '2',
                'danger' => 1,
            ),
            226 => 
            array (
                'id' => 611,
                'alerte_id' => 1042,
                'saisie_id' => 175,
                'valeur' => '1',
                'danger' => 1,
            ),
            227 => 
            array (
                'id' => 612,
                'alerte_id' => 1043,
                'saisie_id' => 175,
                'valeur' => '2',
                'danger' => 1,
            ),
            228 => 
            array (
                'id' => 613,
                'alerte_id' => 1045,
                'saisie_id' => 175,
                'valeur' => '1',
                'danger' => 1,
            ),
            229 => 
            array (
                'id' => 614,
                'alerte_id' => 2001,
                'saisie_id' => 151,
                'valeur' => '3',
                'danger' => 1,
            ),
            230 => 
            array (
                'id' => 615,
                'alerte_id' => 2004,
                'saisie_id' => 151,
                'valeur' => '1',
                'danger' => 1,
            ),
            231 => 
            array (
                'id' => 616,
                'alerte_id' => 2005,
                'saisie_id' => 151,
                'valeur' => '1',
                'danger' => 1,
            ),
            232 => 
            array (
                'id' => 617,
                'alerte_id' => 2001,
                'saisie_id' => 179,
                'valeur' => '10',
                'danger' => 1,
            ),
            233 => 
            array (
                'id' => 618,
                'alerte_id' => 2002,
                'saisie_id' => 179,
                'valeur' => '5',
                'danger' => 1,
            ),
            234 => 
            array (
                'id' => 619,
                'alerte_id' => 2004,
                'saisie_id' => 179,
                'valeur' => '1',
                'danger' => 1,
            ),
            235 => 
            array (
                'id' => 620,
                'alerte_id' => 2005,
                'saisie_id' => 179,
                'valeur' => '1',
                'danger' => 1,
            ),
            236 => 
            array (
                'id' => 621,
                'alerte_id' => 2030,
                'saisie_id' => 180,
                'valeur' => '500000',
                'danger' => 1,
            ),
            237 => 
            array (
                'id' => 622,
                'alerte_id' => 2032,
                'saisie_id' => 180,
                'valeur' => '30',
                'danger' => 1,
            ),
            238 => 
            array (
                'id' => 623,
                'alerte_id' => 2030,
                'saisie_id' => 184,
                'valeur' => '350000',
                'danger' => 1,
            ),
            239 => 
            array (
                'id' => 624,
                'alerte_id' => 2031,
                'saisie_id' => 184,
                'valeur' => '50',
                'danger' => 1,
            ),
            240 => 
            array (
                'id' => 625,
                'alerte_id' => 2032,
                'saisie_id' => 184,
                'valeur' => '18',
                'danger' => 1,
            ),
            241 => 
            array (
                'id' => 626,
                'alerte_id' => 2034,
                'saisie_id' => 184,
                'valeur' => '2',
                'danger' => 1,
            ),
            242 => 
            array (
                'id' => 627,
                'alerte_id' => 4013,
                'saisie_id' => 186,
                'valeur' => '15',
                'danger' => 1,
            ),
            243 => 
            array (
                'id' => 628,
                'alerte_id' => 4020,
                'saisie_id' => 186,
                'valeur' => '10',
                'danger' => 1,
            ),
            244 => 
            array (
                'id' => 629,
                'alerte_id' => 4024,
                'saisie_id' => 186,
                'valeur' => '8',
                'danger' => 1,
            ),
            245 => 
            array (
                'id' => 630,
                'alerte_id' => 4026,
                'saisie_id' => 186,
                'valeur' => '5',
                'danger' => 1,
            ),
            246 => 
            array (
                'id' => 631,
                'alerte_id' => 4049,
                'saisie_id' => 186,
                'valeur' => '1',
                'danger' => 1,
            ),
            247 => 
            array (
                'id' => 632,
                'alerte_id' => 4050,
                'saisie_id' => 186,
                'valeur' => '1',
                'danger' => 1,
            ),
            248 => 
            array (
                'id' => 633,
                'alerte_id' => 4054,
                'saisie_id' => 186,
                'valeur' => '10',
                'danger' => 1,
            ),
            249 => 
            array (
                'id' => 634,
                'alerte_id' => 4057,
                'saisie_id' => 186,
                'valeur' => '2',
                'danger' => 1,
            ),
            250 => 
            array (
                'id' => 645,
                'alerte_id' => 2008,
                'saisie_id' => 187,
                'valeur' => '5',
                'danger' => 1,
            ),
            251 => 
            array (
                'id' => 646,
                'alerte_id' => 2013,
                'saisie_id' => 187,
                'valeur' => '160',
                'danger' => 1,
            ),
            252 => 
            array (
                'id' => 647,
                'alerte_id' => 2014,
                'saisie_id' => 187,
                'valeur' => '35',
                'danger' => 1,
            ),
            253 => 
            array (
                'id' => 648,
                'alerte_id' => 2015,
                'saisie_id' => 187,
                'valeur' => '40',
                'danger' => 1,
            ),
            254 => 
            array (
                'id' => 649,
                'alerte_id' => 2016,
                'saisie_id' => 187,
                'valeur' => '500',
                'danger' => 1,
            ),
            255 => 
            array (
                'id' => 650,
                'alerte_id' => 2023,
                'saisie_id' => 187,
                'valeur' => '1',
                'danger' => 1,
            ),
            256 => 
            array (
                'id' => 651,
                'alerte_id' => 2030,
                'saisie_id' => 187,
                'valeur' => '400000',
                'danger' => 1,
            ),
            257 => 
            array (
                'id' => 661,
                'alerte_id' => 2017,
                'saisie_id' => 185,
                'valeur' => '20',
                'danger' => 1,
            ),
            258 => 
            array (
                'id' => 662,
                'alerte_id' => 2001,
                'saisie_id' => 185,
                'valeur' => '3',
                'danger' => 1,
            ),
            259 => 
            array (
                'id' => 663,
                'alerte_id' => 2002,
                'saisie_id' => 185,
                'valeur' => '1',
                'danger' => 1,
            ),
            260 => 
            array (
                'id' => 664,
                'alerte_id' => 2004,
                'saisie_id' => 185,
                'valeur' => '1',
                'danger' => 1,
            ),
            261 => 
            array (
                'id' => 665,
                'alerte_id' => 2007,
                'saisie_id' => 185,
                'valeur' => '16',
                'danger' => 1,
            ),
            262 => 
            array (
                'id' => 666,
                'alerte_id' => 2008,
                'saisie_id' => 185,
                'valeur' => '4',
                'danger' => 1,
            ),
            263 => 
            array (
                'id' => 667,
                'alerte_id' => 2009,
                'saisie_id' => 185,
                'valeur' => '2',
                'danger' => 1,
            ),
            264 => 
            array (
                'id' => 668,
                'alerte_id' => 2010,
                'saisie_id' => 185,
                'valeur' => '120',
                'danger' => 1,
            ),
            265 => 
            array (
                'id' => 669,
                'alerte_id' => 2021,
                'saisie_id' => 185,
                'valeur' => '1',
                'danger' => 1,
            ),
            266 => 
            array (
                'id' => 670,
                'alerte_id' => 2025,
                'saisie_id' => 185,
                'valeur' => '1',
                'danger' => 1,
            ),
            267 => 
            array (
                'id' => 671,
                'alerte_id' => 2041,
                'saisie_id' => 185,
                'valeur' => '1',
                'danger' => 1,
            ),
            268 => 
            array (
                'id' => 672,
                'alerte_id' => 2052,
                'saisie_id' => 185,
                'valeur' => '2',
                'danger' => 1,
            ),
            269 => 
            array (
                'id' => 677,
                'alerte_id' => 2030,
                'saisie_id' => 185,
                'valeur' => '400000',
                'danger' => 1,
            ),
            270 => 
            array (
                'id' => 678,
                'alerte_id' => 2034,
                'saisie_id' => 185,
                'valeur' => '2',
                'danger' => 1,
            ),
            271 => 
            array (
                'id' => 679,
                'alerte_id' => 2059,
                'saisie_id' => 185,
                'valeur' => '3',
                'danger' => 1,
            ),
            272 => 
            array (
                'id' => 680,
                'alerte_id' => 2060,
                'saisie_id' => 185,
                'valeur' => '3',
                'danger' => 1,
            ),
            273 => 
            array (
                'id' => 681,
                'alerte_id' => 2061,
                'saisie_id' => 185,
                'valeur' => '3',
                'danger' => 1,
            ),
            274 => 
            array (
                'id' => 682,
                'alerte_id' => 2056,
                'saisie_id' => 185,
                'valeur' => '3',
                'danger' => 1,
            ),
            275 => 
            array (
                'id' => 683,
                'alerte_id' => 1030,
                'saisie_id' => 188,
                'valeur' => '40',
                'danger' => 1,
            ),
            276 => 
            array (
                'id' => 684,
                'alerte_id' => 1039,
                'saisie_id' => 188,
                'valeur' => '5',
                'danger' => 1,
            ),
            277 => 
            array (
                'id' => 685,
                'alerte_id' => 2055,
                'saisie_id' => 189,
                'valeur' => '15',
                'danger' => 1,
            ),
            278 => 
            array (
                'id' => 686,
                'alerte_id' => 2056,
                'saisie_id' => 189,
                'valeur' => '12',
                'danger' => 1,
            ),
            279 => 
            array (
                'id' => 687,
                'alerte_id' => 2058,
                'saisie_id' => 189,
                'valeur' => '15',
                'danger' => 1,
            ),
            280 => 
            array (
                'id' => 688,
                'alerte_id' => 2015,
                'saisie_id' => 194,
                'valeur' => '70',
                'danger' => 1,
            ),
            281 => 
            array (
                'id' => 689,
                'alerte_id' => 2017,
                'saisie_id' => 194,
                'valeur' => '20',
                'danger' => 1,
            ),
            282 => 
            array (
                'id' => 690,
                'alerte_id' => 2018,
                'saisie_id' => 194,
                'valeur' => '30',
                'danger' => 1,
            ),
            283 => 
            array (
                'id' => 691,
                'alerte_id' => 2019,
                'saisie_id' => 194,
                'valeur' => '20',
                'danger' => 1,
            ),
            284 => 
            array (
                'id' => 692,
                'alerte_id' => 2020,
                'saisie_id' => 194,
                'valeur' => '3',
                'danger' => 1,
            ),
            285 => 
            array (
                'id' => 693,
                'alerte_id' => 2035,
                'saisie_id' => 159,
                'valeur' => '10',
                'danger' => 1,
            ),
            286 => 
            array (
                'id' => 694,
                'alerte_id' => 2036,
                'saisie_id' => 159,
                'valeur' => '15',
                'danger' => 1,
            ),
            287 => 
            array (
                'id' => 695,
                'alerte_id' => 2037,
                'saisie_id' => 159,
                'valeur' => '30',
                'danger' => 1,
            ),
            288 => 
            array (
                'id' => 696,
                'alerte_id' => 2040,
                'saisie_id' => 159,
                'valeur' => '30',
                'danger' => 1,
            ),
            289 => 
            array (
                'id' => 697,
                'alerte_id' => 2041,
                'saisie_id' => 159,
                'valeur' => '1',
                'danger' => 1,
            ),
            290 => 
            array (
                'id' => 698,
                'alerte_id' => 2046,
                'saisie_id' => 159,
                'valeur' => '1',
                'danger' => 1,
            ),
            291 => 
            array (
                'id' => 699,
                'alerte_id' => 2047,
                'saisie_id' => 159,
                'valeur' => '1',
                'danger' => 1,
            ),
            292 => 
            array (
                'id' => 700,
                'alerte_id' => 2049,
                'saisie_id' => 159,
                'valeur' => '1',
                'danger' => 1,
            ),
            293 => 
            array (
                'id' => 701,
                'alerte_id' => 2051,
                'saisie_id' => 159,
                'valeur' => '1',
                'danger' => 1,
            ),
            294 => 
            array (
                'id' => 702,
                'alerte_id' => 2052,
                'saisie_id' => 159,
                'valeur' => '7',
                'danger' => 1,
            ),
            295 => 
            array (
                'id' => 703,
                'alerte_id' => 1034,
                'saisie_id' => 192,
                'valeur' => '1',
                'danger' => 1,
            ),
            296 => 
            array (
                'id' => 704,
                'alerte_id' => 1035,
                'saisie_id' => 192,
                'valeur' => '1',
                'danger' => 1,
            ),
            297 => 
            array (
                'id' => 705,
                'alerte_id' => 1036,
                'saisie_id' => 192,
                'valeur' => '1',
                'danger' => 1,
            ),
            298 => 
            array (
                'id' => 706,
                'alerte_id' => 1037,
                'saisie_id' => 192,
                'valeur' => '1',
                'danger' => 1,
            ),
            299 => 
            array (
                'id' => 707,
                'alerte_id' => 1038,
                'saisie_id' => 192,
                'valeur' => '1',
                'danger' => 1,
            ),
            300 => 
            array (
                'id' => 708,
                'alerte_id' => 1039,
                'saisie_id' => 192,
                'valeur' => '1',
                'danger' => 1,
            ),
            301 => 
            array (
                'id' => 709,
                'alerte_id' => 1041,
                'saisie_id' => 192,
                'valeur' => '3',
                'danger' => 1,
            ),
            302 => 
            array (
                'id' => 710,
                'alerte_id' => 1042,
                'saisie_id' => 192,
                'valeur' => '10',
                'danger' => 1,
            ),
            303 => 
            array (
                'id' => 711,
                'alerte_id' => 1043,
                'saisie_id' => 192,
                'valeur' => '20',
                'danger' => 1,
            ),
            304 => 
            array (
                'id' => 712,
                'alerte_id' => 1044,
                'saisie_id' => 192,
                'valeur' => '1',
                'danger' => 1,
            ),
            305 => 
            array (
                'id' => 714,
                'alerte_id' => 2000,
                'saisie_id' => 197,
                'valeur' => '1',
                'danger' => 1,
            ),
            306 => 
            array (
                'id' => 715,
                'alerte_id' => 2001,
                'saisie_id' => 197,
                'valeur' => '0.49',
                'danger' => 1,
            ),
            307 => 
            array (
                'id' => 716,
                'alerte_id' => 2002,
                'saisie_id' => 197,
                'valeur' => '0.04',
                'danger' => 1,
            ),
            308 => 
            array (
                'id' => 717,
                'alerte_id' => 4000,
                'saisie_id' => 203,
                'valeur' => '1',
                'danger' => 1,
            ),
            309 => 
            array (
                'id' => 718,
                'alerte_id' => 4001,
                'saisie_id' => 203,
                'valeur' => '1',
                'danger' => 1,
            ),
            310 => 
            array (
                'id' => 719,
                'alerte_id' => 4003,
                'saisie_id' => 203,
                'valeur' => '20',
                'danger' => 1,
            ),
            311 => 
            array (
                'id' => 720,
                'alerte_id' => 4004,
                'saisie_id' => 203,
                'valeur' => '15',
                'danger' => 1,
            ),
            312 => 
            array (
                'id' => 721,
                'alerte_id' => 4006,
                'saisie_id' => 203,
                'valeur' => '1',
                'danger' => 1,
            ),
            313 => 
            array (
                'id' => 722,
                'alerte_id' => 4007,
                'saisie_id' => 203,
                'valeur' => '5',
                'danger' => 1,
            ),
            314 => 
            array (
                'id' => 723,
                'alerte_id' => 4009,
                'saisie_id' => 203,
                'valeur' => '20',
                'danger' => 1,
            ),
            315 => 
            array (
                'id' => 724,
                'alerte_id' => 4010,
                'saisie_id' => 203,
                'valeur' => '1',
                'danger' => 1,
            ),
            316 => 
            array (
                'id' => 725,
                'alerte_id' => 4012,
                'saisie_id' => 203,
                'valeur' => '11',
                'danger' => 1,
            ),
            317 => 
            array (
                'id' => 726,
                'alerte_id' => 4013,
                'saisie_id' => 203,
                'valeur' => '10',
                'danger' => 1,
            ),
            318 => 
            array (
                'id' => 727,
                'alerte_id' => 4015,
                'saisie_id' => 203,
                'valeur' => '20',
                'danger' => 1,
            ),
            319 => 
            array (
                'id' => 728,
                'alerte_id' => 4016,
                'saisie_id' => 203,
                'valeur' => '10',
                'danger' => 1,
            ),
            320 => 
            array (
                'id' => 729,
                'alerte_id' => 4017,
                'saisie_id' => 203,
                'valeur' => '30',
                'danger' => 1,
            ),
            321 => 
            array (
                'id' => 730,
                'alerte_id' => 4020,
                'saisie_id' => 203,
                'valeur' => '10',
                'danger' => 1,
            ),
            322 => 
            array (
                'id' => 731,
                'alerte_id' => 4021,
                'saisie_id' => 203,
                'valeur' => '10',
                'danger' => 1,
            ),
            323 => 
            array (
                'id' => 732,
                'alerte_id' => 4022,
                'saisie_id' => 203,
                'valeur' => '50',
                'danger' => 1,
            ),
            324 => 
            array (
                'id' => 733,
                'alerte_id' => 4025,
                'saisie_id' => 203,
                'valeur' => '15',
                'danger' => 1,
            ),
            325 => 
            array (
                'id' => 734,
                'alerte_id' => 4026,
                'saisie_id' => 203,
                'valeur' => '5',
                'danger' => 1,
            ),
            326 => 
            array (
                'id' => 735,
                'alerte_id' => 4027,
                'saisie_id' => 203,
                'valeur' => '6',
                'danger' => 1,
            ),
            327 => 
            array (
                'id' => 736,
                'alerte_id' => 4028,
                'saisie_id' => 203,
                'valeur' => '50',
                'danger' => 1,
            ),
            328 => 
            array (
                'id' => 737,
                'alerte_id' => 4029,
                'saisie_id' => 203,
                'valeur' => '50',
                'danger' => 1,
            ),
            329 => 
            array (
                'id' => 738,
                'alerte_id' => 4030,
                'saisie_id' => 203,
                'valeur' => '20',
                'danger' => 1,
            ),
            330 => 
            array (
                'id' => 739,
                'alerte_id' => 4033,
                'saisie_id' => 203,
                'valeur' => '9',
                'danger' => 1,
            ),
            331 => 
            array (
                'id' => 740,
                'alerte_id' => 4038,
                'saisie_id' => 203,
                'valeur' => '20',
                'danger' => 1,
            ),
            332 => 
            array (
                'id' => 741,
                'alerte_id' => 4039,
                'saisie_id' => 203,
                'valeur' => '3',
                'danger' => 1,
            ),
            333 => 
            array (
                'id' => 742,
                'alerte_id' => 4040,
                'saisie_id' => 203,
                'valeur' => '15',
                'danger' => 1,
            ),
            334 => 
            array (
                'id' => 743,
                'alerte_id' => 4043,
                'saisie_id' => 203,
                'valeur' => '15',
                'danger' => 1,
            ),
            335 => 
            array (
                'id' => 744,
                'alerte_id' => 4044,
                'saisie_id' => 203,
                'valeur' => '5',
                'danger' => 1,
            ),
            336 => 
            array (
                'id' => 745,
                'alerte_id' => 4051,
                'saisie_id' => 203,
                'valeur' => '1',
                'danger' => 1,
            ),
            337 => 
            array (
                'id' => 746,
                'alerte_id' => 4053,
                'saisie_id' => 203,
                'valeur' => '1',
                'danger' => 1,
            ),
            338 => 
            array (
                'id' => 747,
                'alerte_id' => 4054,
                'saisie_id' => 203,
                'valeur' => '20',
                'danger' => 1,
            ),
            339 => 
            array (
                'id' => 748,
                'alerte_id' => 4056,
                'saisie_id' => 203,
                'valeur' => '15',
                'danger' => 1,
            ),
            340 => 
            array (
                'id' => 749,
                'alerte_id' => 4057,
                'saisie_id' => 203,
                'valeur' => '3',
                'danger' => 1,
            ),
            341 => 
            array (
                'id' => 750,
                'alerte_id' => 4009,
                'saisie_id' => 205,
                'valeur' => '75',
                'danger' => 1,
            ),
            342 => 
            array (
                'id' => 751,
                'alerte_id' => 4014,
                'saisie_id' => 205,
                'valeur' => '1',
                'danger' => 1,
            ),
            343 => 
            array (
                'id' => 752,
                'alerte_id' => 4020,
                'saisie_id' => 205,
                'valeur' => '12',
                'danger' => 1,
            ),
            344 => 
            array (
                'id' => 764,
                'alerte_id' => 4049,
                'saisie_id' => 212,
                'valeur' => '1',
                'danger' => 1,
            ),
            345 => 
            array (
                'id' => 765,
                'alerte_id' => 4053,
                'saisie_id' => 212,
                'valeur' => '1',
                'danger' => 1,
            ),
            346 => 
            array (
                'id' => 766,
                'alerte_id' => 4054,
                'saisie_id' => 212,
                'valeur' => '7.4',
                'danger' => 1,
            ),
            347 => 
            array (
                'id' => 767,
                'alerte_id' => 4057,
                'saisie_id' => 212,
                'valeur' => '12',
                'danger' => 1,
            ),
            348 => 
            array (
                'id' => 782,
                'alerte_id' => 4014,
                'saisie_id' => 215,
                'valeur' => '1',
                'danger' => 1,
            ),
            349 => 
            array (
                'id' => 796,
                'alerte_id' => 4010,
                'saisie_id' => 216,
                'valeur' => '1',
                'danger' => 1,
            ),
            350 => 
            array (
                'id' => 797,
                'alerte_id' => 4012,
                'saisie_id' => 212,
                'valeur' => '3.1',
                'danger' => 1,
            ),
            351 => 
            array (
                'id' => 798,
                'alerte_id' => 4016,
                'saisie_id' => 212,
                'valeur' => '6.2',
                'danger' => 1,
            ),
            352 => 
            array (
                'id' => 801,
                'alerte_id' => 4003,
                'saisie_id' => 212,
                'valeur' => '15',
                'danger' => 1,
            ),
            353 => 
            array (
                'id' => 802,
                'alerte_id' => 4023,
                'saisie_id' => 212,
                'valeur' => '3',
                'danger' => 1,
            ),
            354 => 
            array (
                'id' => 803,
                'alerte_id' => 4024,
                'saisie_id' => 212,
                'valeur' => '5.2',
                'danger' => 1,
            ),
            355 => 
            array (
                'id' => 804,
                'alerte_id' => 4025,
                'saisie_id' => 212,
                'valeur' => '14.5',
                'danger' => 1,
            ),
            356 => 
            array (
                'id' => 805,
                'alerte_id' => 4030,
                'saisie_id' => 212,
                'valeur' => '18.59',
                'danger' => 1,
            ),
            357 => 
            array (
                'id' => 806,
                'alerte_id' => 4033,
                'saisie_id' => 212,
                'valeur' => '9.9',
                'danger' => 1,
            ),
            358 => 
            array (
                'id' => 807,
                'alerte_id' => 4041,
                'saisie_id' => 212,
                'valeur' => '15',
                'danger' => 1,
            ),
            359 => 
            array (
                'id' => 867,
                'alerte_id' => 2055,
                'saisie_id' => 213,
                'valeur' => '30',
                'danger' => 1,
            ),
            360 => 
            array (
                'id' => 868,
                'alerte_id' => 2056,
                'saisie_id' => 213,
                'valeur' => '30',
                'danger' => 1,
            ),
            361 => 
            array (
                'id' => 869,
                'alerte_id' => 2057,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            362 => 
            array (
                'id' => 870,
                'alerte_id' => 2058,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            363 => 
            array (
                'id' => 871,
                'alerte_id' => 5029,
                'saisie_id' => 217,
                'valeur' => '5',
                'danger' => 1,
            ),
            364 => 
            array (
                'id' => 872,
                'alerte_id' => 5030,
                'saisie_id' => 217,
                'valeur' => '10',
                'danger' => 1,
            ),
            365 => 
            array (
                'id' => 873,
                'alerte_id' => 5031,
                'saisie_id' => 217,
                'valeur' => '6',
                'danger' => 1,
            ),
            366 => 
            array (
                'id' => 874,
                'alerte_id' => 5032,
                'saisie_id' => 217,
                'valeur' => '15',
                'danger' => 1,
            ),
            367 => 
            array (
                'id' => 875,
                'alerte_id' => 5033,
                'saisie_id' => 217,
                'valeur' => '9',
                'danger' => 1,
            ),
            368 => 
            array (
                'id' => 876,
                'alerte_id' => 5034,
                'saisie_id' => 217,
                'valeur' => '14',
                'danger' => 1,
            ),
            369 => 
            array (
                'id' => 877,
                'alerte_id' => 5035,
                'saisie_id' => 217,
                'valeur' => '25',
                'danger' => 1,
            ),
            370 => 
            array (
                'id' => 878,
                'alerte_id' => 5037,
                'saisie_id' => 217,
                'valeur' => '25',
                'danger' => 1,
            ),
            371 => 
            array (
                'id' => 879,
                'alerte_id' => 5038,
                'saisie_id' => 217,
                'valeur' => '15',
                'danger' => 1,
            ),
            372 => 
            array (
                'id' => 880,
                'alerte_id' => 5039,
                'saisie_id' => 217,
                'valeur' => '30',
                'danger' => 1,
            ),
            373 => 
            array (
                'id' => 881,
                'alerte_id' => 5040,
                'saisie_id' => 217,
                'valeur' => '10',
                'danger' => 1,
            ),
            374 => 
            array (
                'id' => 882,
                'alerte_id' => 5041,
                'saisie_id' => 217,
                'valeur' => '15',
                'danger' => 1,
            ),
            375 => 
            array (
                'id' => 883,
                'alerte_id' => 5042,
                'saisie_id' => 217,
                'valeur' => '7',
                'danger' => 1,
            ),
            376 => 
            array (
                'id' => 884,
                'alerte_id' => 5043,
                'saisie_id' => 217,
                'valeur' => '7',
                'danger' => 1,
            ),
            377 => 
            array (
                'id' => 885,
                'alerte_id' => 5044,
                'saisie_id' => 217,
                'valeur' => '7',
                'danger' => 1,
            ),
            378 => 
            array (
                'id' => 886,
                'alerte_id' => 5045,
                'saisie_id' => 217,
                'valeur' => '7',
                'danger' => 1,
            ),
            379 => 
            array (
                'id' => 887,
                'alerte_id' => 5046,
                'saisie_id' => 217,
                'valeur' => '7',
                'danger' => 1,
            ),
            380 => 
            array (
                'id' => 888,
                'alerte_id' => 5047,
                'saisie_id' => 217,
                'valeur' => '7',
                'danger' => 1,
            ),
            381 => 
            array (
                'id' => 892,
                'alerte_id' => 5019,
                'saisie_id' => 217,
                'valeur' => '6',
                'danger' => 1,
            ),
            382 => 
            array (
                'id' => 893,
                'alerte_id' => 5020,
                'saisie_id' => 217,
                'valeur' => '13',
                'danger' => 1,
            ),
            383 => 
            array (
                'id' => 894,
                'alerte_id' => 5021,
                'saisie_id' => 217,
                'valeur' => '1',
                'danger' => 1,
            ),
            384 => 
            array (
                'id' => 895,
                'alerte_id' => 2015,
                'saisie_id' => 219,
                'valeur' => '65',
                'danger' => 1,
            ),
            385 => 
            array (
                'id' => 896,
                'alerte_id' => 2017,
                'saisie_id' => 219,
                'valeur' => '12',
                'danger' => 1,
            ),
            386 => 
            array (
                'id' => 933,
                'alerte_id' => 2000,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            387 => 
            array (
                'id' => 934,
                'alerte_id' => 2001,
                'saisie_id' => 213,
                'valeur' => '2',
                'danger' => 1,
            ),
            388 => 
            array (
                'id' => 935,
                'alerte_id' => 2002,
                'saisie_id' => 213,
                'valeur' => '5',
                'danger' => 1,
            ),
            389 => 
            array (
                'id' => 936,
                'alerte_id' => 2003,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            390 => 
            array (
                'id' => 937,
                'alerte_id' => 2004,
                'saisie_id' => 213,
                'valeur' => '2',
                'danger' => 1,
            ),
            391 => 
            array (
                'id' => 938,
                'alerte_id' => 2005,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            392 => 
            array (
                'id' => 939,
                'alerte_id' => 2006,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            393 => 
            array (
                'id' => 940,
                'alerte_id' => 2007,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            394 => 
            array (
                'id' => 941,
                'alerte_id' => 2008,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            395 => 
            array (
                'id' => 942,
                'alerte_id' => 2009,
                'saisie_id' => 213,
                'valeur' => '2',
                'danger' => 1,
            ),
            396 => 
            array (
                'id' => 943,
                'alerte_id' => 2010,
                'saisie_id' => 213,
                'valeur' => '10000',
                'danger' => 1,
            ),
            397 => 
            array (
                'id' => 953,
                'alerte_id' => 2011,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            398 => 
            array (
                'id' => 954,
                'alerte_id' => 2013,
                'saisie_id' => 213,
                'valeur' => '250',
                'danger' => 1,
            ),
            399 => 
            array (
                'id' => 955,
                'alerte_id' => 2014,
                'saisie_id' => 213,
                'valeur' => '30',
                'danger' => 1,
            ),
            400 => 
            array (
                'id' => 956,
                'alerte_id' => 2015,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            401 => 
            array (
                'id' => 957,
                'alerte_id' => 2016,
                'saisie_id' => 213,
                'valeur' => '450',
                'danger' => 1,
            ),
            402 => 
            array (
                'id' => 958,
                'alerte_id' => 2017,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            403 => 
            array (
                'id' => 959,
                'alerte_id' => 2018,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            404 => 
            array (
                'id' => 960,
                'alerte_id' => 2019,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            405 => 
            array (
                'id' => 961,
                'alerte_id' => 2020,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            406 => 
            array (
                'id' => 962,
                'alerte_id' => 2021,
                'saisie_id' => 213,
                'valeur' => '30',
                'danger' => 1,
            ),
            407 => 
            array (
                'id' => 963,
                'alerte_id' => 2022,
                'saisie_id' => 213,
                'valeur' => '10',
                'danger' => 1,
            ),
            408 => 
            array (
                'id' => 964,
                'alerte_id' => 2023,
                'saisie_id' => 213,
                'valeur' => '20',
                'danger' => 1,
            ),
            409 => 
            array (
                'id' => 965,
                'alerte_id' => 2024,
                'saisie_id' => 213,
                'valeur' => '80',
                'danger' => 1,
            ),
            410 => 
            array (
                'id' => 966,
                'alerte_id' => 2025,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            411 => 
            array (
                'id' => 967,
                'alerte_id' => 2026,
                'saisie_id' => 213,
                'valeur' => '60',
                'danger' => 1,
            ),
            412 => 
            array (
                'id' => 968,
                'alerte_id' => 2027,
                'saisie_id' => 213,
                'valeur' => '80',
                'danger' => 1,
            ),
            413 => 
            array (
                'id' => 969,
                'alerte_id' => 2029,
                'saisie_id' => 213,
                'valeur' => '800',
                'danger' => 1,
            ),
            414 => 
            array (
                'id' => 970,
                'alerte_id' => 2035,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            415 => 
            array (
                'id' => 971,
                'alerte_id' => 2036,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            416 => 
            array (
                'id' => 972,
                'alerte_id' => 2037,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            417 => 
            array (
                'id' => 973,
                'alerte_id' => 2038,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            418 => 
            array (
                'id' => 974,
                'alerte_id' => 2039,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            419 => 
            array (
                'id' => 975,
                'alerte_id' => 2040,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            420 => 
            array (
                'id' => 988,
                'alerte_id' => 2041,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            421 => 
            array (
                'id' => 989,
                'alerte_id' => 2042,
                'saisie_id' => 213,
                'valeur' => '1000',
                'danger' => 1,
            ),
            422 => 
            array (
                'id' => 990,
                'alerte_id' => 2043,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            423 => 
            array (
                'id' => 991,
                'alerte_id' => 2044,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            424 => 
            array (
                'id' => 992,
                'alerte_id' => 2045,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            425 => 
            array (
                'id' => 993,
                'alerte_id' => 2046,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            426 => 
            array (
                'id' => 994,
                'alerte_id' => 2047,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            427 => 
            array (
                'id' => 995,
                'alerte_id' => 2048,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            428 => 
            array (
                'id' => 996,
                'alerte_id' => 2049,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            429 => 
            array (
                'id' => 997,
                'alerte_id' => 2050,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            430 => 
            array (
                'id' => 998,
                'alerte_id' => 2051,
                'saisie_id' => 213,
                'valeur' => '30',
                'danger' => 1,
            ),
            431 => 
            array (
                'id' => 999,
                'alerte_id' => 2052,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            432 => 
            array (
                'id' => 1000,
                'alerte_id' => 2053,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            433 => 
            array (
                'id' => 1001,
                'alerte_id' => 2054,
                'saisie_id' => 213,
                'valeur' => '1',
                'danger' => 1,
            ),
            434 => 
            array (
                'id' => 1002,
                'alerte_id' => 2030,
                'saisie_id' => 213,
                'valeur' => '350000',
                'danger' => 1,
            ),
            435 => 
            array (
                'id' => 1003,
                'alerte_id' => 2031,
                'saisie_id' => 213,
                'valeur' => '30',
                'danger' => 1,
            ),
            436 => 
            array (
                'id' => 1004,
                'alerte_id' => 2032,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            437 => 
            array (
                'id' => 1005,
                'alerte_id' => 2033,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            438 => 
            array (
                'id' => 1006,
                'alerte_id' => 2034,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            439 => 
            array (
                'id' => 1007,
                'alerte_id' => 2059,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            440 => 
            array (
                'id' => 1008,
                'alerte_id' => 2060,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            441 => 
            array (
                'id' => 1009,
                'alerte_id' => 2061,
                'saisie_id' => 213,
                'valeur' => '50',
                'danger' => 1,
            ),
            442 => 
            array (
                'id' => 1034,
                'alerte_id' => 2001,
                'saisie_id' => 225,
                'valeur' => '5',
                'danger' => 1,
            ),
            443 => 
            array (
                'id' => 1035,
                'alerte_id' => 2002,
                'saisie_id' => 225,
                'valeur' => '2',
                'danger' => 1,
            ),
            444 => 
            array (
                'id' => 1036,
                'alerte_id' => 2007,
                'saisie_id' => 225,
                'valeur' => '22',
                'danger' => 1,
            ),
            445 => 
            array (
                'id' => 1037,
                'alerte_id' => 2008,
                'saisie_id' => 225,
                'valeur' => '2.6',
                'danger' => 1,
            ),
            446 => 
            array (
                'id' => 1043,
                'alerte_id' => 2015,
                'saisie_id' => 226,
                'valeur' => '80',
                'danger' => 1,
            ),
            447 => 
            array (
                'id' => 1044,
                'alerte_id' => 2016,
                'saisie_id' => 226,
                'valeur' => '402.03',
                'danger' => 1,
            ),
            448 => 
            array (
                'id' => 1045,
                'alerte_id' => 2021,
                'saisie_id' => 226,
                'valeur' => '6',
                'danger' => 1,
            ),
            449 => 
            array (
                'id' => 1046,
                'alerte_id' => 2023,
                'saisie_id' => 226,
                'valeur' => '5',
                'danger' => 1,
            ),
            450 => 
            array (
                'id' => 1047,
                'alerte_id' => 2033,
                'saisie_id' => 226,
                'valeur' => '40',
                'danger' => 1,
            ),
            451 => 
            array (
                'id' => 1048,
                'alerte_id' => 2035,
                'saisie_id' => 226,
                'valeur' => '10',
                'danger' => 1,
            ),
            452 => 
            array (
                'id' => 1049,
                'alerte_id' => 2036,
                'saisie_id' => 226,
                'valeur' => '8',
                'danger' => 1,
            ),
            453 => 
            array (
                'id' => 1050,
                'alerte_id' => 2037,
                'saisie_id' => 226,
                'valeur' => '12',
                'danger' => 1,
            ),
            454 => 
            array (
                'id' => 1051,
                'alerte_id' => 2038,
                'saisie_id' => 226,
                'valeur' => '40',
                'danger' => 1,
            ),
            455 => 
            array (
                'id' => 1052,
                'alerte_id' => 2040,
                'saisie_id' => 226,
                'valeur' => '20',
                'danger' => 1,
            ),
            456 => 
            array (
                'id' => 1053,
                'alerte_id' => 2043,
                'saisie_id' => 226,
                'valeur' => '1',
                'danger' => 1,
            ),
            457 => 
            array (
                'id' => 1054,
                'alerte_id' => 2044,
                'saisie_id' => 226,
                'valeur' => '80',
                'danger' => 1,
            ),
            458 => 
            array (
                'id' => 1055,
                'alerte_id' => 2050,
                'saisie_id' => 226,
                'valeur' => '1',
                'danger' => 1,
            ),
            459 => 
            array (
                'id' => 1056,
                'alerte_id' => 2051,
                'saisie_id' => 226,
                'valeur' => '1',
                'danger' => 1,
            ),
            460 => 
            array (
                'id' => 1061,
                'alerte_id' => 2013,
                'saisie_id' => 225,
                'valeur' => '115',
                'danger' => 1,
            ),
            461 => 
            array (
                'id' => 1062,
                'alerte_id' => 2014,
                'saisie_id' => 225,
                'valeur' => '23',
                'danger' => 1,
            ),
            462 => 
            array (
                'id' => 1063,
                'alerte_id' => 2016,
                'saisie_id' => 225,
                'valeur' => '425',
                'danger' => 1,
            ),
            463 => 
            array (
                'id' => 1064,
                'alerte_id' => 2020,
                'saisie_id' => 225,
                'valeur' => '3',
                'danger' => 1,
            ),
            464 => 
            array (
                'id' => 1065,
                'alerte_id' => 2036,
                'saisie_id' => 225,
                'valeur' => '20',
                'danger' => 1,
            ),
            465 => 
            array (
                'id' => 1066,
                'alerte_id' => 2037,
                'saisie_id' => 225,
                'valeur' => '20',
                'danger' => 1,
            ),
            466 => 
            array (
                'id' => 1067,
                'alerte_id' => 2039,
                'saisie_id' => 225,
                'valeur' => '15',
                'danger' => 1,
            ),
            467 => 
            array (
                'id' => 1068,
                'alerte_id' => 2044,
                'saisie_id' => 225,
                'valeur' => '3',
                'danger' => 1,
            ),
            468 => 
            array (
                'id' => 1069,
                'alerte_id' => 2001,
                'saisie_id' => 228,
                'valeur' => '15',
                'danger' => 1,
            ),
            469 => 
            array (
                'id' => 1070,
                'alerte_id' => 2002,
                'saisie_id' => 228,
                'valeur' => '5',
                'danger' => 1,
            ),
            470 => 
            array (
                'id' => 1071,
                'alerte_id' => 2008,
                'saisie_id' => 228,
                'valeur' => '5',
                'danger' => 1,
            ),
            471 => 
            array (
                'id' => 1072,
                'alerte_id' => 2001,
                'saisie_id' => 226,
                'valeur' => '30',
                'danger' => 1,
            ),
            472 => 
            array (
                'id' => 1073,
                'alerte_id' => 2002,
                'saisie_id' => 226,
                'valeur' => '70',
                'danger' => 1,
            ),
            473 => 
            array (
                'id' => 1074,
                'alerte_id' => 2005,
                'saisie_id' => 226,
                'valeur' => '1',
                'danger' => 1,
            ),
            474 => 
            array (
                'id' => 1075,
                'alerte_id' => 2006,
                'saisie_id' => 226,
                'valeur' => '16',
                'danger' => 1,
            ),
            475 => 
            array (
                'id' => 1076,
                'alerte_id' => 2007,
                'saisie_id' => 226,
                'valeur' => '20',
                'danger' => 1,
            ),
            476 => 
            array (
                'id' => 1077,
                'alerte_id' => 2044,
                'saisie_id' => 232,
                'valeur' => '3',
                'danger' => 1,
            ),
            477 => 
            array (
                'id' => 1078,
                'alerte_id' => 2048,
                'saisie_id' => 232,
                'valeur' => '1',
                'danger' => 1,
            ),
            478 => 
            array (
                'id' => 1079,
                'alerte_id' => 2049,
                'saisie_id' => 232,
                'valeur' => '1',
                'danger' => 1,
            ),
            479 => 
            array (
                'id' => 1080,
                'alerte_id' => 2052,
                'saisie_id' => 232,
                'valeur' => '5',
                'danger' => 1,
            ),
            480 => 
            array (
                'id' => 1081,
                'alerte_id' => 2053,
                'saisie_id' => 232,
                'valeur' => '2',
                'danger' => 1,
            ),
            481 => 
            array (
                'id' => 1109,
                'alerte_id' => 4003,
                'saisie_id' => 233,
                'valeur' => '14.9',
                'danger' => 1,
            ),
            482 => 
            array (
                'id' => 1110,
                'alerte_id' => 4016,
                'saisie_id' => 233,
                'valeur' => '20',
                'danger' => 1,
            ),
            483 => 
            array (
                'id' => 1111,
                'alerte_id' => 4017,
                'saisie_id' => 233,
                'valeur' => '7',
                'danger' => 1,
            ),
            484 => 
            array (
                'id' => 1112,
                'alerte_id' => 4023,
                'saisie_id' => 233,
                'valeur' => '3',
                'danger' => 1,
            ),
            485 => 
            array (
                'id' => 1113,
                'alerte_id' => 4024,
                'saisie_id' => 233,
                'valeur' => '5.2',
                'danger' => 1,
            ),
            486 => 
            array (
                'id' => 1114,
                'alerte_id' => 4025,
                'saisie_id' => 233,
                'valeur' => '42',
                'danger' => 1,
            ),
            487 => 
            array (
                'id' => 1115,
                'alerte_id' => 4030,
                'saisie_id' => 233,
                'valeur' => '18.6',
                'danger' => 1,
            ),
            488 => 
            array (
                'id' => 1116,
                'alerte_id' => 4033,
                'saisie_id' => 233,
                'valeur' => '9.9',
                'danger' => 1,
            ),
            489 => 
            array (
                'id' => 1117,
                'alerte_id' => 4041,
                'saisie_id' => 233,
                'valeur' => '4.6',
                'danger' => 1,
            ),
            490 => 
            array (
                'id' => 1124,
                'alerte_id' => 4048,
                'saisie_id' => 233,
                'valeur' => '1',
                'danger' => 1,
            ),
            491 => 
            array (
                'id' => 1125,
                'alerte_id' => 4049,
                'saisie_id' => 233,
                'valeur' => '1',
                'danger' => 1,
            ),
            492 => 
            array (
                'id' => 1126,
                'alerte_id' => 4053,
                'saisie_id' => 233,
                'valeur' => '1',
                'danger' => 1,
            ),
            493 => 
            array (
                'id' => 1127,
                'alerte_id' => 4054,
                'saisie_id' => 233,
                'valeur' => '24',
                'danger' => 1,
            ),
            494 => 
            array (
                'id' => 1128,
                'alerte_id' => 4055,
                'saisie_id' => 233,
                'valeur' => '5',
                'danger' => 1,
            ),
            495 => 
            array (
                'id' => 1129,
                'alerte_id' => 4056,
                'saisie_id' => 233,
                'valeur' => '20',
                'danger' => 1,
            ),
            496 => 
            array (
                'id' => 1130,
                'alerte_id' => 4057,
                'saisie_id' => 233,
                'valeur' => '20',
                'danger' => 1,
            ),
            497 => 
            array (
                'id' => 1133,
                'alerte_id' => 4020,
                'saisie_id' => 233,
                'valeur' => '20',
                'danger' => 1,
            ),
            498 => 
            array (
                'id' => 1134,
                'alerte_id' => 4021,
                'saisie_id' => 233,
                'valeur' => '20',
                'danger' => 1,
            ),
            499 => 
            array (
                'id' => 1135,
                'alerte_id' => 4003,
                'saisie_id' => 235,
                'valeur' => '14.9',
                'danger' => 1,
            ),
            500 => 
            array (
                'id' => 1136,
                'alerte_id' => 4016,
                'saisie_id' => 235,
                'valeur' => '6.2',
                'danger' => 1,
            ),
            501 => 
            array (
                'id' => 1137,
                'alerte_id' => 4017,
                'saisie_id' => 235,
                'valeur' => '7',
                'danger' => 1,
            ),
            502 => 
            array (
                'id' => 1138,
                'alerte_id' => 4023,
                'saisie_id' => 235,
                'valeur' => '3',
                'danger' => 1,
            ),
            503 => 
            array (
                'id' => 1139,
                'alerte_id' => 4024,
                'saisie_id' => 235,
                'valeur' => '5.2',
                'danger' => 1,
            ),
            504 => 
            array (
                'id' => 1140,
                'alerte_id' => 4025,
                'saisie_id' => 235,
                'valeur' => '14.5',
                'danger' => 1,
            ),
            505 => 
            array (
                'id' => 1141,
                'alerte_id' => 4030,
                'saisie_id' => 235,
                'valeur' => '18.6',
                'danger' => 1,
            ),
            506 => 
            array (
                'id' => 1142,
                'alerte_id' => 4033,
                'saisie_id' => 235,
                'valeur' => '9.9',
                'danger' => 1,
            ),
            507 => 
            array (
                'id' => 1143,
                'alerte_id' => 4041,
                'saisie_id' => 235,
                'valeur' => '4.6',
                'danger' => 1,
            ),
            508 => 
            array (
                'id' => 1144,
                'alerte_id' => 4049,
                'saisie_id' => 235,
                'valeur' => '1',
                'danger' => 1,
            ),
            509 => 
            array (
                'id' => 1145,
                'alerte_id' => 4053,
                'saisie_id' => 235,
                'valeur' => '1',
                'danger' => 1,
            ),
            510 => 
            array (
                'id' => 1146,
                'alerte_id' => 4054,
                'saisie_id' => 235,
                'valeur' => '7.4',
                'danger' => 1,
            ),
            511 => 
            array (
                'id' => 1147,
                'alerte_id' => 2001,
                'saisie_id' => 236,
                'valeur' => '3',
                'danger' => 1,
            ),
            512 => 
            array (
                'id' => 1148,
                'alerte_id' => 2005,
                'saisie_id' => 236,
                'valeur' => '1',
                'danger' => 1,
            ),
            513 => 
            array (
                'id' => 1149,
                'alerte_id' => 2006,
                'saisie_id' => 236,
                'valeur' => '20',
                'danger' => 1,
            ),
            514 => 
            array (
                'id' => 1150,
                'alerte_id' => 2008,
                'saisie_id' => 236,
                'valeur' => '5',
                'danger' => 1,
            ),
            515 => 
            array (
                'id' => 1151,
                'alerte_id' => 2016,
                'saisie_id' => 236,
                'valeur' => '403',
                'danger' => 1,
            ),
            516 => 
            array (
                'id' => 1152,
                'alerte_id' => 2021,
                'saisie_id' => 236,
                'valeur' => '1',
                'danger' => 1,
            ),
            517 => 
            array (
                'id' => 1153,
                'alerte_id' => 2023,
                'saisie_id' => 236,
                'valeur' => '3',
                'danger' => 1,
            ),
            518 => 
            array (
                'id' => 1154,
                'alerte_id' => 2026,
                'saisie_id' => 236,
                'valeur' => '20',
                'danger' => 1,
            ),
            519 => 
            array (
                'id' => 1155,
                'alerte_id' => 2030,
                'saisie_id' => 236,
                'valeur' => '300000',
                'danger' => 1,
            ),
            520 => 
            array (
                'id' => 1156,
                'alerte_id' => 2037,
                'saisie_id' => 236,
                'valeur' => '25',
                'danger' => 1,
            ),
            521 => 
            array (
                'id' => 1157,
                'alerte_id' => 2039,
                'saisie_id' => 236,
                'valeur' => '25',
                'danger' => 1,
            ),
            522 => 
            array (
                'id' => 1158,
                'alerte_id' => 2047,
                'saisie_id' => 236,
                'valeur' => '1',
                'danger' => 1,
            ),
            523 => 
            array (
                'id' => 1159,
                'alerte_id' => 2048,
                'saisie_id' => 236,
                'valeur' => '1',
                'danger' => 1,
            ),
            524 => 
            array (
                'id' => 1160,
                'alerte_id' => 2052,
                'saisie_id' => 236,
                'valeur' => '2',
                'danger' => 1,
            ),
            525 => 
            array (
                'id' => 1161,
                'alerte_id' => 2055,
                'saisie_id' => 236,
                'valeur' => '30',
                'danger' => 1,
            ),
            526 => 
            array (
                'id' => 1162,
                'alerte_id' => 2056,
                'saisie_id' => 236,
                'valeur' => '6',
                'danger' => 1,
            ),
            527 => 
            array (
                'id' => 1163,
                'alerte_id' => 2058,
                'saisie_id' => 236,
                'valeur' => '15',
                'danger' => 1,
            ),
            528 => 
            array (
                'id' => 1166,
                'alerte_id' => 2055,
                'saisie_id' => 237,
                'valeur' => '30',
                'danger' => 1,
            ),
            529 => 
            array (
                'id' => 1167,
                'alerte_id' => 2056,
                'saisie_id' => 237,
                'valeur' => '10',
                'danger' => 1,
            ),
            530 => 
            array (
                'id' => 1168,
                'alerte_id' => 2057,
                'saisie_id' => 237,
                'valeur' => '30',
                'danger' => 1,
            ),
            531 => 
            array (
                'id' => 1169,
                'alerte_id' => 3049,
                'saisie_id' => 240,
                'valeur' => '1',
                'danger' => 1,
            ),
            532 => 
            array (
                'id' => 1170,
                'alerte_id' => 2056,
                'saisie_id' => 243,
                'valeur' => '5',
                'danger' => 1,
            ),
            533 => 
            array (
                'id' => 1171,
                'alerte_id' => 2001,
                'saisie_id' => 242,
                'valeur' => '2',
                'danger' => 1,
            ),
            534 => 
            array (
                'id' => 1172,
                'alerte_id' => 2002,
                'saisie_id' => 242,
                'valeur' => '2',
                'danger' => 1,
            ),
            535 => 
            array (
                'id' => 1173,
                'alerte_id' => 2013,
                'saisie_id' => 242,
                'valeur' => '110',
                'danger' => 1,
            ),
            536 => 
            array (
                'id' => 1174,
                'alerte_id' => 2015,
                'saisie_id' => 242,
                'valeur' => '50',
                'danger' => 1,
            ),
            537 => 
            array (
                'id' => 1175,
                'alerte_id' => 2016,
                'saisie_id' => 242,
                'valeur' => '402',
                'danger' => 1,
            ),
            538 => 
            array (
                'id' => 1176,
                'alerte_id' => 2020,
                'saisie_id' => 242,
                'valeur' => '2',
                'danger' => 1,
            ),
            539 => 
            array (
                'id' => 1177,
                'alerte_id' => 2055,
                'saisie_id' => 245,
                'valeur' => '55',
                'danger' => 1,
            ),
            540 => 
            array (
                'id' => 1178,
                'alerte_id' => 2056,
                'saisie_id' => 245,
                'valeur' => '25',
                'danger' => 1,
            ),
            541 => 
            array (
                'id' => 1179,
                'alerte_id' => 2057,
                'saisie_id' => 245,
                'valeur' => '55',
                'danger' => 1,
            ),
            542 => 
            array (
                'id' => 1180,
                'alerte_id' => 2058,
                'saisie_id' => 245,
                'valeur' => '95',
                'danger' => 1,
            ),
            543 => 
            array (
                'id' => 1187,
                'alerte_id' => 2014,
                'saisie_id' => 246,
                'valeur' => '50',
                'danger' => 1,
            ),
            544 => 
            array (
                'id' => 1188,
                'alerte_id' => 2015,
                'saisie_id' => 246,
                'valeur' => '42',
                'danger' => 1,
            ),
            545 => 
            array (
                'id' => 1189,
                'alerte_id' => 2016,
                'saisie_id' => 246,
                'valeur' => '402',
                'danger' => 1,
            ),
            546 => 
            array (
                'id' => 1190,
                'alerte_id' => 2017,
                'saisie_id' => 246,
                'valeur' => '33',
                'danger' => 1,
            ),
            547 => 
            array (
                'id' => 1191,
                'alerte_id' => 2019,
                'saisie_id' => 246,
                'valeur' => '15',
                'danger' => 1,
            ),
            548 => 
            array (
                'id' => 1192,
                'alerte_id' => 2020,
                'saisie_id' => 246,
                'valeur' => '12',
                'danger' => 1,
            ),
            549 => 
            array (
                'id' => 1193,
                'alerte_id' => 4020,
                'saisie_id' => 249,
                'valeur' => '10',
                'danger' => 1,
            ),
            550 => 
            array (
                'id' => 1194,
                'alerte_id' => 4021,
                'saisie_id' => 249,
                'valeur' => '40',
                'danger' => 1,
            ),
            551 => 
            array (
                'id' => 1195,
                'alerte_id' => 5021,
                'saisie_id' => 250,
                'valeur' => '1',
                'danger' => 1,
            ),
            552 => 
            array (
                'id' => 1196,
                'alerte_id' => 4048,
                'saisie_id' => 251,
                'valeur' => '1',
                'danger' => 1,
            ),
            553 => 
            array (
                'id' => 1197,
                'alerte_id' => 4049,
                'saisie_id' => 251,
                'valeur' => '1',
                'danger' => 1,
            ),
            554 => 
            array (
                'id' => 1198,
                'alerte_id' => 4052,
                'saisie_id' => 251,
                'valeur' => '1',
                'danger' => 1,
            ),
            555 => 
            array (
                'id' => 1202,
                'alerte_id' => 3003,
                'saisie_id' => 253,
                'valeur' => '13',
                'danger' => 1,
            ),
            556 => 
            array (
                'id' => 1203,
                'alerte_id' => 3010,
                'saisie_id' => 253,
                'valeur' => '1',
                'danger' => 1,
            ),
            557 => 
            array (
                'id' => 1204,
                'alerte_id' => 3012,
                'saisie_id' => 253,
                'valeur' => '1',
                'danger' => 1,
            ),
            558 => 
            array (
                'id' => 1208,
                'alerte_id' => 3028,
                'saisie_id' => 253,
                'valeur' => '20',
                'danger' => 1,
            ),
            559 => 
            array (
                'id' => 1209,
                'alerte_id' => 3033,
                'saisie_id' => 253,
                'valeur' => '100',
                'danger' => 1,
            ),
            560 => 
            array (
                'id' => 1210,
                'alerte_id' => 3037,
                'saisie_id' => 253,
                'valeur' => '1',
                'danger' => 1,
            ),
            561 => 
            array (
                'id' => 1211,
                'alerte_id' => 3004,
                'saisie_id' => 254,
                'valeur' => '5',
                'danger' => 1,
            ),
            562 => 
            array (
                'id' => 1212,
                'alerte_id' => 3006,
                'saisie_id' => 254,
                'valeur' => '1',
                'danger' => 1,
            ),
            563 => 
            array (
                'id' => 1213,
                'alerte_id' => 3009,
                'saisie_id' => 254,
                'valeur' => '45',
                'danger' => 1,
            ),
            564 => 
            array (
                'id' => 1214,
                'alerte_id' => 3011,
                'saisie_id' => 254,
                'valeur' => '1',
                'danger' => 1,
            ),
            565 => 
            array (
                'id' => 1215,
                'alerte_id' => 3012,
                'saisie_id' => 254,
                'valeur' => '2',
                'danger' => 1,
            ),
            566 => 
            array (
                'id' => 1216,
                'alerte_id' => 3015,
                'saisie_id' => 254,
                'valeur' => '1',
                'danger' => 1,
            ),
            567 => 
            array (
                'id' => 1217,
                'alerte_id' => 3016,
                'saisie_id' => 254,
                'valeur' => '2',
                'danger' => 1,
            ),
            568 => 
            array (
                'id' => 1218,
                'alerte_id' => 3026,
                'saisie_id' => 254,
                'valeur' => '3',
                'danger' => 1,
            ),
            569 => 
            array (
                'id' => 1219,
                'alerte_id' => 3034,
                'saisie_id' => 254,
                'valeur' => '1',
                'danger' => 1,
            ),
            570 => 
            array (
                'id' => 1220,
                'alerte_id' => 3036,
                'saisie_id' => 254,
                'valeur' => '1',
                'danger' => 1,
            ),
            571 => 
            array (
                'id' => 1221,
                'alerte_id' => 3037,
                'saisie_id' => 254,
                'valeur' => '1',
                'danger' => 1,
            ),
            572 => 
            array (
                'id' => 1222,
                'alerte_id' => 3047,
                'saisie_id' => 254,
                'valeur' => '1',
                'danger' => 1,
            ),
            573 => 
            array (
                'id' => 1223,
                'alerte_id' => 3000,
                'saisie_id' => 255,
                'valeur' => '1',
                'danger' => 1,
            ),
            574 => 
            array (
                'id' => 1224,
                'alerte_id' => 3003,
                'saisie_id' => 255,
                'valeur' => '5.7',
                'danger' => 1,
            ),
            575 => 
            array (
                'id' => 1225,
                'alerte_id' => 3012,
                'saisie_id' => 255,
                'valeur' => '4',
                'danger' => 1,
            ),
            576 => 
            array (
                'id' => 1226,
                'alerte_id' => 3015,
                'saisie_id' => 255,
                'valeur' => '1',
                'danger' => 1,
            ),
            577 => 
            array (
                'id' => 1227,
                'alerte_id' => 3034,
                'saisie_id' => 255,
                'valeur' => '1',
                'danger' => 1,
            ),
            578 => 
            array (
                'id' => 1228,
                'alerte_id' => 3039,
                'saisie_id' => 255,
                'valeur' => '1',
                'danger' => 1,
            ),
            579 => 
            array (
                'id' => 1255,
                'alerte_id' => 4024,
                'saisie_id' => 258,
                'valeur' => '10',
                'danger' => 1,
            ),
            580 => 
            array (
                'id' => 1256,
                'alerte_id' => 4025,
                'saisie_id' => 258,
                'valeur' => '11',
                'danger' => 1,
            ),
            581 => 
            array (
                'id' => 1275,
                'alerte_id' => 4003,
                'saisie_id' => 257,
                'valeur' => '9',
                'danger' => 1,
            ),
            582 => 
            array (
                'id' => 1276,
                'alerte_id' => 4023,
                'saisie_id' => 257,
                'valeur' => '2',
                'danger' => 1,
            ),
            583 => 
            array (
                'id' => 1277,
                'alerte_id' => 4024,
                'saisie_id' => 257,
                'valeur' => '15',
                'danger' => 1,
            ),
            584 => 
            array (
                'id' => 1278,
                'alerte_id' => 4026,
                'saisie_id' => 257,
                'valeur' => '15',
                'danger' => 1,
            ),
            585 => 
            array (
                'id' => 1279,
                'alerte_id' => 4030,
                'saisie_id' => 257,
                'valeur' => '25',
                'danger' => 1,
            ),
            586 => 
            array (
                'id' => 1280,
                'alerte_id' => 4032,
                'saisie_id' => 257,
                'valeur' => '50',
                'danger' => 1,
            ),
            587 => 
            array (
                'id' => 1281,
                'alerte_id' => 4048,
                'saisie_id' => 257,
                'valeur' => '1',
                'danger' => 1,
            ),
            588 => 
            array (
                'id' => 1282,
                'alerte_id' => 4049,
                'saisie_id' => 257,
                'valeur' => '1',
                'danger' => 1,
            ),
            589 => 
            array (
                'id' => 1283,
                'alerte_id' => 4050,
                'saisie_id' => 257,
                'valeur' => '1',
                'danger' => 1,
            ),
            590 => 
            array (
                'id' => 1284,
                'alerte_id' => 4053,
                'saisie_id' => 257,
                'valeur' => '1',
                'danger' => 1,
            ),
            591 => 
            array (
                'id' => 1285,
                'alerte_id' => 3000,
                'saisie_id' => 256,
                'valeur' => '1',
                'danger' => 1,
            ),
            592 => 
            array (
                'id' => 1286,
                'alerte_id' => 3003,
                'saisie_id' => 256,
                'valeur' => '11',
                'danger' => 1,
            ),
            593 => 
            array (
                'id' => 1287,
                'alerte_id' => 3012,
                'saisie_id' => 256,
                'valeur' => '8',
                'danger' => 1,
            ),
            594 => 
            array (
                'id' => 1288,
                'alerte_id' => 3029,
                'saisie_id' => 256,
                'valeur' => '20',
                'danger' => 1,
            ),
            595 => 
            array (
                'id' => 1289,
                'alerte_id' => 3033,
                'saisie_id' => 256,
                'valeur' => '10',
                'danger' => 1,
            ),
            596 => 
            array (
                'id' => 1290,
                'alerte_id' => 3037,
                'saisie_id' => 256,
                'valeur' => '1',
                'danger' => 1,
            ),
            597 => 
            array (
                'id' => 1291,
                'alerte_id' => 3038,
                'saisie_id' => 256,
                'valeur' => '3000',
                'danger' => 1,
            ),
            598 => 
            array (
                'id' => 1292,
                'alerte_id' => 3039,
                'saisie_id' => 256,
                'valeur' => '1',
                'danger' => 1,
            ),
            599 => 
            array (
                'id' => 1293,
                'alerte_id' => 3023,
                'saisie_id' => 256,
                'valeur' => '8',
                'danger' => 1,
            ),
            600 => 
            array (
                'id' => 1294,
                'alerte_id' => 4009,
                'saisie_id' => 260,
                'valeur' => '20',
                'danger' => 1,
            ),
            601 => 
            array (
                'id' => 1295,
                'alerte_id' => 4003,
                'saisie_id' => 261,
                'valeur' => '15',
                'danger' => 1,
            ),
            602 => 
            array (
                'id' => 1296,
                'alerte_id' => 4016,
                'saisie_id' => 261,
                'valeur' => '6.2',
                'danger' => 1,
            ),
            603 => 
            array (
                'id' => 1297,
                'alerte_id' => 4023,
                'saisie_id' => 261,
                'valeur' => '3',
                'danger' => 1,
            ),
            604 => 
            array (
                'id' => 1298,
                'alerte_id' => 4024,
                'saisie_id' => 261,
                'valeur' => '5.2',
                'danger' => 1,
            ),
            605 => 
            array (
                'id' => 1299,
                'alerte_id' => 4025,
                'saisie_id' => 261,
                'valeur' => '14.4',
                'danger' => 1,
            ),
            606 => 
            array (
                'id' => 1300,
                'alerte_id' => 4030,
                'saisie_id' => 261,
                'valeur' => '18.6',
                'danger' => 1,
            ),
            607 => 
            array (
                'id' => 1301,
                'alerte_id' => 4033,
                'saisie_id' => 261,
                'valeur' => '9.9',
                'danger' => 1,
            ),
            608 => 
            array (
                'id' => 1302,
                'alerte_id' => 4041,
                'saisie_id' => 261,
                'valeur' => '4.6',
                'danger' => 1,
            ),
            609 => 
            array (
                'id' => 1303,
                'alerte_id' => 4053,
                'saisie_id' => 261,
                'valeur' => '1',
                'danger' => 1,
            ),
            610 => 
            array (
                'id' => 1304,
                'alerte_id' => 4054,
                'saisie_id' => 261,
                'valeur' => '7.4',
                'danger' => 1,
            ),
            611 => 
            array (
                'id' => 1306,
                'alerte_id' => 2035,
                'saisie_id' => 262,
                'valeur' => '15',
                'danger' => 1,
            ),
            612 => 
            array (
                'id' => 1307,
                'alerte_id' => 2031,
                'saisie_id' => 262,
                'valeur' => '50',
                'danger' => 1,
            ),
            613 => 
            array (
                'id' => 1311,
                'alerte_id' => 3000,
                'saisie_id' => 267,
                'valeur' => '1',
                'danger' => 1,
            ),
            614 => 
            array (
                'id' => 1312,
                'alerte_id' => 3003,
                'saisie_id' => 267,
                'valeur' => '10',
                'danger' => 1,
            ),
            615 => 
            array (
                'id' => 1313,
                'alerte_id' => 3004,
                'saisie_id' => 267,
                'valeur' => '10',
                'danger' => 1,
            ),
            616 => 
            array (
                'id' => 1314,
                'alerte_id' => 3006,
                'saisie_id' => 267,
                'valeur' => '1',
                'danger' => 1,
            ),
            617 => 
            array (
                'id' => 1315,
                'alerte_id' => 3007,
                'saisie_id' => 267,
                'valeur' => '2',
                'danger' => 1,
            ),
            618 => 
            array (
                'id' => 1316,
                'alerte_id' => 3011,
                'saisie_id' => 267,
                'valeur' => '2',
                'danger' => 1,
            ),
            619 => 
            array (
                'id' => 1317,
                'alerte_id' => 3012,
                'saisie_id' => 267,
                'valeur' => '2',
                'danger' => 1,
            ),
            620 => 
            array (
                'id' => 1318,
                'alerte_id' => 3014,
                'saisie_id' => 267,
                'valeur' => '10',
                'danger' => 1,
            ),
            621 => 
            array (
                'id' => 1319,
                'alerte_id' => 3015,
                'saisie_id' => 267,
                'valeur' => '2',
                'danger' => 1,
            ),
            622 => 
            array (
                'id' => 1320,
                'alerte_id' => 3016,
                'saisie_id' => 267,
                'valeur' => '10',
                'danger' => 1,
            ),
            623 => 
            array (
                'id' => 1321,
                'alerte_id' => 3019,
                'saisie_id' => 267,
                'valeur' => '4000000',
                'danger' => 1,
            ),
            624 => 
            array (
                'id' => 1322,
                'alerte_id' => 3028,
                'saisie_id' => 267,
                'valeur' => '50',
                'danger' => 1,
            ),
            625 => 
            array (
                'id' => 1323,
                'alerte_id' => 3030,
                'saisie_id' => 267,
                'valeur' => '50',
                'danger' => 1,
            ),
            626 => 
            array (
                'id' => 1324,
                'alerte_id' => 3032,
                'saisie_id' => 267,
                'valeur' => '15',
                'danger' => 1,
            ),
            627 => 
            array (
                'id' => 1325,
                'alerte_id' => 3033,
                'saisie_id' => 267,
                'valeur' => '30',
                'danger' => 1,
            ),
            628 => 
            array (
                'id' => 1326,
                'alerte_id' => 3034,
                'saisie_id' => 267,
                'valeur' => '1',
                'danger' => 1,
            ),
            629 => 
            array (
                'id' => 1327,
                'alerte_id' => 3036,
                'saisie_id' => 267,
                'valeur' => '1',
                'danger' => 1,
            ),
            630 => 
            array (
                'id' => 1328,
                'alerte_id' => 3037,
                'saisie_id' => 267,
                'valeur' => '1',
                'danger' => 1,
            ),
            631 => 
            array (
                'id' => 1329,
                'alerte_id' => 3047,
                'saisie_id' => 267,
                'valeur' => '1',
                'danger' => 1,
            ),
            632 => 
            array (
                'id' => 1330,
                'alerte_id' => 3048,
                'saisie_id' => 267,
                'valeur' => '1',
                'danger' => 1,
            ),
            633 => 
            array (
                'id' => 1331,
                'alerte_id' => 5026,
                'saisie_id' => 268,
                'valeur' => '10',
                'danger' => 1,
            ),
            634 => 
            array (
                'id' => 1332,
                'alerte_id' => 5034,
                'saisie_id' => 268,
                'valeur' => '10',
                'danger' => 1,
            ),
            635 => 
            array (
                'id' => 1333,
                'alerte_id' => 5062,
                'saisie_id' => 268,
                'valeur' => '200',
                'danger' => 1,
            ),
            636 => 
            array (
                'id' => 1334,
                'alerte_id' => 2001,
                'saisie_id' => 269,
                'valeur' => '5',
                'danger' => 1,
            ),
            637 => 
            array (
                'id' => 1335,
                'alerte_id' => 2002,
                'saisie_id' => 269,
                'valeur' => '3',
                'danger' => 1,
            ),
            638 => 
            array (
                'id' => 1336,
                'alerte_id' => 2006,
                'saisie_id' => 269,
                'valeur' => '23',
                'danger' => 1,
            ),
            639 => 
            array (
                'id' => 1337,
                'alerte_id' => 2009,
                'saisie_id' => 269,
                'valeur' => '2',
                'danger' => 1,
            ),
            640 => 
            array (
                'id' => 1338,
                'alerte_id' => 2027,
                'saisie_id' => 269,
                'valeur' => '35',
                'danger' => 1,
            ),
            641 => 
            array (
                'id' => 1339,
                'alerte_id' => 2037,
                'saisie_id' => 269,
                'valeur' => '12',
                'danger' => 1,
            ),
            642 => 
            array (
                'id' => 1340,
                'alerte_id' => 2039,
                'saisie_id' => 269,
                'valeur' => '11',
                'danger' => 1,
            ),
            643 => 
            array (
                'id' => 1341,
                'alerte_id' => 2040,
                'saisie_id' => 269,
                'valeur' => '6',
                'danger' => 1,
            ),
            644 => 
            array (
                'id' => 1344,
                'alerte_id' => 5056,
                'saisie_id' => 286,
                'valeur' => '2',
                'danger' => 1,
            ),
            645 => 
            array (
                'id' => 1353,
                'alerte_id' => 5003,
                'saisie_id' => 291,
                'valeur' => '10',
                'danger' => 1,
            ),
            646 => 
            array (
                'id' => 1365,
                'alerte_id' => 1001,
                'saisie_id' => 293,
                'valeur' => '1',
                'danger' => 1,
            ),
            647 => 
            array (
                'id' => 1366,
                'alerte_id' => 1003,
                'saisie_id' => 293,
                'valeur' => '5',
                'danger' => 1,
            ),
            648 => 
            array (
                'id' => 1367,
                'alerte_id' => 1013,
                'saisie_id' => 293,
                'valeur' => '1',
                'danger' => 1,
            ),
            649 => 
            array (
                'id' => 1368,
                'alerte_id' => 1014,
                'saisie_id' => 293,
                'valeur' => '5',
                'danger' => 1,
            ),
            650 => 
            array (
                'id' => 1369,
                'alerte_id' => 1015,
                'saisie_id' => 293,
                'valeur' => '400',
                'danger' => 1,
            ),
            651 => 
            array (
                'id' => 1370,
                'alerte_id' => 1016,
                'saisie_id' => 293,
                'valeur' => '50',
                'danger' => 1,
            ),
            652 => 
            array (
                'id' => 1371,
                'alerte_id' => 1018,
                'saisie_id' => 293,
                'valeur' => '2',
                'danger' => 1,
            ),
            653 => 
            array (
                'id' => 1372,
                'alerte_id' => 1024,
                'saisie_id' => 293,
                'valeur' => '10',
                'danger' => 1,
            ),
            654 => 
            array (
                'id' => 1373,
                'alerte_id' => 1025,
                'saisie_id' => 293,
                'valeur' => '5',
                'danger' => 1,
            ),
            655 => 
            array (
                'id' => 1374,
                'alerte_id' => 1028,
                'saisie_id' => 293,
                'valeur' => '20',
                'danger' => 1,
            ),
            656 => 
            array (
                'id' => 1375,
                'alerte_id' => 1030,
                'saisie_id' => 293,
                'valeur' => '7',
                'danger' => 1,
            ),
            657 => 
            array (
                'id' => 1376,
                'alerte_id' => 1032,
                'saisie_id' => 293,
                'valeur' => '10',
                'danger' => 1,
            ),
            658 => 
            array (
                'id' => 1377,
                'alerte_id' => 1034,
                'saisie_id' => 293,
                'valeur' => '1',
                'danger' => 1,
            ),
            659 => 
            array (
                'id' => 1378,
                'alerte_id' => 1035,
                'saisie_id' => 293,
                'valeur' => '1',
                'danger' => 1,
            ),
            660 => 
            array (
                'id' => 1379,
                'alerte_id' => 1036,
                'saisie_id' => 293,
                'valeur' => '21',
                'danger' => 1,
            ),
            661 => 
            array (
                'id' => 1380,
                'alerte_id' => 1037,
                'saisie_id' => 293,
                'valeur' => '10',
                'danger' => 1,
            ),
            662 => 
            array (
                'id' => 1381,
                'alerte_id' => 1038,
                'saisie_id' => 293,
                'valeur' => '10',
                'danger' => 1,
            ),
            663 => 
            array (
                'id' => 1382,
                'alerte_id' => 1039,
                'saisie_id' => 293,
                'valeur' => '10',
                'danger' => 1,
            ),
            664 => 
            array (
                'id' => 1383,
                'alerte_id' => 1041,
                'saisie_id' => 293,
                'valeur' => '1',
                'danger' => 1,
            ),
            665 => 
            array (
                'id' => 1384,
                'alerte_id' => 1042,
                'saisie_id' => 293,
                'valeur' => '2',
                'danger' => 1,
            ),
            666 => 
            array (
                'id' => 1385,
                'alerte_id' => 1043,
                'saisie_id' => 293,
                'valeur' => '5',
                'danger' => 1,
            ),
            667 => 
            array (
                'id' => 1386,
                'alerte_id' => 1044,
                'saisie_id' => 293,
                'valeur' => '8',
                'danger' => 1,
            ),
            668 => 
            array (
                'id' => 1387,
                'alerte_id' => 1045,
                'saisie_id' => 293,
                'valeur' => '5',
                'danger' => 1,
            ),
            669 => 
            array (
                'id' => 1388,
                'alerte_id' => 1047,
                'saisie_id' => 293,
                'valeur' => '2',
                'danger' => 1,
            ),
            670 => 
            array (
                'id' => 1389,
                'alerte_id' => 1049,
                'saisie_id' => 293,
                'valeur' => '1',
                'danger' => 1,
            ),
            671 => 
            array (
                'id' => 1436,
                'alerte_id' => 1003,
                'saisie_id' => 295,
                'valeur' => '1',
                'danger' => 1,
            ),
            672 => 
            array (
                'id' => 1437,
                'alerte_id' => 1010,
                'saisie_id' => 295,
                'valeur' => '4500',
                'danger' => 1,
            ),
            673 => 
            array (
                'id' => 1438,
                'alerte_id' => 1014,
                'saisie_id' => 295,
                'valeur' => '5',
                'danger' => 1,
            ),
            674 => 
            array (
                'id' => 1439,
                'alerte_id' => 1020,
                'saisie_id' => 295,
                'valeur' => '3',
                'danger' => 1,
            ),
            675 => 
            array (
                'id' => 1440,
                'alerte_id' => 1022,
                'saisie_id' => 295,
                'valeur' => '3',
                'danger' => 1,
            ),
            676 => 
            array (
                'id' => 1441,
                'alerte_id' => 1025,
                'saisie_id' => 295,
                'valeur' => '7',
                'danger' => 1,
            ),
            677 => 
            array (
                'id' => 1442,
                'alerte_id' => 1029,
                'saisie_id' => 295,
                'valeur' => '15',
                'danger' => 1,
            ),
            678 => 
            array (
                'id' => 1443,
                'alerte_id' => 1030,
                'saisie_id' => 295,
                'valeur' => '8',
                'danger' => 1,
            ),
            679 => 
            array (
                'id' => 1444,
                'alerte_id' => 1032,
                'saisie_id' => 295,
                'valeur' => '80',
                'danger' => 1,
            ),
            680 => 
            array (
                'id' => 1445,
                'alerte_id' => 1034,
                'saisie_id' => 295,
                'valeur' => '1',
                'danger' => 1,
            ),
            681 => 
            array (
                'id' => 1446,
                'alerte_id' => 1035,
                'saisie_id' => 295,
                'valeur' => '1',
                'danger' => 1,
            ),
            682 => 
            array (
                'id' => 1447,
                'alerte_id' => 1037,
                'saisie_id' => 295,
                'valeur' => '1',
                'danger' => 1,
            ),
            683 => 
            array (
                'id' => 1448,
                'alerte_id' => 1038,
                'saisie_id' => 295,
                'valeur' => '1',
                'danger' => 1,
            ),
            684 => 
            array (
                'id' => 1449,
                'alerte_id' => 1040,
                'saisie_id' => 295,
                'valeur' => '50',
                'danger' => 1,
            ),
            685 => 
            array (
                'id' => 1454,
                'alerte_id' => 3014,
                'saisie_id' => 244,
                'valeur' => '7',
                'danger' => 1,
            ),
            686 => 
            array (
                'id' => 1455,
                'alerte_id' => 3016,
                'saisie_id' => 244,
                'valeur' => '7',
                'danger' => 1,
            ),
            687 => 
            array (
                'id' => 1456,
                'alerte_id' => 3027,
                'saisie_id' => 244,
                'valeur' => '7',
                'danger' => 1,
            ),
            688 => 
            array (
                'id' => 1457,
                'alerte_id' => 3028,
                'saisie_id' => 244,
                'valeur' => '5',
                'danger' => 1,
            ),
            689 => 
            array (
                'id' => 1458,
                'alerte_id' => 3037,
                'saisie_id' => 244,
                'valeur' => '1',
                'danger' => 1,
            ),
            690 => 
            array (
                'id' => 1467,
                'alerte_id' => 3040,
                'saisie_id' => 244,
                'valeur' => '1',
                'danger' => 1,
            ),
            691 => 
            array (
                'id' => 1468,
                'alerte_id' => 3041,
                'saisie_id' => 244,
                'valeur' => '1',
                'danger' => 1,
            ),
            692 => 
            array (
                'id' => 1469,
                'alerte_id' => 3042,
                'saisie_id' => 244,
                'valeur' => '1',
                'danger' => 1,
            ),
            693 => 
            array (
                'id' => 1471,
                'alerte_id' => 5016,
                'saisie_id' => 297,
                'valeur' => '3',
                'danger' => 1,
            ),
            694 => 
            array (
                'id' => 1475,
                'alerte_id' => 3000,
                'saisie_id' => 244,
                'valeur' => '1',
                'danger' => 1,
            ),
            695 => 
            array (
                'id' => 1476,
                'alerte_id' => 3003,
                'saisie_id' => 244,
                'valeur' => '11',
                'danger' => 1,
            ),
            696 => 
            array (
                'id' => 1477,
                'alerte_id' => 3006,
                'saisie_id' => 244,
                'valeur' => '1',
                'danger' => 1,
            ),
            697 => 
            array (
                'id' => 1478,
                'alerte_id' => 5055,
                'saisie_id' => 297,
                'valeur' => '2',
                'danger' => 1,
            ),
            698 => 
            array (
                'id' => 1479,
                'alerte_id' => 5003,
                'saisie_id' => 296,
                'valeur' => '6',
                'danger' => 1,
            ),
            699 => 
            array (
                'id' => 1480,
                'alerte_id' => 5019,
                'saisie_id' => 296,
                'valeur' => '6',
                'danger' => 1,
            ),
            700 => 
            array (
                'id' => 1481,
                'alerte_id' => 5035,
                'saisie_id' => 296,
                'valeur' => '5',
                'danger' => 1,
            ),
            701 => 
            array (
                'id' => 1484,
                'alerte_id' => 5052,
                'saisie_id' => 296,
                'valeur' => '2',
                'danger' => 1,
            ),
            702 => 
            array (
                'id' => 1485,
                'alerte_id' => 4009,
                'saisie_id' => 299,
                'valeur' => '20',
                'danger' => 1,
            ),
            703 => 
            array (
                'id' => 1486,
                'alerte_id' => 4024,
                'saisie_id' => 299,
                'valeur' => '10',
                'danger' => 1,
            ),
            704 => 
            array (
                'id' => 1487,
                'alerte_id' => 4028,
                'saisie_id' => 299,
                'valeur' => '10',
                'danger' => 1,
            ),
            705 => 
            array (
                'id' => 1488,
                'alerte_id' => 4049,
                'saisie_id' => 299,
                'valeur' => '1',
                'danger' => 1,
            ),
            706 => 
            array (
                'id' => 1489,
                'alerte_id' => 4052,
                'saisie_id' => 299,
                'valeur' => '1',
                'danger' => 1,
            ),
            707 => 
            array (
                'id' => 1490,
                'alerte_id' => 4053,
                'saisie_id' => 299,
                'valeur' => '1',
                'danger' => 1,
            ),
            708 => 
            array (
                'id' => 1491,
                'alerte_id' => 4054,
                'saisie_id' => 299,
                'valeur' => '40',
                'danger' => 1,
            ),
            709 => 
            array (
                'id' => 1492,
                'alerte_id' => 4057,
                'saisie_id' => 299,
                'valeur' => '2',
                'danger' => 1,
            ),
            710 => 
            array (
                'id' => 1493,
                'alerte_id' => 2001,
                'saisie_id' => 300,
                'valeur' => '5',
                'danger' => 1,
            ),
            711 => 
            array (
                'id' => 1494,
                'alerte_id' => 3048,
                'saisie_id' => 301,
                'valeur' => '1',
                'danger' => 1,
            ),
            712 => 
            array (
                'id' => 1495,
                'alerte_id' => 3003,
                'saisie_id' => 303,
                'valeur' => '14',
                'danger' => 1,
            ),
            713 => 
            array (
                'id' => 1496,
                'alerte_id' => 3004,
                'saisie_id' => 303,
                'valeur' => '30',
                'danger' => 1,
            ),
            714 => 
            array (
                'id' => 1497,
                'alerte_id' => 3005,
                'saisie_id' => 303,
                'valeur' => '30',
                'danger' => 1,
            ),
            715 => 
            array (
                'id' => 1498,
                'alerte_id' => 3007,
                'saisie_id' => 303,
                'valeur' => '5',
                'danger' => 1,
            ),
            716 => 
            array (
                'id' => 1499,
                'alerte_id' => 3008,
                'saisie_id' => 303,
                'valeur' => '5',
                'danger' => 1,
            ),
            717 => 
            array (
                'id' => 1500,
                'alerte_id' => 3011,
                'saisie_id' => 303,
                'valeur' => '1',
                'danger' => 1,
            ),
            718 => 
            array (
                'id' => 1501,
                'alerte_id' => 3012,
                'saisie_id' => 303,
                'valeur' => '5',
                'danger' => 1,
            ),
            719 => 
            array (
                'id' => 1502,
                'alerte_id' => 3014,
                'saisie_id' => 303,
                'valeur' => '15',
                'danger' => 1,
            ),
            720 => 
            array (
                'id' => 1503,
                'alerte_id' => 3015,
                'saisie_id' => 303,
                'valeur' => '15',
                'danger' => 1,
            ),
            721 => 
            array (
                'id' => 1504,
                'alerte_id' => 3016,
                'saisie_id' => 303,
                'valeur' => '8',
                'danger' => 1,
            ),
            722 => 
            array (
                'id' => 1505,
                'alerte_id' => 3017,
                'saisie_id' => 303,
                'valeur' => '2',
                'danger' => 1,
            ),
            723 => 
            array (
                'id' => 1506,
                'alerte_id' => 3018,
                'saisie_id' => 303,
                'valeur' => '1',
                'danger' => 1,
            ),
            724 => 
            array (
                'id' => 1507,
                'alerte_id' => 3026,
                'saisie_id' => 303,
                'valeur' => '45',
                'danger' => 1,
            ),
            725 => 
            array (
                'id' => 1508,
                'alerte_id' => 3027,
                'saisie_id' => 303,
                'valeur' => '15',
                'danger' => 1,
            ),
            726 => 
            array (
                'id' => 1509,
                'alerte_id' => 3028,
                'saisie_id' => 303,
                'valeur' => '3',
                'danger' => 1,
            ),
            727 => 
            array (
                'id' => 1510,
                'alerte_id' => 3029,
                'saisie_id' => 303,
                'valeur' => '20',
                'danger' => 1,
            ),
            728 => 
            array (
                'id' => 1511,
                'alerte_id' => 3047,
                'saisie_id' => 303,
                'valeur' => '1',
                'danger' => 1,
            ),
            729 => 
            array (
                'id' => 1512,
                'alerte_id' => 3048,
                'saisie_id' => 303,
                'valeur' => '1',
                'danger' => 1,
            ),
            730 => 
            array (
                'id' => 1513,
                'alerte_id' => 5009,
                'saisie_id' => 304,
                'valeur' => '49',
                'danger' => 1,
            ),
            731 => 
            array (
                'id' => 1514,
                'alerte_id' => 5020,
                'saisie_id' => 304,
                'valeur' => '11',
                'danger' => 1,
            ),
            732 => 
            array (
                'id' => 1515,
                'alerte_id' => 5052,
                'saisie_id' => 304,
                'valeur' => '2',
                'danger' => 1,
            ),
            733 => 
            array (
                'id' => 1516,
                'alerte_id' => 5056,
                'saisie_id' => 304,
                'valeur' => '2',
                'danger' => 1,
            ),
            734 => 
            array (
                'id' => 1518,
                'alerte_id' => 1001,
                'saisie_id' => 305,
                'valeur' => '1',
                'danger' => 1,
            ),
            735 => 
            array (
                'id' => 1519,
                'alerte_id' => 1009,
                'saisie_id' => 305,
                'valeur' => '30',
                'danger' => 1,
            ),
            736 => 
            array (
                'id' => 1520,
                'alerte_id' => 1034,
                'saisie_id' => 305,
                'valeur' => '1',
                'danger' => 1,
            ),
            737 => 
            array (
                'id' => 1521,
                'alerte_id' => 1044,
                'saisie_id' => 305,
                'valeur' => '1',
                'danger' => 1,
            ),
            738 => 
            array (
                'id' => 1522,
                'alerte_id' => 3016,
                'saisie_id' => 306,
                'valeur' => '5',
                'danger' => 1,
            ),
            739 => 
            array (
                'id' => 1523,
                'alerte_id' => 3032,
                'saisie_id' => 306,
                'valeur' => '5',
                'danger' => 1,
            ),
            740 => 
            array (
                'id' => 1524,
                'alerte_id' => 3038,
                'saisie_id' => 306,
                'valeur' => '5700',
                'danger' => 1,
            ),
            741 => 
            array (
                'id' => 1525,
                'alerte_id' => 3039,
                'saisie_id' => 306,
                'valeur' => '1',
                'danger' => 1,
            ),
            742 => 
            array (
                'id' => 1526,
                'alerte_id' => 3048,
                'saisie_id' => 306,
                'valeur' => '1',
                'danger' => 1,
            ),
            743 => 
            array (
                'id' => 1527,
                'alerte_id' => 3000,
                'saisie_id' => 307,
                'valeur' => '1',
                'danger' => 1,
            ),
            744 => 
            array (
                'id' => 1528,
                'alerte_id' => 3003,
                'saisie_id' => 307,
                'valeur' => '11',
                'danger' => 1,
            ),
            745 => 
            array (
                'id' => 1529,
                'alerte_id' => 3014,
                'saisie_id' => 307,
                'valeur' => '7',
                'danger' => 1,
            ),
            746 => 
            array (
                'id' => 1530,
                'alerte_id' => 3016,
                'saisie_id' => 307,
                'valeur' => '7',
                'danger' => 1,
            ),
            747 => 
            array (
                'id' => 1531,
                'alerte_id' => 3027,
                'saisie_id' => 307,
                'valeur' => '7',
                'danger' => 1,
            ),
            748 => 
            array (
                'id' => 1532,
                'alerte_id' => 3028,
                'saisie_id' => 307,
                'valeur' => '5',
                'danger' => 1,
            ),
            749 => 
            array (
                'id' => 1533,
                'alerte_id' => 3034,
                'saisie_id' => 307,
                'valeur' => '1',
                'danger' => 1,
            ),
            750 => 
            array (
                'id' => 1534,
                'alerte_id' => 3037,
                'saisie_id' => 307,
                'valeur' => '1',
                'danger' => 1,
            ),
            751 => 
            array (
                'id' => 1535,
                'alerte_id' => 3039,
                'saisie_id' => 307,
                'valeur' => '1',
                'danger' => 1,
            ),
            752 => 
            array (
                'id' => 1537,
                'alerte_id' => 5003,
                'saisie_id' => 308,
                'valeur' => '7',
                'danger' => 1,
            ),
            753 => 
            array (
                'id' => 1541,
                'alerte_id' => 5019,
                'saisie_id' => 308,
                'valeur' => '9',
                'danger' => 1,
            ),
            754 => 
            array (
                'id' => 1542,
                'alerte_id' => 5027,
                'saisie_id' => 308,
                'valeur' => '5',
                'danger' => 1,
            ),
            755 => 
            array (
                'id' => 1543,
                'alerte_id' => 5034,
                'saisie_id' => 308,
                'valeur' => '16',
                'danger' => 1,
            ),
            756 => 
            array (
                'id' => 1544,
                'alerte_id' => 5052,
                'saisie_id' => 308,
                'valeur' => '2',
                'danger' => 1,
            ),
            757 => 
            array (
                'id' => 1545,
                'alerte_id' => 5056,
                'saisie_id' => 308,
                'valeur' => '2',
                'danger' => 1,
            ),
            758 => 
            array (
                'id' => 1549,
                'alerte_id' => 5009,
                'saisie_id' => 308,
                'valeur' => '25',
                'danger' => 1,
            ),
            759 => 
            array (
                'id' => 1550,
                'alerte_id' => 5016,
                'saisie_id' => 308,
                'valeur' => '3',
                'danger' => 1,
            ),
            760 => 
            array (
                'id' => 1551,
                'alerte_id' => 5009,
                'saisie_id' => 310,
                'valeur' => '85',
                'danger' => 1,
            ),
            761 => 
            array (
                'id' => 1552,
                'alerte_id' => 5016,
                'saisie_id' => 310,
                'valeur' => '2',
                'danger' => 1,
            ),
            762 => 
            array (
                'id' => 1553,
                'alerte_id' => 5020,
                'saisie_id' => 310,
                'valeur' => '15',
                'danger' => 1,
            ),
            763 => 
            array (
                'id' => 1554,
                'alerte_id' => 5026,
                'saisie_id' => 310,
                'valeur' => '8',
                'danger' => 1,
            ),
            764 => 
            array (
                'id' => 1555,
                'alerte_id' => 5034,
                'saisie_id' => 310,
                'valeur' => '15',
                'danger' => 1,
            ),
            765 => 
            array (
                'id' => 1556,
                'alerte_id' => 2000,
                'saisie_id' => 316,
                'valeur' => '1',
                'danger' => 1,
            ),
            766 => 
            array (
                'id' => 1557,
                'alerte_id' => 2008,
                'saisie_id' => 316,
                'valeur' => '10',
                'danger' => 1,
            ),
            767 => 
            array (
                'id' => 1558,
                'alerte_id' => 2001,
                'saisie_id' => 322,
                'valeur' => '5',
                'danger' => 1,
            ),
            768 => 
            array (
                'id' => 1559,
                'alerte_id' => 2002,
                'saisie_id' => 322,
                'valeur' => '6',
                'danger' => 1,
            ),
            769 => 
            array (
                'id' => 1560,
                'alerte_id' => 2009,
                'saisie_id' => 322,
                'valeur' => '1',
                'danger' => 1,
            ),
            770 => 
            array (
                'id' => 1561,
                'alerte_id' => 2021,
                'saisie_id' => 322,
                'valeur' => '7',
                'danger' => 1,
            ),
            771 => 
            array (
                'id' => 1562,
                'alerte_id' => 2023,
                'saisie_id' => 322,
                'valeur' => '1',
                'danger' => 1,
            ),
            772 => 
            array (
                'id' => 1563,
                'alerte_id' => 2038,
                'saisie_id' => 322,
                'valeur' => '10',
                'danger' => 1,
            ),
            773 => 
            array (
                'id' => 1564,
                'alerte_id' => 2044,
                'saisie_id' => 322,
                'valeur' => '2',
                'danger' => 1,
            ),
            774 => 
            array (
                'id' => 1565,
                'alerte_id' => 2052,
                'saisie_id' => 322,
                'valeur' => '1',
                'danger' => 1,
            ),
            775 => 
            array (
                'id' => 1566,
                'alerte_id' => 2053,
                'saisie_id' => 322,
                'valeur' => '2',
                'danger' => 1,
            ),
            776 => 
            array (
                'id' => 1567,
                'alerte_id' => 2055,
                'saisie_id' => 322,
                'valeur' => '15',
                'danger' => 1,
            ),
            777 => 
            array (
                'id' => 1578,
                'alerte_id' => 3000,
                'saisie_id' => 323,
                'valeur' => '1',
                'danger' => 1,
            ),
            778 => 
            array (
                'id' => 1579,
                'alerte_id' => 3003,
                'saisie_id' => 323,
                'valeur' => '7',
                'danger' => 1,
            ),
            779 => 
            array (
                'id' => 1580,
                'alerte_id' => 3004,
                'saisie_id' => 323,
                'valeur' => '4',
                'danger' => 1,
            ),
            780 => 
            array (
                'id' => 1581,
                'alerte_id' => 3014,
                'saisie_id' => 323,
                'valeur' => '1',
                'danger' => 1,
            ),
            781 => 
            array (
                'id' => 1582,
                'alerte_id' => 3034,
                'saisie_id' => 323,
                'valeur' => '1',
                'danger' => 1,
            ),
            782 => 
            array (
                'id' => 1583,
                'alerte_id' => 3037,
                'saisie_id' => 323,
                'valeur' => '1',
                'danger' => 1,
            ),
            783 => 
            array (
                'id' => 1584,
                'alerte_id' => 3038,
                'saisie_id' => 323,
                'valeur' => '1300',
                'danger' => 1,
            ),
            784 => 
            array (
                'id' => 1585,
                'alerte_id' => 3039,
                'saisie_id' => 323,
                'valeur' => '1',
                'danger' => 1,
            ),
            785 => 
            array (
                'id' => 1586,
                'alerte_id' => 3000,
                'saisie_id' => 324,
                'valeur' => '2',
                'danger' => 1,
            ),
            786 => 
            array (
                'id' => 1587,
                'alerte_id' => 3004,
                'saisie_id' => 324,
                'valeur' => '5',
                'danger' => 1,
            ),
            787 => 
            array (
                'id' => 1588,
                'alerte_id' => 3009,
                'saisie_id' => 324,
                'valeur' => '45',
                'danger' => 1,
            ),
            788 => 
            array (
                'id' => 1589,
                'alerte_id' => 1002,
                'saisie_id' => 325,
                'valeur' => '3',
                'danger' => 1,
            ),
            789 => 
            array (
                'id' => 1590,
                'alerte_id' => 1003,
                'saisie_id' => 325,
                'valeur' => '5',
                'danger' => 1,
            ),
            790 => 
            array (
                'id' => 1591,
                'alerte_id' => 5000,
                'saisie_id' => 326,
                'valeur' => '1',
                'danger' => 1,
            ),
            791 => 
            array (
                'id' => 1592,
                'alerte_id' => 5004,
                'saisie_id' => 326,
                'valeur' => '30',
                'danger' => 1,
            ),
            792 => 
            array (
                'id' => 1593,
                'alerte_id' => 5005,
                'saisie_id' => 326,
                'valeur' => '50',
                'danger' => 1,
            ),
            793 => 
            array (
                'id' => 1594,
                'alerte_id' => 5016,
                'saisie_id' => 326,
                'valeur' => '2',
                'danger' => 1,
            ),
            794 => 
            array (
                'id' => 1595,
                'alerte_id' => 5028,
                'saisie_id' => 326,
                'valeur' => '10',
                'danger' => 1,
            ),
            795 => 
            array (
                'id' => 1596,
                'alerte_id' => 5035,
                'saisie_id' => 326,
                'valeur' => '50',
                'danger' => 1,
            ),
            796 => 
            array (
                'id' => 1597,
                'alerte_id' => 5051,
                'saisie_id' => 326,
                'valeur' => '30',
                'danger' => 1,
            ),
            797 => 
            array (
                'id' => 1598,
                'alerte_id' => 5052,
                'saisie_id' => 326,
                'valeur' => '2',
                'danger' => 1,
            ),
            798 => 
            array (
                'id' => 1599,
                'alerte_id' => 5059,
                'saisie_id' => 326,
                'valeur' => '30',
                'danger' => 1,
            ),
            799 => 
            array (
                'id' => 1600,
                'alerte_id' => 5062,
                'saisie_id' => 326,
                'valeur' => '30',
                'danger' => 1,
            ),
            800 => 
            array (
                'id' => 1601,
                'alerte_id' => 2003,
                'saisie_id' => 327,
                'valeur' => '30',
                'danger' => 1,
            ),
            801 => 
            array (
                'id' => 1606,
                'alerte_id' => 1011,
                'saisie_id' => 328,
                'valeur' => '1',
                'danger' => 1,
            ),
            802 => 
            array (
                'id' => 1607,
                'alerte_id' => 1013,
                'saisie_id' => 328,
                'valeur' => '1',
                'danger' => 1,
            ),
            803 => 
            array (
                'id' => 1608,
                'alerte_id' => 1015,
                'saisie_id' => 328,
                'valeur' => '450',
                'danger' => 1,
            ),
            804 => 
            array (
                'id' => 1609,
                'alerte_id' => 1014,
                'saisie_id' => 329,
                'valeur' => '2',
                'danger' => 1,
            ),
            805 => 
            array (
                'id' => 1610,
                'alerte_id' => 1047,
                'saisie_id' => 329,
                'valeur' => '11',
                'danger' => 1,
            ),
            806 => 
            array (
                'id' => 1611,
                'alerte_id' => 5021,
                'saisie_id' => 326,
                'valeur' => '1',
                'danger' => 1,
            ),
            807 => 
            array (
                'id' => 1617,
                'alerte_id' => 3025,
                'saisie_id' => 332,
                'valeur' => '20',
                'danger' => 1,
            ),
            808 => 
            array (
                'id' => 1618,
                'alerte_id' => 1011,
                'saisie_id' => 333,
                'valeur' => '1',
                'danger' => 1,
            ),
            809 => 
            array (
                'id' => 1622,
                'alerte_id' => 1029,
                'saisie_id' => 333,
                'valeur' => '20',
                'danger' => 1,
            ),
            810 => 
            array (
                'id' => 1623,
                'alerte_id' => 1003,
                'saisie_id' => 333,
                'valeur' => '2',
                'danger' => 1,
            ),
            811 => 
            array (
                'id' => 1624,
                'alerte_id' => 1035,
                'saisie_id' => 333,
                'valeur' => '1',
                'danger' => 1,
            ),
            812 => 
            array (
                'id' => 1625,
                'alerte_id' => 1044,
                'saisie_id' => 333,
                'valeur' => '2',
                'danger' => 1,
            ),
            813 => 
            array (
                'id' => 1626,
                'alerte_id' => 1045,
                'saisie_id' => 333,
                'valeur' => '1',
                'danger' => 1,
            ),
            814 => 
            array (
                'id' => 1627,
                'alerte_id' => 2012,
                'saisie_id' => 327,
                'valeur' => '48',
                'danger' => 1,
            ),
            815 => 
            array (
                'id' => 1628,
                'alerte_id' => 2037,
                'saisie_id' => 327,
                'valeur' => '100',
                'danger' => 1,
            ),
            816 => 
            array (
                'id' => 1629,
                'alerte_id' => 2039,
                'saisie_id' => 327,
                'valeur' => '100',
                'danger' => 1,
            ),
            817 => 
            array (
                'id' => 1644,
                'alerte_id' => 2009,
                'saisie_id' => 340,
                'valeur' => '2',
                'danger' => 1,
            ),
            818 => 
            array (
                'id' => 1645,
                'alerte_id' => 2013,
                'saisie_id' => 340,
                'valeur' => '95',
                'danger' => 1,
            ),
            819 => 
            array (
                'id' => 1646,
                'alerte_id' => 2016,
                'saisie_id' => 340,
                'valeur' => '405',
                'danger' => 1,
            ),
            820 => 
            array (
                'id' => 1647,
                'alerte_id' => 2020,
                'saisie_id' => 340,
                'valeur' => '3',
                'danger' => 1,
            ),
            821 => 
            array (
                'id' => 1651,
                'alerte_id' => 2035,
                'saisie_id' => 340,
                'valeur' => '10',
                'danger' => 1,
            ),
            822 => 
            array (
                'id' => 1652,
                'alerte_id' => 2056,
                'saisie_id' => 340,
                'valeur' => '7',
                'danger' => 1,
            ),
            823 => 
            array (
                'id' => 1653,
                'alerte_id' => 2057,
                'saisie_id' => 340,
                'valeur' => '20',
                'danger' => 1,
            ),
            824 => 
            array (
                'id' => 1654,
                'alerte_id' => 2030,
                'saisie_id' => 340,
                'valeur' => '500000',
                'danger' => 1,
            ),
            825 => 
            array (
                'id' => 1655,
                'alerte_id' => 2031,
                'saisie_id' => 340,
                'valeur' => '22.5',
                'danger' => 1,
            ),
            826 => 
            array (
                'id' => 1656,
                'alerte_id' => 2032,
                'saisie_id' => 340,
                'valeur' => '22',
                'danger' => 1,
            ),
            827 => 
            array (
                'id' => 1657,
                'alerte_id' => 2005,
                'saisie_id' => 341,
                'valeur' => '1',
                'danger' => 1,
            ),
            828 => 
            array (
                'id' => 1658,
                'alerte_id' => 2013,
                'saisie_id' => 341,
                'valeur' => '150',
                'danger' => 1,
            ),
            829 => 
            array (
                'id' => 1659,
                'alerte_id' => 2016,
                'saisie_id' => 341,
                'valeur' => '450',
                'danger' => 1,
            ),
            830 => 
            array (
                'id' => 1660,
                'alerte_id' => 2017,
                'saisie_id' => 341,
                'valeur' => '15',
                'danger' => 1,
            ),
            831 => 
            array (
                'id' => 1661,
                'alerte_id' => 2019,
                'saisie_id' => 341,
                'valeur' => '15',
                'danger' => 1,
            ),
            832 => 
            array (
                'id' => 1662,
                'alerte_id' => 2021,
                'saisie_id' => 341,
                'valeur' => '1',
                'danger' => 1,
            ),
            833 => 
            array (
                'id' => 1663,
                'alerte_id' => 2023,
                'saisie_id' => 341,
                'valeur' => '1',
                'danger' => 1,
            ),
            834 => 
            array (
                'id' => 1664,
                'alerte_id' => 2038,
                'saisie_id' => 341,
                'valeur' => '50',
                'danger' => 1,
            ),
            835 => 
            array (
                'id' => 1665,
                'alerte_id' => 2053,
                'saisie_id' => 341,
                'valeur' => '1',
                'danger' => 1,
            ),
            836 => 
            array (
                'id' => 1666,
                'alerte_id' => 2054,
                'saisie_id' => 341,
                'valeur' => '1',
                'danger' => 1,
            ),
            837 => 
            array (
                'id' => 1667,
                'alerte_id' => 5000,
                'saisie_id' => 335,
                'valeur' => '1',
                'danger' => 1,
            ),
            838 => 
            array (
                'id' => 1668,
                'alerte_id' => 5006,
                'saisie_id' => 335,
                'valeur' => '1',
                'danger' => 1,
            ),
            839 => 
            array (
                'id' => 1671,
                'alerte_id' => 5009,
                'saisie_id' => 335,
                'valeur' => '30',
                'danger' => 1,
            ),
            840 => 
            array (
                'id' => 1672,
                'alerte_id' => 5059,
                'saisie_id' => 335,
                'valeur' => '50',
                'danger' => 1,
            ),
            841 => 
            array (
                'id' => 1673,
                'alerte_id' => 5062,
                'saisie_id' => 335,
                'valeur' => '3',
                'danger' => 1,
            ),
            842 => 
            array (
                'id' => 1674,
                'alerte_id' => 2001,
                'saisie_id' => 351,
                'valeur' => '1',
                'danger' => 1,
            ),
            843 => 
            array (
                'id' => 1675,
                'alerte_id' => 2002,
                'saisie_id' => 351,
                'valeur' => '1.99',
                'danger' => 1,
            ),
            844 => 
            array (
                'id' => 1676,
                'alerte_id' => 2013,
                'saisie_id' => 351,
                'valeur' => '365',
                'danger' => 1,
            ),
            845 => 
            array (
                'id' => 1677,
                'alerte_id' => 2020,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            846 => 
            array (
                'id' => 1678,
                'alerte_id' => 2021,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            847 => 
            array (
                'id' => 1679,
                'alerte_id' => 2022,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            848 => 
            array (
                'id' => 1680,
                'alerte_id' => 2023,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            849 => 
            array (
                'id' => 1681,
                'alerte_id' => 2025,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            850 => 
            array (
                'id' => 1682,
                'alerte_id' => 2034,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            851 => 
            array (
                'id' => 1683,
                'alerte_id' => 2044,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            852 => 
            array (
                'id' => 1684,
                'alerte_id' => 2051,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            853 => 
            array (
                'id' => 1685,
                'alerte_id' => 2052,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            854 => 
            array (
                'id' => 1686,
                'alerte_id' => 2053,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            855 => 
            array (
                'id' => 1687,
                'alerte_id' => 2056,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            856 => 
            array (
                'id' => 1688,
                'alerte_id' => 2059,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            857 => 
            array (
                'id' => 1689,
                'alerte_id' => 2060,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            858 => 
            array (
                'id' => 1690,
                'alerte_id' => 2061,
                'saisie_id' => 351,
                'valeur' => '5',
                'danger' => 1,
            ),
            859 => 
            array (
                'id' => 1691,
                'alerte_id' => 2021,
                'saisie_id' => 354,
                'valeur' => '1',
                'danger' => 1,
            ),
            860 => 
            array (
                'id' => 1692,
                'alerte_id' => 2023,
                'saisie_id' => 354,
                'valeur' => '1',
                'danger' => 1,
            ),
            861 => 
            array (
                'id' => 1693,
                'alerte_id' => 2025,
                'saisie_id' => 354,
                'valeur' => '5',
                'danger' => 1,
            ),
            862 => 
            array (
                'id' => 1694,
                'alerte_id' => 2027,
                'saisie_id' => 354,
                'valeur' => '40',
                'danger' => 1,
            ),
            863 => 
            array (
                'id' => 1695,
                'alerte_id' => 2029,
                'saisie_id' => 354,
                'valeur' => '490',
                'danger' => 1,
            ),
            864 => 
            array (
                'id' => 1696,
                'alerte_id' => 2001,
                'saisie_id' => 357,
                'valeur' => '1',
                'danger' => 1,
            ),
            865 => 
            array (
                'id' => 1700,
                'alerte_id' => 2026,
                'saisie_id' => 357,
                'valeur' => '35',
                'danger' => 1,
            ),
            866 => 
            array (
                'id' => 1701,
                'alerte_id' => 2042,
                'saisie_id' => 357,
                'valeur' => '700',
                'danger' => 1,
            ),
            867 => 
            array (
                'id' => 1702,
                'alerte_id' => 2050,
                'saisie_id' => 357,
                'valeur' => '1',
                'danger' => 1,
            ),
            868 => 
            array (
                'id' => 1703,
                'alerte_id' => 2052,
                'saisie_id' => 357,
                'valeur' => '1',
                'danger' => 1,
            ),
            869 => 
            array (
                'id' => 1704,
                'alerte_id' => 2053,
                'saisie_id' => 357,
                'valeur' => '1',
                'danger' => 1,
            ),
            870 => 
            array (
                'id' => 1705,
                'alerte_id' => 2054,
                'saisie_id' => 357,
                'valeur' => '1',
                'danger' => 1,
            ),
            871 => 
            array (
                'id' => 1706,
                'alerte_id' => 2055,
                'saisie_id' => 357,
                'valeur' => '15',
                'danger' => 1,
            ),
            872 => 
            array (
                'id' => 1707,
                'alerte_id' => 2058,
                'saisie_id' => 357,
                'valeur' => '15',
                'danger' => 1,
            ),
            873 => 
            array (
                'id' => 1708,
                'alerte_id' => 2011,
                'saisie_id' => 357,
                'valeur' => '1',
                'danger' => 1,
            ),
            874 => 
            array (
                'id' => 1709,
                'alerte_id' => 2014,
                'saisie_id' => 357,
                'valeur' => '35',
                'danger' => 1,
            ),
            875 => 
            array (
                'id' => 1710,
                'alerte_id' => 2016,
                'saisie_id' => 357,
                'valeur' => '425',
                'danger' => 1,
            ),
            876 => 
            array (
                'id' => 1711,
                'alerte_id' => 2002,
                'saisie_id' => 358,
                'valeur' => '1',
                'danger' => 1,
            ),
            877 => 
            array (
                'id' => 1712,
                'alerte_id' => 2005,
                'saisie_id' => 358,
                'valeur' => '1',
                'danger' => 1,
            ),
            878 => 
            array (
                'id' => 1713,
                'alerte_id' => 2006,
                'saisie_id' => 358,
                'valeur' => '25',
                'danger' => 1,
            ),
            879 => 
            array (
                'id' => 1714,
                'alerte_id' => 2008,
                'saisie_id' => 358,
                'valeur' => '5',
                'danger' => 1,
            ),
            880 => 
            array (
                'id' => 1715,
                'alerte_id' => 2055,
                'saisie_id' => 365,
                'valeur' => '7',
                'danger' => 1,
            ),
            881 => 
            array (
                'id' => 1716,
                'alerte_id' => 2056,
                'saisie_id' => 365,
                'valeur' => '10',
                'danger' => 1,
            ),
            882 => 
            array (
                'id' => 1717,
                'alerte_id' => 2057,
                'saisie_id' => 365,
                'valeur' => '20',
                'danger' => 1,
            ),
            883 => 
            array (
                'id' => 1718,
                'alerte_id' => 1003,
                'saisie_id' => 372,
                'valeur' => '10',
                'danger' => 1,
            ),
            884 => 
            array (
                'id' => 1719,
                'alerte_id' => 1019,
                'saisie_id' => 372,
                'valeur' => '5',
                'danger' => 1,
            ),
            885 => 
            array (
                'id' => 1720,
                'alerte_id' => 1020,
                'saisie_id' => 372,
                'valeur' => '10',
                'danger' => 1,
            ),
            886 => 
            array (
                'id' => 1721,
                'alerte_id' => 1025,
                'saisie_id' => 372,
                'valeur' => '4',
                'danger' => 1,
            ),
            887 => 
            array (
                'id' => 1722,
                'alerte_id' => 1026,
                'saisie_id' => 372,
                'valeur' => '4',
                'danger' => 1,
            ),
            888 => 
            array (
                'id' => 1723,
                'alerte_id' => 1029,
                'saisie_id' => 372,
                'valeur' => '40',
                'danger' => 1,
            ),
            889 => 
            array (
                'id' => 1724,
                'alerte_id' => 1030,
                'saisie_id' => 372,
                'valeur' => '10',
                'danger' => 1,
            ),
            890 => 
            array (
                'id' => 1725,
                'alerte_id' => 1032,
                'saisie_id' => 372,
                'valeur' => '10',
                'danger' => 1,
            ),
            891 => 
            array (
                'id' => 1726,
                'alerte_id' => 1048,
                'saisie_id' => 372,
                'valeur' => '15',
                'danger' => 1,
            ),
            892 => 
            array (
                'id' => 1727,
                'alerte_id' => 2001,
                'saisie_id' => 375,
                'valeur' => '10',
                'danger' => 1,
            ),
            893 => 
            array (
                'id' => 1728,
                'alerte_id' => 2002,
                'saisie_id' => 375,
                'valeur' => '5',
                'danger' => 1,
            ),
            894 => 
            array (
                'id' => 1729,
                'alerte_id' => 2007,
                'saisie_id' => 375,
                'valeur' => '30',
                'danger' => 1,
            ),
            895 => 
            array (
                'id' => 1730,
                'alerte_id' => 2008,
                'saisie_id' => 375,
                'valeur' => '15',
                'danger' => 1,
            ),
            896 => 
            array (
                'id' => 1731,
                'alerte_id' => 2055,
                'saisie_id' => 375,
                'valeur' => '10',
                'danger' => 1,
            ),
            897 => 
            array (
                'id' => 1732,
                'alerte_id' => 2032,
                'saisie_id' => 375,
                'valeur' => '15',
                'danger' => 1,
            ),
            898 => 
            array (
                'id' => 1733,
                'alerte_id' => 2033,
                'saisie_id' => 375,
                'valeur' => '25',
                'danger' => 1,
            ),
            899 => 
            array (
                'id' => 1734,
                'alerte_id' => 2059,
                'saisie_id' => 375,
                'valeur' => '3',
                'danger' => 1,
            ),
            900 => 
            array (
                'id' => 1735,
                'alerte_id' => 2060,
                'saisie_id' => 375,
                'valeur' => '5',
                'danger' => 1,
            ),
            901 => 
            array (
                'id' => 1736,
                'alerte_id' => 2011,
                'saisie_id' => 379,
                'valeur' => '1',
                'danger' => 1,
            ),
            902 => 
            array (
                'id' => 1737,
                'alerte_id' => 2013,
                'saisie_id' => 379,
                'valeur' => '103',
                'danger' => 1,
            ),
            903 => 
            array (
                'id' => 1738,
                'alerte_id' => 2014,
                'saisie_id' => 379,
                'valeur' => '58',
                'danger' => 1,
            ),
            904 => 
            array (
                'id' => 1739,
                'alerte_id' => 2015,
                'saisie_id' => 379,
                'valeur' => '48',
                'danger' => 1,
            ),
            905 => 
            array (
                'id' => 1740,
                'alerte_id' => 2016,
                'saisie_id' => 379,
                'valeur' => '437',
                'danger' => 1,
            ),
            906 => 
            array (
                'id' => 1741,
                'alerte_id' => 2019,
                'saisie_id' => 379,
                'valeur' => '12',
                'danger' => 1,
            ),
            907 => 
            array (
                'id' => 1742,
                'alerte_id' => 2020,
                'saisie_id' => 379,
                'valeur' => '6',
                'danger' => 1,
            ),
            908 => 
            array (
                'id' => 1743,
                'alerte_id' => 2031,
                'saisie_id' => 371,
                'valeur' => '36',
                'danger' => 1,
            ),
            909 => 
            array (
                'id' => 1744,
                'alerte_id' => 2032,
                'saisie_id' => 371,
                'valeur' => '26',
                'danger' => 1,
            ),
            910 => 
            array (
                'id' => 1745,
                'alerte_id' => 2055,
                'saisie_id' => 371,
                'valeur' => '20',
                'danger' => 1,
            ),
            911 => 
            array (
                'id' => 1746,
                'alerte_id' => 2056,
                'saisie_id' => 371,
                'valeur' => '20',
                'danger' => 1,
            ),
            912 => 
            array (
                'id' => 1747,
                'alerte_id' => 2058,
                'saisie_id' => 371,
                'valeur' => '20',
                'danger' => 1,
            ),
            913 => 
            array (
                'id' => 1748,
                'alerte_id' => 2055,
                'saisie_id' => 382,
                'valeur' => '10',
                'danger' => 1,
            ),
            914 => 
            array (
                'id' => 1749,
                'alerte_id' => 2056,
                'saisie_id' => 382,
                'valeur' => '5',
                'danger' => 1,
            ),
            915 => 
            array (
                'id' => 1750,
                'alerte_id' => 2058,
                'saisie_id' => 382,
                'valeur' => '20',
                'danger' => 1,
            ),
            916 => 
            array (
                'id' => 1763,
                'alerte_id' => 4003,
                'saisie_id' => 387,
                'valeur' => '8',
                'danger' => 1,
            ),
            917 => 
            array (
                'id' => 1764,
                'alerte_id' => 4009,
                'saisie_id' => 387,
                'valeur' => '20',
                'danger' => 1,
            ),
            918 => 
            array (
                'id' => 1765,
                'alerte_id' => 4013,
                'saisie_id' => 387,
                'valeur' => '20',
                'danger' => 1,
            ),
            919 => 
            array (
                'id' => 1766,
                'alerte_id' => 4016,
                'saisie_id' => 387,
                'valeur' => '5',
                'danger' => 1,
            ),
            920 => 
            array (
                'id' => 1767,
                'alerte_id' => 4024,
                'saisie_id' => 387,
                'valeur' => '8',
                'danger' => 1,
            ),
            921 => 
            array (
                'id' => 1768,
                'alerte_id' => 4025,
                'saisie_id' => 387,
                'valeur' => '6',
                'danger' => 1,
            ),
            922 => 
            array (
                'id' => 1769,
                'alerte_id' => 4036,
                'saisie_id' => 387,
                'valeur' => '10',
                'danger' => 1,
            ),
            923 => 
            array (
                'id' => 1770,
                'alerte_id' => 4049,
                'saisie_id' => 387,
                'valeur' => '1',
                'danger' => 1,
            ),
            924 => 
            array (
                'id' => 1771,
                'alerte_id' => 4050,
                'saisie_id' => 387,
                'valeur' => '1',
                'danger' => 1,
            ),
            925 => 
            array (
                'id' => 1772,
                'alerte_id' => 4051,
                'saisie_id' => 387,
                'valeur' => '1',
                'danger' => 1,
            ),
            926 => 
            array (
                'id' => 1773,
                'alerte_id' => 4052,
                'saisie_id' => 387,
                'valeur' => '1',
                'danger' => 1,
            ),
            927 => 
            array (
                'id' => 1774,
                'alerte_id' => 4054,
                'saisie_id' => 387,
                'valeur' => '20',
                'danger' => 1,
            ),
            928 => 
            array (
                'id' => 1797,
                'alerte_id' => 1001,
                'saisie_id' => 388,
                'valeur' => '1',
                'danger' => 1,
            ),
            929 => 
            array (
                'id' => 1798,
                'alerte_id' => 1003,
                'saisie_id' => 388,
                'valeur' => '10',
                'danger' => 1,
            ),
            930 => 
            array (
                'id' => 1799,
                'alerte_id' => 1013,
                'saisie_id' => 388,
                'valeur' => '1',
                'danger' => 1,
            ),
            931 => 
            array (
                'id' => 1800,
                'alerte_id' => 1027,
                'saisie_id' => 388,
                'valeur' => '1',
                'danger' => 1,
            ),
            932 => 
            array (
                'id' => 1801,
                'alerte_id' => 1034,
                'saisie_id' => 388,
                'valeur' => '1',
                'danger' => 1,
            ),
            933 => 
            array (
                'id' => 1802,
                'alerte_id' => 1035,
                'saisie_id' => 388,
                'valeur' => '1',
                'danger' => 1,
            ),
            934 => 
            array (
                'id' => 1803,
                'alerte_id' => 1036,
                'saisie_id' => 388,
                'valeur' => '1',
                'danger' => 1,
            ),
            935 => 
            array (
                'id' => 1804,
                'alerte_id' => 1037,
                'saisie_id' => 388,
                'valeur' => '1',
                'danger' => 1,
            ),
            936 => 
            array (
                'id' => 1805,
                'alerte_id' => 1042,
                'saisie_id' => 388,
                'valeur' => '1',
                'danger' => 1,
            ),
            937 => 
            array (
                'id' => 1806,
                'alerte_id' => 1044,
                'saisie_id' => 388,
                'valeur' => '0.5',
                'danger' => 1,
            ),
            938 => 
            array (
                'id' => 1807,
                'alerte_id' => 1001,
                'saisie_id' => 391,
                'valeur' => '1',
                'danger' => 1,
            ),
            939 => 
            array (
                'id' => 1808,
                'alerte_id' => 1002,
                'saisie_id' => 391,
                'valeur' => '3',
                'danger' => 1,
            ),
            940 => 
            array (
                'id' => 1809,
                'alerte_id' => 1003,
                'saisie_id' => 391,
                'valeur' => '5',
                'danger' => 1,
            ),
            941 => 
            array (
                'id' => 1810,
                'alerte_id' => 1009,
                'saisie_id' => 391,
                'valeur' => '50',
                'danger' => 1,
            ),
            942 => 
            array (
                'id' => 1811,
                'alerte_id' => 1010,
                'saisie_id' => 391,
                'valeur' => '8000',
                'danger' => 1,
            ),
            943 => 
            array (
                'id' => 1812,
                'alerte_id' => 1014,
                'saisie_id' => 391,
                'valeur' => '3',
                'danger' => 1,
            ),
            944 => 
            array (
                'id' => 1813,
                'alerte_id' => 1020,
                'saisie_id' => 391,
                'valeur' => '1',
                'danger' => 1,
            ),
            945 => 
            array (
                'id' => 1814,
                'alerte_id' => 1030,
                'saisie_id' => 391,
                'valeur' => '15',
                'danger' => 1,
            ),
            946 => 
            array (
                'id' => 1815,
                'alerte_id' => 1032,
                'saisie_id' => 391,
                'valeur' => '95',
                'danger' => 1,
            ),
            947 => 
            array (
                'id' => 1816,
                'alerte_id' => 1036,
                'saisie_id' => 391,
                'valeur' => '1',
                'danger' => 1,
            ),
            948 => 
            array (
                'id' => 1817,
                'alerte_id' => 1038,
                'saisie_id' => 391,
                'valeur' => '1',
                'danger' => 1,
            ),
            949 => 
            array (
                'id' => 1818,
                'alerte_id' => 1043,
                'saisie_id' => 391,
                'valeur' => '3',
                'danger' => 1,
            ),
            950 => 
            array (
                'id' => 1819,
                'alerte_id' => 1044,
                'saisie_id' => 391,
                'valeur' => '1',
                'danger' => 1,
            ),
            951 => 
            array (
                'id' => 1820,
                'alerte_id' => 1045,
                'saisie_id' => 391,
                'valeur' => '1',
                'danger' => 1,
            ),
            952 => 
            array (
                'id' => 1821,
                'alerte_id' => 1046,
                'saisie_id' => 391,
                'valeur' => '15',
                'danger' => 1,
            ),
            953 => 
            array (
                'id' => 1822,
                'alerte_id' => 1047,
                'saisie_id' => 391,
                'valeur' => '5',
                'danger' => 1,
            ),
            954 => 
            array (
                'id' => 1823,
                'alerte_id' => 1049,
                'saisie_id' => 391,
                'valeur' => '1',
                'danger' => 1,
            ),
            955 => 
            array (
                'id' => 1824,
                'alerte_id' => 2055,
                'saisie_id' => 392,
                'valeur' => '30',
                'danger' => 1,
            ),
            956 => 
            array (
                'id' => 1825,
                'alerte_id' => 2056,
                'saisie_id' => 392,
                'valeur' => '5',
                'danger' => 1,
            ),
            957 => 
            array (
                'id' => 1826,
                'alerte_id' => 2000,
                'saisie_id' => 394,
                'valeur' => '1',
                'danger' => 1,
            ),
            958 => 
            array (
                'id' => 1827,
                'alerte_id' => 2001,
                'saisie_id' => 394,
                'valeur' => '7',
                'danger' => 1,
            ),
            959 => 
            array (
                'id' => 1828,
                'alerte_id' => 2008,
                'saisie_id' => 394,
                'valeur' => '5',
                'danger' => 1,
            ),
            960 => 
            array (
                'id' => 1829,
                'alerte_id' => 2013,
                'saisie_id' => 394,
                'valeur' => '85',
                'danger' => 1,
            ),
            961 => 
            array (
                'id' => 1830,
                'alerte_id' => 2015,
                'saisie_id' => 394,
                'valeur' => '40',
                'danger' => 1,
            ),
            962 => 
            array (
                'id' => 1831,
                'alerte_id' => 2016,
                'saisie_id' => 394,
                'valeur' => '405',
                'danger' => 1,
            ),
            963 => 
            array (
                'id' => 1832,
                'alerte_id' => 2017,
                'saisie_id' => 394,
                'valeur' => '15',
                'danger' => 1,
            ),
            964 => 
            array (
                'id' => 1833,
                'alerte_id' => 2000,
                'saisie_id' => 395,
                'valeur' => '1',
                'danger' => 1,
            ),
            965 => 
            array (
                'id' => 1834,
                'alerte_id' => 2001,
                'saisie_id' => 395,
                'valeur' => '10',
                'danger' => 1,
            ),
            966 => 
            array (
                'id' => 1835,
                'alerte_id' => 2002,
                'saisie_id' => 395,
                'valeur' => '10',
                'danger' => 1,
            ),
            967 => 
            array (
                'id' => 1836,
                'alerte_id' => 2004,
                'saisie_id' => 395,
                'valeur' => '1',
                'danger' => 1,
            ),
            968 => 
            array (
                'id' => 1837,
                'alerte_id' => 2005,
                'saisie_id' => 395,
                'valeur' => '1',
                'danger' => 1,
            ),
            969 => 
            array (
                'id' => 1838,
                'alerte_id' => 2010,
                'saisie_id' => 395,
                'valeur' => '100',
                'danger' => 1,
            ),
            970 => 
            array (
                'id' => 1839,
                'alerte_id' => 2013,
                'saisie_id' => 395,
                'valeur' => '90',
                'danger' => 1,
            ),
            971 => 
            array (
                'id' => 1840,
                'alerte_id' => 2020,
                'saisie_id' => 395,
                'valeur' => '2',
                'danger' => 1,
            ),
            972 => 
            array (
                'id' => 1841,
                'alerte_id' => 2021,
                'saisie_id' => 395,
                'valeur' => '10',
                'danger' => 1,
            ),
            973 => 
            array (
                'id' => 1842,
                'alerte_id' => 2022,
                'saisie_id' => 395,
                'valeur' => '2',
                'danger' => 1,
            ),
            974 => 
            array (
                'id' => 1843,
                'alerte_id' => 2023,
                'saisie_id' => 395,
                'valeur' => '5',
                'danger' => 1,
            ),
            975 => 
            array (
                'id' => 1844,
                'alerte_id' => 2030,
                'saisie_id' => 395,
                'valeur' => '300000',
                'danger' => 1,
            ),
            976 => 
            array (
                'id' => 1845,
                'alerte_id' => 2040,
                'saisie_id' => 395,
                'valeur' => '10',
                'danger' => 1,
            ),
            977 => 
            array (
                'id' => 1846,
                'alerte_id' => 2042,
                'saisie_id' => 395,
                'valeur' => '750',
                'danger' => 1,
            ),
            978 => 
            array (
                'id' => 1847,
                'alerte_id' => 2044,
                'saisie_id' => 395,
                'valeur' => '10',
                'danger' => 1,
            ),
            979 => 
            array (
                'id' => 1848,
                'alerte_id' => 2053,
                'saisie_id' => 395,
                'valeur' => '2',
                'danger' => 1,
            ),
            980 => 
            array (
                'id' => 1850,
                'alerte_id' => 2055,
                'saisie_id' => 395,
                'valeur' => '10',
                'danger' => 1,
            ),
            981 => 
            array (
                'id' => 1851,
                'alerte_id' => 1048,
                'saisie_id' => 397,
                'valeur' => '20',
                'danger' => 1,
            ),
            982 => 
            array (
                'id' => 1852,
                'alerte_id' => 1049,
                'saisie_id' => 397,
                'valeur' => '1',
                'danger' => 1,
            ),
            983 => 
            array (
                'id' => 1855,
                'alerte_id' => 2021,
                'saisie_id' => 396,
                'valeur' => '30',
                'danger' => 1,
            ),
            984 => 
            array (
                'id' => 1856,
                'alerte_id' => 2035,
                'saisie_id' => 398,
                'valeur' => '10',
                'danger' => 1,
            ),
            985 => 
            array (
                'id' => 1857,
                'alerte_id' => 2036,
                'saisie_id' => 398,
                'valeur' => '10',
                'danger' => 1,
            ),
            986 => 
            array (
                'id' => 1858,
                'alerte_id' => 2037,
                'saisie_id' => 398,
                'valeur' => '20',
                'danger' => 1,
            ),
            987 => 
            array (
                'id' => 1859,
                'alerte_id' => 2039,
                'saisie_id' => 398,
                'valeur' => '40',
                'danger' => 1,
            ),
            988 => 
            array (
                'id' => 1860,
                'alerte_id' => 2040,
                'saisie_id' => 398,
                'valeur' => '40',
                'danger' => 1,
            ),
            989 => 
            array (
                'id' => 1861,
                'alerte_id' => 4022,
                'saisie_id' => 400,
                'valeur' => '20',
                'danger' => 1,
            ),
            990 => 
            array (
                'id' => 1862,
                'alerte_id' => 4024,
                'saisie_id' => 400,
                'valeur' => '10',
                'danger' => 1,
            ),
            991 => 
            array (
                'id' => 1863,
                'alerte_id' => 4025,
                'saisie_id' => 400,
                'valeur' => '10',
                'danger' => 1,
            ),
            992 => 
            array (
                'id' => 1864,
                'alerte_id' => 4026,
                'saisie_id' => 400,
                'valeur' => '5',
                'danger' => 1,
            ),
            993 => 
            array (
                'id' => 1865,
                'alerte_id' => 4028,
                'saisie_id' => 400,
                'valeur' => '10',
                'danger' => 1,
            ),
            994 => 
            array (
                'id' => 1866,
                'alerte_id' => 4029,
                'saisie_id' => 400,
                'valeur' => '10',
                'danger' => 1,
            ),
            995 => 
            array (
                'id' => 1867,
                'alerte_id' => 4030,
                'saisie_id' => 400,
                'valeur' => '15',
                'danger' => 1,
            ),
            996 => 
            array (
                'id' => 1868,
                'alerte_id' => 4031,
                'saisie_id' => 400,
                'valeur' => '5',
                'danger' => 1,
            ),
            997 => 
            array (
                'id' => 1869,
                'alerte_id' => 4032,
                'saisie_id' => 400,
                'valeur' => '25',
                'danger' => 1,
            ),
            998 => 
            array (
                'id' => 1870,
                'alerte_id' => 4033,
                'saisie_id' => 400,
                'valeur' => '30',
                'danger' => 1,
            ),
            999 => 
            array (
                'id' => 1871,
                'alerte_id' => 4035,
                'saisie_id' => 400,
                'valeur' => '30',
                'danger' => 1,
            ),
            1000 => 
            array (
                'id' => 1872,
                'alerte_id' => 4036,
                'saisie_id' => 400,
                'valeur' => '30',
                'danger' => 1,
            ),
            1001 => 
            array (
                'id' => 1873,
                'alerte_id' => 4037,
                'saisie_id' => 400,
                'valeur' => '15',
                'danger' => 1,
            ),
            1002 => 
            array (
                'id' => 1874,
                'alerte_id' => 4038,
                'saisie_id' => 400,
                'valeur' => '25',
                'danger' => 1,
            ),
            1003 => 
            array (
                'id' => 1875,
                'alerte_id' => 4039,
                'saisie_id' => 400,
                'valeur' => '4',
                'danger' => 1,
            ),
            1004 => 
            array (
                'id' => 1876,
                'alerte_id' => 4040,
                'saisie_id' => 400,
                'valeur' => '9',
                'danger' => 1,
            ),
            1005 => 
            array (
                'id' => 1877,
                'alerte_id' => 4041,
                'saisie_id' => 400,
                'valeur' => '10',
                'danger' => 1,
            ),
            1006 => 
            array (
                'id' => 1878,
                'alerte_id' => 4043,
                'saisie_id' => 400,
                'valeur' => '5',
                'danger' => 1,
            ),
            1007 => 
            array (
                'id' => 1879,
                'alerte_id' => 4044,
                'saisie_id' => 400,
                'valeur' => '3',
                'danger' => 1,
            ),
            1008 => 
            array (
                'id' => 1900,
                'alerte_id' => 2013,
                'saisie_id' => 401,
                'valeur' => '90',
                'danger' => 1,
            ),
            1009 => 
            array (
                'id' => 1901,
                'alerte_id' => 2014,
                'saisie_id' => 401,
                'valeur' => '28',
                'danger' => 1,
            ),
            1010 => 
            array (
                'id' => 1902,
                'alerte_id' => 2015,
                'saisie_id' => 401,
                'valeur' => '52',
                'danger' => 1,
            ),
            1011 => 
            array (
                'id' => 1903,
                'alerte_id' => 2016,
                'saisie_id' => 401,
                'valeur' => '415',
                'danger' => 1,
            ),
            1012 => 
            array (
                'id' => 1904,
                'alerte_id' => 2021,
                'saisie_id' => 401,
                'valeur' => '3',
                'danger' => 1,
            ),
            1013 => 
            array (
                'id' => 1905,
                'alerte_id' => 2023,
                'saisie_id' => 401,
                'valeur' => '4',
                'danger' => 1,
            ),
            1014 => 
            array (
                'id' => 1906,
                'alerte_id' => 2025,
                'saisie_id' => 401,
                'valeur' => '4',
                'danger' => 1,
            ),
            1015 => 
            array (
                'id' => 1907,
                'alerte_id' => 2039,
                'saisie_id' => 401,
                'valeur' => '50',
                'danger' => 1,
            ),
            1016 => 
            array (
                'id' => 1911,
                'alerte_id' => 2035,
                'saisie_id' => 402,
                'valeur' => '14',
                'danger' => 1,
            ),
            1017 => 
            array (
                'id' => 1912,
                'alerte_id' => 2037,
                'saisie_id' => 402,
                'valeur' => '10',
                'danger' => 1,
            ),
            1018 => 
            array (
                'id' => 1913,
                'alerte_id' => 2039,
                'saisie_id' => 402,
                'valeur' => '15',
                'danger' => 1,
            ),
            1019 => 
            array (
                'id' => 1918,
                'alerte_id' => 5001,
                'saisie_id' => 309,
                'valeur' => '1',
                'danger' => 1,
            ),
            1020 => 
            array (
                'id' => 1920,
                'alerte_id' => 5026,
                'saisie_id' => 309,
                'valeur' => '8',
                'danger' => 1,
            ),
            1021 => 
            array (
                'id' => 1921,
                'alerte_id' => 5055,
                'saisie_id' => 309,
                'valeur' => '2',
                'danger' => 1,
            ),
            1022 => 
            array (
                'id' => 1922,
                'alerte_id' => 5019,
                'saisie_id' => 309,
                'valeur' => '6',
                'danger' => 1,
            ),
            1023 => 
            array (
                'id' => 1924,
                'alerte_id' => 5059,
                'saisie_id' => 309,
                'valeur' => '10',
                'danger' => 1,
            ),
            1024 => 
            array (
                'id' => 1925,
                'alerte_id' => 5061,
                'saisie_id' => 309,
                'valeur' => '10',
                'danger' => 1,
            ),
            1025 => 
            array (
                'id' => 1958,
                'alerte_id' => 2021,
                'saisie_id' => 412,
                'valeur' => '3',
                'danger' => 1,
            ),
            1026 => 
            array (
                'id' => 1961,
                'alerte_id' => 2056,
                'saisie_id' => 412,
                'valeur' => '4',
                'danger' => 1,
            ),
            1027 => 
            array (
                'id' => 1966,
                'alerte_id' => 2037,
                'saisie_id' => 412,
                'valeur' => '13',
                'danger' => 1,
            ),
            1028 => 
            array (
                'id' => 1967,
                'alerte_id' => 2040,
                'saisie_id' => 412,
                'valeur' => '17',
                'danger' => 1,
            ),
            1029 => 
            array (
                'id' => 1980,
                'alerte_id' => 1001,
                'saisie_id' => 415,
                'valeur' => '1',
                'danger' => 1,
            ),
            1030 => 
            array (
                'id' => 1981,
                'alerte_id' => 1003,
                'saisie_id' => 415,
                'valeur' => '20',
                'danger' => 1,
            ),
            1031 => 
            array (
                'id' => 1982,
                'alerte_id' => 1006,
                'saisie_id' => 415,
                'valeur' => '5',
                'danger' => 1,
            ),
            1032 => 
            array (
                'id' => 1983,
                'alerte_id' => 1009,
                'saisie_id' => 415,
                'valeur' => '20',
                'danger' => 1,
            ),
            1033 => 
            array (
                'id' => 1984,
                'alerte_id' => 1013,
                'saisie_id' => 415,
                'valeur' => '1',
                'danger' => 1,
            ),
            1034 => 
            array (
                'id' => 1985,
                'alerte_id' => 1014,
                'saisie_id' => 415,
                'valeur' => '3',
                'danger' => 1,
            ),
            1035 => 
            array (
                'id' => 1986,
                'alerte_id' => 1015,
                'saisie_id' => 415,
                'valeur' => '425',
                'danger' => 1,
            ),
            1036 => 
            array (
                'id' => 1987,
                'alerte_id' => 1016,
                'saisie_id' => 415,
                'valeur' => '50',
                'danger' => 1,
            ),
            1037 => 
            array (
                'id' => 1988,
                'alerte_id' => 1017,
                'saisie_id' => 415,
                'valeur' => '20',
                'danger' => 1,
            ),
            1038 => 
            array (
                'id' => 1989,
                'alerte_id' => 1024,
                'saisie_id' => 415,
                'valeur' => '8',
                'danger' => 1,
            ),
            1039 => 
            array (
                'id' => 1990,
                'alerte_id' => 1025,
                'saisie_id' => 415,
                'valeur' => '4',
                'danger' => 1,
            ),
            1040 => 
            array (
                'id' => 1991,
                'alerte_id' => 1028,
                'saisie_id' => 415,
                'valeur' => '15',
                'danger' => 1,
            ),
            1041 => 
            array (
                'id' => 1992,
                'alerte_id' => 1029,
                'saisie_id' => 415,
                'valeur' => '50',
                'danger' => 1,
            ),
            1042 => 
            array (
                'id' => 1993,
                'alerte_id' => 1030,
                'saisie_id' => 415,
                'valeur' => '50',
                'danger' => 1,
            ),
            1043 => 
            array (
                'id' => 1994,
                'alerte_id' => 1032,
                'saisie_id' => 415,
                'valeur' => '10',
                'danger' => 1,
            ),
            1044 => 
            array (
                'id' => 1995,
                'alerte_id' => 1035,
                'saisie_id' => 415,
                'valeur' => '1',
                'danger' => 1,
            ),
            1045 => 
            array (
                'id' => 1996,
                'alerte_id' => 1037,
                'saisie_id' => 415,
                'valeur' => '1',
                'danger' => 1,
            ),
            1046 => 
            array (
                'id' => 1997,
                'alerte_id' => 1044,
                'saisie_id' => 415,
                'valeur' => '1',
                'danger' => 1,
            ),
            1047 => 
            array (
                'id' => 1998,
                'alerte_id' => 1045,
                'saisie_id' => 415,
                'valeur' => '1',
                'danger' => 1,
            ),
            1048 => 
            array (
                'id' => 1999,
                'alerte_id' => 1046,
                'saisie_id' => 415,
                'valeur' => '30',
                'danger' => 1,
            ),
            1049 => 
            array (
                'id' => 2000,
                'alerte_id' => 1047,
                'saisie_id' => 415,
                'valeur' => '10',
                'danger' => 1,
            ),
            1050 => 
            array (
                'id' => 2001,
                'alerte_id' => 1048,
                'saisie_id' => 415,
                'valeur' => '10',
                'danger' => 1,
            ),
            1051 => 
            array (
                'id' => 2002,
                'alerte_id' => 4009,
                'saisie_id' => 414,
                'valeur' => '20',
                'danger' => 1,
            ),
            1052 => 
            array (
                'id' => 2003,
                'alerte_id' => 4010,
                'saisie_id' => 414,
                'valeur' => '1',
                'danger' => 1,
            ),
            1053 => 
            array (
                'id' => 2004,
                'alerte_id' => 4011,
                'saisie_id' => 414,
                'valeur' => '40',
                'danger' => 1,
            ),
            1054 => 
            array (
                'id' => 2005,
                'alerte_id' => 4030,
                'saisie_id' => 414,
                'valeur' => '5',
                'danger' => 1,
            ),
            1055 => 
            array (
                'id' => 2006,
                'alerte_id' => 4048,
                'saisie_id' => 414,
                'valeur' => '1',
                'danger' => 1,
            ),
            1056 => 
            array (
                'id' => 2007,
                'alerte_id' => 4049,
                'saisie_id' => 414,
                'valeur' => '1',
                'danger' => 1,
            ),
            1057 => 
            array (
                'id' => 2008,
                'alerte_id' => 4050,
                'saisie_id' => 414,
                'valeur' => '1',
                'danger' => 1,
            ),
            1058 => 
            array (
                'id' => 2009,
                'alerte_id' => 4051,
                'saisie_id' => 414,
                'valeur' => '1',
                'danger' => 1,
            ),
            1059 => 
            array (
                'id' => 2010,
                'alerte_id' => 4052,
                'saisie_id' => 414,
                'valeur' => '1',
                'danger' => 1,
            ),
            1060 => 
            array (
                'id' => 2011,
                'alerte_id' => 4053,
                'saisie_id' => 414,
                'valeur' => '1',
                'danger' => 1,
            ),
            1061 => 
            array (
                'id' => 2012,
                'alerte_id' => 4020,
                'saisie_id' => 414,
                'valeur' => '10',
                'danger' => 1,
            ),
            1062 => 
            array (
                'id' => 2013,
                'alerte_id' => 4021,
                'saisie_id' => 414,
                'valeur' => '10',
                'danger' => 1,
            ),
            1063 => 
            array (
                'id' => 2014,
                'alerte_id' => 4054,
                'saisie_id' => 414,
                'valeur' => '6',
                'danger' => 1,
            ),
            1064 => 
            array (
                'id' => 2015,
                'alerte_id' => 4057,
                'saisie_id' => 414,
                'valeur' => '3',
                'danger' => 1,
            ),
            1065 => 
            array (
                'id' => 2016,
                'alerte_id' => 4004,
                'saisie_id' => 414,
                'valeur' => '5',
                'danger' => 1,
            ),
            1066 => 
            array (
                'id' => 2017,
                'alerte_id' => 4007,
                'saisie_id' => 414,
                'valeur' => '3',
                'danger' => 1,
            ),
            1067 => 
            array (
                'id' => 2022,
                'alerte_id' => 2035,
                'saisie_id' => 416,
                'valeur' => '60',
                'danger' => 1,
            ),
            1068 => 
            array (
                'id' => 2023,
                'alerte_id' => 2036,
                'saisie_id' => 416,
                'valeur' => '50',
                'danger' => 1,
            ),
            1069 => 
            array (
                'id' => 2024,
                'alerte_id' => 2037,
                'saisie_id' => 416,
                'valeur' => '20',
                'danger' => 1,
            ),
            1070 => 
            array (
                'id' => 2025,
                'alerte_id' => 2039,
                'saisie_id' => 416,
                'valeur' => '60',
                'danger' => 1,
            ),
            1071 => 
            array (
                'id' => 2026,
                'alerte_id' => 1002,
                'saisie_id' => 418,
                'valeur' => '3',
                'danger' => 1,
            ),
            1072 => 
            array (
                'id' => 2027,
                'alerte_id' => 1002,
                'saisie_id' => 418,
                'valeur' => '3',
                'danger' => 1,
            ),
            1073 => 
            array (
                'id' => 2028,
                'alerte_id' => 1003,
                'saisie_id' => 418,
                'valeur' => '20',
                'danger' => 1,
            ),
            1074 => 
            array (
                'id' => 2029,
                'alerte_id' => 1003,
                'saisie_id' => 418,
                'valeur' => '20',
                'danger' => 1,
            ),
            1075 => 
            array (
                'id' => 2030,
                'alerte_id' => 1010,
                'saisie_id' => 418,
                'valeur' => '2600',
                'danger' => 1,
            ),
            1076 => 
            array (
                'id' => 2031,
                'alerte_id' => 1010,
                'saisie_id' => 418,
                'valeur' => '2600',
                'danger' => 1,
            ),
            1077 => 
            array (
                'id' => 2032,
                'alerte_id' => 1011,
                'saisie_id' => 418,
                'valeur' => '1',
                'danger' => 1,
            ),
            1078 => 
            array (
                'id' => 2033,
                'alerte_id' => 1011,
                'saisie_id' => 418,
                'valeur' => '1',
                'danger' => 1,
            ),
            1079 => 
            array (
                'id' => 2034,
                'alerte_id' => 1015,
                'saisie_id' => 418,
                'valeur' => '400',
                'danger' => 1,
            ),
            1080 => 
            array (
                'id' => 2044,
                'alerte_id' => 2009,
                'saisie_id' => 410,
                'valeur' => '2',
                'danger' => 1,
            ),
            1081 => 
            array (
                'id' => 2045,
                'alerte_id' => 2020,
                'saisie_id' => 410,
                'valeur' => '2',
                'danger' => 1,
            ),
            1082 => 
            array (
                'id' => 2046,
                'alerte_id' => 2021,
                'saisie_id' => 410,
                'valeur' => '3',
                'danger' => 1,
            ),
            1083 => 
            array (
                'id' => 2049,
                'alerte_id' => 2037,
                'saisie_id' => 410,
                'valeur' => '13',
                'danger' => 1,
            ),
            1084 => 
            array (
                'id' => 2050,
                'alerte_id' => 2040,
                'saisie_id' => 410,
                'valeur' => '17',
                'danger' => 1,
            ),
            1085 => 
            array (
                'id' => 2051,
                'alerte_id' => 2056,
                'saisie_id' => 410,
                'valeur' => '4',
                'danger' => 1,
            ),
            1086 => 
            array (
                'id' => 2075,
                'alerte_id' => 4000,
                'saisie_id' => 420,
                'valeur' => '1',
                'danger' => 1,
            ),
            1087 => 
            array (
                'id' => 2076,
                'alerte_id' => 4015,
                'saisie_id' => 420,
                'valeur' => '5',
                'danger' => 1,
            ),
            1088 => 
            array (
                'id' => 2077,
                'alerte_id' => 4016,
                'saisie_id' => 420,
                'valeur' => '8',
                'danger' => 1,
            ),
            1089 => 
            array (
                'id' => 2078,
                'alerte_id' => 4021,
                'saisie_id' => 420,
                'valeur' => '10',
                'danger' => 1,
            ),
            1090 => 
            array (
                'id' => 2079,
                'alerte_id' => 4024,
                'saisie_id' => 420,
                'valeur' => '9',
                'danger' => 1,
            ),
            1091 => 
            array (
                'id' => 2080,
                'alerte_id' => 4028,
                'saisie_id' => 420,
                'valeur' => '3',
                'danger' => 1,
            ),
            1092 => 
            array (
                'id' => 2081,
                'alerte_id' => 4038,
                'saisie_id' => 420,
                'valeur' => '8',
                'danger' => 1,
            ),
            1093 => 
            array (
                'id' => 2082,
                'alerte_id' => 4040,
                'saisie_id' => 420,
                'valeur' => '5',
                'danger' => 1,
            ),
            1094 => 
            array (
                'id' => 2083,
                'alerte_id' => 4053,
                'saisie_id' => 420,
                'valeur' => '1',
                'danger' => 1,
            ),
            1095 => 
            array (
                'id' => 2084,
                'alerte_id' => 4054,
                'saisie_id' => 420,
                'valeur' => '10',
                'danger' => 1,
            ),
            1096 => 
            array (
                'id' => 2120,
                'alerte_id' => 3047,
                'saisie_id' => 424,
                'valeur' => '1',
                'danger' => 1,
            ),
            1097 => 
            array (
                'id' => 2121,
                'alerte_id' => 3000,
                'saisie_id' => 424,
                'valeur' => '1',
                'danger' => 1,
            ),
            1098 => 
            array (
                'id' => 2122,
                'alerte_id' => 3003,
                'saisie_id' => 424,
                'valeur' => '8',
                'danger' => 1,
            ),
            1099 => 
            array (
                'id' => 2123,
                'alerte_id' => 3006,
                'saisie_id' => 424,
                'valeur' => '1',
                'danger' => 1,
            ),
            1100 => 
            array (
                'id' => 2124,
                'alerte_id' => 3029,
                'saisie_id' => 424,
                'valeur' => '14',
                'danger' => 1,
            ),
            1101 => 
            array (
                'id' => 2125,
                'alerte_id' => 3033,
                'saisie_id' => 424,
                'valeur' => '70',
                'danger' => 1,
            ),
            1102 => 
            array (
                'id' => 2126,
                'alerte_id' => 3037,
                'saisie_id' => 424,
                'valeur' => '1',
                'danger' => 1,
            ),
            1103 => 
            array (
                'id' => 2127,
                'alerte_id' => 3019,
                'saisie_id' => 424,
                'valeur' => '4000000',
                'danger' => 1,
            ),
            1104 => 
            array (
                'id' => 2128,
                'alerte_id' => 3023,
                'saisie_id' => 424,
                'valeur' => '55',
                'danger' => 1,
            ),
            1105 => 
            array (
                'id' => 2130,
                'alerte_id' => 3000,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1106 => 
            array (
                'id' => 2131,
                'alerte_id' => 3011,
                'saisie_id' => 431,
                'valeur' => '5',
                'danger' => 1,
            ),
            1107 => 
            array (
                'id' => 2132,
                'alerte_id' => 3015,
                'saisie_id' => 431,
                'valeur' => '2',
                'danger' => 1,
            ),
            1108 => 
            array (
                'id' => 2133,
                'alerte_id' => 3032,
                'saisie_id' => 431,
                'valeur' => '5',
                'danger' => 1,
            ),
            1109 => 
            array (
                'id' => 2134,
                'alerte_id' => 3037,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1110 => 
            array (
                'id' => 2143,
                'alerte_id' => 3039,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1111 => 
            array (
                'id' => 2144,
                'alerte_id' => 3040,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1112 => 
            array (
                'id' => 2145,
                'alerte_id' => 3041,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1113 => 
            array (
                'id' => 2146,
                'alerte_id' => 3042,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1114 => 
            array (
                'id' => 2147,
                'alerte_id' => 3044,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1115 => 
            array (
                'id' => 2148,
                'alerte_id' => 3045,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1116 => 
            array (
                'id' => 2149,
                'alerte_id' => 3046,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1117 => 
            array (
                'id' => 2150,
                'alerte_id' => 3050,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1118 => 
            array (
                'id' => 2151,
                'alerte_id' => 3051,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1119 => 
            array (
                'id' => 2153,
                'alerte_id' => 3049,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1120 => 
            array (
                'id' => 2154,
                'alerte_id' => 3047,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1121 => 
            array (
                'id' => 2155,
                'alerte_id' => 3048,
                'saisie_id' => 431,
                'valeur' => '1',
                'danger' => 1,
            ),
            1122 => 
            array (
                'id' => 2168,
                'alerte_id' => 3000,
                'saisie_id' => 432,
                'valeur' => '1',
                'danger' => 1,
            ),
            1123 => 
            array (
                'id' => 2169,
                'alerte_id' => 3002,
                'saisie_id' => 432,
                'valeur' => '45',
                'danger' => 1,
            ),
            1124 => 
            array (
                'id' => 2170,
                'alerte_id' => 3003,
                'saisie_id' => 432,
                'valeur' => '15',
                'danger' => 1,
            ),
            1125 => 
            array (
                'id' => 2171,
                'alerte_id' => 3005,
                'saisie_id' => 432,
                'valeur' => '30',
                'danger' => 1,
            ),
            1126 => 
            array (
                'id' => 2172,
                'alerte_id' => 3007,
                'saisie_id' => 432,
                'valeur' => '20',
                'danger' => 1,
            ),
            1127 => 
            array (
                'id' => 2173,
                'alerte_id' => 3008,
                'saisie_id' => 432,
                'valeur' => '10',
                'danger' => 1,
            ),
            1128 => 
            array (
                'id' => 2174,
                'alerte_id' => 3011,
                'saisie_id' => 432,
                'valeur' => '4',
                'danger' => 1,
            ),
            1129 => 
            array (
                'id' => 2175,
                'alerte_id' => 3012,
                'saisie_id' => 432,
                'valeur' => '25',
                'danger' => 1,
            ),
            1130 => 
            array (
                'id' => 2176,
                'alerte_id' => 3014,
                'saisie_id' => 432,
                'valeur' => '10',
                'danger' => 1,
            ),
            1131 => 
            array (
                'id' => 2177,
                'alerte_id' => 3015,
                'saisie_id' => 432,
                'valeur' => '5',
                'danger' => 1,
            ),
            1132 => 
            array (
                'id' => 2178,
                'alerte_id' => 3023,
                'saisie_id' => 432,
                'valeur' => '56',
                'danger' => 1,
            ),
            1133 => 
            array (
                'id' => 2179,
                'alerte_id' => 3024,
                'saisie_id' => 432,
                'valeur' => '40',
                'danger' => 1,
            ),
            1134 => 
            array (
                'id' => 2180,
                'alerte_id' => 3026,
                'saisie_id' => 432,
                'valeur' => '35',
                'danger' => 1,
            ),
            1135 => 
            array (
                'id' => 2181,
                'alerte_id' => 3027,
                'saisie_id' => 432,
                'valeur' => '15',
                'danger' => 1,
            ),
            1136 => 
            array (
                'id' => 2182,
                'alerte_id' => 3028,
                'saisie_id' => 432,
                'valeur' => '25',
                'danger' => 1,
            ),
            1137 => 
            array (
                'id' => 2183,
                'alerte_id' => 3029,
                'saisie_id' => 432,
                'valeur' => '25',
                'danger' => 1,
            ),
            1138 => 
            array (
                'id' => 2184,
                'alerte_id' => 3030,
                'saisie_id' => 432,
                'valeur' => '25',
                'danger' => 1,
            ),
            1139 => 
            array (
                'id' => 2185,
                'alerte_id' => 3032,
                'saisie_id' => 432,
                'valeur' => '5',
                'danger' => 1,
            ),
            1140 => 
            array (
                'id' => 2186,
                'alerte_id' => 3033,
                'saisie_id' => 432,
                'valeur' => '45',
                'danger' => 1,
            ),
            1141 => 
            array (
                'id' => 2187,
                'alerte_id' => 3034,
                'saisie_id' => 432,
                'valeur' => '1',
                'danger' => 1,
            ),
            1142 => 
            array (
                'id' => 2188,
                'alerte_id' => 3035,
                'saisie_id' => 432,
                'valeur' => '1',
                'danger' => 1,
            ),
            1143 => 
            array (
                'id' => 2189,
                'alerte_id' => 3037,
                'saisie_id' => 432,
                'valeur' => '1',
                'danger' => 1,
            ),
            1144 => 
            array (
                'id' => 2190,
                'alerte_id' => 3048,
                'saisie_id' => 432,
                'valeur' => '1',
                'danger' => 1,
            ),
            1145 => 
            array (
                'id' => 2191,
                'alerte_id' => 3049,
                'saisie_id' => 432,
                'valeur' => '1',
                'danger' => 1,
            ),
            1146 => 
            array (
                'id' => 2193,
                'alerte_id' => 2013,
                'saisie_id' => 434,
                'valeur' => '180',
                'danger' => 1,
            ),
            1147 => 
            array (
                'id' => 2194,
                'alerte_id' => 2014,
                'saisie_id' => 434,
                'valeur' => '25',
                'danger' => 1,
            ),
            1148 => 
            array (
                'id' => 2195,
                'alerte_id' => 2016,
                'saisie_id' => 434,
                'valeur' => '420',
                'danger' => 1,
            ),
            1149 => 
            array (
                'id' => 2196,
                'alerte_id' => 2050,
                'saisie_id' => 434,
                'valeur' => '1',
                'danger' => 1,
            ),
            1150 => 
            array (
                'id' => 2197,
                'alerte_id' => 2052,
                'saisie_id' => 434,
                'valeur' => '1',
                'danger' => 1,
            ),
            1151 => 
            array (
                'id' => 2198,
                'alerte_id' => 2053,
                'saisie_id' => 434,
                'valeur' => '1',
                'danger' => 1,
            ),
            1152 => 
            array (
                'id' => 2199,
                'alerte_id' => 2055,
                'saisie_id' => 434,
                'valeur' => '25',
                'danger' => 1,
            ),
            1153 => 
            array (
                'id' => 2200,
                'alerte_id' => 2056,
                'saisie_id' => 434,
                'valeur' => '5',
                'danger' => 1,
            ),
            1154 => 
            array (
                'id' => 2201,
                'alerte_id' => 2009,
                'saisie_id' => 434,
                'valeur' => '1',
                'danger' => 1,
            ),
            1155 => 
            array (
                'id' => 2202,
                'alerte_id' => 2009,
                'saisie_id' => 435,
                'valeur' => '1',
                'danger' => 1,
            ),
            1156 => 
            array (
                'id' => 2203,
                'alerte_id' => 2013,
                'saisie_id' => 435,
                'valeur' => '100',
                'danger' => 1,
            ),
            1157 => 
            array (
                'id' => 2204,
                'alerte_id' => 2055,
                'saisie_id' => 435,
                'valeur' => '10',
                'danger' => 1,
            ),
            1158 => 
            array (
                'id' => 2212,
                'alerte_id' => 2038,
                'saisie_id' => 436,
                'valeur' => '10',
                'danger' => 1,
            ),
            1159 => 
            array (
                'id' => 2213,
                'alerte_id' => 2044,
                'saisie_id' => 436,
                'valeur' => '1',
                'danger' => 1,
            ),
            1160 => 
            array (
                'id' => 2214,
                'alerte_id' => 2049,
                'saisie_id' => 436,
                'valeur' => '1',
                'danger' => 1,
            ),
            1161 => 
            array (
                'id' => 2215,
                'alerte_id' => 2053,
                'saisie_id' => 436,
                'valeur' => '5',
                'danger' => 1,
            ),
            1162 => 
            array (
                'id' => 2216,
                'alerte_id' => 2030,
                'saisie_id' => 436,
                'valeur' => '375000',
                'danger' => 1,
            ),
            1163 => 
            array (
                'id' => 2217,
                'alerte_id' => 2034,
                'saisie_id' => 436,
                'valeur' => '8',
                'danger' => 1,
            ),
            1164 => 
            array (
                'id' => 2218,
                'alerte_id' => 2061,
                'saisie_id' => 436,
                'valeur' => '2',
                'danger' => 1,
            ),
            1165 => 
            array (
                'id' => 2219,
                'alerte_id' => 2055,
                'saisie_id' => 436,
                'valeur' => '6',
                'danger' => 1,
            ),
            1166 => 
            array (
                'id' => 2221,
                'alerte_id' => 2000,
                'saisie_id' => 436,
                'valeur' => '1',
                'danger' => 1,
            ),
            1167 => 
            array (
                'id' => 2222,
                'alerte_id' => 2002,
                'saisie_id' => 436,
                'valeur' => '3',
                'danger' => 1,
            ),
            1168 => 
            array (
                'id' => 2223,
                'alerte_id' => 2005,
                'saisie_id' => 436,
                'valeur' => '1',
                'danger' => 1,
            ),
            1169 => 
            array (
                'id' => 2224,
                'alerte_id' => 2021,
                'saisie_id' => 436,
                'valeur' => '3',
                'danger' => 1,
            ),
            1170 => 
            array (
                'id' => 2225,
                'alerte_id' => 2011,
                'saisie_id' => 436,
                'valeur' => '1',
                'danger' => 1,
            ),
            1171 => 
            array (
                'id' => 2226,
                'alerte_id' => 2013,
                'saisie_id' => 436,
                'valeur' => '100',
                'danger' => 1,
            ),
            1172 => 
            array (
                'id' => 2229,
                'alerte_id' => 2017,
                'saisie_id' => 412,
                'valeur' => '16',
                'danger' => 1,
            ),
            1173 => 
            array (
                'id' => 2230,
                'alerte_id' => 2019,
                'saisie_id' => 412,
                'valeur' => '16',
                'danger' => 1,
            ),
            1174 => 
            array (
                'id' => 2231,
                'alerte_id' => 2020,
                'saisie_id' => 412,
                'valeur' => '3',
                'danger' => 1,
            ),
            1175 => 
            array (
                'id' => 2232,
                'alerte_id' => 2006,
                'saisie_id' => 412,
                'valeur' => '16',
                'danger' => 1,
            ),
            1176 => 
            array (
                'id' => 2233,
                'alerte_id' => 2007,
                'saisie_id' => 412,
                'valeur' => '26',
                'danger' => 1,
            ),
            1177 => 
            array (
                'id' => 2234,
                'alerte_id' => 2008,
                'saisie_id' => 412,
                'valeur' => '3',
                'danger' => 1,
            ),
            1178 => 
            array (
                'id' => 2235,
                'alerte_id' => 2009,
                'saisie_id' => 412,
                'valeur' => '2',
                'danger' => 1,
            ),
            1179 => 
            array (
                'id' => 2236,
                'alerte_id' => 2010,
                'saisie_id' => 412,
                'valeur' => '91',
                'danger' => 1,
            ),
            1180 => 
            array (
                'id' => 2237,
                'alerte_id' => 2034,
                'saisie_id' => 412,
                'valeur' => '35',
                'danger' => 1,
            ),
            1181 => 
            array (
                'id' => 2238,
                'alerte_id' => 2060,
                'saisie_id' => 412,
                'valeur' => '21',
                'danger' => 1,
            ),
            1182 => 
            array (
                'id' => 2239,
                'alerte_id' => 2055,
                'saisie_id' => 441,
                'valeur' => '40',
                'danger' => 1,
            ),
            1183 => 
            array (
                'id' => 2240,
                'alerte_id' => 2056,
                'saisie_id' => 441,
                'valeur' => '8',
                'danger' => 1,
            ),
            1184 => 
            array (
                'id' => 2241,
                'alerte_id' => 2057,
                'saisie_id' => 441,
                'valeur' => '58',
                'danger' => 1,
            ),
            1185 => 
            array (
                'id' => 2242,
                'alerte_id' => 2058,
                'saisie_id' => 441,
                'valeur' => '25',
                'danger' => 1,
            ),
            1186 => 
            array (
                'id' => 2243,
                'alerte_id' => 4003,
                'saisie_id' => 361,
                'valeur' => '8',
                'danger' => 1,
            ),
            1187 => 
            array (
                'id' => 2244,
                'alerte_id' => 4004,
                'saisie_id' => 361,
                'valeur' => '10',
                'danger' => 1,
            ),
            1188 => 
            array (
                'id' => 2245,
                'alerte_id' => 4005,
                'saisie_id' => 361,
                'valeur' => '20',
                'danger' => 1,
            ),
            1189 => 
            array (
                'id' => 2246,
                'alerte_id' => 4007,
                'saisie_id' => 361,
                'valeur' => '2',
                'danger' => 1,
            ),
            1190 => 
            array (
                'id' => 2247,
                'alerte_id' => 2021,
                'saisie_id' => 445,
                'valeur' => '3',
                'danger' => 1,
            ),
            1191 => 
            array (
                'id' => 2248,
                'alerte_id' => 2023,
                'saisie_id' => 445,
                'valeur' => '5',
                'danger' => 1,
            ),
            1192 => 
            array (
                'id' => 2249,
                'alerte_id' => 2037,
                'saisie_id' => 445,
                'valeur' => '10',
                'danger' => 1,
            ),
            1193 => 
            array (
                'id' => 2250,
                'alerte_id' => 2039,
                'saisie_id' => 445,
                'valeur' => '30',
                'danger' => 1,
            ),
            1194 => 
            array (
                'id' => 2251,
                'alerte_id' => 2040,
                'saisie_id' => 445,
                'valeur' => '10',
                'danger' => 1,
            ),
            1195 => 
            array (
                'id' => 2252,
                'alerte_id' => 2055,
                'saisie_id' => 445,
                'valeur' => '10',
                'danger' => 1,
            ),
            1196 => 
            array (
                'id' => 2253,
                'alerte_id' => 2056,
                'saisie_id' => 445,
                'valeur' => '5',
                'danger' => 1,
            ),
            1197 => 
            array (
                'id' => 2254,
                'alerte_id' => 2061,
                'saisie_id' => 445,
                'valeur' => '5',
                'danger' => 1,
            ),
            1198 => 
            array (
                'id' => 2255,
                'alerte_id' => 2010,
                'saisie_id' => 439,
                'valeur' => '147',
                'danger' => 1,
            ),
            1199 => 
            array (
                'id' => 2260,
                'alerte_id' => 2021,
                'saisie_id' => 439,
                'valeur' => '3',
                'danger' => 1,
            ),
            1200 => 
            array (
                'id' => 2261,
                'alerte_id' => 2022,
                'saisie_id' => 439,
                'valeur' => '2',
                'danger' => 1,
            ),
            1201 => 
            array (
                'id' => 2269,
                'alerte_id' => 2034,
                'saisie_id' => 439,
                'valeur' => '15',
                'danger' => 1,
            ),
            1202 => 
            array (
                'id' => 2270,
                'alerte_id' => 2061,
                'saisie_id' => 439,
                'valeur' => '2',
                'danger' => 1,
            ),
            1203 => 
            array (
                'id' => 2271,
                'alerte_id' => 2047,
                'saisie_id' => 439,
                'valeur' => '1',
                'danger' => 1,
            ),
            1204 => 
            array (
                'id' => 2272,
                'alerte_id' => 2049,
                'saisie_id' => 439,
                'valeur' => '1',
                'danger' => 1,
            ),
            1205 => 
            array (
                'id' => 2273,
                'alerte_id' => 2054,
                'saisie_id' => 439,
                'valeur' => '1',
                'danger' => 1,
            ),
            1206 => 
            array (
                'id' => 2278,
                'alerte_id' => 5009,
                'saisie_id' => 454,
                'valeur' => '24',
                'danger' => 1,
            ),
            1207 => 
            array (
                'id' => 2279,
                'alerte_id' => 5017,
                'saisie_id' => 454,
                'valeur' => '1',
                'danger' => 1,
            ),
            1208 => 
            array (
                'id' => 2292,
                'alerte_id' => 3002,
                'saisie_id' => 461,
                'valeur' => '35',
                'danger' => 1,
            ),
            1209 => 
            array (
                'id' => 2293,
                'alerte_id' => 3003,
                'saisie_id' => 461,
                'valeur' => '15',
                'danger' => 1,
            ),
            1210 => 
            array (
                'id' => 2294,
                'alerte_id' => 3007,
                'saisie_id' => 461,
                'valeur' => '2',
                'danger' => 1,
            ),
            1211 => 
            array (
                'id' => 2295,
                'alerte_id' => 3011,
                'saisie_id' => 461,
                'valeur' => '1',
                'danger' => 1,
            ),
            1212 => 
            array (
                'id' => 2296,
                'alerte_id' => 3012,
                'saisie_id' => 461,
                'valeur' => '2',
                'danger' => 1,
            ),
            1213 => 
            array (
                'id' => 2297,
                'alerte_id' => 3014,
                'saisie_id' => 461,
                'valeur' => '1',
                'danger' => 1,
            ),
            1214 => 
            array (
                'id' => 2298,
                'alerte_id' => 3015,
                'saisie_id' => 461,
                'valeur' => '1',
                'danger' => 1,
            ),
            1215 => 
            array (
                'id' => 2299,
                'alerte_id' => 3016,
                'saisie_id' => 461,
                'valeur' => '2',
                'danger' => 1,
            ),
            1216 => 
            array (
                'id' => 2300,
                'alerte_id' => 3017,
                'saisie_id' => 461,
                'valeur' => '2',
                'danger' => 1,
            ),
            1217 => 
            array (
                'id' => 2301,
                'alerte_id' => 3026,
                'saisie_id' => 461,
                'valeur' => '10',
                'danger' => 1,
            ),
            1218 => 
            array (
                'id' => 2302,
                'alerte_id' => 3028,
                'saisie_id' => 461,
                'valeur' => '5',
                'danger' => 1,
            ),
            1219 => 
            array (
                'id' => 2303,
                'alerte_id' => 3032,
                'saisie_id' => 461,
                'valeur' => '10',
                'danger' => 1,
            ),
            1220 => 
            array (
                'id' => 2304,
                'alerte_id' => 3037,
                'saisie_id' => 461,
                'valeur' => '1',
                'danger' => 1,
            ),
            1221 => 
            array (
                'id' => 2305,
                'alerte_id' => 3046,
                'saisie_id' => 461,
                'valeur' => '1',
                'danger' => 1,
            ),
            1222 => 
            array (
                'id' => 2306,
                'alerte_id' => 3051,
                'saisie_id' => 461,
                'valeur' => '1',
                'danger' => 1,
            ),
            1223 => 
            array (
                'id' => 2310,
                'alerte_id' => 3000,
                'saisie_id' => 463,
                'valeur' => '2',
                'danger' => 1,
            ),
            1224 => 
            array (
                'id' => 2311,
                'alerte_id' => 3003,
                'saisie_id' => 463,
                'valeur' => '8',
                'danger' => 1,
            ),
            1225 => 
            array (
                'id' => 2312,
                'alerte_id' => 3004,
                'saisie_id' => 463,
                'valeur' => '4',
                'danger' => 1,
            ),
            1226 => 
            array (
                'id' => 2313,
                'alerte_id' => 3014,
                'saisie_id' => 463,
                'valeur' => '5',
                'danger' => 1,
            ),
            1227 => 
            array (
                'id' => 2314,
                'alerte_id' => 3016,
                'saisie_id' => 463,
                'valeur' => '10',
                'danger' => 1,
            ),
            1228 => 
            array (
                'id' => 2315,
                'alerte_id' => 3040,
                'saisie_id' => 463,
                'valeur' => '1',
                'danger' => 1,
            ),
            1229 => 
            array (
                'id' => 2316,
                'alerte_id' => 1019,
                'saisie_id' => 305,
                'valeur' => '5',
                'danger' => 1,
            ),
            1230 => 
            array (
                'id' => 2317,
                'alerte_id' => 1020,
                'saisie_id' => 305,
                'valeur' => '1',
                'danger' => 1,
            ),
            1231 => 
            array (
                'id' => 2318,
                'alerte_id' => 1021,
                'saisie_id' => 305,
                'valeur' => '3',
                'danger' => 1,
            ),
            1232 => 
            array (
                'id' => 2319,
                'alerte_id' => 1022,
                'saisie_id' => 305,
                'valeur' => '1',
                'danger' => 1,
            ),
            1233 => 
            array (
                'id' => 2320,
                'alerte_id' => 1023,
                'saisie_id' => 305,
                'valeur' => '1',
                'danger' => 1,
            ),
            1234 => 
            array (
                'id' => 2324,
                'alerte_id' => 2001,
                'saisie_id' => 464,
                'valeur' => '4',
                'danger' => 1,
            ),
            1235 => 
            array (
                'id' => 2325,
                'alerte_id' => 2006,
                'saisie_id' => 464,
                'valeur' => '35',
                'danger' => 1,
            ),
            1236 => 
            array (
                'id' => 2326,
                'alerte_id' => 2008,
                'saisie_id' => 464,
                'valeur' => '3',
                'danger' => 1,
            ),
            1237 => 
            array (
                'id' => 2327,
                'alerte_id' => 2027,
                'saisie_id' => 464,
                'valeur' => '34',
                'danger' => 1,
            ),
            1238 => 
            array (
                'id' => 2328,
                'alerte_id' => 2029,
                'saisie_id' => 464,
                'valeur' => '415',
                'danger' => 1,
            ),
            1239 => 
            array (
                'id' => 2329,
                'alerte_id' => 2049,
                'saisie_id' => 464,
                'valeur' => '1',
                'danger' => 1,
            ),
            1240 => 
            array (
                'id' => 2331,
                'alerte_id' => 5040,
                'saisie_id' => 469,
                'valeur' => '11',
                'danger' => 1,
            ),
            1241 => 
            array (
                'id' => 2334,
                'alerte_id' => 5014,
                'saisie_id' => 469,
                'valeur' => '3',
                'danger' => 1,
            ),
            1242 => 
            array (
                'id' => 2335,
                'alerte_id' => 5015,
                'saisie_id' => 469,
                'valeur' => '5',
                'danger' => 1,
            ),
            1243 => 
            array (
                'id' => 2336,
                'alerte_id' => 4003,
                'saisie_id' => 472,
                'valeur' => '25',
                'danger' => 1,
            ),
            1244 => 
            array (
                'id' => 2337,
                'alerte_id' => 3003,
                'saisie_id' => 473,
                'valeur' => '25',
                'danger' => 1,
            ),
            1245 => 
            array (
                'id' => 2365,
                'alerte_id' => 1001,
                'saisie_id' => 475,
                'valeur' => '1',
                'danger' => 1,
            ),
            1246 => 
            array (
                'id' => 2366,
                'alerte_id' => 1003,
                'saisie_id' => 475,
                'valeur' => '7',
                'danger' => 1,
            ),
            1247 => 
            array (
                'id' => 2367,
                'alerte_id' => 1006,
                'saisie_id' => 475,
                'valeur' => '4',
                'danger' => 1,
            ),
            1248 => 
            array (
                'id' => 2368,
                'alerte_id' => 1007,
                'saisie_id' => 475,
                'valeur' => '8',
                'danger' => 1,
            ),
            1249 => 
            array (
                'id' => 2369,
                'alerte_id' => 1013,
                'saisie_id' => 475,
                'valeur' => '1',
                'danger' => 1,
            ),
            1250 => 
            array (
                'id' => 2370,
                'alerte_id' => 1020,
                'saisie_id' => 475,
                'valeur' => '2',
                'danger' => 1,
            ),
            1251 => 
            array (
                'id' => 2371,
                'alerte_id' => 1021,
                'saisie_id' => 475,
                'valeur' => '1',
                'danger' => 1,
            ),
            1252 => 
            array (
                'id' => 2372,
                'alerte_id' => 1022,
                'saisie_id' => 475,
                'valeur' => '2',
                'danger' => 1,
            ),
            1253 => 
            array (
                'id' => 2373,
                'alerte_id' => 1023,
                'saisie_id' => 475,
                'valeur' => '2',
                'danger' => 1,
            ),
            1254 => 
            array (
                'id' => 2374,
                'alerte_id' => 1024,
                'saisie_id' => 475,
                'valeur' => '10',
                'danger' => 1,
            ),
            1255 => 
            array (
                'id' => 2375,
                'alerte_id' => 1032,
                'saisie_id' => 475,
                'valeur' => '12',
                'danger' => 1,
            ),
            1256 => 
            array (
                'id' => 2376,
                'alerte_id' => 1034,
                'saisie_id' => 475,
                'valeur' => '1',
                'danger' => 1,
            ),
            1257 => 
            array (
                'id' => 2377,
                'alerte_id' => 1036,
                'saisie_id' => 475,
                'valeur' => '1',
                'danger' => 1,
            ),
            1258 => 
            array (
                'id' => 2378,
                'alerte_id' => 1038,
                'saisie_id' => 475,
                'valeur' => '1',
                'danger' => 1,
            ),
            1259 => 
            array (
                'id' => 2379,
                'alerte_id' => 1040,
                'saisie_id' => 475,
                'valeur' => '5',
                'danger' => 1,
            ),
            1260 => 
            array (
                'id' => 2380,
                'alerte_id' => 1041,
                'saisie_id' => 475,
                'valeur' => '2',
                'danger' => 1,
            ),
            1261 => 
            array (
                'id' => 2381,
                'alerte_id' => 1043,
                'saisie_id' => 475,
                'valeur' => '2',
                'danger' => 1,
            ),
            1262 => 
            array (
                'id' => 2382,
                'alerte_id' => 1044,
                'saisie_id' => 475,
                'valeur' => '2',
                'danger' => 1,
            ),
            1263 => 
            array (
                'id' => 2383,
                'alerte_id' => 1046,
                'saisie_id' => 475,
                'valeur' => '13',
                'danger' => 1,
            ),
            1264 => 
            array (
                'id' => 2384,
                'alerte_id' => 1047,
                'saisie_id' => 475,
                'valeur' => '15',
                'danger' => 1,
            ),
            1265 => 
            array (
                'id' => 2385,
                'alerte_id' => 1048,
                'saisie_id' => 475,
                'valeur' => '10',
                'danger' => 1,
            ),
            1266 => 
            array (
                'id' => 2386,
                'alerte_id' => 1049,
                'saisie_id' => 475,
                'valeur' => '9',
                'danger' => 1,
            ),
            1267 => 
            array (
                'id' => 2387,
                'alerte_id' => 1050,
                'saisie_id' => 475,
                'valeur' => '19',
                'danger' => 1,
            ),
            1268 => 
            array (
                'id' => 2400,
                'alerte_id' => 3009,
                'saisie_id' => 477,
                'valeur' => '50',
                'danger' => 1,
            ),
            1269 => 
            array (
                'id' => 2401,
                'alerte_id' => 3015,
                'saisie_id' => 477,
                'valeur' => '1',
                'danger' => 1,
            ),
            1270 => 
            array (
                'id' => 2402,
                'alerte_id' => 3016,
                'saisie_id' => 477,
                'valeur' => '2',
                'danger' => 1,
            ),
            1271 => 
            array (
                'id' => 2403,
                'alerte_id' => 3026,
                'saisie_id' => 477,
                'valeur' => '2.5',
                'danger' => 1,
            ),
            1272 => 
            array (
                'id' => 2404,
                'alerte_id' => 3037,
                'saisie_id' => 477,
                'valeur' => '1',
                'danger' => 1,
            ),
            1273 => 
            array (
                'id' => 2411,
                'alerte_id' => 3038,
                'saisie_id' => 477,
                'valeur' => '900',
                'danger' => 1,
            ),
            1274 => 
            array (
                'id' => 2412,
                'alerte_id' => 3039,
                'saisie_id' => 477,
                'valeur' => '1',
                'danger' => 1,
            ),
            1275 => 
            array (
                'id' => 2413,
                'alerte_id' => 3043,
                'saisie_id' => 477,
                'valeur' => '90',
                'danger' => 1,
            ),
            1276 => 
            array (
                'id' => 2414,
                'alerte_id' => 3000,
                'saisie_id' => 477,
                'valeur' => '1',
                'danger' => 1,
            ),
            1277 => 
            array (
                'id' => 2415,
                'alerte_id' => 3006,
                'saisie_id' => 477,
                'valeur' => '1',
                'danger' => 1,
            ),
            1278 => 
            array (
                'id' => 2418,
                'alerte_id' => 3034,
                'saisie_id' => 479,
                'valeur' => '1',
                'danger' => 1,
            ),
            1279 => 
            array (
                'id' => 2427,
                'alerte_id' => 3049,
                'saisie_id' => 479,
                'valeur' => '1',
                'danger' => 1,
            ),
            1280 => 
            array (
                'id' => 2429,
                'alerte_id' => 3047,
                'saisie_id' => 479,
                'valeur' => '1',
                'danger' => 1,
            ),
            1281 => 
            array (
                'id' => 2430,
                'alerte_id' => 3040,
                'saisie_id' => 479,
                'valeur' => '1',
                'danger' => 1,
            ),
            1282 => 
            array (
                'id' => 2431,
                'alerte_id' => 3041,
                'saisie_id' => 479,
                'valeur' => '1',
                'danger' => 1,
            ),
            1283 => 
            array (
                'id' => 2432,
                'alerte_id' => 3042,
                'saisie_id' => 479,
                'valeur' => '1',
                'danger' => 1,
            ),
            1284 => 
            array (
                'id' => 2433,
                'alerte_id' => 3044,
                'saisie_id' => 479,
                'valeur' => '1',
                'danger' => 1,
            ),
            1285 => 
            array (
                'id' => 2434,
                'alerte_id' => 3046,
                'saisie_id' => 479,
                'valeur' => '1',
                'danger' => 1,
            ),
            1286 => 
            array (
                'id' => 2435,
                'alerte_id' => 3050,
                'saisie_id' => 479,
                'valeur' => '1',
                'danger' => 1,
            ),
            1287 => 
            array (
                'id' => 2436,
                'alerte_id' => 3051,
                'saisie_id' => 479,
                'valeur' => '1',
                'danger' => 1,
            ),
            1288 => 
            array (
                'id' => 2450,
                'alerte_id' => 2001,
                'saisie_id' => 483,
                'valeur' => '2',
                'danger' => 1,
            ),
            1289 => 
            array (
                'id' => 2451,
                'alerte_id' => 2002,
                'saisie_id' => 483,
                'valeur' => '4',
                'danger' => 1,
            ),
            1290 => 
            array (
                'id' => 2452,
                'alerte_id' => 2004,
                'saisie_id' => 483,
                'valeur' => '1',
                'danger' => 1,
            ),
            1291 => 
            array (
                'id' => 2453,
                'alerte_id' => 2008,
                'saisie_id' => 483,
                'valeur' => '4',
                'danger' => 1,
            ),
            1292 => 
            array (
                'id' => 2454,
                'alerte_id' => 2036,
                'saisie_id' => 483,
                'valeur' => '14',
                'danger' => 1,
            ),
            1293 => 
            array (
                'id' => 2455,
                'alerte_id' => 2037,
                'saisie_id' => 483,
                'valeur' => '10',
                'danger' => 1,
            ),
            1294 => 
            array (
                'id' => 2456,
                'alerte_id' => 2040,
                'saisie_id' => 483,
                'valeur' => '24',
                'danger' => 1,
            ),
            1295 => 
            array (
                'id' => 2457,
                'alerte_id' => 2043,
                'saisie_id' => 483,
                'valeur' => '1',
                'danger' => 1,
            ),
            1296 => 
            array (
                'id' => 2458,
                'alerte_id' => 2044,
                'saisie_id' => 483,
                'valeur' => '1',
                'danger' => 1,
            ),
            1297 => 
            array (
                'id' => 2459,
                'alerte_id' => 2045,
                'saisie_id' => 483,
                'valeur' => '35',
                'danger' => 1,
            ),
            1298 => 
            array (
                'id' => 2460,
                'alerte_id' => 2052,
                'saisie_id' => 483,
                'valeur' => '2',
                'danger' => 1,
            ),
            1299 => 
            array (
                'id' => 2461,
                'alerte_id' => 2053,
                'saisie_id' => 483,
                'valeur' => '2',
                'danger' => 1,
            ),
            1300 => 
            array (
                'id' => 2462,
                'alerte_id' => 2056,
                'saisie_id' => 483,
                'valeur' => '2',
                'danger' => 1,
            ),
            1301 => 
            array (
                'id' => 2476,
                'alerte_id' => 1015,
                'saisie_id' => 485,
                'valeur' => '400',
                'danger' => 1,
            ),
            1302 => 
            array (
                'id' => 2478,
                'alerte_id' => 1003,
                'saisie_id' => 485,
                'valeur' => '1',
                'danger' => 1,
            ),
            1303 => 
            array (
                'id' => 2479,
                'alerte_id' => 1024,
                'saisie_id' => 485,
                'valeur' => '6',
                'danger' => 1,
            ),
            1304 => 
            array (
                'id' => 2480,
                'alerte_id' => 1027,
                'saisie_id' => 485,
                'valeur' => '1',
                'danger' => 1,
            ),
            1305 => 
            array (
                'id' => 2481,
                'alerte_id' => 1036,
                'saisie_id' => 485,
                'valeur' => '1',
                'danger' => 1,
            ),
            1306 => 
            array (
                'id' => 2482,
                'alerte_id' => 1037,
                'saisie_id' => 485,
                'valeur' => '2',
                'danger' => 1,
            ),
            1307 => 
            array (
                'id' => 2483,
                'alerte_id' => 1042,
                'saisie_id' => 485,
                'valeur' => '1.5',
                'danger' => 1,
            ),
            1308 => 
            array (
                'id' => 2484,
                'alerte_id' => 1043,
                'saisie_id' => 485,
                'valeur' => '1',
                'danger' => 1,
            ),
            1309 => 
            array (
                'id' => 2485,
                'alerte_id' => 1045,
                'saisie_id' => 485,
                'valeur' => '1',
                'danger' => 1,
            ),
            1310 => 
            array (
                'id' => 2486,
                'alerte_id' => 3049,
                'saisie_id' => 443,
                'valeur' => '1',
                'danger' => 1,
            ),
            1311 => 
            array (
                'id' => 2487,
                'alerte_id' => 4001,
                'saisie_id' => 487,
                'valeur' => '1',
                'danger' => 1,
            ),
            1312 => 
            array (
                'id' => 2488,
                'alerte_id' => 4005,
                'saisie_id' => 487,
                'valeur' => '15',
                'danger' => 1,
            ),
            1313 => 
            array (
                'id' => 2489,
                'alerte_id' => 4010,
                'saisie_id' => 487,
                'valeur' => '1',
                'danger' => 1,
            ),
            1314 => 
            array (
                'id' => 2490,
                'alerte_id' => 4017,
                'saisie_id' => 487,
                'valeur' => '20',
                'danger' => 1,
            ),
            1315 => 
            array (
                'id' => 2491,
                'alerte_id' => 4020,
                'saisie_id' => 487,
                'valeur' => '10',
                'danger' => 1,
            ),
            1316 => 
            array (
                'id' => 2492,
                'alerte_id' => 4022,
                'saisie_id' => 487,
                'valeur' => '25',
                'danger' => 1,
            ),
            1317 => 
            array (
                'id' => 2493,
                'alerte_id' => 4025,
                'saisie_id' => 487,
                'valeur' => '5',
                'danger' => 1,
            ),
            1318 => 
            array (
                'id' => 2494,
                'alerte_id' => 4033,
                'saisie_id' => 487,
                'valeur' => '30',
                'danger' => 1,
            ),
            1319 => 
            array (
                'id' => 2495,
                'alerte_id' => 4035,
                'saisie_id' => 487,
                'valeur' => '50',
                'danger' => 1,
            ),
            1320 => 
            array (
                'id' => 2496,
                'alerte_id' => 4042,
                'saisie_id' => 487,
                'valeur' => '5',
                'danger' => 1,
            ),
            1321 => 
            array (
                'id' => 2497,
                'alerte_id' => 4046,
                'saisie_id' => 487,
                'valeur' => '12',
                'danger' => 1,
            ),
            1322 => 
            array (
                'id' => 2498,
                'alerte_id' => 4047,
                'saisie_id' => 487,
                'valeur' => '20',
                'danger' => 1,
            ),
            1323 => 
            array (
                'id' => 2499,
                'alerte_id' => 4049,
                'saisie_id' => 487,
                'valeur' => '1',
                'danger' => 1,
            ),
            1324 => 
            array (
                'id' => 2500,
                'alerte_id' => 4050,
                'saisie_id' => 487,
                'valeur' => '1',
                'danger' => 1,
            ),
            1325 => 
            array (
                'id' => 2501,
                'alerte_id' => 4053,
                'saisie_id' => 487,
                'valeur' => '1',
                'danger' => 1,
            ),
            1326 => 
            array (
                'id' => 2502,
                'alerte_id' => 4054,
                'saisie_id' => 487,
                'valeur' => '40',
                'danger' => 1,
            ),
            1327 => 
            array (
                'id' => 2503,
                'alerte_id' => 4056,
                'saisie_id' => 487,
                'valeur' => '65',
                'danger' => 1,
            ),
            1328 => 
            array (
                'id' => 2508,
                'alerte_id' => 2055,
                'saisie_id' => 488,
                'valeur' => '35',
                'danger' => 1,
            ),
            1329 => 
            array (
                'id' => 2509,
                'alerte_id' => 2056,
                'saisie_id' => 488,
                'valeur' => '12',
                'danger' => 1,
            ),
            1330 => 
            array (
                'id' => 2510,
                'alerte_id' => 2057,
                'saisie_id' => 488,
                'valeur' => '30',
                'danger' => 1,
            ),
            1331 => 
            array (
                'id' => 2511,
                'alerte_id' => 2058,
                'saisie_id' => 488,
                'valeur' => '50',
                'danger' => 1,
            ),
            1332 => 
            array (
                'id' => 2512,
                'alerte_id' => 3007,
                'saisie_id' => 489,
                'valeur' => '35',
                'danger' => 1,
            ),
            1333 => 
            array (
                'id' => 2513,
                'alerte_id' => 3027,
                'saisie_id' => 489,
                'valeur' => '10',
                'danger' => 1,
            ),
            1334 => 
            array (
                'id' => 2514,
                'alerte_id' => 4001,
                'saisie_id' => 490,
                'valeur' => '1',
                'danger' => 1,
            ),
            1335 => 
            array (
                'id' => 2515,
                'alerte_id' => 4004,
                'saisie_id' => 490,
                'valeur' => '5',
                'danger' => 1,
            ),
            1336 => 
            array (
                'id' => 2516,
                'alerte_id' => 4009,
                'saisie_id' => 490,
                'valeur' => '50',
                'danger' => 1,
            ),
            1337 => 
            array (
                'id' => 2517,
                'alerte_id' => 4010,
                'saisie_id' => 490,
                'valeur' => '1',
                'danger' => 1,
            ),
            1338 => 
            array (
                'id' => 2518,
                'alerte_id' => 4012,
                'saisie_id' => 490,
                'valeur' => '3',
                'danger' => 1,
            ),
            1339 => 
            array (
                'id' => 2519,
                'alerte_id' => 4016,
                'saisie_id' => 490,
                'valeur' => '5',
                'danger' => 1,
            ),
            1340 => 
            array (
                'id' => 2520,
                'alerte_id' => 4017,
                'saisie_id' => 490,
                'valeur' => '8',
                'danger' => 1,
            ),
            1341 => 
            array (
                'id' => 2521,
                'alerte_id' => 4020,
                'saisie_id' => 490,
                'valeur' => '9',
                'danger' => 1,
            ),
            1342 => 
            array (
                'id' => 2522,
                'alerte_id' => 4021,
                'saisie_id' => 490,
                'valeur' => '11',
                'danger' => 1,
            ),
            1343 => 
            array (
                'id' => 2523,
                'alerte_id' => 4026,
                'saisie_id' => 490,
                'valeur' => '6',
                'danger' => 1,
            ),
            1344 => 
            array (
                'id' => 2524,
                'alerte_id' => 4033,
                'saisie_id' => 490,
                'valeur' => '12',
                'danger' => 1,
            ),
            1345 => 
            array (
                'id' => 2525,
                'alerte_id' => 4035,
                'saisie_id' => 490,
                'valeur' => '8',
                'danger' => 1,
            ),
            1346 => 
            array (
                'id' => 2526,
                'alerte_id' => 4036,
                'saisie_id' => 490,
                'valeur' => '6',
                'danger' => 1,
            ),
            1347 => 
            array (
                'id' => 2527,
                'alerte_id' => 4039,
                'saisie_id' => 490,
                'valeur' => '2',
                'danger' => 1,
            ),
            1348 => 
            array (
                'id' => 2528,
                'alerte_id' => 4049,
                'saisie_id' => 490,
                'valeur' => '1',
                'danger' => 1,
            ),
            1349 => 
            array (
                'id' => 2529,
                'alerte_id' => 4051,
                'saisie_id' => 490,
                'valeur' => '1',
                'danger' => 1,
            ),
            1350 => 
            array (
                'id' => 2530,
                'alerte_id' => 4054,
                'saisie_id' => 490,
                'valeur' => '17',
                'danger' => 1,
            ),
            1351 => 
            array (
                'id' => 2531,
                'alerte_id' => 4057,
                'saisie_id' => 490,
                'valeur' => '3',
                'danger' => 1,
            ),
            1352 => 
            array (
                'id' => 2532,
                'alerte_id' => 2000,
                'saisie_id' => 492,
                'valeur' => '1',
                'danger' => 1,
            ),
            1353 => 
            array (
                'id' => 2533,
                'alerte_id' => 2002,
                'saisie_id' => 492,
                'valeur' => '4',
                'danger' => 1,
            ),
            1354 => 
            array (
                'id' => 2534,
                'alerte_id' => 2005,
                'saisie_id' => 492,
                'valeur' => '1',
                'danger' => 1,
            ),
            1355 => 
            array (
                'id' => 2535,
                'alerte_id' => 2007,
                'saisie_id' => 492,
                'valeur' => '15',
                'danger' => 1,
            ),
            1356 => 
            array (
                'id' => 2536,
                'alerte_id' => 2008,
                'saisie_id' => 492,
                'valeur' => '10',
                'danger' => 1,
            ),
            1357 => 
            array (
                'id' => 2537,
                'alerte_id' => 2013,
                'saisie_id' => 492,
                'valeur' => '100',
                'danger' => 1,
            ),
            1358 => 
            array (
                'id' => 2538,
                'alerte_id' => 2021,
                'saisie_id' => 492,
                'valeur' => '2',
                'danger' => 1,
            ),
            1359 => 
            array (
                'id' => 2539,
                'alerte_id' => 2040,
                'saisie_id' => 492,
                'valeur' => '10',
                'danger' => 1,
            ),
            1360 => 
            array (
                'id' => 2540,
                'alerte_id' => 2041,
                'saisie_id' => 492,
                'valeur' => '1',
                'danger' => 1,
            ),
            1361 => 
            array (
                'id' => 2541,
                'alerte_id' => 2043,
                'saisie_id' => 492,
                'valeur' => '1',
                'danger' => 1,
            ),
            1362 => 
            array (
                'id' => 2542,
                'alerte_id' => 2044,
                'saisie_id' => 492,
                'valeur' => '15',
                'danger' => 1,
            ),
            1363 => 
            array (
                'id' => 2543,
                'alerte_id' => 2046,
                'saisie_id' => 492,
                'valeur' => '1',
                'danger' => 1,
            ),
            1364 => 
            array (
                'id' => 2544,
                'alerte_id' => 2047,
                'saisie_id' => 492,
                'valeur' => '1',
                'danger' => 1,
            ),
            1365 => 
            array (
                'id' => 2545,
                'alerte_id' => 2048,
                'saisie_id' => 492,
                'valeur' => '1',
                'danger' => 1,
            ),
            1366 => 
            array (
                'id' => 2546,
                'alerte_id' => 2052,
                'saisie_id' => 492,
                'valeur' => '8',
                'danger' => 1,
            ),
            1367 => 
            array (
                'id' => 2547,
                'alerte_id' => 2053,
                'saisie_id' => 492,
                'valeur' => '8',
                'danger' => 1,
            ),
            1368 => 
            array (
                'id' => 2548,
                'alerte_id' => 2056,
                'saisie_id' => 492,
                'valeur' => '3',
                'danger' => 1,
            ),
            1369 => 
            array (
                'id' => 2549,
                'alerte_id' => 2007,
                'saisie_id' => 496,
                'valeur' => '50',
                'danger' => 1,
            ),
            1370 => 
            array (
                'id' => 2550,
                'alerte_id' => 2008,
                'saisie_id' => 496,
                'valeur' => '7',
                'danger' => 1,
            ),
            1371 => 
            array (
                'id' => 2551,
                'alerte_id' => 2009,
                'saisie_id' => 496,
                'valeur' => '2',
                'danger' => 1,
            ),
            1372 => 
            array (
                'id' => 2552,
                'alerte_id' => 2010,
                'saisie_id' => 496,
                'valeur' => '500',
                'danger' => 1,
            ),
            1373 => 
            array (
                'id' => 2553,
                'alerte_id' => 2011,
                'saisie_id' => 496,
                'valeur' => '1',
                'danger' => 1,
            ),
            1374 => 
            array (
                'id' => 2554,
                'alerte_id' => 2013,
                'saisie_id' => 496,
                'valeur' => '85',
                'danger' => 1,
            ),
            1375 => 
            array (
                'id' => 2555,
                'alerte_id' => 2021,
                'saisie_id' => 496,
                'valeur' => '2',
                'danger' => 1,
            ),
            1376 => 
            array (
                'id' => 2556,
                'alerte_id' => 2022,
                'saisie_id' => 496,
                'valeur' => '1',
                'danger' => 1,
            ),
            1377 => 
            array (
                'id' => 2557,
                'alerte_id' => 2023,
                'saisie_id' => 496,
                'valeur' => '6',
                'danger' => 1,
            ),
            1378 => 
            array (
                'id' => 2558,
                'alerte_id' => 2036,
                'saisie_id' => 496,
                'valeur' => '52',
                'danger' => 1,
            ),
            1379 => 
            array (
                'id' => 2559,
                'alerte_id' => 2039,
                'saisie_id' => 496,
                'valeur' => '20',
                'danger' => 1,
            ),
            1380 => 
            array (
                'id' => 2560,
                'alerte_id' => 2040,
                'saisie_id' => 496,
                'valeur' => '10',
                'danger' => 1,
            ),
            1381 => 
            array (
                'id' => 2561,
                'alerte_id' => 2055,
                'saisie_id' => 496,
                'valeur' => '10',
                'danger' => 1,
            ),
            1382 => 
            array (
                'id' => 2562,
                'alerte_id' => 2056,
                'saisie_id' => 496,
                'valeur' => '5',
                'danger' => 1,
            ),
            1383 => 
            array (
                'id' => 2586,
                'alerte_id' => 2021,
                'saisie_id' => 497,
                'valeur' => '2',
                'danger' => 1,
            ),
            1384 => 
            array (
                'id' => 2587,
                'alerte_id' => 2022,
                'saisie_id' => 497,
                'valeur' => '1',
                'danger' => 1,
            ),
            1385 => 
            array (
                'id' => 2588,
                'alerte_id' => 2023,
                'saisie_id' => 497,
                'valeur' => '2',
                'danger' => 1,
            ),
            1386 => 
            array (
                'id' => 2589,
                'alerte_id' => 2001,
                'saisie_id' => 497,
                'valeur' => '4',
                'danger' => 1,
            ),
            1387 => 
            array (
                'id' => 2590,
                'alerte_id' => 2002,
                'saisie_id' => 497,
                'valeur' => '2',
                'danger' => 1,
            ),
            1388 => 
            array (
                'id' => 2591,
                'alerte_id' => 2004,
                'saisie_id' => 497,
                'valeur' => '1',
                'danger' => 1,
            ),
            1389 => 
            array (
                'id' => 2592,
                'alerte_id' => 2007,
                'saisie_id' => 497,
                'valeur' => '16',
                'danger' => 1,
            ),
            1390 => 
            array (
                'id' => 2593,
                'alerte_id' => 2008,
                'saisie_id' => 497,
                'valeur' => '4',
                'danger' => 1,
            ),
            1391 => 
            array (
                'id' => 2594,
                'alerte_id' => 2035,
                'saisie_id' => 497,
                'valeur' => '6',
                'danger' => 1,
            ),
            1392 => 
            array (
                'id' => 2595,
                'alerte_id' => 2036,
                'saisie_id' => 497,
                'valeur' => '11',
                'danger' => 1,
            ),
            1393 => 
            array (
                'id' => 2596,
                'alerte_id' => 2037,
                'saisie_id' => 497,
                'valeur' => '43',
                'danger' => 1,
            ),
            1394 => 
            array (
                'id' => 2597,
                'alerte_id' => 2039,
                'saisie_id' => 497,
                'valeur' => '27',
                'danger' => 1,
            ),
            1395 => 
            array (
                'id' => 2598,
                'alerte_id' => 2043,
                'saisie_id' => 497,
                'valeur' => '1',
                'danger' => 1,
            ),
            1396 => 
            array (
                'id' => 2599,
                'alerte_id' => 2049,
                'saisie_id' => 497,
                'valeur' => '1',
                'danger' => 1,
            ),
            1397 => 
            array (
                'id' => 2600,
                'alerte_id' => 2051,
                'saisie_id' => 497,
                'valeur' => '3',
                'danger' => 1,
            ),
            1398 => 
            array (
                'id' => 2601,
                'alerte_id' => 2054,
                'saisie_id' => 497,
                'valeur' => '1',
                'danger' => 1,
            ),
            1399 => 
            array (
                'id' => 2602,
                'alerte_id' => 2055,
                'saisie_id' => 497,
                'valeur' => '18',
                'danger' => 1,
            ),
            1400 => 
            array (
                'id' => 2603,
                'alerte_id' => 2056,
                'saisie_id' => 497,
                'valeur' => '14',
                'danger' => 1,
            ),
            1401 => 
            array (
                'id' => 2604,
                'alerte_id' => 2061,
                'saisie_id' => 497,
                'valeur' => '1',
                'danger' => 1,
            ),
            1402 => 
            array (
                'id' => 2605,
                'alerte_id' => 2013,
                'saisie_id' => 497,
                'valeur' => '95',
                'danger' => 1,
            ),
            1403 => 
            array (
                'id' => 2606,
                'alerte_id' => 2014,
                'saisie_id' => 497,
                'valeur' => '27',
                'danger' => 1,
            ),
            1404 => 
            array (
                'id' => 2607,
                'alerte_id' => 2016,
                'saisie_id' => 497,
                'valeur' => '405',
                'danger' => 1,
            ),
            1405 => 
            array (
                'id' => 2608,
                'alerte_id' => 2000,
                'saisie_id' => 498,
                'valeur' => '1',
                'danger' => 1,
            ),
            1406 => 
            array (
                'id' => 2609,
                'alerte_id' => 2006,
                'saisie_id' => 498,
                'valeur' => '20',
                'danger' => 1,
            ),
            1407 => 
            array (
                'id' => 2610,
                'alerte_id' => 2008,
                'saisie_id' => 498,
                'valeur' => '5',
                'danger' => 1,
            ),
            1408 => 
            array (
                'id' => 2611,
                'alerte_id' => 2011,
                'saisie_id' => 498,
                'valeur' => '1',
                'danger' => 1,
            ),
            1409 => 
            array (
                'id' => 2612,
                'alerte_id' => 2021,
                'saisie_id' => 498,
                'valeur' => '2',
                'danger' => 1,
            ),
            1410 => 
            array (
                'id' => 2613,
                'alerte_id' => 2033,
                'saisie_id' => 498,
                'valeur' => '15',
                'danger' => 1,
            ),
            1411 => 
            array (
                'id' => 2614,
                'alerte_id' => 2036,
                'saisie_id' => 498,
                'valeur' => '10',
                'danger' => 1,
            ),
            1412 => 
            array (
                'id' => 2615,
                'alerte_id' => 2039,
                'saisie_id' => 498,
                'valeur' => '30',
                'danger' => 1,
            ),
            1413 => 
            array (
                'id' => 2616,
                'alerte_id' => 2051,
                'saisie_id' => 498,
                'valeur' => '50',
                'danger' => 1,
            ),
            1414 => 
            array (
                'id' => 2617,
                'alerte_id' => 2055,
                'saisie_id' => 498,
                'valeur' => '9',
                'danger' => 1,
            ),
            1415 => 
            array (
                'id' => 2618,
                'alerte_id' => 2056,
                'saisie_id' => 498,
                'valeur' => '2',
                'danger' => 1,
            ),
            1416 => 
            array (
                'id' => 2619,
                'alerte_id' => 2057,
                'saisie_id' => 498,
                'valeur' => '20',
                'danger' => 1,
            ),
            1417 => 
            array (
                'id' => 2620,
                'alerte_id' => 2058,
                'saisie_id' => 498,
                'valeur' => '50',
                'danger' => 1,
            ),
            1418 => 
            array (
                'id' => 2621,
                'alerte_id' => 2061,
                'saisie_id' => 498,
                'valeur' => '2',
                'danger' => 1,
            ),
            1419 => 
            array (
                'id' => 2629,
                'alerte_id' => 1001,
                'saisie_id' => 499,
                'valeur' => '1',
                'danger' => 1,
            ),
            1420 => 
            array (
                'id' => 2630,
                'alerte_id' => 1003,
                'saisie_id' => 499,
                'valeur' => '20',
                'danger' => 1,
            ),
            1421 => 
            array (
                'id' => 2631,
                'alerte_id' => 1004,
                'saisie_id' => 499,
                'valeur' => '20',
                'danger' => 1,
            ),
            1422 => 
            array (
                'id' => 2632,
                'alerte_id' => 1005,
                'saisie_id' => 499,
                'valeur' => '4',
                'danger' => 1,
            ),
            1423 => 
            array (
                'id' => 2633,
                'alerte_id' => 1006,
                'saisie_id' => 499,
                'valeur' => '6',
                'danger' => 1,
            ),
            1424 => 
            array (
                'id' => 2634,
                'alerte_id' => 1007,
                'saisie_id' => 499,
                'valeur' => '8',
                'danger' => 1,
            ),
            1425 => 
            array (
                'id' => 2635,
                'alerte_id' => 1008,
                'saisie_id' => 499,
                'valeur' => '7.98',
                'danger' => 1,
            ),
            1426 => 
            array (
                'id' => 2636,
                'alerte_id' => 1009,
                'saisie_id' => 499,
                'valeur' => '30',
                'danger' => 1,
            ),
            1427 => 
            array (
                'id' => 2637,
                'alerte_id' => 1010,
                'saisie_id' => 499,
                'valeur' => '150',
                'danger' => 1,
            ),
            1428 => 
            array (
                'id' => 2638,
                'alerte_id' => 1024,
                'saisie_id' => 499,
                'valeur' => '8',
                'danger' => 1,
            ),
            1429 => 
            array (
                'id' => 2639,
                'alerte_id' => 1025,
                'saisie_id' => 499,
                'valeur' => '12',
                'danger' => 1,
            ),
            1430 => 
            array (
                'id' => 2640,
                'alerte_id' => 1026,
                'saisie_id' => 499,
                'valeur' => '12',
                'danger' => 1,
            ),
            1431 => 
            array (
                'id' => 2641,
                'alerte_id' => 1030,
                'saisie_id' => 499,
                'valeur' => '6',
                'danger' => 1,
            ),
            1432 => 
            array (
                'id' => 2642,
                'alerte_id' => 1031,
                'saisie_id' => 499,
                'valeur' => '4',
                'danger' => 1,
            ),
            1433 => 
            array (
                'id' => 2643,
                'alerte_id' => 1032,
                'saisie_id' => 499,
                'valeur' => '25',
                'danger' => 1,
            ),
            1434 => 
            array (
                'id' => 2644,
                'alerte_id' => 1033,
                'saisie_id' => 499,
                'valeur' => '50',
                'danger' => 1,
            ),
            1435 => 
            array (
                'id' => 2697,
                'alerte_id' => 1001,
                'saisie_id' => 502,
                'valeur' => '1',
                'danger' => 1,
            ),
            1436 => 
            array (
                'id' => 2698,
                'alerte_id' => 1003,
                'saisie_id' => 502,
                'valeur' => '15',
                'danger' => 1,
            ),
            1437 => 
            array (
                'id' => 2699,
                'alerte_id' => 1004,
                'saisie_id' => 502,
                'valeur' => '20',
                'danger' => 1,
            ),
            1438 => 
            array (
                'id' => 2700,
                'alerte_id' => 1005,
                'saisie_id' => 502,
                'valeur' => '10',
                'danger' => 1,
            ),
            1439 => 
            array (
                'id' => 2701,
                'alerte_id' => 1006,
                'saisie_id' => 502,
                'valeur' => '15',
                'danger' => 1,
            ),
            1440 => 
            array (
                'id' => 2702,
                'alerte_id' => 1010,
                'saisie_id' => 502,
                'valeur' => '150',
                'danger' => 1,
            ),
            1441 => 
            array (
                'id' => 2703,
                'alerte_id' => 1012,
                'saisie_id' => 502,
                'valeur' => '2',
                'danger' => 1,
            ),
            1442 => 
            array (
                'id' => 2704,
                'alerte_id' => 1013,
                'saisie_id' => 502,
                'valeur' => '1',
                'danger' => 1,
            ),
            1443 => 
            array (
                'id' => 2705,
                'alerte_id' => 1014,
                'saisie_id' => 502,
                'valeur' => '4',
                'danger' => 1,
            ),
            1444 => 
            array (
                'id' => 2706,
                'alerte_id' => 1015,
                'saisie_id' => 502,
                'valeur' => '450',
                'danger' => 1,
            ),
            1445 => 
            array (
                'id' => 2707,
                'alerte_id' => 1019,
                'saisie_id' => 502,
                'valeur' => '6',
                'danger' => 1,
            ),
            1446 => 
            array (
                'id' => 2708,
                'alerte_id' => 1020,
                'saisie_id' => 502,
                'valeur' => '2',
                'danger' => 1,
            ),
            1447 => 
            array (
                'id' => 2709,
                'alerte_id' => 1021,
                'saisie_id' => 502,
                'valeur' => '3',
                'danger' => 1,
            ),
            1448 => 
            array (
                'id' => 2710,
                'alerte_id' => 1023,
                'saisie_id' => 502,
                'valeur' => '1',
                'danger' => 1,
            ),
            1449 => 
            array (
                'id' => 2711,
                'alerte_id' => 1025,
                'saisie_id' => 502,
                'valeur' => '5',
                'danger' => 1,
            ),
            1450 => 
            array (
                'id' => 2712,
                'alerte_id' => 1027,
                'saisie_id' => 502,
                'valeur' => '1',
                'danger' => 1,
            ),
            1451 => 
            array (
                'id' => 2713,
                'alerte_id' => 1032,
                'saisie_id' => 502,
                'valeur' => '15',
                'danger' => 1,
            ),
            1452 => 
            array (
                'id' => 2714,
                'alerte_id' => 1036,
                'saisie_id' => 502,
                'valeur' => '1',
                'danger' => 1,
            ),
            1453 => 
            array (
                'id' => 2715,
                'alerte_id' => 1037,
                'saisie_id' => 502,
                'valeur' => '1',
                'danger' => 1,
            ),
            1454 => 
            array (
                'id' => 2716,
                'alerte_id' => 1038,
                'saisie_id' => 502,
                'valeur' => '1',
                'danger' => 1,
            ),
            1455 => 
            array (
                'id' => 2717,
                'alerte_id' => 1040,
                'saisie_id' => 502,
                'valeur' => '2',
                'danger' => 1,
            ),
            1456 => 
            array (
                'id' => 2718,
                'alerte_id' => 1041,
                'saisie_id' => 502,
                'valeur' => '5',
                'danger' => 1,
            ),
            1457 => 
            array (
                'id' => 2719,
                'alerte_id' => 1042,
                'saisie_id' => 502,
                'valeur' => '1',
                'danger' => 1,
            ),
            1458 => 
            array (
                'id' => 2720,
                'alerte_id' => 1043,
                'saisie_id' => 502,
                'valeur' => '5',
                'danger' => 1,
            ),
            1459 => 
            array (
                'id' => 2721,
                'alerte_id' => 1047,
                'saisie_id' => 502,
                'valeur' => '6',
                'danger' => 1,
            ),
            1460 => 
            array (
                'id' => 2722,
                'alerte_id' => 1048,
                'saisie_id' => 502,
                'valeur' => '6',
                'danger' => 1,
            ),
            1461 => 
            array (
                'id' => 2723,
                'alerte_id' => 2001,
                'saisie_id' => 509,
                'valeur' => '0.07',
                'danger' => 1,
            ),
            1462 => 
            array (
                'id' => 2724,
                'alerte_id' => 2002,
                'saisie_id' => 509,
                'valeur' => '0.02',
                'danger' => 1,
            ),
            1463 => 
            array (
                'id' => 2725,
                'alerte_id' => 2004,
                'saisie_id' => 509,
                'valeur' => '1',
                'danger' => 1,
            ),
            1464 => 
            array (
                'id' => 2738,
                'alerte_id' => 2059,
                'saisie_id' => 408,
                'valeur' => '1',
                'danger' => 1,
            ),
            1465 => 
            array (
                'id' => 2739,
                'alerte_id' => 2060,
                'saisie_id' => 408,
                'valeur' => '4',
                'danger' => 1,
            ),
            1466 => 
            array (
                'id' => 2740,
                'alerte_id' => 2001,
                'saisie_id' => 513,
                'valeur' => '5',
                'danger' => 1,
            ),
            1467 => 
            array (
                'id' => 2741,
                'alerte_id' => 2002,
                'saisie_id' => 513,
                'valeur' => '5',
                'danger' => 1,
            ),
            1468 => 
            array (
                'id' => 2742,
                'alerte_id' => 2008,
                'saisie_id' => 513,
                'valeur' => '20',
                'danger' => 1,
            ),
            1469 => 
            array (
                'id' => 2743,
                'alerte_id' => 2010,
                'saisie_id' => 513,
                'valeur' => '100',
                'danger' => 1,
            ),
            1470 => 
            array (
                'id' => 2744,
                'alerte_id' => 2020,
                'saisie_id' => 513,
                'valeur' => '5',
                'danger' => 1,
            ),
            1471 => 
            array (
                'id' => 2745,
                'alerte_id' => 2021,
                'saisie_id' => 513,
                'valeur' => '5',
                'danger' => 1,
            ),
            1472 => 
            array (
                'id' => 2746,
                'alerte_id' => 2023,
                'saisie_id' => 513,
                'valeur' => '4.98',
                'danger' => 1,
            ),
            1473 => 
            array (
                'id' => 2753,
                'alerte_id' => 2016,
                'saisie_id' => 514,
                'valeur' => '405',
                'danger' => 1,
            ),
            1474 => 
            array (
                'id' => 2754,
                'alerte_id' => 2021,
                'saisie_id' => 514,
                'valeur' => '2',
                'danger' => 1,
            ),
            1475 => 
            array (
                'id' => 2755,
                'alerte_id' => 2022,
                'saisie_id' => 514,
                'valeur' => '2',
                'danger' => 1,
            ),
            1476 => 
            array (
                'id' => 2756,
                'alerte_id' => 2023,
                'saisie_id' => 514,
                'valeur' => '2',
                'danger' => 1,
            ),
            1477 => 
            array (
                'id' => 2757,
                'alerte_id' => 2034,
                'saisie_id' => 514,
                'valeur' => '5',
                'danger' => 1,
            ),
            1478 => 
            array (
                'id' => 2758,
                'alerte_id' => 2036,
                'saisie_id' => 514,
                'valeur' => '9',
                'danger' => 1,
            ),
            1479 => 
            array (
                'id' => 2759,
                'alerte_id' => 2037,
                'saisie_id' => 514,
                'valeur' => '9',
                'danger' => 1,
            ),
            1480 => 
            array (
                'id' => 2760,
                'alerte_id' => 2038,
                'saisie_id' => 514,
                'valeur' => '9',
                'danger' => 1,
            ),
            1481 => 
            array (
                'id' => 2761,
                'alerte_id' => 2040,
                'saisie_id' => 514,
                'valeur' => '9',
                'danger' => 1,
            ),
            1482 => 
            array (
                'id' => 2762,
                'alerte_id' => 2041,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1483 => 
            array (
                'id' => 2763,
                'alerte_id' => 2043,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1484 => 
            array (
                'id' => 2764,
                'alerte_id' => 2044,
                'saisie_id' => 514,
                'valeur' => '5',
                'danger' => 1,
            ),
            1485 => 
            array (
                'id' => 2765,
                'alerte_id' => 2046,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1486 => 
            array (
                'id' => 2766,
                'alerte_id' => 2047,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1487 => 
            array (
                'id' => 2767,
                'alerte_id' => 2048,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1488 => 
            array (
                'id' => 2768,
                'alerte_id' => 2051,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1489 => 
            array (
                'id' => 2769,
                'alerte_id' => 2052,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1490 => 
            array (
                'id' => 2770,
                'alerte_id' => 2053,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1491 => 
            array (
                'id' => 2771,
                'alerte_id' => 2059,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1492 => 
            array (
                'id' => 2772,
                'alerte_id' => 2060,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1493 => 
            array (
                'id' => 2779,
                'alerte_id' => 2001,
                'saisie_id' => 408,
                'valeur' => '3',
                'danger' => 1,
            ),
            1494 => 
            array (
                'id' => 2780,
                'alerte_id' => 2002,
                'saisie_id' => 408,
                'valeur' => '3',
                'danger' => 1,
            ),
            1495 => 
            array (
                'id' => 2781,
                'alerte_id' => 2007,
                'saisie_id' => 408,
                'valeur' => '16',
                'danger' => 1,
            ),
            1496 => 
            array (
                'id' => 2782,
                'alerte_id' => 2008,
                'saisie_id' => 408,
                'valeur' => '15',
                'danger' => 1,
            ),
            1497 => 
            array (
                'id' => 2783,
                'alerte_id' => 2009,
                'saisie_id' => 408,
                'valeur' => '2',
                'danger' => 1,
            ),
            1498 => 
            array (
                'id' => 2784,
                'alerte_id' => 2010,
                'saisie_id' => 408,
                'valeur' => '102',
                'danger' => 1,
            ),
            1499 => 
            array (
                'id' => 2791,
                'alerte_id' => 2001,
                'saisie_id' => 514,
                'valeur' => '3',
                'danger' => 1,
            ),
            1500 => 
            array (
                'id' => 2792,
                'alerte_id' => 2002,
                'saisie_id' => 514,
                'valeur' => '3',
                'danger' => 1,
            ),
            1501 => 
            array (
                'id' => 2793,
                'alerte_id' => 2004,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1502 => 
            array (
                'id' => 2794,
                'alerte_id' => 2005,
                'saisie_id' => 514,
                'valeur' => '1',
                'danger' => 1,
            ),
            1503 => 
            array (
                'id' => 2795,
                'alerte_id' => 2008,
                'saisie_id' => 514,
                'valeur' => '4',
                'danger' => 1,
            ),
            1504 => 
            array (
                'id' => 2796,
                'alerte_id' => 2010,
                'saisie_id' => 514,
                'valeur' => '150',
                'danger' => 1,
            ),
            1505 => 
            array (
                'id' => 2797,
                'alerte_id' => 2010,
                'saisie_id' => 515,
                'valeur' => '1000',
                'danger' => 1,
            ),
            1506 => 
            array (
                'id' => 2801,
                'alerte_id' => 2000,
                'saisie_id' => 517,
                'valeur' => '1',
                'danger' => 1,
            ),
            1507 => 
            array (
                'id' => 2802,
                'alerte_id' => 2001,
                'saisie_id' => 517,
                'valeur' => '23',
                'danger' => 1,
            ),
            1508 => 
            array (
                'id' => 2803,
                'alerte_id' => 2002,
                'saisie_id' => 517,
                'valeur' => '21',
                'danger' => 1,
            ),
            1509 => 
            array (
                'id' => 2804,
                'alerte_id' => 2004,
                'saisie_id' => 517,
                'valeur' => '1',
                'danger' => 1,
            ),
            1510 => 
            array (
                'id' => 2805,
                'alerte_id' => 2005,
                'saisie_id' => 517,
                'valeur' => '1',
                'danger' => 1,
            ),
            1511 => 
            array (
                'id' => 2806,
                'alerte_id' => 2008,
                'saisie_id' => 517,
                'valeur' => '10',
                'danger' => 1,
            ),
            1512 => 
            array (
                'id' => 2807,
                'alerte_id' => 2011,
                'saisie_id' => 517,
                'valeur' => '1',
                'danger' => 1,
            ),
            1513 => 
            array (
                'id' => 2808,
                'alerte_id' => 2012,
                'saisie_id' => 517,
                'valeur' => '38',
                'danger' => 1,
            ),
            1514 => 
            array (
                'id' => 2809,
                'alerte_id' => 2013,
                'saisie_id' => 517,
                'valeur' => '350',
                'danger' => 1,
            ),
            1515 => 
            array (
                'id' => 2810,
                'alerte_id' => 2014,
                'saisie_id' => 517,
                'valeur' => '40',
                'danger' => 1,
            ),
            1516 => 
            array (
                'id' => 2811,
                'alerte_id' => 2015,
                'saisie_id' => 517,
                'valeur' => '40',
                'danger' => 1,
            ),
            1517 => 
            array (
                'id' => 2812,
                'alerte_id' => 2017,
                'saisie_id' => 517,
                'valeur' => '20',
                'danger' => 1,
            ),
            1518 => 
            array (
                'id' => 2813,
                'alerte_id' => 2020,
                'saisie_id' => 517,
                'valeur' => '2',
                'danger' => 1,
            ),
            1519 => 
            array (
                'id' => 2814,
                'alerte_id' => 2021,
                'saisie_id' => 517,
                'valeur' => '2',
                'danger' => 1,
            ),
            1520 => 
            array (
                'id' => 2815,
                'alerte_id' => 2022,
                'saisie_id' => 517,
                'valeur' => '2',
                'danger' => 1,
            ),
            1521 => 
            array (
                'id' => 2816,
                'alerte_id' => 2023,
                'saisie_id' => 517,
                'valeur' => '2',
                'danger' => 1,
            ),
            1522 => 
            array (
                'id' => 2817,
                'alerte_id' => 2025,
                'saisie_id' => 517,
                'valeur' => '1',
                'danger' => 1,
            ),
            1523 => 
            array (
                'id' => 2818,
                'alerte_id' => 2036,
                'saisie_id' => 517,
                'valeur' => '10',
                'danger' => 1,
            ),
            1524 => 
            array (
                'id' => 2819,
                'alerte_id' => 2037,
                'saisie_id' => 517,
                'valeur' => '11',
                'danger' => 1,
            ),
            1525 => 
            array (
                'id' => 2820,
                'alerte_id' => 2043,
                'saisie_id' => 517,
                'valeur' => '1',
                'danger' => 1,
            ),
            1526 => 
            array (
                'id' => 2821,
                'alerte_id' => 2044,
                'saisie_id' => 517,
                'valeur' => '10',
                'danger' => 1,
            ),
            1527 => 
            array (
                'id' => 2822,
                'alerte_id' => 2047,
                'saisie_id' => 517,
                'valeur' => '1',
                'danger' => 1,
            ),
            1528 => 
            array (
                'id' => 2823,
                'alerte_id' => 2049,
                'saisie_id' => 517,
                'valeur' => '1',
                'danger' => 1,
            ),
            1529 => 
            array (
                'id' => 2824,
                'alerte_id' => 2051,
                'saisie_id' => 517,
                'valeur' => '10',
                'danger' => 1,
            ),
            1530 => 
            array (
                'id' => 2825,
                'alerte_id' => 2052,
                'saisie_id' => 517,
                'valeur' => '2',
                'danger' => 1,
            ),
            1531 => 
            array (
                'id' => 2826,
                'alerte_id' => 2053,
                'saisie_id' => 517,
                'valeur' => '10',
                'danger' => 1,
            ),
            1532 => 
            array (
                'id' => 2827,
                'alerte_id' => 2055,
                'saisie_id' => 517,
                'valeur' => '10',
                'danger' => 1,
            ),
            1533 => 
            array (
                'id' => 2828,
                'alerte_id' => 2056,
                'saisie_id' => 517,
                'valeur' => '10',
                'danger' => 1,
            ),
            1534 => 
            array (
                'id' => 2829,
                'alerte_id' => 2060,
                'saisie_id' => 517,
                'valeur' => '10',
                'danger' => 1,
            ),
            1535 => 
            array (
                'id' => 2832,
                'alerte_id' => 1015,
                'saisie_id' => 519,
                'valeur' => '412',
                'danger' => 1,
            ),
            1536 => 
            array (
                'id' => 2833,
                'alerte_id' => 1017,
                'saisie_id' => 519,
                'valeur' => '29',
                'danger' => 1,
            ),
            1537 => 
            array (
                'id' => 2834,
                'alerte_id' => 1025,
                'saisie_id' => 519,
                'valeur' => '15',
                'danger' => 1,
            ),
            1538 => 
            array (
                'id' => 2835,
                'alerte_id' => 1026,
                'saisie_id' => 519,
                'valeur' => '15',
                'danger' => 1,
            ),
            1539 => 
            array (
                'id' => 2851,
                'alerte_id' => 1038,
                'saisie_id' => 519,
                'valeur' => '20',
                'danger' => 1,
            ),
            1540 => 
            array (
                'id' => 2852,
                'alerte_id' => 1040,
                'saisie_id' => 519,
                'valeur' => '100',
                'danger' => 1,
            ),
            1541 => 
            array (
                'id' => 2853,
                'alerte_id' => 1043,
                'saisie_id' => 519,
                'valeur' => '1',
                'danger' => 1,
            ),
            1542 => 
            array (
                'id' => 2854,
                'alerte_id' => 1045,
                'saisie_id' => 519,
                'valeur' => '50',
                'danger' => 1,
            ),
            1543 => 
            array (
                'id' => 2855,
                'alerte_id' => 1048,
                'saisie_id' => 519,
                'valeur' => '7',
                'danger' => 1,
            ),
            1544 => 
            array (
                'id' => 2856,
                'alerte_id' => 1049,
                'saisie_id' => 519,
                'valeur' => '20',
                'danger' => 1,
            ),
            1545 => 
            array (
                'id' => 2857,
                'alerte_id' => 1001,
                'saisie_id' => 519,
                'valeur' => '1',
                'danger' => 1,
            ),
            1546 => 
            array (
                'id' => 2858,
                'alerte_id' => 1007,
                'saisie_id' => 519,
                'valeur' => '16',
                'danger' => 1,
            ),
            1547 => 
            array (
                'id' => 2882,
                'alerte_id' => 2004,
                'saisie_id' => 520,
                'valeur' => '1',
                'danger' => 1,
            ),
            1548 => 
            array (
                'id' => 2885,
                'alerte_id' => 2021,
                'saisie_id' => 520,
                'valeur' => '2',
                'danger' => 1,
            ),
            1549 => 
            array (
                'id' => 2886,
                'alerte_id' => 2036,
                'saisie_id' => 520,
                'valeur' => '17',
                'danger' => 1,
            ),
            1550 => 
            array (
                'id' => 2887,
                'alerte_id' => 2046,
                'saisie_id' => 520,
                'valeur' => '1',
                'danger' => 1,
            ),
            1551 => 
            array (
                'id' => 2888,
                'alerte_id' => 2047,
                'saisie_id' => 520,
                'valeur' => '1',
                'danger' => 1,
            ),
            1552 => 
            array (
                'id' => 2889,
                'alerte_id' => 2051,
                'saisie_id' => 520,
                'valeur' => '2',
                'danger' => 1,
            ),
            1553 => 
            array (
                'id' => 2890,
                'alerte_id' => 2054,
                'saisie_id' => 520,
                'valeur' => '1',
                'danger' => 1,
            ),
            1554 => 
            array (
                'id' => 2891,
                'alerte_id' => 2000,
                'saisie_id' => 523,
                'valeur' => '1',
                'danger' => 1,
            ),
            1555 => 
            array (
                'id' => 2892,
                'alerte_id' => 2001,
                'saisie_id' => 523,
                'valeur' => '10',
                'danger' => 1,
            ),
            1556 => 
            array (
                'id' => 2893,
                'alerte_id' => 2002,
                'saisie_id' => 523,
                'valeur' => '20',
                'danger' => 1,
            ),
            1557 => 
            array (
                'id' => 2894,
                'alerte_id' => 2004,
                'saisie_id' => 523,
                'valeur' => '1',
                'danger' => 1,
            ),
            1558 => 
            array (
                'id' => 2895,
                'alerte_id' => 2005,
                'saisie_id' => 523,
                'valeur' => '1',
                'danger' => 1,
            ),
            1559 => 
            array (
                'id' => 2896,
                'alerte_id' => 2010,
                'saisie_id' => 523,
                'valeur' => '100',
                'danger' => 1,
            ),
            1560 => 
            array (
                'id' => 2897,
                'alerte_id' => 2016,
                'saisie_id' => 523,
                'valeur' => '420',
                'danger' => 1,
            ),
            1561 => 
            array (
                'id' => 2898,
                'alerte_id' => 2020,
                'saisie_id' => 523,
                'valeur' => '3',
                'danger' => 1,
            ),
            1562 => 
            array (
                'id' => 2899,
                'alerte_id' => 2021,
                'saisie_id' => 523,
                'valeur' => '2',
                'danger' => 1,
            ),
            1563 => 
            array (
                'id' => 2900,
                'alerte_id' => 2025,
                'saisie_id' => 523,
                'valeur' => '1',
                'danger' => 1,
            ),
            1564 => 
            array (
                'id' => 2901,
                'alerte_id' => 2036,
                'saisie_id' => 523,
                'valeur' => '10',
                'danger' => 1,
            ),
            1565 => 
            array (
                'id' => 2902,
                'alerte_id' => 2044,
                'saisie_id' => 523,
                'valeur' => '15',
                'danger' => 1,
            ),
            1566 => 
            array (
                'id' => 2903,
                'alerte_id' => 2048,
                'saisie_id' => 523,
                'valeur' => '1',
                'danger' => 1,
            ),
            1567 => 
            array (
                'id' => 2904,
                'alerte_id' => 2049,
                'saisie_id' => 523,
                'valeur' => '1',
                'danger' => 1,
            ),
            1568 => 
            array (
                'id' => 2931,
                'alerte_id' => 2021,
                'saisie_id' => 531,
                'valeur' => '2',
                'danger' => 1,
            ),
            1569 => 
            array (
                'id' => 2932,
                'alerte_id' => 2032,
                'saisie_id' => 531,
                'valeur' => '12',
                'danger' => 1,
            ),
            1570 => 
            array (
                'id' => 2933,
                'alerte_id' => 2035,
                'saisie_id' => 531,
                'valeur' => '7',
                'danger' => 1,
            ),
            1571 => 
            array (
                'id' => 2934,
                'alerte_id' => 2036,
                'saisie_id' => 531,
                'valeur' => '11',
                'danger' => 1,
            ),
            1572 => 
            array (
                'id' => 2935,
                'alerte_id' => 2039,
                'saisie_id' => 531,
                'valeur' => '37',
                'danger' => 1,
            ),
            1573 => 
            array (
                'id' => 2936,
                'alerte_id' => 2040,
                'saisie_id' => 531,
                'valeur' => '10',
                'danger' => 1,
            ),
            1574 => 
            array (
                'id' => 2937,
                'alerte_id' => 2056,
                'saisie_id' => 531,
                'valeur' => '4',
                'danger' => 1,
            ),
            1575 => 
            array (
                'id' => 2938,
                'alerte_id' => 2057,
                'saisie_id' => 531,
                'valeur' => '20',
                'danger' => 1,
            ),
            1576 => 
            array (
                'id' => 2943,
                'alerte_id' => 2015,
                'saisie_id' => 531,
                'valeur' => '50',
                'danger' => 1,
            ),
            1577 => 
            array (
                'id' => 2944,
                'alerte_id' => 2018,
                'saisie_id' => 531,
                'valeur' => '33',
                'danger' => 1,
            ),
            1578 => 
            array (
                'id' => 2945,
                'alerte_id' => 2009,
                'saisie_id' => 531,
                'valeur' => '2',
                'danger' => 1,
            ),
            1579 => 
            array (
                'id' => 2946,
                'alerte_id' => 2010,
                'saisie_id' => 531,
                'valeur' => '180',
                'danger' => 1,
            ),
            1580 => 
            array (
                'id' => 2947,
                'alerte_id' => 2005,
                'saisie_id' => 526,
                'valeur' => '1',
                'danger' => 1,
            ),
            1581 => 
            array (
                'id' => 2948,
                'alerte_id' => 2008,
                'saisie_id' => 526,
                'valeur' => '7',
                'danger' => 1,
            ),
            1582 => 
            array (
                'id' => 2949,
                'alerte_id' => 2019,
                'saisie_id' => 526,
                'valeur' => '15',
                'danger' => 1,
            ),
            1583 => 
            array (
                'id' => 2950,
                'alerte_id' => 2020,
                'saisie_id' => 526,
                'valeur' => '8',
                'danger' => 1,
            ),
            1584 => 
            array (
                'id' => 2951,
                'alerte_id' => 2021,
                'saisie_id' => 526,
                'valeur' => '2',
                'danger' => 1,
            ),
            1585 => 
            array (
                'id' => 2952,
                'alerte_id' => 2039,
                'saisie_id' => 526,
                'valeur' => '30',
                'danger' => 1,
            ),
            1586 => 
            array (
                'id' => 2953,
                'alerte_id' => 2047,
                'saisie_id' => 526,
                'valeur' => '1',
                'danger' => 1,
            ),
            1587 => 
            array (
                'id' => 2955,
                'alerte_id' => 1043,
                'saisie_id' => 525,
                'valeur' => '5',
                'danger' => 1,
            ),
            1588 => 
            array (
                'id' => 2956,
                'alerte_id' => 1044,
                'saisie_id' => 525,
                'valeur' => '1',
                'danger' => 1,
            ),
            1589 => 
            array (
                'id' => 2957,
                'alerte_id' => 1045,
                'saisie_id' => 525,
                'valeur' => '1',
                'danger' => 1,
            ),
            1590 => 
            array (
                'id' => 2961,
                'alerte_id' => 2001,
                'saisie_id' => 521,
                'valeur' => '5',
                'danger' => 1,
            ),
            1591 => 
            array (
                'id' => 2962,
                'alerte_id' => 2008,
                'saisie_id' => 521,
                'valeur' => '6',
                'danger' => 1,
            ),
            1592 => 
            array (
                'id' => 2963,
                'alerte_id' => 2010,
                'saisie_id' => 521,
                'valeur' => '169',
                'danger' => 1,
            ),
            1593 => 
            array (
                'id' => 2967,
                'alerte_id' => 2007,
                'saisie_id' => 529,
                'valeur' => '15',
                'danger' => 1,
            ),
            1594 => 
            array (
                'id' => 2968,
                'alerte_id' => 2008,
                'saisie_id' => 529,
                'valeur' => '3',
                'danger' => 1,
            ),
            1595 => 
            array (
                'id' => 2969,
                'alerte_id' => 2010,
                'saisie_id' => 529,
                'valeur' => '120',
                'danger' => 1,
            ),
            1596 => 
            array (
                'id' => 2970,
                'alerte_id' => 2021,
                'saisie_id' => 529,
                'valeur' => '1',
                'danger' => 1,
            ),
            1597 => 
            array (
                'id' => 2971,
                'alerte_id' => 2022,
                'saisie_id' => 529,
                'valeur' => '1',
                'danger' => 1,
            ),
            1598 => 
            array (
                'id' => 2974,
                'alerte_id' => 2056,
                'saisie_id' => 529,
                'valeur' => '3',
                'danger' => 1,
            ),
            1599 => 
            array (
                'id' => 2978,
                'alerte_id' => 2016,
                'saisie_id' => 529,
                'valeur' => '410',
                'danger' => 1,
            ),
            1600 => 
            array (
                'id' => 2979,
                'alerte_id' => 2017,
                'saisie_id' => 529,
                'valeur' => '30',
                'danger' => 1,
            ),
            1601 => 
            array (
                'id' => 2980,
                'alerte_id' => 2054,
                'saisie_id' => 529,
                'valeur' => '1',
                'danger' => 1,
            ),
            1602 => 
            array (
                'id' => 2993,
                'alerte_id' => 2035,
                'saisie_id' => 521,
                'valeur' => '10',
                'danger' => 1,
            ),
            1603 => 
            array (
                'id' => 2994,
                'alerte_id' => 2021,
                'saisie_id' => 521,
                'valeur' => '1',
                'danger' => 1,
            ),
            1604 => 
            array (
                'id' => 2995,
                'alerte_id' => 2022,
                'saisie_id' => 521,
                'valeur' => '1',
                'danger' => 1,
            ),
            1605 => 
            array (
                'id' => 3000,
                'alerte_id' => 2014,
                'saisie_id' => 521,
                'valeur' => '26',
                'danger' => 1,
            ),
            1606 => 
            array (
                'id' => 3001,
                'alerte_id' => 4015,
                'saisie_id' => 528,
                'valeur' => '3',
                'danger' => 1,
            ),
            1607 => 
            array (
                'id' => 3002,
                'alerte_id' => 4017,
                'saisie_id' => 528,
                'valeur' => '10',
                'danger' => 1,
            ),
            1608 => 
            array (
                'id' => 3008,
                'alerte_id' => 4054,
                'saisie_id' => 528,
                'valeur' => '20',
                'danger' => 1,
            ),
            1609 => 
            array (
                'id' => 3010,
                'alerte_id' => 4011,
                'saisie_id' => 527,
                'valeur' => '90',
                'danger' => 1,
            ),
            1610 => 
            array (
                'id' => 3011,
                'alerte_id' => 4024,
                'saisie_id' => 527,
                'valeur' => '10',
                'danger' => 1,
            ),
            1611 => 
            array (
                'id' => 3012,
                'alerte_id' => 4025,
                'saisie_id' => 527,
                'valeur' => '10',
                'danger' => 1,
            ),
            1612 => 
            array (
                'id' => 3013,
                'alerte_id' => 4026,
                'saisie_id' => 527,
                'valeur' => '10',
                'danger' => 1,
            ),
            1613 => 
            array (
                'id' => 3014,
                'alerte_id' => 4027,
                'saisie_id' => 527,
                'valeur' => '10',
                'danger' => 1,
            ),
            1614 => 
            array (
                'id' => 3015,
                'alerte_id' => 4028,
                'saisie_id' => 527,
                'valeur' => '10',
                'danger' => 1,
            ),
            1615 => 
            array (
                'id' => 3016,
                'alerte_id' => 4029,
                'saisie_id' => 527,
                'valeur' => '10',
                'danger' => 1,
            ),
            1616 => 
            array (
                'id' => 3020,
                'alerte_id' => 4020,
                'saisie_id' => 527,
                'valeur' => '8',
                'danger' => 1,
            ),
            1617 => 
            array (
                'id' => 3021,
                'alerte_id' => 4021,
                'saisie_id' => 527,
                'valeur' => '8',
                'danger' => 1,
            ),
            1618 => 
            array (
                'id' => 3024,
                'alerte_id' => 4054,
                'saisie_id' => 527,
                'valeur' => '10',
                'danger' => 1,
            ),
            1619 => 
            array (
                'id' => 3025,
                'alerte_id' => 4057,
                'saisie_id' => 527,
                'valeur' => '5',
                'danger' => 1,
            ),
            1620 => 
            array (
                'id' => 3026,
                'alerte_id' => 4003,
                'saisie_id' => 527,
                'valeur' => '10',
                'danger' => 1,
            ),
            1621 => 
            array (
                'id' => 3027,
                'alerte_id' => 1003,
                'saisie_id' => 525,
                'valeur' => '5',
                'danger' => 1,
            ),
            1622 => 
            array (
                'id' => 3028,
                'alerte_id' => 1032,
                'saisie_id' => 525,
                'valeur' => '100',
                'danger' => 1,
            ),
            1623 => 
            array (
                'id' => 3031,
                'alerte_id' => 2036,
                'saisie_id' => 529,
                'valeur' => '15',
                'danger' => 1,
            ),
            1624 => 
            array (
                'id' => 3032,
                'alerte_id' => 2039,
                'saisie_id' => 529,
                'valeur' => '20',
                'danger' => 1,
            ),
            1625 => 
            array (
                'id' => 3033,
                'alerte_id' => 4000,
                'saisie_id' => 528,
                'valeur' => '1',
                'danger' => 1,
            ),
            1626 => 
            array (
                'id' => 3034,
                'alerte_id' => 4003,
                'saisie_id' => 528,
                'valeur' => '10',
                'danger' => 1,
            ),
            1627 => 
            array (
                'id' => 3035,
                'alerte_id' => 4005,
                'saisie_id' => 528,
                'valeur' => '20',
                'danger' => 1,
            ),
            1628 => 
            array (
                'id' => 3036,
                'alerte_id' => 4008,
                'saisie_id' => 528,
                'valeur' => '5',
                'danger' => 1,
            ),
            1629 => 
            array (
                'id' => 3037,
                'alerte_id' => 4025,
                'saisie_id' => 528,
                'valeur' => '15',
                'danger' => 1,
            ),
            1630 => 
            array (
                'id' => 3038,
                'alerte_id' => 4026,
                'saisie_id' => 528,
                'valeur' => '15',
                'danger' => 1,
            ),
            1631 => 
            array (
                'id' => 3039,
                'alerte_id' => 2055,
                'saisie_id' => 521,
                'valeur' => '25',
                'danger' => 1,
            ),
            1632 => 
            array (
                'id' => 3040,
                'alerte_id' => 2056,
                'saisie_id' => 521,
                'valeur' => '6',
                'danger' => 1,
            ),
            1633 => 
            array (
                'id' => 3041,
                'alerte_id' => 2057,
                'saisie_id' => 521,
                'valeur' => '25',
                'danger' => 1,
            ),
            1634 => 
            array (
                'id' => 3063,
                'alerte_id' => 2014,
                'saisie_id' => 532,
                'valeur' => '29',
                'danger' => 1,
            ),
            1635 => 
            array (
                'id' => 3064,
                'alerte_id' => 2015,
                'saisie_id' => 532,
                'valeur' => '48',
                'danger' => 1,
            ),
            1636 => 
            array (
                'id' => 3065,
                'alerte_id' => 2017,
                'saisie_id' => 532,
                'valeur' => '11',
                'danger' => 1,
            ),
            1637 => 
            array (
                'id' => 3066,
                'alerte_id' => 2020,
                'saisie_id' => 532,
                'valeur' => '3',
                'danger' => 1,
            ),
            1638 => 
            array (
                'id' => 3067,
                'alerte_id' => 2000,
                'saisie_id' => 532,
                'valeur' => '1',
                'danger' => 1,
            ),
            1639 => 
            array (
                'id' => 3068,
                'alerte_id' => 2001,
                'saisie_id' => 532,
                'valeur' => '3',
                'danger' => 1,
            ),
            1640 => 
            array (
                'id' => 3069,
                'alerte_id' => 2008,
                'saisie_id' => 532,
                'valeur' => '3',
                'danger' => 1,
            ),
            1641 => 
            array (
                'id' => 3070,
                'alerte_id' => 2010,
                'saisie_id' => 532,
                'valeur' => '104',
                'danger' => 1,
            ),
            1642 => 
            array (
                'id' => 3071,
                'alerte_id' => 2021,
                'saisie_id' => 532,
                'valeur' => '4',
                'danger' => 1,
            ),
            1643 => 
            array (
                'id' => 3072,
                'alerte_id' => 2035,
                'saisie_id' => 532,
                'valeur' => '11',
                'danger' => 1,
            ),
            1644 => 
            array (
                'id' => 3073,
                'alerte_id' => 2046,
                'saisie_id' => 532,
                'valeur' => '1',
                'danger' => 1,
            ),
            1645 => 
            array (
                'id' => 3074,
                'alerte_id' => 2052,
                'saisie_id' => 532,
                'valeur' => '3',
                'danger' => 1,
            ),
            1646 => 
            array (
                'id' => 3075,
                'alerte_id' => 2054,
                'saisie_id' => 532,
                'valeur' => '1',
                'danger' => 1,
            ),
            1647 => 
            array (
                'id' => 3076,
                'alerte_id' => 2055,
                'saisie_id' => 532,
                'valeur' => '6',
                'danger' => 1,
            ),
            1648 => 
            array (
                'id' => 3077,
                'alerte_id' => 2056,
                'saisie_id' => 532,
                'valeur' => '4',
                'danger' => 1,
            ),
            1649 => 
            array (
                'id' => 3078,
                'alerte_id' => 2057,
                'saisie_id' => 532,
                'valeur' => '17',
                'danger' => 1,
            ),
            1650 => 
            array (
                'id' => 3079,
                'alerte_id' => 2001,
                'saisie_id' => 539,
                'valeur' => '3',
                'danger' => 1,
            ),
            1651 => 
            array (
                'id' => 3080,
                'alerte_id' => 2004,
                'saisie_id' => 539,
                'valeur' => '1',
                'danger' => 1,
            ),
            1652 => 
            array (
                'id' => 3083,
                'alerte_id' => 2020,
                'saisie_id' => 539,
                'valeur' => '4',
                'danger' => 1,
            ),
            1653 => 
            array (
                'id' => 3084,
                'alerte_id' => 2033,
                'saisie_id' => 539,
                'valeur' => '14',
                'danger' => 1,
            ),
            1654 => 
            array (
                'id' => 3085,
                'alerte_id' => 2038,
                'saisie_id' => 539,
                'valeur' => '17',
                'danger' => 1,
            ),
            1655 => 
            array (
                'id' => 3086,
                'alerte_id' => 2051,
                'saisie_id' => 539,
                'valeur' => '1',
                'danger' => 1,
            ),
            1656 => 
            array (
                'id' => 3087,
                'alerte_id' => 2052,
                'saisie_id' => 539,
                'valeur' => '3',
                'danger' => 1,
            ),
            1657 => 
            array (
                'id' => 3088,
                'alerte_id' => 2054,
                'saisie_id' => 539,
                'valeur' => '1',
                'danger' => 1,
            ),
            1658 => 
            array (
                'id' => 3089,
                'alerte_id' => 2057,
                'saisie_id' => 539,
                'valeur' => '17',
                'danger' => 1,
            ),
            1659 => 
            array (
                'id' => 3090,
                'alerte_id' => 2058,
                'saisie_id' => 539,
                'valeur' => '21',
                'danger' => 1,
            ),
            1660 => 
            array (
                'id' => 3095,
                'alerte_id' => 2017,
                'saisie_id' => 540,
                'valeur' => '14',
                'danger' => 1,
            ),
            1661 => 
            array (
                'id' => 3096,
                'alerte_id' => 2020,
                'saisie_id' => 540,
                'valeur' => '4',
                'danger' => 1,
            ),
            1662 => 
            array (
                'id' => 3097,
                'alerte_id' => 2021,
                'saisie_id' => 540,
                'valeur' => '4',
                'danger' => 1,
            ),
            1663 => 
            array (
                'id' => 3098,
                'alerte_id' => 2030,
                'saisie_id' => 540,
                'valeur' => '300000',
                'danger' => 1,
            ),
            1664 => 
            array (
                'id' => 3099,
                'alerte_id' => 2031,
                'saisie_id' => 540,
                'valeur' => '47',
                'danger' => 1,
            ),
            1665 => 
            array (
                'id' => 3100,
                'alerte_id' => 2039,
                'saisie_id' => 540,
                'valeur' => '25',
                'danger' => 1,
            ),
            1666 => 
            array (
                'id' => 3101,
                'alerte_id' => 2040,
                'saisie_id' => 540,
                'valeur' => '7',
                'danger' => 1,
            ),
            1667 => 
            array (
                'id' => 3102,
                'alerte_id' => 2046,
                'saisie_id' => 540,
                'valeur' => '1',
                'danger' => 1,
            ),
            1668 => 
            array (
                'id' => 3103,
                'alerte_id' => 2047,
                'saisie_id' => 540,
                'valeur' => '1',
                'danger' => 1,
            ),
            1669 => 
            array (
                'id' => 3104,
                'alerte_id' => 2048,
                'saisie_id' => 540,
                'valeur' => '1',
                'danger' => 1,
            ),
            1670 => 
            array (
                'id' => 3105,
                'alerte_id' => 2054,
                'saisie_id' => 540,
                'valeur' => '1',
                'danger' => 1,
            ),
            1671 => 
            array (
                'id' => 3106,
                'alerte_id' => 2055,
                'saisie_id' => 540,
                'valeur' => '7',
                'danger' => 1,
            ),
            1672 => 
            array (
                'id' => 3107,
                'alerte_id' => 2056,
                'saisie_id' => 540,
                'valeur' => '2',
                'danger' => 1,
            ),
            1673 => 
            array (
                'id' => 3112,
                'alerte_id' => 2015,
                'saisie_id' => 520,
                'valeur' => '43',
                'danger' => 1,
            ),
            1674 => 
            array (
                'id' => 3113,
                'alerte_id' => 2020,
                'saisie_id' => 520,
                'valeur' => '2',
                'danger' => 1,
            ),
            1675 => 
            array (
                'id' => 3118,
                'alerte_id' => 2004,
                'saisie_id' => 540,
                'valeur' => '2',
                'danger' => 1,
            ),
            1676 => 
            array (
                'id' => 3119,
                'alerte_id' => 2006,
                'saisie_id' => 540,
                'valeur' => '37',
                'danger' => 1,
            ),
            1677 => 
            array (
                'id' => 3120,
                'alerte_id' => 2007,
                'saisie_id' => 540,
                'valeur' => '25',
                'danger' => 1,
            ),
            1678 => 
            array (
                'id' => 3121,
                'alerte_id' => 2010,
                'saisie_id' => 540,
                'valeur' => '141',
                'danger' => 1,
            ),
            1679 => 
            array (
                'id' => 3122,
                'alerte_id' => 2030,
                'saisie_id' => 541,
                'valeur' => '300000',
                'danger' => 1,
            ),
            1680 => 
            array (
                'id' => 3123,
                'alerte_id' => 2034,
                'saisie_id' => 541,
                'valeur' => '3',
                'danger' => 1,
            ),
            1681 => 
            array (
                'id' => 3124,
                'alerte_id' => 2060,
                'saisie_id' => 541,
                'valeur' => '1',
                'danger' => 1,
            ),
            1682 => 
            array (
                'id' => 3125,
                'alerte_id' => 2061,
                'saisie_id' => 541,
                'valeur' => '1',
                'danger' => 1,
            ),
            1683 => 
            array (
                'id' => 3126,
                'alerte_id' => 2004,
                'saisie_id' => 541,
                'valeur' => '1',
                'danger' => 1,
            ),
            1684 => 
            array (
                'id' => 3145,
                'alerte_id' => 2046,
                'saisie_id' => 554,
                'valeur' => '1',
                'danger' => 1,
            ),
            1685 => 
            array (
                'id' => 3163,
                'alerte_id' => 2035,
                'saisie_id' => 544,
                'valeur' => '15',
                'danger' => 1,
            ),
            1686 => 
            array (
                'id' => 3179,
                'alerte_id' => 2035,
                'saisie_id' => 554,
                'valeur' => '14',
                'danger' => 1,
            ),
            1687 => 
            array (
                'id' => 3182,
                'alerte_id' => 2001,
                'saisie_id' => 554,
                'valeur' => '4',
                'danger' => 1,
            ),
            1688 => 
            array (
                'id' => 3223,
                'alerte_id' => 2013,
                'saisie_id' => 544,
                'valeur' => '98',
                'danger' => 1,
            ),
            1689 => 
            array (
                'id' => 3224,
                'alerte_id' => 2015,
                'saisie_id' => 544,
                'valeur' => '40',
                'danger' => 1,
            ),
            1690 => 
            array (
                'id' => 3225,
                'alerte_id' => 2016,
                'saisie_id' => 544,
                'valeur' => '410',
                'danger' => 1,
            ),
            1691 => 
            array (
                'id' => 3226,
                'alerte_id' => 2018,
                'saisie_id' => 544,
                'valeur' => '28',
                'danger' => 1,
            ),
            1692 => 
            array (
                'id' => 3227,
                'alerte_id' => 2020,
                'saisie_id' => 544,
                'valeur' => '4',
                'danger' => 1,
            ),
        ));
        
        
    }
}