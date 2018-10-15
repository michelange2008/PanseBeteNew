@extends('layouts.app')


@extends('menus.menuprincipal')

@section('contenu')

<div class="container-fluid" >
  <div class="d-flex justify-content-between" style="margin-bottom:10px">
<h5>ACCUEIL</h5>
   <a href="{{route('instructions')}}" class="btn btn-sm btn-secondary text-light rouded-0">
     <img src="{{URL::asset('svg')}}/instructions.svg" style="height:26px" alt="mode d'emploi" title = "mode d'emploi" />
     Mode d'emploi
   </a>
</div>
<div>
  @foreach($especes as $espece)
  <div class="espece-item bg-light">
    <img src="{{URL::asset('svg/especes')."/".$espece->icone}}" alt="{{$espece->nom}}" />
    @if($espece->fini)
      <a href="{{route('lecture.liste', ['espece_id' => $espece->id])}}" class="btn btn-light font-weight-bold">{{$espece->nom}}</a>
    @else
      <button id="{{$espece->nom}}" class="choix btn btn-light">{{$espece->nom}}</button>
    @endif
  </div>
  @endforeach()

</div>

</div>
@endsection()
