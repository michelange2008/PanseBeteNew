@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')

<div class="container-fluid">
  <div class="alert bg-otobleu">
    <h3>Quel type d'approche souhaitez-vous ?</h3>
  </div>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-row  bg-otojaune align-items-center mb-3 p-3">
            <img class="img-40" src="{{asset(config('chemins.saisie'))}}/paralertes.svg" alt="">
            <h4 class="card-titletext-center pl-3">Approche par alertes</h4>
          </div>
          <p class="card-text">Dans cette approche, on saisie d'abord toutes les informations sur le troupeau: observation des animaux, mortalité, cellules, boiteries, etc.</p>
          <p class="card-text">sur la base de ces informations, Panse-Bêtes soulignera les situations qui constituent des alertes, c'est-à-dire où les indicateurs sont en dehors de certaines valeurs</p>
          <p class="card-text lead">Cette démarche donne tout son sens à la notion d'approche globale du troupeau</p>
          <a href="{{route('saisie.type', config('constantes.ale'))}}">
            <button class="btn btn-otojaune rounded-0"><i class="fas fa-file-alt"></i> valider</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-row  bg-otorange align-items-center mb-3 p-3">
            <img class="img-40" src="{{asset(config('chemins.saisie'))}}/parpole.svg" alt="">
            <h4 class="card-titletext-center pl-3">Approche par pôles</h4>
          </div>
          <p class="card-text">Dans cette approche, on considère les 7 pôles de l'élevage: aspect global, reproduction, maladies métaboliques, santé des jeunes, parasitisme, sante de la mamelle, santé des pieds.</p>
          <p class="card-text">Pôle après pôle, on saisit les informations concernant l'élevage et Panse-Bêtes renvoie un certain nombre d'alertes quand ces indicateurs sont en-dehos de certaines valeurs</p>
          <p class="card-text lead">Cette démarche permet de ne s'intéreser qu'à certains aspects de l'élevage, si on le souhaite.</p>
          <a href="{{route('saisie.type', config('constantes.pol'))}}">
            <button class="btn btn-otorange rounded-0"><i class="fas fa-globe"></i> valider</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
