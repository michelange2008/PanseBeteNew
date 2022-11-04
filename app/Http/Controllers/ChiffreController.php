<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Models\Chiffre;

use App\Fournisseurs\TabLab;

use App\Traits\LitJson;
use App\Traits\FormTemplate;

class ChiffreController extends Controller
{
  use LitJson, FormTemplate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $chiffres = DB::table('chiffres')
                    ->join('groupes', 'groupes.id', 'chiffres.groupe_id')
                    ->join('typenums', 'typenums.id', 'chiffres.typenum_id')
                    ->select('chiffres.id as id', 'chiffres.nom as chiffre_nom',
                    'groupes.nom as groupe_nom', 'typenums.nom as typenum',
                    'chiffres.min as min', 'chiffres.actif as actif',
                    'chiffres.requis as requis', 'chiffres.supprimable')
                    ->orderBy('groupes.id')
                    ->get();

      $tablab = new TabLab($chiffres, 'indexTabChiffre.json', 'saisie/chiffres_clair.svg');
// TODO: Doublons sur nombre veaux morts dans les 1ères 24h -> cf parametreVL.json
      $indexTab = $tablab->get();

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
      $elements = $this->createForm('formChiffres.json');

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
      $validated = $request->validate([
        'nom' => 'required|max:100',
      ]);

      Chiffre::create([
        'nom' => $request->nom,
        'groupe_id' => $request->groupe_id,
        'typenum_id' => $request->typenum_id,
        'min' => $request->min,
        'actif' => ($request->actif != null) ? $request->actif : 0,
        'requis' => ($request->requis != null) ? $request->requis : 0,
      ]);

      return redirect()->route('chiffre.index')
                      ->with( 'message', 'chiffre_create');

    }

    /**
     * Display the specified resource.
     * Utilisation d'une seule vue pour show et edit
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return redirect()->route('chiffre.edit', $id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $chiffre = Chiffre::find($id);

      $elements = $this->editForm($chiffre, 'formChiffres.json');

      return view('admin.editCreateForm', [
          'elements' => $elements,
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
        'groupe_id' => 'required',
      ]);

      Chiffre::where('id', $id)->update([
        'nom' => $request->nom,
        'groupe_id' => $request->groupe_id,
        'typenum_id' => $request->typenum_id,
        'min' => $request->min,
        'actif' => ($request->actif != null) ? $request->actif : 0,
        'requis' => ($request->requis != null) ? $request->requis : 0,
      ]);

      return redirect()->route('chiffre.index')
                      ->with( 'message', 'chiffre_update' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chiffre::destroy($id);

        return redirect()->route('chiffre.index')
                        ->with( 'message', 'chiffre_del' );

    }
}
