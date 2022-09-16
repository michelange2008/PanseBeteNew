<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Saisie;
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

      return view('compare.index', [
        'saisies' => $saisies,
      ]);
    }
}
