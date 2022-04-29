
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

      <div class="col-md-10">


          <table class="table">
            <thead>
              <tr>
                <th></th>
                <th class="text-end">Vos parametres</th>
                <th class="text-end">Seuils d'alerte</th>
              </tr>
            </thead>
            @foreach ($sindicateurs_groupes as $noms_theme => $sindicateurs)

            <tbody>
              <tr>
                <td colspan="3" class="bg-light">
                  <h5>{{ ucfirst($noms_theme) }}</h5>
                </td>

              </tr>
              @foreach ($sindicateurs as $sindicateur)
                <tr>
                  <td>{{ $sindicateur->nom_alerte }}</td>

                    @if ($sindicateur->indicateur > $sindicateur->niveau)
                      <td class="text-end bg-danger">
                        <strong>
                          {{ $sindicateur->indicateur }} {{ $sindicateur->unite }}
                        </strong>
                    </td>
                    @else
                      <td class="text-end bg-success">
                      {{ $sindicateur->indicateur }} {{ $sindicateur->unite }}
                    </td>
                    @endif

                  <td class="text-end">
                    {{ $sindicateur->niveau }}  {{ $sindicateur->unite }}
                  </td>

                </tr>
              @endforeach
            </tbody>
          @endforeach
          </table>


      </div>

    </div>

  </div>



@endsection
