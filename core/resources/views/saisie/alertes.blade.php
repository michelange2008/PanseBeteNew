@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide', ['page' => $page])

@section('contenu')
<div class="container-fluid bg-otobleu titre">
  <img src="{{URL::asset('svg/saisie')."/".session()->get('theme')->icone}}" alt="{{session()->get('theme')->nom}}" class="">
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

  {{Form::submit('envoyer', ['class' => 'btn btn-otobleu btn-sm'])}}
  <a href="{{route('saisie.accueil')}}" class="btn btn-sm btn-otorange" title="revenir à la liste">retour</a>
  {{Form::close()}}
</div>

@endsection()
