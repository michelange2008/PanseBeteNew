@extends('layouts.app')

@extends('menus.menuprincipal')

@section('sousmenu')

  @include('menus.menulateral')

@section('contenu')

  <div class="container-fluid">

        @if ($saisie->salertes->count() == 0)

          @include('accueil.accueilSaisieVide')

        @else

            @include('accueil.accueilSaisiePleine')

        @endif

  </div>

@endsection
