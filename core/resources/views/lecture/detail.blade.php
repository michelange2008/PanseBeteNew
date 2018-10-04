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
    @elseif($i < 3)
      <div id="alert_{{$theme->id}}" class="deplie alert alert-warning d-flex flex-row justify-content-between">
        <h5>{{$theme->nom}}</h5>
        <img class="otoveil" src="{{URL::asset('svg/saisie')}}/deplie.svg" alt="deplie" />
      </div>
      <div  id="origine_{{$theme->id}}" class="non-afffiche">
        @foreach($saisie->salertes as $sAlerte)
        @if($sAlerte->alerte->theme->id === $theme->id)
        <div class="container-fluid d-flex flex-row">
          <div class="col-1"></div>
          <div class="alert alert-dark bg-powderblue col-11 d-flex flex-row">
            <div class="col-8">
              <p class="">{{$sAlerte->alerte->nom}}</p>
            </div>
            <div class="col-4 d-flex flex-column align-items-end">
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
              ( < {{$sAlerte->alerte->niveau}} {{$sAlerte->alerte->unite}})
              </p>
              @endif
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    @else
    <div id="alert_{{$theme->id}}" class="deplie alert alert-danger d-flex flex-row justify-content-between curseur">
      <h5>{{$theme->nom}}</h5>
      <img class="otoveil" src="{{URL::asset('svg/saisie')}}/deplie.svg" alt="deplie" />
    </div>
    <div  id="origine_{{$theme->id}}" class="non-affiche">
      @foreach($saisie->salertes as $sAlerte)
      @if($sAlerte->alerte->theme->id === $theme->id)
      <div id="origine_{{$theme->id}}" class="container-fluid d-flew flex-row">
        <div class="col-1">
        </div>
        <div class="alert alert-dark bg-powderblue col-11 d-flex flex-row">
          <div class="col-8">
            <p class="">{{$sAlerte->alerte->nom}}</p>
          </div>
          <div class="col-4 d-flex flex-column align-items-end">
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
            ( < {{$sAlerte->alerte->niveau}} {{$sAlerte->alerte->unite}})
            </p>
            @endif
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>

    @endif
  @endforeach
  <div class="container-fluid d-flex flex-row justify-content-end">
    <a href="{{route('lecture.liste')}}" class="btn btn-success btn-sm rounded-0">Voir toutes les saisies</a>
  </div>
</div>
@endsection
