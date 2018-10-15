@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('menus.sousmenu')

@section('contenu')
<div class="container-fluid">
  <img src="{{URL::asset('/svg')}}/entravaux.svg" alt="en travaux" style="height:70px" />
  <div class="d-flex flex-column justify-content-between" style="margin-left:10px">
    <h4>Désolé mais cette partie n'est pas achevée</h4>
    <p>
      Nous mettons tout en oeuvre pour qu'il vous soit possible de saisir vos infos sur les {{session('espece')->nom}}...
    </p>
    <p>
      Merci de votre compréhension.
    </p>
    <a href="{{route('saisie.accueil')}}" class="btn btn-warning">Retour</a>
  </div>
</div>

@endsection
