<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OriginesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('origines')->delete();
        
        \DB::table('origines')->insert(array (
            0 => 
            array (
                'id' => 1,
                'alerte_id' => 1001,
                'question' => 'La ration est-elle bien équilibrée en énergie/azote ?',
                'reponse' => 'rapport énergie / azote déséquilibré',
                'categorie_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'alerte_id' => 1001,
                'question' => 'La distribution de la ration est-elle bien répartie ?',
                'reponse' => 'mauvaise répartition de la ration dans la journée',
                'categorie_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'alerte_id' => 1001,
                'question' => 'Les primipares sont-elles complémentées vis-à-vis des multipares ?',
                'reponse' => 'pas de complémentation des primipares / multipares',
                'categorie_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'alerte_id' => 1001,
                'question' => 'Existe-t-il une ration spécifique de début de lactation ?',
                'reponse' => 'pas de ration spécifique de début de lactation',
                'categorie_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'alerte_id' => 1001,
                'question' => 'Les bouses sont-elles hétérogènes',
                'reponse' => 'bouses hétérogènes',
                'categorie_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'alerte_id' => 1001,
                'question' => 'Les vêlages sont-ils dispersés ?',
                'reponse' => 'vêlages dispersés',
                'categorie_id' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'alerte_id' => 1001,
                'question' => 'L\'accès à l\'auge est-il compétitif entre les animaux ?',
                'reponse' => 'accès à l\'auge compétitif',
                'categorie_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'alerte_id' => 1001,
                'question' => 'Le bâtiment est-il équipé de cornadis ?',
                'reponse' => 'pas de cornadis',
                'categorie_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'alerte_id' => 1001,
                'question' => 'Le nombre de cornadis est-il au minimum supérieur au nombre d\'animaux présents ?',
                'reponse' => 'plus d\'animaux que de places aux cornadis',
                'categorie_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'alerte_id' => 1001,
                'question' => 'Y-a-t-il un mélange d\'animaux sans corne et d\'animaux cornus ?',
                'reponse' => 'mélanges d\'animaux cornus et sans corne',
                'categorie_id' => 4,
            ),
            10 => 
            array (
                'id' => 11,
                'alerte_id' => 1001,
                'question' => 'Y-a-t-il eu des recherches parasitismes récemment ?',
                'reponse' => 'par de recherche de parasites récente',
                'categorie_id' => 8,
            ),
            11 => 
            array (
                'id' => 12,
                'alerte_id' => 1002,
                'question' => 'Le bâtiment est-il trop chargé ?',
                'reponse' => 'bâtiment trop chargé',
                'categorie_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'alerte_id' => 1002,
                'question' => 'La quantité de paille est-elle suffisante ?',
                'reponse' => 'paillage insuffisant en quantité',
                'categorie_id' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'alerte_id' => 1002,
                'question' => 'La fréquence de curage est-elle suffisante ?',
                'reponse' => 'curage pas assez fréquent',
                'categorie_id' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'alerte_id' => 1002,
                'question' => 'Le bâtiment montre-t-il des signes d\'une mauvaise ventilation ?',
                'reponse' => 'signes de mauvaise ventilation du bâtiment',
                'categorie_id' => 2,
            ),
            15 => 
            array (
                'id' => 16,
                'alerte_id' => 1002,
            'question' => 'Le bâtiment présente-t-il des excès d\'humidité importants (sol non stabilisé et non drainé)',
                'reponse' => 'excès d\'humidité important dans le bâtiment',
                'categorie_id' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'alerte_id' => 1002,
                'question' => 'L\'orientation du bâtiment est-elle correcte ?',
                'reponse' => 'mauvaise orientation du bâtiment',
                'categorie_id' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'alerte_id' => 1002,
                'question' => 'Le bardage du bâtiment est-il suffisant ?',
                'reponse' => 'bardage insuffisant',
                'categorie_id' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'alerte_id' => 1002,
            'question' => 'La ration est-elle trop riche en amidon (acidose) ?',
                'reponse' => 'ration trop riche en amidon',
                'categorie_id' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'alerte_id' => 1002,
            'question' => 'La ration trop riche en azote soluble (ex : fourrages verts)?',
                'reponse' => 'ration trop riche en azote soluble',
                'categorie_id' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'alerte_id' => 1002,
                'question' => 'Les animaux présentent-ils les symptômes de diarrhées? ',
                'reponse' => 'présence de diarrhées',
                'categorie_id' => 5,
            ),
            21 => 
            array (
                'id' => 22,
                'alerte_id' => 1002,
            'question' => 'Les animaux sont-ils susceptibles d\'être parasités (période de pâturage) ? (voir onglet parasitisme)',
                'reponse' => 'animaux peut-être parasités',
                'categorie_id' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'alerte_id' => 1003,
                'question' => 'Est-ce que la nourriture est accessible à tous les animaux en même temps de manière équitable ?',
                'reponse' => 'nourriture par forcément accessible à tous les animaux de manière équitable',
                'categorie_id' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'alerte_id' => 1003,
                'question' => 'Le nombre de cornadis est-il suffisant ? +10%/Nb d\'animaux présents ?',
                'reponse' => 'nombre de cornadis insuffisants ',
                'categorie_id' => 2,
            ),
            24 => 
            array (
                'id' => 25,
                'alerte_id' => 1004,
                'question' => 'L\'absence de cornadis entre-rail des conflits à l\'auge ?',
                'reponse' => 'conflits à l\'auge par absence de cornadis',
                'categorie_id' => 2,
            ),
            25 => 
            array (
                'id' => 26,
                'alerte_id' => 1004,
                'question' => 'Le troupeau présente-t-il une coexistence de vaches avec ou sans corne ?',
                'reponse' => 'coexistence de vaches avec et sans cornes',
                'categorie_id' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'alerte_id' => 1004,
                'question' => 'Le bâtiment est-il protégé des perturbations électromagnétiques ?',
                'reponse' => 'perturbations électromagnétiques possibles',
                'categorie_id' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'alerte_id' => 1004,
                'question' => 'Le lieu de vie des animaux présente-t-il des objets coupants',
                'reponse' => 'présence d\'objets coupants dans les lieux de vie des animaux',
                'categorie_id' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'alerte_id' => 1004,
                'question' => 'La ration est-elle équilibrée ou présente-t-elle un excès d\'énergie ?',
                'reponse' => 'excès d\'énergie',
                'categorie_id' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'alerte_id' => 1004,
                'question' => 'Certains animaux du troupeau sont-ils de souche d\'animaux nerveux',
                'reponse' => '"quelques animaux issus de souches ""animaux nerveux"""',
                'categorie_id' => 7,
            ),
            30 => 
            array (
                'id' => 31,
                'alerte_id' => 1004,
                'question' => 'Les techniques d\'élevage permettent-elles la mise en place d\'une bonne relation homme/animal ?',
                'reponse' => 'relation homme / animal perturbée',
                'categorie_id' => 4,
            ),
            31 => 
            array (
                'id' => 32,
                'alerte_id' => 1004,
                'question' => 'Les animaux sont-ils confrontés à des éléments perturbateurs : chiens, tiers,',
            'reponse' => 'présence d\'éléments perturbateurs (chiens, )',
                'categorie_id' => 4,
            ),
            32 => 
            array (
                'id' => 33,
                'alerte_id' => 1005,
                'question' => 'La topographie du terrain est-elle accidentée ?',
                'reponse' => 'terrain accidenté',
                'categorie_id' => 7,
            ),
            33 => 
            array (
                'id' => 34,
                'alerte_id' => 1005,
                'question' => 'Le lieu de vie des animaux présente-t-il des objets coupants',
                'reponse' => 'présence d\'objets coupants dans les lieux de vie des animaux',
                'categorie_id' => 2,
            ),
            34 => 
            array (
                'id' => 35,
                'alerte_id' => 1005,
                'question' => 'Les animaux sont-ils préparés à la mise à l\'herbe ?',
                'reponse' => 'pas de préparation à la mise à l\'herbe',
                'categorie_id' => 4,
            ),
            35 => 
            array (
                'id' => 36,
                'alerte_id' => 1005,
                'question' => 'Y-a-t-il un mélange d\'animaux de différents lots à la mise en pâtures provoquant des bagarres ?',
                'reponse' => 'bagarres à la mise à l\'herbe',
                'categorie_id' => 4,
            ),
            36 => 
            array (
                'id' => 37,
                'alerte_id' => 1005,
                'question' => 'Le nombre et les accès aux points d\'eau sont-ils adaptés ?',
                'reponse' => 'nombre de points d\'eau insuffisant, accès problématique',
                'categorie_id' => 2,
            ),
            37 => 
            array (
                'id' => 38,
                'alerte_id' => 1005,
                'question' => 'Le troupeau présente-t-il une coexistence de vaches avec ou sans corne ?',
                'reponse' => 'coexistence de vaches avec et sans cornes',
                'categorie_id' => 4,
            ),
            38 => 
            array (
                'id' => 39,
                'alerte_id' => 1005,
                'question' => 'Y-a-t-il des vaches vides et/ou un taureau dans les lots d\'animaux ?',
                'reponse' => 'vaches vides avec taureau dans le lots',
                'categorie_id' => 4,
            ),
            39 => 
            array (
                'id' => 40,
                'alerte_id' => 1005,
                'question' => 'Les animaux sont-ils confrontés à des éléments perturbateurs : chiens, tiers,',
            'reponse' => 'présence d\'éléments perturbateurs (chiens, )',
                'categorie_id' => 4,
            ),
            40 => 
            array (
                'id' => 41,
                'alerte_id' => 1005,
                'question' => 'La race du troupeau est-elle adaptée aux déplacements et au territoire ?',
                'reponse' => 'race des animaux inadaptée par rapport aux déplacement',
                'categorie_id' => 4,
            ),
            41 => 
            array (
                'id' => 42,
                'alerte_id' => 1006,
                'question' => 'Est-ce que la nourriture est accessible à tous les animaux en même temps de manière équitable ?',
                'reponse' => 'nourriture par forcément accessible à tous les animaux de manière équitable',
                'categorie_id' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'alerte_id' => 1006,
                'question' => 'Le nombre de cornadis est-il suffisant ? +10%/Nb d\'animaux présents ?',
                'reponse' => 'nombre de cornadis insuffisants ',
                'categorie_id' => 2,
            ),
            43 => 
            array (
                'id' => 44,
                'alerte_id' => 1006,
                'question' => 'L\'absence de cornadis entre-rail des conflits à l\'auge ?',
                'reponse' => 'conflits à l\'auge par absence de cornadis',
                'categorie_id' => 2,
            ),
            44 => 
            array (
                'id' => 45,
                'alerte_id' => 1006,
                'question' => 'Le troupeau présente-t-il une coexistence de vaches avec ou sans corne ?',
                'reponse' => 'coexistence de vaches avec et sans cornes',
                'categorie_id' => 4,
            ),
            45 => 
            array (
                'id' => 46,
                'alerte_id' => 1006,
                'question' => 'Le bâtiment est-il protégé des perturbations électromagnétiques ?',
                'reponse' => 'perturbations électromagnétiques possibles',
                'categorie_id' => 2,
            ),
            46 => 
            array (
                'id' => 47,
                'alerte_id' => 1006,
                'question' => 'Les veaux ont-ils accès à une zone spécifique',
                'reponse' => 'pas de zone spécifique pour les veaux',
                'categorie_id' => 2,
            ),
            47 => 
            array (
                'id' => 48,
                'alerte_id' => 1006,
                'question' => 'Le lieu de vie des animaux présente-t-il des objets coupants',
                'reponse' => 'présence d\'objets coupants dans les lieux de vie des animaux',
                'categorie_id' => 2,
            ),
            48 => 
            array (
                'id' => 49,
                'alerte_id' => 1006,
                'question' => 'Les sols bétonnés sont-ils glissants ?',
                'reponse' => 'sols bétonnés glissants',
                'categorie_id' => 2,
            ),
            49 => 
            array (
                'id' => 50,
                'alerte_id' => 1006,
                'question' => 'Y-a-t-il un mélange d\'animaux de différents lots à la mise en stabulation provoquant des bagarres ?',
                'reponse' => 'bagarres en période de stabulation',
                'categorie_id' => 2,
            ),
            50 => 
            array (
                'id' => 51,
                'alerte_id' => 1007,
                'question' => 'La ration est-elle équilibrée et saine ?',
            'reponse' => 'ration déséquilibrée ou mal conservée (moisie)',
                'categorie_id' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'alerte_id' => 1007,
            'question' => 'La ration contient-elle des plantes toxiques dans les fourrages récoltés ou pâturés ? (ex : Datura)',
                'reponse' => 'plantes toxiques dans les fourrages récoltés',
                'categorie_id' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'alerte_id' => 1007,
                'question' => 'L\'abreuvement est-il suffisant et accessible à tous les animaux ?',
                'reponse' => 'abreuvement non accessible à tous les animaux',
                'categorie_id' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'alerte_id' => 1007,
                'question' => 'Les circuits électriques sont-ils en bon état ou source d\'électrocution ?',
                'reponse' => 'circuits électriques en mauvais état',
                'categorie_id' => 2,
            ),
            54 => 
            array (
                'id' => 55,
                'alerte_id' => 1007,
                'question' => 'Le bâtiment est-il doté d\'un parafoudre et d\'une prise de terre électrique performante ?',
                'reponse' => 'prise de terre non performante et absence de parafoudre',
                'categorie_id' => 2,
            ),
            55 => 
            array (
                'id' => 56,
                'alerte_id' => 1007,
                'question' => 'Le bâtiment présente-t-il des courants d\'air excessifs',
                'reponse' => 'présence de courants d\'air dans le bâtiment',
                'categorie_id' => 2,
            ),
            56 => 
            array (
                'id' => 57,
                'alerte_id' => 1007,
            'question' => 'Les animaux présentent-ils les symptômes de la grippe (diarrhée, toux, fièvre, etc.) ?',
                'reponse' => 'symptômes de grippe',
                'categorie_id' => 5,
            ),
            57 => 
            array (
                'id' => 58,
                'alerte_id' => 1007,
                'question' => 'Le troupeau est-il touché par le vol par de la boucherie sauvage en pâture ?',
                'reponse' => 'vol d\'animaux',
                'categorie_id' => 7,
            ),
            58 => 
            array (
                'id' => 59,
                'alerte_id' => 1008,
                'question' => 'La ration présente-t-elle suffisamment de fibres ?',
                'reponse' => 'insuffisance de fibres dans la ration',
                'categorie_id' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'alerte_id' => 1008,
                'question' => 'Y-a-t-il un risque d\'entérotoxémie sur le lot avec des rations trop riches - La vaccination est-elle pratiquée ?',
            'reponse' => 'risques d\'entérotoxémie (et pas de vaccination)',
                'categorie_id' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'alerte_id' => 1008,
                'question' => 'La mortalité fait-elle suite à une grippe non détectée ou mal soignée ?',
                'reponse' => 'grippe non détecté ou mal soignée avec mortalité',
                'categorie_id' => 5,
            ),
            61 => 
            array (
                'id' => 62,
                'alerte_id' => 1009,
                'question' => 'Le renouvellement du troupeau est-il suffisant pour réformer les animaux à risque ?',
                'reponse' => 'réforme des animaux à risque insuffisante',
                'categorie_id' => 4,
            ),
            62 => 
            array (
                'id' => 63,
                'alerte_id' => 1010,
                'question' => 'Le produits achetés sont-ils majoritairement à but curatif',
                'reponse' => 'forte consommation de médicaments curatifs',
                'categorie_id' => 5,
            ),
            63 => 
            array (
                'id' => 64,
                'alerte_id' => 1011,
                'question' => 'Les apports sont-ils suffisants par rapport aux objectifs de croissance ?',
                'reponse' => 'apports insuffisants par rapport aux objectifs de croissance',
                'categorie_id' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'alerte_id' => 1011,
                'question' => 'Le parasitisme est-il maîtrisé ?',
                'reponse' => 'parasitisme mal maîtrisé',
                'categorie_id' => 8,
            ),
            65 => 
            array (
                'id' => 66,
                'alerte_id' => 1011,
                'question' => 'Les génisses sont-elles touchées par des pathologies du jeune âge ? (respiratoires',
                    'reponse' => 'pathologie du jeune âge chez les génisses',
                    'categorie_id' => 5,
                ),
                66 => 
                array (
                    'id' => 67,
                    'alerte_id' => 1012,
                    'question' => 'Les apports alimentaires sont-ils suffisants durant le premier mois de lactation ? Et pour les primipares ?',
                    'reponse' => 'apports alimentaires insuffisants durant les 1er mois de lactation',
                    'categorie_id' => 1,
                ),
                67 => 
                array (
                    'id' => 68,
                    'alerte_id' => 1012,
                    'question' => 'Les animaux ne sont-ils pas trop gras au vêlage ?',
                    'reponse' => 'vaches trop grasses au vêlage',
                    'categorie_id' => 1,
                ),
                68 => 
                array (
                    'id' => 69,
                    'alerte_id' => 1012,
                    'question' => 'Le parasitisme est-il maîtrisé ?',
                    'reponse' => 'parasitisme mal maîtrisé',
                    'categorie_id' => 8,
                ),
                69 => 
                array (
                    'id' => 70,
                    'alerte_id' => 1013,
                'question' => 'Les maladies en lien avec la reproduction (BVD, chlamydioses,) sont-elles maîtrisées ?',
                    'reponse' => 'présence de maladies touchant la reproduction',
                    'categorie_id' => 5,
                ),
                70 => 
                array (
                    'id' => 71,
                    'alerte_id' => 1013,
                    'question' => 'Les vêlages précédents ont-ils été difficiles ?',
                    'reponse' => 'vêlages précédents difficiles',
                    'categorie_id' => 5,
                ),
                71 => 
                array (
                    'id' => 72,
                    'alerte_id' => 1013,
                    'question' => 'La fertilité du taureau est-elle surveillée ?',
                    'reponse' => 'pas de surveillance de la fertilité du taureau',
                    'categorie_id' => 4,
                ),
                72 => 
                array (
                    'id' => 73,
                    'alerte_id' => 1013,
                    'question' => 'La présence du taureau est-elle trop courte ?',
                    'reponse' => 'présence du taureau trop courte',
                    'categorie_id' => 4,
                ),
                73 => 
                array (
                    'id' => 74,
                    'alerte_id' => 1013,
                    'question' => 'La ration est-elle équilibrée et notamment en apports minéraux ?',
                    'reponse' => 'ration déséquilibrée, notamment en minéraux',
                    'categorie_id' => 1,
                ),
                74 => 
                array (
                    'id' => 75,
                    'alerte_id' => 1014,
                    'question' => 'Les animaux sont-ils confrontés à des éléments perturbateurs : chiens',
                'reponse' => 'présence d\'éléments perturbateurs (chiens,)',
                    'categorie_id' => 4,
                ),
                75 => 
                array (
                    'id' => 76,
                    'alerte_id' => 1014,
                'question' => 'Les maladies abortives (BVD, Fièvre Q, FCO) sont-elles maîtrisées ?',
                    'reponse' => 'présence de maladies abortives',
                    'categorie_id' => 5,
                ),
                76 => 
                array (
                    'id' => 77,
                    'alerte_id' => 1014,
                    'question' => 'les gestantes sont-elles touchées par des infections diverses avec fièvre ?',
                    'reponse' => 'infections diverses sur les gestantes',
                    'categorie_id' => 5,
                ),
                77 => 
                array (
                    'id' => 78,
                    'alerte_id' => 1014,
                    'question' => 'Des traitements corticoïdes ont-ils été administrés',
                    'reponse' => 'traitements corticoïdes',
                    'categorie_id' => 5,
                ),
                78 => 
                array (
                    'id' => 79,
                    'alerte_id' => 1015,
                    'question' => 'Les vaches ont-elles présenté un anoestrus d\'hiver ?',
                    'reponse' => 'anoestrus d\'hiver',
                    'categorie_id' => 7,
                ),
                79 => 
                array (
                    'id' => 80,
                    'alerte_id' => 1015,
                    'question' => 'Les vaches ont-elles présenté un anoestrus d\'allaitement ?',
                    'reponse' => 'anoestrus d\'allaitement',
                    'categorie_id' => 7,
                ),
                80 => 
                array (
                    'id' => 81,
                    'alerte_id' => 1015,
                    'question' => 'Les apports alimentaires sont-ils suffisants pour éviter les pertes d\'état ?',
                    'reponse' => 'perte d\'état par apports alimentaires insuffisants',
                    'categorie_id' => 1,
                ),
                81 => 
                array (
                    'id' => 82,
                    'alerte_id' => 1015,
                    'question' => 'Les apports en vitamines, minéraux et oligo-éléments sont-ils suffisants',
                    'reponse' => 'apports en vitamines, minéraux et oligo-éléments insuffisants',
                    'categorie_id' => 1,
                ),
                82 => 
                array (
                    'id' => 83,
                    'alerte_id' => 1015,
                    'question' => 'Les vaches ont-elles subies des métrites ou non-délivrances mal gérées ?',
                    'reponse' => 'non-délivrances mal gérées et métrites',
                    'categorie_id' => 5,
                ),
                83 => 
                array (
                    'id' => 84,
                    'alerte_id' => 1015,
                    'question' => 'Les vêlages précédents ont-ils été difficiles ?',
                    'reponse' => 'vêlages précédents difficiles',
                    'categorie_id' => 5,
                ),
                84 => 
                array (
                    'id' => 85,
                    'alerte_id' => 1015,
                    'question' => 'Les vaches sont-elles de souches faiblement indexées en fertilité ?',
                    'reponse' => 'souches avec faible fertilité',
                    'categorie_id' => 7,
                ),
                85 => 
                array (
                    'id' => 86,
                    'alerte_id' => 1015,
                    'question' => 'Le nombre de vaches par taureaux est-il cohérent ?',
                    'reponse' => 'nombre de vache par taureaux incohérent',
                    'categorie_id' => 4,
                ),
                86 => 
                array (
                    'id' => 87,
                    'alerte_id' => 1015,
                    'question' => 'L\'alimentation des taureaux est-elle suffisante ?',
                    'reponse' => 'alimentation du taureau insuffisante',
                    'categorie_id' => 1,
                ),
                87 => 
                array (
                    'id' => 88,
                    'alerte_id' => 1015,
                    'question' => 'La fertilité du taureau est-elle surveillée ?',
                    'reponse' => 'pas de surveillance de la fertilité du taureau',
                    'categorie_id' => 4,
                ),
                88 => 
                array (
                    'id' => 89,
                    'alerte_id' => 1016,
                    'question' => 'Le type génétique du taureau est-il adapté à la morphologie des vaches et des génisses ?',
                    'reponse' => 'type génétique du taureau inadapté à la morphologie des femelles',
                    'categorie_id' => 4,
                ),
                89 => 
                array (
                    'id' => 90,
                    'alerte_id' => 1016,
                    'question' => 'La ration fin de gestation n\'est-elle pas trop riche ?',
                    'reponse' => 'ration de fin de gestation trop riche',
                    'categorie_id' => 1,
                ),
                90 => 
                array (
                    'id' => 91,
                    'alerte_id' => 1016,
                    'question' => 'Les reproductrices présentent-elles une morphologie adaptée au vêlage ?',
                    'reponse' => 'morphologie des vaches inadaptée au vêlage',
                    'categorie_id' => 4,
                ),
                91 => 
                array (
                    'id' => 92,
                    'alerte_id' => 1016,
                    'question' => 'L\'âge au vêlage est-il trop jeune ?',
                    'reponse' => 'vêlages trop précoces',
                    'categorie_id' => 4,
                ),
                92 => 
                array (
                    'id' => 93,
                    'alerte_id' => 1016,
                    'question' => 'La conduite des génisses de renouvellement est-elle cohérente avec l\'objectif d\'âge au vêlage ?',
                    'reponse' => 'conduites des génisses incohérente / âge au vêlage',
                    'categorie_id' => 4,
                ),
                93 => 
                array (
                    'id' => 94,
                    'alerte_id' => 1017,
                'question' => 'Y-t-il trop de vêlages difficiles ? (cf. vêlages difficiles)',
                    'reponse' => 'vêlages difficiles',
                    'categorie_id' => 5,
                ),
                94 => 
                array (
                    'id' => 95,
                    'alerte_id' => 1017,
                    'question' => 'Les mises-bas ont-elles lieu dans une case de vêlage dédiée et propre ?',
                    'reponse' => 'absence de case de vêlage',
                    'categorie_id' => 2,
                ),
                95 => 
                array (
                    'id' => 96,
                    'alerte_id' => 1017,
                    'question' => 'Les interventions humaines respectent-elles les conditions d\'hygiène ?',
                    'reponse' => 'hygiène insuffisante dans les interventions',
                    'categorie_id' => 4,
                ),
                96 => 
                array (
                    'id' => 97,
                    'alerte_id' => 1017,
                    'question' => 'Les apports en vitamines, minéraux et/ou oligoéléments sont-ils suffisants avant vêlage ?',
                    'reponse' => 'apports en vitamines, minéraux et oligo-éléments insuffisants',
                    'categorie_id' => 1,
                ),
                97 => 
                array (
                    'id' => 98,
                    'alerte_id' => 1018,
                    'question' => 'La ration de fin de gestation n\'est-elle pas trop riche ?',
                    'reponse' => 'ration de fin de gestation trop riche',
                    'categorie_id' => 1,
                ),
                98 => 
                array (
                    'id' => 99,
                    'alerte_id' => 1018,
                    'question' => 'Le type génétique du taureau peut-il être à l\'origine de ces poids de naissance trop élevé ?',
                    'reponse' => 'type génétique du taureau à l\'origine de poids de naissance trop élevés',
                    'categorie_id' => 4,
                ),
                99 => 
                array (
                    'id' => 100,
                    'alerte_id' => 1019,
                    'question' => 'La ration est-elle suffisamment riche en fibres ?',
                    'reponse' => 'ration pauvre en fibres',
                    'categorie_id' => 1,
                ),
                100 => 
                array (
                    'id' => 101,
                    'alerte_id' => 1019,
                    'question' => 'La ration est-elle excédentaire en amidon ?',
                    'reponse' => 'ration excédentaire en amidon',
                    'categorie_id' => 1,
                ),
                101 => 
                array (
                    'id' => 102,
                    'alerte_id' => 1019,
                'question' => 'Les animaux ont-ils subit une transition alimentaire brutale ou trop courte (inférieur à 3 semaines) ?',
                    'reponse' => 'transition alimentaire trop brutale ou trop courte',
                    'categorie_id' => 1,
                ),
                102 => 
                array (
                    'id' => 103,
                    'alerte_id' => 1020,
                    'question' => 'La mise en quarantaine des animaux achetés est-elle respectée ?',
                    'reponse' => 'pas de mise en quarantaine des animaux achetés',
                    'categorie_id' => 5,
                ),
                103 => 
                array (
                    'id' => 104,
                    'alerte_id' => 1020,
                    'question' => 'La ration est-elle excédentaire ?',
                    'reponse' => 'ration excédentaire',
                    'categorie_id' => 1,
                ),
                104 => 
                array (
                    'id' => 105,
                    'alerte_id' => 1020,
                    'question' => 'Les animaux sont-ils vaccinés contre les entérotoxémies ?',
                    'reponse' => 'pas de vaccination contre les entérotoxémies',
                    'categorie_id' => 5,
                ),
                105 => 
                array (
                    'id' => 106,
                    'alerte_id' => 1020,
                    'question' => 'La ration est-elle calculée ?',
                    'reponse' => 'pas de calcul de ration',
                    'categorie_id' => 1,
                ),
                106 => 
                array (
                    'id' => 107,
                    'alerte_id' => 1020,
                    'question' => 'La ration est-elle pesée ?',
                    'reponse' => 'ration non pesée',
                    'categorie_id' => 1,
                ),
                107 => 
                array (
                    'id' => 108,
                    'alerte_id' => 1020,
                    'question' => 'La ration distribuée est-elle différente de la ration calculée ?',
                    'reponse' => 'ration distribuée différente de la ration calculée',
                    'categorie_id' => 1,
                ),
                108 => 
                array (
                    'id' => 109,
                    'alerte_id' => 1020,
                    'question' => 'Les délais de transition alimentaire sont-ils respectés ?',
                    'reponse' => 'transition alimentaire trop brutale ou trop courte',
                    'categorie_id' => 1,
                ),
                109 => 
                array (
                    'id' => 110,
                    'alerte_id' => 1020,
                'question' => 'Comment les animaux valorisent la ration (observation des animaux) ?',
                    'reponse' => 'valorisation de la ration peut-être insuffisante',
                    'categorie_id' => 1,
                ),
                110 => 
                array (
                    'id' => 111,
                    'alerte_id' => 1020,
                    'question' => 'Les sols sont-ils glissants ?',
                    'reponse' => 'sols glissants',
                    'categorie_id' => 2,
                ),
                111 => 
                array (
                    'id' => 112,
                    'alerte_id' => 1020,
                    'question' => 'Les bagarres sont fréquentes ? Les animaux sont nerveux ?',
                    'reponse' => 'animaux nerveux, qui se battent',
                    'categorie_id' => 7,
                ),
                112 => 
                array (
                    'id' => 113,
                    'alerte_id' => 1020,
                    'question' => 'La densité animale n\'est-elle pas trop élevée ?',
                    'reponse' => 'densité animale trop élevée',
                    'categorie_id' => 2,
                ),
                113 => 
                array (
                    'id' => 114,
                    'alerte_id' => 1020,
                    'question' => 'Le bâtiment est-il suffisamment ventilé ? Présence de courants d\'air, ammoniac, chaleur,',
                    'reponse' => 'problèmes de ventilation du bâtiment',
                    'categorie_id' => 2,
                ),
                114 => 
                array (
                    'id' => 115,
                    'alerte_id' => 1020,
                'question' => 'La maladie des muqueuses (BVD) est-elle maîtrisée dans le troupeau ?',
                    'reponse' => 'BVD non maîtrisé',
                    'categorie_id' => 5,
                ),
                115 => 
                array (
                    'id' => 116,
                    'alerte_id' => 1021,
                    'question' => 'La ration contient-elle suffisamment de fibres de structure ?',
                    'reponse' => 'pas assez de fibres de structure dans la ration',
                    'categorie_id' => 1,
                ),
                116 => 
                array (
                    'id' => 117,
                    'alerte_id' => 1021,
                    'question' => 'La ration est-elle équilibrée ?',
                    'reponse' => 'ration déséquilibrée',
                    'categorie_id' => 1,
                ),
                117 => 
                array (
                    'id' => 118,
                    'alerte_id' => 1021,
                    'question' => 'Les délais de transition alimentaire sont-ils respectés ?',
                    'reponse' => 'transition alimentaire trop brutale ou trop courte',
                    'categorie_id' => 1,
                ),
                118 => 
                array (
                    'id' => 119,
                    'alerte_id' => 1021,
                    'question' => 'L\'eau est potable ?',
                    'reponse' => 'eau non potable',
                    'categorie_id' => 1,
                ),
                119 => 
                array (
                    'id' => 120,
                    'alerte_id' => 1021,
                    'question' => 'le troupeau est-il protégé des contaminations extérieures (personnes',
                        'reponse' => 'pas de protection du troupeau vis-à-vis des contamination extérieures',
                        'categorie_id' => 5,
                    ),
                    120 => 
                    array (
                        'id' => 121,
                        'alerte_id' => 1021,
                        'question' => 'Le troupeau est-il touché par la paratuberculose ?',
                        'reponse' => 'présence de paratuberculose',
                        'categorie_id' => 5,
                    ),
                    121 => 
                    array (
                        'id' => 122,
                        'alerte_id' => 1021,
                        'question' => 'Les parasites strongles digestifs, paramphistome et grande douve sont-ils maîtrisés',
                        'reponse' => 'pas de maîtrise du parasitisme',
                        'categorie_id' => 8,
                    ),
                    122 => 
                    array (
                        'id' => 123,
                        'alerte_id' => 1021,
                        'question' => 'L\'abreuvement sur points d\'eaux naturels potentiellement contaminés est-il sécurisé ?',
                        'reponse' => 'points d\'eaux naturels peut-être contaminés',
                        'categorie_id' => 8,
                    ),
                    123 => 
                    array (
                        'id' => 124,
                        'alerte_id' => 1021,
                        'question' => 'Existe-il une bonne gestion du pâturage vis-à-vis du parasitisme ?',
                        'reponse' => 'pas de gestion particulière du pâturage vis-a-vis du parasitisme',
                        'categorie_id' => 8,
                    ),
                    124 => 
                    array (
                        'id' => 125,
                        'alerte_id' => 1021,
                        'question' => 'Pratiquez-vous un suivi/dépistage de l\'infestation parasitaire ?',
                        'reponse' => 'suivi/dépistage des infections parasitaires',
                        'categorie_id' => 8,
                    ),
                    125 => 
                    array (
                        'id' => 126,
                        'alerte_id' => 1022,
                        'question' => 'Les délais de transition alimentaire sont-ils respectés ?',
                        'reponse' => 'transition alimentaire trop brutale ou trop courte',
                        'categorie_id' => 1,
                    ),
                    126 => 
                    array (
                        'id' => 127,
                        'alerte_id' => 1022,
                    'question' => 'La proportion de légumineuses météorisantes (trèfle violet, …)',
                        'reponse' => 'présence de légumineuses météorisantes dans la ration',
                        'categorie_id' => 1,
                    ),
                    127 => 
                    array (
                        'id' => 128,
                        'alerte_id' => 1022,
                    'question' => 'Pratiquez-vous le pâturage dans des vergers (pommiers) ?',
                        'reponse' => 'pâturage sous pommiers',
                        'categorie_id' => 1,
                    ),
                    128 => 
                    array (
                        'id' => 129,
                        'alerte_id' => 1023,
                        'question' => 'Absence de complémentation en Mg à la mise à l\'herbe',
                        'reponse' => 'pas de complémentation en Mg à la mise à l\'herbe',
                        'categorie_id' => 1,
                    ),
                    129 => 
                    array (
                        'id' => 130,
                        'alerte_id' => 1023,
                        'question' => 'Absence de transition entre la ration hivernale et printanière',
                        'reponse' => 'pas de transition entre les rations hivernales et printanières ',
                        'categorie_id' => 1,
                    ),
                    130 => 
                    array (
                        'id' => 131,
                        'alerte_id' => 1023,
                        'question' => 'Ingestion excessive d\'herbe jeune qui accélère le transit',
                        'reponse' => 'Ingestion excessive d\'herbe jeune',
                        'categorie_id' => 1,
                    ),
                    131 => 
                    array (
                        'id' => 132,
                        'alerte_id' => 1024,
                        'question' => 'la mortalité est-elle en rapport avec des vêlages difficiles',
                        'reponse' => 'vêlages difficiles',
                        'categorie_id' => 5,
                    ),
                    132 => 
                    array (
                        'id' => 133,
                        'alerte_id' => 1024,
                        'question' => 'Des apports minéraux sont-ils réalisés ?',
                        'reponse' => 'pas d\'apport de minéraux',
                        'categorie_id' => 1,
                    ),
                    133 => 
                    array (
                        'id' => 134,
                        'alerte_id' => 1024,
                        'question' => 'Assurez-vous une bonne surveillance et êtes-vous correctement équipé ?',
                        'reponse' => 'Surveillance peut-être insuffisante',
                        'categorie_id' => 4,
                    ),
                    134 => 
                    array (
                        'id' => 135,
                        'alerte_id' => 1024,
                        'question' => 'Etes-vous équipé d\'une case de vêlage et d\'isolement du couple mère veau ?',
                        'reponse' => 'pas de case de vêlage',
                        'categorie_id' => 4,
                    ),
                    135 => 
                    array (
                        'id' => 136,
                        'alerte_id' => 1024,
                        'question' => 'Assurez-vous une bonne hygiène des locaux ?',
                        'reponse' => 'Hygiène des locaux insuffisante',
                        'categorie_id' => 3,
                    ),
                    136 => 
                    array (
                        'id' => 137,
                        'alerte_id' => 1024,
                        'question' => 'Les vaches ont-elles de bonnes qualités maternelles ?',
                        'reponse' => 'faible qualité maternelle des vaches',
                        'categorie_id' => 7,
                    ),
                    137 => 
                    array (
                        'id' => 138,
                        'alerte_id' => 1024,
                        'question' => 'La prise de colostrum est-elle suffisante ?',
                        'reponse' => 'prise de colostrum insuffisante',
                        'categorie_id' => 4,
                    ),
                    138 => 
                    array (
                        'id' => 139,
                        'alerte_id' => 1024,
                        'question' => 'Possédez-vous une banque de colostrum de qualité congelé ?',
                        'reponse' => 'Pas de banque de colostrum congelé',
                        'categorie_id' => 4,
                    ),
                    139 => 
                    array (
                        'id' => 140,
                        'alerte_id' => 1024,
                        'question' => 'Possédez-vous et utilisez-vous un pèse colostrum ?',
                        'reponse' => 'Pas d\'utilisation d\'un pèse colostrum',
                        'categorie_id' => 4,
                    ),
                    140 => 
                    array (
                        'id' => 141,
                        'alerte_id' => 1024,
                    'question' => 'Les mamelles des vaches sont-elles défectueuse (cf. mamelle vache) ?',
                        'reponse' => 'mamelle défectueuses',
                        'categorie_id' => 5,
                    ),
                    141 => 
                    array (
                        'id' => 142,
                        'alerte_id' => 1025,
                        'question' => 'La ration des mères n\'est-elle pas trop riche en énergie ou en azote ?',
                        'reponse' => 'ration des mères trop riche en énergie ou en azote',
                        'categorie_id' => 1,
                    ),
                    142 => 
                    array (
                        'id' => 143,
                        'alerte_id' => 1025,
                        'question' => 'La quantité de colostrum bue est-elle suffisante ?',
                        'reponse' => 'quantité de colostrum bu insuffisante',
                        'categorie_id' => 4,
                    ),
                    143 => 
                    array (
                        'id' => 144,
                        'alerte_id' => 1025,
                        'question' => 'Possédez-vous et utilisez-vous un pèse colostrum ?',
                        'reponse' => 'Pas d\'utilisation d\'un pèse colostrum',
                        'categorie_id' => 4,
                    ),
                    144 => 
                    array (
                        'id' => 145,
                        'alerte_id' => 1025,
                        'question' => 'Possédez-vous une banque de colostrum de qualité congelé ?',
                        'reponse' => 'Pas de banque de colostrum congelé',
                        'categorie_id' => 4,
                    ),
                    145 => 
                    array (
                        'id' => 146,
                        'alerte_id' => 1025,
                        'question' => 'Y-a-t-il des box à veaux dans la stabulation ?',
                        'reponse' => 'présence de box à veaux dans la stabulation',
                        'categorie_id' => 2,
                    ),
                    146 => 
                    array (
                        'id' => 147,
                        'alerte_id' => 1025,
                        'question' => 'Possédez-vous une case de quarantaine pour les veaux malades ?',
                        'reponse' => 'Pas de case de quarantaine pour les veaux malades',
                        'categorie_id' => 2,
                    ),
                    147 => 
                    array (
                        'id' => 148,
                        'alerte_id' => 1025,
                        'question' => 'Les veaux présentent-ils des écarts d\'âge important ?',
                        'reponse' => 'écarts d\'âge important chez les veaux',
                        'categorie_id' => 4,
                    ),
                    148 => 
                    array (
                        'id' => 149,
                        'alerte_id' => 1025,
                        'question' => 'Assurez-vous une bonne hygiène des box à veaux ?',
                        'reponse' => 'Hygiène des box à veau insuffisante',
                        'categorie_id' => 3,
                    ),
                    149 => 
                    array (
                        'id' => 150,
                        'alerte_id' => 1026,
                        'question' => 'Rencontrez-vous des problèmes de coccidiose ?',
                        'reponse' => 'Problèmes de coccidiose',
                        'categorie_id' => 8,
                    ),
                    150 => 
                    array (
                        'id' => 151,
                        'alerte_id' => 1026,
                        'question' => 'Le bâtiment est-il bien ventilé ?',
                        'reponse' => 'bâtiment mal ventilé',
                        'categorie_id' => 2,
                    ),
                    151 => 
                    array (
                        'id' => 152,
                        'alerte_id' => 1026,
                        'question' => 'Possédez-vous une case de quarantaine pour les veaux malades ?',
                        'reponse' => 'Pas de case de quarantaine pour les veaux malades',
                        'categorie_id' => 2,
                    ),
                    152 => 
                    array (
                        'id' => 153,
                        'alerte_id' => 1026,
                        'question' => 'Les veaux ont-ils accès à un abreuvoir adapté ?',
                        'reponse' => 'abreuvoir inadapté pour les veaux',
                        'categorie_id' => 1,
                    ),
                    153 => 
                    array (
                        'id' => 154,
                        'alerte_id' => 1027,
                        'question' => 'La ration des mères est-elle équilibrée ?',
                        'reponse' => 'ration des mère déséquilibrée',
                        'categorie_id' => 1,
                    ),
                    154 => 
                    array (
                        'id' => 155,
                        'alerte_id' => 1027,
                        'question' => 'Y a-t-il une bonne surveillance et maîtrise du parasitisme (coccidiose',
                        'reponse' => 'mauvaise maîtrise du parasitisme (coccidiose)',
                            'categorie_id' => 8,
                        ),
                        155 => 
                        array (
                            'id' => 156,
                            'alerte_id' => 1027,
                            'question' => 'Arrière-voussure les pathologies du jeune âge ?',
                            'reponse' => 'Peu de maîtrise des pathologies du jeune âge',
                            'categorie_id' => 5,
                        ),
                        156 => 
                        array (
                            'id' => 157,
                            'alerte_id' => 1027,
                        'question' => 'Le critère génétique "croissance" est-il pris en compte dans votre sélection ? (choix des génisses et taureaux)',
                            'reponse' => '"pas de prise en compte du critère génétique ""croissance"" dans la sélection"',
                            'categorie_id' => 4,
                        ),
                        157 => 
                        array (
                            'id' => 158,
                            'alerte_id' => 1028,
                            'question' => 'Les apports en oligoéléments à la mère sont-ils suffisants ?',
                            'reponse' => 'apports d\'oligo-éléments aux mères insuffisants',
                            'categorie_id' => 1,
                        ),
                        158 => 
                        array (
                            'id' => 159,
                            'alerte_id' => 1028,
                            'question' => 'Désinfectez-vous les nombrils à la naissance ?',
                            'reponse' => 'pas de désinfection des nombrils à la naissance',
                            'categorie_id' => 3,
                        ),
                        159 => 
                        array (
                            'id' => 160,
                            'alerte_id' => 1028,
                            'question' => 'Y-a-t-il des box à veaux dans la stabulation ?',
                            'reponse' => 'présence de box à veaux dans la stabulation',
                            'categorie_id' => 2,
                        ),
                        160 => 
                        array (
                            'id' => 161,
                            'alerte_id' => 1028,
                            'question' => 'Assurez-vous une bonne hygiène des box à veaux ?',
                            'reponse' => 'Hygiène des box à veau insuffisante',
                            'categorie_id' => 3,
                        ),
                        161 => 
                        array (
                            'id' => 162,
                            'alerte_id' => 1029,
                            'question' => 'La ration des mères n\'est-elle pas trop riche en énergie ou en azote ?',
                            'reponse' => 'ration des mères trop riche en énergie ou en azote',
                            'categorie_id' => 1,
                        ),
                        162 => 
                        array (
                            'id' => 163,
                            'alerte_id' => 1029,
                            'question' => 'Rencontrez-vous des problèmes de coccidiose, poux, tiques, strongylose ?',
                            'reponse' => 'problèmes de parasitisme divers',
                            'categorie_id' => 8,
                        ),
                        163 => 
                        array (
                            'id' => 164,
                            'alerte_id' => 1029,
                            'question' => 'Arrière-voussure les pathologies du jeune âge ?',
                            'reponse' => 'Peu de maîtrise des pathologies du jeune âge',
                            'categorie_id' => 5,
                        ),
                        164 => 
                        array (
                            'id' => 165,
                            'alerte_id' => 1029,
                            'question' => 'Y a t-il une bonne surveillance et maîtrise du parasitisme (coccidiose',
                            'reponse' => 'mauvaise maîtrise du parasitisme (coccidiose)',
                                'categorie_id' => 8,
                            ),
                            165 => 
                            array (
                                'id' => 166,
                                'alerte_id' => 1029,
                                'question' => 'Avez-vous neutralisé les bétons neufs ?',
                                'reponse' => 'Bétons neufs non neutralisés',
                                'categorie_id' => 2,
                            ),
                            166 => 
                            array (
                                'id' => 167,
                                'alerte_id' => 1029,
                                'question' => 'La complémentation des veaux est-elle adaptée ?',
                                'reponse' => 'complémentation des veaux inadaptée',
                                'categorie_id' => 1,
                            ),
                            167 => 
                            array (
                                'id' => 168,
                                'alerte_id' => 1029,
                                'question' => 'L\'eau est-elle potable ?',
                                'reponse' => 'eau non potable',
                                'categorie_id' => 1,
                            ),
                            168 => 
                            array (
                                'id' => 169,
                                'alerte_id' => 1030,
                                'question' => 'Le bâtiment est-il bien ventilé ?',
                                'reponse' => 'bâtiment mal ventilé',
                                'categorie_id' => 2,
                            ),
                            169 => 
                            array (
                                'id' => 170,
                                'alerte_id' => 1030,
                                'question' => 'La densité d\'animaux n\'est-elle pas trop importante pour le volume d\'air disponible ?',
                                'reponse' => 'densité animale trop élevée / volume d\'air disponible',
                                'categorie_id' => 2,
                            ),
                            170 => 
                            array (
                                'id' => 171,
                                'alerte_id' => 1030,
                                'question' => 'Pratiquez-vous un vide sanitaire et la désinfection des locaux ?',
                                'reponse' => 'vide sanitaire et désinfection des locaux',
                                'categorie_id' => 3,
                            ),
                            171 => 
                            array (
                                'id' => 172,
                                'alerte_id' => 1030,
                                'question' => 'Y-a-t-il des mélange d\'animaux provenant de différents lots/lieux ?',
                                'reponse' => 'mélange d\'animaux d\'origine différente',
                                'categorie_id' => 4,
                            ),
                            172 => 
                            array (
                                'id' => 173,
                                'alerte_id' => 1030,
                                'question' => 'Pratiquez-vous la vaccination avant ou lors de l\'allotement ?',
                                'reponse' => 'vaccination avant ou pendant l\'allotement',
                                'categorie_id' => 5,
                            ),
                            173 => 
                            array (
                                'id' => 174,
                                'alerte_id' => 1030,
                                'question' => 'Les animaux ont-ils subi un coup de chaud/froid lors du transport ou de l\'allotement ?',
                                'reponse' => 'coup de chaud/froid pendant le transport ou l\'allotement',
                                'categorie_id' => 4,
                            ),
                            174 => 
                            array (
                                'id' => 175,
                                'alerte_id' => 1031,
                                'question' => 'La densité d\'animaux n\'est-elle pas trop importante par rapport à la surface de vie ?',
                                'reponse' => 'densité animale trop élevée / surface de vie',
                                'categorie_id' => 2,
                            ),
                            175 => 
                            array (
                                'id' => 176,
                                'alerte_id' => 1031,
                                'question' => 'Y-a-t-il des box à veaux dans la stabulation ?',
                                'reponse' => 'présence de box à veaux dans la stabulation',
                                'categorie_id' => 2,
                            ),
                            176 => 
                            array (
                                'id' => 177,
                                'alerte_id' => 1031,
                                'question' => 'Maintenez-vous le taureau dans les cases avec vaches en chaleur ?',
                                'reponse' => 'Taureau dans les cases avec les vaches en chaleur',
                                'categorie_id' => 4,
                            ),
                            177 => 
                            array (
                                'id' => 178,
                                'alerte_id' => 1031,
                                'question' => 'Possédez-vous du matériel de surveillance ?',
                                'reponse' => 'Pas de matériel de surveillance',
                                'categorie_id' => 4,
                            ),
                            178 => 
                            array (
                                'id' => 179,
                                'alerte_id' => 1032,
                                'question' => 'Possédez-vous des cases de vêlage avec contention des mères ?',
                                'reponse' => 'Pas de cases de vêlage avec contention des mères',
                                'categorie_id' => 2,
                            ),
                            179 => 
                            array (
                                'id' => 180,
                                'alerte_id' => 1032,
                                'question' => 'Votre temps de surveillance est-il suffisant ?',
                                'reponse' => 'Temps de surveillance insuffisant',
                                'categorie_id' => 4,
                            ),
                            180 => 
                            array (
                                'id' => 181,
                                'alerte_id' => 1032,
                                'question' => 'Les vêlages en extérieur sont-ils majoritaires ?',
                                'reponse' => 'vêlages surtout en extérieur',
                                'categorie_id' => 4,
                            ),
                            181 => 
                            array (
                                'id' => 182,
                                'alerte_id' => 1032,
                                'question' => 'Les vêlages sont-ils étalés sur toute l\'année ?',
                                'reponse' => 'vêlages étalés sur toute l\'année',
                                'categorie_id' => 4,
                            ),
                            182 => 
                            array (
                                'id' => 183,
                                'alerte_id' => 1032,
                                'question' => 'Les vaches présentent-elles des faibles qualités maternelles ?',
                                'reponse' => 'faible qualité maternelle des vaches',
                                'categorie_id' => 7,
                            ),
                            183 => 
                            array (
                                'id' => 184,
                                'alerte_id' => 1032,
                                'question' => 'Avez-vous une proportion importante de gros veaux à la naissance ?',
                                'reponse' => 'Proportion importante de gros veaux à la naissance',
                                'categorie_id' => 7,
                            ),
                            184 => 
                            array (
                                'id' => 185,
                                'alerte_id' => 1032,
                                'question' => 'Les gros veaux à la naissance ne sont-ils pas dû à une ration des mères en fin de gestation trop riche ?',
                                'reponse' => 'ration en fin de gestation trop riche',
                                'categorie_id' => 1,
                            ),
                            185 => 
                            array (
                                'id' => 186,
                                'alerte_id' => 1032,
                                'question' => 'La ration des mères en fin de gestation est-elle déficitaire en minéraux',
                                'reponse' => 'ration de fin des gestation déficitaire en minéraux',
                                'categorie_id' => 1,
                            ),
                            186 => 
                            array (
                                'id' => 187,
                                'alerte_id' => 1033,
                                'question' => 'Les vaches présentent-elles de faibles qualités maternelles ?',
                                'reponse' => 'faible qualité maternelle des vaches',
                                'categorie_id' => 7,
                            ),
                            187 => 
                            array (
                                'id' => 188,
                                'alerte_id' => 1033,
                                'question' => 'Possédez-vous des vaches non dociles ?',
                                'reponse' => 'Présence de vaches non dociles',
                                'categorie_id' => 7,
                            ),
                            188 => 
                            array (
                                'id' => 189,
                                'alerte_id' => 1033,
                                'question' => 'observez-vous un manque d\'état important des mères en fin de gestation ?',
                                'reponse' => 'Manque d\'état important des mères en fin de gestation',
                                'categorie_id' => 1,
                            ),
                            189 => 
                            array (
                                'id' => 190,
                                'alerte_id' => 1034,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            190 => 
                            array (
                                'id' => 191,
                                'alerte_id' => 1034,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            191 => 
                            array (
                                'id' => 192,
                                'alerte_id' => 1034,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            192 => 
                            array (
                                'id' => 193,
                                'alerte_id' => 1034,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            193 => 
                            array (
                                'id' => 194,
                                'alerte_id' => 1034,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            194 => 
                            array (
                                'id' => 195,
                                'alerte_id' => 1034,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            195 => 
                            array (
                                'id' => 196,
                                'alerte_id' => 1034,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            196 => 
                            array (
                                'id' => 197,
                                'alerte_id' => 1034,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            197 => 
                            array (
                                'id' => 198,
                                'alerte_id' => 1034,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            198 => 
                            array (
                                'id' => 199,
                                'alerte_id' => 1035,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            199 => 
                            array (
                                'id' => 200,
                                'alerte_id' => 1035,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            200 => 
                            array (
                                'id' => 201,
                                'alerte_id' => 1035,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            201 => 
                            array (
                                'id' => 202,
                                'alerte_id' => 1035,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            202 => 
                            array (
                                'id' => 203,
                                'alerte_id' => 1035,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            203 => 
                            array (
                                'id' => 204,
                                'alerte_id' => 1035,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            204 => 
                            array (
                                'id' => 205,
                                'alerte_id' => 1035,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            205 => 
                            array (
                                'id' => 206,
                                'alerte_id' => 1035,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            206 => 
                            array (
                                'id' => 207,
                                'alerte_id' => 1035,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            207 => 
                            array (
                                'id' => 208,
                                'alerte_id' => 1036,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            208 => 
                            array (
                                'id' => 209,
                                'alerte_id' => 1036,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            209 => 
                            array (
                                'id' => 210,
                                'alerte_id' => 1036,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            210 => 
                            array (
                                'id' => 211,
                                'alerte_id' => 1036,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            211 => 
                            array (
                                'id' => 212,
                                'alerte_id' => 1036,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            212 => 
                            array (
                                'id' => 213,
                                'alerte_id' => 1036,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            213 => 
                            array (
                                'id' => 214,
                                'alerte_id' => 1036,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            214 => 
                            array (
                                'id' => 215,
                                'alerte_id' => 1036,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            215 => 
                            array (
                                'id' => 216,
                                'alerte_id' => 1036,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            216 => 
                            array (
                                'id' => 217,
                                'alerte_id' => 1037,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            217 => 
                            array (
                                'id' => 218,
                                'alerte_id' => 1037,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            218 => 
                            array (
                                'id' => 219,
                                'alerte_id' => 1037,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            219 => 
                            array (
                                'id' => 220,
                                'alerte_id' => 1037,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            220 => 
                            array (
                                'id' => 221,
                                'alerte_id' => 1037,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            221 => 
                            array (
                                'id' => 222,
                                'alerte_id' => 1037,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            222 => 
                            array (
                                'id' => 223,
                                'alerte_id' => 1037,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            223 => 
                            array (
                                'id' => 224,
                                'alerte_id' => 1037,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            224 => 
                            array (
                                'id' => 225,
                                'alerte_id' => 1037,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            225 => 
                            array (
                                'id' => 226,
                                'alerte_id' => 1038,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            226 => 
                            array (
                                'id' => 227,
                                'alerte_id' => 1038,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            227 => 
                            array (
                                'id' => 228,
                                'alerte_id' => 1038,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            228 => 
                            array (
                                'id' => 229,
                                'alerte_id' => 1038,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            229 => 
                            array (
                                'id' => 230,
                                'alerte_id' => 1038,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            230 => 
                            array (
                                'id' => 231,
                                'alerte_id' => 1038,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            231 => 
                            array (
                                'id' => 232,
                                'alerte_id' => 1038,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            232 => 
                            array (
                                'id' => 233,
                                'alerte_id' => 1038,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            233 => 
                            array (
                                'id' => 234,
                                'alerte_id' => 1038,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            234 => 
                            array (
                                'id' => 235,
                                'alerte_id' => 1039,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            235 => 
                            array (
                                'id' => 236,
                                'alerte_id' => 1039,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            236 => 
                            array (
                                'id' => 237,
                                'alerte_id' => 1039,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            237 => 
                            array (
                                'id' => 238,
                                'alerte_id' => 1039,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            238 => 
                            array (
                                'id' => 239,
                                'alerte_id' => 1039,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            239 => 
                            array (
                                'id' => 240,
                                'alerte_id' => 1039,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            240 => 
                            array (
                                'id' => 241,
                                'alerte_id' => 1039,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            241 => 
                            array (
                                'id' => 242,
                                'alerte_id' => 1039,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            242 => 
                            array (
                                'id' => 243,
                                'alerte_id' => 1039,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            243 => 
                            array (
                                'id' => 244,
                                'alerte_id' => 1040,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            244 => 
                            array (
                                'id' => 245,
                                'alerte_id' => 1040,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            245 => 
                            array (
                                'id' => 246,
                                'alerte_id' => 1040,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            246 => 
                            array (
                                'id' => 247,
                                'alerte_id' => 1040,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            247 => 
                            array (
                                'id' => 248,
                                'alerte_id' => 1040,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            248 => 
                            array (
                                'id' => 249,
                                'alerte_id' => 1040,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            249 => 
                            array (
                                'id' => 250,
                                'alerte_id' => 1040,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            250 => 
                            array (
                                'id' => 251,
                                'alerte_id' => 1040,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            251 => 
                            array (
                                'id' => 252,
                                'alerte_id' => 1040,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            252 => 
                            array (
                                'id' => 253,
                                'alerte_id' => 1041,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            253 => 
                            array (
                                'id' => 254,
                                'alerte_id' => 1041,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            254 => 
                            array (
                                'id' => 255,
                                'alerte_id' => 1041,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            255 => 
                            array (
                                'id' => 256,
                                'alerte_id' => 1041,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            256 => 
                            array (
                                'id' => 257,
                                'alerte_id' => 1041,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            257 => 
                            array (
                                'id' => 258,
                                'alerte_id' => 1041,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            258 => 
                            array (
                                'id' => 259,
                                'alerte_id' => 1041,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            259 => 
                            array (
                                'id' => 260,
                                'alerte_id' => 1041,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            260 => 
                            array (
                                'id' => 261,
                                'alerte_id' => 1041,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            261 => 
                            array (
                                'id' => 262,
                                'alerte_id' => 1042,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            262 => 
                            array (
                                'id' => 263,
                                'alerte_id' => 1042,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            263 => 
                            array (
                                'id' => 264,
                                'alerte_id' => 1042,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            264 => 
                            array (
                                'id' => 265,
                                'alerte_id' => 1042,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            265 => 
                            array (
                                'id' => 266,
                                'alerte_id' => 1042,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            266 => 
                            array (
                                'id' => 267,
                                'alerte_id' => 1042,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            267 => 
                            array (
                                'id' => 268,
                                'alerte_id' => 1042,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            268 => 
                            array (
                                'id' => 269,
                                'alerte_id' => 1042,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            269 => 
                            array (
                                'id' => 270,
                                'alerte_id' => 1042,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            270 => 
                            array (
                                'id' => 271,
                                'alerte_id' => 1043,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            271 => 
                            array (
                                'id' => 272,
                                'alerte_id' => 1043,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            272 => 
                            array (
                                'id' => 273,
                                'alerte_id' => 1043,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            273 => 
                            array (
                                'id' => 274,
                                'alerte_id' => 1043,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            274 => 
                            array (
                                'id' => 275,
                                'alerte_id' => 1043,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            275 => 
                            array (
                                'id' => 276,
                                'alerte_id' => 1043,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            276 => 
                            array (
                                'id' => 277,
                                'alerte_id' => 1043,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            277 => 
                            array (
                                'id' => 278,
                                'alerte_id' => 1043,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            278 => 
                            array (
                                'id' => 279,
                                'alerte_id' => 1043,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            279 => 
                            array (
                                'id' => 280,
                                'alerte_id' => 1044,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            280 => 
                            array (
                                'id' => 281,
                                'alerte_id' => 1044,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            281 => 
                            array (
                                'id' => 282,
                                'alerte_id' => 1044,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            282 => 
                            array (
                                'id' => 283,
                                'alerte_id' => 1044,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            283 => 
                            array (
                                'id' => 284,
                                'alerte_id' => 1044,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            284 => 
                            array (
                                'id' => 285,
                                'alerte_id' => 1044,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            285 => 
                            array (
                                'id' => 286,
                                'alerte_id' => 1044,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            286 => 
                            array (
                                'id' => 287,
                                'alerte_id' => 1044,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            287 => 
                            array (
                                'id' => 288,
                                'alerte_id' => 1044,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            288 => 
                            array (
                                'id' => 289,
                                'alerte_id' => 1045,
                                'question' => 'Pratiquez-vous une bonne gestion sanitaire du pâturage ?',
                                'reponse' => 'pas de gestion sanitaire des pâturages',
                                'categorie_id' => 8,
                            ),
                            289 => 
                            array (
                                'id' => 290,
                                'alerte_id' => 1045,
                                'question' => 'Les pâtures présentent-elles des zones humides ?',
                                'reponse' => 'pâturages avec zones humides',
                                'categorie_id' => 8,
                            ),
                            290 => 
                            array (
                                'id' => 291,
                                'alerte_id' => 1045,
                            'question' => 'Le surpâturage est-il fréquent (hauteur d\'herbe <5cm à la sortie)',
                                'reponse' => 'surpâturage fréquent',
                                'categorie_id' => 8,
                            ),
                            291 => 
                            array (
                                'id' => 292,
                                'alerte_id' => 1045,
                            'question' => 'Epandez-vous du fumier frais tardivement ? (au printemps)',
                                'reponse' => 'épandage tardif de fumier frais au printemps',
                                'categorie_id' => 8,
                            ),
                            292 => 
                            array (
                                'id' => 293,
                                'alerte_id' => 1045,
                                'question' => 'L\'abreuvement au pâturage est-il de bonne qualité ?',
                                'reponse' => 'qualité insuffisante de l\'abreuvement au pâturage',
                                'categorie_id' => 8,
                            ),
                            293 => 
                            array (
                                'id' => 294,
                                'alerte_id' => 1045,
                                'question' => 'Mélangez-vous d\'animaux de tout âge dans les mêmes parcelles ?',
                                'reponse' => 'Mélange d\'animaux de tout âge sur les mêmes parcelles',
                                'categorie_id' => 8,
                            ),
                            294 => 
                            array (
                                'id' => 295,
                                'alerte_id' => 1045,
                                'question' => 'Votre temps de détection des animaux à poils piqués est-il suffisant ?',
                                'reponse' => 'Détection tardive des animaux à poil piqué',
                                'categorie_id' => 8,
                            ),
                            295 => 
                            array (
                                'id' => 296,
                                'alerte_id' => 1045,
                                'question' => 'Recherchez-vous les parasites par analyse coprologique ou sanguine ?',
                                'reponse' => 'Pas de recherche des parasites',
                                'categorie_id' => 8,
                            ),
                            296 => 
                            array (
                                'id' => 297,
                                'alerte_id' => 1045,
                                'question' => 'Administrez-vous des traitements curatifs ?',
                                'reponse' => 'Traitements curatifs',
                                'categorie_id' => 8,
                            ),
                            297 => 
                            array (
                                'id' => 298,
                                'alerte_id' => 1046,
                                'question' => 'Les souches de vaches avec des gros trayons et/ou quartiers déséquilibrés',
                                'reponse' => 'vaches avec gros trayons',
                                'categorie_id' => 6,
                            ),
                            298 => 
                            array (
                                'id' => 299,
                                'alerte_id' => 1046,
                                'question' => 'Les vaches présentent-elles de faibles qualités maternelles avec refus du veau et apparition de mammites et perte d\'un quartier ?',
                                'reponse' => 'faible qualité maternelle des vaches -> mammites',
                                'categorie_id' => 6,
                            ),
                            299 => 
                            array (
                                'id' => 300,
                                'alerte_id' => 1046,
                                'question' => 'Les vaches présentent-elles de fortes qualités maternelles avec une production laitière trop importante et apparition de mammites et perte d\'un quartier ?',
                                'reponse' => 'faible qualité maternelle des vaches -> mammites',
                                'categorie_id' => 6,
                            ),
                            300 => 
                            array (
                                'id' => 301,
                                'alerte_id' => 1046,
                                'question' => 'Les veaux sont-ils trop lourds à la naissance',
                                'reponse' => 'veaux trop lourds à la naissance',
                                'categorie_id' => 6,
                            ),
                            301 => 
                            array (
                                'id' => 302,
                                'alerte_id' => 1046,
                                'question' => 'La montée de lait est-elle trop rapide par rapport aux besoins du veau et apparition de mammites et perte d\'un quartier ?',
                                'reponse' => 'montée de lait trop rapide après le vêlage',
                                'categorie_id' => 1,
                            ),
                            302 => 
                            array (
                                'id' => 303,
                                'alerte_id' => 1046,
                                'question' => 'La ration avec mauvais équilibre minéral en fin de lactation et problèmes de la mamelle ?',
                                'reponse' => 'mauvais équilibre minéral favorisant des œdèmes de la mamelle',
                                'categorie_id' => 1,
                            ),
                            303 => 
                            array (
                                'id' => 304,
                                'alerte_id' => 1046,
                                'question' => 'Les génisses se tètent-elles entre elles après le sevrage avec déformation des mamelles ?',
                                'reponse' => 'les génisses se tètent entre elles',
                                'categorie_id' => 7,
                            ),
                            304 => 
                            array (
                                'id' => 305,
                                'alerte_id' => 1047,
                                'question' => 'Les vaches présentent-elles de faibles qualités maternelles avec refus du veau et apparition de mammites et perte d\'un quartier ?',
                                'reponse' => 'faible qualité maternelle des vaches -> mammites',
                                'categorie_id' => 6,
                            ),
                            305 => 
                            array (
                                'id' => 306,
                                'alerte_id' => 1047,
                                'question' => 'Les vaches présentent-elles de fortes qualités maternelles avec une production laitière trop importante et apparition de mammites et perte d\'un quartier ?',
                                'reponse' => 'faible qualité maternelle des vaches -> mammites',
                                'categorie_id' => 6,
                            ),
                            306 => 
                            array (
                                'id' => 307,
                                'alerte_id' => 1047,
                                'question' => 'Les veaux sont-ils trop lourds à la naissance',
                                'reponse' => 'veaux trop lourds à la naissance',
                                'categorie_id' => 6,
                            ),
                            307 => 
                            array (
                                'id' => 308,
                                'alerte_id' => 1047,
                                'question' => 'La montée de lait est-elle trop rapide par rapport aux besoins du veau et apparition de mammites et perte d\'un quartier ?',
                                'reponse' => 'montée de lait trop rapide après le vêlage',
                                'categorie_id' => 1,
                            ),
                            308 => 
                            array (
                                'id' => 309,
                                'alerte_id' => 1047,
                                'question' => 'La ration avec mauvais équilibre minéral en fin de lactation et oedème de la mamelle + gros trayons congestionnés et durs + mammites ?',
                                'reponse' => 'mauvais équilibre minéral favorisant des œdèmes de la mamelle',
                                'categorie_id' => 1,
                            ),
                            309 => 
                            array (
                                'id' => 310,
                                'alerte_id' => 1048,
                                'question' => 'La ration présente-t-elle un excès d\'amidon ou sucres dans la ration ?',
                                'reponse' => 'ration excédentaire en amidon et sucres',
                                'categorie_id' => 1,
                            ),
                            310 => 
                            array (
                                'id' => 311,
                                'alerte_id' => 1048,
                                'question' => 'La ration présente-t-elle un manque de fibrosité ?',
                                'reponse' => 'insuffisance de fibres dans la ration',
                                'categorie_id' => 1,
                            ),
                            311 => 
                            array (
                                'id' => 312,
                                'alerte_id' => 1048,
                                'question' => 'La ration présente-t-elle un déficit en minéraux et oligo-éléments ?',
                                'reponse' => 'déficit de la ration en minéraux et oligo-éléments',
                                'categorie_id' => 1,
                            ),
                            312 => 
                            array (
                                'id' => 313,
                                'alerte_id' => 1048,
                                'question' => 'La ration présente-t-elle un déficit énergétique ?',
                                'reponse' => 'ration déficitaire en énergie',
                                'categorie_id' => 1,
                            ),
                            313 => 
                            array (
                                'id' => 314,
                                'alerte_id' => 1048,
                                'question' => 'Les bétons neufs sont-ils neutralisés ?',
                                'reponse' => 'bétons neufs non neutralisés',
                                'categorie_id' => 2,
                            ),
                            314 => 
                            array (
                                'id' => 315,
                                'alerte_id' => 1048,
                                'question' => 'Le bâtiment présente-t-il une humidité permanente sur les sols ?',
                                'reponse' => 'excès d\'humidité permanente sur les sols',
                                'categorie_id' => 2,
                            ),
                            315 => 
                            array (
                                'id' => 316,
                                'alerte_id' => 1048,
                                'question' => 'Le raclage des aires de vie est-il suffisamment fréquent ?',
                                'reponse' => 'raclage des aires de vie pas suffisamment fréquent',
                                'categorie_id' => 2,
                            ),
                            316 => 
                            array (
                                'id' => 317,
                                'alerte_id' => 1048,
                                'question' => 'La sélection du troupeau est-elle axée sur les aptitudes fonctionnelles ?',
                                'reponse' => 'sélection du troupeau non axées sur les aptitudes fonctionnelles',
                                'categorie_id' => 6,
                            ),
                            317 => 
                            array (
                                'id' => 318,
                                'alerte_id' => 1048,
                                'question' => 'Le tri des génisses de renouvellement tient-il compte des aplombs ?',
                                'reponse' => 'pas de tri des génisses sur les aplombs',
                                'categorie_id' => 6,
                            ),
                            318 => 
                            array (
                                'id' => 319,
                                'alerte_id' => 1048,
                                'question' => 'Y-a-t-il des cailloux, silex sur les chemins d\'accès ?',
                                'reponse' => 'présence de cailloux',
                                'categorie_id' => 7,
                            ),
                            319 => 
                            array (
                                'id' => 320,
                                'alerte_id' => 1049,
                                'question' => 'La ration présente-t-elle un excès d\'amidon ou sucres dans la ration ?',
                                'reponse' => 'ration excédentaire en amidon et sucres',
                                'categorie_id' => 1,
                            ),
                            320 => 
                            array (
                                'id' => 321,
                                'alerte_id' => 1049,
                                'question' => 'La ration présente-t-elle un manque de fibrosité ?',
                                'reponse' => 'insuffisance de fibres dans la ration',
                                'categorie_id' => 1,
                            ),
                            321 => 
                            array (
                                'id' => 322,
                                'alerte_id' => 1049,
                                'question' => 'La ration présente-t-elle un déficit en minéraux et oligo-éléments ?',
                                'reponse' => 'déficit de la ration en minéraux et oligo-éléments',
                                'categorie_id' => 1,
                            ),
                            322 => 
                            array (
                                'id' => 323,
                                'alerte_id' => 1049,
                                'question' => 'La ration présente-t-elle un déficit énergétique ?',
                                'reponse' => 'ration déficitaire en énergie',
                                'categorie_id' => 1,
                            ),
                            323 => 
                            array (
                                'id' => 324,
                                'alerte_id' => 1049,
                                'question' => 'Les bétons neufs sont-ils neutralisés ?',
                                'reponse' => 'bétons neufs non neutralisés',
                                'categorie_id' => 2,
                            ),
                            324 => 
                            array (
                                'id' => 325,
                                'alerte_id' => 1049,
                                'question' => 'Le bâtiment présente-t-il une humidité permanente sur les sols ?',
                                'reponse' => 'excès d\'humidité permanente sur les sols',
                                'categorie_id' => 2,
                            ),
                            325 => 
                            array (
                                'id' => 326,
                                'alerte_id' => 1049,
                                'question' => 'Le raclage des aires de vie est-il suffisamment fréquent ?',
                                'reponse' => 'raclage des aires de vie pas suffisamment fréquent',
                                'categorie_id' => 2,
                            ),
                            326 => 
                            array (
                                'id' => 327,
                                'alerte_id' => 1049,
                                'question' => 'La sélection du troupeau est-elle axée sur les aptitudes fonctionnelles ?',
                                'reponse' => 'sélection du troupeau non axées sur les aptitudes fonctionnelles',
                                'categorie_id' => 6,
                            ),
                            327 => 
                            array (
                                'id' => 328,
                                'alerte_id' => 1049,
                                'question' => 'Le tri des génisses de renouvellement tient-il compte des aplombs ?',
                                'reponse' => 'pas de tri des génisses sur les aplombs',
                                'categorie_id' => 6,
                            ),
                            328 => 
                            array (
                                'id' => 329,
                                'alerte_id' => 1049,
                                'question' => 'Le taureau est-il paré avant mise à la reproduction ?',
                                'reponse' => 'pas de parage du taureau avant la mise à la reproduction',
                                'categorie_id' => 4,
                            ),
                            329 => 
                            array (
                                'id' => 330,
                                'alerte_id' => 1049,
                                'question' => 'Le taureau passe-t-il sa période de repos du litière accumulée ?',
                                'reponse' => 'taureau sur litière accumulée pendant sa période de repos',
                                'categorie_id' => 4,
                            ),
                            330 => 
                            array (
                                'id' => 331,
                                'alerte_id' => 1049,
                                'question' => 'Y-a-t-il des cailloux, silex sur les chemins d\'accès ?',
                                'reponse' => 'présence de cailloux',
                                'categorie_id' => 7,
                            ),
                            331 => 
                            array (
                                'id' => 332,
                                'alerte_id' => 1050,
                                'question' => 'La ration présente-t-elle un excès d\'amidon ou sucres dans la ration ?',
                                'reponse' => 'ration excédentaire en amidon et sucres',
                                'categorie_id' => 1,
                            ),
                            332 => 
                            array (
                                'id' => 333,
                                'alerte_id' => 1050,
                                'question' => 'La ration présente-t-elle un manque de fibrosité ?',
                                'reponse' => 'insuffisance de fibres dans la ration',
                                'categorie_id' => 1,
                            ),
                            333 => 
                            array (
                                'id' => 334,
                                'alerte_id' => 1050,
                                'question' => 'La ration présente-t-elle un déficit en minéraux et oligo-éléments ?',
                                'reponse' => 'déficit de la ration en minéraux et oligo-éléments',
                                'categorie_id' => 1,
                            ),
                            334 => 
                            array (
                                'id' => 335,
                                'alerte_id' => 1050,
                                'question' => 'La ration présente-t-elle un déficit énergétique ?',
                                'reponse' => 'ration déficitaire en énergie',
                                'categorie_id' => 1,
                            ),
                            335 => 
                            array (
                                'id' => 336,
                                'alerte_id' => 1050,
                                'question' => 'Les bétons neufs sont-ils neutralisés ?',
                                'reponse' => 'bétons neufs non neutralisés',
                                'categorie_id' => 2,
                            ),
                            336 => 
                            array (
                                'id' => 337,
                                'alerte_id' => 1050,
                                'question' => 'Le bâtiment présente-t-il une humidité permanente sur les sols ?',
                                'reponse' => 'excès d\'humidité permanente sur les sols',
                                'categorie_id' => 2,
                            ),
                            337 => 
                            array (
                                'id' => 338,
                                'alerte_id' => 1050,
                                'question' => 'Le raclage des aires de vie est-il suffisamment fréquent ?',
                                'reponse' => 'raclage des aires de vie pas suffisamment fréquent',
                                'categorie_id' => 4,
                            ),
                            338 => 
                            array (
                                'id' => 339,
                                'alerte_id' => 1050,
                                'question' => 'La sélection du troupeau est-elle axée sur les aptitudes fonctionnelles ?',
                                'reponse' => 'sélection du troupeau non axées sur les aptitudes fonctionnelles',
                                'categorie_id' => 6,
                            ),
                            339 => 
                            array (
                                'id' => 340,
                                'alerte_id' => 1050,
                                'question' => 'Le tri des génisses de renouvellement tient-il compte des aplombs ?',
                                'reponse' => 'pas de tri des génisses sur les aplombs',
                                'categorie_id' => 6,
                            ),
                            340 => 
                            array (
                                'id' => 341,
                                'alerte_id' => 1050,
                                'question' => 'Le taureau est-il paré avant mise à la reproduction ?',
                                'reponse' => 'pas de parage du taureau avant la mise à la reproduction',
                                'categorie_id' => 4,
                            ),
                            341 => 
                            array (
                                'id' => 342,
                                'alerte_id' => 1050,
                                'question' => 'Le taureau passe-t-il sa période de repos du litière accumulée ?',
                                'reponse' => 'taureau sur litière accumulée pendant sa période de repos',
                                'categorie_id' => 4,
                            ),
                            342 => 
                            array (
                                'id' => 343,
                                'alerte_id' => 1050,
                                'question' => 'Y-a-t-il des cailloux, silex sur les chemins d\'accès ?',
                                'reponse' => 'présence de cailloux',
                                'categorie_id' => 7,
                            ),
                            343 => 
                            array (
                                'id' => 344,
                                'alerte_id' => 3000,
                                'question' => 'Les animaux sont-ils parfois sous-alimentés ?',
                                'reponse' => 'Sous-alimentation de certains animaux à certaines périodes',
                                'categorie_id' => 1,
                            ),
                            344 => 
                            array (
                                'id' => 345,
                                'alerte_id' => 3000,
                                'question' => 'Les rations sont-elles parfois inadaptées aux besoins des animaux ?',
                                'reponse' => 'Rations parfois inadaptées aux besoins des animaux',
                                'categorie_id' => 1,
                            ),
                            345 => 
                            array (
                                'id' => 346,
                                'alerte_id' => 3000,
                                'question' => 'Les aliments distribués sont-ils sains et bien conservés ?',
                                'reponse' => 'Aliments parfois mal conservés',
                                'categorie_id' => 1,
                            ),
                            346 => 
                            array (
                                'id' => 347,
                                'alerte_id' => 3000,
                                'question' => 'Les accès à l\'aliment sont-ils suffisants pour tous les animaux en même temps ?',
                                'reponse' => 'Problèmes d’accès aux aliments pour tous les animaux en même temps',
                                'categorie_id' => 1,
                            ),
                            347 => 
                            array (
                                'id' => 348,
                                'alerte_id' => 3000,
                                'question' => 'Les chèvres sont–elles parasitées ?',
                                'reponse' => 'Parasitisme récurrent',
                                'categorie_id' => 8,
                            ),
                            348 => 
                            array (
                                'id' => 349,
                                'alerte_id' => 3001,
                                'question' => 'Les conditions de logements sont-elles problématiques ?',
                                'reponse' => 'Trop forte densité de logement',
                                'categorie_id' => 2,
                            ),
                            349 => 
                            array (
                                'id' => 350,
                                'alerte_id' => 3001,
                                'question' => 'Les quantités de paille litière sont-elles insuffisantes ?',
                                'reponse' => 'Paillage insuffisant',
                                'categorie_id' => 2,
                            ),
                            350 => 
                            array (
                                'id' => 351,
                                'alerte_id' => 3001,
                                'question' => 'Les surfaces de vie sont-elles trop faibles ?',
                                'reponse' => 'Surface du logement insuffisantes',
                                'categorie_id' => 2,
                            ),
                            351 => 
                            array (
                                'id' => 352,
                                'alerte_id' => 3001,
                                'question' => 'La ration est-elle déséquilibrée ?',
                                'reponse' => 'Ration déséquilibrée',
                                'categorie_id' => 1,
                            ),
                            352 => 
                            array (
                                'id' => 353,
                                'alerte_id' => 3001,
                                'question' => 'La ration manque-t-elle de fibres ?',
                                'reponse' => 'Manque de fibres dans la ration',
                                'categorie_id' => 1,
                            ),
                            353 => 
                            array (
                                'id' => 354,
                                'alerte_id' => 3001,
                            'question' => 'Les animaux sont-ils parasités ? (cf parasitisme)',
                                'reponse' => 'Parasitisme récurrent',
                                'categorie_id' => 8,
                            ),
                            354 => 
                            array (
                                'id' => 355,
                                'alerte_id' => 3002,
                            'question' => 'Les réformes sont-elles subies (sanitaire) plutôt que choisies (sélection) ?',
                                'reponse' => 'Trop de réformes pour causes sanitaires',
                                'categorie_id' => 5,
                            ),
                            355 => 
                            array (
                                'id' => 356,
                                'alerte_id' => 3002,
                                'question' => 'Les réformes sont-elles trop tardives ?',
                                'reponse' => 'Réformes tardives',
                                'categorie_id' => 4,
                            ),
                            356 => 
                            array (
                                'id' => 357,
                                'alerte_id' => 3002,
                                'question' => 'Le troupeau a-t-il des soucis de fertilité ?',
                                'reponse' => 'Problèmes d’infertilité',
                                'categorie_id' => 5,
                            ),
                            357 => 
                            array (
                                'id' => 358,
                                'alerte_id' => 3002,
                                'question' => 'Les réformes sont-elles d\'une autre origine ?',
                                'reponse' => 'Réformes pour d’autres causes',
                                'categorie_id' => 7,
                            ),
                            358 => 
                            array (
                                'id' => 359,
                                'alerte_id' => 3003,
                                'question' => 'Le troupeau est-il suffisamment renouvelé ?',
                                'reponse' => 'Le renouvellement du troupeau est insuffisant',
                                'categorie_id' => 4,
                            ),
                            359 => 
                            array (
                                'id' => 360,
                                'alerte_id' => 3003,
                                'question' => 'Les chèvres présentent-elles des pathologies infectieuses chroniques ?',
                                'reponse' => 'Cas d’infections chroniques',
                                'categorie_id' => 5,
                            ),
                            360 => 
                            array (
                                'id' => 361,
                                'alerte_id' => 3003,
                                'question' => 'Les chèvres présentent-elles des pathologies métaboliques ?',
                                'reponse' => 'Cas de maladies métaboliques',
                                'categorie_id' => 5,
                            ),
                            361 => 
                            array (
                                'id' => 362,
                                'alerte_id' => 3003,
                                'question' => 'L\'état corporel du troupeau est-il satisfaisant toute l\'année ?',
                                'reponse' => 'L’état corporel n’est pas satisfaisant toute l’année',
                                'categorie_id' => 1,
                            ),
                            362 => 
                            array (
                                'id' => 363,
                                'alerte_id' => 3003,
                                'question' => 'Le troupeau présente-t-il des problèmes de mise-bas ?',
                                'reponse' => 'Problèmes à la mise-bas',
                                'categorie_id' => 5,
                            ),
                            363 => 
                            array (
                                'id' => 364,
                                'alerte_id' => 3003,
                                'question' => 'La fréquence de surveillance est-elle suffisante ?',
                                'reponse' => 'Surveillance insuffisante',
                                'categorie_id' => 4,
                            ),
                            364 => 
                            array (
                                'id' => 365,
                                'alerte_id' => 3004,
                                'question' => 'Les chèvres présentent-elles des pathologies infectieuses chroniques ?',
                                'reponse' => 'Cas d’infections chroniques',
                                'categorie_id' => 5,
                            ),
                            365 => 
                            array (
                                'id' => 366,
                                'alerte_id' => 3004,
                                'question' => 'Y-a-t-il eu introduction d\'animaux avec achat dernièrement ?',
                                'reponse' => 'Introduction récente d’animaux achetés',
                                'categorie_id' => 5,
                            ),
                            366 => 
                            array (
                                'id' => 367,
                                'alerte_id' => 3004,
                            'question' => 'Les conditions de logement (hygiène, ventilation, température) sont-elles satisfaisantes ?',
                                'reponse' => 'Conditions de logement insuffisantes',
                                'categorie_id' => 2,
                            ),
                            367 => 
                            array (
                                'id' => 368,
                                'alerte_id' => 3004,
                                'question' => 'Les écarts de températures sont-ils accentués dans le bâtiment ?',
                                'reponse' => 'Ecarts de température importants dans le bâtiment',
                                'categorie_id' => 2,
                            ),
                            368 => 
                            array (
                                'id' => 369,
                                'alerte_id' => 3005,
                                'question' => 'L\'état général du troupeau est-il évalué régulièrement ? Si oui, est-il satisfaisant ?',
                                'reponse' => 'L’état du troupeau est rarement évalué et paraît insatisfaisant',
                                'categorie_id' => 4,
                            ),
                            369 => 
                            array (
                                'id' => 370,
                                'alerte_id' => 3005,
                                'question' => 'La ration est-elle déséquilibrée ?',
                                'reponse' => 'Ration déséquilibrée',
                                'categorie_id' => 1,
                            ),
                            370 => 
                            array (
                                'id' => 371,
                                'alerte_id' => 3005,
                                'question' => 'Y-a-t-il des transitions alimentaires de moins de 3 semaines ?',
                                'reponse' => 'Transitions alimentaires parfois trop courtes',
                                'categorie_id' => 1,
                            ),
                            371 => 
                            array (
                                'id' => 372,
                                'alerte_id' => 3005,
                                'question' => 'Y-a-t-il des problèmes dans la rotation des pâtures ?',
                                'reponse' => 'Problèmes dans la rotation des pâtures',
                                'categorie_id' => 1,
                            ),
                            372 => 
                            array (
                                'id' => 373,
                                'alerte_id' => 3005,
                                'question' => 'Les pâtures présentent-elles des excès d\'azote ?',
                                'reponse' => 'Excès d’azote dans les pâtures',
                                'categorie_id' => 1,
                            ),
                            373 => 
                            array (
                                'id' => 374,
                                'alerte_id' => 3005,
                                'question' => 'L’infestation parasitaire n’est-elle pas mal gérée',
                                'reponse' => 'Infestation parasitaire mal gérée',
                                'categorie_id' => 8,
                            ),
                            374 => 
                            array (
                                'id' => 375,
                                'alerte_id' => 3006,
                                'question' => 'Les rations des jeunes sont-elles déséquilibrées ?',
                                'reponse' => 'Rations des jeunes déséquilibrées',
                                'categorie_id' => 1,
                            ),
                            375 => 
                            array (
                                'id' => 376,
                                'alerte_id' => 3006,
                                'question' => 'Le sevrage des jeunes présente-t-il des difficultés ?',
                                'reponse' => 'Problèmes au sevrage',
                                'categorie_id' => 1,
                            ),
                            376 => 
                            array (
                                'id' => 377,
                                'alerte_id' => 3006,
                            'question' => 'Les jeunes sont-ils surveillés sur le plan du parasitisme ? (cf parasitisme)',
                                'reponse' => 'Parasitisme chez les jeunes',
                                'categorie_id' => 8,
                            ),
                            377 => 
                            array (
                                'id' => 378,
                                'alerte_id' => 3006,
                            'question' => 'Les jeunes sont-ils atteints ou ont-ils été atteints de maladies ? (cf santé des jeunes)',
                                'reponse' => 'Maladies diverses chez les jeunes',
                                'categorie_id' => 5,
                            ),
                            378 => 
                            array (
                                'id' => 379,
                                'alerte_id' => 3007,
                                'question' => 'Les rations ne sont-elles pas déséquilibrées ou insuffisantes ?',
                                'reponse' => 'Rations déséquilibrées ou insuffisantes',
                                'categorie_id' => 1,
                            ),
                            379 => 
                            array (
                                'id' => 380,
                                'alerte_id' => 3007,
                                'question' => 'Les aliments du commerce ont-ils des formulations adaptées aux caprins ?',
                                'reponse' => 'Aliments non formulés pour des caprins',
                                'categorie_id' => 1,
                            ),
                            380 => 
                            array (
                                'id' => 381,
                                'alerte_id' => 3008,
                                'question' => 'Vous n’avez pas informé votre vétérinaire de la présence de troubles nerveux',
                                'reponse' => 'Vous n’avez pas informé votre vétérinaire de la présence de troubles nerveux',
                                'categorie_id' => 5,
                            ),
                            381 => 
                            array (
                                'id' => 382,
                                'alerte_id' => 3008,
                                'question' => 'Existe-t-il des problèmes dans l’aménagement des surfaces qui favoriserait les affrontements ?',
                                'reponse' => 'Problèmes d’expression violente de la hiérarchie',
                                'categorie_id' => 2,
                            ),
                            382 => 
                            array (
                                'id' => 383,
                                'alerte_id' => 3008,
                                'question' => 'Les maladies de type Listériose, Tétanos, Botulisme, sont-elles surveillées ?',
                                'reponse' => 'Pas de surveillance de la listériose, du tétanos, du botulisme',
                                'categorie_id' => 5,
                            ),
                            383 => 
                            array (
                                'id' => 384,
                                'alerte_id' => 3008,
                            'question' => 'Le troupeau est-il régulièrement parasité (interne, externe) ?',
                                'reponse' => 'Troupeau régulièrement parasité',
                                'categorie_id' => 8,
                            ),
                            384 => 
                            array (
                                'id' => 385,
                                'alerte_id' => 3008,
                                'question' => 'Le troupeau est-il carencé en minéraux, oligo-éléments et vitamines ?',
                                'reponse' => 'Carences en oligo-éléments et vitamines',
                                'categorie_id' => 1,
                            ),
                            385 => 
                            array (
                                'id' => 386,
                                'alerte_id' => 3008,
                                'question' => 'Le vétérinaire a-t-il diagnostiqué la Nécrose du cortex ?',
                                'reponse' => 'Présence de nécrose du cortex',
                                'categorie_id' => 5,
                            ),
                            386 => 
                            array (
                                'id' => 387,
                                'alerte_id' => 3008,
                                'question' => 'Existe-t-il des risques d\'intoxication par le sel, plomb, azote non protéique, intoxication végétales sur l\'exploitation ?',
                                'reponse' => 'Risques d’intoxication',
                                'categorie_id' => 5,
                            ),
                            387 => 
                            array (
                                'id' => 388,
                                'alerte_id' => 3009,
                                'question' => 'La couverture des besoins alimentaires lors de la première année n’est-elle pas insuffisante ?',
                                'reponse' => 'Couverture des besoins alimentaires insuffisante la 1ère année',
                                'categorie_id' => 1,
                            ),
                            388 => 
                            array (
                                'id' => 389,
                                'alerte_id' => 3009,
                            'question' => 'L\'état corporel des chevrettes est-il satisfaisant (pas trop grasse ou trop maigre) au moment de la mise à la reproduction ?',
                                'reponse' => 'État corporel des chevrettes inadéquat à la reproduction',
                                'categorie_id' => 1,
                            ),
                            389 => 
                            array (
                                'id' => 390,
                                'alerte_id' => 3009,
                                'question' => 'Les chevrettes ont-elles subies des maladies respiratoires durant leur croissance ?',
                                'reponse' => 'Présence de maladies respiratoires la première année',
                                'categorie_id' => 5,
                            ),
                            390 => 
                            array (
                                'id' => 391,
                                'alerte_id' => 3009,
                            'question' => 'Les chevrettes ont-elles été confrontées à des problèmes de parasitisme, en particulier la coccidiose ? (Se référer à l\'onglet sur le parasitisme)',
                                'reponse' => 'Présence de coccidiose pendant la première année',
                                'categorie_id' => 8,
                            ),
                            391 => 
                            array (
                                'id' => 392,
                                'alerte_id' => 3010,
                                'question' => 'N’y-a-t-il pas des excès d’azote soluble dans la ration ?',
                                'reponse' => 'Excès d’azote soluble dans la ration',
                                'categorie_id' => 1,
                            ),
                            392 => 
                            array (
                                'id' => 393,
                                'alerte_id' => 3010,
                                'question' => 'La ration distribuée est-elle de qualité insuffisante ?',
                                'reponse' => 'Ration de qualité insuffisante',
                                'categorie_id' => 1,
                            ),
                            393 => 
                            array (
                                'id' => 394,
                                'alerte_id' => 3010,
                                'question' => 'Les animaux ne sont-ils pas trop serrés ?',
                                'reponse' => 'Densité trop importante',
                                'categorie_id' => 2,
                            ),
                            394 => 
                            array (
                                'id' => 395,
                                'alerte_id' => 3010,
                            'question' => 'Les chèvres et chevrettes sont-elles mélangées ? (cf. comportement des mâles)',
                                'reponse' => 'Mélange de chèvres et chevrettes pendant la reproduction',
                                'categorie_id' => 4,
                            ),
                            395 => 
                            array (
                                'id' => 396,
                                'alerte_id' => 3010,
                            'question' => 'Le bâtiment pose-t-il des problèmes d’isolation et de ventilation (hors plage 0 et 25C°)',
                                'reponse' => 'Problèmes de ventilation ou d’isolation du bâtiment',
                                'categorie_id' => 2,
                            ),
                            396 => 
                            array (
                                'id' => 397,
                                'alerte_id' => 3010,
                                'question' => 'Le nombre de boucs fertiles est-il en adéquation avec le nombre de femelles à saillir ?',
                                'reponse' => 'Nombre de boucs insuffisants',
                                'categorie_id' => 4,
                            ),
                            397 => 
                            array (
                                'id' => 398,
                                'alerte_id' => 3010,
                                'question' => 'Y-a-t-il un manque de rigueur dans l’éloignement des boucs',
                                'reponse' => 'Manque de rigueur dans l’éloignement des boucs',
                                'categorie_id' => 4,
                            ),
                            398 => 
                            array (
                                'id' => 399,
                                'alerte_id' => 3010,
                                'question' => 'Le troupeau est-il touché par le phénomène de pseudo-gestation ?',
                                'reponse' => 'Trop de pseudo-gestations',
                                'categorie_id' => 5,
                            ),
                            399 => 
                            array (
                                'id' => 400,
                                'alerte_id' => 3010,
                            'question' => 'Présence de 2 troupeaux ovins-caprins mélangés ? (risque de saillie non viable)',
                                'reponse' => 'Présence de deux troupeaux ovins caprins mélangés',
                                'categorie_id' => 4,
                            ),
                            400 => 
                            array (
                                'id' => 401,
                                'alerte_id' => 3010,
                                'question' => 'Les retours en chaleur font-ils suite à une canicule ou à une forte pluviométrie ?',
                                'reponse' => 'Perturbations météorologiques',
                                'categorie_id' => 7,
                            ),
                            401 => 
                            array (
                                'id' => 402,
                                'alerte_id' => 3010,
                                'question' => 'Existe-t-il des antécédents de maladies abortives dans l\'élevage ?',
                                'reponse' => 'Antécédents de maladies abortives dans l’élevage',
                                'categorie_id' => 5,
                            ),
                            402 => 
                            array (
                                'id' => 403,
                                'alerte_id' => 3010,
                            'question' => 'A-t-on observé des cas d\'épididymites chez les mâles ? (attention aux troupeaux menés en commun ovins-caprins)',
                                'reponse' => 'Présence d’épididymite chez les mâles',
                                'categorie_id' => 5,
                            ),
                            403 => 
                            array (
                                'id' => 404,
                                'alerte_id' => 3010,
                            'question' => 'La couverture des besoins en énergie en fin de gestation est-elle correcte ? (absence de Syndrome de la chèvre grasse à la mise bas)',
                                'reponse' => 'Syndrome de la chèvre grasse en fin de gestation',
                                'categorie_id' => 1,
                            ),
                            404 => 
                            array (
                                'id' => 405,
                                'alerte_id' => 3011,
                                'question' => 'La ration est équilibrée en vitamines, minéraux et oligoéléments ?',
                                'reponse' => 'Déséquilibres de la ration en oligo-éléments',
                                'categorie_id' => 1,
                            ),
                            405 => 
                            array (
                                'id' => 406,
                                'alerte_id' => 3011,
                            'question' => 'L\'éleveur intervient-il lors des mises-bas ? (manipulation / aide à la mise bas)',
                                'reponse' => 'Trop d’interventions pendant les mises-bas',
                                'categorie_id' => 4,
                            ),
                            406 => 
                            array (
                                'id' => 407,
                                'alerte_id' => 3011,
                                'question' => 'Existe-t-il une fréquence importante d\'infection de la matrice ?',
                                'reponse' => 'Fréquence importante de métrites',
                                'categorie_id' => 5,
                            ),
                            407 => 
                            array (
                                'id' => 408,
                                'alerte_id' => 3011,
                            'question' => 'Y-a-t-il des antécédents de maladies abortives dans l\'élevage ? (Chlamydia, toxoplasmose, fièvre Q)',
                                'reponse' => 'Antécédents de maladies abortives dans l’élevage',
                                'categorie_id' => 5,
                            ),
                            408 => 
                            array (
                                'id' => 409,
                                'alerte_id' => 3012,
                                'question' => 'La couverture des besoins en azote en fin de gestation est-elle correcte ?',
                                'reponse' => 'Ration insuffisante en azote en fin de gestation',
                                'categorie_id' => 1,
                            ),
                            409 => 
                            array (
                                'id' => 410,
                                'alerte_id' => 3012,
                            'question' => 'La ration est-elle équilibrée ? (sans excès de concentrés énergétiques et stockage de graisse corporelle en fin de gestation)',
                                'reponse' => 'Ration déséquilibrée',
                                'categorie_id' => 1,
                            ),
                            410 => 
                            array (
                                'id' => 411,
                                'alerte_id' => 3012,
                                'question' => 'Avez-vous observé des NEC inférieurs à 1,5 ou supérieurs à 4 ?',
                                'reponse' => 'NEC trop bas ou trop élevés',
                                'categorie_id' => 1,
                            ),
                            411 => 
                            array (
                                'id' => 412,
                                'alerte_id' => 3012,
                                'question' => 'Avez-vous évité les stress autour de la mise bas ?',
                                'reponse' => 'Stress pendant les mis-bas',
                                'categorie_id' => 4,
                            ),
                            412 => 
                            array (
                                'id' => 413,
                                'alerte_id' => 3012,
                                'question' => 'Le choix du bouc est-il en adéquation au gabarit des chèvres ?',
                                'reponse' => 'Le gabarit du bouc n\'est pas adapté à celui des chèvres',
                                'categorie_id' => 6,
                            ),
                            413 => 
                            array (
                                'id' => 414,
                                'alerte_id' => 3013,
                            'question' => 'Existe-t-il des antécédents de maladies abortives dans l\'élevage ? (chlamydiose, toxoplasmose, fièvre Q)',
                                'reponse' => 'Antécédents de maladies abortives dans l\'élevage',
                                'categorie_id' => 5,
                            ),
                            414 => 
                            array (
                                'id' => 415,
                                'alerte_id' => 3013,
                            'question' => 'L\'éleveur intervient-il lors des mises-bas ? (manipulation / aide à la mise bas)',
                                'reponse' => 'Intervention lors des mises-bas',
                                'categorie_id' => 4,
                            ),
                            415 => 
                            array (
                                'id' => 416,
                                'alerte_id' => 3013,
                            'question' => 'Les protocoles de traitements (moment de réalisation) sont-ils respectés ? (médication incluant les vaccinations)',
                                'reponse' => 'Manque de respect des protocoles de soin',
                                'categorie_id' => 5,
                            ),
                            416 => 
                            array (
                                'id' => 417,
                                'alerte_id' => 3013,
                            'question' => 'Observez-vous des facteurs de stress au cours du dernier mois de gestation ? (bagarres, prédateurs, stress divers)',
                                'reponse' => 'Facteurs de stress lors du dernier mois de gestation',
                                'categorie_id' => 4,
                            ),
                            417 => 
                            array (
                                'id' => 418,
                                'alerte_id' => 3013,
                                'question' => 'Mettez-vous en contact des primipares une chèvre ayant avortée ?',
                                'reponse' => 'Primipares au contact d\'une chèvre ayant avorté',
                                'categorie_id' => 4,
                            ),
                            418 => 
                            array (
                                'id' => 419,
                                'alerte_id' => 3013,
                                'question' => 'Pratiquez-vous une mise en quarantaine des animaux achetés à l’extérieur et vérifiez-vous leur immunité ?',
                                'reponse' => 'pas de mise en quarantaine des animaux achetés à l\'extérieur',
                                'categorie_id' => 4,
                            ),
                            419 => 
                            array (
                                'id' => 420,
                                'alerte_id' => 3013,
                                'question' => 'Favorisez-vous une bonne immunité des primipares avec une minéralisation suffisante ?',
                                'reponse' => 'minéralisation insuffisante pour l\'immunité des primipares',
                                'categorie_id' => 1,
                            ),
                            420 => 
                            array (
                                'id' => 421,
                                'alerte_id' => 3014,
                                'question' => 'Y a-t’il eut une mauvaise transition alimentaire ?',
                                'reponse' => 'mauvaise transition alimentaire',
                                'categorie_id' => 1,
                            ),
                            421 => 
                            array (
                                'id' => 422,
                                'alerte_id' => 3014,
                                'question' => 'La mise à l\'herbe a-t-elle été faite progressivement ?',
                                'reponse' => 'mise à l\'herbe trop brutale',
                                'categorie_id' => 1,
                            ),
                            422 => 
                            array (
                                'id' => 423,
                                'alerte_id' => 3014,
                            'question' => 'L\'alimentation est-elle riche en éléments rapidement fermentescible ? (concentrés, céréales, …)',
                                'reponse' => 'alimentation trop riche en éléments rapidement fermentescibles',
                                'categorie_id' => 1,
                            ),
                            423 => 
                            array (
                                'id' => 424,
                                'alerte_id' => 3014,
                            'question' => 'La ration consommée est-elle pauvre en fibres efficaces ? (brins longs rigides et piquants)',
                                'reponse' => 'manque de fibres dans la ration',
                                'categorie_id' => 1,
                            ),
                            424 => 
                            array (
                                'id' => 425,
                                'alerte_id' => 3014,
                                'question' => 'La litière est-elle sèche et renouvelée régulièrement ?',
                                'reponse' => 'litière sèche et régulièrement renouvelée',
                                'categorie_id' => 2,
                            ),
                            425 => 
                            array (
                                'id' => 426,
                                'alerte_id' => 3014,
                                'question' => 'Y-a-t-il eu des changements météorologiques brusques précédents les problèmes ?',
                                'reponse' => 'changements météorologiques brusques avant les problèmes',
                                'categorie_id' => 7,
                            ),
                            426 => 
                            array (
                                'id' => 427,
                                'alerte_id' => 3015,
                                'question' => 'La ration n\'est-elle pas trop riche en azote en fin de gestation ?',
                                'reponse' => 'ration trop riche en azote en fin de gestation',
                                'categorie_id' => 1,
                            ),
                            427 => 
                            array (
                                'id' => 428,
                                'alerte_id' => 3015,
                                'question' => 'La ration n\'est-elle pas déséquilibrée et acidogène ?',
                                'reponse' => 'ration déséquilibrée et acidogène',
                                'categorie_id' => 1,
                            ),
                            428 => 
                            array (
                                'id' => 429,
                                'alerte_id' => 3015,
                                'question' => 'Y a-t’il eut une mauvaise transition alimentaire entre la période sèche et la période de lactation ?',
                                'reponse' => 'mauvaise transition alimentaire entre période sèche et période de lactation',
                                'categorie_id' => 1,
                            ),
                            429 => 
                            array (
                                'id' => 430,
                                'alerte_id' => 3015,
                                'question' => 'La ration est composée de fourrages pauvres en éléments fermentescibles ?',
                                'reponse' => 'Fourrages pauvres en éléments fermentescibles',
                                'categorie_id' => 1,
                            ),
                            430 => 
                            array (
                                'id' => 431,
                                'alerte_id' => 3015,
                            'question' => 'Les fourrages utilisés sont-ils de mauvaise qualité ? (appétence, récolte dans de mauvaises conditions, mauvaise conservation)',
                                'reponse' => 'fourrages de mauvaise qualité',
                                'categorie_id' => 1,
                            ),
                            431 => 
                            array (
                                'id' => 432,
                                'alerte_id' => 3015,
                                'question' => 'La ration présente-elle des carences marquées en minéraux ?',
                                'reponse' => 'carences en minéraux de la ration',
                                'categorie_id' => 1,
                            ),
                            432 => 
                            array (
                                'id' => 433,
                                'alerte_id' => 3016,
                                'question' => 'L\'animal a-t-il consommé en excès un ou des aliments riches en amidon ou en sucres ?',
                                'reponse' => 'consommation en excès d\'aliments riches en amidon ou sucres',
                                'categorie_id' => 1,
                            ),
                            433 => 
                            array (
                                'id' => 434,
                                'alerte_id' => 3016,
                            'question' => 'La ration consommée est-elle pauvre en fibres efficaces ? (brins longs rigides et piquants)',
                                'reponse' => 'ration pauvre en fibres efficaces',
                                'categorie_id' => 1,
                            ),
                            434 => 
                            array (
                                'id' => 435,
                                'alerte_id' => 3016,
                            'question' => 'L\'ordre de distribution des aliments est-il respecté ? (aliments fibreux puis concentrés)',
                                'reponse' => 'concentrés donnés avant les fibres',
                                'categorie_id' => 1,
                            ),
                            435 => 
                            array (
                                'id' => 436,
                                'alerte_id' => 3016,
                            'question' => 'La ration est-elle équilibrée en différentes formes d\'azote ? (protéique et non protéique)',
                                'reponse' => 'ration non équilibrée entre les différentes formes d\'azote',
                                'categorie_id' => 1,
                            ),
                            436 => 
                            array (
                                'id' => 437,
                                'alerte_id' => 3016,
                                'question' => 'La mise à l\'herbe a-t-elle été faite progressivement ?',
                                'reponse' => 'mise à l\'herbe brutale',
                                'categorie_id' => 1,
                            ),
                            437 => 
                            array (
                                'id' => 438,
                                'alerte_id' => 3016,
                                'question' => 'Le passage d\'une parcelle épuisée à une parcelle plus riche a-t-il été progressif ?',
                                'reponse' => 'passage d\'une parcelle épuisée à riche trop brutalement',
                                'categorie_id' => 1,
                            ),
                            438 => 
                            array (
                                'id' => 439,
                                'alerte_id' => 3017,
                                'question' => 'La ration présente-elle un excès d\'azote non protéique ? (fourrages verts, ensilage d\'herbe mal conservé, foin très feuillu, tourteaux,',
                                    'reponse' => 'excès d\'azote non protéique dans la ration',
                                    'categorie_id' => 1,
                                ),
                                439 => 
                                array (
                                    'id' => 440,
                                    'alerte_id' => 3017,
                                    'question' => 'La ration est-elle équilibrée entre l\'énergie et l\'azote ?',
                                    'reponse' => 'ration déséquilibrée entre énergie et azote',
                                    'categorie_id' => 1,
                                ),
                                440 => 
                                array (
                                    'id' => 441,
                                    'alerte_id' => 3018,
                                'question' => 'La ration présente-elle un excès de phosphore ? (alimentation riche en céréales)',
                                    'reponse' => 'excès de phosphore dans la ration',
                                    'categorie_id' => 1,
                                ),
                                441 => 
                                array (
                                    'id' => 442,
                                    'alerte_id' => 3018,
                                    'question' => 'L\'abreuvement disponible est-il suffisant ?',
                                    'reponse' => 'abreuvement disponible insuffisant',
                                    'categorie_id' => 1,
                                ),
                                442 => 
                                array (
                                    'id' => 443,
                                    'alerte_id' => 3018,
                                    'question' => 'L\'apport de sel est-il suffisant ?',
                                    'reponse' => 'apport de sel insuffisant',
                                    'categorie_id' => 1,
                                ),
                                443 => 
                                array (
                                    'id' => 444,
                                    'alerte_id' => 3019,
                                    'question' => 'Avez-vous une stratégie de réformes des chèvres infectées de manière chronique, incurables ?',
                                    'reponse' => 'pas réforme des chèvres infectées chroniquement',
                                    'categorie_id' => 4,
                                ),
                                444 => 
                                array (
                                    'id' => 445,
                                    'alerte_id' => 3019,
                                    'question' => 'Possédez-vous une stratégie de repérage précoce des mammites cliniques ?',
                                    'reponse' => 'repérage trop tardif des mammites cliniques',
                                    'categorie_id' => 4,
                                ),
                                445 => 
                                array (
                                    'id' => 446,
                                    'alerte_id' => 3019,
                                    'question' => 'Présence d\'une politique de soins ou de réformes vis-à-vis des mammites cliniques?',
                                    'reponse' => 'pas de soins spécifiques, pas de réforme vis-à-vis des mammites cliniques',
                                    'categorie_id' => 4,
                                ),
                                446 => 
                                array (
                                    'id' => 447,
                                    'alerte_id' => 3019,
                                    'question' => 'Possédez-vous une stratégie de traitement raisonné, ciblé en cas de mammites subcliniques?',
                                    'reponse' => 'pas de traitement raisonné et ciblé en cas de mammites subcliniques',
                                    'categorie_id' => 5,
                                ),
                                447 => 
                                array (
                                    'id' => 448,
                                    'alerte_id' => 3019,
                                'question' => 'Possédez-vous une stratégie de traitement adaptée aux problèmes rencontrés dans votre élevage? (nature des infections subcliniques)',
                                    'reponse' => 'traitements pas spécifiquement adaptés aux problèmes rencontrés',
                                    'categorie_id' => 5,
                                ),
                                448 => 
                                array (
                                    'id' => 449,
                                    'alerte_id' => 3019,
                                'question' => 'Appliquer vous de façon rigoureuse le traitement au tarissement? (hygiène et posologie)',
                                    'reponse' => 'manque de rigueur au tarissement',
                                    'categorie_id' => 5,
                                ),
                                449 => 
                                array (
                                    'id' => 450,
                                    'alerte_id' => 3019,
                                    'question' => 'Appliquer vous une hygiène rigoureuse en cas de traitement par voie intra mammaire?',
                                    'reponse' => 'manque de rigueur lors de traitement intra-mammaire',
                                    'categorie_id' => 5,
                                ),
                                450 => 
                                array (
                                    'id' => 451,
                                    'alerte_id' => 3019,
                                    'question' => 'Avez-vous une stratégie globale de choix des chèvres à traiter?',
                                    'reponse' => 'manque de stratégie pour choisir les chèvres à traiter',
                                    'categorie_id' => 5,
                                ),
                                451 => 
                                array (
                                    'id' => 452,
                                    'alerte_id' => 3019,
                                    'question' => 'Détenez- vous beaucoup de chèvres infectées, en lactation longue ou prolongée?',
                                    'reponse' => 'nombre important de chèvres infectées gardées sur la ferme',
                                    'categorie_id' => 5,
                                ),
                                452 => 
                                array (
                                    'id' => 453,
                                    'alerte_id' => 3019,
                                'question' => 'La ration en fin de la lactation est-elle équilibrée? (En particulier les apports azotés)',
                                    'reponse' => 'ration déséquilibrée en fin de lactation',
                                    'categorie_id' => 1,
                                ),
                                453 => 
                                array (
                                    'id' => 454,
                                    'alerte_id' => 3019,
                                    'question' => 'Réalisez-vous des transitions alimentaires en fin de période sèche? / fourrages, concentrés, oligo-éléments',
                                    'reponse' => 'mauvaise transition alimentaire en fin de période sèche',
                                    'categorie_id' => 1,
                                ),
                                454 => 
                                array (
                                    'id' => 455,
                                    'alerte_id' => 3019,
                                'question' => 'La durée de période sèche est-elle correcte? (attention au période trop courte)',
                                    'reponse' => 'durée de période sèche trop courte',
                                    'categorie_id' => 4,
                                ),
                                455 => 
                                array (
                                    'id' => 456,
                                    'alerte_id' => 3019,
                                    'question' => 'Détenez-vous des animaux incurables, infectés chroniques?',
                                    'reponse' => 'présence d\'animaux incurables, infectés chroniquement sur la ferme',
                                    'categorie_id' => 5,
                                ),
                                456 => 
                                array (
                                    'id' => 457,
                                    'alerte_id' => 3019,
                                    'question' => 'Détenez-vous des animaux infectés par des mycoplasmes?',
                                    'reponse' => 'présence d\'animaux infectés par des mycoplasmes',
                                    'categorie_id' => 5,
                                ),
                                457 => 
                                array (
                                    'id' => 458,
                                    'alerte_id' => 3019,
                                'question' => 'Possédez-vous une machine à traire bien réglée? (réglage de l\'installation et/ou réglage de la dépose automatique)',
                                    'reponse' => 'machine à traire mal réglée',
                                    'categorie_id' => 4,
                                ),
                                458 => 
                                array (
                                    'id' => 459,
                                    'alerte_id' => 3019,
                                'question' => 'Possédez-vous une installation de traite bien conçue? (pente du lactoduc incorrecte ou diamètre de lactoduc avec engorgements possibles)',
                                'reponse' => 'installation de traite mal conçue (lactoduc notamment)',
                                    'categorie_id' => 4,
                                ),
                                459 => 
                                array (
                                    'id' => 460,
                                    'alerte_id' => 3019,
                                    'question' => 'Réalisez-vous un entretien régulier de la machine à traire ?',
                                    'reponse' => 'manque de régularité dans l\'entretien de la machine à traire',
                                    'categorie_id' => 4,
                                ),
                                460 => 
                                array (
                                    'id' => 461,
                                    'alerte_id' => 3019,
                                    'question' => 'Appliquer vous un protocole de nettoyage et de soins particuliers en cas de blessures des mains du trayeur avant la traite ?',
                                    'reponse' => 'si blessure des mains du trayeur avant la traite, manque d\'un protocole de nettoyage/protection',
                                    'categorie_id' => 4,
                                ),
                                461 => 
                                array (
                                    'id' => 462,
                                    'alerte_id' => 3019,
                                    'question' => 'Présence de mamelles sales ou mamelles avec des staphylococcies sur la peau ou autres maladies du trayon?',
                                    'reponse' => 'mamelles sales, mamelles avec staphylococcies, maladies du trayon',
                                    'categorie_id' => 4,
                                ),
                                462 => 
                                array (
                                    'id' => 463,
                                    'alerte_id' => 3019,
                                    'question' => 'Réalisez-vous une hygiène avant la traite ? Et si oui, est-elle réalisée systématiquement?',
                                    'reponse' => 'manque d\'hygiène systématique avant la traite',
                                    'categorie_id' => 4,
                                ),
                                463 => 
                                array (
                                    'id' => 464,
                                    'alerte_id' => 3019,
                                    'question' => 'Réalisez-vous une désinfection des trayons après la traite? Si oui, est-elle réalisée de manière correcte?',
                                'reponse' => 'pas (ou mauvaise) désinfection des trayons après la traite',
                                    'categorie_id' => 4,
                                ),
                                464 => 
                                array (
                                    'id' => 465,
                                    'alerte_id' => 3019,
                                    'question' => 'Au cours de la fin de traite, réalisez-vous de l\'égouttage, des massages, de la repasse - surtraite?',
                                    'reponse' => 'en fin de traite, égouttage, massage ou repasse- surtraite',
                                    'categorie_id' => 4,
                                ),
                                465 => 
                                array (
                                    'id' => 466,
                                    'alerte_id' => 3019,
                                    'question' => 'Si vous avez des griffes avec coupure de vide. Réalisez-vous une coupure du vide au moment de la dépose?',
                                    'reponse' => 'pas de coupure du vide au moment de la dépose',
                                    'categorie_id' => 4,
                                ),
                                466 => 
                                array (
                                    'id' => 467,
                                    'alerte_id' => 3019,
                                    'question' => 'Réalisez-vous des branchements de deux chèvres simultanément à partir d\'un même faisceau?',
                                    'reponse' => 'branchement de deux chèvres simultanément à partir d\'un même faisceau',
                                    'categorie_id' => 4,
                                ),
                                467 => 
                                array (
                                    'id' => 468,
                                    'alerte_id' => 3019,
                                    'question' => 'Présence d\'entrées d\'air au moment de la pose et/ou dépose des faisceaux trayeurs ?',
                                    'reponse' => 'entrée d\'air lors de la pose/dépose des faisceaux trayeurs',
                                    'categorie_id' => 4,
                                ),
                                468 => 
                                array (
                                    'id' => 469,
                                    'alerte_id' => 3019,
                                    'question' => 'Avez-vous un protocole de nettoyage du matériel de traite ?',
                                    'reponse' => 'pas de protocole de nettoyage du matériel de traite',
                                    'categorie_id' => 4,
                                ),
                                469 => 
                                array (
                                    'id' => 470,
                                    'alerte_id' => 3019,
                                    'question' => 'Avez-vous mis en place un ordre de traite tenant compte du statut infectieux des chèvres?',
                                    'reponse' => 'ordre de traite ne tenant pas compte du statut infectieux des chèvres',
                                    'categorie_id' => 4,
                                ),
                                470 => 
                                array (
                                    'id' => 471,
                                    'alerte_id' => 3019,
                                'question' => 'Possédez-vous une machine à traire bien réglée? (réglage de l\'installation et/ou réglage de la dépose automatique)',
                                    'reponse' => 'machine à traire mal réglée',
                                    'categorie_id' => 4,
                                ),
                                471 => 
                                array (
                                    'id' => 472,
                                    'alerte_id' => 3019,
                                    'question' => 'Au cours de la fin de traite, réalisez-vous de l\'égouttage, des massages, de la repasse - surtraite?',
                                    'reponse' => 'en fin de traite, égouttage, massage ou repasse- surtraite',
                                    'categorie_id' => 4,
                                ),
                                472 => 
                                array (
                                    'id' => 473,
                                    'alerte_id' => 3019,
                                    'question' => 'Si vous avez des griffes avec coupure de vide. Réalisez-vous une coupure du vide au moment de la dépose?',
                                    'reponse' => 'pas de coupure du vide au moment de la dépose',
                                    'categorie_id' => 4,
                                ),
                                473 => 
                                array (
                                    'id' => 474,
                                    'alerte_id' => 3019,
                                'question' => 'Les manchons que vous utilisez sont-ils adaptés à la forme des trayons? (notamment diamètre à l\'embouchure)',
                                    'reponse' => 'manchons non adaptés à la forme des trayons',
                                    'categorie_id' => 4,
                                ),
                                474 => 
                                array (
                                    'id' => 475,
                                    'alerte_id' => 3019,
                                    'question' => 'Conserver-vous des chèvres incurables?',
                                    'reponse' => 'chèvres incurables gardées sur la ferme',
                                    'categorie_id' => 4,
                                ),
                                475 => 
                                array (
                                    'id' => 476,
                                    'alerte_id' => 3019,
                                    'question' => 'Détenez- vous beaucoup de chèvres infectées, en lactation longue ou prolongée?',
                                    'reponse' => 'beaucoup de chèvres infectées sur la ferme',
                                    'categorie_id' => 4,
                                ),
                                476 => 
                                array (
                                    'id' => 477,
                                    'alerte_id' => 3019,
                                    'question' => 'Possédez-vous plusieurs lots de mises bas ? appartenance aux lots de mises bas d\'été',
                                    'reponse' => 'plusieurs lots de mise-bas',
                                    'categorie_id' => 4,
                                ),
                                477 => 
                                array (
                                    'id' => 478,
                                    'alerte_id' => 3019,
                                    'question' => 'Avez-vous mis en place un ordre de traite tenant compte du statut infectieux des chèvres?',
                                    'reponse' => 'ordre de traite ne tenant pas compte du statut infectieux des chèvres',
                                    'categorie_id' => 4,
                                ),
                                478 => 
                                array (
                                    'id' => 479,
                                    'alerte_id' => 3019,
                                    'question' => 'L\'ambiance en salle de traite est-il calme?',
                                    'reponse' => 'ambiance stressante ou agitée en salle de traite',
                                    'categorie_id' => 4,
                                ),
                                479 => 
                                array (
                                    'id' => 480,
                                    'alerte_id' => 3024,
                                    'question' => 'Avez-vous une stratégie de réformes des chèvres infectées de manière chronique, incurables ?',
                                    'reponse' => 'pas réforme des chèvres infectées chroniquement',
                                    'categorie_id' => 4,
                                ),
                                480 => 
                                array (
                                    'id' => 481,
                                    'alerte_id' => 3024,
                                    'question' => 'Possédez-vous une stratégie de repérage précoce des mammites cliniques ?',
                                    'reponse' => 'repérage trop tardif des mammites cliniques',
                                    'categorie_id' => 4,
                                ),
                                481 => 
                                array (
                                    'id' => 482,
                                    'alerte_id' => 3024,
                                    'question' => 'Présence d\'une politique de soins ou de réformes vis-à-vis des mammites cliniques?',
                                    'reponse' => 'pas de soins spécifiques, pas de réforme vis-à-vis des mammites cliniques',
                                    'categorie_id' => 5,
                                ),
                                482 => 
                                array (
                                    'id' => 483,
                                    'alerte_id' => 3024,
                                    'question' => 'Possédez-vous une stratégie de traitement raisonné, ciblé en cas de mammites subcliniques?',
                                    'reponse' => 'absence de traitement raisonné/ciblé en cas de mammites subcliniques',
                                    'categorie_id' => 5,
                                ),
                                483 => 
                                array (
                                    'id' => 484,
                                    'alerte_id' => 3024,
                                    'question' => 'Mettez-vous en place des mesures de prévention vis-à-vis du CAEV?',
                                    'reponse' => 'pas de mesure de prévention vis-à-vis du CAEV',
                                    'categorie_id' => 5,
                                ),
                                484 => 
                                array (
                                    'id' => 485,
                                    'alerte_id' => 3024,
                                'question' => 'Le positionnement des faisceaux trayeurs est-il correct? (traction d\'un côté, faisceaux lourds, traction liée au poids des tuyaux longs à lait)',
                                    'reponse' => 'mauvais positionnement des faisceaux trayeurs',
                                    'categorie_id' => 4,
                                ),
                                485 => 
                                array (
                                    'id' => 486,
                                    'alerte_id' => 3025,
                                    'question' => 'Possédez-vous une stratégie de repérage précoce des mammites cliniques ?',
                                    'reponse' => 'repérage tardif des mammites cliniques',
                                    'categorie_id' => 5,
                                ),
                                486 => 
                                array (
                                    'id' => 487,
                                    'alerte_id' => 3025,
                                    'question' => 'Avez-vous une stratégie de réformes des chèvres infectées de manière chronique, incurables ?',
                                    'reponse' => 'pas de réforme des chèvres infectées chroniquement',
                                    'categorie_id' => 5,
                                ),
                                487 => 
                                array (
                                    'id' => 488,
                                    'alerte_id' => 3025,
                                    'question' => 'Réalisez-vous les traitements avec une hygiène rigoureuse ?',
                                    'reponse' => 'manque d\'hygiène lors des traitements',
                                    'categorie_id' => 5,
                                ),
                                488 => 
                                array (
                                    'id' => 489,
                                    'alerte_id' => 3025,
                                    'question' => 'Réalisez-vous une traite à part ou avec un faisceau dédié pour des chèvres à mammites cliniques?',
                                    'reponse' => 'risques pris lors de la traite de chèvres à mammites cliniques',
                                    'categorie_id' => 4,
                                ),
                                489 => 
                                array (
                                    'id' => 490,
                                    'alerte_id' => 3025,
                                    'question' => 'Réalisez-vous un nettoyage avant et une désinfection après la traite? Si oui, ces pratiques sont-elles correctement réalisées?',
                                    'reponse' => 'manque de nettoyage rigoureux avant et après traite',
                                    'categorie_id' => 4,
                                ),
                                490 => 
                                array (
                                    'id' => 491,
                                    'alerte_id' => 3025,
                                'question' => 'La ration de fin de gestation est-elle équilibrée et suffisante? (En particulier les apports azotés)',
                                    'reponse' => 'ration de fin de gestation déséquilibrée ou insuffisante',
                                    'categorie_id' => 1,
                                ),
                                491 => 
                                array (
                                    'id' => 492,
                                    'alerte_id' => 3025,
                                    'question' => 'En cas de mammites particulières, avez-vous une politique de gestion de ces mammites différente?',
                                    'reponse' => 'mammites toutes traitées de la même manière',
                                    'categorie_id' => 5,
                                ),
                                492 => 
                                array (
                                    'id' => 493,
                                    'alerte_id' => 3025,
                                'question' => 'Veillez-vous à développer une flore non pathogène sur les mamelles ? (type flore lactique)',
                                    'reponse' => 'pas de soins particuliers pour développer une flore non pathogène sur les mamelles',
                                    'categorie_id' => 3,
                                ),
                                493 => 
                                array (
                                    'id' => 494,
                                    'alerte_id' => 3025,
                                    'question' => 'La litière est-elle ensemencée avec une flore lactique non pathogène ?',
                                    'reponse' => 'pas d\'ensemencement de la litière',
                                    'categorie_id' => 3,
                                ),
                                494 => 
                                array (
                                    'id' => 495,
                                    'alerte_id' => 3026,
                                    'question' => 'Avez-vous une stratégie de réformes des chèvres infectées de manière chronique, incurables ?',
                                    'reponse' => 'pas réforme des chèvres infectées chroniquement',
                                    'categorie_id' => 4,
                                ),
                                495 => 
                                array (
                                    'id' => 496,
                                    'alerte_id' => 3026,
                                    'question' => 'Possédez-vous une stratégie de repérage précoce des mammites cliniques ?',
                                    'reponse' => 'repérage trop tardif des mammites cliniques',
                                    'categorie_id' => 4,
                                ),
                                496 => 
                                array (
                                    'id' => 497,
                                    'alerte_id' => 3026,
                                    'question' => 'Présence d\'une politique de soins ou de réformes vis-à-vis des mammites cliniques?',
                                    'reponse' => 'pas de soins spécifiques, pas de réforme vis-à-vis des mammites cliniques',
                                    'categorie_id' => 4,
                                ),
                                497 => 
                                array (
                                    'id' => 498,
                                    'alerte_id' => 3026,
                                    'question' => 'Possédez-vous une stratégie de traitement raisonné, ciblé en cas de mammites subcliniques?',
                                    'reponse' => 'absence de traitement raisonné/ciblé en cas de mammites subcliniques',
                                    'categorie_id' => 4,
                                ),
                                498 => 
                                array (
                                    'id' => 499,
                                    'alerte_id' => 3026,
                                    'question' => 'Voir facteurs favorisant les abcès caséeux / microcoques de Morel ',
                                    'reponse' => 'facteurs favorisant les abcès caséeux / microcoques de Morel',
                                    'categorie_id' => 5,
                                ),
                                499 => 
                                array (
                                    'id' => 500,
                                    'alerte_id' => 3027,
                                    'question' => 'Mettez-vous en place une surveillance de l\'hypothermie dans les 24 premières heures de vie des chevreaux?',
                                    'reponse' => 'absence de surveillance de l\'hypothermie dans les 24 premières heures du chevreau',
                                    'categorie_id' => 4,
                                ),
                                500 => 
                                array (
                                    'id' => 501,
                                    'alerte_id' => 3027,
                                    'question' => 'Observer vous une fréquence anormale de naissance de chevreaux malformés?',
                                    'reponse' => 'fréquence anormale de naissance de chevreaux malformés',
                                    'categorie_id' => 4,
                                ),
                                501 => 
                                array (
                                    'id' => 502,
                                    'alerte_id' => 3027,
                                    'question' => 'Les mises bas sont-elles difficiles et longues ?',
                                    'reponse' => 'mises bas longues et difficiles',
                                    'categorie_id' => 7,
                                ),
                                502 => 
                                array (
                                    'id' => 503,
                                    'alerte_id' => 3027,
                                    'question' => 'La surface de bâtiment est-elle adaptée au nombre d\'animaux présents? Observez-vous un nombre anormal d\'écrasement de chevreaux?',
                                    'reponse' => 'surface du bâtiment pas adaptée au nombre d\'animaux. nombre anormal d\'écrasement de chevreaux',
                                    'categorie_id' => 2,
                                ),
                                503 => 
                                array (
                                    'id' => 504,
                                    'alerte_id' => 3027,
                                    'question' => 'Avez-vous dans votre élevage beaucoup de naissance gémellaire ou multiple?',
                                    'reponse' => 'beaucoup de naissance gémellaire ou multiple',
                                    'categorie_id' => 7,
                                ),
                                504 => 
                                array (
                                    'id' => 505,
                                    'alerte_id' => 3027,
                                    'question' => 'Observer vous une fréquence anormale de non adoption?',
                                    'reponse' => 'fréquence anormale de non-adoption',
                                    'categorie_id' => 7,
                                ),
                                505 => 
                                array (
                                    'id' => 506,
                                    'alerte_id' => 3027,
                                    'question' => 'Réalisez-vous une observation régulière de vos animaux en particulier autour de la période mise bas?',
                                    'reponse' => 'observation pas assez régulière en période de mises bas',
                                    'categorie_id' => 4,
                                ),
                                506 => 
                                array (
                                    'id' => 507,
                                    'alerte_id' => 3027,
                                    'question' => 'Dès qu\'un chevreau est malade, intervenez-vous?',
                                    'reponse' => 'manque de réactivité lorsqu\'un chevreau est malade',
                                    'categorie_id' => 4,
                                ),
                                507 => 
                                array (
                                    'id' => 508,
                                    'alerte_id' => 3028,
                                    'question' => 'La consommation du colostrum par les chevreaux est-elle immédiate après la mise bas?',
                                    'reponse' => 'colostrum ingéré par les chevreaux trop tardivement',
                                    'categorie_id' => 4,
                                ),
                                508 => 
                                array (
                                    'id' => 509,
                                    'alerte_id' => 3028,
                                    'question' => 'La qualité du colostrum est-elle contrôlée de façon régulière?',
                                    'reponse' => 'qualité du colostrum pas ou peu contrôlée',
                                    'categorie_id' => 4,
                                ),
                                509 => 
                                array (
                                    'id' => 510,
                                    'alerte_id' => 3028,
                                'question' => 'L’hygiène générale du bâtiment est-il correct? (densité, paillage, nature du paillage)',
                                    'reponse' => 'hygiène du bâtiment non satisfaisante',
                                    'categorie_id' => 2,
                                ),
                                510 => 
                                array (
                                    'id' => 511,
                                    'alerte_id' => 3028,
                                    'question' => 'Réalisez-vous une désinfection du bâtiment si besoin?',
                                    'reponse' => 'aucune désinfection du bâtiment',
                                    'categorie_id' => 2,
                                ),
                                511 => 
                                array (
                                    'id' => 512,
                                    'alerte_id' => 3028,
                                    'question' => 'La litière est-elle ensemencée avec une flore lactique, non pathogène ?',
                                    'reponse' => 'pas d\'ensemencement de la litière',
                                    'categorie_id' => 3,
                                ),
                                512 => 
                                array (
                                    'id' => 513,
                                    'alerte_id' => 3028,
                                'question' => 'Réalisez-vous un tri des aliments potentiellement contaminés ou des parties altérées (ensilage)?',
                                    'reponse' => 'manque de tri des aliments potentiellement contaminés ou des parties altérées si ensilage',
                                    'categorie_id' => 1,
                                ),
                                513 => 
                                array (
                                    'id' => 514,
                                    'alerte_id' => 3028,
                                    'question' => 'La ventilation générale du bâtiment est-il correct?',
                                    'reponse' => 'mauvaise ventilation du bâtiment',
                                    'categorie_id' => 2,
                                ),
                                514 => 
                                array (
                                    'id' => 515,
                                    'alerte_id' => 3028,
                                'question' => 'Faites-vous réalisez régulièrement un contrôle bactériologique de l\'eau? (boisson/lavage/…)',
                                    'reponse' => 'absence d\'un contrôle bactériologique de l\'eau',
                                    'categorie_id' => 3,
                                ),
                                515 => 
                                array (
                                    'id' => 516,
                                    'alerte_id' => 3028,
                                    'question' => 'Possédez-vous un protocole de soin adapté? Si oui ce protocole est-il suivi?',
                                    'reponse' => 'pas de protocole de soin adapté aux chevreaux',
                                    'categorie_id' => 5,
                                ),
                                516 => 
                                array (
                                    'id' => 517,
                                    'alerte_id' => 3029,
                                    'question' => 'Mettez-vous en place une surveillance de la buvée du colostrum pour le chevreau?',
                                    'reponse' => 'pas de surveillance de la prise colostrale',
                                    'categorie_id' => 4,
                                ),
                                517 => 
                                array (
                                    'id' => 518,
                                    'alerte_id' => 3029,
                                    'question' => 'Réalisez-vous un ou des contrôles de qualité du colostrum par période mise bas?',
                                    'reponse' => 'pas de contrôle systématique du colostrum par période de mise bas',
                                    'categorie_id' => 4,
                                ),
                                518 => 
                                array (
                                    'id' => 519,
                                    'alerte_id' => 3029,
                                    'question' => 'En cas d\'utilisation de poudre ou lait de remplacement, la température/Quantité/Concentration/technique de buvée est-elle correcte?',
                                    'reponse' => 'lors d\'utilisation de lait de remplacement ou poudre, manque de rigueur sur les température/ quantité/ concentration et technique de buvée',
                                    'categorie_id' => 1,
                                ),
                                519 => 
                                array (
                                    'id' => 520,
                                    'alerte_id' => 3029,
                                'question' => 'Faites-vous réalisez régulièrement un contrôle bactériologique de l\'eau? (boisson/lavage/…)',
                                    'reponse' => 'pas ou peu de contrôle bactériologique de l\'eau',
                                    'categorie_id' => 1,
                                ),
                                520 => 
                                array (
                                    'id' => 521,
                                    'alerte_id' => 3029,
                                    'question' => 'Le bâtiment correspond-il aux recommandations de confort, de ventilation, de surface et d\'hygiène ?',
                                    'reponse' => 'confort, ventilation, surface et hygiène du bâtiment pas adaptés aux recommandations',
                                    'categorie_id' => 2,
                                ),
                                521 => 
                                array (
                                    'id' => 522,
                                    'alerte_id' => 3029,
                                    'question' => 'L\'apport nutritionnel correspond-il aux besoins ?',
                                    'reponse' => 'besoins nutritionnels non couverts',
                                    'categorie_id' => 1,
                                ),
                                522 => 
                                array (
                                    'id' => 523,
                                    'alerte_id' => 3030,
                                    'question' => 'La surveillance de la prise colostrale est-elle suffisante ?',
                                    'reponse' => 'pas de surveillance de la prise colostrale',
                                    'categorie_id' => 4,
                                ),
                                523 => 
                                array (
                                    'id' => 524,
                                    'alerte_id' => 3030,
                                    'question' => 'La quantité et la qualité du colostrum sont-elles suffisantes ? A vérifier notamment en cas de de distribution collective au seau ou à la gouttière.',
                                    'reponse' => 'quantité et qualité du colostrum insuffisantes',
                                    'categorie_id' => 4,
                                ),
                                524 => 
                                array (
                                    'id' => 525,
                                    'alerte_id' => 3030,
                                    'question' => 'En cas de colostrum thermisé : quel volume a été thermisé ?',
                                    'reponse' => 'important volume de colostrum thermisé',
                                    'categorie_id' => 4,
                                ),
                                525 => 
                                array (
                                    'id' => 526,
                                    'alerte_id' => 3030,
                                    'question' => 'à quelle vitesse ont eu lieu les montées et redescentes en température du colostrum ?',
                                    'reponse' => 'montée et redescente en température du colostrum pas assez rapides',
                                    'categorie_id' => 4,
                                ),
                                526 => 
                                array (
                                    'id' => 527,
                                    'alerte_id' => 3030,
                                    'question' => 'A quelle température a-t-il été distribué ?',
                                    'reponse' => 'colostrum distribué trop chaud ou trop froid',
                                    'categorie_id' => 4,
                                ),
                                527 => 
                                array (
                                    'id' => 528,
                                    'alerte_id' => 3030,
                                    'question' => 'En cas d’utilisation de colostrum congelé, la décongélation a-t-elle été faite au bain-marie ?',
                                    'reponse' => 'décongélation du colostrum sans bain-marie',
                                    'categorie_id' => 4,
                                ),
                                528 => 
                                array (
                                    'id' => 529,
                                    'alerte_id' => 3030,
                                    'question' => 'La transition entre l’allaitement et l’utilisation du lactoremplaceur a-t-elle été brutale ?',
                                    'reponse' => 'transition entre allaitement et lactoremplaceur brutale',
                                    'categorie_id' => 1,
                                ),
                                529 => 
                                array (
                                    'id' => 530,
                                    'alerte_id' => 3030,
                                    'question' => 'Le lactoremplaceur est-il de bonne qualité ?',
                                    'reponse' => 'lactoremplaceur de qualité insuffisante',
                                    'categorie_id' => 1,
                                ),
                                530 => 
                                array (
                                    'id' => 531,
                                    'alerte_id' => 3030,
                                'question' => 'La concentration est-elle adaptée (attention aux sous- et sur-concentrations) ?',
                                    'reponse' => 'sur ou sous-concentration du lactoremplaceur',
                                    'categorie_id' => 1,
                                ),
                                531 => 
                                array (
                                    'id' => 532,
                                    'alerte_id' => 3030,
                                'question' => 'La distribution est-elle appropriée (nombre et positionnement des tétines disponibles pour les louves, température du lait,…) ?',
                                    'reponse' => 'distribution du lait pas adaptée',
                                    'categorie_id' => 1,
                                ),
                                532 => 
                                array (
                                    'id' => 533,
                                    'alerte_id' => 3030,
                                'question' => 'Le matériel utilisé est-il propre ? Est-il nettoyé régulièrement (tous les jours pour le bol mélangeur, toutes les semaines pour les tuyaux) ?',
                                    'reponse' => 'manque de nettoyage régulier du matériel',
                                    'categorie_id' => 4,
                                ),
                                533 => 
                                array (
                                    'id' => 534,
                                    'alerte_id' => 3030,
                                    'question' => 'En cas de colostrum thermisé : quel volume a été thermisé ? ',
                                    'reponse' => 'important volume de colostrum thermisé',
                                    'categorie_id' => 4,
                                ),
                                534 => 
                                array (
                                    'id' => 535,
                                    'alerte_id' => 3030,
                                    'question' => 'L’eau de boisson est-elle potable ?',
                                    'reponse' => 'eau de boisson non potable',
                                    'categorie_id' => 1,
                                ),
                                535 => 
                                array (
                                    'id' => 536,
                                    'alerte_id' => 3030,
                                'question' => 'Faites-vous réalisez régulièrement un contrôle bactériologique de l\'eau? (boisson/lavage/…)',
                                    'reponse' => 'pas ou peu de contrôle bactériologique de l\'eau',
                                    'categorie_id' => 1,
                                ),
                                536 => 
                                array (
                                    'id' => 537,
                                    'alerte_id' => 3030,
                                    'question' => 'L’eau de boisson est-elle souillée par des matières fécales ?',
                                    'reponse' => 'eau de boisson souillée par des matières fécales',
                                    'categorie_id' => 1,
                                ),
                                537 => 
                                array (
                                    'id' => 538,
                                    'alerte_id' => 3030,
                                    'question' => 'Le bâtiment correspond-il aux recommandations de confort, de ventilation, de surface / densité et d\'hygiène ?',
                                    'reponse' => 'confort, ventilation, surface et hygiène du bâtiment pas adaptés aux recommandations',
                                    'categorie_id' => 2,
                                ),
                                538 => 
                                array (
                                    'id' => 539,
                                    'alerte_id' => 3030,
                                    'question' => 'L’hygiène du logement est-elle suffisante ?',
                                    'reponse' => 'hygiène insuffisante du logement',
                                    'categorie_id' => 2,
                                ),
                                539 => 
                                array (
                                    'id' => 540,
                                    'alerte_id' => 3030,
                                    'question' => 'La paille de la litière est-elle de bonne qualité, bien conservée ? La litière est-elle propre ?',
                                    'reponse' => 'mauvaise conservation de la litière, mauvaise qualité, pas toujours propre',
                                    'categorie_id' => 2,
                                ),
                                540 => 
                                array (
                                    'id' => 541,
                                    'alerte_id' => 3030,
                                    'question' => 'Les lots de chevreaux regroupent-ils des chevreaux d’âges différents ?',
                                    'reponse' => 'chevreaux d\'âges différents au sein d\'un lot',
                                    'categorie_id' => 4,
                                ),
                                541 => 
                                array (
                                    'id' => 542,
                                    'alerte_id' => 3030,
                                    'question' => 'Peut-on isoler les chevreaux malades ?',
                                    'reponse' => 'impossibilité d\'isoler les chevreaux malades',
                                    'categorie_id' => 4,
                                ),
                                542 => 
                                array (
                                    'id' => 543,
                                    'alerte_id' => 3030,
                                'question' => 'Le matériel d’élevage est-il correctement nettoyé et désinfecté ? (notamment s’il y a des animaux malades)',
                                    'reponse' => 'manque de nettoyage régulier du matériel',
                                    'categorie_id' => 3,
                                ),
                                543 => 
                                array (
                                    'id' => 544,
                                    'alerte_id' => 3030,
                                    'question' => 'Donnez-vous des ferments lactiques dès la naissance ?',
                                    'reponse' => 'pas de ferments lactiques donnés',
                                    'categorie_id' => 1,
                                ),
                                544 => 
                                array (
                                    'id' => 545,
                                    'alerte_id' => 3030,
                                    'question' => 'La transition entre l’allaitement et l’utilisation du lactoremplaceur a-t-elle été brutale ?',
                                    'reponse' => 'transition entre allaitement et lactoremplaceur brutale',
                                    'categorie_id' => 1,
                                ),
                                545 => 
                                array (
                                    'id' => 546,
                                    'alerte_id' => 3030,
                                    'question' => 'Le lactoremplaceur est-il de bonne qualité ?',
                                    'reponse' => 'lactoremplaceur de qualité insuffisante',
                                    'categorie_id' => 1,
                                ),
                                546 => 
                                array (
                                    'id' => 547,
                                    'alerte_id' => 3030,
                                'question' => 'La concentration est-elle adaptée (attention aux sous- et sur-concentrations) ?',
                                    'reponse' => 'sur ou sous-concentration du lactoremplaceur',
                                    'categorie_id' => 1,
                                ),
                                547 => 
                                array (
                                    'id' => 548,
                                    'alerte_id' => 3030,
                                'question' => 'La distribution est-elle appropriée (nombre et positionnement des tétines disponibles pour les louves, température du lait,…) ?',
                                    'reponse' => 'distribution du lait pas adaptée',
                                    'categorie_id' => 1,
                                ),
                                548 => 
                                array (
                                    'id' => 549,
                                    'alerte_id' => 3030,
                                    'question' => 'Le matériel utilisé est-il propre ?',
                                    'reponse' => 'matériel pas toujours propre',
                                    'categorie_id' => 3,
                                ),
                                549 => 
                                array (
                                    'id' => 550,
                                    'alerte_id' => 3030,
                                'question' => 'Est-il nettoyé régulièrement (tous les jours pour le bol mélangeur, toutes les semaines pour les tuyaux) ?',
                                    'reponse' => 'manque de nettoyage régulier du matériel',
                                    'categorie_id' => 3,
                                ),
                                550 => 
                                array (
                                    'id' => 551,
                                    'alerte_id' => 3030,
                                    'question' => 'L’eau de boisson est-elle potable ?',
                                    'reponse' => 'eau de boisson non potable',
                                    'categorie_id' => 1,
                                ),
                                551 => 
                                array (
                                    'id' => 552,
                                    'alerte_id' => 3030,
                                'question' => 'Faites-vous réalisez régulièrement un contrôle bactériologique de l\'eau? (boisson/lavage/…)',
                                    'reponse' => 'pas ou peu de contrôle bactériologique de l\'eau',
                                    'categorie_id' => 1,
                                ),
                                552 => 
                                array (
                                    'id' => 553,
                                    'alerte_id' => 3030,
                                    'question' => 'L’eau de boisson est-elle souillée par des matières fécales ?',
                                    'reponse' => 'eau souillée par des matières fécales',
                                    'categorie_id' => 1,
                                ),
                                553 => 
                                array (
                                    'id' => 554,
                                    'alerte_id' => 3030,
                                    'question' => 'Le bâtiment correspond-il aux recommandations de confort, de ventilation, de surface / densité et d\'hygiène ? ',
                                    'reponse' => 'confort, ventilation, surface et hygiène du bâtiment pas adaptés aux recommandations',
                                    'categorie_id' => 2,
                                ),
                                554 => 
                                array (
                                    'id' => 555,
                                    'alerte_id' => 3030,
                                    'question' => 'L’hygiène du logement est-elle suffisante ?',
                                    'reponse' => 'hygiène du logement insuffisante',
                                    'categorie_id' => 2,
                                ),
                                555 => 
                                array (
                                    'id' => 556,
                                    'alerte_id' => 3030,
                                    'question' => 'La paille de la litière est-elle de bonne qualité, bien conservée ?',
                                    'reponse' => 'mauvaise conservation de la litière, mauvaise qualité',
                                    'categorie_id' => 2,
                                ),
                                556 => 
                                array (
                                    'id' => 557,
                                    'alerte_id' => 3030,
                                    'question' => 'La litière est-elle propre ?',
                                    'reponse' => 'litière pas toujours propre',
                                    'categorie_id' => 2,
                                ),
                                557 => 
                                array (
                                    'id' => 558,
                                    'alerte_id' => 3030,
                                    'question' => 'Les lots de chevreaux regroupent-ils des chevreaux d’âges différents ?',
                                    'reponse' => 'chevreaux d\'âges différents au sein d\'un lot',
                                    'categorie_id' => 4,
                                ),
                                558 => 
                                array (
                                    'id' => 559,
                                    'alerte_id' => 3030,
                                    'question' => 'Peut-on isoler les chevreaux malades ? ',
                                    'reponse' => 'impossibilité d\'isoler les chevreaux malades',
                                    'categorie_id' => 4,
                                ),
                                559 => 
                                array (
                                    'id' => 560,
                                    'alerte_id' => 3030,
                                'question' => 'Le matériel d’élevage est-il correctement nettoyé et désinfecté ? (notamment s’il y a des animaux malades)',
                                    'reponse' => 'manque de nettoyage régulier du matériel d\'élevage',
                                    'categorie_id' => 3,
                                ),
                                560 => 
                                array (
                                    'id' => 561,
                                    'alerte_id' => 3030,
                                'question' => 'Se référer également aux chapitres traitant du parasitisme (dont cryptosporidiose et coccidiose)',
                                    'reponse' => '0',
                                    'categorie_id' => 8,
                                ),
                                561 => 
                                array (
                                    'id' => 562,
                                    'alerte_id' => 3031,
                                    'question' => 'Les cordons sont-ils désinfectés ?',
                                    'reponse' => 'pas de désinfection du cordon',
                                    'categorie_id' => 3,
                                ),
                                562 => 
                                array (
                                    'id' => 563,
                                    'alerte_id' => 3031,
                                    'question' => 'La solution de désinfection est-elle régulièrement renouvelée ?',
                                    'reponse' => 'pas de renouvellement de la solution de désinfection',
                                    'categorie_id' => 3,
                                ),
                                563 => 
                                array (
                                    'id' => 564,
                                    'alerte_id' => 3031,
                                    'question' => 'Les chevreaux ont-il bien tété le colostrum dans les 6 heures ?',
                                    'reponse' => 'tétée tardive du colostrum',
                                    'categorie_id' => 4,
                                ),
                                564 => 
                                array (
                                    'id' => 565,
                                    'alerte_id' => 3031,
                                    'question' => 'Les colostrums sont-ils de bonne qualité ?',
                                    'reponse' => 'colostrum de qualité insuffisante',
                                    'categorie_id' => 1,
                                ),
                                565 => 
                                array (
                                    'id' => 566,
                                    'alerte_id' => 3031,
                                    'question' => 'Donnez-vous des ferments lactiques dès la naissance ?',
                                    'reponse' => 'pas de ferments lactiques donnés à la naissance',
                                    'categorie_id' => 1,
                                ),
                                566 => 
                                array (
                                    'id' => 567,
                                    'alerte_id' => 3031,
                                'question' => 'Les chevreaux du même lot sont-ils homogènes ? (âge et poids)',
                                    'reponse' => 'les chevreaux d\'un même lot hétérogènes',
                                    'categorie_id' => 6,
                                ),
                                567 => 
                                array (
                                    'id' => 568,
                                    'alerte_id' => 3031,
                                'question' => 'La densité (nombre d\'animaux/m²) n\'est-elle pas trop importante ?',
                                    'reponse' => 'importante densité d\'animaux/m²',
                                    'categorie_id' => 2,
                                ),
                                568 => 
                                array (
                                    'id' => 569,
                                    'alerte_id' => 3031,
                                    'question' => 'Les quantités de paille litière sont-elles suffisantes ?',
                                    'reponse' => 'quantité insuffisante de paille de litière',
                                    'categorie_id' => 2,
                                ),
                                569 => 
                                array (
                                    'id' => 570,
                                    'alerte_id' => 3031,
                                    'question' => 'La chèvrerie est-elle suffisamment isolée et ventilée ?',
                                    'reponse' => 'chèvrerie pas assez ventilée, pas isolée',
                                    'categorie_id' => 2,
                                ),
                                570 => 
                                array (
                                    'id' => 571,
                                    'alerte_id' => 3031,
                                    'question' => 'La litière est-elle ensemencée avec une flore lactique, non pathogène ?',
                                    'reponse' => 'pas d\'ensemencement de la litière',
                                    'categorie_id' => 3,
                                ),
                                571 => 
                                array (
                                    'id' => 572,
                                    'alerte_id' => 3032,
                                    'question' => 'Les chevreaux ont-ils eu des infections du nombril ?',
                                    'reponse' => 'infections du nombril fréquentes chez les chevreaux',
                                    'categorie_id' => 5,
                                ),
                                572 => 
                                array (
                                    'id' => 573,
                                    'alerte_id' => 3032,
                                    'question' => 'Les chevreaux ont-ils eu des infections suite au bouclage?',
                                    'reponse' => 'infections fréquentes suite au bouclage chez les chevreaux',
                                    'categorie_id' => 5,
                                ),
                                573 => 
                                array (
                                    'id' => 574,
                                    'alerte_id' => 3032,
                                    'question' => 'En cas de blessures, les plaies sont-elles systématiquement désinfectées ?',
                                    'reponse' => 'pas de désinfection systématique des plaies',
                                    'categorie_id' => 5,
                                ),
                                574 => 
                                array (
                                    'id' => 575,
                                    'alerte_id' => 3032,
                                    'question' => 'Les rations sont-elles suffisamment pourvues en vitamine E et sélénium ?',
                                    'reponse' => 'carences en vitamine E et sélénium dans la ration',
                                    'categorie_id' => 1,
                                ),
                                575 => 
                                array (
                                    'id' => 576,
                                    'alerte_id' => 3032,
                                    'question' => 'Y a-t-il des antécédents de mycoplasmose dans le troupeau ?',
                                    'reponse' => 'antécédents de mycoplasmes dans le troupeau',
                                    'categorie_id' => 5,
                                ),
                                576 => 
                                array (
                                    'id' => 577,
                                    'alerte_id' => 3033,
                                    'question' => 'La surveillance de la prise colostrale est-elle suffisante ?',
                                    'reponse' => 'pas de surveillance de la prise colostrale',
                                    'categorie_id' => 4,
                                ),
                                577 => 
                                array (
                                    'id' => 578,
                                    'alerte_id' => 3033,
                                    'question' => 'La quantité et la qualité du colostrum sont-elles suffisantes ?',
                                    'reponse' => 'quantité et qualité du colostrum insuffisantes',
                                    'categorie_id' => 4,
                                ),
                                578 => 
                                array (
                                    'id' => 579,
                                    'alerte_id' => 3033,
                                'question' => 'L’ambiance des bâtiments est-elle propice aux variations de températures (exposition / orientation, matériaux,…)?',
                                    'reponse' => 'forte variation de température dans les bâtiments',
                                    'categorie_id' => 2,
                                ),
                                579 => 
                                array (
                                    'id' => 580,
                                    'alerte_id' => 3033,
                                    'question' => 'La densité animale est-elle trop élevée ?',
                                    'reponse' => 'très forte densité animale',
                                    'categorie_id' => 2,
                                ),
                                580 => 
                                array (
                                    'id' => 581,
                                    'alerte_id' => 3033,
                                    'question' => 'La condensation est-elle fréquente dans le bâtiment ?',
                                    'reponse' => 'condensation fréquente dans le bâtiment',
                                    'categorie_id' => 2,
                                ),
                                581 => 
                                array (
                                    'id' => 582,
                                    'alerte_id' => 3033,
                                    'question' => 'Y-a-t-il présence de courants d\'air ?',
                                    'reponse' => 'courants d\'air dans le bâtiment',
                                    'categorie_id' => 2,
                                ),
                                582 => 
                                array (
                                    'id' => 583,
                                    'alerte_id' => 3034,
                                    'question' => 'Les rations des jeunes sont-elles suffisamment équilibrées ?',
                                    'reponse' => 'ration des jeunes déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                583 => 
                                array (
                                    'id' => 584,
                                    'alerte_id' => 3034,
                                    'question' => 'Le sevrage des jeunes se passe-t-il correctement ?',
                                    'reponse' => 'sevrage des jeunes difficile',
                                    'categorie_id' => 1,
                                ),
                                584 => 
                                array (
                                    'id' => 585,
                                    'alerte_id' => 3034,
                                    'question' => 'Les transitions alimentaires sont-elles respectées ?',
                                    'reponse' => 'pas ou peu de transition alimentaire',
                                    'categorie_id' => 1,
                                ),
                                585 => 
                                array (
                                    'id' => 586,
                                    'alerte_id' => 3034,
                                    'question' => 'Le foin est-il appétent ? est-il renouvelé tous les jours ?',
                                    'reponse' => 'foin pas toujours appétent et pas assez souvent renouvelé',
                                    'categorie_id' => 1,
                                ),
                                586 => 
                                array (
                                    'id' => 587,
                                    'alerte_id' => 3034,
                                'question' => 'Le foin est-il facilement accessible (accès, hauteur du râtelier) ?',
                                    'reponse' => 'mauvais accès au foin',
                                    'categorie_id' => 1,
                                ),
                                587 => 
                                array (
                                    'id' => 588,
                                    'alerte_id' => 3034,
                                    'question' => 'Des concentrés sont-ils apportés ?',
                                    'reponse' => 'pas de concentrés apportés aux jeunes',
                                    'categorie_id' => 1,
                                ),
                                588 => 
                                array (
                                    'id' => 589,
                                    'alerte_id' => 3034,
                                    'question' => 'L’abreuvement est-il correct ?',
                                    'reponse' => 'abreuvement incorrecte',
                                    'categorie_id' => 1,
                                ),
                                589 => 
                                array (
                                    'id' => 590,
                                    'alerte_id' => 3034,
                                    'question' => 'Les jeunes sont-ils surveillés sur le plan parasitaire ?',
                                    'reponse' => 'pas de surveillance spécifique des jeunes sur le plan parasitaire',
                                    'categorie_id' => 8,
                                ),
                                590 => 
                                array (
                                    'id' => 591,
                                    'alerte_id' => 3034,
                                    'question' => 'Les jeunes sont-ils atteints ou ont-ils été atteints de maladies ?',
                                    'reponse' => 'jeunes atteints de maladies',
                                    'categorie_id' => 5,
                                ),
                                591 => 
                                array (
                                    'id' => 592,
                                    'alerte_id' => 3035,
                                    'question' => 'Les rations des jeunes sont-elles suffisamment équilibrées ?',
                                    'reponse' => 'déséquilibre dans la ration des jeunes',
                                    'categorie_id' => 1,
                                ),
                                592 => 
                                array (
                                    'id' => 593,
                                    'alerte_id' => 3035,
                                    'question' => 'Le sevrage des jeunes se passe-t-il correctement ?',
                                    'reponse' => 'sevrage des jeunes difficile',
                                    'categorie_id' => 1,
                                ),
                                593 => 
                                array (
                                    'id' => 594,
                                    'alerte_id' => 3035,
                                    'question' => 'Les jeunes sont-ils surveillés sur le plan parasitaire ?',
                                    'reponse' => 'pas de surveillance spécifique des jeunes sur le plan parasitaire',
                                    'categorie_id' => 8,
                                ),
                                594 => 
                                array (
                                    'id' => 595,
                                    'alerte_id' => 3035,
                                    'question' => 'Les jeunes sont-ils atteints ou ont-ils été atteints de maladies ?',
                                    'reponse' => 'jeunes atteints de maladie',
                                    'categorie_id' => 5,
                                ),
                                595 => 
                                array (
                                    'id' => 596,
                                    'alerte_id' => 3036,
                                    'question' => 'La paille de la litière est-elle de bonne qualité, bien conservée ?',
                                    'reponse' => 'mauvaise conservation de la litière, mauvaise qualité',
                                    'categorie_id' => 2,
                                ),
                                596 => 
                                array (
                                    'id' => 597,
                                    'alerte_id' => 3036,
                                    'question' => 'La litière est-elle propre et sèche ?',
                                    'reponse' => 'litière pas toujours propre',
                                    'categorie_id' => 2,
                                ),
                                597 => 
                                array (
                                    'id' => 598,
                                    'alerte_id' => 3036,
                                    'question' => 'Le paillage est-il régulier ?',
                                    'reponse' => 'paillage peu fréquent',
                                    'categorie_id' => 2,
                                ),
                                598 => 
                                array (
                                    'id' => 599,
                                    'alerte_id' => 3036,
                                    'question' => 'Les litières sont-elles régulièrement enlevées, renouvelées ?',
                                    'reponse' => 'litières enlevées et renouvelées peu fréquemment',
                                    'categorie_id' => 2,
                                ),
                                599 => 
                                array (
                                    'id' => 600,
                                    'alerte_id' => 3036,
                                'question' => 'Le bâtiment des chevrettes (si existant) est-il correctement nettoyé, désinfecté ?',
                                    'reponse' => 'nettoyage insuffisant du bâtiment des chevrettes',
                                    'categorie_id' => 3,
                                ),
                                600 => 
                                array (
                                    'id' => 601,
                                    'alerte_id' => 3036,
                                    'question' => 'La désinfection recourt-elle à des désinfectants ayant un effet sur les ookystes ?',
                                    'reponse' => 'pas d\'utilisation de désinfectant',
                                    'categorie_id' => 3,
                                ),
                                601 => 
                                array (
                                    'id' => 602,
                                    'alerte_id' => 3036,
                                    'question' => 'Un vide sanitaire peut-il être réalisé ?',
                                    'reponse' => 'aucun vide sanitaire',
                                    'categorie_id' => 3,
                                ),
                                602 => 
                                array (
                                    'id' => 603,
                                    'alerte_id' => 3036,
                                'question' => 'Le matériel d’élevage est-il correctement nettoyé et désinfecté (quotidiennement)? (vêtements, bottes, gants, ustensiles..)',
                                'reponse' => 'manque de rigueur dans le nettoyage du matériel d\'élevage (vêtements, bottes, ustensiles)',
                                    'categorie_id' => 3,
                                ),
                                603 => 
                                array (
                                    'id' => 604,
                                    'alerte_id' => 3036,
                                    'question' => 'Les lots sont-ils composés de chevreaux d’âges différents ?',
                                    'reponse' => 'lots composés de chevreaux d\'âge différents',
                                    'categorie_id' => 4,
                                ),
                                604 => 
                                array (
                                    'id' => 605,
                                    'alerte_id' => 3036,
                                    'question' => 'La prise colostrale puis, par la suite, l’alimentation sont-elles maîtrisées ?',
                                    'reponse' => 'prise colostrale et alimentation pas bien maîtrisées',
                                    'categorie_id' => 4,
                                ),
                                605 => 
                                array (
                                    'id' => 606,
                                    'alerte_id' => 3036,
                                    'question' => 'Les animaux malades sont-ils séparés des animaux sains ?',
                                    'reponse' => 'pas de séparation des animaux malades',
                                    'categorie_id' => 5,
                                ),
                                606 => 
                                array (
                                    'id' => 607,
                                    'alerte_id' => 3036,
                                'question' => 'Y a-t-il d’autres ateliers (veaux / agneaux) dans lesquels de la cryptosporidiose a été observée ?',
                                    'reponse' => 'cryptosporidiose observée sur d\'autres ateliers de la ferme',
                                    'categorie_id' => 8,
                                ),
                                607 => 
                                array (
                                    'id' => 608,
                                    'alerte_id' => 3036,
                                    'question' => 'Les autres maladies sont-elles maîtrisées ?',
                                    'reponse' => 'autres maladies pas toujours bien maîtrisées',
                                    'categorie_id' => 5,
                                ),
                                608 => 
                                array (
                                    'id' => 609,
                                    'alerte_id' => 3037,
                                    'question' => 'La paille de la litière est-elle de bonne qualité, bien conservée ?',
                                    'reponse' => 'mauvaise conservation de la litière, mauvaise qualité',
                                    'categorie_id' => 2,
                                ),
                                609 => 
                                array (
                                    'id' => 610,
                                    'alerte_id' => 3037,
                                    'question' => 'La litière est-elle propre et sèche ?',
                                    'reponse' => 'litière pas toujours propre',
                                    'categorie_id' => 2,
                                ),
                                610 => 
                                array (
                                    'id' => 611,
                                    'alerte_id' => 3037,
                                    'question' => 'Le paillage est-il régulier ?',
                                    'reponse' => 'paillage peu fréquent',
                                    'categorie_id' => 2,
                                ),
                                611 => 
                                array (
                                    'id' => 612,
                                    'alerte_id' => 3037,
                                    'question' => 'Les litières sont-elles régulièrement enlevées, renouvelées ?',
                                    'reponse' => 'litières enlevées et renouvelées peu fréquemment',
                                    'categorie_id' => 4,
                                ),
                                612 => 
                                array (
                                    'id' => 614,
                                    'alerte_id' => 3037,
                                'question' => 'Les parcs des nouveau-nés pendant les 3 premières semaines sont-ils maintenus très propres (réduction de l’exposition) ?',
                                    'reponse' => 'manque de nettoyage des parcs des nouveaux-nés pendant les 3 premières semaines',
                                    'categorie_id' => 3,
                                ),
                                613 => 
                                array (
                                    'id' => 615,
                                    'alerte_id' => 3037,
                                    'question' => 'Les recommandations en termes de surface/volume/densité sont-elles appliquées ?',
                                    'reponse' => 'recommandations de surface, volume et densité pas respectées',
                                    'categorie_id' => 2,
                                ),
                                614 => 
                                array (
                                    'id' => 616,
                                    'alerte_id' => 3037,
                                'question' => 'Les conditions d’ambiance sont-elles bonnes (humidité, ventilation, température, …) ?',
                                'reponse' => 'mauvaises conditions d\'ambiance (humidité, ventilation, température)',
                                    'categorie_id' => 2,
                                ),
                                615 => 
                                array (
                                    'id' => 617,
                                    'alerte_id' => 3037,
                                'question' => 'Le bâtiment des chevrettes (si existant) est-il correctement nettoyé, désinfecté ?',
                                    'reponse' => 'nettoyage insuffisant du bâtiment des chevrettes',
                                    'categorie_id' => 3,
                                ),
                                616 => 
                                array (
                                    'id' => 618,
                                    'alerte_id' => 3037,
                                    'question' => 'Un vide sanitaire peut-il être réalisé ?',
                                    'reponse' => 'pas de vide sanitaire possible',
                                    'categorie_id' => 3,
                                ),
                                617 => 
                                array (
                                    'id' => 619,
                                    'alerte_id' => 3037,
                                    'question' => 'Le foin, les concentrés ou l’eau de boisson sont-ils souillés par des matières fécales ?',
                                    'reponse' => 'foin, concentrés, eau de boisson souillés par matières fécales',
                                    'categorie_id' => 1,
                                ),
                                618 => 
                                array (
                                    'id' => 620,
                                    'alerte_id' => 3037,
                                    'question' => 'De l’argile est-elle en libre-service ?',
                                    'reponse' => 'pas d\'argile en libre-service',
                                    'categorie_id' => 1,
                                ),
                                619 => 
                                array (
                                    'id' => 621,
                                    'alerte_id' => 3037,
                                    'question' => 'Les chevreaux ont-ils eu des problèmes sanitaires ?',
                                    'reponse' => 'problèmes sanitaires sur les chevreaux',
                                    'categorie_id' => 5,
                                ),
                                620 => 
                                array (
                                    'id' => 622,
                                    'alerte_id' => 3037,
                                'question' => 'Y a-t-il des éléments dans la conduite d’élevage qui peuvent avoir occasionné des stress (transports, allotements, sevrage, mise à l’herbe, chgts alim …) ?',
                                'reponse' => 'stress occasionné (transport, allotement, sevrage, changements alim)',
                                    'categorie_id' => 4,
                                ),
                                621 => 
                                array (
                                    'id' => 623,
                                    'alerte_id' => 3041,
                                    'question' => 'Existe-t-il un calendrier de pâturage ?',
                                    'reponse' => 'pas de calendrier de pâturage',
                                    'categorie_id' => 8,
                                ),
                                622 => 
                                array (
                                    'id' => 624,
                                    'alerte_id' => 3041,
                                    'question' => 'Votre gestion de pâturage prévoit d\'éviter les croisements d\'animaux d\'âge différent ?',
                                    'reponse' => 'croisement d\'animaux d\'âge différent au pâturage',
                                    'categorie_id' => 8,
                                ),
                                623 => 
                                array (
                                    'id' => 625,
                                    'alerte_id' => 3041,
                                    'question' => 'Les animaux sont-ils retirés des pâtures à une hauteur d\'herbe > 6 cm ?',
                                    'reponse' => 'sortie des pâtures à une hauteur d\'herbe < 6cm',
                                    'categorie_id' => 8,
                                ),
                                624 => 
                                array (
                                    'id' => 626,
                                    'alerte_id' => 3041,
                                    'question' => 'La durée entre 2 pâturages sur la même parcelle est-elle supérieur à 36 jours ?',
                                    'reponse' => 'moins de 36 jours entre deux pâturages sur une même parcelle',
                                    'categorie_id' => 8,
                                ),
                                625 => 
                                array (
                                    'id' => 627,
                                    'alerte_id' => 3041,
                                    'question' => 'Les prairies contiennent-elles des espèces fourragères riches en tannin ?',
                                    'reponse' => 'pas de plantes riches en tannin dans les prairies',
                                    'categorie_id' => 8,
                                ),
                                626 => 
                                array (
                                    'id' => 628,
                                    'alerte_id' => 3041,
                                'question' => 'Existe-t-il des haies et parcours avec présence de plantes médicinales ou à tannins (naturelles ou implantées) ?',
                                    'reponse' => 'pas de haies ou parcours avec plantes médicinales/à tannins',
                                    'categorie_id' => 8,
                                ),
                                627 => 
                                array (
                                    'id' => 629,
                                    'alerte_id' => 3041,
                                'question' => 'La surface de pâturage est adaptée au nombre d\'animaux présent ? (chargement UGB)',
                                    'reponse' => 'chargement trop important vis-à-vis du pâturage',
                                    'categorie_id' => 8,
                                ),
                                628 => 
                                array (
                                    'id' => 630,
                                    'alerte_id' => 3041,
                                'question' => 'Pratiquez-vous l\'éducation parasitaires ? (sorties avant 1ère mises bas, choix des parcelles,..)',
                                    'reponse' => 'pas d\'éducation parasitaire',
                                    'categorie_id' => 4,
                                ),
                                629 => 
                                array (
                                    'id' => 631,
                                    'alerte_id' => 3041,
                                    'question' => 'Renouvelez-vous régulièrement vos prairies ?',
                                    'reponse' => 'pas de renouvellement des prairies',
                                    'categorie_id' => 8,
                                ),
                                630 => 
                                array (
                                    'id' => 632,
                                    'alerte_id' => 3041,
                                    'question' => 'Pratiquez-vous l\'alternance fauche/pâture ?',
                                    'reponse' => 'pas d\'alternance fauche/pâture sur les prairies',
                                    'categorie_id' => 8,
                                ),
                                631 => 
                                array (
                                    'id' => 633,
                                    'alerte_id' => 3041,
                                    'question' => 'La ration propose-t-elle une alimentation équilibrée, diversifiée et de qualité pour couvrir les besoins énergétiques, azotés, minérales et vitaminiques ?',
                                    'reponse' => 'ration déséquilibrée et incomplète',
                                    'categorie_id' => 1,
                                ),
                                632 => 
                                array (
                                    'id' => 634,
                                    'alerte_id' => 3041,
                                'question' => 'Pratiquez-vous de la surveillance coproscopique et/ou clinique ? (Famacha, NEC…)',
                                'reponse' => 'pas de coproscopie ou surveillance clinique (type Famacha, NEC)',
                                    'categorie_id' => 8,
                                ),
                                633 => 
                                array (
                                    'id' => 635,
                                    'alerte_id' => 3041,
                                'question' => 'Apportez-vous un soutien alimentaire adapté aux stades physiologiques ? (mise bas)',
                                    'reponse' => 'manque de soutien alimentaire adapté aux stades physiologiques',
                                    'categorie_id' => 1,
                                ),
                                634 => 
                                array (
                                    'id' => 636,
                                    'alerte_id' => 3041,
                                    'question' => 'Avez-vous une gestion différenciée par lot des populations à risques ?',
                                    'reponse' => 'pas de gestion différenciée par lot des populations à risque',
                                    'categorie_id' => 8,
                                ),
                                635 => 
                                array (
                                    'id' => 637,
                                    'alerte_id' => 3041,
                                'question' => 'Pratiquez-vous un renforcement immunitaire préventif ? (phytothérapie et autres pratiques de renforcement des défenses antiparasitaires naturelles)',
                                    'reponse' => 'pas de renforcement immunitaire préventif',
                                    'categorie_id' => 8,
                                ),
                                636 => 
                                array (
                                    'id' => 638,
                                    'alerte_id' => 3041,
                                    'question' => 'Optimisez-vous l\'efficacité du traitement en faisant correspondre date de traitement et cycle du parasite ?',
                                    'reponse' => 'vigilance pour faire correspondre date du traitement et cycle du parasite',
                                    'categorie_id' => 8,
                                ),
                                637 => 
                                array (
                                    'id' => 639,
                                    'alerte_id' => 3041,
                                    'question' => 'Pratiquez-vous le traitement antiparasitaire non systématiques ?',
                                    'reponse' => 'traitement antiparasitaire systématique',
                                    'categorie_id' => 8,
                                ),
                                638 => 
                                array (
                                    'id' => 640,
                                    'alerte_id' => 3041,
                                    'question' => 'Gardez-vous des vieilles chèvres avec accumulation de contaminations successives et augmentation du niveau parasitaire ?',
                                    'reponse' => 'des vieilles chèvres parasitées sont gardées',
                                    'categorie_id' => 8,
                                ),
                                639 => 
                                array (
                                    'id' => 641,
                                    'alerte_id' => 3045,
                                'question' => 'Observez-vous la présence de parasites externes sur les animaux? (pou, gale, myase…)',
                                    'reponse' => 'présence de parasites externes',
                                    'categorie_id' => 8,
                                ),
                                640 => 
                                array (
                                    'id' => 642,
                                    'alerte_id' => 3045,
                                    'question' => 'pratiquez-vous la désinfection et ou le vide sanitaire ?',
                                    'reponse' => 'pas de désinfection, pas de vide sanitaire pratiqués',
                                    'categorie_id' => 3,
                                ),
                                641 => 
                                array (
                                    'id' => 643,
                                    'alerte_id' => 3045,
                                'question' => 'En cas d\'achat, observez-vous la présence de parasites externes sur les animaux? (pou, gale, myase…)',
                                    'reponse' => 'lors d\'un achat, pas d\'observation spécifique de la présence de parasites externes',
                                    'categorie_id' => 8,
                                ),
                                642 => 
                                array (
                                    'id' => 644,
                                    'alerte_id' => 3045,
                                    'question' => 'Vos animaux peuvent-ils être en contact avec des animaux d\'autres espèces ou d\'autres troupeaux?',
                                    'reponse' => 'animaux en contact avec d\'autres troupeaux ou d\'autres espèces',
                                    'categorie_id' => 4,
                                ),
                                643 => 
                                array (
                                    'id' => 645,
                                    'alerte_id' => 3045,
                                    'question' => 'Réalisez-vous une lutte contre les mouches dans vos bâtiments et vos animaux?',
                                    'reponse' => 'pas de lutte contre les mouches dans les bâtiments et sur les animaux',
                                    'categorie_id' => 3,
                                ),
                                644 => 
                                array (
                                    'id' => 646,
                                    'alerte_id' => 3045,
                                    'question' => 'Les conditions d\'hygiène et de propreté sont-elles correctes?',
                                    'reponse' => 'hygiène et propreté insuffisantes',
                                    'categorie_id' => 3,
                                ),
                                645 => 
                                array (
                                    'id' => 647,
                                    'alerte_id' => 3046,
                                'question' => 'Observez-vous la présence de parasites externes sur les animaux? (pou, gale, myase…)',
                                    'reponse' => 'présence de parasites externes',
                                    'categorie_id' => 5,
                                ),
                                646 => 
                                array (
                                    'id' => 648,
                                    'alerte_id' => 3046,
                                    'question' => 'pratiquez-vous la désinfection et ou le vide sanitaire ?',
                                    'reponse' => 'pas de désinfection, pas de vide sanitaire pratiqués',
                                    'categorie_id' => 3,
                                ),
                                647 => 
                                array (
                                    'id' => 649,
                                    'alerte_id' => 3046,
                                'question' => 'En cas d\'achat, observez-vous la présence de parasites externes sur les animaux? (pou, gale, myase…)',
                                    'reponse' => 'lors d\'un achat, pas d\'observation spécifique de la présence de parasites externes',
                                    'categorie_id' => 5,
                                ),
                                648 => 
                                array (
                                    'id' => 650,
                                    'alerte_id' => 3046,
                                    'question' => 'Vos animaux peuvent-ils être en contact avec des animaux d\'autres espèces ou d\'autres troupeaux?',
                                    'reponse' => 'animaux en contact avec d\'autres troupeaux ou d\'autres espèces',
                                    'categorie_id' => 4,
                                ),
                                649 => 
                                array (
                                    'id' => 651,
                                    'alerte_id' => 3046,
                                    'question' => 'Réalisez-vous une lutte contre les mouches dans vos bâtiments et vos animaux?',
                                    'reponse' => 'pas de lutte contre les mouches dans les bâtiments et sur les animaux',
                                    'categorie_id' => 3,
                                ),
                                650 => 
                                array (
                                    'id' => 652,
                                    'alerte_id' => 3046,
                                    'question' => 'Les conditions d\'hygiène et de propreté sont-elles correctes?',
                                    'reponse' => 'hygiène et propreté insuffisantes',
                                    'categorie_id' => 3,
                                ),
                                651 => 
                                array (
                                    'id' => 653,
                                    'alerte_id' => 3047,
                                    'question' => 'La fréquence du parage est-elle suffisante ?',
                                    'reponse' => 'fréquence de parage insuffisante',
                                    'categorie_id' => 4,
                                ),
                                652 => 
                                array (
                                    'id' => 654,
                                    'alerte_id' => 3048,
                                    'question' => 'Utilisez-vous du lait maternel thermisé pour les chevreaux ?',
                                    'reponse' => 'pas d\'utilisation de lait maternel thermisé pour les chevreaux',
                                    'categorie_id' => 1,
                                ),
                                653 => 
                                array (
                                    'id' => 655,
                                    'alerte_id' => 3048,
                                    'question' => 'Appliquez-vous des précautions particulières d\'hygiène au moment du tatouage ?',
                                    'reponse' => 'manque de précautions d\'hygiène au moment du tatouage',
                                    'categorie_id' => 3,
                                ),
                                654 => 
                                array (
                                    'id' => 656,
                                    'alerte_id' => 3048,
                                    'question' => 'Le bâtiment correspond-il aux recommandations de confort, de ventilation, de surface et d\'hygiène ?',
                                    'reponse' => 'confort, ventilation, surface et hygiène du bâtiment pas adaptés aux recommandations',
                                    'categorie_id' => 2,
                                ),
                                655 => 
                                array (
                                    'id' => 657,
                                    'alerte_id' => 3022,
                                    'question' => 'Avez-vous une stratégie de réformes des chèvres infectées de manière chronique, incurables ?',
                                    'reponse' => 'pas de réforme des chèvres infectées chroniquement',
                                    'categorie_id' => 4,
                                ),
                                656 => 
                                array (
                                    'id' => 658,
                                    'alerte_id' => 3022,
                                    'question' => 'Possédez-vous une stratégie de repérage précoce des mammites cliniques ?',
                                    'reponse' => 'repérage tardif des mammites cliniques',
                                    'categorie_id' => 5,
                                ),
                                657 => 
                                array (
                                    'id' => 659,
                                    'alerte_id' => 3022,
                                    'question' => 'Présence d\'une politique de soins ou de réformes vis-à-vis des mammites cliniques?',
                                    'reponse' => 'pas politique de soins ou réformes vis-à-vis des mammites cliniques',
                                    'categorie_id' => 5,
                                ),
                                658 => 
                                array (
                                    'id' => 660,
                                    'alerte_id' => 3022,
                                    'question' => 'Possédez-vous une stratégie de traitement raisonné, ciblé en cas de mammites subcliniques?',
                                    'reponse' => 'pas de traitement spécifique en cas de mammites subcliniques',
                                    'categorie_id' => 5,
                                ),
                                659 => 
                                array (
                                    'id' => 661,
                                    'alerte_id' => 3022,
                                'question' => 'Possédez-vous une stratégie de traitement adaptée aux problèmes rencontrés dans votre élevage? (nature des infections subcliniques)',
                                    'reponse' => 'traitements pas spécifiquement adaptés aux problèmes rencontrés',
                                    'categorie_id' => 5,
                                ),
                                660 => 
                                array (
                                    'id' => 662,
                                    'alerte_id' => 3022,
                                'question' => 'Appliquer vous de façon rigoureuse le traitement au tarissement? (hygiène et posologie)',
                                    'reponse' => 'manque de rigueur au tarissement',
                                    'categorie_id' => 3,
                                ),
                                661 => 
                                array (
                                    'id' => 663,
                                    'alerte_id' => 3022,
                                    'question' => 'Appliquer vous une hygiène rigoureuse en cas de traitement par voie intra mammaire?',
                                    'reponse' => 'manque de rigueur lors de traitement intra-mammaire',
                                    'categorie_id' => 3,
                                ),
                                662 => 
                                array (
                                    'id' => 664,
                                    'alerte_id' => 3022,
                                    'question' => 'Avez-vous une stratégie globale de choix des chèvres à traiter?',
                                    'reponse' => 'manque de stratégie pour choisir les chèvres à traiter',
                                    'categorie_id' => 4,
                                ),
                                663 => 
                                array (
                                    'id' => 665,
                                    'alerte_id' => 3022,
                                    'question' => 'Détenez- vous beaucoup de chèvres infectées, en lactation longue ou prolongée?',
                                    'reponse' => 'plusieurs chèvres infectées gardées sur la ferme',
                                    'categorie_id' => 4,
                                ),
                                664 => 
                                array (
                                    'id' => 666,
                                    'alerte_id' => 3022,
                                'question' => 'La ration en fin de la lactation est-elle équilibrée? (En particulier les apports azotés)',
                                    'reponse' => 'ration déséquilibrée en fin de lactation',
                                    'categorie_id' => 1,
                                ),
                                665 => 
                                array (
                                    'id' => 667,
                                    'alerte_id' => 3022,
                                    'question' => 'Réalisez-vous des transitions alimentaires en fin de période sèche? / fourrages, concentrés, oligo-éléments',
                                    'reponse' => 'pas de transition alimentaire en fin de période sèche',
                                    'categorie_id' => 1,
                                ),
                                666 => 
                                array (
                                    'id' => 668,
                                    'alerte_id' => 3022,
                                'question' => 'La durée de période sèche est-elle correcte? (attention au période trop courte)',
                                    'reponse' => 'période sèche trop courte',
                                    'categorie_id' => 4,
                                ),
                                667 => 
                                array (
                                    'id' => 669,
                                    'alerte_id' => 3022,
                                    'question' => 'Détenez-vous des animaux incurables, infectés chroniques?',
                                    'reponse' => 'animaux infectés chroniques gardés sur la ferme',
                                    'categorie_id' => 5,
                                ),
                                668 => 
                                array (
                                    'id' => 670,
                                    'alerte_id' => 3022,
                                    'question' => 'Détenez-vous des animaux infectés par des mycoplasmes?',
                                    'reponse' => 'présence d\'animaux infectés par des mycoplasmes',
                                    'categorie_id' => 5,
                                ),
                                669 => 
                                array (
                                    'id' => 671,
                                    'alerte_id' => 3022,
                                'question' => 'Possédez-vous une machine à traire bien réglée? (réglage de l\'installation et/ou réglage de la dépose automatique)',
                                    'reponse' => 'machine à traire mal réglée',
                                    'categorie_id' => 4,
                                ),
                                670 => 
                                array (
                                    'id' => 672,
                                    'alerte_id' => 3022,
                                'question' => 'Possédez-vous une installation de traite bien conçue? (pente du lactoduc incorrecte ou diamètre de lactoduc avec engorgements possibles)',
                                'reponse' => 'installation de traite mal conçue (lactoduc notamment)',
                                    'categorie_id' => 4,
                                ),
                                671 => 
                                array (
                                    'id' => 673,
                                    'alerte_id' => 3022,
                                    'question' => 'Réalisez-vous un entretien régulier de la machine à traire ?',
                                    'reponse' => 'manque de régularité dans l\'entretien de la machine à traire',
                                    'categorie_id' => 4,
                                ),
                                672 => 
                                array (
                                    'id' => 674,
                                    'alerte_id' => 3022,
                                    'question' => 'Appliquer vous un protocole de nettoyage et de soins particuliers en cas de blessures des mains du trayeur avant la traite ?',
                                    'reponse' => 'si blessure des mains du trayeur avant la traite, manque d\'un protocole de nettoyage/protection',
                                    'categorie_id' => 3,
                                ),
                                673 => 
                                array (
                                    'id' => 675,
                                    'alerte_id' => 3022,
                                    'question' => 'Présence de mamelles sales ou mamelles avec des staphylococcies sur la peau ou autres maladies du trayon?',
                                    'reponse' => 'mamelles sales, mamelles avec staphylococcies, maladies du trayon',
                                    'categorie_id' => 3,
                                ),
                                674 => 
                                array (
                                    'id' => 676,
                                    'alerte_id' => 3022,
                                    'question' => 'Réalisez-vous une hygiène avant la traite ? Et su oui, est-elle réalisée systématiquement?',
                                    'reponse' => 'manque d\'hygiène systématique avant la traite',
                                    'categorie_id' => 3,
                                ),
                                675 => 
                                array (
                                    'id' => 677,
                                    'alerte_id' => 3022,
                                    'question' => 'Réalisez-vous une désinfection des trayons après la traite? Si oui, est-elle réalisée de manière correcte?',
                                'reponse' => 'pas (ou mauvaise) désinfection des trayons après la traite',
                                    'categorie_id' => 3,
                                ),
                                676 => 
                                array (
                                    'id' => 678,
                                    'alerte_id' => 3022,
                                    'question' => 'Au cours de la fin de traite, réalisez-vous de l\'égouttage, des massages, de la repasse - surtraite?',
                                    'reponse' => 'en fin de traite, égouttage, massage ou repasse- surtraite',
                                    'categorie_id' => 4,
                                ),
                                677 => 
                                array (
                                    'id' => 679,
                                    'alerte_id' => 3022,
                                    'question' => 'Si vous avez des griffes avec coupure de vide. Réalisez-vous une coupure du vide au moment de la dépose?',
                                    'reponse' => 'pas de coupure du vide au moment de la dépose',
                                    'categorie_id' => 4,
                                ),
                                678 => 
                                array (
                                    'id' => 680,
                                    'alerte_id' => 3022,
                                    'question' => 'Réalisez-vous des branchements de deux chèvres simultanément à partir d\'un même faisceau?',
                                    'reponse' => 'branchement de deux chèvres simultanément à partir d\'un même faisceau',
                                    'categorie_id' => 4,
                                ),
                                679 => 
                                array (
                                    'id' => 681,
                                    'alerte_id' => 3022,
                                    'question' => 'Présence d\'entrées d\'air au moment de la pose et/ou dépose des faisceaux trayeurs ? ',
                                    'reponse' => 'entrée d\'air lors de la pose/dépose des faisceaux trayeurs',
                                    'categorie_id' => 4,
                                ),
                                680 => 
                                array (
                                    'id' => 682,
                                    'alerte_id' => 3022,
                                    'question' => 'Avez-vous un protocole de nettoyage du matériel de traite ?',
                                    'reponse' => 'pas de protocole de nettoyage du matériel de traite',
                                    'categorie_id' => 3,
                                ),
                                681 => 
                                array (
                                    'id' => 683,
                                    'alerte_id' => 3022,
                                    'question' => 'Avez-vous mis en place un ordre de traite tenant compte du statut infectieux des chèvres?',
                                    'reponse' => 'ordre de traite ne tenant pas compte du statut infectieux des chèvres',
                                    'categorie_id' => 4,
                                ),
                                682 => 
                                array (
                                    'id' => 684,
                                    'alerte_id' => 3022,
                                'question' => 'Possédez-vous une machine à traire bien réglée? (réglage de l\'installation et/ou réglage de la dépose automatique)',
                                    'reponse' => 'machine à traire mal réglée',
                                    'categorie_id' => 4,
                                ),
                                683 => 
                                array (
                                    'id' => 685,
                                    'alerte_id' => 3022,
                                    'question' => 'Au cours de la fin de traite, réalisez-vous de l\'égouttage, des massages, de la repasse - surtraite?',
                                    'reponse' => 'en fin de traite, égouttage, massage ou repasse- surtraite',
                                    'categorie_id' => 4,
                                ),
                                684 => 
                                array (
                                    'id' => 686,
                                    'alerte_id' => 3022,
                                    'question' => 'Si vous avez des griffes avec coupure de vide. Réalisez-vous une coupure du vide au moment de la dépose?',
                                    'reponse' => 'pas de coupure du vide au moment de la dépose',
                                    'categorie_id' => 4,
                                ),
                                685 => 
                                array (
                                    'id' => 687,
                                    'alerte_id' => 3022,
                                'question' => 'Les manchons que vous utilisez sont-ils adaptés à la forme des trayons? (notamment diamètre à l\'embouchure)',
                                    'reponse' => 'manchons non adaptés à la forme des trayons',
                                    'categorie_id' => 4,
                                ),
                                686 => 
                                array (
                                    'id' => 688,
                                    'alerte_id' => 3022,
                                    'question' => 'Conserver-vous des chèvres incurables?',
                                    'reponse' => 'chèvres incurables gardées sur la ferme',
                                    'categorie_id' => 5,
                                ),
                                687 => 
                                array (
                                    'id' => 689,
                                    'alerte_id' => 3022,
                                    'question' => 'Détenez- vous beaucoup de chèvres infectées, en lactation longue ou prolongée?',
                                    'reponse' => 'beaucoup de chèvres infectées gardées sur la ferme',
                                    'categorie_id' => 5,
                                ),
                                688 => 
                                array (
                                    'id' => 690,
                                    'alerte_id' => 3022,
                                    'question' => 'Possédez-vous plusieurs lots de mises bas ? appartenance aux lots de mises bas d\'été',
                                    'reponse' => 'plusieurs lots de mise-bas',
                                    'categorie_id' => 4,
                                ),
                                689 => 
                                array (
                                    'id' => 691,
                                    'alerte_id' => 3022,
                                    'question' => 'Avez-vous mis en place un ordre de traite tenant compte du statut infectieux des chèvres?',
                                    'reponse' => 'ordre de traite ne tenant pas compte du statut infectieux des chèvres',
                                    'categorie_id' => 4,
                                ),
                                690 => 
                                array (
                                    'id' => 692,
                                    'alerte_id' => 3022,
                                    'question' => 'L\'ambiance en salle de traite est-il calme?',
                                    'reponse' => 'ambiance stressante ou agitée en salle de traite',
                                    'categorie_id' => 4,
                                ),
                                691 => 
                                array (
                                    'id' => 693,
                                    'alerte_id' => 3020,
                                    'question' => 'En cas de doute faites-vous réalisez une bactériologie individuelle pour rechercher des chèvres excrétrices?',
                                    'reponse' => 'pas de bactériologie individuelle, même si doutes',
                                    'categorie_id' => 5,
                                ),
                                692 => 
                                array (
                                    'id' => 694,
                                    'alerte_id' => 3020,
                                    'question' => 'Réalisez-vous un nettoyage avant et une désinfection après la traite? Si oui, ces pratiques sont-elles correctement réalisées?',
                                    'reponse' => 'pas ou insuffisant nettoyage avant et après traite',
                                    'categorie_id' => 4,
                                ),
                                693 => 
                                array (
                                    'id' => 695,
                                    'alerte_id' => 3020,
                                'question' => 'Possédez-vous une installation de traite bien conçue? (pente du lactoduc incorrecte ou diamètre de lactoduc avec engorgements possibles)',
                                'reponse' => 'installation de traite mal conçue (lactoduc notamment)',
                                    'categorie_id' => 4,
                                ),
                                694 => 
                                array (
                                    'id' => 696,
                                    'alerte_id' => 3020,
                                    'question' => 'Possédez-vous un protocole adapté pour pallier un défaut d\'entretien, de nettoyage du matériel de traite et de l\'installation?',
                                    'reponse' => 'pas de protocole adapté pour pallier un défaut',
                                    'categorie_id' => 4,
                                ),
                                695 => 
                                array (
                                    'id' => 697,
                                    'alerte_id' => 3020,
                                'question' => 'L’hygiène générale du bâtiment est-il correct? (densité, paillage, nature du paillage), Réalisez-vous une désinfection du bâtiment si besoin?',
                                    'reponse' => 'hygiène du bâtiment insuffisante, pas de désinfection',
                                    'categorie_id' => 3,
                                ),
                                696 => 
                                array (
                                    'id' => 698,
                                    'alerte_id' => 3021,
                                'question' => 'Réalisez-vous un tri des aliments potentiellement contaminés ou des parties altérées (ensilage)?',
                                    'reponse' => 'pas de tri des aliments altérés',
                                    'categorie_id' => 1,
                                ),
                                697 => 
                                array (
                                    'id' => 699,
                                    'alerte_id' => 3021,
                                    'question' => 'Réalisez-vous un nettoyage régulier des abreuvoirs et des auges?',
                                    'reponse' => 'abreuvoirs et auges rarement nettoyés',
                                    'categorie_id' => 3,
                                ),
                                698 => 
                                array (
                                    'id' => 700,
                                    'alerte_id' => 3021,
                                'question' => 'L’hygiène générale du bâtiment est-il correct? (densité, paillage, nature du paillage), Réalisez-vous une désinfection du bâtiment si besoin?',
                                    'reponse' => 'hygiène du bâtiment insuffisante, pas de désinfection',
                                    'categorie_id' => 3,
                                ),
                                699 => 
                                array (
                                    'id' => 701,
                                    'alerte_id' => 3021,
                                    'question' => 'En cas de doute faites-vous réalisez une bactériologie individuelle pour rechercher des chèvres excrétrices?',
                                    'reponse' => 'pas de bactériologie individuelle, même si doutes',
                                    'categorie_id' => 5,
                                ),
                                700 => 
                                array (
                                    'id' => 702,
                                    'alerte_id' => 3021,
                                    'question' => 'Réalisez-vous un nettoyage avant et une désinfection après la traite? Si oui, ces pratiques sont-elles correctement réalisées?',
                                    'reponse' => 'pas ou insuffisant nettoyage avant et après traite',
                                    'categorie_id' => 3,
                                ),
                                701 => 
                                array (
                                    'id' => 703,
                                    'alerte_id' => 3021,
                                'question' => 'Possédez-vous une installation de traite bien conçue? (pente du lactoduc incorrecte ou diamètre de lactoduc avec engorgements possibles)',
                                'reponse' => 'installation de traite mal conçue (lactoduc notamment)',
                                    'categorie_id' => 4,
                                ),
                                702 => 
                                array (
                                    'id' => 704,
                                    'alerte_id' => 3021,
                                    'question' => 'Possédez-vous un protocole adapté pour pallier un défaut d\'entretien, de nettoyage du matériel de traite et de l\'installation?',
                                    'reponse' => 'pas de protocole adapté pour pallier un défaut',
                                    'categorie_id' => 4,
                                ),
                                703 => 
                                array (
                                    'id' => 705,
                                    'alerte_id' => 3049,
                                    'question' => 'Possédez-vous un protocole adapté pour pallier un défaut d\'entretien, de nettoyage du matériel de traite et de l\'installation?',
                                    'reponse' => 'pas de protocole adapté pour pallier un défaut',
                                    'categorie_id' => 4,
                                ),
                                704 => 
                                array (
                                    'id' => 706,
                                    'alerte_id' => 3049,
                                'question' => 'L’hygiène générale du bâtiment est-il correct? (densité, paillage, nature du paillage), Réalisez-vous une désinfection du bâtiment si besoin?',
                                    'reponse' => 'hygiène du bâtiment insuffisante, pas de désinfection',
                                    'categorie_id' => 3,
                                ),
                                705 => 
                                array (
                                    'id' => 707,
                                    'alerte_id' => 3049,
                                    'question' => 'Réalisez-vous un nettoyage avant et une désinfection après la traite? Si oui, ces pratiques sont-elles correctement réalisées?',
                                    'reponse' => 'pas ou insuffisant nettoyage avant et après traite',
                                    'categorie_id' => 3,
                                ),
                                706 => 
                                array (
                                    'id' => 708,
                                    'alerte_id' => 3049,
                                    'question' => 'En cas de doute faites-vous réalisez une bactériologie individuelle pour rechercher des chèvres excrétrices? - mammites cliniques ou subcliniques',
                                    'reponse' => 'pas de bactériologie individuelle, même si doutes',
                                    'categorie_id' => 5,
                                ),
                                707 => 
                                array (
                                    'id' => 709,
                                    'alerte_id' => 3049,
                                'question' => 'Faites-vous réalisez régulièrement un contrôle bactériologique de l\'eau? (boisson/lavage/…)',
                                    'reponse' => 'pas ou rare contrôle bactériologique de l\'eau',
                                    'categorie_id' => 3,
                                ),
                                708 => 
                                array (
                                    'id' => 710,
                                    'alerte_id' => 4000,
                                    'question' => 'Les animaux sont-ils suffisamment alimentés sur toutes les périodes de l\'année ? ',
                                    'reponse' => 'Sous-alimentation à certaines périodes',
                                    'categorie_id' => 1,
                                ),
                                709 => 
                                array (
                                    'id' => 711,
                                    'alerte_id' => 4000,
                                    'question' => 'Les rations sont-elles équilibrées en fonction de leur besoin ? ',
                                    'reponse' => 'Rations pas toujours équilibrées en fonction des besoins',
                                    'categorie_id' => 1,
                                ),
                                710 => 
                                array (
                                    'id' => 712,
                                    'alerte_id' => 4000,
                                    'question' => 'Les aliments distribués sont-ils sains et bien conservés ? ',
                                    'reponse' => 'Problème de qualité et de conservation des aliments ',
                                    'categorie_id' => 1,
                                ),
                                711 => 
                                array (
                                    'id' => 713,
                                    'alerte_id' => 4000,
                                    'question' => 'Les accès à l\'aliment sont-ils suffisants pour tous les animaux en même temps ? ',
                                    'reponse' => 'Compétition entre les animaux pour l’accès aux aliments',
                                    'categorie_id' => 1,
                                ),
                                712 => 
                                array (
                                    'id' => 714,
                                    'alerte_id' => 4000,
                                    'question' => 'Les brebis sont-elles parasitées ?',
                                    'reponse' => 'Parasitisme impactant les animaux',
                                    'categorie_id' => 8,
                                ),
                                713 => 
                                array (
                                    'id' => 715,
                                    'alerte_id' => 4001,
                                    'question' => 'Les conditions de logements sont-elles satisfaisantes ? Densité ?',
                                    'reponse' => 'Problème de logement des animaux, trop forte densité',
                                    'categorie_id' => 2,
                                ),
                                714 => 
                                array (
                                    'id' => 716,
                                    'alerte_id' => 4001,
                                    'question' => 'Les quantités de paille litière sont-elles suffisantes ? ',
                                    'reponse' => 'Paillage de la litière insuffisant',
                                    'categorie_id' => 2,
                                ),
                                715 => 
                                array (
                                    'id' => 717,
                                    'alerte_id' => 4001,
                                    'question' => 'Les surfaces de vie sont-elles suffisantes ? ',
                                    'reponse' => 'Surfaces de vie insuffisantes',
                                    'categorie_id' => 2,
                                ),
                                716 => 
                                array (
                                    'id' => 718,
                                    'alerte_id' => 4001,
                                    'question' => 'La ration est-elle équilibrée ? ',
                                    'reponse' => 'Ration déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                717 => 
                                array (
                                    'id' => 719,
                                    'alerte_id' => 4001,
                                    'question' => 'La ration est-elle suffisamment fibreuse',
                                    'reponse' => 'Manque de fibres dans la ration',
                                    'categorie_id' => 1,
                                ),
                                718 => 
                                array (
                                    'id' => 720,
                                    'alerte_id' => 4001,
                                'question' => 'Les animaux sont-ils parasités ? (cf parasitisme)',
                                    'reponse' => 'Parasitisme impactant les animaux',
                                    'categorie_id' => 8,
                                ),
                                719 => 
                                array (
                                    'id' => 721,
                                    'alerte_id' => 4002,
                                'question' => 'Les réformes sont-elles subies (sanitaire) ou choisies (sélection) ? ',
                                    'reponse' => 'Trop de réformes pour causes sanitaires, pas assez de choix',
                                    'categorie_id' => 5,
                                ),
                                720 => 
                                array (
                                    'id' => 722,
                                    'alerte_id' => 4002,
                                    'question' => 'Quel est l\'âge moyen des réformes ? ',
                                    'reponse' => 'Age moyen des réformes trop élevé',
                                    'categorie_id' => 4,
                                ),
                                721 => 
                                array (
                                    'id' => 723,
                                    'alerte_id' => 4002,
                                    'question' => 'Le troupeau a-t-il des soucis de fertilité ? ',
                                    'reponse' => 'Problèmes de fertilité sur le troupeau',
                                    'categorie_id' => 5,
                                ),
                                722 => 
                                array (
                                    'id' => 725,
                                    'alerte_id' => 4003,
                                    'question' => 'Le troupeau est-il suffisamment renouvelé ? ',
                                    'reponse' => 'Manque de renouvellement du troupeau',
                                    'categorie_id' => 4,
                                ),
                                723 => 
                                array (
                                    'id' => 726,
                                    'alerte_id' => 4003,
                                'question' => 'Les brebis présentent-elles des pathologies infectieuses chroniques ? (respiratoire, mamelle, etc)',
                                'reponse' => 'Présence de maladies infectieuses chroniques (mammites, pneumonies, …)',
                                    'categorie_id' => 5,
                                ),
                                724 => 
                                array (
                                    'id' => 727,
                                    'alerte_id' => 4003,
                                'question' => 'Les brebis présentent-elles des pathologies métaboliques ? (toxémie de gestation, hypomagnésémie, hypocalcémie, cétose, acidose, …)',
                                'reponse' => 'Pathologies métaboliques (toxémie, hypomagnésémie, hypocalcémie, acidose, …)',
                                    'categorie_id' => 5,
                                ),
                                725 => 
                                array (
                                    'id' => 728,
                                    'alerte_id' => 4003,
                                    'question' => 'L\'état corporel du troupeau est-il satisfaisant toute l\'année ? ',
                                    'reponse' => 'État corporel problématique à certaines périodes',
                                    'categorie_id' => 1,
                                ),
                                726 => 
                                array (
                                    'id' => 730,
                                    'alerte_id' => 4003,
                                'question' => 'La fréquence de surveillance est-elle suffisante ? (Les brebis sur le dos au quotidien)',
                                    'reponse' => 'Surveillance pas assez fréquente',
                                    'categorie_id' => 4,
                                ),
                                727 => 
                                array (
                                    'id' => 731,
                                    'alerte_id' => 4004,
                                'question' => 'Les brebis sont-elles atteintes de maladies chroniques ? (respiratoires, infectieuses, …)',
                                'reponse' => 'Présence de maladies infectieuses chroniques (mammites, pneumonies, …)',
                                    'categorie_id' => 5,
                                ),
                                728 => 
                                array (
                                    'id' => 732,
                                    'alerte_id' => 4004,
                                    'question' => 'Y-a-t-il eu introduction d\'animaux avec achat dernièrement ? ',
                                    'reponse' => 'Achats d’animaux récents',
                                    'categorie_id' => 4,
                                ),
                                729 => 
                                array (
                                    'id' => 733,
                                    'alerte_id' => 4004,
                                'question' => 'Les conditions de logement (hygiène, ventilation, température) sont-elles satisfaisantes ? ',
                                'reponse' => 'Conditions de logements insatisfaisantes (hygiène, ventilation, température, …)',
                                    'categorie_id' => 2,
                                ),
                                730 => 
                                array (
                                    'id' => 734,
                                    'alerte_id' => 4004,
                                    'question' => 'Les écarts de températures sont-ils accentués dans la bergerie ? ',
                                    'reponse' => 'Ecarts de température trop importants en bergerie',
                                    'categorie_id' => 2,
                                ),
                                731 => 
                                array (
                                    'id' => 735,
                                    'alerte_id' => 4005,
                                    'question' => 'L\'état général du troupeau est-il évalué régulièrement ? Si oui, est-il satisfaisant ? ',
                                    'reponse' => 'Pas d’évaluation régulière de l’état corporel',
                                    'categorie_id' => 4,
                                ),
                                732 => 
                                array (
                                    'id' => 736,
                                    'alerte_id' => 4005,
                                    'question' => 'Les rations sont-elles équilibrées ? ',
                                    'reponse' => 'Ration déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                733 => 
                                array (
                                    'id' => 737,
                                    'alerte_id' => 4005,
                                    'question' => 'Les durées de transition alimentaire de 3 semaines sont-elles respectées ? ',
                                    'reponse' => 'Mauvaise transition alimentaire',
                                    'categorie_id' => 1,
                                ),
                                734 => 
                                array (
                                    'id' => 738,
                                    'alerte_id' => 4005,
                                    'question' => 'La rotation des pâtures est-elle respectée ? ',
                                    'reponse' => 'Pas de rotation des pâturages',
                                    'categorie_id' => 1,
                                ),
                                735 => 
                                array (
                                    'id' => 739,
                                    'alerte_id' => 4005,
                                    'question' => 'Les pâtures présentent-elles des excès d\'azote ?',
                                    'reponse' => 'Excès d’azote dans les pâtures',
                                    'categorie_id' => 1,
                                ),
                                736 => 
                                array (
                                    'id' => 740,
                                    'alerte_id' => 4005,
                                    'question' => 'L’infestation parasitaire du troupeau est-elle surveillée et fait elle l’objet d’une gestion raisonnée à l’échelle du troupeau ?',
                                    'reponse' => 'Pas de surveillance et de gestion raisonnée du parasitisme',
                                    'categorie_id' => 8,
                                ),
                                737 => 
                                array (
                                    'id' => 741,
                                    'alerte_id' => 4006,
                                    'question' => 'Les rations des jeunes sont-elles suffisamment équilibrées ? ',
                                    'reponse' => 'Rations des jeunes déséquilibrées',
                                    'categorie_id' => 1,
                                ),
                                738 => 
                                array (
                                    'id' => 742,
                                    'alerte_id' => 4006,
                                    'question' => 'Le sevrage des jeunes se passe-t-il sans difficulté ? ',
                                    'reponse' => 'Problèmes lors du sevrage des jeunes',
                                    'categorie_id' => 4,
                                ),
                                739 => 
                                array (
                                    'id' => 743,
                                    'alerte_id' => 4006,
                                'question' => 'Les jeunes sont-ils surveillés sur le plan du parasitisme ? (cf parasitisme)',
                                    'reponse' => 'Pas de surveillance du parasitisme des jeunes',
                                    'categorie_id' => 8,
                                ),
                                740 => 
                                array (
                                    'id' => 744,
                                    'alerte_id' => 4006,
                                'question' => 'Les jeunes sont-ils atteints ou ont-ils été atteints de maladies ? (cf santé des jeunes)',
                                    'reponse' => 'Maladies chez les jeunes',
                                    'categorie_id' => 5,
                                ),
                                741 => 
                                array (
                                    'id' => 745,
                                    'alerte_id' => 4007,
                                    'question' => 'Les rations sont-elles équilibrées et suffisantes ? ',
                                    'reponse' => 'Rations déséquilibrées et/ou insuffisantes',
                                    'categorie_id' => 1,
                                ),
                                742 => 
                                array (
                                    'id' => 746,
                                    'alerte_id' => 4007,
                                    'question' => 'Les aliments du commerce ont-ils des formulations adaptées aux ovins ?',
                                    'reponse' => 'Aliments du commerce non adapté aux ovins',
                                    'categorie_id' => 1,
                                ),
                                743 => 
                                array (
                                    'id' => 747,
                                    'alerte_id' => 4008,
                                'question' => 'Votre vétérinaire est-il informé de la présence de troubles nerveux sur votre cheptel ? (C’est obligatoire)',
                                    'reponse' => 'Pas de déclaration des troubles nerveux au vétérinaire',
                                    'categorie_id' => 5,
                                ),
                                744 => 
                                array (
                                    'id' => 748,
                                    'alerte_id' => 4008,
                                    'question' => 'Les maladies de type Tremblante, Listériose, Tétanos, Botulisme, sont-elles surveillées ? ',
                                    'reponse' => 'Pas de surveillance des maladies type tremblante, listériose, tétanos, botulisme',
                                    'categorie_id' => 5,
                                ),
                                745 => 
                                array (
                                    'id' => 749,
                                    'alerte_id' => 4008,
                                'question' => 'Le troupeau est-il régulièrement déparasité contre les parasites internes et externes? (Estrose avancée, Cénurose cérébro-spinale) ',
                                    'reponse' => 'Présence de cœnures ou d’œstres',
                                    'categorie_id' => 8,
                                ),
                                746 => 
                                array (
                                    'id' => 750,
                                    'alerte_id' => 4008,
                                    'question' => 'Le troupeau est-il carencé en minéraux, oligo-éléments et vitamines ? ',
                                    'reponse' => 'Carences en oligo-éléments et vitamines',
                                    'categorie_id' => 1,
                                ),
                                747 => 
                                array (
                                    'id' => 751,
                                    'alerte_id' => 4008,
                                    'question' => 'Le vétérinaire a-t-il diagnostiqué la nécrose du cortex ? ',
                                    'reponse' => 'Diagnostic de nécrose du cortex',
                                    'categorie_id' => 5,
                                ),
                                748 => 
                                array (
                                    'id' => 752,
                                    'alerte_id' => 4008,
                                    'question' => 'Existe-t-il des risques d\'intoxication par le sel, plomb, azote non protéique, intoxication végétales sur l\'exploitation ? ',
                                    'reponse' => 'Intoxications possibles : plomb, azote non protéique, plantes toxiques',
                                    'categorie_id' => 1,
                                ),
                                749 => 
                                array (
                                    'id' => 753,
                                    'alerte_id' => 4009,
                                    'question' => 'La reprise d\'état corporel des agnelles est-il suffisant à la mise en lutte ? ',
                                    'reponse' => 'Reprise d’état corporel des agnelle à la lutte insuffisante',
                                    'categorie_id' => 1,
                                ),
                                750 => 
                                array (
                                    'id' => 754,
                                    'alerte_id' => 4009,
                                    'question' => 'La mise en lutte n\'est-elle pas trop précoce par rapport à l\'âge et au poids des agnelles ?',
                                    'reponse' => 'Mise en lutte trop précoce par rapport à l’âge ou au poids',
                                    'categorie_id' => 4,
                                ),
                                751 => 
                                array (
                                    'id' => 755,
                                    'alerte_id' => 4009,
                                    'question' => 'La saison de mise à la reproduction est-elle adaptée à la race ? À la conduite ? ',
                                    'reponse' => 'Saison de reproduction inadaptée à la race ou à la conduite',
                                    'categorie_id' => 4,
                                ),
                                752 => 
                                array (
                                    'id' => 756,
                                    'alerte_id' => 4009,
                                    'question' => 'Le taux de renouvellement du troupeau est-il suffisant ?',
                                    'reponse' => 'Taux de renouvellement du troupeau insuffisant',
                                    'categorie_id' => 4,
                                ),
                                753 => 
                                array (
                                    'id' => 757,
                                    'alerte_id' => 4009,
                                    'question' => 'Le critère "fertilité des mères" est-il un axe de choix des agnelles de renouvellement ? ',
                                    'reponse' => 'Pas de choix des agnelles en fonction de la fertilité des mères',
                                    'categorie_id' => 6,
                                ),
                                754 => 
                                array (
                                    'id' => 758,
                                    'alerte_id' => 4009,
                                    'question' => 'L’infestation parasitaire des agnelles est-elle surveillée pendant leur croissance?',
                                    'reponse' => 'Pas de surveillance de l’infestation parasitaire des agnelles',
                                    'categorie_id' => 8,
                                ),
                                755 => 
                                array (
                                    'id' => 759,
                                    'alerte_id' => 4009,
                                    'question' => 'Les antenaises sont-elles atteintes de maladies abortives ? ',
                                    'reponse' => 'Maladies abortives chez les antenaises',
                                    'categorie_id' => 5,
                                ),
                                756 => 
                                array (
                                    'id' => 760,
                                    'alerte_id' => 4009,
                                    'question' => 'La fertilité du bélier a-t-elle été vérifiée? ',
                                    'reponse' => 'Pas de vérification de la fertilité du bélier',
                                    'categorie_id' => 4,
                                ),
                                757 => 
                                array (
                                    'id' => 761,
                                    'alerte_id' => 4009,
                                    'question' => 'Le nombre de bélier est-il est adéquation avec le nombre de Brebis ? ',
                                    'reponse' => 'Béliers en nombre insuffisant',
                                    'categorie_id' => 4,
                                ),
                                758 => 
                                array (
                                    'id' => 762,
                                    'alerte_id' => 4009,
                                    'question' => 'Les béliers sont-ils suffisamment en état à la mise en lutte ? ',
                                    'reponse' => 'État des béliers insuffisant à la mise à la lutte',
                                    'categorie_id' => 1,
                                ),
                                759 => 
                                array (
                                    'id' => 763,
                                    'alerte_id' => 4009,
                                    'question' => 'L\'alimentation des agnelles leur permet-elle de bonne croissance ?',
                                    'reponse' => 'Alimentation des agnelles ne permettant pas une croissance suffisante',
                                    'categorie_id' => 1,
                                ),
                                760 => 
                                array (
                                    'id' => 764,
                                    'alerte_id' => 4009,
                                    'question' => 'La ration est-elle suffisamment pourvue en minéraux et vitamines ? ',
                                    'reponse' => 'Manque de vitamines et de minéraux dans la ration',
                                    'categorie_id' => 1,
                                ),
                                761 => 
                                array (
                                    'id' => 765,
                                    'alerte_id' => 4010,
                                    'question' => 'L\'état corporel des brebis est-il suffisant à la mise en lutte ? ',
                                    'reponse' => 'État corporel des brebis insuffisant à la mise à la lutte',
                                    'categorie_id' => 1,
                                ),
                                762 => 
                                array (
                                    'id' => 766,
                                    'alerte_id' => 4010,
                                    'question' => 'La ration est-elle suffisamment riche pour permettre la reprise d\'état ? ',
                                    'reponse' => 'Ration trop pauvre pour permettre une reprise d’état',
                                    'categorie_id' => 1,
                                ),
                                763 => 
                                array (
                                    'id' => 767,
                                    'alerte_id' => 4010,
                                    'question' => 'La ration est-elle suffisamment pourvue en minéraux et vitamines ? ',
                                    'reponse' => 'Manque de vitamines et de minéraux dans la ration',
                                    'categorie_id' => 1,
                                ),
                                764 => 
                                array (
                                    'id' => 768,
                                    'alerte_id' => 4010,
                                    'question' => 'Les brebis ne sont-elles pas trop âgées ?',
                                    'reponse' => 'Brebis trop âgées',
                                    'categorie_id' => 4,
                                ),
                                765 => 
                                array (
                                    'id' => 769,
                                    'alerte_id' => 4010,
                                    'question' => 'La saison de mise à la reproduction est-elle adaptée à la race ? À la conduite ? ',
                                    'reponse' => 'Saison de reproduction inadaptée à la race ou à la conduite',
                                    'categorie_id' => 4,
                                ),
                                766 => 
                                array (
                                    'id' => 770,
                                    'alerte_id' => 4010,
                                    'question' => 'La fertilité du bélier a-t-elle été vérifiée? ',
                                    'reponse' => 'Pas de vérification de la fertilité du bélier',
                                    'categorie_id' => 4,
                                ),
                                767 => 
                                array (
                                    'id' => 771,
                                    'alerte_id' => 4010,
                                    'question' => 'Le nombre de béliers est-il est adéquation avec le nombre de brebis ? ',
                                    'reponse' => 'Béliers en nombre insuffisant',
                                    'categorie_id' => 4,
                                ),
                                768 => 
                                array (
                                    'id' => 772,
                                    'alerte_id' => 4010,
                                    'question' => 'Les béliers sont-ils suffisamment en état à la mise en lutte ? ',
                                    'reponse' => 'État des béliers insuffisant à la mise à la lutte',
                                    'categorie_id' => 1,
                                ),
                                769 => 
                                array (
                                    'id' => 773,
                                    'alerte_id' => 4010,
                                    'question' => 'L’infestation parasitaire est-elle pénalisante pour les brebis ?',
                                    'reponse' => 'Parasitisme impactant les animaux',
                                    'categorie_id' => 8,
                                ),
                                770 => 
                                array (
                                    'id' => 774,
                                    'alerte_id' => 4011,
                                    'question' => 'L\'état corporel des brebis est-il suffisant à la mise en lutte ? ',
                                    'reponse' => 'État corporel des brebis insuffisant à la mise à la lutte',
                                    'categorie_id' => 1,
                                ),
                                771 => 
                                array (
                                    'id' => 775,
                                    'alerte_id' => 4011,
                                    'question' => 'La ration est-elle suffisamment riche pour permettre la reprise d\'état ? ',
                                    'reponse' => 'Ration trop pauvre pour permettre une reprise d’état',
                                    'categorie_id' => 1,
                                ),
                                772 => 
                                array (
                                    'id' => 776,
                                    'alerte_id' => 4011,
                                    'question' => 'La ration est-elle suffisamment pourvue en minéraux et vitamines ? ',
                                    'reponse' => 'Manque de vitamines et de minéraux dans la ration',
                                    'categorie_id' => 1,
                                ),
                                773 => 
                                array (
                                    'id' => 777,
                                    'alerte_id' => 4011,
                                    'question' => 'Les brebis ne sont-elles pas trop âgées ?',
                                    'reponse' => 'Brebis trop âgées',
                                    'categorie_id' => 4,
                                ),
                                774 => 
                                array (
                                    'id' => 778,
                                    'alerte_id' => 4011,
                                    'question' => 'La saison de mise à la reproduction est-elle adaptée à la race ? À la conduite ? ',
                                    'reponse' => 'Saison de reproduction inadaptée à la race ou à la conduite',
                                    'categorie_id' => 4,
                                ),
                                775 => 
                                array (
                                    'id' => 779,
                                    'alerte_id' => 4011,
                                    'question' => 'La fertilité du bélier a-t-elle été vérifiée? ',
                                    'reponse' => 'Pas de vérification de la fertilité du bélier',
                                    'categorie_id' => 4,
                                ),
                                776 => 
                                array (
                                    'id' => 780,
                                    'alerte_id' => 4011,
                                    'question' => 'Le nombre de béliers est-il est adéquation avec le nombre de brebis ? ',
                                    'reponse' => 'Béliers en nombre insuffisant',
                                    'categorie_id' => 4,
                                ),
                                777 => 
                                array (
                                    'id' => 781,
                                    'alerte_id' => 4011,
                                    'question' => 'Les béliers sont-ils suffisamment en état à la mise en lutte ? ',
                                    'reponse' => 'État des béliers insuffisant à la mise à la lutte',
                                    'categorie_id' => 1,
                                ),
                                778 => 
                                array (
                                    'id' => 782,
                                    'alerte_id' => 4011,
                                    'question' => 'L’infestation parasitaire est-elle pénalisante pour les brebis ?',
                                    'reponse' => 'Parasitisme impactant les animaux',
                                    'categorie_id' => 8,
                                ),
                                779 => 
                                array (
                                    'id' => 783,
                                    'alerte_id' => 4011,
                                    'question' => 'Avez-vous vérifié avec votre vétérinaire que les brebis n’avaient pas de maladies abortives ?',
                                    'reponse' => 'Pas de vérification de la présence de maladies abortives',
                                    'categorie_id' => 5,
                                ),
                                780 => 
                                array (
                                    'id' => 784,
                                    'alerte_id' => 4012,
                                    'question' => 'Avez-vous vérifié avec votre vétérinaire que les brebis n’avaient pas de maladies abortives ?',
                                    'reponse' => 'Pas de vérification de la présence de maladies abortives',
                                    'categorie_id' => 5,
                                ),
                                781 => 
                                array (
                                    'id' => 785,
                                    'alerte_id' => 4012,
                                'question' => 'Le troupeau a-t-il subit un stress important ? (accident, météo, intrus, )',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                782 => 
                                array (
                                    'id' => 786,
                                    'alerte_id' => 4012,
                                    'question' => 'Les femelles gestantes sont-elles suivies sur les aspects parasitismes ? ',
                                    'reponse' => 'Pas de suivi du parasitisme sur les gestantes',
                                    'categorie_id' => 8,
                                ),
                                783 => 
                                array (
                                    'id' => 787,
                                    'alerte_id' => 4012,
                                'question' => 'Les fourrages distribués sont-ils en bon état sanitaire ? (présence de moisissures, champignons)',
                                    'reponse' => 'Fourrage parfois moisi',
                                    'categorie_id' => 1,
                                ),
                                784 => 
                                array (
                                    'id' => 788,
                                    'alerte_id' => 4012,
                                    'question' => 'Y-a-t-il eu une transition alimentaire brutale ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                785 => 
                                array (
                                    'id' => 789,
                                    'alerte_id' => 4012,
                                    'question' => 'Y-a-t-il eu une surconsommation accidentelles d\'aliments concentrés ou potentiellement toxiques ? ',
                                    'reponse' => 'Surconsommation de concentrés ou d’aliments toxiques',
                                    'categorie_id' => 1,
                                ),
                                786 => 
                                array (
                                    'id' => 790,
                                    'alerte_id' => 4014,
                                    'question' => 'Avez-vous vérifié avec votre vétérinaire que les brebis n’avaient pas de maladies abortives ?',
                                    'reponse' => 'Pas de vérification de la présence de maladies abortives',
                                    'categorie_id' => 5,
                                ),
                                787 => 
                                array (
                                    'id' => 791,
                                    'alerte_id' => 4014,
                                'question' => 'Le troupeau a-t-il subit un stress important ? (accident, météo, intrus, )',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                788 => 
                                array (
                                    'id' => 792,
                                    'alerte_id' => 4014,
                                    'question' => 'Les femelles gestantes sont-elles suivies sur les aspects parasitismes ? ',
                                    'reponse' => 'Pas de suivi du parasitisme sur les gestantes',
                                    'categorie_id' => 8,
                                ),
                                789 => 
                                array (
                                    'id' => 793,
                                    'alerte_id' => 4014,
                                'question' => 'Les fourrages distribués sont-ils en bon état sanitaire ? (présence de moisissures, champignons)',
                                    'reponse' => 'Fourrage parfois moisi',
                                    'categorie_id' => 1,
                                ),
                                790 => 
                                array (
                                    'id' => 794,
                                    'alerte_id' => 4014,
                                    'question' => 'Y-a-t-il eu une transition alimentaire brutale ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                791 => 
                                array (
                                    'id' => 795,
                                    'alerte_id' => 4014,
                                    'question' => 'Y-a-t-il eu une surconsommation accidentelles d\'aliments concentrés ou potentiellement toxiques ? ',
                                    'reponse' => 'Surconsommation de concentrés ou d’aliments toxiques',
                                    'categorie_id' => 1,
                                ),
                                792 => 
                                array (
                                    'id' => 796,
                                    'alerte_id' => 4015,
                                    'question' => 'Les brebis sont-elles trop maigres à l\'agnelage ? ',
                                    'reponse' => 'Brebis trop maigres à l’agnelage',
                                    'categorie_id' => 1,
                                ),
                                793 => 
                                array (
                                    'id' => 797,
                                    'alerte_id' => 4015,
                                    'question' => 'Les brebis sont-elles trop grasses à l\'agnelage ?',
                                    'reponse' => 'Brebis trop grasses à l’agnelage',
                                    'categorie_id' => 1,
                                ),
                                794 => 
                                array (
                                    'id' => 798,
                                    'alerte_id' => 4015,
                                    'question' => 'La ration est-elle équilibrée par rapport aux besoins ? ',
                                    'reponse' => 'Ration déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                795 => 
                                array (
                                    'id' => 799,
                                    'alerte_id' => 4015,
                                    'question' => 'La ration distribuée correspond-elle à la ration calculée ? ',
                                    'reponse' => 'La ration distribuée diffère de la ration calculée',
                                    'categorie_id' => 1,
                                ),
                                796 => 
                                array (
                                    'id' => 800,
                                    'alerte_id' => 4015,
                                    'question' => 'La ration est-elle équilibrée par rapport aux besoins ? ',
                                    'reponse' => 'La ration n’est pas adaptée aux besoins',
                                    'categorie_id' => 1,
                                ),
                                797 => 
                                array (
                                    'id' => 801,
                                    'alerte_id' => 4015,
                                    'question' => 'La ration est-elle adaptée à la prolificité du troupeau ? ',
                                    'reponse' => 'la ration n’est pas adaptée à la prolificité du troupeau',
                                    'categorie_id' => 1,
                                ),
                                798 => 
                                array (
                                    'id' => 802,
                                    'alerte_id' => 4015,
                                    'question' => 'Les femelles gestantes sont-elles suivies sur les aspects parasitismes ? ',
                                    'reponse' => 'Pas de suivi du parasitisme sur les gestantes',
                                    'categorie_id' => 8,
                                ),
                                799 => 
                                array (
                                    'id' => 803,
                                    'alerte_id' => 4015,
                                    'question' => 'Les brebis peu productives, fatiguées sur le cycle précédent ont-elles été réformées ?',
                                    'reponse' => 'Pas de réforme des brebis peu productives ou fatiguées',
                                    'categorie_id' => 4,
                                ),
                                800 => 
                                array (
                                    'id' => 804,
                                    'alerte_id' => 4015,
                                'question' => 'Le troupeau a-t-il subit un stress intense ? (accident, météo, intrus, )',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                801 => 
                                array (
                                    'id' => 805,
                                    'alerte_id' => 4016,
                                    'question' => 'La ration est-elle trop encombrante ? ',
                                    'reponse' => 'Ration trop encombrante',
                                    'categorie_id' => 1,
                                ),
                                802 => 
                                array (
                                    'id' => 806,
                                    'alerte_id' => 4016,
                                'question' => 'La ration offre-t-elle un bon équilibre minéral (Mg/Zn/P) en fin de gestation ? ',
                                    'reponse' => 'Déséquilibre minéral de la ration en fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                803 => 
                                array (
                                    'id' => 807,
                                    'alerte_id' => 4016,
                                    'question' => 'Les râteliers sont-ils trop haut pour les gestantes ? ',
                                    'reponse' => 'Râteliers trop hauts pour les gestantes',
                                    'categorie_id' => 2,
                                ),
                                804 => 
                                array (
                                    'id' => 808,
                                    'alerte_id' => 4016,
                                    'question' => 'La marche d\'accès à l\'auge est-elle trop haute ? ',
                                    'reponse' => 'Marche d’accès à l’auge trop haute',
                                    'categorie_id' => 2,
                                ),
                                805 => 
                                array (
                                    'id' => 809,
                                    'alerte_id' => 4016,
                                    'question' => 'Les brebis récidivantes de la campagne passée ont-elles été réformées ?',
                                    'reponse' => 'Les brebis récidivantes de la campagne passée n’ont pas été réformées',
                                    'categorie_id' => 4,
                                ),
                                806 => 
                                array (
                                    'id' => 810,
                                    'alerte_id' => 4016,
                                    'question' => 'Le taux de prolificité est-il trop élevé ? ',
                                    'reponse' => 'Taux de prolificité trop élevé',
                                    'categorie_id' => 6,
                                ),
                                807 => 
                                array (
                                    'id' => 811,
                                    'alerte_id' => 4017,
                                    'question' => 'Observez-vous un manque de largeur du bassin sur les brebis ?',
                                    'reponse' => 'Manque de largeur du bassin',
                                    'categorie_id' => 6,
                                ),
                                808 => 
                                array (
                                    'id' => 812,
                                    'alerte_id' => 4017,
                                    'question' => 'La politique de sélection des agnelles de renouvellement prend-t-elle en compte la largeur de bassin ? ',
                                    'reponse' => 'Pas de prise en compte de la largeur du bassin dans le choix des agnelles',
                                    'categorie_id' => 6,
                                ),
                                809 => 
                                array (
                                    'id' => 813,
                                    'alerte_id' => 4017,
                                    'question' => 'Est-ce que la facilité de naissance fait partie des critères de choix des béliers ? ',
                                    'reponse' => 'Béliers non choisis en fonction du critère « facilité à la naissance »',
                                    'categorie_id' => 6,
                                ),
                                810 => 
                                array (
                                    'id' => 814,
                                    'alerte_id' => 4017,
                                    'question' => 'Le choix des réformes est-il basé sur la difficulté de mise-bas ? ',
                                    'reponse' => 'Pas de choix des réformes en fonction des difficultés de mise-bas',
                                    'categorie_id' => 6,
                                ),
                                811 => 
                                array (
                                    'id' => 815,
                                    'alerte_id' => 4017,
                                    'question' => 'La ration de fin de gestation est-elle adaptée au stade ? ',
                                    'reponse' => 'La ration de fin de gestation n’est pas adaptée',
                                    'categorie_id' => 1,
                                ),
                                812 => 
                                array (
                                    'id' => 816,
                                    'alerte_id' => 4017,
                                'question' => 'La ration offre-t-elle un bon équilibre minéral (Mg/Zn/P) en fin de gestation ? ',
                                    'reponse' => 'Déséquilibre minéral de la ration en fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                813 => 
                                array (
                                    'id' => 817,
                                    'alerte_id' => 4017,
                                    'question' => 'Les brebis sont-elles suffisamment en état ? Trop en état ?',
                                    'reponse' => 'Brebis trop maigres ou trop grasses à l’agnelage',
                                    'categorie_id' => 1,
                                ),
                                814 => 
                                array (
                                    'id' => 818,
                                    'alerte_id' => 4018,
                                    'question' => 'Le troupeau présente-t-il un défaut d\'état général ? et reprise d’état à la lutte ?',
                                    'reponse' => 'Manque d’état du troupeau, par de reprise avant la lutte',
                                    'categorie_id' => 1,
                                ),
                                815 => 
                                array (
                                    'id' => 819,
                                    'alerte_id' => 4018,
                                    'question' => 'Le troupeau présente-t-il des carences en minéraux ou vitamines ? ',
                                    'reponse' => 'Carences en oligo-éléments et vitamines',
                                    'categorie_id' => 1,
                                ),
                                816 => 
                                array (
                                    'id' => 820,
                                    'alerte_id' => 4018,
                                    'question' => 'Les femelles sont-elles suivies sur les aspects parasitismes ? ',
                                    'reponse' => 'Pas de suivi du parasitisme sur les animaux',
                                    'categorie_id' => 8,
                                ),
                                817 => 
                                array (
                                    'id' => 821,
                                    'alerte_id' => 4018,
                                    'question' => 'La politique de réforme/renouvellement est-elle adaptée aux objectifs de prolificité ? ',
                                    'reponse' => 'Politique de réforme non adaptée aux objectifs de prolificité',
                                    'categorie_id' => 6,
                                ),
                                818 => 
                                array (
                                    'id' => 822,
                                    'alerte_id' => 4018,
                                    'question' => 'Le troupeau a-t-il des antécédents sanitaires importants ? ',
                                    'reponse' => 'Antécédents sanitaires importants',
                                    'categorie_id' => 5,
                                ),
                                819 => 
                                array (
                                    'id' => 823,
                                    'alerte_id' => 4019,
                                    'question' => 'La saison de mise à la reproduction est-elle adaptée à la race ? À la conduite ? ',
                                    'reponse' => 'Race non adaptée à la saison de monte',
                                    'categorie_id' => 4,
                                ),
                                820 => 
                                array (
                                    'id' => 824,
                                    'alerte_id' => 4019,
                                    'question' => 'Le nombre de béliers est-il en adéquation avec le nombre de brebis ? ',
                                    'reponse' => 'Béliers en nombre insuffisant',
                                    'categorie_id' => 4,
                                ),
                                821 => 
                                array (
                                    'id' => 825,
                                    'alerte_id' => 4019,
                                    'question' => 'La non stérilité du bélier a-t-elle été vérifiée? ',
                                    'reponse' => 'Pas de vérification de la fertilité du bélier',
                                    'categorie_id' => 4,
                                ),
                                822 => 
                                array (
                                    'id' => 826,
                                    'alerte_id' => 4019,
                                    'question' => 'Les béliers sont-ils suffisamment en état à la mise en lutte ? ',
                                    'reponse' => 'État de béliers insuffisant à la mise en lutte',
                                    'categorie_id' => 1,
                                ),
                                823 => 
                                array (
                                    'id' => 827,
                                    'alerte_id' => 4020,
                                    'question' => 'Les agnelles de renouvellement sont-elles sélectionnées sur la qualité morphologique de leur mamelle ? ',
                                    'reponse' => 'Pas de sélection des agnelles sur la conformation de la mamelle',
                                    'categorie_id' => 6,
                                ),
                                824 => 
                                array (
                                    'id' => 828,
                                    'alerte_id' => 4020,
                                'question' => 'Un contrôle des mamelles au tarissement et réforme est-il effectué ? (si pis de bois ou autre problème important) ?',
                                    'reponse' => 'Pas de contrôle des mamelles au moment du tarissement',
                                    'categorie_id' => 4,
                                ),
                                825 => 
                                array (
                                    'id' => 829,
                                    'alerte_id' => 4020,
                                    'question' => 'Les mamelles présentent-elles des boutons ou croûtes d’ecthyma ?',
                                    'reponse' => 'Présence de boutons ou de croûtes sur les mamelles',
                                    'categorie_id' => 5,
                                ),
                                826 => 
                                array (
                                    'id' => 830,
                                    'alerte_id' => 4020,
                                'question' => 'Les agneaux sont-ils suffisamment vigoureux à la naissance ? (cf jeunes)',
                                    'reponse' => 'Agneaux peu vigoureux à la naissance',
                                    'categorie_id' => 5,
                                ),
                                827 => 
                                array (
                                    'id' => 831,
                                    'alerte_id' => 4021,
                                    'question' => 'Les brebis à problème d\'allaitement sont-elles réformées ? ',
                                    'reponse' => 'Pas de réforme des brebis avec problème d’allaitement',
                                    'categorie_id' => 4,
                                ),
                                828 => 
                                array (
                                    'id' => 832,
                                    'alerte_id' => 4021,
                                    'question' => 'La pression d\'infection est-elle élevée ? ',
                                    'reponse' => 'pression d’infection élevée',
                                    'categorie_id' => 3,
                                ),
                                829 => 
                                array (
                                    'id' => 833,
                                    'alerte_id' => 4021,
                                    'question' => 'Le paillage est-il suffisant en bergerie pour faire face à l’excès d’humidité ? ',
                                    'reponse' => 'Paillage de la litière insuffisant',
                                    'categorie_id' => 2,
                                ),
                                830 => 
                                array (
                                    'id' => 834,
                                    'alerte_id' => 4021,
                                    'question' => 'L\'alimentation présente-t-elle des carences minérales et vitaminiques ?',
                                    'reponse' => 'Carences en oligo-éléments et vitamines',
                                    'categorie_id' => 1,
                                ),
                                831 => 
                                array (
                                    'id' => 835,
                                    'alerte_id' => 4022,
                                    'question' => 'La ration des brebis en fin de gestation est-elle équilibrée et suffisante par rapport aux besoins ? ',
                                    'reponse' => 'Ration déséquilibrée et/ou insuffisante par rapport aux besoins',
                                    'categorie_id' => 1,
                                ),
                                832 => 
                                array (
                                    'id' => 836,
                                    'alerte_id' => 4022,
                                    'question' => 'La ration est-elle suffisamment pourvue en minéraux et vitamines ? ',
                                    'reponse' => 'Manque de minéraux et de vitamines',
                                    'categorie_id' => 1,
                                ),
                                833 => 
                                array (
                                    'id' => 837,
                                    'alerte_id' => 4022,
                                    'question' => 'Les brebis ont-elles suffisamment d\'état à la mise-bas ? ',
                                    'reponse' => 'Manque d’état des brebis à la mise-bas',
                                    'categorie_id' => 1,
                                ),
                                834 => 
                                array (
                                    'id' => 838,
                                    'alerte_id' => 4024,
                                    'question' => 'L\'état corporel des brebis à la mise-bas est-il suffisant ? ',
                                    'reponse' => 'Etat corporel des brebis à la mise-bas insuffisant',
                                    'categorie_id' => 1,
                                ),
                                835 => 
                                array (
                                    'id' => 839,
                                    'alerte_id' => 4024,
                                    'question' => 'La ration des brebis en fin de gestation est-elle adaptée ? ',
                                    'reponse' => 'Ration non adaptée à la fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                836 => 
                                array (
                                    'id' => 840,
                                    'alerte_id' => 4024,
                                'question' => 'Mes agneaux boivent-ils bien un bon colostrum, et en quantité suffisante (attention à chacun dans une portée multiple !) ?',
                                    'reponse' => 'Buvée de colostrum insuffisante',
                                    'categorie_id' => 4,
                                ),
                                837 => 
                                array (
                                    'id' => 841,
                                    'alerte_id' => 4024,
                                'question' => 'Mes brebis adoptent-elles bien leur(s) agneau(x) ?',
                                    'reponse' => 'Adoption difficile des brebis par les agneaux',
                                    'categorie_id' => 7,
                                ),
                                838 => 
                                array (
                                    'id' => 842,
                                    'alerte_id' => 4024,
                                    'question' => 'Le temps consacré aux soins et à la surveillance des nouveaux nés est-il suffisant ? ',
                                    'reponse' => 'Surveillance des nouveaux-nés insuffisante',
                                    'categorie_id' => 4,
                                ),
                                839 => 
                                array (
                                    'id' => 843,
                                    'alerte_id' => 4024,
                                    'question' => 'Les cases d\'agnelage sont-elles dans un bon état de propreté et d\'hygiène ? avancement des cases dans la bergerie ?',
                                    'reponse' => 'Manque de propreté des cases d’agnelage',
                                    'categorie_id' => 3,
                                ),
                                840 => 
                                array (
                                    'id' => 844,
                                    'alerte_id' => 4024,
                                    'question' => 'Les nombrils sont-ils désinfectés ? ',
                                    'reponse' => 'Pas de désinfection des nombrils',
                                    'categorie_id' => 3,
                                ),
                                841 => 
                                array (
                                    'id' => 845,
                                    'alerte_id' => 4024,
                                'question' => 'L’ambiance du bâtiment (température, humidité, condensation, murs froids) est-elle confortable pour des agneaux ?',
                                    'reponse' => 'Ambiance du bâtiment inconfortable pour les agneaux',
                                    'categorie_id' => 2,
                                ),
                                842 => 
                                array (
                                    'id' => 846,
                                    'alerte_id' => 4024,
                                    'question' => 'Le choix des reproducteurs est-il adapté ? ',
                                    'reponse' => 'Choix des reproducteurs inadapté',
                                    'categorie_id' => 6,
                                ),
                                843 => 
                                array (
                                    'id' => 847,
                                    'alerte_id' => 4023,
                                    'question' => 'L\'âge moyen des brebis n\'est-il pas trop élevé ? ',
                                    'reponse' => 'Age moyen des brebis trop élevé',
                                    'categorie_id' => 4,
                                ),
                                844 => 
                                array (
                                    'id' => 848,
                                    'alerte_id' => 4025,
                                    'question' => 'L\'hygiène et la désinfection est-elle respectée lors des différentes interventions : bouclage, équeutage ? ',
                                    'reponse' => 'Manque d’hygiène dans la pose des boucle, l’équeutage, …',
                                    'categorie_id' => 3,
                                ),
                                845 => 
                                array (
                                    'id' => 849,
                                    'alerte_id' => 4025,
                                    'question' => 'La ration des brebis est-elle bien équilibrée pour produire un lait équilibré et digeste ?',
                                    'reponse' => 'Ration non adaptée à la production d’un lait équilibré et digeste',
                                    'categorie_id' => 1,
                                ),
                                846 => 
                                array (
                                    'id' => 850,
                                    'alerte_id' => 4026,
                                    'question' => 'Les transitions alimentaires sont-elles suffisamment longues ? ',
                                    'reponse' => 'Transitions alimentaires trop courte',
                                    'categorie_id' => 1,
                                ),
                                847 => 
                                array (
                                    'id' => 851,
                                    'alerte_id' => 4026,
                                'question' => 'L\'aliment distribué est-il adapté aux besoins des animaux ? (excès d\'azote soluble, amidon fermentescible, manque de cellulose)',
                                'reponse' => 'Aliments distribués non adaptés aux besoins des animaux (excès d’azote soluble, d’amidon fermentescible, …)',
                                    'categorie_id' => 1,
                                ),
                                848 => 
                                array (
                                    'id' => 852,
                                    'alerte_id' => 4026,
                                    'question' => 'La ration des mères est-elle suffisante et équilibrée pour obtenir une bonne production laitière ? ',
                                    'reponse' => 'Ration des mères pas suffisante ou équilibrée ne permettant pas une bonne production laitière',
                                    'categorie_id' => 1,
                                ),
                                849 => 
                                array (
                                    'id' => 853,
                                    'alerte_id' => 4026,
                                'question' => 'Existe-t-il une possibilité d\'intoxication alimentaire ? (Cuivre, plantes, médicaments, métaux lourds …)',
                                    'reponse' => 'Possibilités d’intoxication alimentaire',
                                    'categorie_id' => 1,
                                ),
                                850 => 
                                array (
                                    'id' => 854,
                                    'alerte_id' => 4026,
                                    'question' => 'Les agneaux sont-ils victimes d\'une attaque parasitaire ? ',
                                    'reponse' => '',
                                    'categorie_id' => 8,
                                ),
                                851 => 
                                array (
                                    'id' => 855,
                                    'alerte_id' => 4026,
                                'question' => 'Les agneaux sont-ils victimes de séquelles de maladies antérieures ? (infection respiratoires, …)',
                                    'reponse' => 'Séquelles de maladies antérieures',
                                    'categorie_id' => 5,
                                ),
                                852 => 
                                array (
                                    'id' => 856,
                                    'alerte_id' => 4027,
                                    'question' => 'Les transitions alimentaires sont-elles respectées ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                853 => 
                                array (
                                    'id' => 857,
                                    'alerte_id' => 4027,
                                    'question' => 'Les agnelles ont-elles subies un épisode d\'entérotoxémie ? ',
                                    'reponse' => 'Épisode d’entérotoxémie sur les agnelles',
                                    'categorie_id' => 5,
                                ),
                                854 => 
                                array (
                                    'id' => 858,
                                    'alerte_id' => 4027,
                                    'question' => 'Les agnelles ont-elles un état corporel suffisant sur toute cette période délicate ? ',
                                    'reponse' => 'L’état corporel des agnelles est insuffisant',
                                    'categorie_id' => 1,
                                ),
                                855 => 
                                array (
                                    'id' => 859,
                                    'alerte_id' => 4027,
                                    'question' => 'Avez-vous déjà été touché par des morts subites ?',
                                    'reponse' => 'Existence préalable de morts subites',
                                    'categorie_id' => 5,
                                ),
                                856 => 
                                array (
                                    'id' => 860,
                                    'alerte_id' => 4027,
                                    'question' => 'Les agnelles ont-elles suivies en parasitismes ?',
                                    'reponse' => 'Pas de suivi du parasitisme des agnelles',
                                    'categorie_id' => 8,
                                ),
                                857 => 
                                array (
                                    'id' => 861,
                                    'alerte_id' => 4028,
                                    'question' => 'Le temps consacré aux soins et à la surveillance des nouveaux nés est-il suffisant ? ',
                                    'reponse' => 'Temps consacré aux nouveaux-nés insuffisant',
                                    'categorie_id' => 4,
                                ),
                                858 => 
                                array (
                                    'id' => 862,
                                    'alerte_id' => 4028,
                                'question' => 'Les agneaux sont-ils suffisamment vigoureux à la naissance ? (choix des béliers et alimentation des brebis)',
                                    'reponse' => 'Manque de vigueur de agneaux à la naissance',
                                    'categorie_id' => 7,
                                ),
                                859 => 
                                array (
                                    'id' => 863,
                                    'alerte_id' => 4028,
                                    'question' => 'Les adoptions sont-elles faciles ? ',
                                    'reponse' => 'Adoptions difficiles',
                                    'categorie_id' => 7,
                                ),
                                860 => 
                                array (
                                    'id' => 864,
                                    'alerte_id' => 4028,
                                    'question' => 'La race du troupeau est-il en adéquation avec le mode de production choisi ? ',
                                    'reponse' => 'Race non adaptée au mode de production choisi',
                                    'categorie_id' => 6,
                                ),
                                861 => 
                                array (
                                    'id' => 865,
                                    'alerte_id' => 4028,
                                    'question' => 'La race du troupeau est-il en adéquation avec le temps disponible ? ',
                                    'reponse' => 'Race non adaptée au temps disponible',
                                    'categorie_id' => 6,
                                ),
                                862 => 
                                array (
                                    'id' => 866,
                                    'alerte_id' => 4028,
                                'question' => 'Les mères sont-elles suffisamment maternelles ? (choix de la race)',
                                'reponse' => 'Mère peu maternelles (choix de la race)',
                                    'categorie_id' => 6,
                                ),
                                863 => 
                                array (
                                    'id' => 867,
                                    'alerte_id' => 4028,
                                'question' => 'Les mamelles des brebis sont-elles facilement accessible pour les agneaux ? (œdème et congestion des mamelles, gros trayons)',
                                'reponse' => 'Mamelles difficilement accessible pour les agneaux (oedème, congestion, gros trayons)',
                                    'categorie_id' => 1,
                                ),
                                864 => 
                                array (
                                    'id' => 868,
                                    'alerte_id' => 4028,
                                    'question' => 'Le lieu de mise bas est-il suffisamment confortable pour les nouveaux nés ? Température, humidité, propreté',
                                    'reponse' => 'Les lieux de mise-bas manquent de confort pour les nouveaux-nés ',
                                    'categorie_id' => 2,
                                ),
                                865 => 
                                array (
                                    'id' => 869,
                                    'alerte_id' => 4028,
                                    'question' => 'Possédez-vous suffisamment de cases d\'agnelage permettant l\'isolement du couple brebis/agneau ? ',
                                    'reponse' => 'Nombre de cases d’agnelage insuffisant',
                                    'categorie_id' => 2,
                                ),
                                866 => 
                                array (
                                    'id' => 870,
                                    'alerte_id' => 4029,
                                    'question' => 'Le temps consacré aux soins et à la surveillance des nouveaux nés est-il suffisant ? ',
                                    'reponse' => 'Temps consacré aux nouveaux-nés insuffisant',
                                    'categorie_id' => 4,
                                ),
                                867 => 
                                array (
                                    'id' => 871,
                                    'alerte_id' => 4029,
                                    'question' => 'La race du troupeau est-il en adéquation avec le mode de production choisi ? ',
                                    'reponse' => 'Race non adaptée au mode de production choisi',
                                    'categorie_id' => 6,
                                ),
                                868 => 
                                array (
                                    'id' => 872,
                                    'alerte_id' => 4029,
                                    'question' => 'La race du troupeau est-il en adéquation avec le temps disponible ? ',
                                    'reponse' => 'Race non adaptée au temps disponible',
                                    'categorie_id' => 6,
                                ),
                                869 => 
                                array (
                                    'id' => 873,
                                    'alerte_id' => 4029,
                                'question' => 'Les mères sont-elles suffisamment maternelles ? (choix de la race)',
                                'reponse' => 'Mère peu maternelles (choix de la race)',
                                    'categorie_id' => 6,
                                ),
                                870 => 
                                array (
                                    'id' => 874,
                                    'alerte_id' => 4029,
                                'question' => 'Les agneaux sont-ils suffisamment vigoureux à la naissance ? (choix des béliers et alimentation des brebis)',
                                    'reponse' => 'Manque de vigueur de agneaux à la naissance',
                                    'categorie_id' => 7,
                                ),
                                871 => 
                                array (
                                    'id' => 875,
                                    'alerte_id' => 4029,
                                    'question' => 'Les agnelages ont-ils été difficiles ?',
                                    'reponse' => 'Agnelages difficiles',
                                    'categorie_id' => 7,
                                ),
                                872 => 
                                array (
                                    'id' => 876,
                                    'alerte_id' => 4029,
                                    'question' => 'Possédez-vous suffisamment de cases d\'agnelage permettant l\'isolement du couple brebis/agneau ? ',
                                    'reponse' => 'Nombre de cases d’agnelage insuffisant',
                                    'categorie_id' => 2,
                                ),
                                873 => 
                                array (
                                    'id' => 877,
                                    'alerte_id' => 4030,
                                'question' => 'La densité (nombre d\'animaux/m²) n\'est-elle pas trop importante ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                874 => 
                                array (
                                    'id' => 878,
                                    'alerte_id' => 4030,
                                    'question' => 'Des précautions d\'hygiène sont-elles prises entre chaque désinfection de cordon ?',
                                    'reponse' => 'Pas de précaution d’hygiène entre deux désinfection de cordon',
                                    'categorie_id' => 3,
                                ),
                                875 => 
                                array (
                                    'id' => 879,
                                    'alerte_id' => 4030,
                                    'question' => 'Les quantités de paille litière sont-elles suffisantes ? ',
                                    'reponse' => 'Paille de la litière en quantité insuffisante',
                                    'categorie_id' => 2,
                                ),
                                876 => 
                                array (
                                    'id' => 880,
                                    'alerte_id' => 4030,
                                    'question' => 'La bergerie est-elle suffisamment isolée et ventilée ? ',
                                    'reponse' => 'Bergerie mal isolée et mal ventilée',
                                    'categorie_id' => 2,
                                ),
                                877 => 
                                array (
                                    'id' => 881,
                                    'alerte_id' => 4030,
                                'question' => 'L\'hygiène du bâtiment et du matériel est-il suffisant ? (lavage, désinfection, dératisation, désinsectisation, vide sanitaire, )',
                                    'reponse' => 'Manque d’hygiène dans le bâtiment',
                                    'categorie_id' => 3,
                                ),
                                878 => 
                                array (
                                    'id' => 882,
                                    'alerte_id' => 4030,
                                    'question' => 'Le matériel de bouclage est-il bien désinfecté après utilisation ? ',
                                    'reponse' => 'Matériel de bouclage mal désinfecté',
                                    'categorie_id' => 3,
                                ),
                                879 => 
                                array (
                                    'id' => 883,
                                    'alerte_id' => 4030,
                                    'question' => 'Les agneaux ont-ils bien tété le colostrum dans les 6 heures ? ',
                                    'reponse' => 'Prise de colostrum dans les 6 premières heures insuffisante',
                                    'categorie_id' => 4,
                                ),
                                880 => 
                                array (
                                    'id' => 884,
                                    'alerte_id' => 4030,
                                    'question' => 'Les agneaux ont-ils bien bu ?',
                                    'reponse' => 'Problèmes pour faire téter les agneaux',
                                    'categorie_id' => 4,
                                ),
                                881 => 
                                array (
                                    'id' => 885,
                                    'alerte_id' => 4030,
                                    'question' => 'Les colostrums sont-ils de bonne qualité ? ',
                                    'reponse' => 'Colostrums de qualité insuffisante',
                                    'categorie_id' => 1,
                                ),
                                882 => 
                                array (
                                    'id' => 886,
                                    'alerte_id' => 4031,
                                    'question' => 'Les cordons sont-ils désinfectés ? ',
                                    'reponse' => 'Cordons non désinfectés',
                                    'categorie_id' => 3,
                                ),
                                883 => 
                                array (
                                    'id' => 887,
                                    'alerte_id' => 4031,
                                    'question' => 'La solution de désinfection est-elle régulièrement renouvelée ? ',
                                    'reponse' => 'Solution de désinfection peu renouvelée',
                                    'categorie_id' => 3,
                                ),
                                884 => 
                                array (
                                    'id' => 888,
                                    'alerte_id' => 4031,
                                'question' => 'Les agneaux du même lot sont-ils homogènes ? (âge et poids)',
                                    'reponse' => 'Manque d’homogénéité dans les lots d’agneaux',
                                    'categorie_id' => 7,
                                ),
                                885 => 
                                array (
                                    'id' => 889,
                                    'alerte_id' => 4031,
                                    'question' => 'Les agneaux ont-il bien tété le colostrum dans les 6 heures ? ',
                                    'reponse' => 'Prise de colostrum dans les 6 premières heures insuffisante',
                                    'categorie_id' => 4,
                                ),
                                886 => 
                                array (
                                    'id' => 890,
                                    'alerte_id' => 4031,
                                    'question' => 'Les colostrums sont-ils de bonne qualité ? ',
                                    'reponse' => 'Colostrums de qualité insuffisante',
                                    'categorie_id' => 1,
                                ),
                                887 => 
                                array (
                                    'id' => 891,
                                    'alerte_id' => 4031,
                                    'question' => 'Le nombre de cases d\'agnelage est-il suffisant pour respecter un temps de présence de 24h ? ',
                                    'reponse' => 'Nombre de cases d’agnelage insuffisant',
                                    'categorie_id' => 4,
                                ),
                                888 => 
                                array (
                                    'id' => 892,
                                    'alerte_id' => 4031,
                                'question' => 'La densité (nombre d\'animaux/m²) n\'est-elle pas trop importante ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                889 => 
                                array (
                                    'id' => 893,
                                    'alerte_id' => 4031,
                                    'question' => 'Les quantités de paille litière sont-elles suffisantes ? ',
                                    'reponse' => 'Paillage de la litière insuffisant',
                                    'categorie_id' => 2,
                                ),
                                890 => 
                                array (
                                    'id' => 894,
                                    'alerte_id' => 4031,
                                    'question' => 'La bergerie est-elle suffisamment isolée et ventilée ? ',
                                    'reponse' => 'Bergerie mal isolée et mal ventilée',
                                    'categorie_id' => 2,
                                ),
                                891 => 
                                array (
                                    'id' => 895,
                                    'alerte_id' => 4032,
                                    'question' => 'Y-a-t-il eu introduction d\'animaux pouvant déclencher l\'ecthyma sur les animaux présents ? ',
                                    'reponse' => 'Introduction d’animaux porteurs d’ecthyma',
                                    'categorie_id' => 4,
                                ),
                                892 => 
                                array (
                                    'id' => 896,
                                    'alerte_id' => 4032,
                                    'question' => 'Connaissez-vous le statut Border Disease de votre troupeau ? ',
                                    'reponse' => 'Statut Border Disease inconnu',
                                    'categorie_id' => 5,
                                ),
                                893 => 
                                array (
                                    'id' => 897,
                                    'alerte_id' => 4032,
                                    'question' => 'Observez-vous une résurgence cyclique de l\'ecthyma sur les jeunes brebis ? ',
                                    'reponse' => 'Résurgence cyclique de l’ecthyma que les jeunes brebis',
                                    'categorie_id' => 5,
                                ),
                                894 => 
                                array (
                                    'id' => 898,
                                    'alerte_id' => 4032,
                                    'question' => 'Les rations alimentaires présentent-elles des carences en minéraux et oligo-éléments ?',
                                    'reponse' => 'Carences en minéraux et oligo-éléments',
                                    'categorie_id' => 1,
                                ),
                                895 => 
                                array (
                                    'id' => 899,
                                    'alerte_id' => 4033,
                                    'question' => 'L\'hygiène du logement est-elle suffisante ? ',
                                    'reponse' => 'Manque d’hygiène du logement',
                                    'categorie_id' => 2,
                                ),
                                896 => 
                                array (
                                    'id' => 900,
                                    'alerte_id' => 4033,
                                    'question' => 'y-a-t-il présence de case d\'infirmerie, isolement des animaux malades ? ',
                                    'reponse' => 'Absence d’infirmerie',
                                    'categorie_id' => 2,
                                ),
                                897 => 
                                array (
                                    'id' => 901,
                                    'alerte_id' => 4033,
                                    'question' => 'le logement est-il confortable ? Désinfecté ? ',
                                    'reponse' => 'Manque de confort dans le logement',
                                    'categorie_id' => 2,
                                ),
                                898 => 
                                array (
                                    'id' => 902,
                                    'alerte_id' => 4033,
                                    'question' => 'La litière est-elle propre et saine ? ',
                                    'reponse' => 'Litière sale',
                                    'categorie_id' => 2,
                                ),
                                899 => 
                                array (
                                    'id' => 903,
                                    'alerte_id' => 4033,
                                    'question' => 'La paille de litière est-elle de bonne qualité, bien conservée ? ',
                                    'reponse' => 'Paille de la litière de mauvaise qualité',
                                    'categorie_id' => 2,
                                ),
                                900 => 
                                array (
                                    'id' => 904,
                                    'alerte_id' => 4033,
                                    'question' => 'La surveillance de la prise colostrale est-elle suffisante ? ',
                                    'reponse' => 'Surveillance de la prise colostrale insuffisante',
                                    'categorie_id' => 4,
                                ),
                                901 => 
                                array (
                                    'id' => 905,
                                    'alerte_id' => 4033,
                                    'question' => 'Les colostrums et le lait sont-ils de bonne qualité ? ',
                                    'reponse' => 'Colostrums de qualité insuffisante',
                                    'categorie_id' => 1,
                                ),
                                902 => 
                                array (
                                    'id' => 906,
                                    'alerte_id' => 4033,
                                    'question' => 'L\'alimentation des mères est-elle équilibrée et suffisante ? ',
                                    'reponse' => 'Alimentation des mères insuffisante ou déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                903 => 
                                array (
                                    'id' => 907,
                                    'alerte_id' => 4033,
                                    'question' => 'L\'eau de boisson est-elle potable ? ',
                                    'reponse' => 'Eau de boisson non potable',
                                    'categorie_id' => 1,
                                ),
                                904 => 
                                array (
                                    'id' => 908,
                                    'alerte_id' => 4033,
                                    'question' => 'Les animaux disposent-ils de sel alimentaire ? ',
                                    'reponse' => 'Pas de sel disponible pour les agneaux',
                                    'categorie_id' => 1,
                                ),
                                905 => 
                                array (
                                    'id' => 910,
                                    'alerte_id' => 4035,
                                    'question' => 'L\'alimentation des agneaux n\'est-elle pas trop acidogène ? ',
                                    'reponse' => 'Alimentation des agneaux acidogène',
                                    'categorie_id' => 1,
                                ),
                                906 => 
                                array (
                                    'id' => 911,
                                    'alerte_id' => 4035,
                                    'question' => 'La transition alimentaire est-elle respectée ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                907 => 
                                array (
                                    'id' => 912,
                                    'alerte_id' => 4037,
                                'question' => 'L\'herbe pâturée n\'est-elle pas trop jeune ? (riche et humide)',
                                    'reponse' => 'Herbe pâturée trop jeune',
                                    'categorie_id' => 1,
                                ),
                                908 => 
                                array (
                                    'id' => 913,
                                    'alerte_id' => 4037,
                                    'question' => 'La transition alimentaire vers le pâturage est-elle respectée ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                909 => 
                                array (
                                    'id' => 914,
                                    'alerte_id' => 4037,
                                    'question' => 'La transition alimentaire est-elle respectée ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                910 => 
                                array (
                                    'id' => 915,
                                    'alerte_id' => 4037,
                                    'question' => 'La ration est-elle riche en céréales et acidogène ? ',
                                    'reponse' => 'Ration trop riche en céréales et acidogène',
                                    'categorie_id' => 1,
                                ),
                                911 => 
                                array (
                                    'id' => 916,
                                    'alerte_id' => 4037,
                                    'question' => 'voir parasitisme ',
                                'reponse' => '(approfondir la question de la coccidiose)',
                                    'categorie_id' => 8,
                                ),
                                912 => 
                                array (
                                    'id' => 917,
                                    'alerte_id' => 4036,
                                    'question' => 'La transition alimentaire est-elle respectée ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                913 => 
                                array (
                                    'id' => 918,
                                    'alerte_id' => 4036,
                                'question' => 'voir parasitisme (surtout coccidiose, +/- strongyloides)',
                                'reponse' => '(approfondir la question du parasitisme)',
                                    'categorie_id' => 8,
                                ),
                                914 => 
                                array (
                                    'id' => 919,
                                    'alerte_id' => 4039,
                                'question' => 'Le bâtiment connaît-il des variations de températures excessives (métal, béton, climat rude, mauvaise orientation, …) ? ',
                                    'reponse' => 'Variation de températures excessives',
                                    'categorie_id' => 2,
                                ),
                                915 => 
                                array (
                                    'id' => 920,
                                    'alerte_id' => 4039,
                                    'question' => 'La densité animale en bergerie n’est-elle pas trop élevée ?',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                916 => 
                                array (
                                    'id' => 921,
                                    'alerte_id' => 4039,
                                    'question' => 'Les matériaux constituant la bergerie sont-ils propices aux variations de températures ? ',
                                    'reponse' => 'Matériaux favorisant des variation de température excessives',
                                    'categorie_id' => 2,
                                ),
                                917 => 
                                array (
                                    'id' => 922,
                                    'alerte_id' => 4039,
                                    'question' => 'La condensation est-elle fréquente dans le bâtiment ? ',
                                    'reponse' => 'Condensation fréquente dans le bâtiment',
                                    'categorie_id' => 2,
                                ),
                                918 => 
                                array (
                                    'id' => 923,
                                    'alerte_id' => 4039,
                                    'question' => 'Y-a-t-il présence de courants d\'air ? ',
                                    'reponse' => 'Présence de courants d’air',
                                    'categorie_id' => 2,
                                ),
                                919 => 
                                array (
                                    'id' => 924,
                                    'alerte_id' => 4039,
                                    'question' => 'Le paillage est-il effectué à la pailleuse ? ',
                                    'reponse' => 'Paillage effectué à la pailleuse',
                                    'categorie_id' => 2,
                                ),
                                920 => 
                                array (
                                    'id' => 925,
                                    'alerte_id' => 4039,
                                    'question' => 'Les accès aux nourrisseurs, aux auges et à l\'eau sont-ils difficiles ?',
                                    'reponse' => 'Accès aux auges et à l’eau difficiles',
                                    'categorie_id' => 2,
                                ),
                                921 => 
                                array (
                                    'id' => 926,
                                    'alerte_id' => 4039,
                                'question' => 'Les agneaux ont-ils accès à des plantes provoquant de l\'œdème pulmonaire ? (laurier cerise/galéga officinal)',
                                'reponse' => 'Accès à des plantes provoquant des œdèmes pulmonaires (galega, laurier cerise)',
                                    'categorie_id' => 5,
                                ),
                                922 => 
                                array (
                                    'id' => 927,
                                    'alerte_id' => 4038,
                                'question' => 'Le bâtiment connaît-il des variations de températures excessives (métal, béton, climat rude, mauvaise orientation, …) ? ',
                                    'reponse' => 'Variation de températures excessives',
                                    'categorie_id' => 2,
                                ),
                                923 => 
                                array (
                                    'id' => 928,
                                    'alerte_id' => 4038,
                                    'question' => 'La densité animale en bergerie n’est-elle pas trop élevée ?',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                924 => 
                                array (
                                    'id' => 929,
                                    'alerte_id' => 4038,
                                    'question' => 'Les matériaux constituant la bergerie sont-ils propices aux variations de températures ? ',
                                    'reponse' => 'Matériaux favorisant des variation de température excessives',
                                    'categorie_id' => 2,
                                ),
                                925 => 
                                array (
                                    'id' => 930,
                                    'alerte_id' => 4038,
                                    'question' => 'La condensation est-elle fréquente dans le bâtiment ? ',
                                    'reponse' => 'Condensation fréquente dans le bâtiment',
                                    'categorie_id' => 2,
                                ),
                                926 => 
                                array (
                                    'id' => 931,
                                    'alerte_id' => 4038,
                                    'question' => 'Y-a-t-il présence de courants d\'air ? ',
                                    'reponse' => 'Présence de courants d’air',
                                    'categorie_id' => 2,
                                ),
                                927 => 
                                array (
                                    'id' => 932,
                                    'alerte_id' => 4038,
                                    'question' => 'Le paillage est-il effectué à la pailleuse ? ',
                                    'reponse' => 'Paillage effectué à la pailleuse',
                                    'categorie_id' => 2,
                                ),
                                928 => 
                                array (
                                    'id' => 933,
                                    'alerte_id' => 4038,
                                    'question' => 'Les accès aux nourrisseurs, aux auges et à l\'eau sont-ils difficiles ?',
                                    'reponse' => 'Accès aux auges et à l’eau difficiles',
                                    'categorie_id' => 2,
                                ),
                                929 => 
                                array (
                                    'id' => 934,
                                    'alerte_id' => 4038,
                                'question' => 'Les agneaux ont-ils accès à des plantes provoquant de l\'œdème pulmonaire ? (laurier cerise/galéga officinal)',
                                'reponse' => 'Accès à des plantes provoquant des œdèmes pulmonaires (galega, laurier cerise)',
                                    'categorie_id' => 5,
                                ),
                                930 => 
                                array (
                                    'id' => 935,
                                    'alerte_id' => 4040,
                                'question' => 'Les agneaux ont-ils eu des troubles du cordon ? (Cf ci-dessus)',
                                    'reponse' => 'Infections du cordon',
                                    'categorie_id' => 5,
                                ),
                                931 => 
                                array (
                                    'id' => 936,
                                    'alerte_id' => 4040,
                                    'question' => 'Les agneaux ont-ils eu des infections suite au bouclage ou à l\'équeutage ? ',
                                    'reponse' => 'Infections suite au bouclage ou à l’équeutage',
                                    'categorie_id' => 5,
                                ),
                                932 => 
                                array (
                                    'id' => 937,
                                    'alerte_id' => 4040,
                                    'question' => 'Les plaies sont-elles systématiquement désinfectées ? ',
                                    'reponse' => 'Plaies non systématiquement désinfectées',
                                    'categorie_id' => 3,
                                ),
                                933 => 
                                array (
                                    'id' => 938,
                                    'alerte_id' => 4041,
                                    'question' => 'Les rations sont-elles suffisamment pourvues en vitamine E et sélénium ? ',
                                    'reponse' => 'Manque de vitamine E et de sélénium',
                                    'categorie_id' => 1,
                                ),
                                934 => 
                                array (
                                    'id' => 939,
                                    'alerte_id' => 4041,
                                    'question' => 'Les rations présentent-elles des risques d\'acidose ? ',
                                    'reponse' => 'Rations acidogènes',
                                    'categorie_id' => 1,
                                ),
                                935 => 
                                array (
                                    'id' => 940,
                                    'alerte_id' => 4042,
                                    'question' => 'Les brebis sont-elles suffisamment laitières et bien nourries pour couvrir les besoins des agneaux ayant le plus de potentiel ?',
                                    'reponse' => 'Quantité de lait insuffisante pour les gros agneaux',
                                    'categorie_id' => 1,
                                ),
                                936 => 
                                array (
                                    'id' => 941,
                                    'alerte_id' => 4042,
                                    'question' => 'Les prairies pâturées sont-elles trop jeunes et/ou trop riches en azote ? ',
                                    'reponse' => 'Prairies pâturées trop jeunes',
                                    'categorie_id' => 1,
                                ),
                                937 => 
                                array (
                                    'id' => 942,
                                    'alerte_id' => 4042,
                                    'question' => 'La transition alimentaire est-elle suffisante ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                938 => 
                                array (
                                    'id' => 943,
                                    'alerte_id' => 4042,
                                    'question' => 'L\'aliment de démarrage est-il adapté ? ',
                                    'reponse' => 'Aliment de démarrage inadapté',
                                    'categorie_id' => 1,
                                ),
                                939 => 
                                array (
                                    'id' => 944,
                                    'alerte_id' => 4042,
                                    'question' => 'Les accès aux nourrisseurs, aux auges et à l\'eau sont-ils difficiles ?',
                                    'reponse' => 'Accès aux auges et à l’eau difficiles',
                                    'categorie_id' => 1,
                                ),
                                940 => 
                                array (
                                    'id' => 945,
                                    'alerte_id' => 4042,
                                'question' => 'Le contrôle du parasitisme est-il réalisé (coccidiose, ténia et strongles ) ?',
                                    'reponse' => 'Pas de contrôle du parasitisme',
                                    'categorie_id' => 8,
                                ),
                                941 => 
                                array (
                                    'id' => 946,
                                    'alerte_id' => 4042,
                                'question' => 'L’infestation parasitaire (coccidiose, cryptosporidiose, ascaridiose,ténia…) est –elle surveillée ?',
                                    'reponse' => 'Par de surveillance de l’infection parasitaire',
                                    'categorie_id' => 8,
                                ),
                                942 => 
                                array (
                                    'id' => 947,
                                    'alerte_id' => 4043,
                                    'question' => 'Les fourrages distribués présentent-ils des bonnes qualités de conservation ? ',
                                    'reponse' => 'Fourrages mal conservés',
                                    'categorie_id' => 1,
                                ),
                                943 => 
                                array (
                                    'id' => 948,
                                    'alerte_id' => 4043,
                                    'question' => 'Les rations présentent-elles des risques d\'acidose ? ',
                                    'reponse' => 'Rations acidogènes',
                                    'categorie_id' => 1,
                                ),
                                944 => 
                                array (
                                    'id' => 949,
                                    'alerte_id' => 4043,
                                    'question' => 'Les apports minéraux sont-ils suffisants pour couvrir les besoins ? ',
                                    'reponse' => 'Apport minéraux insuffisants par rapport aux besoins',
                                    'categorie_id' => 1,
                                ),
                                945 => 
                                array (
                                    'id' => 950,
                                    'alerte_id' => 4043,
                                    'question' => 'L\'eau de boisson est-elle potable ? ',
                                    'reponse' => 'Eau de boisson non potable',
                                    'categorie_id' => 1,
                                ),
                                946 => 
                                array (
                                    'id' => 951,
                                    'alerte_id' => 4043,
                                    'question' => 'De l\'argile est-elle mise à disposition des agneaux ? ',
                                    'reponse' => 'Pas d’argile à disposition des agneaux',
                                    'categorie_id' => 1,
                                ),
                                947 => 
                                array (
                                    'id' => 952,
                                    'alerte_id' => 4043,
                                    'question' => 'L’infestation en coccidiose –t-elle été surveillée ?',
                                    'reponse' => 'Pas de surveillance de la coccidiose',
                                    'categorie_id' => 8,
                                ),
                                948 => 
                                array (
                                    'id' => 953,
                                    'alerte_id' => 4043,
                                    'question' => 'Les agneaux subissent-ils des stress réguliers ? ',
                                    'reponse' => 'Stress important sur les agneaux',
                                    'categorie_id' => 7,
                                ),
                                949 => 
                                array (
                                    'id' => 954,
                                    'alerte_id' => 4043,
                                    'question' => 'le logement est-il confortable ?',
                                    'reponse' => 'Manque de confort dans le logement',
                                    'categorie_id' => 2,
                                ),
                                950 => 
                                array (
                                    'id' => 955,
                                    'alerte_id' => 4043,
                                    'question' => 'La litière est-elle propre et saine ? ',
                                    'reponse' => 'Litière sale',
                                    'categorie_id' => 2,
                                ),
                                951 => 
                                array (
                                    'id' => 956,
                                    'alerte_id' => 4043,
                                    'question' => 'La paille de litière est-elle de bonne qualité, bien conservée ? ',
                                    'reponse' => 'Paille de la litière de mauvaise qualité',
                                    'categorie_id' => 2,
                                ),
                                952 => 
                                array (
                                    'id' => 957,
                                    'alerte_id' => 4044,
                                    'question' => 'Les apports en cuivre et en soufre sont-ils raisonnés ? ',
                                    'reponse' => 'Apports en cuivre et en souffre non raisonnés',
                                    'categorie_id' => 1,
                                ),
                                953 => 
                                array (
                                    'id' => 958,
                                    'alerte_id' => 4044,
                                    'question' => 'Les rations sont-elles équilibrées ? avec une bonne sécurité contre l’acidose ? ',
                                'reponse' => 'Rations déséquilibrées (risque d’acidose)',
                                    'categorie_id' => 1,
                                ),
                                954 => 
                                array (
                                    'id' => 959,
                                    'alerte_id' => 4044,
                                'question' => 'Les aliments sont sains ? (absence de moisi ou altération)',
                                    'reponse' => 'Aliments moisis ou abîmés',
                                    'categorie_id' => 1,
                                ),
                                955 => 
                                array (
                                    'id' => 960,
                                    'alerte_id' => 4044,
                                    'question' => 'Les apports en éléments minéraux et oligo-éléments sont-ils suffisants ? ',
                                    'reponse' => 'Carences en minéraux et oligo-éléments',
                                    'categorie_id' => 1,
                                ),
                                956 => 
                                array (
                                    'id' => 961,
                                    'alerte_id' => 4044,
                                'question' => 'Avez-vous fait des dépistages listéria, méningite, tétanos, botulisme ou autres maladies graves ? (a voir avec votre vétérinaire)',
                                'reponse' => 'Pas de dépistage des maladies graves (listéria, tétanos, botulisme, etc.)',
                                    'categorie_id' => 5,
                                ),
                                957 => 
                                array (
                                    'id' => 962,
                                    'alerte_id' => 4045,
                                    'question' => 'Les agnelles sont-elles atteintes de tiques ? Si oui, voir parasitisme',
                                    'reponse' => 'Problème d’infestation par des tiques',
                                    'categorie_id' => 8,
                                ),
                                958 => 
                                array (
                                    'id' => 963,
                                    'alerte_id' => 4045,
                                    'question' => 'Les agnelles sont-elles suivies en parasitismes ? ',
                                    'reponse' => 'Pas de suivi du parasitisme des agnelles',
                                    'categorie_id' => 8,
                                ),
                                959 => 
                                array (
                                    'id' => 964,
                                    'alerte_id' => 4046,
                                    'question' => 'Le diagnostic de gale a-t-il été posé par un vétérinaire ?',
                                    'reponse' => 'Diagnostic de gale',
                                    'categorie_id' => 5,
                                ),
                                960 => 
                                array (
                                    'id' => 965,
                                    'alerte_id' => 4046,
                                'question' => 'Les démangeaisons sont-elles surveillées et traitées si nécessaire ? (Gale)',
                                    'reponse' => 'Démangeaisons ni surveillées ni traitées',
                                    'categorie_id' => 5,
                                ),
                                961 => 
                                array (
                                    'id' => 966,
                                    'alerte_id' => 4046,
                                    'question' => 'Les animaux introduits sont-ils mis en quarantaine et suivis sanitairement avant d\'être mélangés au troupeau ? ',
                                    'reponse' => 'Pas quarantaine avant introduction et de surveillance des animaux introduits',
                                    'categorie_id' => 4,
                                ),
                                962 => 
                                array (
                                    'id' => 967,
                                    'alerte_id' => 4046,
                                    'question' => 'Du matériel de transport d\'ovins est-il utilisé à plusieurs éleveurs ? ',
                                    'reponse' => 'Matériel de transport partagé entre plusieurs éleveurs',
                                    'categorie_id' => 4,
                                ),
                                963 => 
                                array (
                                    'id' => 968,
                                    'alerte_id' => 4046,
                                    'question' => 'Les traitements sont-ils mis en place rapidement après l\'apparition des premiers signes ? ',
                                    'reponse' => 'Traitements trop tardifs après l’apparition des premiers signes',
                                    'categorie_id' => 5,
                                ),
                                964 => 
                                array (
                                    'id' => 969,
                                    'alerte_id' => 4046,
                                    'question' => 'Les troupeaux voisins sont-ils porteurs du parasite ? ',
                                    'reponse' => 'Troupeaux voisins porteurs de gale',
                                    'categorie_id' => 7,
                                ),
                                965 => 
                                array (
                                    'id' => 970,
                                    'alerte_id' => 4047,
                                    'question' => 'Du matériel de transport d\'ovins est-il utilisé à plusieurs éleveurs ? ',
                                    'reponse' => 'Matériel de transport partagé entre plusieurs éleveurs',
                                    'categorie_id' => 4,
                                ),
                                966 => 
                                array (
                                    'id' => 971,
                                    'alerte_id' => 4047,
                                    'question' => 'Les troupeaux voisins sont-ils porteurs du parasite ? ',
                                    'reponse' => 'Troupeaux voisins porteurs de teigne ou poux',
                                    'categorie_id' => 7,
                                ),
                                967 => 
                                array (
                                    'id' => 972,
                                    'alerte_id' => 4047,
                                    'question' => 'Les traitements sont-ils mis en place rapidement après l\'apparition des premiers signes ? ',
                                    'reponse' => 'Traitements trop tardifs après l’apparition des premiers signes',
                                    'categorie_id' => 5,
                                ),
                                968 => 
                                array (
                                    'id' => 973,
                                    'alerte_id' => 4047,
                                    'question' => 'La surface et le volume de bâtiment par animal sont-ils suffisants ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                969 => 
                                array (
                                    'id' => 974,
                                    'alerte_id' => 4047,
                                    'question' => 'Les brebis sont-elles victimes de mycotoxine ou d\'intoxication chimique ?',
                                    'reponse' => 'Intoxications chimiques ou par mycotoxines',
                                    'categorie_id' => 5,
                                ),
                                970 => 
                                array (
                                    'id' => 975,
                                    'alerte_id' => 4047,
                                    'question' => 'L\'alimentation couvre-t-elle les besoins en Iode, Cuivre, Zinc ?',
                                    'reponse' => 'Carences en oligo-éléments',
                                    'categorie_id' => 1,
                                ),
                                971 => 
                                array (
                                    'id' => 976,
                                    'alerte_id' => 4050,
                                    'question' => 'La gestion du pâturage permet-elle d\'éviter le retour des animaux sur des parcelles infestées ?',
                                    'reponse' => 'Retour du troupeau sur des parcelles infestées',
                                    'categorie_id' => 8,
                                ),
                                972 => 
                                array (
                                    'id' => 977,
                                    'alerte_id' => 4050,
                                    'question' => 'Le pâturage ras < à 5 cm est-il évité ? ',
                                'reponse' => 'Pâturage trop ras (< 5cm)',
                                    'categorie_id' => 8,
                                ),
                                973 => 
                                array (
                                    'id' => 978,
                                    'alerte_id' => 4050,
                                    'question' => 'Y-a-t-il alternance de différentes espèces au pâturage ?',
                                    'reponse' => 'Par d’alternance possible de différentes espèces sur les mêmes pâtures',
                                    'categorie_id' => 8,
                                ),
                                974 => 
                                array (
                                    'id' => 979,
                                    'alerte_id' => 4050,
                                    'question' => 'Tenez-vous à jour un planning de pâturage ? ',
                                    'reponse' => 'Pas de planning de pâturage à jour',
                                    'categorie_id' => 8,
                                ),
                                975 => 
                                array (
                                    'id' => 980,
                                    'alerte_id' => 4050,
                                    'question' => 'La pâture est-elle intégrée dans une alternance fauche-pâture ? ',
                                    'reponse' => 'Pas d’association pâturage / fauche',
                                    'categorie_id' => 8,
                                ),
                                976 => 
                                array (
                                    'id' => 981,
                                    'alerte_id' => 4050,
                                    'question' => 'Les prairies entrent-elles dans la rotation des cultures ?',
                                    'reponse' => 'Les prairies n’entrent pas dans les rotations de cultures',
                                    'categorie_id' => 8,
                                ),
                                977 => 
                                array (
                                    'id' => 982,
                                    'alerte_id' => 4050,
                                    'question' => 'L\'infestation fait-elle suite à un hiver doux ? ',
                                    'reponse' => 'Hiver précédent très doux',
                                    'categorie_id' => 8,
                                ),
                                978 => 
                                array (
                                    'id' => 983,
                                    'alerte_id' => 4050,
                                    'question' => 'Le choix de traiter collectivement est-il décidé suite à des analyses coproscopiques et/ou sérologique, et répond-il à une stratégie globale de gestion parasitaire à l’échelle du troupeau ?',
                                    'reponse' => 'Pas de stratégie globale dans les choix de traitement des animaux',
                                    'categorie_id' => 8,
                                ),
                                979 => 
                                array (
                                    'id' => 984,
                                    'alerte_id' => 4050,
                                    'question' => 'La fréquence des traitements anthelminthiques ne favorise-t-elle pas les résistances ? ',
                                    'reponse' => 'Fréquence de traitements favorisant les résistances',
                                    'categorie_id' => 8,
                                ),
                                980 => 
                                array (
                                    'id' => 985,
                                    'alerte_id' => 4050,
                                    'question' => 'La race du troupeau est-elle adaptée au milieu infesté ? ',
                                    'reponse' => 'Race non adaptée à de fortes infestations parasitaires',
                                    'categorie_id' => 6,
                                ),
                                981 => 
                                array (
                                    'id' => 986,
                                    'alerte_id' => 4048,
                                    'question' => 'La gestion du pâturage permet-elle d\'éviter le retour des animaux sur des parcelles infestées ?',
                                    'reponse' => 'Retour du troupeau sur des parcelles infestées',
                                    'categorie_id' => 8,
                                ),
                                982 => 
                                array (
                                    'id' => 987,
                                    'alerte_id' => 4048,
                                    'question' => 'Le pâturage ras < à 5 cm est-il évité ? ',
                                'reponse' => 'Pâturage trop ras (< 5cm)',
                                    'categorie_id' => 8,
                                ),
                                983 => 
                                array (
                                    'id' => 988,
                                    'alerte_id' => 4048,
                                    'question' => 'Y-a-t-il alternance de différentes espèces au pâturage ?',
                                    'reponse' => 'Par d’alternance possible de différentes espèces sur les mêmes pâtures',
                                    'categorie_id' => 8,
                                ),
                                984 => 
                                array (
                                    'id' => 989,
                                    'alerte_id' => 4048,
                                    'question' => 'Tenez-vous à jour un planning de pâturage ? ',
                                    'reponse' => 'Pas de planning de pâturage à jour',
                                    'categorie_id' => 8,
                                ),
                                985 => 
                                array (
                                    'id' => 990,
                                    'alerte_id' => 4048,
                                    'question' => 'La pâture est-elle intégrée dans une alternance fauche-pâture ? ',
                                    'reponse' => 'Pas d’association pâturage / fauche',
                                    'categorie_id' => 8,
                                ),
                                986 => 
                                array (
                                    'id' => 991,
                                    'alerte_id' => 4048,
                                    'question' => 'Les prairies entrent-elles dans la rotation des cultures ?',
                                    'reponse' => 'Les prairies n’entrent pas dans les rotations de cultures',
                                    'categorie_id' => 8,
                                ),
                                987 => 
                                array (
                                    'id' => 992,
                                    'alerte_id' => 4048,
                                    'question' => 'L\'infestation fait-elle suite à un hiver doux ? ',
                                    'reponse' => 'Hiver précédent très doux',
                                    'categorie_id' => 8,
                                ),
                                988 => 
                                array (
                                    'id' => 993,
                                    'alerte_id' => 4048,
                                    'question' => 'Le choix de traiter collectivement est-il décider suite à des analyses coproscopiques et/ou sérologique, et répond-il à une stratégie globale de gestion parasitaire à l’échelle du troupeau ?',
                                    'reponse' => 'Pas de stratégie globale dans les choix de traitement des animaux',
                                    'categorie_id' => 8,
                                ),
                                989 => 
                                array (
                                    'id' => 994,
                                    'alerte_id' => 4048,
                                    'question' => 'La fréquence des traitements anthelminthiques ne favorise-t-elle pas les résistances ? ',
                                    'reponse' => 'Fréquence de traitements favorisant les résistances',
                                    'categorie_id' => 8,
                                ),
                                990 => 
                                array (
                                    'id' => 995,
                                    'alerte_id' => 4048,
                                    'question' => 'La race du troupeau est-elle adaptée au milieu infesté ? ',
                                    'reponse' => 'Race non adaptée à de fortes infestations parasitaires',
                                    'categorie_id' => 6,
                                ),
                                991 => 
                                array (
                                    'id' => 996,
                                    'alerte_id' => 4050,
                                    'question' => 'Les animaux ont-ils pâturé des zones humides, notamment par nécessité en période de sécheresse ?',
                                'reponse' => 'Pâturage sur des zones humides (à cause de la sécheresse)',
                                    'categorie_id' => 1,
                                ),
                                992 => 
                                array (
                                    'id' => 997,
                                    'alerte_id' => 4050,
                                    'question' => 'Des accès aménagés à des points d’eau propre et potable sont-ils aménagés en quantité suffisante par rapport au nombre d’animaux ? Le débit est-il suffisant tout au long de l’année ?',
                                    'reponse' => 'Problème d’accès à de l’eau propre et potable',
                                    'categorie_id' => 1,
                                ),
                                993 => 
                                array (
                                    'id' => 998,
                                    'alerte_id' => 4051,
                                    'question' => 'Les animaux pâturent-ils sur des zones sèches avec présence des petits escargots xérophiles?',
                                    'reponse' => 'Présence d’escargots xérophiles',
                                    'categorie_id' => 1,
                                ),
                                994 => 
                                array (
                                    'id' => 999,
                                    'alerte_id' => 4051,
                                'question' => 'Les animaux consomment-ils des compléments alimentaires posés au sol ? (pierre à sel, etc…)',
                                    'reponse' => 'Consommation au sol des aliments, du sel, des minéraux',
                                    'categorie_id' => 4,
                                ),
                                995 => 
                                array (
                                    'id' => 1000,
                                    'alerte_id' => 4051,
                                    'question' => 'Y-a-t-il un épandage de fumier issus d\'animaux malades sur les pâtures ? ',
                                    'reponse' => 'Épandage de fumier issu d’animaux infestés',
                                    'categorie_id' => 4,
                                ),
                                996 => 
                                array (
                                    'id' => 1001,
                                    'alerte_id' => 4051,
                                    'question' => 'Y-a-t-il alternance de différentes espèces au pâturage ?',
                                    'reponse' => 'Par d’alternance possible de différentes espèces sur les mêmes pâtures',
                                    'categorie_id' => 8,
                                ),
                                997 => 
                                array (
                                    'id' => 1002,
                                    'alerte_id' => 4051,
                                    'question' => 'Le pâturage ras < à 5 cm est-il évité ? ',
                                'reponse' => 'Pâturage trop ras (< 5cm)',
                                    'categorie_id' => 8,
                                ),
                                998 => 
                                array (
                                    'id' => 1003,
                                    'alerte_id' => 4051,
                                'question' => 'Les animaux sont-ils maintenus sur des parcelles présentant un manque d\'herbe (sécheresse) ?',
                                    'reponse' => 'Animaux maintenus sur des parcelles présentant un manque d’herbe',
                                    'categorie_id' => 8,
                                ),
                                999 => 
                                array (
                                    'id' => 1004,
                                    'alerte_id' => 4051,
                                    'question' => 'Historiquement, l\'infestation petite douve a déjà été présente ? ',
                                    'reponse' => 'Présence historique de petite douve',
                                    'categorie_id' => 8,
                                ),
                                1000 => 
                                array (
                                    'id' => 1005,
                                    'alerte_id' => 4052,
                                    'question' => 'L\'infestation fait-elle suite à un hiver doux ? ',
                                    'reponse' => 'Infestation suite à un hiver doux',
                                    'categorie_id' => 8,
                                ),
                                1001 => 
                                array (
                                    'id' => 1006,
                                    'alerte_id' => 4052,
                                    'question' => 'L\'année a-t-elle été particulièrement humide et douce ? ',
                                    'reponse' => 'Année particulièrement humide et douce',
                                    'categorie_id' => 8,
                                ),
                                1002 => 
                                array (
                                    'id' => 1007,
                                    'alerte_id' => 4052,
                                    'question' => 'Y-a-t-il eu des infestations les années précédentes ? ',
                                    'reponse' => 'Infestations les années précédentes',
                                    'categorie_id' => 8,
                                ),
                                1003 => 
                                array (
                                    'id' => 1008,
                                    'alerte_id' => 4052,
                                    'question' => 'Les animaux jeunes sont-ils protégés des parcelles infestées ? ',
                                    'reponse' => 'Les jeunes pâturent sur des parcelles très infestées',
                                    'categorie_id' => 8,
                                ),
                                1004 => 
                                array (
                                    'id' => 1009,
                                    'alerte_id' => 4052,
                                    'question' => 'Le pâturage ras < à 5 cm est-il évité ? ',
                                'reponse' => 'Pâturage trop ras (< 5cm)',
                                    'categorie_id' => 8,
                                ),
                                1005 => 
                                array (
                                    'id' => 1010,
                                    'alerte_id' => 4052,
                                    'question' => 'La pâture est-elle intégrée dans une alternance fauche-pâture ? Les prairies entrent-elles dans la rotation des cultures ? ',
                                    'reponse' => 'Les prairies n’entrent pas dans les rotations de cultures',
                                    'categorie_id' => 8,
                                ),
                                1006 => 
                                array (
                                    'id' => 1011,
                                    'alerte_id' => 4035,
                                    'question' => 'L\'environnement est-il contaminé par les coccidioses ? ',
                                    'reponse' => 'Environnement infesté par des coccidies',
                                    'categorie_id' => 8,
                                ),
                                1007 => 
                                array (
                                    'id' => 1012,
                                    'alerte_id' => 4035,
                                'question' => 'Si oui un lavage eau chaude (>90°C) a-t-il été effectué ? ',
                                    'reponse' => 'Pas de lavage à l’eau chaude malgré un environnement infesté',
                                    'categorie_id' => 8,
                                ),
                                1008 => 
                                array (
                                    'id' => 1013,
                                    'alerte_id' => 4035,
                                'question' => 'Avez-vous mis en place des mesures préventives ? (ex argile à disposition des agneaux )',
                                    'reponse' => 'Pas de mesures préventives',
                                    'categorie_id' => 8,
                                ),
                                1009 => 
                                array (
                                    'id' => 1014,
                                    'alerte_id' => 4035,
                                    'question' => 'La surface et le volume de bâtiment par animal sont-ils suffisants ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1010 => 
                                array (
                                    'id' => 1015,
                                    'alerte_id' => 4035,
                                    'question' => 'La litière des animaux reste-t-elle sèche ? ',
                                    'reponse' => 'Litière trop humide',
                                    'categorie_id' => 2,
                                ),
                                1011 => 
                                array (
                                    'id' => 1016,
                                    'alerte_id' => 4035,
                                'question' => 'Les animaux ont-ils subis des stress importants (changement alimentaire, mise à l\'herbe, sevrage, mise en lots, etc..)',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                1012 => 
                                array (
                                    'id' => 1017,
                                    'alerte_id' => 4053,
                                'question' => 'La zone est-elle infestée par la mouche responsables de myases (Wohlfahrtia, lucilie) ? ',
                                    'reponse' => 'Zone infestée par des mouches responsables de myases',
                                    'categorie_id' => 5,
                                ),
                                1013 => 
                                array (
                                    'id' => 1018,
                                    'alerte_id' => 4053,
                                    'question' => 'Le temps consacré à la surveillance des blessures et des myases est-il suffisant ? ',
                                    'reponse' => 'Temps consacré à la surveillance des blessures insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1014 => 
                                array (
                                    'id' => 1019,
                                    'alerte_id' => 4053,
                                    'question' => 'Les arrières trains sont-ils propres ? ',
                                    'reponse' => 'Arrière-trains sales',
                                    'categorie_id' => 3,
                                ),
                                1015 => 
                                array (
                                    'id' => 1020,
                                    'alerte_id' => 4054,
                                    'question' => 'Les traitements se font-ils au coup par coup sans stratégie à l\'échelle du troupeau ? ',
                                    'reponse' => 'Traitements aux coup par coup sans stratégie à l’échelle du troupeau',
                                    'categorie_id' => 4,
                                ),
                                1016 => 
                                array (
                                    'id' => 1021,
                                    'alerte_id' => 4054,
                                    'question' => 'Les introductions d\'animaux sont-elles gérées avec mise en quarantaine et surveillance sanitaire ? ',
                                    'reponse' => 'Pas quarantaine avant introduction et de surveillance des animaux introduits',
                                    'categorie_id' => 4,
                                ),
                                1017 => 
                                array (
                                    'id' => 1022,
                                    'alerte_id' => 4054,
                                    'question' => 'Le parage est-il régulier ? ',
                                    'reponse' => 'Parage irrégulier',
                                    'categorie_id' => 4,
                                ),
                                1018 => 
                                array (
                                    'id' => 1023,
                                    'alerte_id' => 4054,
                                    'question' => 'Le parage est-il pratiqué sans saignements et en respectant les bonnes longueurs d\'onglons ? ',
                                    'reponse' => 'Parage avec saignements, onglons coupés trop courts',
                                    'categorie_id' => 4,
                                ),
                                1019 => 
                                array (
                                    'id' => 1024,
                                    'alerte_id' => 4054,
                                    'question' => 'Les agnelles sont-elles orientées vers des parcelles non infectées ? ',
                                    'reponse' => 'Pâturage des agnelles sur des parcelles infectées',
                                    'categorie_id' => 8,
                                ),
                                1020 => 
                                array (
                                    'id' => 1025,
                                    'alerte_id' => 4054,
                                    'question' => 'L\'alimentation est-elle suffisamment pourvue en minéraux et oligo-éléments ? ',
                                    'reponse' => 'Carences en minéraux et oligo-éléments',
                                    'categorie_id' => 1,
                                ),
                                1021 => 
                                array (
                                    'id' => 1026,
                                    'alerte_id' => 4054,
                                    'question' => 'L\'alimentation est-elle suffisamment pourvue de fibres de structure ? ',
                                    'reponse' => 'Alimentation trop pauvre en fibres de structure',
                                    'categorie_id' => 1,
                                ),
                                1022 => 
                                array (
                                    'id' => 1027,
                                    'alerte_id' => 4054,
                                    'question' => 'La gestion note d\'état/stade physiologique est-elle existante? ',
                                    'reponse' => 'Pas de suivi de l’état corporel',
                                    'categorie_id' => 4,
                                ),
                                1023 => 
                                array (
                                    'id' => 1028,
                                    'alerte_id' => 4054,
                                    'question' => 'Les chemins d\'accès aux pâtures sont-ils caillouteux ? ',
                                    'reponse' => 'Chemins d’accès au pâturage caillouteux',
                                    'categorie_id' => 7,
                                ),
                                1024 => 
                                array (
                                    'id' => 1029,
                                    'alerte_id' => 4054,
                                    'question' => 'Le milieu de vie des brebis est-il suffisant sec et sain ? ',
                                    'reponse' => 'Le milieu de vie des brebis est trop humide',
                                    'categorie_id' => 7,
                                ),
                                1025 => 
                                array (
                                    'id' => 1030,
                                    'alerte_id' => 4054,
                                    'question' => 'Les litières des bergeries sont-elles régulièrement curées ? ',
                                    'reponse' => 'La litière n’est pas curée assez souvent',
                                    'categorie_id' => 2,
                                ),
                                1026 => 
                                array (
                                    'id' => 1031,
                                    'alerte_id' => 4054,
                                    'question' => 'La race choisie est-elle particulièrement sensible des pieds ? ',
                                    'reponse' => 'Race particulièrement sensible des pieds',
                                    'categorie_id' => 6,
                                ),
                                1027 => 
                                array (
                                    'id' => 1032,
                                    'alerte_id' => 4054,
                                    'question' => 'Avez-vous une politique de réforme concernant les brebis récidivistes ? ',
                                    'reponse' => 'Par de politique de réforme des brebis récidivistes',
                                    'categorie_id' => 4,
                                ),
                                1028 => 
                                array (
                                    'id' => 1033,
                                    'alerte_id' => 4055,
                                    'question' => 'Les traitements se font-ils au coup par coup sans stratégie à l\'échelle du troupeau ? ',
                                    'reponse' => 'Traitements aux coup par coup sans stratégie à l’échelle du troupeau',
                                    'categorie_id' => 4,
                                ),
                                1029 => 
                                array (
                                    'id' => 1034,
                                    'alerte_id' => 4055,
                                    'question' => 'Les introductions d\'animaux sont-elles gérées avec mise en quarantaine et surveillance sanitaire ? ',
                                    'reponse' => 'Pas quarantaine avant introduction et de surveillance des animaux introduits',
                                    'categorie_id' => 4,
                                ),
                                1030 => 
                                array (
                                    'id' => 1035,
                                    'alerte_id' => 4055,
                                    'question' => 'Le parage est-il régulier ? ',
                                    'reponse' => 'Parage irrégulier',
                                    'categorie_id' => 4,
                                ),
                                1031 => 
                                array (
                                    'id' => 1036,
                                    'alerte_id' => 4055,
                                    'question' => 'Le parage est-il pratiqué sans saignements et en respectant les bonnes longueurs d\'onglons ? ',
                                    'reponse' => 'Parage avec saignements, onglons coupés trop courts',
                                    'categorie_id' => 4,
                                ),
                                1032 => 
                                array (
                                    'id' => 1037,
                                    'alerte_id' => 4055,
                                    'question' => 'L\'alimentation est-elle suffisamment pourvue en minéraux et oligo-éléments ? ',
                                    'reponse' => 'Carences en minéraux et oligo-éléments',
                                    'categorie_id' => 1,
                                ),
                                1033 => 
                                array (
                                    'id' => 1038,
                                    'alerte_id' => 4055,
                                    'question' => 'L\'alimentation est-elle suffisamment pourvue de fibres de structure ? ',
                                    'reponse' => 'Alimentation trop pauvre en fibres de structure',
                                    'categorie_id' => 1,
                                ),
                                1034 => 
                                array (
                                    'id' => 1039,
                                    'alerte_id' => 4055,
                                    'question' => 'La gestion note d\'état/stade physiologique est-elle existante? ',
                                    'reponse' => 'Pas de suivi de l’état corporel',
                                    'categorie_id' => 4,
                                ),
                                1035 => 
                                array (
                                    'id' => 1040,
                                    'alerte_id' => 4055,
                                    'question' => 'Les chemins d\'accès aux pâtures sont-ils caillouteux ? ',
                                    'reponse' => 'Chemins d’accès au pâturage caillouteux',
                                    'categorie_id' => 7,
                                ),
                                1036 => 
                                array (
                                    'id' => 1041,
                                    'alerte_id' => 4055,
                                    'question' => 'Le milieu de vie des brebis est-il suffisant sec et sain ? ',
                                    'reponse' => 'Le milieu de vie des brebis est trop humide',
                                    'categorie_id' => 2,
                                ),
                                1037 => 
                                array (
                                    'id' => 1042,
                                    'alerte_id' => 4056,
                                    'question' => 'La surveillance permet-elle d\'intervenir dans des délais courts après apparition des premiers signes de boiteries ? ',
                                    'reponse' => 'Interventions trop tardives sur les brebis boiteuses',
                                    'categorie_id' => 4,
                                ),
                                1038 => 
                                array (
                                    'id' => 1043,
                                    'alerte_id' => 4057,
                                    'question' => 'La fréquence des pédiluves est-elle suffisante ? ',
                                    'reponse' => 'Pédiluves trop peu fréquents',
                                    'categorie_id' => 3,
                                ),
                                1039 => 
                                array (
                                    'id' => 1044,
                                    'alerte_id' => 4057,
                                    'question' => 'Les doses des produits sont-elles respectées ? ',
                                    'reponse' => 'Mauvais respect des doses de produits',
                                    'categorie_id' => 3,
                                ),
                                1040 => 
                                array (
                                    'id' => 1045,
                                    'alerte_id' => 4057,
                                    'question' => 'La durée du bain est-elle suffisante ?',
                                    'reponse' => 'Durée du bain trop courte',
                                    'categorie_id' => 3,
                                ),
                                1041 => 
                                array (
                                    'id' => 1046,
                                    'alerte_id' => 5000,
                                    'question' => 'Les animaux sont-ils suffisamment alimentés sur toutes les périodes de l\'année ?',
                                    'reponse' => 'Sous-alimentation à certaines périodes',
                                    'categorie_id' => 1,
                                ),
                                1042 => 
                                array (
                                    'id' => 1047,
                                    'alerte_id' => 5000,
                                    'question' => 'Les rations sont-elles équilibrées en fonction de leur besoin ? ',
                                    'reponse' => 'Rations pas toujours équilibrées en fonction des besoins',
                                    'categorie_id' => 1,
                                ),
                                1043 => 
                                array (
                                    'id' => 1048,
                                    'alerte_id' => 5000,
                                    'question' => 'Les aliments distribués sont-ils sains et bien conservés ? ',
                                    'reponse' => 'Problème de qualité et de conservation des aliments ',
                                    'categorie_id' => 1,
                                ),
                                1044 => 
                                array (
                                    'id' => 1049,
                                    'alerte_id' => 5000,
                                    'question' => 'Les accès à l\'aliment sont-ils suffisants pour tous les animaux en même temps ? ',
                                    'reponse' => 'Compétition entre les animaux pour l’accès aux aliments',
                                    'categorie_id' => 1,
                                ),
                                1045 => 
                                array (
                                    'id' => 1050,
                                    'alerte_id' => 5000,
                                    'question' => 'Les brebis sont-elles parasitées ?',
                                    'reponse' => 'Parasitisme impactant les animaux',
                                    'categorie_id' => 8,
                                ),
                                1046 => 
                                array (
                                    'id' => 1051,
                                    'alerte_id' => 5001,
                                    'question' => 'Les conditions de logements sont-elles satisfaisantes ? Densité ?',
                                    'reponse' => 'Problème de logement des animaux, trop forte densité',
                                    'categorie_id' => 2,
                                ),
                                1047 => 
                                array (
                                    'id' => 1052,
                                    'alerte_id' => 5001,
                                    'question' => 'Les quantités de paille litière sont-elles suffisantes ? ',
                                    'reponse' => 'Paillage de la litière insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1048 => 
                                array (
                                    'id' => 1053,
                                    'alerte_id' => 5001,
                                    'question' => 'Les surfaces de vie sont-elles suffisantes ? ',
                                    'reponse' => 'Surfaces de vie insuffisantes',
                                    'categorie_id' => 2,
                                ),
                                1049 => 
                                array (
                                    'id' => 1054,
                                    'alerte_id' => 5001,
                                    'question' => 'La ration est-elle équilibrée ? ',
                                    'reponse' => 'Ration déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                1050 => 
                                array (
                                    'id' => 1055,
                                    'alerte_id' => 5001,
                                    'question' => 'La ration est-elle suffisamment fibreuse',
                                    'reponse' => 'Manque de fibres dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1051 => 
                                array (
                                    'id' => 1056,
                                    'alerte_id' => 5001,
                                'question' => 'Les animaux sont-ils parasités ? (cf parasitisme)',
                                    'reponse' => 'Parasitisme impactant les animaux',
                                    'categorie_id' => 8,
                                ),
                                1052 => 
                                array (
                                    'id' => 1057,
                                    'alerte_id' => 5002,
                                'question' => 'Les réformes sont-elles subies (sanitaire) ou choisies (sélection) ? ',
                                    'reponse' => 'Trop de réformes pour causes sanitaires, pas assez de choix',
                                    'categorie_id' => 5,
                                ),
                                1053 => 
                                array (
                                    'id' => 1058,
                                    'alerte_id' => 5002,
                                    'question' => 'Quel est l\'âge moyen des réformes ? ',
                                    'reponse' => 'Age moyen des réformes trop élevé',
                                    'categorie_id' => 4,
                                ),
                                1054 => 
                                array (
                                    'id' => 1059,
                                    'alerte_id' => 5002,
                                    'question' => 'Le troupeau a-t-il des soucis de fertilité ? ',
                                    'reponse' => 'Problèmes de fertilité sur le troupeau',
                                    'categorie_id' => 6,
                                ),
                                1055 => 
                                array (
                                    'id' => 1061,
                                    'alerte_id' => 5003,
                                    'question' => 'Le troupeau est-il suffisamment renouvelé ? ',
                                    'reponse' => 'Manque de renouvellement du troupeau',
                                    'categorie_id' => 4,
                                ),
                                1056 => 
                                array (
                                    'id' => 1062,
                                    'alerte_id' => 5003,
                                'question' => 'Les brebis présentent-elles des pathologies infectieuses chroniques ? (respiratoire, mamelle, etc)',
                                'reponse' => 'Présence de maladies infectieuses chroniques (mammites, pneumonies, …)',
                                    'categorie_id' => 5,
                                ),
                                1057 => 
                                array (
                                    'id' => 1063,
                                    'alerte_id' => 5003,
                                'question' => 'Les brebis présentent-elles des pathologies métaboliques ? (toxémie de gestation, hypomagnésémie, hypocalcémie, cétose, acidose, …)',
                                'reponse' => 'Pathologies métaboliques (toxémie, hypomagnésémie, hypocalcémie, acidose, …)',
                                    'categorie_id' => 5,
                                ),
                                1058 => 
                                array (
                                    'id' => 1064,
                                    'alerte_id' => 5003,
                                    'question' => 'L\'état corporel du troupeau est-il satisfaisant toute l\'année ? ',
                                    'reponse' => 'État corporel problématique à certaines périodes',
                                    'categorie_id' => 1,
                                ),
                                1059 => 
                                array (
                                    'id' => 1066,
                                    'alerte_id' => 5003,
                                'question' => 'La fréquence de surveillance est-elle suffisante ? (Les brebis sur le dos au quotidien)',
                                    'reponse' => 'Surveillance pas assez fréquente',
                                    'categorie_id' => 4,
                                ),
                                1060 => 
                                array (
                                    'id' => 1067,
                                    'alerte_id' => 5004,
                                'question' => 'Les brebis sont-elles atteintes de maladies chroniques ? (respiratoires, infectieuses, …)',
                                'reponse' => 'Présence de maladies infectieuses chroniques (mammites, pneumonies, …)',
                                    'categorie_id' => 5,
                                ),
                                1061 => 
                                array (
                                    'id' => 1068,
                                    'alerte_id' => 5004,
                                    'question' => 'Y-a-t-il eu introduction d\'animaux avec achat dernièrement ? ',
                                    'reponse' => 'Achats d’animaux récents',
                                    'categorie_id' => 4,
                                ),
                                1062 => 
                                array (
                                    'id' => 1069,
                                    'alerte_id' => 5004,
                                'question' => 'Les conditions de logement (hygiène, ventilation, température) sont-elles satisfaisantes ? ',
                                'reponse' => 'Conditions de logements insatisfaisantes (hygiène, ventilation, température, …)',
                                    'categorie_id' => 2,
                                ),
                                1063 => 
                                array (
                                    'id' => 1070,
                                    'alerte_id' => 5004,
                                    'question' => 'Les écarts de températures sont-ils accentués dans la bergerie ? ',
                                    'reponse' => 'Ecarts de température trop importants en bergerie',
                                    'categorie_id' => 2,
                                ),
                                1064 => 
                                array (
                                    'id' => 1071,
                                    'alerte_id' => 5005,
                                    'question' => 'L\'état général du troupeau est-il évalué régulièrement ? Si oui, est-il satisfaisant ? ',
                                    'reponse' => 'Pas d’évaluation régulière de l’état corporel',
                                    'categorie_id' => 2,
                                ),
                                1065 => 
                                array (
                                    'id' => 1072,
                                    'alerte_id' => 5005,
                                    'question' => 'Les rations sont-elles équilibrées ? ',
                                    'reponse' => 'Ration déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                1066 => 
                                array (
                                    'id' => 1073,
                                    'alerte_id' => 5005,
                                    'question' => 'Les durées de transitions alimentaires de 3 semaines sont-elles respectées ? ',
                                    'reponse' => 'Mauvaise transition alimentaire',
                                    'categorie_id' => 1,
                                ),
                                1067 => 
                                array (
                                    'id' => 1074,
                                    'alerte_id' => 5005,
                                    'question' => 'La rotation des pâtures est-elle respectée ? ',
                                    'reponse' => 'Pas de rotation des pâturages',
                                    'categorie_id' => 1,
                                ),
                                1068 => 
                                array (
                                    'id' => 1075,
                                    'alerte_id' => 5005,
                                    'question' => 'Les pâtures présentent-elles des excès d\'azote ?',
                                    'reponse' => 'Excès d’azote dans les pâtures',
                                    'categorie_id' => 1,
                                ),
                                1069 => 
                                array (
                                    'id' => 1076,
                                    'alerte_id' => 5005,
                                    'question' => 'L’infestation parasitaire du troupeau est-elle surveillée et fait elle l’objet d’une gestion raisonnée à l’échelle du troupeau ?',
                                    'reponse' => 'Pas de surveillance et de gestion raisonnée du parasitisme',
                                    'categorie_id' => 8,
                                ),
                                1070 => 
                                array (
                                    'id' => 1077,
                                    'alerte_id' => 5006,
                                    'question' => 'Les rations des jeunes sont-elles suffisamment équilibrées ? ',
                                    'reponse' => 'Rations des jeunes déséquilibrées',
                                    'categorie_id' => 1,
                                ),
                                1071 => 
                                array (
                                    'id' => 1078,
                                    'alerte_id' => 5006,
                                    'question' => 'Le sevrage des jeunes se passe-t-il sans difficulté ? ',
                                    'reponse' => 'Problèmes lors du sevrage des jeunes',
                                    'categorie_id' => 4,
                                ),
                                1072 => 
                                array (
                                    'id' => 1079,
                                    'alerte_id' => 5006,
                                'question' => 'Les jeunes sont-ils surveillés sur le plan du parasitisme ? (cf parasitisme)',
                                    'reponse' => 'Pas de surveillance du parasitisme des jeunes',
                                    'categorie_id' => 8,
                                ),
                                1073 => 
                                array (
                                    'id' => 1080,
                                    'alerte_id' => 5006,
                                'question' => 'Les jeunes sont-ils atteints ou ont-ils été atteints de maladies ? (cf santé des jeunes)',
                                    'reponse' => 'Maladies chez les jeunes',
                                    'categorie_id' => 5,
                                ),
                                1074 => 
                                array (
                                    'id' => 1081,
                                    'alerte_id' => 5007,
                                    'question' => 'Les rations sont-elles équilibrées et suffisantes ? ',
                                    'reponse' => 'Rations déséquilibrées et/ou insuffisantes',
                                    'categorie_id' => 1,
                                ),
                                1075 => 
                                array (
                                    'id' => 1082,
                                    'alerte_id' => 5007,
                                    'question' => 'Les aliments du commerce ont-ils des formulations adaptées aux ovins ?',
                                    'reponse' => 'Aliments du commerce non adapté aux ovins',
                                    'categorie_id' => 1,
                                ),
                                1076 => 
                                array (
                                    'id' => 1083,
                                    'alerte_id' => 5008,
                                'question' => 'Votre vétérinaire est-il informé de la présence de troubles nerveux sur votre cheptel ? (C’est obligatoire)',
                                    'reponse' => 'Pas de déclaration des troubles nerveux au vétérinaire',
                                    'categorie_id' => 5,
                                ),
                                1077 => 
                                array (
                                    'id' => 1084,
                                    'alerte_id' => 5008,
                                    'question' => 'Les maladies de type Tremblante, Listériose, Tétanos, Botulisme, sont-elles surveillées ? ',
                                    'reponse' => 'Pas de surveillance des maladies type tremblante, listériose, tétanos, botulisme',
                                    'categorie_id' => 5,
                                ),
                                1078 => 
                                array (
                                    'id' => 1085,
                                    'alerte_id' => 5008,
                                'question' => 'Le troupeau est-il régulièrement déparasité contre les parasites internes et externes? (Oestrose avancée, Cénurose cérébro-spinale) ',
                                    'reponse' => 'Présence de cœnures ou d’œstres',
                                    'categorie_id' => 8,
                                ),
                                1079 => 
                                array (
                                    'id' => 1086,
                                    'alerte_id' => 5008,
                                    'question' => 'Le troupeau est-il carencé en minéraux, oligo-éléments et vitamines ? ',
                                    'reponse' => 'Carences en oligo-éléments et vitamines',
                                    'categorie_id' => 1,
                                ),
                                1080 => 
                                array (
                                    'id' => 1087,
                                    'alerte_id' => 5008,
                                    'question' => 'Le vétérinaire a-t-il diagnostiqué la nécrose du cortex ? ',
                                    'reponse' => 'Diagnostic de nécrose du cortex',
                                    'categorie_id' => 5,
                                ),
                                1081 => 
                                array (
                                    'id' => 1088,
                                    'alerte_id' => 5008,
                                    'question' => 'Existe-t-il des risques d\'intoxication par le sel, plomb, azote non protéique, intoxication végétales sur l\'exploitation ? ',
                                    'reponse' => 'Intoxications possibles : plomb, azote non protéique, plantes toxiques',
                                    'categorie_id' => 1,
                                ),
                                1082 => 
                                array (
                                    'id' => 1089,
                                    'alerte_id' => 5009,
                                    'question' => 'La reprise d\'état corporel des agnelles est-il suffisant à la mise en lutte ? ',
                                    'reponse' => 'Reprise d’état corporel des agnelle à la lutte insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1083 => 
                                array (
                                    'id' => 1090,
                                    'alerte_id' => 5009,
                                    'question' => 'La mise en lutte n\'est-elle pas trop précoce par rapport à l\'âge et au poids des agnelles ?',
                                    'reponse' => 'Mise en lutte trop précoce par rapport à l’âge ou au poids',
                                    'categorie_id' => 4,
                                ),
                                1084 => 
                                array (
                                    'id' => 1091,
                                    'alerte_id' => 5009,
                                    'question' => 'La saison de mise à la reproduction est-elle adaptée à la race ? À la conduite ? ',
                                    'reponse' => 'Saison de reproduction inadaptée à la race ou à la conduite',
                                    'categorie_id' => 4,
                                ),
                                1085 => 
                                array (
                                    'id' => 1092,
                                    'alerte_id' => 5009,
                                    'question' => 'Le taux de renouvellement du troupeau est-il suffisant ?',
                                    'reponse' => 'Taux de renouvellement du troupeau insuffisant',
                                    'categorie_id' => 4,
                                ),
                                1086 => 
                                array (
                                    'id' => 1093,
                                    'alerte_id' => 5009,
                                    'question' => 'Le critère "fertilité des mères" est-il un axe de choix des agnelles de renouvellement ? ',
                                    'reponse' => 'Pas de choix des agnelles en fonction de la fertilité des mères',
                                    'categorie_id' => 6,
                                ),
                                1087 => 
                                array (
                                    'id' => 1094,
                                    'alerte_id' => 5009,
                                    'question' => 'L’infestation parasitaire des agnelles est-elle surveillée pendant leur croissance?',
                                    'reponse' => 'Pas de surveillance de l’infestation parasitaire des agnelles',
                                    'categorie_id' => 8,
                                ),
                                1088 => 
                                array (
                                    'id' => 1095,
                                    'alerte_id' => 5009,
                                    'question' => 'Les antenaises sont-elles atteintes de maladies abortives ? ',
                                    'reponse' => 'Maladies abortives chez les antenaises',
                                    'categorie_id' => 5,
                                ),
                                1089 => 
                                array (
                                    'id' => 1096,
                                    'alerte_id' => 5009,
                                    'question' => 'La fertilité du bélier a-t-elle été vérifiée? ',
                                    'reponse' => 'Pas de vérification de la fertilité du bélier',
                                    'categorie_id' => 4,
                                ),
                                1090 => 
                                array (
                                    'id' => 1097,
                                    'alerte_id' => 5009,
                                    'question' => 'Le nombre de béliers est-il en adéquation avec le nombre de brebis ?  ',
                                    'reponse' => 'Béliers en nombre insuffisant',
                                    'categorie_id' => 4,
                                ),
                                1091 => 
                                array (
                                    'id' => 1098,
                                    'alerte_id' => 5009,
                                    'question' => 'Les béliers sont-ils suffisamment en état à la mise en lutte ? ',
                                    'reponse' => 'État des béliers insuffisant à la mise à la lutte',
                                    'categorie_id' => 1,
                                ),
                                1092 => 
                                array (
                                    'id' => 1099,
                                    'alerte_id' => 5009,
                                    'question' => 'L\'alimentation des agnelles leur permet-elle de bonne croissance ?',
                                    'reponse' => 'Alimentation des agnelles ne permettant pas une croissance suffisante',
                                    'categorie_id' => 1,
                                ),
                                1093 => 
                                array (
                                    'id' => 1100,
                                    'alerte_id' => 5009,
                                    'question' => 'La ration est-elle suffisamment pourvue en minéraux et vitamines ? ',
                                    'reponse' => 'Manque de vitamines et de minéraux dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1094 => 
                                array (
                                    'id' => 1101,
                                    'alerte_id' => 5011,
                                    'question' => 'L\'état corporel des brebis est-il suffisant à la mise en lutte ? ',
                                    'reponse' => 'État corporel des brebis insuffisant à la mise à la lutte',
                                    'categorie_id' => 1,
                                ),
                                1095 => 
                                array (
                                    'id' => 1102,
                                    'alerte_id' => 5011,
                                    'question' => 'La ration est-elle suffisamment riche pour permettre la reprise d\'état ? ',
                                    'reponse' => 'Ration trop pauvre pour permettre une reprise d’état',
                                    'categorie_id' => 1,
                                ),
                                1096 => 
                                array (
                                    'id' => 1103,
                                    'alerte_id' => 5011,
                                    'question' => 'La ration est-elle suffisamment pourvue en minéraux et vitamines ? ',
                                    'reponse' => 'Manque de vitamines et de minéraux dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1097 => 
                                array (
                                    'id' => 1104,
                                    'alerte_id' => 5011,
                                    'question' => 'Les brebis ne sont-elles pas trop âgées ?',
                                    'reponse' => 'Brebis trop âgées',
                                    'categorie_id' => 4,
                                ),
                                1098 => 
                                array (
                                    'id' => 1105,
                                    'alerte_id' => 5011,
                                    'question' => 'La saison de mise à la reproduction est-elle adaptée à la race ? À la conduite ? ',
                                    'reponse' => 'Saison de reproduction inadaptée à la race ou à la conduite',
                                    'categorie_id' => 4,
                                ),
                                1099 => 
                                array (
                                    'id' => 1106,
                                    'alerte_id' => 5011,
                                    'question' => 'La fertilité du bélier a-t-elle été vérifiée? ',
                                    'reponse' => 'Pas de vérification de la fertilité du bélier',
                                    'categorie_id' => 4,
                                ),
                                1100 => 
                                array (
                                    'id' => 1107,
                                    'alerte_id' => 5011,
                                    'question' => 'Les béliers sont-ils suffisamment en état à la mise en lutte ? ',
                                    'reponse' => 'État des béliers insuffisant à la mise à la lutte',
                                    'categorie_id' => 4,
                                ),
                                1101 => 
                                array (
                                    'id' => 1108,
                                    'alerte_id' => 5011,
                                    'question' => 'Le nombre de béliers est-il en adéquation avec le nombre de brebis ? ',
                                    'reponse' => 'Béliers en nombre insuffisant',
                                    'categorie_id' => 4,
                                ),
                                1102 => 
                                array (
                                    'id' => 1109,
                                    'alerte_id' => 5011,
                                    'question' => 'L’infestation parasitaire est-elle pénalisante pour les brebis ?',
                                    'reponse' => 'Parasitisme impactant les animaux',
                                    'categorie_id' => 8,
                                ),
                                1103 => 
                                array (
                                    'id' => 1110,
                                    'alerte_id' => 5011,
                                    'question' => 'Avez-vous vérifié avec votre vétérinaire que les brebis n’avaient pas de maladies abortives ?',
                                    'reponse' => 'Pas de vérification de la présence de maladies abortives',
                                    'categorie_id' => 5,
                                ),
                                1104 => 
                                array (
                                    'id' => 1111,
                                    'alerte_id' => 5012,
                                    'question' => 'Avez-vous vérifié avec votre vétérinaire que les brebis n’avaient pas de maladies abortives ?',
                                    'reponse' => 'Pas de vérification de la présence de maladies abortives',
                                    'categorie_id' => 5,
                                ),
                                1105 => 
                                array (
                                    'id' => 1112,
                                    'alerte_id' => 5012,
                                'question' => 'Le troupeau a-t-il subit un stress important ? (accident, météo, intrus, )',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                1106 => 
                                array (
                                    'id' => 1113,
                                    'alerte_id' => 5012,
                                    'question' => 'Les femelles gestantes sont-elles suivies sur les aspects parasitismes ? ',
                                    'reponse' => 'Pas de suivi du parasitisme sur les gestantes',
                                    'categorie_id' => 8,
                                ),
                                1107 => 
                                array (
                                    'id' => 1114,
                                    'alerte_id' => 5012,
                                'question' => 'Les fourrages distribués sont-ils en bon état sanitaire ? (présence de moisissures, champignons)',
                                    'reponse' => 'Fourrage parfois moisi',
                                    'categorie_id' => 1,
                                ),
                                1108 => 
                                array (
                                    'id' => 1115,
                                    'alerte_id' => 5012,
                                    'question' => 'Y-a-t-il eu une transition alimentaire brutale ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                1109 => 
                                array (
                                    'id' => 1116,
                                    'alerte_id' => 5012,
                                    'question' => 'Y-a-t-il eu une surconsommation accidentelles d\'aliments concentrés ou potentiellement toxiques ? ',
                                    'reponse' => 'Surconsommation de concentrés ou d’aliments toxiques',
                                    'categorie_id' => 1,
                                ),
                                1110 => 
                                array (
                                    'id' => 1117,
                                    'alerte_id' => 5013,
                                    'question' => 'Avez-vous vérifié avec votre vétérinaire que les brebis n’avaient pas de maladies abortives ?',
                                    'reponse' => 'Pas de vérification de la présence de maladies abortives',
                                    'categorie_id' => 5,
                                ),
                                1111 => 
                                array (
                                    'id' => 1118,
                                    'alerte_id' => 5013,
                                'question' => 'Le troupeau a-t-il subit un stress important ? (accident, météo, intrus, )',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                1112 => 
                                array (
                                    'id' => 1119,
                                    'alerte_id' => 5013,
                                    'question' => 'Les femelles gestantes sont-elles suivies sur les aspects parasitismes ? ',
                                    'reponse' => 'Pas de suivi du parasitisme sur les gestantes',
                                    'categorie_id' => 8,
                                ),
                                1113 => 
                                array (
                                    'id' => 1120,
                                    'alerte_id' => 5013,
                                'question' => 'Les fourrages distribués sont-ils en bon état sanitaire ? (présence de moisissures, champignons)',
                                    'reponse' => 'Fourrage parfois moisi',
                                    'categorie_id' => 1,
                                ),
                                1114 => 
                                array (
                                    'id' => 1121,
                                    'alerte_id' => 5013,
                                    'question' => 'Y-a-t-il eu une transition alimentaire brutale ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                1115 => 
                                array (
                                    'id' => 1122,
                                    'alerte_id' => 5013,
                                    'question' => 'Y-a-t-il eu une surconsommation accidentelles d\'aliments concentrés ou potentiellement toxiques ? ',
                                    'reponse' => 'Surconsommation de concentrés ou d’aliments toxiques',
                                    'categorie_id' => 1,
                                ),
                                1116 => 
                                array (
                                    'id' => 1123,
                                    'alerte_id' => 5014,
                                    'question' => 'Les brebis sont-elles trop maigres à l\'agnelage ? ',
                                    'reponse' => 'Brebis trop maigres à l’agnelage',
                                    'categorie_id' => 1,
                                ),
                                1117 => 
                                array (
                                    'id' => 1124,
                                    'alerte_id' => 5014,
                                    'question' => 'Les brebis sont-elles trop grasses à l\'agnelage ?',
                                    'reponse' => 'Brebis trop grasses à l’agnelage',
                                    'categorie_id' => 1,
                                ),
                                1118 => 
                                array (
                                    'id' => 1125,
                                    'alerte_id' => 5014,
                                    'question' => 'La ration est-elle équilibrée par rapport aux besoins ? ',
                                    'reponse' => 'La ration n’est pas adaptée aux besoins',
                                    'categorie_id' => 1,
                                ),
                                1119 => 
                                array (
                                    'id' => 1126,
                                    'alerte_id' => 5014,
                                    'question' => 'La ration distribuée correspond-elle à la ration calculée ? ',
                                    'reponse' => 'La ration distribuée diffère de la ration calculée',
                                    'categorie_id' => 1,
                                ),
                                1120 => 
                                array (
                                    'id' => 1127,
                                    'alerte_id' => 5014,
                                    'question' => 'La ration est-elle équilibrée par rapport aux besoins ? ',
                                    'reponse' => 'La ration n’est pas adaptée aux besoins',
                                    'categorie_id' => 1,
                                ),
                                1121 => 
                                array (
                                    'id' => 1128,
                                    'alerte_id' => 5014,
                                    'question' => 'La ration est-elle adaptée à la prolificité du troupeau ? ',
                                    'reponse' => 'la ration n’est pas adaptée à la prolificité du troupeau',
                                    'categorie_id' => 1,
                                ),
                                1122 => 
                                array (
                                    'id' => 1129,
                                    'alerte_id' => 5014,
                                    'question' => 'Les femelles gestantes sont-elles suivies sur les aspects parasitismes ? ',
                                    'reponse' => 'Pas de suivi du parasitisme sur les gestantes',
                                    'categorie_id' => 8,
                                ),
                                1123 => 
                                array (
                                    'id' => 1130,
                                    'alerte_id' => 5014,
                                    'question' => 'Les brebis peu productives, fatiguées sur le cycle précédent ont-elles été réformées ?',
                                    'reponse' => 'Pas de réforme des brebis peu productives ou fatiguées',
                                    'categorie_id' => 4,
                                ),
                                1124 => 
                                array (
                                    'id' => 1131,
                                    'alerte_id' => 5014,
                                'question' => 'Le troupeau a-t-il subit un stress intense ? (accident, météo, intrus, )',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                1125 => 
                                array (
                                    'id' => 1132,
                                    'alerte_id' => 5015,
                                    'question' => 'La ration est-elle trop encombrante ? ',
                                    'reponse' => 'Ration trop encombrante',
                                    'categorie_id' => 1,
                                ),
                                1126 => 
                                array (
                                    'id' => 1133,
                                    'alerte_id' => 5015,
                                'question' => 'La ration offre-t-elle un bon équilibre minéral (Mg/Zn/P) en fin de gestation ? ',
                                    'reponse' => 'Déséquilibre minéral de la ration en fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                1127 => 
                                array (
                                    'id' => 1134,
                                    'alerte_id' => 5015,
                                    'question' => 'Les râteliers sont-ils trop haut pour les gestantes ? ',
                                    'reponse' => 'Râteliers trop hauts pour les gestantes',
                                    'categorie_id' => 2,
                                ),
                                1128 => 
                                array (
                                    'id' => 1135,
                                    'alerte_id' => 5015,
                                    'question' => 'La marche d\'accès à l\'auge est-elle trop haute ? ',
                                    'reponse' => 'Marche d’accès à l’auge trop haute',
                                    'categorie_id' => 2,
                                ),
                                1129 => 
                                array (
                                    'id' => 1136,
                                    'alerte_id' => 5015,
                                    'question' => 'Les brebis récidivantes de la campagne passée ont-elles été réformées ?',
                                    'reponse' => 'Les brebis récidivantes de la campagne passée n’ont pas été réformées',
                                    'categorie_id' => 4,
                                ),
                                1130 => 
                                array (
                                    'id' => 1137,
                                    'alerte_id' => 5015,
                                    'question' => 'Le taux de prolificité est-il trop élevé ? ',
                                    'reponse' => 'Taux de prolificité trop élevé',
                                    'categorie_id' => 6,
                                ),
                                1131 => 
                                array (
                                    'id' => 1138,
                                    'alerte_id' => 5016,
                                    'question' => 'Est-ce que la facilité de naissance fait partie des critères de choix des béliers ? ',
                                    'reponse' => 'Béliers non choisis en fonction du critère « facilité à la naissance »',
                                    'categorie_id' => 6,
                                ),
                                1132 => 
                                array (
                                    'id' => 1139,
                                    'alerte_id' => 5016,
                                    'question' => 'Le choix des réformes est-il basé sur la difficulté de mise-bas ? ',
                                    'reponse' => 'Pas de choix des réformes en fonction des difficultés de mise-bas',
                                    'categorie_id' => 6,
                                ),
                                1133 => 
                                array (
                                    'id' => 1140,
                                    'alerte_id' => 5016,
                                    'question' => 'La ration de fin de gestation est-elle adaptée au stade ? ',
                                    'reponse' => 'La ration de fin de gestation n’est pas adaptée',
                                    'categorie_id' => 1,
                                ),
                                1134 => 
                                array (
                                    'id' => 1141,
                                    'alerte_id' => 5016,
                                'question' => 'La ration offre-t-elle un bon équilibre minéral (Mg/Zn/P) en fin de gestation ? ',
                                    'reponse' => 'Déséquilibre minéral de la ration en fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                1135 => 
                                array (
                                    'id' => 1142,
                                    'alerte_id' => 5016,
                                    'question' => 'Les brebis sont-elles suffisamment en état ? Trop en état ?',
                                    'reponse' => 'Brebis trop maigres ou trop grasses à l’agnelage',
                                    'categorie_id' => 1,
                                ),
                                1136 => 
                                array (
                                    'id' => 1143,
                                    'alerte_id' => 5017,
                                    'question' => 'Le troupeau présente-t-il un défaut d\'état général ? et reprise d’état à la lutte ?',
                                    'reponse' => 'Manque d’état du troupeau, par de reprise avant la lutte',
                                    'categorie_id' => 1,
                                ),
                                1137 => 
                                array (
                                    'id' => 1144,
                                    'alerte_id' => 5017,
                                    'question' => 'Le troupeau présente-t-il des carences en minéraux ou vitamines ? ',
                                    'reponse' => 'Carences en oligo-éléments et vitamines',
                                    'categorie_id' => 1,
                                ),
                                1138 => 
                                array (
                                    'id' => 1145,
                                    'alerte_id' => 5017,
                                    'question' => 'Les femelles sont-elles suivies sur les aspects parasitismes ? ',
                                    'reponse' => 'Pas de suivi du parasitisme sur les animaux',
                                    'categorie_id' => 8,
                                ),
                                1139 => 
                                array (
                                    'id' => 1146,
                                    'alerte_id' => 5017,
                                    'question' => 'La politique de réforme/renouvellement est-elle adaptée aux objectifs de prolificité ? ',
                                    'reponse' => 'Politique de réforme non adaptée aux objectifs de prolificité',
                                    'categorie_id' => 6,
                                ),
                                1140 => 
                                array (
                                    'id' => 1147,
                                    'alerte_id' => 5017,
                                    'question' => 'Le troupeau a-t-il des antécédents sanitaires importants ? ',
                                    'reponse' => 'Antécédents sanitaires importants',
                                    'categorie_id' => 5,
                                ),
                                1141 => 
                                array (
                                    'id' => 1148,
                                    'alerte_id' => 5018,
                                    'question' => 'La saison de mise à la reproduction est-elle adaptée à la race ? À la conduite ? ',
                                    'reponse' => 'Saison de reproduction inadaptée à la race ou à la conduite',
                                    'categorie_id' => 4,
                                ),
                                1142 => 
                                array (
                                    'id' => 1149,
                                    'alerte_id' => 5018,
                                    'question' => 'Le nombre de béliers est-il en adéquation avec le nombre de brebis ? ',
                                    'reponse' => 'Béliers en nombre insuffisant',
                                    'categorie_id' => 4,
                                ),
                                1143 => 
                                array (
                                    'id' => 1150,
                                    'alerte_id' => 5018,
                                    'question' => 'La non stérilité du bélier a-t-elle été vérifiée? ',
                                    'reponse' => 'Pas de vérification de la fertilité du bélier',
                                    'categorie_id' => 4,
                                ),
                                1144 => 
                                array (
                                    'id' => 1151,
                                    'alerte_id' => 5018,
                                    'question' => 'Les béliers sont-ils suffisamment en état à la mise en lutte ? ',
                                    'reponse' => 'État des béliers insuffisant à la mise à la lutte',
                                    'categorie_id' => 4,
                                ),
                                1145 => 
                                array (
                                    'id' => 1152,
                                    'alerte_id' => 5019,
                                    'question' => 'La machine à traire est-elle contrôlée et réglée une fois par an ?',
                                    'reponse' => 'La machine à traire n’a pas été contrôlée ni réglée depuis plus d’1 an',
                                    'categorie_id' => 4,
                                ),
                                1146 => 
                                array (
                                    'id' => 1153,
                                    'alerte_id' => 5019,
                                    'question' => 'Faites-vous vérifier le décrochage de votre machine à traire ?',
                                    'reponse' => 'Décrochage non vérifié',
                                    'categorie_id' => 4,
                                ),
                                1147 => 
                                array (
                                    'id' => 1154,
                                    'alerte_id' => 5019,
                                    'question' => 'La machine à traire est-elle nettoyée quotidiennement avec des produits appropriés ?',
                                    'reponse' => 'machine à traire non lavée quotidiennement avec des produits appropriés',
                                    'categorie_id' => 3,
                                ),
                                1148 => 
                                array (
                                    'id' => 1155,
                                    'alerte_id' => 5019,
                                    'question' => 'La concentration des produits actifs de nettoyage est-elle suffisante ?',
                                    'reponse' => 'Concentration insuffisante des produits de nettoyage',
                                    'categorie_id' => 3,
                                ),
                                1149 => 
                                array (
                                    'id' => 1156,
                                    'alerte_id' => 5019,
                                'question' => 'Le temps de lavage (contact des agents actifs) est-il respecté ?',
                                    'reponse' => 'Temps de lavage trop court',
                                    'categorie_id' => 3,
                                ),
                                1150 => 
                                array (
                                    'id' => 1157,
                                    'alerte_id' => 5019,
                                    'question' => 'La température de lavage est-elle vérifiée et suffisante ?',
                                    'reponse' => 'Température de lavage non vérifiée ou insuffisante',
                                    'categorie_id' => 3,
                                ),
                                1151 => 
                                array (
                                    'id' => 1158,
                                    'alerte_id' => 5019,
                                    'question' => 'Tous les postes de traite sont-ils lavés équitablement ?',
                                    'reponse' => 'Certes postes de traite sont moins bien lavés',
                                    'categorie_id' => 3,
                                ),
                                1152 => 
                                array (
                                    'id' => 1159,
                                    'alerte_id' => 5019,
                                    'question' => 'Les entrées d\'air durant la traite sont-elles limitées ?',
                                    'reponse' => 'Entrées d’air fréquentes',
                                    'categorie_id' => 4,
                                ),
                                1153 => 
                                array (
                                    'id' => 1160,
                                    'alerte_id' => 5019,
                                    'question' => 'Êtes-vous vigilant sur la sous-traite et la sur-traite ?',
                                    'reponse' => 'Tendance à la sous-traite ou à la sur-traite',
                                    'categorie_id' => 4,
                                ),
                                1154 => 
                                array (
                                    'id' => 1161,
                                    'alerte_id' => 5019,
                                    'question' => 'Observez-vous des chutes de faisceaux durant la traite ?',
                                    'reponse' => 'Chutes de faisceaux pendant la traite',
                                    'categorie_id' => 4,
                                ),
                                1155 => 
                                array (
                                    'id' => 1162,
                                    'alerte_id' => 5019,
                                    'question' => 'Observez-vous de l\'humidité sur les trayons en fin de traite ?',
                                    'reponse' => 'Trayons humides en fin de traite',
                                    'categorie_id' => 4,
                                ),
                                1156 => 
                                array (
                                    'id' => 1163,
                                    'alerte_id' => 5019,
                                    'question' => 'Pratiquez-vous un tri des brebis pour la traite ?',
                                    'reponse' => 'Pas de tri des brebis pour l’ordre de traite',
                                    'categorie_id' => 4,
                                ),
                                1157 => 
                                array (
                                    'id' => 1164,
                                    'alerte_id' => 5019,
                                'question' => 'Pratiquez-vous de la pulvérisation post-traite ? (produit, dose, qualité de la pulvérisation…)',
                                    'reponse' => 'Pas de pulvérisation en post-traite',
                                    'categorie_id' => 3,
                                ),
                                1158 => 
                                array (
                                    'id' => 1165,
                                    'alerte_id' => 5019,
                                    'question' => 'Pratiquez-vous le premier jet pour la détection des mammites ? La palpation ?',
                                    'reponse' => 'Pas d’observation des premiers jets',
                                    'categorie_id' => 4,
                                ),
                                1159 => 
                                array (
                                    'id' => 1166,
                                    'alerte_id' => 5019,
                                    'question' => 'Êtes-vous équipés du test CMT ?',
                                    'reponse' => 'Pas de matériel pour les CMT',
                                    'categorie_id' => 4,
                                ),
                                1160 => 
                                array (
                                    'id' => 1167,
                                    'alerte_id' => 5019,
                                    'question' => 'Faites-vous faire des analyses pour CCI ?',
                                    'reponse' => 'Pas de comptages cellulaires individuels',
                                    'categorie_id' => 4,
                                ),
                                1161 => 
                                array (
                                    'id' => 1168,
                                    'alerte_id' => 5019,
                                    'question' => 'Y-a-t-il présence d’abcès, de boutons, d’ecthyma',
                                    'reponse' => 'Présence de boutons, abcès, ecthyma sur les mamelles',
                                    'categorie_id' => 5,
                                ),
                                1162 => 
                                array (
                                    'id' => 1169,
                                    'alerte_id' => 5019,
                                    'question' => 'Les brebis sont-elles contrôlées sur la présence d\'abcès, de boutons, d\'ecthyma ?',
                                    'reponse' => 'Pas de contrôle des mamelles sur les abcès, boutons, ecthyma',
                                    'categorie_id' => 4,
                                ),
                                1163 => 
                                array (
                                    'id' => 1170,
                                    'alerte_id' => 5019,
                                    'question' => 'Les trayons sont-ils surveillés et entretenus ?',
                                    'reponse' => 'Trayons ni surveillés ni entretenus ',
                                    'categorie_id' => 4,
                                ),
                                1164 => 
                                array (
                                    'id' => 1171,
                                    'alerte_id' => 5019,
                                    'question' => 'Les brebis à mammites sont-elles réformées ?',
                                    'reponse' => 'Les brebis à mammite ne sont pas réformées',
                                    'categorie_id' => 4,
                                ),
                                1165 => 
                                array (
                                    'id' => 1172,
                                    'alerte_id' => 5019,
                                    'question' => 'La ration est-elle équilibrée en azote et en énergie ?',
                                    'reponse' => 'Ration déséquilibrée en azote et/ou en énergie',
                                    'categorie_id' => 1,
                                ),
                                1166 => 
                                array (
                                    'id' => 1173,
                                    'alerte_id' => 5019,
                                    'question' => 'L\'augmentation de la ration est-elle progressive en début de lactation?',
                                    'reponse' => 'Augmentation trop brutale de la ration en début de lactation',
                                    'categorie_id' => 1,
                                ),
                                1167 => 
                                array (
                                    'id' => 1174,
                                    'alerte_id' => 5019,
                                    'question' => 'La ration est-elle suffisamment fibreuse et non acidogène ?',
                                    'reponse' => 'Ration acidogène',
                                    'categorie_id' => 1,
                                ),
                                1168 => 
                                array (
                                    'id' => 1175,
                                    'alerte_id' => 5019,
                                    'question' => 'La ration est-elle équilibrée en minéraux, oligo-éléments et vitamines ?',
                                    'reponse' => 'Ration carencée en minéraux, oligo-éléments et vitamines',
                                    'categorie_id' => 1,
                                ),
                                1169 => 
                                array (
                                    'id' => 1176,
                                    'alerte_id' => 5019,
                                    'question' => 'Les fourrages sont-ils de qualité et sains ?',
                                    'reponse' => 'Fourrages de mauvaise qualité',
                                    'categorie_id' => 1,
                                ),
                                1170 => 
                                array (
                                    'id' => 1177,
                                    'alerte_id' => 5019,
                                    'question' => 'La ventilation du bâtiment est-elle suffisante ?',
                                    'reponse' => 'Mauvaise ventilation du bâtiment',
                                    'categorie_id' => 2,
                                ),
                                1171 => 
                                array (
                                    'id' => 1178,
                                    'alerte_id' => 5019,
                                    'question' => 'La densité animale respecte-t-elle les volumes d\'air disponible ?',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1172 => 
                                array (
                                    'id' => 1179,
                                    'alerte_id' => 5019,
                                    'question' => 'Le renouvellement de l\'air est-il suffisant lors des périodes à risques ?',
                                    'reponse' => 'Renouvellement d’air insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1173 => 
                                array (
                                    'id' => 1180,
                                    'alerte_id' => 5019,
                                    'question' => 'La litière est-elle saine ?',
                                    'reponse' => 'Litière sale',
                                    'categorie_id' => 2,
                                ),
                                1174 => 
                                array (
                                    'id' => 1181,
                                    'alerte_id' => 5019,
                                    'question' => 'Le paillage est-il suffisant ?',
                                    'reponse' => 'Paillage de la litière insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1175 => 
                                array (
                                    'id' => 1182,
                                    'alerte_id' => 5020,
                                    'question' => 'La machine à traire est-elle contrôlée et réglée une fois par an ?',
                                    'reponse' => 'La machine à traire n’a pas été contrôlée ni réglée depuis plus d’1 an',
                                    'categorie_id' => 4,
                                ),
                                1176 => 
                                array (
                                    'id' => 1183,
                                    'alerte_id' => 5020,
                                    'question' => 'Faites-vous vérifier le décrochage de votre MAT ?',
                                    'reponse' => 'Décrochage non vérifié',
                                    'categorie_id' => 4,
                                ),
                                1177 => 
                                array (
                                    'id' => 1184,
                                    'alerte_id' => 5020,
                                    'question' => 'La MAT est-elle nettoyée quotidiennement avec des produits appropriés ?',
                                    'reponse' => 'MAT non lavée quotidiennement avec des produits appropriés',
                                    'categorie_id' => 3,
                                ),
                                1178 => 
                                array (
                                    'id' => 1185,
                                    'alerte_id' => 5020,
                                    'question' => 'La concentration des produits actifs de nettoyage est-elle suffisante ?',
                                    'reponse' => 'Concentration insuffisante des produits de nettoyage',
                                    'categorie_id' => 3,
                                ),
                                1179 => 
                                array (
                                    'id' => 1186,
                                    'alerte_id' => 5020,
                                'question' => 'Le temps de lavage (contact des agents actifs) est-il respecté ?',
                                    'reponse' => 'Temps de lavage trop court',
                                    'categorie_id' => 3,
                                ),
                                1180 => 
                                array (
                                    'id' => 1187,
                                    'alerte_id' => 5020,
                                    'question' => 'La température de lavage est-elle vérifiée et suffisante ?',
                                    'reponse' => 'Température de lavage non vérifiée ou insuffisante',
                                    'categorie_id' => 3,
                                ),
                                1181 => 
                                array (
                                    'id' => 1188,
                                    'alerte_id' => 5020,
                                    'question' => 'Tous les postes de traite sont-ils lavés équitablement ?',
                                    'reponse' => 'Certes postes de traite sont moins bien lavés',
                                    'categorie_id' => 3,
                                ),
                                1182 => 
                                array (
                                    'id' => 1189,
                                    'alerte_id' => 5020,
                                    'question' => 'Les entrées d\'air durant la traite sont-elles limitées ?',
                                    'reponse' => 'Entrées d’air fréquentes',
                                    'categorie_id' => 4,
                                ),
                                1183 => 
                                array (
                                    'id' => 1190,
                                    'alerte_id' => 5020,
                                    'question' => 'Êtes-vous vigilant sur la sous-traite et la sur-traite ?',
                                    'reponse' => 'Tendance à la sous-traite ou à la sur-traite',
                                    'categorie_id' => 4,
                                ),
                                1184 => 
                                array (
                                    'id' => 1191,
                                    'alerte_id' => 5020,
                                    'question' => 'Observez-vous des chutes de faisceaux durant la traite ?',
                                    'reponse' => 'Chutes de faisceaux pendant la traite',
                                    'categorie_id' => 4,
                                ),
                                1185 => 
                                array (
                                    'id' => 1192,
                                    'alerte_id' => 5020,
                                    'question' => 'Observez-vous de l\'humidité sur les trayons en fin de traite ?',
                                    'reponse' => 'Trayons humides en fin de traite',
                                    'categorie_id' => 4,
                                ),
                                1186 => 
                                array (
                                    'id' => 1193,
                                    'alerte_id' => 5020,
                                    'question' => 'Pratiquez-vous un tri des brebis pour la traite ?',
                                    'reponse' => 'Pas de tri des brebis pour l’ordre de traite',
                                    'categorie_id' => 4,
                                ),
                                1187 => 
                                array (
                                    'id' => 1194,
                                    'alerte_id' => 5020,
                                'question' => 'Pratiquez-vous de la pulvérisation post-traite ? (produit, dose, qualité de la pulvérisation…)',
                                    'reponse' => 'Pas de pulvérisation en post-traite',
                                    'categorie_id' => 3,
                                ),
                                1188 => 
                                array (
                                    'id' => 1195,
                                    'alerte_id' => 5020,
                                    'question' => 'Pratiquez-vous le premier jet pour la détection des mammites ? La palpation ?',
                                    'reponse' => 'Pas d’observation des premiers jets',
                                    'categorie_id' => 4,
                                ),
                                1189 => 
                                array (
                                    'id' => 1196,
                                    'alerte_id' => 5020,
                                    'question' => 'Êtes-vous équipés du test CMT ?',
                                    'reponse' => 'Pas de matériel pour les CMT',
                                    'categorie_id' => 4,
                                ),
                                1190 => 
                                array (
                                    'id' => 1197,
                                    'alerte_id' => 5020,
                                    'question' => 'Faites-vous faire des analyses pour CCI ?',
                                    'reponse' => 'Pas de comptages cellulaires individuels',
                                    'categorie_id' => 4,
                                ),
                                1191 => 
                                array (
                                    'id' => 1198,
                                    'alerte_id' => 5020,
                                    'question' => 'Y-a-t-il présence d’abcès, de boutons, d’ecthyma',
                                    'reponse' => 'Présence de boutons, abcès, ecthyma sur les mamelles',
                                    'categorie_id' => 5,
                                ),
                                1192 => 
                                array (
                                    'id' => 1199,
                                    'alerte_id' => 5020,
                                    'question' => 'Les brebis sont-elles contrôlées sur la présence d\'abcès, de boutons, d\'ecthyma ?',
                                    'reponse' => 'Pas de contrôle des mamelles sur les abcès, boutons, ecthyma',
                                    'categorie_id' => 4,
                                ),
                                1193 => 
                                array (
                                    'id' => 1200,
                                    'alerte_id' => 5020,
                                    'question' => 'Les trayons sont-ils surveillés et entretenus ?',
                                    'reponse' => 'Trayons ni surveillés ni entretenus ',
                                    'categorie_id' => 4,
                                ),
                                1194 => 
                                array (
                                    'id' => 1201,
                                    'alerte_id' => 5020,
                                    'question' => 'Les brebis à mammites sont-elles réformées ?',
                                    'reponse' => 'Les brebis à mammite ne sont pas réformées',
                                    'categorie_id' => 4,
                                ),
                                1195 => 
                                array (
                                    'id' => 1202,
                                    'alerte_id' => 5020,
                                    'question' => 'La ration est-elle équilibrée en azote et en énergie ?',
                                    'reponse' => 'Ration déséquilibrée en azote et/ou en énergie',
                                    'categorie_id' => 1,
                                ),
                                1196 => 
                                array (
                                    'id' => 1203,
                                    'alerte_id' => 5020,
                                    'question' => 'L\'augmentation de la ration est-elle progressive en début de lactation?',
                                    'reponse' => 'Augmentation trop brutale de la ration en début de lactation',
                                    'categorie_id' => 1,
                                ),
                                1197 => 
                                array (
                                    'id' => 1204,
                                    'alerte_id' => 5020,
                                    'question' => 'La ration est-elle suffisamment fibreuse et non acidogène ?',
                                    'reponse' => 'Ration acidogène',
                                    'categorie_id' => 1,
                                ),
                                1198 => 
                                array (
                                    'id' => 1205,
                                    'alerte_id' => 5020,
                                    'question' => 'La ration est-elle équilibrée en minéraux, oligo-éléments et vitamines ?',
                                    'reponse' => 'Ration carencée en minéraux, oligo-éléments et vitamines',
                                    'categorie_id' => 1,
                                ),
                                1199 => 
                                array (
                                    'id' => 1206,
                                    'alerte_id' => 5020,
                                    'question' => 'Les fourrages sont-ils de qualité et sains ?',
                                    'reponse' => 'Fourrages de mauvaise qualité',
                                    'categorie_id' => 1,
                                ),
                                1200 => 
                                array (
                                    'id' => 1207,
                                    'alerte_id' => 5020,
                                    'question' => 'La ventilation du bâtiment est-elle suffisante ?',
                                    'reponse' => 'Mauvaise ventilation du bâtiment',
                                    'categorie_id' => 2,
                                ),
                                1201 => 
                                array (
                                    'id' => 1208,
                                    'alerte_id' => 5020,
                                    'question' => 'La densité animale respecte-t-elle les volumes d\'air disponible ?',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1202 => 
                                array (
                                    'id' => 1209,
                                    'alerte_id' => 5020,
                                    'question' => 'Le renouvellement de l\'air est-il suffisant lors des périodes à risques ?',
                                    'reponse' => 'Renouvellement d’air insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1203 => 
                                array (
                                    'id' => 1210,
                                    'alerte_id' => 5020,
                                    'question' => 'La litière est-elle saine ?',
                                    'reponse' => 'Litière sale',
                                    'categorie_id' => 2,
                                ),
                                1204 => 
                                array (
                                    'id' => 1211,
                                    'alerte_id' => 5020,
                                    'question' => 'Le paillage est-il suffisant ?',
                                    'reponse' => 'Paillage de la litière insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1205 => 
                                array (
                                    'id' => 1212,
                                    'alerte_id' => 5021,
                                    'question' => 'Pratiquez-vous l\'autocontrôle ou résultats laiterie ? ',
                                    'reponse' => 'Pas d’autocontrôle ni d’analyse de laiterie',
                                    'categorie_id' => 4,
                                ),
                                1206 => 
                                array (
                                    'id' => 1213,
                                    'alerte_id' => 5021,
                                    'question' => 'La ventilation du bâtiment est-elle suffisante ?',
                                    'reponse' => 'Mauvaise ventilation du bâtiment',
                                    'categorie_id' => 2,
                                ),
                                1207 => 
                                array (
                                    'id' => 1214,
                                    'alerte_id' => 5021,
                                    'question' => 'La densité animale respecte-t-elle les volumes d\'air disponible ?',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1208 => 
                                array (
                                    'id' => 1215,
                                    'alerte_id' => 5021,
                                    'question' => 'Le renouvellement de l\'air est-il suffisant lors des périodes à risques ?',
                                    'reponse' => 'Renouvellement d’air insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1209 => 
                                array (
                                    'id' => 1216,
                                    'alerte_id' => 5021,
                                    'question' => 'La litière est-elle saine ?',
                                    'reponse' => 'Litière sale',
                                    'categorie_id' => 2,
                                ),
                                1210 => 
                                array (
                                    'id' => 1217,
                                    'alerte_id' => 5021,
                                    'question' => 'Le paillage est-il suffisant ?',
                                    'reponse' => 'Paillage de la litière insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1211 => 
                                array (
                                    'id' => 1218,
                                    'alerte_id' => 5021,
                                    'question' => 'Avez-vous mis en place une stratégie de décontamination ?',
                                    'reponse' => 'Pas de stratégie de décontamination',
                                    'categorie_id' => 3,
                                ),
                                1212 => 
                                array (
                                    'id' => 1219,
                                    'alerte_id' => 5021,
                                    'question' => 'L\'eau de lavage est-elle potable ?',
                                    'reponse' => 'L’eau de lavage n’est pas potable',
                                    'categorie_id' => 3,
                                ),
                                1213 => 
                                array (
                                    'id' => 1220,
                                    'alerte_id' => 5021,
                                    'question' => 'Identifiez-vous une ou plusieurs brebis porteuses ? Vous les triez ?',
                                    'reponse' => 'Pas d’identification ni de tri des brebis porteuses',
                                    'categorie_id' => 4,
                                ),
                                1214 => 
                                array (
                                    'id' => 1221,
                                    'alerte_id' => 5021,
                                    'question' => 'Constituez-vous des lots de traite ?',
                                    'reponse' => 'Pas de lots de traite',
                                    'categorie_id' => 4,
                                ),
                                1215 => 
                                array (
                                    'id' => 1222,
                                    'alerte_id' => 5021,
                                    'question' => 'Jetez-vous les refus d\'auge dans les litières ?',
                                    'reponse' => 'Refus d’auge jetés dans la litière',
                                    'categorie_id' => 4,
                                ),
                                1216 => 
                                array (
                                    'id' => 1223,
                                    'alerte_id' => 5021,
                                    'question' => 'Les aliments sont-ils sains et bien stockés/conservés ?',
                                    'reponse' => 'Présence d’aliments moisis',
                                    'categorie_id' => 1,
                                ),
                                1217 => 
                                array (
                                    'id' => 1224,
                                    'alerte_id' => 5021,
                                    'question' => 'Avez-vous un plan de lutte contre les rats ? Arrière-voussure la présence d’oiseaux dans les bâtiments ?',
                                    'reponse' => 'Présence de rats et d’oiseaux dans les bâtiments',
                                    'categorie_id' => 3,
                                ),
                                1218 => 
                                array (
                                    'id' => 1225,
                                    'alerte_id' => 5021,
                                'question' => 'Etes-vous attentif à la propreté des brebis ? (grille de propreté)',
                                    'reponse' => 'Brebis sales',
                                    'categorie_id' => 3,
                                ),
                                1219 => 
                                array (
                                    'id' => 1226,
                                    'alerte_id' => 5022,
                                    'question' => 'Etes-vous attentif à la présence de terre dans les fourrages ?',
                                    'reponse' => 'Présence de terre dans les fourrages',
                                    'categorie_id' => 1,
                                ),
                                1220 => 
                                array (
                                    'id' => 1227,
                                    'alerte_id' => 5022,
                                    'question' => 'Les aliments sont-ils sains et bien stockés/conservés ?',
                                    'reponse' => 'Présence d’aliments moisis',
                                    'categorie_id' => 1,
                                ),
                                1221 => 
                                array (
                                    'id' => 1228,
                                    'alerte_id' => 5022,
                                    'question' => 'Jetez-vous les refus d\'auge dans les litières ?',
                                    'reponse' => 'Refus d’auge jetés dans la litière',
                                    'categorie_id' => 4,
                                ),
                                1222 => 
                                array (
                                    'id' => 1229,
                                    'alerte_id' => 5022,
                                    'question' => 'Respectez-vous les hauteurs de fauche minimum de 7 cm ?',
                                'reponse' => 'Fauche trop basse (< 7cm)',
                                    'categorie_id' => 4,
                                ),
                                1223 => 
                                array (
                                    'id' => 1230,
                                    'alerte_id' => 5022,
                                'question' => 'Etes-vous attentif à la remontée de terre à la récolte (hauteur de coupe, taupinière, résidus de fumier si épandage) ?',
                                    'reponse' => 'Pas de surveillance de la remontée de terre à la récolte',
                                    'categorie_id' => 4,
                                ),
                                1224 => 
                                array (
                                    'id' => 1231,
                                    'alerte_id' => 5023,
                                    'question' => 'L\'eau de lavage est-elle potable ?',
                                    'reponse' => 'L’eau de lavage n’est pas potable',
                                    'categorie_id' => 3,
                                ),
                                1225 => 
                                array (
                                    'id' => 1232,
                                    'alerte_id' => 5023,
                                    'question' => 'Y-a-t-il de l\'eau résiduelle dans la MAT ?',
                                    'reponse' => 'Présence d’eau résiduelle dans la machine à traire',
                                    'categorie_id' => 4,
                                ),
                                1226 => 
                                array (
                                    'id' => 1233,
                                    'alerte_id' => 5023,
                                'question' => 'Etes-vous attentif à la propreté des brebis ? (grille de propreté)',
                                    'reponse' => 'Brebis sales',
                                    'categorie_id' => 3,
                                ),
                                1227 => 
                                array (
                                    'id' => 1234,
                                    'alerte_id' => 5023,
                                    'question' => 'La ventilation du bâtiment est-elle suffisante ?',
                                    'reponse' => 'Mauvaise ventilation du bâtiment',
                                    'categorie_id' => 2,
                                ),
                                1228 => 
                                array (
                                    'id' => 1235,
                                    'alerte_id' => 5023,
                                    'question' => 'La densité animale respecte-t-elle les volumes d\'air disponible ?',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1229 => 
                                array (
                                    'id' => 1236,
                                    'alerte_id' => 5023,
                                    'question' => 'Le renouvellement de l\'air est-il suffisant lors des périodes à risques ?',
                                    'reponse' => 'Renouvellement d’air insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1230 => 
                                array (
                                    'id' => 1237,
                                    'alerte_id' => 5023,
                                    'question' => 'La litière est-elle saine ?',
                                    'reponse' => 'Litière sale',
                                    'categorie_id' => 2,
                                ),
                                1231 => 
                                array (
                                    'id' => 1238,
                                    'alerte_id' => 5023,
                                    'question' => 'Le paillage est-il suffisant ?',
                                    'reponse' => 'Paillage de la litière insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1232 => 
                                array (
                                    'id' => 1239,
                                    'alerte_id' => 5023,
                                    'question' => 'Ensemencez-vous la litière avec des ferments non pathogènes et porteurs de vie?',
                                    'reponse' => 'Pas d’ensemencement des litières avec des bactéries lactiques',
                                    'categorie_id' => 3,
                                ),
                                1233 => 
                                array (
                                    'id' => 1240,
                                    'alerte_id' => 5024,
                                    'question' => 'La ration des brebis en fin de gestation est-elle équilibrée et suffisante par rapport aux besoins ? ',
                                    'reponse' => 'Ration de fin de gestation déséquilibrée ou insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1234 => 
                                array (
                                    'id' => 1241,
                                    'alerte_id' => 5024,
                                    'question' => 'La ration est-elle suffisamment pourvue en minéraux et vitamines ? ',
                                    'reponse' => 'Carences en minéraux, oligo-éléments et vitamines',
                                    'categorie_id' => 1,
                                ),
                                1235 => 
                                array (
                                    'id' => 1242,
                                    'alerte_id' => 5024,
                                    'question' => 'Les brebis ont-elles suffisamment d\'état à la mise-bas ? ',
                                    'reponse' => 'Brebis trop maigres à l’agnelage',
                                    'categorie_id' => 1,
                                ),
                                1236 => 
                                array (
                                    'id' => 1243,
                                    'alerte_id' => 5026,
                                    'question' => 'L\'état corporel des brebis à la mise-bas est-il suffisant ? ',
                                    'reponse' => 'Brebis trop maigres à l’agnelage',
                                    'categorie_id' => 1,
                                ),
                                1237 => 
                                array (
                                    'id' => 1244,
                                    'alerte_id' => 5026,
                                    'question' => 'La ration des brebis en fin de gestation est-elle adaptée ? ',
                                    'reponse' => 'Ration de fin de gestation déséquilibrée ou insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1238 => 
                                array (
                                    'id' => 1245,
                                    'alerte_id' => 5026,
                                'question' => 'Mes agneaux boivent-ils bien un bon colostrum, et en quantité suffisante (attention à chacun dans une portée multiple !) ?',
                                    'reponse' => 'Colostrums de qualité insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1239 => 
                                array (
                                    'id' => 1246,
                                    'alerte_id' => 5026,
                                'question' => 'Mes brebis adoptent-elles bien leur(s) agneau(x) ?',
                                    'reponse' => 'Adoption difficile des brebis par les agneaux',
                                    'categorie_id' => 6,
                                ),
                                1240 => 
                                array (
                                    'id' => 1247,
                                    'alerte_id' => 5026,
                                    'question' => 'Le temps consacré aux soins et à la surveillance des nouveaux nés est-il suffisant ? ',
                                    'reponse' => 'Surveillance des nouveaux-nés insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1241 => 
                                array (
                                    'id' => 1248,
                                    'alerte_id' => 5026,
                                    'question' => 'Les cases d\'agnelage sont-elles dans un bon état de propreté et d\'hygiène ? avancement des cases dans la bergerie ?',
                                    'reponse' => 'Manque de propreté des cases d’agnelage',
                                    'categorie_id' => 3,
                                ),
                                1242 => 
                                array (
                                    'id' => 1249,
                                    'alerte_id' => 5026,
                                    'question' => 'Les nombrils sont-ils désinfectés ? ',
                                    'reponse' => 'Pas de désinfection des nombrils',
                                    'categorie_id' => 3,
                                ),
                                1243 => 
                                array (
                                    'id' => 1250,
                                    'alerte_id' => 5026,
                                'question' => 'L’ambiance du bâtiment (température, humidité, condensation, murs froids) est-elle confortable pour des agneaux ?',
                                    'reponse' => 'Ambiance du bâtiment inconfortable pour les agneaux',
                                    'categorie_id' => 2,
                                ),
                                1244 => 
                                array (
                                    'id' => 1251,
                                    'alerte_id' => 5026,
                                    'question' => 'Le choix des reproducteurs est-il adapté ? ',
                                    'reponse' => 'Choix des reproducteurs inadapté',
                                    'categorie_id' => 6,
                                ),
                                1245 => 
                                array (
                                    'id' => 1252,
                                    'alerte_id' => 5026,
                                    'question' => 'L\'âge moyen des brebis n\'est-il pas trop élevé ? ',
                                    'reponse' => 'Age moyen des brebis trop élevé',
                                    'categorie_id' => 4,
                                ),
                                1246 => 
                                array (
                                    'id' => 1253,
                                    'alerte_id' => 5027,
                                    'question' => 'L\'état corporel des brebis à la mise-bas est-il suffisant ? ',
                                    'reponse' => 'État corporel des brebis insuffisante à la mise-bas',
                                    'categorie_id' => 1,
                                ),
                                1247 => 
                                array (
                                    'id' => 1254,
                                    'alerte_id' => 5027,
                                    'question' => 'La ration des brebis en fin de gestation est-elle adaptée ? ',
                                    'reponse' => 'Ration non adaptée à la fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                1248 => 
                                array (
                                    'id' => 1255,
                                    'alerte_id' => 5027,
                                'question' => 'Mes agneaux boivent-ils bien un bon colostrum, et en quantité suffisante (attention à chacun dans une portée multiple !) ?',
                                    'reponse' => 'Buvée de colostrum insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1249 => 
                                array (
                                    'id' => 1256,
                                    'alerte_id' => 5027,
                                'question' => 'Mes brebis adoptent-elles bien leur(s) agneau(x) ?',
                                    'reponse' => 'Adoption difficile des brebis par les agneaux',
                                    'categorie_id' => 6,
                                ),
                                1250 => 
                                array (
                                    'id' => 1257,
                                    'alerte_id' => 5027,
                                    'question' => 'Le temps consacré aux soins et à la surveillance des nouveaux nés est-il suffisant ? ',
                                    'reponse' => 'Surveillance des nouveaux-nés insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1251 => 
                                array (
                                    'id' => 1258,
                                    'alerte_id' => 5027,
                                    'question' => 'Les cases d\'agnelage sont-elles dans un bon état de propreté et d\'hygiène ? avancement des cases dans la bergerie ?',
                                    'reponse' => 'Manque de propreté des cases d’agnelage',
                                    'categorie_id' => 3,
                                ),
                                1252 => 
                                array (
                                    'id' => 1259,
                                    'alerte_id' => 5027,
                                    'question' => 'Les nombrils sont-ils désinfectés ? ',
                                    'reponse' => 'Pas de désinfection des nombrils',
                                    'categorie_id' => 3,
                                ),
                                1253 => 
                                array (
                                    'id' => 1260,
                                    'alerte_id' => 5027,
                                'question' => 'L’ambiance du bâtiment (température, humidité, condensation, murs froids) est-elle confortable pour des agneaux ?',
                                    'reponse' => 'Ambiance du bâtiment inconfortable pour les agneaux',
                                    'categorie_id' => 2,
                                ),
                                1254 => 
                                array (
                                    'id' => 1261,
                                    'alerte_id' => 5027,
                                    'question' => 'Le choix des reproducteurs est-il adapté ? ',
                                    'reponse' => 'Choix des reproducteurs inadapté',
                                    'categorie_id' => 6,
                                ),
                                1255 => 
                                array (
                                    'id' => 1262,
                                    'alerte_id' => 5027,
                                    'question' => 'L\'âge moyen des brebis n\'est-il pas trop élevé ? ',
                                    'reponse' => 'Age moyen des brebis trop élevé',
                                    'categorie_id' => 4,
                                ),
                                1256 => 
                                array (
                                    'id' => 1263,
                                    'alerte_id' => 5027,
                                    'question' => 'L\'hygiène et la désinfection est-elle respectée lors des différentes interventions : bouclage, équeutage ? ',
                                    'reponse' => 'Manque d’hygiène dans la pose des boucle, l’équeutage, …',
                                    'categorie_id' => 3,
                                ),
                                1257 => 
                                array (
                                    'id' => 1264,
                                    'alerte_id' => 5027,
                                    'question' => 'La ration des brebis est-elle bien équilibrée pour produire un lait équilibré et digeste ?',
                                    'reponse' => 'Ration non adaptée à la production d’un lait équilibré et digeste',
                                    'categorie_id' => 1,
                                ),
                                1258 => 
                                array (
                                    'id' => 1265,
                                    'alerte_id' => 5028,
                                    'question' => 'Ces mortalités semblent-elles être plutôt d’origine digestive, respiratoire ou autre ?',
                                    'reponse' => 'Excès d’azote soluble ou d’amidon fermentescible dans l’aliment',
                                    'categorie_id' => 5,
                                ),
                                1259 => 
                                array (
                                    'id' => 1266,
                                    'alerte_id' => 5028,
                                    'question' => 'Les transitions alimentaires sont-elles suffisamment longues ? ',
                                    'reponse' => 'Transitions alimentaires trop courte',
                                    'categorie_id' => 1,
                                ),
                                1260 => 
                                array (
                                    'id' => 1267,
                                    'alerte_id' => 5028,
                                'question' => 'L\'aliment distribué est-il adapté aux besoins des animaux ? (excès d\'azote soluble, amidon fermentescible, manque de cellulose)',
                                'reponse' => 'Aliments distribués non adaptés aux besoins des animaux (excès d’azote soluble, d’amidon fermentescible, …)',
                                    'categorie_id' => 1,
                                ),
                                1261 => 
                                array (
                                    'id' => 1268,
                                    'alerte_id' => 5028,
                                    'question' => 'La ration des mères est-elle suffisante et équilibrée pour obtenir une bonne production laitière ? ',
                                    'reponse' => 'Ration des mères ne permettant pas une bonne production laitière',
                                    'categorie_id' => 1,
                                ),
                                1262 => 
                                array (
                                    'id' => 1269,
                                    'alerte_id' => 5028,
                                'question' => 'Existe-t-il une possibilité d\'intoxication alimentaire ? (Cuivre, plantes, médicaments, métaux lourds …)',
                                    'reponse' => 'Possibilités d’intoxication alimentaire',
                                    'categorie_id' => 1,
                                ),
                                1263 => 
                                array (
                                    'id' => 1270,
                                    'alerte_id' => 5028,
                                    'question' => 'Les agneaux sont-ils victimes d\'une attaque parasitaire ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 8,
                                ),
                                1264 => 
                                array (
                                    'id' => 1271,
                                    'alerte_id' => 5028,
                                'question' => 'Les agneaux sont-ils victimes de séquelles de maladies antérieures ? (pica, infection, problèmes respiratoires, …)',
                                    'reponse' => 'Épisode antérieur d’entérotoxémie sur les agnelles',
                                    'categorie_id' => 5,
                                ),
                                1265 => 
                                array (
                                    'id' => 1272,
                                    'alerte_id' => 5029,
                                    'question' => 'Les transitions alimentaires sont-elles respectées ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                1266 => 
                                array (
                                    'id' => 1273,
                                    'alerte_id' => 5029,
                                    'question' => 'Les agnelles ont-elles subies un épisode d\'entérotoxémie ? ',
                                    'reponse' => 'Épisode d’entérotoxémie sur les agnelles',
                                    'categorie_id' => 5,
                                ),
                                1267 => 
                                array (
                                    'id' => 1274,
                                    'alerte_id' => 5029,
                                    'question' => 'Les agnelles ont-elles un état corporel suffisant sur toute cette période délicate ? ',
                                    'reponse' => 'L’état corporel des agnelles est insuffisant',
                                    'categorie_id' => 1,
                                ),
                                1268 => 
                                array (
                                    'id' => 1275,
                                    'alerte_id' => 5029,
                                    'question' => 'Avez-vous déjà été touché par des morts subites ?',
                                    'reponse' => 'Existence préalable de morts subites',
                                    'categorie_id' => 5,
                                ),
                                1269 => 
                                array (
                                    'id' => 1276,
                                    'alerte_id' => 5029,
                                    'question' => 'Sont-elles suivies en parasitismes ?',
                                    'reponse' => 'Choix de bélier et alimentation des mères entraînant des agneaux chétifs à la naissance',
                                    'categorie_id' => 8,
                                ),
                                1270 => 
                                array (
                                    'id' => 1277,
                                    'alerte_id' => 5030,
                                    'question' => 'Le temps consacré aux soins et à la surveillance des nouveaux nés est-il suffisant ? ',
                                    'reponse' => 'Surveillance des nouveaux-nés insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1271 => 
                                array (
                                    'id' => 1278,
                                    'alerte_id' => 5030,
                                'question' => 'Les agneaux sont-ils suffisamment vigoureux à la naissance ? (choix des béliers et alimentation des brebis)',
                                    'reponse' => 'Manque de vigueur de agneaux à la naissance',
                                    'categorie_id' => 4,
                                ),
                                1272 => 
                                array (
                                    'id' => 1279,
                                    'alerte_id' => 5030,
                                    'question' => 'Les adoptions sont-elles faciles ? ',
                                    'reponse' => 'Adoptions difficiles',
                                    'categorie_id' => 6,
                                ),
                                1273 => 
                                array (
                                    'id' => 1280,
                                    'alerte_id' => 5030,
                                    'question' => 'La race du troupeau est-il en adéquation avec le mode de production choisi ? ',
                                    'reponse' => 'Race non adaptée au mode de production choisi',
                                    'categorie_id' => 6,
                                ),
                                1274 => 
                                array (
                                    'id' => 1281,
                                    'alerte_id' => 5030,
                                    'question' => 'La race du troupeau est-il en adéquation avec le temps disponible ? ',
                                    'reponse' => 'Race non adaptée au temps disponible',
                                    'categorie_id' => 6,
                                ),
                                1275 => 
                                array (
                                    'id' => 1282,
                                    'alerte_id' => 5030,
                                'question' => 'Les mères sont-elles suffisamment maternelles ? (choix de la race)',
                                'reponse' => 'Mère peu maternelles (choix de la race)',
                                    'categorie_id' => 6,
                                ),
                                1276 => 
                                array (
                                    'id' => 1283,
                                    'alerte_id' => 5030,
                                'question' => 'Les mamelles des brebis sont-elles facilement accessible pour les agneaux ? (œdème et congestion des mamelles, gros trayons)',
                                'reponse' => 'Mamelles difficilement accessible pour les agneaux (oedème, congestion, gros trayons)',
                                    'categorie_id' => 1,
                                ),
                                1277 => 
                                array (
                                    'id' => 1284,
                                    'alerte_id' => 5030,
                                    'question' => 'Le lieu de mise bas est-il suffisamment confortable pour les nouveaux nés ? Température, humidité, propreté',
                                    'reponse' => 'Les lieux de mise-bas manquent de confort pour les nouveaux-nés ',
                                    'categorie_id' => 2,
                                ),
                                1278 => 
                                array (
                                    'id' => 1285,
                                    'alerte_id' => 5030,
                                    'question' => 'Possédez-vous suffisamment de cases d\'agnelage permettant l\'isolement du couple brebis/agneau ? ',
                                    'reponse' => 'Nombre de cases d’agnelage insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1279 => 
                                array (
                                    'id' => 1286,
                                    'alerte_id' => 5031,
                                    'question' => 'Le temps consacré aux soins et à la surveillance des nouveaux nés est-il suffisant ? ',
                                    'reponse' => 'Surveillance des nouveaux-nés insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1280 => 
                                array (
                                    'id' => 1287,
                                    'alerte_id' => 5031,
                                    'question' => 'La race du troupeau est-il en adéquation avec le mode de production choisi ? ',
                                    'reponse' => 'Race non adaptée au mode de production choisi',
                                    'categorie_id' => 6,
                                ),
                                1281 => 
                                array (
                                    'id' => 1288,
                                    'alerte_id' => 5031,
                                    'question' => 'La race du troupeau est-il en adéquation avec le temps disponible ? ',
                                    'reponse' => 'Race non adaptée au temps disponible',
                                    'categorie_id' => 6,
                                ),
                                1282 => 
                                array (
                                    'id' => 1289,
                                    'alerte_id' => 5031,
                                'question' => 'Les mères sont-elles suffisamment maternelles ? (choix de la race)',
                                'reponse' => 'Mère peu maternelles (choix de la race)',
                                    'categorie_id' => 6,
                                ),
                                1283 => 
                                array (
                                    'id' => 1290,
                                    'alerte_id' => 5031,
                                'question' => 'Les agneaux sont-ils suffisamment vigoureux à la naissance ? (choix des béliers et alimentation des brebis)',
                                    'reponse' => 'Manque de vigueur de agneaux à la naissance',
                                    'categorie_id' => 4,
                                ),
                                1284 => 
                                array (
                                    'id' => 1291,
                                    'alerte_id' => 5031,
                                    'question' => 'Les agnelages ont-ils été difficiles ?',
                                    'reponse' => 'Agnelages difficiles',
                                    'categorie_id' => 7,
                                ),
                                1285 => 
                                array (
                                    'id' => 1292,
                                    'alerte_id' => 5031,
                                    'question' => 'Possédez-vous suffisamment de cases d\'agnelage permettant l\'isolement du couple brebis/agneau ? ',
                                    'reponse' => 'Nombre de cases d’agnelage insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1286 => 
                                array (
                                    'id' => 1293,
                                    'alerte_id' => 5032,
                                'question' => 'La densité (nombre d\'animaux/m²) n\'est-elle pas trop importante ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1287 => 
                                array (
                                    'id' => 1294,
                                    'alerte_id' => 5032,
                                    'question' => 'Des précautions d\'hygiène sont-elles prises entre chaque désinfection de cordon ?',
                                    'reponse' => 'Pas de précaution d’hygiène entre deux désinfection de cordon',
                                    'categorie_id' => 3,
                                ),
                                1288 => 
                                array (
                                    'id' => 1295,
                                    'alerte_id' => 5032,
                                    'question' => 'Les quantités de paille litière sont-elles suffisantes ? ',
                                    'reponse' => 'Paillage de la litière insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1289 => 
                                array (
                                    'id' => 1296,
                                    'alerte_id' => 5032,
                                    'question' => 'La bergerie est-elle suffisamment isolée et ventilée ? ',
                                    'reponse' => 'Bergerie mal isolée et mal ventilée',
                                    'categorie_id' => 2,
                                ),
                                1290 => 
                                array (
                                    'id' => 1297,
                                    'alerte_id' => 5032,
                                'question' => 'L\'hygiène du bâtiment et du matériel est-il suffisant ? (lavage, désinfection, dératisation, vide sanitaire, )',
                                    'reponse' => 'Manque d’hygiène dans le bâtiment',
                                    'categorie_id' => 3,
                                ),
                                1291 => 
                                array (
                                    'id' => 1298,
                                    'alerte_id' => 5032,
                                    'question' => 'Le matériel de bouclage est-il bien désinfecté après utilisation ? ',
                                    'reponse' => 'Matériel de bouclage mal désinfecté',
                                    'categorie_id' => 3,
                                ),
                                1292 => 
                                array (
                                    'id' => 1299,
                                    'alerte_id' => 5032,
                                    'question' => 'Un ensemencement des litières avec des bactéries lactiques est-il effectué en prévention ?',
                                    'reponse' => 'Pas de contrôle des mamelles au moment du tarissement',
                                    'categorie_id' => 3,
                                ),
                                1293 => 
                                array (
                                    'id' => 1300,
                                    'alerte_id' => 5032,
                                    'question' => 'Les agneaux ont-ils bien tété le colostrum dans les 6 heures ? ',
                                    'reponse' => 'Prise de colostrum dans les 6 premières heures insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1294 => 
                                array (
                                    'id' => 1301,
                                    'alerte_id' => 5032,
                                    'question' => 'Les agneaux ont-ils bien bu ? sinon pourquoi ?',
                                    'reponse' => 'Problèmes pour faire téter les agneaux',
                                    'categorie_id' => 1,
                                ),
                                1295 => 
                                array (
                                    'id' => 1302,
                                    'alerte_id' => 5032,
                                    'question' => 'Les colostrums sont-ils de bonne qualité ? ',
                                    'reponse' => 'Colostrums de qualité insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1296 => 
                                array (
                                    'id' => 1303,
                                    'alerte_id' => 5033,
                                    'question' => 'Les cordons sont-ils désinfectés ? ',
                                    'reponse' => 'Cordons non désinfectés',
                                    'categorie_id' => 3,
                                ),
                                1297 => 
                                array (
                                    'id' => 1304,
                                    'alerte_id' => 5033,
                                    'question' => 'La solution de désinfection est-elle régulièrement renouvelée ? ',
                                    'reponse' => 'Solution de désinfection peu renouvelée',
                                    'categorie_id' => 3,
                                ),
                                1298 => 
                                array (
                                    'id' => 1305,
                                    'alerte_id' => 5033,
                                'question' => 'Les agneaux du même lot sont-ils homogènes ? (âge et poids)',
                                    'reponse' => 'Manque d’homogénéité dans les lots d’agneaux',
                                    'categorie_id' => 4,
                                ),
                                1299 => 
                                array (
                                    'id' => 1306,
                                    'alerte_id' => 5033,
                                    'question' => 'Les agneaux ont-il bien tété le colostrum dans les 6 heures ? ',
                                    'reponse' => 'Prise de colostrum dans les 6 premières heures insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1300 => 
                                array (
                                    'id' => 1307,
                                    'alerte_id' => 5033,
                                    'question' => 'Les colostrums sont-ils de bonne qualité ? ',
                                    'reponse' => 'Colostrums de qualité insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1301 => 
                                array (
                                    'id' => 1308,
                                    'alerte_id' => 5033,
                                    'question' => 'Le nombre de cases d\'agnelage est-il suffisant pour respecter un temps de présence de 24h ? ',
                                    'reponse' => 'Nombre de cases d’agnelage insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1302 => 
                                array (
                                    'id' => 1309,
                                    'alerte_id' => 5033,
                                'question' => 'La densité (nombre d\'animaux/m²) n\'est-elle pas trop importante ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1303 => 
                                array (
                                    'id' => 1310,
                                    'alerte_id' => 5033,
                                    'question' => 'Les quantités de paille litière sont-elles suffisantes ? ',
                                    'reponse' => 'Paillage de la litière insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1304 => 
                                array (
                                    'id' => 1311,
                                    'alerte_id' => 5033,
                                    'question' => 'La bergerie est-elle suffisamment isolée et ventilée ? ',
                                    'reponse' => 'Bergerie mal isolée et mal ventilée',
                                    'categorie_id' => 2,
                                ),
                                1305 => 
                                array (
                                    'id' => 1312,
                                    'alerte_id' => 5034,
                                    'question' => 'Y-a-t-il eu introduction d\'animaux pouvant déclencher l\'ecthyma sur les animaux présents ? ',
                                    'reponse' => 'Introduction d’animaux porteurs d’ecthyma',
                                    'categorie_id' => 4,
                                ),
                                1306 => 
                                array (
                                    'id' => 1313,
                                    'alerte_id' => 5034,
                                    'question' => 'Connaissez-vous le statut Border Disease de votre troupeau ? ',
                                    'reponse' => 'Statut Border Disease inconnu',
                                    'categorie_id' => 5,
                                ),
                                1307 => 
                                array (
                                    'id' => 1314,
                                    'alerte_id' => 5034,
                                    'question' => 'Observez-vous une résurgence cyclique de l\'ecthyma sur les jeunes brebis ? ',
                                    'reponse' => 'Résurgence cyclique de l’ecthyma sur les jeunes brebis',
                                    'categorie_id' => 5,
                                ),
                                1308 => 
                                array (
                                    'id' => 1315,
                                    'alerte_id' => 5034,
                                    'question' => 'Les rations alimentaires présentent-elles des carences en minéraux et oligo-éléments ?',
                                    'reponse' => 'Carences en minéraux et oligo-éléments',
                                    'categorie_id' => 1,
                                ),
                                1309 => 
                                array (
                                    'id' => 1316,
                                    'alerte_id' => 5035,
                                    'question' => 'L\'hygiène du logement est-elle suffisante ? ',
                                    'reponse' => 'Manque d’hygiène du logement',
                                    'categorie_id' => 3,
                                ),
                                1310 => 
                                array (
                                    'id' => 1317,
                                    'alerte_id' => 5035,
                                    'question' => 'y-a-t-il présence de case d\'infirmerie, isolement des animaux malades ? ',
                                    'reponse' => 'Absence d’infirmerie',
                                    'categorie_id' => 3,
                                ),
                                1311 => 
                                array (
                                    'id' => 1318,
                                    'alerte_id' => 5035,
                                    'question' => 'le logement est-il confortable ? Désinfectée ? ',
                                    'reponse' => 'Manque de confort dans le logement',
                                    'categorie_id' => 2,
                                ),
                                1312 => 
                                array (
                                    'id' => 1319,
                                    'alerte_id' => 5035,
                                    'question' => 'La litière est-elle propre et saine ? ',
                                    'reponse' => 'Litière sale',
                                    'categorie_id' => 2,
                                ),
                                1313 => 
                                array (
                                    'id' => 1320,
                                    'alerte_id' => 5035,
                                    'question' => 'La paille de litière est-elle de bonne qualité, bien conservée ? ',
                                    'reponse' => 'Paille de la litière de mauvaise qualité',
                                    'categorie_id' => 2,
                                ),
                                1314 => 
                                array (
                                    'id' => 1321,
                                    'alerte_id' => 5035,
                                    'question' => 'Un ensemencement des litières avec des bactéries lactiques est-il effectué en prévention ?',
                                    'reponse' => 'Pas d’ensemencement des litières avec des bactéries lactiques',
                                    'categorie_id' => 3,
                                ),
                                1315 => 
                                array (
                                    'id' => 1322,
                                    'alerte_id' => 5035,
                                    'question' => 'La surveillance de la prise colostrale est-elle suffisante ? ',
                                    'reponse' => 'Surveillance de la prise colostrale insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1316 => 
                                array (
                                    'id' => 1323,
                                    'alerte_id' => 5035,
                                    'question' => 'Les colostrums et le lait sont-ils de bonne qualité ? ',
                                    'reponse' => 'Colostrums de qualité insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1317 => 
                                array (
                                    'id' => 1324,
                                    'alerte_id' => 5035,
                                    'question' => 'L\'alimentation des mères est-elle équilibrée ? Comment est l’état des mères ? La couverture des besoins en fin de gestation est-elle assurée ?',
                                    'reponse' => 'Alimentation des agnelles ne permettant pas une croissance suffisante',
                                    'categorie_id' => 1,
                                ),
                                1318 => 
                                array (
                                    'id' => 1325,
                                    'alerte_id' => 5035,
                                    'question' => 'L\'eau de boisson est-elle potable ? ',
                                    'reponse' => 'Eau de boisson non potable',
                                    'categorie_id' => 1,
                                ),
                                1319 => 
                                array (
                                    'id' => 1326,
                                    'alerte_id' => 5035,
                                    'question' => 'Les animaux disposent-ils de sel alimentaire ? ',
                                    'reponse' => 'Pas de sel disponible pour les agneaux',
                                    'categorie_id' => 1,
                                ),
                                1320 => 
                                array (
                                    'id' => 1327,
                                    'alerte_id' => 5037,
                                    'question' => 'L\'environnement est-il contaminé par les coccidioses ? ',
                                    'reponse' => 'Environnement infesté par des coccidies',
                                    'categorie_id' => 8,
                                ),
                                1321 => 
                                array (
                                    'id' => 1328,
                                    'alerte_id' => 5037,
                                'question' => 'Si oui un lavage vapeur eau (>90°C) a-t-il été effectué ? ',
                                    'reponse' => 'Pas de lavage à l’eau chaude malgré un environnement infesté',
                                    'categorie_id' => 3,
                                ),
                                1322 => 
                                array (
                                    'id' => 1329,
                                    'alerte_id' => 5037,
                                'question' => 'Si oui de la prévention est-elle mise en œuvre (argile, vinaigre, etc.)',
                                    'reponse' => 'Pas de mesures préventives de coccidiose sur les agneaux',
                                    'categorie_id' => 3,
                                ),
                                1323 => 
                                array (
                                    'id' => 1330,
                                    'alerte_id' => 5037,
                                    'question' => 'La surface et le volume de bâtiment par animal sont-ils suffisants ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1324 => 
                                array (
                                    'id' => 1331,
                                    'alerte_id' => 5037,
                                    'question' => 'La litière des animaux reste-t-elle sèche ? ',
                                    'reponse' => 'Litière trop humide',
                                    'categorie_id' => 2,
                                ),
                                1325 => 
                                array (
                                    'id' => 1332,
                                    'alerte_id' => 5037,
                                'question' => 'Les animaux ont-ils subis des stress importants (changement alimentaire, mise à l\'herbe, sevrage, mise en lots, etc..)',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                1326 => 
                                array (
                                    'id' => 1333,
                                    'alerte_id' => 5037,
                                    'question' => 'L\'alimentation des agneaux n\'est-elle pas trop acidogène ? ',
                                    'reponse' => 'Alimentation des agneaux acidogène',
                                    'categorie_id' => 1,
                                ),
                                1327 => 
                                array (
                                    'id' => 1334,
                                    'alerte_id' => 5037,
                                    'question' => 'La transition alimentaire est-elle respectée ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                1328 => 
                                array (
                                    'id' => 1335,
                                    'alerte_id' => 5038,
                                    'question' => 'La transition alimentaire est-elle respectée ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                1329 => 
                                array (
                                    'id' => 1336,
                                    'alerte_id' => 5038,
                                    'question' => 'La ration est-elle riche en céréales et acidogène ? ',
                                    'reponse' => 'Ration trop riche en céréales et acidogène',
                                    'categorie_id' => 1,
                                ),
                                1330 => 
                                array (
                                    'id' => 1337,
                                    'alerte_id' => 5038,
                                    'question' => 'L\'environnement est-il contaminé par les coccidioses ? ',
                                    'reponse' => 'Environnement infesté par des coccidies',
                                    'categorie_id' => 8,
                                ),
                                1331 => 
                                array (
                                    'id' => 1338,
                                    'alerte_id' => 5038,
                                'question' => 'Si oui un lavage vapeur eau (>90°C) a-t-il été effectué ? ',
                                    'reponse' => 'Pas de lavage à l’eau chaude malgré un environnement infesté',
                                    'categorie_id' => 3,
                                ),
                                1332 => 
                                array (
                                    'id' => 1339,
                                    'alerte_id' => 5038,
                                'question' => 'Si oui de la prévention est-elle mise en œuvre (argile, vinaigre, etc.)',
                                    'reponse' => 'Pas de mesures préventives de coccidiose sur les agneaux',
                                    'categorie_id' => 4,
                                ),
                                1333 => 
                                array (
                                    'id' => 1340,
                                    'alerte_id' => 5038,
                                    'question' => 'La surface et le volume de bâtiment par animal sont-ils suffisants ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1334 => 
                                array (
                                    'id' => 1341,
                                    'alerte_id' => 5038,
                                    'question' => 'La litière des animaux reste-t-elle sèche ? ',
                                    'reponse' => 'Litière trop humide',
                                    'categorie_id' => 2,
                                ),
                                1335 => 
                                array (
                                    'id' => 1342,
                                    'alerte_id' => 5038,
                                'question' => 'Les animaux ont-ils subis des stress importants (changement alimentaire, mise à l\'herbe, sevrage, mise en lots, etc..)',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                1336 => 
                                array (
                                    'id' => 1343,
                                    'alerte_id' => 5039,
                                'question' => 'L\'herbe pâturée n\'est-elle pas trop jeune ? (riche et humide)',
                                    'reponse' => 'Herbe pâturée trop jeune',
                                    'categorie_id' => 1,
                                ),
                                1337 => 
                                array (
                                    'id' => 1344,
                                    'alerte_id' => 5039,
                                    'question' => 'La transition alimentaire vers le pâturage est-elle respectée ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                1338 => 
                                array (
                                    'id' => 1345,
                                    'alerte_id' => 5040,
                                'question' => 'L’ambiance des bâtiments est-elle propice aux variations de températures (métal, béton, climat rude, mauvaise orientation, …) ? ',
                                    'reponse' => 'Variations de température importante dans le bâtiment',
                                    'categorie_id' => 2,
                                ),
                                1339 => 
                                array (
                                    'id' => 1346,
                                    'alerte_id' => 5040,
                                    'question' => 'La densité animale en bergerie n’est-elle pas trop élevée ?',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1340 => 
                                array (
                                    'id' => 1347,
                                    'alerte_id' => 5040,
                                    'question' => 'Les matériaux constituant la bergerie sont-ils propices aux variations de températures ? ',
                                    'reponse' => 'Matériaux favorisant des variation de température excessives',
                                    'categorie_id' => 2,
                                ),
                                1341 => 
                                array (
                                    'id' => 1348,
                                    'alerte_id' => 5040,
                                    'question' => 'La condensation est-elle fréquente dans le bâtiment ? ',
                                    'reponse' => 'Condensation fréquente dans le bâtiment',
                                    'categorie_id' => 2,
                                ),
                                1342 => 
                                array (
                                    'id' => 1349,
                                    'alerte_id' => 5040,
                                    'question' => 'Y-a-t-il présence de courants d\'air ? ',
                                    'reponse' => 'Présence de courants d’air',
                                    'categorie_id' => 2,
                                ),
                                1343 => 
                                array (
                                    'id' => 1350,
                                    'alerte_id' => 5040,
                                    'question' => 'Le paillage est-il effectué à la pailleuse ? ',
                                    'reponse' => 'Paillage effectué à la pailleuse',
                                    'categorie_id' => 2,
                                ),
                                1344 => 
                                array (
                                    'id' => 1351,
                                    'alerte_id' => 5040,
                                    'question' => 'Les accès aux nourrisseurs, aux auges et à l\'eau sont-ils difficiles ?',
                                    'reponse' => 'Accès aux auges et à l’eau difficiles',
                                    'categorie_id' => 2,
                                ),
                                1345 => 
                                array (
                                    'id' => 1352,
                                    'alerte_id' => 5040,
                                'question' => 'Les agneaux ont-ils accès à des plantes provoquant de l\'œdème pulmonaire ? (laurier cerise/galéga officinal)',
                                'reponse' => 'Accès à des plantes provoquant des œdèmes pulmonaires (galega, laurier cerise)',
                                    'categorie_id' => 1,
                                ),
                                1346 => 
                                array (
                                    'id' => 1353,
                                    'alerte_id' => 5041,
                                'question' => 'L’ambiance des bâtiments est-elle propice aux variations de températures (métal, béton, climat rude, mauvaise orientation, …) ? ',
                                    'reponse' => 'Infestation suite à un hiver doux',
                                    'categorie_id' => 2,
                                ),
                                1347 => 
                                array (
                                    'id' => 1354,
                                    'alerte_id' => 5041,
                                    'question' => 'La densité animale en bergerie n’est-elle pas trop élevée ?',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1348 => 
                                array (
                                    'id' => 1355,
                                    'alerte_id' => 5041,
                                    'question' => 'Les matériaux constituant la bergerie sont-ils propices aux variations de températures ? ',
                                    'reponse' => 'Matériaux favorisant des variation de température excessives',
                                    'categorie_id' => 2,
                                ),
                                1349 => 
                                array (
                                    'id' => 1356,
                                    'alerte_id' => 5041,
                                    'question' => 'La condensation est-elle fréquente dans le bâtiment ? ',
                                    'reponse' => 'Condensation fréquente dans le bâtiment',
                                    'categorie_id' => 2,
                                ),
                                1350 => 
                                array (
                                    'id' => 1357,
                                    'alerte_id' => 5041,
                                    'question' => 'Y-a-t-il présence de courants d\'air ? ',
                                    'reponse' => 'Présence de courants d’air',
                                    'categorie_id' => 2,
                                ),
                                1351 => 
                                array (
                                    'id' => 1358,
                                    'alerte_id' => 5041,
                                    'question' => 'Le paillage est-il effectué à la pailleuse ? ',
                                    'reponse' => 'Paillage effectué à la pailleuse',
                                    'categorie_id' => 2,
                                ),
                                1352 => 
                                array (
                                    'id' => 1359,
                                    'alerte_id' => 5041,
                                    'question' => 'Les accès aux nourrisseurs, aux auges et à l\'eau sont-ils difficiles ?',
                                    'reponse' => 'Accès aux auges et à l’eau difficiles',
                                    'categorie_id' => 2,
                                ),
                                1353 => 
                                array (
                                    'id' => 1360,
                                    'alerte_id' => 5041,
                                'question' => 'Les agneaux ont-ils accès à des plantes provoquant de l\'œdème pulmonaire ? (laurier cerise/galéga officinal)',
                                'reponse' => 'Accès à des plantes provoquant des œdèmes pulmonaires (galega, laurier cerise)',
                                    'categorie_id' => 1,
                                ),
                                1354 => 
                                array (
                                    'id' => 1361,
                                    'alerte_id' => 5042,
                                'question' => 'Les agneaux ont-ils eu des troubles du cordon ? (Cf ci-dessus)',
                                    'reponse' => 'Infections du cordon',
                                    'categorie_id' => 5,
                                ),
                                1355 => 
                                array (
                                    'id' => 1362,
                                    'alerte_id' => 5042,
                                    'question' => 'Les agneaux ont-ils eu des infections suite au bouclage ou à l\'équeutage ? ',
                                    'reponse' => 'Infections suite au bouclage ou à l’équeutage',
                                    'categorie_id' => 5,
                                ),
                                1356 => 
                                array (
                                    'id' => 1363,
                                    'alerte_id' => 5042,
                                    'question' => 'En cas de Blessures, les plaies sont-elles systématiquement désinfectées ? ',
                                    'reponse' => 'Matériel de transport partagé entre plusieurs éleveurs',
                                    'categorie_id' => 5,
                                ),
                                1357 => 
                                array (
                                    'id' => 1364,
                                    'alerte_id' => 5043,
                                    'question' => 'Les rations sont-elles suffisamment pourvues en vitamine E et sélénium ? ',
                                    'reponse' => 'Manque de vitamine E et de sélénium',
                                    'categorie_id' => 1,
                                ),
                                1358 => 
                                array (
                                    'id' => 1365,
                                    'alerte_id' => 5043,
                                    'question' => 'Les rations présentent-elles des risques d\'acidose ? ',
                                    'reponse' => 'Rations acidogènes',
                                    'categorie_id' => 1,
                                ),
                                1359 => 
                                array (
                                    'id' => 1366,
                                    'alerte_id' => 5044,
                                    'question' => 'La densité animale n\'est-elle pas trop élevée et favoriser les risques d\'accident ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1360 => 
                                array (
                                    'id' => 1367,
                                    'alerte_id' => 5045,
                                    'question' => 'La transition alimentaire est-elle suffisante ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                1361 => 
                                array (
                                    'id' => 1368,
                                    'alerte_id' => 5045,
                                    'question' => 'L\'aliment de démarrage est-il adapté ? ',
                                    'reponse' => 'Aliment de démarrage inadapté',
                                    'categorie_id' => 1,
                                ),
                                1362 => 
                                array (
                                    'id' => 1369,
                                    'alerte_id' => 5045,
                                    'question' => 'Les accès aux nourrisseurs, aux auges et à l\'eau sont-ils difficiles ?',
                                    'reponse' => 'Accès aux auges et à l’eau difficiles',
                                    'categorie_id' => 2,
                                ),
                                1363 => 
                                array (
                                    'id' => 1370,
                                    'alerte_id' => 5045,
                                'question' => 'L’infestation parasitaire (coccidiose, cryptosporidiose, tænia…) est-elle surveillée ?',
                                    'reponse' => 'Par de surveillance de l’infection parasitaire',
                                    'categorie_id' => 8,
                                ),
                                1364 => 
                                array (
                                    'id' => 1371,
                                    'alerte_id' => 5046,
                                    'question' => 'Les fourrages distribués présentent-ils des bonnes qualités de conservation ? ',
                                    'reponse' => 'Fourrages mal conservés',
                                    'categorie_id' => 1,
                                ),
                                1365 => 
                                array (
                                    'id' => 1372,
                                    'alerte_id' => 5046,
                                    'question' => 'Les rations présentent-elles des risques d\'acidose ? ',
                                    'reponse' => 'Rations acidogènes',
                                    'categorie_id' => 1,
                                ),
                                1366 => 
                                array (
                                    'id' => 1373,
                                    'alerte_id' => 5046,
                                    'question' => 'Les apports minéraux sont-ils suffisants pour couvrir les besoins ? ',
                                    'reponse' => 'Apport minéraux insuffisants par rapport aux besoins',
                                    'categorie_id' => 1,
                                ),
                                1367 => 
                                array (
                                    'id' => 1374,
                                    'alerte_id' => 5046,
                                    'question' => 'L\'eau de boisson est-elle potable ? ',
                                    'reponse' => 'Eau de boisson non potable',
                                    'categorie_id' => 1,
                                ),
                                1368 => 
                                array (
                                    'id' => 1375,
                                    'alerte_id' => 5046,
                                    'question' => 'De l\'argile est-elle mise à disposition des agneaux ? ',
                                    'reponse' => 'Pas d’argile à disposition des agneaux',
                                    'categorie_id' => 4,
                                ),
                                1369 => 
                                array (
                                    'id' => 1376,
                                    'alerte_id' => 5046,
                                    'question' => 'L’infestation en coccidiose –t-elle été surveillée ?',
                                    'reponse' => 'Pas de surveillance de la coccidiose',
                                    'categorie_id' => 8,
                                ),
                                1370 => 
                                array (
                                    'id' => 1377,
                                    'alerte_id' => 5046,
                                    'question' => 'Les agneaux subissent-ils des stress réguliers ? ',
                                    'reponse' => 'Stress important sur les agneaux',
                                    'categorie_id' => 7,
                                ),
                                1371 => 
                                array (
                                    'id' => 1378,
                                    'alerte_id' => 5046,
                                    'question' => 'Observez-vous une résurgence cyclique de l\'ecthyma sur les jeunes brebis ? ',
                                    'reponse' => 'Résurgence cyclique de l’ecthyma sur les jeunes brebis',
                                    'categorie_id' => 5,
                                ),
                                1372 => 
                                array (
                                    'id' => 1379,
                                    'alerte_id' => 5047,
                                    'question' => 'Les apports en cuivre et en soufre sont-ils raisonnés ? ',
                                    'reponse' => 'Apports en cuivre et en souffre non raisonnés',
                                    'categorie_id' => 1,
                                ),
                                1373 => 
                                array (
                                    'id' => 1380,
                                    'alerte_id' => 5047,
                                    'question' => 'Les rations sont-elles équilibrées ? avec une bonne sécurité contre l’acidose ? ',
                                'reponse' => 'Rations déséquilibrées (risque d’acidose)',
                                    'categorie_id' => 1,
                                ),
                                1374 => 
                                array (
                                    'id' => 1381,
                                    'alerte_id' => 5047,
                                'question' => 'Les aliments sont sains ? (absence de moisi ou altération)',
                                    'reponse' => 'Présence d’aliments moisis',
                                    'categorie_id' => 1,
                                ),
                                1375 => 
                                array (
                                    'id' => 1382,
                                    'alerte_id' => 5047,
                                    'question' => 'Les apports en éléments minéraux et oligo-éléments sont-ils suffisants ? ',
                                    'reponse' => 'Carences en minéraux et oligo-éléments',
                                    'categorie_id' => 1,
                                ),
                                1376 => 
                                array (
                                    'id' => 1383,
                                    'alerte_id' => 5047,
                                    'question' => 'Avez-vous fait des dépistages Listéria, Méningite, tétanos, botulisme ou autres maladies graves ?',
                                'reponse' => 'Pas de dépistage des maladies graves (listéria, tétanos, botulisme, etc.)',
                                    'categorie_id' => 5,
                                ),
                                1377 => 
                                array (
                                    'id' => 1384,
                                    'alerte_id' => 5047,
                                    'question' => 'Assurez-vous une bonne hygiène du cordon et du matériel d’identification ? ',
                                    'reponse' => 'Désinfection du cordon et du matériel d’identification insuffisante',
                                    'categorie_id' => 3,
                                ),
                                1378 => 
                                array (
                                    'id' => 1385,
                                    'alerte_id' => 5048,
                                    'question' => 'Les agnelles sont-ils atteints de ténia? Si oui, voir parasitisme',
                                    'reponse' => 'Pas de suivi du parasitisme des agnelles',
                                    'categorie_id' => 8,
                                ),
                                1379 => 
                                array (
                                    'id' => 1386,
                                    'alerte_id' => 5049,
                                    'question' => 'Le diagnostic de gale a-t-il été posé par un vétérinaire ?',
                                    'reponse' => 'Diagnostic de gale',
                                    'categorie_id' => 5,
                                ),
                                1380 => 
                                array (
                                    'id' => 1387,
                                    'alerte_id' => 5049,
                                'question' => 'Les démangeaisons sont-elles surveillées et traitées si nécessaire ? (Gale)',
                                    'reponse' => 'Démangeaisons ni surveillées ni traitées',
                                    'categorie_id' => 5,
                                ),
                                1381 => 
                                array (
                                    'id' => 1388,
                                    'alerte_id' => 5049,
                                    'question' => 'Les animaux introduits sont-ils mis en quarantaine et suivis sanitairement avant d\'être mélangés au troupeau ? ',
                                    'reponse' => 'Pas quarantaine avant introduction et de surveillance des animaux introduits',
                                    'categorie_id' => 4,
                                ),
                                1382 => 
                                array (
                                    'id' => 1389,
                                    'alerte_id' => 5049,
                                    'question' => 'Du matériel de transport d\'ovins est-il utilisé à plusieurs éleveurs ? ',
                                    'reponse' => 'Matériel de transport partagé entre plusieurs éleveurs',
                                    'categorie_id' => 4,
                                ),
                                1383 => 
                                array (
                                    'id' => 1390,
                                    'alerte_id' => 5049,
                                    'question' => 'Les traitements sont-ils mis en place rapidement après l\'apparition des premiers signes ? ',
                                    'reponse' => 'Traitements trop tardifs après l’apparition des premiers signes',
                                    'categorie_id' => 4,
                                ),
                                1384 => 
                                array (
                                    'id' => 1391,
                                    'alerte_id' => 5049,
                                    'question' => 'Les troupeaux voisins sont-ils porteurs du parasite ? ',
                                    'reponse' => 'Troupeaux voisins porteurs de gale',
                                    'categorie_id' => 4,
                                ),
                                1385 => 
                                array (
                                    'id' => 1392,
                                    'alerte_id' => 5050,
                                    'question' => 'Du matériel de transport d\'ovins est-il utilisé à plusieurs éleveurs ? ',
                                    'reponse' => 'Matériel de transport partagé entre plusieurs éleveurs',
                                    'categorie_id' => 4,
                                ),
                                1386 => 
                                array (
                                    'id' => 1393,
                                    'alerte_id' => 5050,
                                    'question' => 'Les troupeaux voisins sont-ils porteurs du parasite ? ',
                                    'reponse' => 'Troupeaux voisins porteurs de gale',
                                    'categorie_id' => 4,
                                ),
                                1387 => 
                                array (
                                    'id' => 1394,
                                    'alerte_id' => 5050,
                                    'question' => 'Les traitements sont-ils mis en place rapidement après l\'apparition des premiers signes ? ',
                                    'reponse' => 'Traitements trop tardifs après l’apparition des premiers signes',
                                    'categorie_id' => 4,
                                ),
                                1388 => 
                                array (
                                    'id' => 1395,
                                    'alerte_id' => 5050,
                                    'question' => 'La surface et le volume de bâtiment par animal sont-ils suffisants ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1389 => 
                                array (
                                    'id' => 1396,
                                    'alerte_id' => 5050,
                                    'question' => 'Les brebis sont-elles victimes de mycotoxine ou d\'intoxication chimique ?',
                                    'reponse' => 'Intoxications chimiques ou par mycotoxines',
                                    'categorie_id' => 5,
                                ),
                                1390 => 
                                array (
                                    'id' => 1397,
                                    'alerte_id' => 5050,
                                    'question' => 'L\'alimentation couvre-t-elle les besoins en Iode, Cuivre, Zinc ?',
                                    'reponse' => 'Carences en oligo-éléments',
                                    'categorie_id' => 1,
                                ),
                                1391 => 
                                array (
                                    'id' => 1398,
                                    'alerte_id' => 5051,
                                'question' => 'La gestion du pâturage permet-elle d\'éviter le retour des animaux sur des parcelles contaminées ? (surtout pour le ténia ! > 1 an)',
                                    'reponse' => 'Fréquence de traitements favorisant les résistances',
                                    'categorie_id' => 8,
                                ),
                                1392 => 
                                array (
                                    'id' => 1399,
                                    'alerte_id' => 5051,
                                    'question' => 'Le pâturage ras < à 5 cm est-il évité ? ',
                                'reponse' => 'Pâturage trop ras (< 5cm)',
                                    'categorie_id' => 8,
                                ),
                                1393 => 
                                array (
                                    'id' => 1400,
                                    'alerte_id' => 5051,
                                    'question' => 'Y-a-t-il alternance de différentes espèces au pâturage ?',
                                    'reponse' => 'Par d’alternance possible de différentes espèces sur les mêmes pâtures',
                                    'categorie_id' => 8,
                                ),
                                1394 => 
                                array (
                                    'id' => 1401,
                                    'alerte_id' => 5051,
                                    'question' => 'Tenez-vous à jour un planning de pâturage ? ',
                                    'reponse' => 'Pas de planning de pâturage à jour',
                                    'categorie_id' => 8,
                                ),
                                1395 => 
                                array (
                                    'id' => 1402,
                                    'alerte_id' => 5051,
                                    'question' => 'La pâture est-elle intégrée dans une alternance fauche-pâture ? ',
                                    'reponse' => 'Pas d’association pâturage / fauche',
                                    'categorie_id' => 8,
                                ),
                                1396 => 
                                array (
                                    'id' => 1403,
                                    'alerte_id' => 5051,
                                    'question' => 'Les prairies entrent-elles dans la rotation des cultures ?',
                                    'reponse' => 'Les prairies n’entrent pas dans les rotations de cultures',
                                    'categorie_id' => 8,
                                ),
                                1397 => 
                                array (
                                    'id' => 1404,
                                    'alerte_id' => 5051,
                                    'question' => 'L\'infestation fait-elle suite à un hiver doux ? ',
                                    'reponse' => 'Hiver précédent très doux',
                                    'categorie_id' => 8,
                                ),
                                1398 => 
                                array (
                                    'id' => 1405,
                                    'alerte_id' => 5051,
                                    'question' => 'Le choix de traiter collectivement est-il décider suite à des analyses coproscopiques et/ou sérologique, et répond-il à une stratégie globale de gestion parasitaire à l’échelle du troupeau ?',
                                    'reponse' => 'Pas de stratégie globale dans les choix de traitement des animaux',
                                    'categorie_id' => 8,
                                ),
                                1399 => 
                                array (
                                    'id' => 1406,
                                    'alerte_id' => 5051,
                                    'question' => 'La fréquence des traitements anthelminthiques ne favorise-t-elle pas les résistances ? ',
                                    'reponse' => 'Fréquence de traitements favorisant les résistances',
                                    'categorie_id' => 8,
                                ),
                                1400 => 
                                array (
                                    'id' => 1407,
                                    'alerte_id' => 5051,
                                    'question' => 'La race du troupeau est-elle adaptée au milieu infesté ? ',
                                    'reponse' => 'Race non adaptée à de fortes infestations parasitaires',
                                    'categorie_id' => 8,
                                ),
                                1401 => 
                                array (
                                    'id' => 1408,
                                    'alerte_id' => 5052,
                                'question' => 'La gestion du pâturage permet-elle d\'éviter le retour des animaux sur des parcelles contaminées ? (surtout pour le ténia ! > 1 an)',
                                    'reponse' => 'Fréquence de traitements favorisant les résistances',
                                    'categorie_id' => 8,
                                ),
                                1402 => 
                                array (
                                    'id' => 1409,
                                    'alerte_id' => 5052,
                                    'question' => 'Le pâturage ras < à 5 cm est-il évité ? ',
                                'reponse' => 'Pâturage trop ras (< 5cm)',
                                    'categorie_id' => 8,
                                ),
                                1403 => 
                                array (
                                    'id' => 1410,
                                    'alerte_id' => 5052,
                                    'question' => 'Y-a-t-il alternance de différentes espèces au pâturage ?',
                                    'reponse' => 'Par d’alternance possible de différentes espèces sur les mêmes pâtures',
                                    'categorie_id' => 8,
                                ),
                                1404 => 
                                array (
                                    'id' => 1411,
                                    'alerte_id' => 5052,
                                    'question' => 'Tenez-vous à jour un planning de pâturage ? ',
                                    'reponse' => 'Pas de planning de pâturage à jour',
                                    'categorie_id' => 8,
                                ),
                                1405 => 
                                array (
                                    'id' => 1412,
                                    'alerte_id' => 5052,
                                    'question' => 'La pâture est-elle intégrée dans une alternance fauche-pâture ? ',
                                    'reponse' => 'Pas d’association pâturage / fauche',
                                    'categorie_id' => 8,
                                ),
                                1406 => 
                                array (
                                    'id' => 1413,
                                    'alerte_id' => 5052,
                                    'question' => 'Les prairies entrent-elles dans la rotation des cultures ?',
                                    'reponse' => 'Les prairies n’entrent pas dans les rotations de cultures',
                                    'categorie_id' => 8,
                                ),
                                1407 => 
                                array (
                                    'id' => 1414,
                                    'alerte_id' => 5052,
                                    'question' => 'L\'infestation fait-elle suite à un hiver doux ? ',
                                    'reponse' => 'Hiver précédent très doux',
                                    'categorie_id' => 8,
                                ),
                                1408 => 
                                array (
                                    'id' => 1415,
                                    'alerte_id' => 5052,
                                    'question' => 'Le choix de traiter collectivement est-il décider suite à des analyses coproscopiques et/ou sérologique, et répond-il à une stratégie globale de gestion parasitaire à l’échelle du troupeau ?',
                                    'reponse' => 'Pas de stratégie globale dans les choix de traitement des animaux',
                                    'categorie_id' => 8,
                                ),
                                1409 => 
                                array (
                                    'id' => 1416,
                                    'alerte_id' => 5052,
                                    'question' => 'La fréquence des traitements anthelminthiques ne favorise-t-elle pas les résistances ? ',
                                    'reponse' => 'Fréquence de traitements favorisant les résistances',
                                    'categorie_id' => 8,
                                ),
                                1410 => 
                                array (
                                    'id' => 1417,
                                    'alerte_id' => 5052,
                                    'question' => 'La race du troupeau est-elle adaptée au milieu infesté ? ',
                                    'reponse' => 'Race non adaptée à de fortes infestations parasitaires',
                                    'categorie_id' => 8,
                                ),
                                1411 => 
                                array (
                                    'id' => 1418,
                                    'alerte_id' => 5053,
                                    'question' => 'Les animaux ont-ils pâturé des zones humides, notamment par nécessité en période de sécheresse ?',
                                'reponse' => 'Pâturage sur des zones humides (à cause de la sécheresse)',
                                    'categorie_id' => 8,
                                ),
                                1412 => 
                                array (
                                    'id' => 1419,
                                    'alerte_id' => 5053,
                                    'question' => 'Des accès aménagés à des points d’eau propre et potable sont-ils aménagés en quantité suffisante par rapport au nombre d’animaux ? Le débit est-il suffisant tout au long de l’année ?',
                                    'reponse' => 'Problème d’accès à de l’eau propre et potable',
                                    'categorie_id' => 8,
                                ),
                                1413 => 
                                array (
                                    'id' => 1420,
                                    'alerte_id' => 5054,
                                    'question' => 'Y-a-t-il alternance de différentes espèces au pâturage ?',
                                    'reponse' => 'Par d’alternance possible de différentes espèces sur les mêmes pâtures',
                                    'categorie_id' => 8,
                                ),
                                1414 => 
                                array (
                                    'id' => 1421,
                                    'alerte_id' => 5054,
                                'question' => 'Les animaux sont-ils maintenus sur des parcelles présentant un manque d\'herbe (sécheresse) ?',
                                    'reponse' => 'Animaux maintenus sur des parcelles présentant un manque d’herbe',
                                    'categorie_id' => 8,
                                ),
                                1415 => 
                                array (
                                    'id' => 1422,
                                    'alerte_id' => 5054,
                                    'question' => 'Historiquement, l\'infestation petite douve a déjà été présente ? ',
                                    'reponse' => 'Présence historique de petite douve',
                                    'categorie_id' => 8,
                                ),
                                1416 => 
                                array (
                                    'id' => 1423,
                                    'alerte_id' => 5055,
                                    'question' => 'L\'infestation fait-elle suite à un hiver doux ? ',
                                    'reponse' => 'Hiver précédent très doux',
                                    'categorie_id' => 8,
                                ),
                                1417 => 
                                array (
                                    'id' => 1424,
                                    'alerte_id' => 5055,
                                    'question' => 'L\'année a-t-elle été particulièrement humide et douce ? ',
                                    'reponse' => 'Année particulièrement humide et douce',
                                    'categorie_id' => 8,
                                ),
                                1418 => 
                                array (
                                    'id' => 1425,
                                    'alerte_id' => 5055,
                                    'question' => 'Y-a-t-il eu des infestations les années précédentes ? ',
                                    'reponse' => 'Infestations les années précédentes',
                                    'categorie_id' => 8,
                                ),
                                1419 => 
                                array (
                                    'id' => 1426,
                                    'alerte_id' => 5055,
                                    'question' => 'Les animaux jeunes sont-ils protégés des parcelles contaminées ? ',
                                    'reponse' => 'Les jeunes ont accès à des parcelles très contaminées',
                                    'categorie_id' => 8,
                                ),
                                1420 => 
                                array (
                                    'id' => 1427,
                                    'alerte_id' => 5055,
                                    'question' => 'Le pâturage ras < à 5 cm est-il évité ? ',
                                'reponse' => 'Pâturage trop ras (< 5cm)',
                                    'categorie_id' => 8,
                                ),
                                1421 => 
                                array (
                                    'id' => 1428,
                                    'alerte_id' => 5055,
                                    'question' => 'La pâture est-elle intégrée dans une alternance fauche-pâture ? Les prairies entrent-elles dans la rotation des cultures ? ',
                                    'reponse' => 'Les prairies n’entrent pas dans les rotations de cultures',
                                    'categorie_id' => 8,
                                ),
                                1422 => 
                                array (
                                    'id' => 1429,
                                    'alerte_id' => 5056,
                                    'question' => 'L\'environnement est-il contaminé par les coccidioses ? ',
                                    'reponse' => 'Environnement infesté par des coccidies',
                                    'categorie_id' => 8,
                                ),
                                1423 => 
                                array (
                                    'id' => 1430,
                                    'alerte_id' => 5056,
                                'question' => 'Si oui un lavage vapeur eau (>90°C) a-t-il été effectué ? ',
                                    'reponse' => 'Pas de lavage à l’eau chaude malgré un environnement infesté',
                                    'categorie_id' => 3,
                                ),
                                1424 => 
                                array (
                                    'id' => 1431,
                                    'alerte_id' => 5056,
                                'question' => 'Si oui de la prévention est-elle mise en œuvre (argile, vinaigre, etc.)',
                                    'reponse' => 'Pas de mesures préventives de coccidiose sur les agneaux',
                                    'categorie_id' => 4,
                                ),
                                1425 => 
                                array (
                                    'id' => 1432,
                                    'alerte_id' => 5056,
                                    'question' => 'La surface et le volume de bâtiment par animal sont-ils suffisants ? ',
                                    'reponse' => 'Densité animale trop importante',
                                    'categorie_id' => 2,
                                ),
                                1426 => 
                                array (
                                    'id' => 1433,
                                    'alerte_id' => 5056,
                                    'question' => 'La litière des animaux reste-t-elle sèche ? ',
                                    'reponse' => 'Litière trop humide',
                                    'categorie_id' => 2,
                                ),
                                1427 => 
                                array (
                                    'id' => 1434,
                                    'alerte_id' => 5056,
                                'question' => 'Les animaux ont-ils subis des stress importants (changement alimentaire, mise à l\'herbe, sevrage, mise en lots, etc..)',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                1428 => 
                                array (
                                    'id' => 1435,
                                    'alerte_id' => 5057,
                                'question' => 'La zone est-elle infestée par la mouche responsables de myases (Wohlfahrtia, lucilie) ? ',
                                    'reponse' => 'Zone infestée par des mouches responsables de myases',
                                    'categorie_id' => 8,
                                ),
                                1429 => 
                                array (
                                    'id' => 1436,
                                    'alerte_id' => 5057,
                                    'question' => 'Le temps consacré à la surveillance des blessures et des myases est-il suffisant ? ',
                                    'reponse' => 'Temps consacré à la surveillance des blessures insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1430 => 
                                array (
                                    'id' => 1437,
                                    'alerte_id' => 5057,
                                    'question' => 'Les arrières trains sont-ils propres ? ',
                                    'reponse' => 'Arrière-trains sales',
                                    'categorie_id' => 4,
                                ),
                                1431 => 
                                array (
                                    'id' => 1438,
                                    'alerte_id' => 5059,
                                    'question' => 'Les traitements se font-ils au coup par coup sans stratégie à l\'échelle du troupeau ? ',
                                    'reponse' => 'Traitements aux coup par coup sans stratégie à l’échelle du troupeau',
                                    'categorie_id' => 4,
                                ),
                                1432 => 
                                array (
                                    'id' => 1439,
                                    'alerte_id' => 5059,
                                    'question' => 'Les introductions d\'animaux sont-elles gérées avec mise en quarantaine et surveillance sanitaire ? ',
                                    'reponse' => 'Pas quarantaine avant introduction et de surveillance des animaux introduits',
                                    'categorie_id' => 4,
                                ),
                                1433 => 
                                array (
                                    'id' => 1440,
                                    'alerte_id' => 5059,
                                    'question' => 'Le parage est-il régulier ? ',
                                    'reponse' => 'Parage irrégulier',
                                    'categorie_id' => 4,
                                ),
                                1434 => 
                                array (
                                    'id' => 1441,
                                    'alerte_id' => 5059,
                                    'question' => 'Le parage est-il pratiqué sans saignements et en respectant les bonnes longueurs d\'onglons ? ',
                                    'reponse' => 'Parage avec saignements, onglons coupés trop courts',
                                    'categorie_id' => 4,
                                ),
                                1435 => 
                                array (
                                    'id' => 1442,
                                    'alerte_id' => 5059,
                                    'question' => 'Les agnelles sont-elles orientées vers des parcelles non infectées ? ',
                                    'reponse' => 'Pâturage des agnelles sur des parcelles infectées',
                                    'categorie_id' => 4,
                                ),
                                1436 => 
                                array (
                                    'id' => 1443,
                                    'alerte_id' => 5059,
                                    'question' => 'L\'alimentation est-elle suffisamment pourvue en minéraux et oligo-éléments ? ',
                                    'reponse' => 'Carences en minéraux et oligo-éléments',
                                    'categorie_id' => 1,
                                ),
                                1437 => 
                                array (
                                    'id' => 1444,
                                    'alerte_id' => 5059,
                                    'question' => 'L\'alimentation est-elle suffisamment pourvue de fibres de structure ? ',
                                    'reponse' => 'Alimentation trop pauvre en fibres de structure',
                                    'categorie_id' => 1,
                                ),
                                1438 => 
                                array (
                                    'id' => 1445,
                                    'alerte_id' => 5059,
                                    'question' => 'La gestion note d\'état/stade physiologique est-elle existante? ',
                                    'reponse' => 'Pas de suivi de l’état corporel',
                                    'categorie_id' => 1,
                                ),
                                1439 => 
                                array (
                                    'id' => 1446,
                                    'alerte_id' => 5059,
                                    'question' => 'Les chemins d\'accès aux pâtures sont-ils caillouteux ? ',
                                    'reponse' => 'Chemins d’accès au pâturage caillouteux',
                                    'categorie_id' => 4,
                                ),
                                1440 => 
                                array (
                                    'id' => 1447,
                                    'alerte_id' => 5059,
                                    'question' => 'Le milieu de vie des brebis est-il suffisant sec et sain ? ',
                                    'reponse' => 'Le milieu de vie des brebis est trop humide',
                                    'categorie_id' => 2,
                                ),
                                1441 => 
                                array (
                                    'id' => 1448,
                                    'alerte_id' => 5059,
                                    'question' => 'Les litières des bergeries sont-elles régulièrement curées ? ',
                                    'reponse' => 'La litière n’est pas curée assez souvent',
                                    'categorie_id' => 2,
                                ),
                                1442 => 
                                array (
                                    'id' => 1449,
                                    'alerte_id' => 5059,
                                    'question' => 'La race choisie est-elle particulièrement sensible des pieds ? ',
                                    'reponse' => 'Race particulièrement sensible des pieds',
                                    'categorie_id' => 6,
                                ),
                                1443 => 
                                array (
                                    'id' => 1450,
                                    'alerte_id' => 5059,
                                    'question' => 'Avez-vous une politique de réforme concernant les brebis récidivistes ? ',
                                    'reponse' => 'Par de politique de réforme des brebis récidivistes',
                                    'categorie_id' => 4,
                                ),
                                1444 => 
                                array (
                                    'id' => 1451,
                                    'alerte_id' => 5060,
                                    'question' => 'Les traitements se font-ils au coup par coup sans stratégie à l\'échelle du troupeau ? ',
                                    'reponse' => 'Traitements aux coup par coup sans stratégie à l’échelle du troupeau',
                                    'categorie_id' => 4,
                                ),
                                1445 => 
                                array (
                                    'id' => 1452,
                                    'alerte_id' => 5060,
                                    'question' => 'Les introductions d\'animaux sont-elles gérées avec mise en quarantaine et surveillance sanitaire ? ',
                                    'reponse' => 'Pas quarantaine avant introduction et de surveillance des animaux introduits',
                                    'categorie_id' => 4,
                                ),
                                1446 => 
                                array (
                                    'id' => 1453,
                                    'alerte_id' => 5060,
                                    'question' => 'Le parage est-il régulier ? ',
                                    'reponse' => 'Parage irrégulier',
                                    'categorie_id' => 4,
                                ),
                                1447 => 
                                array (
                                    'id' => 1454,
                                    'alerte_id' => 5060,
                                    'question' => 'Le parage est-il pratiqué sans saignements et en respectant les bonnes longueurs d\'onglons ? ',
                                    'reponse' => 'Parage avec saignements, onglons coupés trop courts',
                                    'categorie_id' => 4,
                                ),
                                1448 => 
                                array (
                                    'id' => 1455,
                                    'alerte_id' => 5060,
                                    'question' => 'L\'alimentation est-elle suffisamment pourvue en minéraux et oligo-éléments ? ',
                                    'reponse' => 'Carences en minéraux et oligo-éléments',
                                    'categorie_id' => 1,
                                ),
                                1449 => 
                                array (
                                    'id' => 1456,
                                    'alerte_id' => 5060,
                                    'question' => 'L\'alimentation est-elle suffisamment pourvue de fibres de structure ? ',
                                    'reponse' => 'Alimentation trop pauvre en fibres de structure',
                                    'categorie_id' => 1,
                                ),
                                1450 => 
                                array (
                                    'id' => 1457,
                                    'alerte_id' => 5060,
                                    'question' => 'La gestion note d\'état/stade physiologique est-elle existante? ',
                                    'reponse' => 'Pas de suivi de l’état corporel',
                                    'categorie_id' => 1,
                                ),
                                1451 => 
                                array (
                                    'id' => 1458,
                                    'alerte_id' => 5060,
                                    'question' => 'Les chemins d\'accès aux pâtures sont-ils caillouteux ? ',
                                    'reponse' => 'Chemins d’accès au pâturage caillouteux',
                                    'categorie_id' => 4,
                                ),
                                1452 => 
                                array (
                                    'id' => 1459,
                                    'alerte_id' => 5060,
                                    'question' => 'Le milieu de vie des brebis est-il suffisant sec et sain ? ',
                                    'reponse' => 'Le milieu de vie des brebis est trop humide',
                                    'categorie_id' => 2,
                                ),
                                1453 => 
                                array (
                                    'id' => 1460,
                                    'alerte_id' => 5060,
                                    'question' => 'Les litières des bergeries sont-elles régulièrement curées ? ',
                                    'reponse' => 'La litière n’est pas curée assez souvent',
                                    'categorie_id' => 2,
                                ),
                                1454 => 
                                array (
                                    'id' => 1461,
                                    'alerte_id' => 5061,
                                    'question' => 'La surveillance permet-elle d\'intervenir dans des délais courts après apparition des premiers signes de boiteries ?',
                                    'reponse' => 'Interventions trop tardives sur les brebis boiteuses',
                                    'categorie_id' => 4,
                                ),
                                1455 => 
                                array (
                                    'id' => 1462,
                                    'alerte_id' => 5062,
                                    'question' => 'La fréquence des pédiluves est-elle suffisante ? ',
                                    'reponse' => 'Pédiluves trop peu fréquents',
                                    'categorie_id' => 4,
                                ),
                                1456 => 
                                array (
                                    'id' => 1463,
                                    'alerte_id' => 5062,
                                    'question' => 'Les doses des produits sont-elles respectées ? ',
                                    'reponse' => 'Mauvais respect des doses de produits',
                                    'categorie_id' => 4,
                                ),
                                1457 => 
                                array (
                                    'id' => 1464,
                                    'alerte_id' => 5062,
                                    'question' => 'La durée du bain est-elle suffisante ?',
                                    'reponse' => 'Durée du bain trop courte',
                                    'categorie_id' => 4,
                                ),
                                1458 => 
                                array (
                                    'id' => 1941,
                                    'alerte_id' => 2000,
                                    'question' => 'La ration est-elle bien équilibrée en énergie/azote ?',
                                    'reponse' => 'ration déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                1459 => 
                                array (
                                    'id' => 1942,
                                    'alerte_id' => 2000,
                                    'question' => 'Toutes les animaux ont-ils accès à l’auge en même temps ?',
                                    'reponse' => 'accès à l\'auge inégal',
                                    'categorie_id' => 2,
                                ),
                                1460 => 
                                array (
                                    'id' => 1943,
                                    'alerte_id' => 2000,
                                    'question' => 'La distribution de la ration est-elle bien répartie sur toute la longueur de l’auge?',
                                    'reponse' => 'ration non distribuée sur toute la longueur de l\'auge',
                                    'categorie_id' => 2,
                                ),
                                1461 => 
                                array (
                                    'id' => 1944,
                                    'alerte_id' => 2000,
                                    'question' => 'Les primipares sont-elles complémentées différemment des multipares ?',
                                    'reponse' => 'primipares complémentées comme les multipares',
                                    'categorie_id' => 1,
                                ),
                                1462 => 
                                array (
                                    'id' => 1945,
                                    'alerte_id' => 2000,
                                    'question' => 'L\'accès à l\'eau est-il compétitif entre les animaux ?',
                                    'reponse' => 'accès compétitif à l\'eau',
                                    'categorie_id' => 2,
                                ),
                                1463 => 
                                array (
                                    'id' => 1946,
                                    'alerte_id' => 2000,
                                    'question' => 'Le bâtiment est-il équipé de cornadis ?',
                                    'reponse' => 'pas de cornadis',
                                    'categorie_id' => 2,
                                ),
                                1464 => 
                                array (
                                    'id' => 1947,
                                    'alerte_id' => 2000,
                                    'question' => 'Le nombre de cornadis est-il suffisant ? +10%/Nb d\'animaux présents ?',
                                    'reponse' => 'nombre de cornadis insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1465 => 
                                array (
                                    'id' => 1948,
                                    'alerte_id' => 2000,
                                    'question' => 'Y-a-t-il un mélange d\'animaux sans corne et d\'animaux cornus ?',
                                    'reponse' => 'mélange d\'animaux cornus et sans cornes',
                                    'categorie_id' => 4,
                                ),
                                1466 => 
                                array (
                                    'id' => 1949,
                                    'alerte_id' => 2000,
                                    'question' => 'Y-a-t-il eu des recherches parasitaires récemment ?',
                                    'reponse' => 'pas de recherche de parasites récentes',
                                    'categorie_id' => 8,
                                ),
                                1467 => 
                                array (
                                    'id' => 1950,
                                    'alerte_id' => 2001,
                                    'question' => 'La ration est-elle bien équilibrée en énergie/azote ?',
                                    'reponse' => 'ration déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                1468 => 
                                array (
                                    'id' => 1951,
                                    'alerte_id' => 2001,
                                    'question' => 'Toutes les animaux ont-ils accès à l’auge en même temps ?',
                                    'reponse' => 'accès à l\'auge inégal',
                                    'categorie_id' => 2,
                                ),
                                1469 => 
                                array (
                                    'id' => 1952,
                                    'alerte_id' => 2001,
                                    'question' => 'La distribution de la ration est-elle bien répartie sur toute la longueur de l’auge?',
                                    'reponse' => 'ration non distribuée sur toute la longueur de l\'auge',
                                    'categorie_id' => 2,
                                ),
                                1470 => 
                                array (
                                    'id' => 1953,
                                    'alerte_id' => 2001,
                                    'question' => 'Les primipares sont-elles complémentées différemment des multipares ?',
                                    'reponse' => 'primipares complémentées comme les multipares',
                                    'categorie_id' => 1,
                                ),
                                1471 => 
                                array (
                                    'id' => 1954,
                                    'alerte_id' => 2001,
                                    'question' => 'Existe-t-il une ration spécifique de début de lactation ?',
                                    'reponse' => 'pas de ration spécifique au début de lactation',
                                    'categorie_id' => 1,
                                ),
                                1472 => 
                                array (
                                    'id' => 1955,
                                    'alerte_id' => 2001,
                                    'question' => 'Les vêlages sont-ils étalés ?',
                                    'reponse' => 'vêlages groupés',
                                    'categorie_id' => 4,
                                ),
                                1473 => 
                                array (
                                    'id' => 1956,
                                    'alerte_id' => 2001,
                                    'question' => 'Y-a-t-il eu des recherches parasitaires récemment ?',
                                    'reponse' => 'pas de recherche de parasites récentes',
                                    'categorie_id' => 8,
                                ),
                                1474 => 
                                array (
                                    'id' => 1957,
                                    'alerte_id' => 2002,
                                    'question' => 'La ration est-elle bien équilibrée en énergie/azote ?',
                                    'reponse' => 'ration déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                1475 => 
                                array (
                                    'id' => 1958,
                                    'alerte_id' => 2002,
                                    'question' => 'Toutes les animaux ont-ils accès à l’auge en même temps ?',
                                    'reponse' => 'accès à l\'auge inégal',
                                    'categorie_id' => 2,
                                ),
                                1476 => 
                                array (
                                    'id' => 1959,
                                    'alerte_id' => 2002,
                                    'question' => 'La distribution de la ration est-elle bien répartie sur toute la longueur de l’auge?',
                                    'reponse' => 'ration non distribuée sur toute la longueur de l\'auge',
                                    'categorie_id' => 2,
                                ),
                                1477 => 
                                array (
                                    'id' => 1960,
                                    'alerte_id' => 2002,
                                    'question' => 'La ration est-elle consommée 50% le jour et 50% la nuit ?',
                                    'reponse' => 'ration non consommée 50% le jour et 50% la nuit',
                                    'categorie_id' => 1,
                                ),
                                1478 => 
                                array (
                                    'id' => 1961,
                                    'alerte_id' => 2002,
                                    'question' => 'La ration du matin est-elle identique à la ration du soir ?',
                                    'reponse' => 'ration du matin et du soir identiques',
                                    'categorie_id' => 1,
                                ),
                                1479 => 
                                array (
                                    'id' => 1962,
                                    'alerte_id' => 2002,
                                    'question' => 'Les primipares sont-elles complémentées différemment des multipares ?',
                                    'reponse' => 'primipares complémentées comme les multipares',
                                    'categorie_id' => 1,
                                ),
                                1480 => 
                                array (
                                    'id' => 1963,
                                    'alerte_id' => 2002,
                                    'question' => 'L\'accès à l\'eau est-il compétitif entre les animaux ?',
                                    'reponse' => 'accès compétitif à l\'eau',
                                    'categorie_id' => 2,
                                ),
                                1481 => 
                                array (
                                    'id' => 1964,
                                    'alerte_id' => 2002,
                                    'question' => 'Le bâtiment est-il équipé de cornadis ?',
                                    'reponse' => 'pas de cornadis',
                                    'categorie_id' => 2,
                                ),
                                1482 => 
                                array (
                                    'id' => 1965,
                                    'alerte_id' => 2002,
                                    'question' => 'Le nombre de cornadis est-il suffisant ? +10%/Nb d\'animaux présents ?',
                                    'reponse' => 'nombre de cornadis insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1483 => 
                                array (
                                    'id' => 1966,
                                    'alerte_id' => 2002,
                                    'question' => 'Les vêlages sont-ils étalés ?',
                                    'reponse' => 'vêlages groupés',
                                    'categorie_id' => 4,
                                ),
                                1484 => 
                                array (
                                    'id' => 1967,
                                    'alerte_id' => 2002,
                                    'question' => 'Y-a-t-il un mélange d\'animaux sans corne et d\'animaux cornus ?',
                                    'reponse' => 'mélange d\'animaux cornus et sans cornes',
                                    'categorie_id' => 4,
                                ),
                                1485 => 
                                array (
                                    'id' => 1968,
                                    'alerte_id' => 2002,
                                    'question' => 'Y-a-t-il eu des recherches parasitaires récemment ?',
                                    'reponse' => 'pas de recherche de parasites récentes',
                                    'categorie_id' => 8,
                                ),
                                1486 => 
                                array (
                                    'id' => 1969,
                                    'alerte_id' => 2003,
                                    'question' => 'La ration est-elle bien équilibrée en énergie/azote ?',
                                    'reponse' => 'ration déséquilibrée',
                                    'categorie_id' => 1,
                                ),
                                1487 => 
                                array (
                                    'id' => 1970,
                                    'alerte_id' => 2003,
                                    'question' => 'La ration est-elle consommée 50% le jour et 50% la nuit ?',
                                    'reponse' => 'ration non consommée 50% le jour et 50% la nuit',
                                    'categorie_id' => 1,
                                ),
                                1488 => 
                                array (
                                    'id' => 1971,
                                    'alerte_id' => 2003,
                                    'question' => 'La ration du matin est-elle identique à la ration du soir ?',
                                    'reponse' => 'ration du matin et du soir identiques',
                                    'categorie_id' => 1,
                                ),
                                1489 => 
                                array (
                                    'id' => 1972,
                                    'alerte_id' => 2003,
                                    'question' => 'Les primipares sont-elles complémentées différemment des multipares ?',
                                    'reponse' => 'primipares complémentées comme les multipares',
                                    'categorie_id' => 1,
                                ),
                                1490 => 
                                array (
                                    'id' => 1973,
                                    'alerte_id' => 2003,
                                    'question' => 'Existe-t-il une ration spécifique de début de lactation ?',
                                    'reponse' => 'pas de ration spécifique au début de lactation',
                                    'categorie_id' => 1,
                                ),
                                1491 => 
                                array (
                                    'id' => 1974,
                                    'alerte_id' => 2003,
                                    'question' => 'L\'accès à l\'eau est-il compétitif entre les animaux ?',
                                    'reponse' => 'accès compétitif à l\'eau',
                                    'categorie_id' => 2,
                                ),
                                1492 => 
                                array (
                                    'id' => 1975,
                                    'alerte_id' => 2003,
                                'question' => 'Les bouses sont-elles hétérogènes (instabilité du pH du rumen) ? ',
                                    'reponse' => 'bouses hétérogènes',
                                    'categorie_id' => 1,
                                ),
                                1493 => 
                                array (
                                    'id' => 1976,
                                    'alerte_id' => 2003,
                                    'question' => 'Les vêlages sont-ils étalés ?',
                                    'reponse' => 'vêlages groupés',
                                    'categorie_id' => 4,
                                ),
                                1494 => 
                                array (
                                    'id' => 1977,
                                    'alerte_id' => 2003,
                                    'question' => 'Y-a-t-il eu des recherches parasitaires récemment ?',
                                    'reponse' => 'pas de recherche de parasites récentes',
                                    'categorie_id' => 8,
                                ),
                                1495 => 
                                array (
                                    'id' => 1978,
                                    'alerte_id' => 2004,
                                    'question' => 'Le bâtiment est-il trop chargé ?',
                                    'reponse' => 'bâtiment trop chargé',
                                    'categorie_id' => 2,
                                ),
                                1496 => 
                                array (
                                    'id' => 1979,
                                    'alerte_id' => 2004,
                                    'question' => 'La quantité de paille est-elle suffisante ?',
                                    'reponse' => 'quantité de paille insuffisante',
                                    'categorie_id' => 2,
                                ),
                                1497 => 
                                array (
                                    'id' => 1980,
                                    'alerte_id' => 2004,
                                    'question' => 'Les logettes sont-elles bien réglées et permettent des mouvements lever/coucher aisés pour les vaches ?',
                                    'reponse' => 'logettes mal réglées, mouvements lever/coucher difficiles',
                                    'categorie_id' => 2,
                                ),
                                1498 => 
                                array (
                                    'id' => 1981,
                                    'alerte_id' => 2004,
                                    'question' => 'La fréquence de curage est-elle suffisante ?',
                                    'reponse' => 'fréquence de curage insuffisante',
                                    'categorie_id' => 2,
                                ),
                                1499 => 
                                array (
                                    'id' => 1982,
                                    'alerte_id' => 2004,
                                    'question' => 'Le bâtiment montre-t-il des signes d\'une mauvaise ventilation ?',
                                    'reponse' => 'mauvaise ventilation',
                                    'categorie_id' => 2,
                                ),
                                1500 => 
                                array (
                                    'id' => 1983,
                                    'alerte_id' => 2004,
                                'question' => 'Le bâtiment présente-t-il des excès d\'humidité importants (sol non stabilisé et non drainé, fuite d\'eau, ...) ?',
                                    'reponse' => 'excès d\'humidité',
                                    'categorie_id' => 2,
                                ),
                                1501 => 
                                array (
                                    'id' => 1984,
                                    'alerte_id' => 2004,
                                    'question' => 'L\'orientation du bâtiment est-elle correcte ?',
                                    'reponse' => 'mauvaise orientation du bâtiment',
                                    'categorie_id' => 2,
                                ),
                                1502 => 
                                array (
                                    'id' => 1985,
                                    'alerte_id' => 2004,
                                    'question' => 'Le bardage du bâtiment est-il suffisant ?',
                                    'reponse' => 'bardage du bâtiment insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1503 => 
                                array (
                                    'id' => 1986,
                                    'alerte_id' => 2004,
                                    'question' => 'La ration est-elle trop riche en amidon ?',
                                    'reponse' => 'ration trop riche en amidon',
                                    'categorie_id' => 1,
                                ),
                                1504 => 
                                array (
                                    'id' => 1987,
                                    'alerte_id' => 2004,
                                'question' => 'La ration trop riche en azote soluble (ex : fourrages verts)?',
                                    'reponse' => 'ration trop riche en azote soluble',
                                    'categorie_id' => 1,
                                ),
                                1505 => 
                                array (
                                    'id' => 1988,
                                    'alerte_id' => 2004,
                                    'question' => 'Les animaux présentent-ils les symptômes de la grippe ? Diarrhées avec fièvre ?',
                                    'reponse' => 'symptômes de grippe',
                                    'categorie_id' => 5,
                                ),
                                1506 => 
                                array (
                                    'id' => 1989,
                                    'alerte_id' => 2004,
                                    'question' => 'Les animaux sont-ils susceptibles d\'être parasités ?',
                                    'reponse' => 'animaux susceptibles d\'être parasités',
                                    'categorie_id' => 8,
                                ),
                                1507 => 
                                array (
                                    'id' => 1990,
                                    'alerte_id' => 2005,
                                'question' => 'La surface mise à disposition des animaux est-elle suffisante ? (surtout pour des animaux cornus)',
                                    'reponse' => 'surface mise à disposition insuffisante',
                                    'categorie_id' => 2,
                                ),
                                1508 => 
                                array (
                                    'id' => 1991,
                                    'alerte_id' => 2005,
                                    'question' => 'Est-ce que la nourriture est accessible à tous les animaux en même temps de manière équitable ?',
                                    'reponse' => 'accès à la nourriture inéquitable',
                                    'categorie_id' => 1,
                                ),
                                1509 => 
                                array (
                                    'id' => 1992,
                                    'alerte_id' => 2005,
                                    'question' => 'Le nombre de cornadis est-il suffisant ? +10%/Nb d\'animaux présents ?',
                                    'reponse' => 'nombre de cornadis insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1510 => 
                                array (
                                    'id' => 1993,
                                    'alerte_id' => 2005,
                                    'question' => 'L\'absence de cornadis entre-rail des conflits à l\'auge ?',
                                    'reponse' => 'conflits à l\'auge dus à l\'absence de cornadis',
                                    'categorie_id' => 2,
                                ),
                                1511 => 
                                array (
                                    'id' => 1994,
                                    'alerte_id' => 2005,
                                'question' => 'Le bâtiment est-il protégé des perturbations électromagnétiques ? (ligne haute tension, poste de clôture, mauvaise terre électrique, faille terrestre, rivière souterraine, …)',
                                    'reponse' => 'bâtiment non protégé des perturbations électromagnétiques',
                                    'categorie_id' => 2,
                                ),
                                1512 => 
                                array (
                                    'id' => 1995,
                                    'alerte_id' => 2005,
                                'question' => 'La circulation des animaux est-elle fluide ou le bâtiment présente-t-il des zones d’étranglement ? (positionnement des abreuvoirs, couloirs de circulation, ...)',
                                    'reponse' => 'circulation non fluide des animaux, zones d\'étranglement',
                                    'categorie_id' => 2,
                                ),
                                1513 => 
                                array (
                                    'id' => 1996,
                                    'alerte_id' => 2005,
                                    'question' => 'Le lieu de vie des animaux présente-t-il des objets coupants, contondants ?',
                                    'reponse' => 'objets coupants dans le lieu de vie des animaux',
                                    'categorie_id' => 2,
                                ),
                                1514 => 
                                array (
                                    'id' => 1997,
                                    'alerte_id' => 2005,
                                    'question' => 'La ration est-elle déséquilibrée ou présente-t-elle un excès d\'énergie ?',
                                    'reponse' => 'ration déséquilibrée ou en excès d\'énergie',
                                    'categorie_id' => 1,
                                ),
                                1515 => 
                                array (
                                    'id' => 1998,
                                    'alerte_id' => 2005,
                                    'question' => 'Certains animaux du troupeau sont-ils de souche d\'animaux nerveux, agressifs ?',
                                    'reponse' => 'animaux de souche d\'animaux nerveux/agressifs',
                                    'categorie_id' => 6,
                                ),
                                1516 => 
                                array (
                                    'id' => 1999,
                                    'alerte_id' => 2005,
                                    'question' => 'Le troupeau présente-t-il une coexistence de vaches avec ou sans corne ?',
                                    'reponse' => 'coexistence de vaches avec et sans corne',
                                    'categorie_id' => 4,
                                ),
                                1517 => 
                                array (
                                    'id' => 2000,
                                    'alerte_id' => 2005,
                                    'question' => 'Les techniques d\'élevage permettent-elles la mise en place d\'une bonne relation homme/animal ?',
                                    'reponse' => 'techniques d\'élevage qui ne favorisent pas une bonne relation homme/animal',
                                    'categorie_id' => 4,
                                ),
                                1518 => 
                                array (
                                    'id' => 2001,
                                    'alerte_id' => 2005,
                                    'question' => 'Les animaux sont-ils confrontés à des éléments perturbateurs : chiens, tiers, géobiologie?',
                                'reponse' => 'éléments perturbateurs ( chiens, tiers, géobiologie)',
                                    'categorie_id' => 7,
                                ),
                                1519 => 
                                array (
                                    'id' => 2002,
                                    'alerte_id' => 2006,
                                'question' => 'La surface mise à disposition des animaux est-elle suffisante ? (surtout pour des animaux cornus)',
                                    'reponse' => 'surface mise à disposition insuffisante',
                                    'categorie_id' => 2,
                                ),
                                1520 => 
                                array (
                                    'id' => 2003,
                                    'alerte_id' => 2006,
                                    'question' => 'Est-ce que la nourriture est accessible à tous les animaux en même temps de manière équitable ?',
                                    'reponse' => 'accès à la nourriture inéquitable',
                                    'categorie_id' => 2,
                                ),
                                1521 => 
                                array (
                                    'id' => 2004,
                                    'alerte_id' => 2006,
                                    'question' => 'Le nombre de cornadis est-il suffisant ? +10%/Nb d\'animaux présents ?',
                                    'reponse' => 'nombre de cornadis insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1522 => 
                                array (
                                    'id' => 2005,
                                    'alerte_id' => 2006,
                                    'question' => 'L\'absence de cornadis entre-rail des conflits à l\'auge ?',
                                    'reponse' => 'conflits à l\'auge dus à l\'absence de cornadis',
                                    'categorie_id' => 2,
                                ),
                                1523 => 
                                array (
                                    'id' => 2006,
                                    'alerte_id' => 2006,
                                'question' => 'Le bâtiment est-il protégé des perturbations électromagnétiques ? (ligne haute tension, poste de clôture, mauvaise terre électrique, faille terrestre, rivière souterraine, …)',
                                    'reponse' => 'bâtiment non protégé des perturbations électromagnétiques',
                                    'categorie_id' => 2,
                                ),
                                1524 => 
                                array (
                                    'id' => 2007,
                                    'alerte_id' => 2006,
                                'question' => 'La circulation des animaux est-elle fluide ou le bâtiment présente-t-il des zones d’étranglement ? (positionnement des abreuvoirs, couloirs de circulation, …)',
                                    'reponse' => 'circulation non fluide des animaux, zones d\'étranglement',
                                    'categorie_id' => 2,
                                ),
                                1525 => 
                                array (
                                    'id' => 2008,
                                    'alerte_id' => 2006,
                                    'question' => 'Le lieu de vie des animaux présente-t-il des objets coupants, contondants ?',
                                    'reponse' => 'objets coupants dans le lieu de vie des animaux',
                                    'categorie_id' => 2,
                                ),
                                1526 => 
                                array (
                                    'id' => 2009,
                                    'alerte_id' => 2006,
                                    'question' => 'La ration est-elle déséquilibrée ou présente-t-elle un excès d\'énergie ?',
                                    'reponse' => 'ration déséquilibrée ou en excès d\'énergie',
                                    'categorie_id' => 1,
                                ),
                                1527 => 
                                array (
                                    'id' => 2010,
                                    'alerte_id' => 2006,
                                    'question' => 'Certains animaux du troupeau sont-ils de souche d\'animaux nerveux, agressifs ?',
                                    'reponse' => 'animaux de souche d\'animaux nerveux/agressifs',
                                    'categorie_id' => 6,
                                ),
                                1528 => 
                                array (
                                    'id' => 2011,
                                    'alerte_id' => 2006,
                                    'question' => 'Le troupeau présente-t-il une coexistence de vaches avec ou sans corne ?',
                                    'reponse' => 'coexistence de vaches avec et sans corne',
                                    'categorie_id' => 4,
                                ),
                                1529 => 
                                array (
                                    'id' => 2012,
                                    'alerte_id' => 2006,
                                    'question' => 'Les techniques d\'élevage permettent-elles la mise en place d\'une bonne relation homme/animal ?',
                                    'reponse' => 'techniques d\'élevage qui ne favorisent pas une bonne relation homme/animal',
                                    'categorie_id' => 4,
                                ),
                                1530 => 
                                array (
                                    'id' => 2013,
                                    'alerte_id' => 2006,
                                    'question' => 'Les animaux sont-ils confrontés à des éléments perturbateurs : chiens, tiers, géobiologie?',
                                'reponse' => 'éléments perturbateurs ( chiens, tiers, géobiologie)',
                                    'categorie_id' => 7,
                                ),
                                1531 => 
                                array (
                                    'id' => 2014,
                                    'alerte_id' => 2007,
                                'question' => 'La ration est-elle équilibrée et saine ? (sans risque d’entérotoxémie ou intoxication)',
                                    'reponse' => 'ration déséquilibrée et/ou non saine',
                                    'categorie_id' => 1,
                                ),
                                1532 => 
                                array (
                                    'id' => 2015,
                                    'alerte_id' => 2007,
                                    'question' => 'Les transitions alimentaires sont-elles bien respectées ?',
                                    'reponse' => 'pas ou peu de transition alimentaire',
                                    'categorie_id' => 1,
                                ),
                                1533 => 
                                array (
                                    'id' => 2016,
                                    'alerte_id' => 2007,
                                'question' => 'La ration contient-elle des plantes toxiques dans les fourrages récoltés ou pâturés ? (ex : Datura)',
                                    'reponse' => 'plantes toxiques dans les fourrages récoltés ou pâturés',
                                    'categorie_id' => 1,
                                ),
                                1534 => 
                                array (
                                    'id' => 2017,
                                    'alerte_id' => 2007,
                                    'question' => 'La coccidiose est-elle maîtrisée ?',
                                    'reponse' => 'coccidiose non maîtrisée',
                                    'categorie_id' => 8,
                                ),
                                1535 => 
                                array (
                                    'id' => 2018,
                                    'alerte_id' => 2007,
                                    'question' => 'L\'abreuvement est-il suffisant et accessible à tous les animaux ?',
                                    'reponse' => 'abreuvement insuffisant, accès à tous les animaux insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1536 => 
                                array (
                                    'id' => 2019,
                                    'alerte_id' => 2007,
                                    'question' => 'Les circuits électriques sont-ils en bon état ou source d\'électrocution ?',
                                    'reponse' => 'circuits électriques non sécurisés, risque d\'électrocution',
                                    'categorie_id' => 2,
                                ),
                                1537 => 
                                array (
                                    'id' => 2020,
                                    'alerte_id' => 2007,
                                    'question' => 'Le bâtiment est-il doté d\'un parafoudre et d\'une prise de terre électrique performante ?',
                                    'reponse' => 'pas de parafoudre ou prise de terre',
                                    'categorie_id' => 2,
                                ),
                                1538 => 
                                array (
                                    'id' => 2021,
                                    'alerte_id' => 2007,
                                    'question' => 'Le bâtiment présente-t-il des courants d\'air, source de maladies ?',
                                    'reponse' => 'courants d\'air',
                                    'categorie_id' => 2,
                                ),
                                1539 => 
                                array (
                                    'id' => 2022,
                                    'alerte_id' => 2007,
                                    'question' => 'Les animaux présentent-ils les symptômes de la grippe ? Diarrhées avec température ? Des problèmes respiratoires ? Toux ? Jetages ?',
                                    'reponse' => 'symptômes de grippe',
                                    'categorie_id' => 5,
                                ),
                                1540 => 
                                array (
                                    'id' => 2023,
                                    'alerte_id' => 2007,
                                'question' => 'Avez-vous fait autopsier des morts à votre vétérinaire pour rechercher la cause ? (corps étranger, caillette, pathologie, …)',
                                    'reponse' => 'pas d\'autopsie des morts',
                                    'categorie_id' => 5,
                                ),
                                1541 => 
                                array (
                                    'id' => 2024,
                                    'alerte_id' => 2008,
                                'question' => 'La ration est-elle équilibrée et saine ? (sans risque d’entérotoxémie ou intoxication)',
                                    'reponse' => 'ration déséquilibrée et/ou non saine',
                                    'categorie_id' => 1,
                                ),
                                1542 => 
                                array (
                                    'id' => 2025,
                                    'alerte_id' => 2008,
                                    'question' => 'Les transitions alimentaires sont-elles bien respectées ?',
                                    'reponse' => 'pas ou peu de transition alimentaire',
                                    'categorie_id' => 1,
                                ),
                                1543 => 
                                array (
                                    'id' => 2026,
                                    'alerte_id' => 2008,
                                'question' => 'La ration contient-elle des plantes toxiques dans les fourrages récoltés ou pâturés ? (ex : Datura)',
                                    'reponse' => 'plantes toxiques dans les fourrages récoltés ou pâturés',
                                    'categorie_id' => 1,
                                ),
                                1544 => 
                                array (
                                    'id' => 2027,
                                    'alerte_id' => 2008,
                                    'question' => 'La ration présente-t-elle suffisamment de fibres ?',
                                    'reponse' => 'Manque de fibres dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1545 => 
                                array (
                                    'id' => 2028,
                                    'alerte_id' => 2008,
                                    'question' => 'La ration est équilibrée en minéral et particulièrement autour de la mise bas ? ',
                                'reponse' => 'Déséquilibre minéral (surtout autour de la mise-bas)',
                                    'categorie_id' => 1,
                                ),
                                1546 => 
                                array (
                                    'id' => 2029,
                                    'alerte_id' => 2008,
                                    'question' => 'L\'abreuvement est-il suffisant et accessible à tous les animaux ?',
                                    'reponse' => 'abreuvement insuffisant, accès à tous les animaux insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1547 => 
                                array (
                                    'id' => 2030,
                                    'alerte_id' => 2008,
                                    'question' => 'Les circuits électriques sont-ils en bon état ou source d\'électrocution ?',
                                    'reponse' => 'circuits électriques non sécurisés, risque d\'électrocution',
                                    'categorie_id' => 2,
                                ),
                                1548 => 
                                array (
                                    'id' => 2031,
                                    'alerte_id' => 2008,
                                    'question' => 'Le bâtiment est-il doté d\'un parafoudre et d\'une prise de terre électrique performante ?',
                                    'reponse' => 'pas de parafoudre ou prise de terre',
                                    'categorie_id' => 2,
                                ),
                                1549 => 
                                array (
                                    'id' => 2032,
                                    'alerte_id' => 2008,
                                    'question' => 'Le bâtiment présente-t-il des courants d\'air, source de maladies ?',
                                    'reponse' => 'Présence de courants d\'air',
                                    'categorie_id' => 2,
                                ),
                                1550 => 
                                array (
                                    'id' => 2033,
                                    'alerte_id' => 2008,
                                    'question' => 'La mortalité fait-elle suite à des maladies mal soignées',
                                    'reponse' => 'Mortalité suite à des maladies mal soignées',
                                    'categorie_id' => 5,
                                ),
                                1551 => 
                                array (
                                    'id' => 2034,
                                    'alerte_id' => 2008,
                                    'question' => 'La mortalité fait-elle suite à du parasitisme',
                                    'reponse' => 'Mortalité suite de parasitisme',
                                    'categorie_id' => 8,
                                ),
                                1552 => 
                                array (
                                    'id' => 2035,
                                    'alerte_id' => 2008,
                                'question' => 'Avez-vous fait autopsier des morts à votre vétérinaire pour rechercher la cause ? (corps étranger, caillette, pathologie, …)',
                                    'reponse' => 'pas d\'autopsie des morts',
                                    'categorie_id' => 5,
                                ),
                                1553 => 
                                array (
                                    'id' => 2036,
                                    'alerte_id' => 2009,
                                    'question' => 'Le renouvellement du troupeau est-il adapté pour permettre une bonne sélection des réformes ?',
                                    'reponse' => 'renouvellement du troupeau ne permettant pas une bonne sélection des réformes',
                                    'categorie_id' => 4,
                                ),
                                1554 => 
                                array (
                                    'id' => 2037,
                                    'alerte_id' => 2010,
                                    'question' => 'Avez-vous mis en place des pratiques préventives permettant de conserver un bon équilibre de santé ?',
                                    'reponse' => 'pas de prévention pour conserver un bon équilibre de santé',
                                    'categorie_id' => 4,
                                ),
                                1555 => 
                                array (
                                    'id' => 2038,
                                    'alerte_id' => 2018,
                                'question' => 'L’état corporel des génisses est-il adapté au vêlage ? (trop grasses ou trop maigres)',
                                    'reponse' => 'état corporel des génisses pas adapté au vêlage',
                                    'categorie_id' => 1,
                                ),
                                1556 => 
                                array (
                                    'id' => 2039,
                                    'alerte_id' => 2018,
                                    'question' => 'Utilisez-vous un taureau produisant des petits veaux?',
                                    'reponse' => 'taureau produisant des veaux à gros gabarit',
                                    'categorie_id' => 6,
                                ),
                                1557 => 
                                array (
                                    'id' => 2040,
                                    'alerte_id' => 2018,
                                    'question' => 'En IA, les accouplements sont-ils orientés sur la facilité de naissance ?',
                                    'reponse' => 'en IA, accouplements non raisonnés sur la facilité de naissance',
                                    'categorie_id' => 6,
                                ),
                                1558 => 
                                array (
                                    'id' => 2041,
                                    'alerte_id' => 2018,
                                    'question' => 'Le critère facilité de vêlage des mères et largeur de bassin sont-ils des critères de sélection des génisses de renouvellement ?',
                                    'reponse' => 'facilité de vêlage des mères et largeur de bassin non pris en compte lors du renouvellement',
                                    'categorie_id' => 6,
                                ),
                                1559 => 
                                array (
                                    'id' => 2042,
                                    'alerte_id' => 2017,
                                'question' => 'L’état corporel des vaches est-il adapté au vêlage ? (trop grasses ou trop maigres)',
                                    'reponse' => 'état corporel des génisses pas adapté au vêlage',
                                    'categorie_id' => 1,
                                ),
                                1560 => 
                                array (
                                    'id' => 2043,
                                    'alerte_id' => 2017,
                                    'question' => 'La supplémentation en minéraux, vitamines et oligo-éléments est-elle correcte?',
                                    'reponse' => 'supplémentation en minéraux, vitamines et oligo-éléments insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1561 => 
                                array (
                                    'id' => 2044,
                                    'alerte_id' => 2017,
                                    'question' => 'Utilisez-vous un taureau qui fait des petits veaux ?',
                                    'reponse' => 'taureau produisant des veaux à gros gabarit',
                                    'categorie_id' => 6,
                                ),
                                1562 => 
                                array (
                                    'id' => 2045,
                                    'alerte_id' => 2017,
                                'question' => 'Les génisses ont-elles subies des lésions vaginales ou interventions (épisiotomie) lors du vêlage ?',
                                    'reponse' => 'lésions vaginales ou interventions sur génisses lors du vêlage',
                                    'categorie_id' => 5,
                                ),
                                1563 => 
                                array (
                                    'id' => 2046,
                                    'alerte_id' => 2011,
                                    'question' => 'L\'apport alimentaire au cours de la 1ére année de vie est-il suffisant?',
                                    'reponse' => 'apport alimentaire insuffisant au cours de la 1ère année de vie',
                                    'categorie_id' => 1,
                                ),
                                1564 => 
                                array (
                                    'id' => 2047,
                                    'alerte_id' => 2011,
                                    'question' => 'Les pâtures destinées aux génisses sont-elles pâturées uniquement par des animaux jeunes ?',
                                    'reponse' => 'pâtures pas exclusivement réservées aux génisses',
                                    'categorie_id' => 1,
                                ),
                                1565 => 
                                array (
                                    'id' => 2048,
                                    'alerte_id' => 2011,
                                    'question' => 'Le parasitisme des génisses est-il maîtrisé tout au long de leur période de croissance ?',
                                    'reponse' => 'parasitisme mal maîtrisé au cours de la croissance des génisses',
                                    'categorie_id' => 8,
                                ),
                                1566 => 
                                array (
                                    'id' => 2049,
                                    'alerte_id' => 2011,
                                    'question' => 'Observez-vous une fréquence élevée de troubles respiratoires au cours de la 1ére année de vie?',
                                    'reponse' => 'troubles respiratoires élevés la première année de vie',
                                    'categorie_id' => 5,
                                ),
                                1567 => 
                                array (
                                    'id' => 2050,
                                    'alerte_id' => 2019,
                                    'question' => 'Assurez-vous des conditions d\'hygiène au vêlage ?',
                                    'reponse' => 'Conditions d’hygiène au vêlage insuffisantes',
                                    'categorie_id' => 3,
                                ),
                                1568 => 
                                array (
                                    'id' => 2051,
                                    'alerte_id' => 2019,
                                    'question' => 'Intervenez-vous fréquemment lors des vêlages ? Si oui, utilisez-vous des gants de fouille ?',
                                    'reponse' => 'Interventions fréquente au vêlage et problème d’hygiène',
                                    'categorie_id' => 4,
                                ),
                                1569 => 
                                array (
                                    'id' => 2052,
                                    'alerte_id' => 2019,
                                    'question' => 'Utilisez-vous un taureau qui fait des petits veaux?',
                                    'reponse' => 'taureau produisant des veaux à gros gabarit',
                                    'categorie_id' => 6,
                                ),
                                1570 => 
                                array (
                                    'id' => 2053,
                                    'alerte_id' => 2019,
                                    'question' => 'La supplémentation en minéraux, vitamines et oligo-éléments est-elle correcte?',
                                    'reponse' => 'manque d\'apports en minéraux, vitamines, oligoéléments en fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                1571 => 
                                array (
                                    'id' => 2054,
                                    'alerte_id' => 2013,
                                'question' => 'L\'état corporel est-il correct au moment de la mise à la reproduction? (pas trop grasse ou trop maigre)',
                                    'reponse' => 'état corporel inadapté à la mise à la reproduction',
                                    'categorie_id' => 1,
                                ),
                                1572 => 
                                array (
                                    'id' => 2055,
                                    'alerte_id' => 2013,
                                    'question' => 'L’évolution de la Note d’état corporel est-elle positive au moment de l’IA ?',
                                    'reponse' => 'évolution de la NEC négative au moment de l\'IA',
                                    'categorie_id' => 1,
                                ),
                                1573 => 
                                array (
                                    'id' => 2056,
                                    'alerte_id' => 2013,
                                'question' => 'L’équilibre de ration (y compris azote soluble) est-il adéquat ?',
                                    'reponse' => 'équilibre de la ration non adéquat',
                                    'categorie_id' => 1,
                                ),
                                1574 => 
                                array (
                                    'id' => 2057,
                                    'alerte_id' => 2013,
                                'question' => 'La dimension du logement, la densité des animaux (m²/animal) permettent-elles une bonne expression des chaleurs?',
                                    'reponse' => 'expression des chaleurs freinée par la densité des animaux et la dimension du logement',
                                    'categorie_id' => 2,
                                ),
                                1575 => 
                                array (
                                    'id' => 2058,
                                    'alerte_id' => 2013,
                                    'question' => 'La qualité des sols permet-elle une bonne expression des chaleurs?',
                                    'reponse' => 'expression des chaleurs limitée par la qualité des sols',
                                    'categorie_id' => 2,
                                ),
                                1576 => 
                                array (
                                    'id' => 2059,
                                    'alerte_id' => 2013,
                                'question' => 'Observez-vous une fréquence élevée de maladies juste après vêlage? (dystocie/métrites/…)',
                                    'reponse' => 'fréquence élevée de maladies juste après vêlage',
                                    'categorie_id' => 5,
                                ),
                                1577 => 
                                array (
                                    'id' => 2060,
                                    'alerte_id' => 2013,
                                'question' => 'Assurez-vous un contrôle des maladies qui pourraient gêner l\'expression des chaleurs (ex : boiteries)?',
                                    'reponse' => 'pas de contrôle des maladies pouvant gêner l\'expression des chaleurs',
                                    'categorie_id' => 5,
                                ),
                                1578 => 
                                array (
                                    'id' => 2061,
                                    'alerte_id' => 2013,
                                    'question' => 'Possédez-vous un protocole de détection des chaleurs commun entre les différents intervenants de l\'élevage?',
                                    'reponse' => 'absence de protocole de détection des chaleurs commun à tous les intervenants de l\'élevage',
                                    'categorie_id' => 4,
                                ),
                                1579 => 
                                array (
                                    'id' => 2062,
                                    'alerte_id' => 2013,
                                    'question' => 'Possédez-vous un protocole de détection des chaleurs efficaces y compris quand elles sont au pâturage?',
                                    'reponse' => 'absence de protocole de détection des chaleurs lors du pâturage',
                                    'categorie_id' => 4,
                                ),
                                1580 => 
                                array (
                                    'id' => 2063,
                                    'alerte_id' => 2013,
                                    'question' => 'Le délai de remise à la reproduction ou la saison de vêlage correspondent-ils aux objectifs de l\'éleveur?',
                                    'reponse' => 'délai de remise à la reproduction ou saison de vêlage pas adaptés aux objectifs de l\'éleveur',
                                    'categorie_id' => 4,
                                ),
                                1581 => 
                                array (
                                    'id' => 2064,
                                    'alerte_id' => 2021,
                                    'question' => 'Réalisez-vous un contrôle de l\'état corporel avant le tarissement et en ajustant la ration des vaches taries si besoin pour éviter qu\'elles ne soient trop grasses au vêlage ?',
                                    'reponse' => 'pas de contrôle de l\'état corporel avant tarissement',
                                    'categorie_id' => 1,
                                ),
                                1582 => 
                                array (
                                    'id' => 2065,
                                    'alerte_id' => 2021,
                                    'question' => 'Limitez-vous la teneur en calcium de la ration avant vêlage pour stimuler son absorption intestinale et la réabsorption osseuse après vêlage?',
                                    'reponse' => 'pas de limitation de la teneur en calcium dans la ration avant vêlage',
                                    'categorie_id' => 1,
                                ),
                                1583 => 
                                array (
                                    'id' => 2066,
                                    'alerte_id' => 2021,
                                    'question' => 'Limitez-vous la teneur en phosphore de la ration des vaches taries ?',
                                    'reponse' => 'pas de limitation de la teneur en phosphore des vaches taries',
                                    'categorie_id' => 1,
                                ),
                                1584 => 
                                array (
                                    'id' => 2067,
                                    'alerte_id' => 2021,
                                'question' => 'Assurez-vous un apport en Magnésium suffisant avant le vêlage afin de favorise la mobilisation du calcium des os? (Ou faites-vous attention à la BACA de la ration des taries)',
                                    'reponse' => 'apport en magnésium insuffisant avant vêlage',
                                    'categorie_id' => 1,
                                ),
                                1585 => 
                                array (
                                    'id' => 2068,
                                    'alerte_id' => 2021,
                                    'question' => 'Prévenez-vous la carence en calcium, avec un apport dans la ration juste après vêlage pour pallier son exportation importante?',
                                    'reponse' => 'pas d\'apport en calcium dans la ration après vêlage pour prévenir sa carence',
                                    'categorie_id' => 1,
                                ),
                                1586 => 
                                array (
                                    'id' => 2069,
                                    'alerte_id' => 2021,
                                    'question' => 'Assurez-vous un apport correct en chlorure et soufre dans les 15 jours précédant le vêlage?',
                                    'reponse' => 'apport insuffisant en chlorure et soufre 15jours avant le vêlage',
                                    'categorie_id' => 1,
                                ),
                                1587 => 
                                array (
                                    'id' => 2070,
                                    'alerte_id' => 2021,
                                    'question' => 'Le nombre de cornadis est-il suffisant ? +10%/Nb d\'animaux présents ?',
                                    'reponse' => 'nombre de cornadis insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1588 => 
                                array (
                                    'id' => 2071,
                                    'alerte_id' => 2021,
                                'question' => 'Les vaches taries ont-elles toutes leurs aptitudes fonctionnelles pour un accès à la table d\'alimentation (boiteries, acidose…)?',
                                    'reponse' => 'inaptitudes fonctionnelles des taries, limitant l\'accès à l\'auge',
                                    'categorie_id' => 5,
                                ),
                                1589 => 
                                array (
                                    'id' => 2072,
                                    'alerte_id' => 2022,
                                    'question' => 'L\'apport et l\'ingestion de fibres efficaces sont-ils suffisants ?',
                                    'reponse' => 'apport et ingestion de fibres efficaces insuffisants',
                                    'categorie_id' => 1,
                                ),
                                1590 => 
                                array (
                                    'id' => 2073,
                                    'alerte_id' => 2022,
                                    'question' => 'L\'apport de concentrés par repas n\'est-il pas trop important?',
                                    'reponse' => 'apport de concentré trop important',
                                    'categorie_id' => 1,
                                ),
                                1591 => 
                                array (
                                    'id' => 2074,
                                    'alerte_id' => 2022,
                                'question' => 'Le stock de calcium a-t-il pu se reconstituer avant le tarissement, (voir fièvre de lait).',
                                'reponse' => 'stock de calcium avant tarissement insuffisant (non reconstitué)',
                                    'categorie_id' => 1,
                                ),
                                1592 => 
                                array (
                                    'id' => 2075,
                                    'alerte_id' => 2022,
                                    'question' => 'Les vaches peuvent-elles marcher tranquillement, sans stress, à l\'extérieur et à l\'intérieur?',
                                    'reponse' => 'stress à l\'intérieur ou l’extérieur lorsque les vaches marchent',
                                    'categorie_id' => 2,
                                ),
                                1593 => 
                                array (
                                    'id' => 2076,
                                    'alerte_id' => 2022,
                                    'question' => 'Les filles des vaches ayant eu un déplacement de caillette sont-elles gardées pour le renouvellement ?',
                                    'reponse' => 'filles de vaches ayant eu un déplacement de caillette gardées pour le renouvellement',
                                    'categorie_id' => 5,
                                ),
                                1594 => 
                                array (
                                    'id' => 2077,
                                    'alerte_id' => 2023,
                                    'question' => 'Observez-vous des animaux dont l\'état corporel est trop élevé au moment du vêlage?',
                                    'reponse' => 'certains animaux dont l\'état corporel est trop élevé au moment du vêlage',
                                    'categorie_id' => 1,
                                ),
                                1595 => 
                                array (
                                    'id' => 2078,
                                    'alerte_id' => 2023,
                                'question' => 'Observez-vous des phénomènes de stress ou des problèmes de santé qui peuvent limiter l\'accès à l\'alimentation (boiteries, acidose…)?',
                                    'reponse' => 'stress ou problèmes de santé limitant l\'accès à l\'alimentation',
                                    'categorie_id' => 5,
                                ),
                                1596 => 
                                array (
                                    'id' => 2079,
                                    'alerte_id' => 2023,
                                    'question' => 'En cas de changement de fourrage dans la ration de base assurez-vous une transition alimentaire ?',
                                    'reponse' => 'absence de transition alimentaire si changement de fourrage dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1597 => 
                                array (
                                    'id' => 2080,
                                    'alerte_id' => 2023,
                                    'question' => 'L\'apport de concentré dans la ration est-il réalisé de façon progressive en début de lactation ?',
                                    'reponse' => 'apport de concentré non progressif en début de lactation',
                                    'categorie_id' => 1,
                                ),
                                1598 => 
                                array (
                                    'id' => 2081,
                                    'alerte_id' => 2023,
                                'question' => 'La couverture énergétique est-elle suffisante (fourrages et concentrés) jusqu\'au pic de lactation?',
                                    'reponse' => 'couverture énergétique insuffisante jusqu\'au pic de lactation',
                                    'categorie_id' => 1,
                                ),
                                1599 => 
                                array (
                                    'id' => 2082,
                                    'alerte_id' => 2023,
                                'question' => 'Les fourrages utilisés sont-ils de mauvaise qualité ? (appétence, récolte dans de mauvaises conditions, mauvaise conservation)',
                                    'reponse' => 'mauvaise qualité des fourrages',
                                    'categorie_id' => 1,
                                ),
                                1600 => 
                                array (
                                    'id' => 2083,
                                    'alerte_id' => 2023,
                                    'question' => 'Observez-vous des refus à l’auge ou la quantité de nourriture distribuée est-il trop limité ?',
                                    'reponse' => 'quantité distribuée insuffisante ou en excès',
                                    'categorie_id' => 1,
                                ),
                                1601 => 
                                array (
                                    'id' => 2084,
                                    'alerte_id' => 2023,
                                    'question' => 'La ration présente-elle des carences marquées en minéraux ?',
                                    'reponse' => 'carences en minéraux',
                                    'categorie_id' => 1,
                                ),
                                1602 => 
                                array (
                                    'id' => 2085,
                                    'alerte_id' => 2023,
                                    'question' => 'Le nombre de cornadis est-il suffisant ? +10%/Nb d\'animaux présents ?',
                                    'reponse' => 'nombre de cornadis insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1603 => 
                                array (
                                    'id' => 2086,
                                    'alerte_id' => 2024,
                                    'question' => 'Observez-vous des animaux dont l\'état corporel est trop élevé au moment du vêlage?',
                                    'reponse' => 'certains animaux dont l\'état corporel est trop élevé au moment du vêlage',
                                    'categorie_id' => 1,
                                ),
                                1604 => 
                                array (
                                    'id' => 2087,
                                    'alerte_id' => 2024,
                                'question' => 'Observez-vous des phénomènes de stress ou des problèmes de santé qui peuvent limiter l\'accès à l\'alimentation (boiteries, acidose…)?',
                                    'reponse' => 'stress ou problèmes de santé limitant l\'accès à l\'alimentation',
                                    'categorie_id' => 5,
                                ),
                                1605 => 
                                array (
                                    'id' => 2088,
                                    'alerte_id' => 2024,
                                    'question' => 'En cas de changement de fourrage dans la ration de base assurez-vous une transition alimentaire ?',
                                    'reponse' => 'absence de transition alimentaire si changement de fourrage dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1606 => 
                                array (
                                    'id' => 2089,
                                    'alerte_id' => 2024,
                                    'question' => 'L\'apport de concentré dans la ration est-il réalisé de façon progressive en début de lactation ?',
                                    'reponse' => 'apport de concentré non progressif en début de lactation',
                                    'categorie_id' => 1,
                                ),
                                1607 => 
                                array (
                                    'id' => 2090,
                                    'alerte_id' => 2024,
                                'question' => 'La couverture énergétique est-elle suffisante (fourrages et concentrés) jusqu\'au pic de lactation?',
                                    'reponse' => 'couverture énergétique insuffisante jusqu\'au pic de lactation',
                                    'categorie_id' => 1,
                                ),
                                1608 => 
                                array (
                                    'id' => 2091,
                                    'alerte_id' => 2024,
                                'question' => 'Les fourrages utilisés sont-ils de mauvaise qualité ? (appétence, récolte dans de mauvaises conditions, mauvaise conservation)',
                                    'reponse' => 'mauvaise qualité des fourrages',
                                    'categorie_id' => 1,
                                ),
                                1609 => 
                                array (
                                    'id' => 2092,
                                    'alerte_id' => 2024,
                                    'question' => 'Observez-vous des refus à l’auge ou la quantité de nourriture distribuée est-il trop limité ?',
                                    'reponse' => 'quantité distribuée insuffisante ou en excès',
                                    'categorie_id' => 1,
                                ),
                                1610 => 
                                array (
                                    'id' => 2093,
                                    'alerte_id' => 2024,
                                    'question' => 'La ration présente-elle des carences marquées en minéraux ?',
                                    'reponse' => 'carences en minéraux',
                                    'categorie_id' => 1,
                                ),
                                1611 => 
                                array (
                                    'id' => 2094,
                                    'alerte_id' => 2024,
                                    'question' => 'Le nombre de cornadis est-il suffisant ? +10%/Nb d\'animaux présents ?',
                                    'reponse' => 'nombre de cornadis insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1612 => 
                                array (
                                    'id' => 2095,
                                    'alerte_id' => 2025,
                                    'question' => 'Apportez-vous préventivement du magnésium avant et après les premiers jours de sortie au pâturage ?',
                                    'reponse' => 'pas d\'apport de magnésium à la sortie au pâturage',
                                    'categorie_id' => 1,
                                ),
                                1613 => 
                                array (
                                    'id' => 2096,
                                    'alerte_id' => 2025,
                                    'question' => 'Y a-t-il eu une mauvaise transition alimentaire entre la ration hivernale et printanière ?',
                                    'reponse' => 'mauvaise transition alimentaire entre rations hivernales et printanières',
                                    'categorie_id' => 1,
                                ),
                                1614 => 
                                array (
                                    'id' => 2097,
                                    'alerte_id' => 2025,
                                'question' => 'Evitez-vous l\'utilisation des parcelles chargées en herbe jeune comme aliment unique (en particulier les jeunes prairies temporaires de graminées)?',
                                    'reponse' => 'parcelles d\'herbe jeune comme aliment unique',
                                    'categorie_id' => 1,
                                ),
                                1615 => 
                                array (
                                    'id' => 2098,
                                    'alerte_id' => 2025,
                                'question' => 'Evitez-vous le pâturage si conditions climatiques sont défavorables? (les jours froids et pluvieux ou utilisation de parcelles abritées)',
                                    'reponse' => 'pâturage même si conditions climatiques défavorables',
                                    'categorie_id' => 1,
                                ),
                                1616 => 
                                array (
                                    'id' => 2099,
                                    'alerte_id' => 2026,
                                    'question' => 'Y a-t’il eu une mauvaise transition alimentaire entre la période sèche et la période de lactation ?',
                                    'reponse' => 'mauvaise transition alimentaire entre période sèche et période de lactation',
                                    'categorie_id' => 1,
                                ),
                                1617 => 
                                array (
                                    'id' => 2100,
                                    'alerte_id' => 2026,
                                    'question' => 'Distribuez-vous un foin fibreux en tête de repas pour sécuriser la digestion ruminale ?',
                                    'reponse' => 'pas de foin fibreux en tête',
                                    'categorie_id' => 1,
                                ),
                                1618 => 
                                array (
                                    'id' => 2101,
                                    'alerte_id' => 2026,
                                    'question' => 'Les concentrés sont-ils composés d’amidon à dégradation lente ?',
                                    'reponse' => 'concentrés composés d\'amidon à dégradation rapide',
                                    'categorie_id' => 1,
                                ),
                                1619 => 
                                array (
                                    'id' => 2102,
                                    'alerte_id' => 2026,
                                    'question' => 'La ration est-elle consommée 50% le jour et 50% la nuit ?',
                                    'reponse' => 'ration non consommée 50% le jour et 50% la nuit',
                                    'categorie_id' => 1,
                                ),
                                1620 => 
                                array (
                                    'id' => 2103,
                                    'alerte_id' => 2026,
                                    'question' => 'La ration du matin est-elle identique à la ration du soir en quantité et en qualité ?',
                                    'reponse' => 'ration du matin et du soir identiques',
                                    'categorie_id' => 1,
                                ),
                                1621 => 
                                array (
                                    'id' => 2104,
                                    'alerte_id' => 2026,
                                    'question' => 'L\'apport de concentré dans la ration est-il réalisé de façon progressive ?',
                                    'reponse' => 'apport de concentré non progressif',
                                    'categorie_id' => 1,
                                ),
                                1622 => 
                                array (
                                    'id' => 2105,
                                    'alerte_id' => 2026,
                                    'question' => 'La ration consommée est-elle riche en glucides facilement fermentescibles ?',
                                    'reponse' => 'ration riche en glucides facilement fermentescibles',
                                    'categorie_id' => 1,
                                ),
                                1623 => 
                                array (
                                    'id' => 2106,
                                    'alerte_id' => 2026,
                                'question' => 'La ration consommée est-elle pauvre en fibres efficaces pour stimuler la rumination et donc la salivation? ? (manque de brins longs rigides et piquants)',
                                    'reponse' => 'ration pauvre en fibres efficaces',
                                    'categorie_id' => 1,
                                ),
                                1624 => 
                                array (
                                    'id' => 2107,
                                    'alerte_id' => 2026,
                                    'question' => 'La distribution des concentrés est-elle fractionnée et s\'accompagne-t-elle de fourrages grossiers?',
                                    'reponse' => 'distribution de concentrés non fractionnée et sans fourrage grossier',
                                    'categorie_id' => 1,
                                ),
                                1625 => 
                                array (
                                    'id' => 2108,
                                    'alerte_id' => 2026,
                                    'question' => 'En cas de changement de fourrage dans la ration de base assurez-vous une transition alimentaire de 3 semaines ?',
                                    'reponse' => 'pas ou peu de transition alimentaire si changement de fourrage dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1626 => 
                                array (
                                    'id' => 2109,
                                    'alerte_id' => 2026,
                                    'question' => 'Mettez-vous à disposition des vaches des pierres de sel favorisant la salivation?',
                                    'reponse' => 'pas de pierres de sel à disposition',
                                    'categorie_id' => 1,
                                ),
                                1627 => 
                                array (
                                    'id' => 2110,
                                    'alerte_id' => 2027,
                                    'question' => 'Y a-t’il eu une mauvaise transition alimentaire entre la période sèche et la période de lactation ?',
                                    'reponse' => 'mauvaise transition alimentaire entre période sèche et période de lactation',
                                    'categorie_id' => 1,
                                ),
                                1628 => 
                                array (
                                    'id' => 2111,
                                    'alerte_id' => 2027,
                                    'question' => 'Distribuez-vous un foin fibreux en tête de repas pour sécuriser la digestion ruminale ?',
                                    'reponse' => 'pas de foin fibreux en tête',
                                    'categorie_id' => 1,
                                ),
                                1629 => 
                                array (
                                    'id' => 2112,
                                    'alerte_id' => 2027,
                                    'question' => 'Les concentrés sont-ils composés d’amidon à dégradation lente ?',
                                    'reponse' => 'concentrés composés d\'amidon à dégradation rapide',
                                    'categorie_id' => 1,
                                ),
                                1630 => 
                                array (
                                    'id' => 2113,
                                    'alerte_id' => 2027,
                                    'question' => 'La ration est-elle consommée 50% le jour et 50% la nuit ?',
                                    'reponse' => 'ration non consommée 50% le jour et 50% la nuit',
                                    'categorie_id' => 1,
                                ),
                                1631 => 
                                array (
                                    'id' => 2114,
                                    'alerte_id' => 2027,
                                    'question' => 'La ration du matin est-elle identique à la ration du soir en quantité et en qualité ?',
                                    'reponse' => 'ration du matin et du soir identiques',
                                    'categorie_id' => 1,
                                ),
                                1632 => 
                                array (
                                    'id' => 2115,
                                    'alerte_id' => 2027,
                                    'question' => 'L\'apport de concentré dans la ration est-il réalisé de façon progressive ?',
                                    'reponse' => 'apport de concentré non progressif',
                                    'categorie_id' => 1,
                                ),
                                1633 => 
                                array (
                                    'id' => 2116,
                                    'alerte_id' => 2027,
                                    'question' => 'La ration consommée est-elle riche en glucides facilement fermentescibles ?',
                                    'reponse' => 'ration riche en glucides facilement fermentescibles',
                                    'categorie_id' => 1,
                                ),
                                1634 => 
                                array (
                                    'id' => 2117,
                                    'alerte_id' => 2027,
                                'question' => 'La ration consommée est-elle pauvre en fibres efficaces pour stimuler la rumination et donc la salivation? ? (manque de brins longs rigides et piquants)',
                                    'reponse' => 'ration pauvre en fibres efficaces',
                                    'categorie_id' => 1,
                                ),
                                1635 => 
                                array (
                                    'id' => 2118,
                                    'alerte_id' => 2027,
                                    'question' => 'La distribution des concentrés est-elle fractionnée et s\'accompagne-t-elle de fourrages grossiers?',
                                    'reponse' => 'distribution de concentrés non fractionnée et sans fourrage grossier',
                                    'categorie_id' => 1,
                                ),
                                1636 => 
                                array (
                                    'id' => 2119,
                                    'alerte_id' => 2027,
                                    'question' => 'En cas de changement de fourrage dans la ration de base assurez-vous une transition alimentaire de 3 semaines ?',
                                    'reponse' => 'pas ou peu de transition alimentaire si changement de fourrage dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1637 => 
                                array (
                                    'id' => 2120,
                                    'alerte_id' => 2027,
                                    'question' => 'Mettez-vous à disposition des vaches des pierres de sel favorisant la salivation?',
                                    'reponse' => 'pas de pierres de sel à disposition',
                                    'categorie_id' => 1,
                                ),
                                1638 => 
                                array (
                                    'id' => 2121,
                                    'alerte_id' => 2029,
                                    'question' => 'La ration présente-t-elle un excès d’azote ?',
                                    'reponse' => 'excès d\'azote dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1639 => 
                                array (
                                    'id' => 2122,
                                    'alerte_id' => 2029,
                                    'question' => 'La ration présent-t-elle un déficit en énergie ?',
                                    'reponse' => 'déficit en énergie dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1640 => 
                                array (
                                    'id' => 2123,
                                    'alerte_id' => 2031,
                                'question' => 'Respectez-vous le protocole d’entretien régulier de la machine à traire ? (contrôle, suivi des recommandations, manchons, valves,…)',
                                    'reponse' => 'manque d\'entretien régulier de la machine à traire',
                                    'categorie_id' => 4,
                                ),
                                1641 => 
                                array (
                                    'id' => 2124,
                                    'alerte_id' => 2031,
                                    'question' => 'Changez-vous les manchons autant que nécessaire ?',
                                    'reponse' => 'manchons changés trop peu souvent',
                                    'categorie_id' => 4,
                                ),
                                1642 => 
                                array (
                                    'id' => 2125,
                                    'alerte_id' => 2031,
                                    'question' => 'L\'ambiance de traite est-elle calme et sereine ?',
                                    'reponse' => 'ambiance de traite bruyante ou stressante',
                                    'categorie_id' => 4,
                                ),
                                1643 => 
                                array (
                                    'id' => 2126,
                                    'alerte_id' => 2031,
                                'question' => 'Appliquez-vous un protocole de nettoyage et de soins particuliers en cas de blessures des mains du trayeur avant la traite ? (couverture des plaies/port de gants/…)',
                                    'reponse' => 'pas de protocole de nettoyage ou de soin si blessure des mains du trayeur avant la traite',
                                    'categorie_id' => 3,
                                ),
                                1644 => 
                                array (
                                    'id' => 2127,
                                    'alerte_id' => 2031,
                                'question' => 'Assurez-vous un bon protocole de préparation des trayons avant la traite? (lavage + désinfection avec un produit utilisable en AB + essuyage)',
                                    'reponse' => 'protocole de préparation des trayons insuffisant avant la traite',
                                    'categorie_id' => 3,
                                ),
                                1645 => 
                                array (
                                    'id' => 2128,
                                    'alerte_id' => 2030,
                                'question' => 'Avez-vous un protocole de nettoyage des mamelles à sec (ex laine de bois) permettant le respect de la flore lactique naturelle protectrice ?',
                                    'reponse' => 'pas de protocole de nettoyage à sec des mamelles',
                                    'categorie_id' => 3,
                                ),
                                1646 => 
                                array (
                                    'id' => 2129,
                                    'alerte_id' => 2030,
                                    'question' => 'Etes-vous vigilants sur la rupture du vide d’air au moment de la pose de griffe ?',
                                    'reponse' => 'au moment de la pose de la griffe, moindre vigilance accordée à la rupture du vide d\'air',
                                    'categorie_id' => 4,
                                ),
                                1647 => 
                                array (
                                    'id' => 2130,
                                    'alerte_id' => 2031,
                                    'question' => 'En fin de traite, réalisez-vous de l\'égouttage, des massages, de la sur-traite?',
                                    'reponse' => 'égouttage ou massage ou sur-traite en fin de traite',
                                    'categorie_id' => 4,
                                ),
                                1648 => 
                                array (
                                    'id' => 2131,
                                    'alerte_id' => 2030,
                                    'question' => 'Pratiquez-vous une désinfection des manchons après la traite des vaches mammiteuses ou cellulaires',
                                    'reponse' => 'pas de désinfection des manchons après la traite de vaches mammiteuses ou cellulaires',
                                    'categorie_id' => 3,
                                ),
                                1649 => 
                                array (
                                    'id' => 2132,
                                    'alerte_id' => 2031,
                                'question' => 'Possédez-vous une machine à traire bien réglée? (réglage de l\'installation et/ou réglage de la dépose automatique)',
                                    'reponse' => 'machine à traire mal réglée',
                                    'categorie_id' => 4,
                                ),
                                1650 => 
                                array (
                                    'id' => 2133,
                                    'alerte_id' => 2031,
                                    'question' => 'Réalisez-vous une désinfection des trayons après la traite? Si oui, est-elle réalisée de manière correcte?',
                                    'reponse' => 'pas de bonne désinfection des trayons après la traite',
                                    'categorie_id' => 3,
                                ),
                                1651 => 
                                array (
                                    'id' => 2134,
                                    'alerte_id' => 2031,
                                    'question' => 'Avez-vous un protocole évitant la destruction de la flore lactique naturelle protectrice ?',
                                    'reponse' => 'pas d\'attention accordée à la flore lactique protectrice lors du protocole de désinfection',
                                    'categorie_id' => 3,
                                ),
                                1652 => 
                                array (
                                    'id' => 2135,
                                    'alerte_id' => 2031,
                                    'question' => 'Appliquer vous un protocole de désinfection des griffes après la traite de chaque vache?',
                                    'reponse' => 'pas de protocole de désinfection des griffes après la traite de chaque vache',
                                    'categorie_id' => 3,
                                ),
                                1653 => 
                                array (
                                    'id' => 2136,
                                    'alerte_id' => 2031,
                                    'question' => 'Appliquer vous un protocole de nettoyage de l\'équipement de traite en fin de traite?',
                                    'reponse' => 'pas de protocole de nettoyage de l\'équipement de traite en fin de traite',
                                    'categorie_id' => 3,
                                ),
                                1654 => 
                                array (
                                    'id' => 2137,
                                    'alerte_id' => 2030,
                                'question' => 'Détenez-vous plus de 50 % de vaches à risque ? (lésions à l\'extrémité des trayons, index CEL négatif, mammites à répétition)',
                                    'reponse' => 'plus de 50% de vaches à risque',
                                    'categorie_id' => 5,
                                ),
                                1655 => 
                                array (
                                    'id' => 2138,
                                    'alerte_id' => 2030,
                                    'question' => 'Avez-vous une stratégie de réformes des vaches infectées de manière chronique, incurables ?',
                                    'reponse' => 'pas de stratégie de réforme des vaches infectées de manière chronique',
                                    'categorie_id' => 4,
                                ),
                                1656 => 
                                array (
                                    'id' => 2139,
                                    'alerte_id' => 2030,
                                'question' => 'Respectez-vous le protocole d’entretien régulier de la machine à traire ? (contrôle, suivi des recommandations, manchons, valves,…)',
                                    'reponse' => 'mauvais respect du protocole d\'entretien régulier de la machine à traire',
                                    'categorie_id' => 4,
                                ),
                                1657 => 
                                array (
                                    'id' => 2140,
                                    'alerte_id' => 2030,
                                    'question' => 'Changez-vous les manchons autant que nécessaire ?',
                                    'reponse' => 'manchons changés trop peu souvent',
                                    'categorie_id' => 4,
                                ),
                                1658 => 
                                array (
                                    'id' => 2141,
                                    'alerte_id' => 2030,
                                    'question' => 'L\'ambiance de traite est-elle calme et sereine ?',
                                    'reponse' => 'ambiance bruyante ou stressante',
                                    'categorie_id' => 4,
                                ),
                                1659 => 
                                array (
                                    'id' => 2142,
                                    'alerte_id' => 2030,
                                'question' => 'Appliquez-vous un protocole de nettoyage et de soins particuliers en cas de blessures des mains du trayeur avant la traite ? (couverture des plaies/port de gants/…)',
                                    'reponse' => 'pas de protocole de nettoyage ou de soin si blessure des mains du trayeur avant la traite',
                                    'categorie_id' => 3,
                                ),
                                1660 => 
                                array (
                                    'id' => 2143,
                                    'alerte_id' => 2030,
                                'question' => 'Assurez-vous un bon protocole de préparation des trayons avant la traite ? (lavage + essuyage des trayons avant traite)',
                                    'reponse' => 'protocole de préparation des trayons insuffisant avant la traite',
                                    'categorie_id' => 3,
                                ),
                                1661 => 
                                array (
                                    'id' => 2144,
                                    'alerte_id' => 2030,
                                    'question' => 'En fin de traite, réalisez-vous de l\'égouttage, des massages, de la sur-traite ?',
                                    'reponse' => 'égouttage ou massage ou sur-traite en fin de traite',
                                    'categorie_id' => 4,
                                ),
                                1662 => 
                                array (
                                    'id' => 2145,
                                    'alerte_id' => 2030,
                                'question' => 'Possédez-vous une machine à traire bien réglée? (réglage de l\'installation et/ou réglage de la dépose automatique)',
                                    'reponse' => 'machine à traire mal réglée',
                                    'categorie_id' => 4,
                                ),
                                1663 => 
                                array (
                                    'id' => 2146,
                                    'alerte_id' => 2031,
                                    'question' => 'Pratiquez-vous une désinfection des manchons après les vaches mammiteuses ou cellulaires ?',
                                    'reponse' => 'pas de désinfection des manchons après la traite de vaches mammiteuses ou cellulaires',
                                    'categorie_id' => 3,
                                ),
                                1664 => 
                                array (
                                    'id' => 2147,
                                    'alerte_id' => 2030,
                                    'question' => 'Réalisez-vous une désinfection des trayons après la traite? Si oui, est-elle réalisée de manière correcte?',
                                    'reponse' => 'pas de bonne désinfection des trayons après la traite',
                                    'categorie_id' => 3,
                                ),
                                1665 => 
                                array (
                                    'id' => 2148,
                                    'alerte_id' => 2030,
                                    'question' => 'Avez-vous un protocole évitant la destruction de la flore lactique naturelle protectrice ?',
                                    'reponse' => 'pas d\'attention accordée à la flore lactique protectrice lors du protocole de désinfection',
                                    'categorie_id' => 3,
                                ),
                                1666 => 
                                array (
                                    'id' => 2149,
                                    'alerte_id' => 2030,
                                    'question' => 'Appliquer-vous un protocole de désinfection des griffes après la traite de chaque vache?',
                                    'reponse' => 'pas de protocole de désinfection des griffes après la traite de chaque vache',
                                    'categorie_id' => 3,
                                ),
                                1667 => 
                                array (
                                    'id' => 2150,
                                    'alerte_id' => 2030,
                                    'question' => 'Appliquer-vous un protocole de nettoyage de l\'équipement de traite en fin de traite?',
                                    'reponse' => 'pas de protocole de nettoyage de l\'équipement de traite en fin de traite',
                                    'categorie_id' => 3,
                                ),
                                1668 => 
                                array (
                                    'id' => 2151,
                                    'alerte_id' => 2031,
                                'question' => 'La dimension du logement et la densité des animaux (m²/animal) permettent-elles à toutes les vaches de se coucher sur l\'aire de couchage?',
                                    'reponse' => 'dimension et densité des animaux insuffisantes sur l\'aire de couchage',
                                    'categorie_id' => 2,
                                ),
                                1669 => 
                                array (
                                    'id' => 2152,
                                    'alerte_id' => 2031,
                                'question' => 'L’hygiène générale du bâtiment est-il correct? (densité, paillage, nature du paillage), Réalisez-vous une désinfection du bâtiment si besoin?',
                                    'reponse' => 'hygiène du bâtiment non satisfaisante',
                                    'categorie_id' => 2,
                                ),
                                1670 => 
                                array (
                                    'id' => 2153,
                                    'alerte_id' => 2031,
                                    'question' => 'La ventilation du bâtiment est-elle correcte?',
                                    'reponse' => 'ventilation du bâtiment insuffisante',
                                    'categorie_id' => 2,
                                ),
                                1671 => 
                                array (
                                    'id' => 2154,
                                    'alerte_id' => 2031,
                                'question' => 'Observez-vous des zones de surdensité d\'animaux couchés au même endroit (autour du point d\'eau ou sous les arbres...) ?',
                                    'reponse' => 'zones de surdensité d\'animaux couchés au même endroit',
                                    'categorie_id' => 2,
                                ),
                                1672 => 
                                array (
                                    'id' => 2155,
                                    'alerte_id' => 2031,
                                    'question' => 'Entretenez-vous correctement les box de vêlage et d\'isolement?',
                                    'reponse' => 'box de vêlage et d\'isolement peu entretenus',
                                    'categorie_id' => 2,
                                ),
                                1673 => 
                                array (
                                    'id' => 2156,
                                    'alerte_id' => 2031,
                                    'question' => 'Possédez-vous un protocole afin d\'éviter que les vaches ne se couchent durant la demi-heure suivant la traite pour permettre la fermeture des sphincters de trayon ?',
                                    'reponse' => 'pas de protocole évitant aux vaches de se coucher dans la demi-heure suivant la traite',
                                    'categorie_id' => 4,
                                ),
                                1674 => 
                                array (
                                    'id' => 2157,
                                    'alerte_id' => 2031,
                                'question' => 'La qualité des sols des aires de circulation est-il correct (non glissant, non blessant)?',
                                    'reponse' => 'sols des aires de circulation glissants ou blessants',
                                    'categorie_id' => 2,
                                ),
                                1675 => 
                                array (
                                    'id' => 2158,
                                    'alerte_id' => 2032,
                                    'question' => 'Réalisez-vous une séparation les vaches taries du troupeau dès la dernière traite pour les gérer correctement ?',
                                    'reponse' => 'pas de séparation des vaches dès la dernière traite',
                                    'categorie_id' => 4,
                                ),
                                1676 => 
                                array (
                                    'id' => 2159,
                                    'alerte_id' => 2032,
                                    'question' => 'Réduisez-vous graduellement l\'apport d\'aliments riches en énergie à la fin de la lactation?',
                                    'reponse' => 'pas de réduction graduelle des aliments riches en énergie à la fin de la lactation',
                                    'categorie_id' => 1,
                                ),
                                1677 => 
                                array (
                                    'id' => 2160,
                                    'alerte_id' => 2032,
                                    'question' => 'Utilisez-vous des obturateurs de sphincters pour éviter de nouvelles contaminations lors du tarissement ?',
                                    'reponse' => 'pas d\'utilisation d\'obturateurs de sphincters',
                                    'categorie_id' => 5,
                                ),
                                1678 => 
                                array (
                                    'id' => 2161,
                                    'alerte_id' => 2032,
                                    'question' => 'L’espace dédié aux taries est-il aussi important que celui dédié aux VL ?',
                                    'reponse' => 'espace dédié aux taries insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1679 => 
                                array (
                                    'id' => 2162,
                                    'alerte_id' => 2032,
                                'question' => 'L’hygiène générale du bâtiment des taries est-il aussi bon que celui des VL ? (densité, paillage, nature du paillage), Réalisez-vous une désinfection du bâtiment si besoin?',
                                    'reponse' => 'hygiène du bâtiment des taries insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1680 => 
                                array (
                                    'id' => 2163,
                                    'alerte_id' => 2032,
                                    'question' => 'La ventilation du bâtiment est-elle correcte?',
                                    'reponse' => 'ventilation insuffisante',
                                    'categorie_id' => 2,
                                ),
                                1681 => 
                                array (
                                    'id' => 2164,
                                    'alerte_id' => 2032,
                                'question' => 'Observez-vous des zones de surdensité d\'animaux couchés au même endroit (autour du point d\'eau ou sous les arbres...) ?',
                                    'reponse' => 'zones de surdensité d\'animaux couchés au même endroit',
                                    'categorie_id' => 2,
                                ),
                                1682 => 
                                array (
                                    'id' => 2165,
                                    'alerte_id' => 2032,
                                    'question' => 'Les box de vêlage et d\'isolement sont-ils proches de l\'aire paillée?',
                                    'reponse' => 'box de vêlage et d\'isolement loin de l\'aire paillée',
                                    'categorie_id' => 2,
                                ),
                                1683 => 
                                array (
                                    'id' => 2166,
                                    'alerte_id' => 2032,
                                    'question' => 'Respectez-vous une propreté élevée dans le box de vêlage et d\'isolement?',
                                    'reponse' => 'propreté non suffisante dans le box de vêlage et d\'isolement',
                                    'categorie_id' => 3,
                                ),
                                1684 => 
                                array (
                                    'id' => 2167,
                                    'alerte_id' => 2032,
                                    'question' => 'Assurez-vous une supplémentation adéquate en minéraux et vitamines pendant la période sèche?',
                                    'reponse' => 'supplémentation insuffisante en minéraux et vitamines pendant la période sèche',
                                    'categorie_id' => 1,
                                ),
                                1685 => 
                                array (
                                    'id' => 2168,
                                    'alerte_id' => 2032,
                                    'question' => 'Repérez-vous les animaux en fin de gestation ayant des pertes de lait ?',
                                    'reponse' => 'manque de vigilance sur les animaux ayant des pertes de lait en fin de gestation',
                                    'categorie_id' => 4,
                                ),
                                1686 => 
                                array (
                                    'id' => 2169,
                                    'alerte_id' => 2032,
                                    'question' => 'Attachez-vous de l’importance à la sélection des animaux sur le critère qualité des sphincters ?',
                                    'reponse' => 'pas de sélection des animaux sur le critère qualité des sphincters',
                                    'categorie_id' => 6,
                                ),
                                1687 => 
                                array (
                                    'id' => 2170,
                                    'alerte_id' => 2032,
                                    'question' => 'Êtes-vous vigilants sur la complémentation en oligoéléments sur la fin de gestation ?',
                                    'reponse' => 'manque de vigilance sur la complémentation en oligoéléments sur la fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                1688 => 
                                array (
                                    'id' => 2171,
                                    'alerte_id' => 2032,
                                'question' => 'Détenez-vous plus de 50 % de vaches à risque (lésions à l\'extrémité des trayons, index CEL négatif, faisant des mammites souvent)',
                                    'reponse' => 'plus de 50% de vaches à risque',
                                    'categorie_id' => 5,
                                ),
                                1689 => 
                                array (
                                    'id' => 2172,
                                    'alerte_id' => 2032,
                                    'question' => 'Etes-vous vigilant au sujet de l’âge moyen du troupeau ?',
                                    'reponse' => 'manque de vigilance sur l\'âge moyen du troupeau',
                                    'categorie_id' => 4,
                                ),
                                1690 => 
                                array (
                                    'id' => 2173,
                                    'alerte_id' => 2033,
                                    'question' => 'Possédez-vous un protocole pour éviter que les génisses se tètent entre elles?',
                                    'reponse' => 'absence de protocole pour éviter que les génisses se tètent entre elles',
                                    'categorie_id' => 4,
                                ),
                                1691 => 
                                array (
                                    'id' => 2174,
                                    'alerte_id' => 2033,
                                    'question' => 'L’espace dédié aux génisses pleines est-il aussi important que celui dédié aux laitières ?',
                                    'reponse' => 'espace pour génisses pleines insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1692 => 
                                array (
                                    'id' => 2175,
                                    'alerte_id' => 2033,
                                'question' => 'L’hygiène générale du bâtiment est-il aussi bon que celui des laitières ? (densité, paillage, nature du paillage), Réalisez-vous une désinfection du bâtiment si besoin?',
                                    'reponse' => 'hygiène insuffisante du bâtiment des génisses pleines',
                                    'categorie_id' => 2,
                                ),
                                1693 => 
                                array (
                                    'id' => 2176,
                                    'alerte_id' => 2033,
                                    'question' => 'La ventilation du bâtiment est-elle correcte?',
                                    'reponse' => 'ventilation du bâtiment insuffisante',
                                    'categorie_id' => 2,
                                ),
                                1694 => 
                                array (
                                    'id' => 2177,
                                    'alerte_id' => 2033,
                                'question' => 'Observez-vous des zones de surdensité d\'animaux couchés au même endroit (autour du point d\'eau ou sous les arbres...) ?',
                                    'reponse' => 'zones de surdensité d\'animaux couchés au même endroit',
                                    'categorie_id' => 2,
                                ),
                                1695 => 
                                array (
                                    'id' => 2178,
                                    'alerte_id' => 2033,
                                    'question' => 'Les box de vêlage et d\'isolement sont-ils proche de l\'aire paillée?',
                                    'reponse' => 'box de vêlage et d\'isolement loin de l\'aire paillée',
                                    'categorie_id' => 2,
                                ),
                                1696 => 
                                array (
                                    'id' => 2179,
                                    'alerte_id' => 2033,
                                    'question' => 'Assurez-vous une supplémentation adéquate en minéraux et vitamines des génisses en fin de gestation ?',
                                    'reponse' => 'supplémentation insuffisante en minéraux et vitamines en fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                1697 => 
                                array (
                                    'id' => 2180,
                                    'alerte_id' => 2033,
                                    'question' => 'Assurez-vous une transition et progression alimentaire adaptées sur la fin de gestation/début de lactation des primipares ?',
                                    'reponse' => 'pas ou peu de transition alimentaire sur la fin de gestation/début de lactation des primipares',
                                    'categorie_id' => 1,
                                ),
                                1698 => 
                                array (
                                    'id' => 2181,
                                    'alerte_id' => 2033,
                                    'question' => 'Les primipares se couchent-elles correctement dans les logettes?',
                                    'reponse' => 'les primipares ne se couchent pas correctement dans les logettes',
                                    'categorie_id' => 2,
                                ),
                                1699 => 
                                array (
                                    'id' => 2182,
                                    'alerte_id' => 2033,
                                    'question' => 'Les primipares sont-elles battues par les vaches pour les accès à l’auge et à l’eau ?',
                                    'reponse' => 'primipares battues par les vaches pour les accès à l\'eau et à l\'auge',
                                    'categorie_id' => 2,
                                ),
                                1700 => 
                                array (
                                    'id' => 2183,
                                    'alerte_id' => 2034,
                                    'question' => 'Voir tous les volets décrits dans CCS tank élevés et prévalence élevée',
                                'reponse' => '(voir taux cellulaire élevé et/ou prévalence mammites)',
                                    'categorie_id' => 7,
                                ),
                                1701 => 
                                array (
                                    'id' => 2184,
                                    'alerte_id' => 2059,
                                    'question' => 'En cas de doute faites-vous réalisez une bactériologie individuelle pour rechercher des vaches excrétrices?',
                                    'reponse' => 'pas de bactériologie individuelle en cas de doute',
                                    'categorie_id' => 5,
                                ),
                                1702 => 
                                array (
                                    'id' => 2185,
                                    'alerte_id' => 2059,
                                    'question' => 'Réalisez-vous un nettoyage avant et une désinfection après la traite? Si oui, ces pratiques sont-elles correctement réalisées?',
                                    'reponse' => 'absence de nettoyage correcte avant ou de désinfection correcte après la traite',
                                    'categorie_id' => 3,
                                ),
                                1703 => 
                                array (
                                    'id' => 2186,
                                    'alerte_id' => 2059,
                                'question' => 'Possédez-vous une installation de traite bien conçue? (pente du lactoduc incorrecte ou diamètre de lactoduc avec engorgements possibles)',
                                    'reponse' => 'installation de traite mal conçue',
                                    'categorie_id' => 4,
                                ),
                                1704 => 
                                array (
                                    'id' => 2187,
                                    'alerte_id' => 2059,
                                    'question' => 'Possédez-vous un protocole adapté pour pallier un défaut d\'entretien, de nettoyage du matériel de traite et de l\'installation?',
                                    'reponse' => 'absence de protocole pour pallier un défaut d\'entretien ou de nettoyage de matériel de traite',
                                    'categorie_id' => 4,
                                ),
                                1705 => 
                                array (
                                    'id' => 2188,
                                    'alerte_id' => 2059,
                                'question' => 'L’hygiène générale du bâtiment est-il correct? (densité, paillage, nature du paillage), Réalisez-vous une désinfection du bâtiment si besoin?',
                                    'reponse' => 'hygiène général du bâtiment insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1706 => 
                                array (
                                    'id' => 2189,
                                    'alerte_id' => 2060,
                                'question' => 'Réalisez-vous un tri des aliments potentiellement contaminés ou des parties altérées (ensilage)?',
                                    'reponse' => 'pas de tri des aliments potentiellement contaminés',
                                    'categorie_id' => 1,
                                ),
                                1707 => 
                                array (
                                    'id' => 2190,
                                    'alerte_id' => 2060,
                                    'question' => 'Réalisez-vous un nettoyage régulier des abreuvoirs et des auges?',
                                    'reponse' => 'manque de nettoyage régulier des abreuvoirs et auges',
                                    'categorie_id' => 4,
                                ),
                                1708 => 
                                array (
                                    'id' => 2191,
                                    'alerte_id' => 2060,
                                'question' => 'L’hygiène générale du bâtiment est-il correct? (densité, paillage, nature du paillage), Réalisez-vous une désinfection du bâtiment si besoin?',
                                    'reponse' => 'hygiène général du bâtiment insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1709 => 
                                array (
                                    'id' => 2192,
                                    'alerte_id' => 2060,
                                    'question' => 'En cas de doute faites-vous réalisez une bactériologie individuelle pour rechercher des vaches excrétrices?',
                                    'reponse' => 'pas de bactériologie individuelle en cas de doute',
                                    'categorie_id' => 5,
                                ),
                                1710 => 
                                array (
                                    'id' => 2193,
                                    'alerte_id' => 2060,
                                    'question' => 'Réalisez-vous un nettoyage avant et une désinfection après la traite? Si oui, ces pratiques sont-elles correctement réalisées?',
                                    'reponse' => 'absence de nettoyage correcte avant ou de désinfection correcte après la traite',
                                    'categorie_id' => 3,
                                ),
                                1711 => 
                                array (
                                    'id' => 2194,
                                    'alerte_id' => 2060,
                                'question' => 'Possédez-vous une installation de traite bien conçue? (pente du lactoduc incorrecte ou diamètre de lactoduc avec engorgements possibles)',
                                    'reponse' => 'installation de traite mal conçue',
                                    'categorie_id' => 4,
                                ),
                                1712 => 
                                array (
                                    'id' => 2195,
                                    'alerte_id' => 2060,
                                    'question' => 'Possédez-vous un protocole adapté pour pallier un défaut d\'entretien, de nettoyage du matériel de traite et de l\'installation?',
                                    'reponse' => 'absence de protocole pour pallier un défaut d\'entretien ou de nettoyage de matériel de traite',
                                    'categorie_id' => 4,
                                ),
                                1713 => 
                                array (
                                    'id' => 2196,
                                    'alerte_id' => 2061,
                                    'question' => 'Possédez-vous un protocole adapté pour pallier un défaut d\'entretien, de nettoyage du matériel de traite et de l\'installation?',
                                    'reponse' => 'absence de protocole pour pallier un défaut d\'entretien ou de nettoyage de matériel de traite',
                                    'categorie_id' => 4,
                                ),
                                1714 => 
                                array (
                                    'id' => 2197,
                                    'alerte_id' => 2061,
                                'question' => 'L’hygiène générale du bâtiment est-il correct? (densité, paillage, nature du paillage), Réalisez-vous une désinfection du bâtiment si besoin?',
                                    'reponse' => 'hygiène général du bâtiment insuffisant',
                                    'categorie_id' => 2,
                                ),
                                1715 => 
                                array (
                                    'id' => 2198,
                                    'alerte_id' => 2061,
                                    'question' => 'Réalisez-vous un nettoyage avant et une désinfection après la traite? Si oui, ces pratiques sont-elles correctement réalisées?',
                                    'reponse' => 'absence de nettoyage correcte avant ou de désinfection correcte après la traite',
                                    'categorie_id' => 3,
                                ),
                                1716 => 
                                array (
                                    'id' => 2199,
                                    'alerte_id' => 2061,
                                    'question' => 'En cas de doute faites-vous réalisez une bactériologie individuelle pour rechercher des vaches excrétrices? - mammites cliniques ou subcliniques',
                                    'reponse' => 'pas de bactériologie individuelle en cas de doute',
                                    'categorie_id' => 5,
                                ),
                                1717 => 
                                array (
                                    'id' => 2200,
                                    'alerte_id' => 2061,
                                'question' => 'Faites-vous réalisez régulièrement un contrôle bactériologique de l\'eau? (boisson/lavage/…)',
                                    'reponse' => 'absence de contrôle bactériologique de l\'eau',
                                    'categorie_id' => 3,
                                ),
                                1718 => 
                                array (
                                    'id' => 2201,
                                    'alerte_id' => 2035,
                                    'question' => 'cf. Reproduction / vêlage difficile',
                                'reponse' => '(voir vêlages difficiles)',
                                    'categorie_id' => 7,
                                ),
                                1719 => 
                                array (
                                    'id' => 2202,
                                    'alerte_id' => 2035,
                                    'question' => 'Assurez-vous une bonne surveillance des vêlages et êtes-vous correctement équipé ?',
                                    'reponse' => 'surveillance insuffisante des vêlages, manque d\'équipement',
                                    'categorie_id' => 4,
                                ),
                                1720 => 
                                array (
                                    'id' => 2203,
                                    'alerte_id' => 2035,
                                    'question' => 'Êtes-vous équipé d\'un box de vêlage ?',
                                    'reponse' => 'absence de box de vêlage',
                                    'categorie_id' => 2,
                                ),
                                1721 => 
                                array (
                                    'id' => 2204,
                                    'alerte_id' => 2035,
                                    'question' => 'Maîtrisez-vous les techniques de réanimation à la naissance ?',
                                    'reponse' => 'techniques de réanimation à la naissance non maîtrisées',
                                    'categorie_id' => 4,
                                ),
                                1722 => 
                                array (
                                    'id' => 2205,
                                    'alerte_id' => 2036,
                                    'question' => 'Assurez-vous une surveillance biquotidienne de tous les veaux, si possible par la même personne ?',
                                    'reponse' => 'pas de surveillance biquotidienne de tous les veaux',
                                    'categorie_id' => 4,
                                ),
                                1723 => 
                                array (
                                    'id' => 2206,
                                    'alerte_id' => 2036,
                                'question' => 'Des apports minéraux, vitamines, oligoéléments (sélénium, magnésium, …) sont-ils réalisés sur les vaches en fin de gestation ?',
                                    'reponse' => 'manque d\'apports en minéraux, vitamines, oligoéléments en fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                1724 => 
                                array (
                                    'id' => 2207,
                                    'alerte_id' => 2036,
                                    'question' => 'La quantité de colostrum bue est-elle sécurisée ?',
                                    'reponse' => 'quantité de colostrum bue non sécurisée',
                                    'categorie_id' => 4,
                                ),
                                1725 => 
                                array (
                                    'id' => 2208,
                                    'alerte_id' => 2036,
                                'question' => 'Vérifiez-vous la qualité du colostrum avant de le donner au veau ? (avec un pèse colostrum ou un réfractomètre par exemple)',
                                    'reponse' => 'pas de vérification de la qualité du colostrum avant de le donner au veau',
                                    'categorie_id' => 4,
                                ),
                                1726 => 
                                array (
                                    'id' => 2209,
                                    'alerte_id' => 2036,
                                    'question' => 'Possédez-vous une banque de colostrum de qualité congelé ?',
                                    'reponse' => 'pas de banque de colostrum de qualité',
                                    'categorie_id' => 4,
                                ),
                                1727 => 
                                array (
                                    'id' => 2210,
                                    'alerte_id' => 2036,
                                    'question' => 'Le lait distribué est-il à bonne température au moment de la buvée ou tétée ?',
                                    'reponse' => 'température du lait inadaptée lors de la buvée ou tétée',
                                    'categorie_id' => 1,
                                ),
                                1728 => 
                                array (
                                    'id' => 2211,
                                    'alerte_id' => 2036,
                                    'question' => 'Le lait distribué est-il issue de vaches traitées aux antibiotiques ?',
                                    'reponse' => 'lait distribué issu de vaches traitées aux antibiotiques',
                                    'categorie_id' => 1,
                                ),
                                1729 => 
                                array (
                                    'id' => 2212,
                                    'alerte_id' => 2036,
                                    'question' => 'Respectez-vous l\'équilibre de la ration complémentaire des veaux ?',
                                    'reponse' => 'ration complémentaire des veaux non équilibrée',
                                    'categorie_id' => 1,
                                ),
                                1730 => 
                                array (
                                    'id' => 2213,
                                    'alerte_id' => 2036,
                                    'question' => 'De l’eau de boisson est-elle à disposition ?',
                                    'reponse' => 'manque d\'eau à disposition pour les veaux',
                                    'categorie_id' => 1,
                                ),
                                1731 => 
                                array (
                                    'id' => 2214,
                                    'alerte_id' => 2036,
                                'question' => 'La qualité bactériologique de l\'eau d\'abreuvement est-elle bonne et analysée régulièrement ? (si issue d’un prélèvement privé)',
                                    'reponse' => 'pas d\'analyse régulière de la qualité de l\'eau',
                                    'categorie_id' => 4,
                                ),
                                1732 => 
                                array (
                                    'id' => 2215,
                                    'alerte_id' => 2036,
                                    'question' => 'En cas d\'utilisation de la sonde à colostrum et/ou de la tétine du biberon, réalisez-vous une désinfection ?',
                                    'reponse' => 'pas de désinfection de la sonde à colostrum ou de la tétine du biberon',
                                    'categorie_id' => 3,
                                ),
                                1733 => 
                                array (
                                    'id' => 2216,
                                    'alerte_id' => 2036,
                                    'question' => 'Réalisez-vous un lavage des seaux après chaque repas, en évitant de les empiler avant qu\'ils ne soient secs?',
                                    'reponse' => 'pas de lavage des seaux après chaque repas ou mauvais séchage',
                                    'categorie_id' => 3,
                                ),
                                1734 => 
                                array (
                                    'id' => 2217,
                                    'alerte_id' => 2036,
                                    'question' => 'Réalisez-vous un nettoyage quotidien des tétines du DAL et leurs alentours?',
                                    'reponse' => 'pas de nettoyage des tétines du DAL et alentours',
                                    'categorie_id' => 3,
                                ),
                                1735 => 
                                array (
                                    'id' => 2218,
                                    'alerte_id' => 2036,
                                    'question' => 'En cas d\'achat de veaux, réalisez-vous une quarantaine, sans contact avec le reste du troupeau, tant que le statut sanitaire de ces derniers n\'est pas connu?',
                                    'reponse' => 'absence de quarantaine si achat de veaux',
                                    'categorie_id' => 4,
                                ),
                                1736 => 
                                array (
                                    'id' => 2219,
                                    'alerte_id' => 2036,
                                    'question' => 'En cas de veau malade, veillez-vous à son confort thermique et à son alimentation & hydratation?',
                                    'reponse' => 'en cas de veau malade, confort thermique, alimentation et/ou hydratation insuffisants',
                                    'categorie_id' => 4,
                                ),
                                1737 => 
                                array (
                                    'id' => 2220,
                                    'alerte_id' => 2036,
                                'question' => 'Réalisez-vous un traitement de façon précoce et adaptée (selon l\'origine de la diarrhée)?',
                                    'reponse' => 'absence de traitement précoce et adapté',
                                    'categorie_id' => 5,
                                ),
                                1738 => 
                                array (
                                    'id' => 2221,
                                    'alerte_id' => 2036,
                                    'question' => 'Disposez-vous d\'un local de vêlage curé, lavé et désinfecté entre chaque vêlage?',
                                    'reponse' => 'pas de local de vêlage, ou pas de désinfection du local entre chaque vêlage',
                                    'categorie_id' => 2,
                                ),
                                1739 => 
                                array (
                                    'id' => 2222,
                                    'alerte_id' => 2036,
                                    'question' => 'En cas de maladies contagieuses disposez-vous de cases individuelles la première semaine puis de cases collectives avec une surface adaptée?',
                                    'reponse' => 'si maladies contagieuses, pas de cases individuelles la première semaine et/ou pas de cases collectives avec surface adaptée',
                                    'categorie_id' => 2,
                                ),
                                1740 => 
                                array (
                                    'id' => 2223,
                                    'alerte_id' => 2036,
                                    'question' => 'Limitez-vous l\'écart d\'âge dans un même lot à 3 semaines-1 mois maximum ?',
                                    'reponse' => 'écart d\'âge dans un même lot > à 1 mois',
                                    'categorie_id' => 4,
                                ),
                                1741 => 
                                array (
                                    'id' => 2224,
                                    'alerte_id' => 2036,
                                    'question' => 'Réalisez-vous un curage et un nettoyage après chaque veau et/ou entre chaque lot de veaux ?',
                                    'reponse' => 'pas de curage/nettoyage entre chaque lot de veaux',
                                    'categorie_id' => 3,
                                ),
                                1742 => 
                                array (
                                    'id' => 2225,
                                    'alerte_id' => 2036,
                                    'question' => 'Effectuez-vous un vide sanitaire au moins 1 fois/an : avec curage, lavage et désinfection?',
                                    'reponse' => 'absence de vide sanitaire annuel',
                                    'categorie_id' => 3,
                                ),
                                1743 => 
                                array (
                                    'id' => 2226,
                                    'alerte_id' => 2036,
                                'question' => 'Possédez-vous plutôt des matériaux "chauds" pour les parois en contact avec les veaux (planche de bois, paille, murs de brique)?',
                                    'reponse' => 'matériaux froids pour les parois en contact avec les veaux',
                                    'categorie_id' => 2,
                                ),
                                1744 => 
                                array (
                                    'id' => 2227,
                                    'alerte_id' => 2036,
                                    'question' => 'Assurez-vous une bonne hygiène des box à veaux ?',
                                    'reponse' => 'hygiène insuffisante des box à veaux',
                                    'categorie_id' => 3,
                                ),
                                1745 => 
                                array (
                                    'id' => 2228,
                                    'alerte_id' => 2036,
                                    'question' => 'Respecter vous les protocoles de soins prescrits par votre vétérinaire lors d’un traitement ?',
                                    'reponse' => 'non respect des protocoles de soins prescrits par le vétérinaire',
                                    'categorie_id' => 5,
                                ),
                                1746 => 
                                array (
                                    'id' => 2229,
                                    'alerte_id' => 2036,
                                    'question' => 'Le bâtiment est-il bien ventilé et sain ?',
                                    'reponse' => 'bâtiment mal ventilé, ambiance pas saine',
                                    'categorie_id' => 2,
                                ),
                                1747 => 
                                array (
                                    'id' => 2230,
                                    'alerte_id' => 2037,
                                    'question' => 'Assurez-vous une surveillance biquotidienne de tous les veaux, si possible par la même personne ?',
                                    'reponse' => 'pas de surveillance biquotidienne de tous les veaux',
                                    'categorie_id' => 4,
                                ),
                                1748 => 
                                array (
                                    'id' => 2231,
                                    'alerte_id' => 2037,
                                'question' => 'Des apports minéraux, vitamines, oligoéléments (sélénium, magnésium, …) sont-ils réalisés sur les vaches en fin de gestation ?',
                                    'reponse' => 'manque d\'apports en minéraux, vitamines, oligoéléments en fin de gestation',
                                    'categorie_id' => 1,
                                ),
                                1749 => 
                                array (
                                    'id' => 2232,
                                    'alerte_id' => 2037,
                                    'question' => 'La quantité de colostrum bue est-elle sécurisée ?',
                                    'reponse' => 'quantité de colostrum bue non sécurisée',
                                    'categorie_id' => 4,
                                ),
                                1750 => 
                                array (
                                    'id' => 2233,
                                    'alerte_id' => 2037,
                                'question' => 'Vérifiez-vous la qualité du colostrum avant de le donner au veau ? (avec un pèse colostrum ou un réfractomètre par exemple)',
                                    'reponse' => 'pas de vérification de la qualité du colostrum avant de le donner au veau',
                                    'categorie_id' => 4,
                                ),
                                1751 => 
                                array (
                                    'id' => 2234,
                                    'alerte_id' => 2037,
                                    'question' => 'Possédez-vous une banque de colostrum de qualité congelé ?',
                                    'reponse' => 'pas de banque de colostrum de qualité',
                                    'categorie_id' => 4,
                                ),
                                1752 => 
                                array (
                                    'id' => 2235,
                                    'alerte_id' => 2037,
                                    'question' => 'Le lait distribué est-il à bonne température au moment de la buvée ou tétée ?',
                                    'reponse' => 'température du lait inadaptée lors de la buvée ou tétée',
                                    'categorie_id' => 1,
                                ),
                                1753 => 
                                array (
                                    'id' => 2236,
                                    'alerte_id' => 2037,
                                    'question' => 'Le lait distribué est-il issue de vaches traitées aux antibiotiques ?',
                                    'reponse' => 'lait distribué issu de vaches traitées aux antibiotiques',
                                    'categorie_id' => 1,
                                ),
                                1754 => 
                                array (
                                    'id' => 2237,
                                    'alerte_id' => 2037,
                                    'question' => 'Respectez-vous l\'équilibre de la ration complémentaire des veaux ?',
                                    'reponse' => 'ration complémentaire des veaux non équilibrée',
                                    'categorie_id' => 1,
                                ),
                                1755 => 
                                array (
                                    'id' => 2238,
                                    'alerte_id' => 2037,
                                    'question' => 'De l’eau de boisson est-elle à disposition ?',
                                    'reponse' => 'manque d\'eau à disposition pour les veaux',
                                    'categorie_id' => 1,
                                ),
                                1756 => 
                                array (
                                    'id' => 2239,
                                    'alerte_id' => 2037,
                                'question' => 'La qualité bactériologique de l\'eau d\'abreuvement est-elle bonne et analysée régulièrement ? (si issue d’un prélèvement privé)',
                                    'reponse' => 'pas d\'analyse régulière de la qualité de l\'eau',
                                    'categorie_id' => 4,
                                ),
                                1757 => 
                                array (
                                    'id' => 2240,
                                    'alerte_id' => 2037,
                                    'question' => 'En cas d\'utilisation de la sonde à colostrum et/ou de la tétine du biberon, réalisez-vous une désinfection ?',
                                    'reponse' => 'pas de désinfection de la sonde à colostrum ou de la tétine du biberon',
                                    'categorie_id' => 3,
                                ),
                                1758 => 
                                array (
                                    'id' => 2241,
                                    'alerte_id' => 2037,
                                    'question' => 'Réalisez-vous un lavage des seaux après chaque repas, en évitant de les empiler avant qu\'ils ne soient secs?',
                                    'reponse' => 'pas de lavage des seaux après chaque repas ou mauvais séchage',
                                    'categorie_id' => 3,
                                ),
                                1759 => 
                                array (
                                    'id' => 2242,
                                    'alerte_id' => 2037,
                                    'question' => 'Réalisez-vous un nettoyage quotidien des tétines du DAL et leurs alentours?',
                                    'reponse' => 'pas de nettoyage des tétines du DAL et alentours',
                                    'categorie_id' => 3,
                                ),
                                1760 => 
                                array (
                                    'id' => 2243,
                                    'alerte_id' => 2037,
                                    'question' => 'En cas d\'achat de veaux, réalisez-vous une quarantaine, sans contact avec le reste du troupeau, tant que le statut sanitaire de ces derniers n\'est pas connu?',
                                    'reponse' => 'absence de quarantaine si achat de veaux',
                                    'categorie_id' => 4,
                                ),
                                1761 => 
                                array (
                                    'id' => 2244,
                                    'alerte_id' => 2037,
                                    'question' => 'En cas de veau malade, veillez-vous à son confort thermique et à son alimentation & hydratation?',
                                    'reponse' => 'en cas de veau malade, confort thermique, alimentation et/ou hydratation insuffisants',
                                    'categorie_id' => 4,
                                ),
                                1762 => 
                                array (
                                    'id' => 2245,
                                    'alerte_id' => 2037,
                                'question' => 'Réalisez-vous un traitement de façon précoce et adaptée (selon l\'origine de la diarrhée)?',
                                    'reponse' => 'absence de traitement précoce et adapté',
                                    'categorie_id' => 5,
                                ),
                                1763 => 
                                array (
                                    'id' => 2246,
                                    'alerte_id' => 2037,
                                    'question' => 'Disposez-vous d\'un local de vêlage curé, lavé et désinfecté entre chaque vêlage?',
                                    'reponse' => 'pas de local de vêlage, ou pas de désinfection du local entre chaque vêlage',
                                    'categorie_id' => 2,
                                ),
                                1764 => 
                                array (
                                    'id' => 2247,
                                    'alerte_id' => 2037,
                                    'question' => 'En cas de maladies contagieuses disposez-vous de cases individuelles la première semaine puis de cases collectives avec une surface adaptée?',
                                    'reponse' => 'si maladies contagieuses, pas de cases individuelles la première semaine et/ou pas de cases collectives avec surface adaptée',
                                    'categorie_id' => 2,
                                ),
                                1765 => 
                                array (
                                    'id' => 2248,
                                    'alerte_id' => 2037,
                                    'question' => 'Limitez-vous l\'écart d\'âge dans un même lot à 3 semaines-1 mois maximum ?',
                                    'reponse' => 'écart d\'âge dans un même lot > à 1 mois',
                                    'categorie_id' => 4,
                                ),
                                1766 => 
                                array (
                                    'id' => 2249,
                                    'alerte_id' => 2037,
                                    'question' => 'Réalisez-vous un curage et un nettoyage après chaque veau et/ou entre chaque lot de veaux ?',
                                    'reponse' => 'pas de curage/nettoyage entre chaque lot de veaux',
                                    'categorie_id' => 3,
                                ),
                                1767 => 
                                array (
                                    'id' => 2250,
                                    'alerte_id' => 2037,
                                    'question' => 'Effectuez-vous un vide sanitaire au moins 1 fois/an : avec curage, lavage et désinfection?',
                                    'reponse' => 'absence de vide sanitaire annuel',
                                    'categorie_id' => 3,
                                ),
                                1768 => 
                                array (
                                    'id' => 2251,
                                    'alerte_id' => 2037,
                                'question' => 'Possédez-vous plutôt des matériaux "chauds" pour les parois en contact avec les veaux (planche de bois, paille, murs de brique)?',
                                    'reponse' => 'matériaux froids pour les parois en contact avec les veaux',
                                    'categorie_id' => 2,
                                ),
                                1769 => 
                                array (
                                    'id' => 2252,
                                    'alerte_id' => 2037,
                                    'question' => 'Assurez-vous une bonne hygiène des box à veaux ?',
                                    'reponse' => 'hygiène insuffisante des box à veaux',
                                    'categorie_id' => 3,
                                ),
                                1770 => 
                                array (
                                    'id' => 2253,
                                    'alerte_id' => 2037,
                                    'question' => 'Respecter vous les protocoles de soins prescrits par votre vétérinaire lors d’un traitement ?',
                                    'reponse' => 'non respect des protocoles de soins prescrits par le vétérinaire',
                                    'categorie_id' => 5,
                                ),
                                1771 => 
                                array (
                                    'id' => 2254,
                                    'alerte_id' => 2037,
                                    'question' => 'Le bâtiment est-il bien ventilé et sain ?',
                                    'reponse' => 'bâtiment mal ventilé, ambiance pas saine',
                                    'categorie_id' => 2,
                                ),
                                1772 => 
                                array (
                                    'id' => 2255,
                                    'alerte_id' => 2038,
                                    'question' => 'Réalisez-vous une désinfection du nombril avec une solution iodée le plus tôt possible après la naissance et avec des gants ?',
                                    'reponse' => 'pas de désinfection correcte du nombril',
                                    'categorie_id' => 3,
                                ),
                                1773 => 
                                array (
                                    'id' => 2256,
                                    'alerte_id' => 2038,
                                    'question' => 'Les apports en oligoéléments à la mère sont-ils suffisants ?',
                                    'reponse' => 'apports en oligoéléments insuffisants pour la mère',
                                    'categorie_id' => 1,
                                ),
                                1774 => 
                                array (
                                    'id' => 2257,
                                    'alerte_id' => 2038,
                                    'question' => 'Disposez-vous d\'un local de vêlage curé, lavé et désinfecté entre chaque vêlage?',
                                    'reponse' => 'pas de local de vêlage désinfecté entre chaque vêlage',
                                    'categorie_id' => 2,
                                ),
                                1775 => 
                                array (
                                    'id' => 2258,
                                    'alerte_id' => 2038,
                                    'question' => 'Assurez-vous une surveillance biquotidienne de tous les veaux, si possible par la même personne ?',
                                    'reponse' => 'pas de surveillance biquotidienne de tous les veaux',
                                    'categorie_id' => 4,
                                ),
                                1776 => 
                                array (
                                    'id' => 2259,
                                    'alerte_id' => 2038,
                                'question' => 'Assurez-vous une bonne prise colostrale en toutes circonstances (vêlage la nuit) dans les 6h suivant le vêlage?',
                                    'reponse' => 'prise colostrale pas toujours dans les 6h suivants le vêlage',
                                    'categorie_id' => 4,
                                ),
                                1777 => 
                                array (
                                    'id' => 2260,
                                    'alerte_id' => 2038,
                                    'question' => 'Réalisez-vous un curage et un nettoyage du box de vêlage et de la case à veaux après chaque veau et/ou entre chaque lot de veaux',
                                    'reponse' => 'pas de curage/nettoyage systématique du box de vêlage ou de la case à veaux après chaque passage',
                                    'categorie_id' => 3,
                                ),
                                1778 => 
                                array (
                                    'id' => 2261,
                                    'alerte_id' => 2038,
                                    'question' => 'Effectuez-vous un vide sanitaire au moins 1 fois/an du box de vêlage et de la nurserie : avec curage, lavage et désinfection?',
                                    'reponse' => 'absence de vide sanitaire annuel des box de vêlage et nurserie',
                                    'categorie_id' => 3,
                                ),
                                1779 => 
                                array (
                                    'id' => 2262,
                                    'alerte_id' => 2039,
                                    'question' => 'Le lait distribué est-il à bonne température ?',
                                    'reponse' => 'température du lait distribué pas adaptée',
                                    'categorie_id' => 1,
                                ),
                                1780 => 
                                array (
                                    'id' => 2263,
                                    'alerte_id' => 2039,
                                'question' => 'Le lait distribué est-il digeste ? (présence de résidus d’antibiotique, lait trop concentré, …)',
                                    'reponse' => 'lait distribué pas suffisamment digeste',
                                    'categorie_id' => 1,
                                ),
                                1781 => 
                                array (
                                    'id' => 2264,
                                    'alerte_id' => 2039,
                                    'question' => 'Distribuez-vous le lait en au moins 2 repas/jour les 30 premiers jours de vie minimum ?',
                                'reponse' => 'repas unique (lait) les 30 premiers jours de vie',
                                    'categorie_id' => 1,
                                ),
                                1782 => 
                                array (
                                    'id' => 2265,
                                    'alerte_id' => 2039,
                                    'question' => 'De l’eau de boisson est-elle à disposition ?',
                                    'reponse' => 'pas d\'eau de boisson à disposition',
                                    'categorie_id' => 1,
                                ),
                                1783 => 
                                array (
                                    'id' => 2266,
                                    'alerte_id' => 2039,
                                'question' => 'La qualité bactériologique de l\'eau d\'abreuvement est-elle bonne et analysée régulièrement ? (si issue d’un prélèvement privé)',
                                    'reponse' => 'manque d\'analyse régulière de la qualité bactériologique de l\'eau',
                                    'categorie_id' => 4,
                                ),
                                1784 => 
                                array (
                                    'id' => 2267,
                                    'alerte_id' => 2039,
                                    'question' => 'La complémentation des veaux durant la phase lactée est-elle adaptée ? La transition alimentaire est-elle respectée avec des aliments fibreux ?',
                                    'reponse' => 'complémentation des veaux non adaptée pendant la phase lactée et/ou transition alimentaire absente',
                                    'categorie_id' => 1,
                                ),
                                1785 => 
                                array (
                                    'id' => 2268,
                                    'alerte_id' => 2039,
                                'question' => 'Rencontrez-vous des problèmes de coccidiose ? (selles avec traces de sang)',
                                    'reponse' => 'problèmes de coccidiose',
                                    'categorie_id' => 8,
                                ),
                                1786 => 
                                array (
                                    'id' => 2269,
                                    'alerte_id' => 2039,
                                'question' => 'Les veaux sont-ils dans de bonne condition de confort de logement ? (épaisseur de la litière, propreté du logement, température stable et hygrométrie)',
                                    'reponse' => 'mauvaises conditions de confort de logement pour les veaux',
                                    'categorie_id' => 2,
                                ),
                                1787 => 
                                array (
                                    'id' => 2270,
                                    'alerte_id' => 2039,
                                    'question' => 'Avez-vous neutralisé les bétons neufs de la nurserie avec de l’acide ?',
                                    'reponse' => 'absence de neutralisation des bétons neufs avec de l\'acide',
                                    'categorie_id' => 2,
                                ),
                                1788 => 
                                array (
                                    'id' => 2271,
                                    'alerte_id' => 2040,
                                    'question' => 'Le bâtiment est-il bien ventilé, sans courant d’air, ni froid ?',
                                    'reponse' => 'bâtiment mal ventilé, ou courant d\'air, froid',
                                    'categorie_id' => 2,
                                ),
                                1789 => 
                                array (
                                    'id' => 2272,
                                    'alerte_id' => 2040,
                                    'question' => 'En bâtiment fermé, assurez-vous un bon renouvellement de l\'air pour évacuer l\'humidité dégagée par les animaux et la litière?',
                                    'reponse' => 'mauvais renouvellement de l\'air pour évacuer l\'humidité dégagée',
                                    'categorie_id' => 2,
                                ),
                                1790 => 
                                array (
                                    'id' => 2273,
                                    'alerte_id' => 2040,
                                    'question' => 'La densité d\'animaux correspond-elle au volume d\'air disponible ?',
                                    'reponse' => 'densité d\'animaux trop importante vis-à-vis du volume d\'air disponible',
                                    'categorie_id' => 2,
                                ),
                                1791 => 
                                array (
                                    'id' => 2274,
                                    'alerte_id' => 2040,
                                    'question' => 'Y-a-t-il des mélanges d\'animaux provenant de différents lots/lieux et de différents âges ?',
                                    'reponse' => 'mélange d\'animaux provenant de différents lots/lieux/âges',
                                    'categorie_id' => 4,
                                ),
                                1792 => 
                                array (
                                    'id' => 2275,
                                    'alerte_id' => 2040,
                                    'question' => 'Effectuez-vous un vide sanitaire au moins 1 fois/an : avec curage, lavage et désinfection?',
                                    'reponse' => 'absence de vide sanitaire annuel',
                                    'categorie_id' => 3,
                                ),
                                1793 => 
                                array (
                                    'id' => 2276,
                                    'alerte_id' => 2040,
                                    'question' => 'Les cases à veaux permettent-elles un maintien d’une bonne température ?',
                                    'reponse' => 'les cases à veaux n\'assurent pas le maintien d\'une bonne température',
                                    'categorie_id' => 2,
                                ),
                                1794 => 
                                array (
                                    'id' => 2277,
                                    'alerte_id' => 2040,
                                'question' => 'Possédez-vous plutôt des matériaux "chauds" pour les parois en contact avec les veaux (planche de bois, paille, murs de brique)?',
                                    'reponse' => 'matériaux froids pour les parois en contact avec les veaux',
                                    'categorie_id' => 2,
                                ),
                                1795 => 
                                array (
                                    'id' => 2278,
                                    'alerte_id' => 2040,
                                    'question' => 'En cas d\'achat de veaux, réalisez-vous une quarantaine, sans contact avec le reste du troupeau, tant que le statut sanitaire de ces derniers n\'est pas connu?',
                                    'reponse' => 'pas de quarantaine si achat de veaux',
                                    'categorie_id' => 4,
                                ),
                                1796 => 
                                array (
                                    'id' => 2279,
                                    'alerte_id' => 2040,
                                    'question' => 'En cas de veau malade, veillez-vous à son confort thermique et à son alimentation & hydratation?',
                                    'reponse' => 'si veau malade, manque de vigilance sur son confort thermique, son alimentation et hydratation',
                                    'categorie_id' => 5,
                                ),
                                1797 => 
                                array (
                                    'id' => 2280,
                                    'alerte_id' => 2040,
                                    'question' => 'Effectuez-vous des apports complémentaires d’accompagnement avant ou lors de l\'allotement ?',
                                    'reponse' => 'pas d\'apport complémentaire avant ou lors de l\'allotement',
                                    'categorie_id' => 4,
                                ),
                                1798 => 
                                array (
                                    'id' => 2281,
                                    'alerte_id' => 2040,
                                'question' => 'Assurez-vous une bonne prise colostrale en toutes circonstances (vêlage la nuit) dans les 6h suivant le vêlage?',
                                    'reponse' => 'prise colostrale pas toujours dans les 6h suivants le vêlage',
                                    'categorie_id' => 4,
                                ),
                                1799 => 
                                array (
                                    'id' => 2282,
                                    'alerte_id' => 2042,
                                    'question' => 'Remplissez-vous un calendrier de pâturage pour bien gérer les rotations de lots d’animaux dans chaque parcelle ?',
                                    'reponse' => 'pas de calendrier de pâturage',
                                    'categorie_id' => 8,
                                ),
                                1800 => 
                                array (
                                    'id' => 2283,
                                    'alerte_id' => 2042,
                                    'question' => 'Votre gestion de pâturage prévoit d\'éviter les croisements d\'animaux d\'âge différent ?',
                                    'reponse' => 'croisements d\'animaux d\'âge différent sur les pâtures',
                                    'categorie_id' => 8,
                                ),
                                1801 => 
                                array (
                                    'id' => 2284,
                                    'alerte_id' => 2042,
                                    'question' => 'Les animaux sont-ils bien retirés des pâtures à une hauteur d\'herbe > 6 cm ? ',
                                    'reponse' => 'hauteur laissés dans les pâtures à une hauteur d\'herbe<6cm',
                                    'categorie_id' => 8,
                                ),
                                1802 => 
                                array (
                                    'id' => 2285,
                                    'alerte_id' => 2042,
                                    'question' => 'Pratiquez-vous l\'alternance fauche/pâture ?',
                                    'reponse' => 'pas d\'alternance fauche / pâture',
                                    'categorie_id' => 8,
                                ),
                                1803 => 
                                array (
                                    'id' => 2286,
                                    'alerte_id' => 2042,
                                    'question' => 'Les zones humides et mares sont-elles accessibles aux animaux ?',
                                    'reponse' => 'mares et zones humides accessibles aux animaux',
                                    'categorie_id' => 8,
                                ),
                                1804 => 
                                array (
                                    'id' => 2287,
                                    'alerte_id' => 2042,
                                    'question' => 'La ration est-elle équilibrée et suffisante ?',
                                    'reponse' => 'ration déséquilibrée ou insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1805 => 
                                array (
                                    'id' => 2288,
                                    'alerte_id' => 2042,
                                    'question' => 'Apportez-vous un soutien des fonctions immunitaires avec des plantes ?',
                                    'reponse' => 'pas de soutien des fonctions immunitaires avec des plantes',
                                    'categorie_id' => 4,
                                ),
                                1806 => 
                                array (
                                    'id' => 2289,
                                    'alerte_id' => 2042,
                                    'question' => 'L’eau de boisson est-elle facilement accessible et potable ?',
                                    'reponse' => 'eau de boisson difficilement accessible ou non potable',
                                    'categorie_id' => 1,
                                ),
                                1807 => 
                                array (
                                    'id' => 2290,
                                    'alerte_id' => 2042,
                                    'question' => 'Optimisez-vous l\'efficacité du traitement en faisant correspondre date de traitement et cycle du parasite ?',
                                    'reponse' => 'lors de traitement, pas de correspondance entre date de traitement et cycle de parasite',
                                    'categorie_id' => 8,
                                ),
                                1808 => 
                                array (
                                    'id' => 2291,
                                    'alerte_id' => 2042,
                                    'question' => 'Pratiquez-vous de la surveillance coproscopique et/ou clinique ?',
                                    'reponse' => 'pas de surveillance coproscopique ou clinique',
                                    'categorie_id' => 8,
                                ),
                                1809 => 
                                array (
                                    'id' => 2292,
                                    'alerte_id' => 2042,
                                    'question' => 'Pratiquez-vous le traitement antiparasitaire non systématique ?',
                                    'reponse' => 'traitement antiparasitaire non systématique',
                                    'categorie_id' => 8,
                                ),
                                1810 => 
                                array (
                                    'id' => 2293,
                                    'alerte_id' => 2043,
                                    'question' => 'Remplissez-vous un calendrier de pâturage pour bien gérer les rotations de lots d’animaux dans chaque parcelle ?',
                                    'reponse' => 'pas de calendrier de pâturage',
                                    'categorie_id' => 8,
                                ),
                                1811 => 
                                array (
                                    'id' => 2294,
                                    'alerte_id' => 2043,
                                    'question' => 'Votre gestion de pâturage prévoit d\'éviter les croisements d\'animaux d\'âge différent ?',
                                    'reponse' => 'croisements d\'animaux d\'âge différent sur les pâtures',
                                    'categorie_id' => 8,
                                ),
                                1812 => 
                                array (
                                    'id' => 2295,
                                    'alerte_id' => 2043,
                                    'question' => 'Les animaux sont-ils bien retirés des pâtures à une hauteur d\'herbe > 6 cm ? ',
                                    'reponse' => 'hauteur laissés dans les pâtures à une hauteur d\'herbe<6cm',
                                    'categorie_id' => 8,
                                ),
                                1813 => 
                                array (
                                    'id' => 2296,
                                    'alerte_id' => 2043,
                                    'question' => 'Pratiquez-vous l\'alternance fauche/pâture ?',
                                    'reponse' => 'pas d\'alternance fauche / pâture',
                                    'categorie_id' => 8,
                                ),
                                1814 => 
                                array (
                                    'id' => 2297,
                                    'alerte_id' => 2043,
                                    'question' => 'Les zones humides et mares sont-elles accessibles aux animaux ?',
                                    'reponse' => 'mares et zones humides accessibles aux animaux',
                                    'categorie_id' => 8,
                                ),
                                1815 => 
                                array (
                                    'id' => 2298,
                                    'alerte_id' => 2043,
                                    'question' => 'La ration est-elle équilibrée et suffisante ?',
                                    'reponse' => 'ration déséquilibrée ou insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1816 => 
                                array (
                                    'id' => 2299,
                                    'alerte_id' => 2043,
                                    'question' => 'Apportez-vous un soutien des fonctions immunitaires avec des plantes ?',
                                    'reponse' => 'pas de soutien des fonctions immunitaires avec des plantes',
                                    'categorie_id' => 4,
                                ),
                                1817 => 
                                array (
                                    'id' => 2300,
                                    'alerte_id' => 2043,
                                    'question' => 'L’eau de boisson est-elle facilement accessible et potable ?',
                                    'reponse' => 'eau de boisson difficilement accessible ou non potable',
                                    'categorie_id' => 1,
                                ),
                                1818 => 
                                array (
                                    'id' => 2301,
                                    'alerte_id' => 2043,
                                    'question' => 'Optimisez-vous l\'efficacité du traitement en faisant correspondre date de traitement et cycle du parasite ?',
                                    'reponse' => 'lors de traitement, pas de correspondance entre date de traitement et cycle de parasite',
                                    'categorie_id' => 8,
                                ),
                                1819 => 
                                array (
                                    'id' => 2302,
                                    'alerte_id' => 2043,
                                    'question' => 'Pratiquez-vous de la surveillance coproscopique et/ou clinique ?',
                                    'reponse' => 'pas de surveillance coproscopique ou clinique',
                                    'categorie_id' => 8,
                                ),
                                1820 => 
                                array (
                                    'id' => 2303,
                                    'alerte_id' => 2043,
                                    'question' => 'Pratiquez-vous le traitement antiparasitaire non systématique ?',
                                    'reponse' => 'traitement antiparasitaire non systématique',
                                    'categorie_id' => 8,
                                ),
                                1821 => 
                                array (
                                    'id' => 2304,
                                    'alerte_id' => 2044,
                                    'question' => 'Remplissez-vous un calendrier de pâturage pour bien gérer les rotations de lots d’animaux dans chaque parcelle ?',
                                    'reponse' => 'pas de calendrier de pâturage',
                                    'categorie_id' => 8,
                                ),
                                1822 => 
                                array (
                                    'id' => 2305,
                                    'alerte_id' => 2044,
                                    'question' => 'Votre gestion de pâturage prévoit d\'éviter les croisements d\'animaux d\'âge différent ?',
                                    'reponse' => 'croisements d\'animaux d\'âge différent sur les pâtures',
                                    'categorie_id' => 8,
                                ),
                                1823 => 
                                array (
                                    'id' => 2306,
                                    'alerte_id' => 2044,
                                    'question' => 'Les animaux sont-ils bien retirés des pâtures à une hauteur d\'herbe > 6 cm ? ',
                                    'reponse' => 'hauteur laissés dans les pâtures à une hauteur d\'herbe<6cm',
                                    'categorie_id' => 8,
                                ),
                                1824 => 
                                array (
                                    'id' => 2307,
                                    'alerte_id' => 2044,
                                    'question' => 'Pratiquez-vous l\'alternance fauche/pâture ?',
                                    'reponse' => 'pas d\'alternance fauche / pâture',
                                    'categorie_id' => 8,
                                ),
                                1825 => 
                                array (
                                    'id' => 2308,
                                    'alerte_id' => 2044,
                                    'question' => 'Les zones humides et mares sont-elles accessibles aux animaux ?',
                                    'reponse' => 'mares et zones humides accessibles aux animaux',
                                    'categorie_id' => 8,
                                ),
                                1826 => 
                                array (
                                    'id' => 2309,
                                    'alerte_id' => 2044,
                                    'question' => 'La ration est-elle équilibrée et suffisante ?',
                                    'reponse' => 'ration déséquilibrée ou insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1827 => 
                                array (
                                    'id' => 2310,
                                    'alerte_id' => 2044,
                                    'question' => 'Apportez-vous un soutien des fonctions immunitaires avec des plantes ?',
                                    'reponse' => 'pas de soutien des fonctions immunitaires avec des plantes',
                                    'categorie_id' => 8,
                                ),
                                1828 => 
                                array (
                                    'id' => 2311,
                                    'alerte_id' => 2044,
                                    'question' => 'L’eau de boisson est-elle facilement accessible et potable ?',
                                    'reponse' => 'eau de boisson difficilement accessible ou non potable',
                                    'categorie_id' => 1,
                                ),
                                1829 => 
                                array (
                                    'id' => 2312,
                                    'alerte_id' => 2044,
                                    'question' => 'Optimisez-vous l\'efficacité du traitement en faisant correspondre date de traitement et cycle du parasite ?',
                                    'reponse' => 'lors de traitement, pas de correspondance entre date de traitement et cycle de parasite',
                                    'categorie_id' => 8,
                                ),
                                1830 => 
                                array (
                                    'id' => 2313,
                                    'alerte_id' => 2044,
                                    'question' => 'Pratiquez-vous de la surveillance coproscopique et/ou clinique ?',
                                    'reponse' => 'pas de surveillance coproscopique ou clinique',
                                    'categorie_id' => 8,
                                ),
                                1831 => 
                                array (
                                    'id' => 2314,
                                    'alerte_id' => 2044,
                                    'question' => 'Pratiquez-vous le traitement antiparasitaire non systématique ?',
                                    'reponse' => 'traitement antiparasitaire non systématique',
                                    'categorie_id' => 8,
                                ),
                                1832 => 
                                array (
                                    'id' => 2315,
                                    'alerte_id' => 2041,
                                    'question' => 'Remplissez-vous un calendrier de pâturage pour bien gérer les rotations de lots d’animaux dans chaque parcelle ?',
                                    'reponse' => 'pas de calendrier de pâturage',
                                    'categorie_id' => 8,
                                ),
                                1833 => 
                                array (
                                    'id' => 2316,
                                    'alerte_id' => 2041,
                                    'question' => 'Votre gestion de pâturage prévoit d\'éviter les croisements d\'animaux d\'âge différent ?',
                                    'reponse' => 'croisements d\'animaux d\'âge différent sur les pâtures',
                                    'categorie_id' => 8,
                                ),
                                1834 => 
                                array (
                                    'id' => 2317,
                                    'alerte_id' => 2041,
                                    'question' => 'Les animaux sont-ils bien retirés des pâtures à une hauteur d\'herbe > 6 cm ? ',
                                    'reponse' => 'hauteur laissés dans les pâtures à une hauteur d\'herbe<6cm',
                                    'categorie_id' => 8,
                                ),
                                1835 => 
                                array (
                                    'id' => 2318,
                                    'alerte_id' => 2041,
                                    'question' => 'Pratiquez-vous l\'alternance fauche/pâture ?',
                                    'reponse' => 'pas d\'alternance fauche / pâture',
                                    'categorie_id' => 8,
                                ),
                                1836 => 
                                array (
                                    'id' => 2319,
                                    'alerte_id' => 2041,
                                    'question' => 'Les zones humides et mares sont-elles accessibles aux animaux ?',
                                    'reponse' => 'mares et zones humides accessibles aux animaux',
                                    'categorie_id' => 8,
                                ),
                                1837 => 
                                array (
                                    'id' => 2320,
                                    'alerte_id' => 2041,
                                    'question' => 'La ration est-elle équilibrée et suffisante ?',
                                    'reponse' => 'ration déséquilibrée ou insuffisante',
                                    'categorie_id' => 1,
                                ),
                                1838 => 
                                array (
                                    'id' => 2321,
                                    'alerte_id' => 2041,
                                    'question' => 'Apportez-vous un soutien des fonctions immunitaires avec des plantes ?',
                                    'reponse' => 'pas de soutien des fonctions immunitaires avec des plantes',
                                    'categorie_id' => 8,
                                ),
                                1839 => 
                                array (
                                    'id' => 2322,
                                    'alerte_id' => 2041,
                                    'question' => 'L’eau de boisson est-elle facilement accessible et potable ?',
                                    'reponse' => 'eau de boisson difficilement accessible ou non potable',
                                    'categorie_id' => 1,
                                ),
                                1840 => 
                                array (
                                    'id' => 2323,
                                    'alerte_id' => 2041,
                                    'question' => 'Optimisez-vous l\'efficacité du traitement en faisant correspondre date de traitement et cycle du parasite ?',
                                    'reponse' => 'lors de traitement, pas de correspondance entre date de traitement et cycle de parasite',
                                    'categorie_id' => 8,
                                ),
                                1841 => 
                                array (
                                    'id' => 2324,
                                    'alerte_id' => 2041,
                                    'question' => 'Pratiquez-vous de la surveillance coproscopique et/ou clinique ?',
                                    'reponse' => 'pas de surveillance coproscopique ou clinique',
                                    'categorie_id' => 8,
                                ),
                                1842 => 
                                array (
                                    'id' => 2325,
                                    'alerte_id' => 2041,
                                    'question' => 'Pratiquez-vous le traitement antiparasitaire non systématique ?',
                                    'reponse' => 'traitement antiparasitaire non systématique',
                                    'categorie_id' => 8,
                                ),
                                1843 => 
                                array (
                                    'id' => 2326,
                                    'alerte_id' => 2046,
                                    'question' => 'Prenez-vous des précautions particulières sur le pâturage des jeunes en première année de pâture ?',
                                    'reponse' => 'pas de précaution particulière sur le pâturage des jeunes',
                                    'categorie_id' => 8,
                                ),
                                1844 => 
                                array (
                                    'id' => 2327,
                                    'alerte_id' => 2046,
                                    'question' => 'Mélangez-vous des animaux d’âge différents ?',
                                    'reponse' => 'mélange d\'animaux d\'âge différents',
                                    'categorie_id' => 8,
                                ),
                                1845 => 
                                array (
                                    'id' => 2328,
                                    'alerte_id' => 2046,
                                'question' => 'Pratiquez-vous l\'éducation parasitaire ? (sorties avant 1ère vêlage, choix des parcelles,..)',
                                    'reponse' => 'éducation parasitaire non pratiquée',
                                    'categorie_id' => 8,
                                ),
                                1846 => 
                                array (
                                    'id' => 2329,
                                    'alerte_id' => 2046,
                                    'question' => 'Avez-vous un îlot spécifique réservé pour le pâturage des jeunes ?',
                                    'reponse' => 'pas d\'îlot spécifique réservé au pâturage des jeunes',
                                    'categorie_id' => 8,
                                ),
                                1847 => 
                                array (
                                    'id' => 2330,
                                    'alerte_id' => 2046,
                                    'question' => 'Avez-vous mis en place une stratégie avec votre vétérinaire pour favoriser le développement de l’immunité de vos animaux ?',
                                    'reponse' => 'pas de stratégie favorisant le développement de l\'immunité',
                                    'categorie_id' => 8,
                                ),
                                1848 => 
                                array (
                                    'id' => 2331,
                                    'alerte_id' => 2046,
                                    'question' => 'Les animaux sont-ils bien retirés des pâtures à une hauteur d\'herbe > 6 cm ?',
                                    'reponse' => 'hauteur laissés dans les pâtures à une hauteur d\'herbe < 6cm',
                                    'categorie_id' => 8,
                                ),
                                1849 => 
                                array (
                                    'id' => 2332,
                                    'alerte_id' => 2046,
                                    'question' => 'Pratiquez-vous un vide sanitaire et une désinfection des bâtiments d’élevage ?',
                                    'reponse' => 'absence de vide sanitaire ou désinfection des bâtiments',
                                    'categorie_id' => 3,
                                ),
                                1850 => 
                                array (
                                    'id' => 2333,
                                    'alerte_id' => 2046,
                                    'question' => 'Pratiquez-vous de la surveillance coproscopique et/ou clinique de manière régulière ?',
                                    'reponse' => 'pas de surveillance coproscopique ou clinique',
                                    'categorie_id' => 8,
                                ),
                                1851 => 
                                array (
                                    'id' => 2334,
                                    'alerte_id' => 2045,
                                    'question' => 'Prenez-vous des précautions particulières sur le pâturage des jeunes en première année de pâture ?',
                                    'reponse' => 'pas de précaution particulière sur le pâturage des jeunes',
                                    'categorie_id' => 8,
                                ),
                                1852 => 
                                array (
                                    'id' => 2335,
                                    'alerte_id' => 2045,
                                    'question' => 'Mélangez-vous des animaux d’âge différents ?',
                                    'reponse' => 'mélange d\'animaux d\'âge différents',
                                    'categorie_id' => 8,
                                ),
                                1853 => 
                                array (
                                    'id' => 2336,
                                    'alerte_id' => 2045,
                                'question' => 'Pratiquez-vous l\'éducation parasitaire ? (sorties avant 1ère vêlage, choix des parcelles,..)',
                                    'reponse' => 'éducation parasitaire non pratiquée',
                                    'categorie_id' => 8,
                                ),
                                1854 => 
                                array (
                                    'id' => 2337,
                                    'alerte_id' => 2045,
                                    'question' => 'Avez-vous un îlot spécifique réservé pour le pâturage des jeunes ?',
                                    'reponse' => 'pas d\'îlot spécifique réservé au pâturage des jeunes',
                                    'categorie_id' => 8,
                                ),
                                1855 => 
                                array (
                                    'id' => 2338,
                                    'alerte_id' => 2045,
                                    'question' => 'Avez-vous mis en place une stratégie avec votre vétérinaire pour favoriser le développement de l’immunité de vos animaux ?',
                                    'reponse' => 'pas de stratégie favorisant le développement de l\'immunité',
                                    'categorie_id' => 8,
                                ),
                                1856 => 
                                array (
                                    'id' => 2339,
                                    'alerte_id' => 2045,
                                    'question' => 'Les animaux sont-ils bien retirés des pâtures à une hauteur d\'herbe > 6 cm ?',
                                    'reponse' => 'hauteur laissés dans les pâtures à une hauteur d\'herbe < 6cm',
                                    'categorie_id' => 8,
                                ),
                                1857 => 
                                array (
                                    'id' => 2340,
                                    'alerte_id' => 2045,
                                    'question' => 'Pratiquez-vous un vide sanitaire et une désinfection des bâtiments d’élevage ?',
                                    'reponse' => 'absence de vide sanitaire ou désinfection des bâtiments',
                                    'categorie_id' => 3,
                                ),
                                1858 => 
                                array (
                                    'id' => 2341,
                                    'alerte_id' => 2045,
                                    'question' => 'Pratiquez-vous de la surveillance coproscopique et/ou clinique de manière régulière ?',
                                    'reponse' => 'pas de surveillance coproscopique ou clinique',
                                    'categorie_id' => 8,
                                ),
                                1859 => 
                                array (
                                    'id' => 2342,
                                    'alerte_id' => 2047,
                                    'question' => 'Mettez-vous en place une surveillance quotidienne des animaux malades?',
                                    'reponse' => 'pas de surveillance quotidienne des animaux malades',
                                    'categorie_id' => 8,
                                ),
                                1860 => 
                                array (
                                    'id' => 2343,
                                    'alerte_id' => 2047,
                                    'question' => 'Y-a-t-il eu des changements météorologiques brusques précédents les problèmes ?',
                                    'reponse' => 'changements météorologiques brusques précédents les problèmes',
                                    'categorie_id' => 7,
                                ),
                                1861 => 
                                array (
                                    'id' => 2344,
                                    'alerte_id' => 2047,
                                    'question' => 'Les animaux sont-ils empêchés d’accéder à des zones très humides, mares, marécages dans les pâtures ?',
                                    'reponse' => 'accès aux zones humides',
                                    'categorie_id' => 8,
                                ),
                                1862 => 
                                array (
                                    'id' => 2345,
                                    'alerte_id' => 2048,
                                    'question' => 'Mettez-vous en place une surveillance quotidienne des animaux malades?',
                                    'reponse' => 'pas de surveillance quotidienne des animaux malades',
                                    'categorie_id' => 5,
                                ),
                                1863 => 
                                array (
                                    'id' => 2346,
                                    'alerte_id' => 2048,
                                    'question' => 'Y-a-t-il eu des changements météorologiques brusques précédents les problèmes ?',
                                    'reponse' => 'changements météorologiques brusques précédents les problèmes',
                                    'categorie_id' => 7,
                                ),
                                1864 => 
                                array (
                                    'id' => 2347,
                                    'alerte_id' => 2048,
                                    'question' => 'Les animaux sont-ils empêchés d’accéder à des zones très humides, mares, marécages dans les pâtures ?',
                                    'reponse' => 'accès aux zones humides',
                                    'categorie_id' => 8,
                                ),
                                1865 => 
                                array (
                                    'id' => 2348,
                                    'alerte_id' => 2049,
                                    'question' => 'Temps de pâturage insuffisant de génisses pour l’acquisition d’une immunité contre les strongles',
                                    'reponse' => 'Temps de pâturage insuffisant de génisses pour l’acquisition d’une immunité contre les strongles',
                                    'categorie_id' => 8,
                                ),
                                1866 => 
                                array (
                                    'id' => 2349,
                                    'alerte_id' => 2050,
                                    'question' => 'Les animaux ont-ils accès à de l\'eau propre : réseau, puits, fontaine, pompe de prairies ?',
                                    'reponse' => 'pas d\'accès à de l\'eau propre',
                                    'categorie_id' => 1,
                                ),
                                1867 => 
                                array (
                                    'id' => 2350,
                                    'alerte_id' => 2050,
                                    'question' => 'Les animaux sont-ils bien retirés des pâtures à une hauteur d\'herbe > 6 cm ?',
                                    'reponse' => 'hauteur laissés dans les pâtures à une hauteur d\'herbe < 6cm',
                                    'categorie_id' => 8,
                                ),
                                1868 => 
                                array (
                                    'id' => 2351,
                                    'alerte_id' => 2050,
                                    'question' => 'Assurez-vous une surveillance du troupeau régulière et suffisante ?',
                                    'reponse' => 'surveillance du troupeau irrégulière ou insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1869 => 
                                array (
                                    'id' => 2352,
                                    'alerte_id' => 2050,
                                    'question' => 'Recherchez-vous les parasites par analyse sanguine ?',
                                    'reponse' => 'pas de recherche de parasite par analyse sanguine',
                                    'categorie_id' => 8,
                                ),
                                1870 => 
                                array (
                                    'id' => 2353,
                                    'alerte_id' => 2051,
                                    'question' => 'Les animaux ont-ils accès à de l\'eau propre : réseau, puits, fontaine, pompe de prairies ?',
                                    'reponse' => 'pas d\'accès à de l\'eau propre',
                                    'categorie_id' => 1,
                                ),
                                1871 => 
                                array (
                                    'id' => 2354,
                                    'alerte_id' => 2051,
                                    'question' => 'Les animaux sont-ils bien retirés des pâtures à une hauteur d\'herbe > 6 cm ?',
                                    'reponse' => 'hauteur laissés dans les pâtures à une hauteur d\'herbe < 6cm',
                                    'categorie_id' => 8,
                                ),
                                1872 => 
                                array (
                                    'id' => 2355,
                                    'alerte_id' => 2051,
                                    'question' => 'Assurez-vous une surveillance du troupeau régulière et suffisante ?',
                                    'reponse' => 'surveillance du troupeau irrégulière ou insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1873 => 
                                array (
                                    'id' => 2356,
                                    'alerte_id' => 2051,
                                    'question' => 'Recherchez-vous les parasites par analyse sanguine ?',
                                    'reponse' => 'pas de recherche de parasite par analyse sanguine',
                                    'categorie_id' => 8,
                                ),
                                1874 => 
                                array (
                                    'id' => 2357,
                                    'alerte_id' => 2052,
                                    'question' => 'Les animaux ont-ils accès à de l\'eau propre : réseau, puits, fontaine, pompe de prairies ?',
                                    'reponse' => 'pas d\'accès à de l\'eau propre',
                                    'categorie_id' => 1,
                                ),
                                1875 => 
                                array (
                                    'id' => 2358,
                                    'alerte_id' => 2052,
                                    'question' => 'Les animaux sont-ils bien retirés des pâtures à une hauteur d\'herbe > 6 cm ?',
                                    'reponse' => 'hauteur laissés dans les pâtures à une hauteur d\'herbe < 6cm',
                                    'categorie_id' => 8,
                                ),
                                1876 => 
                                array (
                                    'id' => 2359,
                                    'alerte_id' => 2052,
                                    'question' => 'Assurez-vous une surveillance du troupeau régulière et suffisante ?',
                                    'reponse' => 'surveillance du troupeau irrégulière ou insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1877 => 
                                array (
                                    'id' => 2360,
                                    'alerte_id' => 2052,
                                    'question' => 'Recherchez-vous les parasites par analyse sanguine ?',
                                    'reponse' => 'pas de recherche de parasite par analyse sanguine',
                                    'categorie_id' => 8,
                                ),
                                1878 => 
                                array (
                                    'id' => 2361,
                                    'alerte_id' => 2053,
                                    'question' => 'Les animaux ont-ils accès à de l\'eau propre : réseau, puits, fontaine, pompe de prairies ?',
                                    'reponse' => 'pas d\'accès à de l\'eau propre',
                                    'categorie_id' => 1,
                                ),
                                1879 => 
                                array (
                                    'id' => 2362,
                                    'alerte_id' => 2053,
                                    'question' => 'Les animaux sont-ils bien retirés des pâtures à une hauteur d\'herbe > 6 cm ?',
                                    'reponse' => 'hauteur laissés dans les pâtures à une hauteur d\'herbe < 6cm',
                                    'categorie_id' => 8,
                                ),
                                1880 => 
                                array (
                                    'id' => 2363,
                                    'alerte_id' => 2053,
                                    'question' => 'Assurez-vous une surveillance du troupeau régulière et suffisante ?',
                                    'reponse' => 'surveillance du troupeau irrégulière ou insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1881 => 
                                array (
                                    'id' => 2364,
                                    'alerte_id' => 2053,
                                    'question' => 'Recherchez-vous les parasites par analyse sanguine ?',
                                    'reponse' => 'pas de recherche de parasite par analyse sanguine',
                                    'categorie_id' => 8,
                                ),
                                1882 => 
                                array (
                                    'id' => 2365,
                                    'alerte_id' => 2054,
                                    'question' => 'Pratiquez-vous la désinfection et ou le vide sanitaire des bâtiments d’élevage ?',
                                    'reponse' => 'absence de vide sanitaire ou désinfection des bâtiments',
                                    'categorie_id' => 3,
                                ),
                                1883 => 
                                array (
                                    'id' => 2366,
                                    'alerte_id' => 2054,
                                    'question' => 'Réalisez-vous une lutte contre les mouches dans vos bâtiments et sur vos animaux?',
                                    'reponse' => 'pas de lutte contre les mouches',
                                    'categorie_id' => 3,
                                ),
                                1884 => 
                                array (
                                    'id' => 2367,
                                    'alerte_id' => 2054,
                                'question' => 'En cas d\'achat, vérifiez-vous l’absence de parasites externes sur les animaux? (poux, gale,…)',
                                    'reponse' => 'si achat, pas de vérification de l\'absence de parasites externes',
                                    'categorie_id' => 4,
                                ),
                                1885 => 
                                array (
                                    'id' => 2368,
                                    'alerte_id' => 2054,
                                    'question' => 'Vos animaux peuvent-ils être en contact avec des animaux d\'autres espèces ou d\'autres troupeaux?',
                                    'reponse' => 'contact avec des animaux d\'autres espèces',
                                    'categorie_id' => 4,
                                ),
                                1886 => 
                                array (
                                    'id' => 2369,
                                    'alerte_id' => 2055,
                                    'question' => 'La ration présente-t-elle un excès d\'amidon ou sucres dans la ration ?',
                                    'reponse' => 'excès d\'amidon ou sucres dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1887 => 
                                array (
                                    'id' => 2370,
                                    'alerte_id' => 2055,
                                    'question' => 'La ration présente-t-elle un manque de fibrosité ?',
                                    'reponse' => 'manque de fibrosité dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1888 => 
                                array (
                                    'id' => 2371,
                                    'alerte_id' => 2055,
                                    'question' => 'La ration présente-t-elle un déficit énergétique ?',
                                    'reponse' => 'déficit énergétique dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1889 => 
                                array (
                                    'id' => 2372,
                                    'alerte_id' => 2055,
                                    'question' => 'Les bétons neufs ont-ils été neutralisés ?',
                                    'reponse' => 'bétons neufs non neutralisés',
                                    'categorie_id' => 2,
                                ),
                                1890 => 
                                array (
                                    'id' => 2373,
                                    'alerte_id' => 2055,
                                    'question' => 'Le bâtiment présente-t-il une humidité permanente sur les sols ? raclées ?',
                                    'reponse' => 'humidité permanente sur les sols',
                                    'categorie_id' => 2,
                                ),
                                1891 => 
                                array (
                                    'id' => 2374,
                                    'alerte_id' => 2055,
                                    'question' => 'Le raclage des aires de vie est-il suffisamment fréquent ?',
                                    'reponse' => 'raclage des aires de vie pas assez fréquent',
                                    'categorie_id' => 2,
                                ),
                                1892 => 
                                array (
                                    'id' => 2375,
                                    'alerte_id' => 2055,
                                    'question' => 'La sélection du troupeau est-elle axée sur les aptitudes fonctionnelles ?',
                                    'reponse' => 'sélection pas axée sur les aptitudes fonctionnelles',
                                    'categorie_id' => 6,
                                ),
                                1893 => 
                                array (
                                    'id' => 2376,
                                    'alerte_id' => 2055,
                                    'question' => 'Y-a-t-il des cailloux, silex sur les chemins d\'accès ?',
                                    'reponse' => 'cailloux et silex sur les chemins d\'accès',
                                    'categorie_id' => 7,
                                ),
                                1894 => 
                                array (
                                    'id' => 2377,
                                    'alerte_id' => 2055,
                                    'question' => 'Faites-vous intervenir le pareur 2 fois par an ?',
                                    'reponse' => 'intervention du pareur pas assez fréquente',
                                    'categorie_id' => 4,
                                ),
                                1895 => 
                                array (
                                    'id' => 2378,
                                    'alerte_id' => 2055,
                                    'question' => 'Êtes-vous équipé d’un pédiluve ? L’utilisez-vous régulièrement ?',
                                    'reponse' => 'pas de ou pas utilisé régulièrement',
                                    'categorie_id' => 4,
                                ),
                                1896 => 
                                array (
                                    'id' => 2379,
                                    'alerte_id' => 2055,
                                    'question' => 'Utilisez-vous une cage de parage facilement ?',
                                    'reponse' => 'cage de parage difficilement utilisée',
                                    'categorie_id' => 4,
                                ),
                                1897 => 
                                array (
                                    'id' => 2380,
                                    'alerte_id' => 2055,
                                    'question' => 'Avez-vous suivi une formation de parage bovin ?',
                                    'reponse' => 'manque de formation sur le parage bovin',
                                    'categorie_id' => 4,
                                ),
                                1898 => 
                                array (
                                    'id' => 2381,
                                    'alerte_id' => 2056,
                                    'question' => 'La ration présente-t-elle un excès d\'amidon ou sucres dans la ration ?',
                                    'reponse' => 'excès d\'amidon ou sucres dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1899 => 
                                array (
                                    'id' => 2382,
                                    'alerte_id' => 2056,
                                    'question' => 'La ration présente-t-elle un manque de fibrosité ?',
                                    'reponse' => 'manque de fibrosité dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1900 => 
                                array (
                                    'id' => 2383,
                                    'alerte_id' => 2056,
                                    'question' => 'La ration présente-t-elle un déficit énergétique ?',
                                    'reponse' => 'déficit énergétique dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1901 => 
                                array (
                                    'id' => 2384,
                                    'alerte_id' => 2056,
                                    'question' => 'Les bétons neufs ont-ils été neutralisés ?',
                                    'reponse' => 'bétons neufs non neutralisés',
                                    'categorie_id' => 2,
                                ),
                                1902 => 
                                array (
                                    'id' => 2385,
                                    'alerte_id' => 2056,
                                    'question' => 'Le bâtiment présente-t-il une humidité permanente sur les sols ? raclées ?',
                                    'reponse' => 'humidité permanente sur les sols',
                                    'categorie_id' => 2,
                                ),
                                1903 => 
                                array (
                                    'id' => 2386,
                                    'alerte_id' => 2056,
                                    'question' => 'Le raclage des aires de vie est-il suffisamment fréquent ?',
                                    'reponse' => 'raclage des aires de vie pas assez fréquent',
                                    'categorie_id' => 2,
                                ),
                                1904 => 
                                array (
                                    'id' => 2387,
                                    'alerte_id' => 2056,
                                    'question' => 'La sélection du troupeau est-elle axée sur les aptitudes fonctionnelles ?',
                                    'reponse' => 'sélection pas axée sur les aptitudes fonctionnelles',
                                    'categorie_id' => 6,
                                ),
                                1905 => 
                                array (
                                    'id' => 2388,
                                    'alerte_id' => 2056,
                                    'question' => 'Y-a-t-il des cailloux, silex sur les chemins d\'accès ?',
                                    'reponse' => 'cailloux et silex sur les chemins d\'accès',
                                    'categorie_id' => 4,
                                ),
                                1906 => 
                                array (
                                    'id' => 2389,
                                    'alerte_id' => 2056,
                                    'question' => 'Faites-vous intervenir le pareur 2 fois par an ?',
                                    'reponse' => 'intervention du pareur pas assez fréquente',
                                    'categorie_id' => 4,
                                ),
                                1907 => 
                                array (
                                    'id' => 2390,
                                    'alerte_id' => 2056,
                                    'question' => 'Êtes-vous équipé d’un pédiluve ? L’utilisez-vous régulièrement ?',
                                    'reponse' => 'pas de ou pas utilisé régulièrement',
                                    'categorie_id' => 4,
                                ),
                                1908 => 
                                array (
                                    'id' => 2391,
                                    'alerte_id' => 2056,
                                    'question' => 'Utilisez-vous une cage de parage facilement ?',
                                    'reponse' => 'cage de parage difficilement utilisée',
                                    'categorie_id' => 4,
                                ),
                                1909 => 
                                array (
                                    'id' => 2392,
                                    'alerte_id' => 2056,
                                    'question' => 'Avez-vous suivi une formation de parage bovin ?',
                                    'reponse' => 'manque de formation sur le parage bovin',
                                    'categorie_id' => 4,
                                ),
                                1910 => 
                                array (
                                    'id' => 2393,
                                    'alerte_id' => 2057,
                                    'question' => 'La ration présente-t-elle un excès d\'amidon ou sucres dans la ration ?',
                                    'reponse' => 'excès d\'amidon ou sucres dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1911 => 
                                array (
                                    'id' => 2394,
                                    'alerte_id' => 2057,
                                    'question' => 'La ration présente-t-elle un manque de fibrosité ?',
                                    'reponse' => 'manque de fibrosité dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1912 => 
                                array (
                                    'id' => 2395,
                                    'alerte_id' => 2057,
                                    'question' => 'La ration présente-t-elle un déficit énergétique ?',
                                    'reponse' => 'déficit énergétique dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1913 => 
                                array (
                                    'id' => 2396,
                                    'alerte_id' => 2057,
                                    'question' => 'Les bétons neufs ont-ils été neutralisés ?',
                                    'reponse' => 'bétons neufs non neutralisés',
                                    'categorie_id' => 2,
                                ),
                                1914 => 
                                array (
                                    'id' => 2397,
                                    'alerte_id' => 2057,
                                    'question' => 'Le bâtiment présente-t-il une humidité permanente sur les sols ? raclées ?',
                                    'reponse' => 'humidité permanente sur les sols',
                                    'categorie_id' => 2,
                                ),
                                1915 => 
                                array (
                                    'id' => 2398,
                                    'alerte_id' => 2057,
                                    'question' => 'Le raclage des aires de vie est-il suffisamment fréquent ?',
                                    'reponse' => 'raclage des aires de vie pas assez fréquent',
                                    'categorie_id' => 2,
                                ),
                                1916 => 
                                array (
                                    'id' => 2399,
                                    'alerte_id' => 2057,
                                    'question' => 'La sélection du troupeau est-elle axée sur les aptitudes fonctionnelles ?',
                                    'reponse' => 'sélection pas axée sur les aptitudes fonctionnelles',
                                    'categorie_id' => 6,
                                ),
                                1917 => 
                                array (
                                    'id' => 2400,
                                    'alerte_id' => 2057,
                                    'question' => 'Y-a-t-il des cailloux, silex sur les chemins d\'accès ?',
                                    'reponse' => 'cailloux et silex sur les chemins d\'accès',
                                    'categorie_id' => 7,
                                ),
                                1918 => 
                                array (
                                    'id' => 2401,
                                    'alerte_id' => 2057,
                                    'question' => 'Faites-vous intervenir le pareur 2 fois par an ?',
                                    'reponse' => 'intervention du pareur pas assez fréquente',
                                    'categorie_id' => 4,
                                ),
                                1919 => 
                                array (
                                    'id' => 2402,
                                    'alerte_id' => 2057,
                                    'question' => 'Êtes-vous équipé d’un pédiluve ? L’utilisez-vous régulièrement ?',
                                    'reponse' => 'pas de ou pas utilisé régulièrement',
                                    'categorie_id' => 4,
                                ),
                                1920 => 
                                array (
                                    'id' => 2403,
                                    'alerte_id' => 2057,
                                    'question' => 'Utilisez-vous une cage de parage facilement ?',
                                    'reponse' => 'cage de parage difficilement utilisée',
                                    'categorie_id' => 4,
                                ),
                                1921 => 
                                array (
                                    'id' => 2404,
                                    'alerte_id' => 2057,
                                    'question' => 'Avez-vous suivi une formation de parage bovin ?',
                                    'reponse' => 'manque de formation sur le parage bovin',
                                    'categorie_id' => 4,
                                ),
                                1922 => 
                                array (
                                    'id' => 2405,
                                    'alerte_id' => 2058,
                                    'question' => 'La ration présente-t-elle un excès d\'amidon ou sucres dans la ration ?',
                                    'reponse' => 'excès d\'amidon ou sucres dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1923 => 
                                array (
                                    'id' => 2406,
                                    'alerte_id' => 2058,
                                    'question' => 'La ration présente-t-elle un manque de fibrosité ?',
                                    'reponse' => 'manque de fibrosité dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1924 => 
                                array (
                                    'id' => 2407,
                                    'alerte_id' => 2058,
                                    'question' => 'La ration présente-t-elle un déficit énergétique ?',
                                    'reponse' => 'déficit énergétique dans la ration',
                                    'categorie_id' => 1,
                                ),
                                1925 => 
                                array (
                                    'id' => 2408,
                                    'alerte_id' => 2058,
                                    'question' => 'Les bétons neufs ont-ils été neutralisés ?',
                                    'reponse' => 'bétons neufs non neutralisés',
                                    'categorie_id' => 2,
                                ),
                                1926 => 
                                array (
                                    'id' => 2409,
                                    'alerte_id' => 2058,
                                    'question' => 'Le bâtiment présente-t-il une humidité permanente sur les sols ? raclées ?',
                                    'reponse' => 'humidité permanente sur les sols',
                                    'categorie_id' => 2,
                                ),
                                1927 => 
                                array (
                                    'id' => 2410,
                                    'alerte_id' => 2058,
                                    'question' => 'Le raclage des aires de vie est-il suffisamment fréquent ?',
                                    'reponse' => 'raclage des aires de vie pas assez fréquent',
                                    'categorie_id' => 2,
                                ),
                                1928 => 
                                array (
                                    'id' => 2411,
                                    'alerte_id' => 2058,
                                    'question' => 'La sélection du troupeau est-elle axée sur les aptitudes fonctionnelles ?',
                                    'reponse' => 'sélection pas axée sur les aptitudes fonctionnelles',
                                    'categorie_id' => 6,
                                ),
                                1929 => 
                                array (
                                    'id' => 2412,
                                    'alerte_id' => 2058,
                                    'question' => 'Y-a-t-il des cailloux, silex sur les chemins d\'accès ?',
                                    'reponse' => 'cailloux et silex sur les chemins d\'accès',
                                    'categorie_id' => 7,
                                ),
                                1930 => 
                                array (
                                    'id' => 2413,
                                    'alerte_id' => 2058,
                                    'question' => 'Faites-vous intervenir le pareur 2 fois par an ?',
                                    'reponse' => 'intervention du pareur pas assez fréquente',
                                    'categorie_id' => 4,
                                ),
                                1931 => 
                                array (
                                    'id' => 2414,
                                    'alerte_id' => 2058,
                                    'question' => 'Êtes-vous équipé d’un pédiluve ? L’utilisez-vous régulièrement ?',
                                    'reponse' => 'pas de ou pas utilisé régulièrement',
                                    'categorie_id' => 4,
                                ),
                                1932 => 
                                array (
                                    'id' => 2415,
                                    'alerte_id' => 2058,
                                    'question' => 'Utilisez-vous une cage de parage facilement ?',
                                    'reponse' => 'cage de parage difficilement utilisée',
                                    'categorie_id' => 4,
                                ),
                                1933 => 
                                array (
                                    'id' => 2416,
                                    'alerte_id' => 2058,
                                    'question' => 'Avez-vous suivi une formation de parage bovin ?',
                                    'reponse' => 'manque de formation sur le parage bovin',
                                    'categorie_id' => 4,
                                ),
                                1934 => 
                                array (
                                    'id' => 2417,
                                    'alerte_id' => 4003,
                                    'question' => 'Le parasitisme est-il géré ?',
                                    'reponse' => 'Parasitisme insuffisamment géré',
                                    'categorie_id' => 8,
                                ),
                                1935 => 
                                array (
                                    'id' => 2419,
                                    'alerte_id' => 4013,
                                    'question' => 'Y-a-t-il eu une surconsommation accidentelles d\'aliments concentrés ou potentiellement toxiques ? ',
                                    'reponse' => 'Surconsommation de concentrés ou d’aliments toxiques',
                                    'categorie_id' => 1,
                                ),
                                1936 => 
                                array (
                                    'id' => 2420,
                                    'alerte_id' => 4013,
                                    'question' => 'Avez-vous vérifié avec votre vétérinaire que les brebis n’avaient pas de maladies abortives ?',
                                    'reponse' => 'Pas de vérification de la présence de maladies abortives',
                                    'categorie_id' => 5,
                                ),
                                1937 => 
                                array (
                                    'id' => 2421,
                                    'alerte_id' => 4013,
                                'question' => 'Le troupeau a-t-il subit un stress important ? (accident, météo, intrus, )',
                                    'reponse' => 'Stress important sur le troupeau',
                                    'categorie_id' => 7,
                                ),
                                1938 => 
                                array (
                                    'id' => 2422,
                                    'alerte_id' => 4013,
                                    'question' => 'Les femelles gestantes sont-elles suivies sur les aspects parasitismes ? ',
                                    'reponse' => 'Pas de suivi du parasitisme sur les gestantes',
                                    'categorie_id' => 8,
                                ),
                                1939 => 
                                array (
                                    'id' => 2423,
                                    'alerte_id' => 4013,
                                'question' => 'Les fourrages distribués sont-ils en bon état sanitaire ? (présence de moisissures, champignons)',
                                    'reponse' => 'Fourrage parfois moisi',
                                    'categorie_id' => 1,
                                ),
                                1940 => 
                                array (
                                    'id' => 2424,
                                    'alerte_id' => 4013,
                                    'question' => 'Y-a-t-il eu une transition alimentaire brutale ? ',
                                    'reponse' => 'Transition alimentaire brutale',
                                    'categorie_id' => 1,
                                ),
                                1941 => 
                                array (
                                    'id' => 2425,
                                    'alerte_id' => 4024,
                                    'question' => 'L’âge moyen des brebis n\'est-il pas trop élevé ?',
                                    'reponse' => 'Age moyen des brebis trop élevé',
                                    'categorie_id' => 6,
                                ),
                                1942 => 
                                array (
                                    'id' => 2426,
                                    'alerte_id' => 4055,
                                    'question' => 'La litière de la bergerie est-elle régulièrement curée ?',
                                    'reponse' => 'Curage de la bergerie pas assez fréquent',
                                    'categorie_id' => 2,
                                ),
                                1943 => 
                                array (
                                    'id' => 2427,
                                    'alerte_id' => 4049,
                                    'question' => 'La gestion du pâturage permet-elle d\'éviter le retour des animaux sur des parcelles infestées ?',
                                    'reponse' => 'Retour du troupeau sur des parcelles infestées',
                                    'categorie_id' => 8,
                                ),
                                1944 => 
                                array (
                                    'id' => 2428,
                                    'alerte_id' => 4049,
                                    'question' => 'Le pâturage ras < à 5 cm est-il évité ? ',
                                'reponse' => 'Pâturage trop ras (< 5cm)',
                                    'categorie_id' => 8,
                                ),
                                1945 => 
                                array (
                                    'id' => 2429,
                                    'alerte_id' => 4049,
                                    'question' => 'Y-a-t-il alternance de différentes espèces au pâturage ?',
                                    'reponse' => 'Par d’alternance possible de différentes espèces sur les mêmes pâtures',
                                    'categorie_id' => 8,
                                ),
                                1946 => 
                                array (
                                    'id' => 2430,
                                    'alerte_id' => 4049,
                                    'question' => 'Tenez-vous à jour un planning de pâturage ? ',
                                    'reponse' => 'Pas de planning de pâturage à jour',
                                    'categorie_id' => 8,
                                ),
                                1947 => 
                                array (
                                    'id' => 2431,
                                    'alerte_id' => 4049,
                                    'question' => 'La pâture est-elle intégrée dans une alternance fauche-pâture ? ',
                                    'reponse' => 'Pas d’association pâturage / fauche',
                                    'categorie_id' => 8,
                                ),
                                1948 => 
                                array (
                                    'id' => 2432,
                                    'alerte_id' => 4049,
                                    'question' => 'Les prairies entrent-elles dans la rotation des cultures ?',
                                    'reponse' => 'Les prairies n’entrent pas dans les rotations de cultures',
                                    'categorie_id' => 8,
                                ),
                                1949 => 
                                array (
                                    'id' => 2433,
                                    'alerte_id' => 4049,
                                    'question' => 'L\'infestation fait-elle suite à un hiver doux ? ',
                                    'reponse' => 'Hiver précédent très doux',
                                    'categorie_id' => 8,
                                ),
                                1950 => 
                                array (
                                    'id' => 2434,
                                    'alerte_id' => 4049,
                                    'question' => 'Le choix de traiter collectivement est-il décider suite à des analyses coproscopiques et/ou sérologique, et répond-il à une stratégie globale de gestion parasitaire à l’échelle du troupeau ?',
                                    'reponse' => 'Pas de stratégie globale dans les choix de traitement des animaux',
                                    'categorie_id' => 8,
                                ),
                                1951 => 
                                array (
                                    'id' => 2435,
                                    'alerte_id' => 4049,
                                    'question' => 'La fréquence des traitements anthelminthiques ne favorise-t-elle pas les résistances ? ',
                                    'reponse' => 'Fréquence de traitements favorisant les résistances',
                                    'categorie_id' => 8,
                                ),
                                1952 => 
                                array (
                                    'id' => 2436,
                                    'alerte_id' => 4049,
                                    'question' => 'La race du troupeau est-elle adaptée au milieu infesté ? ',
                                    'reponse' => 'Race non adaptée à de fortes infestations parasitaires',
                                    'categorie_id' => 6,
                                ),
                                1953 => 
                                array (
                                    'id' => 2445,
                                    'alerte_id' => 4036,
                                    'question' => 'La ration est-elle riche en céréales et acidogène ? ',
                                    'reponse' => 'Ration trop riche en céréales et acidogène',
                                    'categorie_id' => 1,
                                ),
                                1954 => 
                                array (
                                    'id' => 2446,
                                    'alerte_id' => 4025,
                                'question' => 'L’ambiance du bâtiment (température, humidité, condensation, murs froids) est-elle confortable pour des agneaux ?',
                                    'reponse' => 'Ambiance du bâtiment inconfortable pour les agneaux',
                                    'categorie_id' => 2,
                                ),
                                1955 => 
                                array (
                                    'id' => 2447,
                                    'alerte_id' => 4025,
                                'question' => 'Mes agneaux boivent-ils bien un bon colostrum, et en quantité suffisante (attention à chacun dans une portée multiple !) ?',
                                    'reponse' => 'Buvée de colostrum insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1956 => 
                                array (
                                    'id' => 2449,
                                    'alerte_id' => 4025,
                                    'question' => 'Le temps consacré aux soins et à la surveillance des nouveaux nés est-il suffisant ? ',
                                    'reponse' => 'Surveillance des nouveaux-nés insuffisante',
                                    'categorie_id' => 4,
                                ),
                                1957 => 
                                array (
                                    'id' => 2450,
                                    'alerte_id' => 4024,
                                    'question' => 'La ration est-elle suffisamment pourvue en minéraux et vitamines ? ',
                                'reponse' => 'Apports en vitamines et/ou minéraux (sélénium) insuffisants',
                                    'categorie_id' => 1,
                                ),
                                1958 => 
                                array (
                                    'id' => 2451,
                                    'alerte_id' => 4025,
                                    'question' => 'La ration est-elle suffisamment pourvue en minéraux et vitamines ? ',
                                'reponse' => 'Apports en vitamines et/ou minéraux (sélénium) insuffisants',
                                    'categorie_id' => 1,
                                ),
                            ));
        
        
    }
}