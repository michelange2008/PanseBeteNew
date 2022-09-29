<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Saisie;
use App\Models\Theme;
use App\Models\Alerte;
use App\Comp\Titre;
/**
* Gère la comparaison entre différentes saisies d'une même user
*
* Affichage d'une page pour le choix des saisies à comparer
* pis des résultats, ...etc.
*
*/
class CompareController extends Controller
{
  /**
  * Affiche une liste de saisie d'un user
  * pour que l'on puisse choisir les saisies à comparer
  *
  * @param Void
  * @return View
  */
  public function index()
  {
    $saisies = Saisie::where('user_id', auth()->user()->id)
    ->orderByDesc('created_at')
    ->get();
    $titre = new Titre(icone:'divers/compare_blanc.svg', titre:'compare_index');

    return view('compare.index', [
      'titre' => $titre,
      'saisies' => $saisies,
    ]);
  }

  /**
  * undocumented function summary
  *
  * Undocumented function long description
  *
  * @param type var Description
  * @return return type
  */
  public function choix(Request $request)
  {
    $saisies_choisies = $request->except('_token');
    $saisies = Saisie::where('user_id', auth()->user()->id)
    ->whereIn('id', $saisies_choisies)
    ->orderBy('created_at', 'desc')
    ->get();

    if($saisies->count() < 2) {

      return redirect()->back()->with([
      'message' => 'deux_saisies',
      'couleur' => 'alert-danger',
      ]);

    } else {

      $themes = Theme::all();

      $compare = collect();
      $compare->entete = collect();
      $compare->entete->push('Nom des thèmes');

      foreach ($saisies as $saisie) {
        $compare->entete->push($saisie);
      }
      $compare->lignes = collect();

      // on passe en revue chaque thème
      foreach ($themes as $theme) {
        // On recherche les id des alertes de ce thème
        $alertes = Alerte::select('id')->where('theme_id', $theme->id)->get();
        // On crée un tableau vide
        $alertes_id = [];
        // On passe en revue la liste des id des alertes
        foreach ($alertes as $alerte) {
          // Et on l'ajoute au tableau vide
          $alertes_id[] = $alerte->id;
        }
        // Nouvelle collection pour y mettre le nombre d'alertes de chaque saisie
        $nb_salertes = [];
        // On y met d'abord le nom du thème avec son id en key
        $nb_salertes["theme"] = $theme;

        // On passe en revue les saisies
        foreach ($saisies as $saisie) {
          // Pour chaque saisie on cherche le nombre de salertes avec danger et
          // correspondant aux alertes du thème
          $salertes = $saisie->salertes->where('danger', true)
                                  ->whereIn('alerte_id', $alertes_id)->count();
          // On ajoute le nombre de salertes au tableau avec l'id de la saisie en key²
          $nb_salertes[$saisie->id] = $salertes;
        }
        // Et on ajoute une nouvelle ligne à la collection compare->lignes
        $compare->lignes->push($nb_salertes);

      }

      $titre = new Titre(icone:'divers/compare_blanc.svg', titre:'compare_result');
      return view('compare.compare', [
        'saisies_choisies' => implode('_', $saisies_choisies),
        'compare' => $compare,
        'titre' => $titre,
      ]);

    }
  }

  /**
   * Permet d'afficher la comparaison des alertes pour un thème donné
   *
   * @param Theme
   * @param String n° de saisies séparé par un underscore
   * @return return view
   */
  public function theme(Theme $theme, $saisies_choisies)
  {
    $saisies_tab = explode('_', $saisies_choisies);
    $saisies = Saisie::whereIn('id', $saisies_tab)->orderByDesc('created_at')->get();
    $salertes = DB::table('salertes')
                    ->join('alertes', 'alertes.id', 'salertes.alerte_id')
                    ->join('saisies', 'saisies.id', 'saisie_id')
                    ->whereIn('saisie_id', $saisies_tab)
                    ->where('alertes.theme_id', $theme->id)
                    ->orderBy('alerte_id')
                    ->orderByDesc('saisies.created_at')
                    ->get();

    $titre = new Titre(icone:'saisie/'.$theme->icone, titre: $theme->nom, translate:false);

    return view('compare.salertes', [
      'saisies' => $saisies,
      'salertes' => $salertes->groupBy('nom'),
      'theme' => $theme,
      'titre' => $titre,
    ]);
  }
}
