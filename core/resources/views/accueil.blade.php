@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_accueil', ['page' => $page, 'especes' => $especes])

@section('contenu')

  <div class="container-fluid">
    <div class="alert alert-success">
      <h3>{{auth()->user()->name}}</h3>
    </div>

    <div class="nouvelle-saisie-liste alert desktop-only btn-otobleu" style="padding:0">
      <div class="d-flex flex-column">
        <h6>Nouvelle saisie</h6>
        <p><em>(choisir le type d'élevage)</em></p>
      </div>
      @foreach ($especes as $espece)
          <img src="{{config('chemins.especes').$espece->icone}}"
                id="nouvelle_{{$espece->id}}" name="{{auth()->user()->name}}" class="nouvelle-saisie-item shadow"
                route= "{{url('/')}}"
                alt="{{$espece->nom}}" data-toggle="tooltip" data-placement="top" title="{{$espece->nom}}">
      @endforeach
    </div>
    <div class="menu-rond">
        @foreach ($especes as $espece)
          <img class="menu-item" id="menu-item_{{$espece->id}}"
                name="{{auth()->user()->name}}"
                route= "{{url('/')}}"
                src="{{config('chemins.especes').$espece->icone}}" alt="{{$espece->nom}}">
        @endforeach
      </div>
      <div class="bouton-rond smartphone-only">
      </div>


    @if ($saisies->count() > 0)
      <div>
        @foreach ($saisies as $saisie)
            <div class="alert alert-secondary">
              <div class="d-flex flex-row align-items-start">
                <img src="{{config('chemins.especes').$saisie->espece->icone}}" alt="">
                <div class="saisie-info d-flex flex-column">
                  <h5 class="attention">{{$saisie->elevage->nom}}</h5>
                  <p><em>({{$saisie->created_at->day}} {{$saisie->created_at->locale('fr')->monthName}} {{$saisie->created_at->year}})</em>
                  @if ($saisie->salertes->count() === 0)
                    Pas d'alerte</p>
                  @elseif ($saisie->salertes->count() === 1)
                    <strong>{{$saisie->salertes->count()}} alerte</strong>
                  @else
                    <strong>{{$saisie->salertes->count()}} alertes</strong>
                  @endif
                </div>
              </div>
              <div class="d-flex flex-row justify-content-between" style="padding-right:20px">
                <div class="d-flex flex-column justify-content-center">
                  <a id="supprime_{{$saisie->id}}" href="{{route('lecture.supprimer', $saisie->id)}}" class=" supprime justify-self-end btn btn-sm btn-otorange rounded-0"><i class="far fa-trash-alt"></i> Suppr.</a>
                </div>
                <div>
                  @if($saisie->salertes->count() > 0)
                  <a href="{{route('pdf', $saisie->id)}}" class="btn btn-sm rounded-0"><img src="{{config('chemins.saisie')}}pdf.svg" alt="pdf" class="otoveil" /></a>
                  <a href="{{route('lecture.detail', $saisie->id)}}" class="btn btn-sm btn-otobleu rounded-0"><i class="far fa-eye"></i> Voir</a>
                  @endif
                  <a href="{{route('saisie.modifierBis', $saisie->id)}}" class="btn btn-sm btn-otojaune rounded-0"><i class="fa fa-pencil-alt"></i> Modifier</a>
                </div>
              </div>
          </div>
        @endforeach
      </div>
  @else
    <div class="pas-de-saisie alert alert-secondary">
      <div class="arrow arrowUp"></div>
      <h3>Il n'y a pas encore de saisie réalisée.</h3>
      <p></p>
        <p class="desktop-only">Vous pouvez faire la première en cliquant sur une des icones correspondant à votre type de troupeau ci-dessus.</p>
        <p class="smartphone-only">Vous pouvez faire la première en cliquant sur le bouton&nbsp
            <img class="aide-icones-petite" src="{{config('chemins.images')}}plus_rond_bord_blanc.svg" alt="plus">  ci-dessous.</span>
      </p>
      <p>A tout moment, vous pourrez trouver une aide contextuelle en cliquant sur l'icone&nbsp
      <img class="aide-icones-petite" src="{{config('chemins.images')}}aide.svg" alt=""> </p>
      <p></p>
      <div class="arrow arrowDown"></div>
    </div>
  @endif
  </div>


@endsection
