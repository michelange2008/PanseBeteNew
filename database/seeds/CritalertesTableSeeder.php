<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CritalertesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('critalertes')->delete();
        
        \DB::table('critalertes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'alerte_id' => 1001,
                'nom' => 'non',
                'valeur' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'alerte_id' => 1001,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'alerte_id' => 1002,
                'nom' => 'propre',
                'valeur' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'alerte_id' => 1002,
                'nom' => 'peu sale',
                'valeur' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'alerte_id' => 1002,
                'nom' => 'sale',
                'valeur' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'alerte_id' => 1002,
                'nom' => 'très sale',
                'valeur' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'alerte_id' => 1012,
                'nom' => 'bon état d\'engraissement',
                'valeur' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'alerte_id' => 1012,
                'nom' => 'en voie d\'amaigrissement',
                'valeur' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'alerte_id' => 1012,
                'nom' => 'maigre',
                'valeur' => 3,
            ),
            9 => 
            array (
                'id' => 11,
                'alerte_id' => 1018,
                'nom' => 'normal',
                'valeur' => 1,
            ),
            10 => 
            array (
                'id' => 12,
                'alerte_id' => 1018,
                'nom' => 'plus gros',
                'valeur' => 2,
            ),
            11 => 
            array (
                'id' => 13,
                'alerte_id' => 1021,
                'nom' => 'normales',
                'valeur' => 0,
            ),
            12 => 
            array (
                'id' => 14,
                'alerte_id' => 1021,
                'nom' => 'liquide',
                'valeur' => 1,
            ),
            13 => 
            array (
                'id' => 15,
                'alerte_id' => 1021,
                'nom' => 'liquides + fibres',
                'valeur' => 2,
            ),
            14 => 
            array (
                'id' => 16,
                'alerte_id' => 1021,
                'nom' => 'liquides + grains',
                'valeur' => 3,
            ),
            15 => 
            array (
                'id' => 17,
                'alerte_id' => 3000,
                'nom' => 'Moyen et homogène',
                'valeur' => 0,
            ),
            16 => 
            array (
                'id' => 18,
                'alerte_id' => 3000,
                'nom' => 'Maigre et/ou hétérogène',
                'valeur' => 1,
            ),
            17 => 
            array (
                'id' => 19,
                'alerte_id' => 3000,
                'nom' => 'Gras et/ou hétérogène',
                'valeur' => 2,
            ),
            18 => 
            array (
                'id' => 20,
                'alerte_id' => 3001,
                'nom' => 'propre',
                'valeur' => 0,
            ),
            19 => 
            array (
                'id' => 21,
                'alerte_id' => 3001,
                'nom' => 'sale',
                'valeur' => 1,
            ),
            20 => 
            array (
                'id' => 22,
                'alerte_id' => 3001,
                'nom' => 'très sale',
                'valeur' => 2,
            ),
            21 => 
            array (
                'id' => 23,
                'alerte_id' => 3013,
                'nom' => 'oui',
                'valeur' => 0,
            ),
            22 => 
            array (
                'id' => 24,
                'alerte_id' => 3013,
                'nom' => 'non',
                'valeur' => 1,
            ),
            23 => 
            array (
                'id' => 25,
                'alerte_id' => 3006,
                'nom' => 'plus de 2/3',
                'valeur' => 0,
            ),
            24 => 
            array (
                'id' => 26,
                'alerte_id' => 3006,
                'nom' => 'moins de 2/3',
                'valeur' => 1,
            ),
            25 => 
            array (
                'id' => 27,
                'alerte_id' => 3041,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            26 => 
            array (
                'id' => 28,
                'alerte_id' => 3041,
                'nom' => 'non',
                'valeur' => 0,
            ),
            27 => 
            array (
                'id' => 29,
                'alerte_id' => 3042,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            28 => 
            array (
                'id' => 30,
                'alerte_id' => 3042,
                'nom' => 'non',
                'valeur' => 0,
            ),
            29 => 
            array (
                'id' => 33,
                'alerte_id' => 3044,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            30 => 
            array (
                'id' => 34,
                'alerte_id' => 3044,
                'nom' => 'non',
                'valeur' => 0,
            ),
            31 => 
            array (
                'id' => 35,
                'alerte_id' => 3045,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            32 => 
            array (
                'id' => 36,
                'alerte_id' => 3045,
                'nom' => 'non',
                'valeur' => 0,
            ),
            33 => 
            array (
                'id' => 37,
                'alerte_id' => 3046,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            34 => 
            array (
                'id' => 38,
                'alerte_id' => 3046,
                'nom' => 'non',
                'valeur' => 0,
            ),
            35 => 
            array (
                'id' => 39,
                'alerte_id' => 3047,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            36 => 
            array (
                'id' => 40,
                'alerte_id' => 3047,
                'nom' => 'non',
                'valeur' => 0,
            ),
            37 => 
            array (
                'id' => 41,
                'alerte_id' => 3020,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            38 => 
            array (
                'id' => 42,
                'alerte_id' => 3020,
                'nom' => 'non',
                'valeur' => 0,
            ),
            39 => 
            array (
                'id' => 43,
                'alerte_id' => 3021,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            40 => 
            array (
                'id' => 44,
                'alerte_id' => 3021,
                'nom' => 'non',
                'valeur' => 0,
            ),
            41 => 
            array (
                'id' => 45,
                'alerte_id' => 3022,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            42 => 
            array (
                'id' => 46,
                'alerte_id' => 3022,
                'nom' => 'non',
                'valeur' => 0,
            ),
            43 => 
            array (
                'id' => 47,
                'alerte_id' => 3049,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            44 => 
            array (
                'id' => 48,
                'alerte_id' => 3049,
                'nom' => 'non',
                'valeur' => 0,
            ),
            45 => 
            array (
                'id' => 49,
                'alerte_id' => 3039,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            46 => 
            array (
                'id' => 50,
                'alerte_id' => 3039,
                'nom' => 'non',
                'valeur' => 0,
            ),
            47 => 
            array (
                'id' => 51,
                'alerte_id' => 3040,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            48 => 
            array (
                'id' => 52,
                'alerte_id' => 3040,
                'nom' => 'non',
                'valeur' => 0,
            ),
            49 => 
            array (
                'id' => 53,
                'alerte_id' => 3050,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            50 => 
            array (
                'id' => 54,
                'alerte_id' => 3050,
                'nom' => 'non',
                'valeur' => 0,
            ),
            51 => 
            array (
                'id' => 55,
                'alerte_id' => 3051,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            52 => 
            array (
                'id' => 56,
                'alerte_id' => 3051,
                'nom' => 'non',
                'valeur' => 0,
            ),
            53 => 
            array (
                'id' => 57,
                'alerte_id' => 2000,
                'nom' => 'Homogène',
                'valeur' => 0,
            ),
            54 => 
            array (
                'id' => 58,
                'alerte_id' => 2000,
                'nom' => 'Hétérogène',
                'valeur' => 1,
            ),
            55 => 
            array (
                'id' => 59,
                'alerte_id' => 2004,
                'nom' => 'Propre',
                'valeur' => 0,
            ),
            56 => 
            array (
                'id' => 60,
                'alerte_id' => 2004,
                'nom' => 'Sale',
                'valeur' => 1,
            ),
            57 => 
            array (
                'id' => 61,
                'alerte_id' => 2004,
                'nom' => 'Très sale',
                'valeur' => 2,
            ),
            58 => 
            array (
                'id' => 62,
                'alerte_id' => 2005,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            59 => 
            array (
                'id' => 63,
                'alerte_id' => 2005,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            60 => 
            array (
                'id' => 64,
                'alerte_id' => 2041,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            61 => 
            array (
                'id' => 65,
                'alerte_id' => 2041,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            62 => 
            array (
                'id' => 66,
                'alerte_id' => 2043,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            63 => 
            array (
                'id' => 67,
                'alerte_id' => 2043,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            64 => 
            array (
                'id' => 68,
                'alerte_id' => 2046,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            65 => 
            array (
                'id' => 69,
                'alerte_id' => 2046,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            66 => 
            array (
                'id' => 70,
                'alerte_id' => 2047,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            67 => 
            array (
                'id' => 71,
                'alerte_id' => 2047,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            68 => 
            array (
                'id' => 72,
                'alerte_id' => 2048,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            69 => 
            array (
                'id' => 73,
                'alerte_id' => 2048,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            70 => 
            array (
                'id' => 74,
                'alerte_id' => 2050,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            71 => 
            array (
                'id' => 75,
                'alerte_id' => 2050,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            72 => 
            array (
                'id' => 76,
                'alerte_id' => 2054,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            73 => 
            array (
                'id' => 77,
                'alerte_id' => 2054,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            74 => 
            array (
                'id' => 78,
                'alerte_id' => 4000,
                'nom' => 'homogène et état normal',
                'valeur' => 0,
            ),
            75 => 
            array (
                'id' => 79,
                'alerte_id' => 4000,
                'nom' => 'hétérogène et trop maigres ou trop gras',
                'valeur' => 1,
            ),
            76 => 
            array (
                'id' => 80,
                'alerte_id' => 4001,
                'nom' => 'propres',
                'valeur' => 0,
            ),
            77 => 
            array (
                'id' => 81,
                'alerte_id' => 4001,
                'nom' => 'sales',
                'valeur' => 1,
            ),
            78 => 
            array (
                'id' => 82,
                'alerte_id' => 4001,
                'nom' => 'très sales',
                'valeur' => 2,
            ),
            79 => 
            array (
                'id' => 83,
                'alerte_id' => 4014,
                'nom' => 'non',
                'valeur' => 0,
            ),
            80 => 
            array (
                'id' => 84,
                'alerte_id' => 4014,
                'nom' => 'oui',
                'valeur' => 1,
            ),
            81 => 
            array (
                'id' => 85,
                'alerte_id' => 4023,
            'nom' => 'moins de 10 % (prolif faible)',
                'valeur' => 0,
            ),
            82 => 
            array (
                'id' => 86,
                'alerte_id' => 4023,
            'nom' => 'moins de 15 % (prolificité élevée)',
                'valeur' => 1,
            ),
            83 => 
            array (
                'id' => 87,
                'alerte_id' => 4023,
            'nom' => 'plus de 10 % (prolif faible)',
                'valeur' => 2,
            ),
            84 => 
            array (
                'id' => 88,
                'alerte_id' => 4023,
                'nom' => 'plus de 15 %',
                'valeur' => 3,
            ),
            85 => 
            array (
                'id' => 89,
                'alerte_id' => 4048,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            86 => 
            array (
                'id' => 90,
                'alerte_id' => 4048,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            87 => 
            array (
                'id' => 91,
                'alerte_id' => 4049,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            88 => 
            array (
                'id' => 92,
                'alerte_id' => 4049,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            89 => 
            array (
                'id' => 93,
                'alerte_id' => 4050,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            90 => 
            array (
                'id' => 94,
                'alerte_id' => 4050,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            91 => 
            array (
                'id' => 95,
                'alerte_id' => 4051,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            92 => 
            array (
                'id' => 96,
                'alerte_id' => 4051,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            93 => 
            array (
                'id' => 97,
                'alerte_id' => 4052,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            94 => 
            array (
                'id' => 98,
                'alerte_id' => 4052,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            95 => 
            array (
                'id' => 99,
                'alerte_id' => 4053,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            96 => 
            array (
                'id' => 100,
                'alerte_id' => 4053,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            97 => 
            array (
                'id' => 101,
                'alerte_id' => 5000,
                'nom' => 'homogène et état normal',
                'valeur' => 0,
            ),
            98 => 
            array (
                'id' => 102,
                'alerte_id' => 5000,
                'nom' => 'hétérogène et trop maigres ou trop gras',
                'valeur' => 1,
            ),
            99 => 
            array (
                'id' => 103,
                'alerte_id' => 5001,
                'nom' => 'propres',
                'valeur' => 0,
            ),
            100 => 
            array (
                'id' => 104,
                'alerte_id' => 5001,
                'nom' => 'sales',
                'valeur' => 1,
            ),
            101 => 
            array (
                'id' => 105,
                'alerte_id' => 5001,
                'nom' => 'très sales',
                'valeur' => 2,
            ),
            102 => 
            array (
                'id' => 106,
                'alerte_id' => 5006,
                'nom' => '> 2/3 du poids des adultes',
                'valeur' => 0,
            ),
            103 => 
            array (
                'id' => 107,
                'alerte_id' => 5006,
                'nom' => '< 2/3 du poids des adultes',
                'valeur' => 1,
            ),
            104 => 
            array (
                'id' => 108,
                'alerte_id' => 5016,
            'nom' => 'moins de 2 % (toutes races)',
                'valeur' => 0,
            ),
            105 => 
            array (
                'id' => 109,
                'alerte_id' => 5016,
                'nom' => '2 à 5 % en race herbagère',
                'valeur' => 1,
            ),
            106 => 
            array (
                'id' => 110,
                'alerte_id' => 5016,
                'nom' => '2 à 5 % en race rustique',
                'valeur' => 2,
            ),
            107 => 
            array (
                'id' => 111,
                'alerte_id' => 5016,
            'nom' => 'plus de 5 % (toutes races)',
                'valeur' => 3,
            ),
            108 => 
            array (
                'id' => 112,
                'alerte_id' => 5017,
                'nom' => '> 90 % de la moyenne de la race',
                'valeur' => 0,
            ),
            109 => 
            array (
                'id' => 113,
                'alerte_id' => 5017,
                'nom' => '< 90 % de la moyenne de la race',
                'valeur' => 1,
            ),
            110 => 
            array (
                'id' => 114,
                'alerte_id' => 5021,
                'nom' => 'absence',
                'valeur' => 0,
            ),
            111 => 
            array (
                'id' => 115,
                'alerte_id' => 5021,
                'nom' => 'présence',
                'valeur' => 1,
            ),
            112 => 
            array (
                'id' => 116,
                'alerte_id' => 5022,
                'nom' => 'absence',
                'valeur' => 0,
            ),
            113 => 
            array (
                'id' => 117,
                'alerte_id' => 5022,
                'nom' => 'présence',
                'valeur' => 1,
            ),
            114 => 
            array (
                'id' => 118,
                'alerte_id' => 5023,
                'nom' => 'absence',
                'valeur' => 0,
            ),
            115 => 
            array (
                'id' => 119,
                'alerte_id' => 5023,
                'nom' => 'présence',
                'valeur' => 1,
            ),
            116 => 
            array (
                'id' => 120,
                'alerte_id' => 5052,
                'nom' => 'Absence',
                'valeur' => 0,
            ),
            117 => 
            array (
                'id' => 121,
                'alerte_id' => 5052,
                'nom' => 'Touche parfois quelques animaux',
                'valeur' => 1,
            ),
            118 => 
            array (
                'id' => 122,
                'alerte_id' => 5052,
                'nom' => 'Nombreux animaux atteints',
                'valeur' => 2,
            ),
            119 => 
            array (
                'id' => 123,
                'alerte_id' => 5052,
                'nom' => 'Mortalité régulière due au parasites',
                'valeur' => 3,
            ),
            120 => 
            array (
                'id' => 124,
                'alerte_id' => 5053,
                'nom' => 'Absence',
                'valeur' => 0,
            ),
            121 => 
            array (
                'id' => 125,
                'alerte_id' => 5053,
                'nom' => 'Touche parfois quelques animaux',
                'valeur' => 1,
            ),
            122 => 
            array (
                'id' => 126,
                'alerte_id' => 5053,
                'nom' => 'Nombreux animaux atteints',
                'valeur' => 2,
            ),
            123 => 
            array (
                'id' => 127,
                'alerte_id' => 5053,
                'nom' => 'Mortalité régulière due au parasites',
                'valeur' => 3,
            ),
            124 => 
            array (
                'id' => 128,
                'alerte_id' => 5054,
                'nom' => 'Absence',
                'valeur' => 0,
            ),
            125 => 
            array (
                'id' => 129,
                'alerte_id' => 5054,
                'nom' => 'Touche parfois quelques animaux',
                'valeur' => 1,
            ),
            126 => 
            array (
                'id' => 130,
                'alerte_id' => 5054,
                'nom' => 'Nombreux animaux atteints',
                'valeur' => 2,
            ),
            127 => 
            array (
                'id' => 131,
                'alerte_id' => 5054,
                'nom' => 'Mortalité régulière due au parasites',
                'valeur' => 3,
            ),
            128 => 
            array (
                'id' => 132,
                'alerte_id' => 5055,
                'nom' => 'Absence',
                'valeur' => 0,
            ),
            129 => 
            array (
                'id' => 133,
                'alerte_id' => 5055,
                'nom' => 'Touche parfois quelques animaux',
                'valeur' => 1,
            ),
            130 => 
            array (
                'id' => 134,
                'alerte_id' => 5055,
                'nom' => 'Nombreux animaux atteints',
                'valeur' => 2,
            ),
            131 => 
            array (
                'id' => 135,
                'alerte_id' => 5055,
                'nom' => 'Mortalité régulière due au parasites',
                'valeur' => 3,
            ),
            132 => 
            array (
                'id' => 136,
                'alerte_id' => 5056,
                'nom' => 'Absence',
                'valeur' => 0,
            ),
            133 => 
            array (
                'id' => 137,
                'alerte_id' => 5056,
                'nom' => 'Touche parfois quelques animaux',
                'valeur' => 1,
            ),
            134 => 
            array (
                'id' => 138,
                'alerte_id' => 5056,
                'nom' => 'Nombreux animaux atteints',
                'valeur' => 2,
            ),
            135 => 
            array (
                'id' => 139,
                'alerte_id' => 5056,
                'nom' => 'Mortalité régulière due au parasites',
                'valeur' => 3,
            ),
            136 => 
            array (
                'id' => 140,
                'alerte_id' => 5057,
                'nom' => 'Absence',
                'valeur' => 0,
            ),
            137 => 
            array (
                'id' => 141,
                'alerte_id' => 5057,
                'nom' => 'Touche parfois quelques animaux',
                'valeur' => 1,
            ),
            138 => 
            array (
                'id' => 142,
                'alerte_id' => 5057,
                'nom' => 'Nombreux animaux atteints',
                'valeur' => 2,
            ),
            139 => 
            array (
                'id' => 143,
                'alerte_id' => 5057,
                'nom' => 'Mortalité régulière due au parasites',
                'valeur' => 3,
            ),
            140 => 
            array (
                'id' => 146,
                'alerte_id' => 3035,
                'nom' => 'Cohérent avec l\'objectif',
                'valeur' => 0,
            ),
            141 => 
            array (
                'id' => 147,
                'alerte_id' => 3035,
                'nom' => 'Non cohérent avec l\'objectif',
                'valeur' => 1,
            ),
            142 => 
            array (
                'id' => 148,
                'alerte_id' => 3036,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            143 => 
            array (
                'id' => 149,
                'alerte_id' => 3036,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            144 => 
            array (
                'id' => 150,
                'alerte_id' => 3037,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            145 => 
            array (
                'id' => 151,
                'alerte_id' => 3037,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            146 => 
            array (
                'id' => 152,
                'alerte_id' => 3048,
                'nom' => 'Non',
                'valeur' => 0,
            ),
            147 => 
            array (
                'id' => 153,
                'alerte_id' => 3048,
                'nom' => 'Oui',
                'valeur' => 1,
            ),
            148 => 
            array (
                'id' => 154,
                'alerte_id' => 3034,
                'nom' => '17 kg ou plus',
                'valeur' => 0,
            ),
            149 => 
            array (
                'id' => 155,
                'alerte_id' => 3034,
                'nom' => 'moins de 17 kg',
                'valeur' => 1,
            ),
            150 => 
            array (
                'id' => 156,
                'alerte_id' => 3010,
                'nom' => 'Plus de 90%',
                'valeur' => 0,
            ),
            151 => 
            array (
                'id' => 157,
                'alerte_id' => 3010,
                'nom' => 'Moins de 90%',
                'valeur' => 1,
            ),
            152 => 
            array (
                'id' => 158,
                'alerte_id' => 1011,
                'nom' => 'Plus de 70% du poids adulte',
                'valeur' => 0,
            ),
            153 => 
            array (
                'id' => 159,
                'alerte_id' => 1011,
                'nom' => 'Moins de 70% du poids adulte',
                'valeur' => 1,
            ),
            154 => 
            array (
                'id' => 160,
                'alerte_id' => 1013,
                'nom' => 'Plus de 70%',
                'valeur' => 0,
            ),
            155 => 
            array (
                'id' => 161,
                'alerte_id' => 1013,
                'nom' => 'Moins de 70%',
                'valeur' => 1,
            ),
            156 => 
            array (
                'id' => 162,
                'alerte_id' => 1027,
                'nom' => 'Plus de 800 g/jour',
                'valeur' => 0,
            ),
            157 => 
            array (
                'id' => 163,
                'alerte_id' => 1027,
                'nom' => 'Moins de 800 g/jour',
                'valeur' => 1,
            ),
            158 => 
            array (
                'id' => 164,
                'alerte_id' => 1034,
                'nom' => 'absent ou rare et sporadique',
                'valeur' => 0,
            ),
            159 => 
            array (
                'id' => 165,
                'alerte_id' => 1034,
                'nom' => 'Fréquent sur plusieurs animaux',
                'valeur' => 1,
            ),
            160 => 
            array (
                'id' => 166,
                'alerte_id' => 1035,
                'nom' => 'Absent ou rare et sporadique',
                'valeur' => 0,
            ),
            161 => 
            array (
                'id' => 167,
                'alerte_id' => 1035,
                'nom' => 'Fréquent sur plusieurs animaux',
                'valeur' => 1,
            ),
            162 => 
            array (
                'id' => 168,
                'alerte_id' => 2011,
                'nom' => 'Plus de 60%',
                'valeur' => 0,
            ),
            163 => 
            array (
                'id' => 169,
                'alerte_id' => 2011,
                'nom' => 'Moins de 60%',
                'valeur' => 1,
            ),
            164 => 
            array (
                'id' => 170,
                'alerte_id' => 2049,
                'nom' => 'Dix mois ou plus',
                'valeur' => 0,
            ),
            165 => 
            array (
                'id' => 171,
                'alerte_id' => 2049,
                'nom' => 'Moins de 10 mois',
                'valeur' => 1,
            ),
            166 => 
            array (
                'id' => 172,
                'alerte_id' => 4006,
                'nom' => 'Plus de 2/3 du poids adulte',
                'valeur' => 0,
            ),
            167 => 
            array (
                'id' => 173,
                'alerte_id' => 4006,
                'nom' => 'Moins de 2/3 du poids adulte',
                'valeur' => 1,
            ),
            168 => 
            array (
                'id' => 174,
                'alerte_id' => 4010,
                'nom' => 'Plus de 80%',
                'valeur' => 0,
            ),
            169 => 
            array (
                'id' => 175,
                'alerte_id' => 4010,
                'nom' => 'Moins de 80%',
                'valeur' => 1,
            ),
            170 => 
            array (
                'id' => 176,
                'alerte_id' => 4018,
                'nom' => 'Plus de 90%',
                'valeur' => 0,
            ),
            171 => 
            array (
                'id' => 177,
                'alerte_id' => 4018,
                'nom' => 'Moins de 90%',
                'valeur' => 1,
            ),
            172 => 
            array (
                'id' => 178,
                'alerte_id' => 2009,
                'nom' => 'entre 15% et 30%',
                'valeur' => 0,
            ),
            173 => 
            array (
                'id' => 179,
                'alerte_id' => 2009,
                'nom' => 'moins de 15%',
                'valeur' => 1,
            ),
            174 => 
            array (
                'id' => 180,
                'alerte_id' => 2009,
                'nom' => 'plus de 30%',
                'valeur' => 2,
            ),
        ));
        
        
    }
}