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
      <div class="alert alert-secondary">
        <h5>{{$theme->nom}}</h5>
      </div>
    @elseif($i < 3)
      <div id="alert_{{$theme->id}}" class="deplie alert alert-warning d-flex flex-row justify-content-between">
        <h5>{{$theme->nom}}</h5>
        <img class="otoveil" src="{{URL::asset('svg/saisie')}}/deplie.svg" alt="deplie" />
      </div>
      <div  id="origine_{{$theme->id}}" class="non-affiche">
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
                <span class="font-weight-bold">{{$sAlerte->valeur}} {{$sAlerte->alerte->unite}}</span>
              </p>
              <p>
              ( < {{$sAlerte->alerte->niveau}} {{$sAlerte->alerte->unite}})
              </p>
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
              <span class="font-weight-bold">{{$sAlerte->valeur}} {{$sAlerte->alerte->unite}}</span>
            </p>
            <p>
            ( < {{$sAlerte->alerte->niveau}} {{$sAlerte->alerte->unite}})
            </p>
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>

    @endif
  @endforeach

</div>
@endsection
