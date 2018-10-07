<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saisie;
use App\Models\Theme;
use App\Models\Salerte;
use App\Models\Sorigine;

class LectureController extends Controller
{
    public function liste()
    {
      if(session()->has('espece')){

        $listeSaisies = Saisie::where('user_id', auth()->user()->id)->where('espece_id', session('espece')->id)->get();

        if($listeSaisies->count() === 0)
        {
          return redirect()->action('AccueilController@choix', session()->get('espece'));
        }

      }else{
        return redirect()->action('AccueilController@accueil');
      }

        return view('lecture.liste', [
            'liste' => $listeSaisies,
        ]);
    }

    public function detail($saisie_id) {

//         session()->put('lecture_id', $saisie_id);

        $saisie = Saisie::find($saisie_id);

        $themes = Theme::all();

//         dd($saisie->salertes->first()->alerte->theme->id);

        return view('lecture.detail', [
            'saisie' => $saisie,
            'themes' => $themes,
        ]);
    }

    public function supprimer($saisie_id)
    {
      Saisie::destroy($saisie_id);

      return redirect()->back()->with('message', "Cette saisie a été supprimée");
    }

    public function observations($salerte_id)
    {
      $tableNomOrigines = [];

      foreach(Sorigine::where('salerte_id', $salerte_id)->get() as $sorigine)
      {
          $tableNomOrigines[] = $sorigine->origine->question;
      }

      return response()->json($tableNomOrigines, 200);
    }
}
