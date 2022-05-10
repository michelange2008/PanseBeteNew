
@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_alertes')

@extends('menus.menuSaisie')

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
                <th>Seuils d'alerte</th>
                <th class="text-end">Vos parametres</th>
              </tr>
            </thead>

            @foreach ($salertesNum_groupes as $noms_theme => $salertesNum)

            <tbody>
              <tr>
                <td colspan="3" class="bg-gris-trans">
                  <h5>{{ ucfirst($noms_theme) }}</h5>
                </td>

              </tr>

              @foreach ($salertesNum as $salerteNum)

                <tr>
                  <td>
                    @if ($salerteNum->danger) <strong><i class="fa-solid fa-circle-exclamation"></i> @endif

                    {{ $salerteNum->nom_alerte }}
                  </td>

                  <td>
                    @if ($salerteNum->borne_inf != 0)

                      de {{ $salerteNum->borne_inf }} {{ $salerteNum->unite }} à {{ $salerteNum->borne_sup }}  {{ $salerteNum->unite }}

                    @else

                      < {{ $salerteNum->borne_sup }}  {{ $salerteNum->unite }}

                    @endif
                  </td>

                    {{-- on affiche d'une couleur différente selon si les indicateurs dépassent les alertes --}}
                    @if ($salerteNum->danger)
                      <td class="text-end bg-otorange ">
                        <strong>
                          {{ $salerteNum->valeur }} {{ $salerteNum->unite }}
                        </strong>
                      </td>

                    @else
                      <td class="text-end bg-otobleu">

                        {{ $salerteNum->valeur }} {{ $salerteNum->unite }}

                      </td>

                    @endif

                </tr>

              @endforeach

            </tbody>

          @endforeach

        </table>

      </div>

    </div>

  </div>

@endsection
