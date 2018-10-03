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
      <div class="titre d-flex flex-row bg-otojaune text-light">
        <img class="card-img-top" src="{{URL::asset('svg')}}/saisie.svg" alt="Card image cap">
        <h5 class="card-title">Nouvelle saisie</h5>
      </div>
      <p></p>
    </a>
  </div>
  <br />
  <div class="card">
    <div class="card-body d-flex flex-column">
      <p class="card-text petit-espace-dessous">Vous souhaitez revoir vos saisies précédentes&nbsp?</p>
    </div>
    @if($nbSaisies > 0)
      <a href="{{route('lecture.liste')}}" class="">
        <div class="titre d-flex flex-row bg-otorange">
          <img class="card-img-top" src="{{URL::asset('svg')}}/lecture.svg" alt="Card image cap">
          <h5 class="card-title">Lecture ({{$nbSaisies}} saisies)</h5>
        </div>
      </a>
    @else
      <div class="titre d-flex flex-row bg-seondary">
        <img class="card-img-top" src="{{URL::asset('svg')}}/lecture.svg" alt="Card image cap">
        <h5 class="card-title">Il n'y a pas encore de saisie à consulter</h5>
      </div>
    @endif
  </div>

</div>
@endsection()
