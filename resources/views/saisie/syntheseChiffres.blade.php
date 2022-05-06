
@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_alertes')

@extends('menus.menulateral')

@section('contenu')


  <div class="container-fluid">

    <div class="row justify-content-center">

      <div class="col-md-10">

        @include('fragments.flash')

      </div>

    </div>

    <div class="row justify-content-center">

      <div class="col-sm-11 col-md-10 col-lg-9">

          <table class="table">

            <thead>
              <tr>
                <th><h3>@lang('titres.d_chiffrees')</h3></th>
                <th class="text-end">Vos parametres</th>
                <th class="text-end">Seuils d'alerte</th>
              </tr>
            </thead>

            @foreach ($sindicateurs_groupes as $noms_theme => $sindicateurs)

            <tbody>
              <tr>
                <td colspan="3" class="bg-gris-trans">
                  <h5>{{ ucfirst($noms_theme) }}</h5>
                </td>

              </tr>

              @foreach ($sindicateurs as $sindicateur)

                <tr>
                  <td>{{ $sindicateur->nom_alerte }}</td>

                    {{-- on affiche d'une couleur différente selon si les indicateurs dépassent les alertes --}}
                    @if ($sindicateur->indicateur > $sindicateur->niveau)
                      <td class="text-end bg-otorange ">
                        <strong>
                          {{ $sindicateur->indicateur }} {{ $sindicateur->unite }}
                        </strong>
                    </td>

                    @else
                      <td class="text-end bg-otobleu">
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
