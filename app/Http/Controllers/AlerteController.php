<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Espece;
use App\Models\Alerte;
use App\Models\Theme;

use App\Comp\Titre;
use App\Fournisseurs\TabLab;

use App\Traits\LitJson;

use Illuminate\Http\Request;

/*
// Gestions des alertes
 */
class AlerteController extends Controller
{

    use LitJson;
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
      $alertes = DB::table('alertes')->where('espece_id', $espece->id)
                    ->join('themes', 'themes.id', 'alertes.theme_id')
                    ->select('themes.nom as theme_nom', 'alertes.id as id',
                    'alertes.nom as alerte_nom', 'alertes.modalite',
                    'alertes.type', 'alertes.unite', 'alertes.actif')
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
        $themes = Theme::all();
        $especes = Espece::all();

        $elements = $this->litJson('createAlerte.json');

        $elements->liste->theme->options = $themes;

        $elements->liste->espece->options = $especes;

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
        dd($request->all());
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
