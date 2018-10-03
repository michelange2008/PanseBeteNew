@extends('layouts.app')

@extends('menus.sousmenu')

@section('contenu')

<div class="container-fluid bg-success titre">
  <img src="{{URL::asset('svg/saisie')}}/oeil.svg" alt="regard" class="">
  <h5>Pôles d'observation</h5>
</div>

<div class="container-fluid">
  @foreach($themes as $theme)

  <div class="espece-item theme-item bg-secondary d-flex flex-row">
    <img src="{{URL::asset('svg/saisie')."/".$theme->icone}}" alt="{{$theme->nom}}" />
    <div class="coupe">
      <a href="{{route('saisie.alertes', ['theme_id' => $theme->id])}}" class="btn btn-secondary">{{ucfirst($theme->nom)}}</a>
    </div>
  </div>
  @endforeach()
</div>

<div class="container-fluid d-flex justify-content-end">
  <a href="{{route('lecture.detail', session('saisie_id'))}}" class="btn btn-info rounded-0">J'ai fini et je veux voir la synthèse</a>
</div>
@endsection()
