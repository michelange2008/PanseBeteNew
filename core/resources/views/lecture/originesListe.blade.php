@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_origines', ['page' => $page])

@section('contenu')
<div class="container-fluid">
  <div class="bg-otorange titre rounded-0" style="width:100%">
    <img src="{{URL::asset(config('fichiers.saisie'))}}/check.svg" alt="case cochée" class="">
    <h5>Questions cochées</h5>
  </div>

  <div id="nestable2" class="dd">
      <ol class="dd-list">
        @foreach($sorigines as $sorigine)
          <li class="dd-item" data-id="{{$sorigine->id}}">
            <div class="dd-handle d-flex flex-row">
              <img src="{{URL::asset('svg/saisie'."/".$sorigine->salerte->alerte->theme->icone)}}" alt="-" class="img-handle">
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

@push('css')
<link href="{{asset('css/nestable.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/scroll.css')}}" rel="stylesheet" type="text/css">
@endpush

<script>

</script>
