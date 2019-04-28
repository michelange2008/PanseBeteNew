@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_aide')

@section('contenu')

  <div class="container-fluid alert alert-success">
    <h2> <img class="aide-icones" src="{{config('chemins.images')}}instructions.svg" alt="mode d'emploi"> Aide</h2>
  </div>
  <div class="col-md-4">
    <a class="align-middle" href="{{route('aide.video')}}">
      <button class="btn btn-otobleu rounded-0" type="button" name="button"><i class="fas fa-video"></i> Voir le tutoriel</button>
    </a>
  </div>
  <div class="col-md-6 m-3 p-3 border">
      <p>A chaque page, vous trouverez une aide en cliquant sur <img class="aide-icones-petite" src="{{config('chemins.images')}}aide.svg" alt="aide"> </p>
  </div>
  <div class="">
    <h4>Deux indications pour démarrer</h4>
  </div>
    <div class="col-md-7 m-3 p-3 border">
      <p>Pour démarrer: menu <i class="fas fa-bars"></i> <strong>Accueil</strong></p>
      <p>Vous pourrez faire une nouvelle saisie en cliquant sur le type de troupeau que vous avez.</p>
      <img class="img-fluid" src="{{config('chemins.aide')}}aide_accueil.svg" alt="">

      <div class="col-md-2">
      </div>
      <div class="col-md-8 d-flex flex-row m-3 p-3 align-items-center border">
        <p>Cela ouvre une fenêtre où vous pouvez saisir le nom de l'élevage </p>
        <img class="pl-3 img-fluid" src="{{config('chemins.aide')}}aide_nouvelle_saisie.svg" alt="">
      </div>
      <div class="col-md-6 m-3 p-3 border shadow">
        <p>Et pour la suite, vous trouverez de l'aide en cliquant sur <img class="aide-icones-petite" src="{{config('chemins.images')}}aide.svg" alt="aide"> </p>
        <a href="{{route('accueil')}}">
          <button class="btn btn-otobleu btn-lg">C'est parti !</button>
        </a>
      </div>
    </div>
@endsection
