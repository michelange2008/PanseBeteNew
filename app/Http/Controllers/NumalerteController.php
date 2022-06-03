<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alerte;
use App\Models\Numalerte;
use App\Fournisseurs\TabLab;

use App\Traits\FormTemplate;

class NumalerteController extends Controller
{
  use FormTemplate;

  /**
   * Non implémenté car numalerte liée à alerte
   *
   */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     *
     * @param $alerte_id id de l'alerte qui vient d'être crée dans AlerteController
     * @return \Illuminate\Http\Response
     */
    public function create($alerte_id)
    {
      $alerte = Alerte::find($alerte_id);

      $elements = $this->createForm('formAlerteNum.json');

      $elements->titre->titre = $alerte->nom." ( ".$alerte->type->nom." )";
      $elements->titre->translate = false;
      $elements->titre->soustitre = 'create_alerte_num';
      $elements->liste->alerte_id->isName = $alerte->id;

      return view('admin.editCreateForm', [

        'elements' => $elements,

      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      Numalerte::create([
        'alerte_id' => $request->alerte_id,
        'borne_inf' => $request->borne_inf,
        "borne_sup" => $request->borne_sup,
        "num_id" => $request->num_id,
        "denom_id" => $request->denom_id,
      ]);

      return redirect()->route('alerte.show', $request->alerte_id)
      ->with(['message' => 'alerte_edit']);

    }

    /**
     * Non implémenté car numalerte liée à alerte
     *
     */
    public function show($id) {}

    /**
     * fonction destinée à modifier les parametres des alertes qui ne sont pas
     * de type liste mais de type valeur, ratio, pourcentage
     *
     * @param int $id : alerte_id que l'on veut modifier
     */
    public function edit($id)
    {
      $alerteNum = Numalerte::where('alerte_id', $id)->first();

      $elements = $this->editForm($alerteNum, 'formAlerteNum.json');

      $elements->titre->titre = $alerteNum->alerte->nom." ( ".$alerteNum->alerte->unite." )";
      $elements->titre->translate = false;
      $elements->titre->soustitre = 'edit_alerte_num';

      return view('admin.editCreateForm', [

        'elements' => $elements,

      ]);

    }

    /**
     * Mise à jour des paramètres numériques d'une alerte
     *
     */
    public function update(Request $request, $id)
    {
      Numalerte::where('id', $id)
                ->update([
                  'alerte_id' => $request->alerte_id,
                  'borne_inf' => $request->borne_inf,
                  "borne_sup" => $request->borne_sup,
                  "num_id" => $request->num_id,
                  "denom_id" => $request->denom_id,
                ]);

      return redirect()->route('alerte.show', $request->alerte_id)
                            ->with(['message' => 'alerte_edit']);

    }

    /**
    * Non implémenté car numalerte liée à alerte
     */

    public function destroy($id) {}
}
