@extends('layouts.app')



@section('contenu')
<div class="container-fluid">
  <div class="bg-otorange titre rounded-0" style="width:100%">
    <img src="{{URL::asset('svg/saisie')}}/oeil-blanc.svg" alt="oeil" class="">
    <h5>Questions cochées</h5>
  </div>

  <div id="nestable2" class="dd">
      <ol class="dd-list">
        @foreach($sorigines as $sorigine)
          <li class="dd-item" data-id="{{$sorigine->id}}">
            <div class="dd-handle d-flex flex-row">
              <img src="{{URL::asset('svg/saisie'."/".$sorigine->salerte->alerte->theme->icone)}}" alt="-" class="img-handle">
              <p class="text-handle">
                {{$sorigine->origine->question}}
              </p>

            </div>
          </li>
        @endforeach
      </ol>
  </div>
  <div class="d-flex flex-row justify-content-between">
    <a href="{{route('lecture.liste', session()->get('espece'))}}" class="btn btn-otobleu rounded-0">Retour</a>
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
