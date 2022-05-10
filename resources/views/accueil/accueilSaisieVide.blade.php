{{-- Issu de saisieAccueil
Affiche une page d'accueil en cas de saisie jamais remplie = saisie vide--}}
@extends('layouts.app')

@extends('menus.menuprincipal')

@section('sousmenu')

  @include('menus.menuSaisie')

  @section('contenu')

    <div class="container-fluid">

      <div class="row justify-content-center">

        <div class="col-sm-11 col-md-10 col-lg-9">

          <div class="card-group">
            {{-- contenu du fichier saisie_accueil_fini.json --}}
            @foreach ($contenu->items as $item)

              <div class="card mx-3">

                <div class="card-header">

                  <img class="img-75" src="{{ url('storage/img/saisie/'.$item->icone) }}" alt="">

                </div>

                <div class="card-body">

                  <h5 class="card-title">{{ __('saisie.'.$item->titre) }}</h5>
                  <p class="card-text">{{ __('saisie.'.$item->intro_1) }}</p>
                  <p class="card-text">{{ __('saisie.'.$item->intro_2) }}</p>

                </div>

                <div class="card-footer">

                  @vers([
                    'couleur' => $item->couleur,
                    'route' => route($item->route, $saisie->id),
                    'libelle' => __('boutons.commencer'),
                    "fa" => "fa-angles-right",
                  ])

                </div>

              </div>

            @endforeach

          </div>

        </div>

      </div>

    </div>

  @endsection
