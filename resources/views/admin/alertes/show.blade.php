@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')

  <div class="container-fluid">

    <div class="row mt-3 justify-content-center">

      <div class="col-sm-11 col-md-10 col-lg-9">

        @include('fragments.flash')

      </div>

    <div class="col-sm-11 col-md-10 col-lg-9">

        @titre()

      </div>

    </div>

    <div class="row mt-3 justify-content-center">


        <div class="col-sm-11 col-md-10 col-lg-9">

          <img class="img-50 m-3" src="{{ url('storage/img/especes/'.$alerte->espece->icone) }}" alt="">

          <ul class="list-group">

            <li class="list-group-item bg-otorange">

              <div class="d-flex align-items-center">

                <img class="img-50" src="{{ url('storage/img/saisie/'.$alerte->theme->icone) }}" alt="">

                <div class="mx-3">

                  <p>Thème</p>

                  <h5 class="fw-bold">{{ ucfirst($alerte->theme->nom) }}</h5>

                </div>

              </div>


            </li>

            <li class="list-group-item">

              <p>Type</p>

              <p class=fw-bold>{{ ucfirst($alerte->type->nom) }} </p>

            </li>

            <li class="list-group-item">

            @if ($alerte->type->nom == "liste")

              <p>Eléments de la liste:</p>

              <p class="fw-bold">

                @foreach ($alerte->critalertes as $critere)
                  <span @if ($critere->isAlerte)
                    class="text-danger" @else class="text-success"
                  @endif >
                    {{ ucfirst($critere->nom) }}
                  </span>
                  @if (!$loop->last) / @endif

                @endforeach

              </p>

            @else

              <p>Recommandations</p>

              @if ($alerte->numalerte != null && $alerte->numalerte->borne_inf != null)

                <p class="fw-bold">minimum {{ $alerte->numalerte->borne_inf }} {{ $alerte->unite }}</p>

              @endif

              @if ($alerte->numalerte != null && $alerte->numalerte->borne_sup != null)

                <p class="fw-bold">maximum {{ $alerte->numalerte->borne_sup }} {{ $alerte->unite }}</p>

              @endif

            @endif

            </li>

            @if ($alerte->type->nom == "ratio")

              <li class="list-group-item">

                <p>Mode de calcul</p>

                <p class="fw-bold">{{ $alerte->numalerte->num->nom }} / {{ $alerte->numalerte->denom->nom }}</p>

              </li>

            @elseif ($alerte->type->nom == "pourcentage")

              <li class="list-group-item">

                <p>Mode de calcul</p>

                <p class="fw-bold">({{ $alerte->numalerte->num->nom }} / {{ $alerte->numalerte->denom->nom }}) x 100</p>

              </li>

            @endif

            <li class="list-group-item">

              @if ($alerte->actif)

                  <h4><span class="badge bg-success">Activée</span></h4>

              @else

                  <h4><span class="badge bg-danger">Désactivée</span></h4>

              @endif

            </li>

          </ul>

        </div>

    </div>

    <div class="row mt-3 justify-content-center">

      <div class="col-sm-11 col-md-10 col-lg-9 d-flex justify-content-end">

        @edit(['route' => route('alerte.edit', $alerte->id)])

        @annule(['route' => route('alerte.indexParEspece', $alerte->espece->nom)])

      </div>

    </div>

  </div>

@endsection
