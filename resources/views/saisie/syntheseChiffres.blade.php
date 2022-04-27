
@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_alertes')

@extends('menus.sousmenu', [
  'titre' => 'Visualisation des indicateurs chiffres',
  'bouton1' => true,
  'route1' => route('saisie.chiffres', $saisie->id),
  'libelle1' => __('boutons.chiffres'),
  'fa1' => 'fa-angles-left',
  'bouton2' => true,
  'route2' => route('saisie.observations', $saisie->id),
  'libelle2' => __('boutons.observations'),
  'fa2' => 'fa-angles-right',
])

@section('contenu')


  <div class="container-fluid">

    <div class="row justify-content-center">

      <div class="col-md-10">

        @include('fragments.flash')

      </div>

    </div>

    <div class="row justify-content-center">

      <div class="col-md-8">

        @foreach ($salertes_groupees as $noms_theme => $salertes)


          <div class="">
            {{ $noms_theme }}
          </div>
          @foreach ($salertes as $salerte)

            <div class="">
              {{ $salerte->nom_alerte }}
              {{ $salerte->valeur }}
              {{ $salerte->unite }}
            </div>

          @endforeach

        @endforeach

      </div>

    </div>

  </div>



@endsection
