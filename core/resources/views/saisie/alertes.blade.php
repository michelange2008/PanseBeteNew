@extends('layouts.app')

@extends('menus.sousmenu')

@section('contenu')
<div class="container-fluid bg-success titre">
  <img src="{{URL::asset('svg/saisie')."/".session()->get('theme')->icone}}" alt="{{session()->get('theme')->nom}}" class="">
  <h5>{{ucfirst(session()->get('theme')->nom)}}</h5>
</div>

<div class="container-fluid">
  {{Form::open(['route' => 'saisie.enregistre'])}}
  @foreach($alertes as $alerte)

  <div class="affiche alerte-item">
    <p>{{$alerte->nom}}</p>
    <div>
      @if($alerte->type = "liste" && $alerte->critalertes->count() > 0)
      <?php // construction du tableau pour la liste déroulante
        $liste = [];
        foreach($alerte->critalertes as $crit){
          $liste[] = $crit->nom;
        }
       ?>
        {{Form::select('alerte_'.$alerte->id, $liste)}}
      @else()
      <input name="alerte_{{$alerte->id}}" type="number" placeholder="0" class="zone-saisie" />
        {{Form::label('alerte_'.$alerte->id, $alerte->unite)}}

      @endif()
    </div>

  </div>

  @endforeach()

  {{Form::submit('envoyer', ['class' => 'btn btn-success btn-sm'])}}

  {{Form::close()}}
</div>

@endsection()
