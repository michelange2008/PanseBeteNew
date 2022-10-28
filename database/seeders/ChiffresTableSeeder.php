<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChiffresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chiffres')->delete();
        
        \DB::table('chiffres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Nombre de vaches',
                'groupe_id' => 1,
                'supprimable' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Nombre de génisses de la naissance au vélage',
                'groupe_id' => 1,
                'supprimable' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'Nombre de vélages',
                'groupe_id' => 1,
                'supprimable' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'nombre de vélages de vaches',
                'groupe_id' => 1,
                'supprimable' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'Nombre de vélages de génisses',
                'groupe_id' => 1,
                'supprimable' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'nom' => 'nombre de veaux nés',
                'groupe_id' => 1,
                'supprimable' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'nom' => 'nombre de vaches réformées',
                'groupe_id' => 1,
                'supprimable' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'nom' => 'nombre d’animaux au pâturage',
                'groupe_id' => 1,
                'supprimable' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'nom' => 'nombre de vaches mortes',
                'groupe_id' => 2,
                'supprimable' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'nom' => 'Nombre d’animaux morts de la naissance au vélage',
                'groupe_id' => 2,
                'supprimable' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'nom' => 'nombre de veaux morts dans les 24 premières heures',
                'groupe_id' => 2,
                'supprimable' => 0,
            ),
            11 => 
            array (
                'id' => 12,
            'nom' => 'Frais vétérinaires (hors conseil)',
                'groupe_id' => 8,
                'supprimable' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'nom' => 'âge au premier vélage',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'nom' => 'nombre d’IA par IA fécondante',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'nom' => 'nombre de vélages de génisses difficiles',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'nom' => 'nombre d’avortements',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'nom' => 'nombre de non délivrances',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'nom' => 'nombre de métrites',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'nom' => 'nombre de fièvres de lait',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'nom' => 'nombre de caillettes',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'nom' => 'nombre de cétoses',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'nom' => 'nombre de tétanies d’herbage',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'nom' => 'nombre de mammites',
                'groupe_id' => 4,
                'supprimable' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'nom' => 'nombre de nouvelles mammites au tarissement',
                'groupe_id' => 4,
                'supprimable' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'nom' => 'nombre de nouvelles mammites des primipares en début de lactation',
                'groupe_id' => 4,
                'supprimable' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'nom' => 'taux cellulaire moyen',
                'groupe_id' => 4,
                'supprimable' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'nom' => 'taux d’urée moyen',
                'groupe_id' => 4,
                'supprimable' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'nom' => 'nombre de cas de présence de staphylocoques',
                'groupe_id' => 4,
                'supprimable' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'nom' => 'nombre de cas de présence de salmonelles',
                'groupe_id' => 4,
                'supprimable' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'nom' => 'nombre de cas de présence de listeria',
                'groupe_id' => 4,
                'supprimable' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'nom' => 'nombre de cas de présence de E coli',
                'groupe_id' => 4,
                'supprimable' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'nom' => 'nombre de TB anormaux',
                'groupe_id' => 4,
                'supprimable' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'nom' => 'intervalle vélage 1ère IA',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'nom' => 'nombre de vaches à 3 IA ou plus',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'nom' => 'intervalle vélage vélage',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'nom' => 'nombre de veaux morts de 1 jour au sevrage',
                'groupe_id' => 2,
                'supprimable' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'nom' => 'nombre de veaux malades',
                'groupe_id' => 5,
                'supprimable' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'nom' => 'nombre de gros nombrils',
                'groupe_id' => 5,
                'supprimable' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'nom' => 'nombre de diarrhées chez les veaux',
                'groupe_id' => 5,
                'supprimable' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'nom' => 'nombre de cas de maladie respiratoire',
                'groupe_id' => 5,
                'supprimable' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'nom' => 'nombre de diarrhées chez les jeunes et les adultes',
                'groupe_id' => 7,
                'supprimable' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'nom' => 'nombre de foies saisis',
                'groupe_id' => 7,
                'supprimable' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'nom' => 'nombre de vaches qui boitent',
                'groupe_id' => 6,
                'supprimable' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'nom' => 'nombre de réforme pour boiterie',
                'groupe_id' => 6,
                'supprimable' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'nom' => 'nombre de vaches traitées pour boiterie',
                'groupe_id' => 6,
                'supprimable' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'nom' => 'nombre de vaches avec des sabots longs',
                'groupe_id' => 6,
                'supprimable' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'nom' => 'Poids des génisses à la 1ère insémination',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'nom' => 'nombre de vaches réinséminées 60 jours après une IA',
                'groupe_id' => 3,
                'supprimable' => 0,
            ),
            48 => 
            array (
                'id' => 59,
                'nom' => 'mortalité estivale',
                'groupe_id' => 2,
                'supprimable' => 1,
            ),
        ));
        
        
    }
}