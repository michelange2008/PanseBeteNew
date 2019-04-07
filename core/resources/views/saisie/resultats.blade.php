@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide', ['page' => $page])

@section('contenu')
<div class="container-fluid bg-otobleu titre">
  <img src="{{URL::asset('svg/saisie')."/".session()->get('theme')->icone}}" alt="{{session()->get('theme')->nom}}" class="">
  <h5>{{ucfirst(session()->get('theme')->nom)}} (résultats)</h5>
</div>
<div class="container-fluid">
  <p class="aide">
    (cliquer sur les flèches pour afficher les causes possibles)
  </p>
</div>
@if(isset($message))
  <div class="container-fluid bg-success">
    <h5>{{$message}}</h5>
  </div>
@endif
{{ Form::open(['route' => 'saisie.origines.store'])}}
<div class="container-fluid">
  @foreach($resultats as $resultat)
      <div id="alerte_{{$resultat->alerte->id}}" class="alerte-item bg-otorange deplie d-flex flex-row justify-content-between curseur">
        <div>
          <p class="font-weight-bold ">{{$resultat->alerte->nom}}</p>
          <p class=" text-light">
            @if($resultat->alerte->type !== 'liste')
            {{$resultat->valeur}} {{$resultat->alerte->unite}} (limite {{$resultat->alerte->niveau}} {{$resultat->alerte->unite}})
            @else

            @endif
          </p>
        </div>
        <div class="element-centre">
          <img id="img_{{$resultat->alerte->id}}" src="{{URL::asset('svg/saisie')}}/deplie.svg" alt="déplie" class="otoveil">
        </div>
      </div>
      <div id = "origine_{{$resultat->alerte->id}}" class ="non-affiche" >
      @foreach($resultat->alerte->origines as $origine)
      <div class="container-fluid origine bg-otojaune d-flex flex-row " >
        <div class="col-10">
          {{ Form::label($resultat->id."_".$origine->id, $origine->question)}}
        </div>
        <div style="margin:auto">
          {{ Form::checkbox($resultat->id."_".$origine->id)}}
        </div>
      </div>
      @endforeach
    </div>
  @endforeach
  {{Form::submit('Enregistrer et retour', ['class' => 'btn btn-otobleu btn-sm grands-boutons coupe'])}}
  <a href="{{URL::previous()}}" class="btn btn-otorange btn-sm grands-boutons coupe">Revenir aux observations</a>
</div>
  {{Form::close()}}
@endsection
