@extends('layouts.app')

@extends('menus.sousmenu')

@section('contenu')

<div class="erreur">
<a href="{{route('accueil')}}" class="alert-link">
  <div class="alert alert-warning d-flex" role="alert">
      <div class="element-centre">
        <img src="{{URL::asset('svg')}}/deconnecte.svg" alt="deconnecte" class="otoveil" />
      </div class="element-centre">
      <div>
        <h5>Désolé mais la session a expiré...</h5>
        <h6>Vous devez vous reconnecter</h6>
      </div>
  </div>
</a>
</div>

@endsection
