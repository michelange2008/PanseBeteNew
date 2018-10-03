@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('menus.sousmenu')

@section('contenu')

<div class="container-fluid">


  <div class="card">
    <div class="card-body d-flex flex-column">
      <p class="card-text">Vous êtes prêts pour l'utilisation de Panse-bête... </p>

    </div>
    <a href="{{route('saisie.nouvelle')}}" class="">
      <div class="titre d-flex flex-row">
        <img class="card-img-top" src="{{URL::asset('svg')}}/saisie.svg" alt="Card image cap">
        <h5 class="card-title">Saisie</h5>
      </div>
    </a>
  </div>
  <br />
  <div class="card">
    <div class="card-body d-flex flex-column">
      <p class="card-text petit-espace-dessous">Vous souhaitez revoir votre saisie précédente&nbsp?</p>
    </div>
    <a href="{{route('lecture.liste')}}" class="">
      <div class="titre d-flex flex-row bg-orange">
        <img class="card-img-top" src="{{URL::asset('svg')}}/lecture.svg" alt="Card image cap">
        <h5 class="card-title">Lecture</h5>
      </div>
    </a>
  </div>

</div>
@endsection()
