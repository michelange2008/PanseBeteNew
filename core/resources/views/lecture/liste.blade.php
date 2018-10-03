@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('menus.sousmenu')

@section('contenu')
<div class="container-fluid">

@foreach($liste as $saisie)
  <div class="alert alert-dark">
    <div>
      <h5>Saisie du {{$saisie->created_at->day}}/{{$saisie->created_at->month}}/{{$saisie->created_at->year}}</h5>
      @if($saisie->salertes->count() === 0)
        <p>
            Il n'y avait aucune alerte
        </p>
        @else
      <p>
        Nombre d'alertes: {{$saisie->salertes->count()}}
      </p>
      @endif
    </div>
    <div class="d-flex flex-row justify-content-between">
      @if($saisie->salertes->count() > 0)
      <a href="{{route('lecture.detail', $saisie->id)}}" class="btn btn-sm btn-success rounded-0">Voir</a>
      @endif
      <a id="supprime" href="{{route('lecture.supprimer', $saisie->id)}}" class="justify-self-end btn btn-sm btn-danger rounded-0">Supprimer</a>
    </div>
  </div>

@endforeach

</div>
@endsection
