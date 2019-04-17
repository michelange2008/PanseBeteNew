@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_origines')

@section('contenu')
<div class="container-fluid">
  <div class="alert alert-success">
    <h3 class="text-truncate">{{$saisie->elevage->nom}} <small>({{$saisie->created_at->month}} {{$saisie->created_at->locale('fr')->monthName}} {{$saisie->created_at->year}})</small></h3>
  </div>
  <div class="bg-otorange titre rounded-0" style="width:100%">
    <img src="{{URL::asset(config('chemins.saisie'))}}/check.svg" alt="case cochée" class="">
    <h5>Questions cochées</h5>
  </div>

  <div id="nestable2" class="dd">
      <ol class="dd-list">
        @foreach($sorigines as $sorigine)
          <li class="dd-item" data-id="{{$sorigine->id}}">
            <div class="dd-handle d-flex flex-row">
              <img src="{{asset(config('chemins.saisie')."/".$sorigine->salerte->alerte->theme->icone)}}" alt="-" class="img-handle">
              <p class="text-handle">
                {{ucfirst($sorigine->origine->reponse)}}
              </p>

            </div>
          </li>
        @endforeach
      </ol>
  </div>
  <div class="d-flex flex-row justify-content-end">
    <a href="{{URL::previous()}}" class="btn btn-otobleu rounded-0">Retour</a>
  </div>
</div>

<canvas id="scroll"></canvas>
@endsection

<script>

</script>
