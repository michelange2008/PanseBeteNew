@extends('layouts.app')

@section('contenu')
  <div class="acces">
    <div class="acces-logo">
      <img src="{{config('chemins.images')}}otoveil.jpeg" alt="Panse-Bêtes" class="img-rounded center-block" />

    </div>

    <div class="acces-entete">
      <h2 class="">Panse bête...</h2>
      <p class="align-items-end">
        Viser l’équilibre de santé de mon troupeau
      </p>
      </h3>
      <div class="commencer d-flex justify-content-center">
        <a href="{{route('accueil')}}">
          <button class="btn  btn-otobleu btn-lg rounded-0">Commencer</button>
        </a>
      </div>
    </div>
</div>
@endsection
