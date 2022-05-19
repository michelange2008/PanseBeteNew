<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chiffre;

use App\Fournisseurs\ListeChiffresFournisseur;
use App\Traits\LitJson;

class ChiffreController extends Controller
{
  use LitJson;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $chiffres = Chiffre::all();

      $fournisseur = new ListeChiffresFournisseur();

      $datas = $fournisseur->renvoieDatas($chiffres, __('titres.list_chiffres'), 'tableauChiffres.json', 'default.svg', 'chiffre.create', __('boutons.add_chiffre'));

      return view('admin.chiffres.index', [
        'datas' => $datas,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $elements = $this->LitJson('createChiffres.json');
      $elements->route = "chiffre.store";

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
      $validated = $request->validate([
        'nom' => 'required|max:100',
        'groupe' => 'required',
      ]);

      Chiffre::create([
        'nom' => $request->nom,
        'groupe' => $request->groupe,
      ]);

      return redirect()->route('chiffre.index')
                      ->with( 'message', __('messages.chiffre_create') );

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
      $elements = $this->LitJson('createChiffres.json');

      $elements->liste->nom->isName = $chiffre->nom;
      $elements->liste->groupe->isOption = $chiffre->groupe;
      $elements->route = 'chiffre.update';
      $elements->route_id = $chiffre->id;

      return view('admin.edit', [
          'elements' => $elements,
          'chiffre' => $chiffre,
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
        'groupe' => 'required',
      ]);

      Chiffre::where('id', $id)->update([
        'nom' => $request->nom,
        'groupe' => $request->groupe,
      ]);

      return redirect()->route('chiffre.index')
                      ->with( 'message', __('messages.chiffre_update') );
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
                        ->with( 'message', __('messages.chiffre_del') );

    }
}
