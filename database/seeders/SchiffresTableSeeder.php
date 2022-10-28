<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchiffresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schiffres')->delete();
        
        \DB::table('schiffres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'saisie_id' => 2,
                'libelle' => 'nb_vaches',
                'valeur' => 10.0,
            ),
            1 => 
            array (
                'id' => 2,
                'saisie_id' => 2,
                'libelle' => 'nb_genisses_NV',
                'valeur' => 10.0,
            ),
            2 => 
            array (
                'id' => 3,
                'saisie_id' => 2,
                'libelle' => 'nb_velages',
                'valeur' => 20.0,
            ),
            3 => 
            array (
                'id' => 4,
                'saisie_id' => 2,
                'libelle' => 'nb_velages_vaches',
                'valeur' => 10.0,
            ),
            4 => 
            array (
                'id' => 5,
                'saisie_id' => 2,
                'libelle' => 'nb_velages_genisses',
                'valeur' => 10.0,
            ),
            5 => 
            array (
                'id' => 6,
                'saisie_id' => 2,
                'libelle' => 'nb_veaux_nes',
                'valeur' => 20.0,
            ),
            6 => 
            array (
                'id' => 7,
                'saisie_id' => 2,
                'libelle' => 'nb_pature',
                'valeur' => 20.0,
            ),
            7 => 
            array (
                'id' => 8,
                'saisie_id' => 2,
                'libelle' => 'nb_reformes',
                'valeur' => 2.0,
            ),
            8 => 
            array (
                'id' => 9,
                'saisie_id' => 2,
                'libelle' => 'mort_vaches',
                'valeur' => 1.0,
            ),
            9 => 
            array (
                'id' => 10,
                'saisie_id' => 2,
                'libelle' => 'mort_nv',
                'valeur' => 1.0,
            ),
            10 => 
            array (
                'id' => 11,
                'saisie_id' => 2,
                'libelle' => 'mort_24',
                'valeur' => 1.0,
            ),
            11 => 
            array (
                'id' => 12,
                'saisie_id' => 2,
                'libelle' => 'mort_1_S',
                'valeur' => 1.0,
            ),
            12 => 
            array (
                'id' => 13,
                'saisie_id' => 2,
                'libelle' => 'morb_veaux',
                'valeur' => 1.0,
            ),
            13 => 
            array (
                'id' => 14,
                'saisie_id' => 2,
                'libelle' => 'omph',
                'valeur' => 1.0,
            ),
            14 => 
            array (
                'id' => 15,
                'saisie_id' => 2,
                'libelle' => 'diarrhees_veaux',
                'valeur' => 1.0,
            ),
            15 => 
            array (
                'id' => 16,
                'saisie_id' => 2,
                'libelle' => 'respi_veaux',
                'valeur' => 1.0,
            ),
            16 => 
            array (
                'id' => 17,
                'saisie_id' => 2,
                'libelle' => 'frais_veto',
                'valeur' => 400.0,
            ),
            17 => 
            array (
                'id' => 18,
                'saisie_id' => 2,
                'libelle' => 'premier_velage',
                'valeur' => 34.0,
            ),
            18 => 
            array (
                'id' => 19,
                'saisie_id' => 2,
                'libelle' => 'velIA1',
                'valeur' => 90.0,
            ),
            19 => 
            array (
                'id' => 20,
                'saisie_id' => 2,
                'libelle' => 'IA_fec_x10',
                'valeur' => 1.2,
            ),
            20 => 
            array (
                'id' => 21,
                'saisie_id' => 2,
                'libelle' => 'plus3IA',
                'valeur' => 10.0,
            ),
            21 => 
            array (
                'id' => 22,
                'saisie_id' => 2,
                'libelle' => 'IVV',
                'valeur' => 400.0,
            ),
            22 => 
            array (
                'id' => 23,
                'saisie_id' => 2,
                'libelle' => 'vel_genisses_diff',
                'valeur' => 1.0,
            ),
            23 => 
            array (
                'id' => 24,
                'saisie_id' => 2,
                'libelle' => 'avortements',
                'valeur' => 1.0,
            ),
            24 => 
            array (
                'id' => 25,
                'saisie_id' => 2,
                'libelle' => 'non_del',
                'valeur' => 0.0,
            ),
            25 => 
            array (
                'id' => 26,
                'saisie_id' => 2,
                'libelle' => 'metrites',
                'valeur' => 0.0,
            ),
            26 => 
            array (
                'id' => 27,
                'saisie_id' => 2,
                'libelle' => 'fdl',
                'valeur' => 0.0,
            ),
            27 => 
            array (
                'id' => 28,
                'saisie_id' => 2,
                'libelle' => 'caillettes',
                'valeur' => 0.0,
            ),
            28 => 
            array (
                'id' => 29,
                'saisie_id' => 2,
                'libelle' => 'cetoses',
                'valeur' => 0.0,
            ),
            29 => 
            array (
                'id' => 30,
                'saisie_id' => 2,
                'libelle' => 'tetanies',
                'valeur' => 0.0,
            ),
            30 => 
            array (
                'id' => 31,
                'saisie_id' => 2,
                'libelle' => 'tb_anormaux',
                'valeur' => 0.0,
            ),
            31 => 
            array (
                'id' => 32,
                'saisie_id' => 2,
                'libelle' => 'mammites',
                'valeur' => 0.0,
            ),
            32 => 
            array (
                'id' => 33,
                'saisie_id' => 2,
                'libelle' => 'nouv_mamm_tar',
                'valeur' => 0.0,
            ),
            33 => 
            array (
                'id' => 34,
                'saisie_id' => 2,
                'libelle' => 'primi_nouv_mamm_debut',
                'valeur' => 0.0,
            ),
            34 => 
            array (
                'id' => 35,
                'saisie_id' => 2,
                'libelle' => 'cellules',
                'valeur' => 0.0,
            ),
            35 => 
            array (
                'id' => 36,
                'saisie_id' => 2,
                'libelle' => 'uree',
                'valeur' => 0.0,
            ),
            36 => 
            array (
                'id' => 37,
                'saisie_id' => 2,
                'libelle' => 'staphs',
                'valeur' => 0.0,
            ),
            37 => 
            array (
                'id' => 38,
                'saisie_id' => 2,
                'libelle' => 'salmo',
                'valeur' => 0.0,
            ),
            38 => 
            array (
                'id' => 39,
                'saisie_id' => 2,
                'libelle' => 'listeria',
                'valeur' => 0.0,
            ),
            39 => 
            array (
                'id' => 40,
                'saisie_id' => 2,
                'libelle' => 'coli',
                'valeur' => 0.0,
            ),
            40 => 
            array (
                'id' => 41,
                'saisie_id' => 2,
                'libelle' => 'diarrhees_J_A',
                'valeur' => 0.0,
            ),
            41 => 
            array (
                'id' => 42,
                'saisie_id' => 2,
                'libelle' => 'foies_saisis',
                'valeur' => 0.0,
            ),
            42 => 
            array (
                'id' => 43,
                'saisie_id' => 2,
                'libelle' => 'boiterie_vache',
                'valeur' => 0.0,
            ),
            43 => 
            array (
                'id' => 44,
                'saisie_id' => 2,
                'libelle' => 'reforme_boiterie',
                'valeur' => 0.0,
            ),
            44 => 
            array (
                'id' => 45,
                'saisie_id' => 2,
                'libelle' => 'boiterie_trait',
                'valeur' => 0.0,
            ),
            45 => 
            array (
                'id' => 46,
                'saisie_id' => 2,
                'libelle' => 'sabots_longs',
                'valeur' => 0.0,
            ),
        ));
        
        
    }
}