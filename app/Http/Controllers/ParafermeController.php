<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Paraferme;

use App\Comp\Titre;
use App\Fournisseurs\TabLab;

use App\Traits\LitJson;
use App\Traits\TypesTools;
use App\Traits\FormTemplate;

class ParafermeController extends Controller
{

  use LitJson, TypesTools, FormTemplate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parafermes = DB::table('parafermes')->get();

        $tabLab = new TabLab(datas: $parafermes, json: 'indexTabParaferme.json');

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
        $elements = $this->createForm('formParaferme.json');

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
      $validator = Validator::make($request->all(), [
        'nom' => 'required|max:191',
        'unite' => 'nullable|max:10',
        'type' => 'required',
        'liste' => Rule::requiredIf(fn() => $request->type == 'liste'),
      ])->validate();

      // Si le type est "liste" on prépare la liste sous forme d'un json
      if($request->type == 'liste') {
          // On transforme la liste en tableau avec la virgule comme séparateur
          $liste = explode(',', $request->liste);
          // On transforme ca en json
          $listeForJson = [];
          // $listeJson = "{";
          // foreach ($liste as $key => $value) {
          //   $listeJson = $listeJson.strval($key+1).':'.$value
          // }



      } else {

          $listeJson = null;

      }
      // Et on stocke les infos
      $paraferme = new Paraferme();
      $paraferme->nom = $request->nom;
      $paraferme->unite = $request->unite;
      $paraferme->type = $request->type;
      $paraferme->liste = $listeJson;

      $paraferme->save();

      return redirect()->route('paraferme.index')->with(['message' => 'paraferme_store']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paraferme  $paraferme
     * @return \Illuminate\Http\Response
     */
    public function show(paraferme $paraferme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paraferme  $paraferme
     * @return \Illuminate\Http\Response
     */
    public function edit(paraferme $paraferme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paraferme  $paraferme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paraferme $paraferme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paraferme  $paraferme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paraferme::destroy($id);

        return redirect()->back()->with(['message' => 'paraferme_del']);
    }
}
