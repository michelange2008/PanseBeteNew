<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Saisie;
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
      dd($request->all());
    }
}
