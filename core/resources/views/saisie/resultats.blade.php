@extends('layouts.app')

@extends('menus.sousmenu')

@section('contenu')
<div class="container-fluid bg-success titre">
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
      <div id="alerte_{{$resultat->alerte->id}}" class="alerte-item alert-warning afficher d-flex flex-row justify-content-between curseur">
        <div>
          <p class="font-weight-bold ">{{$resultat->alerte->nom}}</p>
          <p>
            @if($resultat->alerte->type !== 'liste')
            <span class="text-danger font-weight-bold">{{$resultat->valeur}} {{$resultat->alerte->unite}}</span><span class="text-dark">  (
              @if($resultat->alerte->modalites === "inverse")
                >
              @else
                <
              @endif
                 {{$resultat->alerte->niveau}} {{$resultat->alerte->unite}})</span>
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
      <div class="container-fluid origine d-flex flex-row " >
        <div class="col-10">
          {{ Form::label($resultat->id."_".$origine->id, $origine->question)}}
        </div>
        <div>
          {{ Form::checkbox($resultat->id."_".$origine->id)}}
        </div>
      </div>
      @endforeach
    </div>
  @endforeach
  {{Form::submit('Enregistrer et retour', ['class' => 'btn btn-success btn-sm grands-boutons coupe'])}}
  <a href="{{URL::previous()}}" class="btn btn-warning btn-sm grands-boutons coupe">Revenir aux observations</a>
</div>
  {{Form::close()}}
@endsection
