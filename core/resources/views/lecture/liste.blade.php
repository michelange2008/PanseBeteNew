@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('menus.sousmenu')

@section('contenu')
<div class="container-fluid">

  <div class="alert" style="padding:0">
    <div id="user" name="{{Auth()->user()->name}}"></div>
    <a id="nouvelleSaisie" href="{{route('saisie.nouvelle', '')}}" class="btn btn-lg bg-otobleu rounded-0 text-light">
          <h6>nouvelle saisie</h6>
    </a>
  </div>

@foreach($liste as $saisie)
  <div class="alert alert-dark">
    <div>
      <h5>
        {{ $saisie->elevage->nom }}
        <span style="font-size:0.8rem">(saisie du {{$saisie->created_at->day}}/{{$saisie->created_at->month}}/{{$saisie->created_at->year}})</span>
      </h5>
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
      <div class="d-flex flex-column justify-content-center">
        <a id="supprime_{{$saisie->id}}" href="{{route('lecture.supprimer', $saisie->id)}}" class=" supprime justify-self-end btn btn-sm btn-danger rounded-0">Supprimer</a>
      </div>
      @if($saisie->salertes->count() > 0)
      <div>
        <a href="{{route('saisie.modifier', $saisie->id)}}" class="btn btn-sm btn-warning rounded-0">Modifier</a>
        <a href="{{route('lecture.detail', $saisie->id)}}" class="btn btn-sm btn-success rounded-0">Voir</a>
        <a href="{{route('pdf', $saisie->id)}}" class="btn btn-sm rounded-0"><img src="{{URL::asset('/svg/saisie')}}/pdf.svg" alt="pdf" class="otoveil" /></a>
      </div>
      @endif
    </div>
  </div>

@endforeach

</div>
@endsection
