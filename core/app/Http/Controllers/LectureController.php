<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saisie;
use App\Models\Theme;
use App\Models\Salerte;
use App\Models\Sorigine;
use App\Models\Elevage;
use App\Models\Espece;

class LectureController extends Controller
{
    public function liste($espece_id)
    {
        session()->put('espece', Espece::findOrFail($espece_id));

        $listeSaisies = Saisie::where('user_id', auth()->user()->id)->where('espece_id', session('espece')->id)->get();

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
      $elevage = Saisie::where('id', $saisie_id)->first()->elevage_id;

      $effacerElevage = false;

      if(Saisie::where('elevage_id', $elevage)->count() === 1)
      {
        $effacerElevage = true;
      }

      Saisie::destroy($saisie_id);

      if($effacerElevage) Elevage::destroy($elevage);

      return redirect()->back();
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
