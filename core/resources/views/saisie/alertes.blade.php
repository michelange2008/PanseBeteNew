@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_alertes')

@section('contenu')
<div class="container-fluid bg-otobleu titre">
  <img src="{{asset(config('chemins.saisie')).'/'.session()->get('theme')->icone}}" alt="{{session()->get('theme')->nom}}" class="otoveil">
  <h5>{{ucfirst(session()->get('theme')->nom)}}</h5>
</div>

@if($errors->any())

  <div class="alert alert-danger">

    <strong>Oups, nous n'avons pas pu valider votre saisie pour la raison suivante</strong>

    <ul class="list-unstyled">
      @foreach($errors->all() as $error)

        <li>
          {{ $error }}
        </li>

      @endforeach
    </ul>

  </div>

@endif

<div class="container-fluid">
  {{Form::open(['route' => 'saisie.enregistre'])}}
  <input type="hidden" name="type" value="{{config('constantes.pol')}}">

  @foreach($alertes as $alerte)

  <?php
    $value ="";
    $attention = "";
    foreach ($sAlertes as $sAlerte ) {
      if($sAlerte->alerte_id === $alerte->id)
      {
        $value = $sAlerte->valeur;
        $attention = "attention";
      }
    }
   ?>

  <div class="affiche alerte-item">
    <p class="{{$attention}}">{{$alerte->id}} - {{$alerte->nom}}</p>
    <div>
      @if($alerte->type = "liste" && $alerte->critalertes->count() > 0)
      <?php // construction du tableau pour la liste déroulante
        $liste = [];
        foreach($alerte->critalertes as $crit){
          $liste[] = $crit->nom;
        }
       ?>
        {{Form::select('alerte_'.$alerte->id, $liste, $value)}}
      @else()
      <input
        name="alerte_{{$alerte->id}}"
        type="number"
        placeholder="{{ old('alerte_'.$alerte->id) }}"
        class="zone-saisie"
        value = "{{$value}}"
      />
        {{Form::label('alerte_'.$alerte->id, $alerte->unite)}}

      @endif()
    </div>

  </div>

  @endforeach()

  {{Form::submit('envoyer', ['class' => 'btn btn-otorange rounded-0'])}}
  <a href="{{route('saisie.accueil')}}" class="btn btn-otobleu rounded-0" title="revenir à la liste">retour</a>
  {{Form::close()}}
</div>

@endsection()
