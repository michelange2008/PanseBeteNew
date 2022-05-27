<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Espece;
use App\Models\Alerte;
use App\Models\Theme;
use App\Models\Type;
use App\Models\Modalite;

use App\Comp\Titre;
use App\Fournisseurs\TabLab;

use App\Traits\LitJson;
use App\Traits\CreateForm;

use Illuminate\Http\Request;

/*
// Gestions des alertes
 */
class AlerteController extends Controller
{

    use LitJson, CreateForm;
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
                    'alertes.nom as alerte_nom', 'alertes.modalite',
                    'alertes.type', 'alertes.unite', 'alertes.actif',
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
        $elements = $this->createForm('createAlerte.json');

        return view('admin.create', [
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

        $alerte = new ALerte();
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
