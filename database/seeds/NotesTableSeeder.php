<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notes')->delete();
        
        \DB::table('notes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 140,
                'note_fond' => 3,
                'avis_fond' => 'Je les utilise dans le cadre d\'un bilan pour un groupe d\'éleveurs ovins et caprins en bio, pour partir sur de bonnes bases et que chacun puisse évaluer l\'état d\'équilibre de son troupeau. 
C\'est un bon outil, même si en général les éleveurs sont déjà performants sur la santé (peu de seuil d\'alerte atteints). Ils apprécient néanmoins avoir des indicateurs comme ceux proposés dans l\'outil. 
Le coté papier est assez encombrant est parfois long à dérouler, je saute parfois certaines questions.',
                'note_forme' => 2,
                'avis_forme' => 'Très pratique pour synthétiser les réponses et retrouver tous les élevages que \'jaccompagne. Cependant elle pourrait être optimisée : 
- dommage que dans le compte rendu on ne voit les résultats que si on dépsse les seuils d\'alerte. Ce serait bien de tout afficher pour pouvoir comparer entre les personnes et d\'une année sur l\'autre. 
- ce serait bien de pouvoir ajouter des commentaires : par exemple mortalité 8% --> l\'éleveur sait que c\'était du à une période d\'entérotoxémie : on ajoute
- traitement parasitaires : pas de traitement chimique mais utilisation de traitement alternatifs préventifs : ce serait intéressant de pouvoir noter. Je fais des rajouts manuels à la main après en attendant. 
- le pdf compte-rend est très pratique mais je trouve que la première page qui liste les problèmes n\'est pas adaptée car ça mets en avant tout ce qui ne va pas hors de son contexte, je trouve que le mettre en doussus des pôles suffit, et ensuite c\'est au technicne / véto de faire la synthèse. 
- dommage que les questions ne sont pas similaire entre chèvres et brebis : exemple du parasitisme : dans la grille chèvre on demande s\'il y a des traitements de synthèse systèmatiques, le nombre d\'OPG etc, mais pas en brebis. Il faudra ajouter une case "analyses copro : moins d\'une fois / an, 1 à 2 fois / an, +2 fois / an" 

Quelques bugs aussi sur l\'application quand on l\'utilise directement en élevage, dès fois on complète et on envoie les réponses mais si on revient plus tard sur l\'ordinateur en fait ce n\'est pas enregistré.',
                'utilisation' => 2,
                'created_at' => '2019-12-04 15:26:38',
                'updated_at' => '2019-12-04 15:26:38',
            ),
        ));
        
        
    }
}