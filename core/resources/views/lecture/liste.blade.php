@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('menus.sousmenu')

@section('contenu')
<div id="user" name="{{Auth()->user()->name}}"></div>
<div class="container-fluid">

  <div class="alert desktop-only" style="padding:0">
    <a id="nouvelleSaisieCarre" href="{{route('saisie.nouvelle', '')}}" class="btn btn-otobleu rounded-0" role="button" title="cliquez pour une nouvelle saisie">
      <h6>nouvelle saisie</h6>
    </a>
  </div>
  <div class="bouton-rond smartphone-only">
    <a id="nouvelleSaisieRond" href="{{route('saisie.nouvelle', '')}}" role="button" title="cliquez pour une nouvelle saisie"></a>
  </div>

  @if($liste->count() === 0)
    <div class="pas-de-saisie alert alert-secondary">
      <div class="arrow arrowUp"></div>
      <p>Il n'y a pas encore de saisie réalisée.<p>
        <p>Vous pouvez faire la première en cliquant sur
          <span class="desktop-only">le bouton <span class="accent">nouvelle&nbspsaisie</span> ci-dessus.</span>
        <span class="smartphone-only"> le bouton <span class="rond">+</span> ci-dessous.</span>
      </p>
      <div class="arrow arrowDown"></div>
    </div>
  @endif

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
    <div class="d-flex flex-row justify-content-between" style="padding-right:20px">
      <div class="d-flex flex-column justify-content-center">
        <a id="supprime_{{$saisie->id}}" href="{{route('lecture.supprimer', $saisie->id)}}" class=" supprime justify-self-end btn btn-sm btn-otorange rounded-0">Suppr.</a>
      </div>
      <div>
        @if($saisie->salertes->count() > 0)
        <a href="{{route('pdf', $saisie->id)}}" class="btn btn-sm rounded-0"><img src="{{URL::asset('/svg/saisie')}}/pdf.svg" alt="pdf" class="otoveil" /></a>
        <a href="{{route('lecture.detail', $saisie->id)}}" class="btn btn-sm btn-otobleu rounded-0">Voir</a>
        @endif
        <a href="{{route('saisie.modifier', $saisie->id)}}" class="btn btn-sm btn-otojaune rounded-0">Modifier</a>
      </div>
    </div>
  </div>
@endforeach

</div>
@endsection
