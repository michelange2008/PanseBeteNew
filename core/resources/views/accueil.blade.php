@extends('layouts.app')


@extends('menus.menuprincipal')

@section('contenu')

<div class="container-fluid" >
<h5>ACCUEIL</h5>
@include('divers.saisiePresentation')
<div>
  @foreach($especes as $espece)
  <div class="espece-item bg-light">
    <img src="{{URL::asset('svg/especes')."/".$espece->icone}}" alt="{{$espece->nom}}" />
    <a href="{{route('choix', ['espece_id' => $espece->id])}}" class="btn btn-light">{{$espece->nom}}</a>
  </div>
  @endforeach()

</div>

</div>
@endsection()
