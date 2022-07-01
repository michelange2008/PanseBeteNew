<?php

namespace App\Http\Controllers;

use App\Models\Ami;
use App\Models\User;
use Illuminate\Http\Request;
use App\Comp\Titre;

class AmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
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
     * @param  \App\Models\Ami  $ami
     * @return \Illuminate\Http\Response
     */
    public function show(Ami $ami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ami  $ami
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // On récupère tous les utilisateurs sauf l'user connecté
        $users = User::where('id', '<>', $user->id)->orderBy('name')->get();
        // On récupère la liste d'amis de l'user
        $liste_amis = Ami::where('user_id', $user->id)->get();
        // On crée un tableau vide
        $amis_id = [];
        // on passe en revue la liste d'amis
        foreach($liste_amis as $ami) {
          // Pour ajouter les id des amis dans le tableau vide
          $amis_id[] = $ami->ami_id;
        }
        // Et on recherche tous les users dont l'id est dans le tableau d'amis
        $amis = $users->find($amis_id);

        $non_amis = $users->diff($amis);

        $titre = new Titre(icone: "default.svg", titre: "amis_edit");

        return view('user.editAmis', [
          'user' => $user,
          'non_amis' => $non_amis,
          'amis' => $amis,
          'titre' => $titre,
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ami  $ami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $datas = collect($request->all());
        // On élimine les infos inutiles
        $datas->pull('_token');
        $datas->pull('_method');
        // on récupère les clefs = id des users choisis comme amis
        $amis_id = $datas->keys()->all();
        // On supprime tous les amis existants
        Ami::where('user_id', $user->id)->delete();
        // Et on crée l'ami pour chaque cas
        foreach ($amis_id as $ami_id) {
          Ami::create([
            'user_id' => $user->id,
            'ami_id' => $ami_id,
          ]);

        }

        return redirect()->route('user.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ami  $ami
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ami $ami)
    {
        //
    }
}
