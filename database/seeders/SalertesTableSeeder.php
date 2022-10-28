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
                'id' => 1,
                'alerte_id' => 2009,
                'saisie_id' => 2,
                'valeur' => '20',
                'danger' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'alerte_id' => 2008,
                'saisie_id' => 2,
                'valeur' => '10',
                'danger' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'alerte_id' => 2007,
                'saisie_id' => 2,
                'valeur' => '10',
                'danger' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'alerte_id' => 2035,
                'saisie_id' => 2,
                'valeur' => '5',
                'danger' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'alerte_id' => 2010,
                'saisie_id' => 2,
                'valeur' => '40',
                'danger' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'alerte_id' => 2012,
                'saisie_id' => 2,
                'valeur' => '34',
                'danger' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'alerte_id' => 2013,
                'saisie_id' => 2,
                'valeur' => '90',
                'danger' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'alerte_id' => 2015,
                'saisie_id' => 2,
                'valeur' => '1.2',
                'danger' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'alerte_id' => 2014,
                'saisie_id' => 2,
                'valeur' => '10',
                'danger' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'alerte_id' => 2016,
                'saisie_id' => 2,
                'valeur' => '400',
                'danger' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'alerte_id' => 2018,
                'saisie_id' => 2,
                'valeur' => '10',
                'danger' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'alerte_id' => 2017,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'alerte_id' => 2019,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'alerte_id' => 2020,
                'saisie_id' => 2,
                'valeur' => '5',
                'danger' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'alerte_id' => 2021,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'alerte_id' => 2022,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'alerte_id' => 2023,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'alerte_id' => 2025,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'alerte_id' => 2024,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'alerte_id' => 2031,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'alerte_id' => 2032,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'alerte_id' => 2033,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'alerte_id' => 2030,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'alerte_id' => 2029,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'alerte_id' => 2034,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'alerte_id' => 2059,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'alerte_id' => 2060,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'alerte_id' => 2061,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'alerte_id' => 2036,
                'saisie_id' => 2,
                'valeur' => '5',
                'danger' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'alerte_id' => 2037,
                'saisie_id' => 2,
                'valeur' => '5',
                'danger' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'alerte_id' => 2038,
                'saisie_id' => 2,
                'valeur' => '5',
                'danger' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'alerte_id' => 2039,
                'saisie_id' => 2,
                'valeur' => '5',
                'danger' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'alerte_id' => 2040,
                'saisie_id' => 2,
                'valeur' => '5',
                'danger' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'alerte_id' => 2045,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'alerte_id' => 2051,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'alerte_id' => 2055,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'alerte_id' => 2056,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'alerte_id' => 2057,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'alerte_id' => 2058,
                'saisie_id' => 2,
                'valeur' => '0',
                'danger' => 0,
            ),
        ));
        
        
    }
}