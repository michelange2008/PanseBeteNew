<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Espece;
use App\Models\Alerte;
use App\Models\Numalerte;

use App\Comp\Titre;
use App\Fournisseurs\TabLab;

use App\Traits\LitJson;
use App\Traits\TypesTools;
use App\Traits\FormTemplate;

use Illuminate\Http\Request;

/*
// Gestions des alertes
 */
class AlerteController extends Controller
{

    use LitJson, TypesTools, FormTemplate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especes = Espece::all();

        $titre = new Titre('especes/especes.svg', 'choix_alertes_espece');

        return view('admin.alertes.choixAlertesEspece', [
          'especes' => $especes,
          'titre' => $titre,
        ]);
    }

    /**
     * Affiche la liste des alertes pour une espece donnée
     *
     *
     * @param type $espece_id
     * @return return view
     */
    public function indexParEspece($espece_nom)
    {
      $espece = Espece::where('nom', $espece_nom)->first();

      session( [ 'espece_id' => $espece->id]);

      $alertes = DB::table('alertes')->where('espece_id', $espece->id)
                    ->join('themes', 'themes.id', 'alertes.theme_id')
                    ->select('themes.nom as theme_nom', 'alertes.id as id',
                    'alertes.nom as alerte_nom', 'alertes.unite', 'alertes.actif',
                    'alertes.supprimable', 'alertes.id as origines')
                    ->orderBy('themes.id')
                    ->get();

      $tabLab = new TabLab($alertes, 'indexTabAlerte.json', 'especes/'.$espece->icone);

      $indexTab = $tabLab->get();

      return view('admin.index.indexCadre', [
        'indexTab' => $indexTab,
      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $elements = $this->createForm('formAlerte.json');

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
        $espece = Espece::find($request->espece_id);

        $alerte = new Alerte();
        $alerte->nom = $request->nom;
        $alerte->type_id = $request->type_id;
        $alerte->unite = $request->unite;
        $alerte->modalite_id = $request->modalite_id;
        $alerte->borne_inf = $request->borne_inf;
        $alerte->borne_sup = $request->borne_sup;
        $alerte->theme_id = $request->theme_id;
        $alerte->espece_id = $request->espece_id;
        $alerte->actif = ($request->actif !== null) ? $request->actif : 0;

        $alerte->save();

        return redirect()->route('alerte.indexParEspece', $espece->nom)
                          ->with('message', 'alerte_added');
    }

    /**
     * Même page que edit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alerte = alerte::find($id);
        // Utilisation de la classe titre avec la variable $translate à FALSE
        // pour indiquer qu'il ne faut pas appliquer la traduction à $alerte->nom
        $titre = new Titre('saisie/alertes_claire.svg', $alerte->nom, false);

        return view('admin.alertes.show', [
          'alerte' => $alerte,
          'titre' => $titre,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $alerte = Alerte::find($id);

      $elements = $this->editForm($alerte, 'formAlerte.json');

      return view('admin.editCreateForm', [
        'elements' => $elements,
        'id' => $id,
      ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
          'nom' => 'required|max:100',
        ]);

        Alerte::where('id', $id)
              ->update([
                'nom' => $request->nom,
                'type_id' => $request->type_id,
                'unite' => $request->unite,
                'modalite_id' => $request->modalite_id,
                'theme_id' => $request->theme_id,
                'actif' => ($request->actif == null) ? 0 : 1,
              ]);

        if($request->editParam) {

          if ($this->isListe($request->type_id)) {

            return redirect()->route('alerte.editParamListe', $id);

          } else {

            return redirect()->route('alerte.editParamNum', $id);

          }

        }

        return redirect()->route('alerte.show', $id)->with(['message' => __('messages.alerte_edit')]);
    }

    /**
     * fonction destinée à modifier les parametres des alertes de type liste
     *
     * @param int $id : alerte_id que l'on veut modifier
     */
    public function editParamListe($id)
    {
      // code...
    }

    /**
     * fonction destinée à modifier les parametres des alertes qui ne sont pas
     * de type liste mais de type valeur, ratio, pourcentage
     *
     * @param int $id : alerte_id que l'on veut modifier
     */
    public function editParamNum($id)
    {
      $alerteNum = Numalerte::where('alerte_id', $id)->first();

      $elements = $this->editForm($alerteNum, 'formAlerteNum.json', 'updateNum');

      $elements->titre->titre = $alerteNum->alerte->nom;
      $elements->titre->translate = false;
      $elements->titre->soustitre = 'edit_alerte_num';

      return view('admin.editCreateForm', [

        'elements' => $elements,

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
    public function updateNum(Request $request, $id)
    {
      dd($request->all());
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param type var Description
     * @return return type
     */
    public function updateListe(Request $request, $id)
    {
      dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alerte::destroy($id);

        return redirect()->back()->with('message', 'alerte_del');
    }
}
