<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests\StoreparafermeRequest;
use App\Http\Requests\UpdateparafermeRequest;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreparafermeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreparafermeRequest $request)
    {
        //
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
     * @param  \App\Http\Requests\UpdateparafermeRequest  $request
     * @param  \App\Models\paraferme  $paraferme
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateparafermeRequest $request, paraferme $paraferme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paraferme  $paraferme
     * @return \Illuminate\Http\Response
     */
    public function destroy(paraferme $paraferme)
    {
        //
    }
}
