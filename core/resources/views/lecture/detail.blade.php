@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('menus.sousmenu')

@section('contenu')
<div class="container-fluid">

  @foreach($themes as $theme)

  <?php $affiche = true;
  $i = 0;  ?>
    @foreach($saisie->salertes as $sAlerte)
      @if($sAlerte->alerte->theme->id === $theme->id)
      <?php $affiche = false;
        $i++;?>

      @endif
    @endforeach
    @if($affiche)
      <div class="alert alert-success d-flex flex-row justify-content-between">
        <h5>{{$theme->nom}}</h5>
        <img class="otoveil" src="{{URL::asset('svg/saisie')}}/ok.svg" alt="ok" />
      </div>

    @else
      @if($i < 3)
      <div id="alert_{{$theme->id}}" class="alert alert-warning d-flex flex-row justify-content-between">
      @else
      <div id="alert_{{$theme->id}}" class="alert alert-danger d-flex flex-row justify-content-between curseur">
      @endif
      <h5>{{$theme->nom}}</h5>
      <div class="icones">
        <img src="{{URL::asset('svg/saisie')}}/deplie.svg" alt="deplie" class="deplie icone otoveil" title="affiche les alertes" />
      </div>
    </div>

      <div  id="origine_{{$theme->id}}" class="non-affiche">
        @foreach($saisie->salertes as $sAlerte)
        @if($sAlerte->alerte->theme->id === $theme->id)
            <input type="hidden" id="route_{{$sAlerte->id}}" action ="{{route('lecture.observations', $sAlerte->id)}}" />
            <div class="panneau-alerte alert alert-dark bg-darksalmon rounded-0">
              <div class="intitule-alerte">
                <p class="">{{$sAlerte->alerte->nom}}</p>
              </div>
              <div class="element-alerte justify-content-between">
                <div class="d-flex">

                <p>
                  @if($sAlerte->alerte->type === 'liste')
                  <span class="text-danger font-weight-bold">
                    <?php
                      foreach($sAlerte->alerte->critalertes as $crit)
                      {
                        if($crit->valeur == $sAlerte->valeur)
                        echo $crit->nom;
                      }
                   ?>
                 </span>
                  @else
                  <span class="font-weight-bold">{{$sAlerte->valeur}} {{$sAlerte->alerte->unite}}</span>
                  @endif
                </p>
                @if($sAlerte->alerte->type !== 'liste')
                <p>
                &nbsp&nbsp( < {{$sAlerte->alerte->niveau}} {{$sAlerte->alerte->unite}})
                </p>
                @endif
              </div>
                <img id = "icone-origine_{{$saisie->id}}_{{$sAlerte->id}}" src="{{URL::asset('svg/saisie')}}/oeil.svg" alt="origine" class="affiche-origine otoveil curseur" />
            </div>

            </div>

        @endif
        @endforeach
      </div>
        @endif
      @endforeach
    </div>
  <div class="container-fluid d-flex flex-row justify-content-end">
    <a href="{{route('lecture.liste', session()->get('espece'))}}" class="btn btn-otobleu btn-sm rounded-0">Voir toutes les saisies</a>
  </div>
@endsection
