@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide', ['page' => $page])

@section('contenu')

<div class="container-fluid bg-otorange titre">
  <img src="{{URL::asset('svg/saisie')}}/oeil.svg" alt="regard" class="">
  <h5>Pôles d'observation</h5>
</div>

  <div class="container-fluid">
    @foreach($themes as $theme)
    <div class="espece-item theme-item bg-otobleu d-flex flex-row">
      <img src="{{URL::asset('svg/saisie')."/".$theme->icone}}" alt="{{$theme->nom}}" />
      <div class="coupe d-flex justify-content-between" style="flex:1">
        <div class="d-flex flex-column justify-content-center">
          <a href="{{route('saisie.alertes', ['theme_id' => $theme->id])}}" class="btn btn-otobleu">{{ucfirst($theme->nom)}}</a>
        </div>
        @if($saisie->salertes->count() > 0)
        <?php $count = 0 ?>
          @foreach($saisie->salertes as $salerte)
            <?php // TODO: problème de theme non object si reprise de la saisie après abandon ?>
            @if($theme->id === $salerte->alerte->theme->id)
              <?php $count++  ?>
            @endif
          @endforeach()
          @if($count > 0)
          <div class="nb-alertes">
            ({{$count}})
            <?php $count=0 ?>
          </div>
          @endif
        @endif
      </div>
    </div>
    @endforeach
  </div>


<div class="container-fluid d-flex justify-content-end">
  <a href="{{route('lecture.detail', session('saisie_id'))}}" class="btn btn-info rounded-0">J'ai fini et je veux voir la synthèse</a>
</div>
@endsection()
