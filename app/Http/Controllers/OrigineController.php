<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Fournisseurs\TabLab;

use App\Models\Alerte;

class OrigineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param type var Description
     * @return return type
     */
    public function indexParAlerte($alerte_id)
    {
      $origines = DB::table('origines')->where('alerte_id', $alerte_id)
                  ->join('categories', 'categories.id', 'origines.categorie_id')
                  ->select('categories.icone as categorie_icone', 'origines.id as id',
                  'categories.nom as categorie_nom', 'origines.question as question',
                  'origines.reponse as reponse')
                  ->get();
      $alerte = ALerte::find($alerte_id);
      $tabLab = new TabLab($origines, 'indexTabOrigine.json', null, $alerte->nom);

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
